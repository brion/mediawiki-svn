<?php
/**
 * New version of MediaWiki web-based config/installation
 *
 * @file
 */

define( 'MW_CONFIG_CALLBACK', 'CoreInstaller::overrideConfig' );
define( 'MEDIAWIKI_INSTALL', true );

chdir( ".." );
require( './includes/WebStart.php' );

$installer = new WebInstaller( $wgRequest );

if ( !$installer->startSession() ) {
	$installer->finish();
	exit;
}

$session = isset( $_SESSION['installData'] ) ? $_SESSION['installData'] : array();

if ( isset( $session['settings']['_UserLang'] ) ) {
	$langCode = $session['settings']['_UserLang'];
} elseif ( !is_null( $wgRequest->getVal( 'UserLang' ) ) ) {
	$langCode = $wgRequest->getVal( 'UserLang' );
} else {
	$langCode = 'en';
}
$wgLang = Language::factory( $langCode );

$wgMetaNamespace = $wgCanonicalNamespaceNames[NS_PROJECT];

$session = $installer->execute( $session );

$_SESSION['installData'] = $session;

