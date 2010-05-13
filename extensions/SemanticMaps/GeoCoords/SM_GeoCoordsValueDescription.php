<?php

/**
 * File holding the SMGeoCoordsValueDescription class.
 * 
 * @file SM_GeoCoordsValueDescription.php
 * @ingroup SemanticMaps
 * 
 * @author Jeroen De Dauw
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

/**
 * Description of one data value of type Goegraphical Coordinates.
 *
 * @author Jeroen De Dauw
 * 
 * @ingroup SemanticMaps
 */
class SMGeoCoordsValueDescription extends SMWValueDescription {
	
	/**
	 * @param SMGeoCoordsValue $dataValue
	 */
	public function __construct( SMGeoCoordsValue $dataValue, $comparator ) {
		parent::__construct( $dataValue, $comparator );	
	}

	/**
	 * @see SMWDescription::getQueryString
	 * 
	 * @param Boolean $asvalue
	 */
	public function getQueryString( $asValue = false ) {
		if ( $this->m_datavalue !== null ) {
			$queryString = $this->m_datavalue->getWikiValue();
			return $asValue ? $queryString : "[[$queryString]]";
		} else {
			return $asValue ? '+' : '';
		}
	}
	
	/**
	 * @see SMWDescription::getSQLCondition
	 * 
	 * @param string $tableName
	 * @param DatabaseBase $dbs
	 * 
	 * @return true
	 */
	public function getSQLCondition( $tableName, DatabaseBase $dbs ) {
		$dataValue = $this->getDatavalue();
		
		// Only execute the query when the description's type is geographical coordinates,
		// the description is valid, and the near comparator is used.
		if ( $dataValue->getTypeID() != '_geo'
			|| !$dataValue->isValid()
			) return false;

		$comparator = false;
		
		switch ( $this->getComparator() ) {
			case SMW_CMP_EQ: $comparator = '='; break;
			case SMW_CMP_LEQ: $comparator = '<='; break;
			case SMW_CMP_GEQ: $comparator = '>='; break;
			case SMW_CMP_NEQ: $comparator = '!='; break;
		}
		
		if ( $comparator ) {
			$coordinates = $dataValue->getCoordinateSet();
			
			// TODO: Would be safer to have a solid way of determining what's the lat and lon field, instead of assuming it's in this order.
			$conditions = array();
			$conditions[] = "{$tableName}.lat {$comparator} {$coordinates['lat']}";
			$conditions[] = "{$tableName}.lon {$comparator} {$coordinates['lon']}";
			
			return implode( ' && ', $conditions );			
		}
		else {
			return false;
		}
	}
	
}