/*
* Loader for libAddMedia module:
*/

// Scope everything in "mw"  ( keeps the global namespace clean ) 
( function( mw ) {

	mw.addMessages( {
		"mwe-loading-add-media-wiz" : "Loading add media wizard"
	});
	
	// Add class file paths ( From ROOT )
	mw.addClassFilePaths( {
		"$j.fn.dragDropFile"	: "modules/AddMedia/jquery.dragDropFile.js",	
		"$j.fn.simpleUploadForm": "modules/AddMedia/jquery.simpleUploadForm.js",
		
		"mw.UploadHandler"		: "modules/AddMedia/mw.UploadHandler.js",
		"mw.UploadInterface"	: "modules/AddMedia/mw.UploadInterface.js",
		"mw.Firefogg"			: "modules/AddMedia/mw.Firefogg.js",
		"mw.FirefoggGUI"		: "modules/AddMedia/mw.FirefoggGUI.js",
		"mw.FirefoggRender"		: "modules/libSequencer/mw.FirefoggRender.js",
		"mw.RemoteSearchDriver"	: "modules/AddMedia/mw.RemoteSearchDriver.js",			
		
		"baseRemoteSearch"		: "modules/AddMedia/searchLibs/baseRemoteSearch.js",
		"mediaWikiSearch"		: "modules/AddMedia/searchLibs/mediaWikiSearch.js",
		"metavidSearch"			: "modules/AddMedia/searchLibs/metavidSearch.js",
		"archiveOrgSearch"		: "modules/AddMedia/searchLibs/archiveOrgSearch.js",
		"flickrSearch"			: "modules/AddMedia/searchLibs/flickrSearch.js",
		"baseRemoteSearch"		: "modules/AddMedia/searchLibs/baseRemoteSearch.js",
		"kalturaSearch"			: "modules/AddMedia/searchLibs/kalturaSearch.js"
	});	
	
	/**
	* Note: We should move relevant parts of these style sheets to the addMedia/css folder 
	* phase 2: We should separate out sheet sets per sub-module:
	*/ 
	
	//Setup the addMediaWizard module
	mw.addModuleLoader( 'AddMedia.addMediaWizard', function( callback ){
		// Load all the required libs:
		var request = [
			[	'mw.RemoteSearchDriver',
				'$j.cookie',
				'$j.fn.textSelection',
				'$j.browserTest',
				'$j.ui'
			], [
				'$j.ui.resizable',
				'$j.ui.draggable',
				'$j.ui.dialog',
				'$j.ui.tabs',
				'$j.ui.sortable'
			]
		];
		mw.load( request , function() {
			callback( 'AddMedia.addMediaWizard' );
		} );
	});
	
	//Set a variable for the base upload interface for easy inclution
	var baseUploadlibs = [
		[
			'mw.UploadHandler',
			'mw.UploadInterface',
			'$j.ui'
		],
		[
			'$j.ui.progressbar',
			'$j.ui.dialog',
			'$j.ui.draggable'
		]
	];
	
	/*
	* Upload interface loader: 
	*/
	
	mw.addModuleLoader( 'AddMedia.UploadHandler', function( callback ){
		mw.load( baseUploadlibs , function() {
			callback( 'AddMedia.BaseUploadHandler' );
		});
	});
	
	/**
	 * The Firefogg loaders
	 *
	 * Includes both firefogg & firefogg "GUI" which share some loading logic: 
	 */ 
	 
	// Clone the baseUploadlibs array
	var mwBaseFirefoggReq = baseUploadlibs.slice( 0 )
	mwBaseFirefoggReq[0].push('mw.Firefogg');
	
	mw.addModuleLoader( 'AddMedia.firefogg', function( callback ){
		
		//Load firefogg libs
		mw.load( mwBaseFirefoggReq, function() {
			callback( 'AddMedia.firefogg' );
		});
	} );
	
	mw.addModuleLoader( 'AddMedia.FirefoggGUI', function( callback ){		
		// Clone the array: 
		var request = mwBaseFirefoggReq.slice( 0 ) ;
		
		// Add firefogg gui classes to a new "request" var: 
		request.push( [
			'mw.FirefoggGUI',
			'$j.cookie',
			'$j.ui.accordion',
			'$j.ui.slider',
			'$j.ui.datepicker'
		] );
		
		mw.load( request, function() {
			callback( 'AddMedia.FirefoggGUI' );
		});
	} );
	
	mw.addModuleLoader( 'AddMedia.firefoggRender', function( callback ){
		mw.load( [
			'mw.UploadHandler',
			'mw.UploadInterface',
			'mw.Firefogg',
			'mw.FirefoggRender'
		], function() {
			callback( 'AddMedia.firefoggRender' );
		});	
	});

} )( window.mw );