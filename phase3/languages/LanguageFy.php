

<?

# NOTE: To turn off "Current Events" in the sidebar,
# set "currentevents" => "-"

# The names of the namespaces can be set here, but the numbers
# are magical, so don't change or move them!  The Namespace class
# encapsulates some of the magic-ness.
#

if($wgMetaNamespace === FALSE)
	$wgMetaNamespace = str_replace( " ", "_", $wgSitename );

/* private */ $wgNamespaceNamesFy = array(
	-1	=> "Wiki",
	0	=> "",
	1	=> "Oerlis",
	2	=> "Br�ker",
	3	=> "Br�ker_oerlis",
	4	=> $wgMetaNamespace,
	5	=> $wgMetaNamespace . "_oerlis",
	6	=> "Ofbyld",
	7	=> "Ofbyld_oerlis"
);

/* private */ $wgDefaultUserOptionsFy = array(
	"quickbar" => 1, "underline" => 1, "hover" => 1,
	"cols" => 80, "rows" => 25, "searchlimit" => 20,
	"contextlines" => 5, "contextchars" => 50,
	"skin" => 0, "math" => 1, "rcdays" => 7, "rclimit" => 50,
	"highlightbroken" => 1, "stubthreshold" => 0,
	"previewontop" => 1, "editsection"=>1,"editsectiononrightclick"=>0, "showtoc"=>1,
	"date" => 0
);

/* private */ $wgQuickbarSettingsFy = array(
	"Ut", "Lofts f�st", "Rjochts f�st", "Lofsts sweevjend"
);

/* private */ $wgSkinNamesFy = array(
	"Standert", "Nostalgy", "Keuls blau", "Paddington", "Montparnasse"
);

/* private */ $wgMathNamesFy = array(
           "Altiten as PNG �fbyldzje",
           "HTML foar ienf�ldiche formules, oars PNG",
           "HTML as mooglik, oars PNG",
           "Lit de TeX ferzje stean (foar tekstbl�dzjers)",
           "Oanbefelle foar resinte bl�dzjers"
);

/* private */ $wgDateFormatsFy = array(
	"Gjin foarkar",
	"jannewaris 8, 2001",
	"8 jannewaris 2001",
	"2001 jannewaris 8"
);

/* private */ $wgUserTogglesFy = array(
	"hover"		=> "Wiki-keppelings yn sweeffak sjen litte",
	"underline"		=> "Keppelings �nderstreekje",
	"highlightbroken"	=> "Keppelings nei lege siden ta <a href=\"\" class=\"new\">read</a>
					(oars mei in fraachteken<a href=\"\" class=\"internal\">?</a>).",
	"justify"		=> "Paragrafen �tfolje",
	"hideminor"		=> "Tekstwizigings wei litte �t 'Koarts feroare'",
	"usenewrc"		=> "Utwreide ferzje fan 'Koarts feroare' br�ke (net mei alle bl�dzjers mooglik)",
	"numberheadings"	=> "Koppen fansels n�merje",
	"editondblclick"	=> "D�belklik jout bewurkingsside (freget JavaScript)",
	"editsection"	=> "Jou [bewurk]-keppelings foar seksjebewurking",
	"editsectiononrightclick" => "Rjochtsklik op sekjsetitels jout seksjebewurking (freget JavaScript)",
 	"showtoc"		=> "Ynh�ldsopjefte, foar siden mei mear as twa koppen",
	"rememberpassword" => "Oare kear fansels oanmelde",
	"editwidth"		=> "Bewurkingsfjild sa breed as de side",
	"watchdefault"	=> "Sides dy't jo feroare hawwe folgje",
	"minordefault"	=> "Feroarings yn it earst oanjaan as tekstwizigings.",
	"previewontop"	=> "By it neisjen, bewurkingsfjild �nderoan sette",
	"nocache"		=> "Gjin oerslag br�ke"
);

/* private */ $wgBookstoreListFy = array(
);

/* private */ $wgLanguageNamesFy = array(
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "&#8238;&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;&#8236; (Araby)",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "&#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1082;&#1080;",
	"bh" => "Bihara",
	"bi" => "Bislama",
	"bn" => "Bengali",
	"bo" => "Tibetan",
	"br" => "Brezhoneg",
	"bs" => "Bosnian",
	"ca" => "Catal&agrave;",
	"ch" => "Chamoru",
	"co" => "Corsican",
	"cs" => "&#268;esk&#225;",
	"cy" => "Cymraeg",
	"da" => "Dansk", # Note two different subdomains.
	"dk" => "Dansk", # 'da' is correct for the language.
	"de" => "Deutsch",
	"dz" => "Bhutani",
	"el" => "&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Ellenika)",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Espa&ntilde;ol",
	"et" => "Eesti",
	"eu" => "Euskara",
	"fa" => "&#8238;&#1601;&#1585;&#1587;&#1609;&#8236; (Farsi)",
	"fi" => "Suomi",
	"fj" => "Fijian",
	"fo" => "Faeroese",
	"fr" => "Fran&ccedil;ais",
	"fy" => "Frysk",
	"ga" => "Gaelige",
	"gd" => "G&agrave;idhlig",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "&#2711;&#2753;&#2716;&#2736;&#2750;&#2724;&#2752; (Gujarati)",
	"gv" => "Gaelg",
	"ha" => "Hausa",
	"he" => "&#1506;&#1489;&#1512;&#1497;&#1514; (Ivrit)",
	"hi" => "&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; (Hindi)",
	"hr" => "Hrvatski",
	"hu" => "Magyar",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesia",
	"ik" => "Inupiak",
	"is" => "&#205;slenska",
	"it" => "Italiano",
	"iu" => "Inuktitut",
	"ja" => "&#26085;&#26412;&#35486; (Nihongo)",
	"jv" => "Javanese",
	"ka" => "&#4325;&#4304;&#4320;&#4311;&#4309;&#4308;&#4314;&#4312; (Kartuli)",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "&#3221;&#3240;&#3277;&#3240;&#3233; (Kannada)",
	"ko" => "&#54620;&#44397;&#50612; (Hangukeo)",
	"ks" => "Kashmiri",
	"kw" => "Kernewek",
	"ky" => "Kirghiz",
	"la" => "Latina",
	"ln" => "Lingala",
	"lo" => "Laotian",
	"lt" => "Lietuvi&#371;",
	"lv" => "Latvian",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Bahasa Melayu",
	"my" => "Burmese",
	"na" => "Nauru",
	"nah" => "Nahuatl",
	"nds" => "Plattd&uuml;&uuml;tsch",
	"ne" => "&#2344;&#2375;&#2346;&#2366;&#2354;&#2368; (Nepali)",
	"nl" => "Nederlands",
	"no" => "Norsk",
	"oc" => "Occitan",
	"om" => "Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polski",
	"ps" => "Pashto",
	"pt" => "Portugu&#234;s",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Rom&#226;n&#259;",
	"ru" => "&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russkij)",
	"rw" => "Kinyarwanda",
	"sa" => "&#2360;&#2306;&#2360;&#2381;&#2325;&#2371;&#2340; (Samskrta)",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbocroatian",
	"si" => "Sinhalese",
	"simple" => "Simple English",
	"sk" => "Slovak",
	"sl" => "Slovensko",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Soomaali",
	"sq" => "Shqiptare",
	"sr" => "Srpski",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Svenska",
	"sw" => "Kiswahili",
	"ta" => "&#2980;&#2990;&#3007;&#2996;&#3021; (Tamil)",
	"te" => "&#3108;&#3142;&#3122;&#3137;&#3095;&#3137; (Telugu)",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "T&uuml;rk&ccedil;e",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uighur",
	"uk" => "&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; (Ukrayins`ka)",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volap&#252;k",
	"wo" => "Wolof",
	"xh" => "isiXhosa",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zhuang",
	"zh" => "&#20013;&#25991; (Zhongwen)",
	"zh-cn" => "&#20013;&#25991;(&#31616;&#20307;) (Simplified Chinese)",
	"zh-tw" => "&#20013;&#25991;(&#32321;&#20307;) (Traditional Chinese)",
	"zu" => "Zulu"
);

/* private */ $wgWeekdayNamesFy = array(
	"snein", "moandei", "tiisdei", "woansdei", "tongersdei",
      "freed", "sneon"
);

/* private */ $wgMonthNamesFy = array(
	 "jannewaris", "febrewaris", "maart", "april", "maaie", "juny",
       "july", "augustus", "septimber", "oktober", "novimber",
       "decimber"
);

/* private */ $wgMonthAbbreviationsFy = array(
       "jan", "feb", "mar", "apr", "mai", "jun", "jul", "aug",
       "sep", "okt", "nov", "dec"
);

# All special pages have to be listed here: a description of ""
# will make them not show up on the "Special Pages" page, which
# is the right thing for some of them (such as the "targeted" ones).
#
/* private */ $wgValidSpecialPagesFy = array(
	"Userlogin"		=> "",
	"Userlogout"	=> "",
	"Preferences"	=> "Ynstellings",
	"Watchlist"		=> "Folchlist",
	"Recentchanges"   => "Koarts feroare",
	"Upload"		=> "Ofbyld oanbiede",
	"Imagelist"		=> "Ofbyld list",
	"Listusers"		=> "Bekinde br�kers",
	"Statistics"	=> "Statistyk",
	"Randompage"	=> "Samar in side",

	"Lonelypages"	=> "Lossteande siden",
	"Unusedimages"	=> "Lossteande �fbylden",
	"Popularpages"	=> "Grage siden",
	"Wantedpages"	=> "Nedige siden",
	"Shortpages"	=> "Koarte siden",
	"Longpages"		=> "Lange siden",
	"Newpages"		=> "Nije siden",
	"Ancientpages"	=> "Alde siden",
	"Allpages"		=> "Alle titels",

	"Ipblocklist"	=> "Utsletten br�kers/Ynternet-adressen",
	"Maintenance"     => "Underh�ldsside",
	"Specialpages"    => "Bys�ndere siden",
	"Contributions"   => "",
	"Emailuser"		=> "",
	"Whatlinkshere"   => "",
	"Recentchangeslinked" => "",
	"Movepage"		=> "",
	"Booksources"	=> ""
	"Categories"      => "Kategoryen"
);

/* private */ $wgSysopSpecialPagesFy = array(
	"Blockip"		=> "Utsletten br�ker/Ynternet-adres",
	"Asksql"		=> "Freegje de databank",
	"Undelete"		=> "Set wisse siden wer teplak"
);

/* private */ $wgDeveloperSpecialPagesFy = array(
	"Lockdb"  		=> "Meitsje de databank Net-Skriuwe",
	"Unlockdb"  	=> "Meitsje de databank skriuwber",
	"Debug"   		=> "Breksykynformaasje"
);

/* private */ $wgAllMessagesFy = array(

# Bits of text used by many pages:
#
"linktrail"		=> "/^([��������������������a-z]+)(.*)\$/sD",
"mainpage"		=> "Haadside",
"mainpagetext"	=> "Wiki-programma goed installearre.",
"about"		=> "Ynfo",
"aboutwikipedia" 	=> "Oer de $wgSitename",
"aboutpage"		=> "$wgMetaNamespace:Ynfo",
"help"		=> "Help",
"helppage"		=> "$wgMetaNamespace:Help",
"wikititlesuffix" => "$wgSitename",
"bugreports"	=> "Brekmelding",
"bugreportspage"	=> "$wgMetaNamespace:Brekmelding",
"faq"			=> "FAQ",
"faqpage"		=> "$wgMetaNamespace:FAQ",
"edithelp"		=> "Siden bewurkje",
"edithelppage"	=> "$wgMetaNamespace:Bewurk-rie",
"cancel"		=> "Ferlitte",
"qbfind"		=> "Sykje",
"qbbrowse"		=> "Bl�dzje",
"qbedit"		=> "Bewurkje",
"qbpageoptions" 	=> "Side-opsjes",
"qbpageinfo"	=> "Side-ynfo",
"qbmyoptions"	=> "Myn Opsjes",
"mypage"		=> "Myn side",
"mytalk"		=> "Myn oerlis",
"currentevents" 	=> "Hjoeddeis",
"errorpagetitle" 	=> "Fout",
"returnto"		=> "Werom nei \"$1\".",
"fromwikipedia"	=> "Fan $wgSitename, de frije ensyklopedy.", # FIXME
"whatlinkshere"	=> "Siden mei in keppeling hjirhinne",
"help"		=> "Help",
"search"		=> "<B>Sykje</B>",
"go"			=> "Side",
"history"		=> "Sideskiednis",
"printableversion" => "Ofdruk-ferzje",
"editthispage"	=> "Side bewurkje",
"deletethispage" 	=> "Side wiskje",
"protectthispage" => "Side beskermje",
"unprotectthisside" => "Side frij jaan",
"newpage" 		=> "Nije side",
"talkpage"		=> "Sideoerlis",
"postcomment"   	=> "Skrieuw in opmerking",
"articlepage"	=> "Side l�ze",
"subjectpage"	=> "Side l�ze", # For compatibility
"userpage" 		=> "Br�kerside",
"wikipediapage" 	=> "Metaside",
"imagepage" 	=> "Ofbyldside",
"viewtalkpage" 	=> "Oerlisside",
"otherlanguages" 	=> "Oare talen",
"redirectedfrom" 	=> "(Trochwiisd fan \"$1\")",
"lastmodified"	=> "L�ste kear bewurke op $1.",
"viewcount"		=> "Disse side is $1 kear iepenslein.",
"gnunote" 		=> "Alle tekst is beskiber �nder de betingsten fan de <a class=internal href='/wiki/GNU_Vrije_Documentatie_Licentie'>GNU Iepen Dokumentaasje Lisinsje</a>.",
"printsubtitle" 	=> "(Fan http://$wgServer)",
"protectedpage" 	=> "Beskerme side",
"administrators" 	=> "$wgMetaNamespace:Behear",
"sysoptitle"	=> "Allinnich foar behearders",
"sysoptext"		=> "Om dit te dwaan moatte jo behearder w�ze. Sjoch \"$1\".",
"developertitle"  => "Allinich foar untwiklers",
"developertext"	=> "Om dit te dwaan moatte jo �ntwikler w�ze. Sjoch \"$1\".",
"nbytes"		=> "$1 byte",
"go"			=> "Side",
"ok"			=> "Goed",
"sitetitle"		=> $wgSitename,
"sitesubtitle"	=> "De frije ensyklopedy",
"retrievedfrom" 	=> "Untfongen fan \"$1\"",
"newmessages" 	=> "Jo hawwe $1.",
"newmessageslink" => "nije berjochten",
"editsection"	=> "edit",
"toc" 		=> "Ynh�ld",
"showtoc" 		=> "sjen litte",
"hidetoc" 		=> "net sjen litte",
"thisisdeleted"	=> "\"$1\" l�ze of werombringje?",
"restorelink" 	=> "$1 wiske ferzjes",

# Main script and global functions
#
"nosuchaction"	=> "Unbekende aksje.",
"nosuchactiontext" => "De aksje dy't jo oanjoegen fia de URL is net bekind by it Wiki-programma",
"nosuchspecialpage" => "Unbekende side",
"nospecialpagetext" => "Jo hawwe in Wiki-side opfrege dy't net bekind is by it Wiki-programma.",


# General errors
#
"error"			=> "Fout",
"databaseerror" 		=> "Databankfout",
"dberrortext"		=> "Sinboufout in databankfraach.
Dit soe troch in ferkearde sykfraach komme kinne (sjoch \"$5\"),
of it soe in brek yn it programma w�ze kinne.
De l�st besochte databankfraach wie:
<blockquote><tt>$1</tt></blockquote>
fan funksje \"<tt>$2</tt>\" �t.
MySQL joech fout \"<tt>$3: $4</tt>\" werom.",

"dberrortextcl" 		=> "Sinboufout in databankfraach.
De l�st besochte databankfraach wie:
\"$1\"
fan funksje \"$2\" �t.
MySQL joech fout \"<tt>$3: $4</tt>\" werom.",

"noconnect"			=> "Sorry! Troch in fout yn de technyk, kin de Wiki gjin ferbining meitsje mei de databanktsjinner.",
"nodb"			=> "Kin databank \"$1\" net berikke.",
"cachederror"		=> "Dit is in ferzje �t de oerslag, mar it kin w�ze dat dy fer�ldere is.",
"readonly"			=> "Databank is Net-skriuwe",
"enterlockreason" 	=> "Skriuw w�rom de databank net-skriuwe makke is,
en sawat hoenear't de men w�r skriuwe kin",
"readonlytext"	=> "De $wgSitename databank is �fsletten foar nije siden en oare wizigings,
nei alle gedachten is it foar �nderh�ld, en kinne jo der letter gewoan wer br�k fan meitsje.
De behearder hat dizze �tlis joen:
<p>$1</p>",

"missingarticle" 		=> "De databank kin in side net fine, nammentlik: \"$1\".
<p>Faak is dit om't in �lde ferskil-, of skiednisside opfreege wurdt fan in side dy't wiske is.
<p>As dat it hjir net is, dan hawwe jo faaks in brek yn it programa f�n.
Jou dat asjebleaft troch oan de [["$wgMetaNamespace:Brekmelding|behearder]], tegearre mei de URL.",

"internalerror" 		=> "Ynwindige fout",
"filecopyerror" 		=> "Koe best�n \"$1\" net kopiearje as \"$2\".",
"filerenameerror" 	=> "Koe best�n \"$1\" net werneame as \"$2\".",
"filedeleteerror" 	=> "Koe best�n \"$1\" net wiskje.",
"filenotfound"		=> "Koe best�n \"$1\" net fine.",
"unexpected"		=> "Hommelse wearde: \"$1\"=\"$2\".",
"formerror"			=> "Fout: koe formulier net oerlizze",	
"badarticleerror" 	=> "Dit kin op dizze side net dien wurden.",
"cannotdelete"		=> "Koe de oantsjutte side of �fbyld net wiskje. (Faaks hat in oar dat al dien.)",
"badtitle"			=> "Misse titel",
"badtitletext"		=> "De opfreeche side titel wie �njildich, leech, of in 
miskeppele ynter-taal of ynter-wiki titel.",
"perfdisabled" 		=> "Sorry! Dit �nderdiel is tydlik �t set om't it de databank sa starich makket
dat gjinien de wiki br�ke kin.",
"perfdisabledsub" 	=> "Dit is in opsleine ferzje fan \"$1\":",


# Login and logout pages
#
"logouttitle" 	=> "Ofmelde",
"logouttext"	=> "Jo binne no �fmeld.
Jo kinne de $wgSitename fierders anonym br�ke,
of jo op 'e nij [[Wiki:Userlogin|oanmelde]] �nder in oare namme.\n",
"welcomecreation" => "<h2>Wolkom, $1!</h2><p>Jo ynstellings bin oanmakke.
Ferjit net se oan jo foarkar oan te passen.",

"loginpagetitle" 	=> "Oanmelde",
"yourname"  	=> "Jo br�kersnamme",
"yourpassword" => "Jo wachtwurd",
"yourpasswordagain" => "Jo wachtwurd (nochris)",
"newusersonly" 	=> " (allinnich foar nije br�kers)",
"remembermypassword" => "Oare kear fansels oanmelde.",
"loginproblem" 	=> "<b>Der wie wat mis mei jo oanmelden.</b><br>Besykje it nochris, a.j.w.",
"alreadyloggedin" => "<font color=red><b>Br�ker $1, jo binne al oanmeld!</b></font><br>\n",
"areyounew"  	=> "Binne jo nij op de $wgSitename en wolle jo br�kersinstellings oanmeitsje, 
jou dan in br�kersnamme en twa kear itselde wachtwurd yn.
In e-postadres hoecht net, mar as jo it wachtwurd in kear ferjitte soenen,
dan koe jo d�r in nijenien tastjoerd wurde.<br>\n",
"login"		=> "Oanmelde",
"userlogin"		=> "Oanmelde",
"logout"		=> "Ofmelde",
"userlogout"	=> "Ofmelde",
"notloggedin"	=> "Net oanmelde",
"createaccount"	=> "Nije ynstelingd oanmeitsje",
"badretype"		=> "De infierde wuchtwurden binne net lyk.",
"userexists"	=> "Dy br�kersname wurdt al br�kt. Besykje in oarenien.",
"youremail"		=> "Jo e-postadres (*).",
"yournick"		=> "Jo alias (foar sinjaturen)",
"emailforlost"	=> "* In e-postadres hoecht net.<br>
Mar it helpt, soenen jo jo wachtwurd ferjitte.
En mei in e-postadres kinne oaren fan de web siden contact mei jo krije,
s�nder dat se dat adres witte. (Dat leste kin ek wer �tset by de instellings.)",

"loginerror"	=> "Oanmeldflater",
"noname"		=> "Jo moatte in br�kersnamme opjaan.",
"loginsuccesstitle" => "Oanmelden slagge.",
"loginsuccess"	=> "Jo binne no oanmelde op de $wgSitename as: $1.",
"nosuchuser"	=> "Br�kersnamme en wachtwurd hearre net by elkoar.
Besykje op 'e nij, of fier it wachtwurd twa kear yn en meitsje neie br�kersynstellings.",

"wrongpassword"	=> "Br�kersnamme en wachtwurd hearre net by elkoar.
Besykje op 'e nij, of fier it wachtwurd twa kear yn en meitsje neie br�kersynstellings.",

"mailmypassword" 	=> "Stjoer my in nij wachtwurd.",
"passwordremindertitle" => "Nij wachtwurd foar de $wgSitename",
"passwordremindertext" => "Immen (nei alle gedachten jo, fan Ynternet-adres $1)
hat frege en stjoer jo in nij $wgSitename wachtwurd.
I wachtwurd foar br�ker \"$2\" is no \"$3\".
Meld jo no oan, en feroarje jo wachtwurd.",
"noemail"		=> "Der is gjin e-postadres foar br�ker \"$1\".",
"passwordsent"	=> "In nij wachtwurd is tastjoert oan it e-postadres foar \"$1\".
Please log in again after you receive it.",

# Edit pages
#
"summary"		=> "Gearfetting",
"subject"		=> "M�d",
"minoredit"		=> "Dit is in tekstwiziging",
"watchthis"		=> "Folgje dizze side",
"savearticle"	=> "F�stlizze",
"preview"		=> "Oerl�ze",
"showpreview"	=> "Oerl�ze foar de side f�stlein is",
"blockedtitle"	=> "Br�ker is �tsletten troch",
"blockedtext"	=> "Jo br�kersname of Ynternet-adres is �tsletten.
As reden is opj�n:<br>''$2''<p>As jo wolle, kinne jo hjiroer kontakt op nimme meid de behearder. 

(Om't in Ynternet-adressen faak mar foar ien sessie tawiisd wurde, kin it w�ze
dat it eins gjit om in oar dy't deselde tagongferskaffer hat as jo hawwe. As it jo
net betreft, besykje dan earst of it noch sa is as jo in skofke gjin
Ynternet-ferbining h�n hawwe. As it in probleem bliuwt, skriuw dan de behearder.
Sorry, foar it �ngemak.)

Jo Ynternet-adres is: $3. Nim dat op yn jo berjocht.

Tink derom, dat \"skriuw nei dizze br�ker\" allinich wol as jo in
e-postadres opj�n hawwe in jo [[Wiki:Preferences|ynstellings]].",

"newarticle"	=> "(Nij)",
"newarticletext" =>
"Jo hawwe in keppeling folge nei in side d�r't noch gjin tekst op stiet.
Om sels tekst te meistjsen kinne jo dy gewoan yntype in dit bewurkingsfjild 
([[$wgMetaNamespace:Bewurk-rie|Mear ynformaasje oer bewurkjen]].)
Oars kinne jo tebek mei de tebek-knop fan jo bl�dzjer.",

"anontalkpagetext" => "---- ''Dit is de oerlisside fan in unbekinde br�ker; in br�ker
dy't sich net oanmeld hat. Om't der gjin namme is wurd it Ynternet-adres br�kt om
oan te jaan wa. Mar faak is it sa dat sa'n adres net altid troch deselde br�kt wurdt.
As jo it idee hawwe dat jo as �nbekinde br�ker opmerkings foar in oar krije, dan kinne
jo jo [[Wiki:Userlogin|oanmelde]], dat jo allinnich opmerkings foar josels krije.'' ",
"noarticletext" => "(Der stjit noch gjin tekst op dizze side.)",
"updated"		=> "(Bewurke)",
"note"		=> "<strong>Opmerking:</strong> ",
"previewnote"	=> "Tink der om dat dizze side noch net f�stlein is!",
"previewconflict" => "Dizze side belanget allinich it earste bewurkingsfjild oan.",
"editing"		=> "Bewurkje \"$1\"",
"sectionedit"	=> " (seksje)",
"commentedit"	=> " (nije opmerking)",
"editconflict"	=> "Tagelyk bewurke: \"$1\"",
"explainconflict" => "In oar hat de side feroare s�nt jo beg�n binne mei it bewurkjen.
It earste bewurkingsfjild is hoe't de tekst wilens wurde is. 
Jo feroarings stean yn it twadde fjild.
Dy wurde allinnich tapasse safier as jo se yn it earste fjild ynpasse.
<b>Allinnich</b> de tekst �t it earste fjild kin f�stlein wurde.\n<p>",
"yourtext"		=> "Jo tekst",
"storedversion" => "F�stleine ferzje",
"editingold"	=> "<strong><font color=red>Waarsk�ging</font>: Jo binne dwaande mei in �ldere ferzje fan dizze side.
Soenen jo dizze f�stlizze, dan is al wat s�nt dy tiid feroare is kwyt.</strong>\n",
"yourdiff"		=> "Feroarings",
# REPLACE THE COPYRIGHT WARNING IF YOUR SITE ISN'T GFDL!
"copyrightwarning" => "Alle bydragen ta de $wgSitename wurde sjoen
as fallend �nder de GNU Iepen Dokumentaasje Lisinsje
(sjoch fierders: \"$1\").
As jo net wolle dat jo skriuwen �nferbidlik oanpast en frij ferspraat wurdt,
dan is it baas, en set it net op de $wgSitename.<br>
Jo ferklare ek dat jo dit sels skreaun hawwe, of it oernaam hawwe �t in
publyk eigendom of in oare iepen boarne.
<strong><big>Foeg gjin wurk �nder auteursrjocht ta s�nder tastimming!</big></strong>",
"longpagewarning" => "<font color=red>Waarsk�ging</font>: Dizze side is $1 kilobyte lang; 
der binne bl�dzjers dy problemen hawwe mei siden fan tsjin de 32kb. of langer.
Besykje de side yn lytsere stikken te brekken.",
"readonlywarning" => "<font color=red>Waarsk�ging</font>: De databank is �fsletten foar
�nderh�ld, dus jo kinne jo bewurkings no net f�stlizze.
It wie baas en nim de tekst foar letter oer yn in tekstbest�n.",
"protectedpagewarning" => "<font color=red>Waarsk�ging</font>: Dizze side is beskerme, dat
gewoane br�kers dy net bewurkje kinne. Tink om de
<a href='/wiki/$wgMetaNamespace:Beskerm-rie'>rie oer beskerme siden</a>.",

# History pages
#
"revhistory"	=> "Sideskiednis",
"nohistory"		=> "Dit is de earste ferzje fan de side.",
"revnotfound"	=> "Ferzje net f�n",
"revnotfoundtext" => "De �lde ferzje fan dizze side d�r't jo om frege hawwe, is der net.
Gean nei of de keppeling dy jo br�kt hawwe wol goed is.\n",
"loadhist"		=> "Sideskiednis ...",
"currentrev"	=> "Dizze ferzje",
"revisionasof"	=> "Ferzje op $1",
"cur"			=> "no",
"next"		=> "dan",
"last"		=> "doe",
"orig"		=> "ea",
"histlegend"	=> "Utlis: (no) = ferskil mei de side sa't dy no is,
(doe) = ferskill mei de side sa't er doe wie, foar de feroaring, T = Tekstwiziging",


# Diffs
#
"difference"	=> "(Ferskil tusken ferzjes)",
"loadingrev"	=> "Ferskil tusken ferzjes ...",
"lineno"		=> "Rigel $1:",
"editcurrent"	=> "Bewurk de hjoeddeistiche ferzje fan dizze side",

# Search results
#
"searchresults" => "Sykresultaat",
"searchhelppage" => "$wgMetaNamespace:Syk-rie|Ynformaasje oer it sykjen",
"searchingwikipedia" => "Sykje troch de $wgSitename",
"searchresulttext" => "\"$1\" troch de $wgSitename.",
"searchquery"	=> "Foar fraach \"$1\"",
"badquery"		=> "Misfoarme sykfraach",
"badquerytext"	=> "Jo fraach koe net ferwurke wurde.
Dit is faaks om't jo besyke hawwe en sykje in word fan ien of twa letters, wat it programma noch net kin.
Of it soe kinne dat jo de fraach misskreaun hawwe, lykas \"frysk en en frei\". Besykje it nochris.",
"matchtotals"	=> "Foar \"$1\" binne $2 titles f�n en $3 siden.",
"nogomatch" => "Der is gjin side mei krekt dizze titel. Faaks is it better en Sykje nei dizze tekst.",
"titlematches"	=> "Titels",
"notitlematches" => "Gjin titels",
"textmatches"	=> "Siden",
"notextmatches"	=> "Gjin siden",
"prevn"		=> "foarige $1",
"nextn"		=> "folgende $1",
"viewprevnext"	=> "($1) ($2) ($3) besjen.",
"showingresults"	=> "<b>$1</b> resultaten fan <b>$2</b> �f.",
"showingresultsnum" => "<b>$3</b> resultaten fan <b>$2</b> �f.",
"nonefound"		=> "As der gjin resultaten binne, tink der dan om dat der <b>net</b> socht
wurde kin om wurden as \"it\" en \"in\", om't dy net byh�lden wurde, en dat as der mear
wurden syke wurde, allinnich siden f�n wurde w�r't <b>alle</b> worden op f�n wurde.",

"powersearch" => "Sykje",
"powersearchtext" => "
Sykje in nammeromten :<br>
$1<br>
$2 List trochferwizings &nbsp; Sykje nei \"$3\" \"$9\"",

"searchdisabled" => "<p>Op it stuit stjit it trochsykjen fan tekst net oan, om't de 
tsjinner it net oankin. Mei't we nije apparatuer krije wurdt it nei alle gedanken wer
mooglik. Foar now kinne jo sykje fia Google:</p>
                                                                                                                                                        
<!-- SiteSearch Google -->
<FORM method=GET action=\"http://www.google.com/search\">
<TABLE bgcolor=\"#FFFFFF\"><tr><td>
<A HREF=\"http://www.google.com/\">
<IMG SRC=\"http://www.google.com/logos/Logo_40wht.gif\"
border=\"0\" ALT=\"Google\"></A>
</td>
<td>
<INPUT TYPE=text name=q size=31 maxlength=255 value=\"$1\">
<INPUT type=submit name=btnG VALUE=\"Sykje mei Google\">
<font size=-1>
<input type=hidden name=domains value=\"{$wgServer}\"><br><input type=radio
name=sitesearch value=\"\"> WWW <input type=radio name=sitesearch
value=\"{$wgServer}\" checked> $wgSitename <br>
<input type='hidden' name='ie' value='$2'>
<input type='hidden' name='oe' value='$2'>
</font>
</td></tr></TABLE>
</FORM>
<!-- SiteSearch Google -->
",

"blanknamespace" => "($wgSitename)",


# Preferences page
#
"preferences"		=> "Ynstellings",
"prefsnologin" 		=> "Net oanmeld",
"prefsnologintext"	=> "Jo moatte <a href=\""
. wfLocalUrl( "Wiki:Userlogin" ) 
. "\">oanmeld</a> w�ze om jo ynstellings te feroarjen.",

"prefslogintext" 		=> "Jo binne oanmeld, $1.
Jo Wiki-n�mer is $2.

([[$wgMetaNamespace:Ynstelling-rie|Help by de ynstellings]].",

"prefsreset"		=> "De ynstellings binne tebek set sa't se f�stlein wienen.",
"qbsettings"		=> "Menu", 
"changepassword" 		=> "Wachtword feroarje",
"skin"			=> "Side-oansjen",
"math"			=> "Formules",
"dateformat"		=> "Datum",
"math_failure"		=> "Untsjutbere formule",
"math_unknown_error"	=> "Unbekinde fout",
"math_unknown_function"	=> "Unbekinde funksje",
"math_lexing_error"	=> "Unbekind wurd",
"math_syntax_error"	=> "Sinboufout",
"saveprefs"			=> "Ynstellings f�stlizze",
"resetprefs"		=> "Ynstellings tebek sette",
"oldpassword"		=> "Ald wachtwurd",
"newpassword"		=> "Nij wachtwurd",
"retypenew"			=> "Nij wachtwurd (nochris)",
"textboxsize"		=> "Tekstfjid-omjittings",
"rows"			=> "Rigen",
"columns"			=> "Kolommen",
"searchresultshead" 	=> "Sykje",
"resultsperpage" 		=> "Treffers de side",
"contextlines"		=> "Rigels inh�ld de treffer",
"contextchars"		=> "Tekens fan de inh�ld de rigel",
"stubthreshold" 		=> "Grins foar stobben",
"recentchangescount" 	=> "N�mer of titels op 'Koarts feroare'",
"savedprefs"		=> "Jo ynstellings binne f�stlein.",
"timezonetext"		=> "Jou it tal fan oeren dat jo tiids�ne ferskilt fan UTC (Greenwich).",
"localtime"			=> "Jo tiids�ne",
"timezoneoffset" 		=> "Ferskil",
"servertime"		=> "UTC",
"guesstimezone" 		=> "Freegje de bl�dzjer",
"emailflag"			=> "Gjin post fan oare br�kers",
"defaultns"			=> "Nammeromten dy't normaal trochsykje wurde:",

# Recent changes
#
"changes" 			=> "feroarings",
"recentchanges" 		=> "Koarts feroare",
# This is the default text, and can be overriden by editing [[$wgMetaNamespace::Recentchanges]]
"recentchangestext" 	=> "De l�ste feroarings fan de $wgSitename.",
"rcloaderr"			=> "Koarts feroare ...",
"rcnote"			=> "Dit binne de l�ste <strong>$1</strong> feroarings yn de l�ste <strong>$2</strong> dagen.",
"rcnotefrom"		=> "Dit binne de feroarings s�nt <b>$2</b> (maksimaal <b>$1</b>).",
"rclistfrom"		=> "Jou nije feroarings, begjinnende mei $1",
"rclinks"			=> "Jou $1 nije feroarings yn de l�ste $2 dagen; $3 tekstwiziging",
"rchide"			=> "in $4 form; $1 tekstwizigings; $2 oare nammeromten; $3 meartallige feroarings.",
"rcliu"			=> "; $1 feroarings troch oanmelde br�kers",
"diff"			=> "ferskil",
"hist"			=> "skiednis",
"hide"			=> "gjin",
"show"			=> "al",
"tableform"			=> "tabel",
"listform"			=> "list",
"nchanges"			=> "$1 feroarings",
"minoreditletter" 	=> "T",
"newpageletter" 		=> "N",

# Upload
#
"upload"		=> "Bied best�n oan",
"uploadbtn"		=> "Bied best�n oan",
"uploadlink"	=> "Bied �fbylden oan",
"reupload"		=> "Op 'e nij oanbiede",
"reuploaddesc"	=> "Werom nei oanbied-side.",
"uploadnologin" 	=> "Net oanmelde",
"uploadnologintext" => "Jo moatte <a href=\""
. wfLocalUrl( "Wiki:Userlogin" ) 
. "\">oanmeld</a> w�ze om in best�n oanbieden te kinnen.",

"uploadfile"	=> "Bied �fbylden, l�den, dokuminten ensfh. oan.",
"uploaderror"	=> "Oanbied-fout",
"uploadtext"	=> "<strong>STOP!</strong> L�s ear't jo eat oanbiede
de <a href=\"" . wfLocalUrlE( "$wgMetaNamespace:Ofbyld-rie" )
. "\">regels foar �fbyldbr�k</a> foar de $wgSitename.
<p>Earder oanbeane �fbylden, kinne jo fine op de <a href=\"" 
. wfLocalUrlE( "Wiki:Imagelist" ) 
. "\">list of oanbeane �fbylden</a>.
Wat oanbean en wat wiske wurdt, wurdt delskreaun yn it <a href=\"" .
wfLocalUrlE( "$wgMetaNamespace:Oanbied-loch" ) . "\">lochboek</a>.
<p>Om't nije �fbylden oan te bieden, kieze jo in best�n �t sa't dat
normaal is foar jo bl�dzjer en bestjoersysteem.
Dan jouwe jo oan jo gjin auteursrjocht skeine troch it oanbieden.
Mei \"Bied oan\" begjinne jo dan it oanbieden.
Dit kin efkes duorje as jo Ynternet-ferbining net sa flug is.
<p>Foar de best�nsforam wurdt foto's JPEG oanret, foar tekenings ensfh. PNG, en foar
l�den OGG. Br�k in d�dlike best�nsnamme, sa't in oar ek wit wat it is.
<P>Om it �fbyld yn in side op te nimmen, meitsje jo d�r sa'n keppeling:<br>
<b>[[�fbyld:jo_foto.jpg|omskriuwing]]</b> of <b>[[�fbyld:jo_logo.png|omskriuwing]]</b>;
en foar l�den <b>[[media:jo_l�d.ogg]]</b>.
<p>Tink derom dat oaren bewurkje kinne wat jo oanbiede, as dat better is foar de $wgSitename,
krekt's sa't dat foar siden jildt, en dat jo �tsletten wurde kinne as jo misbr�k
meitsje fan it systeem..",

"uploadlog"		=> "oanbied log",
"uploadlogpage" 	=> "Oanbied_log",
"uploadlogpagetext" => "Liste fan de l�st oanbeane bestannen.
(Tiid oanj�n as UTC).
<ul>
</ul>
",

"filename"		=> "Best�nsnamme",
"filedesc"		=> "Omskriuwing",
"affirmation"	=> "Ik bef�stigje dat de eigner fan de rjochten op dit best�n 
ynstimt mei fersprieding �nder de betingsten fan de $1.",

"copyrightpage" 	=> "$wgMetaNamespace:Auteursrjocht",
"copyrightpagename" => "$wgSitename auteursrjocht",
"uploadedfiles"	=> "Oanbeane bestannen",
"noaffirmation" => "Jo moatte befestigje dat wat jo oanbiede gjin rjochten skeint.",
"ignorewarning"	=> "Sjoch oer de warsk�ging hinne en lis best�n dochs f�st.",
"minlength"		=> "Ofbyldnammen moatte trije letters of mear w�ze.",
"badfilename"	=> "De �fbyldnamme is feroare nei \"$1\".",
"badfiletype"	=> "\".$1\" is net yn in oanrette best�nsfoarm.",
"largefile"		=> "It is baas as �fbylden net grutter as 100k binne.",
"successfulupload" => "Oanbieden slagge.",
"fileuploaded"	=> "Best�n \"$1\" goed oanbean.
Gean no fierder nei de beskriuwingsside: ($2). D�r kinne jo oanjaan
w�r't it best�n wei kaam, hoenear it oanmakke is en wa't it makke hat, 
en wat jo fierder mar oan ynformaasje hawwe.",

"uploadwarning" 	=> "Oanbied waarsk�ging",
"savefile"		=> "Lis best�n f�st",
"uploadedimage" 	=> " \"$1\" oanbean",
"uploaddisabled" => "Sorry, op dizze tsjinner kin net oanbean wurde.",

# Image list
#
"imagelist"		=> "Ofbyld list",
"imagelisttext"	=> "Dit is in list fan $1 �fbylden, op $2.",
"getimagelist"	=> "Ofbyld list ...",
"ilshowmatch"	=> "Jou alle �fbylden mei in name as",
"ilsubmit"		=> "Sykje",
"showlast"		=> "Jou l�ste $1 �fbylden, op $2.",
"all"			=> "alle",
"byname"		=> "namme",
"bydate"		=> "datum",
"bysize"		=> "grutte",
"imgdelete"		=> "wisk",
"imgdesc"		=> "tekst",
"imglegend"		=> "Utlis: (tekst) = Jou/bewurk �fbyld-omskriuwing.",
"imghistory"	=> "Ofbyldskiednis",
"revertimg"		=> "tebek",
"deleteimg"		=> "wisk",
"imghistlegend"	=> "Utlis: (no) = dit is it hjoeddeiske �fbyld,
(wisk) = wiskje dizze �ldere ferzje, (tebek) = set �fbyld tebek nei dizze �ldere ferzje.
<br><i>Fia de datum kinne jo it �fbyld dat doe oanbean besjen</i>.",

"imagelinks"	=> "Ofbyldkeppelings",
"linkstoimage"	=> "Dizze siden binne keppele oan it �fbyld:",
"nolinkstoimage" => "Der binne gjin siden oan dit �fbyld keppelje.",

# Statistics
#
"statistics"	=> "Statistyk",
"sitestats"		=> "Side statistyk",
"userstats"		=> "Br�ker statistyk",
"sitestatstext" => "It tal fan siden in de $wgSitename is: <b>$2</b>.<br>
(Oerlissiden, siden oer de $wgSitename, oare bys�ndere siden,  stobben en
trochferwizings yn de databank binne d�rby net meiteld.)<br>
It tal fan siden in de databank is: <b>$1</b>.
<p>
Der is <b>$3</b> kear in side opfrege, en <b>$4</b> kear in side bewurke,
s�nt it programma bywurke is (15 oktober 2002).
Dat komt yn trochslach del op <b>$5</b> kear bewurke de side,
en <b>$6</b> kear opfrege de bewurking.",

"userstatstext" => "It tal fan registreare br�kers is <b>$1</b>.
It tal fan behearders d�rfan is: <b>$2</b>.",

# Maintenance Page
#
"maintenance"		=> "Underh�ld",
"maintnancepagetext"	=> "Op dizze side stiet ark foar it deistich �nderh�ld.
In part fan de funksjes freegje in soad fan de databank, dus freegje net nei
eltse oanpassing daalks in fernijde side op.",

"maintenancebacklink"	=> "Werom nei Underh�ldside",
"disambiguations"		=> "Trochverwizings",
"disambiguationspage"	=> "$wgMetaNamespace:trochferwizing",
"disambiguationstext"	=> "Dizze siden binne keppele fia in
[[$wgMetaNamespace:trochferwizing]]. 
Se soenen mei de side sels keppele wurde moatte.<br>
(Allinnich siden �t deselde nammeromte binne oanj�n.)",

"doubleredirects"	=> "D�bele trochverwizings",
"doubleredirectstext"	=> "<b>Let op!</b> Der kinne missen yn dizze list stean!
Dat komt dan ornaris troch oare keppelings �nder de \"#REDIRECT\".<br>
Eltse rigel jout keppelings nei de earste en twadde trochverwizing, en dan de earste regel fan
de twadde trochferwizing, wat it \"echte\" doel w�ze moat.",

"brokenredirects"		=> "Misse trochferwizings",
"brokenredirectstext"	=> "Dizze trochferwizings ferwize nei siden dy't der net binne.",
"selflinks"			=> "Siden mei sels-ferwizings",
"selflinkstext"		=> "Dizze siden hawwe in keppeling nei de side sels, wat net sa w�ze moat.",
"mispeelings"           => "Siden mei skriuwflaters",
"mispeelingstext"		=> "Op dizze siden stiet in skriuw- of typ-flater dy't in soad makke wurd, lykas oanjoen op \"$1\".
D�r soe ek stean moatte hoe't it (goed skreaun) wurdt.",
"mispeelingspage"       => "List fan faak makke flaters",
"missinglanguagelinks"  => "Untbrekkende taalkeppelings",
"missinglanguagelinksbutton"    => "Fyn �ntbrekkende taalkeppelings foar",
"missinglanguagelinkstext"      => "Dizze siden hawwe gjin taalkeppeling nei deselde side yn taal \"$1\".
(Ferwizings en oanheake siden binne net <i>net</i> besocht.",


# Miscellaneous special pages
#
"orphans"		=> "Lossteande siden",
"lonelypages"	=> "Lossteande siden",
"unusedimages"	=> "Lossteande �bylden",
"popularpages"	=> "Grage siden",
"nviews"		=> "$1 kear sjoen",
"wantedpages"	=> "Nedige siden",
"nlinks"		=> "$1 keer keppele",
"allpages"		=> "Alle titels",
"randompage"	=> "Samar in side",
"shortpages"	=> "Koarte siden",
"longpages"		=> "Lange siden",
"listusers"		=> "Br�kerlist",
"specialpages"	=> "Bys�ndere siden",
"spheading"		=> "Bys�ndere siden foar all br�kers",
"sysopspheading"	=> "Allinich foar behearders",
"developerspheading" => "Allinich foar untwiklers",
"protectpage"	=> "Beskerm side",
"recentchangeslinked" => "Folgje keppelings",
"rclsub"		=> "(nei siden d�r't \"$1\" keppelings nei hat)",
"debug"		=> "Breksykje",
"newpages"		=> "Nije siden",
"ancientpages"	=> "Alde siden",
"movethispage"	=> "Move this side",
"unusedimagestext" => "<p>Tink derom dat ore web sides lykas fan de oare
parten fan it meartaliche projekt mei in keppeling nei in direkte URL nei
an �fbyld makke hawwe kinne. Dan wurde se noch br�ke, mar stean al in dizze list.",

"booksources"	=> "",
"booksourcetext" 	=> "",
"alphaindexline" 	=> "$1 oan't $2",


# Email this br�ker
#
"mailnologin"	=> "Gjin adres beskikber",
"mailnologintext" => "Jo moatte <a href=\""
. wfLocalUrl( "Wiki:Userlogin" ) . "\">oanmeld</a>
w�ze, en in jildich e-postadres <a href=\"" .
  wfLocalUrl( "Wiki:Preferences" ) . "\">ynsteld</a>
hawwe, om oan oare br�kers e-post stjoere te kinnen.",

"emailuser"		=> "Skriuw dizze br�ker",
"emailpage"		=> "E-post nei br�ker",
"emailpagetext"	=> "As dizze br�ker in jildich e-postadres in ynsteld hat,
dan kinne jo ien berjocht ferstjoere.
It e-postadres dat jo ynsteld hawwe wurdt br�kt as de �fstjoerder, sa't de �ntfanger
antwurdzje kin.",
"noemailtitle"	=> "Gjin e-postadres",
"noemailtext"	=> "Dizze br�ker had gjin jildich e-postadres ynsteld,
of hat oanjaan gjin post fan oare br�kers krije te wollen.",
"emailfrom"		=> "Fan",
"emailto"		=> "Oan",
"emailsubject"	=> "Oer",
"emailmessage"	=> "Tekst",
"emailsend"		=> "Stjoer",
"emailsent"		=> "Berjocht stjoerd",
"emailsenttext" => "Jo berjocht is stjoerd.",

# Watchlist
#
"watchlist"		=> "Folchlist",
"watchlistsub"	=> "(foar br�ker \"$1\")",
"nowatchlist"	=> "Jo hawwe gjin siden op jo folchlist.",
"watchnologin"	=> "Not oanmeld in",
"watchnologintext"=> "Jo moatte <a href=\""
. wfLocalUrl( "Wiki:Userlogin" ) 
. "\">oanmeld</a> w�ze om jo folchlist te feroarjen.",

"addedwatch"	=> "Oan folchlist tafoege",
"addedwatchtext"	=> "De side \"$1\" is tafoege oan jo <a href=\"" 
. wfLocalUrl( "Wiki:Watchlist" ) . "\">folchlist</a>.
As dizze side sels, of de oerlisside, feroare wurd, dan komt dat d�r yn,
en de side stiet dan ek <b>fet</b> yn de <a href=\"" .
  wfLocalUrl( "Wiki:Recentchanges" ) . "\">Koarts feroare</a> list.

<p>As jo letter in side net mear folgje wolle, dan br�ke jo \"Ferjit dizze side\".",
"removedwatch"	=> "Net mear folgje",
"removedwatchtext" => "De side \"$1\" stiet net mear op jo folchlist.",
"watchthispage"	=> "Folgje dizze side",
"unwatchthispage" => "Ferjit dizze side",
"notanarticle"	=> "Dit kin net folge wurde.",
"watchnochange" 	=> "Fan de siden dy't jo folgje is der yn dizze perioade net ien feroare.",
"watchdetails"	=> "Jo folchlist hat $1 siden (oerlissiden net meiteld).
In dizze perioade binne der $2 siden feroare.
$3. (<a href='$4'>G�ns myn folchlist</a>.)",

"watchmethod-recent" => "Koarts feroare ...",
"watchmethod-list" => "Folge ...",
"removechecked"	=> "Ferjit dizze siden",
"watchlistcontains" => "Jo folgje op it stuit $1 siden.",
"watcheditlist"	=> "Dit binne de siden op jo folchlist, oardere op alfabet.
Jou oan hokfoar siden jo net mear folgje wolle, en bef�stigje dat �nderoan de side.",

"removingchecked" => "Wiskje siden fan jo folchlist ...",
"couldntremove" 	=> "Koe \"$1\" net ferjitte ...",
"iteminvalidname" => "Misse namme: \"$1\" ...",
"wlnote" 		=> "Dit binne de l�ste <strong>$1</strong> feroarings yn de l�ste <strong>$2</strong> oeren.",


# Delete/protect/revert
#
"deletepage"	=> "Wisk side",
"confirm"		=> "Bef�stigje",
"excontent"		=> "inh�ld wie:",
"exbeforeblank" 	=> "foar de tekst wiske wie, wie dat:",
"exblank"		=> "side wie leech",
"confirmdelete"	=> "Befestigje wiskjen",
"deletesub"		=> "(Wiskje \"$1\")",
"historywarning"	=> "Waarsk�ging: De side dy't jo wiskje wolle hat skiednis: ",
"confirmdeletetext" => "Jo binne dwaande mei it foar altyd wiskjen fan in side
of �fbyld, tegearre mei alle skiednis, �t de databank.
Bef�stigje dat jo dat wier dwaan wolle. Bef�stigje dat dat is wat jo witte wat it gefolch 
is en dat jo dit dogge neffens de [[$wgMetaNamespace:wisk-rie]].",

"confirmcheck"	=> "Ja, ik woe dit wier wiskje!",
"actioncomplete"	=> "Dien",
"deletedtext"	=> "\"$1\" is wiske.
Sjoch \"$2\" foar in list fan wat resint wiske is.",
"deletedarticle"	=> "\"$1\" is wiske",
"dellogpage"	=> "Wisk_loch",
"dellogpagetext" => "Dit is wat der resint wiske is.
(Tiden oanj�n as UTC).
<ul>
</ul>
",

"deletionlog"	=> "wisk loch",
"reverted"		=> "Tebekset nei eardere ferzje",
"deletecomment"	=> "Reden foar it wiskjen",
"imagereverted"	=> "Tebeksette nei eardere ferzje is slagge.",
"rollback"		=> "Feroarings tebeksette",
"rollbacklink"	=> "feroaring tebeksette",
"rollbackfailed"	=> "Feroaring tebeksette net slagge",
"cantrollback"	=> "Disse feroaringt kin net tebek set, om't der mar ien skriuwer is.",
"alreadyrolled"	=> "Kin de feroaring fan [[$1]]
troch [[Br�ker:$2|$2]] ([[Br�ker oerlis:$2|Oerlis]]) net tebeksette;
inoar hat de feroaring tebekset, of oars wat oan de side feroare.

De l�ste feroaring wie fan [[Br�ker:$3|$3]] ([[Br�ker oerlis:$3|Oerlis]]). ",
#   only shown if there is an edit comment
"editcomment"	=> "De gearfetting wie: \"<i>$1</i>\".", 
"revertpage"	=> "Tebek set ta de ferzje fan \"$1\"",

# Undelete
"undelete"		=> "Side werom set",
"undeletepage"	=> "Side besjen en werom sette",
"undeletepagetext" => "Dizze siden binne wiske, mar sitte noch yn it argyf en kinne weromset wurde.
(It argyf kin �t en troch leechmeitsje wurde.)",
"undeletearticle" => "Set side werom",
"undeleterevisions" => "$1 ferzjes in it argyf",
"undeletehistory" => "Soenen jo dizze side weromsette, dan wurde alle ferzjes weromset as part
fan de skiednis. As der in nije side is mei dizze namme, dan wurd de hjoeddeise ferzje <b>net</b>
troch de l�ste ferzje �t dy weromsette skiednis ferfangen.",
"undeleterevision" => "Wiske side, sa't dy $1 wie.",
"undeletebtn" 	=> "Weromset!",
"undeletedarticle" => "\"$1\" weromset",
"undeletedtext"   => "It weromsette fan side [[$1]] is slagge.
(List fan resint [[$wgMetaNamespace:wisk-loch|wiske of weromsette siden]].",

# Contributions
#
"contributions"	=> "Br�ker bydragen",
"mycontris"		=> "Myn bydragen",
"contribsub"	=> "Foar \"$1\"",
"nocontribs"	=> "Der binne gjin feroarings f�n dyt't hjirmei oerienkomme.",
"ucnote"		=> "Dit binne dizze br�ker's leste <b>$1</b> feroarings yn de l�ste <b>$2</b> dagen.",
"uclinks"		=> "Besjoch de l�ste $1 feroarings; besjoch de l�ste $2 dagen.",
"uctop"		=> " (boppen)",

# What links here
#
"whatlinkshere"	=> "Wat is hjirmei keppele",
"notargettitle"	=> "Gjin side",
"notargettext"	=> "Jo hawwe net sein oer hokfoar side jo dit witte wolle.",
"linklistsub"	=> "(List fan keppelings)",
"linkshere"		=> "Dizze siden binne hjirmei keppele:",
"nolinkshere"	=> "Gjinien side is hjirmei keppele!",
"isredirect"	=> "trochverwizing",

# Block/unblock IP
#
"blockip"		=> "Slut br�ker �t",
"blockiptext"	=> "Br�k dizze fjilden om in br�ker fan skriuwtagong �t te sluten.
Dit soe allinnich omwillens fan fandalisme dwaan wurde moatte, sa't de
[[$wgMetaNamespace:Utslut-rie|�tslut-rie]] it oanjout.
Meld de krekte reden! Begelyk, neam de siden dy't oantaaste waarden.",
"ipaddress"		=> "Br�kernamme of Ynternet-adres",
"ipbreason"		=> "Reden",
"ipbsubmit"		=> "Slut dizze br�ker �t",
"badipaddress"	=> "Dy br�ker bestiet net",
"noblockreason"	=> "Jo moatte de krekte reden opjaan.",
"blockipsuccesssub" => "Utsluting slagge",
"blockipsuccesstext" => "Br�ker \"$1\" is �tsletten.<br>
(List fan [[Wiki:Ipblocklist|�tslette br�kers]].)",
"unblockip"		=> "Lit br�ker der wer yn",
"unblockiptext"	=> "Br�k dizze fjilden om in br�ker wer skriuwtagong te jaan.",
"ipusubmit"		=> "Lit dizze br�ker der wer yn",
"ipusuccess"	=> "Br�ker \"$1\" ynlitten",
"ipblocklist"	=> "List fan �tsletten Ynternet-adressen en br�kersnammen",
"blocklistline"	=> "$\"3\", troch \"$2\" op $1",
"blocklink"		=> "slut �t",
"unblocklink"	=> "lit yn",
"contribslink"	=> "bydragen",
"autoblocker"	=> "Jo wienen �tsletten om't jo Ynternet-adres oerienkomt mei dat fan \"$1\".
Foar it �tslute fan dy br�ker waard dizze reden joen: \"$2\".",

# Developer tools
#
"lockdb"		=> "Meitsje de database 'Net-skriuwe'",
"unlockdb"  	=> "Meitsje de databank skriuwber",
"lockdbtext"	=> "Salang as de databank 'Net-skriuwe' is,
is foar br�kers it feroarjen fan siden, ynstellings, folchlisten, ensfh. net mooglik.
Bef�stigje dat dit is wat jo wolle, en dat jo de databank wer skriuwber meitsje as
jo �nderh�ld ree is.",
"unlockdbtext"	=> "As de databank skriuwber makke wurdt,
is foar br�kers it feroarjen fan siden, ynstelingen, folchlisten, ensfh, wer mooglik.
Bef�stigje dat dit is wat jo wolle.",
"lockconfirm"	=> "Ja, ik wol wier de databank 'Net--skriuwe' meitsje.",
"unlockconfirm"	=> "Ja, ik wol wier de databank skriuwber meitsje.",
"lockbtn"		=> "Meitsje de database 'Net-skriuwe'",
"unlockbtn"		=> "Meitsje de databank skriuwber",
"locknoconfirm"	=> "Jo hawwe jo hanneling net bef�stige.",
"lockdbsuccesssub" => "Databank is 'Net-skriuwe'",
"unlockdbsuccesssub" => "Database is skriuwber",
"lockdbsuccesstext" => "De $wgSitename databank is 'Net-skriuwe' makke.
<br>Tink derom en meitsje de databank skriuwber as jo �nderh�ld ree is.",
"unlockdbsuccesstext" => "De $wgSitename databank is skriuwber makke.",

# SQL query
#
"asksql"		=> "SQL-fraach",
"asksqltext"	=> "Br�k dizze fjilden foar in databank-fraach oan de $wgSitename databank.
Br�k inkele oanheltekens ('likas dit') foar tekst.
Dit kin in foar de tsjinner in soad wurk betsjutte. Br�k dit dus net �nnedig.",
"sqlislogged"	=> "(Alle fragen komme yn in lochbest�n.)",
"sqlquery"		=> "Fraach",
"querybtn"		=> "Bied de fraach oan",
"selectonly"	=> "Oare fragen as \"SELECT\" binne foarbeh�lden oan
$wgSitename �ntwiklers.",
"querysuccessful" => "Fraach slagge",


# Move page
#
"movepage"		=> "Werneam side",
"movepagetext"	=> "Dit werneamt in side, mei alle sideskiednis.
De �lde titel wurdt in trochferwizing nei de nije.
Keppelings mei de �lde side wurde net feroare; 
[[Wiki:Maintenance|gean sels nei]] of't der d�bele of misse ferwizings binne.
It hinget fan jo �f of't de siden noch keppelen binne sa't it mient wie.

De side wurdt '''net''' werneamt as der al in side mei dy namme is, �tsein as it in side
s�nder skiednis is en de side leech is of in trochferwizing is. Sa kinne jo in side
daalks weromneame as jo in flater meitsje, mar jo kinne in oare side net oerskriuwe.",

"movepagetalktext" => "As der in oerlisside by heart, dan bliuwt dy oan de side keppele, '''�tsein''':
*De nije sidenamme yn in oare nammeromte is,
*Der keppele oan de nije namme al in net-lege oerlisside is, of
*Jo d�r net foar kieze.

In dizze gefallen is it oan jo hoe't jo de oerlisside werneame of ynfoegje wolle.",

"movearticle"	=> "Werneam side",
"movenologin"	=> "Net oameld",
"movenologintext" => "Jo moatte <a href=\""
. wfLocalUrl( "Wikipedy:Userlogin" ) 
. "\">oanmeld</a> w�ze om in side wer te neamen.",

"newtitle"		=> "As nij titel",
"movepagebtn"	=> "Werneam side",
"pagemovedsub"	=> "Werneamen slagge",
"pagemovedtext"	=> "Side \"[[$1]]\" werneamd as \"[[$2]]\".",
"articleexists"	=> "Der is al in side mei dy namme,
of oars is de namme dy't jo oanj�n hawwe net tastean.
Besykje it op 'e nij.",

"talkexists"	=> "It werneamen op sich is slagge, mar de eardere oerlisside is 
net mear keppele om't der foar de nije namme el al in oerlisside wie.
Gearfoegje de oerlissiden h�nmjittig.",

"movedto"		=> "werenamd as",
"moveoerlis"	=> "De oerlisside, as dy der is, moat oan de side keppele bliuwe.",
"talkpagemoved"	=> "De oerlisside is al noch keppele.",
"talkpagenotmoved" => "De oerlisside is <strong>net</strong> mear keppele.",

);


class LanguageFy extends Language {

	function getDefaultUserOptions () {
		global $wgDefaultUserOptionsFy ;
		return $wgDefaultUserOptionsFy ;
		}

	function getBookstoreList () {
		global $wgBookstoreListFy ;
		return $wgBookstoreListFy ;
	}

	function getNamespaces() {
		global $wgNamespaceNamesFy;
		return $wgNamespaceNamesFy;
	}

	function getNsText( $index ) {
		global $wgNamespaceNamesFy;
		return $wgNamespaceNamesFy[$index];
	}

	function getNsIndex( $text ) {
		global $wgNamespaceNamesFy;

		foreach ( $wgNamespaceNamesFy as $i => $n ) {
			if ( 0 == strcasecmp( $n, $text ) ) { return $i; }
		}
		return false;
	}

# Inherit specialPage()

	function getQuickbarSettings() {
		global $wgQuickbarSettingsFy;
		return $wgQuickbarSettingsFy;
	}

	function getSkinNames() {
		global $wgSkinNamesFy;
		return $wgSkinNamesFy;
	}

	function getMathNames() {
		global $wgMathNamesFy;
		return $wgMathNamesFy;
	}
	
	function getDateFormats() {
		global $wgDateFormatsFy;
		return $wgDateFormatsFy;
	}

	function getUserToggles() {
		global $wgUserTogglesFy;
		return $wgUserTogglesFy;
	}

	function getLanguageNames() {
		global $wgLanguageNamesFy;
		return $wgLanguageNamesFy;
	}

	function getLanguageName( $code ) {
		global $wgLanguageNamesFy;
		if ( ! array_key_exists( $code, $wgLanguageNamesFy ) ) {
			return "";
		}
		return $wgLanguageNamesFy[$code];
	}

	function getMonthName( $key )
	{
		global $wgMonthNamesFy;
		return $wgMonthNamesFy[$key-1];
	}
	
	/* by default we just return base form */
	function getMonthNameGen( $key )
	{
		global $wgMonthNamesFy;
		return $wgMonthNamesFy[$key-1];
	}
	
	function getMonthRegex()
	{
		global $wgMonthNamesFy;
		return implode( "|", $wgMonthNamesFy );
	}

	function getMonthAbbreviation( $key )
	{
		global $wgMonthAbbreviationsFy;
		return $wgMonthAbbreviationsFy[$key-1];
	}

	function getWeekdayName( $key )
	{
		global $wgWeekdayNamesFy;
		return $wgWeekdayNamesFy[$key-1];
	}

 # Inherit userAdjust()
 
	function date( $ts, $adj = false )
	{
		global $wgAmericanDates, $wgUser, $wgUseDynamicDates;

		if ( $adj ) { $ts = $this->userAdjust( $ts ); }
		
		if ( $wgUseDynamicDates ) {
			$datePreference = $wgUser->getOption( 'date' );		
			if ( $datePreference == 0 ) {
				$datePreference = $wgAmericanDates ? 1 : 2;
			}
		} else {
			$datePreference = $wgAmericanDates ? 1 : 2;
		}
		
		if ( $datePreference == 1 ) {
			# MDY
			$d = $this->getMonthAbbreviation( substr( $ts, 4, 2 ) ) .
			  " " . (0 + substr( $ts, 6, 2 )) . ", " .
			  substr( $ts, 0, 4 );
		} else if ( $datePreference == 2 ) {
			#DMY
			$d = (0 + substr( $ts, 6, 2 )) . " " .
			  $this->getMonthAbbreviation( substr( $ts, 4, 2 ) ) . " " .
			  substr( $ts, 0, 4 );
		} else {
			#YMD
			$d = substr( $ts, 0, 4 ) . " " . $this->getMonthAbbreviation( substr( $ts, 4, 2 ) ) .
				" " . (0 + substr( $ts, 6, 2 ));
		}

		return $d;
	}

	function time( $ts, $adj = false )
	{
		if ( $adj ) { $ts = $this->userAdjust( $ts ); }

		$t = substr( $ts, 8, 2 ) . "." . substr( $ts, 10, 2 );
		return $t;
	}

# Inherit timeanddate()

# Inherit rfc1123()

	function getValidSpecialPages()
	{
		global $wgValidSpecialPagesFy;
		return $wgValidSpecialPagesFy;
	}

	function getSysopSpecialPages()
	{
		global $wgSysopSpecialPagesFy;
		return $wgSysopSpecialPagesFy;
	}

	function getDeveloperSpecialPages()
	{
		global $wgDeveloperSpecialPagesFy;
		return $wgDeveloperSpecialPagesFy;
	}

	function getMessage( $key )
	{
		global $wgAllMessagesFy;
		return $wgAllMessagesFy[$key];
	}
	
# Inherit iconv()

# Inherit ucfirst()

# Inherit checkTitleEncoding( )
	
# Inherit stripForSearch()

# Inherit setAltEncoding()

# Inherit recodeForEdit()

# Inherit recodeInput() 

# Inherit replaceDates()

# Inherit isRTL()

}
global $IP;
@include_once( "{$IP}/Language" . ucfirst( $wgLanguageCode ) . ".php" );

?>
