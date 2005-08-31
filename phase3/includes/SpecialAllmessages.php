<?php
/**
 * Provide functions to generate a special page
 * @package MediaWiki
 * @subpackage SpecialPage
 */

/**
 *
 */
function wfSpecialAllmessages() {
	global $wgOut, $wgAllMessagesEn, $wgRequest, $wgMessageCache, $wgTitle;
	global $wgLanguageCode, $wgContLanguageCode, $wgContLang;
	global $wgUseDatabaseMessages;

	if(!$wgUseDatabaseMessages) {
		$wgOut->addHTML(wfMsg('allmessagesnotsupportedDB'));
		return;
	}

	$fname = "wfSpecialAllMessages";
	wfProfileIn( $fname );
	
	wfProfileIn( "$fname-setup");
	$ot = $wgRequest->getText( 'ot' );
	
	$navText = wfMsg( 'allmessagestext' );


	$first = true;
	$sortedArray = array_merge( $wgAllMessagesEn, $wgMessageCache->mExtensionMessages );
	ksort( $sortedArray );
	$messages = array();
	$wgMessageCache->disableTransform();

	foreach ( $sortedArray as $key => $enMsg ) {
		$messages[$key]['enmsg'] = $enMsg;
		$messages[$key]['statmsg'] = wfMsgNoDb( $key );
		$messages[$key]['msg'] = wfMsg ( $key );
	}

	$wgMessageCache->enableTransform();
	wfProfileOut( "$fname-setup" );
	
	wfProfileIn( "$fname-output" );
	if ($ot == 'php') {
		$navText .= makePhp($messages);
		$wgOut->addHTML('PHP | <a href="'.$wgTitle->escapeLocalUrl('ot=html').'">HTML</a><pre>'.htmlspecialchars($navText).'</pre>');
	} else {
		$wgOut->addHTML( '<a href="'.$wgTitle->escapeLocalUrl('ot=php').'">PHP</a> | HTML' );
		$wgOut->addWikiText( $navText );
		$wgOut->addHTML( makeHTMLText( $messages ) );
	}
	wfProfileOut( "$fname-output" );
	
	wfProfileOut( $fname );
}

/**
 *
 */
function makePhp($messages) {
	global $wgLanguageCode;
	$txt = "\n\n".'$wgAllMessages'.ucfirst($wgLanguageCode).' = array('."\n";
	foreach( $messages as $key => $m ) {
		if(strtolower($wgLanguageCode) != 'en' and $m['msg'] == $m['enmsg'] ) {
			if (strstr($m['msg'],"\n")) {
				$txt.='/* ';
				$comment=' */';
			} else {
				$txt .= '#';
				$comment = '';
			}
		} elseif ($m['msg'] == '&lt;'.$key.'&gt;'){
			$m['msg'] = '';
			$comment = ' #empty';
		} else {
			$comment = '';
		}
		$txt .= "'$key' => '" . preg_replace( "/(?<!\\\\)'/", "\'", $m['msg']) . "',$comment\n";
	}
	$txt .= ');';
	return $txt;
}

/**
 *
 */
function makeHTMLText( $messages ) {
	global $wgLang, $wgUser, $wgLanguageCode, $wgContLanguageCode, $wgContLang,
	       $wgNamespaces;
	$fname = "makeHTMLText";
	wfProfileIn( $fname );
	
	$sk =& $wgUser->getSkin();
	$talk = $wgNamespaces[NS_TALK]->getDefaultName();
	$mwnspace = $wgNamespaces[NS_MEDIAWIKI]->getDefaultName();
	$mwtalk = $wgNamespaces[NS_MEDIAWIKI_TALK]->getDefaultName();
	$txt = "
<table border='1' cellspacing='0' width='100%' id='allmessagestable'>
	<tr>
		<th rowspan='2'>" . wfMsgHtml('allmessagesname') . "</th>
		<th>" . wfMsgHtml('allmessagesdefault') . "</th>
	</tr>
	<tr>
		<th>" . wfMsgHtml('allmessagescurrent') . "</th>
	</tr>";
	
	wfProfileIn( "$fname-check" );
	# This is a nasty hack to avoid doing independent existence checks
	# without sending the links and table through the slow wiki parser.
	$pageExists = array(
		NS_MEDIAWIKI => array(),
		NS_MEDIAWIKI_TALK => array()
	);
	$dbr =& wfGetDB( DB_SLAVE );
	$page = $dbr->tableName( 'page' );
	$sql = "SELECT page_namespace,page_title FROM $page WHERE page_namespace IN (" . NS_MEDIAWIKI . ", " . NS_MEDIAWIKI_TALK . ")";
	$res = $dbr->query( $sql );
	while( $s = $dbr->fetchObject( $res ) ) {
		$pageExists[$s->page_namespace][$s->page_title] = true;
	}
	$dbr->freeResult( $res );
	wfProfileOut( "$fname-check" );

	wfProfileIn( "$fname-output" );

	foreach( $messages as $key => $m ) {

		$title = $wgLang->ucfirst( $key );
		if($wgLanguageCode != $wgContLanguageCode)
			$title.="/$wgLanguageCode";

		$titleObj =& Title::makeTitle( NS_MEDIAWIKI, $title );
		$talkPage =& Title::makeTitle( NS_MEDIAWIKI_TALK, $title );

		$changed = ($m['statmsg'] != $m['msg']);
		$message = htmlspecialchars( $m['statmsg'] );
		$mw = htmlspecialchars( $m['msg'] );
		
		#$pageLink = $sk->makeLinkObj( $titleObj, htmlspecialchars( $key ) );
		#$talkLink = $sk->makeLinkObj( $talkPage, htmlspecialchars( $talk ) );
		if( isset( $pageExists[NS_MEDIAWIKI][$title] ) ) {
			$pageLink = $sk->makeKnownLinkObj( $titleObj, htmlspecialchars( $key ) );
		} else {
			$pageLink = $sk->makeBrokenLinkObj( $titleObj, htmlspecialchars( $key ) );
		}
		if( isset( $pageExists[NS_MEDIAWIKI_TALK][$title] ) ) {
			$talkLink = $sk->makeKnownLinkObj( $talkPage, htmlspecialchars( $talk ) );
		} else {
			$talkLink = $sk->makeBrokenLinkObj( $talkPage, htmlspecialchars( $talk ) );
		}

		if($changed) {

			$txt .=
	"<tr class='orig'>
		<td rowspan='2'>
			$pageLink<br />$talkLink
		</td><td>
$message
		</td>
	</tr><tr class='new'>
		<td>
$mw
		</td>
	</tr>";
		} else {

			$txt .=
	"<tr class='def'>
		<td>
			$pageLink<br />$talkLink
		</td><td>
$mw
		</td>
	</tr>";

		}
	}
	$txt .= "</table>";
	wfProfileOut( "$fname-output" );

	wfProfileOut( $fname );
	return $txt;
}

?>
