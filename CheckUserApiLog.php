<?php

class CheckUserApiLog extends ApiQueryBase { 

	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'cul' );
	} 
	
	public function execute() {
		global $wgUser;
		
		$this->getMain()->setVaryCookie();
		
		// Before doing anything at all, let's check permissions
		if ( !$wgUser->isAllowed( 'checkuser-log' ) ) {
			$this->dieUsage( 'You don\'t have permission to see the checkuser log', 'permissiondenied' );
		}
		
		$params = $this->extractRequestParams();
		
		$queryParams = CheckUserLog::getQuery( $params['initiator'], $params['target'], null, null, $params['expand'], $params['xff'] );
		
		if( isset( $queryParams['error'] ) ) {
			$this->dieUsageMsg( array( $queryParams['error'] ) );
		}
		
		$this->addTables( $queryParams['tables'] );
		$this->addFields( $queryParams['fields'] );
		
		foreach( $queryParams['conds'] as $id => $cond ) {
			$this->addWhereFld( $id, $cond );
		}
		
		$this->addWhereRange( 'cul_timestamp', $params['dir'], $params['start'], $params['end'] );
		
		foreach( $queryParams['options'] as $id => $opt ) {
			$this->addOption( $id, $opt );
		}
		
		$this->addOption( 'LIMIT', $params['limit'] + 1);
		
		$res = $this->select( __METHOD__ );
		
		$count = 0;
		foreach( $res as $id => $row ) {
			if ( ++$count > $params['limit'] ) {
				// We've had enough
				$this->setContinueEnumParameter( 'start', wfTimestamp( TS_ISO_8601, $row->cul_timestamp ) );
				break;
			}
			
			$logEntry = array();
			
			if( in_array( 'user', $params['prop'] ) ) $logEntry['user'] = $row->user_name;
			if( in_array( 'target', $params['prop'] ) ) $logEntry['target'] = $row->cul_target_text;
			if( in_array( 'timestamp', $params['prop'] ) ) $logEntry['timestamp'] = wfTimestamp( TS_ISO_8601, $row->cul_timestamp );
			if( in_array( 'reason', $params['prop'] ) ) $logEntry['reason'] = $row->cul_reason;
			if( in_array( 'type', $params['prop'] ) ) $logEntry['type'] = $row->cul_type;
			if( in_array( 'api', $params['prop'] ) && intval( $row->cul_api ) ) $logEntry['api'] = '';
			
			$fit = $this->getResult()->addValue( array( 'query', $this->getModuleName() ), null, $logEntry );
			if ( !$fit ) {
				$this->setContinueEnumParameter( 'start', wfTimestamp( TS_ISO_8601, $row->cul_timestamp ) );
				break;
			}
		}

		$this->getResult()->setIndexedTagName_internal( array( 'query', $this->getModuleName() ), 'checkuserlog' );


	}
	
	public function getAllowedParams() { 
		return array(
			'target' => array( 
				ApiBase::PARAM_TYPE => 'user',
			),
			'initiator' => array( 
				ApiBase::PARAM_TYPE => 'user',
			),
			'start' => array(
				ApiBase::PARAM_TYPE => 'timestamp'
			),
			'end' => array(
				ApiBase::PARAM_TYPE => 'timestamp'
			),
			'dir' => array(
				ApiBase::PARAM_DFLT => 'older',
				ApiBase::PARAM_TYPE => array(
					'newer',
					'older'
				)
			),
			'prop' => array(
				ApiBase::PARAM_ISMULTI => true,
				ApiBase::PARAM_DFLT => 'user|target|timestamp|reason|type|api',
				ApiBase::PARAM_TYPE => array(
					'user',
					'target',
					'timestamp',
					'reason',
					'type',
					'api',
				)
			), 
			'limit' => array(
				ApiBase::PARAM_DFLT => 10,
				ApiBase::PARAM_TYPE => 'limit',
				ApiBase::PARAM_MIN => 1,
				ApiBase::PARAM_MAX => ApiBase::LIMIT_BIG1,
				ApiBase::PARAM_MAX2 => ApiBase::LIMIT_BIG2
			), 
			'expand' => array(
				ApiBase::PARAM_DFLT => false,
				ApiBase::PARAM_TYPE => 'boolean',
			),
			'xff' => array(
				ApiBase::PARAM_DFLT => false,
				ApiBase::PARAM_TYPE => 'boolean',
			),
		); 
	}
	
	public function getParamDescription() { 
		return array(
			'target' => 'The IP or username that was checked',
			'initiator' => 'The user that ran the checkuser',
			'start' => 'The timestamp to start enumerating from',
			'end' => 'The timestamp to stop enumerating at',
			'dir' => 'The direction in which to enumerate',
			'limit' => 'The maximum amount of calls to list',
			'expand' => 'List all logs, including similar logs',
			'xff' => 'Show edits routed through the target IP using XFF (only when using the target parameter)',
			'prop' => array(
				'Which properties to get',
				' user       - Adds the username of the checking user',
				' target     - Adds the username or IP that was checked',
				' timestamp  - Adds the time and date of checkuser',
				' reason     - Adds the reason for the call',
				' type       - Adds the type of checkuser call.',
				' api        - Adds whether or not the call was from the API',
			),
		);
	}
	
	public function getDescription() { 
		return 'List a log of all previous checkuser calls';
	}
	
	public function getPossibleErrors() { 
		return array_merge( parent::getPossibleErrors(), array(
			array( 'code' => 'permissiondenied', 'info' => 'You don\'t have permission to see the checkuser log' ),
			array( 'code' => 'culnosuchuser', 'info' => 'The user you specified doesn\'t exist' ),
		) );
	}
	
	public function getExamples() { 
		return array(
			'api.php?action=query&list=checkuserlog',
			'api.php?action=query&list=checkuserlog&cultarget=Example&culexpand'
		);
	}
	
	public function getVersion() { 
		//return __CLASS__ . ': $Id$';
		##FIXME
	}
}
