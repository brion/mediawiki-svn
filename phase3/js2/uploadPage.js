/*
 * uploadPage.js to be run on specialUpload page.
 * controls the invocation of the mvUploader class based on local config. 
 */  
mwAddOnloadHook( function(){
	mwUploadHelper.init();		
});
//set up the upoload form bindings once all dom manipluation is done
var mwUploadHelper = {
	init:function(){
		if( wgEnableFirefogg ){
			//setup the upload handler to firefogg  (supports our upload proccess) 
			$j('#wpUploadFile').firefogg({ 
				//an api url (we won't submit directly to action of the form) if the api supports action=upload: 
				'api_url' : wgServer + wgScriptPath + '/api.php',
				
				'new_source_cb' : function( filename ){
										$j('#wpDestFile').val( filename );
										mwUploadHelper.doDestCheck();
								}
			});		
		}else{
			//we can try and do basic upload profile support ( http status monitoring, progress box for browsers that support it etc. ) 
			mvJsLoader.doLoad({
				'mvBaseUploadInterface': 'libAddMedia/mvBaseUploadInterface.js'
			},function(){
				myUp = new mvBaseUploadInterface( { 'api_url' : wgServer + wgScriptPath + '/api.php' } );
				myUp.setupForm();
			});
		}
		
		if( wgAjaxUploadDestCheck ){
			//do destination check: 		
			$j('#wpDestFile').change( mwUploadHelper.doDestCheck );
		}
		//check if we have http enabled & setup enable/disable toggle:
		if($j('#wpUploadFileURL').length != 0){
			var toggleUpType = function( set ){
				$j('#wpSourceTypeFile').get(0).checked = set;
				$j('#wpUploadFile').get(0).disabled = !set;
				
				$j('#wpSourceTypeURL').get(0).checked = !set;
				$j('#wpUploadFileURL').get(0).disabled =  set;
			}		
			//set the initial toggleUpType		
			toggleUpType(true);	
			
			$j("input[name='wpSourceType']").click(function(){			
				toggleUpType( this.id == 'wpSourceTypeFile' );
			});	
		}
		$j('#wpUploadFile,#wpUploadFileURL').focus(function(){		
			toggleUpType( this.id == 'wpUploadFile' );	
		}).change(function(){ //also setup the onChange event binding: 				
			if ( wgUploadAutoFill ) {
				mwUploadHelper.doDestinationFill( this );		
			}		
		});			
	},			
	/**
	 * doDestCheck checks the destination
	 * @@todo we should be able to configure its "targets" via parent config
	 */
	doDestCheck:function(){		
		var _this = this;
		$j('#wpDestFile-warning').empty();
		//show loading
		$j('#wpDestFile').after('<img id = "mw-spinner-wpDestFile" src ="'+ stylepath + '/common/images/spinner.gif" />');
		//try and get a thumb of the current file (check its destination)				
		do_api_req({
			'data':{ 
				'titles': 'File:' + $j('#wpDestFile').val(),//@@todo we may need a more clever way to get a the filename
				'prop':  'imageinfo',
				'iiprop':'url|mime|size',
				'iiurlwidth': 150 
			},
			'url': _this.api_url
		},function(data){
			$j('#mw-spinner-wpDestFile').remove();
			if(data && data.query && data.query.pages){
				if( data.query.pages[-1] ){
					//all good no file there
				}else{
					for(var page_id in data.query.pages){
						if( data.query.normalized){
							var ntitle = data.query.normalized[0].to;
						}else{
							var ntitle = data.query.pages[ page_id ].title;
						}	
						var img = data.query.pages[ page_id ].imageinfo[0];								
						$j('#wpDestFile-warning').html(
							'<ul>' +
								'<li>'+
									gM('fileexists', ntitle) + 
								'</li>'+
								'<div class="thumb tright">' +
									'<div style="width: ' + ( parseInt(img.thumbwidth)+2 ) + 'px;" class="thumbinner">' +
										'<a title="' + ntitle + '" class="image" href="' + img.descriptionurl + '">' +
											'<img width="' + img.thumbwidth + '" height="' + img.thumbheight + '" border="0" class="thumbimage" ' +
											'src="' + img.thumburl + '"' +
											'	 alt="' + ntitle + '"/>' +
										'</a>' +
										'<div class="thumbcaption">' +
											'<div class="magnify">' +
												'<a title="' + gM('thumbnail-more') + '" class="internal" ' +
													'href="' + img.descriptionurl +'"><img width="15" height="11" alt="" ' +
													'src="' + stylepath +"/>" +
												'</a>'+
											'</div>'+
											gM('fileexists-thumb') +
										'</div>' +
									'</div>'+
								'</div>' +
							'</ul>'
						);
					}
				}
			}
		});			
	},
	/**
	 * doDestinationFill fills in a destination file-name based on a source asset name. 
	 * @@todo we should be able to configure its "targets" via parent config
	 */
	doDestinationFill:function( targetElm ){
		js_log("doDestinationFill")
		//remove any previously flagged errors
		$j('#mw-upload-permitted,#mw-upload-prohibited').hide();					
		
		var path = $j(targetElm).val();
		// Find trailing part
		var slash = path.lastIndexOf('/');
		var backslash = path.lastIndexOf('\\');
		var fname;
		if (slash == -1 && backslash == -1) {
			fname = path;
		} else if (slash > backslash) {
			fname = path.substring(slash+1, 10000);
		} else {
			fname = path.substring(backslash+1, 10000);
		}		
		//urls are less likely to have a usefull extension don't include them in the extention check
		if( wgFileExtensions && $j(targetElm).attr('id') != 'wpUploadFileURL' ){		
			var found = false;		
			if( fname.lastIndexOf('.')!=-1 ){		
				var ext = fname.substr( fname.lastIndexOf('.')+1 );			
				for(var i=0; i < wgFileExtensions.length; i++){						
					if(  wgFileExtensions[i].toLowerCase()   ==  ext.toLowerCase() )
						found = true;
				}
			}
			if(!found){
				//clear the upload set mw-upload-permitted to error
				$j(targetElm).val('');
				$j('#mw-upload-permitted,#mw-upload-prohibited').show().addClass('error');												
				//clear the wpDestFile as well: 
				$j('#wpDestFile').val('');								
				return false;
			}		
		}				
		// Capitalise first letter and replace spaces by underscores
		fname = fname.charAt(0).toUpperCase().concat(fname.substring(1,10000)).replace(/ /g, '_');	
		// Output result
		$j('#wpDestFile').val( fname );
				
		//do a destination check 
		this.doDestCheck();
	}
}
	
