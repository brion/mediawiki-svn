<?php

/**
 * This groupe contains all Yahoo! Maps related files of the Maps extension.
 * 
 * @defgroup MapsYahooMaps Yahoo! Maps
 * @ingroup Maps
 */

/**
 * This file holds the general information for the Yahoo! Maps service
 *
 * @file Maps_YahooMaps.php
 * @ingroup MapsYahooMaps
 *
 * @author Jeroen De Dauw
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$egMapsServices['yahoomaps'] = array(
									'pf' => array(
										'display_point' => array('class' => 'MapsYahooMapsDispPoint', 'file' => 'YahooMaps/Maps_YahooMapsDispPoint.php', 'local' => true),
										'display_map' => array('class' => 'MapsYahooMapsDispMap', 'file' => 'YahooMaps/Maps_YahooMapsDispMap.php', 'local' => true),
										),
									'classes' => array(
											array('class' => 'MapsYahooMapsUtils', 'file' => 'YahooMaps/Maps_YahooMapsUtils.php', 'local' => true)
											),
									'aliases' => array('yahoo', 'yahoomap', 'ymap', 'ymaps'),
									'parameters' => array(
											'type' => array('map-type'),
											'types' => array('map-types', 'map types'),
											'autozoom' => array('auto zoom', 'mouse zoom', 'mousezoom')
											)
									);