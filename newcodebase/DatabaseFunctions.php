<?

include_once( "FulltextStoplist.php" );

$wgLastDatabaseQuery = "";

function wfGetDB()
{
	global $wgDBserver, $wgDBuser, $wgDBpassword;
	global $wgDBname, $wgDBconnection;

	$noconn = str_replace( "$1", $wgDBserver, wfMsg( "noconnect" ) );
	$nodb = str_replace( "$1", $wgDBname, wfMsg( "nodb" ) );
	$helpme = "\n<p>If this error persists after reloading and clearing your browser cache,
        please notify the <a href=\"mailto:wikidown@bomis.com\">Wikipedia developers</a>.</p>";

	if ( ! $wgDBconnection ) {
		$wgDBconnection = mysql_pconnect( $wgDBserver, $wgDBuser,
		  $wgDBpassword ) or die( $noconn .
		"\n<p><b>" . htmlspecialchars(mysql_error()) . "</b></p>\n" . $helpme );
		if( !mysql_select_db( $wgDBname, $wgDBconnection ) ) {
			wfDebug( "Persistent connection is broken?\n", true );
			
			$wgDBconnection = mysql_connect( $wgDBserver, $wgDBuser,
			  $wgDBpassword ) or die( $noconn .
	          "\n<p><b>" . htmlspecialchars(mysql_error()) . "</b> (tried non-p connect)</p>\n" . $helpme );
			mysql_select_db( $wgDBname, $wgDBconnection ) or die( $nodb .
			  "\n<p><b>" . htmlspecialchars(mysql_error()) . "</b> (tried non-p connect)</p>\n" . $helpme );
        }
	}
	# mysql_ping( $wgDBconnection );
	return $wgDBconnection;
}

function wfQuery( $sql, $fname = "" )
{
	global $wgLastDatabaseQuery, $wgOut;
	$wgLastDatabaseQuery = $sql;

	$conn = wfGetDB();
	$ret = mysql_query( $sql, $conn );

	if ( "" != $fname ) {
#		wfDebug( "{$fname}:SQL: {$sql}\n", true );
	} else {
#		wfDebug( "SQL: {$sql}\n", true );
	}
	if ( false === $ret ) {
		$wgOut->databaseError( $fname );
		exit;
	}
	return $ret;
}

function wfFreeResult( $res ) { mysql_free_result( $res ); }
function wfFetchObject( $res ) { return mysql_fetch_object( $res ); }
function wfNumRows( $res ) { return mysql_num_rows( $res ); }
function wfNumFields( $res ) { return mysql_num_fields( $res ); }
function wfFieldName( $res, $n ) { return mysql_field_name( $res, $n ); }
function wfInsertId() { return mysql_insert_id( wfGetDB() ); }
function wfDataSeek( $res, $row ) { return mysql_data_seek( $res, $row ); }
function wfLastErrno() { return mysql_errno(); }
function wfLastError() { return mysql_error(); }

function wfLastDBquery()
{
	global $wgLastDatabaseQuery;
	return $wgLastDatabaseQuery;
}

function wfSetSQL( $table, $var, $value, $cond )
{
	$sql = "UPDATE $table SET $var = '" .
	  wfStrencode( $value ) . "' WHERE ($cond)";
	wfQuery( $sql, "wfSetSQL" );
}

function wfGetSQL( $table, $var, $cond )
{
	$sql = "SELECT $var FROM $table WHERE ($cond)";
	$result = wfQuery( $sql, "wfGetSQL" );

	$ret = "";
	if ( mysql_num_rows( $result ) > 0 ) {
		$s = mysql_fetch_object( $result );
		$ret = $s->$var;
		mysql_free_result( $result );
	}
	return $ret;
}

function wfStrencode( $s )
{
	return addslashes( $s );

	$s = str_replace( "\\", "\\\\", $s );
	$s = str_replace( "\r", "\\r", $s );
	$s = str_replace( "\n", "\\n", $s );
	$s = str_replace( "\"", "\\\"", $s );
	$s = str_replace( "'", "\\'", $s );
	$s = str_replace( "\0", "\\0", $s );
	return $s;
}

# This function is unused and deprecated
function wfStripForSearch( $in )
{
	$out = preg_replace( "/[^A-Za-z0-9_\\xA0-\\xFF]+/", "", $in );
	return $out;
}

?>
