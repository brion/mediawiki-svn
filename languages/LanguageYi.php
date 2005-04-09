<?php
/**
  * @package MediaWiki
  * @subpackage Language
  */

# Stub for Yiddish

require_once( "LanguageUtf8.php" );

class LanguageYi extends LanguageUtf8 {

	function getDefaultUserOptions() {
		$opt = parent::getDefaultUserOptions();
		$opt["quickbar"] = 2; # Right-to-left
		return $opt;
	}

	# For right-to-left language support
	function isRTL() {
		return true;
	}
}

?>
