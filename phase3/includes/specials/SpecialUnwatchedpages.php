<?php
/**
 * @file
 * @ingroup SpecialPage
 */

/**
 * A special page that displays a list of pages that are not on anyones watchlist.
 * Implements Special:Unwatchedpages
 *
 * @ingroup SpecialPage
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @copyright Copyright © 2005, Ævar Arnfjörð Bjarmason
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
class UnwatchedpagesPage extends QueryPage {

	function __construct() {
		SpecialPage::__construct( 'Unwatchedpages' );
	}
	
	// inexpensive?
	function isExpensive() { return true; }
	function isSyndicated() { return false; }

	function getQueryInfo() {
		return array (
			'tables' => array ( 'page', 'watchlist' ),
			'fields' => array ( 'page_namespace AS namespace',
					'page_title AS title',
					'page_namespace AS value' ),
			'conds' => array ( 'wl_title IS NULL',
					'page_is_redirect' => 0,
					"page_namespace != '" . NS_MEDIAWIKI .
					"'" ),
			'join_conds' => array ( 'watchlist' => array (
				'LEFT JOIN', array ( 'wl_title = page_title',
					'wl_namespace = page_namespace' ) ) )
		);
	}

	function sortDescending() { return false; }
	
	function getOrderFields() {
		return array( 'page_namespace', 'page_title' );
	}

	function formatResult( $skin, $result ) {
		global $wgContLang;

		$nt = Title::makeTitle( $result->namespace, $result->title );
		$text = $wgContLang->convert( $nt->getPrefixedText() );

		$plink = $skin->makeKnownLinkObj( $nt, htmlspecialchars( $text ) );
		$wlink = $skin->makeKnownLinkObj( $nt, wfMsgHtml( 'watch' ), 'action=watch' );

		return wfSpecialList( $plink, $wlink );
	}
}