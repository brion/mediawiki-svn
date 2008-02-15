<?php
/** Dutch (Nederlands)
 *
 * @addtogroup Language
 *
 * @author Extended by Hendrik Maryns <hendrik.maryns@uni-tuebingen.de>, March 2007.
 * @author Siebrand
 * @author SPQRobin
 * @author GerardM
 * @author Hamaryns
 * @author Troefkaart
 * @author Galwaygirl
 * @author Effeietsanders
 * @author Nike
 * @author לערי ריינהארט
 * @author Erwin85
 * @author Annabel
 */

$separatorTransformTable = array(',' => '.', '.' => ',' );

$namespaceNames = array(
	NS_MEDIA          => 'Media',
	NS_SPECIAL        => 'Speciaal',
	NS_MAIN           => '',
	NS_TALK           => 'Overleg',
	NS_USER           => 'Gebruiker',
	NS_USER_TALK      => 'Overleg_gebruiker',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => 'Overleg_$1',
	NS_IMAGE          => 'Afbeelding',
	NS_IMAGE_TALK     => 'Overleg_afbeelding',
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => 'Overleg_MediaWiki',
	NS_TEMPLATE       => 'Sjabloon',
	NS_TEMPLATE_TALK  => 'Overleg_sjabloon',
	NS_HELP           => 'Help',
	NS_HELP_TALK      => 'Overleg_help',
	NS_CATEGORY       => 'Categorie',
	NS_CATEGORY_TALK  => 'Overleg_categorie'
);

$skinNames = array(
	'standard'    => 'Klassiek',
	'nostalgia'   => 'Nostalgie',
	'cologneblue' => 'Keuls blauw',
	'monobook'    => 'Monobook',
	'myskin'      => 'MijnSkin',
	'simple'      => 'Eenvoudig',
	'modern'      => 'Modern',
);

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'M j, Y',
	'mdy both' => 'M j, Y H:i',

	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'j M Y H:i',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'Y M j H:i',
);

$bookstoreList = array(
	'Koninklijke Bibliotheek' => 'http://opc4.kb.nl/DB=1/SET=5/TTL=1/CMD?ACT=SRCH&IKT=1007&SRT=RLV&TRM=$1'
);

$magicWords = array(
	'redirect'            => array( '0', '#REDIRECT', '#DOORVERWIJZING' ),
	'notoc'               => array( '0', '__NOTOC__', '__GEENINHOUD__' ),
	'nogallery'           => array( '0', '__NOGALLERY__', '__GEEN_GALERIJ__' ),
	'forcetoc'            => array( '0', '__FORCETOC__', '__INHOUD_DWINGEN__', '__FORCEERINHOUD__' ),
	'toc'                 => array( '0', '__TOC__', '__INHOUD__' ),
	'noeditsection'       => array( '0', '__NOEDITSECTION__', '__NIETBEWERKBARESECTIE__' ),
	'currentmonth'        => array( '1', 'CURRENTMONTH', 'HUIDIGEMAAND' ),
	'currentmonthname'    => array( '1', 'CURRENTMONTHNAME', 'HUIDIGEMAANDNAAM' ),
	'currentmonthnamegen' => array( '1', 'CURRENTMONTHNAMEGEN', 'HUIDIGEMAANDGEN' ),
	'currentmonthabbrev'  => array( '1', 'CURRENTMONTHABBREV', 'HUIDIGEMAANDAFK' ),
	'currentday'          => array( '1', 'CURRENTDAY', 'HUIDIGEDAG' ),
	'currentday2'         => array( '1', 'CURRENTDAY2', 'HUIDIGEDAG2' ),
	'currentdayname'      => array( '1', 'CURRENTDAYNAME', 'HUIDIGEDAGNAAM' ),
	'currentyear'         => array( '1', 'CURRENTYEAR', 'HUIDIGJAAR' ),
	'currenttime'         => array( '1', 'CURRENTTIME', 'HUIDIGETIJD' ),
	'currenthour'         => array( '1', 'CURRENTHOUR', 'HUIDIGUUR' ),
	'localmonth'          => array( '1', 'LOCALMONTH', 'PLAATSELIJKEMAAND', 'LOKALEMAAND' ),
	'localmonthname'      => array( '1', 'LOCALMONTHNAME', 'PLAATSELIJKEMAANDNAAM', 'LOKALEMAANDNAAM' ),
	'localmonthnamegen'   => array( '1', 'LOCALMONTHNAMEGEN', 'PLAATSELIJKEMAANDNAAMGEN', 'LOKALEMAANDNAAMGEN' ),
	'localmonthabbrev'    => array( '1', 'LOCALMONTHABBREV', 'PLAATSELIJKEMAANDAFK', 'LOKALEMAANDAFK' ),
	'localday'            => array( '1', 'LOCALDAY', 'PLAATSELIJKEDAG', 'LOKALEDAG' ),
	'localday2'           => array( '1', 'LOCALDAY2', 'PLAATSELIJKEDAG2', 'LOKALEDAG2' ),
	'localdayname'        => array( '1', 'LOCALDAYNAME', 'PLAATSELIJKEDAGNAAM', 'LOKALEDAGNAAM' ),
	'localyear'           => array( '1', 'LOCALYEAR', 'PLAATSELIJKJAAR', 'LOKAALJAAR' ),
	'localtime'           => array( '1', 'LOCALTIME', 'PLAATSELIJKETIJD', 'LOKALETIJD' ),
	'localhour'           => array( '1', 'LOCALHOUR', 'PLAATSELIJKUUR', 'LOKAALUUR' ),
	'numberofpages'       => array( '1', 'NUMBEROFPAGES', 'AANTALPAGINAS', 'AANTALPAGINA\'S', 'AANTALPAGINA’S' ),
	'numberofarticles'    => array( '1', 'NUMBEROFARTICLES', 'AANTALARTIKELEN' ),
	'numberoffiles'       => array( '1', 'NUMBEROFFILES', 'AANTALBESTANDEN' ),
	'numberofusers'       => array( '1', 'NUMBEROFUSERS', 'AANTALGEBRUIKERS' ),
	'numberofedits'       => array( '1', 'NUMBEROFEDITS', 'AANTALBEWERKINGEN' ),
	'pagename'            => array( '1', 'PAGENAME', 'PAGINANAAM' ),
	'pagenamee'           => array( '1', 'PAGENAMEE', 'PAGINANAAME' ),
	'namespace'           => array( '1', 'NAMESPACE', 'NAAMRUIMTE' ),
	'namespacee'          => array( '1', 'NAMESPACEE', 'NAAMRUIMTEE' ),
	'talkspace'           => array( '1', 'TALKSPACE', 'OVERLEGRUIMTE' ),
	'talkspacee'          => array( '1', 'TALKSPACEE', 'OVERLEGRUIMTEE' ),
	'subjectspace'        => array( '1', 'SUBJECTSPACE', 'ARTICLESPACE', 'ONDERWERPRUIMTE', 'ARTIKELRUIMTE' ),
	'subjectspacee'       => array( '1', 'SUBJECTSPACEE', 'ARTICLESPACEE', 'ONDERWERPRUIMTEE', 'ARTIKELRUIMTEE' ),
	'fullpagename'        => array( '1', 'FULLPAGENAME', 'VOLLEDIGEPAGINANAAM' ),
	'fullpagenamee'       => array( '1', 'FULLPAGENAMEE', 'VOLLEDIGEPAGINANAAME' ),
	'subpagename'         => array( '1', 'SUBPAGENAME', 'DEELPAGINANAAM' ),
	'subpagenamee'        => array( '1', 'SUBPAGENAMEE', 'DEELPAGINANAAME' ),
	'basepagename'        => array( '1', 'BASEPAGENAME', 'BASISPAGINANAAM' ),
	'basepagenamee'       => array( '1', 'BASEPAGENAMEE', 'BASISPAGINANAAME' ),
	'parentpagename'      => array( '1', 'PARENTPAGENAME', 'HOGEREPAGINANAAM' ),
	'parentpagenamee'     => array( '1', 'PARENTPAGENAMEE', 'HOGEREPAGINANAAME' ),
	'rootpagename'        => array( '1', 'ROOTPAGENAME', 'WORTELPAGINANAAM' ),
	'rootpagenamee'       => array( '1', 'ROOTPAGENAMEE', 'WORTELPAGINANAAME' ),
	'talkpagename'        => array( '1', 'TALKPAGENAME', 'OVERLEGPAGINANAAM' ),
	'talkpagenamee'       => array( '1', 'TALKPAGENAMEE', 'OVERLEGPAGINANAAME' ),
	'subjectpagename'     => array( '1', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME', 'ONDERWERPPAGINANAAM', 'ARTIKELPAGINANAAM' ),
	'subjectpagenamee'    => array( '1', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE', 'ONDERWERPPAGINANAAME', 'ARTIKELPAGINANAAME' ),
	'msg'                 => array( '0', 'MSG:', 'BERICHT:' ),
	'subst'               => array( '0', 'SUBST:', 'VERV:' ),
	'msgnw'               => array( '0', 'MSGNW:', 'BERICHTNW' ),
	'img_right'           => array( '1', 'right', 'rechts' ),
	'img_left'            => array( '1', 'left', 'links' ),
	'img_none'            => array( '1', 'none', 'geen' ),
	'img_center'          => array( '1', 'center', 'centre', 'gecentreerd' ),
	'img_framed'          => array( '1', 'framed', 'enframed', 'frame', 'omkaderd' ),
	'img_frameless'       => array( '1', 'frameless', 'kaderloos' ),
	'img_page'            => array( '1', 'page=$1', 'page $1', 'pagina=$1', 'pagina $1' ),
	'img_border'          => array( '1', 'border', 'rand' ),
	'img_baseline'        => array( '1', 'baseline', 'grondlijn' ),
	'img_top'             => array( '1', 'top', 'boven' ),
	'img_text_top'        => array( '1', 'text-top', 'tekst-boven' ),
	'img_middle'          => array( '1', 'middle', 'midden' ),
	'img_bottom'          => array( '1', 'bottom', 'beneden' ),
	'img_text_bottom'     => array( '1', 'text-bottom', 'tekst-beneden' ),
	'sitename'            => array( '1', 'SITENAME', 'SITENAAM' ),
	'ns'                  => array( '0', 'NS:', 'NR:' ),
	'localurl'            => array( '0', 'LOCALURL:', 'LOKALEURL' ),
	'localurle'           => array( '0', 'LOCALURLE:', 'LOKALEURLE' ),
	'servername'          => array( '0', 'SERVERNAME', 'SERVERNAAM' ),
	'scriptpath'          => array( '0', 'SCRIPTPATH', 'SCRIPTPAD' ),
	'grammar'             => array( '0', 'GRAMMAR:', 'GRAMMATICA:' ),
	'notitleconvert'      => array( '0', '__NOTITLECONVERT__', '__NOTC__', '__GEENTITELCONVERSIE__', '__GEENTC__' ),
	'nocontentconvert'    => array( '0', '__NOCONTENTCONVERT__', '__NOCC__', '__GEENINHOUDCONVERSIE__', '__GEENIC__' ),
	'currentweek'         => array( '1', 'CURRENTWEEK', 'HUIDIGEWEEK' ),
	'currentdow'          => array( '1', 'CURRENTDOW', 'HUIDIGEDVDW' ),
	'localweek'           => array( '1', 'LOCALWEEK', 'PLAATSELIJKEWEEK', 'LOKALEWEEK' ),
	'localdow'            => array( '1', 'LOCALDOW', 'PLAATSELIJKEDVDW', 'LOKALEDVDW' ),
	'revisionid'          => array( '1', 'REVISIONID', 'VERSIEID' ),
	'revisionday'         => array( '1', 'REVISIONDAY', 'VERSIEDAG' ),
	'revisionday2'        => array( '1', 'REVISIONDAY2', 'VERSIEDAG2' ),
	'revisionmonth'       => array( '1', 'REVISIONMONTH', 'VERSIEMAAND' ),
	'revisionyear'        => array( '1', 'REVISIONYEAR', 'VERSIEJAAR' ),
	'revisiontimestamp'   => array( '1', 'REVISIONTIMESTAMP', 'VERSIETIJD' ),
	'plural'              => array( '0', 'PLURAL:', 'MEERVOUD:' ),
	'fullurl'             => array( '0', 'FULLURL:', 'VOLLEDIGEURL' ),
	'fullurle'            => array( '0', 'FULLURLE:', 'VOLLEDIGEURLE' ),
	'lcfirst'             => array( '0', 'LCFIRST:', 'KLEERSTE:' ),
	'ucfirst'             => array( '0', 'UCFIRST:', 'GLEERSTE:' ),
	'lc'                  => array( '0', 'LC:', 'KL:' ),
	'uc'                  => array( '0', 'UC:', 'HL:' ),
	'raw'                 => array( '0', 'RAW:', 'RAUW:', 'RUW:' ),
	'displaytitle'        => array( '1', 'DISPLAYTITLE', 'TOONTITEL', 'TITELTONEN' ),
	'newsectionlink'      => array( '1', '__NEWSECTIONLINK__', '__NIEUWESECTIELINK__', '__NIEUWESECTIEKOPPELING__' ),
	'currentversion'      => array( '1', 'CURRENTVERSION', 'HUIDIGEVERSIE' ),
	'urlencode'           => array( '0', 'URLENCODE:', 'URLCODEREN', 'CODEERURL' ),
	'anchorencode'        => array( '0', 'ANCHORENCODE', 'ANKERCODEREN', 'CODEERANKER' ),
	'currenttimestamp'    => array( '1', 'CURRENTTIMESTAMP', 'HUIDIGETIJDSTEMPEL' ),
	'localtimestamp'      => array( '1', 'LOCALTIMESTAMP', 'PLAATSELIJKETIJDSTEMPEL', 'LOKALETIJDSTEMPEL' ),
	'directionmark'       => array( '1', 'DIRECTIONMARK', 'DIRMARK', 'RICHTINGMARKERING', 'RICHTINGSMARKERING' ),
	'language'            => array( '0', '#LANGUAGE:', '#TAAL:' ),
	'contentlanguage'     => array( '1', 'CONTENTLANGUAGE', 'CONTENTLANG', 'INHOUDSTAAL', 'INHOUDTAAL' ),
	'pagesinnamespace'    => array( '1', 'PAGESINNAMESPACE:', 'PAGESINNS:', 'PAGINASINNAAMRUIMTE', 'PAGINA’SINNAAMRUIMTE', 'PAGINA\'SINNAAMRUIMTE' ),
	'numberofadmins'      => array( '1', 'NUMBEROFADMINS', 'AANTALBEHEERDERS', 'AANTALADMINS' ),
	'formatnum'           => array( '0', 'FORMATNUM', 'FORMATTEERNUM', 'NUMFORMATTEREN' ),
	'padleft'             => array( '0', 'PADLEFT', 'LINKSOPVULLEN' ),
	'padright'            => array( '0', 'PADRIGHT', 'RECHTSOPVULLEN' ),
	'special'             => array( '0', 'special', 'speciaal' ),
	'defaultsort'         => array( '1', 'DEFAULTSORT:', 'STANDAARDSORTERING:' ),
	'filepath'            => array( '0', 'FILEPATH:', 'BESTANDSPAD:' ),
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'DubbeleDoorverwijzingen' ),
	'BrokenRedirects'           => array( 'GebrokenDoorverwijzingen' ),
	'Disambiguations'           => array( 'Doorverwijspagina\'s', 'Doorverwijspaginas' ),
	'Userlogin'                 => array( 'Aanmelden', 'Inloggen' ),
	'Userlogout'                => array( 'Afmelden', 'Uitloggen' ),
	'CreateAccount'             => array( 'GebruikerAanmaken' ),
	'Preferences'               => array( 'Voorkeuren' ),
	'Watchlist'                 => array( 'Volglijst' ),
	'Recentchanges'             => array( 'RecenteWijzigingen' ),
	'Upload'                    => array( 'Uploaden', 'Upload' ),
	'Imagelist'                 => array( 'Afbeeldingenlijst', 'Bestandenlijst' ),
	'Newimages'                 => array( 'NieuweAfbeeldingen' ),
	'Listusers'                 => array( 'Gebruikerslijst', 'Gebruikerlijst' ),
	'Statistics'                => array( 'Statistieken' ),
	'Randompage'                => array( 'Willekeurig', 'WillekeurigePagina' ),
	'Lonelypages'               => array( 'Weespaginas', 'Weespagina\'s' ),
	'Uncategorizedpages'        => array( 'NietGecategoriseerdePaginas', 'Niet-GecategoriseerdePagina’s', 'Niet-GecategoriseerdePagina\'s' ),
	'Uncategorizedcategories'   => array( 'NietGecategoriseerdeCategorieën', 'Niet-GecategoriseerdeCategorieën' ),
	'Uncategorizedimages'       => array( 'NietGecategoriseerdeAfbeeldingen', 'Niet-GecategoriseerdeAfbeeldingen' ),
	'Uncategorizedtemplates'    => array( 'NietGecategoriseerdeSjablonen' ),
	'Unusedcategories'          => array( 'OngebruikteCategorieën' ),
	'Unusedimages'              => array( 'OngebruikteAfbeeldingen' ),
	'Wantedpages'               => array( 'GevraagdePaginas', 'GevraagdePagina\'s', 'GevraagdePagina’s' ),
	'Wantedcategories'          => array( 'GevraagdeCategorieën' ),
	'Mostlinked'                => array( 'MeestVerwezen' ),
	'Mostlinkedcategories'      => array( 'MeestVerwezenCategorieën' ),
	'Mostlinkedtemplates'       => array( 'MeestVerwezenSjablonen' ),
	'Mostcategories'            => array( 'MeesteCategorieën' ),
	'Mostimages'                => array( 'MeesteAfbeeldingen' ),
	'Mostrevisions'             => array( 'MeesteVersies', 'MeesteHerzieningen', 'MeesteRevisies' ),
	'Fewestrevisions'           => array( 'MinsteVersies', 'MinsteHerzieningen', 'MinsteRevisies' ),
	'Shortpages'                => array( 'KortePaginas', 'KortePagina’s', 'KortePagina\'s' ),
	'Longpages'                 => array( 'LangePaginas', 'LangePagina’s', 'LangePagina\'s' ),
	'Newpages'                  => array( 'NieuwePaginas', 'NieuwePagina’s', 'NieuwePagina\'s' ),
	'Ancientpages'              => array( 'OudstePaginas', 'OudstePagina’s', 'OudstePagina\'s' ),
	'Deadendpages'              => array( 'VerwijslozePaginas', 'VerwijslozePagina’s', 'VerwijslozePagina\'s' ),
	'Protectedpages'            => array( 'BeveiligdePaginas', 'BeveiligdePagina\'s', 'BeschermdePaginas', 'BeschermdePagina’s', 'BeschermdePagina\'s' ),
	'Protectedtitles'           => array( 'BeveiligdeTitels', 'BeschermdeTitels' ),
	'Allpages'                  => array( 'AllePaginas', 'AllePagina’s', 'AllePagina\'s' ),
	'Prefixindex'               => array( 'Voorvoegselindex', 'Prefixindex' ),
	'Ipblocklist'               => array( 'IP-blokkeerlijst', 'IPblokkeerlijst', 'IpBlokkeerlijst' ),
	'Specialpages'              => array( 'SpecialePaginas', 'SpecialePagina’s', 'SpecialePagina\'s' ),
	'Contributions'             => array( 'Bijdragen' ),
	'Emailuser'                 => array( 'GebruikerE-mailen', 'E-mailGebruiker' ),
	'Confirmemail'              => array( 'Emailbevestigen', 'E-mailbevestigen' ),
	'Whatlinkshere'             => array( 'VerwijzingenNaarHier', 'Verwijzingen', 'LinksNaarHier' ),
	'Recentchangeslinked'       => array( 'RecenteWijzigingenGelinkt', 'VerwanteWijzigingen' ),
	'Movepage'                  => array( 'PaginaHernoemen', 'PaginaVerplaatsen', 'TitelWijzigen', 'VerplaatsPagina' ),
	'Blockme'                   => array( 'BlokkeerMij', 'MijBlokkeren' ),
	'Booksources'               => array( 'Boekbronnen', 'Boekinformatie' ),
	'Categories'                => array( 'Categorieën' ),
	'Export'                    => array( 'Exporteren' ),
	'Version'                   => array( 'Softwareversie', 'Versie' ),
	'Allmessages'               => array( 'AlleBerichten', 'Systeemberichten' ),
	'Log'                       => array( 'Logboeken', 'Logboek', 'Log', 'Logs' ),
	'Blockip'                   => array( 'IPblokkeren', 'BlokkeerIP', 'BlokkeerIp' ),
	'Undelete'                  => array( 'Terugplaatsen', 'Herstellen', 'VerwijderenOngedaanMaken' ),
	'Import'                    => array( 'Importeren' ),
	'Lockdb'                    => array( 'DBblokkeren', 'DbBlokkeren', 'BlokkeerDB' ),
	'Unlockdb'                  => array( 'DBvrijgeven', 'DbVrijgeven', 'GeefDbVrij' ),
	'Userrights'                => array( 'Gebruikersrechten', 'Gebruikerrechten' ),
	'MIMEsearch'                => array( 'MIMEzoeken', 'MIME-zoeken' ),
	'Unwatchedpages'            => array( 'NietGevolgdePaginas', 'Niet-GevolgdePagina’s', 'Niet-GevolgdePagina\'s' ),
	'Listredirects'             => array( 'Doorverwijzinglijst', 'Redirectlijst' ),
	'Revisiondelete'            => array( 'VersieVerwijderen', 'HerzieningVerwijderen', 'RevisieVerwijderen' ),
	'Unusedtemplates'           => array( 'OngebruikteSjablonen' ),
	'Randomredirect'            => array( 'WillekeurigeDoorverwijzing' ),
	'Mypage'                    => array( 'MijnPagina' ),
	'Mytalk'                    => array( 'MijnOverleg' ),
	'Mycontributions'           => array( 'MijnBijdragen' ),
	'Listadmins'                => array( 'Beheerderlijst', 'Administratorlijst', 'Adminlijst', 'Beheerderslijst' ),
	'Listbots'                  => array( 'Botlijst', 'Lijstbots' ),
	'Popularpages'              => array( 'PopulairePaginas', 'PopulairePagina’s', 'PopulairePagina\'s' ),
	'Search'                    => array( 'Zoeken' ),
	'Resetpass'                 => array( 'WachtwoordHerinitialiseren' ),
	'Withoutinterwiki'          => array( 'ZonderInterwiki' ),
	'MergeHistory'              => array( 'GeschiedenisSamenvoegen' ),
	'Filepath'                  => array( 'Bestandspad' ),
);

$linkTrail = '/^([a-zäöüïëéèà]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline'               => 'Links onderstrepen:',
'tog-highlightbroken'         => 'Links naar lege pagina’s <a href="" class="new">zo weergeven</a> (alternatief: zo weergeven<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Paragrafen uitvullen',
'tog-hideminor'               => 'Kleine wijzigingen verbergen in recente wijzigingen',
'tog-extendwatchlist'         => 'Uitgebreide volglijst',
'tog-usenewrc'                => 'Uitgebreide Recente Wijzigingen-pagina gebruiken (vereist JavaScript)',
'tog-numberheadings'          => 'Koppen automatisch nummeren',
'tog-showtoolbar'             => 'Bewerkingswerkbalk tonen (vereist JavaScript)',
'tog-editondblclick'          => 'Dubbelklikken voor bewerken (vereist JavaScript)',
'tog-editsection'             => 'Bewerken van deelpagina’s mogelijk maken via [bewerken]-koppelingen',
'tog-editsectiononrightclick' => 'Bewerken van deelpagina’s mogelijk maken met een rechtermuisklik op een tussenkop (vereist JavaScript)',
'tog-showtoc'                 => 'Inhoudsopgave tonen (voor pagina’s met minstens 3 tussenkoppen)',
'tog-rememberpassword'        => 'Wachtwoord onthouden',
'tog-editwidth'               => 'Bewerkingsveld over volle breedte',
'tog-watchcreations'          => 'Pagina’s die ik aanmaak automatisch volgen',
'tog-watchdefault'            => 'Pagina’s die ik bewerk automatisch volgen',
'tog-watchmoves'              => 'Pagina’s die ik verplaats automatisch volgen',
'tog-watchdeletion'           => 'Pagina’s die ik verwijder automatisch volgen',
'tog-minordefault'            => 'Al mijn bewerkingen als ‘klein’ markeren',
'tog-previewontop'            => 'Voorvertoning boven bewerkingsveld tonen',
'tog-previewonfirst'          => 'Voorvertoning bij eerste bewerking tonen',
'tog-nocache'                 => 'Geen caching gebruiken',
'tog-enotifwatchlistpages'    => 'Mij e-mailen bij bewerkingen van pagina’s op mijn volglijst',
'tog-enotifusertalkpages'     => 'Mij e-mailen als iemand mijn overlegpagina wijzigt',
'tog-enotifminoredits'        => 'Mij e-mailen bij kleine bewerkingen van pagina’s op mijn volglijst',
'tog-enotifrevealaddr'        => 'Mijn e-mailadres tonen in e-mailberichten',
'tog-shownumberswatching'     => 'Het aantal gebruikers tonen dat deze pagina volgt',
'tog-fancysig'                => 'Ondertekenen zonder link naar gebruikerspagina',
'tog-externaleditor'          => 'Standaard een externe tekstbewerker gebruiken',
'tog-externaldiff'            => 'Standaard een extern vergelijkingsprogramma gebruiken',
'tog-showjumplinks'           => '“ga naar”-toegankelijkheidslinks inschakelen',
'tog-uselivepreview'          => '“live voorvertoning” gebruiken (vereist JavaScript – experimenteel)',
'tog-forceeditsummary'        => 'Een melding geven bij een lege samenvatting',
'tog-watchlisthideown'        => 'Eigen bewerkingen op mijn volglijst verbergen',
'tog-watchlisthidebots'       => 'Botbewerkingen op mijn volglijst verbergen',
'tog-watchlisthideminor'      => 'Kleine bewerkingen op mijn volglijst verbergen',
'tog-nolangconversion'        => 'Variantomzetting uitschakelen',
'tog-ccmeonemails'            => 'Mij een kopie zenden van e-mails die ik naar andere gebruikers stuur',
'tog-diffonly'                => 'Pagina-inhoud onder wijzigingen niet tonen',

'underline-always'  => 'Altijd',
'underline-never'   => 'Nooit',
'underline-default' => 'Webbrowser-standaard',

'skinpreview' => '(Voorvertoning)',

# Dates
'sunday'        => 'zondag',
'monday'        => 'maandag',
'tuesday'       => 'dinsdag',
'wednesday'     => 'woensdag',
'thursday'      => 'donderdag',
'friday'        => 'vrijdag',
'saturday'      => 'zaterdag',
'sun'           => 'zo',
'mon'           => 'ma',
'tue'           => 'di',
'wed'           => 'wo',
'thu'           => 'do',
'fri'           => 'vr',
'sat'           => 'za',
'january'       => 'januari',
'february'      => 'februari',
'march'         => 'maart',
'april'         => 'april',
'may_long'      => 'mei',
'june'          => 'juni',
'july'          => 'juli',
'august'        => 'augustus',
'september'     => 'september',
'october'       => 'oktober',
'november'      => 'november',
'december'      => 'december',
'january-gen'   => 'januari',
'february-gen'  => 'februari',
'march-gen'     => 'maart',
'april-gen'     => 'april',
'may-gen'       => 'mei',
'june-gen'      => 'juni',
'july-gen'      => 'juli',
'august-gen'    => 'augustus',
'september-gen' => 'september',
'october-gen'   => 'oktober',
'november-gen'  => 'november',
'december-gen'  => 'december',
'jan'           => 'jan',
'feb'           => 'feb',
'mar'           => 'mrt',
'apr'           => 'apr',
'may'           => 'mei',
'jun'           => 'jun',
'jul'           => 'jul',
'aug'           => 'aug',
'sep'           => 'sep',
'oct'           => 'okt',
'nov'           => 'nov',
'dec'           => 'dec',

# Bits of text used by many pages
'categories'            => 'Categorieën',
'pagecategories'        => '{{PLURAL:$1|Categorie|Categorieën}}',
'category_header'       => 'Pagina’s in categorie “$1”',
'subcategories'         => 'Ondercategorieën',
'category-media-header' => 'Media in categorie “$1”',
'category-empty'        => "''Deze categorie bevat geen pagina’s of media.''",

'mainpagetext'      => "<big>'''De installatie van MediaWiki is geslaagd.'''</big>",
'mainpagedocfooter' => 'Raadpleeg de [http://meta.wikimedia.org/wiki/NL_Help:Inhoudsopgave handleiding] voor informatie over het gebruik van de wikisoftware.

== Meer hulp over MediaWiki ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Lijst met instellingen]
* [http://www.mediawiki.org/wiki/Manual:FAQ Veelgestelde vragen (FAQ)]
* [http://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Mailinglijst voor aankondigingen van nieuwe versies]',

'about'          => 'Info',
'article'        => 'Pagina',
'newwindow'      => '(opent in een nieuw venster)',
'cancel'         => 'Annuleren',
'qbfind'         => 'Zoeken',
'qbbrowse'       => 'Bladeren',
'qbedit'         => 'Bewerken',
'qbpageoptions'  => 'Paginaopties',
'qbpageinfo'     => 'Pagina-informatie',
'qbmyoptions'    => 'Mijn opties',
'qbspecialpages' => 'Speciale pagina’s',
'moredotdotdot'  => 'Meer …',
'mypage'         => 'Mijn gebruikerspagina',
'mytalk'         => 'Mijn overleg',
'anontalk'       => 'Overlegpagina voor dit IP-adres',
'navigation'     => 'Navigatie',
'and'            => 'en',

# Metadata in edit box
'metadata_help' => 'Metadata:',

'errorpagetitle'    => 'Fout',
'returnto'          => 'Terug naar $1.',
'tagline'           => 'Uit {{SITENAME}}',
'help'              => 'Hulp',
'search'            => 'Zoeken',
'searchbutton'      => 'Zoeken',
'go'                => 'OK',
'searcharticle'     => 'OK',
'history'           => 'Paginageschiedenis',
'history_short'     => 'Geschiedenis',
'updatedmarker'     => 'bewerkt sinds mijn laatste bezoek',
'info_short'        => 'Informatie',
'printableversion'  => 'Printervriendelijke versie',
'permalink'         => 'Permanente link',
'print'             => 'Afdrukken',
'edit'              => 'Bewerken',
'editthispage'      => 'Deze pagina bewerken',
'delete'            => 'Verwijderen',
'deletethispage'    => 'Deze pagina verwijderen',
'undelete_short'    => '$1 {{PLURAL:$1|bewerking|bewerkingen}} terugplaatsen',
'protect'           => 'Beveiligen',
'protect_change'    => 'beveiligingsstatus wijzigen',
'protectthispage'   => 'Deze pagina beveiligen',
'unprotect'         => 'Beveiliging opheffen',
'unprotectthispage' => 'Beveiliging van deze pagina opheffen',
'newpage'           => 'Nieuwe pagina',
'talkpage'          => 'Overlegpagina',
'talkpagelinktext'  => 'Overleg',
'specialpage'       => 'Speciale pagina',
'personaltools'     => 'Persoonlijke instellingen',
'postcomment'       => 'Opmerking toevoegen',
'articlepage'       => 'Pagina tonen',
'talk'              => 'Overleg',
'views'             => 'Aspecten/acties',
'toolbox'           => 'Hulpmiddelen',
'userpage'          => 'Gebruikerspagina tonen',
'projectpage'       => 'Projectpagina tonen',
'imagepage'         => 'Mediabestandspagina tonen',
'mediawikipage'     => 'Berichtpagina tonen',
'templatepage'      => 'Sjabloonpagina tonen',
'viewhelppage'      => 'Hulppagina tonen',
'categorypage'      => 'Categoriepagina tonen',
'viewtalkpage'      => 'Overlegpagina tonen',
'otherlanguages'    => 'Andere talen',
'redirectedfrom'    => '(Doorverwezen vanaf $1)',
'redirectpagesub'   => 'Doorverwijspagina',
'lastmodifiedat'    => 'Deze pagina is het laatst bewerkt op $1 om $2.', # $1 date, $2 time
'viewcount'         => 'Deze pagina is {{PLURAL:$1|1 maal|$1 maal}} bekeken.',
'protectedpage'     => 'Beveiligde pagina',
'jumpto'            => 'Ga naar:',
'jumptonavigation'  => 'navigatie',
'jumptosearch'      => 'zoeken',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Over {{SITENAME}}',
'aboutpage'         => 'Project:Info',
'bugreports'        => 'Foutrapporten',
'bugreportspage'    => 'Project:Foutrapporten',
'copyright'         => 'De inhoud is beschikbaar onder de $1.',
'copyrightpagename' => '{{SITENAME}} auteursrechten',
'copyrightpage'     => '{{ns:project}}:Auteursrechten',
'currentevents'     => 'In het nieuws',
'currentevents-url' => 'Project:In het nieuws',
'disclaimers'       => 'Voorbehoud',
'disclaimerpage'    => 'Project:Algemeen voorbehoud',
'edithelp'          => 'Hulp bij bewerken',
'edithelppage'      => 'Help:Bewerken',
'faq'               => 'FAQ (veelgestelde vragen)',
'faqpage'           => 'Project:Veelgestelde vragen',
'helppage'          => 'Help:Inhoud',
'mainpage'          => 'Hoofdpagina',
'policy-url'        => 'Project:Beleid',
'portal'            => 'Gebruikersportaal',
'portal-url'        => 'Project:Gebruikersportaal',
'privacy'           => 'Privacybeleid',
'privacypage'       => 'Project:Privacybeleid',
'sitesupport'       => 'Financieel bijdragen',
'sitesupport-url'   => 'Project:Financieel bijdragen',

'badaccess'        => 'Geen toestemming',
'badaccess-group0' => 'U heeft geen rechten om de gevraagde handeling uit te voeren.',
'badaccess-group1' => 'De gevraagde handeling is voorbehouden aan gebruikers in de groep $1.',
'badaccess-group2' => 'De gevraagde handeling is voorbehouden aan gebruikers in een van de groepen $1.',
'badaccess-groups' => 'De gevraagde handeling is voorbehouden aan gebruikers in een van de groepen $1.',

'versionrequired'     => 'Versie $1 van MediaWiki is vereist',
'versionrequiredtext' => 'Versie $1 van MediaWiki is vereist om deze pagina te gebruiken. Meer info is beschikbaar op de pagina [[Special:Version|softwareversie]].',

'ok'                      => 'OK',
'retrievedfrom'           => 'Teruggeplaatst van "$1"',
'youhavenewmessages'      => 'U heeft $1 ($2).',
'newmessageslink'         => 'nieuwe berichten',
'newmessagesdifflink'     => 'de bewerking tonen',
'youhavenewmessagesmulti' => 'U heeft nieuwe berichten op $1',
'editsection'             => 'bewerken',
'editold'                 => 'bewerken',
'editsectionhint'         => 'Deelpagina bewerken: $1',
'toc'                     => 'Inhoud',
'showtoc'                 => 'tonen',
'hidetoc'                 => 'verbergen',
'thisisdeleted'           => '$1 tonen of terugplaatsen?',
'viewdeleted'             => '$1 tonen?',
'restorelink'             => '$1 verwijderde {{PLURAL:$1|versie|versies}}',
'feedlinks'               => 'Feed:',
'feed-invalid'            => 'Feedtype wordt niet ondersteund.',
'site-rss-feed'           => '$1 RSS-feed',
'site-atom-feed'          => '$1 Atom-feed',
'page-rss-feed'           => '“$1” RSS-feed',
'page-atom-feed'          => '“$1” Atom-feed',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Pagina',
'nstab-user'      => 'Gebruikerspagina',
'nstab-media'     => 'Mediapagina',
'nstab-special'   => 'Speciaal',
'nstab-project'   => 'Projectpagina',
'nstab-image'     => 'Bestand',
'nstab-mediawiki' => 'Bericht',
'nstab-template'  => 'Sjabloon',
'nstab-help'      => 'Hulppagina',
'nstab-category'  => 'Categorie',

# Main script and global functions
'nosuchaction'      => 'Opgegeven handeling bestaat niet',
'nosuchactiontext'  => 'De opdracht in de URL werd niet herkend door de wiki',
'nosuchspecialpage' => 'Deze speciale pagina bestaat niet',
'nospecialpagetext' => "<big>'''U heeft een onbestaande speciale pagina opgevraagd.'''</big>

Een lijst met speciale pagina’s staat op [[Special:Specialpages|speciale pagina’s]].",

# General errors
'error'                => 'Fout',
'databaseerror'        => 'Databasefout',
'dberrortext'          => 'Er is een syntaxisfout in het databaseverzoek opgetreden.
Mogelijk zit er een fout in de software.
Het laatste verzoek aan de database was:
<blockquote><tt>$1</tt></blockquote>
vanuit de functie “<tt>$2</tt>”.
MySQL gaf de foutmelding “<tt>$3: $4</tt>”.',
'dberrortextcl'        => 'Er is een syntaxisfout in het databaseverzoek opgetreden.
Het laatste verzoek aan de database was:
“$1”
vanuit de functie “$2”.
MySQL gaf de volgende foutmelding: “$3: $4”',
'noconnect'            => 'Sorry! De wiki ondervindt technische moeilijkheden en kan de database niet bereiken. <br />
$1',
'nodb'                 => 'Kon database $1 niet selecteren',
'cachederror'          => 'De getoonde pagina is een kopie uit de cache en zou verouderd kunnen zijn.',
'laggedslavemode'      => 'Waarschuwing: de pagina zou verouderd kunnen zijn.',
'readonly'             => 'Database geblokkeerd',
'enterlockreason'      => 'Geef een reden op voor de blokkade en geef op wanneer die waarschijnlijk wordt opgeheven',
'readonlytext'         => 'De database is geblokkeerd voor bewerkingen, waarschijnlijk voor regulier databaseonderhoud. Na afronding wordt de functionaliteit hersteld.

De beheerder heeft de volgende reden opgegeven: $1',
'missingarticle'       => 'In de database is geen tekst aangetroffen voor een pagina met de naam “$1”.

Dit wordt meestal veroorzaakt door het volgen van een link in een vergelijkings- of geschiedenispagina naar een pagina die verwijderd is.

Als dit niet het geval is, dan heeft u een fout in de software gevonden.
Rapporteer dit alstublieft aan een beheerder met vermelding van de URL.',
'readonly_lag'         => 'De database is automatisch vergrendeld terwijl de ondergeschikte databaseservers synchroniseren met de hoofdserver.',
'internalerror'        => 'Interne fout',
'internalerror_info'   => 'Interne fout: $1',
'filecopyerror'        => 'Bestand “$1” kon niet naar “$2” gekopieerd worden.',
'filerenameerror'      => '“$1” kon niet tot “$2” hernoemd worden.',
'filedeleteerror'      => 'Bestand “$1” kon niet verwijderd worden.',
'directorycreateerror' => 'Map “$1” kon niet aangemaakt worden.',
'filenotfound'         => 'Bestand “$1” werd niet gevonden.',
'fileexistserror'      => 'Schrijven naar bestand “$1” onmogelijk: bestand bestaat al',
'unexpected'           => 'Onverwachte waarde: "$1"="$2".',
'formerror'            => 'Fout: formulier kon niet verzonden worden',
'badarticleerror'      => 'Deze handeling kan niet op deze pagina worden uitgevoerd.',
'cannotdelete'         => 'De pagina of het bestand kon niet verwijderd worden. Mogelijk is deze al door iemand anders verwijderd.',
'badtitle'             => 'Ongeldige paginanaam',
'badtitletext'         => 'De titel van de opgevraagde pagina was ongeldig, leeg of bevatte een verkeerd gelinkte intertaal- of interwikinaam. Wellicht bevat de titel niet toegestane karakters.',
'perfdisabled'         => 'Sorry! Deze functionaliteit is tijdelijk uitgeschakeld, omdat deze de database zo langzaam maakt dat niemand de wiki kan gebruiken.',
'perfcached'           => 'De getoonde gegevens komen uit een cache en zijn mogelijk niet actueel.',
'perfcachedts'         => 'De getoonde gegevens komen uit een cache en zijn voor het laatst bijgewerkt op $1.',
'querypage-no-updates' => 'Deze pagina kan niet bijgewerkt worden. Deze gegevens worden niet ververst.',
'wrong_wfQuery_params' => 'Verkeerde parameters voor wfQuery()<br />
Functie: $1<br />
Zoekopdracht: $2',
'viewsource'           => 'Brontekst tonen',
'viewsourcefor'        => 'van $1',
'actionthrottled'      => 'Handeling tegengehouden',
'actionthrottledtext'  => 'Als maatregel tegen spam is het aantal keren per tijdseenheid dat u deze handeling kan verrichten beperkt. U heeft de limiet overschreden. Probeer het over een aantal minuten opnieuw.',
'protectedpagetext'    => 'Deze pagina is beveiligd. Bewerken is niet mogelijk.',
'viewsourcetext'       => 'U kan de brontekst van deze pagina bekijken en kopiëren:',
'protectedinterface'   => 'Deze pagina bevat tekst voor berichten van de software en is beveiligd om misbruik te voorkomen.',
'editinginterface'     => "'''Waarschuwing:''' U bewerkt een pagina die gebruikt wordt door de software. Bewerkingen op deze pagina beïnvloeden de gebruikersinterface van iedereen. Overweeg voor vertalingen om [http://translatewiki.net/wiki/Main_Page?setlang=nl Betawiki] te gebruiken, het vertalingsproject voor MediaWiki.",
'sqlhidden'            => '(SQL-zoekopdracht verborgen)',
'cascadeprotected'     => "Deze pagina kan niet bewerkt worden, omdat die is opgenomen in de volgende {{PLURAL:$1|pagina|pagina's}} die beveiligd {{PLURAL:$1|is|zijn}} met de cascade-optie:
$2",
'namespaceprotected'   => "U heeft geen rechten om pagina's in de naamruimte '''$1''' te bewerken.",
'customcssjsprotected' => 'U kan deze pagina niet bewerken, omdat die persoonlijke instellingen van een andere gebruiker bevat.',
'ns-specialprotected'  => 'Pagina\'s in de naamruimte "{{ns:special}}" kunnen niet bewerkt worden.',
'titleprotected'       => 'Het aanmaken van deze pagina is beveiligd door [[User:$1|$1]]. De gegeven reden is <i>$2</i>.',

# Login and logout pages
'logouttitle'                => 'Gebruiker afmelden',
'logouttext'                 => "<strong>U bent nu afgemeld.</strong><br />
U kan {{SITENAME}} nu anoniem gebruiken of weer aanmelden als dezelfde of een andere gebruiker. Mogelijk worden nog een aantal pagina's getoond alsof u aangemeld bent totdat u de cache van uw browser leegt.",
'welcomecreation'            => '== Welkom, $1! ==

Uw gebruiker is aangemaakt. Vergeet niet uw voorkeuren voor {{SITENAME}} aan te passen.',
'loginpagetitle'             => 'Gebruikersnaam',
'yourname'                   => 'Gebruikersnaam',
'yourpassword'               => 'Wachtwoord',
'yourpasswordagain'          => 'Geef uw wachtwoord opnieuw in:',
'remembermypassword'         => 'Aanmeldgegevens onthouden',
'yourdomainname'             => 'Uw domein',
'externaldberror'            => 'Er is een fout opgetreden bij het aanmelden bij de database of u heeft geen toestemming uw externe gebruiker bij te werken.',
'loginproblem'               => '<b>Er was een probleem bij het aanmelden.</b><br />Probeer het a.u.b. opnieuw.',
'login'                      => 'Aanmelden',
'loginprompt'                => 'U moet cookies ingeschakeld hebben om u te kunnen aanmelden bij {{SITENAME}}.',
'userlogin'                  => 'Aanmelden / Inschrijven',
'logout'                     => 'Afmelden',
'userlogout'                 => 'Afmelden',
'notloggedin'                => 'Niet aangemeld',
'nologin'                    => 'Nog geen gebruikersnaam? $1.',
'nologinlink'                => 'Maak een gebruiker aan',
'createaccount'              => 'Gebruiker aanmaken',
'gotaccount'                 => 'Heeft u al een gebruikersnaam? $1.',
'gotaccountlink'             => 'Aanmelden',
'createaccountmail'          => 'per e-mail',
'badretype'                  => 'De ingevoerde wachtwoorden verschillen van elkaar.',
'userexists'                 => 'De gekozen gebruikersnaam is al in gebruik. Kies a.u.b. een andere naam.',
'youremail'                  => 'Uw e-mailadres:',
'username'                   => 'Gebruikersnaam:',
'uid'                        => 'Gebruikersnummer:',
'yourrealname'               => 'Uw echte naam:',
'yourlanguage'               => 'Taal:',
'yourvariant'                => 'Taalvariant',
'yournick'                   => 'Tekst voor ondertekening:',
'badsig'                     => 'Ongeldige ondertekening; controleer de HTML-tags.',
'badsiglength'               => 'Bijnaam is te lang; het moet onder $1 karakters zijn.',
'email'                      => 'E-mail',
'prefs-help-realname'        => 'Echte naam is optioneel, als u deze opgeeft kan deze naam gebruikt worden om u erkenning te geven voor uw werk.',
'loginerror'                 => 'Aanmeldfout',
'prefs-help-email'           => 'E-mailadres is optioneel, maar stelt anderen in staat contact met u op te nemen via uw gebruikers- of overlegpagina zonder dat u uw identiteit prijsgeeft.',
'prefs-help-email-required'  => 'Hiervoor is een e-mailadres nodig.',
'nocookiesnew'               => 'De gebruiker is aangemaakt maar niet aangemeld. {{SITENAME}} gebruikt cookies voor het aanmelden van gebruikers. Schakel die a.u.b. in en meld daarna aan met uw nieuwe gebruikersnaam en wachtwoord.',
'nocookieslogin'             => '{{SITENAME}} gebruikt cookies voor het aanmelden van gebruikers. U heeft cookies uitgeschakeld. Schakel deze optie a.u.b. aan en probeer het opnieuw.',
'noname'                     => 'U heeft geen geldige gebruikersnaam opgegeven.',
'loginsuccesstitle'          => 'Aanmelden geslaagd',
'loginsuccess'               => "'''U bent nu aangemeld bij {{SITENAME}} als \"\$1\".'''",
'nosuchuser'                 => 'De gebruiker "$1" bestaat niet. Controleer de schrijfwijze of maak een nieuwe gebruiker aan.',
'nosuchusershort'            => 'De gebruiker "$1" bestaat niet. Controleer de schrijfwijze.',
'nouserspecified'            => 'U dient een gebruikersnaam op te geven.',
'wrongpassword'              => 'Wachtwoord onjuist. Probeer het opnieuw.',
'wrongpasswordempty'         => 'Het opgegeven wachtwoord was leeg. Probeer het opnieuw.',
'passwordtooshort'           => 'Uw wachtwoord is te kort. Het moet minstens uit $1 tekens bestaan.',
'mailmypassword'             => 'E-mail wachtwoord',
'passwordremindertitle'      => 'Nieuw tijdelijk wachtwoord voor {{SITENAME}}',
'passwordremindertext'       => 'Iemand, waarschijnlijk u, heeft vanaf  IP-adres $1 een verzoek gedaan tot het
toezenden van het wachtwoord voor {{SITENAME}} ($4).
Het wachtwoord voor gebruiker "$2" is "$3".
Meld u nu aan en wijzig dan uw wachtwoord.

Als iemand anders dan u dit verzoek heeft gedaan of als u zich inmiddels het wachtwoord herinnert en het niet langer wilt wijzigen, negeer dit bericht dan en blijf uw bestaande wachtwoord gebruiken.',
'noemail'                    => 'Er is geen e-mailadres bekend voor gebruiker "$1".',
'passwordsent'               => 'Het wachtwoord is verzonden naar het e-mailadres voor "$1".
Meld u a.u.b. aan nadat u het heeft ontvangen.',
'blocked-mailpassword'       => 'Uw IP-adres is geblokkeerd voor het maken van wijzigingen. Om misbruik te voorkomen is het niet mogelijk om een nieuw wachtwoord aan te vragen.',
'eauthentsent'               => 'Er is een bevestigingse-mail naar het opgegeven e-mailadres gezonden. Volg de aanwijzingen in de e-mail om aan te geven dat het uw e-mailadres is. Tot die tijd kunnen er geen e-mails naar het e-mailadres gezonden worden.',
'throttled-mailpassword'     => 'Er is in de laatste $1 uren een wachtwoordherinnering verzonden. Om misbruik te voorkomen, wordt er slechts één herinnering per $1 uren verzonden.',
'mailerror'                  => 'Fout bij het verzenden van e-mail: $1',
'acct_creation_throttle_hit' => 'Sorry, er zijn al $1 gebruikers aangemaakt vanaf dit IP-adres. U kan geen nieuwe gebruikers meer aanmaken.',
'emailauthenticated'         => 'Uw e-mailadres is bevestigd op $1.',
'emailnotauthenticated'      => 'Uw e-mailadres is <strong>niet bevestigd</strong>. U ontvangt geen e-mail voor de onderstaande functies.',
'noemailprefs'               => 'Geef een e-mailadres op om deze functies te gebruiken.',
'emailconfirmlink'           => 'Bevestig uw e-mailadres',
'invalidemailaddress'        => 'Het e-mailadres is niet aanvaard omdat het een ongeldige opmaak heeft. Geef a.u.b. een geldig e-mailadres op of laat het veld leeg.',
'accountcreated'             => 'Gebruiker aangemaakt',
'accountcreatedtext'         => 'De gebruiker $1 is aangemaakt.',
'createaccount-title'        => 'Gebruikers aanmaken voor {{SITENAME}}',
'createaccount-text'         => 'Iemand heeft een gebruiker op {{SITENAME}} ($4) aangemaakt met de naam "$2" en uw e-mailadres. Het wachtwoord voor "$2" is "$3". Meld u aan en wijzig uw wachtwoord.

Negeer dit bericht als deze gebruiker zonder uw medeweten is aangemaakt.',
'loginlanguagelabel'         => 'Taal: $1',

# Password reset dialog
'resetpass'               => 'Wachtwoord herinstellen',
'resetpass_announce'      => 'U bent aangemeld met een tijdelijke code die u per e-mail is toegezonden. Voer een nieuw wachtwoord in om het aanmelden te voltooien:',
'resetpass_text'          => '<!-- Voeg hier tekst toe -->',
'resetpass_header'        => 'Wachtwoord herinstellen',
'resetpass_submit'        => 'Wachtwoord instellen en aanmelden',
'resetpass_success'       => 'Uw wachtwoord is gewijzigd. Bezig met aanmelden ...',
'resetpass_bad_temporary' => 'Ongeldig tijdelijk wachtwoord. U heeft uw wachtwoord al gewijzigd of een nieuw tijdelijk wachtwoord aangevraagd.',
'resetpass_forbidden'     => 'Wachtwoorden kunnen op {{SITENAME}} niet gewijzigd worden',
'resetpass_missing'       => 'U heeft geen wachtwoord ingegeven.',

# Edit page toolbar
'bold_sample'     => 'Vetgedrukte tekst',
'bold_tip'        => 'Vet',
'italic_sample'   => 'Schuingedrukte tekst',
'italic_tip'      => 'Schuin',
'link_sample'     => 'Onderwerp',
'link_tip'        => 'Interne link',
'extlink_sample'  => 'http://www.voorbeeld.com linktekst',
'extlink_tip'     => 'Externe link (vergeet http:// niet)',
'headline_sample' => 'Deelonderwerp',
'headline_tip'    => 'Tussenkopje (hoogste niveau)',
'math_sample'     => 'Voer de formule in',
'math_tip'        => 'Wiskundige formule (LaTeX)',
'nowiki_sample'   => 'Voer hier de niet op te maken tekst in',
'nowiki_tip'      => 'Wiki-opmaak negeren',
'image_sample'    => 'Voorbeeld.png',
'image_tip'       => 'Mediabestand',
'media_sample'    => 'Voorbeeld.ogg',
'media_tip'       => 'Link naar bestand',
'sig_tip'         => 'Uw handtekening met datum en tijd',
'hr_tip'          => 'Horizontale lijn (gebruik spaarzaam)',

# Edit pages
'summary'                   => 'Samenvatting',
'subject'                   => 'Onderwerp/kop',
'minoredit'                 => 'Dit is een kleine bewerking',
'watchthis'                 => 'Deze pagina volgen',
'savearticle'               => 'Pagina opslaan',
'preview'                   => 'Nakijken',
'showpreview'               => 'Bewerking ter controle tonen',
'showlivepreview'           => 'Bewerking ter controle tonen',
'showdiff'                  => 'Wijzigingen tonen',
'anoneditwarning'           => "'''Waarschuwing:''' u bent niet aangemeld. Uw IP-adres wordt opgeslagen als u wijzigingen op deze pagina maakt.",
'missingsummary'            => "'''Herinnering:''' u heeft geen samenvatting opgegeven voor uw bewerking. Als u nogmaals op ''Pagina opslaan'' klikt wordt de bewerking zonder samenvatting opgeslagen.",
'missingcommenttext'        => 'Plaats uw opmerking hieronder, a.u.b.',
'missingcommentheader'      => "'''Let op:''' U heeft geen onderwerp/kop voor deze opmerking opgegeven. Als u opnieuw op \"opslaan\" klikt, wordt uw wijziging zonder een onderwerp/kop opgeslagen.",
'summary-preview'           => 'Samenvatting nakijken',
'subject-preview'           => 'Nakijken onderwerp/kop',
'blockedtitle'              => 'Gebruiker is geblokkeerd',
'blockedtext'               => "<big>'''Uw gebruiker of IP-adres is geblokkeerd.'''</big>

De blokkade is uitgevoerd door $1. De opgegeven reden is ''$2''.

* Aanvang blokkade: $8
* Einde blokkade: $6
* Bedoeld te blokkeren: $7

U kan contact opnemen met $1 of een andere [[{{MediaWiki:Grouppage-sysop}}|beheerder]] om de blokkade te bespreken.
U kan geen gebruik maken van de functie 'e-mail deze gebruiker', tenzij u een geldig e-mailadres heeft opgegeven in uw [[Special:Preferences|voorkeuren]] en het gebruik van deze functie niet geblokkeerd is.
Uw huidige IP-adres is $3 en het blokkadenummer is #$5. Vermeld beide gegevens als u ergens op deze blokkade reageert.",
'autoblockedtext'           => "Uw IP-adres is automatisch geblokkeerd, omdat het is gebruikt door een andere gebruiker, die is geblokkeerd door $1.
De opgegeven reden is:

:''$2''

* Aanvang blokkade: $8
* Einde blokkade: $6

U kan deze blokkade bespreken met $1 of een andere [[{{MediaWiki:Grouppage-sysop}}|beheerder]]. U kan geen gebruik maken van de functie 'e-mail deze gebruiker', tenzij u een geldig e-mailadres heeft opgegeven in uw [[Special:Preferences|voorkeuren]] en het gebruik van deze functie niet is geblokkeerd. Uw huidige IP-adres is $3 en het blokkadenummer is #$5. Vermeld beide gegevens als u ergens over deze blokkade reageert.",
'blockednoreason'           => 'geen reden opgegeven',
'blockedoriginalsource'     => "Hieronder staat de brontekst van '''$1''':",
'blockededitsource'         => "Hieronder staat de tekst van '''uw bewerkingen''' aan '''$1''':",
'whitelistedittitle'        => 'Voor bewerken is aanmelden verplicht',
'whitelistedittext'         => "U moet $1 om pagina's te bewerken.",
'whitelistreadtitle'        => 'Voor leestoegang is aanmelden verplicht',
'whitelistreadtext'         => "[[Special:Preferences|Meld u aan]] voor leestoegang tot pagina's.",
'whitelistacctitle'         => 'Het aanmaken van nieuwe gebruikers is niet toegestaan',
'whitelistacctext'          => 'U dient [[Special:Userlogin|aangemeld]] te zijn en de juiste rechten te hebben om gebruikers aan te maken in {{SITENAME}}.',
'confirmedittitle'          => 'E-mailbevestiging is verplicht voordat u kan bewerken',
'confirmedittext'           => 'U moet uw e-mailadres bevestigen voor u kan bewerken. Voer uw e-mailadres in en bevestig het via [[Special:Preferences|uw voorkeuren]].',
'nosuchsectiontitle'        => 'Deze subkop bestaat niet',
'nosuchsectiontext'         => 'U probeerde een subkop te bewerken dat niet bestaat. Omdat subkop $1 niet bestaat, kan uw bewerking ook niet worden opgeslagen.',
'loginreqtitle'             => 'Aanmelden verplicht',
'loginreqlink'              => 'aanmelden',
'loginreqpagetext'          => "$1 is verplicht om andere pagina's te kunnen zien.",
'accmailtitle'              => 'Wachtwoord verzonden.',
'accmailtext'               => 'Het wachtwoord voor "$1" is verzonden naar $2.',
'newarticle'                => '(Nieuw)',
'newarticletext'            => "Deze pagina bestaat niet. Typ in het onderstaande veld om de pagina aan te maken (meer informatie staat op de [[{{MediaWiki:Helppage}}|hulppagina]]).
Gebruik de knop '''vorige''' in uw browser als u hier per ongeluk terecht bent gekomen.",
'anontalkpagetext'          => "----''Deze overlegpagina hoort bij een anonieme gebruiker die hetzij geen gebruikersnaam heeft, hetzij deze niet gebruikt. We gebruiken daarom het IP-adres ter identificatie. Het is mogelijk dat meerdere personen hetzelfde IP-adres gebruiken. Mogelijk ontvangt u hier berichten die niet voor u bedoeld zijn. Als u dat wilt voorkomen, [[Special:Userlogin/signup|maak dan een gebruikersnaam aan]] of [[Special:Userlogin|meld u aan]] om verwarring met andere anonieme gebruikers te voorkomen.''",
'noarticletext'             => 'Deze pagina bevat geen tekst. U kan [[Special:Search/{{PAGENAME}}|naar deze term zoeken]] in andere pagina\'s of <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} deze pagina bewerken]</span>.',
'userpage-userdoesnotexist' => 'U bewerkt een gebruikerspagina van een gebruiker die niet bestaat (gebruiker "$1"). Gelieve te controleren of u deze pagina wel wil aanmaken/bewerken.',
'clearyourcache'            => '\'\'\'Let op!\'\'\' Leeg uw cache nadat u de wijzigingen heeft opgeslagen.

{| border="1" cellpadding="3" class=toccolours style="border: 1px #AAAAAA solid; border-collapse: collapse;"
| Mozilla/Safari/Konqueror || CTRL-SHIFT-R
|-
| IE || CTRL-F5
|-
| Opera || F5
|-
| Safari || CMD-R
|-
| Konqueror || F5
|}',
'usercssjsyoucanpreview'    => "<strong>Tip:</strong> Gebruik de knop 'Bewerking ter controle tonen' om uw nieuwe CSS/JS te testen alvorens op te slaan.",
'usercsspreview'            => "'''Dit is alleen een voorvertoning van uw persoonlijke css, deze is niet opgeslagen!'''",
'userjspreview'             => "'''Let op: u test nu uw persoonlijke JavaScript. De pagina is niet opgeslagen!'''",
'userinvalidcssjstitle'     => "'''Waarschuwing:''' er is geen skin \"\$1\". Let op: uw eigen .css- en .js-pagina's beginnen met een kleine letter, bijvoorbeeld {{ns:user}}:Naam/monobook.css in plaats van {{ns:user}}:Naam/Monobook.css.",
'updated'                   => '(Bijgewerkt)',
'note'                      => '<strong>Opmerking:</strong>',
'previewnote'               => '<strong>Let op: dit is een controlepagina; uw tekst is niet opgeslagen!</strong>',
'previewconflict'           => 'Deze voorvertoning geeft aan hoe de tekst in het bovenste veld eruit ziet als u deze opslaat.',
'session_fail_preview'      => '<strong>Sorry! Uw bewerking is niet verwerkt, omdat de sessiegegevens verloren zijn gegaan.
Probeer het opnieuw. Als het dan nog niet lukt, meld u zich dan af en weer aan.</strong>',
'session_fail_preview_html' => "<strong>Sorry! Uw bewerking is niet verwerkt, omdat sessiegegevens verloren zijn gegaan.</strong>

''Omdat in {{SITENAME}} ruwe HTML is ingeschakeld, is een voorvertoning niet mogelijk als bescherming tegen aanvallen met JavaScript.''

<strong>Als dit een legitieme bewerking is, probeer het dan opnieuw. Als het dan nog niet lukt, meld u zich dan af en weer aan.</strong>",
'token_suffix_mismatch'     => '<strong>Uw bewerking is geweigerd omdat uw client de leestekens in het bewerkingstoken onjuist heeft behandeld. De bewerking is geweigerd om verminking van de paginatekst te voorkomen. Dit gebeurt soms als er een webgebaseerde proxydienst wordt gebruikt die fouten bevat.</strong>',
'editing'                   => 'Bezig met bewerken van $1',
'editinguser'               => "Bezig met wijzigen van de gebruikersrechten van gebruiker '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]] | [[Special:Contributions/$1|{{int:contribslink}}]])",
'editingsection'            => 'Bezig met bewerken van $1 (deelpagina)',
'editingcomment'            => 'Bezig met bewerken van $1 (opmerking)',
'editconflict'              => 'Bewerkingsconflict: $1',
'explainconflict'           => 'Een andere gebruiker heeft deze pagina bewerkt sinds u met uw bewerking bent begonnen.
In het bovenste deel van het venster staat de tekst van de huidige pagina.
Uw bewerking staat in het onderste gedeelte.
U dient uw bewerkingen in te voegen in de bestaande tekst. 
<b>Alleen</b> de tekst in het bovenste gedeelte wordt opgeslagen als u op "Pagina opslaan" klikt.<br />',
'yourtext'                  => 'Uw tekst',
'storedversion'             => 'Opgeslagen versie',
'nonunicodebrowser'         => "<strong>WAARSCHUWING: Uw browser kan niet goed overweg met unicode. Hiermee wordt door de Mediawiki rekening gehouden zodat u toch zonder problemen pagina's kan bewerken: niet-ASCII karakters worden in het bewerkingsveld weergegeven als hexadecimale codes.</strong>",
'editingold'                => '<strong><span style="color:#ff0000">Waarschuwing!</span> U bewerkt een oude versie van deze pagina. Als u uw bewerking opslaat, gaan alle wijzigingen die na deze versie gemaakt zijn verloren.</strong>',
'yourdiff'                  => 'Wijzigingen',
'copyrightwarning'          => "Opgelet: Alle bijdragen aan {{SITENAME}} worden geacht te zijn vrijgegeven onder de $2 (zie $1 voor details). Als u niet wilt dat uw tekst door anderen naar believen bewerkt en verspreid kan worden, kies dan niet voor 'Pagina Opslaan'.<br />
Hierbij belooft u ons tevens dat u deze tekst zelf heeft geschreven, of overgenomen uit een vrije, openbare bron.<br />
<strong>GEBRUIK GEEN MATERIAAL DAT BESCHERMD WORDT DOOR AUTEURSRECHT, TENZIJ U DAARTOE TOESTEMMING HEEFT!</strong>",
'copyrightwarning2'         => 'Al uw bijdragen aan {{SITENAME}} kunnen bewerkt, gewijzigd of verwijderd worden door andere gebruikers. Als u niet wilt dat uw teksten rigoureus aangepast worden door anderen, plaats ze hier dan niet.<br />
U belooft ook u dat u de oorspronkelijke auteur bent van dit materiaal, of dat u het heeft gekopieerd uit een bron in het publieke domein, of een soortgelijke vrije bron (zie $1 voor details).
<strong>GEBRUIK GEEN MATERIAAL DAT BESCHERMD WORDT DOOR AUTEURSRECHT, TENZIJ U DAARTOE TOESTEMMING HEEFT!</strong>',
'longpagewarning'           => "<strong>Deze pagina is $1 kilobyte groot; sommige browsers hebben problemen met het bewerken van pagina's die groter zijn dan 32kb. Wellicht kan deze pagina gesplitst worden in kleinere delen.</strong>",
'longpageerror'             => '<strong>ERROR: de tekst die u heeft toegevoegd heeft is $1 kilobyte
groot, wat groter is dan het maximum van $2 kilobyte. Opslaan is niet mogelijk.</strong>',
'readonlywarning'           => '<strong>WAARSCHUWING: de database is geblokkeerd voor onderhoud, dus u kan deze nu niet opslaan. Het is misschien verstandig om uw tekst tijdelijk in een tekstbestand op te slaan om dit te bewaren voor wanneer de blokkering van de database opgeheven is.</strong>',
'protectedpagewarning'      => '<strong>WAARSCHUWING! Deze beveiligde pagina kan alleen door gebruikers met beheerdersrechten bewerkt worden.</strong>',
'semiprotectedpagewarning'  => "'''Let op:''' deze pagina is beveiligd en kan alleen door geregistreerde gebruikers bewerkt worden.",
'cascadeprotectedwarning'   => "'''Waarschuwing:''' Deze pagina is beveiligd en kan alleen door beheerders bewerkt worden, omdat deze is opgenomen in de volgende {{PLURAL:$1|pagina|pagina's}} die beveiligd {{PLURAL:$1|is|zijn}} met de cascade-optie:",
'titleprotectedwarning'     => '<strong>WAARSCHUWING: Deze pagina is beveiligd zodat alleen enkele gebruikers het kunnen aanmaken.</strong>',
'templatesused'             => 'Op deze pagina gebruikte sjablonen:',
'templatesusedpreview'      => 'Sjablonen gebruikt in deze voorvertoning:',
'templatesusedsection'      => 'Sjablonen die gebruikt worden in deze subkop:',
'template-protected'        => '(beveiligd)',
'template-semiprotected'    => '(semibeveiligd)',
'edittools'                 => '<!-- Deze tekst wordt weergegeven onder bewerkings- en uploadformulieren. -->',
'nocreatetitle'             => "Het aanmaken van pagina's is beperkt",
'nocreatetext'              => "{{SITENAME}} heeft de mogelijkheid om nieuwe pagina's te maken beperkt.
U kan reeds bestaande pagina's wijzigen, of u kan [[Special:Userlogin|zich aanmelden of een gebruiker aanmaken]].",
'nocreate-loggedin'         => "U kan geen nieuwe pagina's maken op {{SITENAME}}.",
'permissionserrors'         => 'Fouten in rechten',
'permissionserrorstext'     => 'U heeft geen rechten om dit te doen wegens de volgende {{PLURAL:$1|reden|redenen}}:',
'recreate-deleted-warn'     => "'''Waarschuwing: u bent bezig met het aanmaken van een pagina die in het verleden verwijderd is.'''

Overweeg of het terecht is dat u verder werkt aan deze pagina. Voor uw gemak staat hieronder het verwijderingslogboek voor deze pagina:",

# "Undo" feature
'undo-success' => 'Hieronder staat de tekst waarin de wijziging ongedaan is gemaakt. Controleer voor het opslaan of het resultaat gewenst is.',
'undo-failure' => 'De wijziging kan niet ongedaan gemaakt worden vanwege andere strijdige wijzigingen.',
'undo-summary' => 'Versie $1 van [[Special:Contributions/$2|$2]] ([[User talk:$2|overleg]]) ongedaan gemaakt',

# Account creation failure
'cantcreateaccounttitle' => 'Aanmaken gebruiker mislukt.',
'cantcreateaccount-text' => "Het aanmaken van gebruikers van dit IP-adres (<b>$1</b>) is geblokkeerd door [[User:$3|$3]].

De door $3 opgegeven reden is ''$2''",

# History pages
'viewpagelogs'        => 'Logboek voor deze pagina tonen',
'nohistory'           => 'Deze pagina is niet bewerkt.',
'revnotfound'         => 'Bewerking niet gevonden',
'revnotfoundtext'     => 'De opgevraagde oude versie van deze pagina is onvindbaar. Controleer a.u.b. de URL die u gebruikte om naar deze pagina te gaan.',
'loadhist'            => 'Bezig met het laden van de paginageschiedenis',
'currentrev'          => 'Huidige versie',
'revisionasof'        => 'Versie op $1',
'revision-info'       => 'Versie op $1 van $2',
'previousrevision'    => '←Oudere versie',
'nextrevision'        => 'Nieuwere versie→',
'currentrevisionlink' => 'Huidige versie',
'cur'                 => 'huidig',
'next'                => 'volgende',
'last'                => 'vorige',
'orig'                => 'orig',
'page_first'          => 'eerste',
'page_last'           => 'laatste',
'histlegend'          => 'Selectie voor diff: selecteer de te vergelijken versies en toets ENTER of de knop onderaan.<br />
Verklaring afkortingen: (huidig) = verschil met huidige versie, (vorige) = verschil met voorgaande versie, k = kleine wijziging',
'deletedrev'          => '[verwijderd]',
'histfirst'           => 'Oudste',
'histlast'            => 'Nieuwste',
'historysize'         => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty'        => '(leeg)',

# Revision feed
'history-feed-title'          => 'Bewerkingsoverzicht',
'history-feed-description'    => 'Bewerkingsoverzicht voor deze pagina op de wiki',
'history-feed-item-nocomment' => '$1 op $2', # user at time
'history-feed-empty'          => "De gevraagde pagina bestaat niet.
Wellicht is die verwijderd of hernoemd.
[[Special:Search|Doorzoek de wiki]] voor relevante pagina's.",

# Revision deletion
'rev-deleted-comment'         => '(opmerking verwijderd)',
'rev-deleted-user'            => '(gebruiker verwijderd)',
'rev-deleted-event'           => '(actie verwijderd)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Deze bewerking van de pagina is verwijderd uit de publieke archieven.
Er kunnen details aanwezig zijn in het [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} verwijderingslogboek].
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">Deze bewerking van de pagina is verwijderd uit de publieke archieven. Als beheerder van {{SITENAME}} kan u deze zien; er kunnen details aanwezig zijn in het [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} verwijderingslogboek].</div>',
'rev-delundel'                => 'tonen/verbergen',
'revisiondelete'              => 'Versies verwijderen/terugplaatsen',
'revdelete-nooldid-title'     => 'Geen doelversie',
'revdelete-nooldid-text'      => 'U heeft geen doelversie(s) voor deze handeling opgegeven.',
'revdelete-selected'          => "Geselecteerde {{PLURAL:$2|bewerking|bewerkingen}} van '''[[:$1]]''':",
'logdelete-selected'          => "{{PLURAL:$2|Geselecteerde logboekactie|Geselecteerde logboekacties}} voor '''$1:'''",
'revdelete-text'              => 'Verwijderde bewerkingen zijn zichtbaar in de geschiedenis, maar de inhoud is niet langer publiek toegankelijk.

Andere beheerders van {{SITENAME}} kunnen de verborgen inhoud benaderen en de verwijdering ongedaan maken met behulp van dit scherm, tenzij er aanvullende beperkingen gelden die zijn ingesteld door de systeembeheerder.',
'revdelete-legend'            => 'Versiebeperkingen instellen',
'revdelete-hide-text'         => 'De bewerkte tekst verbergen',
'revdelete-hide-name'         => 'Actie en doel verbergen',
'revdelete-hide-comment'      => 'De bewerkingssamenvatting verbergen',
'revdelete-hide-user'         => 'Gebruikersnaam/IP van de gebruiker verbergen',
'revdelete-hide-restricted'   => 'Deze beperkingen toepassen op zowel beheerders als anderen',
'revdelete-suppress'          => 'Gegevens voor zowel beheerders als anderen onderdrukken',
'revdelete-hide-image'        => 'Bestandsinhoud verbergen',
'revdelete-unsuppress'        => 'Beperkingen op teruggezette wijzigingen verwijderen',
'revdelete-log'               => 'Opmerking in logboek:',
'revdelete-submit'            => 'Toepassen op de geselecteerde bewerking',
'revdelete-logentry'          => 'zichtbaarheid van bewerkingen is gewijzigd voor [[$1]]',
'logdelete-logentry'          => 'wijzigde zichtbaarheid van gebeurtenis [[$1]]',
'revdelete-logaction'         => '$1 {{PLURAL:$1|wijziging|wijzigingen}} ingesteld naar modus $2',
'logdelete-logaction'         => '$1 {{PLURAL:$1|actie|acties}} om [[$3]] naar modus $2 in te stellen',
'revdelete-success'           => 'Zichtbaarheid van de wijziging succesvol ingesteld.',
'logdelete-success'           => 'Zichtbaarheid van de gebeurtenis succesvol ingesteld.',

# Oversight log
'oversightlog'    => 'Oversightlogboek',
'overlogpagetext' => 'Hier onder is een lijst met de meest recente verwijderingen en blokkeringen met betrekking tot informatie die niet zichtbaar is voor admins. Zie de [[Special:Ipblocklist|Lijst van geblokkeerde gebruikers en IP-adressen]] voor een lijst van de blokkades en verbanningen die nu gelden.',

# History merging
'mergehistory'                     => "Geschiedenis van pagina's samenvoegen",
'mergehistory-header'              => "Deze pagina laat u toe om versies van de geschiedenis van een bronpagina naar een nieuwere pagina samen te voegen.
Wees zeker dat deze wijziging de geschiedenisdoorlopendheid van de pagina zal behouden.

'''Tenminste de huidige versie van de bronpagina moet overblijven.'''",
'mergehistory-box'                 => "Versies van twee pagina's samenvoegen:",
'mergehistory-from'                => 'Bronpagina:',
'mergehistory-into'                => 'Bestemmingspagina:',
'mergehistory-list'                => 'Samenvoegbare bewerkingsgeschiedenis',
'mergehistory-merge'               => 'De volgende versies van [[:$1]] kunnen samengevoegd worden naar [[:$2]]. Gebruik de kolom met keuzerondjes om alleen de versies gemaakt op en voor de aangegeven tijd samen te voegen. Let op dat het gebruiken van de navigatielinks deze kolom zal herinstellen.',
'mergehistory-go'                  => 'Samenvoegbare bewerkingen tonen',
'mergehistory-submit'              => 'Versies samenvoegen',
'mergehistory-empty'               => 'Geen enkele versies kunnen samengevoegd worden',
'mergehistory-success'             => '$3 versies van [[:$1|$1]] succesvol samengevoegd naar [[:$2|$2]].',
'mergehistory-fail'                => 'Kan geen geschiedenis samenvoegen, gelieve opnieuw de pagina- en tijdparameters te controleren.',
'mergehistory-no-source'           => 'Bronpagina $1 bestaat niet.',
'mergehistory-no-destination'      => 'Bestemmingspagina $1 bestaat niet.',
'mergehistory-invalid-source'      => 'De bronpagina moet een geldige titel zijn.',
'mergehistory-invalid-destination' => 'De bestemmingspagina moet een geldige titel zijn.',

# Merge log
'mergelog'           => 'Samenvoegingslogboek',
'pagemerge-logentry' => 'voegde [[$1]] naar [[$2]] samen (versies tot en met $3)',
'revertmerge'        => 'Samenvoeging ongedaan maken',
'mergelogpagetext'   => 'Hieronder ziet u een lijst van recente samenvoegingen van een paginageschiedenis naar een andere.',

# Diffs
'history-title'           => 'Geschiedenis van "$1"',
'difference'              => '(Verschil tussen bewerkingen)',
'lineno'                  => 'Regel $1:',
'compareselectedversions' => 'Aangevinkte versies vergelijken',
'editundo'                => 'ongedaan maken',
'diff-multi'              => '({{plural:$1|Eén tussenliggende versie wordt|$1 tussenliggende versies worden}} niet getoond)',

# Search results
'searchresults'         => 'Zoekresultaten',
'searchresulttext'      => 'Voor meer informatie over zoeken op {{SITENAME}}, zie [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'        => "U zocht naar '''[[:$1]]'''",
'searchsubtitleinvalid' => 'Voor zoekopdracht "$1"',
'noexactmatch'          => "'''Er bestaat geen pagina genaamd \"\$1\".''' U kan deze [[:\$1|aanmaken]].",
'noexactmatch-nocreate' => "'''Er bestaat geen pagina genaamd \"\$1\".'''",
'titlematches'          => 'Overeenkomst met onderwerp',
'notitlematches'        => 'Geen resultaten gevonden',
'textmatches'           => 'Overeenkomst met inhoud',
'notextmatches'         => "Geen pagina's gevonden",
'prevn'                 => 'vorige $1',
'nextn'                 => 'volgende $1',
'viewprevnext'          => '($1) ($2) ($3) tonen.',
'showingresults'        => "Hieronder {{PLURAL:$1|staat '''1''' resultaat|staan '''$1''' resultaten}} vanaf #'''$2'''.",
'showingresultsnum'     => "Hieronder {{PLURAL:$3|staat '''1''' resultaat|staan '''$3''' resultaten}} vanaf #'''$2'''.",
'nonefound'             => "'''Opmerking''': mislukte zoekopdrachten worden vaak veroorzaakt door zoeken naar veelvoorkomende woorden als \"van\" en \"het\", die niet in de indexen worden opgenomen, of door meer dan één zoekterm op te geven. Alleen pagina's die alle zoektermen bevatten worden opgenomen in de resultaten.",
'powersearch'           => 'Zoeken',
'powersearchtext'       => 'Zoeken in naamruimten:<br />$1<br />$2 Doorverwijzingen tonen<br />Zoeken naar $3 $9',
'searchdisabled'        => 'Zoeken in {{SITENAME}} is niet mogelijk. U kan gebruik maken van Google. De gegevens over {{SITENAME}} zijn mogelijk niet bijgewerkt.',

# Preferences page
'preferences'              => 'Voorkeuren',
'mypreferences'            => 'Mijn voorkeuren',
'prefs-edits'              => 'Aantal bewerkingen:',
'prefsnologin'             => 'Niet aangemeld',
'prefsnologintext'         => 'U moet [[Special:Userlogin|aangemeld]] zijn om uw voorkeuren te kunnen instellen.',
'prefsreset'               => 'Standaardvoorkeuren zijn hersteld.',
'qbsettings'               => 'Menubalk',
'qbsettings-none'          => 'Uitgeschakeld',
'qbsettings-fixedleft'     => 'Links vast',
'qbsettings-fixedright'    => 'Rechts vast',
'qbsettings-floatingleft'  => 'Links zwevend',
'qbsettings-floatingright' => 'Rechts zwevend',
'changepassword'           => 'Wachtwoord wijzigen',
'skin'                     => 'Vormgeving',
'math'                     => 'Formules',
'dateformat'               => 'Datumopmaak',
'datedefault'              => 'Geen voorkeur',
'datetime'                 => 'Datum en tijd',
'math_failure'             => 'Parsen mislukt',
'math_unknown_error'       => 'onbekende fout',
'math_unknown_function'    => 'onbekende functie',
'math_lexing_error'        => 'lexicografische fout',
'math_syntax_error'        => 'syntactische fout',
'math_image_error'         => 'PNG-omzetting is mislukt. Ga na of latex, dvips en gs correct geïnstalleerd zijn en zet om',
'math_bad_tmpdir'          => 'De map voor tijdelijke bestanden voor wiskundige formules bestaat niet of kan niet gemaakt worden',
'math_bad_output'          => 'De map voor bestanden met wiskundige formules bestaat niet of kan niet gemaakt worden.',
'math_notexvc'             => 'Kan het programma texvc niet vinden; stel alles in volgens de beschrijving in math/README.',
'prefs-personal'           => 'Gebruikersprofiel',
'prefs-rc'                 => 'Recente wijzigingen',
'prefs-watchlist'          => 'Volglijst',
'prefs-watchlist-days'     => 'Dagen te tonen in de volglijst:',
'prefs-watchlist-edits'    => 'Maximaal aantal bewerkingen in de uitgebreide volglijst:',
'prefs-misc'               => 'Diversen',
'saveprefs'                => 'Opslaan',
'resetprefs'               => 'Standaardvoorkeuren herstellen',
'oldpassword'              => 'Huidige wachtwoord:',
'newpassword'              => 'Nieuwe wachtwoord:',
'retypenew'                => 'Herhaling nieuwe wachtwoord:',
'textboxsize'              => 'Bewerken',
'rows'                     => 'Regels:',
'columns'                  => 'Kolommen:',
'searchresultshead'        => 'Zoekresultaten',
'resultsperpage'           => 'Resultaten per pagina:',
'contextlines'             => 'Regels per resultaat:',
'contextchars'             => 'Context per regel:',
'stub-threshold'           => 'Drempel voor markering <a href="#" class="stub">beginnetje</a>:',
'recentchangesdays'        => 'Aantal dagen te tonen in de recente wijzigingen:',
'recentchangescount'       => "Aantal pagina's in Recente wijzigingen:",
'savedprefs'               => 'Uw voorkeuren zijn opgeslagen.',
'timezonelegend'           => 'Tijdzone',
'timezonetext'             => 'Het aantal uren dat uw plaatselijke tijd afwijkt van de servertijd (UTC).',
'localtime'                => 'Plaatselijke tijd',
'timezoneoffset'           => 'Tijdsverschil¹',
'servertime'               => 'Servertijd',
'guesstimezone'            => 'Vanuit de browser toevoegen',
'allowemail'               => 'E-mail van andere gebruikers toestaan',
'defaultns'                => 'Standaard in deze naamruimten zoeken',
'default'                  => 'standaard',
'files'                    => 'Bestanden',

# User rights
'userrights-lookup-user'           => 'Gebruikersgroepen beheren',
'userrights-user-editname'         => 'Voer een gebruikersnaam in:',
'editusergroup'                    => 'Gebruikersgroepen wijzigen',
'userrights-editusergroup'         => 'Gebruikersgroepen wijzigen',
'saveusergroups'                   => 'Gebruikersgroepen opslaan',
'userrights-groupsmember'          => 'Lid van:',
'userrights-groupsremovable'       => 'Verwijderbare groepen:',
'userrights-groupsavailable'       => 'Beschikbare groepen:',
'userrights-groupshelp'            => 'Selecteer de groepen waaruit u de gebruiker wilt verwijderen of aan toe wilt voegen.
Niet geselecteerde groepen worden niet gewijzigd. Deselecteer een groep met "Ctrl + linkermuisknop".',
'userrights-reason'                => 'Reden voor het veranderen:',
'userrights-available-none'        => 'U mag geen gebruikersrechten veranderen.',
'userrights-available-add'         => 'U kan gebruikers toevoegen aan deze {{PLURAL:$2|groep|groepen}}: $1.',
'userrights-available-remove'      => 'U kan gebruikers verwijderen van deze {{PLURAL:$2|groep|groepen}}: $1.',
'userrights-available-add-self'    => 'U kan zichzelf toevoegen aan deze {{PLURAL:$2|groep|groepen}}: $1.',
'userrights-available-remove-self' => 'U kan zichzelf verwijderen uit deze {{PLURAL:$2|groep|groepen}}: $1.',
'userrights-no-interwiki'          => "U heeft geen rechten om gebruikersrechten op andere wiki's te wijzigen.",
'userrights-nodatabase'            => 'Database $1 bestaat niet of is geen plaatselijke database.',
'userrights-nologin'               => 'U moet zich [[Special:Userlogin|aanmelden]] met een gebruiker met de juiste rechten om gebruikersrechten toe te wijzen.',
'userrights-notallowed'            => 'U heeft geen rechten om gebruikersrechten toe te wijzen.',

# Groups
'group'               => 'Groep:',
'group-autoconfirmed' => 'Geregistreerde gebruikers',
'group-bot'           => 'Bots',
'group-sysop'         => 'Beheerders',
'group-bureaucrat'    => 'Bureaucraten',
'group-all'           => '(alles)',

'group-autoconfirmed-member' => 'Geregistreerde gebruiker',
'group-bot-member'           => 'Bot',
'group-sysop-member'         => 'Beheerder',
'group-bureaucrat-member'    => 'Bureaucraat',

'grouppage-autoconfirmed' => '{{ns:project}}:Geregistreerde gebruikers',
'grouppage-bot'           => '{{ns:project}}:Bots',
'grouppage-sysop'         => '{{ns:project}}:Beheerders',
'grouppage-bureaucrat'    => '{{ns:project}}:Bureaucraten',

# User rights log
'rightslog'      => 'Gebruikersrechtenlogboek',
'rightslogtext'  => 'Hieronder staan de wijzigingen in gebruikersrechten.',
'rightslogentry' => 'wijzigde de gebruikersrechten voor $1 van $2 naar $3',
'rightsnone'     => '(geen)',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|bewerking|bewerkingen}}',
'recentchanges'                     => 'Recente wijzigingen',
'recentchangestext'                 => 'Op deze pagina kan u de recentste wijzigingen in deze wiki bekijken.',
'recentchanges-feed-description'    => 'Met deze feed kan u de recentste wijzigingen in deze wiki bekijken.',
'rcnote'                            => "Hieronder {{PLURAL:$1|staat de laatste bewerking|staan de laatste '''$1''' bewerkingen}} in de laatste {{PLURAL:$2|dag|'''$2''' dagen}}, op $3.",
'rcnotefrom'                        => 'Wijzigingen sinds <b>$2</b> (met een maximum van <b>$1</b> wijzigingen).',
'rclistfrom'                        => 'Wijzigingen tonen vanaf $1',
'rcshowhideminor'                   => 'kleine wijzigingen $1',
'rcshowhidebots'                    => 'bots $1',
'rcshowhideliu'                     => 'aangemelde gebruikers $1',
'rcshowhideanons'                   => 'anonieme gebruikers $1',
'rcshowhidepatr'                    => 'gecontroleerde bewerkingen $1',
'rcshowhidemine'                    => 'mijn bewerkingen $1',
'rclinks'                           => 'De $1 laatste wijzigingen tonen in de laatste $2 dagen<br />$3',
'diff'                              => 'wijz',
'hist'                              => 'gesch',
'hide'                              => 'verbergen',
'show'                              => 'tonen',
'minoreditletter'                   => 'k',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|keer|keer}} op een volglijst]',
'rc_categories'                     => 'Beperken tot categorieën (scheiden met een "|")',
'rc_categories_any'                 => 'Elke',
'newsectionsummary'                 => '/* $1 */ nieuwe subkop',

# Recent changes linked
'recentchangeslinked'          => 'Verwante wijzigingen',
'recentchangeslinked-title'    => 'Wijzigingen verwant aan $1',
'recentchangeslinked-noresult' => "Er zijn geen bewerkingen in de gegeven periode geweest op de pagina's die vanaf hier gelinkt worden.",
'recentchangeslinked-summary'  => "Deze speciale pagina toont de laatste bewerkingen op pagina's die gelinkt worden vanaf deze pagina. Pagina's die op [[Special:Watchlist|uw volglijst]] staan worden '''vet''' weergegeven.",

# Upload
'upload'                      => 'Bestand uploaden',
'uploadbtn'                   => 'Bestand uploaden',
'reupload'                    => 'Opnieuw uploaden',
'reuploaddesc'                => 'Terug naar het uploadformulier.',
'uploadnologin'               => 'Niet aangemeld',
'uploadnologintext'           => 'U moet [[Special:Userlogin|aangemeld]] zijn
om bestanden te uploaden.',
'upload_directory_read_only'  => 'De webserver kan niet schrijven in de uploadmap ($1).',
'uploaderror'                 => 'Uploadfout',
'uploadtext'                  => "Gebruik het onderstaande formulier om bestanden te uploaden. Om eerder geüploade bestanden te bekijken of te zoeken kan u naar de [[Special:Imagelist|bestandslijst]] gaan. Uploads en verwijderingen worden bijgehouden in het [[Special:Log/upload|uploadlogboek]].

Om het bestand in te voegen in een pagina kan u een van de volgende codes gebruiken, al naar gelang het bestandsformaat dat van toepassing is:
* '''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:Bestand.jpg]]</nowiki>'''
* '''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:Bestand.png|alternatieve tekst]]</nowiki>'''
* '''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:Bestand.ogg]]</nowiki>'''

De laatste link is bedoeld voor mediabestanden die geen afbeelding zijn.",
'upload-permitted'            => 'Toegelaten bestandstypes: $1.',
'upload-preferred'            => 'Aangewezen bestandstypes: $1.',
'upload-prohibited'           => 'Verboden bestandstypes: $1.',
'uploadlog'                   => 'uploadlogboek',
'uploadlogpage'               => 'Uploadlogboek',
'uploadlogpagetext'           => 'Hieronder staan de nieuwste bestanden.',
'filename'                    => 'Bestandsnaam',
'filedesc'                    => 'Samenvatting',
'fileuploadsummary'           => 'Samenvatting:',
'filestatus'                  => 'Auteursrechtensituatie',
'filesource'                  => 'Bron',
'uploadedfiles'               => 'Geüploade bestanden',
'ignorewarning'               => 'Deze waarschuwing negeren en het bestand toch opslaan.',
'ignorewarnings'              => 'Alle waarschuwingen negeren',
'minlength1'                  => 'Bestandsnamen moeten minstens één letter bevatten.',
'illegalfilename'             => 'De bestandsnaam "$1" bevat ongeldige karakters. Geef het bestand een andere naam, en probeer het dan opnieuw te uploaden.',
'badfilename'                 => 'De naam van het bestand is gewijzigd in "$1".',
'filetype-badmime'            => 'Het is niet toegestaan om bestanden van MIME-type "$1" te uploaden.',
'filetype-unwanted-type'      => "'''\".\$1\"''' is een ongewenst bestandstype.  Aangewezen bestandstypes zijn \$2.",
'filetype-banned-type'        => "'''\".\$1\"''' is geen toegelaten bestandstype.  Toegelaten bestandstypes zijn \$2.",
'filetype-missing'            => 'Dit bestand heeft geen extensie (zoals ".jpg").',
'large-file'                  => 'Aanbeveling: maak bestanden niet groter dan $1, dit bestand is $2.',
'largefileserver'             => 'Het bestand is groter dan de instelling van de server toestaat.',
'emptyfile'                   => 'Het bestand dat u heeft geüpload lijkt leeg te zijn. Dit zou kunnen komen door een typefout in de bestandsnaam. Ga a.u.b. na of u dit bestand werkelijk bedoelde te uploaden.',
'fileexists'                  => 'Er bestaat al een bestand met deze naam. Controleer $1 als u niet zeker weet of u het huidige bestand wilt overschrijven.',
'filepageexists'              => 'Een pagina (geen afbeelding) met deze naam bestaat al, gelieve <strong><tt>$1</tt></strong> te controleren als u niet zeker bent of u het wil wijzigen.',
'fileexists-extension'        => 'Een bestand met dezelfde naam bestaat al:<br />
Naam van het geüploade bestand: <strong><tt>$1</tt></strong><br />
Naam van het bestaande bestand: <strong><tt>$2</tt></strong><br />
Gelieve een andere naam te kiezen.',
'fileexists-thumb'            => "<center>'''Bestaande afbeelding'''</center>",
'fileexists-thumbnail-yes'    => 'Het lijkt een afbeelding van een verkleinde grootte te zijn <i>(thumbnail)</i>. Gelieve het bestand <strong><tt>$1</tt></strong> te controleren.<br />
Als het gecontroleerde bestand dezelfde afbeelding van oorspronkelijke grootte is, is het niet noodzakelijk een extra thumbnail te uploaden.',
'file-thumbnail-no'           => 'De bestandsnaam begint met <strong><tt>$1</tt></strong>. Het lijkt een verkleinde afbeelding te zijn <i>(thumbnail)</i>. Als u deze afbeelding in volledige resolutie heeft, upload die afbeelding dan. Wijzig anders alstublieft de bestandsnaam.',
'fileexists-forbidden'        => 'Er bestaat al een bestand met deze naam. Upload uw bestand onder een andere naam.
[[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Er bestaat al een bestand met deze naam bij de gedeelte bestanden. Upload het bestand onder een andere naam. [[Image:$1|thumb|center|$1]]',
'successfulupload'            => 'De upload is geslaagd',
'uploadwarning'               => 'Uploadwaarschuwing',
'savefile'                    => 'Bestand opslaan',
'uploadedimage'               => 'heeft "[[$1]]" geüpload',
'overwroteimage'              => 'heeft een nieuwe versie van "[[$1]]" toegevoegd',
'uploaddisabled'              => 'Uploaden is uitgeschakeld',
'uploaddisabledtext'          => 'Het uploaden van bestanden is uitgeschakeld op {{SITENAME}}.',
'uploadscripted'              => 'Dit bestand bevat HTML- of scriptcode die foutief door uw browser kan worden weergegeven.',
'uploadcorrupt'               => 'Het bestand is corrupt of heeft een onjuiste extensie. Controleer het bestand en upload het opnieuw.',
'uploadvirus'                 => 'Het bestand bevat een virus! Details: $1',
'sourcefilename'              => 'Oorspronkelijke bestandsnaam',
'destfilename'                => 'Opslaan als',
'watchthisupload'             => 'Deze pagina volgen',
'filewasdeleted'              => 'Er is eerder een bestand met deze naam verwijderd. Raadpleeg het $1 voordat u het opnieuw toevoegt.',
'upload-wasdeleted'           => "'''Waarschuwing: u bent een bestand dat eerder verwijderd was aan het uploaden.'''

Gelieve zeker te zijn dat het geschikt is om door te gaan met het uploaden van dit bestand.
Het verwijderingslogboek van dit bestand kan u hier zien:",
'filename-bad-prefix'         => 'De naam van het bestand dat u aan het uploaden bent begint met <strong>"$1"</strong>, wat een niet-beschrijvende naam is die meestal automatisch door een digitale camera wordt gegeven. Kies alstublieft een duidelijke naam voor uw bestand.',
'filename-prefix-blacklist'   => ' #<!-- leave this line exactly as it is --> <pre>
# De syntaxis is as volgt: 
#   * Alle tekst vanaf het karakter "#" tot het einde van de regel wordt gezien als opmerking
#   * Iedere niet-lege regel is een voorvoegsel voor bestandsnamen die vaak automatisch worden toegekend door digitale camera\'s
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # sommige mobiele telefoons
IMG # algemeen
JD # Jenoptik
MGP # Pentax
PICT # overig
 #</pre> <!-- leave this line exactly as it is -->',

'upload-proto-error'      => 'Verkeerd protocol',
'upload-proto-error-text' => "Uploads via deze methode vereisen URL's die beginnen met <code>http://</code> of <code>ftp://</code>.",
'upload-file-error'       => 'Interne fout',
'upload-file-error-text'  => 'Een interne fout vond plaats toen een tijdelijk bestand op de server werd aangemaakt. Neem aub contact op met een systeembeheerder.',
'upload-misc-error'       => 'Onbekende uploadfout',
'upload-misc-error-text'  => 'Er is tijdens het uploaden een onbekende fout opgetreden. Controleer of de URL correct en beschikbaar is en probeer het opnieuw. Als het probleem aanhoudt, neem dan contact op met een systeembeheerder.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Kon de URL niet bereiken',
'upload-curl-error6-text'  => 'De opgegeven URL is niet bereikbaar. Controleer alstublieft of de URL juist is, en of de website beschikbaar is.',
'upload-curl-error28'      => 'Upload time-out',
'upload-curl-error28-text' => 'Het duurde te lang voordat de website antwoordde. Controleer aub of de website beschikbaar is, wacht even en probeer het dan opnieuw. U kan het misschien proberen als het minder druk is.',

'license'            => 'Licentie',
'nolicense'          => 'Maak een keuze',
'license-nopreview'  => '(Voorvertoning niet beschikbaar)',
'upload_source_url'  => ' (een geldige, publiek toegankelijke URL)',
'upload_source_file' => ' (een bestand op uw computer)',

# Image list
'imagelist'                 => 'Bestandslijst',
'imagelisttext'             => "Hier volgt een lijst met '''$1''' {{PLURAL:$1|bestand|bestanden}} gesorteerd $2.",
'getimagelist'              => 'bezig met ophalen bestandslijst',
'ilsubmit'                  => 'Zoeken',
'showlast'                  => 'De laatste $1 bestanden tonen gesorteerd $2.',
'byname'                    => 'op naam',
'bydate'                    => 'op datum',
'bysize'                    => 'op grootte',
'imgdelete'                 => 'verw',
'imgdesc'                   => 'beschrijving',
'imgfile'                   => 'bestand',
'filehist'                  => 'Bestandsgeschiedenis',
'filehist-help'             => 'Klik op een datum/tijd om het bestand te zien zoals het destijds was.',
'filehist-deleteall'        => 'alles verwijderen',
'filehist-deleteone'        => 'dit verwijderen',
'filehist-revert'           => 'terugdraaien',
'filehist-current'          => 'huidig',
'filehist-datetime'         => 'Datum/tijd',
'filehist-user'             => 'Gebruiker',
'filehist-dimensions'       => 'Afmetingen',
'filehist-filesize'         => 'Bestandsgrootte',
'filehist-comment'          => 'Opmerking',
'imagelinks'                => 'Bestandsverwijzingen',
'linkstoimage'              => "Dit bestand wordt op de volgende pagina's gebruikt:",
'nolinkstoimage'            => 'Geen enkele pagina gebruikt dit bestand.',
'sharedupload'              => 'Dit bestand is een gedeelde upload en kan ook door andere projecten gebruikt worden.',
'shareduploadwiki'          => 'Zie $1 voor verdere informatie.',
'shareduploadwiki-linktext' => 'bestandsbeschrijving',
'noimage'                   => 'Er bestaat geen bestand met deze naam. U kan het $1.',
'noimage-linktext'          => 'uploaden',
'uploadnewversion-linktext' => 'Een nieuwe versie van dit bestand uploaden',
'imagelist_date'            => 'Datum',
'imagelist_name'            => 'Naam',
'imagelist_user'            => 'Gebruiker',
'imagelist_size'            => 'Grootte (bytes)',
'imagelist_description'     => 'Beschrijving',
'imagelist_search_for'      => 'Zoeken naar bestand:',

# File reversion
'filerevert'                => '$1 terugdraaien',
'filerevert-legend'         => 'Bestand terugdraaien',
'filerevert-intro'          => '<span class="plainlinks">U bent \'\'\'[[Media:$1|$1]]\'\'\' aan het terugdraaien tot de [$4 versie op $2, $3]</span>.',
'filerevert-comment'        => 'Opmerking:',
'filerevert-defaultcomment' => 'Teruggedraaid tot de versie op $1, $2',
'filerevert-submit'         => 'Terugdraaien',
'filerevert-success'        => '<span class="plainlinks">\'\'\'[[Media:$1|$1]]\'\'\' is teruggedraaid tot de [$4 versie op $2, $3]</span>.',
'filerevert-badversion'     => 'Er is geen vorige plaatselijke versie van dit bestand met van het opgegeven tijdstip.',

# File deletion
'filedelete'                  => '"$1" verwijderen',
'filedelete-legend'           => 'Bestand verwijderen',
'filedelete-intro'            => "U bent '''[[Media:$1|$1]]''' aan het verwijderen.",
'filedelete-intro-old'        => '<span class="plainlinks">U bent de versie van \'\'\'[[Media:$1|$1]]\'\'\' van [$4 $3, $2] aan het verwijderen.</span>',
'filedelete-comment'          => 'Opmerking:',
'filedelete-submit'           => 'Verwijderen',
'filedelete-success'          => "'''$1''' is verwijderd.",
'filedelete-success-old'      => '<span class="plainlinks">De versie van \'\'\'[[Media:$1|$1]]\'\'\' van $3, $2 is verwijderd.</span>',
'filedelete-nofile'           => "'''$1''' bestaat niet in {{SITENAME}}.",
'filedelete-nofile-old'       => "Er is geen versie van '''$1''' in het archief met de aangegeven eigenschappen.",
'filedelete-iscurrent'        => 'U probeert de nieuwste versie van dit bestand te verwijderen. Plaats alstublieft een oudere versie terug.',
'filedelete-otherreason'      => 'Andere reden:',
'filedelete-reason-otherlist' => 'Andere reden',
'filedelete-reason-dropdown'  => '*Veelvoorkomende redenen voor verwijdering
** Auteursrechtenschending
** Duplicaatbestand',

# MIME search
'mimesearch'         => 'Zoeken op MIME-type',
'mimesearch-summary' => 'Deze pagina maakt het filteren van bestanden voor het MIME-type mogelijk. Invoer: contenttype/subtype, bijvoorbeeld <tt>image/jpeg</tt>.',
'mimetype'           => 'MIME-type:',
'download'           => 'Download',

# Unwatched pages
'unwatchedpages' => "Pagina's die niet op een volglijst staan",

# List redirects
'listredirects' => 'Lijst van doorverwijzingen',

# Unused templates
'unusedtemplates'     => 'Ongebruikte sjablonen',
'unusedtemplatestext' => 'Deze pagina geeft alle pagina\'s weer in de naamruimte sjabloon die op geen enkele pagina gebruikt worden. Vergeet niet de "Links naar deze pagina" te controleren alvorens dit sjabloon te verwijderen.',
'unusedtemplateswlh'  => 'andere links',

# Random page
'randompage'         => 'Willekeurige pagina',
'randompage-nopages' => "Er zijn geen pagina's in deze naamruimte.",

# Random redirect
'randomredirect'         => 'Willekeurige doorverwijzing',
'randomredirect-nopages' => 'Er zijn geen doorverwijzingen in deze naamruimte.',

# Statistics
'statistics'             => 'Statistieken',
'sitestats'              => 'Statistieken van {{SITENAME}}',
'userstats'              => 'Gebruikerstatistieken',
'sitestatstext'          => "In de database {{PLURAL:$1|staat 1 pagina|staan '''$1''' pagina's}}, inclusief overlegpagina's, pagina's over {{SITENAME}}, beginnetjes, doorverwijzingen en andere pagina's die waarschijnlijk geen content zijn.
Er {{PLURAL:$2|is waarschijnlijk 1 pagina|zijn waarschijnlijk '''$2''' pagina's}} met een echte inhoud. 

Er {{PLURAL:$8|is '''1''' bestand|zijn '''$8''' bestanden}} toegevoegd.

Er {{PLURAL:$3|is '''1''' pagina|zijn '''$3''' pagina's}} getoond en '''$4''' {{PLURAL:$4|bewerking|bewerkingen}} gemaakt sinds {{SITENAME}} is opgezet.
Dat komt uit op gemiddeld '''$5''' bewerkingen per pagina en '''$6''' getoonde pagina's per bewerking.

De lengte van de [http://meta.wikimedia.org/wiki/Help:Job_queue job queue] is '''$7'''.",
'userstatstext'          => "Er {{PLURAL:$1|is '''1''' geregistreerde gebruiker|zijn '''$1''' geregistreerde gebruikers}}, waarvan er
'''$2''' (of '''$4%''') $5-rechten {{PLURAL:$2|heeft|hebben}}.",
'statistics-mostpopular' => "Meestbekeken pagina's",

'disambiguations'      => "Doorverwijspagina's",
'disambiguationspage'  => 'Template:Doorverwijspagina',
'disambiguations-text' => "Hieronder staan pagina's die verwijzen naar een '''doorverwijspagina'''. Deze horen waarschijnlijk direct naar het juiste onderwerp te verwijzen. <br />Een pagina wordt gezien als dooverwijspagina als er een sjabloon op staat dat gelinkt is vanaf [[MediaWiki:Disambiguationspage]]",

'doubleredirects'     => 'Dubbele doorverwijzingen',
'doubleredirectstext' => "Deze lijst bevat pagina's die doorverwijzen naar andere doorverwijspagina's. Elke rij bevat links naar de eerste en de tweede doorverwijspagina en een link naar de doelpagina van de tweede doorverwijspagina. Meestal is de laatste pagina het eigenlijke doel.",

'brokenredirects'        => 'Onjuiste doorverwijzingen',
'brokenredirectstext'    => "Hieronder staan doorverwijspagina's die een doorverwijzing bevatten naar een niet-bestaande pagina.",
'brokenredirects-edit'   => '(bewerken)',
'brokenredirects-delete' => '(verwijderen)',

'withoutinterwiki'        => "Pagina's zonder links naar andere talen",
'withoutinterwiki-header' => "De volgende pagina's linken niet naar versies in een andere taal:",
'withoutinterwiki-submit' => 'Tonen',

'fewestrevisions' => "Pagina's met de minste bewerkingen",

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|categorie|categorieën}}',
'nlinks'                  => '$1 {{PLURAL:$1|verwijzing|verwijzingen}}',
'nmembers'                => '$1 {{PLURAL:$1|item|items}}',
'nrevisions'              => '$1 {{PLURAL:$1|versie|versies}}',
'nviews'                  => '{{PLURAL:$1|1 keer|$1 keer}} bekeken',
'specialpage-empty'       => 'Deze pagina is leeg.',
'lonelypages'             => "Weespagina's",
'lonelypagestext'         => "Naar de onderstaande pagina's wordt vanuit {{SITENAME}} niet verwezen.",
'uncategorizedpages'      => "Niet-gecategoriseerde pagina's",
'uncategorizedcategories' => 'Niet-gecategoriseerde categorieën',
'uncategorizedimages'     => 'Niet-gecategoriseerde bestanden',
'uncategorizedtemplates'  => 'Niet-gecategoriseerde sjablonen',
'unusedcategories'        => 'Ongebruikte categorieën',
'unusedimages'            => 'Ongebruikte bestanden',
'popularpages'            => "Populaire pagina's",
'wantedcategories'        => 'Niet-bestaande categorieën met de meeste verwijzingen',
'wantedpages'             => "Niet-bestaande pagina's met de meeste verwijzingen",
'mostlinked'              => "Pagina's waar het meest naar verwezen wordt",
'mostlinkedcategories'    => 'Categorieën waar het meest naar verwezen wordt',
'mostlinkedtemplates'     => 'Meestgebruikte sjablonen',
'mostcategories'          => "Pagina's met de meeste categorieën",
'mostimages'              => 'Meestgebruikte bestanden',
'mostrevisions'           => "Pagina's met de meeste bewerkingen",
'allpages'                => "Alle pagina's",
'prefixindex'             => "Alle pagina's op voorvoegsel",
'shortpages'              => "Korte pagina's",
'longpages'               => "Lange pagina's",
'deadendpages'            => "Pagina's zonder links",
'deadendpagestext'        => "De onderstaande pagina's verwijzen niet naar andere pagina's in deze wiki.",
'protectedpages'          => "Beveiligde pagina's",
'protectedpagestext'      => "De volgende pagina's zijn beveiligd en kunnen niet bewerkt of hernoemd worden",
'protectedpagesempty'     => "Er zijn momenteel geen pagina's beveiligd die aan deze parameters voldoen.",
'protectedtitles'         => 'Beveiligde titels',
'protectedtitlestext'     => 'De volgende titels zijn beveiligd en kunnen niet aangemaakt worden',
'protectedtitlesempty'    => 'Er zijn momenteel geen titels beveiligd die aan deze parameters voldoen.',
'listusers'               => 'Gebruikerslijst',
'specialpages'            => "Speciale pagina's",
'spheading'               => "Speciale pagina's voor alle gebruikers",
'restrictedpheading'      => "Speciale pagina's met beperkte toegang",
'newpages'                => "Nieuwe pagina's",
'newpages-username'       => 'Gebruikersnaam:',
'ancientpages'            => "Oudste pagina's",
'intl'                    => 'Taallinks',
'move'                    => 'Hernoemen',
'movethispage'            => 'Deze pagina hernoemen',
'unusedimagestext'        => '<p>Let op! Het is mogelijk dat er via een directe link verwezen wordt naar een bestand. Een bestand kan hier dus ten onrechte opgenomen zijn.',
'unusedcategoriestext'    => 'Hieronder staan categorieën die zijn aangemaakt, maar door geen enkele pagina of andere categorie gebruikt worden.',
'notargettitle'           => 'Geen doelpagina',
'notargettext'            => 'U heeft niet opgegeven voor welke pagina of gebruiker u deze handeling wilt uitvoeren.',
'pager-newer-n'           => '{{PLURAL:$1|1 nieuwere|$1 nieuwere}}',
'pager-older-n'           => '{{PLURAL:$1|1 oudere|$1 oudere}}',

# Book sources
'booksources'               => 'Boekinformatie',
'booksources-search-legend' => 'Bronnen en informatie over een boek zoeken',
'booksources-go'            => 'Zoeken',
'booksources-text'          => 'Hieronder staat een lijst met koppelingen naar andere websites die nieuwe of gebruikte boeken verkopen, en die wellicht meer informatie over het boek dat u zoekt hebben:',

'categoriespagetext' => 'Deze wiki kent de volgende categorieën.',
'data'               => 'Gegevens',
'userrights'         => 'Gebruikersrechtenbeheer',
'groups'             => 'Gebruikersgroepen',
'alphaindexline'     => '$1 tot $2',
'version'            => 'Softwareversie',

# Special:Log
'specialloguserlabel'  => 'Gebruiker:',
'speciallogtitlelabel' => 'Paginanaam:',
'log'                  => 'Logboeken',
'all-logs-page'        => 'Alle logboeken',
'log-search-legend'    => 'Zoek logboeken',
'log-search-submit'    => 'OK',
'alllogstext'          => 'Dit is het gecombineerde logboek. U kan ook kiezen voor specifieke logboeken en filteren op gebruiker en paginanaam.',
'logempty'             => 'Er zijn geen regels in het logboek die voldoen aan deze criteria.',
'log-title-wildcard'   => "Pagina's zoeken die met deze naam beginnen",

# Special:Allpages
'nextpage'          => 'Volgende pagina ($1)',
'prevpage'          => 'Vorige pagina ($1)',
'allpagesfrom'      => "Pagina's tonen vanaf:",
'allarticles'       => "Alle pagina's",
'allinnamespace'    => "Alle pagina's (naamruimte $1)",
'allnotinnamespace' => "Alle pagina's (niet in naamruimte $1)",
'allpagesprev'      => 'Vorige',
'allpagesnext'      => 'Volgende',
'allpagessubmit'    => 'OK',
'allpagesprefix'    => "Pagina's tonen die beginnen met:",
'allpagesbadtitle'  => 'De opgegeven paginanaam is ongeldig of had een intertaal- of interwikivoorvoegsel. Mogelijk bevatte de naam karakters die niet gebruikt mogen worden in paginanamen.',
'allpages-bad-ns'   => '{{SITENAME}} heeft geen naamruimte "$1".',

# Special:Listusers
'listusersfrom'      => 'Gebruikers tonen vanaf:',
'listusers-submit'   => 'Toon',
'listusers-noresult' => 'Geen gebruiker(s) gevonden.',

# E-mail user
'mailnologin'     => 'Geen verzendadres beschikbaar',
'mailnologintext' => 'U moet [[Special:Userlogin|aangemeld]] zijn en een geldig e-mailadres in uw [[Special:Preferences|voorkeuren]] vermelden om andere gebruikers te kunnen e-mailen.',
'emailuser'       => 'Deze gebruiker e-mailen',
'emailpage'       => 'Gebruiker e-mailen',
'emailpagetext'   => 'Als deze gebruiker een geldig e-mailadres heeft opgegeven, dan kan u via dit formulier een bericht verzenden. Het e-mailadres dat u heeft opgegeven bij uw voorkeuren wordt als afzender gebruikt.',
'usermailererror' => 'Foutmelding bij het verzenden:',
'defemailsubject' => 'E-mail van {{SITENAME}}',
'noemailtitle'    => 'Van deze gebruiker is geen e-mailadres bekend',
'noemailtext'     => 'Deze gebruiker heeft geen e-mailadres opgegeven of wil geen e-mail ontvangen van andere gebruikers.',
'emailfrom'       => 'Van',
'emailto'         => 'Aan',
'emailsubject'    => 'Onderwerp',
'emailmessage'    => 'Bericht',
'emailsend'       => 'Versturen',
'emailccme'       => 'Een kopie van dit bericht naar mijn e-mailadres sturen.',
'emailccsubject'  => 'Kopie van uw bericht aan $1: $2',
'emailsent'       => 'E-mail verzonden',
'emailsenttext'   => 'Uw e-mail is verzonden.',

# Watchlist
'watchlist'            => 'Volglijst',
'mywatchlist'          => 'Volglijst',
'watchlistfor'         => "(voor '''$1''')",
'nowatchlist'          => 'Uw volglijst is leeg.',
'watchlistanontext'    => '$1 is verplicht om uw volglijst in te zien of te wijzigen.',
'watchnologin'         => 'U bent niet aangemeld',
'watchnologintext'     => 'U dient [[Special:Userlogin|aangemeld]] te zijn om uw volglijst te bewerken.',
'addedwatch'           => 'Toegevoegd aan volglijst',
'addedwatchtext'       => "De pagina \"[[:\$1]]\" is toegevoegd aan uw [[Special:Watchlist|volglijst]]. Toekomstige bewerkingen van deze pagina en de bijbehorende overlegpagina worden op [[Special:Watchlist|uw volglijst]] vermeld en worden '''vet''' weergegeven in de [[Special:Recentchanges|lijst van recente wijzigingen]].

Indien u een pagina niet langer wilt volgen, ga dan naar de pagina en klik op \"Niet volgen\" in het menu.",
'removedwatch'         => 'Verwijderd van volglijst',
'removedwatchtext'     => 'De pagina "[[:$1]]" is van uw volglijst verwijderd.',
'watch'                => 'Volgen',
'watchthispage'        => 'Volg deze pagina',
'unwatch'              => 'Niet volgen',
'unwatchthispage'      => 'Niet meer volgen',
'notanarticle'         => 'Is geen pagina',
'watchnochange'        => "Geen van de pagina's op uw volglijst is in deze periode bewerkt.",
'watchlist-details'    => "Er {{PLURAL:$1|staat één pagina|staan $1 pagina's}} op uw volglijst, exclusief overlegpagina's.",
'wlheader-enotif'      => '* U wordt per e-mail gewaarschuwd',
'wlheader-showupdated' => "* Pagina's die zijn bewerkt sinds uw laatste bezoek worden '''vet''' weergegeven",
'watchmethod-recent'   => "controleer recente wijzigingen op pagina's op volglijst",
'watchmethod-list'     => "controleer pagina's op volglijst op wijzigingen",
'watchlistcontains'    => "Er {{PLURAL:$1|staat 1 pagina|staan $1 pagina's}} op uw volglijst.",
'iteminvalidname'      => "Probleem met object '$1', ongeldige naam ...",
'wlnote'               => 'Hieronder {{PLURAL:$1|staat de laaste wijziging|staan de laatste $1 wijzigingen}} in {{PLURAL:$2|het laatste uur|de laatste $2 uur}}.',
'wlshowlast'           => 'Laatste $1 uur, $2 dagen tonen ($3)',
'watchlist-show-bots'  => 'Botbewerkingen tonen',
'watchlist-hide-bots'  => 'Botbewerkingen verbergen',
'watchlist-show-own'   => 'Mijn bewerkingen tonen',
'watchlist-hide-own'   => 'Mijn bewerkingen verbergen',
'watchlist-show-minor' => 'Kleine bewerkingen tonen',
'watchlist-hide-minor' => 'Kleine bewerkingen verbergen',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Bezig met plaatsen op volglijst ...',
'unwatching' => 'Bezig met verwijderen van volglijst ...',

'enotif_mailer'                => '{{SITENAME}} waarschuwingssysteem',
'enotif_reset'                 => "Alle pagina's markeren als bezocht",
'enotif_newpagetext'           => 'Dit is een nieuwe pagina.',
'enotif_impersonal_salutation' => 'gebruiker van {{SITENAME}}',
'changed'                      => 'gewijzigd',
'created'                      => 'aangemaakt',
'enotif_subject'               => 'Pagina $PAGETITLE op {{SITENAME}} is $CHANGEDORCREATED door $PAGEEDITOR',
'enotif_lastvisited'           => 'Zie $1 voor alle wijzigingen sinds uw laatste bezoek.',
'enotif_lastdiff'              => 'Zie $1 om deze wijziging te zien.',
'enotif_anon_editor'           => 'anonieme gebruiker $1',
'enotif_body'                  => 'Beste $WATCHINGUSERNAME,

De pagina $PAGETITLE op {{SITENAME}} is $CHANGEDORCREATED op $PAGEEDITDATE door $PAGEEDITOR, zie $PAGETITLE_URL voor de huidige versie.

$NEWPAGE

Samenvatting van de wijziging: $PAGESUMMARY $PAGEMINOREDIT

Contactgevevens van de auteur:
E-mail: $PAGEEDITOR_EMAIL
Wiki: $PAGEEDITOR_WIKI

Tenzij u deze pagina bezoekt, komen er geen verdere berichten. Op uw volglijst kan u voor alle gevolgde pagina\'s de waarschuwingsinstellingen opschonen.

             Groet van uw {{SITENAME}} waarschuwingssysteem.

--
U kan uw volglijstinstellingen wijzigen op:
{{fullurl:Special:Watchlist/edit}}

Feedback en andere assistentie:
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Deze pagina verwijderen',
'confirm'                     => 'Bevestig',
'excontent'                   => "De inhoud was: '$1'",
'excontentauthor'             => 'inhoud was: "$1" ([[Special:Contributions/$2|$2]] was de enige auteur)',
'exbeforeblank'               => "De inhoud was: '$1'",
'exblank'                     => 'pagina was leeg',
'delete-confirm'              => '"$1" verwijderen',
'delete-legend'               => 'Verwijderen',
'historywarning'              => 'Waarschuwing: de pagina die u wilt verwijderen heeft meerdere versies:',
'confirmdeletetext'           => 'U staat op het punt een pagina te verwijderen, inclusief de geschiedenis. Bevestig alstublieft hieronder dat dit inderdaad uw bedoeling is, dat u de gevolgen begrijpt en dat de verwijdering overeenstemt met het [[{{MediaWiki:Policy-url}}|beleid]].',
'actioncomplete'              => 'Handeling voltooid',
'deletedtext'                 => '"$1" is verwijderd. Zie het $2 voor een overzicht van recente verwijderingen.',
'deletedarticle'              => 'verwijderde "[[$1]]"',
'dellogpage'                  => 'Verwijderingslogboek',
'dellogpagetext'              => "Hieronder is een lijst van recent verwijderde pagina's en bestanden weergegeven.",
'deletionlog'                 => 'Verwijderingslogboek',
'reverted'                    => 'Eerdere versie hersteld',
'deletecomment'               => 'Reden voor verwijderen:',
'deleteotherreason'           => 'Andere/eventuele reden:',
'deletereasonotherlist'       => 'Andere reden',
'deletereason-dropdown'       => '*Veelvoorkomende verwijderingsredenen
** Op aanvraag van auteur
** Schending van auteursrechten
** Vandalisme',
'delete-toobig'               => "Deze pagina heeft een lange bewerkingsgeschiedenis, meer dan $1 versies. Het verwijderen van dit soort pagina's is met rechten beperkt om het per ongeluk verstoren van de werking van {{SITENAME}} te voorkomen.",
'delete-warning-toobig'       => 'Deze pagina heeft een lange bewerkingsgeschiedenis, meer dan $1 versies. Het verwijderen van deze pagina kan de werking van de database van {{SITENAME}} verstoren. Wees voorzichtig.',
'rollback'                    => 'Wijzigingen ongedaan maken',
'rollback_short'              => 'Terugdraaien',
'rollbacklink'                => 'terugdraaien',
'rollbackfailed'              => 'Ongedaan maken van wijzigingen mislukt.',
'cantrollback'                => 'Ongedaan maken van wijzigingen onmogelijk: deze pagina heeft slechts 1 auteur.',
'alreadyrolled'               => 'Het is niet mogelijk om de bewerking van de pagina [[:$1]] door [[User:$2|$2]] ([[User talk:$2|overleg]]) ongedaan te maken. Iemand anders heeft deze pagina al bewerkt of hersteld naar een eerdere versie. 

De meest recente bewerking is gemaakt door [[User:$3|$3]] ([[User talk:$3|overleg]]).',
'editcomment'                 => 'Bewerkingssamenvatting: "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'                  => 'Wijzigingen door [[Special:Contributions/$2|$2]] ([[User talk:$2|Overleg]]); hersteld tot de laatste versie door [[User:$1|$1]]', # Additional available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success'            => 'Wijzigingen door $1 teruggedraaid; laatste versie van $2 hersteld.',
'sessionfailure'              => 'Er lijkt een probleem te zijn met uw aanmeldsessie. Uw handeling is gestopt uit voorzorg tegen een beveiligingsrisico (dat bestaat uit mogelijke "hijacking" van deze sessie). Ga een pagina terug, laad die pagina opnieuw en probeer het nog eens.',
'protectlogpage'              => 'Beveiligingslogboek',
'protectlogtext'              => "Hieronder staan pagina's die recentelijk beveiligd zijn, of waarvan de beveiliging is opgeheven. Zie de [[Special:Protectedpages|lijst met beveiligde pagina's]] voor alle beveiligde pagina's.",
'protectedarticle'            => '"[[$1]]" beveiligd',
'modifiedarticleprotection'   => 'wijzigde beveiligingsniveau voor "[[$1]]"',
'unprotectedarticle'          => 'beveiliging "[[$1]]" opgeheven',
'protectsub'                  => '(beveiligingsniveau voor "$1" aan het instellen)',
'confirmprotect'              => 'Beveiliging bevestigen',
'protectcomment'              => 'Opmerkingen:',
'protectexpiry'               => 'Duur:',
'protect_expiry_invalid'      => 'De aangegeven duur is ongeldig.',
'protect_expiry_old'          => 'Verloopsdatum is in het verleden.',
'unprotectsub'                => '(Beveiliging "$1" opgeheven)',
'protect-unchain'             => 'Hernoemen mogelijk maken',
'protect-text'                => 'Hier kan u het beveiligingsniveau voor de pagina <strong>$1</strong> bekijken en wijzigen.',
'protect-locked-blocked'      => 'U kan het beveiligingsniveau niet wijzigen terwijl u geblokkeerd bent.
Hier zijn de huidige instellingen voor de pagina <strong>[[$1]]</strong>:',
'protect-locked-dblock'       => 'Het beveiligingsniveau kan niet worden gewijzigd omdat de database gesloten is.
Hier zijn de huidige instellingen voor de pagina <strong>[[$1]]</strong>:',
'protect-locked-access'       => "'''Uw gebruiker heeft geen rechten om het beveiligingsniveau te wijzigen.'''
Dit zijn de huidige instellingen voor de pagina <strong>[[$1]]</strong>:",
'protect-cascadeon'           => "Deze pagina is beveiligd omdat die in de volgende {{PLURAL:$1|pagina|pagina's}} is opgenomen, die beveiligd {{PLURAL:$1|is|zijn}} met de cascade-optie. Het beveiligingsniveau wijzigen heeft geen enkel effect.",
'protect-default'             => '(standaard)',
'protect-fallback'            => 'Hiervoor is het recht "$1" nodig',
'protect-level-autoconfirmed' => 'Alleen geregistreerde gebruikers',
'protect-level-sysop'         => 'Alleen beheerders',
'protect-summary-cascade'     => 'cascade',
'protect-expiring'            => 'verloopt op $1',
'protect-cascade'             => "Cascadebeveiliging - beveilig alle pagina's en sjablonen die in deze pagina opgenomen zijn (let op; dit kan grote gevolgen hebben).",
'protect-cantedit'            => 'U kan het beveiligingsniveau van deze pagina niet wijzigen, omdat u geen rechten hebt om het te bewerken.',
'restriction-type'            => 'Rechten:',
'restriction-level'           => 'Beperkingsniveau:',
'minimum-size'                => 'Min. grootte',
'maximum-size'                => 'Max. grootte',
'pagesize'                    => '(bytes)',

# Restrictions (nouns)
'restriction-edit'   => 'Bewerken',
'restriction-move'   => 'Hernoemen',
'restriction-create' => 'Aanmaken',

# Restriction levels
'restriction-level-sysop'         => 'volledig beveiligd',
'restriction-level-autoconfirmed' => 'semibeveiligd',
'restriction-level-all'           => 'elk niveau',

# Undelete
'undelete'                     => "Verwijderde pagina's bekijken",
'undeletepage'                 => "Verwijderde pagina's tonen en terugplaatsen",
'viewdeletedpage'              => "Verwijderde pagina's bekijken",
'undeletepagetext'             => "Hieronder staan pagina's die zijn verwijderd en vanuit het archief teruggeplaatst kunnen worden.",
'undeleteextrahelp'            => "Om de hele pagina inclusief alle eerdere versies terug te plaatsen: laat alle hokjes onafgevinkt en klik op '''''Terugplaatsen'''''. Om slechts bepaalde versies terug te zetten: vink de terug te plaatsen versies aan en klik op '''''Terugplaatsen'''''. Als u op '''''Herinstellen''''' klikt wordt het toelichtingsveld leeggemaakt en worden alle versies gedeselecteerd.",
'undeleterevisions'            => '$1 {{PLURAL:$1|versie|versies}} gearchiveerd',
'undeletehistory'              => 'Als u een pagina terugplaatst, worden alle versies hersteld. Als er al een nieuwe pagina met dezelfde naam is aangemaakt sinds de pagina is verwijderd, worden de eerder verwijderde versies teruggeplaatst en blijft de huidige versie intact. Beperkingen op bestandsversies worden opgeheven bij terugplaatsen.',
'undeleterevdel'               => 'Herstellen is niet mogelijk als daardoor de meest recente versie van de pagina gedeeltelijk wordt vewijderd. Verwijder in zulke gevallen de meest recent verwijderde versies uit de selectie. Versies van bestanden waar u geen toegang toe heeft worden niet hersteld.',
'undeletehistorynoadmin'       => 'Deze pagina is verwijderd. De reden hiervoor staat hieronder, samen met de details van de gebruikers die deze pagina hebben bewerkt vóór de verwijdering. De verwijderde inhoud van de pagina is alleen zichtbaar voor beheerders.',
'undelete-revision'            => 'Verwijderde versie van $1 (per $2) door $3:',
'undeleterevision-missing'     => 'Ongeldige of missende versie. Mogelijk heeft u een verkeerde verwijzing of is de versie hersteld of verwijderd uit het archief.',
'undelete-nodiff'              => 'Geen eerdere versie gevonden.',
'undeletebtn'                  => 'Terugplaatsen',
'undeletereset'                => 'Herinstellen',
'undeletecomment'              => 'Toelichting:',
'undeletedarticle'             => '"[[$1]]" is teruggeplaatst',
'undeletedrevisions'           => '$1 {{PLURAL:$1|versie|versies}} teruggeplaatst',
'undeletedrevisions-files'     => '{{PLURAL:$1|1 versie|$1 versies}} en {{PLURAL:$2|1 bestand|$2 bestanden}} teruggeplaatst',
'undeletedfiles'               => '{{PLURAL:$1|1 bestand|$1 bestanden}} teruggeplaatst',
'cannotundelete'               => 'Verwijderen mislukt. Misschien heeft een andere gebruiker de pagina al verwijderd.',
'undeletedpage'                => "<big>'''$1 is teruggeplaatst'''</big>

In het [[Special:Log/delete|verwijderingslogboek]] staan recente verwijderingen en herstelhandelingen.",
'undelete-header'              => "Zie het [[Special:Log/delete|verwijderingslogboek]] voor recent verwijderde pagina's.",
'undelete-search-box'          => "Verwijderde pagina's doorzoeken",
'undelete-search-prefix'       => "Pagina's tonen die beginnen met:",
'undelete-search-submit'       => 'Zoeken',
'undelete-no-results'          => "Geen pagina's gevonden in het archief met verwijderde pagina's.",
'undelete-filename-mismatch'   => 'Bestandsversie van tijdstip $1 kon niet hersteld worden: bestandsnaam klopte niet',
'undelete-bad-store-key'       => 'Bestandsversie van tijdstip $1 kon niet hersteld worden: het bestand miste al voordat het werd verwijderd.',
'undelete-cleanup-error'       => 'Fout bij het herstellen van ongebruikt archiefbestand "$1".',
'undelete-missing-filearchive' => 'Het lukt niet om ID $1 terug te plaatsen omdat het niet in de database is. Misschien is het al teruggeplaatst.',
'undelete-error-short'         => 'Fout bij het herstellen van bestand: $1',
'undelete-error-long'          => 'Er zijn fouten opgetreden bij het herstellen van het bestand:

$1',

# Namespace form on various pages
'namespace'      => 'Naamruimte:',
'invert'         => 'Omgekeerde selectie',
'blanknamespace' => '(Hoofdnaamruimte)',

# Contributions
'contributions' => 'Bijdragen gebruiker',
'mycontris'     => 'Mijn bijdragen',
'contribsub2'   => 'Voor $1 ($2)',
'nocontribs'    => 'Geen wijzigingen gevonden die aan de gestelde criteria voldoen.',
'ucnote'        => 'Hieronder staan de laatste <b>$1</b> wijzigingen van deze gebruiker in de laatste <b>$2</b> dagen.',
'uclinks'       => 'Toon de laatste $1 wijzigingen; toon de laatste $2 dagen.',
'uctop'         => '(laatste wijziging)',
'month'         => 'Van maand (en eerder):',
'year'          => 'Van jaar (en eerder):',

'sp-contributions-newbies'     => 'Alleen de bijdragen van nieuwe gebruikers tonen',
'sp-contributions-newbies-sub' => 'Voor nieuwelingen',
'sp-contributions-blocklog'    => 'Blokkeerlogboek',
'sp-contributions-search'      => 'Zoeken naar bijdragen',
'sp-contributions-username'    => 'IP-adres of gebruikersnaam:',
'sp-contributions-submit'      => 'Tonen',

'sp-newimages-showfrom' => 'Nieuwe bestanden tonen vanaf $1',

# What links here
'whatlinkshere'       => 'Links naar deze pagina',
'whatlinkshere-title' => "Pagina's die verwijzen naar $1",
'whatlinkshere-page'  => 'Pagina:',
'linklistsub'         => '(Lijst van verwijzingen)',
'linkshere'           => "De volgende pagina's verwijzen naar '''[[:$1]]''':",
'nolinkshere'         => "Geen enkele pagina verwijst naar '''[[:$1]]'''.",
'nolinkshere-ns'      => "Geen enkele pagina linkt naar '''[[:$1]]''' in de gekozen naamruimte.",
'isredirect'          => 'doorverwijspagina',
'istemplate'          => 'ingevoegd als sjabloon',
'whatlinkshere-prev'  => '{{PLURAL:$1|vorige|vorige $1}}',
'whatlinkshere-next'  => '{{PLURAL:$1|volgende|volgende $1}}',
'whatlinkshere-links' => '← links daarnaar',

# Block/unblock
'blockip'                     => 'Gebruiker blokkeren',
'blockiptext'                 => "Gebruik het onderstaande formulier om schrijftoegang voor een gebruiker of IP-adres in te trekken. Doe dit alleen als bescherming tegen vandalisme en in overeenstemming met het [[{{MediaWiki:Policy-url}}|beleid]].
Geef hieronder een reden op (bijvoorbeeld welke pagina's gevandaliseerd zijn).",
'ipaddress'                   => 'IP-adres',
'ipadressorusername'          => 'IP-adres of gebruikersnaam',
'ipbexpiry'                   => 'Duur (maak een keuze)',
'ipbreason'                   => 'Reden',
'ipbreasonotherlist'          => 'Andere reden',
'ipbreason-dropdown'          => "*Veel voorkomende redenen voor blokkades
** Foutieve informatie invoeren
** Verwijderen van informatie uit pagina's
** Spamlinks naar externe websites
** Invoegen van nonsens in pagina's
** Intimiderend gedrag
** Misbruik door meerdere gebruikers
** Onaanvaardbare gebruikersnaam",
'ipbanononly'                 => 'Alleen anonieme gebruikers blokkeren',
'ipbcreateaccount'            => 'Aanmaken gebruikers blokkeren',
'ipbemailban'                 => 'Gebruiker weerhouden van het sturen van e-mail',
'ipbenableautoblock'          => 'Automatisch de IP-adressen van deze gebruiker blokkeren',
'ipbsubmit'                   => 'Deze gebruiker blokkeren',
'ipbother'                    => 'Andere duur',
'ipboptions'                  => '15 minuten:15 min,1 uur:1 hour,2 uur:2 hours,6 uur:6 hours,12 uur:12 hours,1 dag:1 day,3 dagen:3 days,1 week:1 week,2 weken:2 weeks,1 maand:1 month,3 maanden:3 months,6 maanden:6 months,1 jaar:1 year,onbeperkt:infinite', # display1:time1,display2:time2,...
'ipbotheroption'              => 'ander verloop',
'ipbotherreason'              => 'Andere/eventuele reden:',
'ipbhidename'                 => 'Gebruikersnaam/IP van het blokkeerlogboek, de actieve blokkeerlijst en de gebruikerslijst verbergen',
'badipaddress'                => 'Geen geldig IP-adres',
'blockipsuccesssub'           => 'Blokkering geslaagd',
'blockipsuccesstext'          => '[[Special:Contributions/$1|$1]] is geblokkeerd.<br />Zie de [[Special:Ipblocklist|Lijst van geblokkeerde IP-adressen]] voor recente blokkades.',
'ipb-edit-dropdown'           => 'lijst van redenen bewerken',
'ipb-unblock-addr'            => '$1 deblokkeren',
'ipb-unblock'                 => 'een gebruiker of IP-adres deblokkeren',
'ipb-blocklist-addr'          => 'bestaande blokkades voor $1 bekijken',
'ipb-blocklist'               => 'Bestaande blokkades bekijken',
'unblockip'                   => 'Gebruiker deblokkeren',
'unblockiptext'               => 'Gebruik het onderstaande formulier om opnieuw schrijftoegang te geven aan een geblokkeerde gebruiker of IP-adres.',
'ipusubmit'                   => 'Blokkade van dit adres opheffen.',
'unblocked'                   => 'Blokkade van [[User:$1|$1]] is opgeheven',
'unblocked-id'                => 'Blokkade $1 is opgeheven',
'ipblocklist'                 => 'Lijst van geblokkeerde gebruikers en IP-adressen',
'ipblocklist-legend'          => 'Een geblokkeerde gebruiker zoeken',
'ipblocklist-username'        => 'Gebruikersnaam of IP-adres:',
'ipblocklist-submit'          => 'Zoeken',
'blocklistline'               => 'Op $1 blokkeerde $2: $3 ($4)',
'infiniteblock'               => 'onbeperkt',
'expiringblock'               => 'verloopt op $1',
'anononlyblock'               => 'alleen anoniemen',
'noautoblockblock'            => 'autoblok uitgeschakeld',
'createaccountblock'          => 'aanmaken gebruikers geblokkeerd',
'emailblock'                  => 'e-mail geblokkeerd',
'ipblocklist-empty'           => 'De blokkeerlijst is leeg.',
'ipblocklist-no-results'      => 'Dit IP-adres of deze gebruikersnaam is niet geblokkeerd.',
'blocklink'                   => 'blokkeren',
'unblocklink'                 => 'deblokkeren',
'contribslink'                => 'bijdragen',
'autoblocker'                 => "Automatisch geblokkeerd omdat het IP-adres overeenkomt met dat van [[User:\$1|\$1]], die geblokkeerd is om de volgende reden: \"'''\$2'''\"",
'blocklogpage'                => 'Blokkeerlogboek',
'blocklogentry'               => 'blokkeerde "[[$1]]" voor de duur van $2 $3',
'blocklogtext'                => 'Hier ziet u een lijst van de recente blokkeringen en deblokkeringen. Automatische blokkeringen en deblokkeringen komen niet in het logboek. Zie de [[Special:Ipblocklist|Ipblocklist]] voor geblokkeerde adressen.',
'unblocklogentry'             => 'heeft de blokkade van $1 opgeheven',
'block-log-flags-anononly'    => 'alleen anoniemen',
'block-log-flags-nocreate'    => 'aanmaken gebruikers geblokkeerd',
'block-log-flags-noautoblock' => 'autoblokkeren is uitgeschakeld',
'block-log-flags-noemail'     => 'e-mail geblokkeerd',
'range_block_disabled'        => 'De mogelijkheid voor beheerders om een groep IP-addressen te blokkeren is uitgeschakeld.',
'ipb_expiry_invalid'          => 'Ongeldige duur.',
'ipb_already_blocked'         => '"$1" is al geblokkeerd',
'ipb_cant_unblock'            => 'Fout: blokkadenummer $1 niet gevonden. Misschien is de blokkade al opgeheven.',
'ipb_blocked_as_range'        => 'Fout: het IP-adres $1 is niet direct geblokkeerd en de blokkade kan niet opgeheven worden. De blokkade is onderdeel van de reeks $2, waarvan de blokkade wel opgeheven kan worden.',
'ip_range_invalid'            => 'Ongeldige IP-reeks',
'blockme'                     => 'Mij blokkeren',
'proxyblocker'                => 'Proxyblocker',
'proxyblocker-disabled'       => 'Deze functie is uitgeschakeld.',
'proxyblockreason'            => 'Dit is een automatische preventieve blokkade omdat u gebruik maakt van een open proxyserver. Neem a.u.b. contact op met uw Internet provider of uw helpdesk en stel die op de hoogte van dit ernstige beveiligingsprobleem.',
'proxyblocksuccess'           => 'Geslaagd.',
'sorbsreason'                 => 'Uw IP-adres staat bekend als open proxyserver in de DNS-blacklist die {{SITENAME}} gebruikt.',
'sorbs_create_account_reason' => 'Uw IP-adres staat bekend als open proxyserver in de DNS-blacklist die {{SITENAME}} gebruikt. U kan geen gebruiker aanmaken.',

# Developer tools
'lockdb'              => 'Database blokkeren',
'unlockdb'            => 'Blokkering van de database opheffen',
'lockdbtext'          => "Waarschuwing: de database blokkeren heeft tot gevolg dat geen enkele gebruiker meer in staat is pagina's te bewerken, voorkeuren te wijzigen of iets anders te doen waarvoor wijzigingen in de database nodig zijn.

Bevestig dat u deze handeling wilt uitvoeren en dat u de database vrijgeeft nadat het onderhoud is uitgevoerd.",
'unlockdbtext'        => "Na het vrijgeven van de database kunnen gebruikers weer pagina's bewerken, hun voorkeuren wijzigen of iets anders te doen waarvoor er wijzigingen in de database nodig zijn.

Bevestig dat u deze handeling wilt uitvoeren.",
'lockconfirm'         => 'Ja, ik wil de database blokkeren.',
'unlockconfirm'       => 'Ja, ik wil de database vrijgeven.',
'lockbtn'             => 'Database blokkeren',
'unlockbtn'           => 'Database vrijgeven',
'locknoconfirm'       => 'U heeft uw keuze niet bevestigd via het vinkvakje.',
'lockdbsuccesssub'    => 'Blokkeren database geslaagd',
'unlockdbsuccesssub'  => 'Database vrijgegeven.',
'lockdbsuccesstext'   => 'De database is geblokkeerd.
<br />Vergeet niet de database vrij te geven zodra u klaar bent met uw onderhoud.',
'unlockdbsuccesstext' => 'De database is vrijgegeven.',
'lockfilenotwritable' => 'Geen schrijfrechten op het databaselockbestand. Om de database te kunnen blokkeren of vrij te geven, dient de webserver schrijfrechten op dit bestand te hebben.',
'databasenotlocked'   => 'De database is niet geblokkeerd.',

# Move page
'movepage'                => 'Pagina hernoemen',
'movepagetext'            => "Door middel van het onderstaande formulier kan u een pagina hernoemen. De geschiedenis gaat mee naar de nieuwe pagina. De oude naam wordt automatisch een doorverwijzing naar de nieuwe pagina. Verwijzingen naar de oude pagina worden niet aangepast. Controleer na het hernoemen of er geen dubbele of onjuiste doorverwijzingen zijn onstaan. U bent verantwoordelijk voor de doorverwijzingen.

Een pagina kan '''alleen''' hernoemd worden als de nieuwe paginanaam:
* niet bestaat, of
* een doorverwijspagina zonder verdere geschiedenis is.

<b>WAARSCHUWING!</b>
Voor populaire pagina's kan het hernoemen drastische en onvoorziene gevolgen hebben. Zorg ervoor dat u die gevolgen overziet voordat u deze handeling uitvoert.",
'movepagetalktext'        => "De bijbehorende overlegpagina krijgt automatisch een andere naam, '''tenzij''':
* De overlegpagina onder de nieuwe naam al bestaat;
* U het onderstaande vinkje deselecteert.",
'movearticle'             => 'Hernoemen van pagina',
'movenologin'             => 'Niet aangemeld',
'movenologintext'         => 'U moet [[Special:Userlogin|aangemeld]] zijn om een pagina te hernoemen.',
'movenotallowed'          => "U kan geen pagina's hernoemen op {{SITENAME}}.",
'newtitle'                => 'Naar de nieuwe paginanaam',
'move-watch'              => 'Deze pagina volgen',
'movepagebtn'             => 'Pagina hernoemen',
'pagemovedsub'            => 'Hernoemen pagina geslaagd',
'movepage-moved'          => '<big>\'\'\'"$1" is hernoemd naar "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'De pagina bestaat al of de paginanaam is ongeldig.
Kies a.u.b. een andere paginanaam.',
'cantmove-titleprotected' => 'U kan geen pagina naar deze titel hernoemen, omdat de nieuwe titel beveiligd is tegen het aanmaken ervan.',
'talkexists'              => "'''De pagina is hernoemd, maar de overlegpagina kon niet hernoemd worden omdat er al een pagina met de nieuwe naam bestaat. Combineer de overlegpagina's a.u.b. handmatig.'''",
'movedto'                 => 'hernoemd naar',
'movetalk'                => 'Bijbehorende overlegpagina hernoemen',
'talkpagemoved'           => 'De bijbehorende overlegpagina is ook hernoemd.',
'talkpagenotmoved'        => 'De bijhorende overlegpagina is <strong>niet</strong> hernoemd.',
'1movedto2'               => '[[$1]] hernoemd naar [[$2]]',
'1movedto2_redir'         => '[[$1]] hernoemd over de doorverwijzing [[$2]]',
'movelogpage'             => 'Hernoemingslogboek',
'movelogpagetext'         => "Hieronder staan hernoemde pagina's.",
'movereason'              => 'Reden',
'revertmove'              => 'terugdraaien',
'delete_and_move'         => 'Verwijderen en hernoemen',
'delete_and_move_text'    => '==Verwijdering nodig== 
Onder de naam "[[$1]]" bestaat al een pagina. Wilt u deze verwijderen om plaats te maken voor de te hernoemen pagina?',
'delete_and_move_confirm' => 'Ja, de pagina verwijderen',
'delete_and_move_reason'  => 'Verwijderd in verband met hernoeming',
'selfmove'                => 'U kan een pagina niet hernoemen naar dezelfde paginanaam.',
'immobile_namespace'      => 'De gewenste paginanaam is van een speciaal type. Een pagina kan niet hernoemd worden naar die naamruimte.',

# Export
'export'            => 'Exporteren',
'exporttext'        => 'U kan de tekst en geschiedenis van een pagina of pagina\'s exporteren naar XML. Dit exportbestand is daarna te importeren in een andere MediaWiki via de [[Special:Import|importpagina]].

Geef in het onderstaande veld de namen van de te exporteren pagina\'s op, één pagina per regel, en geef aan of u alle versies met de bewerkingssamenvatting of alleen de huidige versies met de bewerkingssamenvatting wilt exporteren.

In het laatste geval kan u ook een link gebruiken, bijvoorbeeld [[Special:Export/{{Mediawiki:Mainpage}}]] voor de pagina "{{Mediawiki:Mainpage}}".',
'exportcuronly'     => 'Alleen de laatste versie, niet de volledige geschiedenis',
'exportnohistory'   => "---- 
'''Let op:''' het exporteren van de gehele geschiedenis is uitgeschakeld wegens prestatieredenen.",
'export-submit'     => 'Exporteren',
'export-addcattext' => "Pagina's toevoegen van categorie:",
'export-addcat'     => 'Toevoegen',
'export-download'   => 'Als bestand opslaan',
'export-templates'  => 'Sjablonen toevoegen',

# Namespace 8 related
'allmessages'               => 'Systeemteksten',
'allmessagesname'           => 'Naam',
'allmessagesdefault'        => 'Standaardinhoud',
'allmessagescurrent'        => 'Huidige inhoud',
'allmessagestext'           => 'Hieronder staan de systeemberichten  uit de MediaWiki-naamruimte:',
'allmessagesnotsupportedDB' => "Er is geen ondersteuning voor '''{{ns:special}}:AllMessages''' omdat '''\$wgUseDatabaseMessages''' is uitgeschakeld.",
'allmessagesfilter'         => 'Bericht naamfilter:',
'allmessagesmodified'       => 'Alleen gewijzigde systeemteksten tonen',

# Thumbnails
'thumbnail-more'           => 'Groter',
'missingimage'             => '<b>Bestand ontbreekt</b><br /><i>$1</i>',
'filemissing'              => 'Bestand is zoek',
'thumbnail_error'          => 'Fout bij het aanmaken van thumbnail: $1',
'djvu_page_error'          => 'DjVu-pagina buiten bereik',
'djvu_no_xml'              => 'De XML voor het DjVu-bestand kon niet opgehaald worden',
'thumbnail_invalid_params' => 'Onjuiste thumbnailparameters',
'thumbnail_dest_directory' => 'Niet in staat doelmap aan te maken',

# Special:Import
'import'                     => "Pagina's importeren",
'importinterwiki'            => 'Transwiki-import',
'import-interwiki-text'      => 'Selecteer een wiki en paginanaam om te importeren.
Versie- en auteursgegevens blijven hierbij bewaard.
Alle transwiki-importhandelingen worden opgeslagen in het [[Special:Log/import|importlogboek]].',
'import-interwiki-history'   => 'Volledige geschiedenis van deze pagina ook kopiëren',
'import-interwiki-submit'    => 'Importeren',
'import-interwiki-namespace' => 'Pagina in de volgende naamruimte plaatsen:',
'importtext'                 => 'Gebruik de functie Special:Export in de wiki waar de informatie vandaan komt, sla de uitvoer op uw eigen systeem op, en voeg die daarna hier toe.',
'importstart'                => "Pagina's aan het importeren ...",
'import-revision-count'      => '$1 {{PLURAL:$1|versie|versies}}',
'importnopages'              => "Geen pagina's te importeren.",
'importfailed'               => 'Import is mislukt: $1',
'importunknownsource'        => 'Onbekend importbrontype',
'importcantopen'             => 'Kon het importbestand niet openen',
'importbadinterwiki'         => 'Verkeerde interwikilink',
'importnotext'               => 'Leeg of geen tekst',
'importsuccess'              => 'Import afgerond!',
'importhistoryconflict'      => 'Er zijn conflicten in de geschiedenis van de pagina (is misschien eerder geïmporteerd)',
'importnosources'            => 'Er zijn geen transwiki-importbronnen gedefinieerd en directe geschiedenis-uploads zijn uitgeschakeld.',
'importnofile'               => 'Er is geen importbestand geüpload.',
'importuploaderrorsize'      => 'Upload van het importbestand in mislukt. Het bestand is groter dan de ingestelde limiet.',
'importuploaderrorpartial'   => 'Upload van het importbestand in mislukt. Het bestand is slechts gedeeltelijk aangekomen.',
'importuploaderrortemp'      => 'Upload van het importbestand in mislukt. De tijdelijke map is niet aanwezig.',
'import-parse-failure'       => 'Fout bij het verwerken van de XML-import',
'import-noarticle'           => "Er zijn geen te importeren pagina's!",
'import-nonewrevisions'      => 'Alle versies zijn al eerder geïmporteerd.',
'xml-error-string'           => '$1 op regel $2, kolom $3 (byte $4): $5',

# Import log
'importlogpage'                    => 'Importlogboek',
'importlogpagetext'                => "Administratieve import van pagina's met geschiedenis van andere wiki's.",
'import-logentry-upload'           => 'importeerde [[$1]] via een bestandsupload',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|versie|versies}}',
'import-logentry-interwiki'        => 'importeerde $1 via transwiki',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|versie|versies}} van $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Mijn gebruikerspagina',
'tooltip-pt-anonuserpage'         => 'Gebruikerspagina voor uw IP-adres',
'tooltip-pt-mytalk'               => 'Mijn overlegpagina',
'tooltip-pt-anontalk'             => 'Overlegpagina van de anonieme gebruiker van dit IP-adres',
'tooltip-pt-preferences'          => 'Mijn voorkeuren',
'tooltip-pt-watchlist'            => 'Pagina',
'tooltip-pt-mycontris'            => 'Mijn bijdragen',
'tooltip-pt-login'                => 'U wordt van harte uitgenodigd om u aan te melden als gebruiker, maar dit is niet verplicht',
'tooltip-pt-anonlogin'            => 'U wordt van harte uitgenodigd om u aan te melden als gebruiker, maar dit is niet verplicht',
'tooltip-pt-logout'               => 'Afmelden',
'tooltip-ca-talk'                 => 'Overleg over deze pagina',
'tooltip-ca-edit'                 => 'U kan deze pagina bewerken. Gebruik a.u.b. de voorbeeldweergaveknop alvorens te bewaren.',
'tooltip-ca-addsection'           => 'Een opmerking aan de overlegpagina toevoegen',
'tooltip-ca-viewsource'           => 'Deze pagina is beveiligd. U kan wel de bron bekijken.',
'tooltip-ca-history'              => 'Eerdere versies van deze pagina',
'tooltip-ca-protect'              => 'Deze pagina beveiligen',
'tooltip-ca-delete'               => 'Deze pagina verwijderen',
'tooltip-ca-undelete'             => 'Verwijderde bewerkingen van deze pagina terugplaatsen',
'tooltip-ca-move'                 => 'Deze pagina hernoemen',
'tooltip-ca-watch'                => 'Deze pagina aan mijn volglijst toevoegen',
'tooltip-ca-unwatch'              => 'Deze pagina van mijn volglijst verwijderen',
'tooltip-search'                  => '{{SITENAME}} doorzoeken',
'tooltip-search-go'               => 'Naar een pagina met deze exacte naam gaan als die bestaat',
'tooltip-search-fulltext'         => "De pagina's voor deze tekst zoeken",
'tooltip-p-logo'                  => 'Hoofdpaginalogo',
'tooltip-n-mainpage'              => 'Ga naar de Hoofdpagina',
'tooltip-n-portal'                => 'Informatie over het project: wie, wat, hoe en waarom',
'tooltip-n-currentevents'         => 'Achtergrondinformatie over actuele zaken',
'tooltip-n-recentchanges'         => 'De lijst van recente wijzigingen in deze wiki.',
'tooltip-n-randompage'            => 'Een willekeurige pagina tonen',
'tooltip-n-help'                  => 'Hulpinformatie over deze wiki',
'tooltip-n-sitesupport'           => 'Ondersteun ons financieel',
'tooltip-t-whatlinkshere'         => "Lijst van alle pagina's die naar deze pagina verwijzen",
'tooltip-t-recentchangeslinked'   => "Recente wijzigingen in pagina's gelinkt vanaf deze pagina",
'tooltip-feed-rss'                => 'RSS-feed voor deze pagina',
'tooltip-feed-atom'               => 'Atom-feed voor deze pagina',
'tooltip-t-contributions'         => 'Bijdragen van deze gebruiker',
'tooltip-t-emailuser'             => 'Een e-mail naar deze gebruiker verzenden',
'tooltip-t-upload'                => 'Bestanden uploaden',
'tooltip-t-specialpages'          => "Lijst van alle speciale pagina's",
'tooltip-t-print'                 => 'Printvriendelijke versie van deze pagina',
'tooltip-t-permalink'             => 'Permanente link naar deze versie van de pagina',
'tooltip-ca-nstab-main'           => 'Inhoudspagina tonen',
'tooltip-ca-nstab-user'           => 'Gebruikerspagina tonen',
'tooltip-ca-nstab-media'          => 'Mediapagina tonen',
'tooltip-ca-nstab-special'        => 'Dit is een speciale pagina, u kan de pagina zelf niet bewerken',
'tooltip-ca-nstab-project'        => 'Projectpagina tonen',
'tooltip-ca-nstab-image'          => 'Bestandspagina tonen',
'tooltip-ca-nstab-mediawiki'      => 'Systeembericht tonen',
'tooltip-ca-nstab-template'       => 'Sjabloon tonen',
'tooltip-ca-nstab-help'           => 'Hulppagina tonen',
'tooltip-ca-nstab-category'       => 'Categoriepagina tonen',
'tooltip-minoredit'               => 'Dit als een kleine wijziging markeren',
'tooltip-save'                    => 'Uw wijzigen opslaan',
'tooltip-preview'                 => 'Een voorvertoning maken. Gebruik dit!',
'tooltip-diff'                    => 'Gemaakte wijzigingen tonen (zoals het in de geschiedenis zal te zien zijn)',
'tooltip-compareselectedversions' => 'De verschillen tussen de geselecteerde versies van deze pagina tonen.',
'tooltip-watch'                   => 'Deze pagina aan uw volglijst toevoegen',
'tooltip-recreate'                => 'Deze pagina opnieuw aanmaken ondanks eerdere verwijdering',
'tooltip-upload'                  => 'Uploaden',

# Stylesheets
'common.css'   => '/** CSS die hier wordt geplaatst heeft invloed op alle skins */',
'monobook.css' => '/* Een CSS die hier wordt geplaatst heeft invloed op alle gebruikers van de skin Monobook */',

# Scripts
'common.js'   => '/* JavaScript hier zal invloed hebben op elke pagina voor elke gebruiker. */',
'monobook.js' => '/* Het wordt aangeraden om [[MediaWiki:common.js]] te gebruiken */',

# Metadata
'nodublincore'      => 'Dublin Core RDF metadata is uitgeschakeld op deze server.',
'nocreativecommons' => 'Creative Commons RDF metadata is uitgeschakeld op deze server.',
'notacceptable'     => 'De wikiserver kan de gegevens niet leveren in een vorm die uw client kan lezen.',

# Attribution
'anonymous'        => 'Anonieme gebruiker(s) van {{SITENAME}}',
'siteuser'         => '{{SITENAME}}-gebruiker $1',
'lastmodifiedatby' => 'Deze pagina is het laatst bewerkt op $2, $1 door $3.', # $1 date, $2 time, $3 user
'othercontribs'    => 'Gebaseerd op werk van $1.',
'others'           => 'anderen',
'siteusers'        => '{{SITENAME}}-gebruiker(s) $1',
'creditspage'      => 'Auteurspagina',
'nocredits'        => 'Er is geen auteursinformatie beschikbaar voor deze pagina.',

# Spam protection
'spamprotectiontitle'    => 'Spamfilter',
'spamprotectiontext'     => 'De pagina die u wilde opslaan is geblokkeerd door het spamfilter. Meestal wordt dit door een externe link veroorzaakt.',
'spamprotectionmatch'    => 'De volgende tekst veroorzaakte een alarm van de spamfilter: $1',
'subcategorycount'       => 'Er {{PLURAL:$1|is 1 ondercategorie|zijn $1 ondercategorieën}} binnen deze categorie.',
'categoryarticlecount'   => "Er {{PLURAL:$1|bevindt zich 1 pagina|bevinden zich $1 pagina's}} in deze categorie.",
'category-media-count'   => 'Er {{PLURAL:$1|staat één bestand|staan $1 bestanden}} in deze categorie.',
'listingcontinuesabbrev' => 'meer',
'spambot_username'       => 'MediaWiki opschoning spam',
'spam_reverting'         => 'Bezig met terugdraaien naar de laatste versie die geen verwijzing heeft naar $1',
'spam_blanking'          => 'Alle wijzigingen met een link naar $1 worden verwijderd',

# Info page
'infosubtitle'   => 'Informatie voor pagina',
'numedits'       => 'Aantal bewerkingen (pagina): $1',
'numtalkedits'   => 'Aantal bewerkingen (overlegpagina): $1',
'numwatchers'    => 'Aantal volgers: $1',
'numauthors'     => 'Aantal auteurs (pagina): $1',
'numtalkauthors' => 'Aantal verschilende auteurs (overlegpagina): $1',

# Math options
'mw_math_png'    => 'Altijd als PNG weergeven',
'mw_math_simple' => 'HTML voor eenvoudige formules, anders PNG',
'mw_math_html'   => 'HTML indien mogelijk, anders PNG',
'mw_math_source' => 'Toon de TeX broncode (voor tekstbrowsers)',
'mw_math_modern' => 'Aanbevolen methode voor recente browsers',
'mw_math_mathml' => 'MathML als mogelijk (experimenteel)',

# Patrolling
'markaspatrolleddiff'                 => 'Markeren als gecontroleerd',
'markaspatrolledtext'                 => 'Deze pagina markeren als gecontroleerd',
'markedaspatrolled'                   => 'Gemarkeerd als gecontroleerd',
'markedaspatrolledtext'               => 'De gekozen versie is gemarkeerd als gecontroleerd.',
'rcpatroldisabled'                    => 'De controlemogelijkheid op recente wijzigingen is uitgeschakeld.',
'rcpatroldisabledtext'                => 'De mogelijkheid om recente wijzigingen als gecontroleerd aan te merken is op dit ogenblik uitgeschakeld.',
'markedaspatrollederror'              => 'Kan niet als gecontroleerd worden aangemerkt',
'markedaspatrollederrortext'          => 'Selecteer een versie om als gecontroleerd aan te merken.',
'markedaspatrollederror-noautopatrol' => 'U kan uw eigen wijzigingen niet als gecontroleerd markeren.',

# Patrol log
'patrol-log-page' => 'Markeerlogboek',
'patrol-log-line' => 'markeerde versie $1 van $2 als gecontroleerd $3',
'patrol-log-auto' => '(automatisch)',
'patrol-log-diff' => '$1',

# Image deletion
'deletedrevision'                 => 'Oude versie $1 verwijderd.',
'filedeleteerror-short'           => 'Fout bij het verwijderen van bestand: $1',
'filedeleteerror-long'            => 'Er zijn fouten opgetreden bij het verwijderen van het bestand:

$1',
'filedelete-missing'              => 'Het bestand "$1" kan niet verwijderd worden, omdat het niet bestaat.',
'filedelete-old-unregistered'     => 'De aangegeven bestandsversie "$1" staat niet in de database`.',
'filedelete-current-unregistered' => 'Het aangegeven bestand "$1" staat niet in de database.',
'filedelete-archive-read-only'    => 'De webserver kan niet in de archiefmap "$1" schrijven.',

# Browsing diffs
'previousdiff' => '← Vorige wijziging',
'nextdiff'     => 'Volgende wijziging →',

# Media information
'mediawarning'         => "'''Waarschuwing''': dit bestand bevat mogelijk programmacode die uw systeem schade kan berokkenen.<hr />",
'imagemaxsize'         => 'Maximale grootte beelden op beschrijvingspagina:',
'thumbsize'            => 'Grootte thumbnail:',
'widthheight'          => '$1x$2',
'widthheightpage'      => "$1×$2, $3 pagina's",
'file-info'            => '(bestandsgrootte: $1, MIME-type: $2)',
'file-info-size'       => '($1 × $2 pixels, bestandsgrootte: $3, MIME-type: $4)',
'file-nohires'         => '<small>Geen hogere resolutie beschikbaar.</small>',
'svg-long-desc'        => '(SVG-bestand, nominaal $1 × $2 pixels, bestandsgrootte: $3)',
'show-big-image'       => 'Hogere resolutie',
'show-big-image-thumb' => '<small>Grootte van deze afbeelding: $1 × $2 pixels</small>',

# Special:Newimages
'newimages'    => 'Nieuwe bestanden',
'showhidebots' => '(Bots $1)',
'noimages'     => 'Niets te zien.',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'hours-abbrev' => 'u',

# Bad image list
'bad_image_list' => "De opmaak is als volgt:

Alleen regels in een lijst (regels die beginnen met *) worden verwerkt. De eerste link op een regel moet een link zijn naar een ongewenste afbeelding.
Alle volgende links die op dezelfde regel staan, worden behandeld als uitzondering, zoals bijvoorbeeld pagina's waarop het bestand in de tekst is opgenomen.",

# Metadata
'metadata'          => 'Metadata',
'metadata-help'     => 'Dit bestand bevat aanvullende informatie, die door een fotocamera, scanner of fotobewerkingsprogramma toegevoegd kan zijn. Als het bestand is aangepast, dan komen details mogelijk niet overeen met de gewijzigde afbeelding.',
'metadata-expand'   => 'Uitgebreide gegevens tonen',
'metadata-collapse' => 'Uitgebreide gegevens verbergen',
'metadata-fields'   => 'De EXIF-metadatavelden in dit bericht worden ook getoond op een afbeeldingspagina als de metadatatabel ingeklapt is. Andere velden worden verborgen.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Breedte',
'exif-imagelength'                 => 'Hoogte',
'exif-bitspersample'               => 'Bits per component',
'exif-compression'                 => 'Compressieschema',
'exif-photometricinterpretation'   => 'Pixelcompositie',
'exif-orientation'                 => 'Oriëntatie',
'exif-samplesperpixel'             => 'Aantal componenten',
'exif-planarconfiguration'         => 'Gegevensstructuur',
'exif-ycbcrsubsampling'            => 'Subsampleverhouding van Y tot C',
'exif-ycbcrpositioning'            => 'Y- en C-positionering',
'exif-xresolution'                 => 'Horizontale resolutie',
'exif-yresolution'                 => 'Verticale resolutie',
'exif-resolutionunit'              => 'Eenheid X en Y resolutie',
'exif-stripoffsets'                => 'Locatie afbeeldingsgegevens',
'exif-rowsperstrip'                => 'Rijen per strip',
'exif-stripbytecounts'             => 'Bytes per gecomprimeerde strip',
'exif-jpeginterchangeformat'       => 'Afstand tot JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes JPEG-gegevens',
'exif-transferfunction'            => 'Transferfunctie',
'exif-whitepoint'                  => 'Witpuntchromaticiteit',
'exif-primarychromaticities'       => 'Chromaticities of primaries',
'exif-ycbcrcoefficients'           => 'Transformatiematrixcoëfficiënten voor de kleurruimte',
'exif-referenceblackwhite'         => 'Paar zwart en wit referentiewaarden',
'exif-datetime'                    => 'Tijdstip laatste bestandswijziging',
'exif-imagedescription'            => 'Omschrijving afbeelding',
'exif-make'                        => 'Merk camera',
'exif-model'                       => 'Cameramodel',
'exif-software'                    => 'Gebruikte software',
'exif-artist'                      => 'Auteur',
'exif-copyright'                   => 'Auteursrechtenhouder',
'exif-exifversion'                 => 'Exif-versie',
'exif-flashpixversion'             => 'Ondersteunde Flashpix-versie',
'exif-colorspace'                  => 'Kleurruimte',
'exif-componentsconfiguration'     => 'Betekenis van elke component',
'exif-compressedbitsperpixel'      => 'Beeldcompressiemethode',
'exif-pixelydimension'             => 'Bruikbare afbeeldingsbreedte',
'exif-pixelxdimension'             => 'Bruikbare afbeeldingshoogte',
'exif-makernote'                   => 'Opmerkingen maker',
'exif-usercomment'                 => 'Opmerkingen',
'exif-relatedsoundfile'            => 'Bijbehorend audiobestand',
'exif-datetimeoriginal'            => 'Tijdstip gegevensaanmaak',
'exif-datetimedigitized'           => 'Tijdstip digitalisering',
'exif-subsectime'                  => 'Datum tijd subseconden',
'exif-subsectimeoriginal'          => 'Subseconden tijdstip datageneratie',
'exif-subsectimedigitized'         => 'Subseconden tijdstip digitalisatie',
'exif-exposuretime'                => 'Belichtingstijd',
'exif-exposuretime-format'         => '$1 sec ($2)',
'exif-fnumber'                     => 'F-getal',
'exif-exposureprogram'             => 'Belichtingsprogramma',
'exif-spectralsensitivity'         => 'Spectrale gevoeligheid',
'exif-isospeedratings'             => 'ISO/ASA-waarde',
'exif-oecf'                        => 'Opto-elektronische conversiefactor',
'exif-shutterspeedvalue'           => 'Sluitersnelheid',
'exif-aperturevalue'               => 'Diafragma',
'exif-brightnessvalue'             => 'Helderheid',
'exif-exposurebiasvalue'           => 'Belichtingscompensatie',
'exif-maxaperturevalue'            => 'Maximale diafragma-opening',
'exif-subjectdistance'             => 'Objectafstand',
'exif-meteringmode'                => 'Methode lichtmeting',
'exif-lightsource'                 => 'Lichtbron',
'exif-flash'                       => 'Flitser',
'exif-focallength'                 => 'Brandpuntsafstand',
'exif-subjectarea'                 => 'Objectruimte',
'exif-flashenergy'                 => 'Flitssterkte',
'exif-spatialfrequencyresponse'    => 'Ruimtelijke frequentiereactie',
'exif-focalplanexresolution'       => 'Brandpuntsvlak-X-resolutie',
'exif-focalplaneyresolution'       => 'Brandpuntsvlak-Y-resolutie',
'exif-focalplaneresolutionunit'    => 'Eenheid CCD-resolutie',
'exif-subjectlocation'             => 'Objectlocatie',
'exif-exposureindex'               => 'Belichtingsindex',
'exif-sensingmethod'               => 'Opvangmethode',
'exif-filesource'                  => 'Bestandsbron',
'exif-scenetype'                   => 'Soort scene',
'exif-cfapattern'                  => 'CFA-patroon',
'exif-customrendered'              => 'Aangepaste beeldverwerking',
'exif-exposuremode'                => 'Belichtingsinstelling',
'exif-whitebalance'                => 'Witbalans',
'exif-digitalzoomratio'            => 'Digitale zoomfactor',
'exif-focallengthin35mmfilm'       => 'Brandpuntsafstand (35mm-equivalent)',
'exif-scenecapturetype'            => 'Soort opname',
'exif-gaincontrol'                 => 'Piekbeheersing',
'exif-contrast'                    => 'Contrast',
'exif-saturation'                  => 'Verzadiging',
'exif-sharpness'                   => 'Scherpte',
'exif-devicesettingdescription'    => 'Omschrijving apparaatinstellingen',
'exif-subjectdistancerange'        => 'Bereik objectafstand',
'exif-imageuniqueid'               => 'Uniek ID afbeelding',
'exif-gpsversionid'                => 'GPS versienummer',
'exif-gpslatituderef'              => 'Noorder- of zuiderbreedte',
'exif-gpslatitude'                 => 'Breedtegraad',
'exif-gpslongituderef'             => 'Ooster- of westerlengte',
'exif-gpslongitude'                => 'Lengtegraad',
'exif-gpsaltituderef'              => 'Hoogtereferentie',
'exif-gpsaltitude'                 => 'Hoogte',
'exif-gpstimestamp'                => 'GPS-tijd (atoomklok)',
'exif-gpssatellites'               => 'Gebruikte satellieten voor meting',
'exif-gpsstatus'                   => 'Ontvangerstatus',
'exif-gpsmeasuremode'              => 'Meetmodus',
'exif-gpsdop'                      => 'Meetprecisie',
'exif-gpsspeedref'                 => 'Snelheid eenheid',
'exif-gpsspeed'                    => 'Snelheid van GPS-ontvanger',
'exif-gpstrackref'                 => 'Referentie voor bewegingsrichting',
'exif-gpstrack'                    => 'Bewegingsrichting',
'exif-gpsimgdirectionref'          => 'Referentie voor afbeeldingsrichting',
'exif-gpsimgdirection'             => 'Afbeeldingsrichting',
'exif-gpsmapdatum'                 => 'Gebruikte geodetische onderzoeksgegevens',
'exif-gpsdestlatituderef'          => 'Referentie voor breedtegraad bestemming',
'exif-gpsdestlatitude'             => 'Breedtegraad bestemming',
'exif-gpsdestlongituderef'         => 'Referentie voor lengtegraad bestemming',
'exif-gpsdestlongitude'            => 'Lengtegraad bestemming',
'exif-gpsdestbearingref'           => 'Referentie voor richting naar bestemming',
'exif-gpsdestbearing'              => 'Richting naar bestemming',
'exif-gpsdestdistanceref'          => 'Referentie voor afstand tot bestemming',
'exif-gpsdestdistance'             => 'Afstand tot bestemming',
'exif-gpsprocessingmethod'         => 'GPS-verwerkingsmethode',
'exif-gpsareainformation'          => 'Naam GPS-gebied',
'exif-gpsdatestamp'                => 'GPS-datum',
'exif-gpsdifferential'             => 'Differentiele GPS-correctie',

# EXIF attributes
'exif-compression-1' => 'Ongecomprimeerd',

'exif-unknowndate' => 'Datum onbekend',

'exif-orientation-1' => 'Normaal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Horizontaal gespiegeld', # 0th row: top; 0th column: right
'exif-orientation-3' => '180° gedraaid', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Verticaal gespiegeld', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Gespiegeld om as linksboven-rechtsonder', # 0th row: left; 0th column: top
'exif-orientation-6' => '90° rechtsom gedraaid', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Gespiegeld om as linksonder-rechtsboven', # 0th row: right; 0th column: bottom
'exif-orientation-8' => '90° linksom gedraaid', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'chunky gegevensformaat',
'exif-planarconfiguration-2' => 'planar gegevensformaat',

'exif-colorspace-ffff.h' => 'Niet gecalibreerd',

'exif-componentsconfiguration-0' => 'bestaat niet',

'exif-exposureprogram-0' => 'Niet gedefiniëerd',
'exif-exposureprogram-1' => 'Handmatig',
'exif-exposureprogram-2' => 'Normaal programma',
'exif-exposureprogram-3' => 'Diafragmaprioriteit',
'exif-exposureprogram-4' => 'Sluiterprioriteit',
'exif-exposureprogram-5' => 'Creatief (voorkeur voor hoge scherpte/diepte)',
'exif-exposureprogram-6' => 'Actie (voorkeur voor hoge sluitersnelheid)',
'exif-exposureprogram-7' => 'Portret (detailopname met onscherpe achtergrond)',
'exif-exposureprogram-8' => 'Landschap (scherpe achtergrond)',

'exif-subjectdistance-value' => '$1 meter',

'exif-meteringmode-0'   => 'Onbekend',
'exif-meteringmode-1'   => 'Gemiddeld',
'exif-meteringmode-2'   => 'Centrumgewogen',
'exif-meteringmode-3'   => 'Spot',
'exif-meteringmode-4'   => 'Multi-spot',
'exif-meteringmode-5'   => 'Multi-segment (patroon)',
'exif-meteringmode-6'   => 'Deelmeting',
'exif-meteringmode-255' => 'Anders',

'exif-lightsource-0'   => 'Onbekend',
'exif-lightsource-1'   => 'Daglicht',
'exif-lightsource-2'   => 'TL-licht',
'exif-lightsource-3'   => 'Tungsten (lamplicht)',
'exif-lightsource-4'   => 'Flits',
'exif-lightsource-9'   => 'Mooi weer',
'exif-lightsource-10'  => 'Bewolkt',
'exif-lightsource-11'  => 'Schaduw',
'exif-lightsource-12'  => 'Daglicht fluorescerend (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Dagwit fluorescerend (N 4600 - 5400K)',
'exif-lightsource-14'  => 'Koel wit fluorescerend (W 3900 - 4500K)',
'exif-lightsource-15'  => 'Wit fluorescerend (WW 3200 - 3700K)',
'exif-lightsource-17'  => 'Standaard licht A',
'exif-lightsource-18'  => 'Standaard licht B',
'exif-lightsource-19'  => 'Standaard licht C',
'exif-lightsource-24'  => 'ISO-studiotungsten',
'exif-lightsource-255' => 'Andere lichtbron',

'exif-focalplaneresolutionunit-2' => 'inch',

'exif-sensingmethod-1' => 'Niet gedefiniëerd',
'exif-sensingmethod-2' => 'Eén-chip-kleursensor',
'exif-sensingmethod-3' => 'Twee-chip-kleursensor',
'exif-sensingmethod-4' => 'Drie-chip-kleursensor',
'exif-sensingmethod-5' => 'Kleurvolgende gebiedssensor',
'exif-sensingmethod-7' => 'Drielijnige sensor',
'exif-sensingmethod-8' => 'Kleurvolgende lijnsensor',

'exif-scenetype-1' => 'Een direct gefotografeerde afbeelding',

'exif-customrendered-0' => 'Normale verwerking',
'exif-customrendered-1' => 'Aangepaste verwerking',

'exif-exposuremode-0' => 'Automatische belichting',
'exif-exposuremode-1' => 'Handmatige belichting',
'exif-exposuremode-2' => 'Auto-Bracket',

'exif-whitebalance-0' => 'Automatische witbalans',
'exif-whitebalance-1' => 'Handmatige witbalans',

'exif-scenecapturetype-0' => 'Standaard',
'exif-scenecapturetype-1' => 'Landschap',
'exif-scenecapturetype-2' => 'Portret',
'exif-scenecapturetype-3' => 'Nachtscène',

'exif-gaincontrol-0' => 'Geen',
'exif-gaincontrol-1' => 'Lage pieken omhoog',
'exif-gaincontrol-2' => 'Hoge pieken omhoog',
'exif-gaincontrol-3' => 'Lage pieken omlaag',
'exif-gaincontrol-4' => 'Hoge pieken omlaag',

'exif-contrast-0' => 'Normaal',
'exif-contrast-1' => 'Zacht',
'exif-contrast-2' => 'Hard',

'exif-saturation-0' => 'Normaal',
'exif-saturation-1' => 'Laag',
'exif-saturation-2' => 'Hoog',

'exif-sharpness-0' => 'Normaal',
'exif-sharpness-1' => 'Zacht',
'exif-sharpness-2' => 'Hard',

'exif-subjectdistancerange-0' => 'Onbekend',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Dichtbij',
'exif-subjectdistancerange-3' => 'Ver weg',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Noorderbreedte',
'exif-gpslatitude-s' => 'Zuiderbreedte',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Oosterlengte',
'exif-gpslongitude-w' => 'Westerlengte',

'exif-gpsstatus-a' => 'Bezig met meten',
'exif-gpsstatus-v' => 'Meetinteroperabiliteit',

'exif-gpsmeasuremode-2' => '2-dimensionale meting',
'exif-gpsmeasuremode-3' => '3-dimensionale meting',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Kilometer per uur',
'exif-gpsspeed-m' => 'Mijl per uur',
'exif-gpsspeed-n' => 'Knopen',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Eigenlijke richting',
'exif-gpsdirection-m' => 'Magnetische richting',

# External editor support
'edit-externally'      => 'Dit bestand in een extern programma bewerken',
'edit-externally-help' => 'In de [http://meta.wikimedia.org/wiki/Help:External_editors handleiding voor instellingen] staat meer informatie.',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'alles',
'imagelistall'     => 'alle',
'watchlistall2'    => 'alles',
'namespacesall'    => 'alle',
'monthsall'        => 'alle',

# E-mail address confirmation
'confirmemail'            => 'E-mailadres bevestigen',
'confirmemail_noemail'    => 'U heeft geen geldig e-mailadres ingegeven in uw [[Special:Preferences|gebruikersvoorkeuren]].',
'confirmemail_text'       => '{{SITENAME}} eist bevestiging van uw e-mailadres voordat u de e-mailmogelijkheden kan gebruiken. Klik op de onderstaande knop om een bevestigingsbericht te ontvangen. Dit bericht bevat een link met een code. Open die link om uw e-mailadres te bevestigen.',
'confirmemail_pending'    => '<div class="error">Er is al een bevestigingsbericht aan u verzonden. Als u recentelijk uw gebruiker heeft aangemaakt, wacht dan een paar minuten totdat die aankomt voordat u opnieuw een e-mail laat sturen.</div>',
'confirmemail_send'       => 'Een bevestigingscode verzenden',
'confirmemail_sent'       => 'Bevestigingscode verzonden.',
'confirmemail_oncreate'   => 'Er is een bevestigingscode is naar uw e-mailadres verzonden. Deze code is niet nodig om u aan te melden, maar u dient deze wel te bevestigen voordat u de e-mailmogelijkheden van deze wiki kan gebruiken.',
'confirmemail_sendfailed' => 'Het was niet mogelijk een bevestigingscode te verzenden. Controleer het adres op ongeldige tekens.

Het e-mailprogramma meldde: $1',
'confirmemail_invalid'    => 'Ongeldige bevestigingscode. Mogelijk is de code verlopen.',
'confirmemail_needlogin'  => 'U dient $1 om uw e-mailadres te bevestigen.',
'confirmemail_success'    => 'Uw e-mailadres is bevestigd. U kan zich nu aanmelden en {{SITENAME}} gebruiken.',
'confirmemail_loggedin'   => 'Uw e-mailadres is nu bevestigd.',
'confirmemail_error'      => 'Er is iets verkeerd gegaan tijdens het opslaan van uw bevestiging.',
'confirmemail_subject'    => 'Bevestiging e-mailadres voor {{SITENAME}}',
'confirmemail_body'       => 'Iemand, waarschijnlijk u, met het IP-adres $1, heeft zich met dit e-mailadres geregistreerd als gebruiker "$2" op {{SITENAME}}.

Open de volgende link om te bevestigen dat u deze gebruiker bent en om de e-mailmogelijkheden op {{SITENAME}} te activeren:

$3

Als u zichzelf *niet* heeft aangemeld, open deze link dan niet. De bevestigingscode verloopt  op $4.',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki-invoeging van sjablonen is uitgeschakeld]',
'scarytranscludefailed'   => '[Sjabloon $1 kon niet opgehaald worden; sorry]',
'scarytranscludetoolong'  => '[URL is te lang; sorry]',

# Trackbacks
'trackbackbox'      => "<div id='mw_trackbacks'>
Trackbacks voor deze pagina:<br />
$1
</div>",
'trackbackremove'   => ' ([$1 Verwijderen])',
'trackbacklink'     => 'Trackback',
'trackbackdeleteok' => 'De trackback is verwijderd.',

# Delete conflict
'deletedwhileediting' => 'Let op: deze pagina is verwijderd terwijl u bezig was met uw bewerking!',
'confirmrecreate'     => "Gebruiker [[User:$1|$1]] ([[User talk:$1|overleg]]) heeft deze pagina verwijderd nadat u begonnen bent met uw wijziging met opgave van de volgende reden:
: ''$2''
Bevestig alstublieft dat u de pagina opnieuw wilt aanmaken.",
'recreate'            => 'Opnieuw aanmaken',

# HTML dump
'redirectingto' => 'Aan het doorverwijzen naar [[$1]] ...',

# action=purge
'confirm_purge'        => 'De cache van deze pagina legen?

$1',
'confirm_purge_button' => 'OK',

# AJAX search
'searchcontaining' => "Zoeken naar pagina's die ''$1'' bevatten.",
'searchnamed'      => "Zoeken naar pagina's met de naam ''$1''.",
'articletitles'    => "Pagina's die met ''$1'' beginnen",
'hideresults'      => 'Resultaten verbergen',
'useajaxsearch'    => 'AJAX-zoeken gebruiken',

# Multipage image navigation
'imgmultipageprev'   => '← vorige pagina',
'imgmultipagenext'   => 'volgende pagina →',
'imgmultigo'         => 'OK',
'imgmultigotopre'    => 'Gaan naar pagina',
'imgmultiparseerror' => "Het afbeeldingsbestand schijnt onjuist te zijn, zodat {{SITENAME}} geen lijst van pagina's kon terugvinden.",

# Table pager
'ascending_abbrev'         => 'opl.',
'descending_abbrev'        => 'afl.',
'table_pager_next'         => 'Volgende pagina',
'table_pager_prev'         => 'Vorige pagina',
'table_pager_first'        => 'Eerste pagina',
'table_pager_last'         => 'Laatste pagina',
'table_pager_limit'        => '$1 resultaten per pagina tonen',
'table_pager_limit_submit' => 'OK',
'table_pager_empty'        => 'Geen resultaten',

# Auto-summaries
'autosumm-blank'   => 'Pagina leeggehaald',
'autosumm-replace' => "Tekst vervangen door '$1'",
'autoredircomment' => 'Verwijst door naar [[$1]]',
'autosumm-new'     => 'Nieuwe pagina: $1',

# Size units
'size-kilobytes' => '$1 kB',

# Live preview
'livepreview-loading' => 'Laden …',
'livepreview-ready'   => 'Laden … Klaar!',
'livepreview-failed'  => 'Live voorvertoning mislukt!
Probeer normale voorvertoning.',
'livepreview-error'   => 'Verbinden mislukt: $1 “$2”.  Probeer normale voorvertoning.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Veranderingen die nieuwer zijn dan $1 seconden worden misschien niet getoond in deze lijst.',
'lag-warn-high'   => 'Door een hoge database-servertoevoer zijn wijzigingen nieuwer dan $1 seconden mogelijk niet beschikbaar in de lijst.',

# Watchlist editor
'watchlistedit-numitems'       => 'Uw volglijst bevat {{PLURAL:$1|1 pagina|$1 pagina’s}}, zonder overlegpagina’s.',
'watchlistedit-noitems'        => 'Uw volglijst bevat geen pagina’s.',
'watchlistedit-normal-title'   => 'Volglijst bewerken',
'watchlistedit-normal-legend'  => 'Pagina’s van uw volglijst verwijderen',
'watchlistedit-normal-explain' => 'Hieronder worden de pagina’s op uw volglijst getoond. Klik op het vierkantje ernaast en daarna op ‘Pagina’s verwijderen’ om een pagina te verwijderen. U kan ook [[Special:Watchlist/raw|de ruwe lijst bewerken]].',
'watchlistedit-normal-submit'  => 'Pagina’s verwijderen',
'watchlistedit-normal-done'    => '{{PLURAL:$1|1 pagina werd|$1 pagina’s werden}} verwijderd van uw volglijst:',
'watchlistedit-raw-title'      => 'Ruwe volglijst bewerken',
'watchlistedit-raw-legend'     => 'Ruwe volglijst bewerken',
'watchlistedit-raw-explain'    => 'Hieronder staan pagina’s op uw volglijst. U kan de lijst bewerken door pagina’s te verwijderen en toe te voegen. Eén pagina per regel. Als u klaar bent, klik dan op ‘Volglijst bijwerken’. U kan ook [[Special:Watchlist/edit|het standaard bewerkingsscherm gebruiken]].',
'watchlistedit-raw-titles'     => 'Pagina’s:',
'watchlistedit-raw-submit'     => 'Volglijst bijwerken',
'watchlistedit-raw-done'       => 'Uw volglijst is bijgewerkt.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|1 pagina werd|$1 pagina’s werden}} toegevoegd:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|1 pagina werd|$1 pagina’s werden}} verwijderd:',

# Watchlist editing tools
'watchlisttools-view' => 'Volglijst bekijken',
'watchlisttools-edit' => 'Volglijst bekijken en bewerken',
'watchlisttools-raw'  => 'Ruwe volglijst bewerken',

# Iranian month names
'iranian-calendar-m1'  => 'Eerste Perzische maand',
'iranian-calendar-m2'  => 'Tweede Perzische maand',
'iranian-calendar-m3'  => 'Derde Perzische maand',
'iranian-calendar-m4'  => 'Vierde Perzische maand',
'iranian-calendar-m5'  => 'Vijfde Perzische maand',
'iranian-calendar-m6'  => 'Zesde Perzische maand',
'iranian-calendar-m7'  => 'Zevende Perzische maand',
'iranian-calendar-m8'  => 'Achtste Perzische maand',
'iranian-calendar-m9'  => 'Negende Perzische maand',
'iranian-calendar-m10' => 'Tiende Perzische maand',
'iranian-calendar-m11' => 'Elfde Perzische maand',
'iranian-calendar-m12' => 'Twaalfde Perzische maand',

# Core parser functions
'unknown_extension_tag' => 'Onbekende tag "$1"',

# Special:Version
'version-extensions'               => 'Geïnstalleerde uitbreidingen',
'version-specialpages'             => "Speciale pagina's",
'version-parserhooks'              => 'Parserhooks',
'version-variables'                => 'Variabelen',
'version-other'                    => 'Overige',
'version-mediahandlers'            => 'Mediaverwerkers',
'version-hooks'                    => 'Hooks',
'version-extension-functions'      => 'Uitbreidingsfuncties',
'version-parser-extensiontags'     => 'Parseruitbreidingstags',
'version-parser-function-hooks'    => 'Parserfunctiehooks',
'version-skin-extension-functions' => 'Vormgevingsuitbreidingsfuncties',
'version-hook-name'                => 'Hooknaam',
'version-hook-subscribedby'        => 'Geabonneerd door',
'version-version'                  => 'Versie',
'version-license'                  => 'Licentie',
'version-software'                 => 'Geïnstalleerde software',
'version-software-product'         => 'Product',
'version-software-version'         => 'Versie',

# Special:Filepath
'filepath'         => 'Bestandslocatie',
'filepath-page'    => 'Bestand:',
'filepath-submit'  => 'Zoeken',
'filepath-summary' => 'Deze speciale pagina geeft het volledige pad voor een bestand. Afbeeldingen worden in hun volledige resolutie getoond. Andere bestandstypen worden direct in het met het MIME-type verbonden programma geopend.

Voer de bestandsnaam in zonder het voorvoegsel "{{ns:image}}:".',

);
