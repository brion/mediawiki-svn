<?php

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['ImageMap'] = $dir . 'ImageMap.i18n.php';
$wgAutoloadClasses['ImageMap'] = $dir . 'ImageMap_body.php';
$wgExtensionFunctions[] = 'wfSetupImageMap';

$wgExtensionCredits['parserhook']['ImageMap'] = array(
	'name' => 'ImageMap',
	'version' => '2008-01-11',
	'author' => 'Tim Starling',
	'url' => 'http://www.mediawiki.org/wiki/Extension:ImageMap',
	'description' => 'Allows client-side clickable image maps using <nowiki><imagemap></nowiki> tag.',
);

function wfSetupImageMap() {
	global $wgParser;
	$wgParser->setHook( 'imagemap', array( 'ImageMap', 'render' ) );
}
