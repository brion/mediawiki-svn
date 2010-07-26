<?php
/**
 * @file
 * @ingroup Maintenance
 * @author Aryeh Gregor (Simetrical)
 */

#$optionsWithArgs = array( 'begin', 'max-slave-lag' );

require_once( dirname( __FILE__ ) . '/Maintenance.php' );

class UpdateCollation extends Maintenance {
	const BATCH_SIZE = 1000;

	public function __construct() {
		parent::__construct();

		global $wgCollationVersion;
		$this->mDescription = <<<TEXT
This script will find all rows in the categorylinks table whose collation is
out-of-date (cl_collation != $wgCollationVersion) and repopulate cl_sortkey
using the page title and cl_sortkey_prefix.  If everything's collation is
up-to-date, it will do nothing.
TEXT;

		#$this->addOption( 'force', 'Run on all rows, even if the collation is supposed to be up-to-date.' );
	}
	
	public function execute() {
		global $wgCollationVersion, $wgContLang;

		$dbw = wfGetDB( DB_MASTER );
		$count = $dbw->estimateRowCount(
			'categorylinks',
			array( 'cl_from', 'cl_to', 'cl_sortkey_prefix' ),
			'cl_collation != ' . $dbw->addQuotes( $wgCollationVersion ),
			__METHOD__
		);

		$this->output( "Fixing around $count rows (estimate might be wrong).\n" );

		$count = 0;
		do {
			$res = $dbw->select(
				array( 'categorylinks', 'page' ),
				array( 'cl_from', 'cl_to', 'cl_sortkey_prefix', 'cl_collation',
					'cl_sortkey', 'page_namespace', 'page_title'
				),
				array(
					'cl_collation != ' . $dbw->addQuotes( $wgCollationVersion ),
					'cl_from = page_id'
				),
				__METHOD__,
				array( 'LIMIT' => self::BATCH_SIZE )
			);

			$dbw->begin();
			foreach ( $res as $row ) {
				$title = Title::newFromRow( $row );
				$rawSortkey = $title->getCategorySortkey();
				if ( $row->cl_collation == 0 ) {
					# This is an old-style row, so the sortkey needs to be
					# converted.
					if ( $row->cl_sortkey == $rawSortkey ) {
						$prefix = '';
					} else {
						# Custom sortkey, use it as a prefix
						$prefix = $row->cl_sortkey;
					}
				} else {
					$prefix = $row->cl_sortkey_prefix;
				}
				# cl_type will be wrong for lots of pages if cl_collation is 0,
				# so let's update it while we're here.
				if ( $title->getNamespace() == NS_CATEGORY ) {
					$type = 'subcat';
				} elseif ( $title->getNamespace() == NS_FILE ) {
					$type = 'file';
				} else {
					$type = 'page';
				}
				$dbw->update(
					'categorylinks',
					array(
						'cl_sortkey' => $wgContLang->convertToSortkey( $prefix . $rawSortkey ),
						'cl_sortkey_prefix' => $prefix,
						'cl_collation' => $wgCollationVersion,
						'cl_type' => $type,
					),
					array( 'cl_from' => $row->cl_from, 'cl_to' => $row->cl_to ),
					__METHOD__
				);
			}
			$dbw->commit();

			$count += $res->numRows();
			$this->output( "$count done.\n" );
		} while ( $res->numRows() == self::BATCH_SIZE );
	}
}

$maintClass = "UpdateCollation";
require_once( DO_MAINTENANCE );
