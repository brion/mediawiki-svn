/**
 * JavaScript for the Storyboard extension.
 * 
  * @file storyboard.js
  * @ingroup Storyboard
  *
  * @author Jeroen De Dauw
 */


/**
 * Story submission/editting functions
 */

/**
 * Validates a story, and will update the provided UI elements depending on the result.
 * 
 * @param textarea Textarea object in which the story resides.
 * @param lowerLimit Min numbers of chars a story can be.
 * @param upperLimit Max numbers of chars a story can be.
 * @param infodiv Id of a div to put info about the characters amount in.
 * @param submissionButton Id of the button that will submit the story.
 */
function stbValidateStory( textarea, lowerLimit, upperLimit, infodiv, submissionButton ) {
	var button = document.getElementById( submissionButton );
	button.disabled = !stbLimitChars( textarea, lowerLimit, upperLimit, infodiv );
}

/**
 * Validates the amount of characters of a story and outputs the result in an infodiv.
 * 
 * @param textarea Textarea object in which the story resides.
 * @param lowerLimit Min numbers of chars a story can be.
 * @param upperLimit Max numbers of chars a story can be.
 * @param infodiv Id of a div to put info about the characters amount in.
 * 
 * @return Boolean indicating whether the story is valid.
 */
function stbLimitChars( textarea, lowerLimit, upperLimit, infodiv ) {
	var text = textarea.value; 
	var textlength = text.length;
	var info = document.getElementById( infodiv );
	
	if(textlength > upperLimit) {
		info.innerHTML = -( upperLimit - textlength ) + ' characters to many!'; // TODO: i18n
		return false;
	} else if (textlength < lowerLimit) {
		info.innerHTML = '('+ ( lowerLimit - textlength ) + ' more characters needed)'; // TODO: i18n
		return false;
	} else {
		info.innerHTML = '(' + ( upperLimit - textlength ) + ' characters left)'; // TODO: i18n
		return true;
	}
}

/**
 * Checks if the story can actually be submitted, and shows and error when this is not the case.
 * 
 * @param termsCheckbox Id of a terms of service checkbox that needs to be checked.
 * 
 * @return Boolean indicating whether the submission is valid.
 */
function stbValidateSubmission( termsCheckbox ) {
	var agreementValid = document.getElementById( termsCheckbox ).checked;
	if (!agreementValid) {
		alert( 'You need to agree to the publication of your story to submit it.' ); // TODO: i18n
	}
	return agreementValid;
}



/**
 * Story review functions
 */

/**
 * Calls the StoryReview API module to do actions on a story and handles updating of the page in the callback.
 * 
 * @param sender The UI element invocing the action, typically a button.
 * @param storyid Id identifying the story.
 * @param action The action that needs to be performed on the story.
 * 
 * TODO: support multiple actions at once
 */
function stbDoStoryAction( sender, storyid, action ) {
	sender.innerHTML = 'Working...'; // TODO: i18n
	sender.disabled = true;
	
	jQuery.getJSON( wgScriptPath + '/api.php',
		{
			'action': 'storyreview',
			'format': 'json',
			'storyid': storyid,
			'storyaction': action
		},	
		function( data ) {
			if ( data.storyreview ) {
				switch( data.storyreview.action ) {
					case 'publish' : case 'unpublish' : case 'hide' :
						sender.innerHTML = 'Done'; // TODO: i18n
						jQuery( '#story_' + data.storyreview.id ).slideUp( 'slow', function () {
							jQuery( this ).remove();
						} );
						// TODO: would be neat to update the other list when doing an (un)publish here
						break;
					case 'hideimage' : case 'unhideimage' :
						stbToggeShowImage( sender, data.storyreview.id, data.storyreview.action );
						break;
					case 'deleteimage' :
						sender.innerHTML = 'Image deleted'; // TODO: i18n
						jQuery( '#story_image_' + data.storyreview.id ).slideUp( 'slow', function () {
							jQuery( this ).remove();
						} );
						document.getElementById( 'image_button_' + data.storyreview.id  ).disabled = true;				
						break;
				}
			} else {
				alert( 'An error occured:\n' + data.error.info ); // TODO: i18n
			}
		}
	);
}

/**
 * Updates the show/hide image button after a hideimage/unhideimage
 * action has completed sucesfully. Also updates the image on the 
 * page itself accordingly, and hooks up the correct event to the button. 
 * 
 * @param sender The button that invoked the completed action.
 * @param storyId The id of the story that has been affected.
 * @param completedAction The name ofthe action that has been performed.
 */
function stbToggeShowImage( sender, storyId, completedAction ) {
	if ( completedAction == 'hideimage' ) {
		jQuery( '#story_image_' + storyId ).slideUp( 'slow', function () {
			sender.innerHTML = 'Show image'; // TODO: i18n
			sender.onclick = function() {
				stbDoStoryAction( sender, storyId, 'unhideimage' );
			};
			sender.disabled = false;
		} );
	} else {
		jQuery( '#story_image_' + storyId ).slideDown( 'slow', function () {
			sender.innerHTML = 'Hide image'; // TODO: i18n
			sender.onclick = function() {
				stbDoStoryAction( sender, storyId, 'hideimage' );
			};
			sender.disabled = false;
		} );
	}
}

/**
 * Asks the user to confirm the deletion of an image, and if confirmed, calls stbDoStoryAction with action=delete.
 * 
 * @param sender The UI element invocing the action, typically a button.
 * @param storyid Id identifying the story.
 * 
 * @return Boolean indicating whether the deletion was confirmed.
 */
function stbDeleteStoryImage( sender, storyid ) {
	var confirmed = confirm( 'Are you sure you want to permanently delete this stories image?' ); // TODO: i18n
	if ( confirmed ) { 
		stbDoStoryAction( sender, storyid, 'deleteimage' );
	}
	return confirmed;
}


/*
$(function(){
	$("#storyform").validate({
		rules: {
			storytitle: {
				required: true,
				// TODO: min lenght
				remote: wgScriptPath + '/api.php?action=storyexists&storyname=' + '' // TODO
			}
		},
		messages: {
			storytitle: "" // TODO	
		},
		success: function(label) {
			label.addClass("valid").text("Valid story title!")
		},
		onkeyup: false
	});
	
});
*/