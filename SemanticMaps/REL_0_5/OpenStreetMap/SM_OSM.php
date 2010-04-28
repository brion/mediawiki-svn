<?php

/**
 * This groupe contains all OpenStreetMap related files of the Semantic Maps extension.
 * 
 * @defgroup SMOSM OpenStreetMap
 * @ingroup SemanticMaps
 */

/**
 * This file holds the general information for the OpenStreetMap service.
 *
 * @file SM_OSM.php
 * @ingroup SMOSM
 *
 * @author Jeroen De Dauw
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$egMapsServices['osm']['qp'] = array('class' => 'SMOSMQP', 'file' => 'SemanticMaps/OpenStreetMap/SM_OSMQP.php', 'local' => false);
//$egMapsServices['osm']['fi'] = array('class' => 'SMOSMFormInput', 'file' => 'SemanticMaps/OpenStreetMap/SM_OSMFormInput.php', 'local' => false);