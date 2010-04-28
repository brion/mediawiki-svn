<?php
  
/**
 * Initialization file for the Semantic Maps extension.
 * Extension documentation: http://www.mediawiki.org/wiki/Extension:Semantic_Maps
 *
 * @file SemanticMaps.php
 * @ingroup SemanticMaps
 *
 * @author Jeroen De Dauw 
 */

/**
 * This documenation group collects source code files belonging to Semantic Maps.
 *
 * Please do not use this group name for other code. If you have an extension to 
 * Semantic Maps, please use your own group defenition.
 * 
 * @defgroup SemanticMaps Semantic Maps
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

define('SM_VERSION', '0.3.1');

$smgScriptPath = $wgScriptPath . '/extensions/SemanticMaps';
$smgIP = $IP . '/extensions/SemanticMaps';

$wgExtensionFunctions[] = 'smfSetup';

$wgHooks['AdminLinks'][] = 'smfAddToAdminLinks';

$wgExtensionMessagesFiles['SemanticMaps'] = $smgIP . '/SemanticMaps.i18n.php';

// Autoload the general classes
$wgAutoloadClasses['SMMapPrinter'] = $smgIP . '/SM_MapPrinter.php';
$wgAutoloadClasses['SMMapper'] = $smgIP . '/SM_Mapper.php';
$wgAutoloadClasses['SMFormInput'] = $smgIP . '/SM_FormInput.php';

// Add the services
$egMapsServices['googlemaps']['qp'] = array('class' => 'SMGoogleMaps', 'file' => 'GoogleMaps/SM_GoogleMaps.php', 'local' => true);
$egMapsServices['googlemaps']['fi'] = array('class' => 'SMGoogleMapsFormInput', 'file' => 'GoogleMaps/SM_GoogleMapsFormInput.php', 'local' => true);

$egMapsServices['yahoomaps']['qp'] = array('class' => 'SMYahooMaps', 'file' => 'YahooMaps/SM_YahooMaps.php', 'local' => true);
$egMapsServices['yahoomaps']['fi'] = array('class' => 'SMYahooMapsFormInput', 'file' => 'YahooMaps/SM_YahooMapsFormInput.php', 'local' => true);

$egMapsServices['openlayers']['qp'] = array('class' => 'SMOpenLayers', 'file' => 'OpenLayers/SM_OpenLayers.php', 'local' => true);
$egMapsServices['openlayers']['fi'] = array('class' => 'SMOpenLayersFormInput', 'file' => 'OpenLayers/SM_OpenLayersFormInput.php', 'local' => true);

/**
 * Initialization function for the Semantic Maps extension
 *
 */
function smfSetup() {
	global $wgExtensionCredits, $egMapsServices;

	$services_list = implode(', ', array_keys($egMapsServices));
	$services_count = count( $egMapsServices );
	
	wfLoadExtensionMessages( 'SemanticMaps' );
	
	$wgExtensionCredits['other'][]= array(
		'path' => __FILE__,
		'name' => wfMsg('semanticmaps_name'),
		'version' => SM_VERSION,
		'author' => array("[http://bn2vs.com Jeroen De Dauw]", "Yaron Koren", "Robert Buzink"),
		'url' => 'http://www.mediawiki.org/wiki/Extension:Semantic_Maps',
		'description' => wfMsgExt( 'semanticmaps_desc', 'parsemag', $services_list, $services_count ),
		'descriptionmsg' => wfMsgExt( 'semanticmaps_desc', 'parsemag', $services_list, $services_count ),
	);

	smfInitFormHook('map');
	smfInitFormat('map', array('class' => 'SMMapper', 'file' => 'SM_Mapper.php', 'local' => true));
	
	foreach($egMapsServices as $serviceName => $serviceData) {
		$hasQP = array_key_exists('qp', $serviceData);
		$hasFI = array_key_exists('fi', $serviceData);
		
		// If the service has no QP and no FI, skipt it and continue with the next one.
		if (!$hasQP && !$hasFI) continue;
		
		// Add the result format and form input type for the service name when needed.
		if ($hasQP) smfInitFormat($serviceName, $serviceData['qp']);
		if ($hasFI) smfInitFormHook($serviceName, $serviceData['fi']);
		
		// Loop through the service alliases, and add them as result formats and form input types when needed.
		foreach ($serviceData['aliases'] as $alias) {
			if ($hasQP) smfInitFormat($alias, $serviceData['qp']);
			if ($hasFI) smfInitFormHook($alias, $serviceData['fi'], $serviceName);
		}
	}
	
}

/**
 * Add the result format for a mapping service or alias
 *
 * @param string $format
 * @param array $qp
 */
function smfInitFormat($format, array $qp) {
	global $wgAutoloadClasses, $smwgResultFormats, $smgIP;
	
	if (! array_key_exists($qp['class'], $wgAutoloadClasses)) {
		$file = $qp['local'] ? $smgIP . '/' . $qp['file'] : $qp['file'];
		$wgAutoloadClasses[$qp['class']] = $file;
	}
	
	if (isset($smwgResultFormats)) {
		$smwgResultFormats[$format] = $qp['class'];
	}
	else {
		SMWQueryProcessor::$formats[$format] = $qp['class'];
	}	
}

/**
 * Adds a mapping service's form hook
 *
 * @param string $service
 * @param array $fi
 * @param strig $mainName
 */
function smfInitFormHook($service, array $fi = null, $mainName = '') {
	global $wgAutoloadClasses, $sfgFormPrinter, $smgIP;

	if (isset($fi)) {
		if (! array_key_exists($fi['class'], $wgAutoloadClasses)) {
			$file = $fi['local'] ? $smgIP . '/' . $fi['file'] : $fi['file'];
			$wgAutoloadClasses[$fi['class']] = $file;
		}
	}
	
	// Add the form input hook for the service
	$field_args = array();
	if (strlen($mainName) > 0) $field_args['service_name'] = $mainName;
	$sfgFormPrinter->setInputTypeHook($service, 'smfSelectFormInputHTML', $field_args);
}

/**
 * Class for the form input type 'map'. The relevant form input class is called depending on the provided service.
 *
 * @param unknown_type $coordinates
 * @param unknown_type $input_name
 * @param unknown_type $is_mandatory
 * @param unknown_type $is_disabled
 * @param array $field_args
 * @return unknown
 */
function smfSelectFormInputHTML($coordinates, $input_name, $is_mandatory, $is_disabled, array $field_args) {
	global $egMapsServices;
	
	// If service_name is set, use this value, and ignore any given
	// service parameters
	// This will prevent ..input type=googlemaps|service=yahoo.. from
	// showing up as a Yahoo! Maps map
	if (array_key_exists('service_name', $field_args)) {
		$service_name = $field_args['service_name'];
	}
	elseif (array_key_exists('service', $field_args)) {
		$service_name = $field_args['service'];
	}
	else{
		$service_name = null;
	}
	
	$service_name = MapsMapper::getValidService($service_name, 'fi');
	
	if (array_key_exists('fi', $egMapsServices[$service_name])) {
		$formInput = new $egMapsServices[$service_name]['fi']['class']();
		
		// Get and return the form input HTML from the hook corresponding with the provided service
		return $formInput->formInputHTML($coordinates, $input_name, $is_mandatory, $is_disabled, $field_args);	
	}
	else {
		return "<b>ERROR: Form input for ".$field_args['service']." not found</b>";
	}
	
}

/**
 * Returns html for an html input field with a default value that will automatically dissapear when
 * the user clicks in it, and reappers when the focus on the field is lost and it's still empty.
 *
 * @param string $id
 * @param string $value
 * @param string $args
 * @return html
 */
function smfGetDynamicInput($id, $value, $args='') {
	// By De Dauw Jeroen - November 2008 - http://code.bn2vs.com/viewtopic.php?t=120
	return '<input id="'.$id.'" '.$args.' value="'.$value.'" onfocus="if (this.value==\''.$value.'\') {this.value=\'\';}" onblur="if (this.value==\'\') {this.value=\''.$value.'\';}" />';
}

/**
 * Adds a link to Admin Links page
 */
function smfAddToAdminLinks(&$admin_links_tree) {
    $displaying_data_section = $admin_links_tree->getSection(wfMsg('smw_adminlinks_displayingdata'));
    // Escape if SMW hasn't added links
    if (is_null($displaying_data_section))
        return true;
    $smw_docu_row = $displaying_data_section->getRow('smw');
    wfLoadExtensionMessages('SemanticMaps');
    $sm_docu_label = wfMsg('adminlinks_documentation', wfMsg('semanticmaps_name'));
    $smw_docu_row->addItem(AlItem::newFromExternalLink("http://www.mediawiki.org/wiki/Extension:Semantic_Maps", $sm_docu_label));
    return true;
}
