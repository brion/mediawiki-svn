/* Copyright (c) 2008 River Tarnell <river@wikimedia.org>. */
/*
 * Permission is granted to anyone to use this software for any purpose,
 * including commercial applications, and to alter it and redistribute it
 * freely. This software is provided 'as-is', without any express or implied
 * warranty.
 */
/* $Id$ */

#include	<sys/stat.h>
#include	<sys/socket.h>
#include	<sys/un.h>

#include	<cassert>
#include	<ctime>

#include	<boost/asio.hpp>
#include	<boost/date_time/posix_time/posix_time.hpp>
#include	<boost/bind.hpp>
#include	<boost/lambda/lambda.hpp>

#include	"process_factory.h"
#include	"sbcontext.h"	

namespace asio = boost::asio;

std::set<int> process_factory::ids_;
int process_factory::curid_;

process_factory::process_factory(sbcontext &context)
	: context_(context)
	, reap_timer_(context.service(), boost::posix_time::seconds(5))
{
	reap_timer_.async_wait(boost::bind(&process_factory::reap, this,
				asio::placeholders::error));
}

processp
process_factory::create_from_filename(std::string const &filename)
{
	struct stat sb;

	if (stat(filename.c_str(), &sb) == -1)
		throw creation_failure("cannot access pathname");

	freelist_t::index<by_uid>::type &idx = freelist_.get<by_uid>();
	freelist_t::index<by_uid>::type::iterator
		it = idx.find(sb.st_uid);

	if (it != idx.end()) {
		assert(it->uid == sb.st_uid);
		processp proc(it->proc);
		idx.erase(it);
		return proc;
	}

	std::stringstream bindpath;
	int id;
	if (ids_.empty())
		id = curid_++;
	
	bindpath << "/tmp/switchboard_" << sb.st_uid << "_" << id;
	return processp(new process(context_, sb.st_uid, sb.st_gid, bindpath.str()));
}

void
process_factory::release(processp proc)
{
	free_process fp;
	fp.released = std::time(0);
	fp.proc = proc;
	fp.uid = proc->uid();

	freelist_.push_back(fp);
}

void
process_factory::reap(const boost::system::error_code &error)
{
	std::time_t oldest = std::time(0) - 30;

	freelist_t::index<by_released>::type &idx = freelist_.get<by_released>();
	std::pair<
		freelist_t::index<by_released>::type::iterator,
		freelist_t::index<by_released>::type::iterator>
		range = idx.range(mi::unbounded, boost::lambda::_1 <= oldest);

	idx.erase(range.first, range.second);

	reap_timer_.expires_from_now(boost::posix_time::seconds(5));
	reap_timer_.async_wait(boost::bind(&process_factory::reap, this,
				asio::placeholders::error));

	/*
	 * We don't really care about the exit status of children, just
	 * wait for them to prevent zombies.
	 */
	waitpid(-1, NULL, WNOHANG);
}
