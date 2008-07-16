/*
 * IPVS:        Weighted Consistent Source Hashing scheduling module
 *
 * Version:     $Id$
 *
 * Authors:     Mark Bergsma <mark@nedworks.org>
 *
 *              This program is free software; you can redistribute it and/or
 *              modify it under the terms of the GNU General Public License
 *              as published by the Free Software Foundation; either version
 *              2 of the License, or (at your option) any later version.
 *
 * Changes:
 *
 */

/*
 * The wcsh algorithm uses a consistent hashing scheme that is similar to the
 * one used in e.g. libketama and some DHTs: each destination address is
 * hashed one or more times and placed on a circle (the continuum) which
 * represents a 16 bit integer space. A new connection's source IP address
 * is hashed, and the smallest destination hash greater than or equal to the
 * source address hash is selected. If the selected server is unavailable
 * (down, overloaded) then the next is tried, and so on.
 * 
 * Destination load weighting is implemented by placing a number of points on
 * the continuum that is a multiple of the destination weight value: the
 * higher the weight, the more points on the continuum, and the higher the
 * probability that this destination is selected if the source IP address
 * and destination addresse hashes are uniformly distributed over the circle.
 * 
 */ 

#include <linux/module.h>
#include <linux/kernel.h>
#include <linux/ip.h>
#include <linux/jhash.h>
#include <linux/sort.h>

#include <net/ip_vs.h>

/*
 *     Continuum size
 */
#ifndef CONFIG_IP_VS_WCSH_CONT_BITS
#define CONFIG_IP_VS_WCSH_CONT_BITS		16
#endif
#define IP_VS_WCSH_CONT_BITS			CONFIG_IP_VS_WCSH_CONT_BITS
#define IP_VS_WCSH_CONT_SIZE			(1 << IP_VS_WCSH_CONT_BITS)
#define IP_VS_WCSH_CONT_MASK			(IP_VS_WCSH_CONT_SIZE - 1)

struct ip_vs_wcsh_dest_point {
	__u32	value;					/* point value */
	struct ip_vs_dest	*dest;		/* destination server */
};

struct ip_vs_wcsh_data {
	struct ip_vs_wcsh_dest_point	*continuum;	/* continuum array */
	int 							pointcount;
};

/*
 *	Returns a hash value for a host order IPv4 address
 */
static inline unsigned ip_vs_wcsh_hashkey(const unsigned addr)
{
	return jhash_1word(addr, 0);
}

static int ip_vs_wcsh_alloc_continuum(struct ip_vs_wcsh_data *sched_data, const struct ip_vs_service *svc)
{
	struct ip_vs_dest *dest;
	
	/* 
	 * Determine how many points the continuum will consist off,
	 * the sum of all destination weights
	 */
	sched_data->pointcount = 0;
	list_for_each_entry(dest, &svc->destinations, n_list) {
		sched_data->pointcount += atomic_read(&dest->weight);
	}
	
	/* Allocate memory for the continuum */
	sched_data->continuum = kmalloc(sizeof(struct ip_vs_wcsh_dest_point)*sched_data->pointcount, GFP_ATOMIC);
	if (sched_data->continuum == NULL) {
		IP_VS_ERR("ip_vs_wcsh_create_continuum(): no memory\n");
		sched_data->pointcount = 0;
		return -ENOMEM;
	}
	IP_VS_DBG(2, "[wcsh] Created continuum of %d points, "
			"using %Zd bytes of memory\n", sched_data->pointcount,
			sizeof(struct ip_vs_wcsh_dest_point)*sched_data->pointcount);

	return 0;
}

static inline int ip_vs_wcsh_cmp_point(const void *va, const void *vb)
{
	const struct ip_vs_wcsh_dest_point *a = va, *b = vb;
	
	return (a->value < b->value) ? -1 : ((a->value > b->value) ? 1 : 0);
}

/*
 * Create the continuum by hashing each server multiple times
 * (determined by weight) onto the circle
 */
static void ip_vs_wcsh_create_continuum(const struct ip_vs_wcsh_data *sched_data, const struct ip_vs_service *svc)
{
	struct ip_vs_wcsh_dest_point *point;
	struct ip_vs_dest *dest;
	
	if (svc->num_dests == 0)
		return;
	
	point = sched_data->continuum;
	
	list_for_each_entry(dest, &svc->destinations, n_list) {
		unsigned hashkey;
		int weight, i;
		
		/* Hash this destination n times, where n = dest->weight */
		weight = atomic_read(&dest->weight);
		hashkey = ntohl(dest->addr);
		for (i=0; i < weight; i++) {
			hashkey = ip_vs_wcsh_hashkey(hashkey);
			
			point->value = hashkey & IP_VS_WCSH_CONT_MASK;
			atomic_inc(&dest->refcnt);
			point->dest = dest;
			
			IP_VS_DBG(6, "[wcsh] Continuum point %d created for server %u.%u.%u.%u:%d [%u]\n",
					i, NIPQUAD(dest->addr), ntohs(dest->port), point->value);
			
			point++;
		}
	}
	
	/* Sort the created continuum array on ascending value */
	sort(sched_data->continuum,
			sched_data->pointcount,
			sizeof(struct ip_vs_wcsh_dest_point),
			ip_vs_wcsh_cmp_point,
			NULL);
}

static void ip_vs_wcsh_flush_continuum(struct ip_vs_wcsh_data *sched_data)
{
	struct ip_vs_wcsh_dest_point *point;
	
	if (sched_data->pointcount == 0 || sched_data->continuum == NULL)
		return;
	
	for (point = sched_data->continuum; point != &sched_data->continuum[sched_data->pointcount]; point++) {
		atomic_dec(&point->dest->refcnt);
		point->dest = NULL;
	}
	
	sched_data->pointcount = 0;
	kfree(sched_data->continuum);
	sched_data->continuum = NULL;
}

static int ip_vs_wcsh_init_svc(struct ip_vs_service *svc)
{
	struct ip_vs_wcsh_data *sched_data;
	
	sched_data = kmalloc(sizeof(struct ip_vs_wcsh_data), GFP_ATOMIC);
	if (sched_data == NULL) {
		IP_VS_ERR("ip_vs_wcsh_init_svc(): no memory\n");
		return -ENOMEM;	
	}
	svc->sched_data = sched_data;

	sched_data->continuum = NULL;
	sched_data->pointcount = 0;
	
	if (svc->num_dests > 0) {
		int res = ip_vs_wcsh_alloc_continuum(sched_data, svc);
		if (res < 0)
			return res;
		ip_vs_wcsh_create_continuum(sched_data, svc);
	}
	
	IP_VS_DBG(6, "[wcsh] Scheduler initialized\n");
	return 0;
}

static int ip_vs_wcsh_done_svc(struct ip_vs_service *svc)
{	
	ip_vs_wcsh_flush_continuum(svc->sched_data);
	kfree(svc->sched_data);
	
	IP_VS_DBG(6, "[wcsh] Scheduler cleanup done\n");
	return 0;
}

static int ip_vs_wcsh_update_svc(struct ip_vs_service *svc)
{
	struct ip_vs_wcsh_data *sched_data = svc->sched_data;	
	
	ip_vs_wcsh_flush_continuum(sched_data);
	if (svc->num_dests > 0) {
		int res = ip_vs_wcsh_alloc_continuum(sched_data, svc);
		if (res < 0)
			return res;
		ip_vs_wcsh_create_continuum(sched_data, svc);
	}
	
	IP_VS_DBG(6, "[wcsh] Service updated\n");
	return 0;
}

/*
 *      Source Hashing scheduling
 */
static inline int ip_vs_wcsh_is_feasible(const struct ip_vs_dest *dest) {
	return dest
		&& (dest->flags & IP_VS_DEST_F_AVAILABLE)
		&& !(dest->flags & IP_VS_DEST_F_OVERLOAD);
}

static struct ip_vs_wcsh_dest_point *
ip_vs_wcsh_get_nearest_point(const unsigned hashkey, const struct ip_vs_wcsh_data *sched_data)
{
	struct ip_vs_wcsh_dest_point *point;

	if (unlikely(sched_data->pointcount == 0))
		return NULL;
	
	/* linear search */	
	for(point = sched_data->continuum; point != &sched_data->continuum[sched_data->pointcount]; point++) {
		IP_VS_DBG(6, "[wcsh] Evaluating destination %u.%u.%u.%u:%d [%u]\n",
				NIPQUAD(point->dest->addr), ntohs(point->dest->port), point->value);
		if (unlikely(hashkey <= point->value))
			return point;
	}
	
	/* hashkey is bigger than all point values, so wrap around and return the lowest value */
	return sched_data->continuum;
}

static struct ip_vs_wcsh_dest_point *
ip_vs_wcsh_get_feasible_dest(struct ip_vs_wcsh_dest_point *start, const struct ip_vs_wcsh_data *sched_data, int (*feasible)(const struct ip_vs_dest*))
{
	struct ip_vs_wcsh_dest_point *point = start;
	
	if (unlikely(sched_data->pointcount == 0))
		return NULL;
	
	/* linear search */
	while (1) {
		for ( ; point != &sched_data->continuum[sched_data->pointcount]; point++) {
			IP_VS_DBG(6, "[wcsh] Evaluating feasibility of server %u.%u.%u.%u:%d [%u]: %d\n",
					NIPQUAD(point->dest->addr), ntohs(point->dest->port), point->value,
					(*feasible)(point->dest));
			if (likely((*feasible)(point->dest)))
				return point;
			else if (point+1 == start)
				return NULL;	/* No feasible servers available */
		}
		/* Start over from the beginning of the array */
		point = sched_data->continuum;
	}
}

static struct ip_vs_dest *
ip_vs_wcsh_schedule(struct ip_vs_service *svc, const struct sk_buff *skb)
{
	struct ip_vs_wcsh_dest_point *point;
	struct iphdr *iph = ip_hdr(skb);
	struct ip_vs_wcsh_data *sched_data = svc->sched_data;
	unsigned hashkey;
	
	hashkey = ip_vs_wcsh_hashkey(ntohl(iph->saddr)) & IP_VS_WCSH_CONT_MASK;

	/* Find the nearest server point with a hash value bigger than or equal to hashkey */ 
	point = ip_vs_wcsh_get_nearest_point(hashkey, sched_data);
	if (unlikely(point == NULL))
		return NULL;
	
	/* Find the nearest feasible destination */
	point = ip_vs_wcsh_get_feasible_dest(point, sched_data, ip_vs_wcsh_is_feasible);
	if (unlikely(point == NULL))
		return NULL;
	
	IP_VS_DBG(6, "[wcsh] Source IP address %u.%u.%u.%u [%u] "
		  "--> server %u.%u.%u.%u:%d [%u]\n",
		  NIPQUAD(iph->saddr), hashkey,
		  NIPQUAD(point->dest->addr), ntohs(point->dest->port), point->value);
	
	return point->dest;
}

/*
 *      IPVS WCSH Scheduler structure
 */
static struct ip_vs_scheduler ip_vs_wcsh_scheduler =
{
	.name =			"wcsh",
	.refcnt =		ATOMIC_INIT(0),
	.module =		THIS_MODULE,
	.init_service =		ip_vs_wcsh_init_svc,
	.done_service =		ip_vs_wcsh_done_svc,
	.update_service =	ip_vs_wcsh_update_svc,
	.schedule =		ip_vs_wcsh_schedule,
};

static int __init ip_vs_wcsh_init(void)
{
	INIT_LIST_HEAD(&ip_vs_wcsh_scheduler.n_list);
	return register_ip_vs_scheduler(&ip_vs_wcsh_scheduler);
}

static void __exit ip_vs_wcsh_cleanup(void)
{
	unregister_ip_vs_scheduler(&ip_vs_wcsh_scheduler);
}

module_init(ip_vs_wcsh_init);
module_exit(ip_vs_wcsh_cleanup);
MODULE_LICENSE("GPL");
