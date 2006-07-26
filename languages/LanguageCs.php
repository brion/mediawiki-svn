<?php
/** Czech (česky)
 *
 * @package MediaWiki
 * @subpackage Language
 */

#--------------------------------------------------------------------------
# Internationalisation code
#--------------------------------------------------------------------------

class LanguageCs extends Language {
	function fixUpSettings() {
		parent::fixUpSettings();

		# Yucky hardcoding hack
		global $wgMetaNamespace;
		if ( $wgMetaNamespace == 'Wikipedie' || $wgMetaNamespace == 'Wikipedia' ) {
			$this->namespaceNames[NS_USER] = 'Wikipedista'; 
		}
		$this->namespaceNames[NS_USER_TALK] = str_replace( '$1', 
			$this->namespaceNames[NS_USER], $this->namespaceNames[NS_USER_TALK] );
	}

	# Grammatical transformations, needed for inflected languages
	# Invoked by putting {{grammar:case|word}} in a message
	function convertGrammar( $word, $case ) {
		global $wgGrammarForms;
		if ( isset($wgGrammarForms['cs'][$case][$word]) ) {
			return $wgGrammarForms['cs'][$case][$word];
		}
		# allowed values for $case:
		#	1sg, 2sg, ..., 7sg -- nominative, genitive, ... (in singular)
		switch ( $word ) {
			case 'Wikipedia':
			case 'Wikipedie':
				switch ( $case ) {
					case '3sg':
					case '4sg':
					case '6sg':
						return 'Wikipedii';
					case '7sg':
						return 'Wikipedií';
					default:
						return 'Wikipedie';
				}

			case 'Wiktionary':
			case 'Wikcionář':
				switch ( $case ) {
					case '2sg':
						return 'Wikcionáře';
					case '3sg':
					case '5sg';
					case '6sg';
						return 'Wikcionáři';
					case '7sg':
						return 'Wikcionářem';
					default:
						return 'Wikcionář';
				}

			case 'Wikiquote':
			case 'Wikicitáty':
				switch ( $case ) {
					case '2sg':
						return 'Wikicitátů';
					case '3sg':
						return 'Wikicitátům';
					case '6sg';
						return 'Wikicitátech';
					default:
						return 'Wikicitáty';
				}
		}
		# unknown
		return $word;
	}

  # Plural form transformations, needed for some languages.
  # Invoked by {{plural:count|wordform1|wordform2|wordform3}}
  function convertPlural( $count, $wordform1, $wordform2, $wordform3) {
    switch ( $count ) {
      case 1:
        return $wordform1;

      case 2:
      case 3:
      case 4:
        return $wordform2;

      default:
        return $wordform3;
    };
  }
}

?>
