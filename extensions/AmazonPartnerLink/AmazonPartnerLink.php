<?php 

/**
 * DateDiff extension.
 *
 * On MediaWiki.org: 		http://www.mediawiki.org/wiki/Extension:AmazonPartnerLink
 * Inspired by              http://www.mediawiki.org/wiki/Extension:AmazonAssociates
 *
 * @file AmazonPartnerLink.php
 *
 * @author Roman Lehnert
 * @author Bradford Knowlton
 * @author David Raison
 * @author Jeroen De Dauw
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$wgExtensionFunctions[] = "AmazonPartnerLink";
 
// Extension credits that show up on Special:Version
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'AmazonPartnerLink2',
        'author' => '[http://david.raison.lu David Raison], Bradford Knowlton, [http://www.roman-lehnert.de Roman Lehnert]',
        'url' => 'http://www.mediawiki.org/wiki/Extension:AmazonPartnerLink',
        'description' => 'Display Amazon books using a combination of the Amazon web service and the Amazon Associates program.'
);

function AmazonPartnerLink(){
    global $wgParser; 
    $wgParser->setHook('amazon', 'AddAmazonLink');
}

function AddAmazonLink($label,$argv,$parser){
	$asin = $argv['asin'];
	$type = $argv['type'];
	$limit = $argv['limitto'];
	$preview = $argv['preview'];
	$keywords = $argv['keywords'];
    	// strip "-" from the maybe-isbn
	$asin = ereg_replace("-","",$asin);
	if(strlen($asin) == 13)
		$asin = ISBNTransform($asin);
	// in fact, we could already do some switching over here! (look for keywords, etc)
	return getLinkTo($type,$asin,$label,$keywords,$preview,$limit);
}

function getLinkTo($type='context',$asin='',$label='',$keywords='',$preview=false,$limit='blended'){
	global $wgAmazonPartnerID, $wgAmazonLanguage;
	$pid = $wgAmazonPartnerID; $lang = $wgAmazonLanguage;
	if($pid == NULL || $pid == '')	// we cannot continue without partnerID
		return false;

	switch($lang){
		default:
		case 'en':	// en_GB split and use site/lang?
			$tld = 'co.uk';	
		break;
		case 'de':
			$tld = 'de';
		break;
	}

	$asinText = '<a href="http://www.amazon.%4$s/gp/product/'
		.'%1$s?ie=UTF8&tag=%2$s&linkCode=as2'
		.'&camp=1638&creative=6742&creativeASIN='
		.'%1$s">%3$s</a><img src="http://www.assoc-amazon.de/e/ir?'
		.'t=%2$s&l=as2&o=3&a=%1$s" width="1" height="1" border="0"'
		.' alt="" style="border:none !important; margin:0px !important;" />';
	$asinPreview = '<script type="text/javascript" '
		.'src="http://www.assoc-amazon.de/s/link-enhancer'
		.'?tag=%1$s&o=3"></script><noscript>'
		.'<img src="http://www.assoc-amazon.de/s/noscript?tag=%1$s" alt="" />'
		.'</noscript>';
	$searchLink = '<a href="http://www.amazon.%4$s/gp/search?'
		.'ie=UTF8&keywords=%1$s&tag=%3$s&index=%5$s'
		.'&linkCode=ur2&camp=1638&creative=6742">%2$s</a>';
	$contextBox = '<script type="text/javascript">'
		.'<!--'
		.' amzn_cl_tag="%1$s";'
		.' amzn_cl_categories="a,e";'
		.' amzn_cl_max_links=5;'
		.' //--></script>'
		.'<script type="text/javascript" src="http://cls.assoc-amazon.de/de/s/cls.js"></script>';
	$singleBox = '<iframe src="http://rcm-de.amazon.de/e/cm?t=%2$s'
		.'&o=3&p=8&l=as1&asins=%1$s&fc1=000000&IS2=1&lt1=_blank'
		.'&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr"'
		.' style="width:120px;height:240px;" scrolling="no"'
		.' marginwidth="0" marginheight="0" frameborder="0"></iframe>';

	/**
	More formats:
	SingleBox
		Only graphic: (small graphic is SL110)
	<a href="http://www.amazon.de/gp/product/0764588877?ie=UTF8&tag=syn2cathacker-21&linkCode=as2&camp=1638&creative=6742&creativeASIN=0764588877"><img border="0" src="51GPR9KE5JL._SL160_.jpg"></a><img src="http://www.assoc-amazon.de/e/ir?t=syn2cathacker-21&l=as2&o=3&a=0764588877" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

	*/

	// prevent empty boxes
	if($asin == '' && $label == '' && $keywords='') $type = 'context';
	
	switch($type){
		case 'context':
			$output = sprintf($contextBox,$pid);
		break;
		case 'link':
			if(is_numeric(substr($asin,0,7))) {
				$output = ($label != "") 
					? sprintf($asinText,$asin,$pid,$label,$tld) 
					: sprintf($searchLink,$asin,$pid,'ISBN: '.$asin,$tld);
				$output .= ($preview) ? sprintf($asinPreview,$pid) : '';
			} else {	// If no asin has been supplied, we use a Searchlink!
				$output = sprintf($searchLink,$keywords,$label,$pid,$tld,$limit);
			}
		break;
		case 'single':
			$output = sprintf($singleBox,$asin,$pid,$tld);
		break;
	}
    return $output;
}

function ISBNTransform($isbn){
        # Transform ISBN-13 to ISBN-10 by stripping down to 9 digits + chksum
	$chksm = ($tmpisbn[3] * 1
		+ $tmpisbn[4] * 2
		+ $tmpisbn[5] * 3
		+ $tmpisbn[6] * 4
		+ $tmpisbn[7] * 5
		+ $tmpisbn[8] * 6
		+ $tmpisbn[9] * 7
		+ $tmpisbn[10] * 8
		+ $tmpisbn[11] * 9
		)%11;

	if($chksm == 10)
		$chksm = "X";

	return substr($tmpisbn,3,9) . $chksm;
}
