<?php
require_once('commandLine.inc');
define("ITERATIONS", 100);

#$wgDebugLogFile = '/dev/stdout';
$wgMemCachedServers[] = 'localhost';

foreach ( $wgMemCachedServers as $server ) {
	$mcc = new MemCachedClientforWiki( array('persistant' => true) );
	$mcc->set_servers( array( $server ) );
	$set = 0;
	$incr = 0;
	$get = 0;
	for ( $i=1; $i<=ITERATIONS; $i++ ) {
		if ( !is_null( $mcc->set( "test$i", $i ) ) ) {
			$set++;
		}
	}

	for ( $i=1; $i<=ITERATIONS; $i++ ) {
		if ( !is_null( $mcc->incr( "test$i", $i ) ) ) {
			$incr++;
		}
	}

	for ( $i=1; $i<=ITERATIONS; $i++ ) {
		$value = $mcc->get( "test$i" );
		if ( $value == $i*2 ) {
			$get++;
		}
	}

	print "$server set: $set   incr: $incr   get: $get\n";
}
?>
