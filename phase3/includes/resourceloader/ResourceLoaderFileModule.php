<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author Trevor Parscal
 * @author Roan Kattouw
 */

defined( 'MEDIAWIKI' ) || die( 1 );

/**
 * Module based on local JS/CSS files. This is the most common type of module.
 */
class ResourceLoaderFileModule extends ResourceLoaderModule {
	/* Protected Members */

	protected $scripts = array();
	protected $styles = array();
	protected $messages = array();
	protected $group;
	protected $dependencies = array();
	protected $debugScripts = array();
	protected $languageScripts = array();
	protected $skinScripts = array();
	protected $skinStyles = array();
	protected $loaders = array();
	protected $parameters = array();

	// In-object cache for file dependencies
	protected $fileDeps = array();
	// In-object cache for mtime
	protected $modifiedTime = array();

	/* Methods */

	/**
	 * Construct a new module from an options array.
	 *
	 * @param $options array Options array. If empty, an empty module will be constructed
	 *
	 * $options format:
	 * 	array(
	 * 		// Required module options (mutually exclusive)
	 * 		'scripts' => 'dir/script.js' | array( 'dir/script1.js', 'dir/script2.js' ... ),
	 * 
	 * 		// Optional module options
	 * 		'languageScripts' => array(
	 * 			'[lang name]' => 'dir/lang.js' | '[lang name]' => array( 'dir/lang1.js', 'dir/lang2.js' ... )
	 * 			...
	 * 		),
	 * 		'skinScripts' => 'dir/skin.js' | array( 'dir/skin1.js', 'dir/skin2.js' ... ),
	 * 		'debugScripts' => 'dir/debug.js' | array( 'dir/debug1.js', 'dir/debug2.js' ... ),
	 *
	 * 		// Non-raw module options
	 * 		'dependencies' => 'module' | array( 'module1', 'module2' ... )
	 * 		'loaderScripts' => 'dir/loader.js' | array( 'dir/loader1.js', 'dir/loader2.js' ... ),
	 * 		'styles' => 'dir/file.css' | array( 'dir/file1.css', 'dir/file2.css' ... ), |
	 * 			array( 'dir/file1.css' => array( 'media' => 'print' ) ),
	 * 		'skinStyles' => array(
	 * 			'[skin name]' => 'dir/skin.css' |  array( 'dir/skin1.css', 'dir/skin2.css' ... ) |
	 * 				array( 'dir/file1.css' => array( 'media' => 'print' )
	 * 			...
	 * 		),
	 * 		'messages' => array( 'message1', 'message2' ... ),
	 * 		'group' => 'stuff',
	 * 	)
	 *
	 * @param $basePath String: base path to prepend to all paths in $options
	 */
	public function __construct( $options = array(), $basePath = null ) {
		foreach ( $options as $option => $value ) {
			switch ( $option ) {
				case 'scripts':
				case 'debugScripts':
				case 'languageScripts':
				case 'skinScripts':
				case 'loaders':
					$this->{$option} = (array)$value;
					// Automatically prefix script paths
					if ( is_string( $basePath ) ) {
						foreach ( $this->{$option} as $key => $value ) {
							$this->{$option}[$key] = $basePath . $value;
						}
					}
					break;
				case 'styles':
				case 'skinStyles':
					$this->{$option} = (array)$value;
					// Automatically prefix style paths
					if ( is_string( $basePath ) ) {
						foreach ( $this->{$option} as $key => $value ) {
							if ( is_array( $value ) ) {
								$this->{$option}[$basePath . $key] = $value;
								unset( $this->{$option}[$key] );
							} else {
								$this->{$option}[$key] = $basePath . $value;
							}
						}
					}
					break;
				case 'dependencies':
				case 'messages':
					$this->{$option} = (array)$value;
					break;
				case 'group':
					$this->group = (string)$value;
					break;
			}
		}
	}
	
	/**
	 * Add script files to this module. In order to be valid, a module
	 * must contain at least one script file.
	 *
	 * @param $scripts Mixed: path to script file (string) or array of paths
	 */
	public function addScripts( $scripts ) {
		$this->scripts = array_merge( $this->scripts, (array)$scripts );
	}

	/**
	 * Add style (CSS) files to this module.
	 *
	 * @param $styles Mixed: path to CSS file (string) or array of paths
	 */
	public function addStyles( $styles ) {
		$this->styles = array_merge( $this->styles, (array)$styles );
	}

	/**
	 * Add messages to this module.
	 *
	 * @param $messages Mixed: message key (string) or array of message keys
	 */
	public function addMessages( $messages ) {
		$this->messages = array_merge( $this->messages, (array)$messages );
	}
	
	/**
	 * Sets the group of this module.
	 *
	 * @param $group string group name
	 */
	public function setGroup( $group ) {
		$this->group = $group;
	}
	
	/**
	 * Add dependencies. Dependency information is taken into account when
	 * loading a module on the client side. When adding a module on the
	 * server side, dependency information is NOT taken into account and
	 * YOU are responsible for adding dependent modules as well. If you
	 * don't do this, the client side loader will send a second request
	 * back to the server to fetch the missing modules, which kind of
	 * defeats the point of using the resource loader in the first place.
	 *
	 * To add dependencies dynamically on the client side, use a custom
	 * loader (see addLoaders())
	 *
	 * @param $dependencies Mixed: module name (string) or array of module names
	 */
	public function addDependencies( $dependencies ) {
		$this->dependencies = array_merge( $this->dependencies, (array)$dependencies );
	}

	/**
	 * Add debug scripts to the module. These scripts are only included
	 * in debug mode.
	 *
	 * @param $scripts Mixed: path to script file (string) or array of paths
	 */
	public function addDebugScripts( $scripts ) {
		$this->debugScripts = array_merge( $this->debugScripts, (array)$scripts );
	}

	/**
	 * Add language-specific scripts. These scripts are only included for
	 * a given language.
	 *
	 * @param $lang String: language code
	 * @param $scripts Mixed: path to script file (string) or array of paths
	 */
	public function addLanguageScripts( $lang, $scripts ) {
		$this->languageScripts = array_merge_recursive(
			$this->languageScripts,
			array( $lang => $scripts )
		);
	}

	/**
	 * Add skin-specific scripts. These scripts are only included for
	 * a given skin.
	 *
	 * @param $skin String: skin name, or 'default'
	 * @param $scripts Mixed: path to script file (string) or array of paths
	 */
	public function addSkinScripts( $skin, $scripts ) {
		$this->skinScripts = array_merge_recursive(
			$this->skinScripts,
			array( $skin => $scripts )
		);
	}

	/**
	 * Add skin-specific CSS. These CSS files are only included for a
	 * given skin. If there are no skin-specific CSS files for a skin,
	 * the files defined for 'default' will be used, if any.
	 *
	 * @param $skin String: skin name, or 'default'
	 * @param $scripts Mixed: path to CSS file (string) or array of paths
	 */
	public function addSkinStyles( $skin, $scripts ) {
		$this->skinStyles = array_merge_recursive(
			$this->skinStyles,
			array( $skin => $scripts )
		);
	}

	/**
	 * Add loader scripts. These scripts are loaded on every page and are
	 * responsible for registering this module using
	 * mediaWiki.loader.register(). If there are no loader scripts defined,
	 * the resource loader will register the module itself.
	 *
	 * Loader scripts are used to determine a module's dependencies
	 * dynamically on the client side (e.g. based on browser type/version).
	 * Note that loader scripts are included on every page, so they should
	 * be lightweight and use mediaWiki.loader.register()'s callback
	 * feature to defer dependency calculation.
	 *
	 * @param $scripts Mixed: path to script file (string) or array of paths
	 */
	public function addLoaders( $scripts ) {
		$this->loaders = array_merge( $this->loaders, (array)$scripts );
	}

	public function getScript( ResourceLoaderContext $context ) {
		$retval = $this->getPrimaryScript() . "\n" .
			$this->getLanguageScript( $context->getLanguage() ) . "\n" .
			$this->getSkinScript( $context->getSkin() );

		if ( $context->getDebug() ) {
			$retval .= $this->getDebugScript();
		}

		return $retval;
	}

	public function getStyles( ResourceLoaderContext $context ) {
		$styles = array();
		foreach ( $this->getPrimaryStyles() as $media => $style ) {
			if ( !isset( $styles[$media] ) ) {
				$styles[$media] = '';
			}
			$styles[$media] .= $style;
		}
		foreach ( $this->getSkinStyles( $context->getSkin() ) as $media => $style ) {
			if ( !isset( $styles[$media] ) ) {
				$styles[$media] = '';
			}
			$styles[$media] .= $style;
		}
		
		// Collect referenced files
		$files = array();
		foreach ( $styles as $style ) {
			// Extract and store the list of referenced files
			$files = array_merge( $files, CSSMin::getLocalFileReferences( $style ) );
		}
		
		// Only store if modified
		if ( $files !== $this->getFileDependencies( $context->getSkin() ) ) {
			$encFiles = FormatJson::encode( $files );
			$dbw = wfGetDB( DB_MASTER );
			$dbw->replace( 'module_deps',
				array( array( 'md_module', 'md_skin' ) ), array(
					'md_module' => $this->getName(),
					'md_skin' => $context->getSkin(),
					'md_deps' => $encFiles,
				)
			);
		}
		
		return $styles;
	}

	public function getMessages() {
		return $this->messages;
	}

	public function getGroup() {
		return $this->group;
	}

	public function getDependencies() {
		return $this->dependencies;
	}

	public function getLoaderScript() {
		if ( count( $this->loaders ) == 0 ) {
			return false;
		}

		return self::concatScripts( $this->loaders );
	}

	/**
	 * Get the last modified timestamp of this module, which is calculated
	 * as the highest last modified timestamp of its constituent files and
	 * the files it depends on (see getFileDependencies()). Only files
	 * relevant to the given language and skin are taken into account, and
	 * files only relevant in debug mode are not taken into account when
	 * debug mode is off.
	 *
	 * @param $context ResourceLoaderContext object
	 * @return Integer: UNIX timestamp
	 */
	public function getModifiedTime( ResourceLoaderContext $context ) {
		if ( isset( $this->modifiedTime[$context->getHash()] ) ) {
			return $this->modifiedTime[$context->getHash()];
		}
		wfProfileIn( __METHOD__ );
		
		// Sort of nasty way we can get a flat list of files depended on by all styles
		$styles = array();
		foreach ( self::organizeFilesByOption( $this->styles, 'media', 'all' ) as $styleFiles ) {
			$styles = array_merge( $styles, $styleFiles );
		}
		$skinFiles = (array) self::getSkinFiles(
			$context->getSkin(), self::organizeFilesByOption( $this->skinStyles, 'media', 'all' )
		);
		foreach ( $skinFiles as $styleFiles ) {
			$styles = array_merge( $styles, $styleFiles );
		}
		
		// Final merge, this should result in a master list of dependent files
		$files = array_merge(
			$this->scripts,
			$styles,
			$context->getDebug() ? $this->debugScripts : array(),
			isset( $this->languageScripts[$context->getLanguage()] ) ?
				(array) $this->languageScripts[$context->getLanguage()] : array(),
			(array) self::getSkinFiles( $context->getSkin(), $this->skinScripts ),
			$this->loaders,
			$this->getFileDependencies( $context->getSkin() )
		);
		
		wfProfileIn( __METHOD__.'-filemtime' );
		$filesMtime = max( array_map( 'filemtime', array_map( array( __CLASS__, 'remapFilename' ), $files ) ) );
		wfProfileOut( __METHOD__.'-filemtime' );
		$this->modifiedTime[$context->getHash()] = max( $filesMtime, $this->getMsgBlobMtime( $context->getLanguage() ) );
		wfProfileOut( __METHOD__ );
		return $this->modifiedTime[$context->getHash()];
	}

	/* Protected Members */

	/**
	 * Get the primary JS for this module. This is pulled from the
	 * script files added through addScripts()
	 *
	 * @return String: JS
	 */
	protected function getPrimaryScript() {
		return self::concatScripts( $this->scripts );
	}

	/**
	 * Get the primary CSS for this module. This is pulled from the CSS
	 * files added through addStyles()
	 *
	 * @return Array
	 */
	protected function getPrimaryStyles() {
		return self::concatStyles( $this->styles );
	}

	/**
	 * Get the debug JS for this module. This is pulled from the script
	 * files added through addDebugScripts()
	 *
	 * @return String: JS
	 */
	protected function getDebugScript() {
		return self::concatScripts( $this->debugScripts );
	}

	/**
	 * Get the language-specific JS for a given language. This is pulled
	 * from the language-specific script files added through addLanguageScripts()
	 *
	 * @return String: JS
	 */
	protected function getLanguageScript( $lang ) {
		if ( !isset( $this->languageScripts[$lang] ) ) {
			return '';
		}
		return self::concatScripts( $this->languageScripts[$lang] );
	}

	/**
	 * Get the skin-specific JS for a given skin. This is pulled from the
	 * skin-specific JS files added through addSkinScripts()
	 *
	 * @return String: JS
	 */
	protected function getSkinScript( $skin ) {
		return self::concatScripts( self::getSkinFiles( $skin, $this->skinScripts ) );
	}

	/**
	 * Get the skin-specific CSS for a given skin. This is pulled from the
	 * skin-specific CSS files added through addSkinStyles()
	 *
	 * @return Array: list of CSS strings keyed by media type
	 */
	protected function getSkinStyles( $skin ) {
		return self::concatStyles( self::getSkinFiles( $skin, $this->skinStyles ) );
	}

	/**
	 * Helper function to get skin-specific data from an array.
	 *
	 * @param $skin String: skin name
	 * @param $map Array: map of skin names to arrays
	 * @return $map[$skin] if set and non-empty, or $map['default'] if set, or an empty array
	 */
	protected static function getSkinFiles( $skin, $map ) {
		$retval = array();

		if ( isset( $map[$skin] ) && $map[$skin] ) {
			$retval = $map[$skin];
		} else if ( isset( $map['default'] ) ) {
			$retval = $map['default'];
		}

		return $retval;
	}

	/**
	 * Get the contents of a set of files and concatenate them, with
	 * newlines in between. Each file is used only once.
	 *
	 * @param $files Array of file names
	 * @return String: concatenated contents of $files
	 */
	protected static function concatScripts( $files ) {
		return implode( "\n", 
			array_map( 
				'file_get_contents', 
				array_map( 
					array( __CLASS__, 'remapFilename' ), 
					array_unique( (array) $files ) ) ) );
	}

	protected static function organizeFilesByOption( $files, $option, $default ) {
		$organizedFiles = array();
		foreach ( (array) $files as $key => $value ) {
			if ( is_int( $key ) ) {
				// File name as the value
				if ( !isset( $organizedFiles[$default] ) ) {
					$organizedFiles[$default] = array();
				}
				$organizedFiles[$default][] = $value;
			} else if ( is_array( $value ) ) {
				// File name as the key, options array as the value
				$media = isset( $value[$option] ) ? $value[$option] : $default;
				if ( !isset( $organizedFiles[$media] ) ) {
					$organizedFiles[$media] = array();
				}
				$organizedFiles[$media][] = $key;
			}
		}
		return $organizedFiles;
	}
	
	/**
	 * Get the contents of a set of CSS files, remap then and concatenate
	 * them, with newlines in between. Each file is used only once.
	 *
	 * @param $styles Array of file names
	 * @return Array: list of concatenated and remapped contents of $files keyed by media type
	 */
	protected static function concatStyles( $styles ) {
		$styles = self::organizeFilesByOption( $styles, 'media', 'all' );
		foreach ( $styles as $media => $files ) {
			$styles[$media] =
				implode( "\n", 
					array_map( 
						array( __CLASS__, 'remapStyle' ), 
						array_unique( (array) $files ) ) );
		}
		return $styles;
	}

	/**
	 * Remap a relative to $IP. Used as a callback for array_map()
	 *
	 * @param $file String: file name
	 * @return string $IP/$file
	 */
	protected static function remapFilename( $file ) {
		global $IP;

		return "$IP/$file";
	}

	/**
	 * Get the contents of a CSS file and run it through CSSMin::remap().
	 * This wrapper is needed so we can use array_map() in concatStyles()
	 *
	 * @param $file String: file name
	 * @return string Remapped CSS
	 */
	protected static function remapStyle( $file ) {
		global $wgScriptPath;
		return CSSMin::remap(
			file_get_contents( self::remapFilename( $file ) ),
			dirname( $file ),
			$wgScriptPath . '/' . dirname( $file ),
			true
		);
	}
}