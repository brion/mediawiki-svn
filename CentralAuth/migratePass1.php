<?php

die( 'not done' );

// pass 1: go through all usernames in 'localuser' and create 'globaluser' rows
//         for those that can be automatically migrated, go ahead and do it.

function migratePassZero() {
	$dbBackground = wfGetDB( DB_SLAVE ); // fixme for large dbs
	$result = $dbBackground->select(
		'localuser',
		array( 'lu_name' ),
		'',
		__METHOD__,
		array( 'GROUP BY' => 'lu_name' ) );
	while( $row = $dbBackground->fetchObject( $result ) ) {
		$name = $row->lu_name;
		$central = new CentralAuthUser( $name );
		if( $central->attemptAutoMigration() ) {
			echo "Migrated '$name'\n";
		}
		$count = getEditCount( $row->user_id );
		CentralAuthUser::storeLocalData( $wgDBname, $row, $count );
	}
	$dbBackground->freeResult( $result );
}

if( $wgCentralAuthState != 'premigrate' ) {
	if( $wgCentralAuthState == 'testing' ) {
		echo "WARNING: \$wgCentralAuthState is set to 'testing', generated data may be corrupt.\n";
	} else {
		wfDie( "\$wgCentralAuthState is '$wgCentralAuthState', please set to 'migrating'.\n" );
	}
}

echo "CentralAuth migration pass 1:\n";
echo "Finding accounts which can be migrated without interaction...\n";
migratePassOne();
echo "done.\n";

?>