<?php

/**
 * This groupe contains all OpenLayers related files of the Maps extension.
 * 
 * @defgroup MapsOpenLayers OpenLayers
 * @ingroup Maps
 */

/**
 * This file holds the general information for the OpenLayers service
 *
 * @file Maps_OpenLayers.php
 * @ingroup MapsOpenLayers
 *
 * @author Jeroen De Dauw
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$egMapsServices['openlayers'] = array(
									'pf' => array(
										'display_point' => array('class' => 'MapsOpenLayersDispPoint', 'file' => 'OpenLayers/Maps_OpenLayersDispPoint.php', 'local' => true),
										'display_map' => array('class' => 'MapsOpenLayersDispMap', 'file' => 'OpenLayers/Maps_OpenLayersDispMap.php', 'local' => true),
										),
									'classes' => array(
											array('class' => 'MapsOpenLayers', 'file' => 'OpenLayers/Maps_OpenLayers.php', 'local' => true)
											),
									'aliases' => array('layers', 'openlayer'),
									);
/**
 * Class for OpenLayers initialization.
 * 
 * @ingroup MapsOpenLayers
 * 
 * @author Jeroen De Dauw
 */						
class MapsOpenLayers {
	
	const SERVICE_NAME = 'openlayers';	
	
	private static $loadedBing = false; 
	private static $loadedYahoo = false;
	private static $loadedOL = false;
	private static $loadedOSM = false; 	
	
	public static function initialize() {
		self::initializeParams();
		Validator::addOutputFormat('olgroups', array(__CLASS__, 'unpackLayerGroups'));
	}
	
	private static function initializeParams() {
		global $egMapsServices, $egMapsOLLayers, $egMapsOLControls, $egMapsOpenLayersZoom;
		
		$egMapsServices[self::SERVICE_NAME]['parameters']['zoom']['default'] = $egMapsOpenLayersZoom;
		$egMapsServices[self::SERVICE_NAME]['parameters']['zoom']['criteria']['in_range'] = array(0, 19);
		
		$egMapsServices[self::SERVICE_NAME]['parameters'] = array(	
									'controls' => array(
										'type' => array('string', 'list'),
										'criteria' => array(
											'in_array' => self::getControlNames()
											),
										'default' => $egMapsOLControls,
										'output-type' => array('list', ',', '\'')	
										),
									'layers' => array(
										'type' => array('string', 'list'),
										'criteria' => array(
											'in_array' => self::getLayerNames(true)
											),
										'default' => $egMapsOLLayers,
										'output-types' => array(
											'unique_items',
											'olgroups',
											array('filtered_array', self::getLayerNames()),
											)						
										),							
									);
	}
	
	/**
	 * Returns the names of all supported controls. 
	 * This data is a copy of the one used to actually translate the names
	 * into the controls, since this resides client side, in OpenLayerFunctions.js. 
	 * 
	 * @return array
	 */		
	public static function getControlNames() {
		return array(
					  'argparser', 'attribution', 'button', 'dragfeature', 'dragpan', 
	                  'drawfeature', 'editingtoolbar', 'getfeature', 'keyboarddefaults', 'layerswitcher',
	                  'measure', 'modifyfeature', 'mousedefaults', 'mouseposition', 'mousetoolbar',
	                  'navigation', 'navigationhistory', 'navtoolbar', 'overviewmap', 'pan',
	                  'panel', 'panpanel', 'panzoom', 'panzoombar', 'autopanzoom', 'permalink',
	                  'scale', 'scaleline', 'selectfeature', 'snapping', 'split', 
	                  'wmsgetfeatureinfo', 'zoombox', 'zoomin', 'zoomout', 'zoompanel',
	                  'zoomtomaxextent'
			);
	}

	/**
	 * Returns the names of all supported layers.
	 * 
	 * @return array
	 */		
	public static function getLayerNames($includeGroups = false) {
		global $egMapsOLAvailableLayers, $egMapsOLLayerGroups;
		$keys = array_keys($egMapsOLAvailableLayers);
		if ($includeGroups) $keys = array_merge($keys, array_keys($egMapsOLLayerGroups));
		return $keys;
	}	
	
	/**
	 * Load the dependencies of a layer if they are not loaded yet
	 *
	 * @param string $output The output to which the html to load the dependencies needs to be added
	 * @param string $layer The layer to check (and load the dependencies for
	 */ 
	public static function loadDependencyWhenNeeded(&$output, $layer) {
		global $wgJsMimeType;
		global $egGoogleMapsOnThisPage, $egMapsScriptPath, $egMapsStyleVersion;
		
		switch ($layer) {
			case 'google-normal' : case 'google-sattelite' : case 'google-hybrid' : case 'google-physical' :
				if (empty($egGoogleMapsOnThisPage)) {
					$egGoogleMapsOnThisPage = 0;
					MapsGoogleMaps::addGMapDependencies($output);
					}
				break;
			case 'bing-normal' : case 'bing-satellite' : case 'bing-hybrid' :
				if (!self::$loadedBing) { $output .= "<script type='$wgJsMimeType' src='http://dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6.1'></script>\n"; self::$loadedBing = true; }
				break;
			case 'yahoo-normal' : case 'yahoo-satellite' : case 'yahoo-hybrid' :
				if (!self::$loadedYahoo) { $output .= "<style type='text/css'> #controls {width: 512px;}</style><script src='http://api.maps.yahoo.com/ajaxymap?v=3.0&appid=euzuro-openlayers'></script>\n"; self::$loadedYahoo = true; }
				break;
			case 'openlayers-wms' :
				if (!self::$loadedOL) { $output .= "<script type='$wgJsMimeType' src='http://clients.multimap.com/API/maps/1.1/metacarta_04'></script>\n"; self::$loadedOL = true; }
				break;
			case 'osmarender' : case 'osm-mapnik' : case 'osm-cyclemap' :
				if (!self::$loadedOSM) { $output .= "<script type='$wgJsMimeType' src='$egMapsScriptPath/OpenLayers/OSM/OpenStreetMap.js?$egMapsStyleVersion'></script>\n"; self::$loadedOSM = true; }
				break;													
		}		
	}	
	
	/**
	 * If this is the first open layers map on the page, load the API, styles and extra JS functions
	 * 
	 * @param string $output
	 */
	public static function addOLDependencies(&$output) {
		global $wgJsMimeType;
		global $egOpenLayersOnThisPage, $egMapsScriptPath, $egMapsStyleVersion;
		
		if (empty($egOpenLayersOnThisPage)) {
			$egOpenLayersOnThisPage = 0;
			
			$output .="<link rel='stylesheet' href='$egMapsScriptPath/OpenLayers/OpenLayers/theme/default/style.css' type='text/css' />
			<script type='$wgJsMimeType' src='$egMapsScriptPath/OpenLayers/OpenLayers/OpenLayers.js'></script>		
			<script type='$wgJsMimeType' src='$egMapsScriptPath/OpenLayers/OpenLayerFunctions.js?$egMapsStyleVersion'></script>
			<script type='$wgJsMimeType'>initOLSettings(200, 100);</script>\n";
		}		
	}
		
	/**
	 * Build up a csv string with the layers, to be outputted as a JS array
	 *
	 * @param string $output
	 * @param string $layers
	 * @return csv string
	 */
	public static function createLayersStringAndLoadDependencies(&$output, array $layers) {
		global $egMapsOLAvailableLayers;
		$layerStr = array();
		
		foreach ($layers as $layer) {
			self::loadDependencyWhenNeeded($output, $layer);
			$layerStr[] = $egMapsOLAvailableLayers[$layer];
		}
		
		return 'new ' . implode(',new ', $layerStr);
	}
	
	public static function unpackLayerGroups(&$layers) {
		global $egMapsOLLayerGroups;
		
		$unpacked = array();
		
		foreach($layers as $layerOrGroup) {
			if (array_key_exists($layerOrGroup, $egMapsOLLayerGroups)) {
				$unpacked = array_merge($unpacked, $egMapsOLLayerGroups[$layerOrGroup]);
			}
			else {
				$unpacked[] = $layerOrGroup;
			}
		}
		
		$layers = $unpacked;
	}
	
}
																		