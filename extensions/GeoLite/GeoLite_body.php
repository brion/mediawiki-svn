<?php 
/**
 * Special Page for GeoLite
 *
 * @file
 * @ingroup Extensions
 */

class SpecialGeoLite extends UnlistedSpecialPage {

	// Initialize special page
	public function __construct() {
		parent::__construct( 'GeoLite' );
	}
	
	public function execute( $sub ) {
		global $wgOut, $wgRequest;
		global $wgLandingPageBase, $wgChaptersPageBase, $wgChapterLandingPages, $wgLandingPageDefaultTarget;
		
		$lang = ( preg_match( '/^[A-Za-z-]+$/', $wgRequest->getVal( 'lang' ) ) ) ? $wgRequest->getVal( 'lang' ) : 'en' ;
		$utm_source = $wgRequest->getVal( 'utm_source' );
		$utm_medium = $wgRequest->getVal( 'utm_medium' );
		$utm_campaign = $wgRequest->getVal( 'utm_campaign' );
		$referrer = $wgRequest->getHeader( 'referer' );
		$target = $wgRequest->getVal( 'target', null );
		if ( !$target ) {
			$target = $wgLandingPageDefaultTarget;
		}
		
		$tracking = '?' . wfArrayToCGI( array( 
			'utm_source' => "$utm_source",
			'utm_medium' => "$utm_medium",
			'utm_campaign' => "$utm_campaign",
			'referrer' => "$referrer",
			'target' => "$target",
		) );
		
		$ip = ( $wgRequest->getVal( 'ip') ) ? $wgRequest->getVal( 'ip' ) : wfGetIP();
		
		if ( IP::isValid( $ip ) ) {
			$country = geoip_country_code_by_name( $ip );
			if ( is_string ( $country ) && array_key_exists( $country, $wgChapterLandingPages ) ) {
				$wgOut->redirect( $wgChaptersPageBase . '/' . $wgChapterLandingPages[$country] . $tracking );
				return;
			}
		}
		// No valid IP or chapter page - let's just go for the general one
		$wgOut->redirect( $wgLandingPageBase . $target . '/' . $lang . $tracking );
	}

}