// created on 9/7/2005 at 6:25 PM

namespace MediaWiki.Blocker

import System
import System.Data

// Current MySQL Connector/NET is broken on non-Windows platforms
//import MySql.Data.MySqlClient
import ByteFX.Data.MySqlClient

class Recorder:
	static def IsChecked(suspect as Suspect):
		return CheckHits(suspect, "")
	
	static def IsBlocked(suspect as Suspect):
		return CheckHits(suspect, "AND check_blocked")
	
	static def CheckHits(suspect as Suspect, where as string):
		try:
			cmd = MySqlCommand("""SELECT COUNT(*) FROM checklog WHERE check_ip=@ip ${where}""", Connection)
			cmd.Parameters.Add("@ip", suspect.IP.ToString())
			using reader = cmd.ExecuteReader(CommandBehavior.SingleResult):
				reader.Read()
				return reader.GetInt32(0) > 0
		except e:
			print "Ouch: ${e}"
			return false
	
	static def Record(suspect as Suspect, blocked as bool, log as string):
		cmd = MySqlCommand("""INSERT INTO checklog
			(check_timestamp, check_ip, check_blocked, check_log)
			VALUES (@timestamp, @ip, @blocked, @log)""", Connection)
		cmd.Parameters.Add("@timestamp", DateTime.UtcNow)
		cmd.Parameters.Add("@ip", suspect.IP.ToString())
		cmd.Parameters.Add("@blocked", blocked)
		cmd.Parameters.Add("@log", log)
		cmd.ExecuteNonQuery()
	
	static def FormatTimestamp(ts as DateTime):
		return ts.ToString("yyyy'-'MM'-'dd'T'HH':'mm':'ss'Z'")
	
	static def TimestampFormat(time as DateTime):
		return "{0:0000}{1:00}{2:00}{3:00}{4:00}{5:00}" % (
			time.Year,
			time.Month,
			time.Day,
			time.Hour,
			time.Minute,
			time.Second)
	
	static _db as MySqlConnection
	
	static Connection as MySqlConnection:
		get:
			if _db is null:
				server = "localhost"
				user = "wikiuser"
				password = "userman"
				database = "blocker"
				connstr = "server=${server};uid=${user};pwd=${password};database=${database};pooling=false"
				db = MySqlConnection(connstr)
				db.Open()
				_db = db
			return _db
