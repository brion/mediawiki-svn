/**
* Sequencer loader
*/

// Wrap in mw to not pollute global namespace
( function( mw ) {
	
	// Loader configuration options ( all runtime options are stored in mw.SequencerConfig.js )
	mw.setDefaultConfig({
		'Sequencer.KalturaPlayerEditOverlay' : false
	});
	
	
	mw.addResourcePaths( {				
		"mw.Sequencer"	: "mw.Sequencer.js",		
		"mw.style.Sequencer" : "mw.style.Sequencer.css",		
		
		"mw.SequencerConfig" : "mw.SequencerConfig.js",
		
		"mw.SequencerServer" : "mw.SequencerServer.js",
		"mw.SequencerAddMedia" : "mw.SequencerAddMedia.js",
		"mw.SequencerAddByUrl" : "mw.SequencerAddByUrl.js",
		"mw.SequencerPlayer" : "mw.SequencerPlayer.js",
		"mw.SequencerTimeline" : "mw.SequencerTimeline.js",
		"mw.SequencerKeyBindings" : "mw.SequencerKeyBindings.js",
		"mw.SequencerTools" : "mw.SequencerTools.js",		
		"mw.SequencerMenu" : "mw.SequencerMenu.js", 
		
		"mw.SequencerActionsSequence" : "actions/mw.SequencerActionsSequence.js",
		"mw.SequencerActionsView" : "actions/mw.SequencerActionsView.js",
		"mw.SequencerActionsEdit" : "actions/mw.SequencerActionsEdit.js",
		
		"mw.SequencerRender" : "mw.SequencerRender.js",
		
		"mw.FirefoggRender"	: "mw.FirefoggRender.js",
		"$j.fn.layout"		: "ui.layout/ui.layout-1.2.0.js",
		
		"mw.MediaWikiRemoteSequencer" : "remotes/mw.MediaWikiRemoteSequencer.js",		
		"mw.style.SequencerRemote" : "remotes/mw.style.SequencerRemote.css",
		
		"mw.style.Sequencer" : "css/mw.style.Sequencer.css"
		
	} );
	
	/**
	 * The FirefoggRender sub module 
	 */
	mw.addModuleLoader( 'FirefoggRender', 
		[
			'mw.Firefogg', 
			'mw.FirefoggRender',
			'mw.UploadInterface'
		]
	);
	
	// Sequencer module loader
	mw.addModuleLoader( 'Sequencer', function( ) {		
		// Make sure we have the required mwEmbed libs:			
		return [
			[	// Load the EmbedPlayer Module ( includes lots of dependent classes )   
				'EmbedPlayer',				
				'mw.Sequencer',
				'mw.SequencerConfig'
			],		
			[										
				'$j.contextMenu',
				
				'mw.SequencerServer',				
				'mw.SequencerAddByUrl',
				'mw.SequencerAddMedia',
				'mw.SequencerPlayer',
				'mw.SequencerRender',
				
				'mw.SequencerTimeline',
				'mw.SequencerKeyBindings',
				'mw.SequencerTools',
				
				'mw.SequencerMenu',
				'mw.SequencerActionsSequence',
				'mw.SequencerActionsView',		
				'mw.SequencerActionsEdit',
				
				'mw.style.Sequencer'
			],
			[
			 	
			 	'$j.fn.layout',
			 	
				// UI components used in the sequencer interface: 
			 	'$j.ui.mouse',
				'$j.ui.accordion',
				'$j.ui.dialog',
				'$j.ui.droppable',
				'$j.ui.draggable',
				'$j.ui.progressbar',
				'$j.ui.sortable',
				'$j.ui.resizable',
				'$j.ui.slider',
				'$j.ui.tabs'
			]
		];	
	});
	
	// If doing player overlays include remote for player hooks 
	$j( mw ).bind( 'LoaderEmbedPlayerUpdateRequest', function( event, playerElement, classRequest ) {		
		if( mw.getConfig( 'Sequencer.KalturaPlayerEditOverlay' )){
			if( $j.inArray( 'mw.MediaWikiRemoteSequencer', classRequest ) == -1 )  {
				classRequest.push('mw.MediaWikiRemoteSequencer');
				classRequest.push('mw.style.SequencerRemote');
			}
		}
	})
	
	
} )( window.mw );	
		