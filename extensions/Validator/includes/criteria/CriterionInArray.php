<?php

/**
 * Parameter criterion stating that the value must be in an array.
 * 
 * @since 0.4
 * 
 * @file CriterionInArray.php
 * @ingroup Validator
 * @ingroup Criteria
 * 
 * @author Jeroen De Dauw
 */
class CriterionInArray extends ItemParameterCriterion {
	
	/**
	 * List of allowed values.
	 * 
	 * @since 0.4
	 * 
	 * @var array
	 */
	protected $allowedValues;
	
	/**
	 * Constructor.
	 * 
	 * @param mixed $allowedValues
	 * 
	 * @since 0.4
	 */
	public function __construct( $allowedValues ) {
		parent::__construct();
		
		$this->allowedValues = (array)$allowedValues;
	}
	
	/**
	 * @see ItemParameterCriterion::validate
	 */	
	protected function doValidation( $value ) {
		return in_array( $value, $this->allowedValues );
	}
	
	/**
	 * @see ItemParameterCriterion::getItemErrorMessage
	 */	
	protected function getItemErrorMessage( Parameter $parameter ) {
		return wfMsgExt( 'validator_error_accepts_only', 'parsemag', $parameter->value );
	}
	
	/**
	 * @see ItemParameterCriterion::getListErrorMessage
	 */	
	protected function getListErrorMessage( Parameter $parameter, array $invalidItems ) {
		global $wgLang;
		return wfMsgExt( 'validator_error_accepts_only', 'parsemag', $wgLang->listToText( $invalidItems ), count( $invalidItems ) );
	}	
	
}