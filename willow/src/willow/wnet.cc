/* @(#) $Id$ */
/* This source code is in the public domain. */
/*
 * Willow: Lightweight HTTP reverse-proxy.
 * wnet: Networking.
 */

#if defined __SUNPRO_C || defined __DECC || defined __HP_cc
# pragma ident "@(#)$Id$"
#endif

#include <sys/types.h>
#include <sys/socket.h>

#include "config.h"
#ifdef HAVE_SYS_SENDFILE_H
# include <sys/sendfile.h>
#endif

#include <arpa/inet.h>

#include <cstdio>
#include <cstring>
#include <cstdlib>
#include <cerrno>
#include <csignal>
#include <cassert>
#include <ctime>
#include <deque>
using std::deque;

#include <unistd.h>
#include <fcntl.h>

#include "willow.h"
#include "wnet.h"
#include "wconfig.h"
#include "wlog.h"
#include "whttp.h"

#define RDBUF_INC	8192	/* buffer in 8 KiB incrs		*/

struct event ev_sigint;
struct event ev_sigterm;
tss<event_base> evb;

static void sig_exit(int, short, void *);

ioloop_t *ioloop;

struct wrtbuf : freelist_allocator<wrtbuf> {
	/* for buffers only */
const	void	*wb_buf;
	/* for sendfile only */
	off_t	 wb_off;
	int	 wb_source;
	/* for buffers & sendfile */
	size_t	 wb_size;
	int	 wb_done;
	polycallback<fde *, int> wb_func;
	void	*wb_udata;
};

char current_time_str[30];
char current_time_short[30];
time_t current_time;

static void secondly_sched(void);

int wnet_exit;
vector<wsocket *>	awaks;
int			cawak;

void
wnet_add_accept_wakeup(wsocket *s)
{
	awaks.push_back(s);
}

event	secondly_ev;
timeval	secondly_tv;

static void
secondly_update(int, short, void *)
{
	wnet_set_time();
	secondly_sched();
}

static void
secondly_sched(void)
{
	secondly_tv.tv_usec = 0;
	secondly_tv.tv_sec = 1;
	evtimer_set(&secondly_ev, secondly_update, NULL);
	event_base_set(evb, &secondly_ev);
	event_add(&secondly_ev, &secondly_tv);
}

ioloop_t::ioloop_t(void)
{
	prepare();
}

void
ioloop_t::prepare(void)
{
size_t	 i;

	wlog(WLOG_NOTICE, "maximum number of open files: %d", getdtablesize());
	
	(void)signal(SIGPIPE, SIG_IGN);
	wnet_init_select();

	for (i = 0; i < listeners.size(); ++i) {
	listener	*lns = listeners[i];

		try {
			lns->sock->reuseaddr(true);
			lns->sock->bind();
			lns->sock->listen();
		} catch (socket_error &e) {
			wlog(WLOG_ERROR, "creating listener %s: %s",
				lns->sock->straddr().c_str(), e.what());
			exit(8);
		}

		lsn2group[lns->sock] = lns->group;
		lns->sock->readback(polycaller<wsocket *, int>(*this, &ioloop_t::_accept), 0);
	}
	wlog(WLOG_NOTICE, "wnet: initialised, using libevent %s (%s)",
		event_get_version(), event_get_method());
	secondly_sched();
}

void
ioloop_t::_accept(wsocket *s, int)
{
	int		 val;
	wsocket		*newe;
static time_t		 last_nfile = 0;
	time_t		 now = time(NULL);

	if ((newe = s->accept("HTTP client", prio_norm)) == NULL) {
		if (errno != ENFILE || now - last_nfile > 60) 
			wlog(WLOG_NOTICE, "accept error: %s", strerror(errno));
		if (errno == ENFILE)
			last_nfile = now;
		return;
	}
	s->readback(polycaller<wsocket *, int>(*this, &ioloop_t::_accept), 0);

	newe->nonblocking(true);

	if (cawak == awaks.size())
		cawak = 0;
char	buf[sizeof(wsocket *) * 2];
	memcpy(buf, &newe, sizeof(newe));
	memcpy(buf + sizeof(newe), &s, sizeof(s));

	if (awaks[cawak]->write(buf, sizeof(wsocket *) * 2) < 0) {
		wlog(WLOG_ERROR, "writing to thread wakeup socket: %s", strerror(errno));
		exit(1);
	}
	cawak++;
	return;
}

void
wnet_set_time(void)
{
struct	tm	*now;
	time_t	 old = current_time;
	size_t	 n;
	
	current_time = time(NULL);
	if (current_time == old)
		return;

	now = gmtime(&current_time);

	n = strftime(current_time_str, sizeof(current_time_str), "%a, %d %b %Y %H:%M:%S GMT", now);
	assert(n);
	n = strftime(current_time_short, sizeof(current_time_short), "%Y-%m-%d %H:%M:%S", now);
	assert(n);
}

namespace wnet {

string
fstraddr(string const &straddr, sockaddr const *addr, socklen_t len)
{
char	host[NI_MAXHOST];
char	port[NI_MAXSERV];
string	res;
int	i;
	if ((i = getnameinfo(addr, len, host, sizeof(host), port, sizeof(port), 
			     NI_NUMERICHOST | NI_NUMERICSERV)) != 0)
		return "";
	return straddr + '[' + host + "]:" + port;
}

void
socket::_ev_callback(int fd, short ev, void *d)
{
wsocket	*s = (wsocket *)d;

	WDEBUG((WLOG_DEBUG, "fde_ev_callback: %s%son %d (%s)",
		(ev & EV_READ) ? "read " : "",
		(ev & EV_WRITE) ? "write " : "",
		fd, s->_desc));

	if (ev & EV_READ)
		s->_read_handler(s);
	if (ev & EV_WRITE)
		s->_write_handler(s);
}

void
socket::_register(int what, polycallback<wsocket *> handler)
{
	int	 ev_flags = 0;

	WDEBUG((WLOG_DEBUG, "_register: %s%son %d (%s)",
		(what & FDE_READ) ? "read " : "",
		(what & FDE_WRITE) ? "write " : "",
		_s, _desc));

	if (event_pending(&ev, EV_READ | EV_WRITE, NULL))
		event_del(&ev);

	if (what & FDE_READ) {
		_read_handler = handler;
		ev_flags |= EV_READ;
	}
	if (what & FDE_WRITE) {
		_write_handler = handler;
		ev_flags |= EV_WRITE;
	}

	event_set(&ev, _s, ev_flags, _ev_callback, this);
	event_base_set(evb, &ev);
	event_priority_set(&ev, (int) _prio);
	event_add(&ev, NULL);
}

address::address(void)
{
	memset(&_addr, 0, sizeof(_addr));
	_addrlen = 0;
	_fam = AF_UNSPEC;
	_stype = _prot = 0;
}

address::address(sockaddr *sa, socklen_t len)
{
	memcpy(&_addr, sa, len);
	_addrlen = len;
	_stype = _prot = 0;
	_fam = ((sockaddr_storage *)sa)->ss_family;
}

address::address(addrinfo *ai) 
{
	memcpy(&_addr, ai->ai_addr, ai->ai_addrlen);
	_addrlen = ai->ai_addrlen;
	_fam = ai->ai_family;
	_stype = ai->ai_socktype;
	_prot = ai->ai_protocol;
}

socket *
address::makesocket(char const *desc, sprio p) const
{
	try {
		return new socket(*this, desc, p);
	} catch (socket_error &) {
		return NULL;
	}
}

address::address(address const &o)
	: _addrlen(o._addrlen)
	, _fam(o._fam)
	, _stype(o._stype)
	, _prot(o._prot) {
	memcpy(&_addr, &o._addr, _addrlen);
}

address &
address::operator= (address const &o)
{
	_addrlen = o._addrlen;
	_fam = o._fam;
	_stype = o._stype;
	_prot = o._prot;
	memcpy(&_addr, &o._addr, _addrlen);
	return *this;
}

string const &
address::straddr(void) const
{
	if (_straddr.empty()) {
	char	res[NI_MAXHOST];
	int	i;
		if ((i = getnameinfo((sockaddr *) &_addr, _addrlen, 
		    res, sizeof(res), NULL, 0, NI_NUMERICHOST)) != 0)
			throw resolution_error(i);
		_straddr = res;
	}
	return _straddr;
}

addrlist *
addrlist::resolve(string const &addr, string const &port,
		  enum socktype socktype, int family)
{
addrinfo	 hints, *res, *ai;
int		 r;
	memset(&hints, 0, sizeof(hints));
	hints.ai_socktype = (int) socktype;
	if (family != AF_UNSPEC)
		hints.ai_family = family;

	if ((r = getaddrinfo(addr.c_str(), 
	    port.c_str(), &hints, &res)) != 0)
		throw resolution_error(r);

addrlist	*al = new addrlist;
	for (ai = res; ai; ai = ai->ai_next)
		al->_addrs.push_back(address(ai));

	freeaddrinfo(res);
	return al;
}

address
addrlist::first(string const &addr, int port,
		enum socktype socktype, int family)
{
	return first(addr, lexical_cast<string>(port), socktype, family);
}

addrlist *
addrlist::resolve(string const &addr, int port, 
		  enum socktype socktype, int family)
{
	return resolve(addr, lexical_cast<string>(port), socktype, family);
}

address
addrlist::first(string const &addr, string const &port,
		enum socktype socktype, int family)
{
addrlist	*r = addrlist::resolve(addr, port, socktype, family);
address		 res;
	res = *r->begin();
	delete r;
	return res;
}

addrlist::~addrlist(void)
{
}

addrlist::iterator
addrlist::begin(void) const
{
	return _addrs.begin();
}

addrlist::iterator
addrlist::end(void) const
{
	return _addrs.end();
}

socket *
addrlist::makesocket(char const *desc, sprio p) const
{
iterator	it = _addrs.begin(), end = _addrs.end();
	for (; it != end; ++it) {
	socket	*ns;
		if ((ns = it->makesocket(desc, p)) != NULL)
			return ns;
	}
	throw socket_error();
}

socket *
socket::create(string const &addr, int port,
	       enum socktype socktype, char const *desc, sprio p, int family)
{
	return create(addr, lexical_cast<string>(port), socktype, desc, p, family);
}

socket *
socket::create(string const &addr, string const &port,
	       enum socktype socktype, char const *desc, sprio p, int family)
{
addrlist	*al = addrlist::resolve(addr, port, socktype, family);
	return al->makesocket(desc, p);
}

pair<socket *, socket *>
socket::socketpair(enum socktype st)
{
socket	*s1 = NULL, *s2 = NULL;
int	 sv[2];
	if (::socketpair(AF_UNIX, (int) st, 0, sv) == -1)
		throw socket_error();
	s1 = new socket(sv[0], wnet::address(), "socketpair", prio_norm);
	try {
		s2 = new socket(sv[1], wnet::address(), "socketpair", prio_norm);
	} catch (...) {
		delete s1;
		throw;
	}
	return make_pair(s1, s2);
}

connect_status
socket::connect(void)
{
	if (::connect(_s, _addr.addr(), _addr.length()) == -1)
		if (errno == EINPROGRESS)
			return connect_later;
		else
			throw socket_error();
	return connect_okay;
}

socket *
socket::accept(char const *desc, sprio p)
{
int			ns;
sockaddr_storage	addr;
socklen_t		addrlen = sizeof(addr);
	if ((ns = ::accept(_s, (sockaddr *)&addr, &addrlen)) == -1)
		return NULL;
	return new socket(ns, wnet::address((sockaddr *)&addr, addrlen), desc, p);
}

int
socket::recvfrom(char *buf, size_t count, wnet::address &addr)
{
sockaddr_storage	saddr;
socklen_t		addrlen= sizeof(addr);
int			i;
	if ((i = ::recvfrom(_s, buf, count, 0, (sockaddr *)&saddr, &addrlen)) < 0)
		return i;
	addr = wnet::address((sockaddr *)&addr, addrlen);
	return i;
}

int
socket::sendto(char const *buf, size_t count, wnet::address const &addr)
{
	return ::sendto(_s, buf, count, 0, addr.addr(), addr.length());
}

int
socket::read(char *buf, size_t count)
{
	return ::read(_s, buf, count);
}

int
socket::write(char const *buf, size_t count)
{
	return ::write(_s, buf, count);
}

wnet::address const &
socket::address(void) const
{
	return _addr;
}


string const &
socket::straddr(void) const
{
	return _addr.straddr();
}

void
socket::nonblocking(bool v)
{
int	val;
	val = fcntl(_s, F_GETFL, 0);
	if (val == -1)
		throw socket_error();
	if (v)
		val |= O_NONBLOCK;
	else	val &= ~O_NONBLOCK;

	if (fcntl(_s, F_SETFL, val) == -1)
		throw socket_error();
}

void
socket::reuseaddr(bool v)
{
int	i = v;
int	len = sizeof(i);
	setopt(SO_REUSEADDR, &i, len);
}

int
socket::getopt(int what, void *addr, socklen_t *len) const
{
int	i;
	if ((i = getsockopt(_s, SOL_SOCKET, what, addr, len)) == -1)
		throw socket_error();
	return i;
}

int
socket::setopt(int what, void *addr, socklen_t len)
{
int	i;
	if ((i = setsockopt(_s, SOL_SOCKET, what, addr, len)) == -1)
		throw socket_error();
	return i;
}

int
socket::error(void) const
{
int		error = 0;
socklen_t	len = sizeof(error);
	try {
		getopt(SO_ERROR, &error, &len);
		return error;
	} catch (socket_error &) {
		return 0;
	}
}

socket::socket(int s, wnet::address const &a, char const *desc, sprio p)
	: _addr(a)
	, _desc(desc)
	, _prio(p)
{
	memset(&ev, 0, sizeof(ev));
	_s = s;
}

socket::socket(wnet::address const &a, char const *desc, sprio p)
	: _addr(a)
	, _desc(desc)
	, _prio(p)
{
	memset(&ev, 0, sizeof(ev));
	_s = ::socket(_addr.family(), _addr.socktype(), _addr.protocol());
	if (_s == -1)
		throw socket_error();
}

void
socket::bind(void)
{
	if (::bind(_s, _addr.addr(), _addr.length()) == -1)
		throw socket_error();
}

void
socket::listen(int bl)
{
	if (::listen(_s, bl) == -1)
		throw socket_error();
}

socket::~socket(void)
{
	event_del(&ev);
	close(_s);
}

} // namespace wnet

void
make_event_base(void)
{
	if (evb == NULL) {
		evb = (event_base *)event_init();
		event_base_priority_init(evb, prio_max);
		signal_set(&ev_sigint, SIGINT, sig_exit, NULL);
		signal_add(&ev_sigint, NULL);
		signal_set(&ev_sigterm, SIGTERM, sig_exit, NULL);
		signal_add(&ev_sigterm, NULL);
	}
}

void
sig_exit(int sig, short what, void *d)
{
	exit(0);
}

void
wnet_init_select(void)
{
	signal(SIGPIPE, SIG_IGN);
	make_event_base();
}

void
wnet_run(void)
{
	make_event_base();
	event_base_loop(evb, 0);
	perror("event_base_loop");
}
