<?php
/**
 * Extension for web-based editing of large numbers of Messages*.php files.
 *
 * This extension is insecure. Do not enable it on a public wiki. It provides
 * unauthenticated write access to the PHP files in your MediaWiki installation.
 */

$wgExtensionCredits['specialpage'][] = array(
	'name' => 'Edit Messages',
	'url' => 'http://www.mediawiki.org/wiki/Extension:EditMessages',
	'version' => preg_replace('/^.* (\d\d\d\d-\d\d-\d\d) .*$/', '\1', '$LastChangedDate$'), #just the date of the last change
	'author' => 'Tim Starling',
	'descriptionmsg' => 'editmessages-desc',
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['EditMessages'] = $dir . 'EditMessages.i18n.php';
$wgAutoloadClasses['EditMessagesPage'] = $dir . 'EditMessages_body.php';
$wgSpecialPages['EditMessages'] = 'EditMessagesPage';
