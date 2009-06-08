<?php
/**
 * @file
 * @ingroup SpecialPage
 */

/**
 * Special page lists all uncategorised pages in the
 * template namespace
 *
 * @ingroup SpecialPage
 * @author Rob Church <robchur@gmail.com>
 */
class UncategorizedTemplatesPage extends UncategorizedPagesPage {

	var $requestedNamespace = NS_TEMPLATE;
	
	public function __construct() {
		SpecialPage::__construct( 'Uncategorizedtemplates' );
	}
}
