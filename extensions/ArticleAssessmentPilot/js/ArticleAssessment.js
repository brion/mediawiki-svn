( function( $ ) {
	$.ArticleAssessment = {
		'config': { 
			'authtoken': '',
			'userID': wgUserName,
			'pageID': wgArticleId,
			'revID': wgCurRevisionId
		},
		'settings': {
			'endpoint': wgScriptPath + '/api.php?',
			'fieldMessages' : [
			'wellsourced',
			'neutrality',
			'completeness',
			'readability'
			],
			'fieldHintSuffix': '-tooltip',
			'fieldPrefix': 'articleassessment-rating-',
			'fieldHTML': '<div class="field-wrapper" id="articleassessment-rate-{FIELD}"> \
				<label for="rating_{FIELD}" original-title="{HINT}" class="rating-field-label">{LABEL}</label> \
				<select id="rating_{FIELD}" name="rating[{FIELD}]" class="rating-field"> \
					<option value="1">1</option> \
					<option value="2">2</option> \
					<option value="3">3</option> \
					<option value="4">4</option> \
					<option value="5">5</option> \
				</select> \
			</div>',
			'structureHTML': '<div class="article-assessment-wrapper"> \
				<form action="rate" method="post" id="article-assessment"> \
					<fieldset id="article-assessment-rate"> \
						<legend>{YOURFEEDBACK}</legend> \
						<div class="article-assessment-information"> \
							<span class="article-assessment-rate-instructions">{INSTRUCTIONS}</span> \
							<span class="article-assessment-rate-feedback">{FEEDBACK}</span> \
						</div> \
						<div class="article-assessment-rating-fields"></div> \
						<div class="article-assessment-submit"> \
							<input type="submit" value="Submit" /> \
						</div> \
					</fieldset> \
					<fieldset id="article-assessment-ratings"> \
						<legend>{ARTICLERATING}</legend> \
						<div class="article-assessment-information"> \
							<span class="article-assessment-show-ratings">{RESULTSSHOW}</span> \
							<span class="article-assessment-hide-ratings">{RESULTSHIDE}</span> \
						</div> \
					</fieldset> \
				</form> \
			</div>',
			'ratingHTML': '<div class="article-assessment-rating" id="articleassessment-rating-{FIELD}"> \
					<span class="article-assessment-rating-field-name">{LABEL}</span> \
					<span class="article-assessment-rating-field-value-wrapper"> \
						<span class="article-assessment-rating-field-value">{VALUE}</span> \
					</span> \
					<span class="article-assessment-rating-count">{COUNT}</span> \
				</div>',
			'staleMSG': '<span class="article-assessment-stale-msg">{MSG}</span>'
		},
		
		'fn' : {
			'init': function( $$options ) {
				// merge options with the config
				var settings = $.extend( {}, $.ArticleAssessment.settings, $$options );
				var config = $.ArticleAssessment.config;
				// if this is an anon user, get a unique identifier for them
				// load up the stored ratings and update the markup if the cookie exists
				var cookieSettings = $.cookie( 'mwArticleAssessment' );
				if ( true || typeof cookieSettings == 'undefined' ) {
					function randomString( string_length ) {
						var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
						var randomstring = '';
						for (var i=0; i<string_length; i++) {
							var rnum = Math.floor(Math.random() * chars.length);
							randomstring += chars.substring(rnum,rnum+1);
						}
						return randomstring;
					}
					cookieSettings = {
						uid: randomString( 32 )
					};
					$.cookie( 'mwArticleAssessment', cookieSettings );
				}
				if ( ! wgUserName ) {
					config.userID = cookieSettings.uid;
				}
				// setup our markup
				var $output = $( settings.structureHTML
					.replace( /\{INSTRUCTIONS\}/g, mw.usability.getMsg('articleassessment-pleaserate') )
					.replace( /\{FEEDBACK\}/g,  mw.usability.getMsg('articleassessment-featurefeedback')
						.replace( /\[\[([^\|\]]*)\|([^\|\]]*)\]\]/, '<a href="' + wgArticlePath + '">$2</a>' ) )
					.replace( /\{YOURFEEDBACK\}/g,  mw.usability.getMsg('articleassessment-yourfeedback') )
					.replace( /\{ARTICLERATING\}/g,  mw.usability.getMsg('articleassessment-articlerating' ) ) 
					.replace( /\{RESULTSHIDE\}/g,  mw.usability.getMsg('articleassessment-results-hide' )
						.replace( /\[\[\|([^\]]*)\]\]/, '<a href="#">$1</a>' ) ) 
					.replace( /\{RESULTSSHOW\}/g,  mw.usability.getMsg('articleassessment-results-show' )
						.replace( /\[\[\|([^\]]*)\]\]/, '<a href="#">$1</a>' ) ) );
				for( var field in settings.fieldMessages ) { 
					$output.find( '.article-assessment-rating-fields' )
						.append( $( settings.fieldHTML
							.replace( /\{LABEL\}/g, mw.usability.getMsg( settings.fieldPrefix + settings.fieldMessages[field] ) )
							.replace( /\{FIELD\}/g, settings.fieldMessages[field] )
							.replace( /\{HINT\}/g, mw.usability.getMsg( settings.fieldPrefix + settings.fieldMessages[field] + settings.fieldHintSuffix ) ) ) );
					$output.find( '#article-assessment-ratings' )
						.append( $( settings.ratingHTML
							.replace( /\{LABEL\}/g, mw.usability.getMsg(settings.fieldPrefix + settings.fieldMessages[field]) )
							.replace( /\{FIELD\}/g, settings.fieldMessages[field] )
							.replace( /\{VALUE\}/g, '0%' ) 
							.replace( /\{COUNT\}/g, mw.usability.getMsg( 'articleassessment-noratings', [0, 0] ) ) ) 
							);
				}
				$output.find( '#article-assessment' ).data( 'articleAssessment-context', { 'settings': settings, 'config': config } );
				// hook up the ratings show/hide
				$output
					.find( '.article-assessment-show-ratings a' )
					.click( function() {
						$( this )
							.parent()
							.hide();
						$output
							.find( '#article-assessment-ratings' )
							.removeClass( 'article-assessment-ratings-disabled' )
							.end()
							.find( '.article-assessment-hide-ratings' )
							.show();
							return false;
					} )
					.end()
					.find( '.article-assessment-hide-ratings a' )
					.click( function() {
						$( this )
							.parent()
							.hide();
						$output
							.find( '#article-assessment-ratings' )
							.addClass( 'article-assessment-ratings-disabled' )
							.end()
							.find( '.article-assessment-show-ratings' )
							.show();
							return false;
					} )
					.click();
				$( '#catlinks' ).before( $output );
				
				// set the height of our smaller fieldset to match the taller
				if( $( '#article-assessment-rate' ).height() > $( '#article-assessment-ratings' ).height() ) {
					$( '#article-assessment-ratings' ).css( 'minHeight',  $( '#article-assessment-rate' ).height() );
				} else {
					$( '#article-assessment-rate' ).css( 'minHeight',  $( '#article-assessment-ratings' ).height() );
				}
				// attempt to fetch the ratings 
				$.ArticleAssessment.fn.getRatingData();
				
				// initialize the star plugin 
				$( '.rating-field' ).each( function() {
					$( this )
						.wrapAll( '<div class="rating-field"></div>' )
						.parent()
						.stars( { 
							inputType: 'select', 
							callback: function( value, link ) {
								// remove any stale classes
								value.$stars.each( function() {
									$( this ).removeClass( 'ui-stars-star-stale' );
								} );
							}
						 } );
				});
				// intialize the tooltips
				$( '.field-wrapper label[original-title]' ).each(function() {
					$( this )
						.after( $( '<span class="rating-field-hint" />' )
							.attr( 'original-title', $( this ).attr( 'original-title' ) )
							.tipsy( { gravity : 'se', opacity: '0.9',  } ) );
				} );
				// bind submit event to the form
				$( '#article-assessment' ).submit( function() { $.ArticleAssessment.fn.submitRating(); return false; } );
				// prevent the submit button for being active until all ratings are filled out
				
			},
			'getRatingData': function() {
				var request = $.ajax( {
					url: wgScriptPath + '/api.php',
					data: {
						'action': 'query',
						'list': 'articleassessment',
						'aarevid': wgCurRevisionId,
						'aapageid': wgArticleId,
						'aauserrating': 1,
						'format': 'json'
					},
					dataType: 'json',
					success: function( data ) {
						$.ArticleAssessment.fn.afterGetRatingData( data );
					},
					error: function(XMLHttpRequest, textStatus, errorThrown) {
						// console.log(XMLHttpRequest, textStatus, errorThrown);
					}
				} );
			},
			'afterGetRatingData' : function( data ) {
				var settings = $( '#article-assessment' ).data( 'articleAssessment-context' ).settings;
				// add the correct data to the markup
				if( data.query.articleassessment.length > 0 ) {
					for( rating in data.query.articleassessment[0].ratings) {
						var rating = data.query.articleassessment[0].ratings[rating],
							$rating = $( '#' + rating.ratingdesc ),
							label = mw.usability.getMsg( 'articleassessment-noratings', [rating.total, rating.count] );
						$rating
							.find( '.article-assessment-rating-field-value' )
							.text( rating.total )
							.end()
							.find( '.article-assessment-rating-count' )
							.text( label );
						if( rating.userrating ) {
							var $rateControl = $( '#' + rating.ratingdesc.replace( 'rating', 'rate' ) + ' .rating-field' );
							$rateControl.children( '.ui-stars-star' ).eq( rating.userrating - 1 ).click();
						}
					}
					// if the rating is stale, add the stale class
					if( true /* replace with conditional based on returned results of past user ratings */ ) {
						// add the stale star class to each on star
						$( '.ui-stars-star-on' )
							.addClass( 'ui-stars-star-stale' );
						// add the stale message
						$( '.article-assessment-submit' )
							.append( settings.staleMSG.replace( /\{MSG\}/g, mw.usability.getMsg( 'articleassessment-stalemessage-revisioncount' )
								.replace( /'''([^']*)'''/g, '<strong>$1</strong	>' )
								.replace( /''([^']*)''/, '<em>$1</em>' ) ) );
					}
				}

				// initialize the ratings 
				$( '.article-assessment-rating-field-value' ).each( function() {
					$( this )
						.css( {
							'width': 120 - ( 120 * ( parseFloat( $( this ).text() ) / 5 ) ) + "px"
						} )
				} );
			},
			'submitRating': function() {
				var config = $( '#article-assessment' ).data( 'articleAssessment-context' ).config;
				// clear out the stale message
				var results = {};
				$( '.rating-field input' ).each( function() {
					// expects the hidden inputs to have names like 'rating[field-name]' which we use to
					// be transparent about what values we're sending to the server
					var fieldName = $( this ).attr('name').match(/\[([a-zA-Z0-9\-]*)\]/)[1];
					results[ fieldName ] = $( this ).val();
				} );
				var request = $.ajax( {
					url: wgScriptPath + '/api.php',
					data: {
						'action': 'articleassessment',
						'aarevid': config.revID,
						'aapageid': config.pageID,
						'aar1' : results['wellsourced'],
						'aar2' : results['neutrality'],
						'aar3' : results['completeness'],
						'aar4' : results['readability'],
						'aauserid': config.userID,
						'format': 'json'
					},
					dataType: 'json',
					success: function( data ) {
						console.log(data);
					}
				} );
			},
			'flashNotice': function( text, options ) {
				
			} 
		}
	};
	// FIXME - this should be moved out of here
	$( document ).ready( function () {
		$.ArticleAssessment.fn.init( );
	} ); //document ready
} )( jQuery );