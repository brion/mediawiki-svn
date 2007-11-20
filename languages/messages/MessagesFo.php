<?php
/** Faroese (Føroyskt)
 *
 * @addtogroup Language
 *
 * @author Spacebirdy
 * @author G - ג
 * @author S.Örvarr.S
 * @author Nike
 * @author SPQRobin
 */

$skinNames = array(
	'standard'    => 'Standardur', 
	'nostalgia'   => 'Nostalgiskur', 
	'cologneblue' => 'Cologne-bláur'
);

$bookstoreList = array(
	'Bokasolan.fo' => 'http://www.bokasolan.fo/vleitari.asp?haattur=bok.alfa&Heiti=&Hovindur=&Forlag=&innbinding=Oell&bolkur=Allir&prisur=Allir&Aarstal=Oell&mal=Oell&status=Oell&ISBN=$1',
	'inherit' => true,
);

$namespaceNames = array(
	NS_MEDIA          => 'Miðil',
	NS_SPECIAL        => 'Serstakur',
	NS_MAIN           => '',
	NS_TALK           => 'Kjak',
	NS_USER           => 'Brúkari',
	NS_USER_TALK      => 'Brúkari_kjak',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => '$1_kjak',
	NS_IMAGE          => 'Mynd',
	NS_IMAGE_TALK     => 'Mynd_kjak',
	NS_MEDIAWIKI      => 'MidiaWiki',
	NS_MEDIAWIKI_TALK => 'MidiaWiki_kjak',
	NS_TEMPLATE       => 'Fyrimynd',
	NS_TEMPLATE_TALK  => 'Fyrimynd_kjak',
	NS_HELP           => 'Hjálp',
	NS_HELP_TALK      => 'Hjálp kjak',
	NS_CATEGORY       => 'Bólkur',
	NS_CATEGORY_TALK  => 'Bólkur_kjak',
);

$skinNames = array(
	'standard' => 'Standardur',
	'nostalgia' => 'Nostalgiskur',
	'cologneblue' => 'Cologne-bláur',
);

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j. M Y',
	'dmy both' => 'j. M Y "kl." H:i',
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'Tvífaldað_ávísing' ),
	'BrokenRedirects'           => array( 'Brotnar_ávísingar' ),
	'Disambiguations'           => array( 'Síður_við_fleirfaldum_týdningi' ),
	'Userlogin'                 => array( 'Stovna_kontu_ella_rita_inn' ),
	'Userlogout'                => array( 'Rita_út' ),
	'Preferences'               => array( 'Innstillingar' ),
	'Watchlist'                 => array( 'Mítt_eftirlit' ),
	'Recentchanges'             => array( 'Seinastu_broytingar' ),
	'Upload'                    => array( 'Legg_fílu_upp' ),
	'Imagelist'                 => array( 'Myndalisti' ),
	'Newimages'                 => array( 'Nýggjar_myndir' ),
	'Listusers'                 => array( 'Brúkaralisti' ),
	'Statistics'                => array( 'Hagtøl' ),
	'Randompage'                => array( 'Tilvildarlig_síða' ),
	'Lonelypages'               => array( 'Foreldraleysar_síður' ),
	'Uncategorizedpages'        => array( 'Óbólkaðar_síður' ),
	'Uncategorizedcategories'   => array( 'Óbólkaðir_bólkar' ),
	'Uncategorizedimages'       => array( 'Óbólkaðar_myndir' ),
	'Uncategorizedtemplates'    => array( 'Óbólkaðar_fyrimyndir' ),
	'Unusedcategories'          => array( 'Óbrúktir_bólkar' ),
	'Unusedimages'              => array( 'Óbrúktar_myndir' ),
	'Wantedpages'               => array( 'Ynsktar_síður' ),
	'Mostcategories'            => array( 'Greinir_við_flest_bólkum' ),
	'Mostrevisions'             => array( 'Greinir_við_flest_útgávum' ),
	'Fewestrevisions'           => array( 'Greinir_við_minst_útgávum' ),
	'Shortpages'                => array( 'Stuttar_síður' ),
	'Longpages'                 => array( 'Langar_síður' ),
	'Newpages'                  => array( 'Nýggjar_síður' ),
	'Ancientpages'              => array( 'Elstu_síður' ),
	'Deadendpages'              => array( 'Gøtubotns_síður' ),
	'Allpages'                  => array( 'Allar_síður' ),
	'Ipblocklist'               => array( 'Bannað_brúkaranøvn_og_IP-adressur' ),
	'Specialpages'              => array( 'Serligar_síður' ),
	'Contributions'             => array( 'Brúkaraíkast' ),
	'Emailuser'                 => array( 'Send_t-post_til_brúkara' ),
	'Movepage'                  => array( 'Flyt_síðu' ),
	'Booksources'               => array( 'Bóka_keldur' ),
	'Categories'                => array( 'Bólkar' ),
	'Export'                    => array( 'Útflutningssíður' ),
	'Version'                   => array( 'Útgáva' ),
	'Allmessages'               => array( 'Øll_kervisboð' ),
	'Blockip'                   => array( 'Banna_brúkara' ),
	'Undelete'                  => array( 'Endurstovna_strikaðar_síður' ),
	'Search'                    => array( 'Leita' ),
);

$linkTrail = '/^([áðíóúýæøa-z]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline'               => 'Undurstrika ávísingar',
'tog-highlightbroken'         => 'Brúka reyða ávísing til tómar síður',
'tog-justify'                 => 'Stilla greinpart',
'tog-hideminor'               => 'Goym minni broytingar í seinast broytt listanum',
'tog-extendwatchlist'         => 'Víðkað eftirlit',
'tog-usenewrc'                => 'víðka seinastu broytingar lista (ikki til alla kagarar)',
'tog-numberheadings'          => 'Sjálvtalmerking av yvirskrift',
'tog-showtoolbar'             => 'Vís amboðslinju í rætting',
'tog-editondblclick'          => 'Rætta síðu við at tvíklikkja (JavaScript)',
'tog-editsection'             => 'Rætta greinpart við hjálp av [rætta]-ávísing',
'tog-editsectiononrightclick' => 'Rætta greinpart við at høgraklikkja á yvirskrift av greinparti (JavaScript)',
'tog-showtoc'                 => 'Vís innihaldsyvurlit (Til greinir við meira enn trimun greinpartum)',
'tog-rememberpassword'        => 'Minst til loyniorð næstu ferð',
'tog-editwidth'               => 'Rættingarkassin hevur fulla breid',
'tog-watchcreations'          => 'Legg síður, sum eg stovni, í mítt eftirlit',
'tog-watchdefault'            => 'Vaka yvur nýggjum og broyttum greinum',
'tog-minordefault'            => 'Merk sum standard allar broytingar sum smærri',
'tog-previewontop'            => 'Vís forhondsvísning áðren rættingarkassan',
'tog-previewonfirst'          => 'Sýn forskoðan við fyrstu broyting',
'tog-nocache'                 => 'Minst ikki til síðurnar til næstu ferð',
'tog-fancysig'                => 'Rá undirskrift (uttan sjálvvirkandi slóð)',
'tog-externaleditor'          => 'Nýt útvortis ritil sum fyrimynd',
'tog-externaldiff'            => 'Nýt útvortis diff sum fyrimynd',

'underline-always'  => 'Altíð',
'underline-never'   => 'Ongantíð',
'underline-default' => 'Kagarastandard',

'skinpreview' => '(Forskoðan)',

# Dates
'sunday'        => 'sunnudagur',
'monday'        => 'mánadagur',
'tuesday'       => 'týsdagur',
'wednesday'     => 'mikudagur',
'thursday'      => 'hósdagur',
'friday'        => 'fríggjadagur',
'saturday'      => 'leygardagur',
'sun'           => 'sun',
'mon'           => 'mán',
'tue'           => 'týs',
'wed'           => 'mik',
'thu'           => 'hós',
'fri'           => 'frí',
'sat'           => 'ley',
'january'       => 'januar',
'february'      => 'februar',
'march'         => 'mars',
'april'         => 'apríl',
'may_long'      => 'mai',
'june'          => 'juni',
'july'          => 'juli',
'august'        => 'august',
'september'     => 'september',
'october'       => 'oktober',
'november'      => 'november',
'december'      => 'desember',
'january-gen'   => 'januar',
'february-gen'  => 'februar',
'march-gen'     => 'mars',
'april-gen'     => 'apríl',
'may-gen'       => 'mai',
'june-gen'      => 'juni',
'july-gen'      => 'juli',
'august-gen'    => 'august',
'september-gen' => 'september',
'october-gen'   => 'oktober',
'november-gen'  => 'november',
'december-gen'  => 'desember',
'jan'           => 'jan',
'feb'           => 'feb',
'mar'           => 'mar',
'apr'           => 'apr',
'may'           => 'mai',
'jun'           => 'jun',
'jul'           => 'jul',
'aug'           => 'aug',
'sep'           => 'sep',
'oct'           => 'okt',
'nov'           => 'nov',
'dec'           => 'des',

# Bits of text used by many pages
'categories'      => 'Bólkar',
'pagecategories'  => '{{PLURAL:$1|Bólkur|Bólkar}}',
'category_header' => 'Greinir í bólki "$1"',
'subcategories'   => 'Undirbólkur',
'category-empty'  => "''Hesin bólkur inniheldur ongar greinir ella miðlar í løtuni.''",

'about'          => 'Um',
'article'        => 'Innihaldssíða',
'newwindow'      => '(kemur í nýggjan glugga)',
'cancel'         => 'Ógilda',
'qbmyoptions'    => 'Mínar síður',
'qbspecialpages' => 'Serstakar síður',
'moredotdotdot'  => 'Meira...',
'mypage'         => 'Mín síða',
'mytalk'         => 'Mítt kjak',
'anontalk'       => 'Kjak til hesa ip-adressuna',
'navigation'     => 'Navigatión',

'errorpagetitle'    => 'Villa',
'returnto'          => 'Vend aftur til $1.',
'tagline'           => 'Frá {{SITENAME}}',
'help'              => 'Hjálp',
'search'            => 'Leita',
'searchbutton'      => 'Leita',
'go'                => 'Far til',
'searcharticle'     => 'Far',
'history'           => 'Síðusøga',
'history_short'     => 'Søga',
'info_short'        => 'Upplýsingar',
'printableversion'  => 'Prentvinarlig útgáva',
'permalink'         => 'Støðug slóð',
'print'             => 'Prenta',
'edit'              => 'Rætta',
'editthispage'      => 'Rætta hesa síðuna',
'delete'            => 'Strika',
'deletethispage'    => 'Strika hesa síðuna',
'protect'           => 'Friða',
'protectthispage'   => 'Friða hesa síðuna',
'unprotect'         => 'Strika friðing',
'unprotectthispage' => 'Ófriða hesa síðuna',
'newpage'           => 'Nýggj síða',
'talkpage'          => 'Kjakast um hesa síðuna',
'talkpagelinktext'  => 'Kjak',
'specialpage'       => 'Serlig síða',
'personaltools'     => 'Persónlig amboð',
'postcomment'       => 'Skriva eina viðmerking',
'articlepage'       => 'Skoða innihaldssíðuna',
'talk'              => 'Kjak',
'views'             => 'Skoðanir',
'toolbox'           => 'Amboð',
'viewtalkpage'      => 'Vís kjak',
'redirectedfrom'    => '(Ávíst frá $1)',
'redirectpagesub'   => 'Ávísingarsíða',
'lastmodifiedat'    => 'Hendan síðan var seinast broytt $2, $1.', # $1 date, $2 time
'protectedpage'     => 'Friðað síða',
'jumpto'            => 'Far til:',
'jumptonavigation'  => 'navigatión',
'jumptosearch'      => 'leita',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Um {{SITENAME}}',
'aboutpage'         => '{{ns:project}}:Um',
'copyright'         => 'Innihald er tøkt undir $1.',
'copyrightpagename' => '{{SITENAME}} útgávurættur',
'copyrightpage'     => 'Project:Útgávurættar',
'currentevents'     => 'Núverandi hendingar',
'currentevents-url' => 'Project:Núverandi hendingar',
'disclaimers'       => 'Fyrivarni',
'disclaimerpage'    => 'Project:Fyrivarni',
'edithelp'          => 'Rættihjálp',
'faq'               => 'OSS',
'faqpage'           => '{{ns:project}}:OSS',
'helppage'          => '{{ns:help}}:Innihald',
'mainpage'          => 'Forsíða',
'portal'            => 'Forsíða fyri høvundar',
'portal-url'        => 'Project:Forsíða fyri høvundar',
'privacy'           => 'Handfaring av persónligum upplýsingum',

'badaccess' => 'Loyvisbrek',

'ok'                      => 'Í lagi',
'youhavenewmessages'      => 'Tú hevur $1 ($2).',
'newmessageslink'         => 'nýggj boð',
'newmessagesdifflink'     => 'seinasta broyting',
'youhavenewmessagesmulti' => 'Tú hevur nýggj boð á $1',
'editsection'             => 'rætta',
'editold'                 => 'rætta',
'toc'                     => 'Innihaldsyvirlit',
'showtoc'                 => 'skoða',
'hidetoc'                 => 'fjal',
'thisisdeleted'           => 'Sí ella endurstovna $1?',
'viewdeleted'             => 'Vís $1?',
'restorelink'             => '{{PLURAL:$1|strikaða rætting|$1 strikaðar rættingar}}',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Grein',
'nstab-user'      => 'Brúkarasíða',
'nstab-media'     => 'Miðil',
'nstab-special'   => 'Serstøk',
'nstab-project'   => 'Verkætlanar síða',
'nstab-image'     => 'Mynd',
'nstab-mediawiki' => 'Grein',
'nstab-template'  => 'Formur',
'nstab-help'      => 'Hjálp',
'nstab-category'  => 'Flokkur',

# Main script and global functions
'nosuchaction'      => 'Ongin slík gerð',
'nosuchspecialpage' => 'Ongin slík serlig síða',

# General errors
'error'          => 'Villa',
'databaseerror'  => 'Villa í dátagrunni',
'cannotdelete'   => 'Síðan ella myndin kundi ikki strikast. (Møguliga hevur onkur annar longu strikað hana.)',
'badtitle'       => 'Ógyldugt heiti',
'perfdisabled'   => 'Tíverri er hesin hentleikin fyribils óvirkin! Hetta tí at hann seinkar dátugrunnin so nígv, at wiki ikki virkar sum hon skal.',
'perfcachedts'   => 'Fylgjandi dáta er goymt, og var seinast goymt $1.',
'viewsource'     => 'Vís keldu',
'viewsourcetext' => 'Tú kanst síggja og avrita kelduna til hesa grein:',

# Login and logout pages
'logouttitle'                => 'Brúkaraútritan',
'logouttext'                 => '<strong>Tú hevur nú ritað út.</strong><br />
Tú kanst halda áfram at nýta {{SITENAME}} dulnevnt.
Ella kanst tú rita inn aftur sum sami ella annar brúkari.
Legg til merkis at summar síður kunnu framhaldandi síggja út
sum tú hevur ritað inn til goymslan í sneytara tínum er ruddað.',
'welcomecreation'            => '== Vælkomin, $1! ==

Tín konto er nú stovnað. Gloym ikki at broyta tínar {{SITENAME}} innstillingar.',
'loginpagetitle'             => 'Brúkarainnritan',
'yourname'                   => 'Títt brúkaranavn:',
'yourpassword'               => 'Títt loyniorð:',
'yourpasswordagain'          => 'Skriva loyniorð umaftur:',
'remembermypassword'         => 'Minst til loyniorðið hjá mær.',
'loginproblem'               => '<b>Trupulleikar vóru við tíni innritan.</b><br />Royn aftur!',
'login'                      => 'Rita inn',
'loginprompt'                => 'Cookies má verða sett til fyri at innrita á {{SITENAME}}.',
'userlogin'                  => 'Stovna kontu ella rita inn',
'logout'                     => 'Útrita',
'userlogout'                 => 'Rita út',
'notloggedin'                => 'Ikki ritað inn',
'nologin'                    => 'Hevur tú ikki ein brúkara? $1.',
'nologinlink'                => 'Stovna eina kontu',
'createaccount'              => 'Stovna nýggja kontu',
'gotaccountlink'             => 'Rita inn',
'createaccountmail'          => 'eftur t-posti',
'badretype'                  => 'Loyniorðið tú hevur skriva er ikki rætt.',
'youremail'                  => 'T-postur (sjálvboðið)*:',
'username'                   => 'Brúkaranavn:',
'uid'                        => 'Brúkara ID:',
'yourrealname'               => 'Títt navn*:',
'yourlanguage'               => 'Mál til brúkaraflatu:',
'yournick'                   => 'Títt eyknevni (til undirskriftir):',
'email'                      => 'T-post',
'loginerror'                 => 'Innritanarbrek',
'noname'                     => 'Tú hevur ikki skrivað eitt gyldugt brúkaranavn.',
'loginsuccesstitle'          => 'Innritan væleydnað',
'loginsuccess'               => "'''Tú hevur nú ritað inn í {{SITENAME}} sum \"\$1\".'''",
'wrongpassword'              => 'Loyniorðið, sum tú skrivaði, er skeivt. Vinaliga royn aftur.',
'wrongpasswordempty'         => 'Loyniorð manglar. Vinarliga royn aftur.',
'mailmypassword'             => 'Send mær eitt nýtt loyniorð',
'acct_creation_throttle_hit' => 'Tíverri hevur tú longu stovnað $1 kontur. Tú kanst ikki stovna fleiri.',
'emailauthenticated'         => 'Tín t-post adressa fekk gildi $1.',
'emailnotauthenticated'      => 'Tín t-post adressa er enn ikki komin í gildi. Ongin t-postur
verður sendur fyri nakað av fylgjandi hentleikum.',
'emailconfirmlink'           => 'Vátta tína t-post adressu',
'accountcreated'             => 'Konto upprættað',

# Edit page toolbar
'italic_sample'   => 'Skákstavir',
'link_sample'     => 'Slóðarheiti',
'link_tip'        => 'Innanhýsis slóð',
'extlink_sample'  => 'http://www.dømi.fo slóðarheiti',
'headline_sample' => 'Yvirskrift tekstur',
'headline_tip'    => 'Snið 2 yvirskrift',
'nowiki_tip'      => 'Ignorera wiki forsniðan',
'image_sample'    => 'Dømi.jpg',
'media_sample'    => 'Dømi.ogg',
'sig_tip'         => 'Tín undurskrift við tíðarstempli',
'hr_tip'          => 'Vatnrøtt linja (vera sparin við)',

# Edit pages
'summary'              => 'Samandráttur',
'minoredit'            => 'Hetta er smábroyting',
'watchthis'            => 'Hav eftirlit við hesi síðuni',
'savearticle'          => 'Goym síðu',
'preview'              => 'Forskoðan',
'showpreview'          => 'Forskoðan',
'showlivepreview'      => 'Beinleiðis forskoðan',
'showdiff'             => 'Sýn broytingar',
'anoneditwarning'      => "'''Ávaring:''' Tú hevur ikki [[Special:Userlogin|ritað inn]]. Tín IP-adressa verður goymd í rættisøguni fyri hesa síðuna.",
'summary-preview'      => 'Samandráttaforskoðan',
'blockedtitle'         => 'Brúkarin er bannaður',
'loginreqtitle'        => 'Innritan kravd',
'loginreqlink'         => 'rita inn',
'accmailtitle'         => 'Loyniorð sent.',
'accmailtext'          => 'Loyniorð fyri "$1" er sent til $2.',
'newarticle'           => '(Nýggj)',
'newarticletext'       => "Tú ert komin eftir eini slóð til eina síðu, ið ikki er til enn. Skriva í kassan niðanfyri, um tú vilt byrja uppá hesa síðuna.
(Sí [[{{MediaWiki:helppage}}|hjálparsíðuna]] um tú ynskir fleiri upplýsingar).
Ert tú komin higar av einum mistaki, kanst tú trýsta á '''aftur'''-knøttin á kagaranum.",
'anontalkpagetext'     => "----''Hetta er ein kjaksíða hjá einum dulnevndum brúkara, sum ikki hevur stovnað eina kontu enn, ella ikki brúkar hana. Tí noyðast vit at brúka nummerisku [[IP-adressa|IP-adressuna]] hjá honum ella henni. Ein slík IP-adressa kann verða brúkt av fleiri brúkarum. Ert tú ein dulnevndur brúkari, og kennir, at óvikomandi viðmerkingar eru vendar til tín, so vinarliga [[Serstakur:Userlogin|stovna eina kontu]] fyri at sleppa undan samanblanding við aðrar dulnevndar brúkarar í framtíðini.''",
'previewnote'          => '<strong>Minst til at hetta bara er ein forskoðan, sum enn ikki er goymd!</strong>',
'previewconflict'      => 'Henda forskoðanin vísir tekstin í erva soleiðis sum hann sær út, um tú velur at goyma.',
'editing'              => 'Tú rættar $1',
'editingcomment'       => 'Tú rættar $1 (viðmerking)',
'yourtext'             => 'Tín tekstur',
'yourdiff'             => 'Munir',
'copyrightwarning'     => "Alt íkast til {{SITENAME}} er útgivið undir $2 (sí $1 fyri smálutir). Vilt tú ikki hava skriving tína broytta miskunnarleyst og endurspjadda frítt, so send hana ikki inn.<br />
Við at senda arbeiði títt inn, lovar tú, at tú hevur skrivað tað, ella at tú hevur avritað tað frá tilfeingi ið er almenn ogn &#8212; hetta umfatar '''ikki''' flestu vevsíður. 
<strong>IKKI SENDA UPPHAVSRÆTTARVART TILFAR UTTAN LOYVI!</strong>",
'longpagewarning'      => '<strong>ÁVARING: Henda síðan er $1 kilobýt long.
Summir sneytarar kunnu hava trupulleikar við at viðgerða síður upp ímóti ella longri enn 32kb.
Vinarliga umhugsa at býta síðuna sundur í styttri pettir.</strong>',
'protectedpagewarning' => '<strong>ÁVARING: Henda síðan er friðað, so at einans brúkarar við umboðsstjóraheimildum kunnu broyta hana.</strong>',
'templatesused'        => 'Fyrimyndir brúktar á hesu síðu:',
'templatesusedpreview' => 'Fyrimyndir brúktar í hesari forskoðan:',
'template-protected'   => '(friðað)',

# History pages
'revhistory'          => 'Endurskoðanar søga',
'viewpagelogs'        => 'Sí logg fyri hesa grein',
'loadhist'            => 'Lesur síðusøgu',
'currentrev'          => 'Núverandi endurskoðan',
'previousrevision'    => '←Eldri endurskoðan',
'nextrevision'        => 'Nýggjari endurskoðan→',
'currentrevisionlink' => 'Núverandi endurskoðan',
'cur'                 => 'nú',
'next'                => 'næst',
'last'                => 'síðst',
'page_last'           => 'síðsta',
'histlegend'          => 'Frágreiðing:<br />
(nú) = munur til núverandi útgávu,
(síðst) = munur til síðsta útgávu, m = minni rættingar',
'deletedrev'          => '[strikað]',
'histfirst'           => 'Elsta',
'histlast'            => 'Nýggjasta',
'historysize'         => '({{PLURAL:$1|1 být|$1 být}})',
'historyempty'        => '(tóm)',

# Revision deletion
'rev-delundel' => 'skoða/fjal',

# Diffs
'difference' => '(Munur millum endurskoðanir)',
'lineno'     => 'Linja $1:',
'editundo'   => 'afturstilla',

# Search results
'searchresults'     => 'Leitúrslit',
'searchresulttext'  => 'Ynskir tú fleiri upplýsingar um leiting á {{SITENAME}}, kanst tú skoða [[{{MediaWiki:helppage}}|{{int:help}}]].',
'noexactmatch'      => "'''Ongin síða við heitinum \"\$1\" er til''' Tú kanst [[:\$1|býrja uppá eina grein við hesum heitinum]].",
'notitlematches'    => 'Onki síðuheiti samsvarar',
'notextmatches'     => 'Ongin síðutekstur samsvarar',
'prevn'             => 'undanfarnu $1',
'nextn'             => 'næstu $1',
'viewprevnext'      => 'Vís ($1) ($2) ($3).',
'showingresults'    => "Niðanfyri standa upp til {{PLURAL:$1|'''$1''' úrslit, sum byrjar|'''$1''' úrslit, sum byrja}} við #<b>$2</b>.",
'showingresultsnum' => "Niðanfyri standa {{PLURAL:$3|'''1''' úrslit, sum byrjar|'''$3''' úrslit, sum byrja}} við #<b>$2</b>.",
'powersearch'       => 'Leita',
'powersearchtext'   => 'Leita í navnaøki:<br />$1<br />$2 Sýn ávísingar<br />Leita eftur $3 $9',

# Preferences page
'preferences'             => 'Innstillingar',
'mypreferences'           => 'Mínar innstillingar',
'prefsnologin'            => 'Tú hevur ikki ritað inn',
'qbsettings-none'         => 'Eingin',
'qbsettings-fixedleft'    => 'Fast vinstru',
'qbsettings-fixedright'   => 'Fast høgru',
'qbsettings-floatingleft' => 'Flótandi vinstru',
'changepassword'          => 'Broyt loyniorð',
'dateformat'              => 'Dato forsnið',
'datetime'                => 'Dato og tíð',
'prefs-personal'          => 'Brúkaradáta',
'prefs-rc'                => 'Nýkomnar broytingar og stubbaskoðan',
'prefs-watchlist'         => 'Eftirlit',
'prefs-misc'              => 'Ymiskar innstillingar',
'saveprefs'               => 'Goym innstillingar',
'resetprefs'              => 'Endurset innstillingar',
'oldpassword'             => 'Gamalt loyniorð:',
'newpassword'             => 'Nýtt loyniorð:',
'retypenew'               => 'Skriva nýtt loyniorð umaftur:',
'textboxsize'             => 'Broyting av greinum',
'columns'                 => 'Teigar:',
'searchresultshead'       => 'Leita',
'contextlines'            => 'Linjur fyri hvørt úrslit:',
'contextchars'            => 'Tekin fyri hvørja linju í úrslitinum:',
'recentchangescount'      => 'Heiti í seinastu broytingum:',
'localtime'               => 'Lokal klokka',
'guesstimezone'           => 'Fyll út við kagara',
'allowemail'              => 'Tilset t-post frá øðrum brúkarum',
'defaultns'               => 'Leita í hesum navnarúminum sum fyrisett mál:',
'files'                   => 'Fílur',

# User rights
'saveusergroups' => 'Goym brúkaraflokk',

# Groups
'group-bot'        => 'Bottar',
'group-sysop'      => 'Umboðsstjórar',
'group-bureaucrat' => 'Embætismenn',

'group-bot-member'        => 'Bottur',
'group-sysop-member'      => 'Umboðsstjóri',
'group-bureaucrat-member' => 'Embætismaður',

'grouppage-bot'        => '{{ns:project}}:Bottar',
'grouppage-sysop'      => '{{ns:project}}:Umboðsstjórar',
'grouppage-bureaucrat' => '{{ns:project}}:Embætismenn',

# Recent changes
'nchanges'        => '$1 {{PLURAL:$1|broyting|broytingar}}',
'recentchanges'   => 'Seinastu broytingar',
'rcnote'          => "Niðanfyri {{PLURAL:$1|stendur '''1''' tann seinasta broytingin|standa '''$1''' tær seinastu broytingarnar}} {{PLURAL:$2|seinasta dagin|seinastu '''$2''' dagarnar}}, frá $3.",
'rcnotefrom'      => 'Niðanfyri standa broytingarnar síðani <b>$2</b>, (upp til <b>$1</b> er sýndar).',
'rclistfrom'      => 'Sýn nýggjar broytingar byrjandi við $1',
'rcshowhideminor' => '$1 minni rættingar',
'rcshowhideliu'   => '$1 skrásettar brúkarar',
'rcshowhideanons' => '$1 navnleysar brúkarar',
'rcshowhidemine'  => '$1 mínar rættingar',
'rclinks'         => 'Sýn seinastu $1 broytingarnar seinastu $2 dagarnar<br />$3',
'diff'            => 'munur',
'hist'            => 'søga',
'hide'            => 'fjal',
'show'            => 'Skoða',

# Recent changes linked
'recentchangeslinked' => 'Viðkomandi broytingar',

# Upload
'upload'            => 'Legg fílu upp',
'uploadbtn'         => 'Legg fílu upp',
'uploadnologin'     => 'Ikki ritað inn',
'uploadnologintext' => 'Tú mást hava [[Special:Userlogin|ritað inn]]
fyri at leggja fílur upp.',
'uploadlog'         => 'fílu logg',
'uploadlogpage'     => 'Fílu logg',
'filedesc'          => 'Samandráttur',
'fileuploadsummary' => 'Samandráttur:',
'uploadedfiles'     => 'Upplagdar fílur',
'ignorewarnings'    => 'Ikki vísa ávaringar',
'badfilename'       => 'Myndin er umnevnd til "$1".',
'successfulupload'  => 'Upplegging væleydnað',
'savefile'          => 'Goym fílu',
'uploadedimage'     => 'sent "[[$1]]" upp',
'sourcefilename'    => 'Keldufílunavn',
'destfilename'      => 'Málfílunavn',
'watchthisupload'   => 'Hav eftirlit við hesi síðuni',

'license' => 'Loyvi',

# Image list
'imagelist'      => 'Myndalisti',
'ilsubmit'       => 'Leita',
'filehist-user'  => 'Brúkari',
'imagelinks'     => 'Myndarslóðir',
'imagelist_name' => 'Navn',
'imagelist_user' => 'Brúkari',

# File deletion
'filedelete'        => 'Strika $1',
'filedelete-submit' => 'Strika',

# List redirects
'listredirects' => 'Sýn ávísingar',

# Unused templates
'unusedtemplates'    => 'Óbrúktar fyrimyndir',
'unusedtemplateswlh' => 'aðrar slóðir',

# Random page
'randompage' => 'Tilvildarlig síða',

# Statistics
'statistics' => 'Hagtøl',
'userstats'  => 'Brúkarahagtøl',

'disambiguations'     => 'Síður við fleirfaldum týdningi',
'disambiguationspage' => 'Template:Fleiri týdningar',

'doubleredirects'     => 'Tvífaldað ávísing',
'doubleredirectstext' => '<b>Gevið gætur:</b> Hetta yvirlitið kann innihalda skeiv úrslit. Tað merkir vanliga at síðan hevur eyka tekst niðanfyri fyrsta #REDIRECT.<br />
Hvørt rað inniheldur slóðir til fyrstu og aðru ávísing, umframt tekstin á fyrstu reglu í aðru ávísing, sum vanliga vísir til "veruligu" málsíðuna, sum fyrsta ávísingin eigur at vísa til.',

'brokenredirects'        => 'Brotnar ávísingar',
'brokenredirects-edit'   => '(rætta)',
'brokenredirects-delete' => '(strika)',

'fewestrevisions' => 'Greinir við minst útgávum',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|být|být}}',
'ncategories'             => '$1 {{PLURAL:$1|bólkur|bólkar}}',
'nlinks'                  => '$1 {{PLURAL:$1|slóð|slóðir}}',
'nmembers'                => '$1 {{PLURAL:$1|limur|limir}}',
'nviews'                  => '$1 {{PLURAL:$1|skoðan|skoðanir}}',
'lonelypages'             => 'Foreldraleysar síður',
'uncategorizedpages'      => 'Óbólkaðar síður',
'uncategorizedcategories' => 'Óbólkaðir bólkar',
'unusedimages'            => 'Óbrúktar myndir',
'popularpages'            => 'Umtóktar síður',
'wantedpages'             => 'Ynsktar síður',
'mostcategories'          => 'Greinir við flest bólkum',
'mostrevisions'           => 'Greinir við flest útgávum',
'allpages'                => 'Allar síður',
'shortpages'              => 'Stuttar síður',
'longpages'               => 'Langar síður',
'deadendpages'            => 'Gøtubotns síður',
'protectedpages'          => 'Friðaðar síður',
'listusers'               => 'Brúkaralisti',
'specialpages'            => 'Serligar síður',
'spheading'               => 'Serligar síður til allar brúkarar',
'newpages'                => 'Nýggjar síður',
'newpages-username'       => 'Brúkaranavn:',
'ancientpages'            => 'Elstu síður',
'intl'                    => 'Slóðir millum mál',
'move'                    => 'Flyt',
'movethispage'            => 'Flyt hesa síðuna',
'unusedimagestext'        => '<p>Vinarliga legg merki til, at vevsíður kunnu slóða til eina mynd við
beinleiðis URL, so hon kann síggjast her hóast at hon er
í regluligari nýtslu.</p>',
'notargettitle'           => 'Onki mál',

# Book sources
'booksources-go' => 'Far',

'categoriespagetext' => 'Eftirfylgjandi bólkar eru í hesu wiki.',
'data'               => 'Dáta',
'alphaindexline'     => '$1 til $2',
'version'            => 'Útgáva',

# Special:Log
'specialloguserlabel'  => 'Brúkari:',
'speciallogtitlelabel' => 'Heitið:',
'log'                  => 'Gerðabøkur',
'log-search-submit'    => 'Far',
'alllogstext'          => 'Samansett sýning av upplegging, striking, friðing, forðing og sysop-gerðabókum.
Tú kanst avmarka sýningina við at velja gerðabókaslag, brúkaranavn ella ávirkaðu síðuna.',

# Special:Allpages
'nextpage'       => 'Næsta síða ($1)',
'prevpage'       => 'Fyrrverandi síða ($1)',
'allarticles'    => 'Allar greinir',
'allinnamespace' => 'Allar síður ($1 navnarúm)',
'allpagesprev'   => 'Undanfarnu',
'allpagesnext'   => 'Næstu',
'allpagessubmit' => 'Far',

# Special:Listusers
'listusersfrom'      => 'Vís brúkarar ið byrja við:',
'listusers-submit'   => 'Sýna',
'listusers-noresult' => 'Ongin brúkari var funnin.',

# E-mail user
'emailuser'       => 'Send t-post til brúkara',
'emailpage'       => 'Send t-post til brúkara',
'defemailsubject' => '{{SITENAME}} t-postur',
'noemailtitle'    => 'Ongin t-post adressa',
'noemailtext'     => 'Hesin brúkarin hevur ikki upplýst eina gylduga t-post-adressu,
ella hevur hann valt ikki at taka ímóti t-posti frá øðrum brúkarum.',
'emailfrom'       => 'Frá',
'emailto'         => 'Til',
'emailsubject'    => 'Evni',
'emailmessage'    => 'Boð',
'emailsent'       => 'T-postur sendur',
'emailsenttext'   => 'Títt t-post boð er sent.',

# Watchlist
'watchlist'            => 'Mítt eftirlit',
'mywatchlist'          => 'Mítt eftirlit',
'watchlistfor'         => "(fyri '''$1''')",
'nowatchlist'          => 'Tú hevur ongar lutir í eftirlitinum.',
'watchnologin'         => 'Tú hevur ikki ritað inn',
'addedwatch'           => 'Lagt undir eftirlit',
'addedwatchtext'       => "Síðan \"\$1\" er løgd undir [[Special:Watchlist|eftirlit]] hjá tær.
Framtíðar broytingar á hesi síðu og tilknýttu kjaksíðuni verða at síggja her.
Tá sæst síðan sum '''feit skrift''' í [[Special:Recentchanges|broytingaryvirlitinum]] fyri at gera hana lættari at síggja.

Vilt tú flyta síðuna undan tínum eftirliti, kanst tú trýsta á \"Strika eftirlit\" á síðuni.",
'removedwatch'         => 'Strikað úr eftirliti',
'removedwatchtext'     => 'Síðan "[[:$1]]" er strikað úr tínum eftirliti.',
'watch'                => 'Eftirlit',
'watchthispage'        => 'Hav eftirlit við hesi síðuni',
'unwatch'              => 'strika eftirlit',
'watchnochange'        => 'Ongin grein í tínum eftirliti er rætta innanfyri hetta tíðarskeiði.',
'watchmethod-list'     => 'kannar síður undir eftirliti fyri feskar broytingar',
'watchlistcontains'    => 'Títt eftirlit inniheldur {{PLURAL:$1|eina síðu|$1 síður}}.',
'wlnote'               => "Niðanfyri {{PLURAL:$1|stendur seinastu broytingina|standa seinastu '''$1''' broytingarnar}} {{PLURAL:$2|seinasta tíman|seinastu '''$2''' tímarnar}}.",
'wlshowlast'           => 'Vís seinastu $1 tímar $2 dagar $3',
'watchlist-show-bots'  => 'Vís bot rættingar',
'watchlist-hide-bots'  => 'Fjal bot rættingar',
'watchlist-show-own'   => 'Vís mínar rættingar',
'watchlist-hide-own'   => 'Fjal mínar rættingar',
'watchlist-show-minor' => 'Vís minni rættingar',
'watchlist-hide-minor' => 'Fjal minni rættingar',

'enotif_newpagetext'           => 'Hetta er ein nýggj síða.',
'enotif_impersonal_salutation' => '{{SITENAME}}brúkari',
'created'                      => 'stovnað',

# Delete/protect/revert
'deletepage'         => 'Strika síðu',
'confirm'            => 'Vátta',
'excontent'          => "innihald var: '$1'",
'exblank'            => 'síðan var tóm',
'confirmdelete'      => 'Vátta striking',
'historywarning'     => 'Ávaring: Síðan, ið tú ert í gongd við at strika, hevur eina søgu:',
'confirmdeletetext'  => 'Tú ert í gongd við endaliga at strika ein a síðu
ella mynd saman við allari søgu úr dátugrunninum.
Vinarliga vátta at tú ætlar at gera hetta, at tú skilur
avleiðingarnar og at tú gert tað í tráð við
[[{{MediaWiki:policy-url}}]].',
'actioncomplete'     => 'Verkið er fullgjørt',
'deletedtext'        => '"$1" er nú strikað.
Sí $2 fyri fulla skráseting av strikingum.',
'deletedarticle'     => 'strikaði "[[$1]]"',
'dellogpage'         => 'Striku logg',
'deletionlog'        => 'striku logg',
'deletecomment'      => 'Orsøk til striking',
'rollback_short'     => 'Rulla aftur',
'rollbacklink'       => 'afturrulling',
'rollbackfailed'     => 'Afturrulling miseydnað',
'protectlogpage'     => 'Friðingarbók',
'protectedarticle'   => 'friðaði "[[$1]]"',
'unprotectedarticle' => 'ófriðaði "[[$1]]"',
'confirmprotect'     => 'Vátta friðing',
'pagesize'           => '(být)',

# Undelete
'undelete'               => 'Endurstovna strikaðar síður',
'undeletebtn'            => 'Endurstovna',
'undeletereset'          => 'Endurset',
'undeletedarticle'       => 'endurstovnaði "[[$1]]"',
'undeletedfiles'         => '{{PLURAL:$1|1 fíla endurstovna|$1 fílur endurstovnaðar}}',
'undelete-search-submit' => 'Leita',

# Namespace form on various pages
'namespace'      => 'Navnarúm:',
'invert'         => 'Umvend val',
'blanknamespace' => '(Greinir)',

# Contributions
'contributions' => 'Brúkaraíkast',
'mycontris'     => 'Mítt íkast',
'contribsub2'   => 'Eftir $1 ($2)',
'uclinks'       => 'Skoða seinastu $1 broytingarnar; skoða seinastu $2 dagarnar.',
'uctop'         => ' (ovast)',
'month'         => 'Frá mánaði (og áðrenn):',
'year'          => 'Frá ár (og áðrenn):',

'sp-contributions-newest'   => 'Nýggjasta',
'sp-contributions-oldest'   => 'Elsta',
'sp-contributions-newer'    => 'Nýggjari $1',
'sp-contributions-older'    => 'Eldri $1',
'sp-contributions-newbies'  => 'Vís bert íkast frá nýggjum kontoum',
'sp-contributions-search'   => 'Leita eftir íkøstum',
'sp-contributions-username' => 'IP adressa ella brúkaranavn:',
'sp-contributions-submit'   => 'Leita',

# What links here
'whatlinkshere'       => 'Hvat slóðar higar',
'isredirect'          => 'ávísingarsíða',
'whatlinkshere-prev'  => '{{PLURAL:$1|fyrrverandi|fyrrverandi $1}}',
'whatlinkshere-next'  => '{{PLURAL:$1|næst|næstu $1}}',
'whatlinkshere-links' => '← slóðir',

# Block/unblock
'blockip'              => 'Banna brúkara',
'ipaddress'            => 'IP-adressa:',
'ipadressorusername'   => 'IP-adressa ella brúkaranavn:',
'ipbreason'            => 'Orsøk:',
'ipbsubmit'            => 'Banna henda brúkaran',
'badipaddress'         => 'Ógyldug IP-adressa',
'blockipsuccesssub'    => 'Banning framd',
'ipb-unblock-addr'     => 'Óbanna $1',
'ipusubmit'            => 'Óbanna hesa adressuna',
'ipblocklist-username' => 'Brúkaranavn ella IP-adressa:',
'ipblocklist-submit'   => 'Leita',
'blocklink'            => 'banna',
'unblocklink'          => 'óbanna',
'contribslink'         => 'íkøst',
'unblocklogentry'      => 'óbannaði $1',

# Move page
'movepage'                => 'Flyt síðu',
'movearticle'             => 'Flyt síðu:',
'movenologin'             => 'Hevur ikki ritað inn',
'newtitle'                => 'Til nýtt heiti:',
'move-watch'              => 'Hav eftirlit við hesi síðuni',
'movepagebtn'             => 'Flyt síðu',
'movepage-moved'          => '<big>\'\'\'"$1" er flutt til "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Ein síða finst longu við hasum navninum,
ella er navnið tú valdi ógyldugt.
Vinarliga vel eitt annað navn.',
'movedto'                 => 'flyt til',
'movetalk'                => 'Flyt kjaksíðuna eisini, um hon er til.',
'1movedto2'               => '$1 flutt til $2',
'1movedto2_redir'         => '$1 flutt til $2 um ávísing',
'movelogpage'             => 'Flyti logg',
'movereason'              => 'Orsøk:',
'delete_and_move'         => 'Strika og flyt',
'delete_and_move_confirm' => 'Ja, strika hesa síðuna',
'delete_and_move_reason'  => 'Strika til at gera pláss til flyting',

# Namespace 8 related
'allmessages'               => 'Øll kervisboð',
'allmessagesname'           => 'Navn',
'allmessagesdefault'        => 'Enskur tekstur',
'allmessagescurrent'        => 'Verandi tekstur',
'allmessagestext'           => 'Hetta er eitt yvirlit av tøkum kervisboðum í MediaWiki-navnarúmi.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:AllMessages''' er ikki stuðlað orsakað av at '''\$wgUseDatabaseMessages''' er sløkt.",
'allmessagesfilter'         => 'Boð navn filtur:',
'allmessagesmodified'       => 'Vís bert broytt',

# Thumbnails
'thumbnail-more' => 'Víðka',

# Special:Import
'import'                  => 'Innflyt síður',
'import-interwiki-submit' => 'Innflyta',

# Tooltip help for the actions
'tooltip-pt-userpage'           => 'Mín brúkarasíða',
'tooltip-pt-mytalk'             => 'Mín kjaksíða',
'tooltip-pt-preferences'        => 'Mínir stillingar',
'tooltip-pt-logout'             => 'Rita út',
'tooltip-ca-talk'               => 'Umrøða av innihaldssíðuni',
'tooltip-ca-edit'               => 'Tú kanst broyta hesa síðuna. Vinarliga nýt forskoðanarknøttin áðrenn tú goymir.',
'tooltip-ca-addsection'         => 'Skriva viðmerking til hesa umrøðuna.',
'tooltip-ca-viewsource'         => 'Henda síðan er friðað. Tú kanst síggja keldukotuna.',
'tooltip-ca-history'            => 'Fyrrverandi útgávur av hesi síðu.',
'tooltip-ca-protect'            => 'Friða hesa síðuna',
'tooltip-ca-delete'             => 'Strika hesa síðuna',
'tooltip-ca-undelete'           => 'Endurnýggja skrivingina á hesi síðu áðrenn hon varð strikað',
'tooltip-ca-move'               => 'Flyt hesa síðuna',
'tooltip-ca-watch'              => 'Legg hesa síðuna undir mítt eftirlit',
'tooltip-ca-unwatch'            => 'Fá hesa síðuna úr mínum eftirliti',
'tooltip-search'                => 'Leita {{SITENAME}}',
'tooltip-p-logo'                => 'Forsíða',
'tooltip-n-mainpage'            => 'Vitja høvuðssíðuna',
'tooltip-n-portal'              => 'Um verkætlanina, hvat tú kanst gera, hvar tú finnur ymiskt',
'tooltip-n-currentevents'       => 'Finn bakgrundsupplýsingar um aktuellar hendingar',
'tooltip-n-randompage'          => 'Far til tilvildarliga síðu',
'tooltip-n-help'                => 'Staðurin at finna út.',
'tooltip-n-sitesupport'         => 'Stuðla okkum',
'tooltip-t-whatlinkshere'       => 'Yvirlit yvir allur wikur, ið slóða higar',
'tooltip-t-recentchangeslinked' => 'Broytingar á síðum, ið slóða higar, í seinastuni',
'tooltip-feed-rss'              => 'RSS-fóðurið til hesa síðuna',
'tooltip-feed-atom'             => 'Atom-fóðurið til hesa síðuna',
'tooltip-t-contributions'       => 'Skoða yvirlit yvir íkast hjá hesum brúkara',
'tooltip-t-emailuser'           => 'Send post til henda brúkaran',
'tooltip-t-upload'              => 'Legg myndir ella miðlafílur upp',
'tooltip-t-specialpages'        => 'Yvirlit yvir serliga síður',
'tooltip-ca-nstab-main'         => 'Skoða innihaldssíðuna',
'tooltip-ca-nstab-user'         => 'Skoða brúkarasíðuna',
'tooltip-ca-nstab-media'        => 'Skoða miðlasíðuna',
'tooltip-ca-nstab-special'      => 'Hetta er ein serlig síða. Tú kanst ikki broyta síðuna sjálv/ur.',
'tooltip-ca-nstab-project'      => 'Skoða verkætlanarsíðuna',
'tooltip-ca-nstab-image'        => 'Skoða myndasíðuna',
'tooltip-ca-nstab-mediawiki'    => 'Skoða kervisamboðini',
'tooltip-ca-nstab-template'     => 'Brúka formin',
'tooltip-ca-nstab-help'         => 'Skoða hjálparsíðuna',
'tooltip-ca-nstab-category'     => 'Skoða bólkasíðuna',

# Attribution
'anonymous' => 'Dulnevndir brúkarar í {{SITENAME}}',
'siteuser'  => '{{SITENAME}}brúkari $1',
'and'       => 'og',
'siteusers' => '{{SITENAME}}brúkari(ar) $1',

# Spam protection
'subcategorycount'       => 'Tað {{PLURAL:$1|er ein undirbólkur|eru $1 undirbólkar}} í hesum bólki.',
'categoryarticlecount'   => 'Tað {{PLURAL:$1|er ein grein|eru $1 greinir}} í hesum bólki.',
'listingcontinuesabbrev' => 'frh.',

# Info page
'infosubtitle' => 'Upplýsingar um síðu',

# Math options
'mw_math_png'    => 'Vís altíð sum PNG',
'mw_math_simple' => 'HTML um sera einfalt annars PNG',
'mw_math_html'   => 'HTML um møguligt annars PNG',
'mw_math_source' => 'Lat verða sum TeX (til tekstkagara)',
'mw_math_modern' => 'Tilmælt nýtíðarkagara',

# Browsing diffs
'previousdiff' => '← Far til fyrra mun',
'nextdiff'     => 'Far til næsta mun →',

# Special:Newimages
'newimages' => 'Nýggjar myndir',

# EXIF tags
'exif-artist' => 'Rithøvundur',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'alt',
'namespacesall' => 'alt',
'monthsall'     => 'allir',

# E-mail address confirmation
'confirmemail'          => 'Vátta t-post adressu',
'confirmemail_send'     => 'Send eina váttanarkotu',
'confirmemail_sent'     => 'Játtanar t-postur sendur.',
'confirmemail_oncreate' => 'Ein staðfesingar kota er send til tína T-post adressu.
Tað er ikki neyðugt at hava hesa kodu fyri at rita inn, men tú mást veita hana áðrenn
tú kanst nýta nakran T-post-grundaðan hentleika í hesi wiki.',
'confirmemail_loggedin' => 'Tín t-post adressa er nú váttað.',
'confirmemail_subject'  => '{{SITENAME}} váttan av T-post adressu',
'confirmemail_body'     => 'Onkur, væntandi tú frá IP adressu $1, hevur skráset eina
konti "$2" við hesu T-post adressu á {{SITENAME}}.

Fyri at vátta at hendan konti veruliga hoyrur til tín,
og fyri at aktivera T-post funktiónir á {{SITENAME}}, so skalt
tú trýsta á fylgjandi slóð í tínum kagara:

$3

Um hetta *ikki* er tú, skalt tú ikki trýsta á slóðina. Hendan váttanarkoda
fer úr gildi tann $4.',

# action=purge
'confirm_purge_button' => 'Í lagi',

# AJAX search
'hideresults' => 'Fjal úrslit',

# Multipage image navigation
'imgmultipageprev' => '← fyrrverandi síða',
'imgmultipagenext' => 'næsta síða →',
'imgmultigo'       => 'Far!',

# Table pager
'table_pager_next'         => 'Næsta síða',
'table_pager_prev'         => 'Fyrrverandi síða',
'table_pager_limit_submit' => 'Far',

# Auto-summaries
'autosumm-new' => 'Nýggj síða: $1',

# Watchlist editor
'watchlistedit-normal-title' => 'Rætta eftirlit',
'watchlistedit-raw-title'    => 'Rætta rátt eftirlit',
'watchlistedit-raw-legend'   => 'Rætta rátt eftirlit',

# Watchlist editing tools
'watchlisttools-view' => 'Vís viðkomandi broytingar',
'watchlisttools-edit' => 'Vís og rætta eftirlit',
'watchlisttools-raw'  => 'Rætta rátt eftirlit',

);
