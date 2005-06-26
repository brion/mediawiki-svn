<?php
if (!defined('MEDIAWIKI')) die();
/**
 * A Special Page extension to rename users, runnable by users with userrights
 * righs
 *
 * @package MediaWiki
 * @subpackage Extensions
 *
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionFunctions[] = 'wfSpecialRenameuser';

function wfSpecialRenameuser() {
	global $IP, $wgMessageCache;
	$wgMessageCache->addMessage( 'renameuser', 'Rename user' );
	$wgMessageCache->addMessage( 'renameuserold', 'Current username: ' );
	$wgMessageCache->addMessage( 'renameusernew', 'New username: ' );
	$wgMessageCache->addMessage( 'renameusererrordoesnotexist', 'The username "$1" does not exist');
	$wgMessageCache->addMessage( 'renameusererrorexists', 'The username "$1" already exits');
	$wgMessageCache->addMessage( 'renameusersuccess', 'The user "$1" has been renamed to "$2"' );

	require_once( "$IP/includes/SpecialPage.php" );
	class Renameuser extends SpecialPage {
		function Renameuser() {
			SpecialPage::SpecialPage('Renameuser', 'userrights');
		}
		
		function execute( $par = null ) {
			global $wgOut, $wgUser, $wgTitle, $wgRequest;
			global $wgVersion;

			$this->setHeaders();

			if ( ! $wgUser->isAllowed( 'userrights' ) ) {
				$wgOut->permissionRequired( 'userrights' );
				return;
			}

			if ( wfReadOnly() ) {
				$wgOut->readOnlyPage();
				return;
			}

			if ((float)$wgVersion != 1.5) {
				$wgOut->versionRequired( 1.5 );
				return;
			}
			
			$oldusername = trim( $wgRequest->getText( 'oldusername' ) );
			$newusername = trim( $wgRequest->getText( 'newusername' ) );

			$action = $wgTitle->escapeLocalUrl();
			$renameuserold = wfMsgHtml( 'renameuserold' );
			$renameusernew = wfMsgHtml( 'renameusernew' );
			$go = wfMsgHtml( 'go' );
			$wgOut->addHTML( "
<form id='renameuser' method='post' action=\"$action\">
	<table>
		<tr>
			<td align='right'>$renameuserold</td>
			<td align='left'><input tabindex='1' type='text' size='20' name='oldusername' value=\"" . htmlspecialchars($oldusername) . "\" /></td>
		</tr>
		<tr>
			<td align='right'>$renameusernew</td>
			<td align='left'><input tabindex='1' type='text' size='20' name='newusername' value=\"" . htmlspecialchars($newusername) . "\"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td align='right'><input type='submit' name='submit' value=\"$go\" /></td>
		</tr>
	</table>
</form>");
			// Sanity checks
			if ($oldusername == '' || $newusername == '' || $oldusername == $newusername)
				return;
			
			$wgOut->addHTML( '<hr />' );
			
			$olduser = User::newFromName( $oldusername );
			$newuser = User::newFromName( $newusername );

			if ($olduser->idForName() == 0) {
				$wgOut->addWikiText( wfMsg( 'renameusererrordoesnotexist', $oldusername ) );
				return;
			}
			
			if ($newuser->idForName() != 0) {
				$wgOut->addWikiText( wfMsg( 'renameusererrorexists', $newusername ) );
				return;
			}

			$rename = new RenameuserSQL($oldusername, $newusername);
			$rename->rename();
			$wgOut->addWikiText( wfMsg( 'renameusersuccess', $oldusername, $newusername ) );
		}
	}

	class RenameuserSQL {
		
		/**
		  * The old username
		  *
		  * @var string 
		  * @access private
		  */
		var $old;
		
		/**
		  * The new username
		  *
		  * @var string
		  * @access private
		  */
		var $new;
		
		/**
		  * The the tables => fields to be updated
		  *
		  * @var array
		  * @access private
		  */
		var $tables;
		
		function RenameuserSQL($old, $new) {
			$this->old = $old;
			$this->new = $new;
			$this->tables = array(
				// 1.5 schema
				'user' => 'user_name',
				'revision' => 'rev_user_text',
				'archive' => 'ar_user_text',
				'image' => 'img_user_text',
				'oldimage' => 'oi_user_text',
				'recentchanges' => 'rc_user_text'
			);
		}

		function rename() {
			global $wgOut;
			
			$fname = 'RenameuserSQL::rename';
			wfProfileIn( $fname );
			
			$dbw =& wfGetDB( DB_MASTER );

			$qold = $dbw->addQuotes( $this->old );
			$qnew = $dbw->addQuotes( $this->new );

			foreach ($this->tables as $table => $field) {
				$sql = "UPDATE LOW_PRIORITY $table SET $field = $qnew WHERE $field = $qold";
				$dbw->query($sql, $fname);
			}
			wfProfileOut( $fname );
		}
		// UPDATE LOW_PRIORITY user SET user_name = "Arnfjörð" WHERE user_name = "Ævar Arnfjörð Bjarmason";
	}
	SpecialPage::addPage( new Renameuser );
}
