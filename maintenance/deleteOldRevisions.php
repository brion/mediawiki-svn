<?php

/**
 * Delete old (non-current) revisions from the database
 *
 * @file
 * @ingroup Maintenance
 * @author Rob Church <robchur@gmail.com>
 */

require_once( "Maintenance.php" );

class DeleteOldRevisions extends Maintenance {
	public function __construct() {
		parent::__construct();
		$this->mDescription = "Delete old (non-current) revisions from the database";
		$this->addOption( 'delete', 'Actually perform the deletion' );
	}
	
	public function execute() {
		$this->output( "Delete old revisions\n\n" );
		if( count( $this->mArgs ) < 1 ) {
			$this->error( "Must pass at least 1 page_id", true );
		}
		$this->doDelete( $this->hasOption( 'delete' ), $this->mArgs );
	}
	
	function doDelete( $delete = false, $args = array() ) {

		# Data should come off the master, wrapped in a transaction
		$dbw = wfGetDB( DB_MASTER );
		$dbw->begin();
	
		$tbl_pag = $dbw->tableName( 'page' );
		$tbl_rev = $dbw->tableName( 'revision' );
	
		$pageIdClause = '';
		$revPageClause = '';
	
		# If a list of page_ids was provided, limit results to that set of page_ids
		if ( sizeof( $args ) > 0 ) {
			$pageIdList = implode( ',', $args );
			$pageIdClause = " WHERE page_id IN ({$pageIdList})";
			$revPageClause = " AND rev_page IN ({$pageIdList})";
			$this->output( "Limiting to {$tbl_pag}.page_id IN ({$pageIdList})\n" );
		}
	
		# Get "active" revisions from the page table
		$this->output( "Searching for active revisions..." );
		$res = $dbw->query( "SELECT page_latest FROM $tbl_pag{$pageIdClause}" );
		while( $row = $dbw->fetchObject( $res ) ) {
			$cur[] = $row->page_latest;
		}
		$this->output( "done.\n" );
	
		# Get all revisions that aren't in this set
		$this->output( "Searching for inactive revisions..." );
		$set = implode( ', ', $cur );
		$res = $dbw->query( "SELECT rev_id FROM $tbl_rev WHERE rev_id NOT IN ( $set ){$revPageClause}" );
		while( $row = $dbw->fetchObject( $res ) ) {
			$old[] = $row->rev_id;
		}
		$this->output( "done.\n" );
	
		# Inform the user of what we're going to do
		$count = count( $old );
		$this->output( "$count old revisions found.\n" );
	
		# Delete as appropriate
		if( $delete && $count ) {
			$this->output( "Deleting..." );
			$set = implode( ', ', $old );
			$dbw->query( "DELETE FROM $tbl_rev WHERE rev_id IN ( $set )" );
			$this->output( "done.\n" );
		}
	
		# This bit's done
		# Purge redundant text records
		$dbw->commit();
		if( $delete ) {
			$this->purgeRedundantText( true );
		}
	}
}

$maintClass = "DeleteOldRevisions";
require_once( DO_MAINTENANCE );

