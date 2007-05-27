<?php

/**
 * Class to represent a file in the oldimage table
 *
 * @addtogroup FileRepo
 */
class OldLocalFile extends LocalFile {
	var $requestedTime, $archive_name;

	const CACHE_VERSION = 1;
	const MAX_CACHE_ROWS = 20;

	function newFromTitle( $title, $repo, $time ) {
		return new OldLocalFile( $title, $repo, $time );
	}

	function __construct( $title, $repo, $time ) {
		parent::__construct( $title, $repo );
		$this->requestedTime = $time;
	}

	function getCacheKey() {
		$hashedName = md5($this->getName());
		return wfMemcKey( 'oldfile', $hashedName );
	}

	/**
	 * Try to load file metadata from memcached. Returns true on success.
	 */
	function loadFromCache() {
		global $wgMemc;
		wfProfileIn( __METHOD__ );
		$this->dataLoaded = false;
		$key = $this->getCacheKey();
		if ( !$key ) {
			return false;
		}
		$oldImages = $wgMemc->get( $key );

		if ( isset( $oldImages['version'] ) && $oldImages['version'] == MW_OLDFILE_VERSION ) {
			unset( $oldImages['version'];
			$more = isset( $oldImages['more'] );
			unset( $oldImages['more'] );
			krsort( $oldImages );
			$found = false;
			foreach ( $oldImages as $timestamp => $info ) {
				if ( $timestamp <= $this->desiredTimestamp ) {
					$found = true;
					break;
				}
			}
			if ( $found ) {
				wfDebug( "Pulling file metadata from cache key {$key}[{$timestamp}]\n" );
				$this->loadFromRow( (object)$cachedValues ) );
				$this->fileExists = true;
				$this->dataLoaded = true;
			} elseif ( $more ) {
				wfDebug( "Cache key was truncated, oldimage row might be found in the database\n" );
			} else {
				wfDebug( "Image did not exist at the specified time.\n" );
				$this->fileExists = false;
				$this->dataLoaded = true;
			}
		}

		if ( $this->dataLoaded ) {
			wfIncrStats( 'image_cache_hit' );
		} else {
			wfIncrStats( 'image_cache_miss' );
		}

		wfProfileOut( __METHOD__ );
		return $this->dataLoaded;
	}

	function saveToCache() {
		// Cache the entire history of the image (up to MAX_CACHE_ROWS).
		// This is expensive, so we only do it if $wgMemc is real
		global $wgMemc;
		if ( $wgMemc instanceof FakeMemcachedClient ) {
			return;
		}
		$key = $this->getCacheKey();
		if ( !$key ) { 
			return;
		}
		wfProfileIn( __METHOD__ );

		$dbr = $this->repo->getSlaveDB();
		$res = $dbr->select( 'oldimage', $this->getCacheFields(),
			array( 'oi_name' => $this->getName() ), __METHOD__, 
			array( 
				'LIMIT' => self::MAX_CACHE_ROWS + 1,
				'ORDER BY' => 'oi_timestamp DESC',
			));
		$cache = array( 'version' => self::CACHE_VERSION );
		$numRows = $dbr->numRows( $res );
		if ( $numRows > self::MAX_CACHE_ROWS ) {
			$cache['more'] = true;
			$numRows--;
		}
		for ( $i = 0; $i < $numRows; $i++ ) {
			$row = $dbr->fetchObject( $res );
			$this->decodeRow( $row, 'oi_' );
			$cache[$row->oi_timestamp] = $row;
		}
		$dbr->freeResult( $res );
		$wgMemc->set( $key, $cache, 7*86400 /* 1 week */ );
		wfProfileOut( __METHOD__ );
	}

	function loadFromDB() {
		wfProfileIn( __METHOD__ );
		$dbr = $this->repo->getSlaveDB();
		$row = $dbr->selectRow( 'oldimage', $this->getCacheFields( 'oi_' ),
			array( 
				'oi_name' => $this->getName(), 
				'oi_timestamp <= ' . $this->requestedTimestamp
			), __METHOD__, array( 'ORDER BY' => 'oi_timestamp DESC' ) );
		if ( $row ) {
			$this->decodeRow( $row, 'oi_' );
			$this->loadFromRow( $row, 'oi_' );
		} else {
			$this->fileExists = false;
		}
		$this->dataLoaded = true;
	}

	function getCacheFields( $prefix = 'img_' ) {
		$fields = parent::getCacheFields( $prefix );
		$fields[] = $prefix . 'archive_name';
	}

	function getRel() {
		return 'archive/' . $this->getHashPath() . '/' . $this->archive_name;
	}

	function getUrlRel() {
		return 'archive/' . $this->getHashPath() . '/' . urlencode( $this->archive_name );
	}
}


?>
