<?php
/**
 * Generator for LocalSettings.php file.
 *
 * @file
 * @ingroup Deployment
 */

/**
 * Class for generating LocalSettings.php file.
 *
 * @ingroup Deployment
 * @since 1.17
 */
class LocalSettingsGenerator {
	
	private $extensions = array();
	private $values = array();
	private $configPath = '';
	private $dbSettings = '';
	private $safeMode = false;
	
	/**
	 * @var Installer
	 */
	private $installer;

	/**
	 * Constructor.
	 * 
	 * @param $installer Installer subclass
	 */
	public function __construct( Installer $installer ) {
		$this->installer = $installer;
		
		$this->configPath = $installer->getVar( 'IP' ) . '/config';
		$this->extensions = $installer->getVar( '_Extensions' );
		
		$db = $installer->getDBInstaller( $installer->getVar( 'wgDBtype' ) );

		$confItems = array_merge(
			array(
				'wgScriptPath', 'wgScriptExtension',
				'wgPasswordSender', 'wgImageMagickConvertCommand', 'wgShellLocale',
				'wgLanguageCode', 'wgEnableEmail', 'wgEnableUserEmail', 'wgDiff3',
				'wgEnotifUserTalk', 'wgEnotifWatchlist', 'wgEmailAuthentication',
				'wgDBtype', 'wgSecretKey', 'wgRightsUrl', 'wgSitename', 'wgRightsIcon',
				'wgRightsText', 'wgRightsCode', 'wgMainCacheType', 'wgEnableUploads',
				'wgMainCacheType', '_MemCachedServers', 'wgDBserver', 'wgDBuser',
				'wgDBpassword', 'wgUseInstantCommons'
			),
			$db->getGlobalNames()
		);
		
		$unescaped = array( 'wgRightsIcon' );
		$boolItems = array( 
			'wgEnableEmail', 'wgEnableUserEmail', 'wgEnotifUserTalk',
			'wgEnotifWatchlist', 'wgEmailAuthentication', 'wgEnableUploads', 'wgUseInstantCommons'
		);
		
		foreach( $confItems as $c ) {
			$val = $installer->getVar( $c );
			
			if( in_array( $c, $boolItems ) ) {
				$val = wfBoolToStr( $val );
			}
			
			if ( !in_array( $c, $unescaped ) ) {
				$val = self::escapePhpString( $val );
			}
			
			$this->values[$c] = $val;
		}
		
		$this->dbSettings = $db->getLocalSettings();
		$this->safeMode = $installer->getVar( '_SafeMode' );
		$this->values['wgEmergencyContact'] = $this->values['wgPasswordSender'];
	}

	/**
	 * Returns the escaped version of a string of php code.
	 * 
	 * @param $string String
	 * 
	 * @return String
	 */
	public static function escapePhpString( $string ) {
		if ( is_array( $string ) || is_object( $string ) ) {
			return false;
		}
		
		return strtr(
			$string,
			array(
				"\n" => "\\n",
				"\r" => "\\r",
				"\t" => "\\t",
				"\\" => "\\\\",
				"\$" => "\\\$",
				"\"" => "\\\""
			)
		);
	}

	/**
	 * Return the full text of the generated LocalSettings.php file,
	 * including the extensions
	 * 
	 * @return String
	 */
	public function getText() {
		$localSettings = $this->getDefaultText();
		
		if( count( $this->extensions ) ) {
			$localSettings .= "\n# The following extensions were automatically enabled:\n";
			
			foreach( $this->extensions as $ext ) {
				$localSettings .= "require( 'extensions/$ext/$ext.php' );\n";
			}
		}

		return $localSettings;
	}

	/**
	 * @return String
	 */
	private function buildMemcachedServerList() {
		$servers = $this->values['_MemCachedServers'];
		
		if( !$servers ) {
			return 'array()';
		} else {
			$ret = 'array( ';
			$servers = explode( ',', $servers );
			
			foreach( $servers as $srv ) {
				$srv = trim( $srv );
				$ret .= "'$srv', ";
			}
			
			return rtrim( $ret, ', ' ) . ' )';
		}
	}

	/**
	 * @return String
	 */	
	private function getDefaultText() {
		if( !$this->values['wgImageMagickConvertCommand'] ) {
			$this->values['wgImageMagickConvertCommand'] = '/usr/bin/convert';
			$magic = '#';
		} else {
			$magic = '';
		}
		
		if( !$this->values['wgShellLocale'] ) {
			$this->values['wgShellLocale'] = 'en_US.UTF-8';
			$locale = '#';
		} else {
			$locale = '';
		}
		
		$rights = $this->values['wgRightsUrl'] ? '' : '#';
		$hashedUploads = $this->safeMode ? '' : '#';
		
		switch( $this->values['wgMainCacheType'] ) {
			case 'anything':
			case 'db':
			case 'memcached':
			case 'accel':
				$cacheType = 'CACHE_' . strtoupper( $this->values['wgMainCacheType']);
				break;
			case 'none':
			default:
				$cacheType = 'CACHE_NONE';
		}
		
		$mcservers = $this->buildMemcachedServerList();
		return "<?php
# This file was automatically generated by the MediaWiki {$GLOBALS['wgVersion']}
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# If you customize your file layout, set \$IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	\$IP = MW_INSTALL_PATH;
} else {
	\$IP = dirname( __FILE__ );
}

require_once( \"\$IP/includes/DefaultSettings.php\" );

if ( \$wgCommandLineMode ) {
	if ( isset( \$_SERVER ) && array_key_exists( 'REQUEST_METHOD', \$_SERVER ) ) {
		die( \"This script must be run from the command line\\n\" );
	}
}
## Uncomment this to disable output compression
# \$wgDisableOutputCompression = true;

\$wgSitename         = \"{$this->values['wgSitename']}\";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
\$wgScriptPath       = \"{$this->values['wgScriptPath']}\";
\$wgScriptExtension  = \"{$this->values['wgScriptExtension']}\";

## The relative URL path to the skins directory
\$wgStylePath        = \"\$wgScriptPath/skins\";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
\$wgLogo             = \"\$wgStylePath/common/images/wiki.png\";

## UPO means: this is also a user preference option

\$wgEnableEmail      = {$this->values['wgEnableEmail']};
\$wgEnableUserEmail  = {$this->values['wgEnableUserEmail']}; # UPO

\$wgEmergencyContact = \"{$this->values['wgEmergencyContact']}\";
\$wgPasswordSender   = \"{$this->values['wgPasswordSender']}\";

\$wgEnotifUserTalk      = {$this->values['wgEnotifUserTalk']}; # UPO
\$wgEnotifWatchlist     = {$this->values['wgEnotifWatchlist']}; # UPO
\$wgEmailAuthentication = {$this->values['wgEmailAuthentication']};

## Database settings
\$wgDBtype           = \"{$this->values['wgDBtype']}\";
\$wgDBserver         = \"{$this->values['wgDBserver']}\";
\$wgDBname           = \"{$this->values['wgDBname']}\";
\$wgDBuser           = \"{$this->values['wgDBuser']}\";
\$wgDBpassword       = \"{$this->values['wgDBpassword']}\";

{$this->dbSettings}

## Shared memory settings
\$wgMainCacheType    = $cacheType;
\$wgMemCachedServers = $mcservers;

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
\$wgEnableUploads  = {$this->values['wgEnableUploads']};
{$magic}\$wgUseImageMagick = true;
{$magic}\$wgImageMagickConvertCommand = \"{$this->values['wgImageMagickConvertCommand']}\";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
\$wgUseInstantCommons  = {$this->values['wgUseInstantCommons']};

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
{$locale}\$wgShellLocale = \"{$this->values['wgShellLocale']}\";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
{$hashedUploads}\$wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
\$wgUseTeX           = false;

## Set \$wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#\$wgCacheDirectory = \"\$IP/cache\";

\$wgLocalInterwiki   = strtolower( \$wgSitename );

# Site language code, should be one of ./languages/Language(.*).php
\$wgLanguageCode = \"{$this->values['wgLanguageCode']}\";

\$wgSecretKey = \"{$this->values['wgSecretKey']}\";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
\$wgDefaultSkin = 'vector';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
{$rights}\$wgEnableCreativeCommonsRdf = true;
\$wgRightsPage = \"\"; # Set to the title of a wiki page that describes your license/copyright
\$wgRightsUrl  = \"{$this->values['wgRightsUrl']}\";
\$wgRightsText = \"{$this->values['wgRightsText']}\";
\$wgRightsIcon = \"{$this->values['wgRightsIcon']}\";
# \$wgRightsCode = \"{$this->values['wgRightsCode']}\"; # Not yet used

# Path to the GNU diff3 utility. Used for conflict resolution.
\$wgDiff3 = \"{$this->values['wgDiff3']}\";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
\$wgCacheEpoch = max( \$wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
";
	}
	
}
