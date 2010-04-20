<?php
/**
 * @file
 * @ingroup SpecialPage
 */

/**
 * A special page to show pages ordered by the number of pages linking to them.
 * Implements Special:Mostlinked
 *
 * @ingroup SpecialPage
 *
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @author Rob Church <robchur@gmail.com>
 * @copyright Copyright © 2005, Ævar Arnfjörð Bjarmason
 * @copyright © 2006 Rob Church
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
class MostlinkedPage extends QueryPage {

	function __construct() {
		SpecialPage::__construct( 'Mostlinked' );
	}
	
	function isExpensive() { return true; }
	function isSyndicated() { return false; }

	function getQueryInfo() {
		return array (
			'tables' => array ( 'pagelinks', 'page' ),
			'fields' => array ( 'pl_namespace AS namespace',
					'pl_title AS title',
					'COUNT(*) AS value',
					'page_namespace' ),
			'options' => array ( 'HAVING' => 'COUNT(*) > 1',
				'GROUP BY' => 'pl_namespace, pl_title, '.
						'page_namespace' ),
			'join_conds' => array ( 'page' => array ( 'LEFT JOIN',
					array ( 'page_namespace = pl_namespace',
						'page_title = pl_title' ) ) )
		);
	}

	/**
	 * Pre-fill the link cache
	 */
	function preprocessResults( $db, $res ) {
		if( $db->numRows( $res ) > 0 ) {
			$linkBatch = new LinkBatch();
			while( $row = $db->fetchObject( $res ) )
				$linkBatch->add( $row->namespace, $row->title );
			$db->dataSeek( $res, 0 );
			$linkBatch->execute();
		}
	}

	/**
	 * Make a link to "what links here" for the specified title
	 *
	 * @param $title Title being queried
	 * @param $caption String: text to display on the link
	 * @param $skin Skin to use
	 * @return String
	 */
	function makeWlhLink( &$title, $caption, &$skin ) {
		$wlh = SpecialPage::getTitleFor( 'Whatlinkshere', $title->getPrefixedDBkey() );
		return $skin->linkKnown( $wlh, $caption );
	}

	/**
	 * Make links to the page corresponding to the item, and the "what links here" page for it
	 *
	 * @param $skin Skin to be used
	 * @param $result Result row
	 * @return string
	 */
	function formatResult( $skin, $result ) {
		global $wgLang;
		$title = Title::makeTitleSafe( $result->namespace, $result->title );
		if ( !$title ) {
			return '<!-- ' . htmlspecialchars( "Invalid title: [[$title]]" ) . ' -->';
		}
		$link = $skin->link( $title );
		$wlh = $this->makeWlhLink( $title,
			wfMsgExt( 'nlinks', array( 'parsemag', 'escape'),
				$wgLang->formatNum( $result->value ) ), $skin );
		return wfSpecialList( $link, $wlh );
	}
}
