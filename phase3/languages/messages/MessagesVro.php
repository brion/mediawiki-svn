<?php
/** V�ro (V�ro)
 *
 * @ingroup Language
 * @file
 *
 * @author Niklas Laxstr�m
 * @author Sulev Iva (V�rok)
 * @author V�rok
 */

$fallback = 'et';

$namespaceNames = array(
	NS_MEDIA            => 'Meedi�',
	NS_SPECIAL          => 'Tallituslehek�lg',
	NS_TALK             => 'Arotus',
	NS_USER             => 'Pruukja',
	NS_USER_TALK        => 'Pruukja_arotus',
	NS_PROJECT_TALK     => '$1_arotus',
	NS_FILE             => 'Pilt',
	NS_FILE_TALK        => 'Pildi_arotus',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_arotus',
	NS_TEMPLATE         => 'N��d�s',
	NS_TEMPLATE_TALK    => 'N��d�se_arotus',
	NS_HELP             => 'Oppus',
	NS_HELP_TALK        => 'Oppus�_arotus',
	NS_CATEGORY         => 'Kat�gooria',
	NS_CATEGORY_TALK    => 'Kat�gooria_arotus'
);


$magicWords = array(
	'redirect'            => array( "0", "#redirect", "#saadaq" ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Lingiq ala t�mmadaq',
'tog-highlightbroken'         => 'Parandaq vigads�q lingiq <a href="" class="new">nii</a> (vai nii: <a href="" class="internal">?</a>)',
'tog-justify'                 => 'L�iguveereq sirg�s',
'tog-hideminor'               => 'K�kiq per�m�idsin muutmiisin �rq v�ikuq parandus�q',
'tog-extendwatchlist'         => 'N��t�q perr�kaemisnimekir�n k�iki muutuisi',
'tog-usenewrc'                => 'Laend�duq per�m�dseq muutmis�q (ol�-i k�igin v�rgokaejin)',
'tog-numberheadings'          => 'P��lkirjo automaatnumm�rdus',
'tog-showtoolbar'             => 'N��t�q toim�ndus� riistakasti',
'tog-editondblclick'          => 'Artiklid� toim�ndamin� top�ltkl�psu p��le (JavaScript)',
'tog-editsection'             => 'Lupaq l�ik� toim�ndaq [toim�ndaq]-link�ga',
'tog-editsectiononrightclick' => 'Lupaq l�ik� toim�ndaq h��poolids� kl�psutus�ga <br /> l�igu p��lkir� p��l (JavaScript)',
'tog-showtoc'                 => 'N��t�q sisuk�rda (rohk�mb ku kolm� vaih�p��lkir�ga lehile)',
'tog-rememberpassword'        => 'Salas�na miildej�tmine tul�vaidsis k�rros',
'tog-editwidth'               => 'T��slakjus�ga toim�nduskast',
'tog-watchcreations'          => 'Pan�q mu luuduq leheq mu perr�kaemisnimekirj�',
'tog-watchdefault'            => 'Kaeq vahtsid� ja muud�tuid� artiklid� perr�',
'tog-watchmoves'              => 'Pan�q mu �mbren�st�duq lehek�leq mu perr�kaemisnimekirj�',
'tog-watchdeletion'           => 'Pan�q mu kistut�duq lehek�leq mu perr�kaemisnimekirj�',
'tog-minordefault'            => 'M�rgiq k�ik parandus�q vaikimiisi v�ikeisis paranduisis',
'tog-previewontop'            => 'N��t�q proovikaehust inne, mitte per�n toim�nduskasti',
'tog-previewonfirst'          => 'N��t�q edim�dse toim�ndus� aigo proovikaehust',
'tog-nocache'                 => 'P�stku-i lehek�lgi vaih�m�llo',
'tog-enotifwatchlistpages'    => 'Saadaq mull� e-kiri, ku muq perr�kaetavat lehte muud�tas',
'tog-enotifusertalkpages'     => 'Saadaq mull� e-kiri, ku mu arotuslehte muud�tas',
'tog-enotifminoredits'        => 'Saadaq mull� e-kiri ka v�ikeisi muutmiisi kotsil�',
'tog-enotifrevealaddr'        => 'N��t�q mu e-postiaadr�ssit t�isil� saad�tuin teed�ssin',
'tog-shownumberswatching'     => "N��t�q, ku pall'o pruukjit taa lehe perr� kaes",
'tog-fancysig'                => 'Pruugiq lihtsit allkirjo (ilma lingeld� pruukjalehe p��le)',
'tog-externaleditor'          => "Pruugiq vaikimiisi v�list tekstitoim�ndajat (�nn� as'atundjil�, n�ud suq puutri �mbres��dmist)",
'tog-externaldiff'            => "Pruugiq vaikimiisi v�list v�rr�lusprogrammi (�nn� as'atundjil�, n�ud su puutri �mbres��dmist)",
'tog-showjumplinks'           => 'Pan�q lehe algust� kip�qlingiq',
'tog-uselivepreview'          => 'Pruugiq kip�kaehust (JavaScript) (proomi)',
'tog-forceeditsummary'        => 'Annaq teed�q, ku ol�-i kirot�t kokkov�t�t',
'tog-watchlisthideown'        => 'N��d�ku-i perr�kaemisnimekir�n mu hind� toim�nduisi',
'tog-watchlisthidebots'       => 'N��d�ku-i perr�kaemisnimekir�n robotid� toim�nduisi',
'tog-watchlisthideminor'      => 'N��d�ku-i perr�kaemisnimekir�n v�ikeisi muutmiisi',
'tog-watchlisthideliu'        => 'K�kiq perr�kaemisnimekir�n �rq nimega sissel�nn�isi pruukjid� toim�ndus�q',
'tog-watchlisthideanons'      => 'K�kiq perr�kaemisnimekir�n �rq nimeld� pruukjid� toim�ndus�q',
'tog-nolangconversion'        => 'J�t�q �rq variant� v�rr�lus',
'tog-ccmeonemails'            => "Saadaq mull� kopiq e-kir'ost, mi� ma saada t�isil� pruukjil�",
'tog-diffonly'                => 'N��d�ku-i lahkominekide lehe all lehe t��t sissu',
'tog-showhiddencats'          => 'N��t�q k�kit�id kat�goorijit',
'tog-norollbackdiff'          => 'P��lt tagasiv�tmist n��d�ku-i lahkominekiid',

'underline-always'  => 'K�g�',
'underline-never'   => 'Ei kunagi',
'underline-default' => 'V�rgokaeja perr�',

# Dates
'sunday'        => 'p�h�p�iv',
'monday'        => 'iisp�iv',
'tuesday'       => 't��s�p�iv',
'wednesday'     => 'kolmap�iv',
'thursday'      => 'nelap�iv',
'friday'        => 'riidi',
'saturday'      => 'puulp�iv',
'sun'           => 'P�',
'mon'           => 'I',
'tue'           => 'T',
'wed'           => 'K',
'thu'           => 'N',
'fri'           => 'R',
'sat'           => 'Pu',
'january'       => 'vahts�aastakuu',
'february'      => 'radokuu',
'march'         => 'urb�kuu',
'april'         => 'mahlakuu',
'may_long'      => 'lehekuu',
'june'          => 'piim�kuu',
'july'          => 'hainakuu',
'august'        => 'p�imukuu',
'september'     => 's�k�skuu',
'october'       => 'rehekuu',
'november'      => 'm�rtekuu',
'december'      => 'joulukuu',
'january-gen'   => 'vahts�aastakuu',
'february-gen'  => 'radokuu',
'march-gen'     => 'urb�kuu',
'april-gen'     => 'mahlakuu',
'may-gen'       => 'lehekuu',
'june-gen'      => 'piim�kuu',
'july-gen'      => 'hainakuu',
'august-gen'    => 'p�imukuu',
'september-gen' => 's�k�skuu',
'october-gen'   => 'rehekuu',
'november-gen'  => 'm�rtekuu',
'december-gen'  => 'joulukuu',
'jan'           => 'vahts',
'feb'           => 'radok',
'mar'           => 'urb�k',
'apr'           => 'mahlak',
'may'           => 'lehek',
'jun'           => 'piim�k',
'jul'           => 'hainak',
'aug'           => 'p�imuk',
'sep'           => 's�k�sk',
'oct'           => 'rehek',
'nov'           => 'm�rtek',
'dec'           => 'jouluk',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Kat�gooria|Kat�gooriaq}}',
'category_header'                => 'Kat�gooria "$1" artikliq',
'subcategories'                  => 'Allkat�gooriaq',
'category-media-header'          => 'Kir�kotus kat�goorian "$1"',
'category-empty'                 => "''Seon kat�goorian ol�-i parhilla artikliid ega teed�st�id.''",
'hidden-categories'              => '{{PLURAL:$1|K�kit kat�gooria|K�kid�q kat�gooriaq}}',
'hidden-category-category'       => 'K�kid�q kat�gooriaq', # Name of the category where hidden categories will be listed
'category-subcat-count'          => '{{PLURAL:$2|Seol kat�goorial om �nn� j�rgm�ne allkat�gooria.|Seol kat�goorial  {{PLURAL:$1|om j�rgm�ne allkat�gooria|ommaq j�rgm�dsed $1 allkat�gooriat}} (kokko $2).}}',
'category-subcat-count-limited'  => 'Seol kat�goorial {{PLURAL:$1|om j�rgm�ne allkat�gooria|ommaq j�rgm�dsed $1 allkat�gooriaq}}.',
'category-article-count'         => '{{PLURAL:$2|Seon kat�goorian om �nn� j�rgm�ne lehek�lg.|Seon kat�goorian {{PLURAL:$1|om j�rgm�ne lehek�lg|ommaq j�rgm�dseq $1 lehek�lge}} (kokko $2).}}',
'category-article-count-limited' => 'Seon kat�goorian {{PLURAL:$1|om j�rgm�ne lehek�lg|ommaq j�rgm�dseq $1 lehek�lge}}.',
'category-file-count'            => '{{PLURAL:$2|Seon kat�goorian om �nn� j�rgm�ne teed�st�.|{{PLURAL:$1|J�rgm�ne teed�st� om |J�rgm�dseq $1 teed�st�t ommaq}} seon kat�goorian (kokko $2).}}',
'category-file-count-limited'    => '{{PLURAL:$1|J�rgm�ne teed�st� om|J�rgm�dseq $1 teed�st�t}} ommaq seon kat�goorian.',
'listingcontinuesabbrev'         => 'l�tt edesi',

'mainpagetext'      => 'Wiki tarkvara paika s�et.',
'mainpagedocfooter' => 'Vikitarkvara pruukmis� kotsil� loeq mano:
* [http://meta.wikimedia.org/wiki/MediaWiki_User%27s_Guide MediaWiki pruukmisoppus (ingl�se keelen)].
* [http://www.mediawiki.org/wiki/Manual:Configuration_settings S��dmiisi oppus (ingl�se keelen)]
* [http://www.mediawiki.org/wiki/Manual:FAQ MediaWiki k�g� k�s�t�mb�q k�s�miseq (ingl�se keelen)]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce E-postilist, minka andas teed�q MediaWiki vahtsist kuj�st].',

'about'          => 'P��teed�s',
'article'        => 'Sisu',
'newwindow'      => '(tul� vallal� vahts�n akn�n)',
'cancel'         => 'J�t�q katski',
'qbfind'         => 'Otsiq',
'qbbrowse'       => 'Kaeq',
'qbedit'         => 'Toim�ndaq',
'qbpageoptions'  => 'Lehek�le s��dmine',
'qbpageinfo'     => 'Lehek�le teed�s',
'qbmyoptions'    => 'Mu s��dmiseq',
'qbspecialpages' => 'Tallituslehek�leq',
'moredotdotdot'  => 'Viil...',
'mypage'         => 'Muq lehek�lg',
'mytalk'         => 'Mu arotus',
'anontalk'       => 'Seo puutri v�rgoaadr�si arotus',
'navigation'     => 'Juhtmin�',
'and'            => '&#32;ja',

# Metadata in edit box
'metadata_help' => 'Metateed�s:',

'errorpagetitle'    => 'Viga',
'returnto'          => 'Tagasi lehe manoq $1.',
'tagline'           => 'L�teq: {{SITENAME}}',
'help'              => 'Abi',
'search'            => 'Otsiq',
'searchbutton'      => 'Otsiq',
'go'                => 'Mineq',
'searcharticle'     => 'Mineq',
'history'           => 'Artikli aolugu',
'history_short'     => 'Aolugu',
'updatedmarker'     => 'toim�nd�t p��lt mu per�m�st kaemist',
'info_short'        => 'Teed�s',
'printableversion'  => 'Tr�k�kujo',
'permalink'         => 'P�s�link',
'print'             => 'Tr�k�q v�ll�',
'edit'              => 'Toim�ndaq',
'create'            => 'Luuq leht',
'editthispage'      => 'Toim�ndaq seod artiklit',
'create-this-page'  => 'Luuq seo leht',
'delete'            => 'Kistudaq �rq',
'deletethispage'    => 'Kistudaq seo artikli �rq',
'undelete_short'    => 'V�taq tagasi {{PLURAL:$1|�ts muutmin�|$1 muutmist}}',
'protect'           => 'Kaidsaq',
'protect_change'    => 'muudaq',
'protectthispage'   => 'Kaidsaq seod artiklit',
'unprotect'         => 'Kaitsku-i',
'unprotectthispage' => 'Kaitsku-i seod artiklit',
'newpage'           => 'Vahts�n� artikli',
'talkpage'          => 'Seo artikli arotus',
'talkpagelinktext'  => 'Arotus',
'specialpage'       => 'Tallituslehek�lg',
'personaltools'     => 'Er�t��riistaq',
'postcomment'       => 'Pan�q komm�ntaar',
'articlepage'       => 'Artiklilehek�lg',
'talk'              => 'Arotus',
'views'             => 'Kaemis�q',
'toolbox'           => 'T��riistakast',
'userpage'          => 'Pruukjalehek�lg',
'projectpage'       => 'Tallituslehek�lg',
'imagepage'         => 'N��t�q pildilehek�lge',
'mediawikipage'     => 'N��t�q s�nomilehek�lge',
'templatepage'      => 'N��t�q n��d�selehek�lge',
'viewhelppage'      => 'N��t�q abilehek�lge',
'categorypage'      => 'N��t�q kat�goorialehek�lge',
'viewtalkpage'      => 'Arotuslehek�lg',
'otherlanguages'    => 'T�isin keelin',
'redirectedfrom'    => '(�mbre saad�t artiklist $1)',
'redirectpagesub'   => '�mbresaatmislehek�lg',
'lastmodifiedat'    => 'Seo leht om viim�te muud�t $2, $1.', # $1 date, $2 time
'viewcount'         => 'Seo lehe p��l om k��t $1 {{PLURAL:$1|k�rd|k�rda}}.',
'protectedpage'     => 'Kaids�t artikli',
'jumpto'            => 'Mineq �le:',
'jumptonavigation'  => 'juhtmin�',
'jumptosearch'      => 'otsmin�',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}} tutvustus',
'aboutpage'            => 'Project:P��teed�s',
'copyright'            => "Teksti v�i vabalt pruukiq $1'i perr�.",
'copyrightpagename'    => '{{SITENAME}} ja tegij��igus�q',
'copyrightpage'        => '{{ns:project}}:Tegij��igus�q',
'currentevents'        => 'Mi� s�nn�s',
'currentevents-url'    => 'Project:Mi� s�nn�s',
'disclaimers'          => 'Hoiatuisi',
'disclaimerpage'       => 'Project:�ledseq hoiatus�q',
'edithelp'             => 'Toim�ndamisoppus',
'edithelppage'         => 'Help:Kuis_artiklit_toim�ndaq',
'faq'                  => 'Sag�h�he k�s�d�q k�s�miseq',
'faqpage'              => 'Project:KKK',
'helppage'             => 'Help:Oppus',
'mainpage'             => 'P��leht',
'mainpage-description' => 'P��leht',
'policy-url'           => 'Project:S��d�seq',
'portal'               => 'Arotus�tar�',
'portal-url'           => 'Project:Arotus�tar�',
'privacy'              => 'Er�teed�se kaitsmin�',
'privacypage'          => 'Project:Er�teed�se kaitsmin�',

'badaccess'        => 'Lubamalda tallitus',
'badaccess-group0' => 'Sul ol�-i �igust seod tallitust tet�q.',
'badaccess-groups' => 'Seod tallitust saavaq tet�q �nn� {{PLURAL:$2|r�hm�|r�hmi}} $1 liikm�q.',

'versionrequired'     => 'Om vaia MediaWiki kujjo $1',
'versionrequiredtext' => 'Seo lehe kaemis�s om vaia MediaWiki kujjo $1. Kaeq [[Special:Version|kujoteed�st]].',

'ok'                      => 'H�� k�lh',
'retrievedfrom'           => 'V�ll� otsit teed�skogost "$1"',
'youhavenewmessages'      => 'Sul om $1 ($2).',
'newmessageslink'         => 'vahtsit s�nomiid',
'newmessagesdifflink'     => 'per�m�ne muutmin�',
'youhavenewmessagesmulti' => 'Sull� om vahtsit s�nomit lehe p��l $1',
'editsection'             => 'toim�ndaq',
'editold'                 => 'toim�ndaq',
'viewsourceold'           => 'n��t�q l�ttekuudi',
'editlink'                => 'toim�ndaq',
'viewsourcelink'          => 'kaeq l�tteteksti',
'editsectionhint'         => 'Toim�ndaq l�iku: $1',
'toc'                     => 'Sisuk�rd',
'showtoc'                 => 'n��t�q',
'hidetoc'                 => 'k�kiq',
'thisisdeleted'           => 'Kaeq vai tiiq tagasi $1?',
'viewdeleted'             => 'N��d�d�q $1?',
'restorelink'             => '{{PLURAL:$1|�ts kistut�t muutmin�|$1 kustut�dut muutmist}}',
'feedlinks'               => 'Sisseandmin�:',
'feed-invalid'            => 'Vigan� sisseandmin�.',
'feed-unavailable'        => 'V�rgos��tit ol�-i saiaq',
'site-rss-feed'           => '$1-RSS-s��d�s',
'site-atom-feed'          => '$1-Atom-s��d�s',
'page-rss-feed'           => '$1 (RSS-s��d�s)',
'page-atom-feed'          => '$1 (Atom-s��d�s)',
'red-link-title'          => '$1 (ol�-i viil kirot�t)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Artikli',
'nstab-user'      => 'Pruukjalehek�lg',
'nstab-media'     => 'Meedi�',
'nstab-special'   => 'Tallituslehek�lg',
'nstab-project'   => 'Nimileht',
'nstab-image'     => 'Pilt',
'nstab-mediawiki' => 'Teed�s',
'nstab-template'  => 'N��d�s',
'nstab-help'      => 'Oppus',
'nstab-category'  => 'Kat�gooria',

# Main script and global functions
'nosuchaction'      => 'S��nest tallitust ol�-i.',
'nosuchactiontext'  => 'Viki tunn�-i taa aadr�si manoq k��v�t tallitust.',
'nosuchspecialpage' => 'S��nest tallituslehek�lge ol�-i.',
'nospecialpagetext' => 'Viki tunn�-i s��nest tallituslehek�lge.',

# General errors
'error'                => 'Viga',
'databaseerror'        => 'Teed�skogo viga',
'dberrortext'          => 'Teed�skogo perr�k�s�misen oll\' s�ntaksiviga.
Perr�k�s�mine oll\' vigan� vai om tarkvaran viga.
Viim�ne teed�skogo perr�k�s�mine oll\':
<blockquote><tt>$1</tt></blockquote>
ja tuu tetti funktsioonist "<tt>$2</tt>".
MySQL and\' via "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Teed�skogo perr�k�s�misen oll\' s�ntaksiviga.
Viim�ne teed�skogo perr�k�s�mine oll\':
"$1"
ja tuu tetti funktsioonist "$2".
MySQL and\' via "$3: $4".',
'noconnect'            => "Kah'os om vikil tekniline h�d�. Teed�skogoserverit saa-i k�tte.<br />
$1",
'nodb'                 => 'Saa es teed�skoko $1 k�tte',
'cachederror'          => 'Taa lehek�lg om puhv�rd�t kopi ja ei pruugiq tuuper�st ollaq k�g� v�rskimb.',
'laggedslavemode'      => 'Hoiatus: Taa lehe p��l pruugi-i ollaq per�m�idsi muutmiisi.',
'readonly'             => 'Teed�skogo kirotuskaits� all',
'enterlockreason'      => 'Kirodaq lukkupandmis� p�hjus ja ligikaudn� vallal�v�tmis� aig',
'readonlytext'         => "Teed�skogo om kirotuskaits� all, arvadaq niikavvas ku ted� parand�das.
K�rraldaja, ki� taa kirotuskaits� alaq v�tt', and' s��ntse selg�t�se:
<p>$1",
'missing-article'      => 'Lehe sissu l�vvet�-s teed�skogost: $1 $2.

Hariligult tul� taa vanasl�nn�st v�rr�lus- vai aoluulehelingist, mi� n��t�s �rqkistut�du lehe p��le.

Ku ol�-i tegemist �rqkistut�du lehega, ol�t v�i-ollaq l��dn�q programmivia.
Annaq taa lehe aadr�s viki [[Special:ListUsers/sysop|�lev�npid�j�le]].',
'missingarticle-rev'   => '(kujo#: $1)',
'missingarticle-diff'  => '(lahkominek: $1, $2)',
'readonly_lag'         => 'Teed�skogo panti automaats�he kinniq, et k�ik teed�skogoserveriq saasiq k�tte k�ik v�rskiq muutmis�q',
'internalerror'        => 'Sisem�ne viga',
'internalerror_info'   => 'Viga: $1',
'filecopyerror'        => 'Es saaq teed�st�t "$1" teed�st�s "$2" kopidaq.',
'filerenameerror'      => 'Es saaq teed�st�t "$1" teed�st�s "$2" �mbre nimet�q.',
'filedeleteerror'      => 'Teed�st�t nimega "$1" saa-i �rq kistutaq.',
'directorycreateerror' => 'Saa-s luvvaq kausta "$1".',
'filenotfound'         => 'L�vv� es teed�st�t "$1".',
'fileexistserror'      => 'Saa-i kirotaq teed�st�he "$1": teed�st� om ol�man',
'unexpected'           => 'Uutmaldaq v��rt�s: "$1"="$2".',
'formerror'            => 'Viga: vormi saa es p�st�q',
'badarticleerror'      => 'Taad tallitust saa ei seo lehek�le p��l tet�q.',
'cannotdelete'         => "Seod lehek�lge vai pilti saa ei �rq kistutaq. (V�i-ollaq ki�ki t��n� jo kistut' taa �rq.)",
'badtitle'             => 'Vigan� p��lkiri',
'badtitletext'         => "K�s�t artiklip��lkiri oll' kas vigan�, t�hi vai sis
v�lssi n��d�t kiili- vai wikidevaih�lin� p��lkiri.",
'perfcached'           => 'J�rgm�ne teed�s om puhv�rd�t ja pruugi ei ollaq k�g� v�rskimb:',
'perfcachedts'         => 'J�rgm�ne teed�s om puhv�rd�t ja om viim�te muud�t $1.',
'querypage-no-updates' => 'Taad lehe teed�st parhilla v�rskis ei tet�q.',
'wrong_wfQuery_params' => 'V�lss suurus�q tallitus�l� wfQuery()<br />
Tallitus: $1<br />
Perr�k�s�mine: $2',
'viewsource'           => 'Kaeq l�tteteksti',
'viewsourcefor'        => 'lehele $1',
'actionthrottled'      => 'Tallitus� kib�hus piir�t',
'actionthrottledtext'  => "Taa tallitus� mitmit k�rdo tegemine om prahipandjid� per�st �rq keelet. Ol�t taad l�hk� ao seen pall'o hulga tenn�q. Prooviq veid�kese ao per�st vahts�st.",
'protectedpagetext'    => 'Taa lehek�lg om kirotuskaids�t.',
'viewsourcetext'       => 'V�it kaiaq ja kopidaq taa lehe l�ttekoodi:',
'protectedinterface'   => "Taa lehe p��l om tarkvara pruukjapalg� tekst. Leht om lukku pant, et taad saasi-i �rq ts'urkiq.",
'editinginterface'     => "'''Hoiatus:''' Sa toim�ndat tarkvara pruukjapalg� tekstiga lehte. Ku siin mid� muudat, m�otas tuu pruukjapal�t. �mbrepandmis�s tasos pruukiq MediaWiki �mbrepandmis� t��riista [http://translatewiki.net/wiki/Main_Page?setlang=fiu-vro Betawiki].",
'sqlhidden'            => '(SQL-perr�k�s�mine k�kit)',
'cascadeprotected'     => 'Taa leht om kirotuskaids�t, selle et taa {{PLURAL:$1|kuulus alanol�vid� kaids�tuid� lehti hulka|kuulus alanol�vid� kaids�tuid� lehti hulka}}:',
'namespaceprotected'   => "Sul ol�-i lubat toim�ndaq nimeruumi '''$1''' lehti.",
'customcssjsprotected' => 'Sul ol�-i lubat toim�ndaq taad lehte, selle et tan om seen t��s� pruukja s��dmiisi.',
'ns-specialprotected'  => 'Tallituslehek�lgi ei saaq toim�ndaq.',
'titleprotected'       => "Pruukja [[User:$1|$1]] om s��ntse nimega lehe luumis� �rq kiildn�q p�hjus�ga: ''$2''.",

# Virus scanner
'virus-badscanner'     => 'Viga s��dmiisin: tundmalda viirus�kaids�q: <i>$1</i>',
'virus-scanfailed'     => 'viirus�otsmin� l��-s k�rda (viakuud $1)',
'virus-unknownscanner' => 'tundmalda viirus�kaids�q:',

# Login and logout pages
'logouttitle'                => 'Nime alt v�ll�minek',
'logouttext'                 => '<strong>Ol�t nime alt v�ll� l�nn�q.</strong>

V�it {{SITENAME}}t ilma nimeld� edesi toim�ndaq vai [[Special:UserLogin|vahts�st sama vai t��s� nimega sisse minn�q]]. 
T�helepandmis�s: niikavva, ku sa ol�-i t�h�s tenn�q uma v�rgokaeja vaih�m�llo, v�ivaq m�n�q lehek�leq iks viil n��d�d�q, nigu sa ol�si nimega seen.',
'welcomecreation'            => '<h2>Tereq, $1!</h2><p>Su konto om valmis. V�it taa hind� perr� sisse s��d�q.',
'loginpagetitle'             => 'Nimega sisseminek',
'yourname'                   => 'Pruukjanimi',
'yourpassword'               => 'Salas�na',
'yourpasswordagain'          => 'Kirodaq viilk�rd salas�na',
'remembermypassword'         => 'Salas�na miildej�tmine j�rgm�idsis k�rros',
'yourdomainname'             => 'V�rgonimi',
'externaldberror'            => 'V�litsen kimm�stegemisteed�skogon om viga vai ol�-i sul lubat umma pruukjanimme muutaq.',
'login'                      => 'Nimega sisseminek',
'nav-login-createaccount'    => 'Mineq nimega sisse',
'loginprompt'                => '{{SITENAME}} lask nimega sisse �nn� sis, ku lubatas valmistuisi.',
'userlogin'                  => 'Mineq nimega sisse',
'logout'                     => 'Nime alt v�ll�minek',
'userlogout'                 => 'Mineq nime alt v�ll�',
'notloggedin'                => 'Ol�-i nimega sisse mint',
'nologin'                    => 'Sul ol�-i viil pruukjanimme? $1.',
'nologinlink'                => 'Tiiq hind�le pruukjanimi',
'createaccount'              => 'Tiiq pruukjanimi �rq',
'gotaccount'                 => 'Ku sul jo om uma pruukjanimi, sis $1.',
'gotaccountlink'             => 'v�it nimega sisse minn�q',
'createaccountmail'          => 'e-postiga',
'badretype'                  => 'Kirot�duq salas�naq ei klapiq kokko.',
'userexists'                 => 'Taad pruukjanimme jo pruugitas. 
Valiq t��n� nimi.',
'youremail'                  => 'Suq e-posti aadr�s *',
'username'                   => 'Pruukjanimi:',
'uid'                        => 'Pruukjanumm�r:',
'prefs-memberingroups'       => 'Kuulus {{PLURAL:$1|r�hm�|r�hmihe}}:',
'yourrealname'               => 'Peris nimi *',
'yourlanguage'               => 'Pruukjapalg� kiil:',
'yourvariant'                => 'Keelevariant:',
'yournick'                   => 'Alakirotus',
'badsig'                     => 'Seo alakirotus ol�-i masva.',
'badsiglength'               => "Alakirotus om pall'o pikk � tohe-i ollaq rohk�mb ku $1 {{PLURAL:$1|m�rk|m�rki}}.",
'email'                      => 'e-posti aadr�s',
'prefs-help-realname'        => "* <strong>Peris nimi</strong> (pi�-i kirotama): ku taa teed�q annat, sis pruugitas taad pruukjanime as�m�l lehek�lgi tegijide nimekir'on.",
'loginerror'                 => 'Sisseminemise viga',
'prefs-help-email'           => 'E-postiaadr�ssit pi�-i kirotama, a taa lupa t�isil pruukjil sull� kirotaq ilma su aadr�ssit n�gem�ld�q. Taast om sis kah kassu, ku uma salas�na �rq johtut un�htama.',
'prefs-help-email-required'  => 'E-postiaadr�s pi�t ol�ma.',
'nocookiesnew'               => 'Pruukjakonto om valmis, a sa p�se-s sisse, selle et {{SITENAME}} tarvitas pruukjid� kimm�stegemises valmistuisi. Suq v�rgokaejan ommaq valmistus�q �rq keeled�q. S�eq valmistus�q lubatus ja mineq sis uma vahts� pruukjanime ja salas�naga sisse.',
'nocookieslogin'             => '{{SITENAME}} tarvitas pruukjid� kimm�stegemises valmistuisi. Suq v�rgokaejan ommaq valmistus�q keeled�q. S�eq valmistus�q lubatus ja prooviq vahts�st.',
'noname'                     => 'V�lssi kirot�t pruukjanimi.',
'loginsuccesstitle'          => "Sisseminek l�ts' k�rda",
'loginsuccess'               => 'Ol�t nimega sisse l�nn�q. Suq pruukjanimi om "$1".',
'nosuchuser'                 => '"$1" nimelist pruukjat ol�-i ol�man. 
Kaeq kir�pilt �le vai [[Special:UserLogin/signup|luuq vahts�n� pruukjanimi]].',
'nosuchusershort'            => '"<nowiki>$1</nowiki>" nimelist pruukjat ol�-i ol�man. Kas kirotit iks nime �ig�he?',
'nouserspecified'            => 'Ol�-i kirot�t pruukjanimme.',
'wrongpassword'              => 'Kirot�t v�lss salas�na. Prooviq vahts�st.',
'wrongpasswordempty'         => 'Salas�na tohe-i t�hi ollaq.',
'passwordtooshort'           => "Salas�na om vigan� vai pall'o l�hk�. Taan pi�t ol�ma v�h�mb�lt {{PLURAL:$1|1 m�rk|$1 m�rki}} ja taa tohe-i ollaq sama, mi� su pruukjanimi.",
'mailmypassword'             => 'Saadaq mull� e-postiga vahts�n� salas�na',
'passwordremindertitle'      => '{{SITENAME}} salas�na miildetul�tus',
'passwordremindertext'       => 'Ki�ki (arvadaq saq esiq, puutri v�rgonumm�r $1),
pall�l\' vahts�t sisseminegi salas�nna {{SITENAME}} ($4) jaos.
Pruukja "$2" salas�na om noq "$3". Ku ol�t nimega sisse l�nn�q, v�it taa aotlids� salas�na �rq muutaq.
Aotlin� salas�na l�tt vanas {{PLURAL:$5|�te p��v�|$5 p��v�}} per�st.

Ku taa pall�mis� om tenn�q ki� t��n� vai ku ol�t uma salas�na miilde tul�tanuq ja taha-i taad in�mb muutaq, 
sis teku-i seost s�nomist v�ll� ja pruugiq umma vanna salas�nna edesi.',
'noemail'                    => 'Kah\'os ol�-i meil pruukja "$1" e-postiaadr�ssit.',
'passwordsent'               => 'Vahts�n� salas�na om saad�t pruukja "$1" kirot�du e-postiaadr�si p��le. Ku ol�t salas�na k�tte saanuq, mineq nimega sisse.',
'blocked-mailpassword'       => 'Su v�rgonumbril� om pant p��le toim�ndamiskiild, mi� las�-i salas�nna miilde tul�taq.',
'eauthentsent'               => 'Sull� om saad�t kinn�t�skiri. Muid kirjo saad�ta-i inne, ku ol�t tenn�q nii, kuis kir�n opat ja kinn�t�n�q, et taa om suq e-postiaadr�s.',
'throttled-mailpassword'     => '{{PLURAL:$1|tunni|$1 tunni}} seen om saad�t salas�na miildetul�tus. S��ntsit miildetul�tuisi saad�tas �nn� {{PLURAL:$1|tunni|$1 tunni}} takast.',
'mailerror'                  => 'Kir� saatmis� viga: $1',
'acct_creation_throttle_hit' => 'Sa ol�t tenn�q jo {{PLURAL:$1|1 pruukjanime|$1 pruukjanimme}}. Rohk�mb ei saaq.',
'emailauthenticated'         => 'Su e-postiaadr�s kinn�tedi �rq $2 kell $3.',
'emailnotauthenticated'      => "Su e-postiaadr�ssit ol�-i viil kinn�tet. Alanol�vi as'on e-kirjo ei saad�taq.",
'noemailprefs'               => 'Ol�-i ant e-postiaadr�ssit.',
'emailconfirmlink'           => 'Kinn�d�q uma e-postiaadr�s.',
'invalidemailaddress'        => 'Ol�-i k�rralik e-postiaadr�s, taa om v�lss moodun. 
Kirodaq �ig� e-postiaadr�s vai j�t�q rivi r�h�s.',
'accountcreated'             => 'Pruukjanimi luudi',
'accountcreatedtext'         => 'Luudi pruukjanimi pruukjal� $1.',
'createaccount-title'        => 'Vahts� {{SITENAME}} pruukjanime luumin�',
'createaccount-text'         => 'Ki�ki om loonuq pruukjanime $2 lehist�le {{SITENAME}} ($4). Pruukjanime "$2" salas�na om "$3".
Mineq nimega sisse ja vaihtaq salas�na �rq.

Ku taa pruukjanimi om luud kog�maldaq, ol�-i sul vaia taast s�nomist v�ll� tet�q.',
'login-throttled'            => "Ol�t uma nime ala minekis pruuvnuq pall'o hulga esiqsugutsit salas�nno.
Oodaq v�h� inne ku proovit vahts�st.",
'loginlanguagelabel'         => 'Kiil: $1',

# Password reset dialog
'resetpass'                 => 'Muudaq salas�nna',
'resetpass_announce'        => 'Sa l�tsit sisse e-postiga saad�du aotlids� koodiga. K�rdapiten sisseminekis tul� sul siin tet�q hind�le  vahts�n� salas�na:',
'resetpass_text'            => '<!-- Kirodaq sii�q -->',
'resetpass_header'          => 'Muudaq pruukjanime salas�nna',
'oldpassword'               => 'Vana salas�na',
'newpassword'               => 'Vahts�n� salas�na',
'retypenew'                 => 'Kirodaq viilk�rd vahts�n� salas�na',
'resetpass_submit'          => 'Kirodaq salas�na ja mineq nimega sisse',
'resetpass_success'         => 'Salas�na vaihtamin� l�ts k�rda.',
'resetpass_bad_temporary'   => 'Taa aotlin� salas�na k�lba-i. Sa ol�t jo saanuq vahts� salas�na vai k�s�n�q vahts� aotlids� salas�na.',
'resetpass_forbidden'       => 'Salas�nno saa-i muutaq.',
'resetpass-no-info'         => 'Taa lehe p��le p�semises pi�t ol�ma nimega sisse l�nn�q.',
'resetpass-submit-loggedin' => 'Muudaq salas�nna',
'resetpass-wrong-oldpass'   => 'Vigan� aotlin� vai parhillan� salas�na. 
V�i-ollaq ol�t jo uma salas�na �rq muutnuq vai k�s�n�q vahts� aotlids� salas�na.',
'resetpass-temp-password'   => 'Aotlin� salas�na:',

# Edit page toolbar
'bold_sample'     => 'Paks kiri',
'bold_tip'        => 'Paks kiri',
'italic_sample'   => 'Liuhkakiri',
'italic_tip'      => 'Liuhkakiri',
'link_sample'     => 'Lingit�v p��lkiri',
'link_tip'        => 'Siselink',
'extlink_sample'  => 'http://www.example.com Lingi nimi',
'extlink_tip'     => 'V�lislink (un�htagu-i ette pandaq http://)',
'headline_sample' => 'P��lkiri',
'headline_tip'    => 'T��s� tas�m� p��lkiri',
'math_sample'     => 'Kirodaq vall�m sii�q',
'math_tip'        => 'Mat�maatigatekst (LaTeX)',
'nowiki_sample'   => 'Kirodaq kujondamalda tekst',
'nowiki_tip'      => 'Tunnistagu-i viki kujondust',
'image_sample'    => 'N��d�s.jpg',
'image_tip'       => 'P�stet pilt',
'media_sample'    => 'N��d�s.mp3',
'media_tip'       => 'Meedi�teed�st�',
'sig_tip'         => 'Suq allkiri �ten aotempliga',
'hr_tip'          => 'Horisontaaljuun',

# Edit pages
'summary'                   => 'Kokkov�t�q:',
'subject'                   => 'P��lkiri:',
'minoredit'                 => 'Taa om v�iku parandus',
'watchthis'                 => 'Kaeq taa lehe perr�',
'savearticle'               => 'P�st�q',
'preview'                   => 'Proovikaehus',
'showpreview'               => 'N��t�q proovikaehust',
'showlivepreview'           => 'Kip�kaehus',
'showdiff'                  => 'N��t�q muutmiisi',
'anoneditwarning'           => "'''Hoiatus:''' sa ol�-i nimega sisse l�nn�q, seo lehe aolukku pandas su puutri aadr�s.",
'missingsummary'            => "'''Miildetul�tus:'''sa ol�-i kirotanuq uma toim�ndamis� kokkov�t�t. Ku kl�psahtat viil k�rra nuppi P�st�q, sis p�stet�s su toim�ndus ilma kokkov�tt�ldaq.",
'missingcommenttext'        => 'Ol�q h��, kirodaq kokkov�t�q.',
'missingcommentheader'      => 'Sa ol�-i andnuq umal� kokkov�tt�l� p��lkirj�. Ku kl�psahtat nuppi <em>P�st�q</em>, p�stet�s toim�ndus ilma p��lkir�ld�.',
'summary-preview'           => 'Kokkov�tt� kaemin�:',
'subject-preview'           => 'P��lkir� kaemin�:',
'blockedtitle'              => 'Pruukja om kinniq peet',
'blockedtext'               => "<big>'''Su pruukjanimi vai puutri v�rgoaadr�s om kinniq pant.'''</big>

Kinniqpandja om $1. 
Tim� p�hj�ndus om s��ne: ''$2''.

* Kinniqpandmis� algus: $8
* Kinniqpandmis� l�pp: $6
* Kinnipandja: $7

K�s�m�st saat arotaq $1 vai m�n� t��s� [[{{MediaWiki:Grouppage-sysop}}|k�rraldajaga]].
Pan�q t�hele, et sa saa-i taal� pruukjal� s�nomit saataq, ku sa ol�-i kirj� pandnuq umma [[Special:Preferences|s��dmislehe]] e-posti aadr�ssit.
Suq puutri v�rgoaadr�s om $3 ja kinnipandmistunnus om #$5. Pan�q naaq k�iki perr�k�s�miisi manoq, mid� tiit.",
'autoblockedtext'           => "Su puutri v�rgoaadr�s peeti automaats�he kinniq, selle et taad om tarvitanuq ki�ki pruukja, kink om kinniq pid�n�q $1.
Kinniqpid�mise p�hjus:

:''$2''

* Kinniqpid�mise algus: $8
* Kinniqpid�mise l�pp: $6
* Taheti kinniq pit�q: $7


Taa kinniqpid�mise kotsil� perr�k�s�mises ja taa arotamis�s v�it kirotaq k�rraldajal� $1 vai m�n�l�
[[{{MediaWiki:Grouppage-sysop}}|t��s�l� k�rraldajal�]].

Rehkend�q tuud, et sa saa-i t�isil� pruukjil� e-kirjo saataq, ku sa ol�-i ummi [[Special:Preferences|s��dmiisihe]] kirj� pandnuq suq hind� masvat e-postiaadr�ssit.

Suq puutri v�rgoaadr�s om parhilla $3 ja kinniqpid�mise tunnusnumm�r om #$5. Ol�q h��, kirodaq taa numm�r eg� perr�k�s�mise mano, mi� sa tiit.",
'blockednoreason'           => 'p�hjust ol�-i n��d�t',
'blockedoriginalsource'     => "Lehe '''$1''' l�ttekuud:",
'blockededitsource'         => "Su tett toim�ndus lehe '''$1''' p��l:",
'whitelistedittitle'        => 'Toim�ndamis�s pi�t nimega sisse minem�',
'whitelistedittext'         => 'Lehek�lgi toim�ndamis�s $1.',
'confirmedittitle'          => 'E-posti kinn�t�s',
'confirmedittext'           => 'Sa saa-i inne lehek�lgi toim�ndaq, ku ol�t kinn�t�n�q �rq uma e-postiaadr�si. Tuud saat tet�q uma [[Special:Preferences|s��dmislehe]] p��l.',
'nosuchsectiontitle'        => 'Ol�-i s��nest l�iku',
'nosuchsectiontext'         => 'Sa proov�q toim�ndaq l�iku, mid� ol�-i ol�man, a ku l�iku $1 ol�-i ol�man, sis ol�-i su toim�ndust kohe pandaq.',
'loginreqtitle'             => 'Pi�t nimega sisse minem�',
'loginreqlink'              => 'nimega sisse minem�',
'loginreqpagetext'          => 'T�isi lehek�lgi kaemis�s pi�t $1.',
'accmailtitle'              => 'Salas�na saad�t.',
'accmailtext'               => "Pruukja '$1' salasyna saad�ti aadr�si p��le $2.",
'newarticle'                => '(Vahts�n�)',
'newarticletext'            => "Taad lehek�lge ol�-i viil.
Lehek�le luumis�s nakkaq kirotama alanol�vahe kasti.
Ku sa johtuq sii�q kog�maldaq, sis kl�psaq v�rgokaeja '''Tagasi'''-nuppi.",
'anontalkpagetext'          => "---- ''Taa om arotusleht nimeld� pruukja kotsil�, ki� ol�-i loonuq pruukjanimme vai pruugi-i tuud. Tuuper�st tul� meil pruukja kimm�stegemises pruukiq tim� puutri v�rgoaadr�ssit. Taa aadr�s v�i ollaq mitm� pruukja p��le �tine. Ku ol�t nimeld� pruukja ja l�vv�t, et taa lehek�le p��le kirot�t jutt k�� suq kotsil�, sis ol�q h��, [[Special:UserLogin/signup|luuq konto]] vai [[Special:UserLogin|mineq nimega sisse]], et edespiten seg�h�isi �rq hoitaq.''",
'noarticletext'             => 'Seo leht om parlaq t�hi. V�it [[Special:Search/{{PAGENAME}}|otsiq seo lehe nimme]] t�isi lehti p��lt vai [{{fullurl:{{FULLPAGENAME}}|action=edit}} naataq seod lehte esiq kirotama].',
'userpage-userdoesnotexist' => 'Pruukjanimme "$1" ol�-i kirj� pant. Kaeq perr�, kas ol�t iks kimm�s, et tahat taad lehte toim�ndaq.',
'clearyourcache'            => "'''Pan�q t�hele:''' per�n p�stmist pi�t muutmiisi n�gemises uma v�rgokaeja vaih�m�lo t�h�s tegem�. '''Mozillal / Firofoxil / Safaril''' hoiaq all n�stmisnuppi ''Shift'' ja vaodaq ''Reload'' vai ''Ctrl-R'' (Macintoshil ''Command-R''); Konqueroril vaodaq ''Reload'' vai ''F5''. Operal puhastaq vaih�m�lo ja v�taq valikust ''Tools ? Preferences''. Internet Exploreril hoiaq ''Ctrl'' ja vaodaq ''Refresh'' vai vaodaq  ''ctrl-f5''.",
'usercssjsyoucanpreview'    => "<strong>N�vvoann�q:</strong> Pruugiq nuppi 'N��t�q proovikaehust' uma vahts� CCS-i vai JavaScripti �lekaemis�s, inne ku taa �rq p�st�t.",
'usercsspreview'            => "'''Seo um CSS-i proovikaehus. M��ntsitki muutuisi ol�-i viil p�stet.'''",
'userjspreview'             => "'''Un�htagu-i, et seo kujo su umast javascriptist om viil p�stm�ld�q!'''",
'userinvalidcssjstitle'     => "'''Miildetul�tus:''' Ol�-i stiili nimega \"\$1\". Pi�q meelen, et pruukja s�ed�q .css- and .js-leheq pi�t nakkama v�iku algust�hega.",
'updated'                   => '(V�rskis tett)',
'note'                      => '<strong>Miildetul�tus:</strong>',
'previewnote'               => '<strong>Taa om �nn� proovikaehus; muutmis�q ol�-i p�sted�q!</strong>',
'previewconflict'           => "Taa proovikaehus n��t�s, kuis �lemb�dsen toim�tuskastin oll�v tekst' p��lt p�stmist v�ll� n�gem� nakkas.",
'session_fail_preview'      => '<strong>Annaq andis! Su toim�ndust saa-s p�st�q, selle et su t��k�rra teed�s om kaoma l�nn�q. Ol�q h��, proomiq viilk�rd. Ku tuust ol�-i kassu, proomiq nii, et l��t nime alt v�ll� ja sis j�lq tagasi sisse.</strong>',
'session_fail_preview_html' => "<strong>Annaq andis, mi saa-i tallitaq su toim�ndust, selle et toim�ndusk�rra teed�s om kaoma l�nn�q.</strong>

''Kuna taan vikin om k��gin lihts� HTML, sis om n��t�mist piiret JavaScript-i r�nd�miisi kaits�s.''

<strong>Ku taa om �ig� toim�nduskats�q, prooviq viilk�rd. Ku iks t��t�-i, prooviq nime alt v�ll� minekit ja vahts�st sissetul�kit.</strong>",
'editing'                   => 'Toim�nd�das artiklit $1',
'editingsection'            => 'Toim�nd�das l�iku artiklist $1',
'editingcomment'            => 'Toim�nd�das komm�ntaari lehe $1 p��l',
'editconflict'              => 'Toim�ndamisvastaolo: $1',
'explainconflict'           => "Ki�ki om muutnuq seod lehte per�n tuud, ku saq taad toim�ndama naksiq.
�lem�dsen toim�nduskastin om teksti per�m�ne kujo.
Suq muutmis�q ommaq alomads�n kastin.
Sul tul� naaq viim�tsehe kujjo �le vii�q.
Ku kl�psahtat nuppi \"P�st�q\", sis p�stet�s '''�nn�''' �lemb�dse toim�nduskasti tekst.",
'yourtext'                  => 'Suq tekst',
'storedversion'             => 'P�stet kujo',
'nonunicodebrowser'         => "<strong>Hoiatus: su v�rgokaeja tuk�-i Unicode'i. Ol�q h��, v�taq toim�ndamis�s leht vallal� t��s�n v�rgokaejan.</strong>",
'editingold'                => '<strong>KAEQ ETTE! Toim�ndat parhilla taa lehe vanna kujjo. Ku taa �rq p�st�t, sis l�tv�q k�ik p��lt taad kujjo tett�q muutmis�q kaoma.</strong>',
'yourdiff'                  => 'Lahkominegiq',
'copyrightwarning'          => 'Pruukjapalg� �mbrepandmis�q loetas�q avald�dus $2 perr�
(t�ps�mb�he kaeq $1). Muud sissu v�i pruukiq t�vveste vabalt, ku ol�-i t�isild� n��d�t.',
'copyrightwarning2'         => 'Rehkend�q tuud, et k�iki seo lehe p��le tett�id kirotuisi ja toim�nduisi v�i ki� taht muutaq vai �rq kistutaq. Ku sa taha-i, et su t��d armuhiitm�ld� �mbre tet�s ja uma �rqn�gemise perr� pruugitas, sis p�stku-i taad sii�q. Sa pi�t ka lubama, et kirotit uma jutu esiq vai v�tit kopimiskeel�ld� paigast (t�ps�mb�lt kaeq $1). <strong>PANGU-I TAAHA TEGIJ��IGUISIGA KAIDS�TUT MAT�RJAALI ILMA LUALDA!</strong>',
'longpagewarning'           => '<center>HOIATUS: Seo lehe suurus om $1 kilobaiti. M�n� v�rgokaejaga v�i ollaq h�t� jo 32-kilobaidids� lehe toim�ndamis�ga. M�rgiq perr�, kas seod lehte andnuq jakaq v�h�mbis lehis.</center>',
'longpageerror'             => '<strong>VIGA: Lehe suurus om $1 kilobaiti. Taad saa-i p�st�q, selle et k�g� suur�mb lubat suurus om $2 kilobaiti.</strong>',
'readonlywarning'           => '<strong>HOIATUS: Teed�skogo om huuldust�ie jaos lukku pant, nii et parhilla saa-i paranduisi p�st�q. V�it teksti alal� hoitaq tekstifailin ja p�st�q taa sii�q per�npool�.</strong>',
'protectedpagewarning'      => '<center><small>Taa leht om lukun. Taad saavaq toim�ndaq �nn� k�rraldaja�iguisiga pruukjaq.</small></center>',
'semiprotectedpagewarning'  => 'Seod lehte saavaq muutaq �nn� nimega sisse l�nn�q pruukjaq.',
'cascadeprotectedwarning'   => 'Taad lehte v�ivaq toim�ndaq �nn� k�rraldaja�iguisiga pruukjaq, selle et taa kuulus $1 j�rgm�dse kaids�du lehe hulka:',
'templatesused'             => 'Seo lehe p��l pruugiduq n��d�seq:',
'templatesusedpreview'      => 'Proovikaehus�n pruugiduq n��d�seq:',
'templatesusedsection'      => 'Seon l�igun pruugiduq n��d�seq:',
'template-protected'        => '(�rqkaids�t)',
'template-semiprotected'    => '(�rqkaids�duq nimeld� ja vahts�q pruukjaq)',
'nocreatetitle'             => 'Lehek�lgi luumin� piiret',
'nocreatetext'              => '{{SITENAME}} lupa-i luvvaq vahtsit lehti.
V�it toim�ndaq ol�manol�vit lehti vai [[Special:UserLogin|minn�q nimega sisse]].',
'nocreate-loggedin'         => 'Sul ol�-i lupa luvvaq vahtsit {{SITENAME}} lehti.',
'permissionserrors'         => '�igus�q ei klapiq',
'permissionserrorstext'     => 'Sul ol�-i lubat taad tet�q, {{PLURAL:$1|tuuper�st, et|tuuper�st, et}}:',
'recreate-deleted-warn'     => "'''Hoiatus: Sa proovit vahts�st luvvaq lehte, mi� om �rq kistut�t.'''

Kas tahat taad lehte t�t�st� toim�ndaq? Kaeq ka sissekirotust seo lehe �rqkistutamis� kotsil�:",
'edit-conflict'             => 'Samaaign� toim�ndus.',

# "Undo" feature
'undo-success' => "Tagasiv�tmin� l�ts' k�rda. Kaeq �le, kas taa om tuu, mid� sa tet�q tahts�t ja p�st�q muutus�q.",
'undo-failure' => 'Tagasiv�tmin� l��-s k�rda samal aol tett�ide muutmiisi vastaolo per�st. V�it muutus�q k�silde tagasi v�ttaq.',
'undo-summary' => "Tagasi v�et muutmin� #$1, mink tekk' [[Special:Contributions/$2|$2]] ([[User talk:$2|Arotus]])",

# Account creation failure
'cantcreateaccounttitle' => 'Pruukjanime luumin� l��-s k�rda',
'cantcreateaccount-text' => "Pruukjanime luumin� taa puutri v�rgoaadr�si p��lt ('''$1''') om �rq keelet. Kiildj�: [[User:$3|$3]].

$3 kirj�pant p�hjus: ''$2''",

# History pages
'viewpagelogs'           => 'Kaeq seo lehe muutmisnimekirj�.',
'nohistory'              => 'Seo lehek�le p��l ei ol�q van�mbit kujj�.',
'currentrev'             => 'Viim�ne kujo',
'revisionasof'           => 'Kujo $1',
'revision-info'          => 'Kujo aost $1 - tenn�q $2', # Additionally available: $3: revision id
'previousrevision'       => '?Van�mb kujo',
'nextrevision'           => 'Vahts�mb kujo?',
'currentrevisionlink'    => 'Viim�ne kujo',
'cur'                    => 'viim',
'next'                   => 'j�rgm',
'last'                   => 'minev',
'page_first'             => 'edim�ne leht',
'page_last'              => 'viim�ne leht',
'histlegend'             => "M�rgiq �rq kujoq, mid� tahat k�rvo s��diq ja vaodaq v�rd�l�misnuppi.
Selet�s: (viim) = lahkominegiq viim�tsest kujost,
(minev) = lahkominegiq minev�dsest kujost, ts = v�iku (tsill'ok�n�) muutmin�",
'history-fieldset-title' => 'Kaeq muutmiisi aoluku',
'deletedrev'             => '[kistut�t]',
'histfirst'              => 'Edim�dseq',
'histlast'               => 'Viim�dseq',
'historysize'            => '({{PLURAL:$1|1 bait|$1 baiti}})',
'historyempty'           => '(t�hi)',

# Revision feed
'history-feed-title'          => 'Muutmislugu',
'history-feed-description'    => 'Seo lehe muutmislugu',
'history-feed-item-nocomment' => '$1 ($2)', # user at time
'history-feed-empty'          => 'S��nest lehte ol�-i. Taa v�i ollaq �rq kistut�t vai �mbre nimetet. V�it pruumiq [[Special:Search|otsiq]] lehti, mi� v�ivaq ollaq taa lehega k��ded�q.',

# Revision deletion
'rev-deleted-comment'         => '(komm�ntaar �rq kistut�t)',
'rev-deleted-user'            => '(pruukjanimi �rq kistut�t)',
'rev-deleted-event'           => '(kir�kotus �rq kistut�t)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Lehe taa kujo om avaligust arhiivist �rq kistut�t.
Lisateed�st v�i ollaq [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} kistutamisnimekir�n].
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">Taa kujo om avaligust pruugist �rq kistut�t, a k�rraldajaq saavaq taad n�t�q. As\'a kotsil� v�i teed�st olla [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} kistutusnimekir�n] </div>',
'rev-delundel'                => 'n��t�q/k�kiq',
'revisiondelete'              => 'Kistudaq/v�taq tagasi lehe kujj�',
'revdelete-nooldid-title'     => 'S��nest otsitavat kujjo ol�-i',
'revdelete-nooldid-text'      => 'Sa ol�-i valinuq kujjo vai kujj�.',
'revdelete-selected'          => "'''{{PLURAL:$2|Valit kujo|Validuq kujoq}} lehele '''$1:''''''",
'logdelete-selected'          => "'''{{PLURAL:$1|Valit muutmin�|Validuq muutmis�q}}:'''",
'revdelete-text'              => "'''Kistud�duq kujoq ommaq ol�man lehe aoluun, a n�ide sissu saa-i avaligult n�t�q.''' Seo viki t��s�q k�rraldajaq saavaq taad k�kit�t teksti luk�q ja taa tagasi avaligult n�tt�v�s tet�q, ku ol�-i s�et muid piirdmiisi.",
'revdelete-legend'            => 'N�tt�v�se piirdmiseq',
'revdelete-hide-text'         => 'K�kiq kujo sisu',
'revdelete-hide-name'         => 'K�kiq kujo nimi',
'revdelete-hide-comment'      => 'K�kiq kokkov�t�q',
'revdelete-hide-user'         => 'K�kiq toim�ndaja pruukjanimi vai puutri v�rgoaadr�s',
'revdelete-hide-restricted'   => 'Pan�q naaq piirdmiseq p��le ka k�rraldajil�',
'revdelete-suppress'          => 'Pan�q teed�s lukku ka k�rraldajil�',
'revdelete-hide-image'        => 'K�kiq teed�st� sissu',
'revdelete-unsuppress'        => 'V�taq tagasitett�isi kujj� p��lt piirdmis�q maaha',
'revdelete-log'               => 'Muutmisnimekir� m�rg�s:',
'revdelete-submit'            => 'V�taq k��ki valitul� kujol�',
'revdelete-logentry'          => 'muud�t lehe [[$1]] kujo n�tt�v�st',
'logdelete-logentry'          => 'muud�t lehe [[$1]] muutmiisi n�tt�v�st',
'revdelete-success'           => "'''Kujo n�tt�v�s paika s�et.'''",
'logdelete-success'           => "'''Muutmiisi n�tt�v�s paika s�et.'''",
'pagehist'                    => 'Lehek�le aolugu',
'revdelete-content'           => 'sisu',
'revdelete-uname'             => 'pruukjanimi',

# History merging
'mergehistory'       => 'Pan�q lehti aoluuq kokko',
'mergehistory-box'   => 'Pan�q kat� lehe muutmiisi aolugu kokko:',
'mergehistory-from'  => 'L�tteleht:',
'mergehistory-into'  => 'Tsihtleht:',
'mergehistory-list'  => 'Liidet�v muutmiisi aolugu',
'mergehistory-merge' => 'J�rgm�dseq lehe [[:$1]] muutmis�q v�i mano pandaq lehe [[:$2]] muutmisaolukku. V�it valliq kujo, minkast vahts�mbit kujj� kokko ei pandaq, a v�rgokaeja linke pruukmin� kaotas taa teed�se �rq.',
'mergehistory-go'    => 'N��t�q kokkopantavit muutuisi',

# Diffs
'history-title'           => '"$1" muutmiisi nimekiri',
'difference'              => '(Kujj� lahkominegiq)',
'lineno'                  => 'Rida $1:',
'compareselectedversions' => 'V�rd�l�q valituid kujj�',
'editundo'                => 'v�taq tagasi',
'diff-multi'              => '(Kujj� vaih�l {{PLURAL:$1|�ts n��t�m�ld� muutmin�|$1 n��t�m�ld� muutmist}}.)',
'diff-src'                => 'l�teq',
'diff-width'              => 'lakjus',

# Search results
'searchresults'             => 'Otsmis� tul�mus�q',
'searchresulttext'          => 'Lisateed�st otsmis� kotsil� kaeq [[{{MediaWiki:Helppage}}|{{SITENAME}} otsmisoppus�st]].',
'searchsubtitle'            => "Otsmin� '''[[:$1]]''' perr�",
'searchsubtitleinvalid'     => 'Otsmin� "$1"',
'noexactmatch'              => "'''Ol�-i lehte p��lkir�ga \"\$1\".''' V�it tuu [[:\$1|esiq luvvaq]].",
'titlematches'              => "Artiklip��lkir'ost l��t",
'notitlematches'            => "Artiklip��lkir'ost es l�vv�q",
'textmatches'               => 'Artiklitekstest l��t',
'notextmatches'             => 'Artiklitekstest es l�vv�q',
'prevn'                     => 'minev�dseq $1',
'nextn'                     => 'j�rgm�dseq $1',
'viewprevnext'              => 'N��t�q ($1) ($2) ($3).',
'searchhelp-url'            => 'Help:Oppus',
'search-interwiki-more'     => '(viil)',
'search-mwsuggest-enabled'  => 'n��t�q soovituisi',
'search-mwsuggest-disabled' => 'ilma soovituisilda',
'search-relatedarticle'     => 'Otsiq samasugutsit lehti',
'mwsuggest-disable'         => 'N��d�ku-i AJAX-i soovituisi',
'searchrelated'             => 'samasugun�',
'searchall'                 => 'k�ik',
'showingresults'            => "{{PLURAL:$1|'''�ts''' tul�mus|'''$1''' tul�must}} (tul�mus�st '''$2''' p��le).",
'showingresultsnum'         => "N��d�t�s {{PLURAL:$3|'''1''' tul�mus|'''$3''' tul�must}} tul�mus�st #'''$2''' p��le.",
'showingresultstotal'       => "Tan ommaq tul�mus�q '''$1 - $2''' (kokko '''$3''')",
'nonefound'                 => '<strong>Hoiatus</strong>: otsmish�ti sak�s p�hjus�s om tuu, et v�ega sageh�he ettetul�vit s�nno v�ta-i massin otsmis� man arv�he. T��n� p�hjus v�i ollaq
mitm� otsmiss�na pruukmin� (sis ilmus�q �nn� lehek�leq, kon ommaq k�ik otsiduq s�naq).',
'powersearch'               => 'Otsmin�',
'powersearch-legend'        => 'Laend�t otsmin�',
'search-external'           => 'V�line otsmin�',
'searchdisabled'            => "{{SITENAME}} otsmin� parhillaq ei t��t�q. Niikavva, ku otsmin� j�lq t��le saa, v�it pruukiq otsmis�s alanol�vat Google'i otsikasti, a n�ide teed�s {{SITENAME}} sisust pruugi-i ollaq alasi k�g� v�rskimb.",

# Preferences page
'preferences'              => 'S��dmine',
'mypreferences'            => 'Mu s��dmiseq',
'prefs-edits'              => 'T�im�ndamiisi arv:',
'prefsnologin'             => 'Sa ol�-i nimega sisse l�nn�q',
'prefsnologintext'         => 'Et s��dmiisi tet�q, tul� sul [[Special:UserLogin|nimega sisse minn�q]].',
'prefsreset'               => 'Su s��dmiseq ommaq puutrim�lo perr� tagasi tett�q.',
'qbsettings'               => 'Kip�riba s��dmine',
'qbsettings-none'          => 'Ol�-i',
'qbsettings-fixedleft'     => 'K�g� kural puul',
'qbsettings-fixedright'    => 'K�g� h��l puul',
'qbsettings-floatingleft'  => 'Ujovahe kural puul',
'qbsettings-floatingright' => 'Ujovahe h��l puul',
'changepassword'           => 'Muudaq salas�nna',
'skin'                     => 'V�ll�n�gemine',
'skin-preview'             => 'Kaemin�',
'math'                     => 'Val�mid� n��t�mine',
'dateformat'               => 'Kuup��v� muud',
'datedefault'              => '�tsk�ik',
'datetime'                 => 'Kuup�iv ja kell�aig',
'math_failure'             => 'Arvosaamalda s�ntaks',
'math_unknown_error'       => 'Tundmalda viga',
'math_unknown_function'    => 'Tundmalda tallitus',
'math_lexing_error'        => 'V�ll�lug�misviga',
'math_syntax_error'        => 'S�ntaksiviga',
'math_image_error'         => 'PNG-muutus l��-s k�rda; kaeq �le, et latex, dvips, gs ja convert ommaq �ig�he paika s�ed�q',
'math_bad_tmpdir'          => 'Mat�maatigateksti kirotamin� aotlist� kausta vai taa kausta luumin� ei l��q k�rdaq',
'math_bad_output'          => 'Mat�maatigateksti kirotamin� v�ll�andmiskausta vai s��ntse kausta luumin� ei l��q k�rda',
'math_notexvc'             => 'Ol�-i texvc-t��riista; loeq tuu paikas��dmise kotsil� math/README-st.',
'prefs-personal'           => 'Pruukjateed�s',
'prefs-rc'                 => 'Per�m�dseq muutmis�q',
'prefs-watchlist'          => 'Perr�kaemisnimekiri',
'prefs-watchlist-days'     => 'Mitm� p��v� muutmiisi n��d�d�q perr�kaemisnimekir�n:',
'prefs-watchlist-edits'    => 'Perr�kaemisnimekir�n n��d�t�vide muutuisi hulk:',
'prefs-misc'               => 'Muuq s��dmiseq',
'saveprefs'                => 'P�st�q s��dmiseq �rq',
'resetprefs'               => 'V�taq s��dmiseq tagasi',
'textboxsize'              => 'Toim�nduskasti suurus',
'rows'                     => 'Rito',
'columns'                  => 'Tulp�',
'searchresultshead'        => 'Otsmin�',
'resultsperpage'           => 'Tul�muisi lehek�le kotsil�',
'contextlines'             => 'Rito tul�mus�n',
'contextchars'             => 'Konteksti pikkus ria p��l',
'stub-threshold'           => '<a href="#" class="stub">Kehv�kese lehe</a> n��t�mispiir (baid�n):',
'recentchangesdays'        => 'P�ivi, mid� n��d�d�q viim�tsin muutmiisin',
'recentchangescount'       => 'P��lkirjo hulk viim�tsin muutmiisin',
'savedprefs'               => 'Su muutmis�q ommaq p�sted�q.',
'timezonelegend'           => 'Aov��',
'timezonetext'             => 'Paikligu ao ja serveri ao (maailmaao) vaheq (tunniq).',
'localtime'                => 'Paiklik aig',
'timezoneoffset'           => 'Aovaheq',
'servertime'               => 'Serveri aig',
'guesstimezone'            => 'V�taq aig v�rgokaejast',
'allowemail'               => 'Lupaq t�isil pruukjil mull� e-posti saataq',
'defaultns'                => 'Otsiq vaikimiisi naist nimeruum�st:',
'default'                  => 'vaikimiisi',
'files'                    => 'Teed�st�q',

# User rights
'userrights'               => 'Pruukja �iguisi muutmin�', # Not used as normal message but as header for the special page itself
'userrights-lookup-user'   => 'Pruukja�iguisi muutmin�',
'userrights-user-editname' => 'Kirodaq pruukjanimi:',
'editusergroup'            => 'Muudaq pruukjid� r�hmi',
'editinguser'              => "Pruukja '''[[User:$1|$1]]''' �igus�q ([[User talk:$1|{{int:talkpagelinktext}}]] | [[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup' => 'Pruukjid�r�hm� valik',
'saveusergroups'           => 'P�st�q pruukjid�r�hm� muutmis�q',
'userrights-groupsmember'  => 'Kuulus r�hm�:',
'userrights-reason'        => 'Muutmis� p�hjus:',

# Groups
'group'            => 'R�hm:',
'group-bot'        => 'Robodiq',
'group-sysop'      => 'K�rraldajaq',
'group-bureaucrat' => 'P��k�rraldajaq',
'group-all'        => '(k�ik)',

'group-bot-member'        => 'Robot',
'group-sysop-member'      => 'K�rraldaja',
'group-bureaucrat-member' => 'P��k�rraldaja',

'grouppage-bot'        => '{{ns:project}}:Robodiq',
'grouppage-sysop'      => '{{ns:project}}:K�rraldajaq',
'grouppage-bureaucrat' => '{{ns:project}}:P��k�rraldajaq',

# User rights log
'rightslog'      => 'Pruukmis�iguisi muutmis� nimekiri',
'rightslogtext'  => 'Taa om pruukmis�iguisi muutmiisi nimekiri.',
'rightslogentry' => 'Pruukja $1 �igus�q muud�ti �mbre r�hm�st $2 r�hm� $3',
'rightsnone'     => '(ol�-i �iguisi)',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|muutmin�|muutmiisi}}',
'recentchanges'                     => 'Viim�dseq muutmis�q',
'recentchangestext'                 => 'Kaeq seo lehe p��l viim�tsit muutmiisi.',
'recentchanges-feed-description'    => 'Kaeq seo lehe p��l {{SITENAME}} viim�tsit muutmiisi.',
'rcnote'                            => 'Tan ommaq {{PLURAL:$1|�ts muutus|$1 viim�st muutmist}}, mi� ommaq tett�q {{PLURAL:$2|�te viim�dse p��v�|$2 viim�dse p��v�}} seen (kuup��v�st $5, $4 lug�ma naat�n).',
'rcnotefrom'                        => "Tan ommaq muutmis�q kuup��v�st '''$2''' p��le (n��d�t�s kooniq '''$1''' muutmist).",
'rclistfrom'                        => 'N��t�q muutmiisi kuup��v�st $1 p��le',
'rcshowhideminor'                   => '$1 v�ikuq parandus�q',
'rcshowhidebots'                    => '$1 robodiq',
'rcshowhideliu'                     => '$1 nimega pruukjaq',
'rcshowhideanons'                   => '$1 nimeld� pruukjaq',
'rcshowhidepatr'                    => '$1 kontrolliduq muutmis�q',
'rcshowhidemine'                    => '$1 mu toim�ndus�q.',
'rclinks'                           => 'N��t�q viim�dseq $1 muutmist, mi� ommaq tett�q viim�dse $2 p��v� seen. $3',
'diff'                              => 'lahk',
'hist'                              => 'aol',
'hide'                              => 'K�kit�seq',
'show'                              => 'N��d�t�seq',
'minoreditletter'                   => 'ts',
'newpageletter'                     => 'V',
'boteditletter'                     => 'rb',
'number_of_watching_users_pageview' => '[{{PLURAL:$1|$1 perr�kaejat|�ts perr�kaeja}}]',
'rc_categories'                     => '�nn� kat�goorijist (er�lded�s m�rgiga "|")',
'rc_categories_any'                 => 'Mi� taht',

# Recent changes linked
'recentchangeslinked'          => 'Sii�q putvaq muutmis�q',
'recentchangeslinked-title'    => 'Muutus�q noid� lehti p��l, kohe n��d�t�s l�he p��lt "$1"',
'recentchangeslinked-noresult' => 'Taaha putvit lehti ol�-i taa ao seen muud�t.',
'recentchangeslinked-summary'  => "Taan nimekir�n ommaq noid� lehti muutmis�q, mink p��le n��t�s seo lehe p��lt linke. Naad leheq ommaq [[Special:Watchlist|perr�kaemisnimekir�n]] m�rgid�q '''paksu kir�ga'''.",

# Upload
'upload'                      => 'Teed�st� �leslaatmin�',
'uploadbtn'                   => '�leslaatmin�',
'reupload'                    => 'Vahts�st �leslaatmin�',
'reuploaddesc'                => 'Tagasi �leslaatmis� vormi mano.',
'uploadnologin'               => 'Sa ol�-i nimega sisse l�nn�q',
'uploadnologintext'           => 'Kui tahat teed�st�id �les laatiq, pi�t [[Special:UserLogin|nimega sisse minem�]].',
'upload_directory_read_only'  => 'Serveril ol�-i �leslaatmiskausta ($1) kirotamis� �igust.',
'uploaderror'                 => '�leslaatmisviga',
'uploadtext'                  => '<strong>PI�Q KINNIQ!</strong> Inne �lelaatmist kaeq, et taa k��n�q {{SITENAME}} [[{{MediaWiki:Policy-url}}|pilte pruukmis� k�rra]] perr�.
<p>Innemb�lt �leslaadiduq pildiq l�vv�t [[Special:FileList|pilte nimekir�st]].
<p>J�rgm�dse vormi abiga saat laatiq �les vahtsit pilte ummi artiklide ilostamis�s. In�mb�sel v�rgokaejil n�et nuppi "Browse..." vai "Valiq...", mi� vii sinno
su op�ratsioonis�steemi standards�he teed�st�ide vallal�tegemise akn�he. Teed�st� valimis�s pandas tim� nimi tekstiv�l� p��le, mi� om nupi k�rval.
Pi�t ka kastik�ist� m�rgi tegem�, et kinn�t�t,
et sa riku-i taad teed�st�t �les laat�n kinkagi tegij��iguisi. �leslaatmis�s vaodaq nupi p��le "�leslaatmin�". Taa v�i v�ttaq piso aigo, esiqer�le sis, kui sul om aiglan� v�rgoliin. <p>Soovit�dus kujos om p��v�pildel JPEG, joonistuisil
ja ikooni muudu pildel PNG, helle jaos OGG.
Nimed�q umaq teed�st�q nii, et nimi �teln�q mid�gi selgehe teed�st� sisu kotsil�. Taa avitas seg�h�isi �rq hoitaq. Ku pan�t artiklil� pildi mano, pruugiq s��ntse kujoga linki: <b>[[image:pilt.jpg]]</b> vai <b>[[image:pilt.png|alt. tekst]]</b>.
Hel�teed�st� puhul: <b>[[media:teed�st�.ogg]]</b>.
<p>Pan�q t�hele, et nigu ka t�isi {{SITENAME}} lehek�lgi p��l, v�ivaq t��s�q su laadituid teed�st�id lehek�le jaos muutaq vai �rq kistutaq. {{SITENAME}} kur\'ast� pruukjal� v�idas manoqp�semine kinniq pandaq.',
'uploadlog'                   => '�leslaatmiisi nimekiri',
'uploadlogpage'               => '�leslaatmiisi nimekiri',
'uploadlogpagetext'           => 'Nimekiri viim�tsist �leslaatmiisist. Kell�aoq ommaq m�rgid�q serveri aoarvamis� perr�.',
'filename'                    => 'Teed�st� nimi',
'filedesc'                    => 'Kokkov�t�q',
'fileuploadsummary'           => 'Kokkov�t�q:',
'filestatus'                  => 'Teed�st� tegij��igus�q:',
'filesource'                  => 'Kost peri:',
'uploadedfiles'               => '�leslaadiduq teed�st�q',
'ignorewarning'               => 'Pangu-i hoiatust t�hele ja p�st�q tuugiper�st.',
'ignorewarnings'              => 'Pangu-i �ttegi hoiatust t�hele',
'minlength1'                  => 'Teed�st�nimen pi�t ol�ma v�h�mb�lt �ts t�ht.',
'illegalfilename'             => 'Teed�st� nimen "$1" om lehenime jaos lubamaldaq m�rke. Vaihtaq teed�st� nimme ja prooviq taa vahts�st �les laatiq.',
'badfilename'                 => 'Teed�st� nimi om �rq muud�t. Vahts�n� nimi om "$1".',
'filetype-badmime'            => 'Teed�st�id, mink MIME-t��p om "$1" tohe-i �les laatiq.',
'filetype-missing'            => 'Teed�st�l ol�-i laendust (nt ".jpg").',
'large-file'                  => 'Teed�st�q tohe-i ollaq suur�mbaq, ku $1, a taa teed�st� om $2.',
'largefileserver'             => 'Teed�st� om suur�mb ku server lupa.',
'emptyfile'                   => "Teed�st�, mid� sa proov�q �les laatiq paistus oll�v t�hi. Kaeq �le, et kirotit nime �ig�he ja et taa ol�-i serverile pall'o suur.",
'fileexists'                  => 'Sama nimega teed�st� om jo ol�man. Katso <strong><tt>$1</tt></strong>, ku sa ol�-i kimm�s, et tahat taad muutaq.',
'fileexists-extension'        => 'S��ntse nimega teed�st� om jo ol�man:<br />
�leslaaditava teed�st� nimi: <strong><tt>$1</tt></strong><br />
Ol�manol�va teed�st� nimi: <strong><tt>$2</tt></strong><br />
Ainug�n� vaih om laendus� suur�/v�iku algust�he man. Kaeq perr�, kas naaq ommaq �ts ja tuusama teed�st�.',
'fileexists-thumb'            => "<center>'''Ol�manoll�v pilt'''</center>",
'fileexists-thumbnail-yes'    => 'Taa paistus oll�v v�h�ndet pilt <i>(thumbnail)</i>. Kaeq teed�st� <strong><tt>$1</tt></strong>�le.<br />
Ku �lekaet teed�st� om sama pilt alguper�lidsen suurus�n, sis ol�-i vaia er�le v�h�nded�t pilti �les laatiq.',
'file-thumbnail-no'           => 'Teed�st� nimi nakkas p��le <strong><tt>$1</tt></strong>. Taa paistus oll�v v�h�ndet pilt <i>(thumbnail)</i>. Ku sul om ol�man taa pilt t�vven suurus�n, sis laadiq �les tuu, ku ol�-i, sis muudaq teed�st� nimi �rq.',
'fileexists-forbidden'        => 'S��ntse nimega teed�st� om jo ol�man. P�st�q teed�st� t��s� nimega. Parhillan� teed�st�: [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Sama nimega teed�st� om jo ol�man jaetuid� teed�st�ide hulgan. P�st�q teed�st� m�n� t��s� nime ala. Parhillan� teed�st�: [[File:$1|thumb|center|$1]]',
'successfulupload'            => "�leslaatmin� l�ts' k�rda",
'uploadwarning'               => '�leslaatmishoiatus',
'savefile'                    => 'P�st�q teed�st� �rq',
'uploadedimage'               => 'laad� �les "$1"',
'overwroteimage'              => '�les laadit "[[$1]]" vahts�n� kujo',
'uploaddisabled'              => '�leslaatmin� l��-s k�rda',
'uploaddisabledtext'          => '{{SITENAME}} lupa-i parhilla teed�st�id �les laatiq.',
'uploadscripted'              => 'Seol teed�st�l om HTML-kuud vai skripte, minkast v�rgokaeja v�i v�lssi arvo saiaq.',
'uploadcorrupt'               => 'Teed�st� om vigan� vai om t�l v�lss laendus. Ol�q h��, kaeq t� �le ja laadiq vahts�st �les.',
'uploadvirus'                 => 'Teed�st�l om viirus man! Kaeq: $1',
'sourcefilename'              => 'Teed�st� nimi:',
'destfilename'                => 'Teed�st� nimi vikin:',
'watchthisupload'             => 'Kaeq taa lehe perr�',
'filewasdeleted'              => 'S��ntse nimega teed�st� om jo �les laadit ja sis �rq kistut�t. Kaeq �le $1 inne ku nakkat j�lq �les laatma.',
'upload-wasdeleted'           => "'''Hoiatus: Sa proovit �les laatiq teed�st�t, mi� om innemb �rq kistut�t.'''

Kas ol�t kimm�s, et tahat taad �les laatiq? Kaeq ka sissekirotust taa teed�st� �rqkistutamis� kotsil�:",

'upload-proto-error'      => 'Vigan� protokoll',
'upload-proto-error-text' => '�les saa laatiq �nn� aadr�ssid� p��lt, mink alostus�n om <code>http://</code> vai <code>ftp://</code>.',
'upload-file-error'       => 'Sisem�ne viga',
'upload-file-error-text'  => 'Aotlids� teed�st� luumin� l��-s k�rda. K�s�q api k�rraldaja k�est.',
'upload-misc-error'       => '�leslaatmis� viga',
'upload-misc-error-text'  => 'Teed�st� �leslaatmin� l��-s k�rda. Kaeq �le, kas su ant aadr�s om masva ja �ig�he kirot�t. Ku viga iks �rq kao-i, k�s�q api k�rraldaja k�est.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'L�vv�-s s��nest aadr�ssit',
'upload-curl-error6-text'  => 'L�vv�-s s��nest aadr�ssit. Kaeq �le, kas aadr�ss om iks �ig� ja t��t�s.',
'upload-curl-error28'      => 'Saa-s ao p��le �les laaditus',
'upload-curl-error28-text' => 'Taa aadr�si p��lt saa-s ao p��le vastust. Oodaq v�h� ja prooviq vahts�st.',

'license'            => 'Litsents:',
'nolicense'          => 'Ol�-i litsentsi valit',
'license-nopreview'  => '(Saa-i kaiaq)',
'upload_source_url'  => ' (avalik t��t�v v�rgoaadr�s)',
'upload_source_file' => ' (teed�st� su puutrin)',

# Special:ListFiles
'listfiles_search_for'  => 'Pildi nime otsmin�:',
'imgfile'               => 'teed�st�',
'listfiles'             => 'Pilte nimekiri',
'listfiles_date'        => 'Kuup�iv',
'listfiles_name'        => 'Nimi',
'listfiles_user'        => 'Pruukja',
'listfiles_size'        => 'Suurus (baid�n)',
'listfiles_description' => 'Selet�s',

# File description page
'filehist'                  => 'Teed�st� aolugu',
'filehist-help'             => "Kl�psaq kuup��v�/kell�ao p��l, et n�t�q m��ne taa teed�st� sis oll'.",
'filehist-deleteall'        => 'kistudaq k�ik �rq',
'filehist-deleteone'        => 'kistudaq taa �rq',
'filehist-revert'           => 'v�taq tagasi',
'filehist-current'          => 'parhillan�',
'filehist-datetime'         => 'Kuup�iv/Kell�aig',
'filehist-user'             => 'Pruukja',
'filehist-dimensions'       => 'Suurus',
'filehist-filesize'         => 'Teed�st� suurus',
'filehist-comment'          => 'Selet�s:',
'imagelinks'                => 'Pildilingiq',
'linkstoimage'              => 'Taa pildi p��le {{PLURAL:$1|n��t�s lehek�lg|n��t�seq lehek�leq}}:',
'nolinkstoimage'            => 'Taa pildi p��le n��t�-i �tski lehek�lg.',
'sharedupload'              => 'Taa om �tine teed�st�, taad v�ivaq pruukiq ka t��s�q vikiq.',
'shareduploadwiki'          => 'Taa kotsil� saa l�hk�mb�lt kaiaq $1.',
'shareduploadwiki-linktext' => 'selet�slehek�le p��lt',
'noimage'                   => 'Ol�-i s��nest teed�st�t, v�it taa esiq $1.',
'noimage-linktext'          => '�les laatiq',
'uploadnewversion-linktext' => 'Laadiq taa teed�st� vahts�n� kujo',
'imagepage-searchdupe'      => 'Otsiq �tesugutsit teed�st�id',

# File reversion
'filerevert'         => 'V�taq tagasi $1',
'filerevert-legend'  => 'V�taq tagasi teed�st�',
'filerevert-comment' => 'P�hjus:',
'filerevert-submit'  => 'V�taq tagasi',

# File deletion
'filedelete'         => 'Kistudaq �rq $1',
'filedelete-legend'  => 'Kistudaq teed�st� �rq',
'filedelete-intro'   => "Sa kistutat �rq '''[[Media:$1|$1]]'''.",
'filedelete-comment' => 'Selet�s:',
'filedelete-submit'  => 'Kistudaq',
'filedelete-success' => "'''$1''' om �rq kistut�t.",
'filedelete-nofile'  => "'''$1''' ol�-i seo lehe p��l.",

# MIME search
'mimesearch'         => 'MIME-otsmin�',
'mimesearch-summary' => 'Taa lehe p��l saat otsiq teed�st�id n�ide MIME-t��bi perr�. Kirodaq: sisut��p/allt��p, nt <tt>image/jpeg</tt>.',
'mimetype'           => 'MIME-t��p:',
'download'           => 'laat',

# Unwatched pages
'unwatchedpages' => 'Perr�kaemis�lda leheq',

# List redirects
'listredirects' => '�mbresaatmis�q',

# Unused templates
'unusedtemplates'     => 'Pruukmalda n��d�seq',
'unusedtemplatestext' => 'Tan ommaq kir�n k�ik n��d�seq, mid� ol�-i �tegi lehe p��le pant. Inne ku naaq �rq kistutat, kaeq perr�, kas n�ide p��le kost m��nest linki n��t�-i.',
'unusedtemplateswlh'  => 'muuq lingiq',

# Random page
'randompage'         => 'Johuslin� artikli',
'randompage-nopages' => 'Seon nimeruumin ol�-i �ttegi lehte.',

# Random redirect
'randomredirect'         => 'Johuslin� �mbresaatmin�',
'randomredirect-nopages' => 'Seon nimeruumin ol�-i �ttegi �mbresaatmist.',

# Statistics
'statistics'               => 'Statistiga',
'statistics-header-pages'  => 'Lehek�lgi statistiga',
'statistics-header-edits'  => 'Toim�ndamis� statistiga',
'statistics-header-views'  => 'Kaemis� statistiga',
'statistics-header-users'  => 'Pruukjid� statistiga',
'statistics-articles'      => 'Sisulehek�lgi',
'statistics-pages'         => 'Lehek�lgi',
'statistics-pages-desc'    => 'K�ik leheq, s��lhulgan arotusleheq, �mbresaatmisleheq ja muuq.',
'statistics-files'         => '�leslaadituid teed�st�id',
'statistics-edits'         => 'Toim�nduisi {{SITENAME}} luumis�st p��le',
'statistics-edits-average' => 'Keskm�dselt toim�nduisi lehek�le kotsil�',
'statistics-views-total'   => 'Lehti kaemiisi kokko',
'statistics-mostpopular'   => 'K�g� kaetumbaq leheq',

'disambiguations'      => 'Lingiq, mi� n��t�seq t�ps�st�slehek�lgi p��le',
'disambiguationspage'  => 'Template:Linke t�ps�st�slehek�lile',
'disambiguations-text' => "Naaq leheq n��t�seq '''t�ps�st�slehti''' p��le.
Tuu as�mal pid�n�q n� n��t�m� as'a sisu p��le.<br />
Lehte peet�s t�ps�st�slehes, ku tim�n om pruugit n��d�st, kohe n��t�s link lehelt [[MediaWiki:Disambiguationspage]].",

'doubleredirects'     => 'Kat�k�rds�q �mbresaatmis�q',
'doubleredirectstext' => 'Eg� ria p��l om �rq tuud edim�ne ja t��n� �mbresaatmisleht ja niisama t��s� �mbresaatmislehe link, mi� n��t�s hariligult kotus� p��le, kohe edim�ne �mbersaatmisleht pid�n�q �kva n��t�m�.',

'brokenredirects'        => 'Vigads�q �mbresaatmis�q',
'brokenredirectstext'    => 'Naaq �mbresaatmis�q n��t�seq lehti p��le, mid� ol�-i ol�man:',
'brokenredirects-edit'   => '(toim�ndaq)',
'brokenredirects-delete' => '(kistudaq �rq)',

'withoutinterwiki'         => 'Keelelingeld� leheq',
'withoutinterwiki-summary' => 'Nail lehil ol�-i linke t�isi kiili lehti p��le:',

'fewestrevisions' => 'K�g� veidemb k�rdo toim�nd�duq leheq',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|bait|baiti}}',
'ncategories'             => '$1 {{PLURAL:$1|kat�gooria|kat�gooriaq}}',
'nlinks'                  => '$1 {{PLURAL:$1|link|linki}}',
'nmembers'                => '$1 {{PLURAL:$1|liig�q|liig�t}}',
'nrevisions'              => '$1 {{PLURAL:$1|muutmin�|muutmist}}',
'nviews'                  => 'K��miisi: $1',
'specialpage-empty'       => 'Taa leht om t�hi.',
'lonelypages'             => 'Artikliq, kohe ol�-i linke',
'lonelypagestext'         => 'Nail� lehile ol�-i muialt vikist linke.',
'uncategorizedpages'      => 'Kat�goorijilda leheq',
'uncategorizedcategories' => 'Kat�goorijilda kat�gooriaq',
'uncategorizedimages'     => 'Kat�goorijilda teed�st�q',
'uncategorizedtemplates'  => 'Kat�goorialdaq n��d�seq',
'unusedcategories'        => 'Pruukmalda kat�gooriaq',
'unusedimages'            => 'Pruukmaldaq pildiq',
'popularpages'            => "Pall'ok��t�q lehek�leq",
'wantedcategories'        => 'K�g� tahetumbaq kat�gooriaq',
'wantedpages'             => 'K�g� tahetumbaq artikliq',
'mostlinked'              => 'Leheq, kohe om k�g� rohk�mb linke',
'mostlinkedcategories'    => 'Kat�gooriaq, kohe om k�g� rohk�mb linke',
'mostlinkedtemplates'     => 'N��d�seq, kohe n��t�s k�g� rohk�mb linke',
'mostcategories'          => 'Artikliq, mil om k�g� rohk�mb kat�goorijit',
'mostimages'              => 'K�g� in�mb pruugiduq teed�st�q',
'mostrevisions'           => 'Artikliq, mil om k�g� rohk�mb toim�nduisi',
'prefixindex'             => 'Leheq p��lkir� algus� perr�',
'shortpages'              => 'L�hk�q artikliq',
'longpages'               => 'Pik�q artikliq',
'deadendpages'            => 'Leheq, kon ol�-i linke',
'deadendpagestext'        => 'Nail lehil ol�-i linke t�isi viki lehti p��le.',
'protectedpages'          => 'Kaids�duq leheq',
'protectedpagestext'      => 'Naaq leheq kaids�tas�q �rq t�ist� paika pan�kist ja muutmis�st.',
'protectedpagesempty'     => 'Ol�-i kaids�tuid lehti.',
'listusers'               => 'Pruukjaq',
'newpages'                => 'Vahts�q lehek�leq',
'newpages-username'       => 'Pruukjanimi:',
'ancientpages'            => 'K�g� van�mbaq lehek�leq',
'move'                    => 'N�staq �mbre',
'movethispage'            => 'Pan�q lehek�lg t�ist� paika',
'unusedimagestext'        => 'Pan�q t�hele, et t��s�q lehek�leq, nigu t�isi mai� Vikipeedi�q, v�ivaq pandaq sii�q lehek�lgi p��le �kvalinke, tuuper�st v�idas siin antuid pilte ka parhilla aktiivs�he pruukiq.',
'unusedcategoriestext'    => 'Naaq kat�gooriaq ommaq ol�man, a naid pruugita-i.',
'notargettitle'           => 'Otsitut lehte ol�-i',
'notargettext'            => 'Sa ol�-i andnuq lehte ega pruukjat, minka taad tallitust tet�q.',
'nopagetext'              => 'S��nest lehte ol�-i ol�man.',
'pager-newer-n'           => '{{PLURAL:$1|vahts�mb 1|vahts�mbaq $1}}',
'pager-older-n'           => '{{PLURAL:$1|van�mb 1|van�mbaq $1}}',

# Book sources
'booksources'               => 'Raamaduq',
'booksources-search-legend' => 'Otsiq raamatut',
'booksources-go'            => 'Otsiq',
'booksources-text'          => 'Tan om linke lehek�lile, kon m�vv�s raamatit vai andas raamatid� kotsil� teed�st.',

# Special:Log
'specialloguserlabel'  => 'Pruukja:',
'speciallogtitlelabel' => 'P��lkiri:',
'log'                  => 'Muutmisnimekiri',
'all-logs-page'        => 'K�ik muutmis�q',
'alllogstext'          => '{{SITENAME}} k�iki muutmiisi - kistutamiisi, kaitsmiisi, kinniqpid�miisi ja k�rraldamiisi �tine nimekiri. V�it valliq ka er�le muutmist��bi, pruukjanime vai lehe p��lkir� perr�.',
'logempty'             => 'Muutmisnimekir�n ol�-i s��ntsit kir�kotussit.',
'log-title-wildcard'   => 'Otsiq p��lkirjo, mi� alostas�q taa tekstiga',

# Special:AllPages
'allpages'          => 'K�ik artikliq',
'alphaindexline'    => '$1 kooniq $2',
'nextpage'          => 'J�rgm�ne lehek�lg ($1)',
'prevpage'          => 'Minev�ne lehek�lg ($1)',
'allpagesfrom'      => 'Nakkaq n��t�m� lehek�lest:',
'allarticles'       => 'K�ik artikliq',
'allinnamespace'    => 'K�ik nimeruumi $1 leheq',
'allnotinnamespace' => 'K�ik leheq, mid� ol�-i nimeruumin $1',
'allpagesprev'      => 'Minev�ne',
'allpagesnext'      => 'J�rgm�ne',
'allpagessubmit'    => 'N��t�q',
'allpagesprefix'    => 'N��t�q lehti, mink alostus�n om:',
'allpagesbadtitle'  => "Taa p��lkiri oll' vigan� vai vikidevaih�lids� edejakuga. Tan v�i ollaq m�rke, mid� tohe-i p��lkir'on pruukiq.",
'allpages-bad-ns'   => '{{SITENAME}}n ol�-i nimeruumi "$1".',

# Special:Categories
'categories'         => 'Kat�gooriaq',
'categoriespagetext' => 'Seon vikin ommaq s��ntseq kat�gooriaq:',

# Special:ListUsers
'listusersfrom'      => 'N��t�q pruukjit alost�n:',
'listusers-submit'   => 'N��t�q',
'listusers-noresult' => 'Ol�-s pruukjit.',

# Special:ListGroupRights
'listgrouprights' => 'Pruukjar�hmi �igus�q',

# E-mail user
'mailnologin'     => 'Ol�-i saatja aadr�ssit',
'mailnologintext' => 'Sa pi�t ol�ma [[Special:UserLogin|nimega sisse l�nn�q]]
ja sul pi�t umin [[Special:Preferences|s��dmiisin]] ol�ma e-postiaadr�s, et sa saasiq t�isil� pruukjil� e-kirjo saataq.',
'emailuser'       => 'Kirodaq taal� pruukjal� e-kiri',
'emailpage'       => 'Kirodaq pruukjal� e-kiri',
'emailpagetext'   => 'Ku taa pruukja om ummi s��dmiisihe pandnuq uma t��t�v� e-postiaadr�si, saa taa vormi abiga t�lle saataq �te kir�. Kir�n j��s n�t�q saatja aadr�s, et kir� saaja saanuq kir�le vastadaq.',
'usermailererror' => 'Saatmis� viga:',
'defemailsubject' => '{{SITENAME}} e-post',
'noemailtitle'    => 'Ol�-i e-postiaadr�ssit',
'noemailtext'     => 'Taa pruukja ol�-i andnuq umma e-postiaadr�ssit.',
'emailfrom'       => 'Kink k�est',
'emailto'         => 'Kinkal�',
'emailsubject'    => 'Teema',
'emailmessage'    => 'S�nnom',
'emailsend'       => 'Saadaq',
'emailccme'       => 'Saadaq mull� kopi mu e-kir�st.',
'emailccsubject'  => 'Kopi su kir�st aadr�si p��le $1: $2',
'emailsent'       => 'E-post saad�t',
'emailsenttext'   => 'S�nnom saad�t.',

# Watchlist
'watchlist'            => 'Perr�kaemisnimekiri',
'mywatchlist'          => 'mu perr�kaemisnimekiri',
'watchlistfor'         => "(pruukjal� '''$1''')",
'nowatchlist'          => 'Perr�kaemisnimekiri om t�hi.',
'watchlistanontext'    => 'Perr�kaemisnimekir� pruukmis�s $1.',
'watchnologin'         => 'Ol�-i nimega sisse mint',
'watchnologintext'     => 'Perr�kaemisnimekir� muutmis�s pi�t [[Special:UserLogin|nimega sisse minem�]].',
'addedwatch'           => 'Perr�kaemisnimekirj� pant',
'addedwatchtext'       => "Lehek�lg \"<nowiki>\$1</nowiki>\" om pant su [[Special:Watchlist|perr�kaemisnimekirj�]]. Edespididseq muutmis�q seo lehe ja t� arotusk�lgi p��l pandas�q ritta siin ja [[Special:RecentChanges|viim�tside muutmiisi lehe p��l]] tuvvas�q '''paksun kir�n'''. Ku tahat taad lehte perr�kaemisnimekir�st v�ll� v�ttaq, kl�psaq nuppi \"L�p�daq perr�kaemin� �rq\".",
'removedwatch'         => 'Perr�kaemisnimekir�st v�ll� v�et',
'removedwatchtext'     => 'Lehek�lg "<nowiki>$1</nowiki>" om su perr�kaemisnimekir�st v�ll� v�et.',
'watch'                => 'Kaeq perr�',
'watchthispage'        => 'Kaeq taad lehek�lge perr�',
'unwatch'              => 'L�p�daq perr�kaemin� �rq',
'unwatchthispage'      => 'L�p�daq perr�kaemin� �rq',
'notanarticle'         => 'Ol�-i artikli',
'watchnochange'        => 'Taa ao seen ol�-i �ttegi perr�kaetavat lehte muud�t.',
'watchlist-details'    => 'Perr�kaemisnimekir�n om {{PLURAL:$1|$1 leht|$1 lehte}}, rehkend�m�ld� arotuslehti.',
'wlheader-enotif'      => '* E-postiga teed�qandmis�q ommaq k��gin.',
'wlheader-showupdated' => "* Leheq, mid� om muud�t p��lt su viim�st k��mist, ommaq '''paksun kir�n'''",
'watchmethod-recent'   => 'kontrollitas perr�kaetavid� lehti per�m�idsi muutmiisi',
'watchmethod-list'     => 'perr�kaetavid� lehti per�m�dseq muutmis�q',
'watchlistcontains'    => 'Perr�kaemisnimekir�n om $1 {{PLURAL:$1|leht|lehte}}.',
'iteminvalidname'      => "H�d� lehega '$1'! Lehe nimen om viga.",
'wlnote'               => "Tan om '''$1''' {{PLURAL:$1|muutmin�|muutmist}} viim�dse '''$2''' tunni ao seen.",
'wlshowlast'           => 'N��t�q viim�dseq $1 tunni $2 p�iv� $3',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Pandas perr�kaemisnimekirj�...',
'unwatching' => 'V�etas perr�kaemis� alt maaha...',

'enotif_mailer'                => '{{SITENAME}} lehe muutumisteed�s',
'enotif_reset'                 => 'M�rgiq k�ik leheq �lekaetuis',
'enotif_newpagetext'           => 'Taa om vahts�n� leht.',
'enotif_impersonal_salutation' => '{{SITENAME}} pruukja',
'changed'                      => 'lehte muutnuq',
'created'                      => 'lehe loonuq',
'enotif_subject'               => '$PAGEEDITOR om $CHANGEDORCREATED $PAGETITLE',
'enotif_lastvisited'           => 'Lehel $1 ommaq k�ik p��lt suq per�m�st k��mist tett�q muutmis�q.',
'enotif_lastdiff'              => 'Taa muutus� n�gemises kaeq: $1.',
'enotif_anon_editor'           => 'nimeld� pruukja $1',
'enotif_body'                  => 'H�� $WATCHINGUSERNAME,

{{SITENAME}} lehte $PAGETITLE $CHANGEDORCREATED $PAGEEDITDATE $PAGEEDITOR, parhillast kujjo kaeq $PAGETITLE_URL.

$NEWPAGE

Muutja kokkov�t�q: $PAGESUMMARY $PAGEMINOREDIT

Kirodaq muutjal�:
e-post: $PAGEEDITOR_EMAIL
viki: $PAGEEDITOR_WIKI

In�mb seo lehe kotsil� teed�qandmiisi saad�ta-i. V�it ka k�ik su perr�kaetavid� lehti muutmis� kuulutus�q �rq keeld�q.

{{SITENAME}} teed�qandmisk�rraldus

Perr�kaemisnimekir� s��dmiisi saat muutaq lehe p��l: {{fullurl:Special:Watchlist/edit}}

As\'a kotsil� mano kaiaq ja k�ss� saat lehe p��lt: {{fullurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'            => 'Kistudaq lehek�lg �rq',
'confirm'               => 'Kinn�d�q',
'excontent'             => "sisu oll': '$1'",
'excontentauthor'       => "sisu oll': '$1' (ja ainug�n� toim�ndaja oll' '[[Special:Contributions/$2|$2]]')",
'exbeforeblank'         => "inne t�h�stegemist oll': '$1'",
'exblank'               => "leht oll' t�hi",
'historywarning'        => 'Hoiatus: Lehel, mid� tahat �rq kistutaq, om ol�man aolugu:',
'confirmdeletetext'     => 'Sa kistutat teed�skogost periselt �rq lehe vai pildi �ten k�g� tim� aoluuga.
Kinn�d�q, et sa tahat tuud t�t�st� tet�q, et sa saat arvo, mi� tuust tullaq v�i ja et tuu, mi� sa tiit, klapis [[{{MediaWiki:Policy-url}}|sisek�rraga]].',
'actioncomplete'        => 'Tallitus valmis',
'deletedtext'           => '"<nowiki>$1</nowiki>" om �rq kistut�t.
Per�m�idsi kistutuisi nimekirj� n�et siist: $2.',
'deletedarticle'        => '"$1" kistut�t',
'dellogpage'            => 'Kistut�duq lehek�leq',
'dellogpagetext'        => 'Naaq ommaq per�m�dseq kistutamis�q.
Kell�aoq ummaq serveriao perr�.',
'deletionlog'           => 'Kistut�duq lehek�leq',
'reverted'              => 'Minti tagasi vana kujo p��le',
'deletecomment'         => 'Kistutamis� p�hjus',
'deleteotherreason'     => 'Muu p�hjus vai t�ps�st�s:',
'deletereasonotherlist' => 'Muu p�hjus',
'deletereason-dropdown' => "*Hariliguq kistutamis� p�hjus�q
** Kirotaja hind� palv�l
** Tegij��igus� rikmin�
** Lehe ts'urkmin�",

# Rollback
'rollback'       => 'Mineq tagasi vana kujo p��le',
'rollback_short' => 'V�taq tagasi',
'rollbacklink'   => 'v�taq tagasi vana kujo',
'rollbackfailed' => 'Muutmiisi tagasiv�tmin� l��-s k�rda',
'cantrollback'   => 'Saa-i muutmiisi tagasi p��rd�q; viim�ne muutja om lehe ainug�n� toim�ndaja.',
'alreadyrolled'  => 'Pruukja [[User:$2|$2]] ([[User talk:$2|arotus]]) tett�id lehe [[:$1]] muutmiisi saa-i tagasi v�ttaq, selle et pruukja [[User:$3|$3]] ([[User talk:$3|arotus]]) om tenn�q vahts�mbit muutmiisi.',
'editcomment'    => 'Toim�ndamiskokkov�t�q oll\': "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'     => 'Pruukja [[Special:Contributions/$2|$2]] ([[User_talk:$2|arotus]]) toim�ndus�q p��rediq tagasi ja leht panti tagasi pruukja [[User:$1|$1]] tett� kujo p��le.', # Additionally available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'sessionfailure' => 'Paistus oll�v m��negi h�d� su toim�ndamisk�rraga, tuuper�st om viim�ne muutmin� eg�s johtumis�s j�tet tegem�ld�. Vaodaq v�rgokaeja "tagasi"-nuppi, laadiq �le lehek�lg, kost sa tullit ja prooviq vahts�st.',

# Protect
'protectlogpage'              => 'Lehti kaitsmiisi nimekiri',
'protectlogtext'              => 'Tan om nimekiri lehti kaitsmiisist ja kaitsmis� maahav�tmiisist. Parhilla kaits� all ol�vid� lehti nimekir� l�vv�t [[Special:ProtectedPages|tast]].',
'protectedarticle'            => 'pand\' lehe "[[$1]]" kaits� ala',
'unprotectedarticle'          => 'v�tt\' lehe "[[$1]]" kaits� alt maaha',
'protect-title'               => 'Lehe "$1" kaitsmin�',
'protect-legend'              => 'Kinn�d�q kaits� ala pandmist',
'protectcomment'              => 'Kaits� ala pandmis� p�hjus',
'protectexpiry'               => 'T�htaig',
'protect_expiry_invalid'      => 'K�lbmaldaq t�htaig.',
'protect_expiry_old'          => 'T�htaig om joba l�bi.',
'protect-unchain'             => 'Pruugiq t�ist� paika pandmis� kaids�t',
'protect-text'                => 'Tan saat kaiaq ja s��d�q lehe <strong><nowiki>$1</nowiki></strong> kaitsmist.',
'protect-locked-blocked'      => 'Kinniqpeet�lt saa-i kaitsmiisi muutaq. Tan ommaq lehe <strong>$1</strong> parhillads�q s��dmiseq:',
'protect-locked-dblock'       => 'Kaitsmiisi saa-i muuta, selle et teed�skogo om lukun. Tan ommaq lehe <strong>$1</strong> parhillads�q s��dmiseq:',
'protect-locked-access'       => 'Sul ol�-i �igust kaitsmiisi muutaq.
Tan ommaq lehe <strong>$1</strong> parhillads�q s��dmiseq:',
'protect-cascadeon'           => 'Taa leht om kaits� all, selle t� om pant {{PLURAL:$1|taa kaids�du lehe | naid� kaids�tuid� lehti}} p��le. V�it muutaq taa lehe kaitsmiisi, a t� j��s tuugiper�st kaits� ala, selle et t� om taan nimekir�n.',
'protect-default'             => '(harilik)',
'protect-fallback'            => 'Om vaia "$1"-�igust',
'protect-level-autoconfirmed' => 'Pi�q kinniq vahts�q ja kirj�pandmalda pruukjaq',
'protect-level-sysop'         => '�nn� k�rraldajaq',
'protect-summary-cascade'     => 'laend�t',
'protect-expiring'            => 't�htaig $1',
'protect-cascade'             => 'Laendaq kaitsmist - v�taq kaits� ala k�ik seo lehe p��l ol�vaq leheq.',
'protect-cantedit'            => 'Sa tohe-i muutaq seo lehe kaitsmistas�t, selle et sul ol�-i �igust seod lehte muutaq.',
'protect-expiry-options'      => '15 minotit:15 minutes,1 p�iv:1 day,3 p�iv�:3 days,1 n�t�l:1 week,2 n�d�lit:2 weeks,1 kuu:1 month,3 kuud:3 months,6 kuud:6 months,1 aastak:1 year,ig�vene:infinite', # display1:time1,display2:time2,...
'restriction-type'            => 'Luba',
'restriction-level'           => 'Piirdmisast�q',
'minimum-size'                => 'K�g� v�h�mb maht',
'maximum-size'                => 'K�g� suur�mb lubat suurus:',
'pagesize'                    => '(baiti)',

# Restrictions (nouns)
'restriction-edit' => 'Toim�ndus',
'restriction-move' => 'T�ist� paika pandmin�',

# Restriction levels
'restriction-level-sysop'         => 't�vveligult kaids�t',
'restriction-level-autoconfirmed' => 'puulkaids�t',
'restriction-level-all'           => 'k�ik astm�q',

# Undelete
'undelete'                 => 'Tiiq kistut�t lehek�lg tagasi',
'undeletepage'             => 'Kistut�duid� lehek�lgi kaemin� ja tagasitegemine',
'viewdeletedpage'          => 'Kaeq kistut�duid lehti',
'undeletepagetext'         => 'Naaq lehek�leq ommaq �rq kistud�duq, a arhiivin
viil ol�man, naid saa tagasi tet�q niikavva ku naid ol�-i viil arhiivist �rq visat.',
'undeleteextrahelp'        => 'V�taq leht tagasi vaot�n nuppi  <b><i>V�taq tagasi</i></b>. V�it lehe kujj� valliq ja tagasi v�ttaq �nn� nuuq kujoq, mi� esiq v�ll� valit.',
'undeleterevisions'        => '{{PLURAL:$1|Kujo|$1 kujjo}} arhiivi pant.',
'undeletehistory'          => 'Ku tiit lehek�le tagasi, tul�vaq k�ik kujoq tagasi artikli aolukku. Ku vaih�p��l om luud vahts�n� sama nimega lehek�lg, ilmus�q tagasitett�q kujoq van�mba lehek�le aoluun. Ol�manol�vat kujjo automaats�he v�ll� ei vaiht�daq. Teed�st�ide kujopiiranguq kaos�q �rq.',
'undeleterevdel'           => 'Kistut�duist tagasituumin� j�tet�s tegem�ld�q, ku tuuper�st kistus �rq m�ni osa lehe k�g� vahts�mbast kujost. Ku om nii, sis tul� vahts�mbid� kistud�duisi kujj� m�rgist�s vai k�kmine maaha v�ttaq. Sa saa-i kistut�duist tagasi tet�q ka tedd�st�kujj�, mid� sul ol�-i �igust n�t�q.',
'undeletehistorynoadmin'   => 'Taa leht om �rq kistut�t. Kistutamis� p�hjust n�et kokkov�tt�n, kost om n�t�q ka tuu, ki� ommaq taad lehte toim�ndanuq inne kistutamist. Taa lehe sissu saavaq kaiaq �nn� k�rraldajaq.',
'undelete-revision'        => 'Kistut�t kujo $1 aost $2',
'undeleterevision-missing' => 'Vigan� vai ol�maldaq kujo. Taa v�i ollaq tagasi tett vai arhiivist �rq kistut�t.',
'undeletebtn'              => 'Tiiq tagasi',
'undeletereset'            => 'Tiiq t�h�s',
'undeletecomment'          => 'Komm�ntaar:',
'undeletedarticle'         => '"$1" tagasi tett',
'undeletedrevisions'       => '$1 {{PLURAL:$1|kujo|kujjo}} tagasi tett',
'undeletedrevisions-files' => '$1 {{PLURAL:$1|kujo|kujjo}} ja $2 {{PLURAL:$2|teed�st�|teed�st�t}} tagasi tett',
'undeletedfiles'           => '$1 {{PLURAL:$1|teed�st�|teed�st�t}} tagasi tett',
'cannotundelete'           => 'Tagasitegemine l��-s k�rda; ki�ki t��n� v�i-ollaq lehe jo tagasi tenn�q.',
'undeletedpage'            => "<big>'''$1 om tagasi tett'''</big>

Per�m�idsi kistutuisi ja tagasitegemiisi saat kaiaq [[Special:Log/delete|kistutamiisi nimekir�st]].",
'undelete-header'          => 'Per�m�idsi kistutuisi saat kaiaq [[Special:Log/delete|kistutamiisi nimekir�st]].',
'undelete-search-box'      => 'Otsiq kistut�duid lehek�lgi',
'undelete-search-prefix'   => 'N��t�q lehti, mi� nakkas�q p��le:',
'undelete-search-submit'   => 'Otsiq',
'undelete-no-results'      => 'Kistutamiisi nimekir�st l�vvet�-s s��nest lehte.',

# Namespace form on various pages
'namespace'      => 'Nimeruum:',
'invert'         => 'N��t�q k�iki p��lt validu nimeruumi',
'blanknamespace' => '(Artikliq)',

# Contributions
'contributions' => 'Pruukja kirotus�q',
'mycontris'     => 'Mu kirotus�q',
'contribsub2'   => 'Pruukja "$1 ($2)" kirotus�q',
'nocontribs'    => 'S��ntsit muutmiisi es l�vv�q.',
'uctop'         => '(k�g� vahts�mb)',
'month'         => 'Alost�n kuust (ja varrampa):',
'year'          => 'Alost�n aastagast (ja varrampa):',

'sp-contributions-newbies'     => 'N��t�q �nn� vahtsid� pruukjid� toim�nduisi',
'sp-contributions-newbies-sub' => 'Vahtsid� pruukjid� toim�ndus�q',
'sp-contributions-blocklog'    => 'Kinniqpid�misnimekiri',
'sp-contributions-search'      => 'Otsiq muutmiisi',
'sp-contributions-username'    => 'Puutri v�rgoaadr�s vai pruukjanimi:',
'sp-contributions-submit'      => 'Otsiq',

# What links here
'whatlinkshere'       => 'Sii�q n��t�j�q lingiq',
'whatlinkshere-title' => 'Leheq, mi� n��t�seq lehe "$1" p��le',
'whatlinkshere-page'  => 'Leht:',
'linkshere'           => 'Lehe <b>[[:$1]]</b> p��le n��t�seq lingiq lehti p��lt:',
'nolinkshere'         => 'Lehe <b>[[:$1]]</b> p��le n��t�-i linke �tegi lehe p��lt.',
'nolinkshere-ns'      => "Valitun nimeruumin n��t�-i �tegi lehe p��lt linke lehe '''[[:$1]]''' p��le.",
'isredirect'          => '�mbresaatmislehek�lg',
'istemplate'          => 'pruugit n��d�ssen',
'whatlinkshere-prev'  => '? {{PLURAL:$1|minev�ne leht|$1 minev�st lehte}}',
'whatlinkshere-next'  => '{{PLURAL:$1|minev�ne leht|$1 minev�st lehte}} ?',
'whatlinkshere-links' => '? lingiq',

# Block/unblock
'blockip'                     => 'Pi�q puutri v�rgoaadr�s kinniq',
'blockiptext'                 => "Taa vorm om kimm� puutri v�rgoaadr�si p��lt tett�isi kirotuisi kinniqpid�mises. '''Taad tohis tet�q �nn� lehti ts'urkmis� vasta ni [[{{MediaWiki:Policy-url}}|{{SITENAME}} sisek�rra perr�]]'''. Kimm�he tul� t��t�q ka rida \"p�hjus\". Sinn�q v�inuq pandaq nt lingiq noil� lehile, mid� rikuti.",
'ipaddress'                   => 'Puutri v�rgoaadr�s (IP)',
'ipadressorusername'          => 'Puutri v�rgoaadr�s vai pruukjanimi',
'ipbexpiry'                   => 'T�htaig',
'ipbreason'                   => 'P�hjus',
'ipbreasonotherlist'          => 'Muu p�hjus',
'ipbreason-dropdown'          => "*Hariliguq kinniqpid�mise p�hjus�q
** V�lss teed�se kirotamin�
** Lehti sisu �rqkistutamin�
** Reklaamilink� pandmin�
** M�tt�lda jutu vai prahi pandmin�
** Seg�mine ja ts'urkmin�
** Mitm� pruukjanime v�lsspruukmin�
** S�nd�m�ld�q pruukjanimi",
'ipbanononly'                 => 'Pi�q kinniq �nn� ilma nimeld� pruukjaq',
'ipbcreateaccount'            => 'Lasku-i pruukjanimme luvvaq',
'ipbemailban'                 => 'Lubagu-i pruukjal e-posti saataq',
'ipbenableautoblock'          => 'Pi�q kinniq viim�ne puutri v�rgoaadr�s, kost pruukja om toim�nduisi tenn�q, ja edespiten aadr�siq, kost t� viil pruuv toim�nduisi tet�q.',
'ipbsubmit'                   => 'Pi�q taa aadr�s kinniq',
'ipbother'                    => 'Muu t�htaig',
'ipboptions'                  => '15 minotit:15 minutes,1 p�iv:1 day,3 p�iv�:3 days,1 n�t�l:1 week,2 n�d�lit:2 weeks,1 kuu:1 month,3 kuud:3 months,6 kuud:6 months,1 aastak:1 year,ig�vene:infinite', # display1:time1,display2:time2,...
'ipbotheroption'              => 'Muu t�htaig',
'ipbotherreason'              => 'Muu p�hjus',
'ipbhidename'                 => 'K�kiq pruukjanimi vai puutri v�rgoaadr�s �rq kinniqpid�mis-, toim�ndus-, ja pruukjanimekir�st',
'badipaddress'                => 'Puutri v�rgoaadr�s om v�lssi kirot�t.',
'blockipsuccesssub'           => 'Kinniqpid�mine l�ts k�rda',
'blockipsuccesstext'          => 'Puutri v�rgoaadr�s "$1" om kinniq peet.
<br />K�ik parhillads�q kinniqpid�miseq l�vv�t [[Special:IPBlockList|kinniqpid�miisi nimekir�st]].',
'ipb-edit-dropdown'           => 'Toim�ndaq kinniqpid�mise p�hjuisi',
'ipb-unblock-addr'            => 'L�p�daq pruukja $1 kinniqpid�mine �rq',
'ipb-unblock'                 => 'L�p�daq pruukja vai puutri v�rgoaadr�asi kinniqpid�mine �rq',
'ipb-blocklist-addr'          => 'N��t�q pruukja $1 kinniqpid�miisi',
'ipb-blocklist'               => 'N��t�q kinnniqpid�miisi',
'unblockip'                   => 'L�p�daq puutri v�rgoaadr�si kinniqpid�mine �rq',
'unblockiptext'               => 'T��d�q �rq taa vorm, et l�p�taq �rq pruukja vai puutri v�rgoaadr�si kinniqpid�mine',
'ipusubmit'                   => 'L�p�daq kinniqpid�mine �rq',
'unblocked'                   => 'Pruukja [[User:$1|$1]] kinniqpid�mine om �rq l�p�t�t',
'unblocked-id'                => '$1 kinniqpid�mine v�eti maaha',
'ipblocklist'                 => 'Kinniqpeet�isi IP-aadr�ssid� ja pruukjanimmi nimekiri',
'ipblocklist-legend'          => 'Otsiq kinniqpeet�t pruukjat',
'ipblocklist-username'        => 'Pruukjanimi vai puutri v�rgoaadr�s:',
'ipblocklist-submit'          => 'Otsiq',
'blocklistline'               => '$1 � $2 om kinniq pid�n�q pruukja $3 ($4)',
'infiniteblock'               => 'ig�veste',
'expiringblock'               => 't�htaig om $1',
'anononlyblock'               => '�nn� nimeld� pruukjaq',
'noautoblockblock'            => 'automaats� kinniqpid�miseld�',
'createaccountblock'          => 'pruukjanime luumin� kinniq pant',
'emailblock'                  => 'e-post kinniq peet',
'ipblocklist-empty'           => 'Kinniqpid�miisi nimekiri om t�hi.',
'ipblocklist-no-results'      => 'Taa puutri v�rgoaadr�ss vai pruukjanimi ol�-i kinniq peet.',
'blocklink'                   => 'pi�q kinniq',
'unblocklink'                 => 'v�taq kinniqpid�mine maaha',
'contribslink'                => 'kirotus�q',
'autoblocker'                 => 'Ol�t automaats�he kinniq peet, selle et jaat puutri v�rgoaadr�ssit pruukjaga $1. Kinniqpid�mise p�hjus: $2.',
'blocklogpage'                => 'Kinniqpid�miisi nimekiri',
'blocklogentry'               => 'pidi kinniq pruukja vai puutri v�rgoaadr�si "[[$1]]". Kinniqpid�mise t�htaig $2 $3',
'blocklogtext'                => 'Taa om kinniqpid�miisi ja naid� maahav�tmiisi nimekiri. Automaats�he kinniqpeet�isi puutrid� v�rgoaadr�ssiid tan n��d�t�-i, noid kaeq [[Special:IPBlockList|puutrid� v�rgoaadr�ssid� kinniqpid�mise nimekir�st]].',
'unblocklogentry'             => "l�p�t' pruukja $1 kinniqpid�mise �rq",
'block-log-flags-anononly'    => '�nn� nimeld� pruukjaq',
'block-log-flags-nocreate'    => 'pruukjanime luumin� kinniq peet',
'block-log-flags-noautoblock' => 'automaatn� kinniqpid�mine maaha v�et',
'block-log-flags-noemail'     => 'e-post kinniq peet',
'range_block_disabled'        => 'K�rraldaja kinniqpid�mis�igus�q ol�-i masma pantuq',
'ipb_expiry_invalid'          => 'Vigan� t�htaig.',
'ipb_already_blocked'         => '"$1" om jo kinniq peet',
'ipb_cant_unblock'            => 'L�vv�-s kinniqpid�mist $1. Taa v�i ollaq jo maaha v�et.',
'ip_range_invalid'            => 'Vigan� puutri v�rgoaadr�si kujo.',
'proxyblocker'                => 'Vaih�serveri kinniqpid�mine',
'proxyblockreason'            => "Su puutri v�rgoaadr�s om kinniq peet, selle et taa om avalik vaih�server. Otsiq �les uma v�rgoliini pakja vai puutrias'atundja ja k�n�l�q n�ile taast h�d�st.",
'proxyblocksuccess'           => 'Valmis.',
'sorbsreason'                 => 'Su puutri v�rgoaadr�s om SORBS-i mustan nimekir�n ku avalik vaih�server.',
'sorbs_create_account_reason' => 'Su puutri v�rgoaadr�s om pant SORBS-i musta nimekirj� ku avalik vaih�server. Sa saa-i pruukjanimme tet�q',

# Developer tools
'lockdb'              => 'Pan�q teed�skogo lukku',
'unlockdb'            => 'Tiiq teed�skogo lukust vallal�',
'lockdbtext'          => 'Teed�skogo lukkupandmin� las�-i pruukjil lehti ja perr�kaemisnimekirjo toim�ndaq, s��dmiisi vaihtaq ega muid teed�skoko muutvit tallituisi tet�q. Ol�q h�� ja kinn�d�q, et sa tahat taad tet�q ja et sa las�t teed�skogo vallal�, ku ol�t umaq tarvilids�q tallitus�q �rq tenn�q.',
'unlockdbtext'        => 'Ku teed�skogo vallal� lask�q, saavaq pruukjaq lehti ja perr�kaemisnimekirjo toim�ndaq, vaihtaq s��dmiisi ja tet�q muid teed�skoko muutvit tallituisi. Ol�q h�� ja kinn�d�q, et sa tahat taad tet�q.',
'lockconfirm'         => 'Jah, ma taha t�t�st� teed�skogo lukku pandaq.',
'unlockconfirm'       => 'Jah, ma taha t�t�st� teed�skogo lukust vallal� lask�q.',
'lockbtn'             => 'Pan�q teed�skogo lukku',
'unlockbtn'           => 'Las�q teed�skogo lukust vallal�',
'locknoconfirm'       => 'Sa ol�-i kinn�t�skasti �rq m�rkn�q.',
'lockdbsuccesssub'    => 'Teed�skogo om lukun',
'unlockdbsuccesssub'  => 'Teed�skogo om vallal�',
'lockdbsuccesstext'   => 'Teed�skogo om noq lukun.
<br />Ku su huuldust�� saa tett�s, sis un�htagu-i teed�skoko j�lq lukust vallal� lask�q!',
'unlockdbsuccesstext' => 'Teed�skogo om lukust vallal� last.',
'lockfilenotwritable' => 'Saa-i kirotaq teed�skogo lukkupandmis� teed�st�t. Kaeq �le, kas sul om tuus �igus.',
'databasenotlocked'   => 'Teed�skoko panda-s lukku.',

# Move page
'move-page-legend'        => 'N�staq artikli t�ist� paika',
'movepagetext'            => "Taad vormi pruukin saat lehe �mbre nimet�q. Lehe aolugu pandas kah vahts� p��lkir� ala.
Vana p��lkir�ga lehest saa vahts� lehe p��le �mbresaatmis� leht.
V�it s��d�q lehe p��le n��t�j�q lingiq automaats�he n��t�m� vahts� nime p��le.
Ku sa taha-i taad tet�q automaats�he, un�htagu-i �le kaiaq [[Special:DoubleRedirects|kat�k�rdsit]] vai [[Special:BrokenRedirects|vigatsit]] �mbresaatmiisi.
Sa pi�t kaema, et k�ik n��t�miseq j��n�q t��t�m� nigu inne �mbrenimet�mist.

Lehte '''nimeted�-i �mbre''', ku vahts� nimega leht om jo ol�man.
Er�ngus om tuu, ku vana leht om t�hi vai om esiq �mbresaatmisleht ja t�l ol�-i toim�ndamisaoluku.
Tuu t�hend�s, et sa saa-i kog�malda �le kirotaq jo ol�manol�vat lehte, a saat halvast� l�nn� �mbrenimet�mise tagasi p��rd�q.

'''KAEQ ETTE!'''
V�i ollaq, et sa nakkat tegem� suurt ja uutmalda muutmist v�ega loetavahe artiklihe;
inne, ku mid� muudat, m�rgiq perr�, mi� tuust tullaq v�i.",
'movepagetalktext'        => "�ten artiklilehek�lega pandas t�ist� paika ka arotusk�lg, '''v�ll� arvat sis, ku:'''
*pan�t lehe �test nimeruumist t�ist�,
*vahts� nime all om jo ol�man arotusk�lg, kohe om jo mid�gi kirot�t, vai ku
*j�t�t alomads� kastik�s� m�rgist�m�ld�q.

Kui om nii, sis pan�q vana arotusk�lg er�le vai pan�q taa kokko vahts� arotusk�lega.",
'movearticle'             => 'Pan�q artiklilehek�lg t�ist� paika',
'movenologin'             => 'Sa ol�-i nimega sisse l�nn�q',
'movenologintext'         => 'Et lehek�lge t�ist� paika pandaq, pi�t hind� pruukjas kirj� pandma ja [[Special:UserLogin|nimega sisse minem�]]',
'movenotallowed'          => 'Sul ol�-i lupa {{SITENAME}} lehti t�ist� paika n�staq.',
'newtitle'                => 'Vahts� p��lkir� ala',
'move-watch'              => 'Kaeq taa lehe perr�',
'movepagebtn'             => 'Pan�q artikli t�ist� paika',
'pagemovedsub'            => 'Artikli om t�ist� paika pant',
'movepage-moved'          => "<big>'''$1 om pant nime ala $2'''</big>", # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'S��ntse nimega artikli om jo ol�man vai ol�-i lubat s��nest nimme valliq. Valiq vahts�n� nimi.',
'talkexists'              => 'Artikli om t�ist� paika pant, a arotuslehek�lge saa-s pandaq, selle et vahts� nime all om jo arotusk�lg. Pan�q arotusk�leq esiq kokko.',
'movedto'                 => 'Pant p��lkir� ala:',
'movetalk'                => 'Pan�q ka "arotus", ku saa.',
'1movedto2'               => "pand' lehe [[$1]] vahts� nime [[$2]] ala",
'1movedto2_redir'         => "pand' lehe [[$1]] �mbresaatmislehe [[$2]] p��le",
'movelogpage'             => 'T�ist� paika pandmiisi nimekiri',
'movelogpagetext'         => 'Taa om lehti t�ist� paika pandmiisi nimekiri.',
'movereason'              => 'P�hjus',
'revertmove'              => 'v�taq tagasi',
'delete_and_move'         => 'Kistudaq tsihtlehek�lg �rq ja pan�q tim� as�mal� taa leht',
'delete_and_move_text'    => 'Tsihtlehek�lg  "[[:$1]]" om jo ol�man, kas tahat tuu �rq kistutaq, et taa leht tim� as�mal� pandaq?',
'delete_and_move_confirm' => 'Jah, kistudaq tuu leht �rq',
'delete_and_move_reason'  => '�rq kistut�t, et t��n� tim� as�mal� pandaq',
'selfmove'                => 'L�tte- ja tsihtnimi ommaq samaq; saa-i lehte tim� hind� p��le pandaq.',

# Export
'export'            => 'Lehti viimine',
'exporttext'        => 'V�it vii�q lehti teksti ja toim�ndusaoluu [[Special:Import|�leviimislehe]] kaudu XML-moodun t�ist� MediaWiki k�rra peri t��t�j�he vikihte.

Kirodaq taaha kasti lehti p��lkir�q, kost tahat sissu �le vii�q, eg� ria p��le �ts, ja valiq, kas tahat vii�q lehe k�iki kujj� vai �nn� k�g� vahts�mbat.

Viim�dse johtumis� k�rral v�it ka pruukiq linki, nt leht {{MediaWiki:Mainpage}} saa viid�s lingiga
[[{{ns:special}}:Export/{{MediaWiki:Mainpage}}]].',
'exportcuronly'     => 'V�tku-i k�iki kujj�, a �nn� k�g� vahts�mb',
'exportnohistory'   => "----
'''Viga:''' Tul�-i lehti terve aoluu viimisega toim�.",
'export-submit'     => 'Viiq',
'export-addcattext' => 'V�taq leheq kat�gooriast:',
'export-addcat'     => 'Pan�q mano',
'export-download'   => 'P�st�q teed�st�s',

# Namespace 8 related
'allmessages'               => 'Tallitusteed�seq',
'allmessagesname'           => 'Nimi',
'allmessagesdefault'        => 'Vaikimiisi tekst',
'allmessagescurrent'        => 'Parhillan� tekst',
'allmessagestext'           => 'Taan nimekir�n ommaq k�ik MediaWiki nimeruumi tallitusteed�seq.
Please visit [http://www.mediawiki.org/wiki/Localisation MediaWiki Localisation] and [http://translatewiki.net Betawiki] if you wish to contribute to the generic MediaWiki localisation.',
'allmessagesnotsupportedDB' => "Taad lehte saa-i pruukiq, selle et '''\$wgUseDatabaseMessages'''-s��dmine om v�l�n.",
'allmessagesfilter'         => 'Teed�senimmi s�glumin�:',
'allmessagesmodified'       => 'N��t�q �nn� muud�tuid',

# Thumbnails
'thumbnail-more'           => 'Suur�ndaq',
'filemissing'              => 'Ol�-i teed�st�t',
'thumbnail_error'          => 'V�ikupildi luumin� l��-s k�rda: $1',
'djvu_page_error'          => 'DjVu lehe viga',
'djvu_no_xml'              => 'Saa-s DjVu-teed�st� jaos XML-i k�tte',
'thumbnail_invalid_params' => 'V�lss v�ikupildi parametriq',
'thumbnail_dest_directory' => 'Saa-i tsihtkausta luvvaq',

# Special:Import
'import'                     => 'Tuuq lehti',
'importinterwiki'            => 'Tuuq lehti t��s�st vikist',
'import-interwiki-text'      => 'Valiq viki ja lehe nimi. Kujj� kuup��v�q ja toim�ndajid� nimeq hoi�tas�q alal�. K�ik t�isist vikidest tuumis�q pandas�q kirj� [[Special:Log/import|tuumiisi nimekirj�]].',
'import-interwiki-history'   => 'Kopiq lehe terveq aolugu',
'import-interwiki-submit'    => 'Tuuq',
'import-interwiki-namespace' => 'Pan�q leheq nimeruumi:',
'import-comment'             => 'P�hjus:',
'importtext'                 => 'Viiq l�ttevikist lehti [[Special:Export|viimis]]-t��riistaga. P�st�q teed�s nii uman puutrin ku siin.',
'importstart'                => 'Tuvvas lehti...',
'import-revision-count'      => '$1 {{PLURAL:$1|kujo|kujjo}}',
'importnopages'              => 'Ol�-i lehti, mid� tuvvaq.',
'importfailed'               => 'Tuumin� l��-s k�rda: $1',
'importunknownsource'        => 'Tundmaldaq tuumis� l�ttet��p',
'importcantopen'             => 'Saa-s tuudut teed�st�t vallal�',
'importbadinterwiki'         => 'K�lbmalda vikidevaih�lin� link',
'importnotext'               => 'T�hi vai tekstild�',
'importsuccess'              => 'Tuumin� valmis!',
'importhistoryconflict'      => 'Lehest om ol�man tuuduga vastaolon kujo. Taad lehte v�i ollaq jo inne tuud.',
'importnosources'            => 'Ol�-i vikidevaih�liidsi tuumisl�ttit ja aoluu �kva p�stmine t��t�-i.',
'importnofile'               => 'Ol�-i �ttegi tuudut teed�st�t.',
'importuploaderrorsize'      => 'Teed�st� �leslaatmin� l��-s k�rda, taa om suur�mb, ku lubat.',
'importuploaderrorpartial'   => 'Teed�st� �leslaatmin� l��-s k�rda. �nn� osa teed�st�st laaditi �les.',
'importuploaderrortemp'      => 'Teed�st� �leslaatmin� l��-s k�rda. Ol�-i aotlist kausta.',

# Import log
'importlogpage'                    => 'Tuumiisi nimekiri',
'importlogpagetext'                => 'T�isist vikidest tuuduisi lehti nimekiri.',
'import-logentry-upload'           => 't�i lehe [[$1]] saat�n teed�st�',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|kujo|kujjo}}',
'import-logentry-interwiki'        => 't�i t��s�st vikist lehe �$1�',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|kujo|kujjo}} lehest $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Mu pruukjaleht',
'tooltip-pt-anonuserpage'         => 'Su puutri v�rgoaadr�si pruukjaleht',
'tooltip-pt-mytalk'               => 'Mu arotusk�lg',
'tooltip-pt-anontalk'             => 'Arotus taa puutri v�rgoaadr�si p��lt tett�isi toim�nduisi �le',
'tooltip-pt-preferences'          => 'Mu s��dmiseq',
'tooltip-pt-watchlist'            => 'Nimekiri lehist, mil tahtnuq silm� p��l hoitaq',
'tooltip-pt-mycontris'            => 'Mu ummi toim�nduisi nimekiri',
'tooltip-pt-login'                => 'Mineq nimega sisse vai tiiq hind�le pruukjanimi (soovitav).',
'tooltip-pt-anonlogin'            => 'Mineq nimega sisse vai tiiq hind�le pruukjanimi (soovitav).',
'tooltip-pt-logout'               => 'Mineq nime alt v�ll�',
'tooltip-ca-talk'                 => 'Arotus lehe sisu �le',
'tooltip-ca-edit'                 => 'Saa v�it taad lehte toim�ndaq.',
'tooltip-ca-addsection'           => 'J�t�q taal� lehele komm�ntaar.',
'tooltip-ca-viewsource'           => 'Taa om kaids�t leht. Saat kaiaq �nn� taa l�ttekuudi.',
'tooltip-ca-history'              => 'Taa lehe van�mbaq kujoq.',
'tooltip-ca-protect'              => 'V�taq taa leht kaits� ala',
'tooltip-ca-delete'               => 'Kistudaq taa leht �rq',
'tooltip-ca-undelete'             => 'Tuuq taa leht kistut�duist tagasi',
'tooltip-ca-move'                 => 'Pan�q taa leht t�ist� paika',
'tooltip-ca-watch'                => 'Pan�q taa leht umma perr�kaemisnimekirj�',
'tooltip-ca-unwatch'              => 'V�taq taa leht perr�kaemisnimekir�st maaha',
'tooltip-search'                  => 'Otsiq vikist {{SITENAME}}',
'tooltip-search-go'               => 'Mineq t�ps�he s��ntse nimega lehe p��le, ku s��ne ol�man om',
'tooltip-search-fulltext'         => 'Otsiq lehti p��lt seod teksti',
'tooltip-p-logo'                  => 'P��leht',
'tooltip-n-mainpage'              => 'Mineq p��lehele',
'tooltip-n-portal'                => 'Taa viki arotus�kotus',
'tooltip-n-currentevents'         => 'Tiidmist tuu kotsil�, mi� parhilla s�nn�s',
'tooltip-n-recentchanges'         => 'Per�m�idsi muutmiisi nimekiri',
'tooltip-n-randompage'            => 'Tiiq vallal� johuslin� lehek�lg',
'tooltip-n-help'                  => 'Abiotsmis� kotus',
'tooltip-t-whatlinkshere'         => 'Sii�q n��t�jide linkega lehti nimekiri',
'tooltip-t-recentchangeslinked'   => 'Viim�dseq muutmis�q lehile, mink p��le n��d�t�s linkega seo lehe p��lt',
'tooltip-feed-rss'                => 'Taa lehe RSS-kujo',
'tooltip-feed-atom'               => 'Taa lehe Atom-kujo',
'tooltip-t-contributions'         => 'N��t�q taa pruukja toim�nduisi nimekirj�',
'tooltip-t-emailuser'             => 'Saadaq taal� pruukjal� e-kiri',
'tooltip-t-upload'                => 'Laadiq �les teed�st�id',
'tooltip-t-specialpages'          => 'N��t�q tallituslehek�lgi',
'tooltip-t-print'                 => 'Taa lehe tr�k�kujo',
'tooltip-t-permalink'             => 'Seo lehekujo p�s�link',
'tooltip-ca-nstab-main'           => 'N��t�q sisulehek�lge',
'tooltip-ca-nstab-user'           => 'N��t�q pruukjalehek�lge',
'tooltip-ca-nstab-media'          => 'N��t�q meedi�lehek�lge',
'tooltip-ca-nstab-special'        => 'Taa om tallituslehek�lg',
'tooltip-ca-nstab-project'        => 'N��t�q projektilehek�lge',
'tooltip-ca-nstab-image'          => 'N��t�q teed�st� lehek�lge',
'tooltip-ca-nstab-mediawiki'      => 'N��t�q tallitusteed�st',
'tooltip-ca-nstab-template'       => 'N��t�q n��d�st',
'tooltip-ca-nstab-help'           => 'N��t�q abilehek�lge',
'tooltip-ca-nstab-category'       => 'N��t�q kat�goorialehek�lge',
'tooltip-minoredit'               => "M�rgiq taa �rq ku tsill'ok�n� muutmin�",
'tooltip-save'                    => 'P�st�q muutmis�q',
'tooltip-preview'                 => 'Kaeq umaq toim�ndus�q inne p�stmist �le!',
'tooltip-diff'                    => 'N��t�q tett�id muutmiisi',
'tooltip-compareselectedversions' => 'N��t�q seo lehe valituid� kui� lahkominekit.',
'tooltip-watch'                   => 'Pan�q taa leht umma perr�kaemisnimekirj�',
'tooltip-recreate'                => 'Tuuq taa leht kisut�duist tagasi',
'tooltip-upload'                  => 'Nakkaq �les laatma',

# Stylesheets
'common.css'   => '/* Taa lehe p��l om tervet taad vikit muutvit kujonduisi */',
'monobook.css' => '/* Taa lehe p��l om Monobook-v�ll�n�gemist muutvit kujonduisi. */',

# Scripts
'common.js'   => '/* Taa lehe kuud pandas mano eg�le lehelaatmis�l� */',
'monobook.js' => '/* Ol�i soovit�t; pruugiq [[MediaWiki:common.js]] */',

# Metadata
'nodublincore'      => 'Taan serverin ol�-i Dublin Core RDF-metateed�st t��le pant.',
'nocreativecommons' => 'Taan serverin ol�-i Creative Commonsi RDF-metateed�st t��le pant.',
'notacceptable'     => 'Wikiserver saa-i n��d�d�q teed�st s��ntsen moodun, mid� su programm saasiq luk�q.',

# Attribution
'anonymous'        => '{{SITENAME}} {{PLURAL:$1|nimeld� pruukja|nimeld� pruukjaq}}',
'siteuser'         => '{{SITENAME}} pruukja $1',
'lastmodifiedatby' => "Taad lehte toim�nd' viim�te �$3� $2 kell $1.", # $1 date, $2 time, $3 user
'othercontribs'    => 'Tenn�q pruukja $1.',
'others'           => 't��s�q',
'siteusers'        => '{{SITENAME}} {{PLURAL:$2|pruukja|pruukjaq}}  $1',
'creditspage'      => 'Lehe tegijide nimekiri',
'nocredits'        => 'Taa lehe tegijide nimekirj� ol�-i.',

# Spam protection
'spamprotectiontitle' => 'Prahis�g�l',
'spamprotectiontext'  => 'Prahis�g�l om lehe kinniq pid�n�q ja las�-i taad p�st�q. Tuu p�hjus om arvadaq vikist v�ll�pool� n��t�j� link.',
'spamprotectionmatch' => 'Tekst, mid� prahis�g�l l�bi las�-s: $1',
'spambot_username'    => 'MediaWiki prahih��t�j�',
'spam_reverting'      => 'Tagasi p��ret viim�dse kujo p��le, koh ol�-i linke lehele $1',
'spam_blanking'       => "K�igin kuj�n oll' linke lehele $1. Leht t�h�s tett.",

# Info page
'infosubtitle'   => 'Teed�s lehe kotsil�',
'numedits'       => 'Lehele tett�id toim�nduisi: $1',
'numtalkedits'   => 'Arotusk�lele tett�id toim�nduisi: $1',
'numwatchers'    => 'Perr�kaejit: $1',
'numauthors'     => 'Lehele er�le kirotajit: $1',
'numtalkauthors' => 'Arotusk�lele er�le kirotajit: $1',

# Skin names
'skinname-standard'    => 'Array',
'skinname-cologneblue' => 'Array',
'skinname-myskin'      => 'Array',

# Math options
'mw_math_png'    => 'K�g� PNG',
'mw_math_simple' => 'Ku v�ega lihts�, sis HTML, muido PNG',
'mw_math_html'   => 'Ku saa, sis HTML, muido PNG',
'mw_math_source' => 'Alal� hoitaq TeX (tekstikaejin)',
'mw_math_modern' => 'Vahts�mbil� v�rgokaejil� soovit�t',

# Patrolling
'markaspatrolleddiff'                 => 'M�rgiq �lekaetus',
'markaspatrolledtext'                 => 'M�rgiq toim�ndus �lekaetus',
'markedaspatrolled'                   => 'M�rgit �lekaetus',
'markedaspatrolledtext'               => 'Valit kujo om �le kaet.',
'rcpatroldisabled'                    => 'Vahtsid� muutmiisi �lekaemist ol�-i t��le s�et.',
'rcpatroldisabledtext'                => 'Vahtsid� muutmiisi �lekaemist ol�-i t��le s�et.',
'markedaspatrollederror'              => 'Muutuisi �lekaetus m�rkmine l��-s k�rda',
'markedaspatrollederrortext'          => 'Ol�-i ant lehe muutmiskujjo, mid� �lekaetus m�rkiq.',
'markedaspatrollederror-noautopatrol' => 'Esiq tohe-i ummi muutmiisi �lekaetus m�rkiq.',

# Patrol log
'patrol-log-page' => 'Muutmiisi �lekaemiisi nimekiri',
'patrol-log-line' => 'm�rke lehe $2 muutmis� $1 �lekaetus $3',
'patrol-log-auto' => '(automaatn�)',

# Image deletion
'deletedrevision'    => 'Kistut�di �rq vana kujo $1.',
'filedelete-missing' => 'Teed�st�t "$1" saa-i kistutaq, taad ol�-i ol�man.',

# Browsing diffs
'previousdiff' => '? Innemb�ne muutmin�',
'nextdiff'     => 'Vahts�mb toim�ndus ?',

# Media information
'mediawarning'         => "'''Kaeq ette''': Taan teed�st�n v�i ollaq sisen ohtlik kuud, mi� v�i su programmil� vika tet�q.<hr />",
'imagemaxsize'         => 'Pildi selet�slehe p��l n��t�mise suuruspiir:',
'thumbsize'            => 'V�ikupildi suurus:',
'file-info'            => '$1, MIME-t��p: $2',
'file-info-size'       => '($1�$2 pikslit, $3, MIME-t��p: $4)',
'file-nohires'         => '<small>Taast ter�v�mp� pilti ol�-i saiaq.</small>',
'svg-long-desc'        => '(SVG-teed�st�, p�hisuurus $1 � $2 pikslit, teed�st� suurus $3)',
'show-big-image'       => 'T��sterr�v kujo',
'show-big-image-thumb' => '<small>Proovikaemis� suurus: $1�$2 pikslit</small>',

# Special:NewFiles
'newimages'             => 'Vahts�q pildiq',
'imagelisttext'         => 'Pilte nimekir�n $1 (sordiduq $2).',
'showhidebots'          => '($1 robodiq)',
'noimages'              => 'Ol�-i vahtsit pilte.',
'ilsubmit'              => 'Otsmin�',
'bydate'                => 'kuup��v� perr�',
'sp-newimages-showfrom' => 'N��t�q vahtsit pilte kuup��v�st $1 p��le',

# Bad image list
'bad_image_list' => 'Nimekir� muud om s��ne:

�nn� *-m�rgiga algajaq riaq v�etas�q arv�he. Edim�ne link pi�t n��t�m� keeled� teed�st� p��le. K�ik t��s�q lingiq ommaq er�nguq, tuu t�hend�s leheq, kon pilti v�i pruukiq.',

# Metadata
'metadata'          => 'Sisuselet�seq',
'metadata-help'     => 'Seon teed�st�n om lisateed�st, mi� om arvadaq peri pildinudsijast, digikaam�rast vai pilditoim�ndusprogrammist. Ku teed�st�t om per�st tim� tegemist muud�t, sis pruugi-i taa teed�s in�mb �ig� ollaq.',
'metadata-expand'   => 'N��t�q k�iki sisuselet�isi',
'metadata-collapse' => 'N��t�q �nn� t�hts�mbit sisuselet�isi',
'metadata-fields'   => 'Naaq riaq ommaq n�t�q pildilehe p��l, ku sisuselet�se tap�l om t�hi.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Lakjus',
'exif-imagelength'                 => 'Korgus',
'exif-bitspersample'               => 'Bitti osa kotsil�',
'exif-compression'                 => 'Kokkopakmisviis',
'exif-photometricinterpretation'   => 'Pildipunkt� �lesehit�s',
'exif-orientation'                 => 'Tsiht',
'exif-samplesperpixel'             => 'Oss� arv',
'exif-planarconfiguration'         => 'Teed�se k�rraldamin�',
'exif-ycbcrsubsampling'            => 'Y ja C alan��t�svaih�k�rd',
'exif-ycbcrpositioning'            => 'Y ja C paikas��dmine',
'exif-xresolution'                 => 'Pildi ter�v�s lajold�',
'exif-yresolution'                 => 'Pildi ter�v�s pikuld�',
'exif-resolutionunit'              => 'Ter�vusosa X- ja Y-tsihin',
'exif-stripoffsets'                => 'Pilditeed�se kotus',
'exif-rowsperstrip'                => 'Riban rivve',
'exif-stripbytecounts'             => 'Bait� kokkopakitun riban',
'exif-jpeginterchangeformat'       => 'Kavvus JPEG SOI-st',
'exif-jpeginterchangeformatlength' => 'JPEG-teed�ssen bait�',
'exif-transferfunction'            => '�lekand�funktsiuun',
'exif-whitepoint'                  => 'Valg� punkti v�rmiarv',
'exif-primarychromaticities'       => 'P��v�rme v�rmiarvoq',
'exif-ycbcrcoefficients'           => 'V�rmiruumi t��s�ndusmaatriksi elemendiq',
'exif-referenceblackwhite'         => 'Musta-valg�paari v�rr�lusarvoq',
'exif-datetime'                    => 'Viim�te muud�t',
'exif-imagedescription'            => 'Pildiallkiri',
'exif-make'                        => 'Kaam�ra tekij',
'exif-model'                       => 'Kaam�ra mut�l',
'exif-software'                    => 'Pruugit tarkvara',
'exif-artist'                      => 'Tekij',
'exif-copyright'                   => 'Tegij��igus� umanik',
'exif-exifversion'                 => 'Exif-kujo',
'exif-flashpixversion'             => 'Toet Flashpix-kujo',
'exif-colorspace'                  => 'V�rmiruum',
'exif-componentsconfiguration'     => 'Eg� osa t�hend�s',
'exif-compressedbitsperpixel'      => 'Pildi kokkopakmismuud',
'exif-pixelydimension'             => 'K�lbolin� pildi lakjus',
'exif-pixelxdimension'             => 'K�lbolin� pildi korgus',
'exif-makernote'                   => 'Tegij� selet�seq',
'exif-usercomment'                 => 'Pruukja komm�ntaariq',
'exif-relatedsoundfile'            => 'Manopant hel�teed�st�',
'exif-datetimeoriginal'            => 'Luumisaig',
'exif-datetimedigitized'           => 'Digitalisiirmisaig',
'exif-subsectime'                  => 'Ao sekundiosaq',
'exif-subsectimeoriginal'          => 'Edim�lt olnuq ao sekundiosaq',
'exif-subsectimedigitized'         => 'Digitalisiirmisao sekundiosaq',
'exif-exposuretime'                => 'Valgustusaig',
'exif-exposuretime-format'         => '$1 sek ($2)',
'exif-fnumber'                     => 'Mulguvaih�k�rd',
'exif-exposureprogram'             => 'Valgustusprogramm',
'exif-spectralsensitivity'         => 'Spektri herk�s',
'exif-isospeedratings'             => 'Herk�s (ISO)',
'exif-oecf'                        => 'Optoelektroonilin� muutumisk�rdaja',
'exif-shutterspeedvalue'           => 'Katigu kib�hus',
'exif-aperturevalue'               => 'L�bilaskmismulk',
'exif-brightnessvalue'             => 'Heleh�s',
'exif-exposurebiasvalue'           => 'Valgustus� parandus',
'exif-maxaperturevalue'            => 'K�g� suur�mb l�bilaskmismulk',
'exif-subjectdistance'             => 'Tsihtm�rgi kavvus',
'exif-meteringmode'                => 'M��tmisviis',
'exif-lightsource'                 => 'Valgusl�teq',
'exif-flash'                       => 'V�lk',
'exif-focallength'                 => 'L��dse palotuslakjus',
'exif-subjectarea'                 => 'Tsihtm�rgi ala',
'exif-flashenergy'                 => 'V�lg� v�gi',
'exif-spatialfrequencyresponse'    => 'Ruumifrekvendsi vast�q',
'exif-focalplanexresolution'       => 'T�ps�st�sastm� X-resolutsiuun',
'exif-focalplaneyresolution'       => 'T�ps�st�stas�m� Y-resolutsiuun',
'exif-focalplaneresolutionunit'    => 'T�ps�st�stas�m� resolutsiooni m��t',
'exif-subjectlocation'             => 'Tsihtm�rgi kotus',
'exif-exposureindex'               => 'Valgustusindeks',
'exif-sensingmethod'               => 'M��tmisviis',
'exif-filesource'                  => 'Teed�st�l�teq',
'exif-scenetype'                   => 'Pildit��p',
'exif-cfapattern'                  => 'CFA-kujond',
'exif-customrendered'              => 'Hind�peri pilditoim�ndus',
'exif-exposuremode'                => 'Valgustusviis',
'exif-whitebalance'                => 'Valg� tasakaal',
'exif-digitalzoomratio'            => 'Digitaaln� suur�ndusk�rdaja',
'exif-focallengthin35mmfilm'       => '35 mm-dse filmi palotusvaheq',
'exif-scenecapturetype'            => 'Pildi sissev�tmisviis',
'exif-gaincontrol'                 => 'Pildi s��dmine',
'exif-contrast'                    => 'Kontrast',
'exif-saturation'                  => 'V�rmik�ll�s�s',
'exif-sharpness'                   => 'Ter�v�s',
'exif-devicesettingdescription'    => 'Kaam�ra s��dmiisi selet�s',
'exif-subjectdistancerange'        => 'Tsihtm�rgi kavvusvaih',
'exif-imageuniqueid'               => 'Pildi tunnusnumm�r',
'exif-gpsversionid'                => 'GPS-koodi kujo',
'exif-gpslatituderef'              => "P�h'a- vai l�unalakjus",
'exif-gpslatitude'                 => 'Lakjus',
'exif-gpslongituderef'             => 'Hummogu- vai �dagupikkus',
'exif-gpslongitude'                => 'Pikkus',
'exif-gpsaltituderef'              => 'Korgus� v�rr�luspunkt',
'exif-gpsaltitude'                 => 'Korgus',
'exif-gpstimestamp'                => 'GPS-aig (aatomikell)',
'exif-gpssatellites'               => 'M��tmis�s pruugiduq sat�lliidiq',
'exif-gpsstatus'                   => 'Vastav�tja sais',
'exif-gpsmeasuremode'              => 'M��tmisviis',
'exif-gpsdop'                      => 'M��tmist�ps�s',
'exif-gpsspeedref'                 => 'Kib�husm��t',
'exif-gpsspeed'                    => 'GPS-vastav�tja kib�hus',
'exif-gpstrackref'                 => 'Liikmistsihi v�rr�luspunkt',
'exif-gpstrack'                    => 'Liikmistsiht',
'exif-gpsimgdirectionref'          => 'Pildi tsihi v�rr�luspunkt',
'exif-gpsimgdirection'             => 'Pildi tsiht',
'exif-gpsmapdatum'                 => 'Pruugit geodeetiline maam��tmisteed�s',
'exif-gpsdestlatituderef'          => 'Tsihtm�rgi lakjus� v�rr�luspunkt',
'exif-gpsdestlatitude'             => 'Tsihtm�rgi lakjus',
'exif-gpsdestlongituderef'         => 'Tsihtm�rgi pikkus� v�rr�luspunkt',
'exif-gpsdestlongitude'            => 'Tsihtm�rgi pikkus',
'exif-gpsdestbearingref'           => 'Tsihtm�rgi v�ll�timmise v�rr�luspunkt',
'exif-gpsdestbearing'              => 'Tsihtm�rgi v�ll�timmine',
'exif-gpsdestdistanceref'          => 'Tsihtm�rgi kavvus� v�rr�luspunkt',
'exif-gpsdestdistance'             => 'Tsihtm�rgi kavvus',
'exif-gpsprocessingmethod'         => 'GPS-i t��moodu nimi',
'exif-gpsareainformation'          => 'GPS-ala nimi',
'exif-gpsdatestamp'                => 'GPS-kuup�iv',
'exif-gpsdifferential'             => 'GPS-differentsiaalparandus',

# EXIF attributes
'exif-compression-1' => 'Kokkopakmalda',

'exif-unknowndate' => 'Tundmalda kuup�iv',

'exif-orientation-1' => 'Harilik', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Pik�le k��net', # 0th row: top; 0th column: right
'exif-orientation-3' => '180� k��net', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Pist� k��net', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'K��net 90� vastap�iv� ja pist�', # 0th row: left; 0th column: top
'exif-orientation-6' => 'K��net 90� perip�iv�', # 0th row: right; 0th column: top
'exif-orientation-7' => 'K��net 90� perip�iv� ja pist�', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'K��net 90� vastap�iv�', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => "''chunky''-formaat",
'exif-planarconfiguration-2' => "''planar''-formaat",

'exif-componentsconfiguration-0' => 'ol�-i',

'exif-exposureprogram-0' => 'Ol�-i paika s�et',
'exif-exposureprogram-1' => 'K�silde paikas�et',
'exif-exposureprogram-2' => 'P�hiprogramm',
'exif-exposureprogram-3' => 'L�bilaskmismulgu p�hilisus',
'exif-exposureprogram-4' => 'Katiguao p�hilisus',
'exif-exposureprogram-5' => 'Luuva programm (suur�nd�t s�vv�ster�v�st)',
'exif-exposureprogram-6' => 'Liikmisprogramm (suur�nd�t katiguao kib�hust)',
'exif-exposureprogram-7' => 'Rinnapildimuud (l�hipildele, kon tagap�hi om h�gon�)',
'exif-exposureprogram-8' => 'Maastigumuud (maastigupildele, kon tagap�hi om selge)',

'exif-subjectdistance-value' => '$1 miitrit',

'exif-meteringmode-0'   => 'Tiidm�ld�',
'exif-meteringmode-1'   => 'Keskm�ne',
'exif-meteringmode-2'   => 'Keskkotus�perine keskm�ne',
'exif-meteringmode-3'   => 'T�pp',
'exif-meteringmode-4'   => 'Mitm�t�piline',
'exif-meteringmode-5'   => 'Kujond',
'exif-meteringmode-6'   => 'Osalin�',
'exif-meteringmode-255' => 'Muu',

'exif-lightsource-0'   => 'Tiidm�ld�',
'exif-lightsource-1'   => 'P��v�valgus',
'exif-lightsource-2'   => 'P��v�valguslamp',
'exif-lightsource-3'   => 'H��glamp (kunstvalgus)',
'exif-lightsource-4'   => 'V�lk',
'exif-lightsource-9'   => 'Selge ilm',
'exif-lightsource-10'  => 'Pilvine ilm',
'exif-lightsource-11'  => 'Vari',
'exif-lightsource-12'  => 'P��v�valguslamp (D 5700 � 7100K)',
'exif-lightsource-13'  => 'P��v�valguslamp (N 4600 � 5400K)',
'exif-lightsource-14'  => 'K�lmvalg� p��v�valguslamp (W 3900 � 4500K)',
'exif-lightsource-15'  => 'Valg� p��v�valguslamp (WW 3200 � 3700K)',
'exif-lightsource-17'  => 'Standardvalgus A',
'exif-lightsource-18'  => 'Standardvalgus B',
'exif-lightsource-19'  => 'Standardvalgus C',
'exif-lightsource-24'  => 'ISO stuudioh��glamp',
'exif-lightsource-255' => 'Muu valgus',

'exif-focalplaneresolutionunit-2' => 'tolli',

'exif-sensingmethod-1' => 'Paikas��dm�ld�',
'exif-sensingmethod-2' => '�tene v�rmisensor',
'exif-sensingmethod-3' => 'Kat�n� v�rmisensor',
'exif-sensingmethod-4' => 'Kolm�n� v�rmisensor',
'exif-sensingmethod-5' => 'Sariv�rmisensor',
'exif-sensingmethod-7' => 'Trilineaarsensor',
'exif-sensingmethod-8' => 'Sarilineaarsensor',

'exif-scenetype-1' => '�kva pildistet pilt',

'exif-customrendered-0' => 'Harilik tallitus',
'exif-customrendered-1' => 'Hind�s�et tallitus',

'exif-exposuremode-0' => 'Automaatn� valgustus',
'exif-exposuremode-1' => 'Hind�s�et valgustus',
'exif-exposuremode-2' => 'Automaatn� haardmin�',

'exif-whitebalance-0' => 'Automaatn� valg� tasakaal',
'exif-whitebalance-1' => 'Hind�s�et valg� tasakaal',

'exif-scenecapturetype-0' => 'Harilik',
'exif-scenecapturetype-1' => 'Maastik',
'exif-scenecapturetype-2' => 'Rinnapilt',
'exif-scenecapturetype-3' => '��pilt',

'exif-gaincontrol-0' => 'Ol�-i',
'exif-gaincontrol-1' => 'Matal �l�kinn�t�s',
'exif-gaincontrol-2' => 'Korg� �l�kinn�t�s',
'exif-gaincontrol-3' => 'Matal alakinn�t�s',
'exif-gaincontrol-4' => 'Korg� alakinn�t�s',

'exif-contrast-0' => 'Harilik',
'exif-contrast-1' => 'Pehmeq',
'exif-contrast-2' => 'K�va',

'exif-saturation-0' => 'Harilik',
'exif-saturation-1' => 'V�iku v�rmik�ll�s�s',
'exif-saturation-2' => 'Suur v�rmik�ll�s�s',

'exif-sharpness-0' => 'Harilik',
'exif-sharpness-1' => 'Pehmeq',
'exif-sharpness-2' => 'K�va',

'exif-subjectdistancerange-0' => 'Tiidm�ld�q',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'L�hk�pilt',
'exif-subjectdistancerange-3' => 'Kavv�pilt',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => "P�h'lakjust",
'exif-gpslatitude-s' => 'L�unalakjust',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Hummogupikkust',
'exif-gpslongitude-w' => '�dagupikkust',

'exif-gpsstatus-a' => 'M��tmin� k��',
'exif-gpsstatus-v' => 'Ristim��tmin�',

'exif-gpsmeasuremode-2' => 'Kat�m��tm�lin� m��tmin�',
'exif-gpsmeasuremode-3' => 'Kolm�m��tm�lin� m��tmin�',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'kilomiitrit tunnin',
'exif-gpsspeed-m' => 'miili tunnin',
'exif-gpsspeed-n' => 's�lm�',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Peris tsiht',
'exif-gpsdirection-m' => 'Magn�ttsiht',

# External editor support
'edit-externally'      => 'Toim�ndaq taad teed�st�t v�lidse programmiga',
'edit-externally-help' => '(Lisateed�st loeq [http://www.mediawiki.org/wiki/Manual:External_editors pruukmisoppus� lehe p��lt].',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'k�ik',
'imagelistall'     => 'k�ik',
'watchlistall2'    => ', terveq aolugu',
'namespacesall'    => 'k�ik',
'monthsall'        => 'k�ik',

# E-mail address confirmation
'confirmemail'            => 'Kinn�d�q e-postiaadr�ssit',
'confirmemail_noemail'    => 'Sul ol�-i [[Special:Preferences|ummi s��dmiisihe]] pant k�lbolist e-postiaadr�ssit.',
'confirmemail_text'       => 'Taa viki n�ud e-postiaadr�si kinn�t�mist, inne ku e-posti pruukiq v�it. Saadaq alanol�va nupi p��le vaot�n uma aadr�si p��le kinn�t�se k�s�mise kiri. S��lt l�vv�t lingi, mink vaotamis�ga kinn�t�t uma e-postiaadr�si.',
'confirmemail_pending'    => 'Kinn�t�skiri om jo �rq saad�t. Ku l�it �kva vahts� pruukjanime, oodaq m�ni minot s�nomi tul�kit, inne ku proovit vahts�st.',
'confirmemail_send'       => 'Saadaq kinn�t�skiri �rq',
'confirmemail_sent'       => 'Kinn�t�skiri �rq saad�t.',
'confirmemail_oncreate'   => 'Kinn�t�skiri saad�ti su e-postiaadr�si p��le. Kinn�t�skuudi ol�-i joht vajja nimega sisseminekis, a tuu tul� sul �rq saataq, ku tahat, et sa saanuq taan vikin e-posti saataq.',
'confirmemail_sendfailed' => 'Kinn�t�skiri j�i saatmalda. Kaeq, kas su ann�tun aadr�ssin ol�-i keelet�id m�rke. Postiprogramm saat tagasi: $1',
'confirmemail_invalid'    => 'K�lbmalda kinn�t�skuud. Taa v�i ollaq vanasl�nn�q.',
'confirmemail_needlogin'  => 'Uma e-postiaadr�si kinn�t�mises $1.',
'confirmemail_success'    => 'Su e-postiaadr�s om no �rq kinn�tet. V�it nimega sisse minn�q.',
'confirmemail_loggedin'   => 'Su e-postiaadr�s om no �rq kinn�tet.',
'confirmemail_error'      => "Su e-postiaadr�si kinn�t�misega l�ts' mid�gi v�lssi.",
'confirmemail_subject'    => '{{SITENAME}} e-postiaadr�si kinn�t�mine',
'confirmemail_body'       => 'Ki�ki, arvadaq saq esiq, l�i puutri v�rgoaadr�si $1 p��lt {{SITENAME}} pruukjanime $2. Ku taa om t�t�st� suq pruukjanimi, tiiq vallal� link: $3. Ku taa *ol�-i* suq luud pruukjanimi, sis teku-i mid�gi. Kinn�t�skuud l�tt vanas $4.',

# Scary transclusion
'scarytranscludedisabled' => '[Vikidevaih�lin� teed�sepruukmin� ol�-i k��gin]',
'scarytranscludefailed'   => '[Saa-s n��d�st k�tte: $1]',
'scarytranscludetoolong'  => "[V�rgoaadr�s om pall'o pikk]",

# Trackbacks
'trackbackbox'      => "<div id=\"mw_trackbacks\">Artikli p��le pantuisi linke n��t�mine (''trackbackiq''):<br />\$1</div>",
'trackbackremove'   => ' ([$1 kistutus])',
'trackbacklink'     => "Artikli p��le pantuisi linke n��t�mine (''trackback'')",
'trackbackdeleteok' => "Artikli p��le pantuisi linke n��t�mine (''trackback'') kistut�di �rq.",

# Delete conflict
'deletedwhileediting' => "<center>'''Hoiatus''': taa leht om �rq kistut�t p��lt tuud, ku sa taad toim�ndama naksit!</center>",
'confirmrecreate'     => "Pruukja '''[[User:$1|$1]]''' ([[User talk:$1|arotus]]) kistut' taa lehe �rq p��lt tuud, ku sa naksit taad toim�ndama. P�hjus oll':
: ''$2''
Ol�q h��, kinn�d�q, et tahat taad lehte vahts�st luvvaq.",
'recreate'            => 'Luuq vahts�st',

# action=purge
'confirm_purge_button' => 'H�� k�lh',
'confirm-purge-top'    => 'Kas taa lehe vaih�m�lokujoq tul�vaq �rq kistutaq?',

# Multipage image navigation
'imgmultipageprev' => '? minev�ne leht',
'imgmultipagenext' => 'j�rgm�ne leht ?',
'imgmultigo'       => 'Mineq!',

# Table pager
'ascending_abbrev'         => '�lespool�',
'descending_abbrev'        => 'allapool�',
'table_pager_next'         => 'J�rgm�ne leht',
'table_pager_prev'         => 'Minev�ne leht',
'table_pager_first'        => 'Edim�ne leht',
'table_pager_last'         => 'Per�m�ne leht',
'table_pager_limit'        => 'N��t�q $1 �ts�st lehe kotsil�',
'table_pager_limit_submit' => 'Mineq',
'table_pager_empty'        => 'Ol�-i tul�muisi',

# Auto-summaries
'autosumm-blank'   => 'Leht tetti t�h�s',
'autosumm-replace' => "As�mal� panti '$1'",
'autoredircomment' => '�mbresaatmin� lehele [[$1]]',
'autosumm-new'     => 'Vahts�n� leht: $1',

# Live preview
'livepreview-loading' => 'Laat�',
'livepreview-ready'   => 'Laat� Valmis!',
'livepreview-failed'  => 'Kip�kaehus l��-s k��m�!
Prooviq harilikku kaehust.',
'livepreview-error'   => '�tist�mine l��-s k�rda: $1 "$2"
Prooviq harilikku kaehust.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Muutmiisi, mi� ommaq vahts�mbaq ku $1 sekundit, pruugi-i taan nimekir�n n�t�q ollaq.',
'lag-warn-high'   => 'Teed�skogoserveri aiglus� per�st pruugi-i $1 sekundist v�rskimbit muutmiisi nimekir�n n�t�q ollaq.',

# Watchlist editor
'watchlistedit-numitems'      => 'Su perr�kaemisnimekir�n om {{PLURAL:$1|1 p��lkiri|$1 p��lkirj�}}, arotusleheq v�ll� arvaduq.',
'watchlistedit-noitems'       => 'Perr�kaemisnimekir�n ol�-i �ttegi p��lkirj�.',
'watchlistedit-normal-title'  => 'Toim�ndaq perr�kaemisnimekirj�',
'watchlistedit-normal-legend' => 'Kistudaq p��lkir�q perr�kaemisnimekir�st �rq',
'watchlistedit-normal-submit' => 'Kistudaq p��lkir�q �rq',
'watchlistedit-raw-titles'    => 'P��lkir�q:',
'watchlistedit-raw-submit'    => 'Vahts�ndaq perr�kaemisnimekirj�',
'watchlistedit-raw-done'      => 'Perr�kaemisniekiri om �rq vahts�nd�t.',
'watchlistedit-raw-added'     => 'Mano pant {{PLURAL:$1|1 p��lkiri|$1 p��lkirj�}}:',
'watchlistedit-raw-removed'   => '�rq kistut�t {{PLURAL:$1|1 p��lkiri|$1 p��lkirj�}}:',

# Watchlist editing tools
'watchlisttools-view' => 'N��t�q muutmiisi',
'watchlisttools-edit' => 'Kaeq ja toim�ndaq perr�kaemisnimekirj�',
'watchlisttools-raw'  => 'Toim�ndaq l�tteteed�st�t',

# Special:Version
'version'                  => 'Kujo', # Not used as normal message but as header for the special page itself
'version-version'          => 'Kujo',
'version-software-version' => 'Kujo',

# Special:FilePath
'filepath'        => 'Teed�st� aadr�s',
'filepath-page'   => 'Teed�st�:',
'filepath-submit' => 'Aadr�s',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'Teed�st�nimi:',
'fileduplicatesearch-submit'   => 'Otsiq',

# Special:SpecialPages
'specialpages'                   => 'Tallituslehek�leq',
'specialpages-note'              => '----
* Hariliguq tallitusleheq.
* <span class="mw-specialpagerestricted">Piired�q tallitusleheq.</span>',
'specialpages-group-maintenance' => 'K�rranpid�misteed�seq',
'specialpages-group-other'       => 'Muuq tallitusleheq',
'specialpages-group-login'       => 'Nimega sisseminek / Pruukjanime luumin�',
'specialpages-group-changes'     => 'Muutmis�q ja muutmisnimekir�q',
'specialpages-group-media'       => 'Meedi�teed�st�q',
'specialpages-group-users'       => 'Pruukjaq ja �igus�q',
'specialpages-group-highuse'     => 'Rohk�mbpruugiduq leheq',
'specialpages-group-pages'       => 'Lehenimekir�q',
'specialpages-group-pagetools'   => 'Lehet��riistaq',
'specialpages-group-wiki'        => 'Vikiteed�seq ja t��riistaq',
'specialpages-group-redirects'   => '�mbren��t�mistallitusleheq',

);
