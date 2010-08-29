<?php
/**
 * Internationalisation file for Reflect extension.
 *
 * @file
 * @ingroup Extensions
 * @author Travis Kriplean <travis@cs.washington.edu>
 * @licence GPL2
 */

$messages = array();

$messages['en'] = array(
	'rf-bulleted' => "Hi $1,
	
$2 has summarized a point that you made in the thread '$3'. 

Their summary: '$5'.

You can verify whether $2 got your point right by visiting <$4>. 

You will be able to clarify your point if there is a misunderstanding.",

	'rf-bulleted-subject' => "[{{SITENAME}}] Your point was summarized by $2",

	'rf-responded' => "Hi $1, 
	
$2 has responded to your summary of a point that they made.

The summary you left: '$6'. 
Their message: '$5'.

If you want to read the response in context, visit <$4>.",
	
	'rf-responded-subject' => "[{{SITENAME}}] $2 has responded to your summary bullet point",
			 
);
