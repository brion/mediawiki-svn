<?

# Database conversion (from May 2002 format).  Assumes that
# the "buildtables.sql" script has been run to create the new
# empty tables, and that the old tables have been read in from
# a database dump, renamed "old_*".

include_once( "Setup.php" );
$wgTitle = Title::newFromText( "Rebuild links script" );
set_time_limit(0);

$wgDBname			= "wikidb";
$wgDBuser			= "wikiadmin";
$wgDBpassword		= "admin7399";
$wgUploadDirectory	= "/usr/local/apache/htdocs/upload";
$wgDebugLogFile 	= "logfile";

apc_reset_cache();
# rebuildLinkTablesPass1();
rebuildLinkTablesPass2();

print "Done.\n";
exit();

########## End of script, beginning of functions.

# Empty and rebuild the "links" and "brokenlinks" tables.
# This can be done at any time for the new database, and
# probably should be done periodically (you should lock
# the wiki while it is running as well).
#
function rebuildLinkTablesPass1()
{
	$count = 0;
	print "Rebuilding link tables (pass 1).\n";

	$sql = "LOCK TABLES cur READ, rebuildlinks WRITE";
	wfQuery( $sql );

	$sql = "DELETE FROM rebuildlinks";
	wfQuery( $sql );

	$sql = "SELECT cur_id,cur_namespace,cur_title,cur_text FROM cur";
	$res = wfQuery( $sql );
	$total = wfNumRows( $res );

	$tc = Title::legalChars();
	while ( $row = wfFetchObject( $res ) ) {
		$id = $row->cur_id;
		$ns = Namespace::getName( $row->cur_namespace );
		if ( "" == $ns ) {
			$title = addslashes( $row->cur_title );
		} else {
			$title = addslashes( "$ns:{$row->cur_title}" );
		}
		$text = $row->cur_text;
		$numlinks = preg_match_all( "/\\[\\[([{$tc}]+)(]|\\|)/", $text,
		  $m, PREG_PATTERN_ORDER );

		if ( 0 != $numlinks ) {
			$sql = "INSERT INTO rebuildlinks (rl_f_id,rl_f_title,rl_to) VALUES ";
			for ( $i = 0; $i < $numlinks; ++$i ) {
				$nt = Title::newFromText( $m[1][$i] );
				$dest = $nt->getPrefixedDBkey();

				if ( 0 != $i ) { $sql .= ","; }
				$sql .= "({$id},'{$title}','{$dest}')";
			}
			wfQuery( $sql );
		}
		if ( ( ++$count % 1000 ) == 0 ) {
			print "$count of $total articles scanned.\n";
		}
	}
	print "$count articles scanned.\n";
	mysql_free_result( $res );

	$sql = "UNLOCK TABLES";
	wfQuery( $sql );
}

function rebuildLinkTablesPass2()
{
	$count = 0;
	print "Rebuilding link tables (pass 2).\n";

	$sql = "LOCK TABLES cur READ, rebuildlinks READ, " .
	  "links WRITE, brokenlinks WRITE, imagelinks WRITE";
	wfQuery( $sql );

	$sql = "DELETE FROM links";
	wfQuery( $sql );

	$sql = "DELETE FROM brokenlinks";
	wfQuery( $sql );

	$sql = "DELETE FROM links";
	wfQuery( $sql );

	$sql = "SELECT rl_f_title,rl_to FROM rebuildlinks " .
	  "WHERE rl_to LIKE 'Image:%'";
	$res = wfQuery( $sql );

	$sql = "INSERT INTO imagelinks (il_from,il_to) VALUES ";
	$first = true;
	while ( $row = wfFetchObject( $res ) ) {
		$iname = addslashes( substr( $row->rl_to, 6 ) );
		$pname = addslashes( $row->rl_f_title );

		if ( ! $first ) { $sql .= ","; }
		$first = false;

		$sql .= "('{$pname}','{$iname}')";
	}
	wfFreeResult( $res );
	wfQuery( $sql );

	$sql = "SELECT DISTINCT rl_to FROM rebuildlinks " .
	  "ORDER BY rl_to";
	$res = wfQuery( $sql );
	$count = 0;
	$total = wfNumRows( $res );

	while ( $row = wfFetchObject( $res ) ) {
		if ( 0 == strncmp( "Image:", $row->rl_to, 6 ) ) { continue; }

		$nt = Title::newFromDBkey( $row->rl_to );
		$id = $nt->getArticleID();
		$to = addslashes( $row->rl_to );

		if ( 0 == $id ) {
			$sql = "SELECT rl_f_id FROM rebuildlinks WHERE rl_to='{$to}'";
			$res2 = wfQuery( $sql );

			$sql = "INSERT INTO brokenlinks (bl_from,bl_to) VALUES ";
			$first = true;
			while ( $row2 = wfFetchObject( $res2 ) ) {
				$from = $row2->rl_f_id;
				if ( ! $first ) { $sql .= ","; }
				$first = false;
				$sql .= "({$from},'{$to}')";
			}
			wfFreeResult( $res2 );
			if ( ! $first ) { wfQuery( $sql ); }
		} else {
			$sql = "SELECT rl_f_title FROM rebuildlinks WHERE rl_to='{$to}'";
			$res2 = wfQuery( $sql );

			$sql = "INSERT INTO links (l_from,l_to) VALUES ";
			$first = true;
			while ( $row2 = wfFetchObject( $res2 ) ) {
				$from = addslashes( $row2->rl_f_title );
				if ( ! $first ) { $sql .= ","; }
				$first = false;
				$sql .= "('{$from}',{$id})";
			}
			wfFreeResult( $res2 );
			if ( ! $first ) { wfQuery( $sql ); }
		}
		if ( ( ++$count % 1000 ) == 0 ) {
			print "$count of $total titles processed.\n";
		}
	}
	wfFreeResult( $res );

	$sql = "UNLOCK TABLES";
	wfQuery( $sql );
}
?>
