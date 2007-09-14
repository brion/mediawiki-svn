<?php

/**
* @package MediaWiki
* @subpackage LiquidThreads
* @author David McCabe <davemccabe@gmail.com>
* @licence GPL2
*/

if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( -1 );
}

require_once('LqtBaseView.php');
require_once('LqtI18N.php');

$wgExtensionFunctions[] = 'wfLqtSpecialDeleteThread';
$wgExtensionFunctions[] = 'wfLqtSpecialMoveThreadToAnotherPage';
$wgExtensionFunctions[] = 'wfLqtSpecialNewMessages';
$wgHooks['BeforeWatchlist'][] = 'wfLqtBeforeWatchlistHook';

class TalkpageView extends LqtView {
	/* Added to SkinTemplateTabs hook in TalkpageView::show(). */
	function customizeTabs( $skintemplate, $content_actions ) {
		// The arguments are passed in by reference.
		unset($content_actions['edit']);
		unset($content_actions['viewsource']);
		unset($content_actions['addsection']);
		unset($content_actions['history']);
		unset($content_actions['watch']);
		unset($content_actions['move']);
		
		/*
		TODO: 
		We could make these tabs actually follow the tab metaphor if we repointed
		the 'history' and 'edit' tabs to the original subject page. That way 'discussion'
		would just be one of four ways to view the article. But then those other tabs, for
		logged-in users, don't really fit the metaphor. What to do, what to do?
		*/
		return true;
	}

	function permalinksForThreads($ts, $method = null, $operand = null) {
		$ps = array();
		foreach ($ts as $t) {
			$u = $this->permalinkUrl($t, $method, $operand);
			$l = $t->subjectWithoutIncrement();
			$ps[] = "<a href=\"$u\">$l</a>";
		}
		return $ps;
	}
	
	function showArchiveWidget() {
		$threads = $this->queries->query('recently-archived');
		$threadlinks = $this->permalinksForThreads($threads);

		if ( count($threadlinks) > 0 ) {
			$this->openDiv('lqt_archive_teaser');
			$this->output->addHTML(wfMsg('lqt_recently_archived'));
			$this->outputList('ul', '', '', $threadlinks);
		} else {
			$this->openDiv();
		}
		$url = $this->talkpageUrl($this->title, 'talkpage_archive');
		$browse=wfMsg('lqt_browse_archive');
		$this->output->addHTML(<<<HTML
			<p><a href="$url" class="lqt_browse_archive">$browse</a></p>
HTML
		);
		$this->closeDiv();
	}
	
	function addJSandCSS() {
		global $wgJsMimeType, $wgStylePath; // TODO globals.
		$s = "<script type=\"{$wgJsMimeType}\" src=\"{$wgStylePath}/common/lqt.js\"><!-- lqt js --></script>\n";
		$this->output->addScript($s);
	}
	
	function showHeader() {
		/* Show the contents of the actual talkpage article if it exists. */

		$article = new Article( $this->title );
		$oldid = $this->request->getVal('oldid', null);
		$editlink = $this->title->getFullURL( 'action=edit' );

		if ( $article->exists() ) {
			$historylink = $this->title->getFullURL( 'action=history' );
			$this->openDiv('lqt_header_content');
			$this->showPostBody($article, $oldid);
			$this->outputList('ul', 'lqt_header_commands', null, array(
				"[<a href=\"$editlink\">".wfMsg('edit')."</a>]", 
				"[<a href=\"$historylink\">".wfMsg('history_short')."</a>]"
				));
			$this->closeDiv();
		} else {
			$this->output->addHTML("<p class=\"lqt_header_notice\">[<a href=\"$editlink\">".wfMsg('lqt_add_header')."</a>]</p>");
		}
	}
	
	function outputList( $kind, $class, $id, $contents ) {
		$this->output->addHTML(wfOpenElement($kind, array('class'=>$class,'id'=>$id)));
		foreach ($contents as $li) {
			$this->output->addHTML( wfOpenElement('li') );
			$this->output->addHTML( $li );
			$this->output->addHTML( wfCloseElement('li') );
		}
		$this->output->addHTML(wfCloseElement($kind));
	}
	
	function show() {
		global $wgHooks;
		$wgHooks['SkinTemplateTabs'][] = array($this, 'customizeTabs');

		$this->output->setPageTitle( $this->title->getTalkpage()->getPrefixedText() );
		$this->addJSandCSS();

		$this->showHeader();
		
		$this->showArchiveWidget();

//		var_dump(HistoricalThread::withIdAtRevision(3,11));
		
		if( $this->methodApplies('talkpage_new_thread') ) {
			$this->showNewThreadForm();
		} else {
			$url = $this->talkpageUrl( $this->title, 'talkpage_new_thread' );
			$this->output->addHTML("<strong><a class=\"lqt_start_discussion\" href=\"$url\">".wfMsg('lqt_new_thread')."</a></strong>");
		}

		$threads = $this->queries->query('fresh');
		foreach($threads as $t) {
			$this->showThread($t);
		}
		return false;
	}
}

class TalkpageArchiveView extends TalkpageView {
	function __construct(&$output, &$article, &$title, &$user, &$request) {
		parent::__construct($output, $article, $title, $user, $request);
		$this->loadQueryFromRequest();
	}
	
	function showThread($t) {
		$this->output->addHTML(<<<HTML
<tr>
	<td><a href="{$this->permalinkUrl($t)}">{$t->subjectWithoutIncrement()}</a></td>
	<td>
HTML
);		if( $t->hasSummary() ) {
			$this->showPostBody($t->summary());
		} else if ( $t->type() == Threads::TYPE_MOVED ) {
			$this->output->addWikiText(wfMsg('lqt_move_placeholder'));
		}
			$this->output->addHTML(<<<HTML
	</td>
</tr>
HTML
);
	}
	
	function loadQueryFromRequest() {
		// Begin with with the requirements for being *in* the archive.
		$startdate = Date::now()->nDaysAgo($this->archive_start_days)->midnight();
		$where = array('thread.thread_article' => $this->article->getID(),
		                     'instr(thread.thread_path, ".")' => '0',
		                   '(thread.thread_summary_page is not null' .
			                  ' OR thread.thread_type = '.Threads::TYPE_MOVED.')',
		                     'thread.thread_timestamp < ' . $startdate->text());
		$options = array('ORDER BY thread.thread_timestamp DESC');
		
		$annotations = array("Searching for threads");

		$r = $this->request;

		/* START AND END DATES */
		// $this->start and $this->end are clipped into the range of available
		// months, for use in the actual query and the selects. $this->raw* are
		// as actually provided, for use by the 'older' and 'newer' buttons.
		$ignore_dates = ! $r->getVal('lqt_archive_filter_by_date', true);
		if ( !$ignore_dates ) {
			$months = Threads::monthsWhereArticleHasThreads($this->article);
		}
		$s = $r->getVal('lqt_archive_start');
		if ($s && ctype_digit($s) && strlen($s) == 6 && !$ignore_dates) {
			$this->selstart = new Date( "{$s}01000000" );
			$this->starti = array_search($s, $months);
			$where[] = 'thread.thread_timestamp >= ' . $this->selstart->text();
		}
		$e = $r->getVal('lqt_archive_end');
		if ($e && ctype_digit($e) && strlen($e) == 6 && !$ignore_dates) {
			$this->selend = new Date("{$e}01000000");
			$this->endi = array_search($e, $months);
			$where[] = 'thread.thread_timestamp < ' . $this->selend->nextMonth()->text();
		}
		if ( isset($this->selstart) && isset($this->selend) ) {

			$this->datespan = $this->starti - $this->endi;

			$annotations[] = "from {$this->selstart->text()} to {$this->selend->text()}";
		} else if (isset($this->selstart)) {
			$annotations[] = "after {$this->selstart->text()}";
		} else if (isset($this->selend)) {
			$annotations[] = "before {$this->selend->text()}";
		}

		$this->where = $where;
		$this->options = $options;
		$this->annotations = implode("<br>\n", $annotations);
	}

	function threads() {
		return Threads::where($this->where, $this->options);
	}

	function formattedMonth($yyyymm) {
		global $wgLang; // TODO global.
		return $wgLang->getMonthName( substr($yyyymm, 4, 2) ).' '.substr($yyyymm, 0, 4);
	}

	function monthSelect($months, $name) {
		$selection =  $this->request->getVal($name);

		// Silently adjust to stay in range.
		$selection = max( min( $selection, $months[0] ), $months[count($months)-1] );

		$options = array();
		foreach($months as $m) {
			$options[$this->formattedMonth($m)] = $m;
		}
		$result = "<select name=\"$name\" id=\"$name\">";
		foreach( $options as $label => $value ) {
			$selected = $selection == $value ? 'selected="true"' : '';
			$result .= "<option value=\"$value\" $selected>$label";
		}
		$result .= "</select>";
		return $result;
	}
	
	/**
     * Return a URL for the current page, including Title and query vars,
	 * with the given replacements made.
     * @param $repls array( 'name'=>new_value, ... )
	*/
	function queryReplace( $repls ) {
		$vs = $this->request->getValues();
		$rs = array();
		foreach ($vs as $k => $v) {
			if ( array_key_exists( $k, $repls ) ) {
				$rs[$k] = $repls[$k];
			} else {
				$rs[$k] = $vs[$k];
			}
		}
		return $this->title->getFullURL(self::queryStringFromArray($rs));
	}

	function clip( $vals, $min, $max ) {
		$res = array();
		foreach($vals as $val) $res[] =  max( min( $val, $max ), $min );
		return $res;
	}

	/* @return True if there are no threads to show, false otherwise.
	 TODO is is somewhat bizarre. */
	function showSearchForm() {
		$months = Threads::monthsWhereArticleHasThreads($this->article);
		if (count($months) == 0) {
			return true;
		}
		
		$use_dates = $this->request->getVal('lqt_archive_filter_by_date', null);
		if ( $use_dates === null ) {
			$use_dates = $this->request->getBool('lqt_archive_start', false) ||
						 $this->request->getBool('lqt_archive_end', false);
		}
		$any_date_check    = !$use_dates ? 'checked="1"' : '';
		$these_dates_check =  $use_dates ? 'checked="1"' : '';

		if( isset($this->datespan) ) {
			$oatte = $this->starti + 1;
			$oatts = $this->starti + 1 + $this->datespan;

			$natts = $this->endi - 1;
			$natte = $this->endi - 1 - $this->datespan;

			list($oe, $os, $ns, $ne) =
				$this->clip( array($oatte, $oatts, $natts, $natte),
					     0, count($months)-1 );

			$older = '<a href="' . $this->queryReplace(array(
				     'lqt_archive_filter_by_date'=>'1',
				     'lqt_archive_start' => $months[$os],
				     'lqt_archive_end' => $months[$oe]))
				. '">«older</a>';
			$newer = '<a href="' . $this->queryReplace(array(
				     'lqt_archive_filter_by_date'=>'1',
				     'lqt_archive_start' => $months[$ns],
				     'lqt_archive_end' => $months[$ne]))
				. '">newer»</a>';
		}
		else {
			$older = '<span class="lqt_disabled_link" title="This link is disabled because you are viewing threads from all dates.">«older</span>';
			$newer = '<span class="lqt_disabled_link" title="This link is disabled because you are viewing threads from all dates.">newer»</span>';
		}
		
		$this->output->addHTML(<<<HTML
<form id="lqt_archive_search_form" action="{$this->title->getLocalURL()}">
	<input type="hidden" name="lqt_method" value="talkpage_archive">
        <input type="hidden" name="title" value="{$this->title->getPrefixedURL()}"	

	<input type="radio" id="lqt_archive_filter_by_date_no"
               name="lqt_archive_filter_by_date" value="0" {$any_date_check}>
	<label for="lqt_archive_filter_by_date_no">Any date</label>  <br>
	<input type="radio" id="lqt_archive_filter_by_date_yes"
               name="lqt_archive_filter_by_date" value="1" {$these_dates_check}>
	<label for="lqt_archive_filter_by_date_yes">Only these dates:</label> <br>

<table>	
<tr><td><label for="lqt_archive_start">From</label>
    <td>{$this->monthSelect($months, 'lqt_archive_start')} <br>
<tr><td><label for="lqt_archive_end">To</label>
    <td>{$this->monthSelect($months, 'lqt_archive_end')}
</table>
	<input type="submit">
        $older $newer
</form>
HTML
);
		return false;
	}
	
	function show() {
		global $wgHooks;
		$wgHooks['SkinTemplateTabs'][] = array($this, 'customizeTabs');
		
		$this->output->setPageTitle( $this->title->getTalkpage()->getPrefixedText() );
		$this->addJSandCSS();
		
		$empty = $this->showSearchForm();
		if ($empty) {
			$this->output->addHTML('<p>There are no threads in the archive.');
			return false;
		}

		$this->output->addHTML(<<<HTML
<p class="lqt_search_annotations">{$this->annotations}</p>
<table class="lqt_archive_listing">
<col class="lqt_titles" />
<col class="lqt_summaries" />
<tr><th>Title<th>Summary</tr>
HTML
                );
		foreach ($this->threads() as $t) {
			$this->showThread($t);
		}
		$this->output->addHTML('</table>');
		
		return false;
	}
}


class ThreadPermalinkView extends LqtView {
	protected $thread;
	
	function customizeTabs( $skintemplate, $content_actions ) {
		// The arguments are passed in by reference.
		unset($content_actions['edit']);
		unset($content_actions['viewsource']);
		unset($content_actions['talk']);
		if( array_key_exists( 'move', $content_actions ) && $this->thread ) {
			$content_actions['move']['href'] =
				SpecialPage::getPage('Movethread')->getTitle()->getFullURL() . '/' .
				$this->thread->title()->getPrefixedURL();
		}
		if( array_key_exists( 'delete', $content_actions ) && $this->thread ) {
			$content_actions['delete']['href'] =
				SpecialPage::getPage('Deletethread')->getTitle()->getFullURL() . '/' .
				$this->thread->title()->getPrefixedURL();
		}	
		return true;
	}
	
	function showThreadHeading( $thread ) {
		if ( $this->headerLevel == 2 ) {
			$this->output->setPageTitle( $thread->wikilink() );
		} else {
			parent::showThreadHeading($thread);
		}
	}
	
	function noSuchRevision() {
		$this->output->addHTML("There is no such revision of this thread.");
	}
	
	function showMissingThreadPage() {
		$this->output->addHTML("There is no such thread.");	
	}
	
	function __construct(&$output, &$article, &$title, &$user, &$request) {
		
		parent::__construct($output, $article, $title, $user, $request);
		
		$t = Threads::withRoot( $this->article );
		$r = $this->request->getVal('lqt_oldid', null); if( $r ) {
			$t = $t->atRevision($r);
			if( !$t ) { $this->noSuchRevision(); return; }
			
		}
		$this->thread = $t;
		if( ! $t ) {
			return; // error reporting is handled in show(). this kinda sucks.
		}

		// $this->article gets saved to thread_article, so we want it to point to the
		// subject page associated with the talkpage, always, not the permalink url.
		$this->article = $t->article(); # for creating reply threads.
		
	}

	function show() {
		global $wgHooks;
		$wgHooks['SkinTemplateTabs'][] = array($this, 'customizeTabs');
		
		if( ! $this->thread ) {
			$this->showMissingThreadPage();
			return false;
		}

		// Make a link back to the talk page, including the correct archive month.
 		// TODO this is obsolete.
		if (Date::now()->nDaysAgo(30)->midnight()->isBefore( new Date($this->thread->timestamp()) ))
			$query = '';
		else
			$query = 'lqt_archive_month=' . substr($this->thread->timestamp(),0,6);
			
		$talkpage = $this->thread->article()->getTitle()->getTalkpage();
		$talkpage_link = $this->user->getSkin()->makeKnownLinkObj($talkpage, '', $query);
		
		if ( $this->thread->hasSuperthread() ) {
			$subtitle=wfMsg('lqt_fragment',"<a href=\"{$this->permalinkUrl($this->thread->topmostThread())}\">".wfMsg('lqt_discussion_link')."</a>",$talkpage_link);
			$this->output->setSubtitle( $subtitle);
		} else {
			$this->output->setSubtitle( wfMsg('lqt_from_talk', $talkpage_link));
		}
		
		if( $this->methodApplies('summarize') )
			$this->showSummarizeForm($this->thread);

		$this->showThread($this->thread);
		
		return false;
	}
}


/*
 * Cheap views that just pass through to MW functions.
 */

class TalkpageHeaderView {
	function customizeTabs( $skintemplate, $content_actions ) {
		unset($content_actions['edit']);
		unset($content_actions['addsection']);
		unset($content_actions['history']);
		unset($content_actions['watch']);
		unset($content_actions['move']);
		
		$content_actions['talk']['class'] = false;
		$content_actions['header'] = array( 'class'=>'selected',
		                                    'text'=>'header',
		                                    'href'=>'');

		return true;
	}
	
	function show() {
		global $wgHooks;
		$wgHooks['SkinTemplateTabs'][] = array($this, 'customizeTabs');
		return true;
	}
}

class ThreadDiffView {
	function customizeTabs( $skintemplate, $content_actions ) {
		unset($content_actions['edit']);
		unset($content_actions['viewsource']);
		unset($content_actions['talk']);
		
		$content_actions['talk']['class'] = false;
		$content_actions['history']['class'] = 'selected';
		
		return true;
	}
	
	function show() {
		global $wgHooks;
		$wgHooks['SkinTemplateTabs'][] = array($this, 'customizeTabs');
		return true;
	}
}

class ThreadProtectionFormView {
	function customizeTabs( $skintemplate, $content_actions ) {
		unset($content_actions['edit']);
		unset($content_actions['addsection']);
		unset($content_actions['viewsource']);
		unset($content_actions['talk']);
		
		$content_actions['talk']['class'] = false;
		if ( array_key_exists('protect', $content_actions) )
			$content_actions['protect']['class'] = 'selected';
		else if ( array_key_exists('unprotect', $content_actions) )
			$content_actions['unprotect']['class'] = 'selected';
					
		return true;
	}
	
	function show() {
		global $wgHooks;
		$wgHooks['SkinTemplateTabs'][] = array($this, 'customizeTabs');
		return true;
	}
}



class ThreadHistoryListingView extends ThreadPermalinkView {
	
	private function rowForThread($t) {
		global $wgLang, $wgOut; // TODO global.
		
		/* TODO: best not to refer to LqtView class directly. */
		/* We don't use oldid because that has side-effects. */
		$result = array();
		$change_names = array(	Threads::CHANGE_EDITED_ROOT => wfMsg('lqt_comment_edited'),
		                      	Threads::CHANGE_EDITED_SUMMARY => wfMsg('lqt_summary_changed'),
		                      	Threads::CHANGE_REPLY_CREATED => wfMsg('lqt_reply_created'),
		                      	Threads::CHANGE_NEW_THREAD => wfMsg('lqt_thread_created'),
					Threads::CHANGE_DELETED => wfMsg('lqt_deleted'),
					Threads::CHANGE_UNDELETED => wfMsg('lqt_undeleted'));
		$change_label = array_key_exists($t->changeType(), $change_names) ? $change_names[$t->changeType()] : "";

		$url = LqtView::permalinkUrlWithQuery( $this->thread, 'lqt_oldid=' . $t->revisionNumber() );
		
		$user_id = $t->changeUser()->getID(); # ever heard of a User object?
		$user_text = $t->changeUser()->getName();
		$sig = $this->user->getSkin()->userLink( $user_id, $user_text ) .
			   $this->user->getSkin()->userToolLinks( $user_id, $user_text );
		
		$change_comment=$t->changeComment();
		if(!empty($change_comment))
			$change_comment="<em>($change_comment)</em>";

		$result[] = "<tr>";
		$result[] = "<td><a href=\"$url\">" . $wgLang->timeanddate($t->timestamp()) . "</a></td>";
		$result[] = "<td>" . $sig . "</td>";
		$result[] = "<td>$change_label</td>";
		$result[] = "<td>$change_comment</td>";
		$result[] = "</tr>";
		return implode('', $result);
	}
	
	function showHistoryListing($t) {
		$revisions = new ThreadHistoryIterator($t, 10, 0);
		$this->output->addHTML('<table>');
		foreach($revisions as $ht) {
			$this->output->addHTML($this->rowForThread($ht));
		}
		$this->output->addHTML('</table>');
	}
	
	function show() {
		global $wgHooks;
		$wgHooks['SkinTemplateTabs'][] = array($this, 'customizeTabs');
		
		if( ! $this->thread ) {
			$this->showMissingThreadPage();
			return false;
		}
		
		$this->output->setSubtitle(wfMsg('lqt_history_subtitle'));
				
		$this->showThreadHeading($this->thread);
		$this->showHistoryListing($this->thread);

		$this->showThread($this->thread);
		
		return false;
	}
}

class ThreadHistoricalRevisionView extends ThreadPermalinkView {
	
	/* TOOD: customize tabs so that History is highlighted. */

	function postDivClass($thread) {
		$is_changed_thread = $thread->changeObject() &&
			$thread->changeObject()->id() == $thread->id();
		if ( $is_changed_thread )
			return 'lqt_post_changed_by_history';
		else
			return 'lqt_post';
	}
	
	
	function showHistoryInfo() {
		global $wgLang; // TODO global.
		$this->openDiv('lqt_history_info');
		$this->output->addHTML('Revision as of ' . $wgLang->timeanddate($this->thread->timestamp()) . '.<br>' );
		if( $this->thread->changeType() == Threads::CHANGE_NEW_THREAD ) {
			$this->output->addHTML('This is the thread\'s initial revision.');
		}
		else if( $this->thread->changeType() == Threads::CHANGE_REPLY_CREATED ) {
			$this->output->addHTML('The highlighted comment was created in this revision.');
		} else if( $this->thread->changeType() == Threads::CHANGE_EDITED_ROOT ) {
			$diff_url = $this->permalinkUrlWithDiff($this->thread);
			$this->output->addHTML('The highlighted comment was edited in this revision. ');
			$this->output->addHTML( "[<a href=\"$diff_url\">show diffs</a>]" );
		}
		$this->closeDiv();
	}
	
	function show() {
		if( ! $this->thread ) {
			$this->showMissingThreadPage();
			return false;
		}			
		$this->showHistoryInfo();
		parent::show();
		return false;
	}
}


function wfLqtSpecialMoveThreadToAnotherPage() {
    global $wgMessageCache;

    require_once('SpecialPage.php');
    
    $wgMessageCache->addMessage( 'movethread', 'Move Thread to Another Page' );
    
    class SpecialMoveThreadToAnotherPage extends SpecialPage {
		private $user, $output, $request, $title, $thread;


        function __construct() {
            SpecialPage::SpecialPage( 'Movethread' );
            SpecialPage::$mStripSubpages = false;
            $this->includable( false );
        }

		function handleGet() {
			$thread_name = $this->thread->title()->getPrefixedText();
			$article_name = $this->thread->article()->getTitle()->getTalkPage()->getPrefixedText();
			$edit_url = LqtView::permalinkUrl($this->thread, 'edit', $this->thread);
			$this->output->addHTML(<<<HTML
			<p>Moving <b>$thread_name</b>.
			This thread is part of <b>$article_name</b>.</p>
			<p>To rename this thread, <a href="$edit_url">edit it</a> and change the 'Subject' field.</p>
			<form id="lqt_move_thread_form" action="{$this->title->getLocalURL()}" method="POST">
			<table>
			<tr>
			<td><label for="lqt_move_thread_target_title">Title of destination talkpage:</label></td>
			<td><input id="lqt_move_thread_target_title" name="lqt_move_thread_target_title" tabindex="100" size="40" /></td>
			</tr><tr>
			<td><label for="lqt_move_thread_reason">Reason:</label></td>
			<td><input id="lqt_move_thread_reason" name="lqt_move_thread_reason" tabindex="200" size="40" /></td>
			</tr><tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Move" style="float:right;" tabindex="300" /></td>
			</tr>
			</table>
			</form>
HTML
			);
			
		}

		function checkUserRights() {
			if ( !$this->user->isAllowed( 'move' ) ) {
				$this->output->showErrorPage( 'movenologin', 'movenologintext' );
				return false;
			}
			if ( $this->user->isBlocked() ) {
				$this->output->blockedPage();
				return false;
			}
			if ( wfReadOnly() ) {
				$this->output->readOnlyPage();
				return false;
			}
			if ( $this->user->pingLimiter( 'move' ) ) {
				$this->output->rateLimited();
				return false;
			}
			/* Am I forgetting anything? */
			return true;
		}

		function redisplayForm($problem_fields, $message) {
			$this->output->addHTML($message);
			$this->handleGet();
		}

		function handlePost() {
			if( !$this->checkUserRights() )
				return;
			
			$tmp = $this->request->getVal('lqt_move_thread_target_title');
			if( $tmp === "" ) {
				$this->redisplayForm(array('lqt_move_thread_target_title'), "You must specify a destination.");
				return;
			}
			$newtitle = Title::newFromText( $tmp )->getSubjectPage();
			
			$reason = $this->request->getVal('lqt_move_thread_reason', "No reason given.");
			
			// TODO no status code from this method.
			$this->thread->moveToSubjectPage( $newtitle, $reason, true );
			
			$this->showSuccessMessage( $newtitle->getTalkPage() );
		}
		
		function showSuccessMessage( $target_title ) {
			$this->output->addHTML(<<<HTML
		The thread was moved to <a href="{$target_title->getFullURL()}">{$target_title->getPrefixedText()}</a>.
HTML
			);
		}

        function execute( $par = null ) {
            global $wgOut, $wgRequest, $wgTitle, $wgUser;
			$this->user = $wgUser;
			$this->output = $wgOut;
			$this->request = $wgRequest;
			$this->title = $wgTitle;
	
            $this->setHeaders();
            
			if( $par === null || $par === "") {
				$this->output->addHTML("You must specify a thread in the URL.");
				return;
			}
			// TODO should implement Threads::withTitle(...).
			$thread = Threads::withRoot( new Article(Title::newFromURL($par)) );
			if (!$thread) {
				$this->output->addHTML("No such thread exists.");
				return;
			}
			
			$this->thread = $thread;

			if ( $this->request->wasPosted() ) {
				$this->handlePost();
			} else {
				$this->handleGet();
			}

        }
    }
    
     SpecialPage::addPage( new SpecialMoveThreadToAnotherPage() );
}


function wfLqtSpecialDeleteThread() {
    global $wgMessageCache;

    require_once('SpecialPage.php');
    
    $wgMessageCache->addMessage( 'deletethread', 'Delete or Undelete Thread' );
    
    class SpecialDeleteThread extends SpecialPage {
		private $user, $output, $request, $title, $thread;


        function __construct() {
            SpecialPage::SpecialPage( 'Deletethread' );
            SpecialPage::$mStripSubpages = false;
            $this->includable( false );
        }

		function handleGet() {
			if( !$this->checkUserRights() )
				return;
			
			$thread_name = $this->thread->title()->getPrefixedText();
			$article_name = $this->thread->article()->getTitle()->getTalkPage()->getPrefixedText();
			$edit_url = LqtView::permalinkUrl($this->thread, 'edit', $this->thread);
			
			$deleting = $this->thread->type() != Threads::TYPE_DELETED;
			
			$operation_message = $deleting ?
				"Deleting <b>$thread_name</b> and <b>all replies</b> to it."
				: "Undeleting <b>$thread_name</b>.";
			$button_label = $deleting ?
				"Delete Thread and Replies"
				: "Undelete Thread";
			
			$this->output->addHTML(<<<HTML
			<p>$operation_message
			This thread is part of <b>$article_name</b>.</p>
			<form id="lqt_delete_thread_form" action="{$this->title->getLocalURL()}" method="POST">
			<table>
			<tr>
			<td><label for="lqt_delete_thread_reason">Reason:</label></td>
			<td><input id="lqt_delete_thread_reason" name="lqt_delete_thread_reason" tabindex="200" size="40" /></td>
			</tr><tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="$button_label" style="float:right;" tabindex="300" /></td>
			</tr>
			</table>
			</form>
HTML
			);
			
		}

		function checkUserRights() {
			if( in_array('delete', $this->user->getRights()) ) {
				return true;
			} else {
				$this->output->addHTML("You are not allowed to delete threads.");
				return false;
			}
		}

		function redisplayForm($problem_fields, $message) {
			$this->output->addHTML($message);
			$this->handleGet();
		}

		function handlePost() {
			// in theory the model should check rights...
			if( !$this->checkUserRights() )
				return;

			$reason = $this->request->getVal('lqt_delete_thread_reason', "No reason given.");
			
			// TODO: in theory, two fast-acting sysops could undo each others' work.
			$is_deleted_already = $this->thread->type() == Threads::TYPE_DELETED;
			if ( $is_deleted_already ) {
				$this->thread->undelete($reason);
			} else {
				$this->thread->delete($reason);
			}
			$this->showSuccessMessage( $is_deleted_already );
		}
		
		function showSuccessMessage( $is_deleted_already ) {
			$message = $is_deleted_already ? "The thread was undeleted." : "The thread was deleted.";
			
			// TODO talkpageUrl should accept threads, and look up their talk pages.
			$talkpage_url = LqtView::talkpageUrl($this->thread->article()->getTitle()->getTalkpage());
			$this->output->addHTML(<<<HTML
		$message Return to <a href="$talkpage_url">the talkpage</a>.
HTML
			);
		}

        function execute( $par = null ) {
            global $wgOut, $wgRequest, $wgTitle, $wgUser;
			$this->user = $wgUser;
			$this->output = $wgOut;
			$this->request = $wgRequest;
			$this->title = $wgTitle;
	
            $this->setHeaders();
            
			if( $par === null || $par === "") {
				$this->output->addHTML("You must specify a thread in the URL.");
				return;
			}
			// TODO should implement Threads::withTitle(...).
			$thread = Threads::withRoot( new Article(Title::newFromURL($par)) );
			if (!$thread) {
				$this->output->addHTML("No such thread exists.");
				return;
			}
			
			$this->thread = $thread;

			if ( $this->request->wasPosted() ) {
				$this->handlePost();
			} else {
				$this->handleGet();
			}

        }
    }
    
     SpecialPage::addPage( new SpecialDeleteThread() );
}



class NewUserMessagesView extends LqtView {
	
	function addJSandCSS() {
		global $wgJsMimeType, $wgStylePath; // TODO globals.
		$s = "<script type=\"{$wgJsMimeType}\" src=\"{$wgStylePath}/common/lqt.js\"><!-- lqt js --></script>\n";
		$this->output->addScript($s);
	}
	
	function preShowThread($t) {
		$this->output->addHTML(<<<HTML
		<table ><tr>
		<td style="padding-right: 1em; vertical-align: top; padding-top: 1em;" >
		<form method="POST">
			<input type="hidden" name="lqt_method" value="mark_as_read" />
			<input type="hidden" name="lqt_operand" value="{$t->id()}" />
			<input type="submit" value="Read" name="lqt_read_button" title="Remove this thread from New Messages." />
		</form>
		</td>
		<td>
HTML
		);
	}
	
	function postShowThread($t) {
		$this->output->addHTML(<<<HTML
		</td>
		</tr></table>
HTML
		);
	}
	
	function postDivClass($thread) {
		
	}
	
	function show() {
		$this->addJSandCSS();
		
		$threads = NewMessages::newUserMessages($this->user);
		foreach($threads as $t) {
			
			if( $this->request->wasPosted() && $this->methodAppliesToThread('mark_as_read', $t) ) {
				NewMessages::markThreadAsReadByUser($t, $this->user);
				continue;
			}
			
			// Call for POST as well as GET so that edit, reply, etc. will work.
			$this->preShowThread($t);
			$this->showThread($t);
			$this->postShowThread($t);
		}
		return false;
	}
}

function wfLqtSpecialNewMessages() {
    global $wgMessageCache;

    require_once('SpecialPage.php');
    
    $wgMessageCache->addMessage( 'newmessages', 'New Messages' );
    
    class SpecialNewMessages extends SpecialPage {
		private $user, $output, $request, $title;

        function __construct() {
            SpecialPage::SpecialPage( 'Newmessages' );
            SpecialPage::$mStripSubpages = false;
            $this->includable( true );
        }

        function execute( $par = null ) {
		    global $wgOut, $wgRequest, $wgTitle, $wgUser;
			$this->user = $wgUser;
			$this->output = $wgOut;
			$this->request = $wgRequest;
			$this->title = $wgTitle;
	
            $this->setHeaders();

			$this->output->addHTML('<h2 class="lqt_newmessages_section">Messages sent to you:</h2>');
			
			$view = new NewUserMessagesView( $this->output, new Article($this->title),
							$this->title, $this->user, $this->request );
			$view->setHeaderLevel(3);
			$view->show();
			
			// and then the same for the other talkpage messagess.
			$this->output->addHTML('<h2 class="lqt_newmessages_section">Messages on other talkpages:</h2>');
        }
    }
    
     SpecialPage::addPage( new SpecialNewMessages() );
}


function wfLqtBeforeWatchlistHook( $options, $user ) {
	global $wgOut;
	
	$user_messages = NewMessages::newUserMessages($user);
	$n = count($user_messages);
	
	$wgOut->addHTML(<<< HTML
		<div class="lqt_watchlist_messages_notice">
			There are $n messages for you.
		</div>
HTML
	);
	
	return true;
}


?>
