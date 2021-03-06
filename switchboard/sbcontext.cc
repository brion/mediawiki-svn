/* Copyright (c) 2008 River Tarnell <river@wikimedia.org>. */
/*
 * Permission is granted to anyone to use this software for any purpose,
 * including commercial applications, and to alter it and redistribute it
 * freely. This software is provided 'as-is', without any express or implied
 * warranty.
 */
/* $Id$ */

#include	<cstring>
using std::strerror;	/* for asio */

#include	"sbcontext.h"
#include	"process_factory.h"

sbcontext::sbcontext()
	: factory_(new process_factory(*this))
{
}

process_factory&
sbcontext::factory()
{
	return *factory_;
}
