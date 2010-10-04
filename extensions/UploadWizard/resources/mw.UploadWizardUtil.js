/**
 * Miscellaneous utilities
 */
mw.UploadWizardUtil = {

	/**
	 * Simple 'more options' toggle that opens more of a form.
	 *
	 * @param toggleDiv the div which has the control to open and shut custom options
	 * @param moreDiv the div containing the custom options
	 */
	makeToggler: function ( toggleDiv, moreDiv ) {
		var $toggleLink = $j( '<a>' )
		   	.addClass( 'mwe-upwiz-toggler mwe-upwiz-more-options' )
			.append( gM( 'mwe-upwiz-more-options' ) );
		$j( toggleDiv ).append( $toggleLink );


		var toggle = function( open ) {
			if ( typeof open === 'undefined' ) {
				open = ! ( $j( this ).data( 'open' ) ) ;
			}
			$j( this ).data( 'open', open );
			if ( open ) {
				moreDiv.maskSafeShow();
				/* when open, show control to close */
				$toggleLink.html( gM( 'mwe-upwiz-fewer-options' ) );
				$toggleLink.addClass( "mwe-upwiz-toggler-open" );
			} else {
				moreDiv.maskSafeHide();
				/* when closed, show control to open */
				$toggleLink.html( gM( 'mwe-upwiz-more-options' ) );
				$toggleLink.removeClass( "mwe-upwiz-toggler-open" );
			}
		};

		toggle(false);

		$toggleLink.click( function( e ) { e.stopPropagation(); toggle(); } );
		
		$j( moreDiv ).addClass( 'mwe-upwiz-toggled' );
	},

	/**
	 * remove an item from an array. Tests for === identity to remove the item
	 *  XXX the entire rationale for this file may be wrong. 
	 *  XXX The jQuery way would be to query the DOM for objects, not to keep a separate array hanging around
	 * @param items  the array where we want to remove an item
	 * @param item	 the item to remove
	 */
	removeItem: function( items, item ) {
		for ( var i = 0; i < items.length; i++ ) {
			if ( items[i] === item ) {
				items.splice( i, 1 );
				break;
			}
		}
	},

	/** 
	 * Capitalise first letter and replace spaces by underscores
	 * @param filename (basename, without directories)
	 * @return typical title as would appear on MediaWiki
	 */
	pathToTitle: function ( filename ) {
		return mw.ucfirst( $j.trim( filename ).replace(/ /g, '_' ) );
	},

	/** 
	 * Capitalise first letter and replace underscores by spaces
	 * @param title typical title as would appear on MediaWiki
	 * @return plausible local filename
	 */
	titleToPath: function ( title ) {
		return mw.ucfirst( $j.trim( title ).replace(/_/g, ' ' ) );
	},


	/**
	 * Transform "File:title_with_spaces.jpg" into "title with spaces"
	 * @param   typical title that would appear on mediawiki, with File: and extension, may include underscores
	 * @return  human readable title
	 */
	fileTitleToHumanTitle: function( title ) {
		var extension = mw.UploadWizardUtil.getExtension( title );
		if ( typeof extension !== 'undefined' ) {
			// the -1 is to get the '.'
			title = title.substr( 0, title.length - extension.length - 1 );
		}
		// usually File:
		var namespace = wgFormattedNamespaces[wgNamespaceIds['file']];
		if ( title.indexOf( namespace + ':' ) === 0 ) {
			title = title.substr( namespace.length + 1 );
		}
		return mw.UploadWizardUtil.titleToPath( title );
	},


	/** 
 	 * Slice extension off a path
	 * We assume that extensions are 1-4 characters in length
	 * @param path to file, like "foo/bar/baz.jpg"
	 * @return extension, like ".jpg" or undefined if it doesn't look lke an extension.
	 */
	getExtension: function( path ) {
		var extension = undefined;
		var idx = path.lastIndexOf( '.' );
		if (idx > 0 && ( idx > ( path.length - 5 ) ) && ( idx < ( path.length - 1 ) )  ) {
			extension = path.substr( idx + 1 ).toLowerCase();
		}
		return extension;
	},

	/**
	 * Last resort to guess a proper extension
	 */
	mimetypeToExtension: {
		'image/jpeg': 'jpg',
		'image/gif': 'gif'
		// fill as needed
	}


};


