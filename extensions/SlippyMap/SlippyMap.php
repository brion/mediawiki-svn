<?php
if ( ! defined( 'MEDIAWIKI' ) )
	die();
/**
 * SlippyMap extension
 *
 * @file
 * @ingroup Extension
 *
 * This file contains the main include file for the SlippyMap
 * extension of MediaWiki.
 *
 * Usage: Add the following line in LocalSettings.php:
 * require_once( "$IP/extensions/SlippyMap/SlippyMap.php" );
 *
 * See the SlippyMap documenation on mediawiki.org for further usage
 * information.
 *
 * @link http://www.mediawiki.org/wiki/Extension:SlippyMap Documentation
 *
 * Copyright 2008 Harry Wood, Jens Frank, Grant Slater, Raymond Spekking and others
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
*/

$wgExtensionCredits['parserhook'][] = array(
	'path'				=> __FILE__,
	'name'				=> 'Slippy Map',
	'author'			=> array('[http://harrywood.co.uk Harry Wood]', 'Jens Frank', 'Aude', 'Ævar Arnfjörð Bjarmason'),
	'url'				=> 'http://www.mediawiki.org/wiki/Extension:SlippyMap',
	'description'		=> 'Adds a <tt>&lt;slippymap&gt;</tt> tag which allows for embedding of static & dynamic maps.Supports multiple map services including [http://openstreetmap.org OpenStreetMap] and NASA Worldwind',
	'descriptionmsg'	=> 'slippymap_desc',
);

/* Shortcut to this extension directory */
$dir = dirname( __FILE__ ) . '/';

/* i18n messages */
$wgExtensionMessagesFiles['SlippyMap']	= $dir . 'SlippyMap.i18n.php';

/* The classes which make up our extension*/
$wgAutoloadClasses['SlippyMapHook']				= $dir . 'SlippyMap.hook.php';
$wgAutoloadClasses['SlippyMap']					= $dir . 'SlippyMap.class.php';
$wgAutoloadClasses['SlippyMapExportCgiBin']		= $dir . 'SlippyMapExportCgiBin.class.php';
$wgAutoloadClasses['WorldWind']					= $dir . 'SlippyMap.worldwind.php';

/* Parser tests */
$wgParserTestFiles[]							= $dir . '/slippyMapParserTests.txt';

/* Parser hook */
if ( defined( 'MW_SUPPORTS_PARSERFIRSTCALLINIT' ) ) {
	$wgHooks['ParserFirstCallInit'][] = 'wfSlippyMapHook';
} else {
	// Legacy support
	$wgExtensionFunctions[] = 'wfSlippyMapHook';
}

function wfSlippyMapHook() {
	new SlippyMapHook;
	return true;
}

/*
 * Configuration variables for the SlippyMap extension.
 */

/**
 * $wgSlippyMapModes
 *
 * The keys in the array are allowed "mode=" values as passed to the
 * <slippymap> tag, and the values are the configuration for the mode.
 */
$wgSlippyMapModes = array(
	'osm' => array(
		// First layer = default
		'layers' => array( 'mapnik', 'osmarender', 'maplint', 'cycle' ),

		// Default "zoom=" argument
		'defaultZoomLevel' => 14,

		'static_rendering' => array(
			'type' => 'SlippyMapExportCgiBin',
			'options' => array(
				'base_url' => 'http://tile.openstreetmap.org/cgi-bin/export',

				'format' => 'png',
				'numZoomLevels' => 19,
				'maxResolution' => 156543.0339,
				'unit' => 'm',
				'sphericalMercator' => true
			),
		),
	),
	'satellite' => array(
		'layers' => array( 'urban', 'landsat', 'bluemarble' ),
		'defaultZoomLevel' => 14,
		'static_rendering' => null,
	),
);

/**
 * Minimum / maximum allowed width/height values for our maps.
 *
 * * Micromaps aren't useful to anybody and we don't want to worry
     about OpenLayers controls in an area smaller than a certain size.
 *
 * * We don't want to generate a giant static map, and restricting the
     size probably helps against some vandal attacks aimed at
     confusing users.
 */

$wgSlippyMapSizeRestrictions = array(
	'width'  => array( 100, 1000 ),
	'height' => array( 100, 1000 ),
);

/**
 * If true the a JS slippy map will be shown by default to supporting
 * clients, otherwise they'd have to click on the static image to
 * enable the slippy map. On non-JS enabled browsers will continue to
 * see see the static map and nothing else.
 */
$wgSlippyMapAutoLoadMaps = false;

