/**
* Playlist Embed. Enables the embedding of a playlist playlist using the mwEmbed player   
*/ 

//Get all our message text
mw.includeAllModuleMessages();

mw.Playlist = function( options ){
	return this.init( options );
};

mw.Playlist.prototype = {

	// Stores the current clip index to be played 
	clipIndex: 0,
	
	// Stores the cached player size: 
	targetPlayerSize: null,
	
	// constructor
	init: function( options ) {
		
		this.src = options.src;			
		
		this.target = options.target;	
		
		this.id = ( options.id )? options.id : $j( this.target ).attr( 'id' );
		if( !this.id ){
			// Give it a random id if unset:
			this.id = 'playlist_' + Math.random();
		}
		
		// Set the sourceHandler if provided
		if( options.sourceHandler ) {
			this.sourceHandler = options.sourceHandler;
		}
		

		// Set binding to disable "waitForMeta" for playlist items ( we know the size and length )
		$j( mw ).bind( 'addElementWaitForMetaEvent', function(even, waitForMetaObject ){		
			if( $j( waitForMetaObject[ 'playerElement' ] ).hasClass( 'mwPlaylist') ){
				waitForMetaObject[ 'waitForMeta' ] = false;
			}
		});
		
		this.type = ( options.type ) ? 
			options.type: 
			mw.getConfig('Playlist.defaultType' );
		
		// Set default options or use layout 
		this.layout = ( options.layout ) ?  
			options.layout : 
			mw.getConfig( 'Playlist.layout' );
		
		// Player aspect ratio
		this.playerAspect = ( options.playerAspect ) ?  
			options.playerAspect : 
			mw.getConfig( 'Playlist.playerAspect' );
		
		// Item thumb width 	
		this.itemThumbWidth = ( options.itemThumbWidth ) ? 
			options.itemThumbWidth : 
			mw.getConfig('Playlist.itemThumbWidth');
		
		// Default title height: 
		this.titleHeight = ( options.titleHeight ) ? 
			options.titleHeight :
			mw.getConfig( 'Playlist.titleHeight' );
				
	},
	
	/**
	* Draw the media rss playlist ui
	*/
	drawUI: function(){
		var _this = this;
		// Set the target to loadingSpinner: 
		$j( this.target ).empty().loadingSpinner();
		
		this.loadPlaylistHandler( function( sourceHandler ){			
			mw.log("mw.Playlist::loaded playlist set");
			// Check if load failed or empty playlist
			if( sourceHandler.getClipList().length == 0 ){
				$j( _this.target ).empty().text( gM('mwe-playlist-empty') )
				return ;	
			}
			
			// Empty the target and setup player and playerList divs
			$j( _this.target )
			.empty()
			.css('position', 'relative' )
			.append(
				$j( '<span />' )							
					.addClass( 'media-rss-video-player')
					.css({
						'float' : 'left'
					})
				,			
				$j( '<div />')
				.addClass( 'media-rss-video-list' )
				.attr('id', _this.id + '_videolist')
				.css({
					'position' : 'absolute',
				    'z-index' : '1',
				    'overflow' : 'auto',
				    'bottom': '0px',
				    'right' : '0px'
				})
				.hide()	
			);
			
			// Check if we have multiple playlist and setup the list and bindings
			if(  _this.sourceHandler.hasMultiplePlaylists() ){												
				var playlistSet = _this.sourceHandler.getPlaylistSet();				
				
				var $plListContainer =$j('<div />')
				.addClass( 'playlistSet-container ui-state-default ui-widget-header ui-corner-all' )
				.css({
					'position' : 'absolute',
					'overflow' : 'hidden',
					'top' : '3px',
					'right' : '0px',
					'height' : '20px'
				})
					.append(  
					$j('<div />')
					.addClass( 'playlistSet-list' )
					.css("width", '2000px')
				);
				$j( _this.target ).append( $plListContainer );
				
				var $plListSet = $j( _this.target ).find(  '.playlistSet-list' );
				
				$j.each( playlistSet, function( inx, playlist){
					// add a divider
					if( inx != 0 ){
						$plListSet.append( $j('<span />').text( ' | ') )
					}
					$plListSet.append(
						$j('<a />')
							.attr('href', '#')
							.text( playlist.name )
							.click( function(){								
								 _this.sourceHandler.setPlaylistIndex( inx );
								 $j( _this.target + ' .media-rss-video-list').loadingSpinner();
								 _this.loadPlaylist( function(){
									 $j( _this.target + ' .media-rss-video-list').empty();
									_this.addMediaList(); 
								 });
								return false;
							})
							.buttonHover()												
					)					
				});
				// Check playlistSet width and add scroll left / scroll right buttons		
				if( $plListSet.width() > $plListContainer.width() ){
					var baseButtonWidth = 24;
					$plListSet.css( {
						'position': 'absolute',
						'left' : baseButtonWidth + 'px'
					});
					var $scrollButton =	$j('<div />')					
					.addClass( 'ui-corner-all ui-state-default' )
					.css({
						'position' : 'absolute',
						'top' : '-1px',
						'cursor' : 'pointer',					
						'margin' :'0px',
						'padding' : '2px',
						'width'	: '16px',
						'height' : '16px'
					})
					
					var $buttonSpan = $j('<span />')
						.addClass( 'ui-icon' )
						.css('margin', '2px' );
					
					var plScrollPos = 0;
					var scrollToListPos = function( pos ){
						
						listSetLeft = $plListSet.find('a').eq( pos ).offset().left - 
							$plListSet.offset().left ;
						
						mw.log("scroll to: " + pos + ' left: ' + listSetLeft);
						$plListSet.animate({'left': -( listSetLeft - baseButtonWidth) + 'px'} );
					}
					
					$plListContainer
					.append( 
						$scrollButton.clone()
						.css('left', '0px')
						.append( $buttonSpan.clone().addClass('ui-icon-circle-arrow-w') )				
						.click( function(){							
							//slide right												
							if( plScrollPos >= 0){
								mw.log("scroll right");
								plScrollPos--
								scrollToListPos( plScrollPos );
							}												
						})
						.buttonHover(),
						
						$scrollButton.clone()
						.css('right', '0px')
						.append( $buttonSpan.clone().addClass('ui-icon-circle-arrow-e') )
						.click( function(){			
							//slide left							
							if( plScrollPos < $plListSet.find('a').length-1 ){
								plScrollPos++;
								scrollToListPos( plScrollPos );
							}											
						})
						.buttonHover()
					)
				}
			}
			
			// Add the selectable media list
			_this.addMediaList(); 
			
			// Add the player
			_this.updatePlayer( _this.clipIndex, function(){				
				// Update the list height ( vertical layout )
				if( _this.layout == 'vertical' ){								
					$j( _this.target + ' .media-rss-video-list' ).css( {
						'top' : $j( _this.target + ' .media-rss-video-player' ).height() + 4,
						'width' : '100%'
					} )
					// Add space for the multi-playlist selector: 
					if(  _this.sourceHandler.hasMultiplePlaylists() ){
						// also adjust .playlistSet-container if present
						$j( _this.target + ' .playlistSet-container').css( {
							'top' : $j( _this.target + ' .media-rss-video-player' ).height() + 4
						})	
						$j( _this.target + ' .media-rss-video-list' ).css({
							'top' : $j( _this.target + ' .media-rss-video-player' ).height() + 26
						})
					}
					
				} else {
					// Update horizontal layout					
					$j( _this.target + ' .media-rss-video-list').css( {
						'top' : '0px',
						'left' : $j( _this.target + ' .media-rss-video-player' ).width() + 4
					} )	
					// Add space for the multi-playlist selector: 
					if(  _this.sourceHandler.hasMultiplePlaylists() ){	
						$j( _this.target + ' .playlistSet-container').css( {
							'left' : $j( _this.target + ' .media-rss-video-player' ).width() + 4
						})						
						$j( _this.target + ' .media-rss-video-list').css( {
							'top' : '26px'
						})
					}
				}
				var $videoList = $j( _this.target + ' .media-rss-video-list' );
				$videoList.show()
				// show the video list and apply the swipe binding 
				$j( _this.target ).find('.media-rss-video-list-wrapper').fadeIn();				
				if( mw.isMobileSafari() ){			
					// iScroll is buggy with current version of iPad / iPhone use scroll buttons instead
					/*
					document.addEventListener('touchmove', function(e){ e.preventDefault(); });							
					var myScroll = iScroll( _this.id + '_videolist' );		
					setTimeout(function () { myScroll.refresh(); }, 0);
					*/ 
					// add space for scroll buttons: 
					var curTop = $j( _this.target + ' .media-rss-video-list' ).css('top');
					if(!curTop) curTop = '0px';
					$j( _this.target + ' .media-rss-video-list' ).css( {
						'position' : 'absolute',
						'height' : null,
						'top' : curTop,
						'bottom' : '30px',
						'right': '0px'
					})
					if( _this.layout == 'vertical' ){
						$j( _this.target + ' .media-rss-video-list' ).css({
							'top' :  $j( _this.target + ' .media-rss-video-player' ).height()							
						})
					}
					// Add scroll buttons:
					$j( _this.target ).append( 
						$j( '<div />').css({
							'position' : 'absolute',
							'bottom' : '0px',
							'right': '0px',
							'height' : '30px',
							'width' : $j( _this.target + ' .media-rss-video-list').width()
						})
						.append(								
							$j.button({ 
								'text' : 'scroll down',
								'icon_id' : 'circle-arrow-s' 
							})
							.css('float', 'right')
							.click(function(){
								var clipListCount = $videoList.children().length;
								var clipSize = $videoList.children(':first').height();
								var curTop = $videoList.attr('scrollTop');			
								
								var targetPos = curTop +  (clipSize * 3);
								if( targetPos > clipListCount * clipSize ){
									targetPos = ( clipListCount * ( clipSize -1 ) );
								}								
								//mw.log(" animate to: " +curTop + ' + ' + (clipSize * 3) + ' = ' + targetPos );
								$videoList.animate({'scrollTop': targetPos }, 500 );
								
						       return false;
							}),
							$j.button({
								'text' : 'scroll up',
								'icon_id' : 'circle-arrow-n'
							})
							.css('float', 'left')
							.click(function(){
								var clipListCount = $videoList.children().length;
								var clipSize = $videoList.children(':first').height();
								var curTop = $videoList.attr('scrollTop');			
								
								var targetPos = curTop -  (clipSize * 3);
								if( targetPos < 0 ){
									targetPos = 0
								}								
								mw.log(" animate to: " +curTop + ' + ' + (clipSize * 3) + ' = ' + targetPos );
								$videoList.animate({'scrollTop': targetPos }, 500 );
								
								return false;
							})
						)
					)
				}
				
			});
										
					
		});	
	},
	
	/**
	* Update the target size of the player
	*/
	getTargetPlayerSize: function( ){	
		var _this = this;	
		if( this.targetPlayerSize ){
			return this.targetPlayerSize;
		} 
		
		// Get the target width and height: ( should be based on layout or 
		this.targetWidth = $j( this.target ).width();
		this.targetHeight = $j( this.target ).height();			
		
		/* vertical layout */
		if( _this.layout == 'vertical' ){	
			var pa = this.playerAspect.split(':');
			this.targetPlayerSize = {
				'width' : this.targetWidth + 'px',
				'height' : parseInt( ( pa[1] / pa[0]  ) * this.targetWidth )
			};
		} else {
		/* horizontal layout */
			var pa = this.playerAspect.split(':');
			this.targetPlayerSize = {
				'height' : ( this.targetHeight - this.titleHeight ) + 'px',
				'width' : parseInt( ( pa[0] / pa[1]  ) * this.targetHeight )
			};
		}		
		if( this.targetPlayerSize.width > this.targetWidth ){
			var pa = this.playerAspect.split(':');
			this.targetPlayerSize.width =  this.targetWidth;
			this.targetPlayerSize.height =  parseInt( ( pa[1] / pa[0]  ) * this.targetWidth );
		}
		return this.targetPlayerSize;
	},
	
	/**
	* update the player
	*/
	updatePlayer: function( clipIndex , callback ){
		var _this = this;					
		var playerSize = _this.getTargetPlayerSize() ;
		
		// Build and output the title
		var $title = $j('<div />' )
			.addClass( 'playlist-title ui-state-default ui-widget-header  ui-corner-all')
			.css( { 
				'top' : '0px',
				'height' : _this.titleHeight,
				'width' :  playerSize.width
			} )
			.text( 
				_this.sourceHandler.getClipTitle( clipIndex ) 
			)
		
		$j( _this.target + ' .media-rss-video-player' ).find('.playlist-title').remove( );
		$j( _this.target + ' .media-rss-video-player' ).prepend( $title );						
		
		// Update the player list if present: 			 
		$j( _this.target + ' .clipItemBlock')
			.removeClass( 'ui-state-active' )
			.addClass( 'ui-state-default' )
			.eq( clipIndex ) 
			.addClass( 'ui-state-active' )		
		
		// Build the video tag object: 
		var $video = $j( '<video />' )
			.attr({
				'id' : 'mrss_' + this.id + '_' + clipIndex,
				'poster' : _this.sourceHandler.getClipPoster( clipIndex ) 
			})
			.addClass( 'mwPlaylist' )
			.css(
				playerSize
			)
			// Add custom attributes: 
			.attr(  _this.sourceHandler.getCustomClipAttributes( clipIndex ) );
		
		// lookup the sources from the playlist provider: 		
		this.sourceHandler.getClipSources( clipIndex, function( clipSources ){			
			if( clipSources ){
				for( var i =0; i < clipSources.length; i++ ){					
					var $source = $j('<source />')
						.attr(  clipSources[i] );															
					$video.append( $source );
				}
			}			
			_this.addVideoPlayer( $video , callback);
		});
	},
	
	addVideoPlayer: function( $video , callback){
		var _this = this;
		// If on mobile safari just swap the sources ( don't replace the video ) 
		// ( mobile safari can't javascript start the video ) 
		// see: http://developer.apple.com/iphone/search/search.php?simp=1&num=10&Search=html5+autoplay
		var addVideoPlayerToDom = true;				
		if( mw.isMobileSafari() ){
			// Check for a current video:	
			var $inDomVideo = $j( _this.target + ' .media-rss-video-player video' );			
			if( $inDomVideo.length == 0 ){
				addVideoPlayerToDom= true;
			} else {
				addVideoPlayerToDom = false;
				// Update the inDomVideo object:
				// NOTE: this hits a lot of internal stuff should !  
				// XXX Should refactor to use embedPlayer interfaces!
				var vidInterface = $j( _this.target + ' .media-rss-video-player' ).find('.mwplayer_interface div').get(0)
				vidInterface.id = $video.attr('id');
				vidInterface.pid = 'pid_' + $video.attr('id');
				vidInterface.duration = null;
				if( $video.attr('kentryid') ){						
					vidInterface.kentryid = $video.attr('kentryid');
				}
				// Update the current video target source
				$inDomVideo.attr({
					'id' : 'pid_' + $video.attr('id'),
					'src':  $video.find( 'source').attr('src') 
				});
				
			}
		} else {
			// Remove the old video player ( non-mobile safari ) 
			// xxx NOTE: need to check fullscreen support might be better to universally swap the src )
			$j( _this.target + ' .media-rss-video-player' ).remove( 'video' );
		}
		
		if( addVideoPlayerToDom ) {
			// replace the video: 
			$j( _this.target + ' .media-rss-video-player' ).append( $video );
		}
		
		// Update the video tag with the embedPlayer
		$j.embedPlayers( function(){						
			// Setup ondone playing binding to play next clip (if autoContinue is true )			
			if( _this.sourceHandler.autoContinue == true ){
				$j( '#mrss_' + _this.id + '_' + _this.clipIndex ).unbind('ended').bind( 'ended', function(event, onDoneActionObject ){										
					// Play next clip
					if( _this.clipIndex + 1 < _this.sourceHandler.getClipCount() ){
						// Update the onDone action object to not run the base control done: 
						onDoneActionObject.runBaseControlDone = false;
						_this.clipIndex++;
											
						// update the player and play the next clip						
						_this.updatePlayer( _this.clipIndex, function(){						
							_this.play();
						})					
						
					} else {
						mw.log("Reached end of playlist run normal end action" );
						// Update the onDone action object to not run the base control done: 
						onDoneActionObject.runBaseControlDone = true;
					}
				})
			}
			// Run the callback if its set
			if( callback ){
				callback();
			}				 
		} );	
	},
	
	/** 
	* Add the media list with the selected clip highlighted
	*/
	addMediaList: function() {
		var _this = this;
		$targetItemList = $j( this.target + ' .media-rss-video-list');
		
		$j.each( this.sourceHandler.getClipList(), function( inx, clip ){
			mw.log( 'mw.Playlist::addMediaList: On clip: ' + inx);
			
			// Output each item with the current selected index:				
			$itemBlock = $j('<div />')
				.addClass( 'ui-widget-content ui-corner-all' )
				
			if( _this.clipIndex == inx ){
				$itemBlock.addClass( 'ui-state-active');
			} else {
				$itemBlock.addClass( 'ui-state-default' );
			}
			
			// Add a single row table with image, title then duration 
			$itemBlock.append( 
				$j( '<table />')
				.css( {
					'border': '0px',
					'width' : '100%' 
				})
				.append(
					$j('<tr />')							
					.append( 
						$j( '<td />')
						.css('width', _this.itemThumbWidth )
						.append( 
							$j('<img />')
							.attr({ 
								'alt' : _this.sourceHandler.getClipTitle( inx ),
								'src' : _this.sourceHandler.getClipPoster( inx )
							})
							.css( 'width', _this.itemThumbWidth + 'px') 
						),
						$j( '<td />')
						.text( _this.sourceHandler.getClipTitle( inx ) ),
						
						$j( '<td />')
						.css( 'width', '50px') 
						.text( 
							mw.seconds2npt(
								_this.sourceHandler.getClipDuration( inx )
							)
						)
						
					)											
				) // table row
			) // table block
			.data( 'clipIndex', inx )
			.buttonHover()
			.addClass( 'clipItemBlock' 	)
			.css( {
				'cursor': 'pointer' 
			} )
			.click( function(){
				mw.log( 'clicked on: ' + $j( this ).data( 'clipIndex') ); 
				// Update _this.clipIndex
				_this.clipIndex = $j( this ).data( 'clipIndex' );
				_this.updatePlayer( _this.clipIndex, function(){
					_this.play();
				} );
			}) //close $itemBlock

			// Add the itemBlock to the targetItem list
			$targetItemList.append( 
				$itemBlock
			)
			mw.log("added item block : " + $targetItemList.children().length );
		});
	},
	
	/**
	* Start playback for current clip
	*/
	play: function(){
		// Get the player and play:
		var vid = $j('#mrss_' + this.id + '_' + this.clipIndex ).get(0);	
		//alert( 'play: '+ )
		if( vid && vid.play ){			
			vid.load();
			vid.play();
		}
	},
	
	
	/**
	 * Load the playlist driver from a source
	 */
	loadPlaylistHandler: function( callback ){
		var _this = this;		
		if( !_this.sourceHandler ){
			switch( this.type ){
				case 'application/rss+xml':			
					_this.sourceHandler = new mw.PlaylistHandlerMediaRss( this );
				break;
			}
		};		
		// load the playlist 
		_this.sourceHandler.loadPlaylist( function(){			
			callback( _this.sourceHandler );
		});
	}, 
	
	/**
	 * Set the playlsit source handler
	 */
	setSourceHandler: function ( sourceHandler ){
		this.sourceHandler = sourceHandler;
	}
}
