<?php
/* Shamelessly copied and modified from /includes/specials/SpecialPreferences.php */
class EditUser extends SpecialPage {
	var $mQuickbar, $mOldpass, $mNewpass, $mRetypePass, $mStubs;
	var $mRows, $mCols, $mSkin, $mMath, $mDate, $mUserEmail, $mEmailFlag, $mNick;
	var $mUserLanguage, $mUserVariant;
	var $mSearch, $mRecent, $mRecentDays, $mHourDiff, $mSearchLines, $mSearchChars, $mAction;
	var $mReset, $mPosted, $mToggles, $mSearchNs, $mRealName, $mImageSize;
	var $mUnderline, $mWatchlistEdits;
	var $user, $target, $mLogout;

	function __construct() {
		SpecialPage::SpecialPage('EditUser', 'edituser');
	}
	/**
	 * Constructor
	 * Load some values
	 */
	function loadGlobals( $par ) {
		global $wgContLang, $wgAllowRealName, $wgRequest;
		$request = $wgRequest;
		$this->user = User::newFromName($par);
		$this->user->load();
		$this->mQuickbar = $request->getVal( 'wpQuickbar' );
		$this->mNewpass = $request->getVal( 'wpNewpass' );
		$this->mRetypePass =$request->getVal( 'wpRetypePass' );
		$this->mStubs = $request->getVal( 'wpStubs' );
		$this->mRows = $request->getVal( 'wpRows' );
		$this->mCols = $request->getVal( 'wpCols' );
		$this->mSkin = $request->getVal( 'wpSkin' );
		$this->mMath = $request->getVal( 'wpMath' );
		$this->mDate = $request->getVal( 'wpDate' );
		$this->mUserEmail = $request->getVal( 'wpUserEmail' );
		$this->mRealName = $wgAllowRealName ? $request->getVal( 'wpRealName' ) : '';
		$this->mEmailFlag = $request->getCheck( 'wpEmailFlag' ) ? 0 : 1;
		$this->mNick = $request->getVal( 'wpNick' );
		$this->mUserLanguage = $request->getVal( 'wpUserLanguage' );
		$this->mUserVariant = $request->getVal( 'wpUserVariant' );
		$this->mSearch = $request->getVal( 'wpSearch' );
		$this->mRecent = $request->getVal( 'wpRecent' );
		$this->mRecentDays = $request->getVal( 'wpRecentDays' );
		$this->mHourDiff = $request->getVal( 'wpHourDiff' );
		$this->mSearchLines = $request->getVal( 'wpSearchLines' );
		$this->mSearchChars = $request->getVal( 'wpSearchChars' );
		$this->mImageSize = $request->getVal( 'wpImageSize' );
		$this->mThumbSize = $request->getInt( 'wpThumbSize' );
		$this->mUnderline = $request->getInt( 'wpOpunderline' );
		$this->mAction = $request->getVal( 'action' );
		$this->mReset = $request->getCheck( 'wpReset' );
		$this->mPosted = $request->wasPosted();
		$this->mSuccess = $request->getCheck( 'success' );
		$this->mWatchlistDays = $request->getVal( 'wpWatchlistDays' );
		$this->mWatchlistEdits = $request->getVal( 'wpWatchlistEdits' );
		$this->mDisableMWSuggest = $request->getCheck( 'wpDisableMWSuggest' );
		$this->mLogout = $request->getCheck( 'wpLogout' ) && $this->mPosted;
		$this->mSaveprefs = $request->getCheck( 'wpSaveprefs' ) &&
			$this->mPosted &&
			$this->user->matchEditToken( $request->getVal( 'wpEditToken' ) );

		# User toggles  (the big ugly unsorted list of checkboxes)
		$this->mToggles = array();
		if ( $this->mPosted ) {
			$togs = User::getToggles();
			foreach ( $togs as $tname ) {
				$this->mToggles[$tname] = $request->getCheck( "wpOp$tname" ) ? 1 : 0;
			}
		}

		$this->mUsedToggles = array();

		# Search namespace options
		# Note: namespaces don't necessarily have consecutive keys
		$this->mSearchNs = array();
		if ( $this->mPosted ) {
			$namespaces = $wgContLang->getNamespaces();
			foreach ( $namespaces as $i => $namespace ) {
				if ( $i >= 0 ) {
					$this->mSearchNs[$i] = $request->getCheck( "wpNs$i" ) ? 1 : 0;
				}
			}
		}

		# Validate language
		if ( !preg_match( '/^[a-z\-]*$/', $this->mUserLanguage ) ) {
			$this->mUserLanguage = 'nolanguage';
		}

		wfRunHooks( 'InitPreferencesForm', array( $this, $request ) );
	}

	public function execute( $par ) {
		global $wgOut, $wgUser, $wgRequest;
		if( !$wgUser->isAllowed( 'edituser' ) ) {
			$wgOut->permissionRequired( 'edituser' );
			return false;
		}

		wfLoadExtensionMessages( 'EditUser' );

		$this->setHeaders();
		$this->target = (isset($par)) ? $par : $wgRequest->getText('username', '');
		if($this->target === '') {
			$wgOut->addHTML($this->makeSearchForm());
			return;
		}
		$targetuser = User::NewFromName( $this->target );
		if( $targetuser->getID() == 0 ) {
			$wgOut->addWikiText( wfMsg( 'edituser-nouser' ) );
			return;
		}
		if( $targetuser->isAllowed('edituser-exempt') ) {
			$wgOut->addWikiText( wfMsg( 'edituser-exempt' ) );
			return;
		}
		$this->loadGlobals($this->target);
		$wgOut->addHTML($this->makeSearchForm());
		$wgOut->addHTML('<br />');
		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}
		if ( $this->mReset ) {
			$this->resetPrefs();
			$this->mainPrefsForm( 'reset', wfMsg( 'prefsreset' ) );
		} else if ($this->mLogout) {
			$this->user->doLogout();
		} else if ( $this->mSaveprefs ) {
			$this->savePreferences();
		} else {
			$this->resetPrefs();
			$this->mainPrefsForm( '' );
		}
	}
	/**
	 * @access private
	 */
	function validateInt( &$val, $min=0, $max=0x7fffffff ) {
		$val = intval($val);
		$val = min($val, $max);
		$val = max($val, $min);
		return $val;
	}

	/**
	 * @access private
	 */
	function validateFloat( &$val, $min, $max=0x7fffffff ) {
		$val = floatval( $val );
		$val = min( $val, $max );
		$val = max( $val, $min );
		return( $val );
	}

	/**
	 * @access private
	 */
	function validateIntOrNull( &$val, $min=0, $max=0x7fffffff ) {
		$val = trim($val);
		if($val === '') {
			return null;
		} else {
			return $this->validateInt( $val, $min, $max );
		}
	}

	/**
	 * @access private
	 */
	function validateDate( $val ) {
		global $wgLang, $wgContLang;
		if ( $val !== false && (
			in_array( $val, (array)$wgLang->getDatePreferences() ) ||
			in_array( $val, (array)$wgContLang->getDatePreferences() ) ) )
		{
			return $val;
		} else {
			return $wgLang->getDefaultDateFormat();
		}
	}

	/**
	 * Used to validate the user inputed timezone before saving it as
	 * 'timecorrection', will return '00:00' if fed bogus data.
	 * Note: It's not a 100% correct implementation timezone-wise, it will
	 * accept stuff like '14:30',
	 * @access private
	 * @param string $s the user input
	 * @return string
	 */
	function validateTimeZone( $s ) {
		if ( $s !== '' ) {
			if ( strpos( $s, ':' ) ) {
				# HH:MM
				$array = explode( ':' , $s );
				$hour = intval( $array[0] );
				$minute = intval( $array[1] );
			} else {
				$minute = intval( $s * 60 );
				$hour = intval( $minute / 60 );
				$minute = abs( $minute ) % 60;
			}
			# Max is +14:00 and min is -12:00, see:
			# http://en.wikipedia.org/wiki/Timezone
			$hour = min( $hour, 14 );
			$hour = max( $hour, -12 );
			$minute = min( $minute, 59 );
			$minute = max( $minute, 0 );
			$s = sprintf( "%02d:%02d", $hour, $minute );
		}
		return $s;
	}

	/**
	 * @access private
	 */
	function savePreferences() {
		global $wgUser, $wgOut, $wgParser;
		global $wgEnableUserEmail, $wgEnableEmail;
		global $wgEmailAuthentication, $wgRCMaxAge;
		global $wgAuth, $wgEmailConfirmToEdit;


		if ( $this->mNewpass !== '' && $wgAuth->allowPasswordChange() ) {
			if ( $this->mNewpass != $this->mRetypePass ) {
				wfRunHooks( 'PrefsPasswordAudit', array( $this->user, $this->mNewpass, 'badretype' ) );
				$this->mainPrefsForm( 'error', wfMsg( 'badretype' ) );
				return;
			}

			try {
				$this->user->setPassword( $this->mNewpass );
				wfRunHooks( 'PrefsPasswordAudit', array( $this->user, $this->mNewpass, 'success' ) );
				$this->mNewpass = $this->mOldpass = $this->mRetypePass = '';
			} catch( PasswordError $e ) {
				wfRunHooks( 'PrefsPasswordAudit', array( $this->user, $this->mNewpass, 'error' ) );
				$this->mainPrefsForm( 'error', $e->getMessage() );
				return;
			}
		}
		$this->user->setRealName( $this->mRealName );
		$oldOptions = $this->user->mOptions;

		if( $this->user->getOption( 'language' ) !== $this->mUserLanguage ) {
			$needRedirect = true;
		} else {
			$needRedirect = false;
		}

		# Validate the signature and clean it up as needed
		global $wgMaxSigChars;
		if( mb_strlen( $this->mNick ) > $wgMaxSigChars ) {
			global $wgLang;
			$this->mainPrefsForm( 'error',
				wfMsgExt( 'badsiglength', 'parsemag', $wgLang->formatNum( $wgMaxSigChars ) ) );
			return;
		} elseif( $this->mToggles['fancysig'] ) {
			if( $wgParser->validateSig( $this->mNick ) !== false ) {
				$this->mNick = $wgParser->cleanSig( $this->mNick );
			} else {
				$this->mainPrefsForm( 'error', wfMsg( 'badsig' ) );
				return;
			}
		} else {
			// When no fancy sig used, make sure ~{3,5} get removed.
			$this->mNick = $wgParser->cleanSigInSig( $this->mNick );
		}

		$this->user->setOption( 'language', $this->mUserLanguage );
		$this->user->setOption( 'variant', $this->mUserVariant );
		$this->user->setOption( 'nickname', $this->mNick );
		$this->user->setOption( 'quickbar', $this->mQuickbar );
		$this->user->setOption( 'skin', $this->mSkin );
		global $wgUseTeX;
		if( $wgUseTeX ) {
			$this->user->setOption( 'math', $this->mMath );
		}
		$this->user->setOption( 'date', $this->validateDate( $this->mDate ) );
		$this->user->setOption( 'searchlimit', $this->validateIntOrNull( $this->mSearch ) );
		$this->user->setOption( 'contextlines', $this->validateIntOrNull( $this->mSearchLines ) );
		$this->user->setOption( 'contextchars', $this->validateIntOrNull( $this->mSearchChars ) );
		$this->user->setOption( 'rclimit', $this->validateIntOrNull( $this->mRecent ) );
		$this->user->setOption( 'rcdays', $this->validateInt($this->mRecentDays, 1, ceil($wgRCMaxAge / (3600*24))));
		$this->user->setOption( 'wllimit', $this->validateIntOrNull( $this->mWatchlistEdits, 0, 1000 ) );
		$this->user->setOption( 'rows', $this->validateInt( $this->mRows, 4, 1000 ) );
		$this->user->setOption( 'cols', $this->validateInt( $this->mCols, 4, 1000 ) );
		$this->user->setOption( 'stubthreshold', $this->validateIntOrNull( $this->mStubs ) );
		$this->user->setOption( 'timecorrection', $this->validateTimeZone( $this->mHourDiff, -12, 14 ) );
		$this->user->setOption( 'imagesize', $this->mImageSize );
		$this->user->setOption( 'thumbsize', $this->mThumbSize );
		$this->user->setOption( 'underline', $this->validateInt($this->mUnderline, 0, 2) );
		$this->user->setOption( 'watchlistdays', $this->validateFloat( $this->mWatchlistDays, 0, 7 ) );
		$this->user->setOption( 'disablesuggest', $this->mDisableMWSuggest );

		# Set search namespace options
		foreach( $this->mSearchNs as $i => $value ) {
			$this->user->setOption( "searchNs{$i}", $value );
		}

		if( $wgEnableEmail && $wgEnableUserEmail ) {
			$this->user->setOption( 'disablemail', $this->mEmailFlag );
		}

		# Set user toggles
		foreach ( $this->mToggles as $tname => $tvalue ) {
			$this->user->setOption( $tname, $tvalue );
		}

		$error = false;
		if( $wgEnableEmail ) {
			$newadr = $this->mUserEmail;
			$oldadr = $this->user->getEmail();
			if( ($newadr != '') && ($newadr != $oldadr) ) {
				# the user has supplied a new email address on the login page
				if( $this->user->isValidEmailAddr( $newadr ) ) {
					# new behaviour: set this new emailaddr from login-page into user database record
					$this->user->setEmail( $newadr );
					# auto-authenticate it
					$this->user->confirmEmail();
				} else {
					$error = wfMsg( 'invalidemailaddress' );
				}
			} else {
				if( $wgEmailConfirmToEdit && empty( $newadr ) ) {
					$this->mainPrefsForm( 'error', wfMsg( 'noemailtitle' ) );
					return;
				}
				$this->user->setEmail( $this->mUserEmail );
			}
			if( $oldadr != $newadr ) {
				wfRunHooks( 'PrefsEmailAudit', array( $this->user, $oldadr, $newadr ) );
			}
		}

		if( !$wgAuth->updateExternalDB( $this->user ) ){
			$this->mainPrefsForm( 'error', wfMsg( 'externaldberror' ) );
			return;
		}

		$msg = '';
		if ( !wfRunHooks( 'SavePreferences', array( $this, $this->user, &$msg, $oldOptions ) ) ) {
			$this->mainPrefsForm( 'error', $msg );
			return;
		}

		$this->user->saveSettings();

		if( $needRedirect && $error === false ) {
			$title = SpecialPage::getTitleFor( 'Preferences' );
			$wgOut->redirect( $title->getFullURL( 'success' ) );
			return;
		}

		$wgOut->parserOptions( ParserOptions::newFromUser( $this->user ) );
		$this->mainPrefsForm( $error === false ? 'success' : 'error', $error);
	}

	/**
	 * @access private
	 */
	function resetPrefs() {
		global $wgUser, $wgLang, $wgContLang, $wgContLanguageCode, $wgAllowRealName;

		$this->mNewpass = $this->mRetypePass = '';
		$this->mUserEmail = $this->user->getEmail();
		$this->mUserEmailAuthenticationtimestamp = $this->user->getEmailAuthenticationtimestamp();
		$this->mRealName = ($wgAllowRealName) ? $this->user->getRealName() : '';

		# language value might be blank, default to content language
		$this->mUserLanguage = $this->user->getOption( 'language', $wgContLanguageCode );

		$this->mUserVariant = $this->user->getOption( 'variant');
		$this->mEmailFlag = $this->user->getOption( 'disablemail' ) == 1 ? 1 : 0;
		$this->mNick = $this->user->getOption( 'nickname' );

		$this->mQuickbar = $this->user->getOption( 'quickbar' );
		$this->mSkin = Skin::normalizeKey( $this->user->getOption( 'skin' ) );
		$this->mMath = $this->user->getOption( 'math' );
		$this->mDate = $this->user->getDatePreference();
		$this->mRows = $this->user->getOption( 'rows' );
		$this->mCols = $this->user->getOption( 'cols' );
		$this->mStubs = $this->user->getOption( 'stubthreshold' );
		$this->mHourDiff = $this->user->getOption( 'timecorrection' );
		$this->mSearch = $this->user->getOption( 'searchlimit' );
		$this->mSearchLines = $this->user->getOption( 'contextlines' );
		$this->mSearchChars = $this->user->getOption( 'contextchars' );
		$this->mImageSize = $this->user->getOption( 'imagesize' );
		$this->mThumbSize = $this->user->getOption( 'thumbsize' );
		$this->mRecent = $this->user->getOption( 'rclimit' );
		$this->mRecentDays = $this->user->getOption( 'rcdays' );
		$this->mWatchlistEdits = $this->user->getOption( 'wllimit' );
		$this->mUnderline = $this->user->getOption( 'underline' );
		$this->mWatchlistDays = $this->user->getOption( 'watchlistdays' );
		$this->mDisableMWSuggest = $this->user->getBoolOption( 'disablesuggest' );

		$togs = User::getToggles();
		foreach ( $togs as $tname ) {
			$this->mToggles[$tname] = $this->user->getOption( $tname );
		}

		$namespaces = $wgContLang->getNamespaces();
		foreach ( $namespaces as $i => $namespace ) {
			if ( $i >= NS_MAIN ) {
				$this->mSearchNs[$i] = $this->user->getOption( 'searchNs'.$i );
			}
		}

		wfRunHooks( 'ResetPreferences', array( $this, $this->user ) );
	}

	/**
	 * @access private
	 */
	function namespacesCheckboxes() {
		global $wgContLang;

		# Determine namespace checkboxes
		$namespaces = $wgContLang->getNamespaces();
		$r1 = null;

		foreach ( $namespaces as $i => $name ) {
			if ($i < 0)
				continue;
			$checked = $this->mSearchNs[$i] ? "checked='checked'" : '';
			$name = str_replace( '_', ' ', $namespaces[$i] );

			if ( empty($name) )
				$name = wfMsg( 'blanknamespace' );

			$r1 .= "<input type='checkbox' value='1' name='wpNs$i' id='wpNs$i' {$checked}/> <label for='wpNs$i'>{$name}</label><br />\n";
		}
		return $r1;
	}


	function getToggle( $tname, $trailer = false, $disabled = false ) {
		global $wgUser, $wgLang;

		$this->mUsedToggles[$tname] = true;
		$ttext = $wgLang->getUserToggle( $tname );

		$checked = $this->user->getOption( $tname ) == 1 ? ' checked="checked"' : '';
		$disabled = $disabled ? ' disabled="disabled"' : '';
		$trailer = $trailer ? $trailer : '';
		return "<div class='toggle'><input type='checkbox' value='1' id=\"$tname\" name=\"wpOp$tname\"$checked$disabled />" .
			" <span class='toggletext'><label for=\"$tname\">$ttext</label>$trailer</span></div>\n";
	}

	function getToggles( $items ) {
		$out = "";
		foreach( $items as $item ) {
			if( $item === false )
				continue;
			if( is_array( $item ) ) {
				list( $key, $trailer ) = $item;
			} else {
				$key = $item;
				$trailer = false;
			}
			$out .= $this->getToggle( $key, $trailer );
		}
		return $out;
	}

	function addRow($td1, $td2) {
		return "<tr><td class='mw-label'>$td1</td><td class='mw-input'>$td2</td></tr>";
	}

	/**
	 * Helper function for user information panel
	 * @param $td1 label for an item
	 * @param $td2 item or null
	 * @param $td3 optional help or null
	 * @return xhtml block
	 */
	function tableRow( $td1, $td2 = null, $td3 = null ) {

		if ( is_null( $td3 ) ) {
			$td3 = '';
		} else {
			$td3 = Xml::tags( 'tr', null,
				Xml::tags( 'td', array( 'class' => 'pref-label', 'colspan' => '2' ), $td3 )
			);
		}

		if ( is_null( $td2 ) ) {
			$td1 = Xml::tags( 'td', array( 'class' => 'pref-label', 'colspan' => '2' ), $td1 );
			$td2 = '';
		} else {
			$td1 = Xml::tags( 'td', array( 'class' => 'pref-label' ), $td1 );
			$td2 = Xml::tags( 'td', array( 'class' => 'pref-input' ), $td2 );
		}

		return Xml::tags( 'tr', null, $td1 . $td2 ). $td3 . "\n";

	}

	/**
	 * @access private
	 */
	function mainPrefsForm( $status , $message = '' ) {
		global $wgUser, $wgOut, $wgLang, $wgContLang, $wgAuth;
		global $wgAllowRealName, $wgImageLimits, $wgThumbLimits;
		global $wgDisableLangConversion, $wgDisableTitleConversion;
		global $wgEnotifWatchlist, $wgEnotifUserTalk,$wgEnotifMinorEdits;
		global $wgRCShowWatchingUsers, $wgEnotifRevealEditorAddress;
		global $wgEnableEmail, $wgEnableUserEmail, $wgEmailAuthentication;
		global $wgContLanguageCode, $wgDefaultSkin, $wgCookieExpiration;
		global $wgEmailConfirmToEdit, $wgEnableMWSuggest;

		$wgOut->addScriptFile( 'prefs.js' );

		$wgOut->disallowUserJs();  # Prevent hijacked user scripts from sniffing passwords etc.

		if ( $this->mSuccess || 'success' == $status ) {
			$wgOut->wrapWikiMsg( '<div class="successbox"><strong>$1</strong></div>', 'savedprefs' );
		} else	if ( 'error' == $status ) {
			$wgOut->addWikiText( '<div class="errorbox"><strong>' . $message  . '</strong></div>' );
		} else if ( '' != $status ) {
			$wgOut->addWikiText( $message . "\n----" );
		}

		$qbs = $wgLang->getQuickbarSettings();
		$skinNames = $wgLang->getSkinNames();
		$mathopts = $wgLang->getMathNames();
		$dateopts = $wgLang->getDatePreferences();
		$togs = User::getToggles();

		$titleObj = SpecialPage::getTitleFor( 'EditUser' );

		# Pre-expire some toggles so they won't show if disabled
		$this->mUsedToggles[ 'shownumberswatching' ] = true;
		$this->mUsedToggles[ 'showupdated' ] = true;
		$this->mUsedToggles[ 'enotifwatchlistpages' ] = true;
		$this->mUsedToggles[ 'enotifusertalkpages' ] = true;
		$this->mUsedToggles[ 'enotifminoredits' ] = true;
		$this->mUsedToggles[ 'enotifrevealaddr' ] = true;
		$this->mUsedToggles[ 'ccmeonemails' ] = true;
		$this->mUsedToggles[ 'uselivepreview' ] = true;
		$this->mUsedToggles[ 'noconvertlink' ] = true;


		if ( !$this->mEmailFlag ) { $emfc = 'checked="checked"'; }
		else { $emfc = ''; }


		if ($wgEmailAuthentication && ($this->mUserEmail != '') ) {
			if( $this->user->getEmailAuthenticationTimestamp() ) {
				// date and time are separate parameters to facilitate localisation.
				// $time is kept for backward compat reasons.
				// 'emailauthenticated' is also used in SpecialConfirmemail.php
				$time = $wgLang->timeAndDate( $this->user->getEmailAuthenticationTimestamp(), true );
				$d = $wgLang->date( $this->user->getEmailAuthenticationTimestamp(), true );
				$t = $wgLang->time( $this->user->getEmailAuthenticationTimestamp(), true );
				$emailauthenticated = wfMsg('emailauthenticated', $time, $d, $t ).'<br />';
				$disableEmailPrefs = false;
			} else {
				$disableEmailPrefs = true;
				$skin = $this->user->getSkin();
				$emailauthenticated = wfMsg('emailnotauthenticated').'<br />' .
					$skin->makeKnownLinkObj( SpecialPage::getTitleFor( 'Confirmemail' ),
						wfMsg( 'emailconfirmlink' ) ) . '<br />';
			}
		} else {
			$emailauthenticated = '';
			$disableEmailPrefs = false;
		}

		if ($this->mUserEmail == '') {
			$emailauthenticated = wfMsg( 'noemailprefs' ) . '<br />';
		}

		$ps = $this->namespacesCheckboxes();

		$enotifwatchlistpages = ($wgEnotifWatchlist) ? $this->getToggle( 'enotifwatchlistpages', false, $disableEmailPrefs ) : '';
		$enotifusertalkpages = ($wgEnotifUserTalk) ? $this->getToggle( 'enotifusertalkpages', false, $disableEmailPrefs ) : '';
		$enotifminoredits = ($wgEnotifWatchlist && $wgEnotifMinorEdits) ? $this->getToggle( 'enotifminoredits', false, $disableEmailPrefs ) : '';
		$enotifrevealaddr = (($wgEnotifWatchlist || $wgEnotifUserTalk) && $wgEnotifRevealEditorAddress) ? $this->getToggle( 'enotifrevealaddr', false, $disableEmailPrefs ) : '';

		# </FIXME>

		$wgOut->addHTML(
			Xml::openElement( 'form', array(
				'action' => $titleObj->getLocalUrl(),
				'method' => 'post',
				'id'     => 'mw-preferences-form',
			) ) .
			Xml::openElement( 'div', array( 'id' => 'preferences' ) )
		);

		# User data

		$wgOut->addHTML(
			Xml::fieldset( wfMsg('prefs-personal') ) .
			Xml::openElement( 'table' ) .
			$this->tableRow( Xml::element( 'h2', null, wfMsg( 'prefs-personal' ) ) )
		);

		# Get groups to which the user belongs
		$userEffectiveGroups = $this->user->getEffectiveGroups();
		$userEffectiveGroupsArray = array();
		foreach( $userEffectiveGroups as $ueg ) {
			if( $ueg == '*' ) {
				// Skip the default * group, seems useless here
				continue;
			}
			$userEffectiveGroupsArray[] = User::makeGroupLinkHTML( $ueg );
		}
		asort( $userEffectiveGroupsArray );

		$sk = $this->user->getSkin();
		$toolLinks = array();
		$toolLinks[] = $sk->makeKnownLinkObj( SpecialPage::getTitleFor( 'ListGroupRights' ), wfMsg( 'listgrouprights' ) );
		# At the moment one tool link only but be prepared for the future...
		# FIXME: Add a link to Special:Userrights for users who are allowed to use it.
		# $wgUser->isAllowed( 'userrights' ) seems to strict in some cases

		$userInformationHtml =
			$this->tableRow( wfMsgHtml( 'username' ), htmlspecialchars( $this->user->getName() ) ) .
			$this->tableRow( wfMsgHtml( 'uid' ), $wgLang->formatNum( htmlspecialchars( $this->user->getId() ) ) ).

			$this->tableRow(
				wfMsgExt( 'prefs-memberingroups', array( 'parseinline' ), count( $userEffectiveGroupsArray ) ),
				$wgLang->commaList( $userEffectiveGroupsArray ) .
				'<br />(' . implode( ' | ', $toolLinks ) . ')'
			) .

			$this->tableRow(
				wfMsgHtml( 'prefs-edits' ),
				$wgLang->formatNum( $this->user->getEditCount() )
			);

		if( wfRunHooks( 'PreferencesUserInformationPanel', array( $this, &$userInformationHtml ) ) ) {
			$wgOut->addHTML( $userInformationHtml );
		}

		if ( $wgAllowRealName ) {
			$wgOut->addHTML(
				$this->tableRow(
					Xml::label( wfMsg('yourrealname'), 'wpRealName' ),
					Xml::input( 'wpRealName', 25, $this->mRealName, array( 'id' => 'wpRealName' ) ),
					Xml::tags('div', array( 'class' => 'prefsectiontip' ),
						wfMsgExt( 'prefs-help-realname', 'parseinline' )
					)
				)
			);
		}
		if ( $wgEnableEmail ) {
			$wgOut->addHTML(
				$this->tableRow(
					Xml::label( wfMsg('youremail'), 'wpUserEmail' ),
					Xml::input( 'wpUserEmail', 25, $this->mUserEmail, array( 'id' => 'wpUserEmail' ) ),
					Xml::tags('div', array( 'class' => 'prefsectiontip' ),
						wfMsgExt( $wgEmailConfirmToEdit ? 'prefs-help-email-required' : 'prefs-help-email', 'parseinline' )
					)
				)
			);
		}

		global $wgParser, $wgMaxSigChars;
		if( mb_strlen( $this->mNick ) > $wgMaxSigChars ) {
			$invalidSig = $this->tableRow(
				'&nbsp;',
				Xml::element( 'span', array( 'class' => 'error' ),
					wfMsgExt( 'badsiglength', 'parsemag', $wgLang->formatNum( $wgMaxSigChars ) ) )
			);
		} elseif( !empty( $this->mToggles['fancysig'] ) &&
			false === $wgParser->validateSig( $this->mNick ) ) {
			$invalidSig = $this->tableRow(
				'&nbsp;',
				Xml::element( 'span', array( 'class' => 'error' ), wfMsg( 'badsig' ) )
			);
		} else {
			$invalidSig = '';
		}

		$wgOut->addHTML(
			$this->tableRow(
				Xml::label( wfMsg( 'yournick' ), 'wpNick' ),
				Xml::input( 'wpNick', 25, $this->mNick,
					array(
						'id' => 'wpNick',
						// Note: $wgMaxSigChars is enforced in Unicode characters,
						// both on the backend and now in the browser.
						// Badly-behaved requests may still try to submit
						// an overlong string, however.
						'maxlength' => $wgMaxSigChars ) )
			) .
			$invalidSig .
			$this->tableRow( '&nbsp;', $this->getToggle( 'fancysig' ) )
		);

		list( $lsLabel, $lsSelect) = Xml::languageSelector( $this->mUserLanguage );
		$wgOut->addHTML(
			$this->tableRow( $lsLabel, $lsSelect )
		);

		/* see if there are multiple language variants to choose from*/
		if(!$wgDisableLangConversion) {
			$variants = $wgContLang->getVariants();
			$variantArray = array();

			$languages = Language::getLanguageNames( true );
			foreach($variants as $v) {
				$v = str_replace( '_', '-', strtolower($v));
				if( array_key_exists( $v, $languages ) ) {
					// If it doesn't have a name, we'll pretend it doesn't exist
					$variantArray[$v] = $languages[$v];
				}
			}

			$options = "\n";
			foreach( $variantArray as $code => $name ) {
				$selected = ($code == $this->mUserVariant);
				$options .= Xml::option( "$code - $name", $code, $selected ) . "\n";
			}

			if(count($variantArray) > 1) {
				$wgOut->addHTML(
					$this->tableRow(
						Xml::label( wfMsg( 'yourvariant' ), 'wpUserVariant' ),
						Xml::tags( 'select',
							array( 'name' => 'wpUserVariant', 'id' => 'wpUserVariant' ),
							$options
						)
					)
				);
			}

			if(count($variantArray) > 1 && !$wgDisableLangConversion && !$wgDisableTitleConversion) {
				$wgOut->addHTML(
					Xml::tags( 'tr', null,
						Xml::tags( 'td', array( 'colspan' => '2' ),
							$this->getToggle( "noconvertlink" )
						)
					)
				);
			}
		}

		# Password
		if( $wgAuth->allowPasswordChange() ) {
			$wgOut->addHTML(
				$this->tableRow( Xml::element( 'h2', null, wfMsg( 'changepassword' ) ) ) .
				$this->tableRow(
					Xml::label( wfMsg( 'newpassword' ), 'wpNewpass' ),
					Xml::password( 'wpNewpass', 25, $this->mNewpass, array( 'id' => 'wpNewpass' ) )
				) .
				$this->tableRow(
					Xml::label( wfMsg( 'retypenew' ), 'wpRetypePass' ),
					Xml::password( 'wpRetypePass', 25, $this->mRetypePass, array( 'id' => 'wpRetypePass' ) )
				)
			);
			if( $wgCookieExpiration > 0 ){
				$wgOut->addHTML(
					Xml::tags( 'tr', null,
						Xml::tags( 'td', array( 'colspan' => '2' ),
							$this->getToggle( "rememberpassword" )
						)
					)
				);
			} else {
				$this->mUsedToggles['rememberpassword'] = true;
			}
		}

		# <FIXME>
		# Enotif
		if ( $wgEnableEmail ) {

			$moreEmail = '';
			if ($wgEnableUserEmail) {
				// fixme -- the "allowemail" pseudotoggle is a hacked-together
				// inversion for the "disableemail" preference.
				$emf = wfMsg( 'allowemail' );
				$disabled = $disableEmailPrefs ? ' disabled="disabled"' : '';
				$moreEmail =
					"<input type='checkbox' $emfc $disabled value='1' name='wpEmailFlag' id='wpEmailFlag' /> <label for='wpEmailFlag'>$emf</label>" .
					$this->getToggle( 'ccmeonemails', '', $disableEmailPrefs );
			}


			$wgOut->addHTML(
				$this->tableRow( Xml::element( 'h2', null, wfMsg( 'email' ) ) ) .
				$this->tableRow(
					$emailauthenticated.
					$enotifrevealaddr.
					$enotifwatchlistpages.
					$enotifusertalkpages.
					$enotifminoredits.
					$moreEmail
				)
			);
		}
		# </FIXME>

		$wgOut->addHTML(
			Xml::closeElement( 'table' ) .
			Xml::closeElement( 'fieldset' )
		);


		# Quickbar
		#
		if ($this->mSkin == 'cologneblue' || $this->mSkin == 'standard') {
			$wgOut->addHTML( "<fieldset>\n<legend>" . wfMsg( 'qbsettings' ) . "</legend>\n" );
			for ( $i = 0; $i < count( $qbs ); ++$i ) {
				if ( $i == $this->mQuickbar ) { $checked = ' checked="checked"'; }
				else { $checked = ""; }
				$wgOut->addHTML( "<div><label><input type='radio' name='wpQuickbar' value=\"$i\"$checked />{$qbs[$i]}</label></div>\n" );
			}
			$wgOut->addHTML( "</fieldset>\n\n" );
		} else {
			# Need to output a hidden option even if the relevant skin is not in use,
			# otherwise the preference will get reset to 0 on submit
			$wgOut->addHTML( wfHidden( 'wpQuickbar', $this->mQuickbar ) );
		}

		# Skin
		#
		$wgOut->addHTML( "<fieldset>\n<legend>\n" . wfMsg('skin') . "</legend>\n" );
		$mptitle = Title::newMainPage();
		$previewtext = wfMsg('skin-preview');
		# Only show members of Skin::getSkinNames() rather than
		# $skinNames (skins is all skin names from Language.php)
		$validSkinNames = Skin::getUsableSkins();
		# Sort by UI skin name. First though need to update validSkinNames as sometimes
		# the skinkey & UI skinname differ (e.g. "standard" skinkey is "Classic" in the UI).
		foreach ($validSkinNames as $skinkey => & $skinname ) {
			if ( isset( $skinNames[$skinkey] ) )  {
				$skinname = $skinNames[$skinkey];
			}
		}
		asort($validSkinNames);
		foreach ($validSkinNames as $skinkey => $sn ) {
			$checked = $skinkey == $this->mSkin ? ' checked="checked"' : '';

			$mplink = htmlspecialchars($mptitle->getLocalURL("useskin=$skinkey"));
			$previewlink = "(<a target='_blank' href=\"$mplink\">$previewtext</a>)";
			if( $skinkey == $wgDefaultSkin )
				$sn .= ' (' . wfMsg( 'default' ) . ')';
			$wgOut->addHTML( "<input type='radio' name='wpSkin' id=\"wpSkin$skinkey\" value=\"$skinkey\"$checked /> <label for=\"wpSkin$skinkey\">{$sn}</label> $previewlink<br />\n" );
		}
		$wgOut->addHTML( "</fieldset>\n\n" );

		# Math
		#
		global $wgUseTeX;
		if( $wgUseTeX ) {
			$wgOut->addHTML( "<fieldset>\n<legend>" . wfMsg('math') . '</legend>' );
			foreach ( $mathopts as $k => $v ) {
				$checked = ($k == $this->mMath);
				$wgOut->addHTML(
					Xml::openElement( 'div' ) .
					Xml::radioLabel( wfMsg( $v ), 'wpMath', $k, "mw-sp-math-$k", $checked ) .
					Xml::closeElement( 'div' ) . "\n"
				);
			}
			$wgOut->addHTML( "</fieldset>\n\n" );
		}

		# Files
		#
		$wgOut->addHTML(
			"<fieldset>\n" . Xml::element( 'legend', null, wfMsg( 'files' ) ) . "\n"
		);

		$imageLimitOptions = null;
		foreach ( $wgImageLimits as $index => $limits ) {
			$selected = ($index == $this->mImageSize);
			$imageLimitOptions .= Xml::option( "{$limits[0]}×{$limits[1]}" .
				wfMsg('unit-pixel'), $index, $selected );
		}

		$imageSizeId = 'wpImageSize';
		$wgOut->addHTML(
			"<div>" . Xml::label( wfMsg('imagemaxsize'), $imageSizeId ) . " " .
			Xml::openElement( 'select', array( 'name' => $imageSizeId, 'id' => $imageSizeId ) ) .
				$imageLimitOptions .
			Xml::closeElement( 'select' ) . "</div>\n"
		);

		$imageThumbOptions = null;
		foreach ( $wgThumbLimits as $index => $size ) {
			$selected = ($index == $this->mThumbSize);
			$imageThumbOptions .= Xml::option($size . wfMsg('unit-pixel'), $index,
				$selected);
		}

		$thumbSizeId = 'wpThumbSize';
		$wgOut->addHTML(
			"<div>" . Xml::label( wfMsg('thumbsize'), $thumbSizeId ) . " " .
			Xml::openElement( 'select', array( 'name' => $thumbSizeId, 'id' => $thumbSizeId ) ) .
				$imageThumbOptions .
			Xml::closeElement( 'select' ) . "</div>\n"
		);

		$wgOut->addHTML( "</fieldset>\n\n" );

		# Date format
		#
		# Date/Time
		#

		$wgOut->addHTML(
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', null, wfMsg( 'datetime' ) ) . "\n"
		);

		if ($dateopts) {
			$wgOut->addHTML(
				Xml::openElement( 'fieldset' ) .
				Xml::element( 'legend', null, wfMsg( 'dateformat' ) ) . "\n"
			);
			$idCnt = 0;
			$epoch = '20010115161234'; # Wikipedia day
			foreach( $dateopts as $key ) {
				if( $key == 'default' ) {
					$formatted = wfMsg( 'datedefault' );
				} else {
					$formatted = $wgLang->timeanddate( $epoch, false, $key );
				}
				$wgOut->addHTML(
					Xml::tags( 'div', null,
						Xml::radioLabel( $formatted, 'wpDate', $key, "wpDate$idCnt", $key == $this->mDate )
					) . "\n"
				);
				$idCnt++;
			}
			$wgOut->addHTML( Xml::closeElement( 'fieldset' ) . "\n" );
		}

		$nowlocal = $wgLang->time( $now = wfTimestampNow(), true );
		$nowserver = $wgLang->time( $now, false );

		$wgOut->addHTML(
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', null, wfMsg( 'timezonelegend' ) ) .
			Xml::openElement( 'table' ) .
		 	$this->addRow( wfMsg( 'servertime' ), $nowserver ) .
			$this->addRow( wfMsg( 'localtime' ), $nowlocal ) .
			$this->addRow(
				Xml::label( wfMsg( 'timezoneoffset' ), 'wpHourDiff'  ),
				Xml::input( 'wpHourDiff', 6, $this->mHourDiff, array( 'id' => 'wpHourDiff' ) ) ) .
			"<tr>
				<td></td>
				<td class='mw-submit'>" .
					Xml::element( 'input',
						array( 'type' => 'button',
							'value' => wfMsg( 'guesstimezone' ),
							'onclick' => 'javascript:guessTimezone()',
							'id' => 'guesstimezonebutton',
							'style' => 'display:none;' ) ) .
				"</td>
			</tr>" .
			Xml::closeElement( 'table' ) .
			Xml::tags( 'div', array( 'class' => 'prefsectiontip' ), wfMsgExt( 'timezonetext', 'parseinline' ) ).
			Xml::closeElement( 'fieldset' ) .
			Xml::closeElement( 'fieldset' ) . "\n\n"
		);

		# Editing
		#
		global $wgLivePreview;
		$wgOut->addHTML( '<fieldset><legend>' . wfMsg( 'textboxsize' ) . '</legend>
			<div>' .
				wfInputLabel( wfMsg( 'rows' ), 'wpRows', 'wpRows', 3, $this->mRows ) .
				' ' .
				wfInputLabel( wfMsg( 'columns' ), 'wpCols', 'wpCols', 3, $this->mCols ) .
			"</div>" .
			$this->getToggles( array(
				'editsection',
				'editsectiononrightclick',
				'editondblclick',
				'editwidth',
				'showtoolbar',
				'previewonfirst',
				'previewontop',
				'minordefault',
				'externaleditor',
				'externaldiff',
				$wgLivePreview ? 'uselivepreview' : false,
				'forceeditsummary',
			) ) . '</fieldset>'
		);

		# Recent changes
		$wgOut->addHTML( '<fieldset><legend>' . wfMsgHtml( 'prefs-rc' ) . '</legend>' );

		$rc  = '<table><tr>';
		$rc .= '<td>' . Xml::label( wfMsg( 'recentchangesdays' ), 'wpRecentDays' ) . '</td>';
		$rc .= '<td>' . Xml::input( 'wpRecentDays', 3, $this->mRecentDays, array( 'id' => 'wpRecentDays' ) ) . '</td>';
		$rc .= '</tr><tr>';
		$rc .= '<td>' . Xml::label( wfMsg( 'recentchangescount' ), 'wpRecent' ) . '</td>';
		$rc .= '<td>' . Xml::input( 'wpRecent', 3, $this->mRecent, array( 'id' => 'wpRecent' ) ) . '</td>';
		$rc .= '</tr></table>';
		$wgOut->addHTML( $rc );

		$wgOut->addHTML( '<br />' );

		$toggles[] = 'hideminor';
		if( $wgRCShowWatchingUsers )
			$toggles[] = 'shownumberswatching';
		$toggles[] = 'usenewrc';
		$wgOut->addHTML( $this->getToggles( $toggles ) );

		$wgOut->addHTML( '</fieldset>' );

		# Watchlist
		$wgOut->addHTML( '<fieldset><legend>' . wfMsgHtml( 'prefs-watchlist' ) . '</legend>' );

		$wgOut->addHTML( wfInputLabel( wfMsg( 'prefs-watchlist-days' ), 'wpWatchlistDays', 'wpWatchlistDays', 3, $this->mWatchlistDays ) );
		$wgOut->addHTML( '<br /><br />' );

		$wgOut->addHTML( $this->getToggle( 'extendwatchlist' ) );
		$wgOut->addHTML( wfInputLabel( wfMsg( 'prefs-watchlist-edits' ), 'wpWatchlistEdits', 'wpWatchlistEdits', 3, $this->mWatchlistEdits ) );
		$wgOut->addHTML( '<br /><br />' );

		$wgOut->addHTML( $this->getToggles( array( 'watchlisthideminor', 'watchlisthidebots', 'watchlisthideown', 'watchlisthideanons', 'watchlisthideliu' ) ) );

		if( $this->user->isAllowed( 'createpage' ) || $this->user->isAllowed( 'createtalk' ) )
			$wgOut->addHTML( $this->getToggle( 'watchcreations' ) );
		foreach( array( 'edit' => 'watchdefault', 'move' => 'watchmoves', 'delete' => 'watchdeletion' ) as $action => $toggle ) {
			if( $this->user->isAllowed( $action ) )
				$wgOut->addHTML( $this->getToggle( $toggle ) );
		}
		$this->mUsedToggles['watchcreations'] = true;
		$this->mUsedToggles['watchdefault'] = true;
		$this->mUsedToggles['watchmoves'] = true;
		$this->mUsedToggles['watchdeletion'] = true;

		$wgOut->addHTML( '</fieldset>' );

		# Search
		$mwsuggest = $wgEnableMWSuggest ?
			$this->addRow(
				Xml::label( wfMsg( 'mwsuggest-disable' ), 'wpDisableMWSuggest' ),
				Xml::check( 'wpDisableMWSuggest', $this->mDisableMWSuggest, array( 'id' => 'wpDisableMWSuggest' ) )
			) : '';
		$wgOut->addHTML(
			// Elements for the search tab itself
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', null, wfMsg( 'searchresultshead' ) ) .
			// Elements for the search options in the search tab
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', null, wfMsg( 'prefs-searchoptions' ) ) .
			Xml::openElement( 'table' ) .
			$this->addRow(
				Xml::label( wfMsg( 'resultsperpage' ), 'wpSearch' ),
				Xml::input( 'wpSearch', 4, $this->mSearch, array( 'id' => 'wpSearch' ) )
			) .
			$this->addRow(
				Xml::label( wfMsg( 'contextlines' ), 'wpSearchLines' ),
				Xml::input( 'wpSearchLines', 4, $this->mSearchLines, array( 'id' => 'wpSearchLines' ) )
			) .
			$this->addRow(
				Xml::label( wfMsg( 'contextchars' ), 'wpSearchChars' ),
				Xml::input( 'wpSearchChars', 4, $this->mSearchChars, array( 'id' => 'wpSearchChars' ) )
			) .
			$mwsuggest .
			Xml::closeElement( 'table' ) .
			Xml::closeElement( 'fieldset' ) .
			// Elements for the namespace options in the search tab
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', null, wfMsg( 'prefs-namespaces' ) ) .
			wfMsgExt( 'defaultns', array( 'parse' ) ) .
			$ps .
			Xml::closeElement( 'fieldset' ) .
			// End of the search tab
			Xml::closeElement( 'fieldset' )
		);

		# Misc
		#
		$wgOut->addHTML('<fieldset><legend>' . wfMsg('prefs-misc') . '</legend>');
		$wgOut->addHTML( '<label for="wpStubs">' . wfMsg( 'stub-threshold' ) . '</label>&nbsp;' );
		$wgOut->addHTML( Xml::input( 'wpStubs', 6, $this->mStubs, array( 'id' => 'wpStubs' ) ) );
		$msgUnderline = htmlspecialchars( wfMsg ( 'tog-underline' ) );
		$msgUnderlinenever = htmlspecialchars( wfMsg ( 'underline-never' ) );
		$msgUnderlinealways = htmlspecialchars( wfMsg ( 'underline-always' ) );
		$msgUnderlinedefault = htmlspecialchars( wfMsg ( 'underline-default' ) );
		$uopt = $this->user->getOption("underline");
		$s0 = $uopt == 0 ? ' selected="selected"' : '';
		$s1 = $uopt == 1 ? ' selected="selected"' : '';
		$s2 = $uopt == 2 ? ' selected="selected"' : '';
		$wgOut->addHTML("
<div class='toggle'><p><label for='wpOpunderline'>$msgUnderline</label>
<select name='wpOpunderline' id='wpOpunderline'>
<option value=\"0\"$s0>$msgUnderlinenever</option>
<option value=\"1\"$s1>$msgUnderlinealways</option>
<option value=\"2\"$s2>$msgUnderlinedefault</option>
</select></p></div>");

		foreach ( $togs as $tname ) {
			if( !array_key_exists( $tname, $this->mUsedToggles ) ) {
				$wgOut->addHTML( $this->getToggle( $tname ) );
			}
		}
		$wgOut->addHTML( '</fieldset>' );

		wfRunHooks( 'RenderPreferencesForm', array( $this, $wgOut ) );

		$token = htmlspecialchars( $this->user->editToken() );
		$skin = $this->user->getSkin();
		$wgOut->addHTML( "
	<div id='prefsubmit'>
	<div>
		<input type='submit' name='wpSaveprefs' class='btnSavePrefs' value=\"" . wfMsgHtml( 'saveprefs' ) . '"'.$skin->tooltipAndAccesskey('save')." />
		<input type='submit' name='wpReset' value=\"" . wfMsgHtml( 'resetprefs' ) . "\" />
	</div>

	</div>

	<input type='hidden' name='wpEditToken' value=\"{$token}\" />
	<input type='hidden' name='username' value=\"{$this->target}\" />
	</div></form>\n" );

		$wgOut->addHTML( Xml::tags( 'div', array( 'class' => "prefcache" ),
			wfMsgExt( 'clearyourcache', 'parseinline' ) )
		);
	}
	
	function makeSearchForm() {
		$thisTitle = Title::makeTitle( NS_SPECIAL, $this->getName() );
		$form = wfOpenElement( 'form', array( 'method' => 'post', 'action' => $thisTitle->getLocalUrl() ) );
		$form .= wfElement( 'label', array( 'for' => 'username' ), wfMsg( 'edituser-username' ) ) . ' ';
		$form .= wfElement( 'input', array( 'type' => 'text', 'name' => 'username', 'id' => 'username', 'value' => $this->target ) ) . ' ';
		$form .= wfElement( 'input', array( 'type' => 'submit', 'name' => 'dosearch', 'value' => wfMsg( 'edituser-dosearch' ) ) );
		$form .= wfElement( 'input', array( 'type' => 'hidden', 'name' => 'issearch', 'value' => '1' ) );
		$form .= wfCloseElement( 'form' );
		return $form;
	}
}
