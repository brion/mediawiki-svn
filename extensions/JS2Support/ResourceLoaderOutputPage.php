<?php
if ( !defined( 'MEDIAWIKI' ) ) die();
/**
 * @copyright Copyright © 2010 Michael Dale <michael.dale@kaltura.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

/**
 * ResourceLoaderOutputPage extends OutputPage with resource loader calls
 */
class ResourceLoaderOutputPage extends OutputPage {

	// The path to the Resource loader
	static $mResourceLoaderPath = 'extensions/JS2Support/mwResourceLoader';

	/**
	 * List of Resource
	 *
	 * An array of script-classes to be grouped and loaded by script loader
	 *
	 * Default Buckets include:
	 * 'page' - Default, Script part of the "current page"
	 * 				to improve cache hit rate only put scripts / css
	 * 				into the page bucket if specific to a particular page ( and no other )
	 * 				( ie Special:Upload or action=edit )
	 * 'user' - scripts /css specific to the current logged in user
	 * 'allpage' - scripts /css loaded on every page view
	 * 				( jQuery, mwEmbed.js and wikibits are in this bucket by default )
	 * 'abritraryString' - Arbitrary script grouping bucket string
	 * 				For example if you had a script that was included on
	 *				all category pages then the bucket could be 'category'
	 *				this way you would not break the cache for other per page scripts
	 */
	var $mResourceList = array(
		'js' => array(),
		'css' => array()
	);

	// Stores the options for a given bucket ( like css media type )
	var $mResourceLoaderBucketOptions = array();

	// Local scriptLoader instance object
	var $mResourceLoader = null;

	// If script grouping is enabled or not. (lazy initialised use () )
	var $mEnabledResourceGrouping  = null; // lazy initializsed

	/**
	 * Add a JavaScript file out of skins/common, or a given relative path.
	 *
	 * @param $file String: filename in skins/common or complete on-server path
	 *              (/foo/bar.js)
	 */
	public function addScriptFile( $file , $scriptRequestBucket = 'page' ) {
		global $wgStylePath, $wgStyleVersion, $wgScript;
		if( substr( $file, 0, 1 ) == '/' || preg_match( '#^[a-z]*://#i', $file ) ) {
			$path = $file;
		} else {
			$path =  "{$wgStylePath}/common/{$file}";
		}

		// If resource loader enabled check if we can add the script via resource loader
		if( $this->isResourceGroupingEnabled() ) {
			$jsClass = $this->getResourceNameFromPath( $path );
			if( $jsClass ) {
				$this->addScriptClass( $jsClass, $scriptRequestBucket );
				return true;
			}
		}
		// Add script without grouping
		$this->addScript( Html::linkedScript( wfAppendQuery( $path, $wgStyleVersion ) ) );
	}

	/**
	 * Check the user preference for script grouping for
	 * by default script grouping uses the wgEnableResourceLoader global
	 */
	function isResourceGroupingEnabled() {
		global $wgEnableResourceLoader, $wgUser;
		// Get the preferences for the current user
		$preferences = Preferences::getPreferences( $wgUser );
		// For some reasons preference "value" is stored in "default"
		if( $preferences[ 'scriptdebug' ]['default'] == 1 ) {
			return false;
		} else {
			return $wgEnableResourceLoader;
		}
	}

	/**
	 * Gets the class name From an internal wiki title link
	 * @param $path String: script include path
	 */
	function getResourceNameFromWikiTitle( $path ){
		global $wgScript;
		if( strpos( $path, $wgScript ) !== false ) {
			$reqPath = str_replace( $wgScript . '?', '', $path );
			$reqArgs = explode( '&', $reqPath );
			$reqSet = array();

			foreach( $reqArgs as $arg ) {
				list( $key, $var ) = explode( '=', $arg );
				$reqSet[ $key ] = $var;
			}

			if( isset( $reqSet['title'] ) && $reqSet != '' ) {
				// Make sure the title ends with .js or css
				if( substr( $reqSet['title'], -3 ) != '.js' &&
				substr( $reqSet['title'], -3 ) != 'css' &&
				$reqSet['title'] != '-' ){
					return false;
				}

				$resourceName = 'WT:' . $reqSet['title'];
				// Extract any extra parameters (for now just skin)
				$extraParams = array();
				if( isset( $reqSet['useskin'] ) && $reqSet['useskin'] != '' ) {
					$resourceName .= '|useskin=' . ucfirst( $reqSet['useskin'] );
				}
				if( isset( $reqSet['gen'] ) && $reqSet['gen'] != '' ) {
					$resourceName .= '|gen=' . $reqSet['gen'];
				}
				return $resourceName;
			}
		}
		return false;
	}

	/**
	 * Gets the global variables and mScripts; also adds userjs to the end if
	 * enabled
	 *
	 * @param $sk Skin object to use
	 * @return String: HTML fragment
	 */
	function getHeadScripts( Skin $sk ) {
		global $wgUser, $wgRequest, $wgJsMimeType, $wgUseSiteJs;
		global $wgStylePath, $wgStyleVersion, $wgDebugJavaScript;

		$scripts = Skin::makeGlobalVariablesScript( $sk->getSkinName() );

		// Add site JS if enabled:
		if( $wgUseSiteJs ) {
			$this->addScriptClass( 'WT:-|useskin=' .
			urlencode( $sk->getSkinName() ) .'|gen=js' );
		}

		// Add user js if enabled:
		if( $this->isUserJsAllowed() && $wgUser->isLoggedIn() ) {
			$action = $wgRequest->getVal( 'action', 'view' );
			if( $this->mTitle && $this->mTitle->isJsSubpage() and $sk->userCanPreview( $action ) ) {
				# XXX: additional security check/prompt?
				$this->addInlineScript( $wgRequest->getText( 'wpTextbox1' ) );
			} else {
				$userpage = $wgUser->getUserPage();
				$names = array( 'common', $sk->getSkinName() );
				foreach( $names as $name ) {
					$scriptpage = Title::makeTitleSafe(
					NS_USER,
					$userpage->getDBkey() . '/' . $name . '.js'
					);
					if ( $scriptpage && $scriptpage->exists() ) {
						$userjs = $scriptpage->getLocalURL( 'action=raw&ctype=' . $wgJsMimeType );
						$this->addScriptFile( $userjs, 'user');
					}
				}
			}
		}

		// Add our core scripts to mScripts ( includes jQuery, mwEmbed & wikibits )
		$this->includeAllPageJS();


		// If the resource loader is enabled get resource loader classes per buckets
		if( $this->isResourceGroupingEnabled() ) {
			$this->mScripts .= $this->getResourceLoaderJS();
		}

		$scripts .= "\n" . $this->mScripts;
		return $scripts;
	}

	/**
	 * Add a className to an output Bucket
	 */
	protected function addResourceToBucket( $resourceName, $bucket, $type = 'js' ){
		if( ! isset( $this->mResourceList[ $type ][ $bucket ] ) ){
			$this->mResourceList[ $type ][ $bucket ] = array();
		}
		$this->mResourceList[ $type ][ $bucket ][] = $resourceName;
	}

	/**
	 * Set the embed options for a given bucketKey
	 * @param $bucketKey String: the bucketkey to apply the options to.
	 */
	protected function setResourceBucketOptions( $bucketKey, $options ){
		$this->mResourceLoaderBucketOptions[ $bucketKey ] = $options;
	}

	/**
	 * Get class bucket options
	 */
	protected function getClassBucketOptions( $bucketKey ){
		if( isset( $this->mResourceLoaderBucketOptions[ $bucketKey ] ) ){
			return $this->mResourceLoaderBucketOptions[ $bucketKey ];
		}
		return array();
	}

	/**
	 * Add a local or specified stylesheet, with the given media options.
	 *
	 * @param $style String: URL to the file
	 * @param $media String: to specify a media type, 'screen', 'printable', 'handheld' or any.
	 * @param $condition String: for IE conditional comments, specifying an IE version
	 * @param $dir String: set to 'rtl' or 'ltr' for direction-specific sheets
	 * @param $bucket String: Script-loader grouping string
	 */
	public function addStyle( $style, $media='', $condition='', $dir='', $bucket='' ) {
		$options = array();

		if( $media ) {
			$options['media'] = $media;
		}
		if( $condition ) {
			$options['condition'] = $condition;
		}
		if( $bucket ){
			$options['bucket'] = $bucket;
		}

		// Build the bucket key with supplied options
		//( no dir key since dir does not require a separate bucket )
		$bucketKey = implode( '.', $options );

		if( $dir ) {
			$options['dir'] = $dir;
		}
		// Check if we should include this css:
		if( ! $this->checkCssIncludeCondition( $options ) ){
			return false;
		}

		// If resource loader enabled check if we can add the script via resource loader
		if( $this->isResourceGroupingEnabled() ) {
			global $wgStylePath, $wgScript;

			// Append style path if a relative path
			if( substr( $style, 0, 1 ) == '/' ){
				// already absolute path don't modify path

			} else if (
				substr( $style, 0, 5 ) == 'http:' ||
				substr( $style, 0, 6 ) == 'https:' ) {

				// Remote css can't group:
				$this->styles[ $style ] = $options;

			} else {
				// Relative core skin path append $wgStylePath
				$style = $wgStylePath ."/". $style;
			}

			$cssClass = $this->getResourceNameFromPath( $style );
			if( $cssClass ) {
				$this->addScriptClass( $cssClass, $bucketKey, 'css');
				// Update the options for this script bucket. ( css has per-bucket options )
				$this->setResourceBucketOptions( $bucketKey, $options );
				return true;
			}
		}
		// Else use normal styles output:
		$this->styles[ $style ] = $options;
	}

	/**
	 * Add a Style sheet by class name
	 *
	 * @param $cssClass String: Css Class name to be included
	 * @param options [Optional]
	 * 		'media' String: to specify a media type, 'screen', 'printable', 'handheld' or any.
	 *		'condition' String: for IE conditional comments, specifying an IE version
	 * 		'dir' String: set to 'rtl' or 'ltr' for direction-specific sheets
	 * 		'bucket' String: Script-loader grouping string
	 */
	public function addStyleClass( $cssClass , $options = array()) {
		global $wgExtensionAssetsPath, $wgScriptPath;
		// Build the bucket key with supplied options


		// Check if we should include this css:
		if( ! $this->checkCssIncludeCondition( $options ) ){
			return false;
		}

		// No dir for bucket key since dir does not require a separate bucket.
		unset( $options['dir'] );
		$bucketKey = implode( '.', $options );
		// If an empty bucket put into the allpage bucket
		if( trim( $bucketKey) == '' ){
			$bucketKey = 'allpage';
		}

		// Update the css bucket options:
		$this->setResourceBucketOptions( $bucketKey, $options );

		if( $this->isResourceGroupingEnabled() ) {
			$this->addScriptClass( $cssClass, $bucketKey, 'css');
		} else {
			$stylePath = $wgScriptPath . '/' .  ResourceLoader::getPathFromClass( $cssClass );

			// Else use normal styles output
			//( unfortunately $this->styles appends /skins ) so use addLink
			$this->addLink(
			array(
					'rel' => 'stylesheet',
					'type' => 'text/css',
					'href' => $stylePath . '?' . $this->getURIDparam( $cssClass ),
			)
			);
		}

	}
	/*
	 * Check if we should include a css class based on its options
	 * @parma $options
	 * 		'media' String: to specify a media type, 'screen', 'printable', 'handheld' or any.
	 *		'condition' String: for IE conditional comments, specifying an IE version
	 * 		'dir' String: set to 'rtl' or 'ltr' for direction-specific sheets
	 * 		'bucket' String: Script-loader grouping string
	 */
	private function checkCssIncludeCondition( $options ){
		// Check if the style will be included in output:
		if( isset( $options['dir'] ) ) {
			global $wgContLang;
			$siteDir = $wgContLang->getDir();
			if( $siteDir != $options['dir'] )
			return false;
		}

		// If style set media is for different than request don't include
		if( isset( $options['media'] ) ) {
			$media = $this->transformCssMedia( $options['media'] );
			if( is_null( $media ) ) {
				return false;
			}
		}
		return true;
	}
	/**
	 * Build a set of <link>s for the stylesheets specified in the $this->styles array.
	 * These will be applied to various media & IE conditionals.
	 */
	public function buildCssLinks() {
		$scriptLoaderCss = '';
		if( $this->isResourceGroupingEnabled() ){
			$scriptLoaderCss = $this->getResourceLoaderCss();
		}
		return $scriptLoaderCss . "\n" . parent::buildCssLinks();
	}

	/**
	 * Include the core javascript classes via the resource loader if enabled
	 *  unlike includeJQuery this function is called every output page so
	 * 	that user-scripts and extension js can assume jQuery and mwEmbed are
	 * 	available.
	 *
	 * Updates the local mScripts var with core javascript includes
	 *
	 * @since 1.17
	 */
	public function includeAllPageJS ( ) {
		global $wgExtensionJavascriptModules,
		$wgResourceLoaderNamedPaths, $wgScriptPath;

		// Set core Classes and styles:
		$coreClasses = array( 'wikibits', 'window.jQuery', 'mwEmbed'  );

		// Include the core css
		$this->addStyleClass( 'mw.style.mwCommon' );



		// Merge in any scripts that have been set as "allpage"
		// Since the all page are on every page view they should just be part of the core
		// script request.
		if( isset( $this->mResourceList[ 'js' ][ 'allpage' ] ) ) {
			$coreClasses = array_merge($coreClasses, $this->mResourceList[ 'js' ][ 'allpage' ] );
		}


		// Make sure scripts are the first scripts include on the page.
		// Some extensions directly modify $this->mScripts early on and break
		// order of includes.
		$postScripts = $this->mScripts;
		$this->mScripts = '';

		if( $this->isResourceGroupingEnabled() ) {
			$this->mScripts = "\n<!-- Script bucket: allpage --> \n";
			$this->mScripts = $this->getLinkedResourceLoaderJs( $coreClasses );
		} else {
			// No ResourceLoader manually add classes that are normally part of mwEmbed core request.
			$so = '';
			foreach( $coreClasses as $resourceName ){
				$this->addScriptClass( $resourceName );
			}

			// Add the mwEmbed "core-components" ( language, parsing etc. )
			$coreComponets = NamedResourceLoader::getComponentsList();
			foreach( $coreComponets as $resourceName ) {
				$this->addScriptClass( $resourceName );
			}

			// Also add the "loader" classes
			foreach( $wgExtensionJavascriptModules as $modulePath ){
				// Set the loader context for each loader javascript file
				// ( so that javascript modules can use relative paths )
				$loaderDir =  $modulePath . "/";
				$this->addScript(  Html::inlineScript(
					"mw.setConfig( 'loaderContext',  '" . xml::escapeJsString( $wgScriptPath .'/'. $loaderDir  ) . "');"
					) );
					$this->addScriptFile(
					"$wgScriptPath/$modulePath/loader.js"
					);
			}
		}
		//Now re-append any scripts that got added prior to the includeJQuery call
		$this->mScripts = $this->mScripts . $postScripts;
	}

	/**
	 * Remap the includeJQuery to do nothing
	 * @param modules {Array} does nothing in the present output page emulate that nothing behavior here
	 */
	public function includeJQuery(  $modules = array() ) {
		// jquery is included via resource loader includeAllPageJS function do nothing
		return $modules;
	}
	/**
	 * Get style sheets grouped by  "media", "condition" & "bucket" attributes
	 * call getLinkedResourceLoaderCss for each group
	 */
	private function getResourceLoaderCss( ){
		$s='';
		foreach( $this->mResourceList['css'] as $bucketKey => $resourceList ){
			if( count( $resourceList) ) {
				$options = $this->getClassBucketOptions( $bucketKey );
				$s .= "\n<!-- Css bucket: " . htmlspecialchars( $bucketKey ) . "--> \n";
				$s .= $this->getLinkedResourceLoaderCss( $resourceList, $options );
			}
		}
		return $s;
	}

	/**
	 * Get the linked css resource loader calls
	 * @param Array $stylesAry Array of style sheets to be added.
	 */
	private function getLinkedResourceLoaderCss( $stylesAry, $options) {
		global $wgRequest, $wgDebugJavaScript;
		$stylesString = implode( ',', $stylesAry );

		$url = wfScript( self::$mResourceLoaderPath ) .
			"?class={$stylesString}&" . $this->getURIDparam( $stylesAry ). "&format=css";

		// Check for the media option:
		if( isset( $options['media'] ) && $options['media']!='' ){
			$link = Html::linkedStyle( $url,  $options['media']);
		} else {
			$link = Html::linkedStyle( $url );
		}

		if( isset( $options['condition'] ) ) {
			$condition = htmlspecialchars( $options['condition'] );
			$link = "<!--[if $condition]>$link<![endif]-->";
		}

		return $link;
	}

	/**
	 * Adds the script loader to mScripts
	 */
	private function getResourceLoaderJs(){
		$s='';
		foreach( $this->mResourceList['js'] as $bucket => $resourceList ){
			// Note we don't include the "allpage" bucket since its handled by
			// includeAllPageJS
			// allpage scripts are handled separately to ensure
			// they are at the top of the page.
			if( count( $resourceList) && $bucket != 'allpage' ){
				$s .= "\n<!-- Script bucket: $bucket --> \n";
				$s .= $this->getLinkedResourceLoaderJs( $resourceList );
			}
		}
		return $s;
	}

	/**
	 * Get the <script> tag which will invoke the script loader
	 * @param $resourceList A list of named resources
	 * @param $format String either 'js' or 'css'
	 */
	private function getLinkedResourceLoaderJs( $resourceList ) {
		global $wgRequest, $wgDebugJavaScript;
		$resourceListString = implode( ',', $resourceList );

		return Html::linkedScript( wfScript( self::$mResourceLoaderPath ) .
			"?class={$resourceListString}&" . $this->getURIDparam( $resourceList) ) . "\n";
	}

	/**
	 * Add a named script class to the output page
	 *
	 * @param $resourceName String Name of the resource
	 * @param $scriptRequestBucket Name of bucket for the class
	 * @param $type 'js' or 'css' for type of head item being included
	 * @return boolean False if the class wasn't found, True on success
	 */
	function addScriptClass( $resourceName, $scriptRequestBucket = 'page' , $type='js') {
		global $wgDebugJavaScript, $wgResourceLoaderNamedPaths, $IP, $wgStyleVersion, $wgScriptPath, $wgStylePath,
		$wgUser;

		if( !$this->mResourceLoader ){
			$this->mResourceLoader = new ResourceLoader();
		}

		// Check for wikiTitle:
		if ( substr( $resourceName, 0, 3 ) == 'WT:' ) {
			if( $this->isResourceGroupingEnabled() ) {
				// Add to the mResourceList list
				$this->addResourceToBucket( $resourceName, $scriptRequestBucket, $type);
				return true;
			} else {

				$jsCache = $wgUser->isLoggedIn() ? '&smaxage=0' : '';
				$titlePage =  substr( $resourceName, 3 );
				$titleArg = '';

				//  Deal with arguments after the "|" syntax
				if( stripos( $titlePage, "|") !== false ) {
					$parts = explode( '|', $titlePage );
					$titlePage = $parts[0];
					$titleArg = '&' . $parts[1];
				}
				// Add the script
				$this->addScriptFile(
				Skin::makeUrl( $titlePage,
							"action=raw$jsCache&gen=js$titleArg"
				)
				);
			}

		} else { //dealing with a file not WikiText

			// Get js or css path:
			$path = ResourceLoader::getPathFromClass( $resourceName );
			if( $path == false ){
				// NOTE:: could throw an error here
				//print "could not find: $resourceName\n";
				throw new MWException( ' scriptLoader could not find class: ' . $resourceName . "\n");
				return false; // could not find the class
			}
			// Valid path add it to resource loader or "link" directly
			if( $this->isResourceGroupingEnabled() ) {
				// Register it with the script loader
				$this->addResourceToBucket( $resourceName, $scriptRequestBucket, $type );
				return true;
			} else {
				// Source the script directly
				$prefix = "skins/common/";
				if( substr( $path, 0, 1 ) == '/' ) {
					// Straight path
				} elseif( substr( $path, 0, strlen( $prefix ) ) == $prefix ) {
					// Respect $wgStypePath
					$path = "{$wgStylePath}/common/" . substr( $path, strlen( $prefix ) );
				} else {
					$path = $wgScriptPath . '/' . $path;
				}
				$this->addScript( Html::linkedScript( $path . "?" . $this->getURIDparam( $resourceName ) ) );
			}
		}

		// Included script without resource loader
		// Generate the localized msgs inline since we can't rely on ResourceLoader to localize
		$inlineMsg = $this->mResourceLoader->getResourceMessageJS( $resourceName );
		if( $inlineMsg != '' ) {
			$this->addScript( Html::inlineScript( $inlineMsg ) );
		}
	}

	/**
	 * Get the resource name from a path
	 * return false if no such path is registered.
	 *
	 * @param $path string
	 * @return String script path or Boolean false if not found
	 */
	function getResourceNameFromPath( $path ) {
		global $wgResourceLoaderNamedPaths, $wgScriptPath;

		// Check the autoload js class list
		foreach( $wgResourceLoaderNamedPaths as $resourceName => $classPath ) {
			$classPath = "{$wgScriptPath}/{$classPath}";
			if( $path == $classPath ){
				return $resourceName;
			}
		}
		// Check for mediaWiki generated path:
		$resourceName = $this->getResourceNameFromWikiTitle( $path );
		if( $resourceName ){
			return $resourceName;
		}

		return false;
	}

	/**
	 * Get the latest title revision from a title
	 * update the tRev if larger than the current
	 * @param {Number} $currentTitleRev Current latest revision
	 * @param {String} $titleString String of title to check
	 * @return {Number} Latest revision number
	 */
	public static function getLatestTitleRev( $titleRev, $titleString ){
		$t = Title::newFromText( $titleString );
		if( $t && $t->exists() ) {
			if( $t->getLatestRevID() > $titleRev  ){
				return $t->getLatestRevID();
			}
		}
		return $titleRev;
	}

	/**
	 * Get the unique request ID parameter for the resource loader request
	 * @param $resourceList Array of resources
	 * @return String The unique url id per cache version of js
	 */
	function getURIDparam( $resourceList = array() ) {
		global $wgDebugJavaScript, $wgStyleVersion, $IP, $wgScriptModifiedFileCheck;
		global $wgLang, $wgUser, $wgRequest;

		// Set language key param to keep urls distinct per language
		$uriParam = 'uselang=' . $wgLang->getCode();

		// If debug mode always send fresh url:
		if( $wgDebugJavaScript ||
		$wgRequest->getVal( 'debug' ) == 'true' ||
		$wgRequest->getVal( 'debug' ) == '1' ) {
			return $uriParam . '&urid=' . time() . '&debug=true';
		} else {
			// Support single $resourceList string
			if( gettype( $resourceList) == 'string'  ){
				$resourceList = array( $resourceList );
			}

			$ftime =  $currentTitleRev = 0;
			foreach( $resourceList as $class ) {
				// Add the latest revision ID if the class set includes a WT (wiki title)
				if( substr($class, 0, 3) == 'WT:'){
					$titleString = substr($class, 3);

					//Check for special case of generated js
					if( $titleString[0] == '-' ){
						$currentTitleRev = self::getLatestTitleRev( $currentTitleRev, 'MediaWiki:Common.js' );
						// Also check MediaWiki:{skinName}.js
						$sk = $wgUser->getSkin();
						$currentTitleRev = self::getLatestTitleRev( $currentTitleRev,
							'MediaWiki:' . ucfirst( $sk->getSkinName() ) . '.js' );
					} else {
						$currentTitleRev = self::getLatestTitleRev( $currentTitleRev, $titleString );
					}
				}else{
					// Check for file modified time:
					if( $wgScriptModifiedFileCheck ) {
						$jsPath =  ResourceLoader::getPathFromClass( $class );
						if( $jsPath ) {
							$cur_ftime = filemtime ( $IP ."/". $jsPath );
							if( $cur_ftime > $ftime )
							$ftime = $cur_ftime;
						}
					}
				}
			}
			// use the actual unique request id:
			$uriParam .= "&urid={$wgStyleVersion}";

			// Add the file modification time if set
			if( $ftime != 0 ) {
				$uriParam .= "_" . $ftime;
			}

			// Add the wiki rev id if set
			if( $currentTitleRev != 0 ) {
				$uriParam.= "_" . $currentTitleRev;
			}

			// Add the latest msg rev id
			// NOTE this is too slow so its disabled ( we need to cache the most recent msg key in the database )
			/*
			$dbr = wfGetDB( DB_SLAVE );
			// Grab the latest mediaWiki msg rev id:
			$res = $dbr->select( 'recentchanges',
			'rc_id',
			array( 'rc_namespace'=> NS_MEDIAWIKI ),
			__METHOD__,
			array( 	'ORDER BY' => 'rc_timestamp DESC', 'LIMIT' => 1 ,
			'USE INDEX' => array('recentchanges' => 'rc_timestamp' )
			)
			);
			if( $dbr->numRows($res) != 0){
			$rc = $dbr->fetchObject( $res );
			if( $rc->rc_id ){
			$uriParam.= '_' . $rc->rc_id;
			}
			}
			}
			*/

			return $uriParam;
		}
	}
}