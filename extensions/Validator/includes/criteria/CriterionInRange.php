<?php

/**
 * Parameter criterion stating that the value must be in a certain range.
 * 
 * @since 0.4
 * 
 * @file CriterionInRange.php
 * @ingroup Validator
 * @ingroup Criteria
 * 
 * @author Jeroen De Dauw
 */
class CriterionInRange extends ItemParameterCriterion {
	
	protected $lowerBound;
	protected $upperBound;	
	
	/**
	 * Constructor.
	 * 
	 * @param integer $lowerBound
	 * @param integer $upperBound
	 * 
	 * @since 0.4
	 */
	public function __construct( $lowerBound, $upperBound ) {
		parent::__construct();
		
		$this->lowerBound = $lowerBound;
		$this->upperBound = $upperBound;		
	}
	
	/**
	 * @see ItemParameterCriterion::validate
	 */	
	protected function doValidation( $value ) {
		if ( ! is_numeric( $value ) ) {
			return false;
		}
		
		$value = (int)$value;
		
		return $value <= $this->upperBound && $value >= $this->lowerBound;		
	}
	
	/**
	 * @see ItemParameterCriterion::getItemErrorMessage
	 */	
	protected function getItemErrorMessage( Parameter $parameter ) {
		return wfMsgExt( 'validator_error_invalid_range', 'parsemag', $parameter->value );
	}
	
	/**
	 * @see ItemParameterCriterion::getListErrorMessage
	 */	
	protected function getListErrorMessage( Parameter $parameter, array $invalidItems ) {
		global $wgLang;
		return wfMsgExt( 'validator_list_error_invalid_range', 'parsemag', $wgLang->listToText( $invalidItems ), count( $invalidItems ) );
	}	
	
}