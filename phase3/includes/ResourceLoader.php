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
 * @author Roan Kattouw
 * @author Trevor Parscal
 */

/*
 * Dynamic JavaScript and CSS resource loading system
 * 
 * @example
 * 	// Registers a module with the resource loading system
 * 	ResourceLoader::register( 'foo', array(
 * 		// At minimum you must have a script file
 * 		'script' => 'resources/foo/foo.js',
 * 		// Optionally you can have a style file as well
 * 		'style' => 'resources/foo/foo.css',
 *		// List of styles to include based on the skin
 *		'themes' => array(
 *			'default' => 'resources/foo/themes/default/foo.css',
 *			'vector' => 'resources/foo/themes/vector.foo.css',
 *		),
 *		// List of scripts to include based on the language
 *		'locales' => array(
 *			'en-gb' => 'resources/foo/locales/en-gb.js',
 *		),
 * 		// Only needed if you are doing something fancy with your loader, otherwise one will be generated for you
 * 		'loader' => 'resources/foo/loader.js',
 * 		// If you need any localized messages brought into the JavaScript environment, list the keys here
 * 		'messages' => array( 'foo-hello', 'foo-goodbye' ),
 * 		// Raw scripts are are loaded without using the loader and can not bundle loaders, styles and messages
 * 		'raw' => false,
 * 		// Debug-only scripts are special scripts that are only loaded when requested and while in debug mode
 * 		'debug' => false,
 * 	) );
 * @example
 * 	// Responds to a resource loading request
 * 	ResourceLoader::respond( $wgRequest );
 */
class ResourceLoader {
	
	/* Protected Static Members */
	
	protected static $modules = array();
	
	/* Protected Static Methods */
	
	/**
	 * Runs text through a filter, caching the filtered result for future calls
	 * 
	 * @param string $filter name of filter to run
	 * @param string $data text to filter, such as JavaScript or CSS text
	 * @param string $file path to file being filtered, (optional: only required for CSS to resolve paths)
	 * @return string filtered data
	 */
	protected static function filter( $filter, $data, $file = null ) {
		global $wgMemc;
		$key = wfMemcKey( 'resourceloader', $filter, md5( $data ) );
		$cached = $wgMemc->get( $key );
		if ( $cached !== false && $cached !== null ) {
			return $cached;
		}
		switch ( $filter ) {
			case 'minify-js':
				$result = JSMin::minify( $data );
				break;
			case 'minify-css':
				$result = Minify_CSS::minify( $data, array( 'currentDir' => dirname( $file ), 'docRoot' => '.' ) );
				break;
			case 'flip-css':
				$result = CSSJanus::transform( $data, true, false );
				break;
			default:
				// Don't cache anything, just pass right through
				return $data;
		}
		$wgMemc->set( $key, $result );
		return $result;
	}
	
	/* Static Methods */
	
	/**
	 * Registers a module with the ResourceLoader system
	 * 
	 * @param mixed $module string of name of module or array of name/options pairs
	 * @param array $options module options (optional when using multiple-registration calling style)
	 * @return boolean false if there were any errors, in which case one or more modules were not registered
	 * 
	 * $options format:
	 * 	array(
	 * 		'script' => [string: path to file],
	 * 		'style' => [string: path to file, optional],
	 * 		'themes' => [array: paths to styles to include, keyed by skin name, optional],
	 * 		'locales' => [array: paths to scripts to include, keyed by locale name, optional],
	 * 		'messages' => [array: message keys, optional],
	 * 		'loader' => [string: path to file, optional],
	 * 		'needs' => [array: names of modules this module needs, optional - ignored if loader is present],
	 * 		'raw' => [boolean: include directly without any loading support, optional],
	 * 		'debug' => [boolean: include in debug mode only, optional],
	 * 	)
	 * 
	 * @todo We need much more clever error reporting, not just in detailing what happened, but in bringing errors to
	 * the client in a way that they can easily see them if they want to, such as by using FireBug
	 */
	public static function register( $module, $options = array() ) {
		// Allow multiple modules to be registered in one call
		if ( is_array( $module ) && empty( $options ) ) {
			$success = true;
			foreach ( $module as $name => $options ) {
				if ( !self::register( $name, $options ) ) {
					$success = false;
				}
			}
			return $success;
		}
		// Disallow duplicate registrations
		if ( isset( self::$modules[$module] ) ) {
			// A module has already been registered by this name
			return false;
		}
		// Always include a set of default options in each registration - more data, less isset() checks
		$options = array_merge( array(
			'script' => null,
			'style' => null,
			'themes' => array(),
			'locales' => array(),
			'messages' => array(),
			'loader' => null,
			'needs' => array(),
			'raw' => false,
			'debug' => null,
		), $options );
		// Validate script option
		if ( !is_string( $options['script'] ) ) {
			// Module does not include a script
			return false;
		}
		if ( !file_exists( $options['script'] ) ) {
			// Script file does not exist
			return false;
		}
		if ( $options['loader'] !== null && !file_exists( $options['loader'] ) ) {
			// Loader file does not exist
			return false;
		}
		if ( $options['style'] !== null && !file_exists( $options['style'] ) ) {
			// Style file does not exist
			return false;
		}
		self::$modules[$module] = $options;
	}
	
	public static function getModules() {
		return self::$modules;
	}
	
	/*
	 * Outputs a response to a resource load-request, including a content-type header
	 * 
	 * @param WebRequest $request web request object to respond to
	 * 
	 * $options format:
	 * 	array(
	 * 		'user' => [boolean: true for logged in, false for anon, optional, state of current user by default],
	 * 		'lang' => [string: language code, optional, code of default language by default],
	 * 		'skin' => [string: name of skin, optional, name of default skin by default],
	 * 		'dir' => [string: 'ltr' or 'rtl', optional, direction of lang by default],
	 * 		'debug' => [boolean: true to include debug-only scripts, optional, false by default],
	 * 	)
	 */
	public static function respond( WebRequest $request, $server ) {
		global $wgUser, $wgLang, $wgDefaultSkin;
		// Fallback on system settings
		$parameters = array(
			'user' => $request->getVal( 'user', $wgUser->isLoggedIn() ),
			'lang' => $request->getVal( 'lang', $wgLang->getCode() ),
			'skin' => $request->getVal( 'skin', $wgDefaultSkin ),
			'debug' => $request->getVal( 'debug' ),
		);
		// Mediawiki's WebRequest::getBool is a bit on the annoying side - we need to allow 'true' and 'false' values
		// to be converted to boolean true and false
		$parameters['user'] = $parameters['user'] === 'true' || $parameters['user'] === true ? true : false;
		$parameters['debug'] = $parameters['debug'] === 'true' || $parameters['debug'] === true ? true : false;
		// Get the direction from the requested language
		if ( !isset( $parameters['dir'] ) ) {
			$lang = $wgLang->factory( $parameters['lang'] );
			$parameters['dir'] = $lang->getDir();
		}
		// Get modules - filtering out any we don't know about
		$modules = array();
		foreach ( explode( '|', $request->getVal( 'modules' ) ) as $module ) {
			if ( isset( self::$modules[$module] ) ) {
				$modules[] = $module;
			}
		}
		// Use output buffering
		ob_start();
		// Output raw modules first
		$ready = array();
		foreach ( $modules as $module ) {
			if ( self::$modules[$module]['raw'] ) {
				readfile( self::$modules[$module]['script'] );
				echo "\n";
				if ( $parameters['debug'] && self::$modules[$module]['debug'] ) {
					readfile( self::$modules[$module]['debug'] );
					echo "\n";
				}
				$ready[] = $module;
			}
		}
		// Special meta-information for the 'mediawiki' module
		if ( in_array( 'mediawiki', $modules ) ) {
			/*
			 * Skin::makeGlobalVariablesScript needs to be modified so that we still output the globals for now, but also
			 * put them into the initial payload like this:
			 * 
			 * 		// Sets the inital configuration
			 * 		mw.config.set( { 'name': 'value', ... } );
			 * 
			 * Also, the naming of these variables is horrible and sad, hopefully this can be worked on
			 */
			$parameters['server'] = $server;
			echo "mw.config.set( " . json_encode( $parameters ) . " );\n";
			// Collect all loaders
			$loaders = array();
			$registrations = array();
			foreach ( self::$modules as $name => $options ) {
				if ( $options['loader'] !== null ) {
					$loaders[] = $options['loader'];
				} else {
					if ( empty( $options['needs'] ) && !in_array( $name, $ready ) ) {
						$registrations[$name] = $name;
					} else {
						$registrations[$name] = array( $name, $options['needs'] );
						if ( in_array( $name, $ready ) ) {
							$registrations[$name][] = 'ready';
						}
					}
				}
			}
			// Include loaders
			foreach ( array_unique( $loaders ) as $loader ) {
				readfile( $loader );
				echo "\n";
			}
			// Register modules without loaders
			echo "mw.loader.register( " . json_encode( array_values( $registrations ) ) . " );\n";
		}
		// Output non-raw modules
		$blobs = MessageBlobStore::get( $modules, $parameters['lang'] );
		foreach ( $modules as $module ) {
			if ( !self::$modules[$module]['raw'] ) {
				// Script
				$script = file_get_contents( self::$modules[$module]['script'] );
				// Debug
				if ( $parameters['debug'] && self::$modules[$module]['debug'] ) {
					$script .= file_get_contents( self::$modules[$module]['debug'] );
				}
				// Locale
				if ( isset( self::$modules[$module]['locales'][$parameters['lang']] ) ) {
					$script .= file_get_contents( self::$modules[$module]['locales'][$parameters['lang']] );
				}
				// Style
				$style = self::$modules[$module]['style'] ? file_get_contents( self::$modules[$module]['style'] ) : '';
				// Theme
				if ( isset( self::$modules[$module]['themes'][$parameters['skin']] ) ) {
					$style .= file_get_contents( self::$modules[$module]['themes'][$parameters['skin']] );
				} else if ( isset( self::$modules[$module]['themes']['default'] ) ) {
					$style .= file_get_contents( self::$modules[$module]['themes']['default'] );
				}
				if ( $style !== '' ) {
					if ( $parameters['dir'] == 'rtl' ) {
						$style = self::filter( 'flip-css', $style );
					}
					$style = Xml::escapeJsString(
						$parameters['debug'] ?
							$style : self::filter( 'minify-css', $style, self::$modules[$module]['style'] )
					);
				}
				// Messages
				$messages = isset( $blobs[$module] ) ? $blobs[$module] : '{}';
				// Output
				echo "mw.loader.implement( '{$module}', function() {\n{$script}\n}, '{$style}', {$messages} );\n";
			}
		}
		// Set headers -- when we support CSS only mode, this might change!
		header( 'Content-Type: text/javascript' );
		// Final processing
		if ( $parameters['debug'] ) {
			ob_end_flush();
		} else {
			echo self::filter( 'minify-js', ob_get_clean() );
		}
	}
}

// FIXME: Temp hack
require_once "$IP/resources/Resources.php";