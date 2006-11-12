/* @(#) $Id$ */
/* This source code is in the public domain. */
/*
 * Willow: Lightweight HTTP reverse-proxy.
 * ptalloc: Fast power-of-two allocator.
 */

#ifndef PTALLOC_H
#define PTALLOC_H

#if defined __SUNPRO_C || defined __DECC || defined __HP_cc
# pragma ident "@(#)$Id$"
#endif

#include <string>
#include <sstream>

#include "flalloc.h"

/*
 * A fast, thread-specific power of two allocator.  Backended by
 * new[].
 */
struct pta_block : freelist_allocator<pta_block> {
	struct pta_block *next;
	void *addr;
};

template<typename T>
struct pt_allocator {
	typedef T			 value_type;
	typedef value_type		*pointer;
	typedef value_type const	*const_pointer;
	typedef value_type		&reference;
	typedef value_type const	&const_reference;
	typedef size_t			 size_type;
	typedef ptrdiff_t		 difference_type;

	pointer address (reference x) const {
		return &x;
	}

	const_pointer address(const_reference x) const {
		return &x;
	}

	pointer allocate(size_type n, const_pointer = 0) {
	size_t			 sz = sizeof(T) * n;
	int			 exp = (int) log2(sz) + 1;
	void			*ret;
		if (!freelist)
			freelist = new vector<pta_block *>;
	vector<pta_block *>	&fl = *freelist;

		/* do we have a free block of this size? */
		if (exp < (int) fl.size() && fl[exp]) {
		pta_block	*ptb = fl[exp];
			fl[exp] = ptb->next;
			ret = ptb->addr;
			delete ptb;
			return (pointer) ret;
		}
		/* no, need a new block */
		ret = new char[(int) pow(2, exp)];
		return (pointer) ret;		
	}

	void deallocate(pointer p, size_type n) {
	size_t			 sz = sizeof(T) * n;
	int			 exp = (int) log2(sz) + 1;
	vector<pta_block *>	&fl = *freelist;
	pta_block		*ptb = new pta_block;

		if ((int)fl.size() <= exp)
			fl.resize(exp + 1);
		ptb->addr = p;
		ptb->next = fl[exp];
		fl[exp] = ptb;
		
	}

	size_type max_size(void) const {
		return static_cast<size_type>(-1) / sizeof(T);
	}

	void construct(pointer p, const value_type &x) {
		new (p) value_type(x);
	}

	void destroy(pointer p) {
		p->~value_type();
	}

	pt_allocator (void) {}
	~pt_allocator (void) {}

	template<typename U>
	pt_allocator (const pt_allocator<U>& other) {}

	template<typename U>
	struct rebind {
		typedef pt_allocator<U> other;
	};

	bool operator== (pt_allocator const &other) const {
		return true;
	}

	static tss<vector<pta_block *> >	freelist;
};

template<typename T>
tss<vector<pta_block *> > pt_allocator<T>::freelist;

template<>
struct pt_allocator<void>
{
	typedef void		 value_type;
	typedef void		*pointer;
	typedef void const	*const_pointer;

	template<typename U>
	struct rebind {
		typedef pt_allocator<U>	other;
	};
};

typedef std::basic_string<char, char_traits<char>, pt_allocator<char> > ptstring;
typedef ptstring string;
typedef std::basic_stringstream<char, std::char_traits<char>, pt_allocator<char > >
	stringstream;
typedef std::basic_ostringstream<char, std::char_traits<char>, pt_allocator<char > >
	ostringstream;
typedef std::basic_istringstream<char, std::char_traits<char>, pt_allocator<char > >
	istringstream;

#endif
