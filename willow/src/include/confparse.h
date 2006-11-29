/* Willow: Lightweight HTTP reverse-proxy.                              */
/* confparse: configuration parser.					*/
/* Copyright (c) 2005, 2006 River Tarnell <river@attenuate.org>.        */
/*
 * Permission is granted to anyone to use this software for any purpose,
 * including commercial applications, and to alter it and redistribute it
 * freely. This software is provided 'as-is', without any express or implied
 * warranty.
 */

/* @(#) $Id$ */
/* From: $Nightmare: nightmare/include/config.h,v 1.32.2.2.2.2 2002/07/02 03:41:28 ejb Exp $ */
/* From: newconf.h,v 7.36 2005/03/21 22:42:10 leeh Exp */
/* From: newconf.h 2651 2006-10-13 18:54:49Z river */

#ifndef CONFPARSE_H
#define CONFPARSE_H

#include <string>
#include <map>
#include <vector>
#include <utility>
#include <cassert>

using std::map;
using std::vector;
using std::pair;
using std::multimap;

#include "willow.h"
#include "util.h"
#include "confgrammar.h"

/*
 * the config tree.
 *
 * it's structured as a tree, e.g. this config file:
 *
 * server {
 *   name = "foo";
 * };
 * oper "bar" {
 *   class = "opers";
 * };
 *
 * would produce the keys:
 *
 *  /server/name    = "foo"
 *  /oper=bar/class = "opers"
 *
 * consumers can either look up a key by name, or traverse the tree
 * and receive all keys below a certain point.
 */

namespace conf {

struct declpos {
		declpos(string const &file_, int line_, int pos_)
			: file(file_), line(line_), pos(pos_) {}
		declpos() : file(""), line(0), pos(0) {}

	string	format(void) const {
		return file + "(" + lexical_cast<string>(line) + ")";
	}

	static declpos here() {
		return declpos("", 0, 0);
	}

	string	file;
	int	line, pos;
};

template<typename T>
bool is_type(avalue_t const &v) {
	return boost::get<T>(&v) != NULL;
}

struct value {
			 value(declpos const &pos);

	void	report_error	(const char *, ...) const;
	void	vreport_error	(const char *, va_list) const;
	size_t	nvalues		(void) const;
	template<typename T>
	bool	is_single(void) {
		return cv_values.size() == 1 &&
			boost::get<T>(&cv_values[0]) != NULL;
	}

	template<typename T>
	bool	is_type(int n) {
		return boost::get<T>(&cv_values[n]) != NULL;
	}

	template<typename T>
	T const& get(int n = 0) {
		return boost::get<T>(cv_values[n]);
	}

	string           cv_name;
        vector<avalue_t> cv_values;     /* list of conf_avalue_t                */
        bool             cv_touched;       /* 1 if someone touched this item       */
	declpos		 cv_pos;
};

struct tree_entry {
				tree_entry(declpos const &);
	void	 report_error	(const char *, ...) const;
	void	 vreport_error	(const char *, va_list) const;
	value 	*operator/	(string const &value);
	void	 add		(value const &);

        string			item_name;     /* e.g. "oper"                          */
        string			item_key;      /* e.g. "bar"                           */
        multimap<string, value>	item_values;
	declpos			item_pos;
        bool			item_unnamed;
        bool			item_touched;
        bool			item_is_template;
};

struct tree {
	void	reset();
	/*
	 * lookup a key by name.  warning, this is slow!  it should only
	 * be called once per rehash, cache the value somewhere (for the
	 * core ircd this is done in ConfigFileEntry etc.)
	 *
	 * conf_find_tree_entry only finds keys with no name.
	 * conf_find_named_tree_entry finds a key with a name (e.g.
	 * conf_find_named_tree_entry("operator", "god")).
	 *
	 * if found, the key is touched.
	 * if the key doesn't exist, returns NULL.
	 *
	 * conf_iterate_tree_entries() finds all the entries of a certain type.  the
	 * void* parameter is used to store state; pass it in as NULL on the first call.
	 * NULL is returned after the last matching entry.  all iterated entries are
	 * touched.
	 *
	 */
	bool		 add		(tree_entry const &);
	tree_entry	*find_item	(tree_entry const &);
	tree_entry	*find		(string const &key);
	tree_entry	*find		(string const &key, string const &name);
	tree_entry	*find_or_new	(string const &block, string const &name,
					 declpos const &pos,  bool unnamed,
					 bool is_template);
	tree_entry	*create		(string const &block, string const &name,
					 declpos const &pos,  bool unnamed,
					 bool is_template);

	vector<tree_entry>	entries;
};

extern tree global_conf_tree;
#ifdef NEED_PARSING_TREE
extern tree parsing_tree;
#endif

tree	*parse_file	(string const &file);
void	 add_if_entry	(string const &name, int64_t v);
bool	 if_defined	(string const &name);
void	 define_if	(string const &name);

template<typename T>
struct type_namer {
	static char const *type;
};
template<typename T>
const char *type_namer<T>::type = "unknown type";

template<>
struct type_namer<int> {
	static char const *type;
};

template<>
struct type_namer<bool> {
	static char const *type;
};

template<>
struct type_namer<time_q> {
	static char const *type;
};

template<>
struct type_namer<size_q> {
	static char const *type;
};

template<>
struct type_namer<q_string> {
	static char const *type;
};

template<>
struct type_namer<u_string> {
	static char const *type;
};

template<typename T>
char const *type_name(void) {
	return type_namer<T>::type;
}

typedef bool (*function) (tree_entry &, value &);

struct value_definer;
struct block_definer;
struct conf_definer;

bool parse_ip (string const &, pair<string,string> &);

template<typename ret>
struct callable {
	virtual ~callable() {}
	virtual ret operator()(tree_entry &, value &) const = 0;
};

template<typename ret>
struct function_callable : callable<ret> {
	function_callable(ret (*f_)(tree_entry &, value &))
		: f(f_) {}

	ret operator()(tree_entry &e, value &v) const {
		return f(e, v);
	}

	ret (*f) (tree_entry &, value &);
};
typedef callable<bool> value_validator;
typedef callable<void> value_setter;

template<typename ret>
struct ender {
	virtual ~ender() {}
	virtual ret operator() (tree_entry &) const = 0;
};

template<typename ret>
struct function_ender : ender<ret> {
	function_ender(ret (*f_) (tree_entry &))
		: f(f_) {}
	ret operator() (tree_entry &e) const {
		return f(e);
	}
	ret (*f) (tree_entry &);
};

template<typename ret>
function_callable<ret> func(ret (*f)(tree_entry &, value &)) {
	return function_callable<ret>(f);
}
template<typename ret>
function_ender<ret> func(ret (*f)(tree_entry &)) {
	return function_ender<ret>(f);
}

template<typename type>
struct simple_value : callable<bool> {
	bool operator() (tree_entry &, value &v) const {
		if (!v.is_single<type>()) {
			v.report_error("expected single %s", type_name<type>());
			return false;
		}
		return true;
	}
};
typedef simple_value<int> simple_int_t;
typedef simple_value<bool> simple_yesno_t;
typedef simple_value<time_q> simple_time_t;
typedef simple_value<size_q> simple_size_t;

extern simple_int_t simple_int;
extern simple_yesno_t simple_yesno;
extern simple_time_t simple_time;
extern simple_size_t simple_size;

struct simple_range : callable<bool> {
	simple_range(int min_, int max_ = INT_MAX) : min(min_), max(max_) {}
	bool operator() (tree_entry &, value &v) const {
		if (!v.is_single<int>()) {
			v.report_error("expected single integer");
			return false;
		}
		int i = boost::get<int>(v.cv_values[0]);
		if (i < min || i > max) {
			v.report_error("value must be between %d and %d", min, max);
			return false;
		}
		return true;
	}
	int	min, max;
};

template<typename string_type>
struct nonempty_astring : callable<bool> {
	bool operator() (tree_entry &, value &v) const {
		if (!v.is_single<string_type>()) {
			v.report_error("expected single string");
			return false;
		}
		if (v.get<string_type>(0).value().empty()) {
			v.report_error("expected non-empty string");
			return false;
		}
		return true;
	}
};
typedef nonempty_astring<u_string> nonempty_string_t;
typedef nonempty_astring<q_string> nonempty_qstring_t;
extern nonempty_string_t nonempty_string;
extern nonempty_qstring_t nonempty_qstring;

struct ip_address_list_t : callable<bool> {
	bool operator() (tree_entry &, value &v) const {
	pair<string,string>	ip;
	vector<avalue_t>::iterator	it = v.cv_values.begin(),
					end = v.cv_values.end();
		for (; it != end; ++it) {
			if (!is_type<q_string>(*it)) {
				v.report_error("IP address must be quoted string");
				return false;
			}
			if (!parse_ip(boost::get<q_string>(*it).value(), ip)) {
				v.report_error("could not parse IP address");
				return false;
			}
		}
		return true;
	}
};
extern ip_address_list_t ip_address_list;

struct add_ip : callable<void> {
	vector<pair<string,string> > &list;
	add_ip(vector<pair<string,string> > &list_)
		: list(list_) {}

	void operator() (tree_entry &, value &v) const {
	pair<string,string>	ip;
	vector<avalue_t>::iterator	it = v.cv_values.begin(),
					end = v.cv_values.end();
		for (; it != end; ++it) {
			parse_ip(boost::get<q_string>(*it).value(), ip);
			list.push_back(ip);
		}
	}
};

template<typename T, typename U = T>
struct set_simple : callable<void> {
	set_simple(U& sv_) : sv(sv_) {}
	void operator() (tree_entry &, value &v) const {
		sv = v.get<T>(0);
	}
	U& sv;
};

template<typename T, typename U = T>
struct set_quantity : callable<void> {
	set_quantity(U& sv_) : sv(sv_) {}
	void operator() (tree_entry &, value &v) const {
		sv = v.get<T>(0).value();
	}
	U& sv;
};

template<typename T, typename U>
struct set_simple<U, atomic<T> > : callable<void> {
	atomic<T>	&sv;
	set_simple(atomic<T>& sv_) : sv(sv_) {}
	void operator() (tree_entry &, value &v) const {
		sv = v.get<U>(0);
	}
};

template<typename T>
struct set_astring : callable<void> {
	set_astring(string& sv_) : sv(sv_) {}
	void operator() (tree_entry &, value &v) const {
		sv = v.get<T>(0).value();
	}
	string& sv;
};


typedef set_astring<u_string>			set_string;
typedef set_astring<q_string>			set_qstring;
typedef set_quantity<time_q, time_t>		set_time;
typedef set_quantity<size_q, size_t>		set_size;
typedef set_simple<bool>			set_yesno;
typedef set_simple<int>				set_int;
typedef set_simple<int, long>			set_long;
typedef set_simple<time_q, atomic<time_t> >	set_atime;
typedef set_simple<size_q, atomic<size_t> >	set_asize;
typedef set_simple<bool, atomic<bool> >		set_abool;
typedef set_simple<int, atomic<int> >		set_aint;

struct accept_any_t : callable<bool> {
	bool operator() (tree_entry &, value &) const {
		return true;
	}
};
extern accept_any_t accept_any;

struct ignore_t : callable<void> {
	void operator() (tree_entry &, value &) const {
	}
};
extern ignore_t ignore;

struct conf_definer {
	conf_definer() {};
	~conf_definer();

	block_definer &block(string const &name, int flags = 0);
	vector<block_definer *> blocks;

	bool validate(tree &) const;
	void set(tree &) const;
};

struct value_definer {
	template<typename Vt, typename St>
	value_definer(string const &, Vt const &v_, St const &s_) {
		vv = new Vt(v_);
		vs = new St(s_);
	}
	~value_definer() {
		delete vv;
		delete vs;
	}

	bool validate(tree_entry &e, value &v);
	void set(tree_entry &e, value &v);

	value_validator const	*vv;
	value_setter const	*vs;
};

extern const int require_name;

struct block_definer : noncopyable {
	block_definer(conf_definer &parent_, string const &name, int flags);
	~block_definer();

	template<typename Vt, typename St>
	block_definer &value(string const &name_, Vt const &v, St const &s) {
		values.insert(make_pair(name_, new value_definer(name_, v, s)));
		return *this;
	}

	template<typename Vt, typename St>
	block_definer &end(Vt vefn_, St sefn_) {
		vefn = new Vt(vefn_);
		sefn = new St(sefn_);
		return *this;
	}

	template<typename St>
	block_definer &end(St sefn_) {
		sefn = new St(sefn_);
		return *this;
	}

	block_definer &block(string const &name, int flags = 0);
	bool validate(tree_entry &e);
	void set(tree_entry &e); 

private:
	friend class conf_definer;

	conf_definer			&parent;
	string				 name;
	map<string, value_definer *>	 values;
	ender<bool>			*vefn;
	ender<void>			*sefn;
	int				 flags;
};


/*
 * These are mostly internal to the configuration parser.
 */

tree_entry	*new_tree_entry_from_template(tree &t, string const &,
					      string const &, string const &,
					      declpos const &, bool unnamed, bool is_template);
value		*value_from_variable(string const &name, string const &varname, 
				     declpos const &);

void	report_parse_error	(const char *, ...);
void	catastrophic_error	(const char *, ...);
void	confparse_init		(void);
void	handle_pragma		(string const &);
bool	if_true			(string const &);
void	add_variable		(value *value);
void	add_variable_simple	(const char *, const char *);
bool	find_include		(string &);

} // namespace conf

#endif
