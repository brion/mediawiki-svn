<?php
/** Kazakh (Қазақша)
  * converter routines
  *
  * @addtogroup Language
  */

require_once( dirname(__FILE__).'/../LanguageConverter.php' );
require_once( dirname(__FILE__).'/LanguageKk_cyrl.php' );

define( 'KK_C_UC', 'АӘБВГҒДЕЁЖЗИЙКҚЛМНҢОӨПРСТУҰҮФХҺЦЧШЩЪЫІЬЭЮЯ' ); # Kazakh Cyrillic uppercase
define( 'KK_C_LC', 'аәбвгғдеёжзийкқлмнңоөпрстуұүфхһцчшщъыіьэюя' ); # Kazakh Cyrillic lowercase
define( 'KK_L_UC', 'AÄBCÇDEÉFGĞHIİÏJKLMNÑOÖPQRSŞTUÜVWXYÝZ' ); # Kazakh Latin uppercase
define( 'KK_L_LC', 'aäbcçdeéfgğhıiïjklmnñoöpqrsştuüvwxyýz' ); # Kazakh Latin lowercase
define( 'KK_A', 'اٵبۆگعدەجزيكقلمنڭوٶپرستۋۇٷفحھچشىٸ' ); # Kazakh Arabic

class KkConverter extends LanguageConverter {

	function loadDefaultTables() {
		// require( dirname(__FILE__)."/../../includes/KkConversion.php" );
		// Placeholder for future implementing. Remove variables declarations
		// after generating KkConversion.php
		$kk2Cyrl = array();
		$kk2Latn = array();
		$kk2Arab = array();
		$kk2KZ = array();
		$kk2TR = array();
		$kk2CN = array();

		$this->mTables = array(
			'kk-cyrl'	=> new ReplacementArray( $kk2Cyrl ),
			'kk-latn'	=> new ReplacementArray( $kk2Latn ),
			'kk-arab'	=> new ReplacementArray( $kk2Arab ),
			'kk-kz'		=> new ReplacementArray( array_merge($kk2Cyrl, $kk2KZ) ),
			'kk-tr'		=> new ReplacementArray( array_merge($kk2Latn, $kk2TR) ),
			'kk-cn'		=> new ReplacementArray( array_merge($kk2Arab, $kk2CN) ),
			'kk'		=> new ReplacementArray()
		);

		self::loadRegs();
	}

	function postLoadTables() {
		$this->mTables['kk-kz']->merge( $this->mTables['kk-cyrl'] );
		$this->mTables['kk-tr']->merge( $this->mTables['kk-latn'] );
		$this->mTables['kk-cn']->merge( $this->mTables['kk-arab'] );
	}

	function loadRegs() { 

		$this->mCyrl2Latn = array(
			'/№/u' => 'No.',
			## Е after vowels
			'/([АӘЕЁИОӨҰҮЭЮЯЪЬ])Е/u' => '$1YE',
			'/([АӘЕЁИОӨҰҮЭЮЯЪЬ])е/ui' => '$1ye',
			## leading ЁЮЯЩ
			'/^Ё(['.KK_C_UC.']|$)/u' => 'YO$1', '/^Ё(['.KK_C_LC.']|$)/u' => 'Yo$1',
			'/^Ю(['.KK_C_UC.']|$)/u' => 'YU$1', '/^Ю(['.KK_C_LC.']|$)/u' => 'Yu$1',
			'/^Я(['.KK_C_UC.']|$)/u' => 'YA$1', '/^Я(['.KK_C_LC.']|$)/u' => 'Ya$1',
			'/^Щ(['.KK_C_UC.']|$)/u' => 'ŞÇ$1', '/^Щ(['.KK_C_LC.']|$)/u' => 'Şç$1',
			## other ЁЮЯ 
			'/Ё/u' => 'YO', '/ё/u' => 'yo', 
			'/Ю/u' => 'YU', '/ю/u' => 'yu',
			'/Я/u' => 'YA', '/я/u' => 'ya',
			'/Щ/u' => 'ŞÇ', '/щ/u' => 'şç',
			## soft and hard signs
			'/[ъЪ]/u' => 'ʺ', '/[ьЬ]/u' => 'ʹ',
			## other characters
			'/А/u' => 'A', '/а/u' => 'a', '/Ә/u' => 'Ä', '/ә/u' => 'ä',
			'/Б/u' => 'B', '/б/u' => 'b', '/В/u' => 'V', '/в/u' => 'v',
			'/Г/u' => 'G', '/г/u' => 'g', '/Ғ/u' => 'Ğ', '/ғ/u' => 'ğ',
			'/Д/u' => 'D', '/д/u' => 'd', '/Е/u' => 'E', '/е/u' => 'e',
			'/Ж/u' => 'J', '/ж/u' => 'j', '/З/u' => 'Z', '/з/u' => 'z',
			'/И/u' => 'Ï', '/и/u' => 'ï', '/Й/u' => 'Ý', '/й/u' => 'ý',
			'/К/u' => 'K', '/к/u' => 'k', '/Қ/u' => 'Q', '/қ/u' => 'q',
			'/Л/u' => 'L', '/л/u' => 'l', '/М/u' => 'M', '/м/u' => 'm',
			'/Н/u' => 'N', '/н/u' => 'n', '/Ң/u' => 'Ñ', '/ң/u' => 'ñ',
			'/О/u' => 'O', '/о/u' => 'o', '/Ө/u' => 'Ö', '/ө/u' => 'ö',
			'/П/u' => 'P', '/п/u' => 'p', '/Р/u' => 'R', '/р/u' => 'r',
			'/С/u' => 'S', '/с/u' => 's', '/Т/u' => 'T', '/т/u' => 't',
			'/У/u' => 'W', '/у/u' => 'w', '/Ұ/u' => 'U', '/ұ/u' => 'u',
			'/Ү/u' => 'Ü', '/ү/u' => 'ü', '/Ф/u' => 'F', '/ф/u' => 'f',
			'/Х/u' => 'X', '/х/u' => 'x', '/Һ/u' => 'H', '/һ/u' => 'h',
			'/Ц/u' => 'C', '/ц/u' => 'c', '/Ч/u' => 'Ç', '/ч/u' => 'ç',
			'/Ш/u' => 'Ş', '/ш/u' => 'ş', '/Ы/u' => 'I', '/ы/u' => 'ı',
			'/І/u' => 'İ', '/і/u' => 'i', '/Э/u' => 'É', '/э/u' => 'é',
		);

		$this->mLatn2Cyrl = array(
			'/No\./u' => '№',
			## Şç
			'/ŞÇʹ/u'=> 'ЩЬ', '/Şçʹ/u'=> 'Щь', '/Şçʹ/u'=> 'Щь',
			'/Ş[Çç]/u' => 'Щ', '/şç/u' => 'щ',
			## soft and hard signs
			'/(['.KK_L_UC.'])ʺ(['.KK_L_UC.'])/u' => '$1Ъ$2',
			'/ʺ(['.KK_L_LC.'])/u' => 'ъ$1',
			'/(['.KK_L_UC.'])ʹ(['.KK_L_UC.'])/u' => '$1Ь$2',
			'/ʹ(['.KK_L_LC.'])/u' => 'ь$1',
			'/ʺ/u' => 'ъ',
			'/ʹ/u' => 'ь',
			## Ye Yo Yu Ya.
			'/Y[Ee]/u' => 'Е', '/ye/u' => 'е',
			'/Y[Oo]/u' => 'Ё', '/yo/u' => 'ё',
			'/Y[UWuw]/u' => 'Ю', '/y[uw]/u' => 'ю',
			'/Y[Aa]/u' => 'Я', '/ya/u' => 'я',
			## other characters
			'/A/u' => 'А', '/a/u' => 'а', '/Ä/u' => 'Ә', '/ä/u' => 'ә',
			'/B/u' => 'Б', '/b/u' => 'б', '/C/u' => 'Ц', '/c/u' => 'ц',
			'/Ç/u' => 'Ч', '/ç/u' => 'ч', '/D/u' => 'Д', '/d/u' => 'д',
			'/E/u' => 'Е', '/e/u' => 'е', '/É/u' => 'Э', '/é/u' => 'э',
			'/F/u' => 'Ф', '/f/u' => 'ф', '/G/u' => 'Г', '/g/u' => 'г',
			'/Ğ/u' => 'Ғ', '/ğ/u' => 'ғ', '/H/u' => 'Һ', '/h/u' => 'һ',
			'/I/u' => 'Ы', '/ı/u' => 'ы', '/İ/u' => 'І', '/i/u' => 'і',
			'/Ï/u' => 'И', '/ï/u' => 'и', '/J/u' => 'Ж', '/j/u' => 'ж',
			'/K/u' => 'К', '/k/u' => 'к', '/L/u' => 'Л', '/l/u' => 'л',
			'/M/u' => 'М', '/m/u' => 'м', '/N/u' => 'Н', '/n/u' => 'н',
			'/Ñ/u' => 'Ң', '/ñ/u' => 'ң', '/O/u' => 'О', '/o/u' => 'о',
			'/Ö/u' => 'Ө', '/ö/u' => 'ө', '/P/u' => 'П', '/p/u' => 'п',
			'/Q/u' => 'Қ', '/q/u' => 'қ', '/R/u' => 'Р', '/r/u' => 'р',
			'/S/u' => 'С', '/s/u' => 'с', '/Ş/u' => 'Ш', '/ş/u' => 'ш',
			'/T/u' => 'Т', '/t/u' => 'т', '/U/u' => 'Ұ', '/u/u' => 'ұ',
			'/Ü/u' => 'Ү', '/ü/u' => 'ү', '/V/u' => 'В', '/v/u' => 'в',
			'/W/u' => 'У', '/w/u' => 'у', '/Ý/u' => 'Й', '/ý/u' => 'й',
			'/X/u' => 'Х', '/x/u' => 'х', '/Z/u' => 'З', '/z/u' => 'з',
		);

		$this->mCyLa2Arab = array(
			## Cyrillic -> Arabic
			'/\№/u' => 'نٶ.',
			'/([АӘЕЁИОӨҰҮЭЮЯЪЬ])е/ui' => '$1يە',
			'/а/ui' => 'ا', '/ә/ui' => 'ٵ', '/б/ui' => 'ب', '/в/ui' => 'ۆ',
			'/г/ui' => 'گ', '/ғ/ui' => 'ع', '/д/ui' => 'د', '/[еэ]/ui' => 'ە',
			'/ё/ui' => 'يو', '/ж/ui' => 'ج', '/з/ui' => 'ز', '/и/ui' => 'ي',
			'/й/ui' => 'ي', '/к/ui' => 'ك', '/қ/ui' => 'ق', '/л/ui' => 'ل',
			'/м/ui' => 'م', '/н/ui' => 'ن', '/ң/ui' => 'ڭ', '/о/ui' => 'و',
			'/ө/ui' => 'ٶ', '/п/ui' => 'پ', '/р/ui' => 'ر', '/с/ui' => 'س',
			'/т/ui' => 'ت', '/у/ui' => 'ۋ', '/ұ/ui' => 'ۇ', '/ү/ui' => 'ٷ',
			'/ф/ui' => 'ف', '/х/ui' => 'ح', '/һ/ui' => 'ھ', '/ц/ui' => 'تس',
			'/ч/ui' => 'چ', '/ш/ui' => 'ش', '/щ/ui' => 'شش', '/[ъь]/ui' => '',
			'/ы/ui' => 'ى', '/і/ui' => 'ٸ', '/ю/ui' => 'يۋ', '/я/ui' => 'يا',

			## Latin -> Arabic // commented for now...
			/*'/No\./u' => 'نٶ.',
			'/a/ui' => 'ا',  '/ä/ui' => 'ٵ',  '/b/ui' => 'ب', '/c/ui' => 'تس',
			'/ç/ui' => 'چ', '/d/ui' => 'د', '/[eé]/ui' => 'ە', '/f/ui' => 'ف', 
			'/g/ui' => 'گ',  '/ğ/ui' => 'ع', '/h/ui' => 'ھ', '/[ıI]/u' => 'ى', 
			'/[iİ]/u' => 'ٸ', '/ï/ui' => 'ي', '/j/ui' => 'ج', '/k/ui' => 'ك',
			'/l/ui' => 'ل', '/m/ui' => 'م', '/n/ui' => 'ن', '/ñ/ui' => 'ڭ',
			'/o/ui' => 'و', '/ö/ui' => 'ٶ', '/p/ui' => 'پ', '/q/ui' => 'ق',
			'/r/ui' => 'ر', '/s/ui' => 'س', '/ş/ui' => 'ش', '/t/ui' => 'ت',
			'/u/ui' => 'ۇ', '/ü/ui' => 'ٷ', '/v/ui' => 'ۆ', '/w/ui' => 'ۋ',
			'/x/ui' => 'ح', '/[yý]/ui' => 'ي', '/z/ui' => 'ز', '/[ʺʹ]/ui' => '',*/

			## Punctuation -> Arabic
			'/\?/' => '؟', # &#x061F;
			'/\,/' => '،', # &#x060C;
			'/\;/' => '؛' , # &#x061B;
			'/\%/' => '٪', # &#x066a;
			## Digits -> Arabic
			'/0/' => '۰',  # &#x06f0;
			'/1/' => '۱', # &#x06f1;
			'/2/' => '۲', # &#x06f2;
			'/3/' => '۳', # &#x06f3;
			'/4/' => '۴', # &#x06f4;
			'/5/' => '۵', # &#x06f5;
			'/6/' => '۶', # &#x06f6;
			'/7/' => '۷', # &#x06f7;
			'/8/' => '۸', # &#x06f8;
			'/9/' => '۹', # &#x06f9;
		);

	}

	/* rules should be defined as -{ekavian | iyekavian-} -or-
		-{code:text | code:text | ...}-
		update: delete all rule parsing because it's not used
				currently, and just produces a couple of bugs
	*/
	function parseManualRule($rule, $flags=array()) {
		if(in_array('T',$flags)){
			return parent::parseManualRule($rule, $flags);
		}

		// otherwise ignore all formatting
		foreach($this->mVariants as $v) {
			$carray[$v] = $rule;
		}
		
		return $carray;
	}

	// Do not convert content on talk pages
	function parserConvert( $text, &$parser ){
		if(is_object($parser->getTitle() ) && $parser->getTitle()->isTalkPage())
			$this->mDoContentConvert=false;
		else 
			$this->mDoContentConvert=true;

		return parent::parserConvert($text, $parser );
	}

	/*
	 * A function wrapper:
	 *  - if there is no selected variant, leave the link 
	 *    names as they were
	 *  - do not try to find variants for usernames
	 */
	function findVariantLink( &$link, &$nt ) {
		// check for user namespace
		if(is_object($nt)){
			$ns = $nt->getNamespace();
			if($ns==NS_USER || $ns==NS_USER_TALK)
				return;
		}

		$oldlink=$link;
		parent::findVariantLink($link,$nt);
		if($this->getPreferredVariant()==$this->mMainLanguageCode)
			$link=$oldlink;
	}

	/*
	 * An ugly function wrapper for parsing Image titles
	 * (to prevent image name conversion)
	 */
	function autoConvert($text, $toVariant=false) {
		global $wgTitle;
		if(is_object($wgTitle) && $wgTitle->getNameSpace()==NS_IMAGE){ 
			$imagename = $wgTitle->getNsText();
			if(preg_match("/^$imagename:/",$text)) return $text;
		}
		return parent::autoConvert($text,$toVariant);
	}

	/**
	 *  It translates text into variant
	 */
	function translate( $text, $toVariant ){
		global $wgContLanguageCode;
		$text = parent::translate( $text, $toVariant );

		$letters = '';
		switch( $toVariant ) {
			case 'kk-cyrl':
			case 'kk-kz':
				$letters = KK_L_UC . KK_L_LC . 'ʺʹ0123456789';
				$wgContLanguageCode = 'kk';
				break;
			case 'kk-latn':
			case 'kk-tr':
				$letters = KK_C_UC . KK_C_LC . '№0123456789';
				$wgContLanguageCode = 'kk-Latn';
				break;
			case 'kk-arab':
			case 'kk-cn':
				// $letters = KK_C_UC.KK_C_LC.KK_L_UC.KK_L_LC.'ʺʹ%№0123456789?,;';
				$letters = KK_C_UC . KK_C_LC . '%№0123456789?,;';
				$wgContLanguageCode = 'kk-Arab';
				break;
			default:
				$wgContLanguageCode = 'kk';
				return $text;
		}
		// disable conversion variables like $1, $2...
		$varsfix = '\$[0-9]';

		$matches = preg_split( '/' . $varsfix . '[^' . $letters . ']+/u', $text, -1, PREG_SPLIT_OFFSET_CAPTURE);
		$mstart = 0;
		foreach( $matches as $m ) {
			$ret .= substr( $text, $mstart, $m[1]-$mstart );
			$ret .= $this->regsConverter( $m[0], $toVariant );
			$mstart = $m[1] + strlen($m[0]);
		}
		return $ret;
	}

	function regsConverter( $text, $toVariant ) {	
		if ($text == '') return $text;

		$pat = array();
		$rep = array();
		switch( $toVariant ) {
			case 'kk-arab':
			case 'kk-cn':
				foreach( $this->mCyLa2Arab as $pat => $rep ) {
					$text = preg_replace( $pat, $rep, $text );
				}
				return $text;
				break;
			case 'kk-latn':
			case 'kk-tr':
				foreach( $this->mCyrl2Latn as $pat => $rep ) {
					$text = preg_replace( $pat, $rep, $text );
				}
				return $text;
				break;
			case 'kk-cyrl':
			case 'kk-cn':
				foreach( $this->mLatn2Cyrl as $pat => $rep ) {
					$text = preg_replace( $pat, $rep, $text );
				}
				return $text;
				break;
			default:
				return $text;
		}
	}

	/*
	 * We want our external link captions to be converted in variants,
	 * so we return the original text instead -{$text}-, except for URLs
	 */
	function markNoConversion( $text, $noParse=false ) {
		if( $noParse || preg_match( "/^https?:\/\/|ftp:\/\/|irc:\/\//", $text ) )
			return parent::markNoConversion( $text );
		return $text;
	}

	function convertCategoryKey( $key ) {
		return $this->autoConvert( $key, 'kk' );
	}

}

/* class that handles Cyrillic, Latin and Arabic scripts for Kazakh
   right now it only distinguish kk_cyrl, kk_latn, kk_arab and kk_kz, kk_tr, kk_cn.
*/
class LanguageKk extends LanguageKk_cyrl {

	function __construct() {
		global $wgHooks;
		parent::__construct();

		$variants = array( 'kk', 'kk-cyrl', 'kk-latn', 'kk-arab', 'kk-kz', 'kk-tr', 'kk-cn' );
		$variantfallbacks = array(
			'kk'		=> 'kk-kz',
			'kk-cyrl'	=> 'kk',
			'kk-latn'	=> 'kk',
			'kk-arab'	=> 'kk',
			'kk-kz'		=> 'kk-cyrl',
			'kk-tr'		=> 'kk-latn',
			'kk-cn'		=> 'kk-arab'
		);

		$this->mConverter = new KkConverter( $this, 'kk', $variants, $variantfallbacks );

		$wgHooks['ArticleSaveComplete'][] = $this->mConverter;
	}

	/**
	 * Work around for right-to-left direction support in kk-arab and kk-cn
	 *
	 * @return bool
	 */
	function isRTL() { 
		$variant = $this->getPreferredVariant();
		if ( $variant == 'kk-arab' || $variant == 'kk-cn' ) {
			return true;
		} else {
			return parent::isRTL();
		}
	}

	/*
	 * It fixes issue with ucfirst for transforming 'i' to 'İ'
	 * 
	 */
	function ucfirst ( $string ) {
		$variant = $this->getPreferredVariant();
		if ( ($variant == 'kk-latn' || $variant == 'kk-tr') && $string[0] == 'i' ) {
			$string = 'İ' . substr( $string, 1 );
		} else {
			$string = parent::ucfirst( $string );
		}
		return $string;
	}

	/*
	 * It fixes issue with  lcfirst for transforming 'I' to 'ı'
	 * 
	 */
	function lcfirst ( $string ) {
		$variant = $this->getPreferredVariant();
		if ( ($variant == 'kk-latn' || $variant == 'kk-tr') && $string[0] == 'I' ) {
			$string = 'ı' . substr( $string, 1 );
		} else {
			$string = parent::lcfirst( $string );
		}
		return $string;
	}

	function convertGrammar( $word, $case ) {
		$fname="LanguageKk::convertGrammar";
		wfProfileIn( $fname );

		$variant = $this->getPreferredVariant();
		switch ( $variant ) {
			case 'kk-arab':
			case 'kk-cn':
				$word = parent::convertGrammar( $word, $case, $variant = 'kk-arab' );
				break;
			case 'kk-latn':
			case 'kk-tr':
				$word = parent::convertGrammar( $word, $case, $variant = 'kk-latn' );
				break;
			case 'kk-cyrl':
			case 'kk-kz':
			case 'kk':
			default:
				$word = parent::convertGrammar( $word, $case, $variant = 'kk-cyrl' );
		}

		wfProfileOut( $fname );
		return $word;
	}

}
