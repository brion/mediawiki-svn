/**
 * simple form output jquery binding
 * enables dynamic form output to a given target
 *
 */

mw.addMessages( {
	"mwe-select_file" : "Select file",
	"mwe-more_license_options" : "For more license options, view the <a href=\"$1\">normal upload page<\/a>",
	"mwe-select_ownwork" : "I am uploading entirely my own work, and licensing it under:",
	"mwe-license_cc-by-sa" : "Creative Commons Share Alike (3.0)",
	"mwe-upload" : "Upload file",
	"mwe-destfilename" : "Destination filename:",
	"mwe-summary" : "Summary",
	"mwe-error_not_loggedin" : "You do not appear to be logged in or do not have upload privileges.",
	"mwe-watch-this-file" : "Watch this file",
	"mwe-ignore-any-warnings" : "Ignore any warnings"
} );

var default_form_options = {
	'enable_fogg'	 : true,
	'license_options': ['cc-by-sa'],
	'api_target' : false,
	'ondone_callback' : null
};

( function( $ ) {
	/** 
	* Add the Simple Upload From jQuery binding
	*
	* @param {Object} options Set of options for the upload 
	* overitting default values in default_form_options
	*/
	$.fn.simpleUploadForm = function( options  ) {
		var _this = this;
		// set the options:
		for ( var i in default_form_options ) {
			if ( !options[i] )
				options[i] = default_form_options[i];
		}

		// First do a reality check on the options:
		if ( !options.api_target ) {
			$( this.selector ).html( 'Error: Missing api target' );
			return false;
		}
		
		// Get an edit Token for "uploading"
		mw.getToken( options.api_target, 'File:MyRandomFileTokenCheck.jpg', function( eToken ) {
			if ( !eToken || eToken == '+\\' ) {
				$( _this.selector ).html( gM( 'mwe-error_not_loggedin' ) );
				return false;
			}

			// Build an upload form:
			var o = '<div>' +
						'<form id="suf_upload" name="suf_upload" enctype="multipart/form-data" action="' + options.api_target + '" method="post">'  +
						// hidden input:
						'<input type="hidden" name="action" value="upload">' +
						'<input type="hidden" name="format" value="jsonfm">' +
						'<input type="hidden" id="wpEditToken" name="wpEditToken" value="' + eToken + '">' +
			
						// form name set:
						'<label for="wpUploadFile">' + gM( 'mwe-select_file' ) + '</label><br>' +
						'<input id="wpUploadFile" type="file" style="display: inline;" name="wpUploadFile" size="15"/><br>' +
			
						'<label for="wpDestFile">' + gM( 'mwe-destfilename' ) + '</label><br>' +
						'<input id="wpDestFile" type="text" id="wpDestFile" name="wpDestFile" size="30" /><br>' +
			
						'<label for="wpUploadDescription">' + gM( 'mwe-summary' ) + ':</label><br>' +
						'<textarea id="wpUploadDescription" cols="30" rows="3" name="wpUploadDescription" tabindex="3"/><br>' +
						
						'<input type="checkbox" value="true" id="wpWatchthis" name="watch" tabindex="7"/>' +
						'<label for="wpWatchthis">' + gM( 'mwe-watch-this-file' ) + '</label>' +
						
						'<input type="checkbox" value="true" id="wpIgnoreWarning" name="ignorewarnings" tabindex="8"/>' +
						'<label for="wpIgnoreWarning">' + gM( 'mwe-ignore-any-warnings' ) + '</label></br>' +
						
						'<div id="wpDestFile-warning"></div>' +
						'<div style="clear:both;"></div>' + '<p>' +
			
						gM( 'mwe-select_ownwork' ) + '<br>' +
						'<input type="checkbox" id="wpLicence" name="wpLicence" value="cc-by-sa">' + gM( 'mwe-license_cc-by-sa' ) + '</p>' +
			
						'<input type="submit" accesskey="s" value="' + gM( 'mwe-upload' ) + '" name="wpUploadBtn" id="wpUploadBtn"  tabindex="9"/>' +
						// Close the form and div
						'</form>' +
				'</div>';

			// Set the target with the form output:
			$( _this.selector ).html( o );
			
			// By default disable:
			$j( '#wpUploadBtn' ).attr( 'disabled', 'disabled' );

			// Set up basic license binding:
			$j( '#wpLicence' ).click( function() {
				if ( $j( this ).is( ':checked' ) ) {
					$j( '#wpUploadBtn' ).removeAttr( 'disabled' );
				} else {
					$j( '#wpUploadBtn' ).attr( 'disabled', 'disabled' );
				}
			} );
			
			// Do destination fill
			$j( "#wpUploadFile" ).change( function() {
				var path = $j( this ).val();
				// Find trailing part
				var slash = path.lastIndexOf( '/' );
				var backslash = path.lastIndexOf( '\\' );
				var fname;
				if ( slash == -1 && backslash == -1 ) {
					fname = path;
				} else if ( slash > backslash ) {
					fname = path.substring( slash + 1, 10000 );
				} else {
					fname = path.substring( backslash + 1, 10000 );
				}
				fname = fname.charAt( 0 ).toUpperCase().concat( fname.substring( 1, 10000 ) ).replace( / /g, '_' );
				// Output result
				$j( "#wpDestFile" ).val( fname );
				// Do destination check
				$j( "#wpDestFile" ).doDestCheck( {
					'warn_target':'#wpDestFile-warning'
				} );
			} );


			// Do destination check:
			$j( "#wpDestFile" ).change( function() {			
				$j( "#wpDestFile" ).doDestCheck( {
					'warn_target':'#wpDestFile-warning'
				} );
			} );

			if ( typeof options.ondone_callback == 'undefined' )
				options.ondone_callback = false;

			// Set up the binding per the config
			if ( options.enable_fogg ) {
				mw.load( 'AddMedia.firefogg', function(){
					$j( "#wpUploadFile" ).firefogg( {
						// An api url (we won't submit directly to action of the form)
						'api_url' : options.api_target,
											
						// MediaWiki API supports chunk uploads: 
						'enable_chunks' : false,
											
						'form_selector' : '#suf_upload',
						'selectFileCb' : function( fileName ) {
							$j( "#wpDestFile" ).val( oggName ).doDestCheck( {
								warn_target: "#wpDestFile-warning"
							} );
						},
						'onsubmit_cb' : function( ){
							// Update with basic info template:	
							// TODO: it would be nice to have a template generator class
							var desc = $j('#wpUploadDescription').val();
							
							// Update the template if the user does not already have template code:
							if( desc.indexOf('{{Information') == -1){
								$j('#wpUploadDescription').val( 
'== {{int:filedesc}} ==' + "\n" +
'{{Information' + "\n" +
'|Description={{en|' + desc + "\n}}\n" +
'|Author=[[User:' + wgUserName + '|' + wgUserName + ']]' + "\n" +
'|Source=' + "\n" +
'|Date=' + "\n" +
'|Permission=' + "\n" +
'|other_versions=' + "\n" + 
'}}' + "\n" +
'{{self|cc-by-sa-3.0}}' + "\n"
								);
							}
						},
						'done_upload_cb' : options.ondone_callback
					} );
				});
			}
		} );		
	}
} )( jQuery );
