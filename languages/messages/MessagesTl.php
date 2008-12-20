<?php
/** Tagalog (Tagalog)
 *
 * @ingroup Language
 * @file
 *
 * @author tl.wikipedia.org sysops
 * @author AnakngAraw
 * @author Felipe Aira
 * @author Sky Harbor
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Midya',
	NS_SPECIAL          => 'Natatangi',
	NS_TALK             => 'Usapan',
	NS_USER             => 'Tagagamit',
	NS_USER_TALK        => 'Usapang tagagamit',
	NS_PROJECT_TALK     => 'Usapang $1',
	NS_FILE             => 'Larawan',
	NS_FILE_TALK        => 'Usapang larawan',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Usapang MediaWiki',
	NS_TEMPLATE         => 'Suleras',
	NS_TEMPLATE_TALK    => 'Usapang suleras',
	NS_HELP             => 'Tulong',
	NS_HELP_TALK        => 'Usapang tulong',
	NS_CATEGORY         => 'Kaurian',
	NS_CATEGORY_TALK    => 'Usapang kaurian',
);

$namespaceAliases = array(
	'Kategorya'         => NS_CATEGORY,
	'Usapang kategorya' => NS_CATEGORY_TALK,
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Salungguhitan ang mga kawing:',
'tog-highlightbroken'         => 'Ayusin ang mga sirang kawing <a href="" class="new">nang ganito</a> (alternatibo: nang ganito<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Pantayin ang mga talata',
'tog-hideminor'               => 'Itago ang mga maliliit na pagbabago sa mga huling binago',
'tog-extendwatchlist'         => 'Palawigin ang talaan ng bantayan upang maipakita ang lahat ng mapapakinabangang mga pagbabago.',
'tog-usenewrc'                => 'Pinadagdagang huling binago (JavaScript)',
'tog-numberheadings'          => 'Automatikong bilangin ang mga pamagat',
'tog-showtoolbar'             => "Ipakita ang ''toolbar'' ng pagbabago (JavaScript)",
'tog-editondblclick'          => 'Magbago ng mga pahina sa dalawahang pagpindot (JavaScript)',
'tog-editsection'             => 'Payagan ang mga pagbabagong panseksyon sa mga [baguhin] na kawing',
'tog-editsectiononrightclick' => 'Payagan ang mga pagbabagong panseksyon sa pakanang pagpindot ng mga panseksyong pamagat (JavaScript)',
'tog-showtoc'                 => 'Ipakita ang talaan ng mga nilalaman (sa mga pahinang may higit sa 3 punong pamagat)',
'tog-rememberpassword'        => 'Tandaan ang paglagda ko sa kompyuter na ito',
'tog-editwidth'               => 'May buong kalaparan ang kahon ng pagbabago',
'tog-watchcreations'          => 'Idagdag ang mga pahinang ginawa ko sa aking talaan ng bantayan',
'tog-watchdefault'            => 'Idagdag ang mga pahinang binago ko sa aking talaan ng bantayan',
'tog-watchmoves'              => 'Idagdag ang mga pahinang inilipat ko sa aking talaan ng bantayan',
'tog-watchdeletion'           => 'Idagdag mga pahinang binura ko sa aking talaan ng bantayan',
'tog-minordefault'            => 'Markahan ang lahat ng pagbabago bilang maliit nang nakatakda',
'tog-previewontop'            => 'Ipakita ang pribyu bago ang kahon ng pagbabago',
'tog-previewonfirst'          => 'Ipakita ang pribyu sa unang pagbabago',
'tog-nocache'                 => 'Salantain ang pagbaon ng pahina',
'tog-enotifwatchlistpages'    => 'Mag-e-liham sa akin kapag binago ang isa sa mga pahinang binabantayan ko',
'tog-enotifusertalkpages'     => 'Mag-e-liham sa akin kapag binago ang aking pahinang usapan',
'tog-enotifminoredits'        => 'Mag-e-liham din sa akin para sa mga maliliit na pagbabago ng mga pahina',
'tog-enotifrevealaddr'        => 'Ipakita ang direksyong e-liham ko sa mga liham ng pagpapahayag',
'tog-shownumberswatching'     => 'Ipakita ang bilang ng mga nagbabantay na manggagamit',
'tog-fancysig'                => 'Hilaw na lagda (walang automatikong pagkawing)',
'tog-externaleditor'          => 'Gumamit ng nakatakdang panlabas na pambago (para sa mga dalubhasa lamang, kailangan ng natatanging mga pagtatakda sa iyong kompyuter)',
'tog-externaldiff'            => 'Gumamit ng nakatakdang ibang panlabas (para sa mga dalubhasa lamang, kailangan ng natatanging pagtatakda sa iyong kompyuter)',
'tog-showjumplinks'           => 'Payagan ang mga "tumalon sa" na kawing pampagamit',
'tog-uselivepreview'          => 'Gamitin ang buhay na pribyu (JavaScript) (Eksperimental)',
'tog-forceeditsummary'        => 'Pagsabihan ako kapag nagpapasok ng walang-lamang buod ng pagbabago',
'tog-watchlisthideown'        => 'Itago ang aking mga pagbabago mula sa talaan ng bantayan',
'tog-watchlisthidebots'       => 'Itago ang mga pagbabago ng mga bot mula sa talaan ng bantayan',
'tog-watchlisthideminor'      => 'Itago ang mga maliliit na pagbabago mula sa talaan ng bantayan',
'tog-watchlisthideliu'        => 'Itago ang mga pagbabago ng mga lumagdang tagagamit mula sa talaan ng bantayan',
'tog-watchlisthideanons'      => "Itago ang mga pagbabago ng 'di-kilalang mga tagagamit mula sa talaan ng bantayan",
'tog-nolangconversion'        => 'Huwag paganahin ang pagpapalit ng mga halagang nagkakaibaiba (baryante)',
'tog-ccmeonemails'            => 'Padalahan ako ng mga kopya ng mga ipinadala kong e-liham sa ibang mga manggagamit',
'tog-diffonly'                => 'Huwag ipakita ang nilalaman ng pahinang nasa ilalim ng mga pagkakaiba',
'tog-showhiddencats'          => 'Ipakita ang mga nakatagong kategorya (kaurian)',
'tog-noconvertlink'           => 'Huwag paganahin ang pagpapalit ng pamagat na pangkawing',
'tog-norollbackdiff'          => 'Alisin ang mga pagkakaiba pagkatapos isagawa ang pagpapagulong na pabalik sa dati',

'underline-always'  => 'Palagi',
'underline-never'   => 'Hindi magpakailanman',
'underline-default' => 'Tinakda ng pambasa-basa',

# Dates
'sunday'        => 'Linggo',
'monday'        => 'Lunes',
'tuesday'       => 'Martes',
'wednesday'     => 'Miyerkules',
'thursday'      => 'Huwebes',
'friday'        => 'Biyernes',
'saturday'      => 'Sabado',
'sun'           => 'Lin',
'mon'           => 'Lun',
'tue'           => 'Mar',
'wed'           => 'Miy',
'thu'           => 'Huw',
'fri'           => 'Biy',
'sat'           => 'Sab',
'january'       => 'Enero',
'february'      => 'Pebrero',
'march'         => 'Marso',
'april'         => 'Abril',
'may_long'      => 'Mayo',
'june'          => 'Hunyo',
'july'          => 'Hulyo',
'august'        => 'Agosto',
'september'     => 'Setyembre',
'october'       => 'Oktubre',
'november'      => 'Nobyembre',
'december'      => 'Disyembre',
'january-gen'   => 'Enero',
'february-gen'  => 'Pebrero',
'march-gen'     => 'Marso',
'april-gen'     => 'Abril',
'may-gen'       => 'Mayo',
'june-gen'      => 'Hunyo',
'july-gen'      => 'Hulyo',
'august-gen'    => 'Agosto',
'september-gen' => 'Setyembre',
'october-gen'   => 'Oktubre',
'november-gen'  => 'Nobyembre',
'december-gen'  => 'Disyembre',
'jan'           => 'Ene',
'feb'           => 'Peb',
'apr'           => 'Abr',
'jun'           => 'Hun',
'jul'           => 'Hul',
'aug'           => 'Ago',
'sep'           => 'Set',
'oct'           => 'Okt',
'nov'           => 'Nob',
'dec'           => 'Dis',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Kaurian|Mga kaurian}}',
'category_header'                => 'Mga pahina sa kategoryang "$1"',
'subcategories'                  => 'Mga subkategorya',
'category-media-header'          => 'Mga midya sa kategoryang "$1"',
'category-empty'                 => "''Kasalukuyang walang artikulo o midya ang kategoryang ito.''",
'hidden-categories'              => '{{PLURAL:$1|Nakatagong kategorya|Mga nakatagong kategorya}}',
'hidden-category-category'       => 'Mga nakatagong kategorya', # Name of the category where hidden categories will be listed
'category-subcat-count'          => '{{PLURAL:$2|Ang kauriang ito ay mayroon lamang na sumusunod na subkaurian.|Ang kauriang ito ay mayroong sumusunod na {{PLURAL:$1|subkaurian|$1 mga subkaurian}}, mula sa $2 kabuoan.}}',
'category-subcat-count-limited'  => 'Ang kauriang ito ay mayroong sumusunod na {{PLURAL:$1|subkaurian|$1 mga subkaurian}}.',
'category-article-count'         => '{{PLURAL:$2|Ang kauriang ito ay naglalaman lamang ng sumusunod na pahina.|Ang sumusunod na following {{PLURAL:$1|pahina ay|$1 mga pahina ay}} nasa kauriang ito, mula sa $2 kabuoan.}}',
'category-article-count-limited' => 'Ang sumusunod na {{PLURAL:$1|pahina ay|$1 mga pahina ay}} nasa pangkasalukuyang kaurian.',
'category-file-count'            => '{{PLURAL:$2|Ang kauriang ito ay naglalaman lamang ng sumusunod na talaksan.|Ang sumusunod na {{PLURAL:$1|talaksan ay|$1 mga talaksan ay}} nasa kauriang ito, mula sa $2 kabuoan.}}',
'category-file-count-limited'    => 'Ang sumusunod na {{PLURAL:$1|talaksan ay|$1 mga talaksan}} ay nasa kasalukuyang kategorya.',
'listingcontinuesabbrev'         => 'karugtong',

'mainpagetext'      => "<big>'''Matagumpay na ininstala ang MediaWiki.'''</big>",
'mainpagedocfooter' => "Silipin ang [http://meta.wikimedia.org/wiki/Help:Contents Patnubay sa Tagagamit] (''\"User's Guide\"'') para sa kaalaman sa paggamit ng wiking ''software''.

== Pagsisimula ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Tala ng mga nakatakdang kumpigurasyon]
* [http://www.mediawiki.org/wiki/Manual:FAQ Mga malimit itanong sa MediaWiki]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Tala ng mga pinadadalhan ng liham ng MediaWiki]",

'about'          => 'Patungkol',
'article'        => 'Pahina ng nilalaman',
'newwindow'      => '(magbubukas sa bagong bintana)',
'cancel'         => 'Ikansela',
'qbfind'         => 'Hanapin',
'qbbrowse'       => 'Basa-basahin',
'qbedit'         => 'Baguhin',
'qbpageoptions'  => 'Itong pahina',
'qbpageinfo'     => 'Konteksto',
'qbmyoptions'    => 'Mga pahina ko',
'qbspecialpages' => 'Mga natatanging pahina',
'moredotdotdot'  => 'Damihan pa...',
'mypage'         => 'Pahina ko',
'mytalk'         => 'Usapan ko',
'anontalk'       => 'Usapan para sa IP na ito',
'navigation'     => 'Nabigasyon',
'and'            => ',&#32;at',

# Metadata in edit box
'metadata_help' => 'Iba-ibang datos:',

'errorpagetitle'    => 'Pagkakamali',
'returnto'          => 'Bumalik sa $1.',
'tagline'           => 'Mula sa {{SITENAME}}',
'help'              => 'Tulong',
'search'            => 'Paghahanap',
'searchbutton'      => 'Hanapin',
'go'                => 'Puntahan',
'searcharticle'     => 'Puntahan',
'history'           => 'Kasaysayan ng pahina',
'history_short'     => 'Kasaysayan',
'updatedmarker'     => 'dinagdagan mula noong huli kong pagdalaw',
'info_short'        => 'Kaalaman',
'printableversion'  => 'Bersyong maaaring ilimbag',
'permalink'         => 'Palagiang kawing',
'print'             => 'Ilimbag',
'edit'              => 'Baguhin',
'create'            => 'Likhain',
'editthispage'      => 'Baguhin itong pahina',
'create-this-page'  => 'Likhain itong pahina',
'delete'            => 'Burahin',
'deletethispage'    => 'Burahin itong pahina',
'undelete_short'    => 'Baligtarin ang pagbura ng {{PLURAL:$1|isang pagbabago|$1 mga pagbabago}}',
'protect'           => 'Ipagsanggalang',
'protect_change'    => 'Baguhin',
'protectthispage'   => 'Ipagsanggalang itong pahina',
'unprotect'         => 'Alisin ang pagsasanggalang',
'unprotectthispage' => 'Alisin ang pagsasanggalang sa pahinang ito',
'newpage'           => 'Bagong pahina',
'talkpage'          => 'Pag-usapan ang pahinang ito',
'talkpagelinktext'  => 'Usapan',
'specialpage'       => 'Natatanging pahina',
'personaltools'     => 'Mga kagamitang pansarili',
'postcomment'       => 'Magbigay ng komento',
'articlepage'       => 'Tingnan ang pahina ng nilalaman',
'talk'              => 'Usapan',
'views'             => 'Mga anyo',
'toolbox'           => 'Mga kagamitan',
'userpage'          => 'Tingnan ang pahina ng manggagamit',
'projectpage'       => 'Tingnan ang pahina ng proyekto',
'imagepage'         => 'Tingnan ang pahina ng midya',
'mediawikipage'     => 'Tingnan ang pahina ng mensahe',
'templatepage'      => 'Tingnan ang pahina ng suleras',
'viewhelppage'      => 'Tingnan ang pahina ng tulong',
'categorypage'      => 'Tingnan ang pahina ng kategorya',
'viewtalkpage'      => 'Tingnan ang usapan',
'otherlanguages'    => 'Sa ibang wika',
'redirectedfrom'    => '(Ikinarga mula sa $1)',
'redirectpagesub'   => 'Pahina ng pagkarga',
'lastmodifiedat'    => 'Huling binago ang pahinang ito noong $2, $1.', # $1 date, $2 time
'viewcount'         => 'Namataan na pahinang ito nang {{PLURAL:$1|isang|$1}} ulit.',
'protectedpage'     => 'Pahinang nakasanggalang',
'jumpto'            => 'Tumalon sa:',
'jumptonavigation'  => 'nabigasyon',
'jumptosearch'      => 'Paghahanap',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Tungkol sa {{SITENAME}}',
'aboutpage'            => 'Project:Patungkol',
'bugreports'           => 'Mga ulat pampagkakamali',
'bugreportspage'       => "Project:Mga ulat ng depekto (''bug'')",
'copyright'            => 'Maaring gamitin ang nilalaman sa ilalim ng $1.',
'copyrightpagename'    => 'Karapatang-ari sa {{SITENAME}}',
'copyrightpage'        => '{{ns:project}}:Mga karapatang-ari',
'currentevents'        => 'Mga kasalukuyang kaganapan',
'currentevents-url'    => 'Project:Mga kasalukuyang pangyayari',
'disclaimers'          => 'Mga pagtatanggi',
'disclaimerpage'       => 'Project:Pangkalahatang pagtatanggi',
'edithelp'             => 'Tulong sa pagbabago',
'edithelppage'         => 'Help:Pagbabago',
'faq'                  => "Mga malimit itanong (''FAQ'')",
'faqpage'              => "Project:Mga malimit itanong (''FAQ'')",
'helppage'             => 'Help:Mga nilalaman',
'mainpage'             => 'Unang Pahina',
'mainpage-description' => 'Unang Pahina',
'policy-url'           => 'Project:Patakaran',
'portal'               => 'Puntahan ng pamayanan',
'portal-url'           => 'Project:Puntahan ng pamayanan',
'privacy'              => 'Patakaran sa paglilihim',
'privacypage'          => 'Project:Patakaran sa paglilihim',

'badaccess'        => 'Kamalian sa pahintulot',
'badaccess-group0' => 'Hindi ka pinahintulutang isagawa ang hiniling mong galaw.',
'badaccess-groups' => 'Ang galaw na hiniling mo ay nakatakda lamang para sa mga tagagamit sa {{PLURAL:$2|pangkat na|isa sa mga pangkat na}}: $1.',

'versionrequired'     => 'Kinakailangan ang bersyong $1 ng MediaWiki',
'versionrequiredtext' => 'Kinakailangan ang bersyong $1 ng MediaWiki upang magamit ang pahinang ito. Tingnan ang [[Special:Version|pahina ng bersyon]].',

'ok'                      => 'Sige',
'retrievedfrom'           => 'Ikinuha mula sa "$1"',
'youhavenewmessages'      => 'Mayroon kang $1 ($2).',
'newmessageslink'         => 'mga bagong mensahe',
'newmessagesdifflink'     => 'huling pagbabago',
'youhavenewmessagesmulti' => 'Mayroon kang mga bagong mensahe sa $1',
'editsection'             => 'baguhin',
'editold'                 => 'baguhin',
'viewsourceold'           => 'tingnan ang pinagmulan',
'editlink'                => 'baguhin',
'viewsourcelink'          => 'tingnan ang pinagmulan',
'editsectionhint'         => 'Baguhin ang seksyon: $1',
'toc'                     => 'Mga nilalaman',
'showtoc'                 => 'ipakita',
'hidetoc'                 => 'itago',
'thisisdeleted'           => 'Tingnan o ibalik ang $1?',
'viewdeleted'             => 'Tingnan ang $1?',
'restorelink'             => '{{PLURAL:$1|isang|$1}} binurang pagbabago',
'feedlinks'               => 'Subo/Karga:',
'feed-invalid'            => 'Hindi tanggap na uri ng serbisyo ng pagpaparating.',
'feed-unavailable'        => 'Walang serbisyo mula sa sindikasyong pangpaglalathala',
'site-rss-feed'           => '$1 kargang RSS',
'site-atom-feed'          => '$1 kargang Atom',
'page-rss-feed'           => '"$1" kargang RSS',
'page-atom-feed'          => '"$1" kargang Atom',
'red-link-title'          => '$1 (hindi pa nasusulat)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Pahina',
'nstab-user'      => 'Pahina ng tagagamit',
'nstab-media'     => 'Pahina ng midya',
'nstab-special'   => 'Natatangi',
'nstab-project'   => 'Pahina ng proyekto',
'nstab-image'     => 'Talaksan',
'nstab-mediawiki' => 'Mensahe',
'nstab-template'  => 'Suleras',
'nstab-help'      => 'Pahina ng tulong',
'nstab-category'  => 'Kaurian',

# Main script and global functions
'nosuchaction'      => 'Walang ganitong galaw',
'nosuchactiontext'  => 'Hindi kinikilala ng wiki
ang gawang itinakda ng URL',
'nosuchspecialpage' => 'Walang ganyang natatanging pahina',
'nospecialpagetext' => "<big>'''Humiling ka ng isang maling natatanging pahina.'''</big>

Matatagpuan ang isang tala ng mga tamang natatanging pahina sa [[Special:SpecialPages|{{int:specialpages}}]].",

# General errors
'error'                => 'Kamalian',
'databaseerror'        => 'Kamalian sa kalipunan ng datos',
'dberrortext'          => 'Naganap ang isang pagkakamali sa usisang pampalaugnayan sa kalipunan ng datos.
Maaaring dahil ito sa depekto sa sopwer (\'\'software\'\').
Ang huling sinubukang paguusisa sa kalipunan ng datos ay:
<blockquote><tt>$1</tt></blockquote>
mula sa gawaing "<tt>$2</tt>".
Nagbalik ng pagkakamaling "<tt>$3: $4</tt>" ang MySQL.',
'dberrortextcl'        => 'Naganap ang isang pagkakamali sa usisang pampalaugnayang sa kalipunan ng datos.
Ang huling sinubukang paguusisa sa kalipunan ng datos ay:
"$1"
mula sa gawaing "$2".
Nagbalik ng pagkakamaling "$3: $4" ang MySQL.',
'noconnect'            => 'Paumanhin! Dumaranas ang wiki ng ilang kahirapang teknikal, at hindi magawang makipagugnayan sa serbidor ng kalipunan ng datos. <br />
$1',
'nodb'                 => 'Hindi mapili ang kalipunan ng datos na $1',
'cachederror'          => 'Ang sumusunod ay isang iniligpit o itinagong kopya ng hinihiling na pahina, at maaaring hindi ito bago.',
'laggedslavemode'      => 'Babala: Maaaring hindi naglalaman ang pahina ng mga huling dagdag.',
'readonly'             => 'Nakakandado ang kalipunan ng datos',
'enterlockreason'      => 'Maglagay ng dahilan sa pagkakandado, kasama ang taya
kung kailan magtatapos ang pagka nakakandado',
'readonlytext'         => 'Kasalukuyang nakakandado ang kalipunan ng datos para sa mga bagong entrada at iba pang mga pagbabago, marahil para sa gawaing pampagpapanatili ng kalipunan ng datos, magbabalik ito sa normal pagkaraan nito.

Nagbigay ng ganitong dahilan ang tagapangasiwang nagkandado nito: $1',
'missing-article'      => 'Hindi natagpuan ng kalipunan ng datos ang teksto ng isang pahinang dapat nitong natuklasan, may pangalang "$1" $2.

Kalimitang dahil ito sa pagsunod sa isang wala sa panahong pagkakaiba o kawing na pangkasaysayan sa isang pahinang nabura. 

Kung hindi ito ang kaso, maaaring nakatagpo ka ng isang depekto sa sopwer.
Pakiulat ito sa isang [[Special:ListUsers/sysop|tagapangasiwa]], na ibinibigay ang URL.',
'missingarticle-rev'   => '(pagbabago#: $1)',
'missingarticle-diff'  => '(Pagkakaiba: $1, $2)',
'readonly_lag'         => 'Automatikong kinandado ang kalipunan ng datos habang humahabol ang mga aliping serbidor sa pinunong kalipunan nito',
'internalerror'        => 'Kamaliang panloob',
'internalerror_info'   => 'Kamaliang panloob: $1',
'filecopyerror'        => 'Hindi makopya ang talaksang "$1" sa "$2".',
'filerenameerror'      => 'Hindi mapalitan ang pangalan ng talaksang "$1" sa "$2".',
'filedeleteerror'      => 'Hindi mabura ang talaksang "$1".',
'directorycreateerror' => 'Hindi malikha ang direktoryong "$1".',
'filenotfound'         => 'Hindi mahanap ang talaksang "$1".',
'fileexistserror'      => 'Hindi makapagsulat sa talaksang "$1": umiiral ang talaksan',
'unexpected'           => 'Hindi inaasahang halaga: "$1"="$2".',
'formerror'            => 'Kamalian: hindi maipadala ang pormularyo',
'badarticleerror'      => 'Hindi maisasagawa ang gawaing ito sa pahinang ito.',
'cannotdelete'         => 'Hindi mabura ang tinukoy na pahina o talaksan.
Maaaring nabura na ito ng ibang tagagamit.',
'badtitle'             => 'Hindi kanaisnais na pamagat',
'badtitletext'         => 'Ang hiniling na pamagat ng pahina ay hindi katanggap-tanggap, wala, o isang may-maling kawing na pamagat na pangugnayang-wika (interwika) o pangugnayang wiki (interwiki).
Maaaring naglalaman ito ng isa o higit pang mga panitik (karakter) na hindi maaaring gamitin para sa mga pamagat.',
'perfcached'           => 'Ang sumusunod na mga dato ay nakaligpit at maaaring wala na sa panahon.',
'perfcachedts'         => 'Ang sumusunod na mga dato ay nakaligpit, at dating isinapanahon noong $1.',
'querypage-no-updates' => 'Kasulukuyang hindi gumagana ang mga pagbabago para sa pahinang ito.
Ang mga dato dito ay hindi pa masasariwa sa kasalukuyan.',
'wrong_wfQuery_params' => 'Maling mga parametro sa wfQuery()<br />
Tungkulin: $1<br />
Tanong: $2',
'viewsource'           => 'Tingnan ang pinagmulan',
'viewsourcefor'        => 'para sa $1',
'actionthrottled'      => 'Hinadlangan ang gawain',
'actionthrottledtext'  => "Bilang paraang panglaban sa ''spam'', pinigalan kang magawa ang galaw na ito nang maraming ulit sa loob ng maikling panahon, at lumabis ka na sa limitasyong ito.
Pakisubok na lang ulit pagkaraan ng kaunting mga minuto.",
'protectedpagetext'    => 'Kinandado ang pahinang ito upang mahadlangang ang pagbago.',
'viewsourcetext'       => 'Maaari mong tingnan at kopyahin ang pinagmulan ng pahinang ito:',
'protectedinterface'   => "Nagbibigay ang pahinang ito ng tekstong panghangganan (''interface'') para sa sopwer, at ikinandado para maiwasan ang pangaabuso.",
'editinginterface'     => "'''Babala:''' Binabago mo ang isang pahinang ginagamit sa pagbibigay ng tekstong panghangganan para sa sopwer.  
Makakaapekto ang mga pagbago sa pahinang ito sa anyo ng hangganang (''interface'') pangtagagamit na para sa ibang mga tagagamit.
Para sa mga salinwika, paki isang-alang-alang o konsiderahin ang paggamit ng [http://translatewiki.net/wiki/Main_Page?setlang=en Betawiki], ang proyektong panglokalisasyon ng MediaWiki.",
'sqlhidden'            => '(nakatago ang tanong ng SQL)',
'cascadeprotected'     => 'Nakasanggalang ang pahinang ito mula sa mga pagbabago, dahil kabilang ito sa sumusunod na {{PLURAL:$1|pahinang|mga pahinang}} nakasanggalang sa pamamagitan ng binuhay na opsyong "nahuhulog" (kumakaskada):
$2',
'namespaceprotected'   => "Wala kang pahintulot na magbago ng mga pahinang nasa ngalan-espasyong '''$1'''.",
'customcssjsprotected' => 'Wala kang pahintulot na baguhin ang pahinang ito, dahil naglalaman ito ng mga kagustuhang pansarili ng ibang tagagamit.',
'ns-specialprotected'  => 'Hindi pwedeng baguhin ang mga natatanging pahina.',
'titleprotected'       => "Nakasanggalang ang pamagat na ito mula sa paglikha ni [[User:$1|$1]].
Ang ibinigay na dahilan ay ''$2''.",

# Virus scanner
'virus-badscanner'     => 'Masamang kompigurasyon: hindi kilalang tagahagilap (iskaner) ng birus: <i>$1</i>',
'virus-scanfailed'     => 'nabigo ang paghagilap (kodigong $1)',
'virus-unknownscanner' => 'hindi kilalang panlaban sa birus:',

# Login and logout pages
'logouttitle'                => 'Pangalis sa pagkakalagda ng tagagamit',
'logouttext'                 => "<strong>Nakaalis ka na sa pagkakalagda.</strong>

Maaari kang magpatuloy sa paggamit ng {{SITENAME}} na hindi nakikilala (anonimo), o maaaring kang [[Special:UserLogin|lumagda/tumala uli]] bilang kapareho o bilang ibang tagagamit.
Tandaan na may ilang pahina maaaring magpatuloy na nagpapakitang parang nakalagda ka pa rin, hanggang sa linisin mo ang iyong naitatagong pangtingin-tingin (''browser cache'').",
'welcomecreation'            => '== Maligayang pagdating, $1! ==
Nalikha na ang iyong kwenta o patnugutan.
Huwag kalimutang baguhin ang [[Special:Preferences|mga kagustuhan mo sa {{SITENAME}}]].',
'loginpagetitle'             => 'Paglagda ng tagagamit',
'yourname'                   => 'Bansag:',
'yourpassword'               => 'Hudyat:',
'yourpasswordagain'          => 'Hudyat mo uli:',
'remembermypassword'         => 'Tandaan ang hudyat sa kompyuter na ito',
'yourdomainname'             => 'Dominyo mo:',
'externaldberror'            => 'Maaaring may kamalian sa pagpapatotoo ng kalipunan ng mga dato o kaya hindi ka pinahintulutang isapanahon ng iyong panlabas na kuwenta o patnugutan.',
'login'                      => 'Lumagda',
'nav-login-createaccount'    => 'Lumagda / lumikha ng kuwenta',
'loginprompt'                => "Dapat na pinapahintulutan mo ang mga \"otap\" (''cookie'') upang makalagda sa {{SITENAME}}.",
'userlogin'                  => 'Lumagda / lumikha ng kuwenta',
'logout'                     => 'Umalis sa pagkakalagda',
'userlogout'                 => 'Umalis sa pagkakalagda',
'notloggedin'                => 'Hindi nakalagda',
'nologin'                    => 'Wala ka pang patnugutan? $1.',
'nologinlink'                => 'Lumikha ng kuwenta',
'createaccount'              => 'Lumikha ng kuwenta',
'gotaccount'                 => 'May kuwenta/patnugutan ka na ba? $1.',
'gotaccountlink'             => 'Lumagda',
'createaccountmail'          => 'sa pamamagitan ng e-liham',
'badretype'                  => 'Hindi magkatugma ang ipinasok mong mga hudyat.',
'userexists'                 => 'May gumagamit na ng ganyang pangalang pantagagamit.
Pumili lamang ng iba pang pangalan.',
'youremail'                  => 'E-liham:',
'username'                   => 'Bansag:',
'uid'                        => 'ID ng tagagamit:',
'prefs-memberingroups'       => 'Kasapi ng {{PLURAL:$1|na pangkat|na mga pangkat}}:',
'yourrealname'               => 'Tunay na pangalan:',
'yourlanguage'               => 'Wika:',
'yourvariant'                => 'Naiiba pa:',
'yournick'                   => 'Panglagda:',
'badsig'                     => 'Hindi tamang hilaw na lagda.
Pakisuri ang mga tatak ng HTML.',
'badsiglength'               => 'Napakahaba ng panlagda.
Dapat na mas mababa kaysa $1 {{PLURAL:$1|na panitik|na mga panitik}} (karakter).',
'email'                      => 'E-liham',
'prefs-help-realname'        => "Opsyonal ('di-talaga kailangan) ang tunay na pangalan.
Kung pipiliin mong ibigay ito, gagamitin ito para mabigyan ka ng pagkilala para iyong mga ginawa.",
'loginerror'                 => 'Kamalian sa paglagda',
'prefs-help-email'           => 'Opsyonal (hindi talaga kailangan) ang adres ng e-liham, subalit makapagpapahintulot ito sa pagpapadala ng bagong hudyat mo kapag nakalimutan mo ang iyong lumang hudyat.
Mapipili mo ring payagan ang ibang tagagamit na makapagugnayan sa iyo sa pamamagitan ng iyong pahina ng tagagamit o pahina ng usapan na hindi na kailangan pang ipakilala ang iyong katauhan.',
'prefs-help-email-required'  => 'Kinakailangan ang direksyong e-liham.',
'nocookiesnew'               => 'Nilikha na ang kuwentang pantagagamit, ngunit hindi ka nakalagda.
Gumagamit ang {{SITENAME}} ng mga "otap" (\'\'cookies\'\') para mailagda ang mga tagagamit.
Hindi mo pinagagana ang mga "otap".
Paki paandarin mo ang mga ito, pagkatapos ay lumagda na gamit ang bago mong pangalan ng tagagamit at hudyat.',
'nocookieslogin'             => 'Gumagamit ang {{SITENAME}} ng mga "otap" (\'\'cookies\'\') para mailagda ang mga tagagamit.
Hindi mo pinagagana ang mga "otap".
Paki paandarin mo ang mga ito at sumubok uli.',
'noname'                     => 'Hindi mo tinukoy ang isang tanggap na pangalan ng tagagamit.',
'loginsuccesstitle'          => 'Matagumpay ang paglagda',
'loginsuccess'               => "'''Nakalagda ka na sa {{SITENAME}} bilang si \"\$1\".'''",
'nosuchuser'                 => 'Walang tagagamit na may pangalang "$1".
Suriin ang iyong pagbabaybay, o [[Special:UserLogin/signup|lumikha ng bagong kuwenta]].',
'nosuchusershort'            => 'Walang tagagamit na may pangalang "<nowiki>$1</nowiki>". Pakitingnan ang iyong pagbabaybay.',
'nouserspecified'            => 'Kailangang tukuyin mo ang isang pangalang pantagagamit.',
'wrongpassword'              => 'Mali ang pinasok na hudyat.
Pakisubok muli.',
'wrongpasswordempty'         => 'Walang laman ang pinasok na hudyat.
Pakisubok muli.',
'passwordtooshort'           => 'Hindi tanggap o napakaikli ng iyong hudyat.  
Dapat na mayroon itong {{PLURAL:$1|1 panitik|$1 mga panitik}} (karakter) at naiiba sa iyong pangalang pantagagamit.',
'mailmypassword'             => 'I-e-liham ang bagong hudyat',
'passwordremindertitle'      => 'Bagong pansamantalang hudyat para sa {{SITENAME}}',
'passwordremindertext'       => 'Mayroong taong (maaaring ikaw, mula sa adres ng IP na $1) humiling ng isang bagong 
hudyat para sa {{SITENAME}} ($4). Isang pansamantalang hudyat ang nilikha 
para sa tagagamit na "$2" at itinakda bilang "$3".  Kung ito ang iyong pakay, 
kailangan mo na ngayong lumagda/tumala at pumili ng isang bagong hudyat. 

Kung ibang tao ang humiling nito, o kung naalala mo na ang iyong hudyat,
at hindi mo ibig baguhin ito, maaari mong huwag pansinin ang mensaheng ito at
magpatuloy sa paggamit ng iyong lumang hudyat.',
'noemail'                    => 'Walang nakatalang adress pang-e-liham para sa tagagamit na "$1".',
'passwordsent'               => 'Isang bagong hudyat ang ipinadala sa adres ng e-liham na nakatala para kay "$1".
Lumagda/Tumala lang po muli pagkaraan mong matanggap ito.',
'blocked-mailpassword'       => 'Hinarangan sa paggawa ng mga pagbabago ang iyong adres ng IP, at kaya hindi rin pinapahintulutang gumamit ng tungkuling makabawi ng hudyat para maiwasan ang pangaabuso.',
'eauthentsent'               => 'Nagpadala ng isang e-liham na pangkompirmasyon doon sa iniharap na adres ng e-liham.
Bago magpadala ng iba pang e-liham sa kuwenta, kailangan mong sundin ang mga tagubiling nasa loob ng e-liham, para mapatunayang iyo talaga ang akawnt.',
'throttled-mailpassword'     => 'Nagpadala na ng isang paalalang panghudyat, nitong huling {{PLURAL:$1|oras|$1 mga oras}}.
Para maiwasin ang pangaabuso, isang paalalang panghudyat lang ang ipapadala bawat {{PLURAL:$1|oras|$1 mga oras}}.',
'mailerror'                  => 'Kamalian sa pagpapadala ng liham: $1',
'acct_creation_throttle_hit' => 'Paumanhin, nalikha mo na ang {{PLURAL:$1|1 kuwenta|$1 mga kuwenta}}.
Hindi ka na maaaring lumikha pa.',
'emailauthenticated'         => 'Napatunayan na ang iyong adres ng e-liham noong $2 noong $3.',
'emailnotauthenticated'      => 'Hindi pa napapatunayan ang iyong adres ng e-liham.
Walang e-liham na ipapadala para sa anumang sumusunod na tampok na kasangkapang-katangian.',
'noemailprefs'               => 'Tukuyin ang isang adres ng e-liham para gumana ang mga tampok na kasangkapang-katangiang ito.',
'emailconfirmlink'           => 'Pakikompirma ang iyong adres ng e-liham.',
'invalidemailaddress'        => 'Hindi matatanggap ang adres ng e-liham na ito dahil tila mayroon itong maling anyo.
Pakipasok ang isang may mahusay na anyong adres o paki-iwang walang laman na lang ang lagayan.',
'accountcreated'             => 'Nilikha na ang kuwenta',
'accountcreatedtext'         => 'Nilikha na ang kuwentang tagagamit para kay $1.',
'createaccount-title'        => 'Paglikha ng kuwenta para sa {{SITENAME}}',
'createaccount-text'         => 'May lumikha ng kuwenta para sa iyong adres ng e-liham sa {{SITENAME}} ($4) na pinangalanang "$2", na may hudyat na "$3".
Dapat kang tumala at baguhin ang hudyat mo ngayon.

Maaari mong huwag pansinin ang mensaheng ito, kung mali ang paglikha ng kuwentang ito.',
'login-throttled'            => 'Masyadong marami ang ginawa mong kamakailan lang na mga pagsubok sa hudyat ng kuwentang ito.
Maghintay muna po bago sumubok uli.',
'loginlanguagelabel'         => 'Wika: $1',

# Password reset dialog
'resetpass'                 => 'Palitan ang hudyat',
'resetpass_announce'        => 'Lumagda ka sa pamamagitan ng isang pansamantalang ini-e-liham na kodigo.
Para tapusin ang paglagda, dapat kang magtakda ng isang bagong hudyat dito:',
'resetpass_text'            => '<!-- Idagdag ang teksto rito -->',
'resetpass_header'          => 'Baguhin ang hudyat ng kuwenta',
'oldpassword'               => 'Lumang hudyat:',
'newpassword'               => 'Bagong hudyat:',
'retypenew'                 => 'Ipasok muli ang bagong hudyat:',
'resetpass_submit'          => 'Itakda ang hudyat at lumagda',
'resetpass_success'         => 'Matagumpay na nabago ang iyong hudyat!  Inilalagda ka na ngayon...',
'resetpass_bad_temporary'   => 'Hindi tanggap na pansamantalang hudyat.
Maaaring matagumpay mo nang nabago ang iyong hudyat o nakahiling na ng isang bagong pansamantalang hudyat.',
'resetpass_forbidden'       => 'Hindi mababago ang mga hudyat',
'resetpass-no-info'         => 'Nakalagda ka dapat para tuwirang mapuntahan ang pahina ito.',
'resetpass-submit-loggedin' => 'Baguhin ang hudyat',
'resetpass-wrong-oldpass'   => 'Hindi tanggap na pansamantala o pangkasalukuyang hudyat.
Maaaring matagumpay mo nang nabago ang iyong hudyat o nakahiling na ng isang bagong pansamantalang hudyat.',
'resetpass-temp-password'   => 'Pansamantalang hudyat:',

# Edit page toolbar
'bold_sample'     => 'Makapal na panitik',
'bold_tip'        => 'Makapal na panitik',
'italic_sample'   => 'Nakahilig na panitik',
'italic_tip'      => 'Nakahilig na panitik',
'link_sample'     => 'Pamagat ng kawing',
'link_tip'        => 'Panloob na kawing',
'extlink_sample'  => 'http://www.example.com na kawing ng pamagat',
'extlink_tip'     => 'Panlabas na kawing (tandaan ang http:// na unlapi)',
'headline_sample' => 'Paulong teksto',
'headline_tip'    => 'Antal 2 paulo',
'math_sample'     => 'Isingit ang pormula dito',
'math_tip'        => 'Pormulang pangmatematika (LaTeX)',
'nowiki_sample'   => 'Isingit ang hindi nakapormat na teksto dito',
'nowiki_tip'      => 'Balewalain ang pormat na pangwiki',
'image_sample'    => 'Halimbawa.jpg',
'image_tip'       => 'Nakabaong talaksan',
'media_sample'    => 'Halimbawa.ogg',
'media_tip'       => 'Kawing sa talaksan',
'sig_tip'         => 'Lagda mo na may tatak ng oras',
'hr_tip'          => 'Pahalagang na guhit (gamitin nang madalang)',

# Edit pages
'summary'                          => 'Buod',
'subject'                          => 'Paksa/paulo',
'minoredit'                        => 'Ito ay isang munting pagbabago',
'watchthis'                        => 'Bantayan itong pahina',
'savearticle'                      => 'Sagipin ang pahina',
'preview'                          => 'Paunang tingin',
'showpreview'                      => 'Ipakita ang paunang tingin',
'showlivepreview'                  => 'Buhay na paunang tingin',
'showdiff'                         => 'Ipakita ang mga pagbabago',
'anoneditwarning'                  => "'''Babala:''' Hindi ka nakalagda.
Matatala ang adres ng IP mo sa kasaysayan ng pagbabago ng pahinang ito.",
'missingsummary'                   => "'''Paalala:''' Hindi ka nagbigay ng buod ng pagbabago.
Kapag pinindot mo uli ang Sagip, masasagip ang pagbabago mo na wala nito.",
'missingcommenttext'               => 'Magbigay ng isang kumento/puna sa ibaba.',
'missingcommentheader'             => "'''Paalala:''' Hindi ka nagbigay ng isang paksa/paulo para sa puna/kumentong ito.
Kapag pinindot mo uli ang Sagip, masasagip ang pagbabago mo na wala nito.",
'summary-preview'                  => 'Paunang tingin sa buod',
'subject-preview'                  => 'Paunang tingin sa paksa/paulo',
'blockedtitle'                     => 'Hinarang ang tagagamit',
'blockedtext'                      => "<big>'''Hinarang ang iyong bansag o IP address.'''</big>

Ginawa ang pagharang ni $1. Ito ang binigay na dahilan: ''$2''.

* Simula ng harang: $8
* Pagtatapos ng harang: $6
* Binalak na harangin: $7

Maaari kang makipag-ugnayan kay $1 o ibang [[{{MediaWiki:grouppage-sysop}}|tagapangasiwa]] upang pag-usapan ang pagharang.
Di mo magagamit ang 'magpadala ng e-liham (email) sa tagagamit' na kagamitan maliban na lamang kung nagbigay ka ng tamang e-liham sa iyong [[Special:Preferences|kagustuhan]] at hindi ito hinarang sa pagkagamit.
Ang kasalukuyang IP address mo ay $3, at pagkakilanlan ng harang ay #$5. Pakisama ang isa o parehong impormasyon na ito sa iyong mga paghahanap.",
'blockednoreason'                  => 'walang binigay na dahilan',
'blockedoriginalsource'            => "Ang pinagmulan ng '''$1''' ay pinapakita sa ibaba:",
'blockededitsource'                => "Ang teksto ng '''mga pagbabago mo''' sa '''$1''' ay ipinapakita sa ibaba:",
'whitelistedittitle'               => 'Paglagda kailangan para makapagbago',
'whitelistedittext'                => 'Kailangan mong $1 para makapagbago ng mga pahina.',
'confirmedittitle'                 => 'Kailangan ang kompirmasyon ng e-liham para makapagbago',
'confirmedittext'                  => 'Kailangang kumpirmahin mo muna ang adres ng iyong e-liham bago makapagbago ng mga pahina.
Pakihanda at patotohanan ang adres ng e-liham sa pamamagitan ng iyong [[Special:Preferences|kagustuhan ng tagagamit]].',
'nosuchsectiontitle'               => 'Walang ganyang seksyon',
'nosuchsectiontext'                => 'Sinubok mong baguhin ang isang seksyong hindi umiiral.
Dahil walang seksyong $1, walang pook na mapagsasagipan ng iyong pagbabago.',
'loginreqtitle'                    => 'Paglagda/Pagtala Kailangan',
'loginreqlink'                     => 'lumagda/tumala',
'loginreqpagetext'                 => 'Kailangan mong $1 para matanaw ang ibang mga pahina.',
'accmailtitle'                     => 'Ipinadala na ang hudyat.',
'accmailtext'                      => 'Ipinadala na sa $2 ang hudyat para kay "$1" .',
'newarticle'                       => '(Bago)',
'newarticletext'                   => "Sinundan mo ang isang kawing para sa isang pahinang hindi pa umiiral.
Para likhain ang pahina, magsimulang magmakinilya sa loob ng kahong nasa ibaba (tingnan ang [[{{MediaWiki:Helppage}}|pahina ng tulong]] para sa mas maraming kabatiran).
Kung napunta ka rito dahil sa pagkakamali, pakipindot ang pinduntang '''balik''' ('''''back''''') ng iyong pantingin-tingin (''browser'').",
'anontalkpagetext'                 => '----
<small>Usapan ito para sa mga di-kilalang tagagamit. Ipinanggagamit ng [[Wikipedia]] ang mga [[direksyong IP]] sa pagkilala ng mga di-kilalang tagagamit. Dahil maaaring hindi lamang isang tao ang gumagamit ng ganitong direksyong IP, maaari ring hindi ikaw ang itinutukoy ng mga usapin sa usapan. Upang maiwasang mapagkamalan bilang iba, maitago ang iyong direksyong IP, at makakuha ng iba pang mga pribilehiyo, hinihikayat ka naming gumawa ng isang [[Special:UserLogIn|panagutan]].</small>',
'noarticletext'                    => 'Walang teksto ang pahinang ito sa kasalukuyan, maaari kang [[Special:Search/{{PAGENAME}}|maghanap para sa pamagat ng pahinang ito]] sa ibang mga pahina o [{{fullurl:{{FULLPAGENAME}}|action=edit}} baguhin ang pahina na ito].',
'userpage-userdoesnotexist'        => 'Hindi nakatala ang kuwenta ng tagagamit na "$1".
Pakisuri kung ibig mong likhain/baguhin ang pahinang ito.',
'clearyourcache'                   => "'''Tandaan:''' Pagkatapos magtala, dapat linisin mo ang ''cache'' ng iyong ''browser'' upang makita ang mga pagbabago: '''Mozilla:''' pindutin ang ''reload'' (o ''ctrl-r''), '''IE / Opera:''' ''ctrl-f5'', '''Safari:''' ''cmd-r'', '''Konqueror''' ''ctrl-r''.",
'usercssjsyoucanpreview'           => "<strong><i>Tip</i>:</strong> Bago itala, gamitin ang buton ng 'Paunang tingin' upang masubok ang bagong CSS/JS.",
'usercsspreview'                   => "'''Tandaan mong paunang tingin pa lamang ito ng iyong CSS na pantagagamit.'''
'''Hindi pa ito nasasagip!'''",
'userjspreview'                    => "'''Tandaang pagsubok/paunang tingin mo pa lang ito ng iyong JavaScript.'''
'''Hindi pa ito nasasagip!'''",
'userinvalidcssjstitle'            => "'''Babala:''' Walang pabalat na \"\$1\".
Tandaang gumagamit ang pinasadyang mga pahinang .css at .js ng mga pamagat na may maliliit na mga titik, halimbawa na ang {{ns:user}}:Foo/monobook.css na taliwas sa {{ns:user}}:Foo/Monobook.css.",
'updated'                          => '(Naisapanahon na)',
'note'                             => '<strong>Paunawa:</strong>',
'previewnote'                      => '<strong>Isang lamang itong paunang tingin;
hindi pa nasasagip ang mga pagbabago!</strong>',
'previewconflict'                  => 'Ipinamamalas ng paunang tinging ito ang teksto sa loob ng pangitaas na pook-patnugutan ng teksto ayon sa lilitaw na anyo nito kapag pinili mo ang pagsagip.',
'session_fail_preview'             => '<strong>Paumanhin! Hindi namin maproseso ang iyong pagbabago hinggil sa pagkawala ng sesyon ng datos.
Paki ulit muli. Kung hindi ito gumana, subukang umalis sa pagkalagda at bumalik muli.</strong>',
'session_fail_preview_html'        => "<strong>Paumanhin! Hindi namin maproseso ang iyong pagbabago hinggil sa isang pagkawala ng sesyon ng datos.</strong>

''Dahil nakabukas ang hilaw na HTML sa wiking ito, nakatago ang paunang tingin bilang pag-iingat sa mga paglusob ng JavaScript.''

<strong>Kung lehitimong pagbabago ito, paki ulit muli. Kung hindi ito gumana, subuking umalis sa pagkalagda at bumalik muli.</strong>",
'token_suffix_mismatch'            => "<strong>Hindi tinanggap ang iyong pagbabago dahil sinira ng ''client'' ang mga karakter na bantas sa ''token'' ng mamatnugot. Tinanggihan ang pagbabago upang maiwasan ang korupsyon ng teksto ng artikulo. 
Nangyayari ito sa kadalasan kapag gumagamit ka ng isang pang-web na hindi kilalang serbisyo ng ''proxy'' na may ''bug''.</strong>",
'editing'                          => 'Binabago ang $1',
'editingsection'                   => 'Binabago ang $1 (bahagi)',
'editingcomment'                   => 'Binabago ang $1 (komento)',
'editconflict'                     => 'Alitan sa pagbabago: $1',
'explainconflict'                  => 'Mayroon nagbago ng pahinang ito simula nang baguhin mo ito.
Naglalaman ang mga nasa taas na teksto ng mga pahinang teksto at kasalukuyang mayroon ito.
Ipinapakita sa ibabang teksto ang mga binago mo.
Kailangan mong pagsamahin ang mga binago mo sa kasalukuyang teksto.
Maitatala <b>lamang</b> ang nasa taas na teksto kapag pinindot ang "Itala ang pahina".<br />',
'yourtext'                         => 'Teksto mo',
'storedversion'                    => 'Nakatagong bersyon',
'nonunicodebrowser'                => '<strong>BABALA: Hindi sumusunod sa unicode ang browser mo. May ginawang solusyon para pahintulutan na ligtas ang pagbabago ng mga artikulo: mga hindi ASCII mga karakter bilang kodigong hexadecimal ang magpapakita sa kahon.</strong>',
'editingold'                       => '<strong>Babala: Binabago mo ang lumang bersyon ng pahinang ito.
Kapag itinala mo ito, mawawala ang anumang pagbabago mula sa bersyon na ito.</strong>',
'yourdiff'                         => 'Mga pagkakaiba',
'copyrightwarning2'                => "Tandaan po lamang na lahat ng kontribusyon sa {{SITENAME}} ay maaaring pamatnugutan, baguhin, o tanggalin ng ibang mga taga-ambag.  Kung ayaw mo na baguhin ng walang awa ang mga sinulat mo, huwag mong itala dito.<br /> 
Ipinapangako mo rin sa amin na sinulat mo ito nang personal, o kinopya mo ito mula sa isang mapagkukunan (''resource'') na [[pampublikong dominyo]] (''public domain'') o ibang libreng mapagkukunan (tingnan ang $1 para sa detalye). <strong>HUWAG MAGTALA NG GAWANG NAKA-KARAPATANG-ARI (''COPYRIGHTED'') NANG WALANG PAHINTULOT!</strong>",
'longpagewarning'                  => '<strong>BABALA: Ang pahinang ito ay may haba na $1 kilobyte; maaaring magkaroon ng problema sa ilang mga browser na nahihirapang magbago ng pahina na palapit o mas mahaba sa 32kb.
Ikunsidera na hatiin ang pahinang ito sa maliliit na mga seksyon.</strong>',
'longpageerror'                    => '<strong>MALI (ERROR): Ang tekstong ipinadala mo ay may haba na $1 kilobyte
, na mas mahaba sa tinakdang haba na $2 kilobyte. Hindi ito maitatala.</strong>',
'semiprotectedpagewarning'         => "'''Paunawa:''' Ikinandado ang pahinang ito upang tanging nakatalang mga tagagamit lamang ang makapagbago nito.",
'cascadeprotectedwarning'          => "'''Babala:''' Nakakandado ang pahinang ito upang ang mga tagagamit na may pribilhiyong sysop lamang ang magbago nito, dahil sinama ito sa mga sumusunod na {{PLURAL:$1|pahinang|mga pahinang}} nakaprotekta-na-damay-lahat (cascade-protected):",
'titleprotectedwarning'            => '<strong>BABALA:  Nakakandado ang pahina na ito upang malikha ito ng ilang mga tagagamit.</strong>',
'templatesused'                    => 'Mga suleras na ginagamit sa pahinang ito:',
'templatesusedpreview'             => 'Mga suleras na ginagamit para sa paunang-tinging ito:',
'templatesusedsection'             => 'Mga suleras na ginagamit para sa bahaging ito:',
'template-protected'               => '(nakasanggalang)',
'template-semiprotected'           => '(bahagyang nakasanggalang)',
'hiddencategories'                 => 'Ang pahinang ito ay kasapi sa {{PLURAL:$1|1 nakatagong kaurian|$1 nakatagong mga kaurian}}:',
'edittools'                        => '<!-- Ang teksto rito ay ipapakita sa ilalim ng mga pormularyo ng pagbabago at pagkarga. -->',
'nocreatetitle'                    => 'May hangganan ang paglikha ng pahina',
'nocreatetext'                     => 'Nilagyan ng hangganan ng {{SITENAME}} ang kakayahang lumikha ng mga bagong pahina.
Maaari kang magmalik at magbago ng isang umiiral na pahina, o [[Special:Preferences|lumagda o lumikha ng kuwenta]].',
'nocreate-loggedin'                => 'Walang kang pahintulot para lumikha ng bagong mga pahina.',
'permissionserrors'                => 'Mga Kamalian sa Mga Pagpapahintulot',
'permissionserrorstext'            => 'Wala kang pahintulot na gawin iyan, dahil sa sumusunod na {{PLURAL:$1|dahilan|mga dahilan}}:',
'permissionserrorstext-withaction' => 'Wala kang pahintulot na $2, dahil sa sumusunod na {{PLURAL:$1|dahilan|mga dahilan}}:',
'recreate-deleted-warn'            => "'''Babala: Muli mong nililikha ang isang pahinang binura na dati.'''

Dapat mong isaalang-alang kung nararapat bang ipagpatuloy ang pagbago sa pahinang ito.
Ibinigay dito ang tala ng pagbubura para sa pahinang ito para sa kaginhawahan mo:",
'deleted-notice'                   => 'Nabura na dati ang pahinang ito.
Ibinigay sa ibaba ang tala ng pagbubura para sa pahinang ito bilang sanggunian.',
'deletelog-fulllog'                => 'Tingnan ang buong tala',
'edit-hook-aborted'                => 'Pinigil ng sungkit ang pagbabago.
Walang ibinigay na paliwanag.',
'edit-gone-missing'                => 'Hindi maisapanahon ang pahina.
Tila binura na ito.',
'edit-conflict'                    => 'May salungatan sa pagbago.',
'edit-no-change'                   => 'Binalewala ang pagbabago mo, dahil walang pagbabagong ginawa sa teksto.',
'edit-already-exists'              => 'Hindi makalikha ng isang bagong pahina.
Umiiral na ito.',

# Parser/template warnings
'expensive-parserfunction-warning'        => 'Babala: Naglalaman ang pahinang ito ng napakaraming mamahaling mga tawag na pantungkulin.

Dapat na mayroon itong mas mababa sa $2 {{PLURAL:$2|tawag|mga tawag}}, mayroon {{PLURAL:$1|ngayong $1 isang tawag|ngayong $1 mga tawag}}.',
'expensive-parserfunction-category'       => "Mga pahinang may napakaraming mga mamahaling tawag na pantungkulin ng banghay (''parser'')",
'post-expand-template-inclusion-warning'  => 'Babala: Napakalaki ng sukat ng saklaw ng suleras.
Hindi isasama ang ilang mga suleras.',
'post-expand-template-inclusion-category' => 'Mga pahina kung saan lumabis ang sukat ng saklaw ng suleras',
'post-expand-template-argument-warning'   => 'Babala: Naglalamang ang pahinang ito ng kahit isang pagaalitan ng suleras na napakalaki ng sukat ng paglawak.  Tinanggal ang mga alitang ito.',
'post-expand-template-argument-category'  => 'Mga pahinang naglalaman ng mga tinanggal na mga alitan ng suleras',
'parser-template-loop-warning'            => 'Nadiskubreng silo ng suleras: [[$1]]',
'parser-template-recursion-depth-warning' => 'Lumabis na sa nakatakdang lalim ng rekursyon (pormula) ng suleras ($1)',

# "Undo" feature
'undo-success' => 'Matatanggal ang pagbabago.
Pakitingnan ang paghahambing sa ibaba para masiyasat kung ito ang ibig mong gawin, at pagkatapos sagipin ang mga pagbabago sa ibaba para matapos ang pagtatanggal ng pagbabago.',
'undo-failure' => 'Hindi matanggal ang pagbabago dahil sa magkakasalungat na panggitnang mga pagbabago.',
'undo-norev'   => 'Hindi matanggal ang pagbabago dahil hindi ito umiiral o nabura na.',
'undo-summary' => 'Tanggalin ang pagbabagong $1 ni [[Special:Contributions/$2|$2]] ([[User talk:$2|Usapan]])',

# Account creation failure
'cantcreateaccounttitle' => 'Hindi malikha ang kuwenta',

# History pages
'viewpagelogs'           => 'Tingnan ang mga pagtatala para sa pahinang ito',
'nohistory'              => 'Walang kasaysayan ng pagbabago para sa pahinang ito.',
'currentrev'             => 'Pangkasalukuyang pagbabago',
'currentrev-asof'        => 'Pangkasalukuyang pagbabago mula noong $1',
'revisionasof'           => 'Pagbabago mula noong $1',
'revision-info'          => 'Pagbabago mula noong $1 ni $2', # Additionally available: $3: revision id
'previousrevision'       => '← Lumang pagbabago',
'nextrevision'           => 'Bagong pagbabago →',
'currentrevisionlink'    => 'Pangkasalukuyang pagbabago',
'cur'                    => 'kasalukuyan',
'next'                   => 'susunod',
'last'                   => 'huli',
'page_first'             => 'una',
'page_last'              => 'huli',
'histlegend'             => "Ipaghambing ang mga napili: markahan ang mga radyong buton (''radio button'') ng mga bersyong ihahambing at pindutin ang ''enter'' o ang buton sa ilalim.<br />
Mga daglat: (kas) = pagkakaiba sa kasalukuyang bersyon,
(huli) = pagkakaiba sa naunang bersyon, m = maliit na pagbabago.",
'history-fieldset-title' => 'Tumingin-tingin sa kasaysayan',
'deletedrev'             => '[binura]',
'histfirst'              => 'Pinakasinauna',
'histlast'               => 'Pinakakamakailan',
'historyempty'           => '(walang laman)',

# Revision feed
'history-feed-title'          => 'Kasaysayan ng pagbabago',
'history-feed-description'    => 'Kasaysayan ng pagbabago para sa pahinang ito dito sa wiki',
'history-feed-item-nocomment' => '$1 sa $2', # user at time
'history-feed-empty'          => 'Wala ang hiniling na pahina.
Nabura ito mula sa wiki, o napalitan ng pangalan.
Subukang [[Special:Search|hanapin sa wiki]] para sa mga kaugnay na mga bagong pahina.',

# Revision deletion
'rev-deleted-comment'         => '(tinanggal ang kumento/puna)',
'rev-deleted-user'            => '(tinanggal ang pangalan ng tagagamit)',
'rev-deleted-event'           => '(tinanggal ang galaw sa talaan)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Tinanggal ang mga pagbabago ng pahina mula sa mga publikong arkibo.
May mga detalye sa [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} tala ng pagbura].
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
Tinanggal ang mga pagbabago ng pahina ito mula sa mga publikong arkibo.
Bilang isang tagapangasiwa sa sayt na ito, maaaring makita mo ito;
maaaring may detalye sa [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} tala ng pagbura].
</div>',
'rev-delundel'                => 'ipakita/itago',
'revisiondelete'              => 'Burahin/ibalik ang mga pagbabago',
'revdelete-nooldid-title'     => 'Hindi tanggap na puntiryang pagbabago',
'revdelete-nooldid-text'      => 'Hindi ka nagbigay ng pupuntahang pagbabago o mga pagbabago para magampanan ang paraan na ito.',
'revdelete-selected'          => "{{PLURAL:$2|Piniling|Mga piniling}} pagbabago ng '''$1:'''",
'logdelete-selected'          => "{{PLURAL:$2|Piniling tala ng pangyayari|Piniling tala ng mga pangyayari}} para sa '''$1:'''",
'revdelete-text'              => 'Makikita pa rin ang mga binurang pagbabago sa pahina ng kasaysayan at mga tala,
ngunit hindi makikita ng publiko ang mga bahagi ng kanilang nilalaman.

Makikita ng ibang mga tagapangasiwa sa wiking ito ang mga tinagong nilalaman
at maipapakita muli bagaman sa parehong <i>interface</i>, maliban sa karagdagang restriksyong tinakda.',
'revdelete-legend'            => 'Itakda ang mga kaantasan ng pagpapakita',
'revdelete-hide-text'         => 'Itago ang teksto ng pagbabago',
'revdelete-hide-name'         => 'Itago ang galaw at puntirya',
'revdelete-hide-comment'      => 'Itago ang kumento sa pagbabago',
'revdelete-hide-user'         => 'Itago ang pangalang pantagagamit/IP ng patnugot',
'revdelete-hide-restricted'   => 'Ilapat ang mga restriksyon na ito sa mga tagapangasiwa at sa mga iba na rin',
'revdelete-suppress'          => 'Supilin ang datos mula sa mga tagapangasiwa gayon din sa iba',
'revdelete-hide-image'        => 'Itago ang nilalaman ng talaksan',
'revdelete-unsuppress'        => 'Tanggalin ang mga pagbabawal sa naibalik na mga pagbabago',
'revdelete-log'               => 'Itala ang puna/kumento:',
'revdelete-submit'            => 'Pairalin para sa napiling pagbabago',
'revdelete-logentry'          => 'binago ang antas ng pagpapakita ng pagbabago kay [[$1]]',
'logdelete-logentry'          => 'binago ang antas ng pagpapakita ng kaganapan kay [[$1]]',
'revdelete-success'           => "'''Matagumpay na naitakda ang kaantasan ng pagpapakita ng pagbabago.'''",
'logdelete-success'           => "'''Matagumpay na naitakda ang kaantasan ng pagpapakita ng tala.'''",
'revdel-restore'              => 'Baguhin ang kaantasan ng pagpapakita',
'pagehist'                    => 'Kasaysayan ng pahina',
'deletedhist'                 => 'Naburang kasaysayan',
'revdelete-content'           => 'nilalaman',
'revdelete-summary'           => 'buod ng pagbabago',
'revdelete-uname'             => 'pangalang pantagagamit',
'revdelete-restricted'        => 'nilapat na mga paghihigpit sa mga tagapangasiwa',
'revdelete-unrestricted'      => 'tinanggal ang mga pagbabawal para sa mga tagapangasiwa',
'revdelete-hid'               => 'itinago $1',
'revdelete-unhid'             => 'pinalitaw $1',
'revdelete-log-message'       => '$1 para sa $2 {{PLURAL:$2|pagbabago|mga pagbabago}}',
'logdelete-log-message'       => '$1 para sa $2 {{PLURAL:$2|kaganapan|mga kaganapan}}',

# Suppression log
'suppressionlog'     => 'Tala ng pagpipigil',
'suppressionlogtext' => 'Nasa ibaba ang isang tala ng mga binura at mga harang na kinakasangkutan ng nilalamang nakatago sa mga tagapangasiwa.
Tingnan ang [[Special:Ipblocklist|tala ng hinarang na IP]] para sa isang tala ng kasalukuyang gumaganang mga pagbawal at mga harang.',

# History merging
'mergehistory'                     => 'Pagsanibin mga pahina ng kasaysayan',
'mergehistory-header'              => 'Pinapahintuluan ka ng pahinang ito upang mapagsanib ang mga kasaysayan ng isang pinagmulang pahina patungo sa isang mas bagong pahina.
Tiyakin na ang pagbabago ay makapagpapanatili ng pagkakatuluy-tuloy ng pahinang pangkasaysayan.',
'mergehistory-box'                 => 'Pagsamahin ang mga pagbabago ng dalawang mga pahina:',
'mergehistory-from'                => 'Pinagmulang pahina:',
'mergehistory-into'                => 'Kapupuntahang pahina:',
'mergehistory-list'                => 'Mapagsasanib na kasaysayan ng pagbabago',
'mergehistory-merge'               => "Ang mga sumusunod na mga pagbabago ng [[:$1]] ay maaaring pag-isahin sa [[:$2]]. Gamitin ang hanay ng radyong buton upang pag-isahin lamang ang mga pagbabagong nilikha sa at bago ang binigay na oras.  Tandaan na ma-re-''reset'' ang paggamit ng mga ugnay ng nabigasyon ng hanay na ito.",
'mergehistory-go'                  => 'Ipakita ang mga pagbabagong mapagsasanib',
'mergehistory-submit'              => 'Pagsanibin ang mga pagbabago',
'mergehistory-empty'               => 'Walang mga pagbabagong mapagsasanib.',
'mergehistory-success'             => '$3 {{PLURAL:$3|pagbabago|mga pagbabago}} ng [[:$1]] matagumpay na naisanib sa [[:$2]].',
'mergehistory-fail'                => 'Hindi magawa ang pagsasanib ng kasaysayan, pakisuri ang parametro ng pahina at oras.',
'mergehistory-no-source'           => 'Hindi umiiral ang pagmumulang pahinang $1.',
'mergehistory-no-destination'      => 'Hindi umiiral ang patutunguhang pahinang $1.',
'mergehistory-invalid-source'      => 'Tanggap na pamagat dapat ang pagmumulang pahina.',
'mergehistory-invalid-destination' => 'Tanggap na pamagat dapat ang kapupuntahang pahina.',
'mergehistory-autocomment'         => 'Pinagsanib ang [[:$1]] sa [[:$2]]',
'mergehistory-comment'             => 'Pinagsanib ang [[:$1]] sa [[:$2]]: $3',
'mergehistory-same-destination'    => 'Pinagmulan at patutunguhan hindi dapat magkatulad',

# Merge log
'mergelog'           => 'Tala ng pagsasanib',
'pagemerge-logentry' => 'sinanib ang [[$1]] sa [[$2]] (mga pagbabago hanggang sa $3)',
'revertmerge'        => 'Paghiwalayin',
'mergelogpagetext'   => 'Nasa ibaba ang isang talaan ng mga pinakakamakailan lamang na mga pagsasanib ng isang kasaysayan ng pahina patungo sa isa pa.',

# Diffs
'history-title'           => 'Kasaysayan ng pagbabago ng "$1"',
'difference'              => '(Pagkakaiba sa pagitan ng mga pagbabago)',
'lineno'                  => 'Linya $1:',
'compareselectedversions' => 'Paghambingin ang mga napiling bersyon',
'visualcomparison'        => 'Napagmamasdang paghahambing',
'wikicodecomparison'      => 'Paghahambing ng Wikiteksto',
'editundo'                => 'ibalik',
'diff-multi'              => '({{PLURAL:$1|Isang panggitnang pagbabago|$1 panggitnang mga pagbabago}} hindi ipinakita.)',
'diff-movedto'            => 'nilipat sa $1',
'diff-styleadded'         => '$1 estilo dinagdag',
'diff-added'              => '$1 dinagdag',
'diff-changedto'          => 'binago na naging $1',
'diff-movedoutof'         => 'nilipat mula sa $1',
'diff-styleremoved'       => '$1 estilo inalis',
'diff-removed'            => '$1 inalis',
'diff-changedfrom'        => 'binago mula sa $1',
'diff-src'                => 'pinagmulan',
'diff-withdestination'    => 'may patutunguhang $1',
'diff-with'               => '&#32;may $1 $2',
'diff-with-final'         => '&#32;at $1 $2',
'diff-width'              => 'lapad',
'diff-height'             => 'taas',
'diff-p'                  => "isang '''talata'''",
'diff-blockquote'         => "isang '''sipi ng pagbanggit'''",
'diff-h1'                 => "isang '''paulo (antas 1)'''",
'diff-h2'                 => "isang '''paulo (antas 2)'''",
'diff-h3'                 => "isang '''paulo (antas 3)'''",
'diff-h4'                 => "isang '''paulo (antas 4)'''",
'diff-h5'                 => "isang '''paulo (antas 5)'''",
'diff-pre'                => "isang '''harang na may dati nang nakatakdang pormat'''",
'diff-div'                => "isang '''kahatian'''",
'diff-ul'                 => "isang '''hindi magkakasunod na talaan'''",
'diff-ol'                 => "isang '''may pagkakasunud-sunod na talaan'''",
'diff-li'                 => "isang '''bagay na pantalaan'''",
'diff-table'              => "isang '''tabla'''",
'diff-tbody'              => "isang '''nilalaman ng tabla'''",
'diff-tr'                 => "isang '''pahalang na hanay'''",
'diff-td'                 => "isang '''selula'''",
'diff-th'                 => "isang '''paulo'''",
'diff-br'                 => "isang '''pagputol'''",
'diff-hr'                 => "isang '''patakaran sa pagpapahalang'''",
'diff-code'               => "isang '''pagharang sa kodigong pangkompyuter'''",
'diff-dl'                 => "isang '''talaang pangkahulugan'''",
'diff-dt'                 => "isang '''salitang pangkahulugan'''",
'diff-dd'                 => "isang '''kahulugan'''",
'diff-input'              => "isang '''puhunan''' (input)",
'diff-form'               => "isang '''pormularyo'''",
'diff-img'                => "isang '''larawan'''",
'diff-span'               => "isang '''haba ng sukat''' (''span'')",
'diff-a'                  => "isang '''kawing'''",
'diff-i'                  => "'''mga pahilis'''",
'diff-b'                  => "'''makapal'''",
'diff-strong'             => "'''malakas'''",
'diff-em'                 => "'''bigay-diin'''",
'diff-font'               => "'''estilo ng titik''' (''font'')",
'diff-big'                => "'''malaki'''",
'diff-del'                => "'''nabura'''",
'diff-tt'                 => "'''nakatakdang lapad'''",
'diff-sub'                => "'''pangibabang panitik'''",
'diff-sup'                => "'''pangitaas na panitik'''",
'diff-strike'             => "'''patamaan ng guhit'''",

# Search results
'searchresults'                    => 'Kinalabasan/Resulta ng paghahanap',
'searchresults-title'              => 'Resulta ng paghahanap para sa "$1"',
'searchresulttext'                 => 'Para sa mas maraming kabatiran hinggil sa paghahanap sa {{SITENAME}}, tingnan ang [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => 'Hinanap mo ang \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|lahat ng mga pahinang nagsisimula sa "$1"]] | [[Special:WhatLinksHere/$1|lahat ng mga pahinang nakakawing sa "$1"]])',
'searchsubtitleinvalid'            => "Hinanap mo ang '''$1'''",
'noexactmatch'                     => "'''Walang pahinang pinamagatang \"\$1\".'''
Maaari mong [[:\$1|likhain ang pahinang ito]].",
'noexactmatch-nocreate'            => "'''Walang pahinang pinamagatang \"\$1\".'''",
'toomanymatches'                   => 'Napakaraming mga tumutugmang ibinalik, pakisubok ang isang ibang tanong',
'titlematches'                     => 'Tumutugma ang pamagat ng pahina',
'notitlematches'                   => 'Walang tumutugmang pamagat ng pahina',
'textmatches'                      => 'Tumutugma ang teksto ng pahina',
'notextmatches'                    => 'Walang katugmang pahina ng teksto',
'prevn'                            => 'nauna $1',
'nextn'                            => 'kasunod $1',
'viewprevnext'                     => 'Tingnan ($1) ($2) ($3)',
'searchmenu-legend'                => 'Mga pagpipilian para sa paghahanap',
'searchmenu-exists'                => "'''Mayroong pahinang may pangalang \"[[:\$1]]\" dito sa wiking ito'''",
'searchmenu-new'                   => "'''Likhain ang pahinang \"[[:\$1]]\" sa wiking ito!'''",
'searchhelp-url'                   => 'Help:Nilalaman',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Tingnan-tingnan ang mga pahinang may ganitong unahan/unlapi]]',
'searchprofile-articles'           => 'Mga pahina ng nilalaman',
'searchprofile-articles-and-proj'  => 'Mga pahina ng nilalaman at proyekto',
'searchprofile-project'            => 'Mga pahina ng proyekto',
'searchprofile-images'             => 'Mga talaksan',
'searchprofile-everything'         => 'Lahat ng bagay',
'searchprofile-advanced'           => 'Mas mataas na antas',
'searchprofile-articles-tooltip'   => 'Hanapin sa $1',
'searchprofile-project-tooltip'    => 'Hanapin sa $1',
'searchprofile-images-tooltip'     => 'Maghanap ng mga talaksan',
'searchprofile-everything-tooltip' => 'Hanapin ang lahat ng nilalaman (kabilang ang mga pahina ng usapan)',
'searchprofile-advanced-tooltip'   => 'Hanapin sa pinasadyang mga espasyo ng pangalan',
'prefs-search-nsdefault'           => 'Hanapin ayon sa likas na pagkakatakda:',
'prefs-search-nscustom'            => 'Hanapin ang pinasadyang mga espasyo ng pangalan:',
'search-result-size'               => '$1 ({{PLURAL:$2|1 salita|$2 mga salita}})',
'search-result-score'              => 'Kaugnayan: $1%',
'search-redirect'                  => '(ipanuto/ituro ang $1)',
'search-section'                   => '(seksyong $1)',
'search-suggest'                   => 'Ito ba ang ibig mong sabihin: $1',
'search-interwiki-caption'         => 'Kapatid na mga proyekto',
'search-interwiki-default'         => '$1 mga resulta:',
'search-interwiki-more'            => '(mas marami pa)',
'search-mwsuggest-enabled'         => 'may mga mungkahi',
'search-mwsuggest-disabled'        => 'walang mga mungkahi',
'search-relatedarticle'            => 'Kaugnay',
'mwsuggest-disable'                => 'Huwag paganahin ang mga mungkahi ng AJAX',
'searchrelated'                    => 'kaugnay',
'searchall'                        => 'lahat',
'showingresults'                   => "Ipinapakita sa ibaba ang magpahanggang sa {{PLURAL:$1|'''1''' resultang|'''$1''' mga resultang}} nagsisimula sa #'''$2'''.",
'showingresultsnum'                => "Ipinapakita sa ibaba ang {{PLURAL:$3|'''1''' resultang|'''$3''' mga resultang}} nagsisimula sa #'''$2'''.",
'showingresultstotal'              => "Ipinapakita sa ibaba ang {{PLURAL:$4|resultang '''$1''' ng '''$3'''|mga resultang '''$1 - $2''' ng '''$3'''}}",
'nonefound'                        => "'''Tandaan''': Ang hindi matagumpay na mga paghahanap ay kadalasang sanhi ng paghanap sa mga karaniwang mga salit tulad ng \"mayroon\" at \"mula\", na hindi naka-indeks, o pagbibigay ng higit sa isang terminong hinahanap. (ang pahina lamang na naglalaman ng lahat ng mga terminong hinahanap ang maipapakita sa resulta).",
'powersearch'                      => 'Paghahanap na may mas mataas na antas',
'powersearch-legend'               => 'Paghahanap na may mas mataas na antas',
'powersearch-ns'                   => 'Maghanap sa mga espasyo ng pangalan:',
'powersearch-redir'                => 'Itala ang mga panuto',
'powersearch-field'                => 'Hanapin ang',
'search-external'                  => 'Panlabas na paghahanap',
'searchdisabled'                   => 'Nakapatay ang paghahanap sa {{SITENAME}}. Maaari kang pansamantalang maghanap sa pamamagitan ng Google. Tandaan na maaaring luma na ang kanilang mga indeks sa nilalaman ng {{SITENAME}}.',

# Preferences page
'preferences'               => 'Mga kagustuhan',
'mypreferences'             => 'Aking mga kagustuhan',
'prefs-edits'               => 'Bilang ng mga pagbabago:',
'prefsnologin'              => 'Hindi nakalagda/nakatala',
'prefsnologintext'          => 'Kailangan mong <span class="plainlinks">[{{fullurl:Special:UserLogin|returnto=$1}} lumagda/tumala]</span> para makapagtakda ng mga kagustuhang ng tagagamit.',
'prefsreset'                => 'Muling itinakda ang mga kagustuhan mula sa taguan.',
'qbsettings-none'           => 'Wala',
'qbsettings-fixedleft'      => 'Inayos ang kaliwa',
'qbsettings-fixedright'     => 'Inayos ang kanan',
'qbsettings-floatingleft'   => 'Kaliwa lumulutang',
'qbsettings-floatingright'  => 'Kanan lumulutang',
'changepassword'            => 'Baguhin ang hudyat',
'skin'                      => 'Pabalat',
'skin-preview'              => 'Unang tingin',
'math'                      => 'Matematika',
'dateformat'                => 'Anyo ng petsa',
'datedefault'               => 'Walang kagustuhan',
'datetime'                  => 'Petsa at oras',
'math_failure'              => 'Nabigo sa pagbanghay',
'math_unknown_error'        => 'hindi nalalamang kamalian',
'math_unknown_function'     => 'hindi nalalamang tungkulin',
'math_lexing_error'         => 'kamalian sa pagbabatas',
'math_syntax_error'         => 'kamalian sa palaugnayan',
'math_image_error'          => 'Nabigo ang pagpapalit patungong PNG;
pakisuri kung tama ang pagiinstala ng latex, dvips, gs, at palitan',
'math_bad_tmpdir'           => 'Hindi maisulat sa o makalikha ng pansamantalang direktoryong pangmatematika',
'math_bad_output'           => 'Hindi maisulat sa o makalikha ng direktoryo ng produktong pangmatematika',
'math_notexvc'              => 'Nawawala ang maisasakatuparang texvc;
pakitingnan ang matematika/BASAHINAKO para maisaayos ang konpigurasyon.',
'prefs-personal'            => 'Sanligang pangkatangian ng tagagamit',
'prefs-rc'                  => 'Kamakailan lamang na mga pagbabago',
'prefs-watchlist'           => 'Talaan ng bantayan',
'prefs-watchlist-days'      => 'Mga araw na ipapakita sa talaan ng bantayan:',
'prefs-watchlist-days-max'  => '(pinakamarami ang 7 mga araw)',
'prefs-watchlist-edits'     => 'Pinakamaraming bilang ng mga pagbabagong ipapakita sa pinalawak na talaan ng bantayan:',
'prefs-watchlist-edits-max' => '(pinakamataas na bilang: 1000)',
'prefs-misc'                => 'Bala-balaki',
'prefs-resetpass'           => 'Baguhin ang hudyat',
'saveprefs'                 => 'Sagip',
'resetprefs'                => 'Hawanin ang hindi nasagip na mga pagbabago',
'textboxsize'               => 'May binabago',
'prefs-edit-boxsize'        => 'Sukat ng dungawan ng ginagawang pagbabago.',
'rows'                      => 'Mga pahalang na hanay:',
'columns'                   => 'Mga pahabang hanay:',
'searchresultshead'         => 'Hanapin',
'resultsperpage'            => 'Bilang ng pagtama sa bawat pahina:',
'contextlines'              => 'Linya bawat pagtama:',
'contextchars'              => 'Konteksto ng bawat guhit:',
'stub-threshold'            => 'Kakayanan para sa pagpopormat ng <a href="#" class="usbong">kawing ng usbong</a> (mga \'\'byte\'\'):',
'recentchangesdays'         => 'Mga araw na ipapakita sa kamakailan lamang na mga pagbabago:',
'recentchangesdays-max'     => '(pinakamataas na ang $1 {{PLURAL:$1|araw|mga araw}})',
'recentchangescount'        => 'Bilang ng mga pagbabagong ipapakita sa mga pahina ng kamakailan lamang na mga pagbabago, kasaysayan at pagtatala:',
'savedprefs'                => 'Nasagip na ang mga kagustuhan mo.',
'timezonelegend'            => 'Sona ng oras',
'timezonetext'              => '¹Ang bilang ng pagkakaiba ng katutubong oras mo mula sa oras ng serbidor (UTC).',
'localtime'                 => 'Lokal na oras',
'timezoneoffset'            => 'Pambawi¹',
'servertime'                => 'Oras ng serbidor',
'guesstimezone'             => "Punuin ng mula sa pantingin-tingin (''browser'')",
'allowemail'                => 'Pahintulutan ang e-liham mula sa ibang mga tagagamit',
'prefs-searchoptions'       => 'Mga pagpipilian para sa paghahanap',
'prefs-namespaces'          => 'Mga espasyo ng pangalan',
'defaultns'                 => 'Maghanap sa mga pangalan ng espasyong ito ayon sa likas na pagtatakda:',
'default'                   => 'Likas na pagtatakda',
'files'                     => 'Mga talaksan',

# User rights
'userrights'                  => 'Pamamahala ng mga karapatang ng tagagamit', # Not used as normal message but as header for the special page itself
'userrights-lookup-user'      => 'Pamahalaan ang mga pangkat ng tagagamit',
'userrights-user-editname'    => 'Magpasok ng isang pangalan ng tagagamit:',
'editusergroup'               => 'Baguhin ang mga pangkat ng tagagamit',
'editinguser'                 => 'Binabago ang <b>$1</b> na akawnt ng isang tagagamit',
'userrights-editusergroup'    => 'Baguhin ang mga pangkat ng tagagamit',
'saveusergroups'              => 'Sagipin ang mga pangkat ng tagagamit',
'userrights-groupsmember'     => 'Kasapi ng:',
'userrights-groups-help'      => 'Maaari mong baguhin ang mga pangkat ng tagagamit na ito sa:
* Kahon na naka-tsek na nangangahulugang ang tagagamit ay kasapi sa pangkat.
* Kahon na hindi naka-tsek na nangangahulugang na hindi kasapi ang tagagamit sa pangkat.
* Ipinapahiwatig ng * na maaaring tanggalng ang pangkat kapag dinagdag ito, o ang kabaglitaran nito.',
'userrights-reason'           => 'Dahilan ng pagbabago:',
'userrights-no-interwiki'     => 'Wala kang pahintulot na baguhin ang mga karapatan ng tagagamit sa ibang mga wiki.',
'userrights-nodatabase'       => 'Hindi umiiral ang kalipunan ng mga datong $1 o kaya hindi ito katutubo/lokal.',
'userrights-nologin'          => 'Kailangang [[Special:Userlogin|nakalagda ka]] bilang tagapangasiwa upang maitalaga ang mga karapatan ng tagagamit.',
'userrights-notallowed'       => 'Walang pahintulot ang iyong akawnt na magtalaga ng mga karapatan ng tagagamit.',
'userrights-changeable-col'   => 'Mga pangkat na maaari mong baguhin',
'userrights-unchangeable-col' => 'Mga pangkat na hindi mo mababago',

# Groups
'group'               => 'Pangkat:',
'group-user'          => 'Mga tagagamit',
'group-autoconfirmed' => 'Mga tagagamit na nakompirma sa kusang paraan (autokompirmasyon)',
'group-bot'           => "Mga ''bot''",
'group-sysop'         => "Mga ''sysop''",
'group-bureaucrat'    => 'Mga burokrato',
'group-suppress'      => 'Mga tagapagingat-tago',
'group-all'           => '(lahat)',

'group-user-member'          => 'Tagagamit',
'group-autoconfirmed-member' => 'Kusang nakumpirmang tagagamit',
'group-bureaucrat-member'    => 'Burokrato',
'group-suppress-member'      => 'Tagapagingat-tago',

'grouppage-user'          => '{{ns:project}}:Mga tagagamit',
'grouppage-autoconfirmed' => '{{ns:project}}:Kusang nakumpirmang mga tagagamit',
'grouppage-bot'           => "{{ns:project}}:Mga ''bot''",
'grouppage-sysop'         => '{{ns:project}}:Mga tagapangasiwa',
'grouppage-bureaucrat'    => '{{ns:project}}:Mga burokrato',
'grouppage-suppress'      => '{{ns:project}}:Mga tagapagingat-tago<!---katulad ng "ingat-yaman"-->',

# Rights
'right-read'                 => 'Basahin ang mga pahina',
'right-edit'                 => 'Baguhin ang mga pahina',
'right-createpage'           => 'Lumikha ng mga pahina (na hindi mga pahina ng usapan)',
'right-createtalk'           => 'Lumikha ng mga pahina ng usapan',
'right-createaccount'        => 'Lumikha ng bagong mga kuwenta ng tagagamit',
'right-minoredit'            => 'Itatak ang mga pagbabago bilang maliit',
'right-move'                 => 'Ilipat ang mga pahina',
'right-move-subpages'        => 'Ilipat ang mga pahina kasama ang pahinang nasa ilalim nito',
'right-suppressredirect'     => 'Hindi nilikha sa isang pagkarga mula sa lumang pangalan kapag naglipat ng isang pahina',
'right-upload'               => 'Magkarga ng mga talaksan',
'right-reupload'             => 'Patungan ang mayroon nang mga talaksan',
'right-reupload-own'         => 'Patungan ang talaksang kinarga ng sarili',
'right-reupload-shared'      => 'Patungan ang mga talaksan sa binabahaging repositoryo midya sa lokal',
'right-upload_by_url'        => 'Magkarga ng isang talaksan mula sa isang adres na URL',
'right-purge'                => "Sariwain ang ''cache'' ng sayt para sa isang pahina na walang kumpirmasyon",
'right-autoconfirmed'        => 'Baguhin ang medyo-nakaprotektang mga pahina',
'right-bot'                  => 'Maging isang awtomatikong proseso',
'right-nominornewtalk'       => 'Walang maliit na pagbabago sa mga pahina ng usapan na pasimula ang bagong paglitaw ng mga mensahe',
'right-apihighlimits'        => 'Gumamit ng mga matataas ng hangganan sa mga pagtatanong sa API',
'right-writeapi'             => 'Gamit ng sinulat na API',
'right-delete'               => 'Burahin ang mga pahina',
'right-bigdelete'            => 'Burahin ang mga pahinang may malaking mga kasaysayan',
'right-deleterevision'       => 'Burahin at tanggalin sa pagkabura ang isang partikular na mga pagbabago ng mga pahina',
'right-deletedhistory'       => 'Tingnan ang mga binurang pinasok na kasaysayan, na wala ang kanilang nakakabit na teksto',
'right-browsearchive'        => 'Hanapin ang mga binurang mga pahina',
'right-undelete'             => 'Buhayin muli ang isang pahina',
'right-suppressrevision'     => "Suriing muli at ibalik ang mga pagbabagong itinago mula sa mga ''Sysop''.",
'right-suppressionlog'       => 'Tingnan ang pansariling mga pagtatala.',
'right-block'                => 'Harangin sa paggawa ng pagbabago ang ibang mga tagagamit',
'right-blockemail'           => 'Harangin sa pagpapadala ng e-liham ang isang tagagamit',
'right-hideuser'             => 'Harangin ang isang tagagamit, na itinatago mula sa publiko',
'right-ipblock-exempt'       => 'Laktawan ang mga harang na pang-IP, kusang pagharang at mga saklaw ng pagharang',
'right-proxyunbannable'      => 'Laktawan ang mga kusang pagharang ng mga kahalili',
'right-protect'              => 'Baguhin ang mga antas ng panananggalang at baguhin ang mga pahinang nakasanggalang',
'right-editprotected'        => 'Baguhin ang mga pahinang nakasanggalang (walang baita-baitang na panananggalang)',
'right-editinterface'        => 'Baguhin ang ugnayang-hangganan ng tagagamit',
'right-editusercssjs'        => 'Baguhin ang mga talaksang CSS at JS ng ibang mga tagagamit',
'right-rollback'             => 'Mabilisang pagulungin pabalik sa dati ang mga pagbabago ng huling tagagamit na nagbago ng isang partikular na pahina',
'right-markbotedits'         => 'Itatak ang mga binalik na mga pagbabago bilang pagbabagong bot',
'right-noratelimit'          => 'Hindi maaapektuhan ng antas ng mga hangganan',
'right-import'               => 'Umangkat ng mga pahina mula sa ibang mga wiki',
'right-importupload'         => 'Umangkat ng mga pahina mula sa isang talaksang ikinarga',
'right-patrol'               => 'Tatakan bilang napatrolya ang mga pagbabago ng iba',
'right-autopatrol'           => 'Kusang tatakan bilang napatrolya ang sariling mga pagbabago',
'right-patrolmarks'          => 'Tingnan ang mga kamakailang pagbabagong natatakan bilang napatrolya',
'right-unwatchedpages'       => 'Tingnan ang isang talaan ng mga pahinang hindi binabantayan',
'right-trackback'            => "Magpasa ng isang balikan-ang-bakas (''trackback'')",
'right-mergehistory'         => 'Pagsanibin ang kasaysayan ng mga pahina',
'right-userrights'           => 'Baguhin ang lahat ng karapatan ng tagagamit',
'right-userrights-interwiki' => 'Baguhin ang karapatan ng mga tagagamit na nasa ibang mga wiki',
'right-siteadmin'            => 'Ikandado at alisin ang pagkakakandado ng kalipunan ng dato',

# User rights log
'rightslog'      => 'Tala ng mga karapatan ng tagagamit',
'rightslogtext'  => 'Isa itong tala ng mga pagbabago sa mga karapatan ng tagagamit.',
'rightslogentry' => 'binago ang kasapiang pampangkat para kay $1 mula sa $2 patungong $3',
'rightsnone'     => '(wala)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => 'basahin itong pahina',
'action-edit'                 => 'baguhin itong pahina',
'action-createpage'           => 'lumikha ng mga pahina',
'action-createtalk'           => 'lumikha ng mga pahina ng usapan',
'action-createaccount'        => 'likhain itong kuwenta ng tagagamit',
'action-minoredit'            => 'tatakan ito bilang isang maliit na pagbabago',
'action-move'                 => 'ilipat itong pahina',
'action-move-subpages'        => 'ilipat itong pahina, pati ang mga kabahaging pahina (subpahina) nito',
'action-move-rootuserpages'   => 'ilipat ang mga pinagugatang mga pahina ng tagagamit',
'action-upload'               => 'ikarga itong talaksan',
'action-reupload'             => 'patungan itong pahinang umiiral',
'action-reupload-shared'      => 'daigin itong talaksan sa isang pinagsasaluhang taguan/repositoryo',
'action-upload_by_url'        => 'ikarga itong talaksan mula sa isang adres ng URL',
'action-writeapi'             => 'gamitin ang pagsulat na API',
'action-delete'               => 'burahin itong pahina',
'action-deleterevision'       => 'burahin ang pagbabagong ito',
'action-deletedhistory'       => 'tingnan ang binurang kasaysayan ng pahinang ito',
'action-browsearchive'        => 'hanapin ang binurang mga pahina',
'action-undelete'             => 'ibalik mula sa pagkakabura ang pahinang ito',
'action-suppressrevision'     => 'suriing muli at ibalik ang nakatagong pagbabagong ito',
'action-suppressionlog'       => 'tingnan itong pribadong tala',
'action-block'                => 'harangin sa paggawa ng pagbabago ang tagagamit na ito',
'action-protect'              => 'baguhin ang mga antas ng pagsasanggalang para sa pahinang ito',
'action-import'               => 'angkatin itong pahina mula sa ibang wiki',
'action-autopatrol'           => 'tatakan ang pagbabago mo bilang napatrolya na',
'action-unwatchedpages'       => 'tingnan ang talaan ng mga pahinang hindi nababantayan',
'action-trackback'            => "magpasa ng isang balikan-ang-bakas (''trackback'')",
'action-mergehistory'         => 'pagsanibin ang kasaysayan nitong pahina',
'action-userrights'           => 'baguhin ang lahat ng karapatan ng tagagamit',
'action-userrights-interwiki' => 'baguhin ang mga karapatan ng tagagamit na nasa ibang mga wiki',
'action-siteadmin'            => 'ikandado o tanggalin ang pagkakakandado ng kalipunan ng dato',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|pagbabago|mga pagbabago}}',
'recentchanges'                     => 'Kamakailang mga pagbabago',
'recentchanges-legend'              => 'Mga pagpipilian para sa kamakailang mga pagbabago',
'recentchangestext'                 => 'Subaybayan ang mga pinakahuling pagbabago sa wiki sa pahinang ito.',
'recentchanges-feed-description'    => 'Sundan ang pinakahuling mga pagbabago sa wiki sa pamamagitan ng feed na ito.',
'rcnotefrom'                        => "Nasa ibaba ang mga pagbabago mula pa noong '''$2''' (ipinapakita ang magpahanggang sa '''$1''').",
'rclistfrom'                        => 'Ipakita ang bagong mga pagbabago simula sa $1',
'rcshowhideminor'                   => '$1 maliliit na mga pagbabago',
'rcshowhidebots'                    => "$1 mga ''bot''",
'rcshowhideliu'                     => '$1 nakalagdang mga tagagamit',
'rcshowhideanons'                   => '$1 hindi kilalang mga tagagamit',
'rcshowhidepatr'                    => '$1 napatrolyang mga pagbabago',
'rcshowhidemine'                    => '$1 mga pagbabago ko',
'rclinks'                           => 'Ipakita ang huling $1 mga pagbabago sa loob ng huling $2 mga araw<br />$3',
'diff'                              => 'pagkakaiba',
'hist'                              => 'kasaysayan',
'hide'                              => 'Itago',
'show'                              => 'Ipakita',
'minoreditletter'                   => 'mltp<!--maliit na pagbabago-->',
'newpageletter'                     => 'Bph<!--Bagong pahina-->',
'number_of_watching_users_pageview' => '[$1 binabantayang {{PLURAL:$1|tagagamit|mga tagagamit}}]',
'rc_categories'                     => 'Itakda lang sa mga kaurian (ihiwalay sa pamamagitan ng "|")',
'rc_categories_any'                 => 'Kahit ano',
'newsectionsummary'                 => '/* $1 */ bagong seksyon',
'rc-enhanced-expand'                => 'Ipakita ang mga detalye (kailangan ng JavaScript)',
'rc-enhanced-hide'                  => 'Itago ang mga detalye',

# Recent changes linked
'recentchangeslinked'          => 'Kaugnay na mga pagbabago',
'recentchangeslinked-title'    => 'Mga pagbabagong kaugnay ng "$1"',
'recentchangeslinked-noresult' => 'Walang mga pagbabago sa mga pahinang nakakawing sa ibinigay na kapanahunan.',
'recentchangeslinked-summary'  => "Nililista ng natatanging pahina na ito ang huling mga pagbabago na nakaugnay. Naka '''matapang na teksto''' ang iyong mga binabantayan.",
'recentchangeslinked-page'     => 'Pangalan ng pahina:',
'recentchangeslinked-to'       => 'Ipakita ang mga pagbabago sa mga pahinang nakaugnay sa isang binigay na pahina sa halip',

# Upload
'upload'                      => 'Magkarga ng talaksan',
'uploadbtn'                   => 'Magkarga ng talaksan',
'reupload'                    => 'Magkarga muli',
'reuploaddesc'                => 'Bumalik sa pormularyo ng pagkarga',
'uploadnologin'               => 'Hindi nakalagda',
'uploadnologintext'           => 'Dapat ikaw ay [[Special:UserLogin|nakalagda]]
upang makapagkarga ng talaksan.',
'upload_directory_missing'    => 'Nawawala ang direktoryo ng pagkarga ($1) at hindi na mailikha ng webserver.',
'upload_directory_read_only'  => 'Ang direktoryo ng pagkarga ($1) ay hindi maisulat ng webserver.',
'uploaderror'                 => 'Kamalian sa pagkarga',
'upload-permitted'            => 'Pinapahintulutang mga uri ng talaksan: $1.',
'upload-preferred'            => 'Mas iniibig na mga uri ng talaksan: $1.',
'upload-prohibited'           => 'Ipinagbabawal na mga uri ng talaksan: $1.',
'uploadlog'                   => 'tala ng pagkarga',
'uploadlogpage'               => 'Tala ng pagkarga',
'uploadlogpagetext'           => 'Nasa ibaba ang tala ng pinakahuling mga karga ng talaksan.',
'filename'                    => 'Pangalan ng talaksan',
'filedesc'                    => 'Buod',
'fileuploadsummary'           => 'Buod:',
'filestatus'                  => 'Kalagayan ng karapang-ari:',
'filesource'                  => 'Pinagmulan:',
'uploadedfiles'               => 'Naikargang mga talaksan',
'ignorewarning'               => 'Balewalain ang babala at sagipin basta ang talaksan',
'ignorewarnings'              => 'Balewalain ang anumang mga babala',
'minlength1'                  => 'Dapat may kahit na isang titik lang ang mga pangalan ng talaksan.',
'illegalfilename'             => 'Ang pangalan ng talaksan (filename) na "$1" ay mayroon mga karakter na hindi pinapahintulot bilang pamagat ng isang pahina. Paki palitan ang pangalan at subukang ikarga muli.',
'badfilename'                 => 'Pinalitan ang pangalan ng talaksan na naging "$1".',
'filetype-badmime'            => 'Hindi pinapahintulutang maikarga ang uring "$1" ng mga talaksang MIME.',
'filetype-missing'            => 'Walang karugtong/hulapi ang talaksan (katulad ng ".jpg").',
'large-file'                  => 'Iminumungkahing hindi hihigit ang laki ng mga talaksan sa $1;
ang talaksang ito ay $2.',
'largefileserver'             => 'Mas malaki ang talaksan kaysa nakatakdang papahintulutan ng serbidor.',
'emptyfile'                   => 'Mukhang walang laman ang talaksan (file) na ikinarga mo. Maaaring dahil ito sa maling pagkapasok ng pangalan ng talaksan.  Paki tingin kung gusto mo talagang ikarga ang talaksan na ito.',
'fileexists'                  => 'Mayroon ng talaksan na ganitong pangalan, paki tingin ang <strong><tt>$1</tt></strong> kung tiyak ka na babaguhin ito.',
'filepageexists'              => 'Ang pahina ng paglalarawan para sa talaksan na ito ay nalikha na sa <strong><tt>$1</tt></strong>, ngunit walang talaksan na may ganitong pangalan.
Lilitaw ang buod na ipapasok mo sa pahina ng paglalarawan.
Para lumitaw ang buod mo doon, kailangan mong baguhin ito ng manwal.',
'fileexists-extension'        => 'Mayroon talaksan na ganitong pangalan:<br />
Pangalan ng ikakargang talaksan: <strong><tt>$1</tt></strong><br />
Pangalan ng mayroon nang talaksan: <strong><tt>$2</tt></strong><br />
Pumili ng ibang pangalan.',
'fileexists-thumb'            => "<center>'''Umiiral na talaksan'''</center>",
'fileexists-thumbnail-yes'    => 'Mukhang pinaliit <i>(thumbnail)</i> na larawan ang talaksan. Paki tingin ang talaksan <strong><tt>$1</tt></strong>.<br />
Kung ang tinignan na talaksan ay ang kaparehong larawan ng orihinal na laki, hindi na kailangang magkarga ng panibagong <i>thumbnail</i>.',
'file-thumbnail-no'           => "Nagsisimula ang pangalan ng talaksan sa <strong><tt>$1</tt></strong>.  Tila ito'y isang larawan na may pinaliit na sukat<i>(thumbnail)</i>.
Kung mayroon ang larawang ito ng pinakamataas na resolution, ikarga ito, kung hindi paki palitan ang pangalan ng talaksan.",
'fileexists-forbidden'        => 'Mayroon nang ganitong talaksan; bumalik at ikarga muli ang talaksan sa ilalim ng bagong pangalan. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Mayroon nang ganitong talaksan sa binabahaging repositoryo; bumalik at ikarga ang talaksan na ito sa bagong pangalan.
[[Image:$1|thumb|center|$1]]',
'file-exists-duplicate'       => 'Ang talaksang ito ay isang kakambal ng sumusunod na {{PLURAL:$1|talaksan|mga talaksan}}:',
'successfulupload'            => 'Matagumpay na pagkakarga',
'uploadwarning'               => 'Babala sa pagkakarga',
'savefile'                    => 'Sagipin ang talaksan',
'uploadedimage'               => 'ikinarga ang "[[$1]]"',
'overwroteimage'              => 'nagkarga ng isang bagong bersyon ng "[[$1]]"',
'uploaddisabled'              => 'Hindi pinagana ang mga pagkarga',
'uploaddisabledtext'          => 'Hindi pinagana ang mga pagkakarga ng talaksan.',
'uploadscripted'              => 'Naglalaman ang talaksan na ito ng HTML o kodigong script na maaaring mali ang pagkaintindi ng isang web browser.',
'uploadcorrupt'               => 'Sira o may maling ekstensyon ang talaksan. Paki tingin ang talaksan at ikarga muli.',
'uploadvirus'                 => 'Naglalaman ng virus ang talaksan! Mga detalye: $1',
'sourcefilename'              => 'Pangalan ng panggagalingang talaksan:',
'destfilename'                => 'Pangalan ng patutunguhang talaksan:',
'upload-maxfilesize'          => 'Pinakamataas na sukat ng talaksan: $1',
'watchthisupload'             => 'Bantayan itong pahina',
'filewasdeleted'              => 'Isang talaksan na may ganitong pangalan ay naikarga dati at nabura. Kailangan mong tingnan ang $1 bago magpatuloy sa pagkarga nito muli.',
'upload-wasdeleted'           => "'''Babala: Kinakarga mo ang isang talaksan na nabura na.'''

Ikunsidera mo kung nararapat ba na ipagpatuloy ang pagkarga ng talaksang ito.
Ibinigay ang tala ng pagbura ng talaksang ito para konbinyente:",
'filename-bad-prefix'         => 'Ang talaksan na ikakarga mo ay nagsisimula sa <strong>"$1"</strong>, na isang hindi naglalarawang pangalan na karaniwang tinatakda ng mga kamerang digital. Paki pili ang isang mas naglalarawang pangalan para sa iyong talaksan.',

'upload-proto-error'      => 'Maling protokolo',
'upload-proto-error-text' => 'Nangangailangan ang malayong pagkarga ng mga URL na nagsisimula sa <code>http://</code> o <code>ftp://</code>.',
'upload-file-error'       => 'Panloob na kamalian',
'upload-file-error-text'  => 'Isang panloob na mali ang nangyari nang sinubukang na likhain ang isang pansamantalang talaksan sa server.  Makipag-ugnay sa isang tagapangasiwa ng sistema.',
'upload-misc-error'       => 'Hindi nalalamang kamalian sa pagkakarga',
'upload-misc-error-text'  => 'Naganap ang isang hindi nalalamang kamalian sa panahon ng pagkakarga.
Pakisuri kung katanggap-tanggap at mapupuntahan ang URL at subukin uli.
Kapag nagpatuloy ang suliranin, makipagugnayan sa isang [[Special:ListUsers/sysop|tagapangasiwa]].',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Hindi marating ang URL',
'upload-curl-error6-text'  => 'Hindi marating ang ibinigay na URL.
Pakisuring muli kung tama ang URL at kung buhay ang sityo/sayt.',
'upload-curl-error28'      => 'Pahinga sa pagkakarga',
'upload-curl-error28-text' => 'Napakatagal bago tumugon ang sityo/sayt.
Pakisuri kung buhay ang sayt, maghintay ng kaunti at subukin uli.
Maaaring ibigin mong subukin uli sa isang hindi gaanong abalang panahon.',

'license'            => 'Paglilisensya:',
'nolicense'          => 'Walang napili',
'license-nopreview'  => '(Walang makuhang paunang tingin)',
'upload_source_url'  => ' (isang tanggap at napupuntahan ng publikong URL)',
'upload_source_file' => ' (isang talaksan sa iyong kompyuter)',

# Special:FileList
'imagelist-summary'     => 'Ipinapakita nitong natatanging pahinang ang lahat ng naikargang mga talaksan.
Bilang naitakda ipinapakita sa itaas ng talaan ang huling ikinargang mga talaksan.
Mababago ang pagkakapangkat-pangkat sa pamamagitan ng pagpindot sa isang paulo ng pahabang kahanayan.',
'imagelist_search_for'  => 'Hanapin ang pangalan ng midya:',
'imgfile'               => 'talaksan',
'imagelist'             => 'Talaan ng talaksan',
'imagelist_date'        => 'Petsa',
'imagelist_name'        => 'Pangalan',
'imagelist_user'        => 'Tagagamit',
'imagelist_size'        => 'Sukat',
'imagelist_description' => 'Paglalarawan',

# File description page
'filehist'                       => 'Kasaysayan ng talaksan',
'filehist-help'                  => 'Pindutin ang isang petsa/oras para makita ang anyo ng talaksan noong panahong iyon.',
'filehist-deleteall'             => 'burahin lahat',
'filehist-deleteone'             => 'burahin',
'filehist-revert'                => 'ibalik',
'filehist-current'               => 'kasalukuyan',
'filehist-datetime'              => 'Petsa/Oras',
'filehist-thumb'                 => "Kagyat (''thumbnail'')",
'filehist-user'                  => 'Tagagamit',
'filehist-dimensions'            => 'Mga dimensyon',
'filehist-filesize'              => 'Laki ng talaksan',
'filehist-comment'               => 'Komento',
'imagelinks'                     => 'Mga ugnay',
'nolinkstoimage'                 => 'Walang pahing tumuturo sa talaksang ito.',
'morelinkstoimage'               => 'Tingnan [[Special:Whatlinkshere/$1|pa ang maraming ugnay]] sa talaksang ito.',
'redirectstofile'                => 'Ang sumusunod na {{PLURAL:$1|talaksan|$1 mga talaksan}} ay nakakarga sa talaksan na ito:',
'duplicatesoffile'               => 'Ang sumusunod na {{PLURAL:$1|talaksan|$1 mga talaksan}} ay kapareho talaksan na ito:',
'shareduploadwiki'               => 'Paki tingnan ang $1 para marami pang impormasyon.',
'shareduploadwiki-desc'          => 'Ipinapakita sa ibaba ang paglalarawan sa $1 nito sa binabahaging repositoryo.',
'shareduploadwiki-linktext'      => 'pahinang deskripsyon ng pahina',
'shareduploadduplicate'          => 'Kopya ang talaksan ito ng $1 mula sa binabahaging repositoryo.',
'shareduploadduplicate-linktext' => 'isa pang talaksan',
'shareduploadconflict'           => 'Ang talaksang na ito ay may katulad na pangalan sa $1 mula sa binabahaging repositoryo.',
'shareduploadconflict-linktext'  => 'isa pang talaksan',
'noimage'                        => 'Walang talaksan na ganitong pangalan, maaari mong $1.',
'noimage-linktext'               => 'ikarga ito',
'uploadnewversion-linktext'      => 'Magkarga ng bagong bersyon ng talaksang ito',
'imagepage-searchdupe'           => 'Maghanap ng magkakaparehong mga talaksan',

# File reversion
'filerevert'                => 'Ibalik sa dati ang $1',
'filerevert-legend'         => 'Ibalik ang talaksan',
'filerevert-intro'          => '<span class="plainlinks">Binabalik mo ang \'\'\'[[Media:$1|$1]]\'\'\' sa [$4 bersyon noong $3, $2].</span>',
'filerevert-comment'        => 'Komento:',
'filerevert-defaultcomment' => 'Binalik sa bersyon noong $2, $1',
'filerevert-submit'         => 'Ibalik',
'filerevert-success'        => '<span class="plainlinks">Naibalik ang \'\'\'[[Media:$1|$1]]\'\'\' sa [$4 bersyon noong $3, $2].</span>',
'filerevert-badversion'     => 'Walang nakaraang lokal na bersyon ang talaksan na ito kasama ang binigay na <i>timestamp</i>.',

# File deletion
'filedelete'                  => 'Burahin ang $1',
'filedelete-legend'           => 'Burahin ang talaksan',
'filedelete-intro'            => "Binubura mo ang '''[[Media:$1|$1]]'''.",
'filedelete-intro-old'        => '<span class="plainlinks">Binubura mo ang bersyon ng \'\'\'[[Media:$1|$1]]\'\'\' sa petsa na [$4 $3, $2].</span>',
'filedelete-comment'          => 'Dahilan sa pagkabura:',
'filedelete-submit'           => 'Burahin',
'filedelete-success'          => "Binura na ang '''$1'''.",
'filedelete-success-old'      => '<span class="plainlinks">Nabura ang bersyon \'\'\'[[Media:$1|$1]]\'\'\' ng $2 noong $3.</span>',
'filedelete-nofile'           => "Hindi umiiral ang '''$1'''.",
'filedelete-nofile-old'       => "Walang arkibong bersyon ng '''$1''' sa binigay na katangian.",
'filedelete-otherreason'      => 'Iba/karagdagang dahilan:',
'filedelete-reason-otherlist' => 'Ibang dahilan',
'filedelete-reason-dropdown'  => '*Karaniwang dahilan sa pagbura
** Paglabag sa karapatang-ari
** Kaparehong talaksan',
'filedelete-edit-reasonlist'  => 'Baguhin ang mga dahilan ng pagbura',

# MIME search
'mimesearch'         => 'Maghanap ng MIME',
'mimesearch-summary' => 'Pinapagana ng pahinang ito ang pagsasala ng mga talaksan para sa kanyang uri ng MIME. Pagpasok: uringnilalaman/masmababanguri, hal. <tt>image/jpeg</tt>.',
'mimetype'           => 'Uri ng MIME:',
'download'           => 'kumuha ng talaksan (download)',

# Unwatched pages
'unwatchedpages' => 'Hindi binabantayang mga pahina',

# List redirects
'listredirects' => 'Tala ng mga karga',

# Unused templates
'unusedtemplates'     => 'Hindi ginagamit na mga suleras',
'unusedtemplatestext' => 'Tinatala ng pahinang ito ang lahat ng mga pahina sa espasyong pangalan ng suleras na hindi kasama sa ibang pahina. Tandaan na tingnan ang ibang mga ugnay sa mga suleras bago burahin ito.',
'unusedtemplateswlh'  => 'ibang mga ugnay',

# Random page
'randompage'         => 'Pahinang walang-pili',
'randompage-nopages' => 'Walang mga pahina sa pangalan-espasyong "$1".',

# Random redirect
'randomredirect'         => 'Alinmang panuto',
'randomredirect-nopages' => 'Walang mga panuto sa pangalan-espasyong "$1".',

# Statistics
'statistics'               => 'Mga estadistika',
'statistics-header-pages'  => 'Mga estadistika ng pahina',
'statistics-header-edits'  => 'Baguhin ang mga estadistika',
'statistics-header-views'  => 'Tingnan ang mga estadistika',
'statistics-header-users'  => 'Mga estadistika sa mga tagagamit',
'statistics-articles'      => 'Mga pahina ng nilalaman',
'statistics-pages'         => 'Mga pahina',
'statistics-pages-desc'    => 'Lahat ng mga pahina sa loob ng wiki, kabilang ang mga pahina ng usapan, mga panuto, atbp.',
'statistics-files'         => 'Ikinargang mga talaksan',
'statistics-edits'         => 'Naihanda na ang mga pagbabago ng pahina mula sa {{SITENAME}}',
'statistics-edits-average' => 'Karaniwang pagbabago sa bawat pahina',
'statistics-views-total'   => 'Kalahatang pagdayo',
'statistics-views-peredit' => 'Pagtingin sa bawat pagbabago',
'statistics-jobqueue'      => '[http://www.mediawiki.org/wiki/Manual:Job_queue Bilang ng gagawin]',
'statistics-users'         => 'Mga nakatalang [[Natatangi:ListUsers|tagagamit]]',
'statistics-users-active'  => 'Mga masusugid na tagagamit <small>(mga nakatalang mang-aambag sa buwang ito)</small>',
'statistics-mostpopular'   => 'Mga pinakarinarayong pahina',

'disambiguations'      => 'Mga pahina ng paglilinaw',
'disambiguationspage'  => "Mga tagapangasiwa, paki panatili ang pahinang ito sa pamamagitan ng pagsama ng mga ugnay sa lahat ng mga suleras (template) ng paglilinaw at alinmang mga ikinarga (redirect) sa kanila. 

Ginagamit ang tala na ito ng [[Special:Disambiguations]] upang ipakita ang kahit anong mga pahina na umuugnay sa mga artikulong naglilinaw.  Gagamitin din ito ng mga iba't ibang mga bot.

<small>Paalala: Maaaring isalin ang pahinang ito at muling ayusin. Anumang ugnay sa '''<nowiki>[[template:...]]</nowiki>''' ay ituturing bilang mga ugnay (links) sa mga suleras ng paglilinaw.</small>

* [[Template:Disambig]]
* [[Template:Paglilinaw]]",
'disambiguations-text' => "Ang sumusunod ay mga pahinang may ugnay (link) sa isang '''pahinang naglilinaw'''.  Dapat silang umugnay sa tamang paksa<br />Tinuturing ang isang pahina bilang pahinang naglilinaw kung ginagamit nito ang isang suleras (template) na nakaugnay mula sa [[MediaWiki:disambiguationspage]].",

'doubleredirects'     => 'Dobleng mga karga (redirect)',
'doubleredirectstext' => "'''Tandaan:''' Maaring naglalaman ng ''false positives'' ang listahang ito. Karaniwang may karagdagang text na may link na sumusunod sa unang #REDIRECT ang mga ito.<br />
Naglalaman ng link ang bawat hanay sa una at ikalawang redirect, at nang unang linya ng text ng ikalawang redirect, karaniwang binibigay ang \"totoong\" target page, na dapat na ituro ng unang redirect.",

'brokenredirects'        => 'Mga sirang pangkarga',
'brokenredirectstext'    => 'Ang mga sumusunod na redirect ay nakaturo sa pahinang hindi pa nagawa.',
'brokenredirects-edit'   => '(baguhin)',
'brokenredirects-delete' => '(burahin)',

'withoutinterwiki'         => 'Mga pahinang walang mga ugnay pang-wika',
'withoutinterwiki-summary' => 'Walang ugnay ang mga sumusunod ng pahina sa mga ibang bersyon na wika:',
'withoutinterwiki-legend'  => 'Unlapi',
'withoutinterwiki-submit'  => 'Ipakita',

'fewestrevisions' => 'Mga artikulong may kakaunting pagbabago',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|mga byte}}',
'ncategories'             => '$1 {{PLURAL:$1|kategorya|mga kategorya}}',
'nlinks'                  => '$1 {{PLURAL:$1|ugnay|mga ugnay}}',
'nmembers'                => '$1 {{PLURAL:$1|kasapi|mga kasapi}}',
'nrevisions'              => '$1 {{PLURAL:$1|pagbabago|mga pagbabago}}',
'nviews'                  => '$1 {{PLURAL:$1|nakita|mga nakikita}}',
'specialpage-empty'       => 'Walang resulta para sa ulat na ito.',
'lonelypages'             => 'Mga inulilang pahina',
'lonelypagestext'         => 'Ang mga sumusunod ng mga pahina ay hindi nakaturo mula sa ibang mga pahina sa wiking ito.',
'uncategorizedpages'      => 'Hindi nakakategoryang mga pahina',
'uncategorizedcategories' => 'Hindi nakakategoryang mga kategorya',
'uncategorizedimages'     => 'Hindi nakakategoryang mga larawan',
'uncategorizedtemplates'  => 'Hindi nakakategoryang mga suleras',
'unusedcategories'        => 'Hindi ginagamit na mga kategorya',
'unusedimages'            => 'Hindi ginagamit na mga talaksan',
'popularpages'            => 'Mga popular na pahina',
'wantedcategories'        => 'Kinakailangang mga kategorya',
'wantedpages'             => 'Kinakailangang mga pahina',
'mostlinked'              => 'Pinakamaraming ugnay sa mga pahina',
'mostlinkedcategories'    => 'Pinakamaraming ugnay sa mga kategorya',
'mostlinkedtemplates'     => 'Pinakamaraming ugnay sa mga suleras',
'mostcategories'          => 'Mga artikulong may pinakamaraming kategorya',
'mostimages'              => 'Pinakamaraming ugnay sa mga larawan',
'mostrevisions'           => 'Mga artikulong may pinakamaraming pagbabago',
'prefixindex'             => 'Unlaping indeks',
'shortpages'              => 'Mga maiikling pahina',
'longpages'               => 'Mga mahahabang pahina',
'deadendpages'            => 'Mga pahinang walang panloob na ugnay (internal link)',
'deadendpagestext'        => "Ang mga sumusunod na mga pahina'y hindi umuugnay sa ibang mga pahina sa wiking ito.",
'protectedpages'          => 'Mga nakaprotektang pahina',
'protectedpages-indef'    => 'Mga walang katiyakang proteksyon lamang',
'protectedpagestext'      => 'Nakaprotekta ang mga sumusunod na mga pahina mula sa paglipat o pagbago',
'protectedpagesempty'     => 'Walang mga pahina ang kasalukuyang nakaprotekta na may ganoong mga parametro.',
'protectedtitles'         => 'Mga nakaprotektang pamagat',
'protectedtitlestext'     => 'Ang sumusunod ay mga pamagat na nakaprotekta mula sa pagkalikha.',
'protectedtitlesempty'    => 'Walang pamagat ang kasalukuyang nakaprotekta sa binigay na parametro.',
'listusers'               => 'Tala ng tagagamit',
'newpages'                => 'Mga bagong pahina',
'newpages-username'       => 'Bansag:',
'ancientpages'            => 'Mga pinakalumang pahina',
'move'                    => 'Ilipat',
'movethispage'            => 'Ilipat itong pahina',
'unusedimagestext'        => '<p>Tandaan na maaaring may ugnay sa ibang larawan na may diretsong URL ang ibang websayt, at sa ganitong paraan maaaring nakalista pa ito dito kahit na aktibo pa ang paggamit nito.</p>',
'unusedcategoriestext'    => 'Mayroon ang mga sumusunod na mga kategorya bagaman walang ibang artikulo o kategorya ang gumagamit sa mga ito.',
'notargettitle'           => 'Walang pupuntahan',
'notargettext'            => 'Hindi ka nagbigay ng pupuntahang pahina o tagagamit upang gumana ito.',
'nopagetitle'             => 'Wala ganyang pahina',
'nopagetext'              => 'Wala ang binigay mong pahina',
'suppress'                => 'Pagkalingat',

# Book sources
'booksources'               => 'Mga mapagkukunang aklat',
'booksources-search-legend' => 'Maghanap ng mapagkukunang aklat',
'booksources-go'            => 'Punta',
'booksources-text'          => 'Matatagpuan sa ibaba ang mga tala ng mga ugnay sa ibang mga websayt na nagbebenta ng bago at nagamit na mga aklat, at maaring mayroon din
na iba pang impormasyon tungkol sa mga aklat na hinahanap mo:',

# Special:Log
'specialloguserlabel'  => 'Tagagamit:',
'speciallogtitlelabel' => 'Pamagat:',
'log'                  => 'Mga tala',
'all-logs-page'        => 'Lahat ng mga talaan',
'alllogstext'          => 'Pinagsamang mga talaan sa {{SITENAME}}.  Maaaring paikliin ang nakikita sa pamamagitan ng pagpili ng uri ng tala, tagagamit o apektadong pahina.',
'logempty'             => 'Walang makitang katumbas na aytem sa tala.',
'log-title-wildcard'   => 'Hanapin ang mga pamagat na nagsisimula sa tekstong ito',

# Special:AllPages
'allpages'          => 'Lahat ng pahina',
'alphaindexline'    => '$1 hanggang $2',
'nextpage'          => 'Susunod na pahina ($1)',
'prevpage'          => 'Nakaraang pahina ($1)',
'allpagesfrom'      => 'Pinapakita ang mga pahina na nagsisimula sa:',
'allarticles'       => 'Lahat ng artikulo',
'allinnamespace'    => 'Lahat ng pahina sa ($1 namespace)',
'allnotinnamespace' => "Lahat ng pahina (wala $1 pangalang espasyo o ''namespace'')",
'allpagesprev'      => 'Nakaraan',
'allpagesnext'      => 'Susunod',
'allpagessubmit'    => 'Ipadala',
'allpagesprefix'    => 'Ipakita ang mga pahina na may unlapi:',
'allpagesbadtitle'  => 'Ang binagay na pamagat ng pahina ay hindi tinatanggap o may unlapi na tumuturo sa ibang wika o wiki.  Maaaring naglalaman ito ng isa o higit pa na mga karakter na hindi ginagamit bilang pamagat.',
'allpages-bad-ns'   => 'Wala sa {{SITENAME}} ang espasyo ng pangalang "$1".',

# Special:Categories
'categories'                    => 'Mga kategorya',
'categoriespagetext'            => 'Ang mga sumusunod na kategorya ay naglalaman ng mga pahina o midya.',
'categoriesfrom'                => 'Ipakita ang mga kategoryang nagsisimula sa:',
'special-categories-sort-count' => 'ayusin sa pamamagitan ng bilang',
'special-categories-sort-abc'   => 'ayusin sa pamamagitan ng alpabeto',

# Special:DeletedContributions
'deletedcontributions' => 'Naburang ambag ng tagagamit',

# Special:LinkSearch
'linksearch'       => 'Hanapin ang ugnay pang-web',
'linksearch-pat'   => 'Huwaran ng hanap',
'linksearch-ns'    => 'Pangalang espasyo',
'linksearch-ok'    => 'Hanapin',
'linksearch-text'  => 'Maaaring gamitin ang mga wildcards katulad ng "*.wikipedia.org".<br />Mga sinusuportang protocol: <tt>$1</tt>',
'linksearch-line'  => '$1 nakaugnay mula sa $2',
'linksearch-error' => 'Magpapakita lamang ang mga wildcard sa simula ng hostname.',

# Special:ListUsers
'listusersfrom'      => 'Ipakita ang mga tagagamit simula sa:',
'listusers-submit'   => 'Ipakita',
'listusers-noresult' => 'Walang mahanap na tagagamit.',

# Special:Log/newusers
'newuserlogpage'              => 'Tala ng bagong gawang tagagamit',
'newuserlogpagetext'          => 'Ito ang tala ng mga nalikhang tagagamit',
'newuserlog-byemail'          => 'napadala ang hudyat sa pamamagitan ng e-liham',
'newuserlog-create-entry'     => 'Bagong tagagamit',
'newuserlog-create2-entry'    => 'nilikhang akawnt para kay $1',
'newuserlog-autocreate-entry' => 'Awtomatikong nalikha ang akawnt',

# Special:ListGroupRights
'listgrouprights'          => 'Mga uri ng tagagamit',
'listgrouprights-summary'  => 'Ang sumusunod ay isang tala ng mga pangkat ng tagagamit na binigyan kahulugan ng wiki na ito, kasama ang kanilang mga nakakabit na karapatan.
Matatagpuan ang karagdagang impormasyon tungkol sa indibiduwal na karapatan sa [[{{MediaWiki:Listgrouprights-helppage}}]].',
'listgrouprights-group'    => 'Pangkat',
'listgrouprights-rights'   => 'Mga karapatan',
'listgrouprights-helppage' => 'Help:Mga pangkat ng karapatan',
'listgrouprights-members'  => '(tala ng mga kasapi)',

# E-mail user
'mailnologin'     => 'Walang pagpapadalhang adres',
'mailnologintext' => 'Kailangan mong [[Special:Userlogin|lumagda]]
at may balidong e-liham sa iyong [[Special:Preferences|mga kagustuhan]]
para makapagpadala ng e-liham sa ibang mga tagagamit.',
'emailuser'       => 'Mag-e-liham',
'emailpage'       => 'Magpadala ng e-liham sa tagagamit',
'emailpagetext'   => 'Kung nagbigay ang tagagamit na ito ng balidong e-liham
sa kanyang mga kagustuhan, maipapadala ang nasa ibaba bilang isang mensahe.
Lilitaw ang adres ng e-liham mo sa "Mula kay" (From) na adres ng liham, sa ganitong paraan makakatugon ang tatanggap.',
'usermailererror' => 'Nagbalik ng mali ang obdyek ng liham:',
'defemailsubject' => 'Tagalog {{SITENAME}} e-liham',
'noemailtitle'    => 'Walang adres na e-liham',
'noemailtext'     => 'Hindi nagbigay ng balidong e-liham ang tagagamit na ito,
o piniling hindi makatanggap ng e-liham mula sa ibang tagagamit.',
'emailfrom'       => 'Mula',
'emailto'         => 'Kay',
'emailsubject'    => 'Paksa',
'emailmessage'    => 'Mensahe',
'emailsend'       => 'Ipadala',
'emailccme'       => 'Bigyan ako ng kopya ng e-liham.',
'emailccsubject'  => 'Kopya ng iyong mensahe sa $1: $2',
'emailsent'       => 'Naipadala e-liham',
'emailsenttext'   => 'Naipadala ang mensahe ng iyong e-liham.',
'emailuserfooter' => 'Ipinadala ang e-liham na ito ni $1 kay $2 sa pamamagitan ng "Magpadala ng e-liham" na punsyon sa {{SITENAME}}.',

# Watchlist
'watchlist'            => 'Bantayan ko',
'mywatchlist'          => 'Bantayan ko',
'watchlistfor'         => "(para sa '''$1''')",
'nowatchlist'          => 'Wala kang pahinang binabantayan.',
'watchlistanontext'    => 'Paki $1 upang makita o mabago ang mga aytem sa iyong binabantayan.',
'watchnologin'         => 'Di ka naka-lagda',
'watchnologintext'     => 'Dapat naka-<a href="/wiki/Special:Userlogin">log-in</a> ka
para mabago ang mga binabantayan mo.',
'addedwatch'           => 'Dinagdag na sa mga Babantayan',
'addedwatchtext'       => "Dinagdag na ang pahinang \"\$1\" sa iyong [[Special:Watchlist|Babantayan]]
Makikita doon ang lahat ng mga susunod na pagbabago sa pahinang ito pati na ang usapang pahina, at ang pahina ay makikitang sa '''malalaking titik''' ('''''bold''''') sa [[Special:Recentchanges|tala ng mga huling binago]] para madaling makita.

Kung ayaw mo nang bantayin ang pahinang ito, pindutin lamang ang \"huwag bantayan\" na nasa pagpipiliang nakaparisukat (''sidebar'').",
'removedwatch'         => 'Tinigil na ang pagbabantay',
'removedwatchtext'     => 'Hindi mo na binabantayan ang "$1".',
'watch'                => 'Bantayan',
'watchthispage'        => 'Bantayan itong pahina',
'unwatch'              => 'di-bantayan',
'unwatchthispage'      => 'Tigil Bantay',
'notanarticle'         => 'Hindi isang nilalamang pahina',
'notvisiblerev'        => 'Nabura na ang pagbabago',
'watchnochange'        => 'Wala sa binabantayan mo ang binago sa oras na nakikita.',
'wlheader-enotif'      => '* Maaari ang notipikasyon ng e-liham.',
'wlheader-showupdated' => "* Nasa '''matapang na teksto''' ang mga pahinang nabago simula nang huli mong pagdalaw dito",
'watchmethod-recent'   => 'tinitingnan ang mga huling binago para sa binabantayang mga pahina',
'watchmethod-list'     => 'tinitingnan ang mga binabantayang mga pahina para sa mga huling binago',
'iteminvalidname'      => "Problema sa aytem na '$1', hindi tamang pangalan...",
'wlshowlast'           => 'Ipakita ang huling $1 mga oras $2 mga araw $3',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Binabantayan...',
'unwatching' => 'Tinatanggal sa pagbantay...',

'enotif_mailer'                => 'Tagapagpadala ng Paalala sa {{SITENAME}}',
'enotif_reset'                 => 'Markahan lahat ng pahina bilang nadalaw na',
'enotif_newpagetext'           => "Ito'y bagong pahina.",
'enotif_impersonal_salutation' => 'Tagagamit ng {{SITENAME}}',
'changed'                      => 'binago',
'created'                      => 'Nalikha',
'enotif_subject'               => 'Ang pahina sa {{SITENAME}} na $PAGETITLE ay $CHANGEDORCREATED ni $PAGEEDITOR',
'enotif_lastvisited'           => 'Tingnan ang $1 para sa mga pagbabago simula noong huli mong pagdalaw.',
'enotif_lastdiff'              => 'Tingnan ang $1 para makita ang pagbabago.',
'enotif_anon_editor'           => 'hindi kilalang tagagamit $1',
'enotif_body'                  => 'Hi $WATCHINGUSERNAME,
	

Ang pahina ng {{SITENAME}} na $PAGETITLE ay $CHANGEDORCREATED noong $PAGEEDITDATE ni $PAGEEDITOR, tingnan $PAGETITLE_URL para sa kasalukuyang bersyon.

$NEWPAGE

Buod ng patnugot: $PAGESUMMARY $PAGEMINOREDIT

Makipag-ugnayan sa patnugot:
e-liham: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Wala nang iba pang paalala sa mga susunod na mga pagbabago maliban kung dadalawin ang pahina. Maaari mo ring palitan ang mga kagustuhan sa pagpapadala ng paalala sa iyong binabantayang pahina.

             Ang iyong kaibigang sistema ng paalala sa {{SITENAME}}

--
Para palitan ang mga kagustuhan sa mga binabantayan, dalawin
{{fullurl:{{ns:special}}:Watchlist/edit}}

Kumento at tulong:
{{fullurl:{{MediaWiki:helppage}}}}',

# Delete
'deletepage'             => 'Burahin ang pahina',
'confirm'                => 'Tiyakin',
'excontentauthor'        => "ang nilalaman ay: '$1' (at ang tanging nag-ambag ay si '[[Special:Contributions/$2|$2]]')",
'exbeforeblank'          => "nilalaman bago nablangko: '$1'",
'exblank'                => 'walang laman ang pahina',
'delete-confirm'         => 'Burahin "$1"',
'delete-legend'          => 'Burahin',
'historywarning'         => 'Babala: May kasaysayan ang pahinang buburahin mo:',
'confirmdeletetext'      => "Permanente mo nang buburahin ang pahina o larawan na ito pati ang kasaysayan nito sa talaan o ''database''. Tiyakin lamang na nais mong gawin ito, at naunawaan ang kahihinatnan nito, at gagawin ito alinsunod sa [[Wikipedia:Patakaran]].",
'actioncomplete'         => 'Tapos na ang ginagawa',
'deletedtext'            => 'Nabura na ang "$1". Tingnan ang $2 para sa tala ng mga bagong nabura.',
'deletedarticle'         => 'ibinura ang "[[$1]]"',
'suppressedarticle'      => 'kinalingat "[[$1]]"',
'dellogpage'             => 'Tala ng binura',
'deletionlog'            => 'Tala ng pagbubura',
'reverted'               => 'Binalik sa mas naunang pagbabago',
'deletecomment'          => 'Dahilan sa pagkabura:',
'deleteotherreason'      => 'Iba/karagdagang dahilan:',
'deletereasonotherlist'  => 'Ibang dahilan',
'delete-edit-reasonlist' => 'Baguhin ang dahilan ng pagbura',

# Rollback
'rollback'         => 'Ibalik sa dati ang mga binago',
'rollback_short'   => 'ibalik sa dati',
'rollbacklink'     => 'ibalik sa dati',
'rollbackfailed'   => 'Bigo sa pagbabalik sa dati',
'cantrollback'     => 'Hindi maibalik ang pagbabago; ang huling taga-ambag ang tanging manunulat ng pahinang ito.',
'alreadyrolled'    => 'Hindi maibalik ang huling binago ng [[$1]] ni [[User:$2|$2]] ([[User talk:$2|Usapan]]) dahil mayroon nang nagbabago o nagbabalik ng pahinang ito.

Ginawa ni [[User:$3|$3]] ([[User talk:$3|Usapan]]) ang huling pagbabago.',
'editcomment'      => 'Ang komento sa pagbabago ay: "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'       => 'Inalis ang edit ni $2, ibinalik sa huling bersyon ni $1', # Additionally available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success' => 'Ibinalik ang mga pagbabago sa $1; ibinalik sa huling bersyon ni $2.',
'sessionfailure'   => "Mukhang may suliranin sa paglagda ng iyong sesyon;
binalewala ang aksyon na ito bilang isang pag-iingat laban sa pag-hahaydyak ng sesyon.
Paki pindot ang \"''back''\" (balik) na buton at ikarga muli ang pahinang pinanggalingan mo, pagkatapos subukan muli.",

# Protect
'protectlogpage'              => 'Tala ng proteksyon',
'protectlogtext'              => 'Nasa ibaba ang isang tala ng mga kinandado at hindi kinandadong pahina. Tingnan ang [[Special:Protectedpages|tala ng mga nakaprotektang pahina]] para sa tala ng mga kasalukuyang gumaganang pahina na nakaprotekta.',
'protectedarticle'            => 'Nakaprotekta ang "[[$1]]"',
'modifiedarticleprotection'   => 'pinalitan ang antas ng protesyon para sa "[[$1]]"',
'unprotectedarticle'          => 'tinanggal sa pagkaprotekta ang "[[$1]]"',
'protect-title'               => 'Palitan ang antas ng proteksyon sa "$1"',
'prot_1movedto2'              => 'Ang [[$1]] ay inilipat sa [[$2]]',
'protect-legend'              => 'Ikumpirma ang proteksyon',
'protectcomment'              => 'Kumento:',
'protectexpiry'               => 'Nagtatapos:',
'protect_expiry_invalid'      => 'Inbalido ang oras ng pagtatapos.',
'protect_expiry_old'          => 'Nasa nakaraan ang oras ng pagtatapos.',
'protect-unchain'             => 'Ikandado ang mga permisong makapaglipat',
'protect-text'                => 'Maaari mong palitan ang antas ng proteksyon dito para sa pahinang <strong>$1</strong>.',
'protect-locked-blocked'      => 'Hindi mo maaaring palitan ang mga antas ng proteksyon habang nakaharang ito. Ito ang kasalukuyang mga tinakda para sa pahinang <strong>$1</strong>:',
'protect-locked-dblock'       => 'Hindi mabago ang mga antas ng proteksyon hinggil sa isang aktibong kandado ng talaang (database lock).
Ito ang kasalukuyang tinakda para sa pahinang <strong>$1</strong>:',
'protect-locked-access'       => 'Walang kang permiso na baguhin ang antas ng proteksyon ng pahina.
Ito ang mga kasalukuyang mga tinakda para sa pahinang <strong>$1</strong>:',
'protect-cascadeon'           => 'Nakaprotekta na ang pahinang ito dahil napasama ito sa sumusunod na {{PLURAL:$1|pahina|mga pahina}}, na nakabukas ang proteksyong nakaayos ng serye. Maaari mong palitan ang antas ng proteksyon ng pahinang ito, ngunit hindi maapektuhan ang pagkakayos ng serye ng proteksyon.',
'protect-default'             => '(tinakda)',
'protect-fallback'            => 'Nangangailangan ng permisong "$1"',
'protect-level-autoconfirmed' => "Harangin ang mga 'di-rehistradong manggagamit",
'protect-level-sysop'         => 'Mga tagapangasiwa lamang',
'protect-summary-cascade'     => 'kaskada',
'protect-expiring'            => 'magwawalang-bisa sa $1 (UTC)',
'protect-cascade'             => 'Ipagsanggalang ang mga pahinang kasama sa pahinang ito (kaskadang pagsanggalang)',
'protect-cantedit'            => 'Hindi mo mababago ang antas ng proteksyon ng pahinang ito, dahil wala kang pahintulot na baguhin ito.',
'protect-expiry-options'      => '1 oras:1 hour,1 araw:1 day,1 linggo:1 week,2 linggo:2 weeks,1 buwan:1 month,3 buwan:3 months,6 buwan:6 months,1 taon:1 year,walang hanggan:infinite', # display1:time1,display2:time2,...
'restriction-type'            => 'Pahintulot:',
'restriction-level'           => 'Antas ng kabawalan:',
'minimum-size'                => 'Pinakamaliit na sukat',
'maximum-size'                => 'Pinakamalaking sukat',
'pagesize'                    => '(mga byte)',

# Restrictions (nouns)
'restriction-edit'   => 'Pagpatnugot',
'restriction-move'   => 'Ilipat',
'restriction-create' => 'Likhain',
'restriction-upload' => 'Magkarga',

# Restriction levels
'restriction-level-sysop'         => 'buong nakasanggalang',
'restriction-level-autoconfirmed' => 'bahagyang nakasanggalang',
'restriction-level-all'           => 'anumang antas',

# Undelete
'undelete'                     => 'Tingnan ang mga binurang pahina',
'undeletepage'                 => 'Tingnan at ibalik ang mga naburang mga pahina',
'undeletepagetitle'            => "'''Binubuo ang sumusunod ng binurang pagbabago ng [[:$1|$1]]'''.",
'viewdeletedpage'              => 'Tingnan ang binurang mga pahina',
'undeleteextrahelp'            => "Upang ibalik ang buong pahina, iwanang walang laman ang mga kahon pang-tsek at
pindutin ang '''''Ibalik'''''. Upang magampanan ang isang pinipiling restorasyon, lagyan ng tsek ang mga kahon na tumutugma sa mga pagbabago na ibabalik, at pindutin ang  '''''Ibalik'''''. Mawawala ang kumento at ang mga tsek kapag pinundot ang '''''I-reset'''''.",
'undeleterevisions'            => 'Inarkibo ang $1 {{PLURAL:$1|pagbabago|mga pagbabago}}',
'undeletehistory'              => "Kung ibabalik mo ang isang pahina, maibabalik lahat ng pagbabago sa kasaysayan. Kung isang bagong pahina ang may katulad na pangalan simula na ito'y nabura, magpapakita ang binalik na pagbabago bago ang kasaysayan, at ang kasalukuyan na pagbabago ng buhay na pahina ay hindi awtomatikong mapapalitan. At saka ang mga restriksyon sa mga pagbabago ng talaksan ay mawawala kapag naibalik.",
'undeleterevdel'               => 'Hindi maisasagawa ang pagbura kung magreresulta ito ng pagiging bahagiang nabura ng taas ng pahina.
Sa ganitong mga kaso, kailangan mong alisin ang tsek o ipakita ang pinakabagong binurang mga pagbabago.
Hindi maibabalik ang mga pagbabago sa mga talaksan na wala kang permiso.',
'undeletehistorynoadmin'       => 'Nabura ang artikulong ito. Ipinapakita ang dahilan sa buod sa ibaba, kasama ang mga detalye ng mga tagagamit na binago ang pahinang ito bago nabura. Makikita lamang ng mga tagapangasiwa ang aktwal ng teksto ng mga naburang pagbabagong ito.',
'undeleterevision-missing'     => 'Inbalido o nawawalang pagbabago. Maaaring mayroon kang masamang ugnay (link), o ibinalik o tinanggal mula sa arkibo ang pagbabago.',
'undelete-nodiff'              => 'Walang mahanap na nakaraang pagbabago.',
'undeletebtn'                  => 'Ibalik',
'undeletelink'                 => 'ibalik',
'undeletereset'                => 'I-reset',
'undeletecomment'              => 'Kumento:',
'undeletedarticle'             => 'ibinalik "[[$1]]"',
'cannotundelete'               => 'Hindi tagumpay ang pagbabalik ng nabura; maaaring may naunang nabalik nito kaysa sa iyo.',
'undeletedpage'                => "<big>'''Naibalik ang $1'''</big>

Tingnan ang [[Special:Log/delete|tala ng pagbura]] para sa mga tala ng mga huling mga nabura at ibinalik.",
'undelete-header'              => 'Tingnan ang [[Special:Log/delete|tala ng pagbura]] para sa kamakailan lamang binurang mga pahina.',
'undelete-search-box'          => 'Maghanap ng binurang mga pahina',
'undelete-search-prefix'       => 'Ipakita ang mga pahinang nagsisimula sa:',
'undelete-search-submit'       => 'Maghanap',
'undelete-no-results'          => 'Walang mahanap na kaparis na mga pahina sa arkibo ng mga nabura.',
'undelete-filename-mismatch'   => 'Hindi matanggal sa pagkabura ang pagbabago ng talaksan kasama ang oras ng pagbabago na $1: hindi magkaparis ang pangalan ng talaksan',
'undelete-bad-store-key'       => 'Hindi mabura ang isang pagbabago sa talaksan kasama ang oras ng pagbabago na $1: nawawala ang talaksan bago ang pagbura.',
'undelete-cleanup-error'       => 'May mali sa pagbura ng hindi ginagamit na arkibong talaksang "$1".',
'undelete-missing-filearchive' => 'Hindi maibalik ang arkibong talaksan na may ID na $1 dahil wala sa talaan (database). Maaaring nabura na ito.',
'undelete-error-short'         => 'Kamalian sa pagbaligtad ng pagbura ng talaksan: $1',
'undelete-error-long'          => 'Nagkaroon ng mga kamalian habang binabaligtad ang pagbura ng talaksan:

$1',

# Namespace form on various pages
'namespace'      => 'Espasyo ng pangalan:',
'invert'         => 'Baligtarin and pinili',
'blanknamespace' => '(Pangunahin)',

# Contributions
'contributions'       => 'Mga ambag ng manggagamit',
'contributions-title' => 'Mga ambag ng tagagamit na si $1',
'mycontris'           => 'Aking mga ginawa',
'contribsub2'         => 'Para kay $1 ($2)',
'nocontribs'          => 'Walang pagbabagong nakita sa binigay na kondisyon.',
'uctop'               => ' (itaas)',
'month'               => 'Mula sa buwan (at nauna):',
'year'                => 'Mula sa taon (at nauna):',

'sp-contributions-newbies'     => 'Ipakita ang mga ambag ng mga bagong kuwenta lamang',
'sp-contributions-newbies-sub' => 'Para sa mga bagong kuwenta',
'sp-contributions-blocklog'    => 'Tala ng paglipat',
'sp-contributions-search'      => 'Maghanap ng ambag',
'sp-contributions-username'    => 'IP Address o bansag:',
'sp-contributions-submit'      => 'Hanapin',

# What links here
'whatlinkshere'            => 'Mga nakaturo dito',
'whatlinkshere-title'      => 'Mga pahinang kumakawing sa $1',
'whatlinkshere-page'       => 'Pahina:',
'linkshere'                => "Nakaturo ang mga sumusunod na mga pahina sa '''[[:$1]]''':",
'nolinkshere'              => "Walang pahina na tumuturo sa '''[[:$1]]'''.",
'nolinkshere-ns'           => "Walang pahinang tumuturo sa '''[[:$1]]''' sa napiling pangalang espasyo.",
'isredirect'               => 'pahinang karga (redirect page)',
'istemplate'               => 'pagsasali',
'isimage'                  => 'ugnay ng larawan',
'whatlinkshere-prev'       => '{{PLURAL:$1|nakaraan|nakaraan na $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|susunod|susunod na $1}}',
'whatlinkshere-links'      => '← mga ugnay',
'whatlinkshere-hideredirs' => '$1 pagkarga',
'whatlinkshere-hidetrans'  => '$1 proseso ng pagkuha ng larawan',
'whatlinkshere-hidelinks'  => '$1 ugnay',
'whatlinkshere-hideimages' => '$1 ugnay ng larawan',
'whatlinkshere-filters'    => 'Mga pansala',

# Block/unblock
'blockip'                         => 'Harangin ang manggagamit',
'blockip-legend'                  => 'Iharang ang tagagamit',
'blockiptext'                     => 'Gamitin ang mga lahok sa ibaba upang maharang ang akses sa pagsulat
mula sa isang espesipikong IP address o bansag.
Gawin lamang ito para maiwasan ang bandalismo, at 
napapaloob sa [[{{MediaWiki:policy-url}}|patakaran]].
Punan ang espesipikong dahilan sa ibaba (halimbawa, magbanggit ng partikular
na mga pahina na nagkaroon ng bandalismo).',
'ipaddress'                       => 'Direksyong IP:',
'ipadressorusername'              => 'Direksyong IP o bansag:',
'ipbexpiry'                       => 'Pagkawalang-bisa:',
'ipbreason'                       => 'Dahilan:',
'ipbreasonotherlist'              => 'Ibang dahilan',
'ipbreason-dropdown'              => '*Mga karaniwang dahilan sa paghaharang
** Pagpasok ng hindi totoong impormasyon
** Pag-alis ng nilalaman mula sa mga pahina
** Walang-itinatanging paglalagay ng mga kawing panlabas
** Pagpasok ng impormasyong walang kabuluhan/satsat sa mga pahina
** Ugaling nananakot/pagligalig
** Pagmamalabis ng maramihang kuwenta
** Hindi kanais-nais na bansag',
'ipbanononly'                     => "Harangin ang mga 'di-kilalang manggagamit lamang",
'ipbcreateaccount'                => 'Hadlangan ang paglikha ng kuwenta',
'ipbemailban'                     => 'Hadlangan ang manggagamit sa pagpapadala ng e-liham',
'ipbenableautoblock'              => 'Automatikong harangin and huling direksyong IP na ginamit ng manggagamit na ito, at anumang sumusunod pang mga IP na masusubukan nilang bago mula roon',
'ipbsubmit'                       => 'Harangin itong manggagamit',
'ipbother'                        => 'Ibang oras:',
'ipboptions'                      => '2 oras:2 hours,1 araw:1 day,3 araw:3 days,1 linggo:1 week,2 linggo:2 weeks,1 buwan:1 month,3 buwan:3 months,6 buwan:6 months,1 taon:1 year,walang hanggan:infinite', # display1:time1,display2:time2,...
'ipbotheroption'                  => 'iba',
'ipbotherreason'                  => 'Iba/karagdagang dahilan:',
'ipbhidename'                     => 'Itago ang bansag/IP mula sa tala ng hinarang, aktibong tala ng harang at tala ng tagagamit',
'ipbwatchuser'                    => 'Bantayan ang pahinang tagagamit at usapan ng tagagamit na ito',
'badipaddress'                    => 'Hindi tamang na IP address',
'blockipsuccesssub'               => 'Matagumpay ang pagharang',
'blockipsuccesstext'              => 'Naharang na si "$1"
<br />Tingnan ang [[Special:Ipblocklist|talaan ng mga hinarang na IP]] upang makita ang paghaharang.',
'ipb-edit-dropdown'               => 'Baguhin ang mga dahilan sa pagharang',
'ipb-unblock-addr'                => 'Tanggalin ang pagkaharang ng $1',
'ipb-unblock'                     => 'Tanggalin ang pagkaharang ng isang bansag o IP address',
'ipb-blocklist-addr'              => 'Tingnan ang mga harang para sa $1',
'ipb-blocklist'                   => 'Tingnan ang mga harang',
'ipb-blocklist-contribs'          => 'Mga ambag ni $1',
'unblockip'                       => 'Tanggalin ang harang ng tagagamit',
'unblockiptext'                   => 'Gamitin ang pormularyo sa ibaba upang ibalik ang akses ng pagsulat sa isang dating nakaharang na IP address o bansag.',
'ipusubmit'                       => 'Tanggalin ang pagkaharang ng adres na ito',
'unblocked'                       => 'Natanggal sa pagkaharang ang tagagamit na [[User:$1|$1]]',
'unblocked-id'                    => 'Natanggal ang harang na $1',
'ipblocklist'                     => 'Tala ng mga hinarang na mga IP address at bansag',
'ipblocklist-legend'              => 'Hanapin ang isang hinarang na tagagamit',
'ipblocklist-username'            => 'Bansag o IP address:',
'ipblocklist-submit'              => 'Hanapin',
'blocklistline'                   => '$1, $2 hinarang si $3 (magtatapos sa $4)',
'infiniteblock'                   => 'walang katapusan',
'expiringblock'                   => 'Magtatapos sa $1',
'anononlyblock'                   => 'di kilala lamang',
'noautoblockblock'                => 'hindi gumagana ang awtomatikong pagharang',
'createaccountblock'              => 'Hinarang ang paglikha ng akawnt',
'emailblock'                      => 'Hinarang e-liham',
'ipblocklist-empty'               => 'Walang laman ang tala ng harang.',
'ipblocklist-no-results'          => 'Nakaharang ang hiniling na IP address o bansag.',
'blocklink'                       => 'harang',
'unblocklink'                     => 'tanggalin ang harang',
'contribslink'                    => 'ambag',
'autoblocker'                     => 'Awtomatikong naharang dahil pareho kayo ng IP address ni "$1". Dahilan "$2".',
'blocklogpage'                    => 'Tala ng pagharang',
'blocklogtext'                    => 'Tala ito ng paghaharang at pagwawalambisa ng harang. Wala rito ang mga awtomatikong hinarang na mga IP. Nakatala sa [[Special:Ipblocklist|talaan ng mga naharang na IP]] ang mga mabisa pang paghaharang.',
'unblocklogentry'                 => 'tanggalin ang harang ng $1',
'block-log-flags-anononly'        => 'mga di-kilalang tagagamit lamang',
'block-log-flags-nocreate'        => 'Nakapatay ang paglikha ng akawnt',
'block-log-flags-noautoblock'     => 'Nakapatay ang awtomatikong pagharang',
'block-log-flags-noemail'         => 'Nakapatay ang e-liham',
'block-log-flags-angry-autoblock' => 'gumagana ang pinagbuting awtomatikong pagharang',
'range_block_disabled'            => 'Naksara ang kakayahan ng tagapangasiwa ng lumikha ng harang sa isang hanay.',
'ipb_expiry_invalid'              => 'Hindi tama ang oras ng pagtatapos.',
'ipb_expiry_temp'                 => 'Kailangang palagian ang mga nakatagong harang ng bansag.',
'ipb_already_blocked'             => 'Nakaharang na ang "$1"',
'ipb_cant_unblock'                => 'May mali: Hindi mahanap ang ID ng harang na $1. Maaaring natanggal na ito sa pagkaharang.',
'ipb_blocked_as_range'            => 'Mali: Hindi diretsong nakaharang ang IP na $1 at hindi maaaring tanggalin sa pagkakaharang. Bagaman, bahagi ito sa sakop na $2, na maaaring tanggalin sa pagkaharang.',
'ip_range_invalid'                => 'Hindi tamang sakop ng IP.',
'blockme'                         => 'Harangin ako',
'proxyblocker'                    => 'Pangharang ng proxy',
'proxyblocker-disabled'           => 'Nakapatay ang pagharang sa proxy.',
'proxyblockreason'                => 'Hinarang ang IP address mo dahil bukas na proxy ito. Makipag-ugnayan sa iyong tagabigay ng serbisyong Internet o suportang teknikal at ipaalam sa kanila itong seryesong suliranin sa seguridad.',
'proxyblocksuccess'               => 'Tapos na.',
'sorbsreason'                     => 'Nakalista ang IP address mo bilang isang bukas na proxy sa DNSBL na ginagamit ng sayt na ito.',
'sorbs_create_account_reason'     => 'Nakalista ang IP address mo bilang isang bukas na proxy sa DNSBL na ginagamit ng sayt na ito. Hindi ka makakalikha ng akawnt',

# Developer tools
'lockdb'              => 'Kandaduhan ang kalipunan ng datos',
'unlockdb'            => 'Buksan ang kalipunan ng datos',
'lockdbtext'          => 'Ang pagkandado ng talaan (database) ay masususpinde ang kakayahang ng lahat ng tagagamit na baguhin ang mga pahina, palitan ang kanilang mga kagustuhan, baguhin ang kanilang mga babantayan, at ibang mga bagay na nangangailangan ng pagbabago sa talaan.  Paki kumpirma kung ito talaga ang nais mong gawin, at tatanggalin mo ito sa pagkakandado pagkatapos ng pagpapanatili.',
'unlockdbtext'        => 'Sa pagtanggal ng pagkakandado ng talaan (database), maibabalik ang abilidad ng lahat ng mga tagagamit na baguhin ang mga pahina, baguhin ang kanilang kagustuhan, baguhin ang kanilang binabantayan, at ibang mga bagay na nangangailangan ng pagbabago sa talaan. Paki tiyak kung ito ang nais mo talagang gawin.',
'lockconfirm'         => 'Oo, nais ko talagang ikandado ang talaan.',
'unlockconfirm'       => 'Oo, nais ko talagang buksan ang talaan (database).',
'lockbtn'             => 'Ikandado ang talaan (database)',
'unlockbtn'           => 'Buksan ang talaan (database)',
'locknoconfirm'       => 'Hindi mo nilagyan ng tsek ang kahon ng kumpirmasyon.',
'lockdbsuccesssub'    => 'Tagumpay ang pagkandado sa talaan',
'unlockdbsuccesssub'  => 'Tinanggal ang kandado ng talaan (database)',
'lockdbsuccesstext'   => 'Nakakandado ang talaan (database).
<br />Tandaan na [[Special:Unlockdb|tanggaling ang pagkakandado]] pagkatapos ng pagpapanatili nito.',
'unlockdbsuccesstext' => 'Nabuksan ang talaan (database).',
'lockfilenotwritable' => 'Hindi maaaring magsulat sa kandadong talaksan ng talaan (database lock file). Para ikandado o buksan ang talaan, kailangang itong may kakayahang magsulat sa web server.',
'databasenotlocked'   => 'Nakakandado ang talaan (database).',

# Move page
'move-page'               => 'Ilipat $1',
'move-page-legend'        => 'Maglipat ng pahina',
'movepagetalktext'        => "Awtomatikong maililipat din ang kakabit nitong pahina ng usapan '''maliban kung:'''
*Mayroon nang isang may laman na pahinang usapan sa ilalim ng bagong pangalan, o
*Hindi mo nilagyan ng tsek ang kahon sa ibaba.

Sa mga kasong ito, kailangan mong ilipat o ipagsama ang mga pahina sa manwal na paraan kung nanaiisin mo.",
'movearticle'             => 'Ilipat ang pahina:',
'movenologin'             => 'Hindi nakalagda',
'movenologintext'         => 'Kailangang ikaw ay isang naka-rehistrong manggagamit at ay [[Special:UserLogin|nakalagda]] upang makapaglipat ng pahina.',
'movenotallowed'          => 'Wala kang permisong maglipat ng pahina.',
'newtitle'                => 'Sa bagong pamagat:',
'move-watch'              => 'Bantayan itong pahina',
'movepagebtn'             => 'Ilipat ang pahina',
'pagemovedsub'            => 'Matagumpay ang paglipat',
'movepage-moved'          => '<big>\'\'\'Inilipat ang "$1" sa "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'May umiiral nang pahinang may ganitong pangalan, o ang
pangalang pinili mo ay hindi mabisa.
Pumili muli ng ibang pangalan.',
'cantmove-titleprotected' => 'Hindi mo malilipatan ang isang pahina sa lokasyong ito, dahil nakasanggalang sa paglikha ang baong pamagat',
'talkexists'              => "'''Tagumpay na nailipat ang pahina mismo, ngunit hindi mailipat ang pahina ng usapan dahil mayroon ng ganito sa bagong pamagat. Ipagsama ito sa manwal na paraan.'''",
'movedto'                 => 'inilipat sa',
'movetalk'                => 'Ilipat ang kaugnay na pahinang usapan',
'move-subpages'           => 'Ilipat lahat ng mga sub-pahina, kung mayroon',
'move-talk-subpages'      => 'Ilipat lahat ng sub-pahina ng pahina ng usapan, kung mayroon',
'movepage-page-exists'    => 'Mayroon na ang pahinang $1 at hindi na ito awtomatikong mapapatungan.',
'movepage-page-moved'     => 'Nailipat na ang pahinang $1 sa $2.',
'movepage-page-unmoved'   => 'Hindi na mailipat ang pahinang $1 sa $2.',
'movepage-max-pages'      => 'Ang pinakamataas na $1 {{PLURAL:$1|pahina|mga pahina}} ay nailipat at wala nang maililipat ng awtomatiko.',
'1movedto2'               => 'Ang [[$1]] ay inilipat sa [[$2]]',
'1movedto2_redir'         => 'Ang [[$1]] ay inilipat sa [[$2]] sa ibabaw ng pangkarga',
'movelogpage'             => 'Tala ng paglipat',
'movelogpagetext'         => 'Sumusunod ang mga tala ng mga pahinang nailipat.',
'movereason'              => 'Dahilan:',
'revertmove'              => 'ibalik',
'delete_and_move'         => 'Burahin at ilipat',
'delete_and_move_text'    => '==Kinakailangan ang pagbura==

Mayroon na ang pupuntahang artikulo na "[[$1]]". Nais mo bang burahin ito para magbigay daan para sa paglipat?',
'delete_and_move_confirm' => 'Oo, burahin ang pahina',
'delete_and_move_reason'  => 'Binura upang makalipat',
'selfmove'                => 'Magkatulad ang pinagmulan at pupuntahan ng mga titulo; hindi mailipat ang isang pahina sa kanyang sarili.',
'imagenocrossnamespace'   => 'Hindi mailipat ang talaksan sa hindi pang-talaksan na pangalang espasyo',
'imagetypemismatch'       => 'Hindi tumutugma ang ekstensyon ng talaksan sa uri nito',
'imageinvalidfilename'    => 'Mali ang patutunguhang pangalan ng talaksan.',
'fix-double-redirects'    => 'Baguhin ang kahit anumang karga na nakaturo sa orihinal na pamagat',

# Export
'export'            => 'Magluwas ng pahina',
'exporttext'        => 'Maaari mong ilabas ang isang teksto at baguhin ang kasaysayan ng isang partikular na pahina o kumpol na mga pahina na nakalagay sa XML.  Maaari itong iangkat sa ibang wiki gamit ang MediaWiki sa pamamagitan ng [[Special:Import|pahinang angkat]].

Para ilabas ang mga pahina, ipasok ang mga pamagat sa tekstong kahon sa ibaba, isang pamagat bawat guhit, at piliin kung gusto mo rin ang kasalukuyang bersyon o mga lumang bersyon, kasama ang mga pahina ng kasaysayan, o iyon lamang kasalukuyang bersyon kasama ang mga kaalaman tungkol sa huling binago.

Sa huling kaso, maaari mong gumamit ng ungay, hal. [[{{ns:Special}}:Export/{{MediaWiki:mainpage}}]] para sa pahinang "[[{{MediaWiki:mainpage}}]]".',
'exportcuronly'     => 'Isama lamang ang kasalukuyang rebisyon, hindi ang buong kasaysayan',
'exportnohistory'   => "----
'''Tandaan:''' Nakapatay ang paglalabas ng buong kasaysayan ng pahina ng mga pahina sa pamamagitan ng ''form'' na ito dahil maaaring bumagal ang sayt.",
'export-submit'     => 'Magluwas',
'export-addcattext' => 'Magdagdag ng mga pahina mula sa kategorya:',
'export-addcat'     => 'Magdagdag',
'export-download'   => 'Itala bilang talaksan',
'export-templates'  => 'Kabilang ang mga suleras',

# Namespace 8 related
'allmessages'               => 'Mga mensaheng pansistema',
'allmessagesname'           => 'Pangalan',
'allmessagesdefault'        => 'Tinakdang teksto',
'allmessagescurrent'        => 'Kasalukuyang teksto',
'allmessagestext'           => 'Isa itong talaan ng mga mensahe ng sistema na makukuha mula sa espasyo ng pangalang MediaWiki.
Pakidalaw ang [http://www.mediawiki.org/wiki/Localisation Lokalisasyong MediaWiki] at [http://translatewiki.net Betawiki] kung ibig mong magambag sa heneriko o pangkalahatang lokalisasyon ng MediaWiki.',
'allmessagesnotsupportedDB' => "Hindi magagamit ang '''{{ns:special}}:AllMessages''' dahil hindi gumagana ang '''\$wgUseDatabaseMessages'''.",
'allmessagesfilter'         => 'Pansala ng pangalan ng mensahe:',
'allmessagesmodified'       => 'Ipakita lamang ang mga binago',

# Thumbnails
'thumbnail-more'           => 'Palakihin',
'filemissing'              => 'Nawawala ang talaksan',
'thumbnail_error'          => "May kamalian sa paglikha ng kagyat (''thumbnail''): $1",
'djvu_page_error'          => 'Wala sa nasasakupan ang pahinang DjVu',
'djvu_no_xml'              => 'Hindi makuha ang XML para sa talaksang DjVu',
'thumbnail_invalid_params' => "Hindi tanggap ang mga parametro para sa kagyat (''thumbnail'')",
'thumbnail_dest_directory' => 'Hindi malikha ang papuntahang direktoryo',

# Special:Import
'import'                     => 'Mag-angkat ng pahina',
'importinterwiki'            => 'Angkat na transwiki',
'import-interwiki-text'      => 'Pumili ng isang wiki at pamagat ng pahina na iaangkat.
Mapapanatili ang mga petsa ng pagbabago at mga pangalan ng patnugot.
Naitatala sa [[Special:Log/import|tala ng inangkat]] ang lahat ng mga transwiking aksyon para sa pag-angkat.',
'import-interwiki-history'   => 'Kopyahin ang lahat ng mga bersyon ng kasaysayan para sa pahinang ito',
'import-interwiki-submit'    => 'Mag-angkat',
'import-interwiki-namespace' => 'Ilipat ang mga pahina sa pangalang espasyo (namespace):',
'import-comment'             => 'Komento:',
'importtext'                 => 'Paki labas ang talaksan mula sa pinagmulang wiki na gamit ang utilidad na Special:Export, itala ito sa iyong disk at ikarga dito.',
'importstart'                => 'Inaangkat ang mga pahina...',
'import-revision-count'      => '$1 {{PLURAL:$1|pagbabago|mga pagbabago}}',
'importnopages'              => 'Walang mga pahinang maangkat.',
'importfailed'               => 'Bigo ang pag-angkat: $1',
'importunknownsource'        => 'Hindi alam na pinagmulang uri ng angkat',
'importcantopen'             => 'Hindi mabuksan ang talaksan ng angkat',
'importbadinterwiki'         => 'Masamang ugnay na interwiki',
'importnotext'               => 'Walang laman o teksto',
'importsuccess'              => 'Tapos na ang pag-angkat!',
'importhistoryconflict'      => 'Mayroong sumasalungat sa pagbabago ng kasaysayan (maaaring naiangkat na ito dati)',
'importnosources'            => 'Walang binigay na kahulugan para sa mapagkukunang angkat na transwiki at nakapatay ang diretsong pagkakarga ng kasaysayan.',
'importnofile'               => 'Walang nakargang talaksan ng angkat.',
'importuploaderrorsize'      => 'Bigo ang pagkarga ng inangkat na talaksan.  Mas malaki ang talaksan kaysa pinapahintulot na laki.',
'importuploaderrorpartial'   => 'Bigo ang pagkarga ng inangkat na talaksan.  Bahagi lamang ang nakargang talaksan.',
'importuploaderrortemp'      => 'Bigo ang pagkarga ng inangkat na talaksan.  Nawawala ang pasamantalang polder.',
'import-parse-failure'       => 'Bigo ang pagsuri sa inangkat na XML',
'import-noarticle'           => 'Walang pahinang maangkat!',
'import-nonewrevisions'      => 'Naangkat na ang lahat ng pagbabago.',
'xml-error-string'           => '$1 sa linya $2, hanay $3 (byte $4): $5',
'import-upload'              => 'Magkarga ng datos na XML',

# Import log
'importlogpage'                    => 'Tala ng inangkat',
'importlogpagetext'                => 'Mga administratibong angkat ng pahina kasama ang kasaysayan ng pagbabago mula sa ibang mga wiki.',
'import-logentry-upload'           => 'inangkat ang [[$1]] sa pamamagitan ng pagkarga ng talaksan (file upload)',
'import-logentry-interwiki'        => 'Na-transwiki $1',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Aking pahina ng manggagamit',
'tooltip-pt-anonuserpage'         => 'Ang pahina ng tagagamit para sa IP na iyong binabago bilang',
'tooltip-pt-mytalk'               => 'Aking pahinang usapan',
'tooltip-pt-anontalk'             => 'Usapang tungkol sa mga pagbabagong ginawa sa ip address na ito',
'tooltip-pt-preferences'          => 'Aking mga kagustuhan',
'tooltip-pt-watchlist'            => 'Ang talaan ng mga pagbabago sa mga pahinang binabantayan mo',
'tooltip-pt-mycontris'            => 'Tala ng aking mga ambag',
'tooltip-pt-login'                => 'Hinihimok kang lumagda, bagaman hindi ito kinakailangan.',
'tooltip-pt-anonlogin'            => 'Hinihimok kang lumagda, bagaman hindi ito kinakailangan.',
'tooltip-pt-logout'               => 'Umalis sa pagkalagda',
'tooltip-ca-talk'                 => 'Usapan tungkol sa nilalaman ng pahinang ito',
'tooltip-ca-edit'                 => 'Maaaring baguhin ang pahinang ito. Paki gamit ang buton ng paunang tingin bago itala.',
'tooltip-ca-addsection'           => 'Magdagdag ng kumento sa usapang ito.',
'tooltip-ca-viewsource'           => 'Nakaprotekta ang pahinang ito. Makikita mo lamang ang pinagmulan (source) nito.',
'tooltip-ca-history'              => 'Nakaraang bersyon ng pahinang ito.',
'tooltip-ca-protect'              => 'Iprotekta ang pahinang ito',
'tooltip-ca-delete'               => 'Burahin ang pahinang ito',
'tooltip-ca-undelete'             => 'Ibalik ang mga pagbabagong ginawa sa pahinang ito bago ito binura',
'tooltip-ca-move'                 => 'Ilipat ang pahinang ito',
'tooltip-ca-watch'                => 'Iragdag ang pahinang ito sa iyong babantayan',
'tooltip-ca-unwatch'              => 'Alisin ang pahinang ito sa iyong babantayan',
'tooltip-search'                  => 'Maghanap sa {{SITENAME}}',
'tooltip-search-go'               => 'Puntahan ang isang pahina na may ganitong tumpak na pangalan',
'tooltip-search-fulltext'         => 'Hanapin ang mga pahina para sa tekstong ito',
'tooltip-p-logo'                  => 'Unang Pahina',
'tooltip-n-mainpage'              => 'Dalawin ang Unang Pahina',
'tooltip-n-portal'                => 'Hinggil sa proyekto, ano ang magagawa mo, saan matatagpuan ang mga bagay-bagay',
'tooltip-n-currentevents'         => 'Maghanap ng sanligang impormasyon hinggil sa mga kasalukuyang kaganapan',
'tooltip-n-recentchanges'         => 'Ang tala ng mga kamakailang pagbabago sa loob ng wiki.',
'tooltip-n-randompage'            => 'Magkarga ng anumang pahina',
'tooltip-n-help'                  => 'Pook kung saan ito matutuklasan.',
'tooltip-t-whatlinkshere'         => 'Tala ng lahat ng pahina ng mga wiking nakakawing dito',
'tooltip-t-recentchangeslinked'   => 'Kamakailang mga pagbabago na nakakawing mula sa pahinang ito',
'tooltip-feed-rss'                => 'Subo/Kargang RSS para sa pahinang ito',
'tooltip-feed-atom'               => 'Subo/kargang Atom para sa pahinang ito',
'tooltip-t-contributions'         => 'Tunghayan ang tala ng mga ambag ng tagagamit na ito',
'tooltip-t-emailuser'             => 'Magpadala ng isang e-liham sa tagagamit na ito',
'tooltip-t-upload'                => 'Magkarga ng mga talaksan',
'tooltip-t-specialpages'          => 'Tala ng lahat ng mga natatanging pahina',
'tooltip-t-print'                 => 'Nalilimbag na bersyon ng pahinang ito',
'tooltip-t-permalink'             => 'Permanenteng kawing sa bersyong ito ng pahina',
'tooltip-ca-nstab-main'           => 'Tingnan ang pahina ng nilalaman',
'tooltip-ca-nstab-user'           => 'Tingnan ang pahina ng tagagamit',
'tooltip-ca-nstab-media'          => 'Tingnan ang pahina ng midya',
'tooltip-ca-nstab-special'        => 'Isa itong natatanging pahina, hindi mo mababago ang mismong pahina',
'tooltip-ca-nstab-project'        => 'Tingnan ang pahina ng proyekto',
'tooltip-ca-nstab-image'          => 'Tingnan ang pahina ng talaksan',
'tooltip-ca-nstab-mediawiki'      => 'Tingnan ang mensahe ng sistema',
'tooltip-ca-nstab-template'       => 'Tingnan ang suleras',
'tooltip-ca-nstab-help'           => 'Tingnan ang pahina ng tulong',
'tooltip-ca-nstab-category'       => 'Tingnan ang pahina ng kaurian/kategorya',
'tooltip-minoredit'               => 'Tandaan ito bilang isang maliit na pagbabago',
'tooltip-save'                    => 'Sagipin ang iyong mga pagbabago',
'tooltip-preview'                 => 'Paunang-tingnan ang mga pagbabago mo, pakigamit muna ito bago sagipin o magtala!',
'tooltip-diff'                    => 'Ipakita ang mga pagbabagong ginawa mo sa teksto.',
'tooltip-compareselectedversions' => 'Tingnan ang pagkakaiba sa pagitan ng dalawang napiling bersyon ng pahinang ito.',
'tooltip-watch'                   => 'Idagdag ang pahinang ito sa iyong tala ng mga binabantayan',
'tooltip-recreate'                => 'Muling likhain ang pahina kahit na nabura na ito',
'tooltip-upload'                  => 'Simulan ang pagkarga',
'tooltip-rollback'                => 'Ibinabalik ng "Pagulungin pabalik sa dati" ang (mga) pagbabago sa pahinang ito patungo sa huling bersyon ng huling tagapagambag sa pamamagitan ng isang pindot lamang.',
'tooltip-undo'                    => 'Ibinabalit ng "Ibalik" ang pagbabagong ito at binubuksan ang pahinang gawaan ng pagbabago sa anyong paunang-tingin muna.  Nagpapahintulot na makapagdagdag ng dahilan sa buod.',

# Stylesheets
'common.css'      => '/* Ang inilagay na CSS dito ay gagamitin para sa lahat ng mga pabalat */',
'standard.css'    => '/* Ang inilagay na CSS dito ay makakaapekto sa mga tagagamit ng Karaniwang pabalat */',
'nostalgia.css'   => '/* Ang CSS na inilagay dito ay makakaapekto sa mga tagagamit ng pabalat na Nostalgia */',
'cologneblue.css' => "/* Ang CSS na inilagay dito ay makakaapekto sa mga tagagamit ng pabalat na Bugkaw na Kolon (''Cologne Blue'') */",
'monobook.css'    => '/* Ang CSS na inilagay dito ay makakaapekto sa mga tagagamit ng pabalat na Monobook */',
'myskin.css'      => "/* Ang CSS na inilagay dito ay makakaapekto sa lahat ng mga tagagamit ng pabalat na Balatko (''Myskin'') */",
'chick.css'       => "/* Ang CSS na inilagay dito ay makakaapekto sa mga tagagamit ng pabalat na ''Chick'' */",
'simple.css'      => "/* Ang CSS na iniligay dito ay makakaapekto sa mga tagagamit ng Payak (''Simple'') na pabalat */",
'modern.css'      => "/* Ang CSS na iniligay dito ay makakaapekto sa tagagamit ng Makabagong (''Modern'') pabalat */",
'print.css'       => '/* Ang CSS na inilagay dito ay makakaapekto sa kalalabasan o resulta ng paglilimbag */',
'handheld.css'    => "/* Ang CSS na inilagay dito ay makakaapekto sa mga aparatong nahahawakan (''handheld device'') batay sa itinakdang pabalat sa ''\$wgHandheldStyle'' */",

# Scripts
'common.js'      => '/* Anumang JavaScript dito ay ikakarga para sa lahat ng mga tagagamit ng bawat pahinang ikinarga. */',
'standard.js'    => '/* Anumang JavaScript dito ay ikakarga para lahat ng mga tagagamit na gumagamit ng Karaniwang pabalat */',
'nostalgia.js'   => '/* Anumang JavaScript dito ay ikakarga para lahat ng mga tagagamit na gumagamit ng pabalat na Nostalgia */',
'cologneblue.js' => '/* Anumang JavaScript dito ay ikakarga para sa tagagamit ng pabalat na Bughaw na Kolon */',
'monobook.js'    => '/* Anumang JavaScript dito ay ikakarga para sa mga tagagamit na gumagamit ng pabalat na MonoBook */',
'myskin.js'      => '/* Anumang JavaScript dito ay ikakarga para sa tagagamit na gumagamit ng pabalat na Balatko */',
'chick.js'       => "/* Anumang JavaScript dito ay ikakarga para sa mga tagagamit na gumagamit ng pabalat na ''Chick'' */",
'simple.js'      => '/* Anumang JavaScript dito ay ikakarga para sa tagagamit na gumagamit ng Payak na pabalat */',
'modern.js'      => '/* Anumang JavaScript dito ay ikakarga para sa mga tagagamit na gumagamit ng Makabagong pabalat */',

# Metadata
'nodublincore'      => 'Hindi pinagana ang metadatang Dublin Core RDF para sa serbidor na ito.',
'nocreativecommons' => 'Hindi pinagana ang metadatang Creative Commons RDF para sa serbidor na ito.',
'notacceptable'     => 'Hindi makapagbigay ng dato ang serbidor ng wiki sa anyong mababasa ng iyong kliyente.',

# Attribution
'anonymous'        => 'Hindi kilalang {{PLURAL:$1|tagagamit|mga tagagamit}} ng {{SITENAME}}',
'siteuser'         => 'Tagagamit $1 ng {{SITENAME}}',
'lastmodifiedatby' => 'Huling binago ang pahinang ito noong $2, $1 ni $3.', # $1 date, $2 time, $3 user
'othercontribs'    => 'Batay sa gawa ni/nina $1.',
'others'           => 'iba pa',
'siteusers'        => '{{PLURAL:$2|tagagamit|mga tagagamit}} $1 ng {{SITENAME}}',
'creditspage'      => 'Pahina ng pagkilala sa gumawa (mga kredito)',
'nocredits'        => 'Walang mga kredito/pagkilala sa gumawa na makuha para sa pahinang ito.',

# Spam protection
'spamprotectiontitle' => "Pansala na pananggalang laban sa ''Spam''",
'spamprotectiontext'  => "Ang pahinang ibig mong sagipin ay naharang ng pansala ng ''spam''.
Maaaring dahil ito sa isang kawing sa isang nakatalang hinarang dahil di-kinaisnais na panlabas na sityo/sayt.",
'spamprotectionmatch' => "Ang sumusunod na teksto ang bumuhay sa aming panala ng ''spam'': $1",
'spambot_username'    => "Paglilinis ng ''spam'' ng MediaWiki",
'spam_reverting'      => "Ibinabalik sa huling bersyon na 'di-naglalaman ng mga kawing sa $1",
'spam_blanking'       => 'Lahat ng mga pagbabago ay naglalaman ng mga kawing sa $1, pagpapatlang',

# Info page
'infosubtitle'   => 'Kabatiran para sa pahina',
'numedits'       => 'Bilang ng mga pagbabago (pahina): $1',
'numtalkedits'   => 'Bilang ng mga pagbabago (pahinang usapan): $1',
'numwatchers'    => 'Bilang ng mga tagatingin: $1',
'numauthors'     => 'Bilang ng mga bukdo-tanging mga may-akda (pahina): $1',
'numtalkauthors' => 'Bilang ng bukod-tanging mga may-akda (pahinang usapan): $1',

# Math options
'mw_math_png'    => 'Palaging ilarawan sa anyong PNG',
'mw_math_simple' => 'HTML kung napakapayak o kaya PNG kung iba',
'mw_math_html'   => 'HTML kung maaari o kaya PNG kapag iba',
'mw_math_source' => "Iwanan bilang TeX (para sa mga panghanap na pangteksto o ''text browser'')",
'mw_math_modern' => 'Irekomenda para sa makabagong mga panghanap',
'mw_math_mathml' => 'MathML kung maaari (sinusubok pa)',

# Patrolling
'markaspatrolleddiff'                 => 'Tatakan bilang napatrolya na',
'markaspatrolledtext'                 => 'Tatakan ang pahinang ito bilang napatrolya na',
'markedaspatrolled'                   => 'Tatakan bilang napatrolya na',
'markedaspatrolledtext'               => 'Ang napiling pagbabago ay natatakan na bilang napatrolya.',
'rcpatroldisabled'                    => 'Hindi pinagana ang Patrolyang Pangkamailan-Lamang na Pagbabago',
'rcpatroldisabledtext'                => 'Kasalukuyang hindi pinagagana ang kasangkapang Patrolyang Pangkamakailang-lamang na Pagbabago.',
'markedaspatrollederror'              => 'Hindi matatakan bilang napatrolya na',
'markedaspatrollederrortext'          => 'Kailangang tukuyin mo ang isang pagbabago para matatakan ito bilang napatrolya na.',
'markedaspatrollederror-noautopatrol' => 'Wala kang pahintulot para tatakan ang ginawa mong mga pagbabago bilang napatrolya na.',

# Patrol log
'patrol-log-page'      => 'Tala ng Pagpapatrolya',
'patrol-log-header'    => 'Tala ito ng mga pagbabagong napatrolya na.',
'patrol-log-line'      => 'tinatakang $1 ng $2 napatrolya $3',
'patrol-log-auto'      => '(awtomatiko)',
'log-show-hide-patrol' => '$1 tala ng pagpatrolya',

# Image deletion
'deletedrevision'                 => 'Binurang lumang pagbabago $1',
'filedeleteerror-short'           => 'Kamalian sa pagbubura ng talaksan: $1',
'filedeleteerror-long'            => 'Nakaranas ng mga kamalian habang binubura ang talaksan:

$1',
'filedelete-missing'              => 'Hindi mabura ang talaksang "$1", dahil wala namang ganito.',
'filedelete-old-unregistered'     => 'Wala sa himpilan ng dato ang tinutukoy na pagbabago sa talaksan "$1".',
'filedelete-current-unregistered' => 'Wala sa himpilan ng dato ang tinukoy na talaksang "$1".',
'filedelete-archive-read-only'    => 'Hindi maisulat ng serbidor ng sapot (web) ang direktoryo ng sinupang "$1".',

# Browsing diffs
'previousdiff' => '← Mas lumang pagbabago',
'nextdiff'     => 'Mas bagong pagbabago →',

# Visual comparison
'visual-comparison' => 'Paghahambing na matatanaw',

# Media information
'mediawarning'         => "'''Babala''': Maaaring naglalaman ang talaksang ito ng kodigong malisyoso, maaaring manganib ang iyong sistema kapag isinagawa mo ito .<hr />",
'imagemaxsize'         => 'Itakda lamang ang hangganan ng mga larawan sa ibabaw ng pahina ng paglalarawang pangtalaksan sa:',
'thumbsize'            => 'Maliit na sukat (parang "kuko sa hinlalaki" lamang):',
'widthheightpage'      => '$1×$2, $3 {{PLURAL:$3|pahina|mga pahina}}',
'file-info'            => '(sukat ng talaksan: $1, tipo ng MIME: $2)',
'file-info-size'       => '($1 × $2 piksel, sukat ng talaksan: $3, tipo ng MIME: $4)',
'file-nohires'         => '<small>Walang makuhang mas mataas na resolusyon.</small>',
'svg-long-desc'        => '(Talaksang SVG, nasa mga bilang na $1 × $2 mga piksel, sukat ng talaksan: $3)',
'show-big-image'       => 'Buong resolusyon',
'show-big-image-thumb' => '<small>Laki ng paunang tinging ganito: $1 × $2 mga piksel</small>',

# Special:NewFiles
'newimages'             => 'Galerya ng mga bagong talaksan',
'imagelisttext'         => "Nasa ibaba ang isang tala ng '''$1''' {{PLURAL:$1|talaksan|mga talakasang}} nauri na $2.",
'newimages-summary'     => 'Nagpapakita ang natatanging pahinang ito ng huling naikargang mga talaksan.',
'newimages-legend'      => 'Pansala',
'newimages-label'       => 'Pangalan ng talaksan (o bahagi nito):',
'showhidebots'          => "($1 mga ''bot'')",
'noimages'              => 'Walang makikita dito.',
'ilsubmit'              => 'Hanapin',
'bydate'                => 'ayon sa petsa',
'sp-newimages-showfrom' => 'Ipakita ang mga bagong talaksang nagsisimula mula $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'hours-abbrev'   => 'o',

# Bad image list
'bad_image_list' => 'Ang anyo ay ang mga sumusunod:

Tanging mga nakatalang bagay lamang (mga linyang nagsisimula sa *) ang pinaguukulan ng pansin.
Ang unang kawing sa isang linya ay dapat na nakakawing sa isang talaksang may masamang kalagayan.
Anumang susunod na mga kawing sa pinanggalingang linya ay tinuturing na mga eksepsyon o bukod-tangi, iyong mga pahina kung saan ang mga talaksan ay maaaring lumitaw sa loob ng linya.',

# Metadata
'metadata-help'     => 'Naglalaman ang talaksang ito ng karagdagang kabatiran na maaaring idinagdag mula sa isang kamerang dihital o iskaner na ginamit para likhain o para maging dihital ito.
Kapag nabago ang talaksan mula sa anyong orihinal nito, may ilang detalyeng hindi ganap na maipapakita ang nabagong talaksan.',
'metadata-expand'   => 'Ipakita ang karugtong na mga detalye',
'metadata-collapse' => 'Itago ang karugtong na mga detalye',
'metadata-fields'   => 'Ang mga pook ng metadatang EXIF na nakatala sa mensaheng ito ay masasama sa ipinapakitang pahina ng larawan kapag tumiklop ang tabla ng metadata.
Nakatakdang itago ang iba pa.
* kayarian
* modelo
* petsaorasorihinal
* lantadoras
* pbilang
* pokalhaba', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Lapad',
'exif-imagelength'                 => 'Taas',
'exif-bitspersample'               => 'Mga bit (piraso) ng bawat komponente (bahagi)',
'exif-compression'                 => 'Plano ng kumpresyon (pagkakasiksik)',
'exif-photometricinterpretation'   => 'Mga taglay (komposisyon) ng piksel',
'exif-orientation'                 => 'Oryentasyon',
'exif-samplesperpixel'             => 'Bilang ng mga komponente (sangkap)',
'exif-planarconfiguration'         => 'Pagkakaayos ng mga dato',
'exif-ycbcrsubsampling'            => "Halimbawang bahagi ng rata (''ratio'') ng Y sa C",
'exif-ycbcrpositioning'            => 'Pagkakaposisyon ng Y at C',
'exif-xresolution'                 => 'Pahalang na resolusyon',
'exif-yresolution'                 => 'Bertikal (patayo) na resolusyon',
'exif-resolutionunit'              => 'Yunit ng resolusyong X at Y',
'exif-stripoffsets'                => 'Lokasyon ng dato ng larawan',
'exif-rowsperstrip'                => 'Bilang ng pahalang na hanay bawat manipis na piraso',
'exif-stripbytecounts'             => 'Mga byte ng bawat siniksik na piraso',
'exif-jpeginterchangeformat'       => "Bawiin at ibalanse (i-''offset'') patungo sa JPEG SOI",
'exif-jpeginterchangeformatlength' => 'Mga byte ng datong JPEG',
'exif-transferfunction'            => 'Tungkuling panglipat',
'exif-whitepoint'                  => 'Kadalisayan (kromatisidad) ng punto o hangganan ng kaputian',
'exif-primarychromaticities'       => 'Mga kadalisayan (kromatisidad) ng mga pangunahing kulay (mga primarya)',
'exif-ycbcrcoefficients'           => 'Mga koepisyente (katuwang na bilang) ng matris na pambago ng espasyo ng kulay',
'exif-referenceblackwhite'         => 'Pares ng mga itim at puting sangguniang halaga',
'exif-datetime'                    => 'Petsa at oras ng pagbabago ng talaksan',
'exif-imagedescription'            => 'Pamagat ng larawan',
'exif-make'                        => 'Kumpanyang tagagawa ng kamera',
'exif-model'                       => 'Modelo ng kamera',
'exif-software'                    => 'Ginamit na sopwer',
'exif-artist'                      => 'May-akda',
'exif-copyright'                   => 'May-hawak ng karapatang-ari (kopirayt)',
'exif-exifversion'                 => 'Bersyong Exif',
'exif-flashpixversion'             => 'Bersyon ng sinusuportahang Flashpix',
'exif-colorspace'                  => 'Espasyo ng kulay',
'exif-componentsconfiguration'     => 'Kahulugan ng bawat komponente',
'exif-compressedbitsperpixel'      => 'Modalidad (paraan) ng pagsisiksik ng larawan',
'exif-pixelydimension'             => 'Tanggap na lapad ng larawan',
'exif-pixelxdimension'             => 'Tanggap na taas ng larawan',
'exif-makernote'                   => 'Mga tala mula sa kumpanyang tagagawa',
'exif-usercomment'                 => 'Mga kumento ng tagagamit',
'exif-relatedsoundfile'            => 'Kaugnay na talaksang nadidinig (audio)',
'exif-datetimeoriginal'            => 'Petsa at oras ng paglikha ng mga dato',
'exif-datetimedigitized'           => 'Petsa at oras ng pagsasadihital',
'exif-subsectime'                  => 'PetsaOras mga subsegundo (bahagi ng segundo)',
'exif-subsectimeoriginal'          => 'PetsaOrasOrihinal subsegundo (bahagi ng segundo)',
'exif-subsectimedigitized'         => 'PetsaOrasDihitalisasyon subsegundo (bahagi ng segundo)',
'exif-exposuretime'                => 'Oras ng pagkakalantad',
'exif-exposuretime-format'         => '$1 seg ($2)<!--seg = segundo (seconds)-->',
'exif-fnumber'                     => 'F Bilang',
'exif-exposureprogram'             => 'Programa ng paglalantad',
'exif-spectralsensitivity'         => 'Sensitibidad sa ispektrum',
'exif-isospeedratings'             => 'Grado ng bilis ng ISO',
'exif-oecf'                        => 'Paktora ng optoelektronikong pagpapalit',
'exif-shutterspeedvalue'           => "Bilis ng pansara (''shutter'')",
'exif-aperturevalue'               => 'Apertura (butas na daanan ng liwanag)',
'exif-brightnessvalue'             => 'Kaningningan',
'exif-exposurebiasvalue'           => 'Panig ng kalantaran',
'exif-maxaperturevalue'            => 'Pinakamataas na aperturang (daanan ng liwanag) panglupa',
'exif-subjectdistance'             => 'Layo ng paksa',
'exif-meteringmode'                => 'Modalidad ng pagmemetro (pagsusukat)',
'exif-lightsource'                 => 'Pinagmumulan ng liwanag',
'exif-flash'                       => "Pangkisap (''flash'')",
'exif-focallength'                 => 'Haba ng lenteng pampokus (pantuon)',
'exif-subjectarea'                 => 'Saklaw na paksa',
'exif-flashenergy'                 => "Lakas ng kisap (''flash'')",
'exif-spatialfrequencyresponse'    => 'Tugon ng kalimitan na pangespasyo',
'exif-focalplanexresolution'       => 'Resolusyong X ng kalatagan o lapyang pampokus',
'exif-focalplaneyresolution'       => 'Resolusyong Y ng kalatagan o lapyang pampokus',
'exif-focalplaneresolutionunit'    => 'Yunit ng resolusyon ng kalatagan o lapyang pampokus',
'exif-subjectlocation'             => 'Lokasyon ng paksa',
'exif-exposureindex'               => 'Pang-antas o indeks ng pagkakalantad',
'exif-sensingmethod'               => 'Paraang pandama',
'exif-filesource'                  => 'Pinagmulang talaksan',
'exif-scenetype'                   => 'Uri ng tagpuan',
'exif-cfapattern'                  => 'Gawi ng CFA',
'exif-customrendered'              => 'Pagpoproseso ng pinasadyang larawan',
'exif-exposuremode'                => 'Modalidad ng paglalantad',
'exif-whitebalance'                => 'Balanse ng Kaputian',
'exif-digitalzoomratio'            => "Rata/Antas ng sukat ng dihital na paglapit (''zoom'')",
'exif-focallengthin35mmfilm'       => 'Haba ng pokus sa pilm na 35 mm',
'exif-scenecapturetype'            => 'Uri ng panghuli ng tagpuan',
'exif-gaincontrol'                 => 'Kontrol na pangtagpuan',
'exif-contrast'                    => "Pagkakaiba ng pagsasalungat (''contrast'')",
'exif-saturation'                  => 'Saturasyon (pagkakababad/pagkakapuno)',
'exif-sharpness'                   => 'Katalasan',
'exif-devicesettingdescription'    => 'Paglalarawan sa mga pagtatakdang pangaparato',
'exif-subjectdistancerange'        => 'Antas ng layo ng paksa',
'exif-imageuniqueid'               => 'Natatanging ID ng larawan',
'exif-gpsversionid'                => 'Bersyon ng GPS tag',
'exif-gpslatituderef'              => 'Hilaga o Timog na Latitud',
'exif-gpslatitude'                 => 'Latitud',
'exif-gpslongituderef'             => 'Silangan o Kanlurang Longhitud',
'exif-gpslongitude'                => 'Longhitud',
'exif-gpsaltituderef'              => 'Sanggunian ng kataasan',
'exif-gpsaltitude'                 => 'Kataasan',
'exif-gpstimestamp'                => 'Oras ng GPS (atomikong orasan)',
'exif-gpssatellites'               => 'Mga satelayt na ginamit para sa sukat',
'exif-gpsstatus'                   => 'Katayuan ng tagatanggap',
'exif-gpsmeasuremode'              => 'Paraan ng sukat',
'exif-gpsdop'                      => 'Tumpak na sukat',
'exif-gpsspeedref'                 => 'Yunit ng bilis',
'exif-gpsspeed'                    => 'Bilis ng tagatanggap ng GPS',
'exif-gpstrackref'                 => 'Sanggunian para sa direksyon ng galaw',
'exif-gpstrack'                    => 'Direksyon ng galaw',
'exif-gpsimgdirectionref'          => 'Sanggunian para sa direksyon ng larawan',
'exif-gpsimgdirection'             => 'Direksyon ng larawan',
'exif-gpsmapdatum'                 => 'Ginamit na datos para sa geodetic survey',
'exif-gpsdestlatituderef'          => 'Sanggunian para sa latitud ng patutunguhan',
'exif-gpsdestlatitude'             => 'Latitud ng patutunguhan',
'exif-gpsdestlongituderef'         => 'Sanggunian para sa longhitud ng patutunguhan',
'exif-gpsdestlongitude'            => 'Longhitud ng patutunguhan',
'exif-gpsdestbearingref'           => 'Sanggunian para sa oryentasyon ng patutunguhan',
'exif-gpsdestbearing'              => 'Oryentasyon ng patutunguhan',
'exif-gpsdestdistanceref'          => 'Sanggunian para sa layo ng patutunguhan',
'exif-gpsdestdistance'             => 'Layo ng patutunguhan',
'exif-gpsprocessingmethod'         => 'Pangalan ng kaparaanan ng pagproseso ng GPS',
'exif-gpsareainformation'          => 'Pangalan ng lugar ng GPS',
'exif-gpsdatestamp'                => 'Petsa ng GPS',
'exif-gpsdifferential'             => 'Pagtatama sa pakakaiba ng GPS',

# EXIF attributes
'exif-compression-1' => 'Walang kompresyon',

'exif-unknowndate' => 'Hindi alam na araw',

'exif-orientation-1' => 'Karaniwan', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Pinihit ng pahiga', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Pinaikot ng 180°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Pinihit ng patayo', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Pinaikot ng 90° CCW at pinihit ng patayo', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Pinaikot ng 90° CW', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Pinaikot ng 90° CW at pinihit ng patayo', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Pinaikot ng 90° CCW', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'pagkaayos sa malalaking bahagi (chunky)',
'exif-planarconfiguration-2' => 'planar na pagkaayos',

'exif-componentsconfiguration-0' => 'wala',

'exif-exposureprogram-0' => 'Hindi nabigyan ng kahulugan',
'exif-exposureprogram-1' => 'Manwal',
'exif-exposureprogram-2' => 'Karaniwang programa',
'exif-exposureprogram-3' => 'Prayoridad ng apertura',
'exif-exposureprogram-4' => 'Prayoridad ng shutter',
'exif-exposureprogram-5' => 'Programang malikhain (bias sa lalim ng kuha)',
'exif-exposureprogram-6' => 'Programang aksyon (bias sa bilis ng shutter)',
'exif-exposureprogram-7' => 'Naka-portrait (para sa malapitang kuha kasama ang malabong paligid)',
'exif-exposureprogram-8' => 'Naka-tanawin (para mga kuhang tanawin na nakapokus ang paligid)',

'exif-subjectdistance-value' => '$1 mga metro',

'exif-meteringmode-0'   => 'Hindi alam',
'exif-meteringmode-1'   => 'Karaniwan',
'exif-meteringmode-2'   => 'Gitnang tinambang na karaniwan',
'exif-meteringmode-4'   => 'Maramihang spot',
'exif-meteringmode-5'   => 'Patron',
'exif-meteringmode-6'   => 'Bahagi lamang',
'exif-meteringmode-255' => 'Iba',

'exif-lightsource-0'   => 'Hindi alam',
'exif-lightsource-1'   => 'Liwanag ng araw',
'exif-lightsource-3'   => 'Tungsten (liwanag na incandescent)',
'exif-lightsource-9'   => 'Magandang panahon',
'exif-lightsource-10'  => 'Maulap na panahon',
'exif-lightsource-11'  => 'Lilim',
'exif-lightsource-12'  => 'Fluorescent ng liwanag ng araw (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Fluorescent ng maputing araw (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Fluorescent ng malamig na puti (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Fluorescent na puti (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Pangkarinawang liwanag A',
'exif-lightsource-18'  => 'Pangkaraniwang liwanag B',
'exif-lightsource-19'  => 'Karaniwang liwanag C',
'exif-lightsource-24'  => 'Istudyo tungsten na ISO',
'exif-lightsource-255' => 'Ibang pinagmulan ng liwanag',

'exif-focalplaneresolutionunit-2' => 'pulgada',

'exif-sensingmethod-1' => 'Hindi binigyan ng kahulugan',
'exif-sensingmethod-2' => 'Sensor sa lugar ng kulay na isang chip',
'exif-sensingmethod-3' => 'Sensor sa lugar ng kulay na dalawang chip',
'exif-sensingmethod-4' => 'Sensor sa lugar ng kulay na tatlong chip',
'exif-sensingmethod-5' => 'Sensor sa lugar na sunod-sunod na kulay',
'exif-sensingmethod-7' => "Sensor na ''trilinear''",
'exif-sensingmethod-8' => 'Linear sensor na sunod-sunod na kulay',

'exif-scenetype-1' => 'Isang larawang diretsong kinuha',

'exif-customrendered-0' => 'Karaniwang proseso',
'exif-customrendered-1' => 'Pasadyang proseso',

'exif-exposuremode-0' => 'Awtomatikong eksposisyon',
'exif-exposuremode-1' => 'Manwal na eksposisyon',
'exif-exposuremode-2' => 'Awtomatikong bracket',

'exif-whitebalance-0' => 'Awtomatikong timbang ng puti',
'exif-whitebalance-1' => 'Manwal na timbang ng puti',

'exif-scenecapturetype-0' => 'Karaniwan',
'exif-scenecapturetype-1' => 'Tanawin',
'exif-scenecapturetype-2' => 'Kuwadro',
'exif-scenecapturetype-3' => 'Eksena sa gabi',

'exif-gaincontrol-0' => 'Wala',
'exif-gaincontrol-1' => 'Mababang gain pataas',
'exif-gaincontrol-2' => 'Mataas na gain pataas',
'exif-gaincontrol-3' => 'Mababang gain pababa',
'exif-gaincontrol-4' => 'Mataas na gain pababa',

'exif-contrast-0' => 'Karaniwan',
'exif-contrast-1' => 'Malambot',
'exif-contrast-2' => 'Matigas',

'exif-saturation-0' => 'Karaniwan',
'exif-saturation-1' => 'Mababang saturasyon',
'exif-saturation-2' => 'Mataas na saturasyon',

'exif-sharpness-0' => 'Karaniwan',
'exif-sharpness-1' => 'Malambot',
'exif-sharpness-2' => 'Matigas',

'exif-subjectdistancerange-0' => 'Hindi alam',
'exif-subjectdistancerange-2' => 'Tingin na malapit',
'exif-subjectdistancerange-3' => 'Tingin na malayo',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Hilagan latitud',
'exif-gpslatitude-s' => 'Timog na latitud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Silangang longhitud',
'exif-gpslongitude-w' => 'Kanluran longhitud',

'exif-gpsstatus-a' => 'Kasalukuyang nagsusukat',
'exif-gpsstatus-v' => 'Interoperabilidad ng sukat',

'exif-gpsmeasuremode-2' => '2-dimensyunal na sukat',
'exif-gpsmeasuremode-3' => '3-dimensyunal na sukat',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Kilometro bawat oras',
'exif-gpsspeed-m' => 'Milya bawat oras',
'exif-gpsspeed-n' => 'Mga knot',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Totoong direksyon',
'exif-gpsdirection-m' => 'Magnetikong direksyon',

# External editor support
'edit-externally'      => 'Baguhin ang talaksang ito sa pamamagitan ng panlabas na aplikasyon',
'edit-externally-help' => 'Tingnan ang [http://meta.wikimedia.org/wiki/Help:External_editors pahina kung paano gamitin ang panlabas na aplikasyon] para sa marami pang impormasyon.',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'lahat',
'imagelistall'     => 'lahat',
'watchlistall2'    => 'lahat',
'namespacesall'    => 'lahat',
'monthsall'        => 'lahat',

# E-mail address confirmation
'confirmemail'             => 'Kumpirmahin ang e-liham',
'confirmemail_noemail'     => 'Wala kang naibagay na tamang e-liham sa iyong [[Special:Preferences|mga kagustuhan]].',
'confirmemail_text'        => "Kailangang kumpirmahin ang e-liham mo bago magamit ang e-liham ng wiki na ito.  Iaktibo ang buton sa ibaba upang makapagpadala ng isang kumpirmasyon sa iyong e-liham.  Ang e-liham ay mayroong isang ugnay (link) na naglalaman ng isang kodigo; ikarga ang ugnay sa inyong ''browser'' para kumpirmahin na tama ang e-liham mo.",
'confirmemail_pending'     => '<div class="error">
Naipadala na sa iyong e-liham ang kodigo ng kumpirmasyon; kung lumikha ka ng akawmt kamakailan lamang, maaari kang maghintay ng ilang minuto para ito dumating bago sumubok humiling ng bagong kodigo.
</div>',
'confirmemail_send'        => 'Ipadala sa e-liham ang kodigo ng kumpirmasyon',
'confirmemail_sent'        => 'Naipadala ang e-liham ng kumpirmasyon.',
'confirmemail_oncreate'    => 'Isang kodigo ng kumpirmasyon ang pinadala sa iyong e-liham.
Hindi kinakailangan ang kodigong ito upang makapaglagda, ngunit kailangan mo itong kumpirmahin para gumana ang e-liham mo sa wiki na ito.',
'confirmemail_sendfailed'  => 'Hindi maipadala sa e-liham ang kumpirmasyon. Paki tingin ang adres ng e-liham para sa mga di-pinapayagang mga karakter.

Ibinalik ng tagapagdala: $1',
'confirmemail_invalid'     => 'Hindi tamang kodigo ng kumpirmasyon.  Lumagpas na sa taning ang kodigo.',
'confirmemail_needlogin'   => 'Kailangan mong $1 upang kumpirmahin ang iyong e-liham.',
'confirmemail_success'     => 'Nakumpirma na ang iyong e-liham. Maaari ka ng lumagda sa wiki.',
'confirmemail_loggedin'    => 'Nakumpirma na ang iyong e-liham.',
'confirmemail_error'       => 'May nangyaring mali sa pagtala ng iyong kumpirmasyon.',
'confirmemail_subject'     => 'Kumpirmasyon ng {{SITENAME}} e-liham',
'confirmemail_invalidated' => 'Binale-wala ang pagpapatotoo ng e-liham',
'invalidateemail'          => 'Bale-walain ang pagpapatotoo ng e-liham',

# Scary transclusion
'scarytranscludedisabled' => '[Nakapatay ang interwiki transcluding]',
'scarytranscludefailed'   => '[Bigo ang pagkuha ng suleras na $1; paumanhin]',
'scarytranscludetoolong'  => '[Masyadong mahaba ang URL; paumanhin]',

# Trackbacks
'trackbackbox'      => "<div id=\"mw_trackbacks\">
Mga ''trackback'' para sa pahinang ito:<br />
\$1
</div>",
'trackbackremove'   => ' ([$1 Nabura])',
'trackbackdeleteok' => "Tagumpay na nabura ang ''trackback''.",

# Delete conflict
'deletedwhileediting' => 'Babala: Nabura na ang pahinang ito pagkatapos mong magsimulang magbago!',
'confirmrecreate'     => "Binura ni [[User:$1|$1]] ([[User talk:$1|usapan]]) ang pahinang ito pagkatapos mong umpisahang baguhin ito kasama ang sumusunod na dahilan:
: ''$2''
Paki kumpirma na nais mo talagang muling likhain ang pahinang ito.",
'recreate'            => 'Likhain muli',

# action=purge
'confirm-purge-top' => 'Linisin ang baunan ng pahinang ito?',

# Multipage image navigation
'imgmultipageprev' => '← nakaraang pahina',
'imgmultipagenext' => 'susunod na pahina →',
'imgmultigo'       => 'Punta!',
'imgmultigoto'     => 'Pumunta sa pahinang $1',

# Table pager
'ascending_abbrev'         => 'taas',
'descending_abbrev'        => 'baba',
'table_pager_next'         => 'Susunod na pahina',
'table_pager_prev'         => 'Nakaraang pahina',
'table_pager_first'        => 'Unang pahina',
'table_pager_last'         => 'Huling pahina',
'table_pager_limit'        => 'Ipakita ang $1 aytem bawat pahina',
'table_pager_limit_submit' => 'Punta',
'table_pager_empty'        => 'Walang resulta',

# Auto-summaries
'autosumm-blank'   => 'Itinatanggal ang lahat ng nilalaman mula sa pahina',
'autosumm-replace' => "Ipinapalit ang pahina ng may nilalamang '$1'",
'autoredircomment' => 'Ikinakarga sa [[$1]]',
'autosumm-new'     => 'Bagong pahina: $1',

# Live preview
'livepreview-loading' => 'Ikinakarga…',
'livepreview-ready'   => 'Ikinakarga… Handa na!',
'livepreview-failed'  => 'Nabigo ang buhay na pribyu! Subukan ang normal na pribyu.',
'livepreview-error'   => 'Hindi tagumpay ang pagkabit (connect): $1 "$2". Subukan ang karaniwang paunang tingin.',


# Watchlist editor
'watchlistedit-noitems'        => 'Walang mga pamagat ang iyong mga binabantayan.',
'watchlistedit-normal-title'   => 'Baguhin ang mga binabantayan',
'watchlistedit-normal-legend'  => 'Tanggalin ang mga pamagat mula sa binabantayan',
'watchlistedit-normal-explain' => 'Pinapakita ang mga pamagat sa iyong binabantayan sa ibaba. Para tanggalin ang isang pamagat, tingnan ang kahon kasunod nito, at pindutin ang Tanggalin ang mga Pamagat.  Maaari mo ring [[Special:Watchlist/raw|baguhin ang hilaw na tala]],	o [[Special:Watchlist/clear|tanggalin lahat ng mga pamagat]].',
'watchlistedit-normal-submit'  => 'Tanggalin ang mga Pamagat',
'watchlistedit-raw-title'      => 'Baguhin ang hilaw na binabantayan',
'watchlistedit-raw-legend'     => 'Baguhin ang hilaw na binabantayan',
'watchlistedit-raw-explain'    => 'Pinapakita ang mga pamagat sa iyong binabantayan sa ibaba, at maaaring mabago sa pamamagitan ng pagdagdag at pagtanggal mula sa tala; isang pamagat kada linya. Kapag tapos na, pindutin ang Baguhin ang Binabantayan.  Maaari mo ring [[Special:Watchlist/edit|gamitin ang pamantayang patnugot]].',
'watchlistedit-raw-titles'     => 'Mga pamagat:',
'watchlistedit-raw-submit'     => 'Baguhin ang Binabantayan',
'watchlistedit-raw-done'       => 'Nabago ang iyong binabantayan.',

# Watchlist editing tools
'watchlisttools-view' => 'Tingnan ang mga magkaugnay na pagbabago',
'watchlisttools-edit' => 'Tingnan at baguhin ang binabantayan',
'watchlisttools-raw'  => 'Baguhin ang hilaw na binabantayan',

# Special:Version
'version'                          => 'Bersyon', # Not used as normal message but as header for the special page itself
'version-extensions'               => 'Nakaluklok na mga ekstensyon',
'version-specialpages'             => 'Mga natatanging pahina',
'version-parserhooks'              => 'Mga sumusuring kawit',
'version-variables'                => 'Mga nagbabago',
'version-other'                    => 'Iba',
'version-mediahandlers'            => 'Mga humahawak ng midya',
'version-hooks'                    => 'Mga kawit',
'version-extension-functions'      => 'Mga punsyong ekstensyon',
'version-parser-extensiontags'     => 'Mga sumusuring ektensyon na tag',
'version-parser-function-hooks'    => 'Mga sumusuring punsyon na kawit',
'version-skin-extension-functions' => 'Mga pabalat na ekstensyong punsyon',
'version-hook-name'                => 'Pangalang kawit',
'version-hook-subscribedby'        => 'Sinuskribi ng/ni/nina',
'version-version'                  => 'Bersyon',
'version-license'                  => 'Lisensiya',
'version-software'                 => 'Inistalang software',
'version-software-product'         => 'Produkto',
'version-software-version'         => 'Bersyon',

# Special:FilePath
'filepath'         => 'Lokasyon ng talaksan (file path)',
'filepath-page'    => 'Talaksan:',
'filepath-submit'  => 'Patutunguhan',
'filepath-summary' => 'Nagbalik ang natatanging pahina na ito ng isang ganap na lokasyon para sa isang talaksan.  Ipinapakita sa malaking resolusyon ang mga larawan, ang ibang talaksan ay nagsisimulang diretso sa kanilang nakakabit na programa. Ipasok ang pangalan ng talaksan na wala ang unlaping "{{ns:image}}:".',

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Maghanap ng kaparehong mga talaksan',
'fileduplicatesearch-summary'  => "Maghanap ng mga kaparehong mga talaksan sa baba ng kanyang halaga ng ''hash''.

Ipasok ang pangalan ng talaksan na wala ang unlaping \"{{ns:image}}:\".",
'fileduplicatesearch-legend'   => 'Maghanap ng mga kapareho',
'fileduplicatesearch-filename' => 'Pangalan ng talaksan:',
'fileduplicatesearch-submit'   => 'Hanapin',
'fileduplicatesearch-info'     => '$1 × $2 pixel<br />Laki ng talaksan: $3<br />Uri ng MIME: $4',
'fileduplicatesearch-result-1' => 'Walang katulad ang talaksan na "$1".',
'fileduplicatesearch-result-n' => 'Ang talaksan na "$1" ay may {{PLURAL:$2|1 kapareho|$2 mga kapareho}}.',

# Special:SpecialPages
'specialpages'                   => 'Mga natatanging pahina',
'specialpages-note'              => '----
* Karaniwang natatanging pahina.
* <span class="mw-specialpagerestricted">Mga pinaghihigpitang natatanging pahina.</span>',
'specialpages-group-maintenance' => 'Mga pagpapanatiling ulat',
'specialpages-group-other'       => 'Iba pang natatanging mga pahina',
'specialpages-group-login'       => 'Lumagda/tumala',
'specialpages-group-changes'     => 'Mga huling binago at mga tala',
'specialpages-group-media'       => 'Mga ulat ng midya at mga pagkarga',
'specialpages-group-users'       => 'Mga tagagamit at mga karapatan',
'specialpages-group-highuse'     => 'Mga pahinang mataas ang paggamit',
'specialpages-group-pages'       => 'Tala ng mga pahina',
'specialpages-group-pagetools'   => 'Mga kagamitang pang-pahina',
'specialpages-group-wiki'        => 'Kagamitan at datos ng wiki',
'specialpages-group-redirects'   => 'Mga natatanging pahinang pang-talon',
'specialpages-group-spam'        => 'Mga kagamitang pang-spam',

# Special:BlankPage
'blankpage'              => 'Walang laman na pahina',
'intentionallyblankpage' => 'Sinadyang walang laman ang pahinang ito',

);
