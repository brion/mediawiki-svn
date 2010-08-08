<?php

class CheckUser {

	var $target;
	var $api = false;
	
	function __construct( $target, $api = false ) {
		$this->target = CheckUser::parseTarget( $target );
		$this->api = $api;
		
		##FIXME: Support ranges and xff
		##FIXME: IPv6?
		##FIXME: PostgreSQL, etc?
		##FIXME: Support for renames
	}
	
	function doUser2IP( $params, $prop = array(), $limit = '' ) {
	
		if ( !isset( $this->target['user'] ) ) {
			return array( 'error' => 'nosuchusershort' );
		}
		
		##FIXME: Make sure that the special page detects errors
		$userTitle = Title::newFromText( $this->target['user'], NS_USER );
		if ( !is_null( $userTitle ) ) {
			// normalize the username
			$user = $this->target = $userTitle->getText();
		}
		
		# IPs are passed in as a blank string
		if ( !$user ) {
			return array( 'error' => 'nosuchusershort'  );
		}
		
		# Get ID, works better than text as user may have been renamed
		$user_id = User::idFromName( $user );

		# If user is not IP or nonexistent
		if ( !$user_id ) {
			return array( 'error' => 'nosuchusershort' );
		}
		
		$dbr = wfGetDB( DB_SLAVE );
		$time_conds = $this->getTimeConds( $params['period'] );
		# Ordering by the latest timestamp makes a small filesort on the IP list
		$cu_changes = $dbr->tableName( 'cu_changes' );
		$use_index = $dbr->useIndexClause( 'cuc_user_ip_time' );
		
		$select = array(
			'cuc_ip',
			'cuc_ip_int',
			'cuc_ip_hex',
			'cuc_user',
			'cuc_agent',
			'cuc_rdns',
			'COUNT(*) AS count',
			'MIN(cuc_timestamp) AS first', 
			'MAX(cuc_timestamp) AS last'
		);
			
		$opts = array(
			'GROUP BY' => 'cuc_ip,cuc_ip_hex',
			'ORDER BY' => 'cuc_ip_int ASC',
			'USE INDEX' => 'cuc_user_ip_time'
		);
		
		if( !empty( $limit ) ) $opts['LIMIT'] = $limit;
		
		$ret = array(
			$cu_changes,
			$select,
			array(
				'cuc_user' => $user_id,
				$time_conds
			), 
			__METHOD__,
			$opts
		);
		
		$retArray = array( $ret, $time_conds );
		
		# Record check...
		if ( !$this->addLogEntry( 'userips', 'user', $user, $params['reason'], $user_id ) ) {
			$retArray['warn'] = 'checkuser-log-fail';
		}
		
		return $retArray;
		
	}
	
	function doUser2Edits() {
	}
	
	function doIP2User( $params, $prop, $limit ) {
		
		if ( !isset( $this->target['ip'] ) ) {
			return array( 'error' => 'badipaddress' );
		}
		
		$dbr = wfGetDB( DB_SLAVE );
		
		$ip_conds = $this->getIpConds( $dbr, $this->target['ip'], $params['xff'] );
		if ( $ip_conds === false ) {
			return array( 'error' => 'badipaddress' );
		}
		
		$logType = 'ipusers';
		if ( $params['xff'] ) {
			$logType .= '-xff';
		}
		
		$ip_conds = $dbr->makeList( $ip_conds, LIST_AND );
		$time_conds = $this->getTimeConds( $period );
		$cu_changes = $dbr->tableName( 'cu_changes' );
		$index = $params['xff'] ? 'cuc_xff_hex_time' : 'cuc_ip_hex_time';
		
		# Ordered in descent by timestamp. Can cause large filesorts on range scans.
		# Check how many rows will need sorting ahead of time to see if this is too big.
		if ( strpos( $this->target['ip'], '/' ) !== false ) {
			# Quick index check only OK if no time constraint
			if ( $period ) {
				$rangecount = $dbr->selectField( 'cu_changes', 'COUNT(*)',
					array( $ip_conds, $time_conds ),
					__METHOD__,
					array( 'USE INDEX' => $index ) );
			} else {
				$rangecount = $dbr->estimateRowCount( 'cu_changes', '*',
					array( $ip_conds ),
					__METHOD__,
					array( 'USE INDEX' => $index ) );
			}
			// Sorting might take some time...make sure it is there
			wfSuppressWarnings();
			set_time_limit( 120 );
			wfRestoreWarnings();
		}
		
		$use_index = $dbr->useIndexClause( $index );
	
		
		$select = array(
			'cuc_user',
			'cuc_user_text',
			'cuc_agent',
			'cuc_timestamp',
			'MIN(cuc_timestamp) AS first', 
			'MAX(cuc_timestamp) AS last',
			'cuc_agent',
			'cuc_ip',
			'cuc_xff',
		);
			
		$opts = array(
			'ORDER BY' => 'cuc_timestamp ASC',
			'USE INDEX' => $index
		);
		
		$ret = array(
			$cu_changes,
			$select,
			array(
				$ip_conds,
				$time_conds
			), 
			__METHOD__,
			$opts
		);
		
		$retArray = array( $ret, $time_conds );
		
		# Record check...
		if ( !$this->addLogEntry( $logType, 'ip', $this->target['ip'], $params['reason'] ) ) {
			$retArray['warn'] = 'checkuser-log-fail';
		}
		
		return $retArray;
	}
	
	function doIP2Edits() {
	}
	
	protected function addLogEntry( $logType, $targetType, $target, $reason, $targetID = 0 ) {
		global $wgUser;

		if ( $targetType == 'ip' ) {
			list( $rangeStart, $rangeEnd ) = IP::parseRange( $target );
			$targetHex = $rangeStart;
			if ( $rangeStart == $rangeEnd ) {
				$rangeStart = $rangeEnd = '';
			}
		} else {
			$targetHex = $rangeStart = $rangeEnd = '';
		}

		$dbw = wfGetDB( DB_MASTER );
		$cul_id = $dbw->nextSequenceValue( 'cu_log_cul_id_seq' );
		$dbw->insert( 'cu_log',
			array(
				'cul_id' => $cul_id,
				'cul_timestamp' => $dbw->timestamp(),
				'cul_user' => $wgUser->getID(),
				'cul_user_text' => $wgUser->getName(),
				'cul_reason' => $reason,
				'cul_type' => $logType,
				'cul_api' => intval( $this->api ),
				'cul_target_id' => $targetID,
				'cul_target_text' => $target,
				'cul_target_hex' => $targetHex,
				'cul_range_start' => $rangeStart,
				'cul_range_end' => $rangeEnd,
			), __METHOD__ );
		return true;
	}
	
	/**
	 * @param Database $db
	 * @param string $ip
	 * @param string $xfor
	 * @return mixed array/false conditions
	 */
	protected function getIpConds( $db, $ip, $xfor = false ) {
		$type = ( $xfor ) ? 'xff' : 'ip';
		// IPv4 CIDR, 16-32 bits
		if ( preg_match( '#^(\d+\.\d+\.\d+\.\d+)/(\d+)$#', $ip, $matches ) ) {
			if ( $matches[2] < 16 || $matches[2] > 32 ) {
				return false; // invalid
			}
			list( $start, $end ) = IP::parseRange( $ip );
			return array( 'cuc_' . $type . '_hex BETWEEN ' . $db->addQuotes( $start ) . ' AND ' . $db->addQuotes( $end ) );
		} elseif ( preg_match( '#^\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}/(\d+)$#', $ip, $matches ) ) {
			// IPv6 CIDR, 96-128 bits
			if ( $matches[1] < 96 || $matches[1] > 128 ) {
				return false; // invalid
			}
			list( $start, $end ) = IP::parseRange6( $ip );
			return array( 'cuc_' . $type . '_hex BETWEEN ' . $db->addQuotes( $start ) . ' AND ' . $db->addQuotes( $end ) );
		} elseif ( preg_match( '#^(\d+)\.(\d+)\.(\d+)\.(\d+)$#', $ip ) ) {
			// 32 bit IPv4
			$ip_hex = IP::toHex( $ip );
			return array( 'cuc_' . $type . '_hex' => $ip_hex );
		} elseif ( preg_match( '#^\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}:\w{1,4}$#', $ip ) ) {
			// 128 bit IPv6
			$ip_hex = IP::toHex( $ip );
			return array( 'cuc_' . $type . '_hex' => $ip_hex );
		}
		// throw away this query, incomplete IP, these don't get through the entry point anyway
		return false; // invalid
	}
	
	public static function checkBlockInfo( $name ) {
		$dbr = wfGetDB( DB_SLAVE );
		
		$ret = $dbr->selectRow(
			'ipblocks',
			array(
				'ipb_by_text',
				'ipb_reason',
				'ipb_timestamp',
				'ipb_expiry'
			),
			array(
				'ipb_address' => $name
			),
			__METHOD__
		);
		
		if( !is_null( $ret ) ) return $ret;
		
		return false;
	}
	
	public static function getAllEdits( $hex, $time_conds ) {
		$dbr = wfGetDB( DB_SLAVE );
		
		$ipedits = $dbr->estimateRowCount( 'cu_changes', '*',
			array( 'cuc_ip_hex' => $hex, $time_conds ),
			__METHOD__ );
		# If small enough, get a more accurate count
		if ( $ipedits <= 1000 ) {
			$ipedits = $dbr->selectField( 'cu_changes', 'COUNT(*)',
				array( 'cuc_ip_hex' => $hex, $time_conds ),
				__METHOD__ );
		}
		
		return $ipedits;
	}
	
	protected function getTimeConds( $period ) {
	
		if ( !$period ) {
			return '1 = 1';
		}
		
		$dbr = wfGetDB( DB_SLAVE );
		$cutoff_unixtime = time() - ( $period * 24 * 3600 );
		$cutoff_unixtime = $cutoff_unixtime - ( $cutoff_unixtime % 86400 );
		$cutoff = $dbr->addQuotes( $dbr->timestamp( $cutoff_unixtime ) );
		return "cuc_timestamp > $cutoff";
	}
	
	public static function parseTarget( $target ) {
		if ( IP::isIPAddress( $target ) ) {
			return array( 'ip' => IP::sanitizeIP( $target ) );
		}
		else {
			return array( 'user' => $target );
		}
	}
	
}

class CheckUserLog {

	public static function getQuery( $initiator, $target, $year, $month, $expanded ) {
		
		$searchConds = array();
		
		if ( !is_null( $initiator ) ) {
			$user = User::newFromName( $target );
			if ( !$user || !$user->getID() ) {
				return array( 'error' =>  'nosuchusershort' );
			} else {
				$searchConds['cul_user'] = $user->getID();
			}
		}
	
		if( !is_null( $target ) ) {
			// Is it an IP?
			list( $start, $end ) = IP::parseRange( $target );
			if ( $start !== false ) {
				if ( $start == $end ) {
					$searchConds[] = 'cul_target_hex = ' . $dbr->addQuotes( $start ) . ' OR ' .
						'(cul_range_end >= ' . $dbr->addQuotes( $start ) . ' AND ' .
						'cul_range_start <= ' . $dbr->addQuotes( $end ) . ')';
				} else {
					$searchConds[] = 
						'(cul_target_hex >= ' . $dbr->addQuotes( $start ) . ' AND ' .
						'cul_target_hex <= ' . $dbr->addQuotes( $end ) . ') OR ' .
						'(cul_range_end >= ' . $dbr->addQuotes( $start ) . ' AND ' .
						'cul_range_start <= ' . $dbr->addQuotes( $end ) . ')';
				}
			} else {
				// Is it a user?
				$user = User::newFromName( $target );
				if ( $user && $user->getID() ) {
					$searchConds['cul_type'] = array( 'userips', 'useredits' );
					$searchConds['cul_target_id'] = $user->getID();
				} elseif ( $target ) {
					return array( 'error' =>  'nosuchusershort' );
				}
			}
		}
	
		$searchConds[] = 'user_id = cul_user';
		
		$ret = array(
			'tables' => array( 
				'cu_log', 
				'user' 
			),
			'fields' => array(
				'cul_id', 
				'cul_timestamp', 
				'cul_user', 
				'cul_reason', 
				'cul_type',
				'cul_target_id', 
				'cul_target_text', 
				'cul_api', 
				'user_name'
			),
			'conds'  => $searchConds,
			'options' => array()
		);
		
		##FIXME: How well will this work for renames?
		if( !$expanded ) {
			$ret['options']['GROUP BY'] = "DATE_FORMAT( cul_timestamp, '%Y%m%d%H' ), cul_user, cul_target_text, cul_type, cul_reason, cul_api";
		}
		
		return $ret;
	}
}