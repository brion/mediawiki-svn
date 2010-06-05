/*
* Loader for smilPlayer
*/

mw.addClassFilePaths( {
	"mw.Smil" : "mw.Smil.js",
	"mw.SmilLayout" : "mw.SmilLayout.js",
	"mw.SmilBody" : "mw.SmilBody.js",
	
	"mw.EmbedPlayerSmil" : "mw.EmbedPlayerSmil.js"
} );

$j( mw ).bind( 'addElementWaitForMetaEvent', function( event, waitForMetaObject ) {
	// Tell embedPlayer ~not~ to wait for metadata in cases of smil documents
	if( mw.CheckElementForSMIL(  waitForMetaObject[ 'playerElement' ] ) ){
		waitForMetaObject[ 'waitForMeta' ] = false;
		return false;
	}
});

// Add the mw.SmilPlayer to the embedPlayer loader:
$j( mw ).bind( 'LoaderEmbedPlayerUpdateRequest', function( event, playerElement, classRequest ) {
	
	var smilPlayerLibrarySet = [
		"mw.Smil",
		"mw.SmilLayout",
		"mw.SmilBody",
		"mw.EmbedPlayerSmil"
	]; 
		
	// Add smil library set if needed
	if( mw.CheckElementForSMIL( playerElement )  ) {				
		// If the swarm transport is enabled add mw.SwarmTransport to the request.   			
		$j.merge(classRequest, smilPlayerLibrarySet);
	}
} );

// Add the smil player to available player types: 
$j( mw ).bind( 'EmbedPlayerManagerReady', function( event ) {			
	
	// Add the swarmTransport playerType	
	mw.EmbedTypes.players.defaultPlayers[ 'application/smil' ] = [ 'Smil' ];
	
	// Build the swarm Transport "player"
	var smilMediaPlayer = new mediaPlayer( 'smilPlayer', [ 'application/smil' ], 'Smil' );
	
	// Add the swarmTransport "player"
	mw.EmbedTypes.players.addPlayer( smilMediaPlayer );
				
} );		


/**
* Check if a video tag element has a smil source
*/ 
mw.CheckElementForSMIL = function( element ){
	if( $j( element ) .attr('type' ) == 'application/smil' ||
		( $j( element ).attr('src' ) && 
	 	$j( element ).attr('src' ).substr( -4) == 'smil' ) ) 
	 {
	 	return true;
	 }
	 var loadSmil = false;
	 $j( element ).find( 'source' ).each( function(inx, sourceElement){
		if( mw.CheckElementForSMIL( sourceElement ) ){
			loadSmil = true;
			return true;
		}			
	});	 
	return loadSmil;
};
