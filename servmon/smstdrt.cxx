/* @(#) $Header$ */
#include "smstdinc.hxx"
#include "smutl.hxx"
#include "smtrm.hxx"
#include "smauth.hxx"
#include "smcfg.hxx"
#include "smirc.hxx"
#include "smmon.hxx"
#include "smqb.hxx"
#include "smmc.hxx"
#include "smalrm.hxx"

#define HDL(x) struct x : smtrm::handler
#define EX0 bool execute(smtrm::comdat const&)
#define EX1(a) bool execute(smtrm::comdat const& a)

HDL(cmd_show_version) {
	EX1(cd) {
		cd.inform("servmon " SM_VERSION);
		return true;
	}
};

HDL(cmd_enable) {
	EX1(cd) {
		cd.wrt("Password: ");
		cd.term.echo(false);
		cd.term.readline(boost::bind(&cmd_enable::vfypass, this, _1, _2));
		return true;
	}
	void vfypass(smtrm::terminal& trm, std::string const& pass) {
		trm.echo(true);
		if (smauth::authebl(pass))
			trm.setlevel(16);
		else
			trm.error("Authentication failure.");
	}
};

HDL(cmd_disable) {
	EX1(cd) {
		cd.term.setlevel(3);
		return true;
	}
};

HDL(cmd_login) {
	std::string username; /* because otherwise the referenced is destroyed            */
	                      /* need some kind of standardised question/response system. */
	
	EX1(cd) {
		if (!cd.term.is_interactive()) {
			cd.error("Cannot log in on a non-interactive terminal.");
			return true;
		}
                cd.wrt("Type username: ");
		cd.term.readline(boost::bind(&cmd_login::vfyusername, this, _1, _2));
		
		return true;
	}
	void vfyusername(smtrm::terminal& trm, std::string const& user) {
		trm.echo(false);
		trm.wrt("Type password: ");
		trm.readline(boost::bind(&cmd_login::vfypassword, this, _1, /* ick */ username = user, _2));
	}
	void vfypassword(smtrm::terminal& trm, std::string user, std::string const& pass) {
		trm.echo(true);
		trm.wrtln("");
		if (!smauth::login_usr(user, pass)) {
			trm.wrtln("% [E] Username or password incorrect.");
			return;
		} else {
			trm.setlevel(3);
		}
	}
};

HDL(cmd_exit) {
	EX1(cd) {
		/*
		 * this will "succeed" even on non-interactive terminals like
		 * IRC commands.  however, it won't actually exit on such
		 * terminals.  the message in that case is confusing, and a
		 * better method would be to mark terminals as non-interactive
		 * and refuse the command.  not done yet pending untemplatification
		 * of the terminal system.
		 */
		cd.inform("Bye");
		return false;
	}
};

HDL(cfg_eblpass) {
	std::string p1;
	EX1(cd) {
		cd.term.echo(false);
		cd.wrt("Enter new password: ");
		cd.term.readline(boost::bind(&cfg_eblpass::gotp1, this, _1, _2));
		return true;
	}
	void gotp1(smtrm::terminal& trm, std::string const& pass) {
		p1 = pass;
		trm.wrt("Confirm new password: ");
		trm.readline(boost::bind(&cfg_eblpass::gotp2, this, _1, _2));
		return;
	}
	void gotp2(smtrm::terminal& trm, std::string const& p2) {
		trm.echo(true);
		if (p1 != p2) {
			trm.error("Not confirmed.");
			return;
		}
		SMI(smcfg::cfg)->storestr("/core/enable_password", p1);
	}
};

HDL(chg_parser) {
	chg_parser(smtrm::handler_node& newp_, str prm_)
		: newp(newp_)
		, prm(prm_)
	{
	}
	EX1(cd) {
		cd.chgrt(&newp);
		cd.term.setprmbase(prm);
		return true;
	}
	smtrm::handler_node& newp;
	std::string prm;
};

HDL(cfg_userpass) {
	std::string usr;
	EX1(cd) {
		if (smauth::usr_exists(cd.p(0))) {
			cd.error("User already exists.");
			return true;
		}
		usr = cd.p(0);
		cd.term.echo(false);
		cd.term.wrt("Enter password: ");
		cd.term.readline(boost::bind(&cfg_userpass::gotpass, this, _1, _2));
		return true;
	}
	void gotpass(smtrm::terminal& trm, std::string const& pass) {
		trm.echo(true);
		smauth::add_usr(usr, pass);
	}
};

HDL(cfg_no_user) {
	EX1(cd) {
		if (!smauth::usr_exists(cd.p(0))) {
			cd.error("No such user.");
			return true;
		}
		smauth::del_usr(cd.p(0));
		return true;
	}
};

HDL(cfg_irc_servnick) {
	EX1(cd) {
		SMI(smirc::cfg)->newserv_or_chgnick(cd.p(0), cd.p(1));
		return true;
	}
};

HDL(cfg_irc_servsecnick) {
	EX1(cd) {
		if (!SMI(smirc::cfg)->server_exists(cd.p(0))) {
			cd.error("No such server.");
			return true;
		}
		SMI(smirc::cfg)->server_set_secnick(cd.p(0), cd.p(1));
		return true;
	}
};

HDL(cfg_irc_channel) {
	EX1(cd) {
		SMI(smirc::cfg)->channel(cd.p(0));
		return true;
	}
};

HDL(cfg_irc_nochannel) {
	EX1(cd) {
		if (!SMI(smirc::cfg)->nochannel(cd.p(0)))
			cd.error("No such channel.");
		return true;
	}
};

HDL(cfg_irc_channel_level) {
	EX1(cd) {
		try {
			SMI(smirc::cfg)->channel_level(cd.p(0), b::lexical_cast<int>(cd.p(1)));
		} catch (b::bad_lexical_cast&) {
			cd.error("Invalid number.");
		}
		return true;
	}
};

HDL(cfg_irc_noserver) {
	EX1(cd) {
		if (!SMI(smirc::cfg)->server_exists(cd.p(0))) {
			cd.error("No such server.");
			return true;
		}
		SMI(smirc::cfg)->remove_server(cd.p(0));
		return true;
	}
};

HDL(cmd_irc_showchannels) {
	EX1(cd) {
		try {
			std::set<std::string> channels = SMI(smcfg::cfg)->fetchlist("/irc/channels");
			cd.inform("Currently configured channels:");
			FE_TC_AS(std::set<std::string>, channels, i) {
				cd.wrtln("    " + *i);
			}
		} catch (smcfg::nokey&) {
			cd.inform("No channels configured.");
		}
		return true;
	}
};

HDL(cmd_irc_showserver) {
	EX1(cd) {
		if (cd.num_params() == 0) {
			try {
				std::set<std::string> servers = SMI(smcfg::cfg)->fetchlist("/irc/servers");
				FE_TC_AS(std::set<std::string>, servers, i) {
					smtrm::comdat cd2(cd);
					cd2.add_p(*i);
					execute(cd2);
				}
			} catch (smcfg::nokey&) {
				cd.inform("No servers configured");
			}
			return true;
		}
		if (!SMI(smirc::cfg)->server_exists(cd.p(0))) {
			cd.error("No such server.");
			return true;
		}
		std::string pnick, snick;
		try {
			pnick = SMI(smcfg::cfg)->fetchstr(
					b::str(format("/irc/server/%s/nickname") % cd.p(0)));
		} catch (smcfg::nokey&) {
			pnick = "<not set>";
		}
		try {
			snick = SMI(smcfg::cfg)->fetchstr(
					b::str(format("/irc/server/%s/secnickname") % cd.p(0)));
		} catch (smcfg::nokey&) {
			snick = "<not set>";
		}
		cd.wrtln(cd.p(0));
		cd.wrtln("  primary nickname:   " + pnick);
		cd.wrtln("  secondary nickname: " + snick);
		return true;
	}
};

HDL(cfg_irc_enableserver) {
	EX1(cd) {
		if (!SMI(smirc::cfg)->server_exists(cd.p(0))) {
			cd.error("No such server.");
			return true;
		}
		SMI(smirc::cfg)->enable_server(cd.p(0), true);
		return true;
	}
};

HDL(cfg_irc_noenableserver) {
	EX1(cd) {
		if (!SMI(smirc::cfg)->server_exists(cd.p(0))) {
			cd.error("No such server.");
			return true;
		}
		SMI(smirc::cfg)->enable_server(cd.p(0), false);
		return true;
	}
};

HDL(cmd_monit_showservers) {
	EX1(cd) {
		std::map<std::string, smmon::cfg::serverp> servers;
		if (cd.num_params() == 0) {
			servers = SMI(smmon::cfg)->servers();
		} else {
			try {
				servers[cd.p(0)] = SMI(smmon::cfg)->serv(cd.p(0));
			} catch (smmon::noserv&) {
				cd.error("Server does not exist.");
				return true;
			}
		}
		for(std::map<std::string, smmon::cfg::serverp>::const_iterator i
			    = servers.begin(), end = servers.end(); i != end; ++i) {
			cd.wrtln(i->first + ":");
			cd.wrtln("  Type:  " + i->second->type());
			if (i->second->type() == "Squid") {
				shared_ptr<smmon::cfg::squidserver> p =
					b::dynamic_pointer_cast<smmon::cfg::squidserver>(i->second);
				cd.wrtln(b::io::str(b::format("  Requests/sec:    %d") % p->rpsv));
				cd.wrtln(b::io::str(b::format("  Hits/sec:        %d") % p->hpsv));
				float perc = 0;
				if (p->rpsv && p->hpsv)
					perc = (float(p->hpsv)/p->rpsv)*100;
				cd.wrtln(b::io::str(b::format("  Cache hit ratio: %02.2f%%") % perc));
			} else if (i->second->type() == "MySQL") {
				shared_ptr<smmon::cfg::mysqlserver> p =
					b::dynamic_pointer_cast<smmon::cfg::mysqlserver>(i->second);
				std::string mastername;
				try {
					mastername = SMI(smcfg::cfg)->fetchstr("/monit/mysql/master");
				} catch (smcfg::nokey&) {}
				if (mastername == p->name)
					cd.wrtln("  *** Server is MySQL master ***");
				cd.wrtln(b::io::str(b::format(        "  Queries/sec:     %d") % p->qpsv));
				cd.wrtln(b::io::str(b::format(        "  Threads:         %d") % p->procv));
				if (p->name != mastername)
					cd.wrtln(b::io::str(b::format("  Replication lag: %d") % p->replag));
			}
		}
		return true;
	}
};

HDL(cfg_monit_server_type) {
	EX1(cd) {
		if (!SMI(smmon::cfg)->knowntype(cd.p(1))) {
			cd.error(b::io::str(b::format("Unknown monitor type %s.") % cd.p(1)));
			return true;
		}
		if (SMI(smmon::cfg)->server_exists(cd.p(0))) {
			cd.error("Server already exists.");
			return true;
		}
		SMI(smmon::cfg)->create_server(cd.p(0), cd.p(1));
		return true;
	}
};
		
HDL(cfg_monit_server_mysql_master) {
	EX1(cd) {
		try {
			std::string curmaster = SMI(smcfg::cfg)->fetchstr("/monit/mysql/master");
			cd.inform("Removing MySQL master status from " + curmaster);
		} catch (smcfg::nokey&) {}
		SMI(smcfg::cfg)->storestr("/monit/mysql/master", cd.p(0));
		return true;
	}
};

HDL(cfg_monit_mysql_username) {
	EX1(cd) {
		SMI(smcfg::cfg)->storestr("/monit/mysql/username", cd.p(0));
		return true;
	}
};

HDL(cfg_monit_mysql_password) {
	EX1(cd) {
		SMI(smcfg::cfg)->storestr("/monit/mysql/password", cd.p(0));
		return true;
	}
};

HDL(cfg_monit_monitor_interval) {
	EX1(cd) {
		try {
			SMI(smcfg::cfg)->storeint("/monit/interval", b::lexical_cast<int>(cd.p(0)));
		} catch (b::bad_lexical_cast&) {
			cd.error("Bad number.");
		}
		return true;
	}
};

HDL(cfg_monit_ircinterval) {
	EX1(cd) {
		try {
			SMI(smcfg::cfg)->storeint("/monit/ircinterval", b::lexical_cast<int>(cd.p(0)));
		} catch (b::bad_lexical_cast&) {
			cd.error("Bad number.");
		}
		return true;
	}
};

HDL(cmd_monit_showintervals) {
	EX1(cd) {
		try {
			cd.inform("Monitor interval         : " + b::lexical_cast<std::string>(SMI(smcfg::cfg)->fetchint("/monit/interval")));
		} catch (smcfg::nokey&) {
			cd.inform("Monitor interval         : <default>");
		}
		try {
			cd.inform("IRC notification interval: " + b::lexical_cast<std::string>(SMI(smcfg::cfg)->fetchint("/monit/ircinterval")));
		} catch (smcfg::nokey&) {
			cd.inform("IRC notification interval: <default>");
		}
		return true;
	}
};

HDL(cfg_qb_rule) {
	EX1(cd) {
		cd.setdata(cd.p(0));
		cd.chgrt(&SMI(smtrm::tmcmds)->qbrrt);
		cd.term.setprmbase("%s[%d](conf-qb-rule)>");
		if (!SMI(smqb::cfg)->rule_exists(cd.p(0))) {
			SMI(smqb::cfg)->create_rule(cd.p(0));
			cd.inform("Creating new rule.");
		}
		return true;
	}
};

HDL(cfg_qb_norule) {
	EX1(cd) {
		if (!SMI(smqb::cfg)->rule_exists(cd.p(0))) {
			cd.error("No such rule.");
			return true;
		}
		SMI(smqb::cfg)->delete_rule(cd.p(0));
		return true;
	}
};

HDL(cfg_qbr_description) {
	EX1(cd) {
		std::string const& r = cd.getdata();
		SMI(smqb::cfg)->rule_description(r, cd.p(0));
		return true;
	}
};

HDL(cmd_qb_show_rule) {
	EX1(cd) {
		std::vector<smqb::rule> rules;
		if (cd.num_params() == 0) {
			rules = SMI(smqb::cfg)->getrules();
		} else {
			try {
				rules.push_back(SMI(smqb::cfg)->getrule(cd.p(0)));
			} catch (smqb::norule&) {
				cd.error("No such rule.");
				return true;
			}
		}
		FE_TC_AS(std::vector<smqb::rule>, rules, i) {
			cd.wrtln("Rule " + i->name);
			cd.wrtln("    Description: " + i->description);
			if (i->enabled)
				cd.wrtln("    Enabled    : Yes");
			else
				cd.wrtln("    Enabled    : No");
			cd.wrtln("    Match conditions:");
			cd.wrtln("      Minimum threads     : " + b::lexical_cast<std::string>(i->minthreads));
			cd.wrtln("      Minimum last threads: " + b::lexical_cast<std::string>(i->minlastthreads));
			cd.wrtln("      Lowest position     : " + b::lexical_cast<std::string>(i->lowestpos));
			cd.wrtln("      Minimum run time    : " + b::lexical_cast<std::string>(i->minruntime));
			std::string userstr;
			FE_TC_AS(std::set<std::string>, i->users, j) userstr += *j + " ";
			cd.wrtln("      Users               : " + userstr);
			cd.wrtln("      Command type        : " + i->cmdtype);
			cd.wrtln("      Query               : " + i->query);
		}
		return true;
	}
};

HDL(cfg_qbr_matchif_minthreads) {
	EX1(cd) {
		try {
			SMI(smqb::cfg)->set_minthreads(cd.getdata(), b::lexical_cast<int>(cd.p(0)));
		} catch (b::bad_lexical_cast&) {
			cd.error("Bad number.");
		}
		return true;
	}
};

HDL(cfg_qbr_matchif_minlastthreads) {
	EX1(cd) {
		try {
			SMI(smqb::cfg)->set_minlastthreads(cd.getdata(), b::lexical_cast<int>(cd.p(0)));
		} catch (b::bad_lexical_cast&) {
			cd.error("Bad number.");
		}
		return true;
	}
};

HDL(cfg_qbr_matchif_lowestpos) {
	EX1(cd) {
		try {
			SMI(smqb::cfg)->set_lowestpos(cd.getdata(), b::lexical_cast<int>(cd.p(0)));
		} catch (b::bad_lexical_cast&) {
			cd.error("Bad number.");
		}
		return true;
	}
};

HDL(cfg_qbr_matchif_minruntime) {
	EX1(cd) {
		try {
			SMI(smqb::cfg)->set_minruntime(cd.getdata(), b::lexical_cast<int>(cd.p(0)));
		} catch (b::bad_lexical_cast&) {
			cd.error("Bad number.");
		}
		return true;
	}
};

HDL(cfg_qbr_matchif_user) {
	EX1(cd) {
		SMI(smqb::cfg)->set_user(cd.getdata(), cd.p(0));
		return true;
	}
};

HDL(cfg_qbr_matchif_command) {
	EX1(cd) {
		SMI(smqb::cfg)->set_command(cd.getdata(), cd.p(0));
		return true;
	}
};

HDL(cfg_qbr_matchif_querystring) {
	EX1(cd) {
		SMI(smqb::cfg)->set_querystring(cd.getdata(), cd.p(0));
		return true;
	}
};

HDL(cfg_qbr_enable) {
	EX1(cd) {
		SMI(smqb::cfg)->set_enabled(cd.getdata());
		return true;
	}
};

HDL(cfg_qbr_noenable) {
	EX1(cd) {
		SMI(smqb::cfg)->set_disabled(cd.getdata());
		return true;
	}
};

HDL(cfg_mc_server_list_command) {
	EX1(cd) {
		SMI(smcfg::cfg)->storestr("/mc/servercmd", cd.p(0));
		SMI(smmc::mc)->reload_servers();
		return true;
	}
};

HDL(cmd_mc_show_server_list_command) {
	EX1(cd) {
		try {
			cd.wrtln(SMI(smcfg::cfg)->fetchstr("/mc/servercmd"));
		} catch (smcfg::nokey&) {
			cd.inform("Server list command not configured");
		}
		return true;
	}
};

HDL(cmd_mc_show_parser_cache) {
	EX1(cd) {
		float hits, invalid, expired, absent, total;
		std::string dbname = cd.num_params() ? cd.p(0) : "enwiki";
		try {
			std::string hitss, invalids, expireds, absents;
			hitss = SMI(smmc::mc)->get(dbname + ":stats:pcache_hit");
			invalids = SMI(smmc::mc)->get(dbname + ":stats:pcache_miss_invalid");
			expireds = SMI(smmc::mc)->get(dbname + ":stats:pcache_miss_expired");
			absents = SMI(smmc::mc)->get(dbname + ":stats:pcache_miss_absent");
			hits = b::lexical_cast<int>(hitss);
			invalid = b::lexical_cast<int>(invalids);
			expired = b::lexical_cast<int>(expireds);
			absent = b::lexical_cast<int>(absents);
		} catch (smmc::nokey& e) {
			std::string s = "Key not found: ";
			s += e.what();
			cd.error(s);
			return true;
		} catch (b::bad_lexical_cast& e) {
			std::string s = "Invalid number in cache data: ";
			s += e.what();
			cd.error(s);
			return true;
		}
		total = hits + invalid + expired + absent;
		if (!total) {
			cd.inform("No data available.");
			return true;
		}
		cd.wrtln(b::io::str(b::format("Hits:    %-10d %6.2f%%") % b::io::group(std::fixed, hits)    % (hits/total*100)));
		cd.wrtln(b::io::str(b::format("Invalid: %-10d %6.2f%%") % b::io::group(std::fixed, invalid) % (invalid/total*100)));
		cd.wrtln(b::io::str(b::format("Expired: %-10d %6.2f%%") % b::io::group(std::fixed, expired) % (expired/total*100)));
		cd.wrtln(b::io::str(b::format("Absent:  %-10d %6.2f%%") % b::io::group(std::fixed, absent)  % (absent/total*100)));
		cd.wrtln();
		cd.wrtln(b::io::str(b::format("Total:   %-10d %6.2f%%") % b::io::group(std::fixed, total)   % 100.0));
		return true;
	}
};

HDL(cfg_monit_alarm_mysql_replag) {
	EX1(cd) {
		int v;
		try {
			v = b::lexical_cast<int>(cd.p(0));
		} catch (b::bad_lexical_cast&) {
			cd.error("Invalid number.");
			return true;
		}
		SMI(smalrm::mgr)->set_thresh("replication lag", v);
		return true;
	}
};

HDL(cfg_monit_alarm_mysql_threads) {
	EX1(cd) {
		int v;
		try {
			v = b::lexical_cast<int>(cd.p(0));
		} catch (b::bad_lexical_cast&) {
			cd.error("Invalid number.");
			return true;
		}
		SMI(smalrm::mgr)->set_thresh("running threads", v);
		return true;
	}
};

HDL(cmd_debug_mysql_connect) {
	EX0 {
		SMI(smlog::log)->dodebug(smlog::mysql_connect);
		return true;
	}
};

HDL(cmd_no_debug_mysql_connect) {
	EX0 {
		SMI(smlog::log)->dontdebug(smlog::mysql_connect);
		return true;
	}
};

HDL(cmd_debug_mysql_query) {
	EX0 {
		SMI(smlog::log)->dodebug(smlog::mysql_query);
		return true;
	}
};

HDL(cmd_no_debug_mysql_query) {
	EX0 {
		SMI(smlog::log)->dontdebug(smlog::mysql_query);
		return true;
	}
};

HDL(cmd_debug_mysql_monitoring) {
	EX0 {
		SMI(smlog::log)->dodebug(smlog::mysql_monitoring);
		return true;
	}
};

HDL(cmd_no_debug_mysql_monitoring) {
	EX0 {
		SMI(smlog::log)->dontdebug(smlog::mysql_monitoring);
		return true;
	}
};

HDL(cmd_debug_irc) {
	EX0 {
		SMI(smlog::log)->dodebug(smlog::irc);
		return true;
	}
};

HDL(cmd_no_debug_irc) {
	EX0 {
		SMI(smlog::log)->dontdebug(smlog::irc);
		return true;
	}
};

smtrm::tmcmds::tmcmds(void)
{
	/* restricted non-logged commands */
	stdrt.install(1, "login", cmd_login(), "Authenticate to servmon");
	stdrt.install(1, "exit", cmd_exit(), "End session");
	/* standard mode commands (includes non-restricted non-logged in users) */
	stdrt.install(2, "show", "Show operational information");
	stdrt.install(2, "show version", cmd_show_version(), "Show software version");
	stdrt.install(2, "show irc", "Show IRC-related information");
	stdrt.install(2, "show irc server %s", cmd_irc_showserver(), "Describe a configured server");
	stdrt.install(2, "show irc server", cmd_irc_showserver(), "Describe all configured servers");
	stdrt.install(2, "show monitor", "Show monitoring information");
	stdrt.install(2, "show monitor server", cmd_monit_showservers(), "Show monitored servers");
	stdrt.install(2, "show monitor server %s", cmd_monit_showservers(), "Show information for a particular server");
	stdrt.install(2, "show monitor intervals", cmd_monit_showintervals(), "Show monitoring intervals");
	stdrt.install(2, "show querybane", "Show QueryBane information");
	stdrt.install(2, "show querybane rule", "Show a specific rule");
	stdrt.install(2, "show querybane rule %s", cmd_qb_show_rule(), "Rule name");
	stdrt.install(2, "show querybane rules", cmd_qb_show_rule(), "Show all QueryBane rules");
	stdrt.install(2, "show memcache", "Show memcache client information");
	stdrt.install(2, "show memcache server-list-command", cmd_mc_show_server_list_command(), "Show server list command");
	stdrt.install(2, "show parser", "Show MediaWiki parser-related information");
	stdrt.install(2, "show parser cache-statistics", cmd_mc_show_parser_cache(), "Show parser cache hit statistics");
	stdrt.install(3, "show irc channels", cmd_irc_showchannels(), "Show configured channels");
	stdrt.install(3, "enable", cmd_enable(), "Enter privileged mode");

	/* 'enable' mode commands */
	stdrt.install(16, "disable", cmd_disable(), "Return to non-privileged mode");
	stdrt.install(16, "configure", chg_parser(cfgrt, "%s[%d](conf)#"), "Configure servmon");
	stdrt.install(16, "debug", "Runtime debugging functions");
	stdrt.install(16, "debug mysql", "Debug MySQL functions");
	stdrt.install(16, "debug mysql connect", cmd_debug_mysql_connect(), "Debug MySQL connections");
	stdrt.install(16, "debug mysql query", cmd_debug_mysql_query(), "Debug MySQL queries");
	stdrt.install(16, "debug mysql monitoring", cmd_debug_mysql_monitoring(), "Debug MySQL server monitoring");
	stdrt.install(16, "debug irc", cmd_debug_irc(), "Debug IRC connections");
	stdrt.install(16, "no debug", "Runtime debugging functions");
	stdrt.install(16, "no debug mysql", "Debug MySQL functions");
	stdrt.install(16, "no debug mysql connect", cmd_no_debug_mysql_connect(), "Debug MySQL connections");
	stdrt.install(16, "no debug mysql query", cmd_no_debug_mysql_query(), "Debug MySQL queries");
	stdrt.install(16, "no debug mysql monitoring", cmd_no_debug_mysql_monitoring(), "Debug MySQL server monitoring");
	stdrt.install(16, "no debug irc", cmd_no_debug_irc(), "Debug IRC connections");

	/* 'configure' mode commands */
	cfgrt.install(16, "exit", chg_parser(stdrt, "%s[%d]>"), "Exit configure mode");
	cfgrt.install(16, "enable password", cfg_eblpass(), "Change enable password");
	cfgrt.install(16, "function", "Configure a specific function");
	cfgrt.install(16, "function irc", chg_parser(ircrt, "%s[%d](conf-irc)#"), "Configure Internet Relay Chat connections");
	cfgrt.install(16, "function monitor", chg_parser(monrt, "%s[%d](conf-monit)#"), "Configure server monitoring");
	cfgrt.install(16, "function memcache", chg_parser(memrt, "%s[%d](conf-memcache)#"), "Configure memcached client");
	cfgrt.install(16, "user", "Define users");
	cfgrt.install(16, "user %s", "Username");
	cfgrt.install(16, "user %s password", cfg_userpass(), "Create a new account");
	cfgrt.install(16, "no", "Negate a setting");
	cfgrt.install(16, "no user", "Remove a user account");
	cfgrt.install(16, "no user %s", cfg_no_user(), "User name");
	cfgrt.install(16, "function querybane", chg_parser(qbrt, "%s[%d](conf-qb)#"), "Configure QueryBane operation");

	/* 'function irc' mode commands */
	ircrt.install(16, "exit", chg_parser(cfgrt, "%s[%d](conf)>"), "Exit IRC configuration mode");
	ircrt.install(16, "server", "Configure IRC servers");
	ircrt.install(16, "server %s primary-nickname %s", cfg_irc_servnick(), "Set primary nickname for IRC server");
	ircrt.install(16, "server %s secondary-nickname %s", cfg_irc_servsecnick(),     "Set secondary nickname for IRC server");
	ircrt.install(16, "no", "Negate a setting");
	ircrt.install(16, "no server %s", cfg_irc_noserver(), "Remove a configured server");
	ircrt.install(16, "no server %s enable", cfg_irc_noenableserver(), "Disable a server");
	ircrt.install(16, "server %s enable", cfg_irc_enableserver(), "Enable connection to a server");
	ircrt.install(16, "channel", "Configure channels");
	ircrt.install(16, "channel %s", cfg_irc_channel(), "Specify a channel to join");
	ircrt.install(16, "channel %s level", "Notification level for channel");
	ircrt.install(16, "channel %s level %s", cfg_irc_channel_level(), "Level (1-16)");
	ircrt.install(16, "no channel %s", cfg_irc_nochannel(), "Remove a channel");

	/* 'function monitor' mode commands */
	monrt.install(16, "server", "Configure servers to monitor");
	monrt.install(16, "server %s", "Server name");
	monrt.install(16, "server %s type", "Specify server type");
	monrt.install(16, "server %s type %s", cfg_monit_server_type(), "Create new server");
	monrt.install(16, "server %s mysql-master", cfg_monit_server_mysql_master(), "Set server as MySQL master");
	monrt.install(16, "mysql", "Configure global MySQL parameters");
	monrt.install(16, "mysql username", "MySQL username");
	monrt.install(16, "mysql password", "MySQL password");
	monrt.install(16, "mysql username %s", cfg_monit_mysql_username(), "Set MySQL username");
	monrt.install(16, "mysql password %s", cfg_monit_mysql_password(), "Set MySQL password");
	monrt.install(16, "monitor-interval", "Monitor interval in seconds");
	monrt.install(16, "monitor-interval %s", cfg_monit_monitor_interval(), "Monitor interval in seconds");
	monrt.install(16, "irc-status-interval", "IRC status interval in seconds");
	monrt.install(16, "irc-status-interval %s", cfg_monit_ircinterval(), "IRC status interval in seconds");
	monrt.install(16, "threshold", "Set alarm thresholds");
	monrt.install(16, "threshold mysql", "MySQL-related alarm thresholds");
	monrt.install(16, "threshold mysql replication-lag", "Maximum replication lag from master");
	monrt.install(16, "threshold mysql replication-lag %s", cfg_monit_alarm_mysql_replag(), "Maximum replication lag in seconds");
	monrt.install(16, "threshold mysql running-threads", "Maximum number of running threads");
	monrt.install(16, "threshold mysql running-threads %s", cfg_monit_alarm_mysql_threads(), "Maximum number of threads");
	monrt.install(16, "exit", chg_parser(cfgrt, "%s[%d](conf)>"), "Exit monitor configuration mode");

	/* 'function querybane' mode commands */
	qbrt.install(16, "rule", "Define a new rule");
	qbrt.install(16, "rule %s", cfg_qb_rule(), "Rule name");
	qbrt.install(16, "no", "Negate a setting");
	qbrt.install(16, "no rule", "Delete a rule");
	qbrt.install(16, "no rule %s", cfg_qb_norule(), "Rule name");
	qbrt.install(16, "exit", chg_parser(cfgrt, "%s[%d](conf)>"), "Exit querybane configuration mode");

	/* querybane 'rule' mode commands */
	qbrrt.install(16, "exit", chg_parser(qbrt, "%s[%d](conf-qb)>"), "Exit rule configuration mode");
	qbrrt.install(16, "description %S", cfg_qbr_description(), "Rule description");
	qbrrt.install(16, "match-if", "Specify parameters to match this rule");
	qbrrt.install(16, "match-if min-threads", "Match on miminum thread count");
	qbrrt.install(16, "match-if min-threads %s", cfg_qbr_matchif_minthreads(), "Miminum thread count");
	qbrrt.install(16, "match-if min-last-threads", "Match on minimum thread count previous check");
	qbrrt.install(16, "match-if min-last-threads %s", cfg_qbr_matchif_minlastthreads(), "Minimum thread count previous check");
	qbrrt.install(16, "match-if lowest-position", "Match on position");
	qbrrt.install(16, "match-if lowest-position %s", cfg_qbr_matchif_lowestpos(), "Only match if Nth longest running thread");
	qbrrt.install(16, "match-if user", "Match on username");
	qbrrt.install(16, "match-if user %S", cfg_qbr_matchif_user(), "Match threads owned by user");
	qbrrt.install(16, "match-if command", "Match command type");
	qbrrt.install(16, "match-if command %s", cfg_qbr_matchif_command(), "Match command type");
	qbrrt.install(16, "match-if min-run-time", "Match on minimum run time");
	qbrrt.install(16, "match-if min-run-time %s", cfg_qbr_matchif_minruntime(), "Only match after specified run time (seconds)");
	qbrrt.install(16, "match-if query-string", "Match on query string");
	qbrrt.install(16, "match-if query-string %S", cfg_qbr_matchif_querystring(), "Match specified query text");
	qbrrt.install(16, "enable", cfg_qbr_enable(), "Enable rule");

	/* 'function memcache' commands */
	memrt.install(16, "server-list-command", "Set command used to obtain server list");
	memrt.install(16, "server-list-command %S", cfg_mc_server_list_command(), "Command name");
	memrt.install(16, "exit", chg_parser(cfgrt, "%s[%d](conf)>"), "Exit memcache configuration mode");
};
