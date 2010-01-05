/* Prototype code to show collapsing left nav options */
/* First draft and will be changing greatly */

mw.addOnloadHook( function() {
	if( !wgVectorEnabledModules.collapsiblenav ) {
		return true;
	}
	$j( '#panel' ).addClass( 'collapsible-nav' );
	// Always show the first portal
	$j( '#panel > div.portal:first' )
		.addClass( 'expanded' )
		.find( 'div.body' )
		.show();
	// Remember which portals to hide and show
	$j( '#panel > div.portal:not(:first)' )
		.each( function() {
			if ( $j.cookie( 'vector-nav-' + $j(this).attr( 'id' ) ) == 'true' ) {
				$j(this)
					.addClass( 'expanded' )
					.find( 'div.body' )
					.show();
			} else {
				$j(this).addClass( 'collapsed' );
			}
		} );
	// Toggle the selected menu's class and expand or collapse the menu
	$j( '#panel > div.portal > h5' ).click( function() {
		$j.cookie( 'vector-nav-' + $j(this).parent().attr( 'id' ), $j(this).parent().is( '.collapsed' ) );
		$j(this)
			.parent()
			.toggleClass( 'expanded' )
			.toggleClass( 'collapsed' )
			.find( 'div.body' )
			.slideToggle( 'fast' );
		return false;
	} );
} );
