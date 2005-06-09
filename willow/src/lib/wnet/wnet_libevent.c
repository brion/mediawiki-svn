/* @(#) $Header$ */
/* This source code is in the public domain. */
/*
 * Willow: Lightweight HTTP reverse-proxy.
 * wnet: Networking.
 */

#if defined __SUNPRO_C || defined __DECC || defined __HP_cc
# pragma ident "@(#)$Header$"
#endif

#define _XOPEN_SOURCE 600
#define _XOPEN_SOURCE_EXTENDED
#define _GNU_SOURCE

#include <sys/types.h>
#include <sys/socket.h>
#include <sys/time.h>

#include <arpa/inet.h>

#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <unistd.h>
#include <errno.h>
#include <assert.h>
#include <fcntl.h>
#include <signal.h>
#include <event.h>

#include "willow.h"
#include "wnet.h"
#include "wconfig.h"
#include "wlog.h"
#include "whttp.h"

struct event ev_sigint;

static void fde_ev_callback(int, short, void *);

void sig_exit(int, short, void *);
void sig_exit(sig, what, d)
	int sig;
	short what;
	void *d;
{
	exit(0);
}

void
wnet_init_select(void)
{
	int	 i;

	signal(SIGPIPE, SIG_IGN);
	if (event_init() < 0) {
		perror("event_init");
		exit(8);
	}

	signal_set(&ev_sigint, SIGINT, sig_exit, NULL);
	signal_add(&ev_sigint, NULL);
}

void
wnet_run(void)
{
	event_dispatch();
	perror("event_dispatch");
}

static void
fde_ev_callback(fd, ev, d)
	int fd;
	short ev;
	void *d;
{
struct	fde	*fde = d;

	if (ev & EV_READ && fde->fde_read_handler)
		fde->fde_read_handler(fde);
	if (ev & EV_WRITE && fde->fde_write_handler)
		fde->fde_write_handler(fde);
	if ((fde->fde_read_handler || fde->fde_write_handler) && !fde->fde_flags.held)
		event_add(&fde->fde_ev, NULL);
}

void
wnet_register(fd, what, handler, data)
	fdcb handler;
	void *data;
{
struct	fde	*fde = &fde_table[fd];
	int	 ev_flags = 0;

	fde->fde_fd = fd;

	if (fde->fde_flags.held)
		return;

	if (what & FDE_READ) {
		fde->fde_read_handler = handler;
		ev_flags |= EV_READ;
	}
	if (what & FDE_WRITE) {
		ev_flags |= EV_WRITE;
		fde->fde_write_handler = handler;
	}

	if (handler == NULL) {
		event_del(&fde->fde_ev);
		return;
	}

	if (data)
		fde->fde_rdata = data;

	/*ev_flags |= EV_PERSIST;*/
	event_set(&fde->fde_ev, fde->fde_fd, ev_flags, fde_ev_callback, fde);
	event_add(&fde->fde_ev, NULL);
}
