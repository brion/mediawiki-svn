#include <iostream>
#include <iomanip>
#include <fstream>
#include <map>
#include <cerrno>

#include <boost/format.hpp>
#include <boost/assign/list_of.hpp>
#include <boost/function.hpp>
#include <boost/lexical_cast.hpp>

#include "terminal.h"
#include "db.h"
#include "help.h"

static db::connectionptr open_connection(std::string const &);
static void show_connection();
static void handle_internal(std::string const &);
static bool read_input_line(std::string &, std::string const &);

static void add_connection(std::string const &);
static void list_connections(std::string const &);
static void switch_connection(std::string const &);
static void close_connection(std::string const &);
static void list_tables(std::string const &);
static void c_prompt(std::string const &);
static void describe_table(std::string const &);
static void show_help(std::string const &);

typedef std::vector<std::vector<std::string> > tabulated_t;
static void show_tabulated(tabulated_t const &);

static std::string prompt = "skirmish [$(cnr)]>";

struct conndesc {
	db::connectionptr conn;
	std::string desc;
};

static std::vector<conndesc *> conns;
static int cnr = -1;

std::map<std::string, boost::function<void (std::string const &)> >
	commands = boost::assign::map_list_of
		("open",	add_connection)
		("o",		add_connection)
		("ls",		list_connections)
		("list",	list_connections)
		("sw",		switch_connection)
		("switch",	switch_connection)
		("close",	close_connection)
		("cl",		close_connection)
		("pr",		c_prompt)
		("prompt",	c_prompt)
		("lt",		list_tables)
		("dt",		describe_table)
		("help",	show_help)
	;

static db::connectionptr
open_connection(std::string const &where)
{
	db::connectionptr conn;
	conn = db::connection::create(where);
	conn->open();
	return conn;
}

static void
add_connection(std::string const &where)
{
	try {
		conndesc cd;
		cd.desc = where;
		cd.conn = open_connection(where);
		conns.push_back(new conndesc(cd));
		cnr = conns.size() - 1;
	} catch (db::error &e) {
		std::cerr << boost::format("[cannot connect to \"%s\": %s]\n")
				% where % e.what();
	}
	show_connection();
}

terminal term;

int
main(int argc, char *argv[])
{
	char const *home = getenv("HOME");
	if (home) {
		std::string rcfile = str(boost::format("%s/.skirmishrc") % home);
		std::fstream rc(rcfile.c_str());
		if (!rc) {
			if (errno != ENOENT)
				std::cerr << boost::format("%s: %s\n") % rcfile % std::strerror(errno);
		} else {
			std::string line;
			while (std::getline(rc, line)) {
				if (line.empty() || line[0] == '#')
					continue;
				handle_internal(line);
			}
		}
	}

	for (int a = 1; argv[a]; ++a)
		add_connection(argv[a]);

	db::connectionptr conn;
	std::string input;
	for (;;) {
		term.reset_pager();
		std::string cnrs;
		if (cnr == -1) {
			term.set_prompt_variable("desc", "not connected");
			term.set_prompt_variable("cnr", "none");
		} else {
			term.set_prompt_variable("cnr", boost::lexical_cast<std::string>(cnr));
			term.set_prompt_variable("desc", conns[cnr]->desc);
		}

		if (!read_input_line(input, prompt))
			break;

		if (input.empty())
			continue;

		if (input[0] == '\\') {
			handle_internal(input.substr(1));
			continue;
		}

		if (cnr == -1) {
			std::cerr << "[no connection]\n";
			continue;
		}

		conn = conns[cnr]->conn;

		db::resultptr res;
		int nrows = 0;

		if (input[input.size() - 1] == ';')
			input.resize(input.size() - 1);

		try {
			res = conn->execute_sql(input);
		} catch (db::sqlerror const &e) {
			std::cerr << boost::format("[%s]\n") % e.what();
			if (e.where != -1) {
				std::cerr << e.query << '\n';
				std::cerr << std::string(e.where - 1, ' ') << "^\n";
			}
			continue;
		} catch (db::error const &e) {
			std::cerr << boost::format("[%s]\n") % e.what();
			continue;
		}

		if (!res->empty()) {
			db::result_row *r;
			int ncols = res->num_fields();
			std::vector<int> sizes(ncols);
			std::vector<std::vector<std::string> > data;

			std::vector<std::string> names;
			for (int i = 0; i < ncols; ++i)
				names.push_back(res->field_name(i));
			data.push_back(names);

			db::result::iterator it, end;
			for (it = res->begin(), end = res->end(); it != end; ++it) {
				std::vector<std::string> thisrow;
				for (int i = 0; i < ncols; ++i) {
					std::string v = it->string_value(i);
					thisrow.push_back(v);
				}
				data.push_back(thisrow);
				++nrows;
			}

			for (int row = 0; row < data.size(); ++row) {
				for (int col = 0; col < ncols; ++col) {
					if (data[row][col].size() > sizes[col])
						sizes[col] = data[row][col].size();
				}
			}

			for (int row = 0; row < data.size(); ++row) {
				std::ostringstream output;

				for (int col = 0; col < ncols; ++col) {
					output << ' ' << std::setw(sizes[col]) << std::left << data[row][col];
					if (col != (res->num_fields() - 1))
						output << " |";
				}
				term.putline(output.str());

				output.clear();
				output.str("");

				if (row == 0) {
					for (int col = 0; col < ncols; ++col) {
						output << std::string(sizes[col] + 2, '-');
						if (col == ncols-1)
							output << '-';
						else
							output << '+';
					}
					term.putline(output.str());
				}
			}
		}

		if (nrows)
			term.putline(str(boost::format("\nOK (%d rows).") % nrows));
	}
} 

static void
handle_internal(std::string const &s)
{
	std::string command, arg;
	std::string::size_type i;

	if ((i = s.find(' ')) != std::string::npos) {
		command = s.substr(0, i);
		arg = s.substr(i + 1);
	} else {
		command = s;
	}

	std::map<std::string, boost::function<void (std::string const &)> >::iterator it;
	if ((it = commands.find(command)) == commands.end()) {
		std::cerr << boost::format("[unknown command \"%s\"]\n") % command;
		return;
	}

	it->second(arg);
}

static void
list_connections(std::string const &)
{
	bool any = false;

	for (int i = 0; i < conns.size(); ++i) {
		if (!conns[i])
			continue;
		any = true;
		std::cout << boost::format("%- 2d\t%s\n") % i % conns[i]->desc;
	}

	if (!any)
		std::cout << "[no connections]\n";
}

static void
switch_connection(std::string const &arg)
{
	int to;
	try {
		to = boost::lexical_cast<int>(arg);
	} catch (boost::bad_lexical_cast &) {
		std::cerr << boost::format("[invalid connection number \"%s\"]\n") % arg;
		return;
	}

	if (to > conns.size() - 1 || to < 0 || !conns[to]) {
		std::cerr << boost::format("[no connection %d]\n") % to;
		return;
	}

	cnr = to;
	show_connection();
}

static void
close_connection(std::string const &arg)
{	
	int to;

	if (!arg.empty()) {
		try {
			to = boost::lexical_cast<int>(arg);
		} catch (boost::bad_lexical_cast &) {
			std::cerr << boost::format("[invalid connection number \"%s\"]\n") % arg;
			return;
		}

		if (to > conns.size() - 1 || to < 0 || !conns[to]) {
			std::cerr << boost::format("[no connection %d]\n") % to;
			return;
		}
	} else {
		if (cnr == -1) {
			std::cout << "[no connection to close]\n";
			return;
		}
		to = cnr;
	}

	conns[to]->conn->close();
	delete conns[to];
	conns[to] = 0;

	if (to == cnr) {
		cnr = -1;
		std::cout << "[not connected.  use \\open to connect]\n";
	}
}

static void
show_connection(void)
{
	if (cnr == -1) {
		std::cout << "[not connected.  use \\open to connect]\n";
		return;
	}

	std::cout << boost::format("[connected to %s]\n") % conns[cnr]->desc;
}

static void
list_tables(std::string const &arg)
{
	if (cnr == -1) {
		std::cout << "[not connected.  use \\open to connect]\n";
		return;
	}

	std::vector<db::table> tables;

	try {
		tables = conns[cnr]->conn->describe_tables(arg);
	} catch (db::error const &e) {
		std::cout << boost::format("[%s]\n") % e.what();
		return;
	}
	
	tabulated_t data;
	std::vector<std::string> header = boost::assign::list_of
		("Schema")
		("Name")
	;
	data.push_back(header);

	for (int i = 0; i < tables.size(); ++i) {
		std::vector<std::string> row;
		row.push_back(tables[i].schema);
		row.push_back(tables[i].name);
		data.push_back(row);
	}
	show_tabulated(data);
}

static void
describe_table(std::string const &arg)
{
	if (cnr == -1) {
		std::cout << "[not connected.  use \\open to connect]\n";
		return;
	}

	if (arg.empty()) {
		std::cout << "[no table given]\n";
		return;
	}

	db::table t;
	try {
		std::string schema, table;
		std::string::size_type i;

		if ((i = arg.find('.')) != std::string::npos) {
			schema = arg.substr(0, i);
			table = arg.substr(i + 1);
		} else
			table = arg;

		t = conns[cnr]->conn->describe_table(schema, table);
	} catch (db::error const &e) {
		std::cout << boost::format("[%s]\n") % e.what();
		return;
	}

	tabulated_t result;
	std::vector<std::string> header = boost::assign::list_of
		("Name")
		("Type")
		("Null?")
	;
	result.push_back(header);

	for (int i = 0; i < t.columns.size(); ++i) {
		std::vector<std::string> row;
		row.push_back(t.columns[i].name);
		row.push_back(t.columns[i].type);
		row.push_back(t.columns[i].nullable ? "Y" : "N");
		result.push_back(row);
	}
	show_tabulated(result);
}

static void
show_tabulated(tabulated_t const &data)
{
	std::vector<int> sizes;

	for (int row = 0; row < data.size(); ++row) {
		for (int col = 0; col < data[row].size(); ++col) {
			if (col >= sizes.size())
				sizes.resize(col + 1);
			if (sizes[col] < data[row][col].size())
				sizes[col] = data[row][col].size();
		}
	}

	int ncols = sizes.size();
	for (int row = 0; row < data.size(); ++row) {
		std::ostringstream output;

		for (int col = 0; col < ncols; ++col) {
			output << ' ' << std::setw(sizes[col]) << std::left << data[row][col];
			if (col != (sizes.size() - 1))
				output << " |";
		}
		term.putline(output.str());

		if (row == 0) {
			output.str("");
			output.clear();

			for (int col = 0; col < ncols; ++col) {
				output << std::string(sizes[col] + 2, '-');
				if (col == ncols-1)
					output << '-';
				else
					output << '+';
			}
			term.putline(output.str());
		}
	}
}

static void
c_prompt(std::string const &arg)
{
	if (arg.empty())
		std::cout << prompt << '\n';
	else
		prompt = arg;
}

static bool
read_input_line(std::string &input, std::string const &prompt)
{
	std::string ti, rp = prompt;
	bool instr = false;

	input = "";
	for (;;) {
		if (!term.readline(ti, rp))
			return false;

		if (!ti.empty() && input.empty() && ti[0] == '\\') {
			input = ti;
			return true;
		}

		for (int i = 0; i < ti.size(); ++i) {
			switch (ti[i]) {
			case '\'':
				instr = !instr;
				break;
			default:
				;
			}
		}

		if (!instr && ti[ti.size() - 1] == ';') {
			ti.resize(ti.size() - 1);
			input += ti;
			return true;
		}

		input += ti + '\n';
		rp = "... ";
	}
	return true;
}

static void
show_help(std::string const &topic)
{
	if (topic.empty()) {
		int longest = 0, len = 0;
		std::cout << "Help topics available:\n";

		std::vector<std::string> topics = help::list_topics();

		for (std::size_t i = 0, end = topics.size(); i < end; ++i)
			if (topics[i].length() > longest)
				longest = topics[i].length();

		for (std::size_t i = 0, end = topics.size(); i < end; ++i) {
			if (len + longest + 2 > term.cols()) {
				len = 0;
				std::cout << '\n';
			}

			len += topics[i].length();
			std::cout << (topics[i] + std::string(longest - topics[i].length() + 2, ' '));
		}

		std::cout << '\n';
		return;
	}

	std::string const *text = help::get(topic);
	if (text == 0) {
		std::cout << boost::format("[no help on \"%s\"]\n") % topic;
		return;
	}
	std::cout << *text;
}
