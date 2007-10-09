<?php
/** Croatian (hrvatski)
  *
  * @addtogroup Language
  *
  * @author Roberta F.
  * @author SpeedyGonsales
  * @author Treecko
  */

$skinNames = array(
	'standard'  => 'Standardna',
	'nostalgia'  => 'Nostalgija',
	'cologneblue'  => 'Kölnska plava',
	'monobook'  => 'MonoBook',
	'myskin'  => 'MySkin',
	'chick'  => 'Chick'
);

$namespaceNames = array(
	NS_MEDIA           => 'Mediji',
	NS_SPECIAL         => 'Posebno',
	NS_MAIN            => '',
	NS_TALK            => 'Razgovor',
	NS_USER            => 'Suradnik',
	NS_USER_TALK       => 'Razgovor_sa_suradnikom',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK    => 'Razgovor_$1',
	NS_IMAGE           => 'Slika',
	NS_IMAGE_TALK      => 'Razgovor_o_slici',
	NS_MEDIAWIKI       => 'MediaWiki',
	NS_MEDIAWIKI_TALK  => 'MediaWiki_razgovor',
	NS_TEMPLATE        => 'Predložak',
	NS_TEMPLATE_TALK   => 'Razgovor_o_predlošku',
	NS_HELP            => 'Pomoć',
	NS_HELP_TALK       => 'Razgovor_o_pomoći',
	NS_CATEGORY        => 'Kategorija',
	NS_CATEGORY_TALK   => 'Razgovor_o_kategoriji'
);

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j. F Y.',
	'dmy both' => 'H:i, j. F Y.',
);

$separatorTransformTable = array(',' => '.', '.' => ',' );
$fallback8bitEncoding = 'iso-8859-2';
$linkTrail = '/^([čšžćđßa-z]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline'               => 'Podcrtane poveznice',
'tog-highlightbroken'         => 'Istakni prazne poveznice drugom bojom (inače, upitnikom na kraju).',
'tog-justify'                 => 'Poravnaj odlomke i zdesna',
'tog-hideminor'               => 'Sakrij manje izmjene na stranici "Nedavne promjene"',
'tog-extendwatchlist'         => 'Proširi popis praćenih stranica tako da prikaže sve odgovarajuće promjene',
'tog-usenewrc'                => 'Poboljšan izgled Nedavnih promjena (nije za sve preglednike)',
'tog-numberheadings'          => 'Automatski označi naslove brojevima',
'tog-showtoolbar'             => 'Prikaži traku s alatima za uređivanje',
'tog-editondblclick'          => 'Dvoklik otvara uređivanje stranice (JavaScript)',
'tog-editsection'             => 'Prikaži poveznice za uređivanje pojedinih odlomaka',
'tog-editsectiononrightclick' => 'Pritiskom na desnu tipku miša otvori uređivanje pojedinih odlomaka (JavaScript)',
'tog-showtoc'                 => 'U člancima s više od tri odlomka prikaži tablicu sadržaja.',
'tog-rememberpassword'        => 'Zapamti lozinku između prijava',
'tog-editwidth'               => 'Okvir za uređivanje zauzima cijelu širinu',
'tog-watchcreations'          => 'Dodaj članke koje kreiram na moju listu praćenja',
'tog-watchdefault'            => 'Postavi sve nove i izmijenjene stranice u popis praćenja',
'tog-watchmoves'              => 'Dodaj sve stranice koje premjestim na popis praćenja',
'tog-watchdeletion'           => 'Dodaj sve stranice koje izbrišem na popis praćenja',
'tog-minordefault'            => 'Normalno označavaj sve moje izmjene kao manje',
'tog-previewontop'            => 'Prikaži kako će stranica izgledati iznad okvira za uređivanje',
'tog-previewonfirst'          => 'Prikaži kako će stranica izgledati čim otvorim uređivanje',
'tog-nocache'                 => 'Isključi međuspremnik (cache) stranica.',
'tog-enotifwatchlistpages'    => 'Pošalji mi e-mail kod izmjene stranice u popisu praćenja',
'tog-enotifusertalkpages'     => 'Pošalji mi e-mail kod izmjene moje stranice za razgovor',
'tog-enotifminoredits'        => 'Pošalji mi e-mail i kod manjih izmjena',
'tog-enotifrevealaddr'        => 'Prikaži moju e-mail adresu u obavijestima o izmjeni',
'tog-shownumberswatching'     => 'Prikaži broj suradnika koji prate stranicu (u nedavnim izmjenama, popisu praćenja i samim člancima)',
'tog-fancysig'                => 'Običan potpis (bez automatske poveznice)',
'tog-externaleditor'          => 'Uvijek koristi vanjski editor',
'tog-externaldiff'            => 'Uvijek koristi vanjski program za usporedbu',
'tog-showjumplinks'           => 'Uključi pomoćne poveznice "Skoči na"',
'tog-uselivepreview'          => 'Uključi trenutačni pretpregled (JavaScript) (eksperimentalno)',
'tog-forceeditsummary'        => 'Podsjeti me ako sažetak uređivanja ostavljam praznim',
'tog-watchlisthideown'        => 'Sakrij moja uređivanja s popisa praćenja',
'tog-watchlisthidebots'       => 'Sakrij uređivanja botova s popisa praćenja',
'tog-watchlisthideminor'      => 'Sakrij manje promjene s popisa praćenja',
'tog-ccmeonemails'            => 'Pošalji mi kopiju e-maila kojeg pošaljem drugim suradnicima',
'tog-diffonly'                => 'Ne prikazuj sadržaj stranice prilikom usporedbe inačica',

'underline-always'  => 'Uvijek',
'underline-never'   => 'Nikad',
'underline-default' => 'Prema postavkama preglednika',

'skinpreview' => '(Pregled)',

# Dates
'sunday'        => 'nedjelja',
'monday'        => 'ponedjeljak',
'tuesday'       => 'utorak',
'wednesday'     => 'srijeda',
'thursday'      => 'četvrtak',
'friday'        => 'petak',
'saturday'      => 'subota',
'january'       => 'siječnja',
'february'      => 'veljače',
'march'         => 'ožujka',
'april'         => 'travnja',
'may_long'      => 'svibnja',
'june'          => 'lipnja',
'july'          => 'srpnja',
'august'        => 'kolovoza',
'september'     => 'rujna',
'october'       => 'listopada',
'november'      => 'studenog',
'december'      => 'prosinca',
'january-gen'   => 'siječnja',
'february-gen'  => 'veljače',
'march-gen'     => 'ožujka',
'april-gen'     => 'travnja',
'may-gen'       => 'svibnja',
'june-gen'      => 'lipnja',
'july-gen'      => 'srpnja',
'august-gen'    => 'kolovoza',
'september-gen' => 'rujna',
'october-gen'   => 'listopada',
'november-gen'  => 'studenog',
'december-gen'  => 'prosinca',
'jan'           => 'sij',
'feb'           => 'velj',
'mar'           => 'ožu',
'apr'           => 'tra',
'may'           => 'svi',
'jun'           => 'lip',
'jul'           => 'srp',
'aug'           => 'kol',
'sep'           => 'ruj',
'oct'           => 'lis',
'nov'           => 'stu',
'dec'           => 'pro',

# Bits of text used by many pages
'categories'            => '{{PLURAL:$1|Kategorija|Kategorije}}',
'pagecategories'        => '{{PLURAL:$1|Kategorija|Kategorije}}',
'category_header'       => 'Članci u kategoriji "$1"',
'subcategories'         => 'Potkategorije',
'category-media-header' => 'Mediji u kategoriji "$1":',
'category-empty'        => "''U ovoj kategoriji trenutno nema članaka ni medija.''",

'mainpagetext'      => 'Softver Wiki je uspješno instaliran.',
'mainpagedocfooter' => 'Pogledajte [http://meta.wikimedia.org/wiki/MediaWiki_localisation dokumentaciju o prilagodbi sučelja]
i [http://meta.wikimedia.org/wiki/MediaWiki_User%27s_Guide Vodič za suradnike] za pomoć pri uporabi i podešavanju.',

'about'          => 'O',
'article'        => 'Članak',
'newwindow'      => '(otvara se u novom prozoru)',
'cancel'         => 'Odustani',
'qbfind'         => 'Nađi',
'qbbrowse'       => 'Pregledaj',
'qbedit'         => 'Uredi',
'qbpageoptions'  => 'Postavke stranice',
'qbpageinfo'     => 'O stranici',
'qbmyoptions'    => 'Moje stranice',
'qbspecialpages' => 'Posebne stranice',
'moredotdotdot'  => 'Više...',
'mypage'         => 'Moja stranica',
'mytalk'         => 'Moj razgovor',
'anontalk'       => 'Razgovor za ovu IP adresu',
'navigation'     => 'Orijentacija',

'errorpagetitle'    => 'Greška',
'returnto'          => 'Vrati se na $1.',
'tagline'           => 'Izvor: {{SITENAME}}',
'help'              => 'Pomoć',
'search'            => 'Traži',
'searchbutton'      => 'Traži',
'go'                => 'Kreni',
'searcharticle'     => 'Kreni',
'history'           => 'Stare izmjene',
'history_short'     => 'Stare izmjene',
'updatedmarker'     => 'obnovljeno od zadnjeg posjeta',
'info_short'        => 'Informacija',
'printableversion'  => 'Verzija za ispis',
'permalink'         => 'Trajna poveznica',
'print'             => 'Ispiši',
'edit'              => 'Uredi',
'editthispage'      => 'Uredi ovu stranicu',
'delete'            => 'Izbriši',
'deletethispage'    => 'Izbriši ovu stranicu',
'undelete_short'    => 'Vrati $1 uređivanja',
'protect'           => 'Zaštiti',
'protect_change'    => 'promijeni stupanj zaštite',
'protectthispage'   => 'Zaštiti ovu stranicu',
'unprotect'         => 'Ukloni zaštitu',
'unprotectthispage' => 'Ukloni zaštitu s ove stranice',
'newpage'           => 'Nova stranica',
'talkpage'          => 'Razgovor o ovoj stranici',
'talkpagelinktext'  => 'Razgovor',
'specialpage'       => 'Posebna stranica',
'personaltools'     => 'Osobni alati',
'postcomment'       => 'Napiši komentar',
'articlepage'       => 'Vidi članak',
'talk'              => 'Razgovor',
'views'             => 'Pogledi',
'toolbox'           => 'Traka s alatima',
'userpage'          => 'Vidi suradnikovu stranicu',
'projectpage'       => 'Vidi stranicu o projektu',
'imagepage'         => 'Vidi stranicu slike',
'mediawikipage'     => 'Vidi stranicu za razgovor',
'categorypage'      => 'Vidi stranicu s kategorijama',
'viewtalkpage'      => 'Vidi razgovor',
'otherlanguages'    => 'Drugi jezici',
'redirectedfrom'    => '(Preusmjereno s $1)',
'redirectpagesub'   => 'Preusmjeravanje',
'lastmodifiedat'    => 'Datum zadnje promjene na ovoj stranici: $2, $1', # $1 date, $2 time
'viewcount'         => 'Ova stranica je pogledana $1 puta.',
'protectedpage'     => 'Zaštićena stranica',
'jumpto'            => 'Skoči na:',
'jumptonavigation'  => 'orijentacija',
'jumptosearch'      => 'traži',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'O projektu {{SITENAME}}',
'aboutpage'         => 'Project:O_projektu_{{SITENAME}}',
'bugreports'        => 'Poruke o programskim greškama',
'bugreportspage'    => 'Project:Poruke_o_programskim_greškama',
'copyright'         => 'Sadržaji se koriste u skladu s $1.',
'copyrightpagename' => 'Autorska prava na projektu {{SITENAME}}',
'copyrightpage'     => 'Project:Autorska prava',
'currentevents'     => 'Aktualno',
'disclaimers'       => 'Odricanje od odgovornosti',
'disclaimerpage'    => '{{ns:4}}:General_disclaimer',
'edithelp'          => 'Kako uređivati stranicu',
'edithelppage'      => '{{ns:project}}:Kako_uređivati_stranicu',
'faq'               => 'Najčešća pitanja',
'helppage'          => 'Project:Pomoć',
'mainpage'          => 'Glavna stranica',
'policy-url'        => 'Project:Pravila',
'portal'            => 'Portal zajednice',
'privacy'           => 'Zaštita privatnosti',
'privacypage'       => '{{ns:project}}:Zaštita privatnosti',
'sitesupport'       => 'Novčani prilozi',

'badaccess'        => 'Greška u ovlaštenjima',
'badaccess-group0' => 'Nije vam dopušteno izvršiti ovaj zahvat.',
'badaccess-group1' => 'Ovaj zahvat mogu izvršiti samo suradnici iz grupe $1.',
'badaccess-group2' => 'Ovaj zahvat mogu izvršiti samo suradnici iz jedne od grupa $1.',
'badaccess-groups' => 'Ovaj zahvat mogu izvršiti samo suradnici iz jedne od grupa $1.',

'versionrequired'     => 'Potrebna inačica $1 MediaWikija',
'versionrequiredtext' => 'Za korištenje ove stranice potrebna je inačica $1 MediaWiki softvera. Pogledaj [[Special:Version]]',

'ok'                      => 'U redu',
'retrievedfrom'           => 'Dobavljeno iz "$1"',
'youhavenewmessages'      => 'Imate $1 ($2).',
'newmessageslink'         => 'nove poruke',
'newmessagesdifflink'     => 'zadnja promjena na stranici za razgovor',
'youhavenewmessagesmulti' => 'Imate nove poruke na $1',
'editsection'             => 'uredi',
'editold'                 => 'uredi',
'editsectionhint'         => 'Uređivanje odlomka: $1',
'toc'                     => 'Sadržaj',
'showtoc'                 => 'prikaži',
'hidetoc'                 => 'sakrij',
'thisisdeleted'           => 'Vidi ili vrati $1?',
'viewdeleted'             => 'Vidi $1?',
'restorelink'             => '$1 pobrisanih izmjena',

# Short words for each namespace, by default used in the 'article' tab in monobook
'nstab-main'      => 'Članak',
'nstab-user'      => 'Stranica suradnika',
'nstab-media'     => 'Mediji',
'nstab-special'   => 'Posebno',
'nstab-project'   => 'Stranica o projektu',
'nstab-image'     => 'Slika',
'nstab-mediawiki' => 'Poruka',
'nstab-template'  => 'Predložak',
'nstab-help'      => 'Pomoć',
'nstab-category'  => 'Kategorija',

# Main script and global functions
'nosuchaction'      => 'Nema takve naredbe',
'nosuchactiontext'  => 'Navedeni URL označava
nepostojeću naredbu',
'nosuchspecialpage' => 'Posebna stranica ne postoji',
'nospecialpagetext' => 'Takva posebna stranica ne postoji.',

# General errors
'error'                => 'Greška',
'databaseerror'        => 'Greška baze podataka',
'dberrortext'          => 'Došlo je do sintaksne pogreške s upitom bazi.
Možda se radi o bugu u softveru.
Posljednji pokušaj upita je glasio:
<blockquote><tt>$1</tt></blockquote>
iz funkcije "<tt>$2</tt>".
MySQL je vratio pogrešku "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Došlo je do sintaksne pogreške s upitom bazi.
Možda se radi o bugu u softveru.
Posljednji pokušaj upita je glasio:
"$1"
iz funkcije "<tt>$2</tt>".
MySQL je vratio pogrešku "<tt>$3: $4</tt>".',
'noconnect'            => 'Oprostite! Wiki trenutno ima tehničkih problema i ne može se povezati s bazom podataka. $1',
'nodb'                 => 'Nije bilo moguće odabrati bazu podataka $1',
'cachederror'          => 'Ova je verzija stranice iz međuspremnika i možda ne sadrži sve promjene.',
'laggedslavemode'      => 'Upozorenje: na stranici se možda ne nalaze najnovije promjene.',
'readonly'             => 'Baza podataka je zaključana',
'enterlockreason'      => 'Upiši razlog zaključavanja i procjenu vremena otključavanja',
'readonlytext'         => 'Baza podataka je trenutno zaključana, nije ju moguće uređivati ili mijenjati. Ovo je obično pokazatelj tekućeg redovitog održavanja. Nakon što se potonja privremena akcija završi, baza podataka će se vratiti u uobičajeno stanje.

Administrator koji je izvršio zaključavanje naveo je ovaj razlog: $1',
'missingarticle'       => 'U bazi podataka nije pronađena stranica "$1" koja je trebala biti pronađena.

Ovo se najčešće događa zbog poveznice na zastarjelu usporedbu ili staru promjenu stranice koja je u međuvremenu izbrisana.

Ako to nije slučaj, možda se radi o softverskoj grešci. Molimo da u tom slučaju pošaljete poruku administratoru navodeći URL.',
'readonly_lag'         => 'Baza podataka je automatski zaključana dok se sekundarni bazni poslužitelji ne usklade s glavnim',
'internalerror'        => 'Greška sustava',
'filecopyerror'        => 'Ne mogu kopirati datoteku "$1" u "$2".',
'filerenameerror'      => 'Ne mogu preimenovati datoteku "$1" u "$2".',
'filedeleteerror'      => 'Ne mogu obrisati datoteku "$1".',
'filenotfound'         => 'Datoteka "$1" nije nađena.',
'unexpected'           => 'Neočekivana vrijednost: "$1"="$2".',
'formerror'            => 'Greška: Ne mogu poslati podatke',
'badarticleerror'      => 'Ovu radnju nije moguće izvesti s tom stranicom.',
'cannotdelete'         => 'Ne mogu obrisati navedenu stranicu ili sliku. (Moguće da je već obrisana.)',
'badtitle'             => 'Loš naslov',
'badtitletext'         => 'Navedeni naslov stranice nepravilan ili loše formirana interwiki poveznica.',
'perfdisabled'         => 'Privremeno onemogućeno. Koristite kopiju snimljenu $1:',
'perfcached'           => 'Sljedeći podaci su iz međuspremnika i možda nisu najsvježiji:',
'wrong_wfQuery_params' => 'Neispravni parametri poslani u wfQuery()<br />
Funkcija: $1<br />
Upit: $2',
'viewsource'           => 'Vidi izvornik',
'viewsourcefor'        => 'za $1',
'protectedpagetext'    => 'Ova stranica je zaključana da bi se onemogućile izmjene.',
'viewsourcetext'       => 'Možete pogledati i kopirati izvorni sadržaj ove stranice:',
'protectedinterface'   => 'Ova stranica je zaštićena od izmjena jer sadrži tekst MediaWiki softvera.',
'editinginterface'     => "'''Upozorenje:''' Uređujete stranicu koja se rabi za prikaz teksta u sučelju softvera. Promjene učinjene na ovoj stranici će se odraziti na izgled korisničkog sučelja kod drugih suradnika.",
'sqlhidden'            => '(SQL upit sakriven)',
'cascadeprotected'     => 'Ova je stranica zaključana za uređivanja jer je uključena u sljedeće stranice, koje su zaštićene "prenosivom zaštitom":',

# Login and logout pages
'logouttitle'                => 'Odjava suradnika',
'logouttext'                 => 'Odjavili ste se.<br />
Možete nastaviti s korištenjem projekta {{SITENAME}} anonimno,
ili se možete ponovo prijaviti pod istim ili drugim imenom. Neke se stranice mogu
prikazivati kao da ste još uvijek prijavljeni, sve dok ne očistite međuspremnik svog preglednika.',
'welcomecreation'            => '== Dobrodošli, $1! ==

Vaš je suradnički račun otvoren. Ne zaboravite podesiti korisničke postavke.',
'loginpagetitle'             => 'Prijava suradnika',
'yourname'                   => 'Suradničko ime',
'yourpassword'               => 'Upišite lozinku',
'yourpasswordagain'          => 'Ponovno upišite lozinku',
'remembermypassword'         => 'Trajno zapamti moju lozinku.',
'yourdomainname'             => 'Vaša domena',
'externaldberror'            => 'Došlo je do greške s vanjskom autorizacijom ili vam nije dozvoljeno osvježavanje vanjskog suradničkog računa.',
'loginproblem'               => '<b>Došlo je do greške s vašom prijavom.</b><br />Pokušajte iznova!',
'login'                      => 'Prijavi se',
'loginprompt'                => 'Za prijavu na sustav {{SITENAME}} morate u pregledniku uključiti kolačiće (cookies).',
'userlogin'                  => 'Prijavi se',
'logout'                     => 'Odjavi se',
'userlogout'                 => 'Odjavi se',
'notloggedin'                => 'Niste prijavljeni',
'nologin'                    => 'Nemate suradničko ime? $1.',
'nologinlink'                => 'Otvorite račun',
'createaccount'              => 'Otvori novi suradnički račun',
'gotaccount'                 => 'Već imate suradnički račun? $1.',
'gotaccountlink'             => 'Prijavite se',
'createaccountmail'          => 'poštom',
'badretype'                  => 'Unesene lozinke nisu istovjetne.',
'userexists'                 => 'Uneseno suradničko ime već je u upotrebi. Unesite neko drugo ime.',
'youremail'                  => 'Vaša elektronska pošta *',
'username'                   => 'Suradničko ime:',
'uid'                        => 'Suradnički ID-broj:',
'yourrealname'               => 'Pravo ime (nije obvezno)*',
'yourlanguage'               => 'Jezik:',
'yourvariant'                => 'Inačica',
'yournick'                   => 'Vaš nadimak (za potpisivanje)',
'badsig'                     => 'Kôd vašeg potpisa nije valjan; provjerite HTML tagove.',
'badsiglength'               => 'Suradničko ime je predugo; može imati maksimalno $1 znakova.',
'email'                      => 'Adresa elektroničke pošte *',
'prefs-help-realname'        => '* Pravo ime (nije obvezno): za pravnu atribuciju vaših doprinosa.',
'loginerror'                 => 'Greška u prijavi',
'prefs-help-email'           => '* E-mail (nije obvezno): Omogućuje drugima da vas kontaktiraju na suradničkoj stranici ili stranici za razgovor bez javnog otkrivanja vaše e-mail adrese.
Također, ako zaboravite lozinku možemo vam na ovu adresu poslati novu, privremenu.',
'nocookiesnew'               => "Suradnički račun je otvoren, ali niste uspješno prijavljeni. Naime, {{SITENAME}} koristi kolačiće (''cookies'') u procesu prijave. Isključili ste kolačiće. Molim uključite ih i pokušajte ponovo s vašim novim imenom i lozinkom.",
'nocookieslogin'             => "{{SITELOGIN}} koristi kolačiće (''cookies'') u procesu prijave. Isključili ste kolačiće. Molim uključite ih i pokušajte ponovo.",
'noname'                     => 'Niste unijeli valjano suradničko ime.',
'loginsuccesstitle'          => 'Prijava uspješna',
'loginsuccess'               => 'Prijavili ste se na wiki kao "$1".',
'nosuchuser'                 => 'Ne postoji suradnik s imenom "$1". Provjerite jeste li točno utipkali, ili otvorite novi suradnički račun koristeći donji obrazac.',
'nosuchusershort'            => 'Ne postoji suradnik s imenom "$1". Provjerite vaš unos.',
'nouserspecified'            => 'Molimo navedite suradničko ime.',
'wrongpassword'              => 'Lozinka koju ste unijeli nije ispravna. Pokušajte ponovno.',
'wrongpasswordempty'         => 'Niste unijeli lozinku. Pokušajte ponovno.',
'passwordtooshort'           => 'Vaša je lozinka prekratka. Lozinke moraju sadržavati najmanje $1 znakova.',
'mailmypassword'             => 'Pošalji mi novu lozinku',
'passwordremindertitle'      => '{{SITENAME}}: nova lozinka.',
'passwordremindertext'       => 'Netko je (vjerojatno vi, s IP adrese $1)
zatražio da vam pošaljemo novu lozinku za sustav {{SITENAME}} ($4).
Lozinka za suradnika "$2" je postavljena na "$3".
Molimo vas da se odmah prijavite i promijenite lozinku.

Ukoliko niste zatražili novu lozinku, ili ste se sjetili stare lozinke i
više ju ne želite promijeniti, slobodno zanemarite ovu poruku i nastavite
koristiti staru lozinku.',
'noemail'                    => 'Suradnik "$1" nema zapisanu e-mail adresu.',
'passwordsent'               => 'Nova je lozinka poslana na e-mail adresu suradnika "$1"',
'eauthentsent'               => 'Na navedenu adresu poslan je e-mail s potvrdom. Prije nego što pošaljemo daljnje poruke,
molimo vas da otvorite e-mail i slijedite u njemu sadržana uputstva.',
'mailerror'                  => 'Greška pri slanju e-maila: $1',
'acct_creation_throttle_hit' => 'Nažalost, ne možete otvoriti nove suradničke račune. Već ste otvorili $1.',
'emailauthenticated'         => 'Vaša e-mail adresa je ovjerena $1.',
'emailnotauthenticated'      => 'Vaša e-mail adresa još nije ovjerena.
Ne možemo poslati e-mail ni u jednoj od sljedećih naredbi.',
'noemailprefs'               => '<strong>Nije navedena e-mail adresa</strong>, stoga sljedeće naredbe neće raditi.',
'emailconfirmlink'           => 'Potvrdite svoju e-mail adresu',
'invalidemailaddress'        => 'Ne mogu prihvatiti e-mail adresu jer nije valjano oblikovana.
Molim unesite ispravno oblikovanu adresu ili ostavite polje praznim.',
'accountcreated'             => 'Suradnički račun otvoren',
'accountcreatedtext'         => 'Suradnički račun za $1 je otvoren.',
'loginlanguagelabel'         => 'Jezik: $1',

# Edit page toolbar
'bold_sample'     => 'Podebljani tekst',
'bold_tip'        => 'Podebljani tekst',
'italic_sample'   => 'Kurzivni tekst',
'italic_tip'      => 'Kurzivni tekst',
'link_sample'     => 'Tekst poveznice',
'link_tip'        => 'Unutarnja poveznica',
'extlink_sample'  => 'http://www.primjer.hr Tekst poveznice',
'extlink_tip'     => 'Vanjska poveznica (pazi, nužan je prefiks http://)',
'headline_sample' => 'Tekst naslova',
'headline_tip'    => 'Podnaslov',
'math_sample'     => 'Ovdje unesi formulu',
'math_tip'        => 'Matematička formula (LaTeX)',
'nowiki_sample'   => 'Ovdje unesite neoblikovani tekst',
'nowiki_tip'      => 'Neoblikovani tekst',
'image_sample'    => 'Primjer.jpg',
'image_tip'       => 'Uložena slika',
'media_sample'    => 'Primjer.ogg',
'media_tip'       => 'Uloženi medij',
'sig_tip'         => 'Vaš potpis s datumom',
'hr_tip'          => 'Vodoravna crta (koristiti rijetko)',

# Edit pages
'summary'                  => 'Sažetak',
'subject'                  => 'Predmet',
'minoredit'                => 'Ovo je manja promjena',
'watchthis'                => 'Prati ovaj članak',
'savearticle'              => 'Sačuvaj stranicu',
'preview'                  => 'Pregled kako će stranica izgledati',
'showpreview'              => 'Prikaži kako će izgledati',
'showlivepreview'          => 'Pregled kako će izgledati, uživo',
'showdiff'                 => 'Prikaži promjene',
'anoneditwarning'          => "'''Upozorenje:''' Niste prijavljeni pod suradničkim imenom. Vaša IP adresa bit će zabilježena u popisu izmjena ove stranice.",
'missingsummary'           => "'''Napomena:''' Niste unijeli sažetak promjena. Ako ponovno kliknete na 'Sačuvaj', vaše će promjene biti snimljene bez sažetka.",
'missingcommenttext'       => 'Molim unesite sažetak.',
'missingcommentheader'     => "'''Upozorenje:''' Niste napisali sažetak ovog predmeta. Ako ponovno kliknete \"Sačuvaj stranicu\", vaš će predmet biti snimljen bez sažetka.",
'summary-preview'          => 'Pregled sažetka',
'subject-preview'          => 'Pregled predmeta',
'blockedtitle'             => 'Suradnik je blokiran',
'blockedtext'              => 'Vaše suradničko ime ili IP adresu blokirao je administrator $1.
Razlog je:<br />\'\'$2\'\'

Ako želite raspraviti blokiranje
javite se administratoru $1 ili nekom drugom [[{{MediaWiki:grouppage-sysop}}|administratoru]].

Ne možete se koristiti naredbom "piši suradniku" ako niste
registrirali valjanu e-mail adresu u svojim [[Special:Preferences|postavkama]].

Vaša IP adresa je $3. Molimo vas da je spomenete u porukama o ovom predmetu.',
'blockedoriginalsource'    => "Izvorni tekst članka '''$1''' prikazan je ispod:",
'blockededitsource'        => "Tekst '''vaše izmjene''' na članku '''$1''' prikazan je ispod:",
'whitelistedittitle'       => 'Za uređivanje stranice morate se prijaviti',
'whitelistedittext'        => 'Za uređivanje stranice morate se $1.',
'whitelistreadtitle'       => 'Za čitanje stranice morate se prijaviti',
'whitelistreadtext'        => 'Za čitanje stranice morate se [[Special:Userlogin|prijaviti]].',
'whitelistacctitle'        => 'Ne možete otvoriti suradnički račun',
'whitelistacctext'         => 'Da biste otvarali suradničke račune na ovom wikiju morate se [[Special:Userlogin|prijaviti]] i posjedovati odgovarajuća ovlaštenja.',
'confirmedittitle'         => 'Ovjera e-mail adrese nužna za uređivanje',
'confirmedittext'          => 'Morate ovjeriti vašu e-mail adresu prije nego što vam bude omogućeno uređivanje. Molim unesite i ovjerite vašu e-mail adresu u [[Special:Preferences|suradničkim postavkama]].',
'loginreqtitle'            => 'Nužna prijava',
'loginreqlink'             => 'prijava',
'loginreqpagetext'         => 'Morate se $1 da biste vidjeli ostale stranice.',
'accmailtitle'             => 'Lozinka poslana.',
'accmailtext'              => "Lozinka za suradnika '$1' poslana je na adresu $2.",
'newarticle'               => '(Novo)',
'newarticletext'           => 'Došli ste na stranicu koja još nema sadržaja.<br />
*Ako želite unijeti sadržaj, počnite tipkati u prozor ispod ovog teksta.
*Ako vam treba pomoć, idite na [[{{MediaWiki:helppage}}|stranicu za pomoć]].
*Ako ste ovamo dospjeli slučajno, kliknite "Natrag" (Back) u svom programu.',
'anontalkpagetext'         => "----''Ovo je stranica za razgovor s anonimnim suradnikom koji nije otvorio suradnički račun ili se njime ne koristi. Zbog toga se moramo služiti brojčanom IP adresom kako bismo ga identificirali. Takvu adresu često koristi više ljudi. Ako ste anonimni suradnik i smatrate da su vam upućeni irelevantni komentari, molimo vas da [[Special:Userlogin|otvorite suradnički račun ili se prijavite]] te tako u budućnosti izbjegnete zamjenu s drugim anonimnim suradnicima.''",
'noarticletext'            => '(Trenutno na ovoj stranici nema teksta)',
'clearyourcache'           => "'''Napomena:''' Nakon snimanja trebate očistiti međuspremnik svog preglednika kako biste vidjeli promjene.
'''Mozilla / Firefox / Safari:''' držite ''Shift'' i pritisnite ''Reload'', ili pritisnite ''Ctrl-Shift-R'' (''Cmd-Shift-R'' na Apple Macu);
'''IE:''' držite ''Ctrl'' i pritisnite ''Refresh'', ili pritisnite ''Ctrl-F5''; '''Konqueror:''': samo pritisnite dugme ''Reload'' ili pritisnite ''F5''; korsnici '''Opere''' možda će morati u potpunosti isprazniti međuspremnik u ''Tools&rarr;Preferences''.",
'usercssjsyoucanpreview'   => "<strong>Savjet:</strong> Koristite dugme 'Pokaži kako će izgledati' za testiranje svog CSS/JS prije snimanja.",
'usercsspreview'           => "'''Ne zaboravite: samo isprobavate/pregledavate svoj suradnički CSS, i da još nije snimljen!'''",
'userjspreview'            => "'''Ne zaboravite: samo isprobavate/pregledavate svoj suradnički JavaScript, i da još nije snimljen!'''",
'userinvalidcssjstitle'    => "'''Upozorenje:''' Nema sučelja pod imenom \"\$1\". Ne zaboravite da imena stranica s .css and .js kodom počinju malim slovom, npr. Suradnik:Mate/monobook.css, a ne Suradnik:Mate/Monobook.css.",
'updated'                  => '(Ažurirano)',
'note'                     => '<strong>Napomena:</strong>',
'previewnote'              => 'Ne zaboravite da je ovo samo pregled kako će stranica izgledati i da
stranica još nije snimljena!',
'previewconflict'          => 'Ovaj pregled odražava stanje u gornjem polju za unos koje će biti sačuvano
ako pritisnete "Sačuvaj stranicu".',
'session_fail_preview'     => '<strong>Ispričavamo se! Nismo mogli obraditi vašu izmjenu zbog gubitka podataka o prijavi.
Molimo pokušajte ponovno. Ako i dalje ne bude radilo, pokušajte se odjaviti i ponovno prijaviti.</strong>',
'editing'                  => 'Uređujete $1',
'editinguser'              => 'Uređujete $1',
'editingsection'           => 'Uređujete $1 (odlomak)',
'editingcomment'           => 'Uređujete $1 (komentar)',
'editconflict'             => 'Istovremeno uređivanje: $1',
'explainconflict'          => 'Netko je u međuvremenu promijenio stranicu. Gornje polje sadrži sadašnji tekst stranice.
U donjem polju prikazane su vaše promjene. Morat ćete unijeti vaše promjene u sadašnji tekst. <b>Samo</b> će tekst
u u gornjem polju biti sačuvan kad pritisnete "Snimi stranicu".',
'yourtext'                 => 'Vaš tekst',
'storedversion'            => 'Pohranjena inačica',
'nonunicodebrowser'        => '<strong>UPOZORENJE: Vaš preglednik ne podržava Unicode zapis znakova, molim promijenite ga prije sljedećeg uređivanja članaka.</strong>',
'editingold'               => '<strong>UPOZORENJE: Uređujete stariju inačicu
ove stranice. Ako je sačuvate, sve će promjene učinjene nakon ove inačice biti izgubljene.</strong>',
'yourdiff'                 => 'Razlike',
'copyrightwarning'         => '<div style="display:block;vertical-align: top;width:100%; background:#FFFFFF; color:#000000; text-align:center; font-weight:bold; font-size:100%;margin-bottom:5px;margin-top:0;margin-left:-5px;margin-right:-4px;">NE POSTAVLJAJTE RADOVE ZAŠTIĆENE AUTORSKIM PRAVIMA BEZ DOZVOLE!</div> 
*<strong>Nemojte</strong> izravno kopirati sadržaje s drugih internetskih stranica ako nemate izričitu dozvolu. Ako imate dozvolu, napišite to na pripadnoj stranici za razgovor članka. Molimo uočite da se svi doprinosi {{SITENAME}} smatraju objavljenima pod uvjetima [http://en.wikisource.org/wiki/GNU_Free_Documentation_License GNU licence za slobodnu dokumentaciju]. 
*Ako ne želite da se vaše pisanje nemilosrdno uređuje i slobodno raspačava, nemojte ga ovamo slati. Također nam obećavate da ste ovo sami napisali, ili da ste to prepisali iz nečeg što je u javnom vlasništvu ili pod sličnom slobodnom licencom.',
'copyrightwarning2'        => 'Ako ne želite da se vaše pisanje nemilosrdno uređuje, nemojte ga slati ovdje.<br> Također nam obećavate da ste ovo sami napisali, ili da ste to prepisali iz nečeg što je u javnom vlasništvu ili pod sličnom slobodnom licencom. <strong>NE STAVLJAJTE ZAŠTIĆENE RADOVE BEZ DOZVOLE!</strong>',
'longpagewarning'          => 'PAŽNJA: Ova stranica je dugačka $1 kilobajta; neki preglednici bi mogli imati problema pri uređivanju stranica koje se približavaju ili su duže od 32 kb.
Molimo razmislite o rastavljanju stranice na manje odjeljke.',
'longpageerror'            => '<strong>POGRJEŠKA: Tekst koji ste unijeli dug je $1 kilobajta, što je više od maksimalnih $2 kilobajta. Nije ga moguće snimiti.</strong>',
'readonlywarning'          => '<strong>UPOZORENJE: Baza podataka je zaključana zbog održavanja, pa trenutno ne možete sačuvati svoje
promjene. Najbolje je da kopirate i zaljepite tekst u tekstualnu datoteku te je snimite za kasnije.</strong>',
'protectedpagewarning'     => '<strong>UPOZORENJE: ova stranica je zaključana i mogu je uređivati samo suradnici s administratorskim pravima. Molimo pogledajte [[Project:Protected_page_guidelines|smjernice o zaključavanju]].</strong>',
'semiprotectedpagewarning' => "'''Napomena:''' Ovu stranicu mogu uređivati samo prijavljeni suradnici.",
'templatesused'            => 'Predlošci korišteni na ovoj stranici:',
'templatesusedpreview'     => 'Predlošci koji se koriste u ovom predpregledu:',
'templatesusedsection'     => 'Predlošci koji se koriste u odjeljku:',
'template-protected'       => '(zaštićen)',
'template-semiprotected'   => '(djelomično zaštićen)',
'nocreatetitle'            => 'Otvaranje novih stranica ograničeno',
'nocreatetext'             => 'Na ovom je projektu ograničeno otvaranje novih stranica.
Možete se vratiti i uređivati već postojeće stranice ili se [[Special:Userlogin|prijaviti ili otvoriti suradnički račun]].',
'recreate-deleted-warn'    => "'''Upozorenje: Postavljate stranicu koja je prethodno brisana.''' 
 
Razmotrite je li nastavljanje uređivanja ove stranice u skladu s pravilima.
Za vašu informaciju slijedi evidencija brisanja s obrazloženjem za prethodno brisanje:",

# "Undo" feature
'undo-summary' => 'Uklanjanje izmjene $1 što ju je unio/unijela [[Posebno:Contributions/$2|$2]] ([[Razgovor sa suradnikom:$2]])',

# Account creation failure
'cantcreateaccounttitle' => 'Nije moguće stvoriti suradnički račun',
'cantcreateaccount-text' => "Otvaranje suradničkog računa ove IP adrese (<b>$1</b>) blokirao/la je [[User:$3|$3]].

Razlog koji je dao/la $3 je ''$2''",

# History pages
'revhistory'          => 'Stare izmjene',
'nohistory'           => 'Ova stranica nema starijih izmjena.',
'revnotfound'         => 'Stara izmjena nije nađena.',
'revnotfoundtext'     => 'Ne mogu pronaći staru izmjenu stranice koju ste zatražili.
Molimo provjerite URL koji vas je doveo ovamo.',
'loadhist'            => 'Učitavam stare izmjene',
'currentrev'          => 'Trenutna inačica',
'revisionasof'        => 'Inačica od $1',
'revision-info'       => 'Inačica od $1 koju je unio/unijela $2',
'previousrevision'    => '←Starija inačica',
'nextrevision'        => 'Novija inačica→',
'currentrevisionlink' => 'vidi trenutnu inačicu',
'cur'                 => 'sad',
'next'                => 'sljed',
'last'                => 'pret',
'orig'                => 'izvo',
'histlegend'          => 'Uputa: (sad) = razlika od trenutne inačice,
(pret) = razlika od prethodne inačice, m = manja promjena',
'deletedrev'          => '[izbrisano]',
'histfirst'           => 'Najstarije',
'histlast'            => 'Najnovije',
'historysize'         => '($1 bajtova)',
'historyempty'        => '(prazna stranica)',

# Revision deletion
'rev-deleted-comment'         => '(komentar uklonjen)',
'rev-deleted-user'            => '(suradničko ime uklonjeno)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Ova je izmjena uklonjena iz javnoga arhiva.
Detalji se vjerojatno nalaze u [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} evidenciji brisanja].
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
Ova je izmjena uklonjena iz javnoga arhiva.
Kao administrator na ovom projektu možete ju vidjeti;
detalji se vjerojatno nalaze u [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} evidenciji brisanja].
</div>',
'rev-delundel'                => 'pokaži/skrij',
'revisiondelete'              => 'Izbriši/vrati izmjene',
'revdelete-selected'          => 'Odabrane izmjene stranice [[:$1]]:',
'revdelete-text'              => 'Obrisane će se izmjene i dalje nalaziti u javnom popisu izmjena,
ali njihov sadržaj neće biti dostupan javnosti.

Drugi administratori ovoga projekta moći će i dalje pristupiti skrivenom sadržaju i
vratiti ga u javni pristup putem ovog sučelja, osim ako operateri na projektu nisu
postavili dodatna ograničenja.',
'revdelete-legend'            => 'Postavi ograničenja na izmjenu:',
'revdelete-hide-text'         => 'Sakrij tekst izmjene',
'revdelete-hide-comment'      => 'Sakrij komentar (sažetak)',
'revdelete-hide-user'         => 'Sakrij suradnikovo ime/IP adresu',
'revdelete-hide-restricted'   => 'Postavi ograničenja i za administratore kao i za ostale suradnike',
'revdelete-log'               => 'Komentar za evidenciju:',
'revdelete-submit'            => 'Izvrši brisanje/sakrivanje',
'revdelete-logentry'          => 'promijenjena su prava pristupa za stranicu [[$1]]',

# Diffs
'history-title'             => 'Povijest izmjena stranice "$1"',
'difference'                => '(Usporedba među inačicama)',
'loadingrev'                => 'učitavam inačicu za usporedbu',
'lineno'                    => 'Redak $1:',
'editcurrent'               => 'Uredi trenutnu inačicu ove stranice',
'selectnewerversionfordiff' => 'Izaberi noviju inačicu za usporedbu',
'selectolderversionfordiff' => 'Izaberi stariju inačicu za usporedbu',
'compareselectedversions'   => 'Usporedi odabrane inačice',
'editundo'                  => 'ukloni ovu izmjenu',
'diff-multi'                => '({{plural:$1|Nije prikazana jedna međuinačica|Nisu prikazane $1 međuinačice|Nije prikazano $1 međuinačica}})',

# Search results
'searchresults'         => 'Rezultati pretrage',
'searchresulttext'      => 'Za više obavijesti o pretraživanju projekta {{SITENAME}} vidi [[{{MediaWiki:helppage}}|{{int:help}}]].',
'searchsubtitle'        => "Za upit '''[[:$1]]'''",
'searchsubtitleinvalid' => 'Za upit "$1"',
'noexactmatch'          => "'''Ne postoji stranica naziva \"\$1\".''' Možete [[:\$1|kreirati tu stranicu]].",
'titlematches'          => 'Pronađene stranice prema naslovu',
'notitlematches'        => 'Nema pronađenih stranica prema naslovu',
'textmatches'           => 'Pronađene stranice prema tekstu članka',
'notextmatches'         => 'Nema pronađenih stranica prema tekstu članka',
'prevn'                 => 'prethodnih $1',
'nextn'                 => 'sljedećih $1',
'viewprevnext'          => 'Vidi ($1) ($2) ($3).',
'showingresults'        => 'Ispod je prikazano <b>$1</b> rezultata, počevši od <b>$2.</b>.',
'showingresultsnum'     => 'Ispod je prikazano <b>$3</b> počevši s brojem #<b>$2</b>.',
'nonefound'             => '<b>Napomena</b>: pretrage su neuspješne ako tražite česte riječi koje ne indeksiramo, ili u upitu navedete previše pojmova (u rezultatu se pojavlju samo stranice koje sadrže sve tražene pojmove).',
'powersearch'           => 'Traženje',
'powersearchtext'       => '
Traženje u prostoru :<br />
$1<br />
$2 Popis se preusmjerava   Traženje za $3 $9',
'searchdisabled'        => '<p>Oprostite! Pretraga po cjelokupnoj bazi je zbog bržeg rada projekta {{SITENAME}} trenutno onomogućena. Možete se poslužiti tražilicom Google.</p>',

# Preferences page
'preferences'              => 'Postavke',
'mypreferences'            => 'Moje postavke',
'prefs-edits'              => 'Broj vaših uređivanja:',
'prefsnologin'             => 'Niste prijavljeni',
'prefsnologintext'         => 'Morate biti [[Special:Userlogin|prijavljeni]]
za podešavanje korisničkih postavki.',
'prefsreset'               => 'Postavke su vraćene na prvotne vrijednosti.',
'qbsettings'               => 'Traka',
'qbsettings-none'          => 'Bez',
'qbsettings-fixedleft'     => 'Lijevo nepomično',
'qbsettings-fixedright'    => 'Desno nepomično',
'qbsettings-floatingleft'  => 'Lijevo leteće',
'qbsettings-floatingright' => 'Desno leteće',
'changepassword'           => 'Promjena lozinke',
'skin'                     => 'Izgled',
'math'                     => 'Prikaz matematičkih formula',
'dateformat'               => 'Format datuma',
'datedefault'              => 'Nemoj postaviti',
'datetime'                 => 'Datum i vrijeme',
'math_failure'             => 'Obrada nije uspjela.',
'math_unknown_error'       => 'nepoznata greška',
'math_unknown_function'    => 'nepoznata funkcija',
'math_lexing_error'        => 'rječnička greška (lexing error)',
'math_syntax_error'        => 'sintaksna greška',
'math_image_error'         => 'Konverzija u PNG nije uspjela; provjerite jesu li dobro instalirani latex, dvips, gs, i convert',
'math_bad_tmpdir'          => 'Ne mogu otvoriti ili pisati u privremeni direktorij za matematiku',
'math_bad_output'          => 'Ne mogu otvoriti ili pisati u odredišni direktorij za matematiku',
'math_notexvc'             => 'Nedostaje izvršna datoteka texvc-a; pogledajte math/README za postavke.',
'prefs-personal'           => 'Podaci o suradniku',
'prefs-rc'                 => 'Nedavne promjene i kratki članci',
'prefs-watchlist'          => 'Praćene stranice',
'prefs-watchlist-days'     => 'Broj dana koji će se prikazati na popisu praćenja:',
'prefs-watchlist-edits'    => 'Broj uređivanja koji će se prikazati na proširenom popisu praćenja:',
'prefs-misc'               => 'Razno',
'saveprefs'                => 'Snimi postavke',
'resetprefs'               => 'Vrati na prvotne postavke',
'oldpassword'              => 'Stara lozinka',
'newpassword'              => 'Nova lozinka',
'retypenew'                => 'Ponovno unesite lozinku',
'textboxsize'              => 'Širina okvira za uređivanje',
'rows'                     => 'Redova',
'columns'                  => 'Stupaca',
'searchresultshead'        => 'Prikaz rezultata pretrage',
'resultsperpage'           => 'Koliko pogodaka na jednoj stranici',
'contextlines'             => 'Koliko redova teksta po pogotku',
'contextchars'             => 'Koliko znakova po retku',
'stub-threshold'           => 'Prag za formatiranje poput <a href="#" class="stub">poveznice mrve</a>:',
'recentchangesdays'        => 'Broj dana prikazanih u nedavnim promjenama:',
'recentchangescount'       => 'Broj naslova u nedavnim izmjenama',
'savedprefs'               => 'Vaše postavke su sačuvane.',
'timezonelegend'           => 'Vremenska zona',
'timezonetext'             => 'Unesite razliku između vašeg lokalnog vremena i vremena na poslužitelju (UTC).',
'localtime'                => 'Lokalno vrijeme',
'timezoneoffset'           => 'Razlika',
'servertime'               => 'Vrijeme na poslužitelju',
'guesstimezone'            => 'Vrijeme dobiveno od preglednika',
'allowemail'               => 'Omogući primanje e-maila od drugih suradnika',
'defaultns'                => 'Ako ne navedem drugačije, traži u ovim prostorima:',
'default'                  => 'prvotno',
'files'                    => 'Datoteke',

# User rights
'userrights-lookup-user'     => 'Upravljaj skupinama suradnika',
'userrights-user-editname'   => 'Unesite suradničko ime:',
'editusergroup'              => 'Uredi suradničke skupine',
'userrights-editusergroup'   => 'Uredi skupine suradnika',
'saveusergroups'             => 'Snimi skupine suradnika',
'userrights-groupsmember'    => 'Član:',
'userrights-groupsavailable' => 'Dostupne skupine:',
'userrights-groupshelp'      => 'Izaberite skupine u koje želite dodati ili iz njih ukloniti suradnika.
Neoznačene skupine neće se promijeniti. Skupinu možete deselektirati istovremenim pritiskom CTRL + lijeva tipka miša',
'userrights-reason'          => 'Razlog za promjenu:',

# Groups
'group'            => 'Grupa:',
'group-bot'        => 'Botovi',
'group-sysop'      => 'Administratori',
'group-bureaucrat' => 'Birokrati',
'group-all'        => '(svi)',

'group-sysop-member'      => 'Administrator',
'group-bureaucrat-member' => 'Birokrat',

'grouppage-sysop'      => 'Project:Administrators',
'grouppage-bureaucrat' => '{{ns:project}}:Birokrati',

# User rights log
'rightslog'      => 'Evidencija suradničkih prava',
'rightslogtext'  => 'Ovo je evidencija promjena suradničkih prava.',
'rightslogentry' => 'promijenjena suradnička prava za $1 iz $2 u $3',

# Recent changes
'nchanges'                          => '$1 promjena',
'recentchanges'                     => 'Nedavne promjene',
'recentchangestext'                 => 'Na ovoj stranici možete pratiti nedavne promjene u wikiju.',
'rcnote'                            => 'Slijedi zadnjih <strong>$1</strong> promjena u zadnjih <strong>$2</strong> dana, od $3.',
'rcnotefrom'                        => 'Slijede promjene od <b>$2</b> (prikazano ih je do <b>$1</b>).',
'rclistfrom'                        => 'Prikaži nove promjene počevši od $1',
'rcshowhideminor'                   => '$1 manje promjene',
'rcshowhidebots'                    => '$1 botove',
'rcshowhideliu'                     => '$1 prijavljene suradnike',
'rcshowhideanons'                   => '$1 anonimne suradnike',
'rcshowhidepatr'                    => '$1 provjerene promjene',
'rcshowhidemine'                    => '$1 moje promjene',
'rclinks'                           => 'Prikaži zadnjih $1 promjena u zadnjih $2 dana; $3',
'diff'                              => 'razl',
'hist'                              => 'pov',
'hide'                              => 'sakrij',
'show'                              => 'prikaži',
'number_of_watching_users_pageview' => '[$1 suradnika prati ovu stranicu]',
'rc_categories'                     => 'Ograniči na kategorije (odvojene znakom  "|")',
'rc_categories_any'                 => 'Sve',
'newsectionsummary'                 => '/* $1 */ Novi odlomak',

# Recent changes linked
'recentchangeslinked'         => 'Povezane stranice',
'recentchangeslinked-title'   => 'Povezane promjene sa $1',
'recentchangeslinked-summary' => "Ova posebna stranica prikazuje promjene na povezanim stranicama. Stranice koje su na vašem popisu praćenja su '''podebljane'''.",

# Upload
'upload'                      => 'Postavi datoteku',
'uploadbtn'                   => 'Postavi datoteku',
'reupload'                    => 'Ponovno postavi',
'reuploaddesc'                => 'Vratite se u obrazac za postavljanje.',
'uploadnologin'               => 'Niste prijavljeni',
'uploadnologintext'           => 'Za postavljanje datoteka morate biti  [[Special:Userlogin|prijavljeni]].',
'upload_directory_read_only'  => 'Server ne može pisati u direktorij za postavljanje ($1).',
'uploaderror'                 => 'Greška kod postavljanja',
'uploadtext'                  => "'''STANITE!''' Prije nego što postavite sliku pročitajte i slijedite upute
o [[Project:Slike|upotrebi slika]].

Ovaj obrazac služi za postavljanje novih slika. Za pregledavanje i pretraživanje već postavljenih slika
vidi [[Special:Imagelist|popis postavljenih datoteka]]. Postavljanja i brisanja bilježe se i u [[Special:Log|evidenciji]].

Stavljanjem oznake u odgovarajući kvadratić morate potvrditi da postavljanjem slike ne kršite ničija autorska prava.
Na kraju pritisnite dugme \"Postavi datoteku\".

Da biste na stranicu stavili sliku, koristite poveznice tipa
'''<nowiki>[[</nowiki>{{ns:6}}<nowiki>:datoteka.jpg]]</nowiki>''',
'''<nowiki>[[</nowiki>{{ns:6}}<nowiki>:datoteka.png|popratni tekst]]</nowiki>''' ili
'''<nowiki>[[</nowiki>{{ns:-2}}<nowiki>:datoteka.ogg]]</nowiki>''' za izravnu poveznicu na datoteku.",
'uploadlog'                   => 'evidencija postavljanja',
'uploadlogpage'               => 'Evidencija_postavljanja',
'uploadlogpagetext'           => 'Dolje je popis nedavno postavljenih slika.',
'filename'                    => 'Ime datoteke',
'filedesc'                    => 'Opis',
'fileuploadsummary'           => 'Opis:',
'filestatus'                  => 'Status autorskih prava',
'filesource'                  => 'Izvor',
'uploadedfiles'               => 'Postavljene datoteke',
'ignorewarning'               => 'Zanemari upozorenja i snimi datoteku.',
'ignorewarnings'              => 'Zanemari sva upozorenja',
'illegalfilename'             => 'Ime datoteke "$1" sadrži znakove koji nisu dozvoljeni u imenima stranica. Preimenujte datoteku i ponovno je postavite.',
'badfilename'                 => 'Ime slike automatski je promijenjeno u "$1".',
'large-file'                  => 'Preporučljivo je da datoteke ne prelaze $1; Ova datoteka je $2.',
'largefileserver'             => 'Veličina ove datoteke veća je od one dopuštene postavkama poslužitelja.',
'emptyfile'                   => 'Datoteka koju ste postavili je prazna. Možda se radi o krivo utipkanom imenu datoteke. Provjerite želite li zaista postaviti ovu datoteku.',
'fileexists'                  => 'Datoteka s ovim imenom već postoji, pogledajte $1 ako niste sigurni želite li je uistinu promijeniti.',
'fileexists-thumb'            => "'''<center>Postojeća slika</center>'''",
'file-thumbnail-no'           => 'Ime datoteke počinje s <strong><tt>$1</tt></strong>. Čini se da je to slika smanjene veličine <i>(thumbnail)</i>.
Ukoliko imate ovu sliku u punoj razlučljivosti (rezoluciji) postavite tu sliku, u protivnom, molimo promijenite ime datoteke.',
'fileexists-forbidden'        => 'Datoteka s ovim imenom već postoji; molim postavite ju pod drugim imenom. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Datoteka s ovim imenom već postoji u središnjem spremniku datoteka; molim postavite ju pod drugim imenom. [[Image:$1|thumb|center|$1]]',
'successfulupload'            => 'Postavljanje uspješno.',
'uploadwarning'               => 'Upozorenje kod postavljanja',
'savefile'                    => 'Sačuvaj datoteku',
'uploadedimage'               => 'postavljeno "$1"',
'overwroteimage'              => 'postavljena nova inačica od "[[$1]]"',
'uploaddisabled'              => 'Postavljanje je onemogućeno',
'uploaddisabledtext'          => 'Postavljanje datoteka na ovom je wikiju onemogućeno.',
'uploadscripted'              => 'Ova datoteka sadrži HTML ili skriptu, što može dovesti do grešaka u web pregledniku.',
'uploadcorrupt'               => 'Ova je datoteka oštećena ili ima nepravilan nastavak. Provjerite i pokušajte ponovo.',
'uploadvirus'                 => 'Datoteka sadrži virus! Podrobnije: $1',
'sourcefilename'              => 'Ime datoteke na vašem računalu',
'destfilename'                => 'Ime datoteke na wikiju',
'watchthisupload'             => 'Prati ovu stranicu',
'filewasdeleted'              => 'Datoteka istog imena već je bila postavljena, a kasnije i obrisana. Trebali bi provjeriti $1 prije nego što ponovno postavite datoteku.',

'license'   => 'Dozvola',
'nolicense' => 'Molim odaberite:',

# Image list
'imagelist'                 => 'Popis slika',
'imagelisttext'             => 'Ispod je popis $1 slika složen $2.',
'getimagelist'              => 'dobavljam popis slika',
'ilsubmit'                  => 'Traži',
'showlast'                  => 'Prikaži $1 slika složenih $2.',
'byname'                    => 'po imenu',
'bydate'                    => 'po datumu',
'bysize'                    => 'po veličini',
'imgdelete'                 => 'bris',
'imgdesc'                   => 'opis',
'filehist'                  => 'Povijest datoteke',
'filehist-help'             => 'Kliknite na datum/vrijeme kako biste vidjeli datoteku kakva je tada bila.',
'filehist-deleteall'        => 'izbriši sve',
'filehist-deleteone'        => 'izbriši ovu',
'filehist-revert'           => 'vrati',
'filehist-current'          => 'sadašnja',
'filehist-datetime'         => 'Datum/Vrijeme',
'filehist-user'             => 'Suradnik',
'filehist-dimensions'       => 'Dimenzije',
'filehist-filesize'         => 'Veličina datoteke',
'filehist-comment'          => 'Komentar',
'imagelinks'                => 'Poveznice slike',
'linkstoimage'              => 'Sljedeće stranice povezuju na ovu sliku:',
'nolinkstoimage'            => 'Nijedna stranica ne povezuje na ovu sliku.',
'sharedupload'              => 'Ova je datoteka postavljena na zajedničkom poslužitelju i mogu je koristiti i ostali wikiji',
'shareduploadwiki'          => 'Za podrobnije informacije vidi $1.',
'shareduploadwiki-linktext' => 'stranica s opisom datoteke',
'noimage'                   => 'Ne postoji datoteka s ovim imenom. Možete ju $1.',
'noimage-linktext'          => 'postaviti',
'uploadnewversion-linktext' => 'Postavi novu inačicu datoteke',
'imagelist_date'            => 'Datum',
'imagelist_name'            => 'Naziv slike',
'imagelist_user'            => 'Suradnik',
'imagelist_size'            => 'Veličina (u bajtovima)',
'imagelist_description'     => 'Opis',
'imagelist_search_for'      => 'Traži ime slike:',

# File deletion
'filedelete'           => 'Izbriši $1',
'filedelete-legend'    => 'Izbriši datoteku',
'filedelete-intro'     => "Brišete datoteku '''[[Media:$1|$1]]'''.",
'filedelete-intro-old' => '<span class="plainlinks">Brišete inačicu \'\'\'[[Media:$1|$1]]\'\'\' od [$4 $3, $2].</span>',
'filedelete-comment'   => 'Komentar:',
'filedelete-submit'    => 'Izbriši',
'filedelete-success'   => "Datoteka '''$1''' je izbrisana.",

# MIME search
'mimesearch' => 'MIME tražilica',
'mimetype'   => 'MIME tip datoteke:',
'download'   => 'skidanje',

# Unwatched pages
'unwatchedpages' => 'Nenadgledane stranice',

# List redirects
'listredirects' => 'Popis preusmjeravanja',

# Unused templates
'unusedtemplates'     => 'Nekorišteni predlošci',
'unusedtemplatestext' => 'Slijedi popis svih stranica imenskog prostora "Predlošci", koje nisu umetnute na drugim stranicama. Pripazite da prije brisanja provjerite druge poveznice koje vode na te predloške.',
'unusedtemplateswlh'  => 'druge poveznice',

# Random redirect
'randomredirect' => 'Slučajno preusmjeravanje',

# Statistics
'statistics'             => 'Statistika',
'sitestats'              => 'Statistika ovog wikija',
'userstats'              => 'Statistika suradnika',
'sitestatstext'          => "U bazi podataka ukupno je '''$1''' članaka.
Ovaj broj uključuje stranice za raspravu, stranice o projektu u prostoru {{SITENAME}}, kratke članke,
preusmjerene stranice, i sve ostale članke koje najvjerojatnije ne možemo računati kao sadržaj.

Trenutno je '''$2''' članaka koji predstavljaju valjan sadržaj (nalaze se u glavnom prostoru i sadrže
barem jednu unutarnju poveznicu).

Snimljeno je '''$8''' datoteka.

Ukupno je '''$3''' pregleda stranica, i '''$4''' uređivanja članaka od pokretanja projekta {{SITENAME}}.
U prosjeku to iznosi '''$5''' uređivanja po stranici, i '''$6''' pregleda po uređivanju.

Duljina [http://meta.wikimedia.org/wiki/Help:Job_queue zadataka za izvršavanje] je '''$7'''.",
'userstatstext'          => "Broj registriranih suradnika je '''$1'''. Od toga je '''$2''' (ili '''$4%''') administratora (vidi $3).",
'statistics-mostpopular' => 'Najposjećenije stranice',

'disambiguations' => 'Razdvojbene stranice',

'doubleredirects'     => 'Dvostruko preusmjeravanje',
'doubleredirectstext' => '<b>Pozor:</b>ovaj popis može sadržavati nepravilne članove. To obično znači
da postoji dodatan tekst u poveznici prve naredbe \#REDIRECT.<br />
Svaki red sadrži poveznice na prvo i drugo preusmjeravanje, te te prvu liniju teksta drugog preusmjeravanja
koja obično ukazuje na "pravu" odredišnu stranicu, na koju bi trebalo pokazivati prvo preusmjeravanje.',

'brokenredirects'      => 'Kriva preusmjeravanja',
'brokenredirectstext'  => 'Sljedeća preusmjeravanja pokazuju na nepostojeće članke.',
'brokenredirects-edit' => '(uredi)',

'withoutinterwiki'        => 'Stranice bez međuwiki poveznica',
'withoutinterwiki-header' => 'Sljedeće stranice nemaju poveznice na projekte na drugim jezicima:',

'fewestrevisions' => 'Članci s najmanje izmjena',

# Miscellaneous special pages
'nbytes'                  => '$1 bajtova',
'ncategories'             => '$1 kategorija',
'nlinks'                  => '$1 poveznica',
'nrevisions'              => '$1 inačica',
'nviews'                  => '$1 puta pogledano',
'specialpage-empty'       => 'Nema rezultata za traženi izvještaj.',
'lonelypages'             => 'Stranice siročad',
'uncategorizedpages'      => 'Nekategorizirane stranice',
'uncategorizedcategories' => 'Nekategorizirane kategorije',
'uncategorizedimages'     => 'Nekategorizirane slike',
'uncategorizedtemplates'  => 'Nekategorizirani predlošci',
'unusedcategories'        => 'Nekorištene kategorije',
'unusedimages'            => 'Nekorištene slike',
'popularpages'            => 'Popularne stranice',
'wantedcategories'        => 'Tražene kategorije',
'wantedpages'             => 'Tražene stranice',
'mostlinked'              => 'Stranice na koje vodi najviše poveznica',
'mostlinkedcategories'    => 'Kategorije na koje vodi najviše poveznica',
'mostlinkedtemplates'     => 'Predlošci na koje vodi najviše poveznica',
'mostcategories'          => 'Popis članaka po broju kategorija',
'mostimages'              => 'Slike na koje vodi najviše poveznica',
'mostrevisions'           => 'Popis članaka po broju uređivanja',
'allpages'                => 'Sve stranice',
'prefixindex'             => 'Indeks prema početku naslova',
'randompage'              => 'Slučajna stranica',
'shortpages'              => 'Kratke stranice',
'longpages'               => 'Duge stranice',
'deadendpages'            => 'Slijepe ulice',
'deadendpagestext'        => 'Slijedeće stranice nemaju poveznice na druge stranice na {{SITENAME}}.',
'protectedpages'          => 'Zaštićene stranice',
'protectedpagestext'      => 'Slijedeće stranice su zaštićene od premještanja ili uređivanja',
'listusers'               => 'Popis suradnika',
'specialpages'            => 'Posebne stranice',
'spheading'               => 'Posebne stranice za sve suradnike',
'restrictedpheading'      => 'Posebne stranice s ograničenim pristupom',
'rclsub'                  => '(na stranice povezane iz "$1")',
'newpages'                => 'Nove stranice',
'newpages-username'       => 'Suradničko ime:',
'ancientpages'            => 'Najstarije stranice',
'intl'                    => 'Interwiki poveznice',
'move'                    => 'Premjesti',
'movethispage'            => 'Premjesti ovu stranicu',
'unusedimagestext'        => '<p>Moguće je da su druge mrežne stranice izvan ovog
wikija povezane na sliku neposrednim URLom, a nisu ovdje navedene unatoč aktivnoj uporabi.</p>',
'unusedcategoriestext'    => 'Na navedenim stranicama kategorija nema ni jednog članka ili potkategorije.',

# Book sources
'booksources'               => 'Pretraživanje po ISBN-u',
'booksources-search-legend' => 'Traženje izvora za knjigu',
'booksources-go'            => 'Idi',
'booksources-text'          => 'Ovdje je popis vanjskih poveznica na internetskim stranicama koje prodaju nove i rabljene knjige, ali mogu sadržavati i ostale podatke o knjigama koje tražite:',

'categoriespagetext' => 'Na ovom wikiju postoje sljedeće kategorije.',
'data'               => 'Podaci',
'userrights'         => 'Upravljanje suradničkim pravima',
'groups'             => 'Suradničke skupine',
'alphaindexline'     => '$1 do $2',
'version'            => 'Verzija softvera',

# Special:Log
'specialloguserlabel'  => 'Suradnik:',
'speciallogtitlelabel' => 'Naslov:',
'log'                  => 'Evidencije',
'all-logs-page'        => 'Sve evidencije',
'alllogstext'          => 'Skupni prikaz evidencija postavljenih datoteka, brisanja, zaštite, blokiranja, i administratorskih prava.
Možete suziti prikaz odabirući tip evidencije, suradničko ime ili stranicu u pitanju.',
'logempty'             => 'Nema pronađenih stavki.',

# Special:Allpages
'nextpage'          => 'Sljedeća stranica ($1)',
'allpagesfrom'      => 'Pokaži stranice počevši od:',
'allarticles'       => 'Svi članci',
'allinnamespace'    => 'Svi članci (prostor $1)',
'allnotinnamespace' => 'Sve stranice koje nisu u prostoru $1',
'allpagesprev'      => 'Prijašnje',
'allpagesnext'      => 'Sljedeće',
'allpagessubmit'    => 'Kreni',
'allpagesprefix'    => 'Stranice čiji naslov počinje s:',

# Special:Listusers
'listusersfrom'      => 'Prikaži suradnike počevši od:',
'listusers-noresult' => 'Nema takvih suradnika.',

# E-mail user
'mailnologin'     => 'Nema adrese pošiljaoca',
'mailnologintext' => 'Morate biti [[Special:Userlogin|prijavljeni]]
i imati valjanu adresu e-pošte u svojim [[Special:Preferences|postavkama]]
da bi mogli slati poštu drugim suradnicima.',
'emailuser'       => 'Pošalji e-poštu ovom suradniku',
'emailpage'       => 'Pošalji e-poštu suradniku',
'emailpagetext'   => 'Ako je suradnik unio valjanu e-mail adresu u svojim postavkama,
bit će mu poslana poruka s tekstom iz donjeg obrasca.
E-mail adresa iz vaših postavki nalazit će se u "From" polju poruke i primatelj će vam moći odgovoriti.',
'usermailererror' => 'Sustav pošte se vratio s greškom:',
'noemailtitle'    => 'Nema adrese primaoca',
'noemailtext'     => 'Ovaj suradnik nije unio valjanu e-mail adresu ili se odlučio na neće primati poštu od drugih suradnika.',
'emailfrom'       => 'Od',
'emailto'         => 'Za',
'emailsubject'    => 'Tema',
'emailmessage'    => 'Poruka',
'emailsend'       => 'Pošalji',
'emailccme'       => 'Pošalji mi e-mailom kopiju moje poruke.',
'emailsent'       => 'E-mail poslan',
'emailsenttext'   => 'Vaša poruka je poslana.',

# Watchlist
'watchlist'            => 'Moj popis praćenja',
'mywatchlist'          => 'Moj popis praćenja',
'watchlistfor'         => "(suradnika '''$1''')",
'nowatchlist'          => 'Na vašem popisu praćenja nema nijednog članka.',
'watchnologin'         => 'Niste prijavljeni',
'watchnologintext'     => 'Morate biti [[Special:Userlogin|prijavljeni]]
za promjene u popisu praćenja.',
'addedwatch'           => 'Dodano u popis praćenja',
'addedwatchtext'       => 'Stranica "$1" je dodana na vaš [[Special:Watchlist|popis praćenja]].
Promjene na ovoj stranici i njenoj stranici za razgovor bit će tamo prikazani, a stranica će biti ispisana
<b>podebljano</b> u [[Special:Recentchanges|popisu nedavnih promjena]], da biste je lakše primijetili.
<p>Ako poželite ukloniti stranicu s popisa praćenja, pritisnite "Prekini praćenje" u traci s naredbama.</p>',
'removedwatch'         => 'Odstranjena s popisa praćenja',
'removedwatchtext'     => 'Stranica "$1" je odstranjena s vašeg popisa praćenja.',
'watch'                => 'Prati',
'watchthispage'        => 'Prati ovu stranicu',
'unwatch'              => 'Prekini praćenje',
'unwatchthispage'      => 'Prekini praćenje',
'notanarticle'         => 'Nije članak',
'watchnochange'        => 'Niti jedna od praćenih stranica nije promijenjena od vašeg zadnjeg posjeta.',
'watchlist-details'    => 'broj stranica koje se prate (ne brojeći stranice za razgovor): $1.',
'wlheader-enotif'      => '* Uključeno je izvješćivanje e-mailom.',
'wlheader-showupdated' => "* Stranice koje su promijenjene od vašeg zadnjeg posjeta prikazane su '''podebljano'''",
'watchmethod-recent'   => 'provjera nedavnih promjena praćenih stranica',
'watchmethod-list'     => 'provjera praćanih stranica za nedavne promjene',
'watchlistcontains'    => 'Broj stranica na vašem popisu praćenja je $1.',
'iteminvalidname'      => "Problem s izborom '$1', ime nije valjano...",
'wlnote'               => 'Ovdje je posljednjih $1 promjena u posljednjih <b>$2</b> sati.',
'wlshowlast'           => 'Pokaži zadnjih $1 sati $2 dana $3',
'watchlist-show-bots'  => 'prikaži botovske promjene',
'watchlist-hide-bots'  => 'sakrij botovske promjene',
'watchlist-show-own'   => 'prikaži moje promjene',
'watchlist-hide-own'   => 'sakrij moje promjene',
'watchlist-show-minor' => 'prikaži manje promjene',
'watchlist-hide-minor' => 'sakrij manje promjene',

# Displayed when you click the "watch" button and it's in the process of watching
'watching' => 'Pratim...',

'enotif_mailer'      => '{{SITENAME}} - izvješća o promjenama',
'enotif_reset'       => 'Označi sve stranice kao već posjećene',
'enotif_newpagetext' => 'Ovo je nova stranica.',
'changed'            => 'promijenio',
'created'            => 'stvorio',
'enotif_subject'     => '{{SITENAME}}: Stranicu $PAGETITLE je $CHANGEDORCREATED suradnik $PAGEEDITOR',
'enotif_lastvisited' => 'Pogledaj $1 za promjene od zadnjeg posjeta.',
'enotif_body'        => '$WATCHINGUSERNAME,

stranicu na projektu {{SITENAME}} s naslovom $PAGETITLE je dana $PAGEEDITDATE $CHANGEDORCREATED suradnik $PAGEEDITOR,
pogledajte $PAGETITLE_URL za trenutnu inačicu.

$NEWPAGE

Sažetak urednika: $PAGESUMMARY $PAGEMINOREDIT

Možete se javiti uredniku:
mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Do vašeg ponovnog posjeta stranici nećete dobivati daljnja izviješća.
Postavke za izvješćivanje možete resetirati na svom popisu praćenja.

            Vaš sustav izvješćivanja - hrvatska {{SITENAME}}.

--
Za promjene svog popisa praćenja posjetite
{{fullurl:Special:Watchlist|edit=yes}}

Za pomoć posjetite:
{{fullurl:{{MediaWiki:helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Izbriši stranicu',
'confirm'                     => 'Potvrdi',
'excontent'                   => "sadržaj je bio: '$1'",
'excontentauthor'             => "sadržaj je bio: '$1' (a jedini urednik '$2')",
'exbeforeblank'               => "sadržaj prije brisanja je bio: '$1'",
'exblank'                     => 'stranica je bila prazna',
'confirmdelete'               => 'Potvrdi brisanje',
'deletesub'                   => '(Brišem "$1")',
'historywarning'              => 'UPOZORENJE: Stranica koju želite obrisati ima prijašnje inačice:',
'confirmdeletetext'           => 'Zauvijek ćete izbrisati stranicu ili sliku zajedno s prijašnjim inačicama.
Molim potvrdite svoju namjeru, da razumijete posljedice i da ovo radite u skladu s [[{{MediaWiki:policy-url}}|pravilima]].',
'actioncomplete'              => 'Zahvat završen',
'deletedtext'                 => '"$1" je izbrisana.
Vidi $2 za evidenciju nedavnih brisanja.',
'deletedarticle'              => 'izbrisano "$1"',
'dellogpage'                  => 'Evidencija_brisanja',
'dellogpagetext'              => 'Dolje je popis nedavnih brisanja.
Sva vremena su prema poslužiteljevom vremenu (UTC).',
'deletionlog'                 => 'evidencija brisanja',
'reverted'                    => 'Vraćeno na prijašnju inačicu',
'deletecomment'               => 'Razlog za brisanje',
'rollback'                    => 'Ukloni posljednju promjenu',
'rollback_short'              => 'Ukloni',
'rollbacklink'                => 'ukloni',
'rollbackfailed'              => 'Uklanjanje neuspješno',
'cantrollback'                => 'Ne mogu ukloniti posljednju promjenu, postoji samo jedna promjena.',
'alreadyrolled'               => 'Ne mogu ukloniti posljednju promjenu članka [[:$1]] koju je napravio suradnik [[User:$2|$2]]
([[User talk:$2|Talk]]); netko je već promijenio stranicu ili uklonio promjenu.

Posljednju promjenu napravio je suradnik [[User:$3|$3]] ([[User talk:$3|Talk]]).',
'editcomment'                 => 'Komentar promjene je: "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'                  => 'Uklonjena promjena suradnika $2, vraćeno na zadnju inačicu suradnika $1',
'rollback-success'            => 'Uklonjeno uređivanje suradnika $1; vraćeno na zadnju inačicu suradnika $2.',
'sessionfailure'              => 'Uočili smo problem s vašom prijavom. Zadnja naredba nije izvršena
kako bi izbjegla zloupotreba. Molimo vas da u pregledniku pritisnete "Natrag" (Back) i ponovno učitate stranicu
s koje ste stigli.',
'protectlogpage'              => 'Evidencija zaštićivanja',
'protectlogtext'              => 'Ispod je popis zaštićivanja i uklanjanja zaštite pojedinih stranica.
Pogledajte članak [[Project:Protected page|Zaštićena stranica]] za više obavijesti na ovu temu.',
'protectedarticle'            => 'članak "[[$1]]" je zaštićen',
'modifiedarticleprotection'   => 'promijenjen stupanj zaštite za "[[$1]]"',
'unprotectedarticle'          => 'uklonjena zaštita članka "[[$1]]"',
'protectsub'                  => '(Zaštićujem "$1")',
'confirmprotect'              => 'Potvrda zaštite',
'protectcomment'              => 'Razlog za zaštitu',
'protectexpiry'               => 'Trajanje zaštite:',
'unprotectsub'                => '(Uklanjam zaštitu stranice "$1")',
'protect-unchain'             => 'Otključaj ovlaštenja za premještanje',
'protect-text'                => 'Ovdje možete pregledati i promijeniti razinu zaštite za stranicu <strong>$1</strong>.
Molim pripazite da ovo radite u skladu s [[{{MediaWiki:policy-url}}|pravilima]].',
'protect-default'             => '(bez zaštite)',
'protect-level-autoconfirmed' => 'Blokiraj neregistrirane suradnike',
'protect-level-sysop'         => 'Samo administratori',
'protect-expiring'            => 'istječe $1 (UTC)',
'protect-cascade'             => 'Prenosiva zaštita - zaštiti sve stranice koje su uključene u ovu.',

# Restrictions (nouns)
'restriction-edit' => 'Uređivanje',
'restriction-move' => 'Premještanje',

# Undelete
'undelete'               => 'Vrati izbrisanu stranicu',
'undeletepage'           => 'Vidi i/ili vrati izbrisane stranice',
'viewdeletedpage'        => 'Pogledaj izbrisanu stranicu',
'undeletepagetext'       => 'Sljedeće su stranice izbrisane, ali se još uvijek nalaze u bazi i mogu se obnoviti. Baza se povremeno čisti od ovakvih stranica.',
'undeleteextrahelp'      => "Da biste vratili cijelu stranicu, ostavite sve ''kućice'' neoznačene i kliknite '''Vrati!'''. Ako želite vratiti određenu reviziju, označite je i kliknite '''Vrati!'''. Klik na gumb '''Reset''' će odznačiti sve ''kućice'' i obrisati polje za komentar.",
'undeleterevisions'      => '$1 inačica je arhivirano',
'undeletehistory'        => 'Ako vratite izbrisanu stranicu, bit će vraćene i sve prijašnje promjene. Ako je u međuvremenu stvorena nova stranica s istim imenom, vraćena stranica bit će upisana kao prijašnja promjena sadašnje. Sadašnja stranica neće biti zamijenjena.',
'undeletehistorynoadmin' => 'Ovaj je članak izbrisan. Razlog za brisanje prikazan je u donjem sažetku, zajedno s
detaljima o suradnicima koji su uređivali ovu stranicu prije brisanja.
Tekst izbrisanih inačica dostupan je samo administratorima.',
'undelete-revision'      => 'Izbrisana inačica članka $1 od $2:',
'undeletebtn'            => 'Vrati!',
'undeletecomment'        => 'Komentar:',
'undeletedarticle'       => 'vraćen "$1"',
'undeletedrevisions'     => '$1 inačica vraćeno',
'undeletedfiles'         => '$1 vraćene',
'cannotundelete'         => 'Vraćanje obrisane inačice nije uspjelo; netko drugi je stranicu već vratio.',
'undeletedpage'          => "<big>'''$1 je vraćena'''</big>

Pogledajte [[Special:Log/delete|evidenciju brisanja]] za zapise nedavnih brisanja i vraćanja.",
'undelete-header'        => 'Pogledaj [[Special:Log/delete|evidenciju brisanja]] za nedavno obrisane stranice.',
'undelete-search-box'    => 'Pretraži obrisane stranice',
'undelete-search-prefix' => 'Pretraži stranice koje počinju s:',
'undelete-search-submit' => 'Pretraži',
'undelete-no-results'    => 'Nije pronađena odgovarajuća stranica u arhivu brisanja.',

# Namespace form on various pages
'namespace'      => 'Prostor:',
'invert'         => 'Sve osim odabranog',
'blanknamespace' => '(Glavni)',

# Contributions
'contributions' => 'Doprinosi suradnika',
'mycontris'     => 'Moji doprinosi',
'contribsub2'   => 'Za $1 ($2)',
'nocontribs'    => 'Nema promjena koje udovoljavaju ovim kriterijima.',
'ucnote'        => 'Ovdje je zadnjih <b>$1</b> promjena ovog suradnika u zadnjih <b>$2</b> dana.',
'uclinks'       => 'Pogledaj zadnjih $1 promjena; pogledaj zadnjih $2 dana.',
'uctop'         => ' (vrh)',
'month'         => 'Od mjeseca (i ranije):',
'year'          => 'Od godine (i ranije):',

'sp-contributions-newest'      => 'Najnovije',
'sp-contributions-oldest'      => 'Najstarije',
'sp-contributions-newer'       => '$1 novijih',
'sp-contributions-older'       => '$1 starijih',
'sp-contributions-newbies'     => 'Prikaži samo doprinose novih suradnika',
'sp-contributions-newbies-sub' => 'Za nove suradnike',
'sp-contributions-blocklog'    => 'Evidencija blokiranja',
'sp-contributions-search'      => 'Pretraži doprinose',
'sp-contributions-username'    => 'IP adresa ili suradnik:',
'sp-contributions-submit'      => 'Traži',

'sp-newimages-showfrom' => 'Prikaži nove slike počevši od $1',

# What links here
'whatlinkshere'       => 'Što vodi ovamo',
'whatlinkshere-title' => 'Stranice koje vode na $1',
'notargettitle'       => 'Nema odredišta',
'notargettext'        => 'Niste naveli ciljnu stranicu ili suradnika za izvršavanje ove funkcije.',
'linklistsub'         => '(Popis poveznica)',
'linkshere'           => 'Sljedeće stranice povezuju ovamo:',
'nolinkshere'         => 'Nijedna stranica ne povezuje ovamo.',
'isredirect'          => 'stranica za preusmjeravanje',
'istemplate'          => 'kao predložak',
'whatlinkshere-links' => '← poveznice',

# Block/unblock
'blockip'                     => 'Blokiraj suradnika',
'blockiptext'                 => 'Koristite donji obrazac za blokiranje pisanja pojedinih suradnika ili IP adresa .
To biste trebali raditi samo zbog sprječavanja vandalizma i u skladu
sa [[{{MediaWiki:policy-url}}|smjernicama]].
Upišite i razlog za ovo blokiranje (npr. stranice koje su
vandalizirane).',
'ipaddress'                   => 'IP adresa',
'ipadressorusername'          => 'IP adresa ili suradničko ime',
'ipbexpiry'                   => 'Rok (na engleskom)',
'ipbreason'                   => 'Razlog',
'ipbreasonotherlist'          => 'Drugi razlog',
'ipbreason-dropdown'          => "*Najčešći razlozi za blokiranje
** Netočne informacije
** Uklanjanje sadržaja stranica
** Postavljanje ''spam'' vanjskih poveznica
** Grafiti
** Osobni napadi (ili napadačko ponašanje)
** Čarapare (zloporaba više suradničkih računa)
** Neprihvatljivo suradničko ime",
'ipbanononly'                 => 'Blokiraj samo anonimnu IP adresu (ne prijavljenog suradnika koji ima navedenu IP adresu)',
'ipbcreateaccount'            => 'Spriječi da se s blokirane IP adrese napravi novi suradnički račun',
'ipbemailban'                 => 'Onemogući blokiranom suradniku slanje e-mailova',
'ipbenableautoblock'          => 'Automatski blokiraj IP adrese koje koristi ovaj suradnik',
'ipbsubmit'                   => 'Blokiraj ovog suradnika',
'ipbother'                    => 'Neki drugi rok (na engleskom, npr. 6 days',
'ipboptions'                  => '2 sata:2 hours,6 sati:6 hours,1 dan:1 day,3 dana:3 days,1 tjedan:1 week,2 tjedna:2 weeks,1 mjesec:1 month,3 mjeseca:3 months,6 mjeseci:6 months,1 godine:1 year,zauvijek:infinite',
'ipbotheroption'              => 'drugo',
'ipbotherreason'              => 'Drugi/dodatni razlog:',
'badipaddress'                => 'Nevaljana IP adresa.',
'blockipsuccesssub'           => 'Uspješno blokirano',
'blockipsuccesstext'          => 'Suradnik [[{{ns:Special}}:Contributions/$1|$1]] je blokiran.
<br />Pogledaj [[{{ns:Special}}:Ipblocklist|IP block list]] za pregled blokiranja.',
'ipb-edit-dropdown'           => 'Uredi razloge blokiranja',
'ipb-unblock-addr'            => 'Odblokiraj $1',
'ipb-unblock'                 => 'Odblokiraj suradničko ime ili IP adresu',
'ipb-blocklist-addr'          => 'Vidi postojeća blokiranja za $1',
'unblockip'                   => 'Deblokiraj suradnika',
'unblockiptext'               => 'Ovaj se obrazac koristi za vraćanje prava na pisanje prethodno blokiranoj IP adresi.',
'ipusubmit'                   => 'Deblokiraj ovu adresu',
'ipblocklist'                 => 'Popis blokiranih IP adresa',
'blocklistline'               => '$1, $2 je blokirao $3 ($4)',
'infiniteblock'               => 'neograničeno',
'expiringblock'               => 'istječe $1',
'blocklink'                   => 'blokiraj',
'unblocklink'                 => 'deblokiraj',
'contribslink'                => 'doprinosi',
'autoblocker'                 => 'Automatski ste blokirani jer je vašu IP adresu nedavno koristio "[[User:$1|$1]]" koji je blokiran zbog: "$2".',
'blocklogpage'                => 'Evidencija_blokiranja',
'blocklogentry'               => 'Blokiran je "[[$1]]" na rok $2',
'blocklogtext'                => 'Ovo je evidencija blokiranja i deblokiranja. Na popisu
nema automatski blokiranih IP adresa. Za popis trenutnih zabrana i
blokiranja vidi [[Special:Ipblocklist|listu IP blokiranja]].',
'unblocklogentry'             => 'Deblokiran "$1"',
'range_block_disabled'        => 'Isključena je administratorska naredba za blokiranje raspona IP adresa.',
'ipb_expiry_invalid'          => 'Vremenski rok nije valjan.',
'ip_range_invalid'            => 'Raspon IP adresa nije valjan.',
'proxyblocker'                => 'Zaštita od otvorenih posrednika (proxyja)',
'proxyblockreason'            => 'Vaša je IP adresa blokirana jer se radi o otvorenom posredniku (proxyju). Molim stupite u vezu s vašim davateljem internetskih usluga (ISP-om) ili službom tehničke podrške i obavijestite ih o ovom ozbiljnom sigurnosnom problemu.',
'proxyblocksuccess'           => 'Napravljeno.',
'sorbsreason'                 => 'Vaša IP adresa je na popisu otvorenih posrednika na poslužitelju DNSBL.',
'sorbs_create_account_reason' => 'Vaša IP adresa je na popisu otvorenih posrednika na poslužitelju DNSBL. Ne možete otvoriti račun.',

# Developer tools
'lockdb'              => 'Zaključaj bazu podataka',
'unlockdb'            => 'Otključaj bazu podataka',
'lockdbtext'          => 'Zaključavanjem baze će se suradnicima onemogućiti uređivanje stranica, mijenjanje postavki i popisa praćenja, i sve drugo što zahtijeva promjene u bazi podataka.
Molim potvrdite svoju namjeru zaključavanja, te da ćete otključati bazu čim završite s održavanjem.',
'unlockdbtext'        => 'Otključavanjem baze omogućit ćete suradnicima uređivanje stranica,
mijenjanje postavki, uređivanje popisa praćenja i druge stvari koje zahtijevaju promjene u bazi. Molim potvrdite svoju namjeru.',
'lockconfirm'         => 'Da, sigurno želim zaključati bazu.',
'unlockconfirm'       => 'Da, sigurno želim otključati bazu.',
'lockbtn'             => 'Zaključaj bazu podataka',
'unlockbtn'           => 'Otključaj bazu podataka',
'locknoconfirm'       => 'Niste potvrdili svoje namjere.',
'lockdbsuccesssub'    => 'Zaključavanje baze podataka uspjelo',
'unlockdbsuccesssub'  => 'Otključavanje baze podataka uspjelo',
'lockdbsuccesstext'   => 'Baza podataka je zaključana.
<br />Ne zaboravite otključati po završetku održavanja.',
'unlockdbsuccesstext' => 'Baza podataka je otključana.',

# Move page
'movepage'                => 'Premjesti stranicu',
'movepagetext'            => "Korištenjem ovog obrasca ćete preimenovati stranicu i premjestiti sve stare izmjene
na novo ime.
Stari će se naslov pretvoriti u stranicu koja automatski preusmjerava na novi naslov.
Poveznice na stari naslov ostat će iste; bilo bi dobro da
[[Special:Maintenance|provjerite]] je li preusmjeravanje ispravno.
Na vama je da se pobrinete da poveznice i dalje vode tamo
gdje bi trebale.

Stranica se '''neće''' premjestiti ako već postoji stranica s novim naslovom,
osim u slučaju prazne stranice ili stranice za preusmjeravanje koja nema
nikakvih starih izmjena. To znači: 1. ako pogriješite, možete opet preimenovati
stranicu na stari naslov, 2. ne može vam se dogoditi da izbrišete neku postojeću stranicu.

<b>OPREZ!</b>
Ovo može biti drastična i neočekivana promjena kad su u pitanju popularne stranice,
i zato dobro razmislite prije nego što preimenujete stranicu.",
'movepagetalktext'        => "Stranica za razgovor, ako postoji, automatski će se premjestiti zajedno sa stranicom koju premještate. '''Stranica za razgovor neće se premjestiti ako:'''
*premještate stranicu iz jednog prostora u drugi,
*pod novim imenom već postoji stranica za razgovor s nekim sadržajem, ili
*maknete kvačicu u kućici na dnu ove stranice.

U tim slučajevima ćete morati sami premjestiti ili iskopirati stranicu za razgovor,
ako to želite.",
'movearticle'             => 'Premjesti stranicu',
'movenologin'             => 'Niste prijavljeni',
'movenologintext'         => 'Ako želite premjestiti stranicu morate biti [[Special:Userlogin|prijavljeni]].',
'newtitle'                => 'Na novi naslov',
'move-watch'              => 'Prati ovu stranicu',
'movepagebtn'             => 'Premjesti stranicu',
'pagemovedsub'            => 'Premještanje uspjelo',
'movepage-moved'          => '<big>\'\'\'"$1" je premješteno na "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Stranica pod tim imenom već postoji ili ime koje ste odabrali nije u skladu s pravilima.
Molimo odaberite drugo ime.',
'talkexists'              => "'''Sama stranica je uspješno prenesena, ali stranicu za razgovor nije bilo moguće prenijeti jer na odredištu već postoji stranica za razgovor. Molimo da ih ručno spojite.'''",
'movedto'                 => 'premješteno na',
'movetalk'                => 'Premjesti i njezinu stranicu za razgovor ako je moguće.',
'talkpagemoved'           => 'Pripadajuća stranica za razgovor također je premještena.',
'talkpagenotmoved'        => 'Pripadajuća stranica za razgovor <strong>nije</strong> premještena.',
'1movedto2'               => '$1 premješteno na $2',
'1movedto2_redir'         => '$1 premješteno na $2 preko postojećeg preusmjeravanja',
'movelogpage'             => 'Evidencija premještanja',
'movelogpagetext'         => 'Ispod je popis premještenih stranica.',
'movereason'              => 'Razlog',
'revertmove'              => 'vrati',
'delete_and_move'         => 'Izbriši i premjesti',
'delete_and_move_text'    => '==Nužno brisanje==

Odredišni članak "[[$1]]" već postoji. Želite li ga obrisati da biste napravili mjesto za premještaj?',
'delete_and_move_confirm' => 'Da, izbriši stranicu',
'delete_and_move_reason'  => 'Obrisano kako bi se napravilo mjesta za premještaj.',
'selfmove'                => 'Izvorni i odredišni naslov su isti; ne mogu premjestiti stranicu na nju samu.',
'immobile_namespace'      => 'Odredišni naslov pripada posebnom tipu; u taj prostor ne mogu pomicati stranice.',

# Export
'export'          => 'Izvezi stranice',
'exporttext'      => 'Možete izvesti tekst i prijašnje promjene jedne ili više stranica uklopljene u XML kod. U budućim verzijama MediaWiki softvera bit će moguće uvesti ovakvu stranicu u neki drugi wiki. Trenutna verzija to još ne podržava.

Za izvoz stranica unesite njihove naslove u polje ispod, jedan naslov po retku, i označite želite li trenutnu inačicu zajedno sa svim prijašnjima, ili samo trenutnu inačicu s informacijom o zadnjoj promjeni.

U potonjem slučaju možete koristiti i poveznicu, npr. [[{{ns:Special}}:Export/{{MediaWiki:mainpage}}]] za članak [[{{MediaWiki:mainpage}}]].',
'exportcuronly'   => 'Uključi samo trenutnu inačicu, ne i sve prijašnje',
'exportnohistory' => "----
'''Napomena:''' izvoz cjelokupne stranice sa svim prethodnim izmjenama onemogućen je zbog opterećenja poslužitelja.",

# Namespace 8 related
'allmessages'               => 'Sve sistemske poruke',
'allmessagesname'           => 'Ime',
'allmessagesdefault'        => 'Prvotni tekst',
'allmessagescurrent'        => 'Trenutni tekst',
'allmessagestext'           => 'Ovo je popis svih sistemskih poruka u prostoru MediaWiki: .',
'allmessagesnotsupportedDB' => 'Uređivanje Special:AllMessages trenutno nije podržano jer je isključen parametar wgUseDatabaseMessages.',
'allmessagesfilter'         => 'Filter imena poruka:',
'allmessagesmodified'       => 'Prikaži samo promijenjene',

# Thumbnails
'thumbnail-more'  => 'Povećaj',
'missingimage'    => '<b>Nedostaje slika</b><br /><i>$1</i>',
'filemissing'     => 'Nedostaje datoteka',
'thumbnail_error' => 'Pogrješka pri izradbi sličice: $1',

# Special:Import
'import'                => 'Uvezi stranice',
'importinterwiki'       => 'Transwiki uvoz',
'importtext'            => 'Molim da izvezete ovu datoteku iz izvorišnog wikija koristeći pomagalo Special:Export, snimite je na svoj disk i postavite je ovdje.',
'importfailed'          => 'Uvoz nije uspio: $1',
'importnotext'          => 'Prazno ili bez teksta',
'importsuccess'         => 'Uvoz je uspio!',
'importhistoryconflict' => 'Došlo je do konflikta među prijašnjim inačicama (ova je stranica možda već uvezena)',
'importnosources'       => 'Nije unesen nijedan izvor za transwiki uvoz i neposredno postavljanje povijesti je onemogućeno.',
'importnofile'          => 'Nije postavljena uvozna datoteka.',
'importuploaderror'     => 'Postavljanje uvozne datoteke nije uspjelo; možda je datoteka veća od dozvoljene veličine.',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Moja suradnička stranica',
'tooltip-pt-anonuserpage'         => 'Suradnička stranica za IP adresu pod kojom uređujete',
'tooltip-pt-mytalk'               => 'Moja stranica za razgovor',
'tooltip-pt-anontalk'             => 'Razgovor o suradnicima s ove IP adrese',
'tooltip-pt-preferences'          => 'Moje postavke',
'tooltip-pt-watchlist'            => 'Popis stranica koje pratite.',
'tooltip-pt-mycontris'            => 'Popis mojih doprinosa',
'tooltip-pt-login'                => 'Predlažemo vam da se prijavite, ali nije obvezno.',
'tooltip-pt-anonlogin'            => 'Predlažemo vam da se prijavite, ali nije obvezno.',
'tooltip-pt-logout'               => 'Odjavi se',
'tooltip-ca-talk'                 => 'Razgovor o stranici',
'tooltip-ca-edit'                 => 'Možete uređivati ovu stranicu. Koristite Pregled kako će izgledati prije nego što snimite.',
'tooltip-ca-addsection'           => 'Dodaj komentar ovom razgovoru.',
'tooltip-ca-viewsource'           => 'Ova stranica je zaštićena. Možete pogledati izvorni kod.',
'tooltip-ca-history'              => 'Ranije izmjene na ovoj stranici.',
'tooltip-ca-protect'              => 'Zaštiti ovu stranicu',
'tooltip-ca-delete'               => 'Izbriši ovu stranicu',
'tooltip-ca-undelete'             => 'Vrati uređivanja na ovoj stranici prije nego što je izbrisana',
'tooltip-ca-move'                 => 'Premjesti ovu stranicu',
'tooltip-ca-watch'                => 'Dodaj ovu stranicu na svoj popis praćenja',
'tooltip-ca-unwatch'              => 'Ukloni ovu stranicu s popisa praćenja',
'tooltip-search'                  => 'Pretraži ovaj wiki',
'tooltip-p-logo'                  => 'Glavna stranica',
'tooltip-n-mainpage'              => 'Posjeti glavnu stranicu',
'tooltip-n-portal'                => 'O projektu, što možete učiniti, gdje je što',
'tooltip-n-currentevents'         => 'O trenutnim događajima',
'tooltip-n-recentchanges'         => 'Popis nedavnih promjena u wikiju.',
'tooltip-n-randompage'            => 'Učitaj slučajnu stranicu',
'tooltip-n-help'                  => 'Mjesto za pomoć suradnicima.',
'tooltip-n-sitesupport'           => 'Podržite nas materijalno',
'tooltip-t-whatlinkshere'         => 'Popis svih stranica koje sadrže poveznice ovamo',
'tooltip-t-recentchangeslinked'   => 'Nedavne promjene na stranicama na koje vode ovdašnje poveznice',
'tooltip-feed-rss'                => 'RSS feed za ovu stranicu',
'tooltip-feed-atom'               => 'Atom feed za ovu stranicu',
'tooltip-t-contributions'         => 'Pogledaj popis suradnikovih doprinosa',
'tooltip-t-emailuser'             => 'Pošalji suradniku e-mail',
'tooltip-t-upload'                => 'Postavi slike i druge medije',
'tooltip-t-specialpages'          => 'Popis posebnih stranica',
'tooltip-ca-nstab-main'           => 'Pogledaj sadržaj',
'tooltip-ca-nstab-user'           => 'Pogledaj suradničku stranicu',
'tooltip-ca-nstab-media'          => 'Pogledaj stranicu s opisom medija',
'tooltip-ca-nstab-special'        => 'Ovo je posebna stranica koju nije moguće izravno uređivati.',
'tooltip-ca-nstab-project'        => 'Pogledaj stranicu o projektu',
'tooltip-ca-nstab-image'          => 'Pogledaj stranicu o slici',
'tooltip-ca-nstab-mediawiki'      => 'Pogledaj sistemske poruke',
'tooltip-ca-nstab-template'       => 'Pogledaj predložak',
'tooltip-ca-nstab-help'           => 'Pogledaj stranicu za pomoć',
'tooltip-ca-nstab-category'       => 'Pogledaj stranicu kategorije',
'tooltip-minoredit'               => 'Označi kao manju promjenu',
'tooltip-save'                    => 'Sačuvaj promjene',
'tooltip-preview'                 => 'Prikaži kako će izgledati, molimo koristite prije snimanja!',
'tooltip-diff'                    => 'Prikaži promjene učinjene u tekstu.',
'tooltip-compareselectedversions' => 'Prikaži usporedbu izabranih inačica ove stranice.',
'tooltip-watch'                   => 'Dodaj na popis praćenja',

# Stylesheets
'monobook.css' => '/** Ovdje idu izmjene monobook stylesheeta */',

# Metadata
'nodublincore'      => 'Dublin Core RDF metapodaci su isključeni na ovom serveru.',
'nocreativecommons' => 'Creative Commons RDF metapodaci su isključeni na ovom serveru.',
'notacceptable'     => 'Wiki server ne može dobaviti podatke u obliku kojega vaš klijent može pročitati.',

# Attribution
'anonymous'        => 'Anonimni suradnik projekta {{SITENAME}}',
'siteuser'         => 'Suradnik $1 na projektu {{SITENAME}}',
'lastmodifiedatby' => 'Ovu je stranicu zadnji put mijenjao dana $2, $1 suradnik $3.', # $1 date, $2 time, $3 user
'and'              => 'i',
'othercontribs'    => 'Temelji se na doprinosu suradnika $1.',
'others'           => 'drugih',
'siteusers'        => '{{SITENAME}} suradnik(ci) $1',
'creditspage'      => 'Autori stranice',
'nocredits'        => 'Za ovu stranicu nema podataka o autorima.',

# Spam protection
'spamprotectiontitle'    => 'Zaštita od spama',
'spamprotectiontext'     => 'Stranicu koju ste željeli snimiti blokirao je filter spama. Razlog je vjerojatno vanjska poveznica.',
'spamprotectionmatch'    => 'Naš filter spama reagirao je na sljedeći tekst: $1',
'subcategorycount'       => 'Broj potkategorija u ovoj kategoriji: $1.',
'categoryarticlecount'   => 'Broj članaka u ovoj kategoriji: $1.',
'category-media-count'   => 'Postoji {{PLURAL:$1|jedna datoteka|$1 datoteka}} u kategoriji.',
'listingcontinuesabbrev' => 'nast.',
'spambot_username'       => 'MediaWiki zaštita od spama',
'spam_reverting'         => 'Vraćam na zadnju inačicu koja ne sadrži poveznice na $1',
'spam_blanking'          => 'Sve inačice sadrže poveznice na $1, brišem cjelokupni sadržaj',

# Info page
'infosubtitle'   => 'Podaci o stranici',
'numedits'       => 'Broj promjena (članak): $1',
'numtalkedits'   => 'Broj promjena (stranica za razgovor): $1',
'numwatchers'    => 'Broj pratitelja: $1',
'numauthors'     => 'Broj autora (članak): $1',
'numtalkauthors' => 'Broj autora (stranica za razgovor): $1',

# Math options
'mw_math_png'    => 'Uvijek kao PNG',
'mw_math_simple' => 'Ako je vrlo jednostavno HTML, inače PNG',
'mw_math_html'   => 'Ako je moguće HTML, inače PNG',
'mw_math_source' => 'Ostavi u formatu TeX (za tekstualne preglednike)',
'mw_math_modern' => 'Preporučeno za današnje preglednike',
'mw_math_mathml' => 'Ako je moguće MathML (u pokusnoj fazi)',

# Patrolling
'markaspatrolleddiff'        => 'Označi za pregledano',
'markaspatrolledtext'        => 'Označi ovaj članak pregledanim',
'markedaspatrolled'          => 'Pregledano',
'markedaspatrolledtext'      => 'Odabrana promjena već je pregledana.',
'rcpatroldisabled'           => 'Nadzor nedavnih promjena isključen',
'rcpatroldisabledtext'       => 'Naredba "Nadziri nedavne promjene" trenutno je isključena.',
'markedaspatrollederror'     => 'Ne mogu označiti za pregledano',
'markedaspatrollederrortext' => 'Morate odabrati inačicu koju treba označiti za pregledanu.',

# Patrol log
'patrol-log-page' => 'Evidencija pregledavanja promjena',
'patrol-log-line' => 'promjena broj $1 stranice $2 pregledana $3',

# Image deletion
'deletedrevision' => 'Izbrisana stara inačica $1',

# Browsing diffs
'previousdiff' => '← Usporedba s prethodnom',
'nextdiff'     => 'Usporedba sa sljedećom →',

# Media information
'mediawarning'   => "'''Upozorenje''': Ova datoteka možda sadrži zlonamjerni program čije bi izvršavanje moglo ugroziti vaš računalni sustav.
<hr />",
'imagemaxsize'   => 'Ograniči veličinu slike na stranici s opisom:',
'thumbsize'      => 'Veličina sličice (umanjene inačice slike):',
'file-info-size' => '($1 × $2 piksela, veličina datoteke: $3, MIME type: $4)',
'file-nohires'   => '<small>Viša rezolucija nije dostupna.</small>',
'show-big-image' => 'Vidi sliku u punoj veličini (rezoluciji)',

# Special:Newimages
'newimages'    => 'Galerija novih datoteka',
'showhidebots' => '($1 botova)',
'noimages'     => 'Nema slika.',

# Metadata
'metadata'          => 'Metapodaci',
'metadata-help'     => 'Ova datoteka sadržava dodatne podatke koje je vjerojatno dodala digitalna kamera ili skener u procesu snimanja odnosno digitalizacije. Ako je datoteka mijenjana, podatci možda nisu u skladu sa stvarnim stanjem.',
'metadata-expand'   => 'Pokaži sve podatke',
'metadata-collapse' => 'Sakrij dodatne podatke',

# EXIF tags
'exif-imagewidth'                  => 'Širina',
'exif-imagelength'                 => 'Visina',
'exif-bitspersample'               => 'Dubina boje',
'exif-compression'                 => 'Način sažimanja',
'exif-photometricinterpretation'   => 'Kolor model',
'exif-orientation'                 => 'Orijentacija kadra',
'exif-samplesperpixel'             => 'Broj kolor komponenata',
'exif-planarconfiguration'         => 'Princip rasporeda podataka',
'exif-ycbcrsubsampling'            => 'Omjer kompnente Y prema C',
'exif-ycbcrpositioning'            => 'Razmještaj komponenata Y i C',
'exif-xresolution'                 => 'Vodoravna razlučivost',
'exif-yresolution'                 => 'Okomita razlučivost',
'exif-resolutionunit'              => 'Jedinica razlučivosti',
'exif-stripoffsets'                => 'Položaj bloka podataka',
'exif-rowsperstrip'                => 'Broj redova u bloku',
'exif-stripbytecounts'             => 'Veličina komprimiranog bloka',
'exif-jpeginterchangeformat'       => 'Udaljenost JPEG previewa od početka datoteke',
'exif-jpeginterchangeformatlength' => 'Količina bajtova JPEG previewa',
'exif-transferfunction'            => 'Funkcija preoblikovanja kolor prostora',
'exif-whitepoint'                  => 'Kromaticitet bijele točke',
'exif-primarychromaticities'       => 'Kromaticitet primarnih boja',
'exif-ycbcrcoefficients'           => 'Matrični koeficijenti preobrazbe kolor prostora',
'exif-referenceblackwhite'         => 'Mjesto bijele i crne točke',
'exif-datetime'                    => 'Datum zadnje promjene datoteke',
'exif-imagedescription'            => 'Ime slike',
'exif-make'                        => 'Proizvođač kamere',
'exif-model'                       => 'Model kamere',
'exif-software'                    => 'Korišteni softver',
'exif-artist'                      => 'Autor',
'exif-copyright'                   => 'Nositelj prava',
'exif-exifversion'                 => 'Exif verzija',
'exif-flashpixversion'             => 'Podržana verzija Flashpixa',
'exif-colorspace'                  => 'Kolor prostor',
'exif-componentsconfiguration'     => 'Značenje pojedinih komponenti',
'exif-compressedbitsperpixel'      => 'Dubina boje poslije sažimanja',
'exif-pixelydimension'             => 'Puna visina slike',
'exif-pixelxdimension'             => 'Puna širina slike',
'exif-makernote'                   => 'Napomene proizvođača',
'exif-usercomment'                 => 'Suradnički komentar',
'exif-relatedsoundfile'            => 'Povezani zvučni zapis',
'exif-datetimeoriginal'            => 'Datum i vrijeme slikanja',
'exif-datetimedigitized'           => 'Datum i vrijeme digitalizacije',
'exif-subsectime'                  => 'Dio sekunde u kojem je slikano',
'exif-subsectimeoriginal'          => 'Dio sekunde u kojem je fotografirano',
'exif-subsectimedigitized'         => 'Dio sekunde u kojem je digitalizirano',
'exif-exposuretime'                => 'Ekspozicija',
'exif-fnumber'                     => 'F broj dijafragme',
'exif-exposureprogram'             => 'Program ekspozicije',
'exif-spectralsensitivity'         => 'Spektralna osjetljivost',
'exif-isospeedratings'             => 'ISO vrijednost',
'exif-oecf'                        => 'Optoelektronski faktor konverzije',
'exif-shutterspeedvalue'           => 'Brzina zatvarača',
'exif-aperturevalue'               => 'Dijafragma',
'exif-brightnessvalue'             => 'Osvijetljenost',
'exif-exposurebiasvalue'           => 'Kompenzacija ekspozicije',
'exif-maxaperturevalue'            => 'Minimalni broj dijafragme',
'exif-subjectdistance'             => 'Udaljenost do objekta',
'exif-meteringmode'                => 'Režim mjerača vremena',
'exif-lightsource'                 => 'Izvor svjetlosti',
'exif-flash'                       => 'Bljeskalica',
'exif-focallength'                 => 'Žarišna duljina leće',
'exif-subjectarea'                 => 'Položaj i površina objekta snimke',
'exif-flashenergy'                 => 'Energija bljeskalice',
'exif-spatialfrequencyresponse'    => 'Prostorna frekvencijska karakteristika',
'exif-focalplanexresolution'       => 'Vodoravna razlučivost žarišne ravnine',
'exif-focalplaneyresolution'       => 'Okomita razlučivost žarišne ravnine',
'exif-focalplaneresolutionunit'    => 'Jedinica razlučivosti žarišne ravnine',
'exif-subjectlocation'             => 'Položaj subjekta',
'exif-exposureindex'               => 'Indeks ekspozicije',
'exif-sensingmethod'               => 'Tip senzora',
'exif-filesource'                  => 'Izvorna datoteka',
'exif-scenetype'                   => 'Tip scene',
'exif-cfapattern'                  => 'Tip kolor filtera',
'exif-customrendered'              => 'Dodatna obrada slike',
'exif-exposuremode'                => 'Režim izbora ekspozicije',
'exif-whitebalance'                => 'Balans bijele',
'exif-digitalzoomratio'            => 'Razmjer digitalnog zooma',
'exif-focallengthin35mmfilm'       => 'Ekvivalent žarišne daljine za 35 mm film',
'exif-scenecapturetype'            => 'Tip scene na snimci',
'exif-gaincontrol'                 => 'Kontrola osvijetljenosti',
'exif-contrast'                    => 'Kontrast',
'exif-saturation'                  => 'Zasićenje',
'exif-sharpness'                   => 'Oštrina',
'exif-devicesettingdescription'    => 'Opis postavki uređaja',
'exif-subjectdistancerange'        => 'Raspon udaljenosti subjekata',
'exif-imageuniqueid'               => 'Jedinstveni identifikator slike',
'exif-gpsversionid'                => 'Verzija bloka GPS-informacije',
'exif-gpslatituderef'              => 'Sjeverna ili južna širina',
'exif-gpslatitude'                 => 'Širina',
'exif-gpslongituderef'             => 'Istočna ili zapadna dužina',
'exif-gpslongitude'                => 'Dužina',
'exif-gpsaltituderef'              => 'Visina ispod ili iznad mora',
'exif-gpsaltitude'                 => 'Visina',
'exif-gpstimestamp'                => 'Vrijeme po GPS-u (atomski sat)',
'exif-gpssatellites'               => 'Korišteni sateliti',
'exif-gpsstatus'                   => 'Status prijemnika',
'exif-gpsmeasuremode'              => 'Režim mjerenja',
'exif-gpsdop'                      => 'Preciznost mjerenja',
'exif-gpsspeedref'                 => 'Jedinica brzine',
'exif-gpsspeed'                    => 'Brzina GPS prijemnika',
'exif-gpstrackref'                 => 'Tip azimuta prijemnika (pravi ili magnetni)',
'exif-gpstrack'                    => 'Azimut prijemnika',
'exif-gpsimgdirectionref'          => 'Tip azimuta slike (pravi ili magnetni)',
'exif-gpsimgdirection'             => 'Azimut slike',
'exif-gpsmapdatum'                 => 'Korišteni geodetski koordinatni sustav',
'exif-gpsdestlatituderef'          => 'Indeks zemlj. širine objekta',
'exif-gpsdestlatitude'             => 'Zemlj. širina objekta',
'exif-gpsdestlongituderef'         => 'Indeks zemlj. dužine objekta',
'exif-gpsdestlongitude'            => 'Zemljopisna dužina objekta',
'exif-gpsdestbearingref'           => 'Indeks pelenga objekta',
'exif-gpsdestbearing'              => 'Peleng objekta',
'exif-gpsdestdistanceref'          => 'Mjerne jedinice udaljenosti objekta',
'exif-gpsdestdistance'             => 'Udaljenost objekta',
'exif-gpsprocessingmethod'         => 'Ime metode obrade GPS podataka',
'exif-gpsareainformation'          => 'Ime GPS područja',
'exif-gpsdatestamp'                => 'GPS datum',
'exif-gpsdifferential'             => 'GPS diferencijalna korekcija',

# EXIF attributes
'exif-compression-1' => 'Nesažeto',

'exif-orientation-1' => 'Normalno', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Zrcaljeno po horizontali', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Zaokrenuto 180°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Zrcaljeno po vertikali', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Zaokrenuto 90° suprotno od sata i zrcaljeno po vertikali', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Zaokrenuto 90° u smjeru sata', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Zaokrenuto 90° u smjeru sata i zrcaljeno po vertikali', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Zaokrenuto 90° suprotno od sata', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'zrnasti format',
'exif-planarconfiguration-2' => 'planarni format',

'exif-componentsconfiguration-0' => 'ne postoji',

'exif-exposureprogram-0' => 'Nepoznato',
'exif-exposureprogram-1' => 'Ručno',
'exif-exposureprogram-2' => 'Normalni program',
'exif-exposureprogram-3' => 'Prioritet dijafragme',
'exif-exposureprogram-4' => 'Prioritet zatvarača',
'exif-exposureprogram-5' => 'Umjetnički program (na temelju nužne dubine polja)',
'exif-exposureprogram-6' => 'Sportski program (na temelju što bržeg zatvarača)',
'exif-exposureprogram-7' => 'Portretni režim (za krupne planove s neoštrom pozadinom)',
'exif-exposureprogram-8' => 'Režim krajolika (za slike krajolika s oštrom pozadinom)',

'exif-subjectdistance-value' => '$1 metara',

'exif-meteringmode-0'   => 'Nepoznato',
'exif-meteringmode-1'   => 'Prosjek',
'exif-meteringmode-2'   => 'Prosjek s težištem na sredini',
'exif-meteringmode-3'   => 'Točka',
'exif-meteringmode-4'   => 'Više točaka',
'exif-meteringmode-5'   => 'Matrični',
'exif-meteringmode-6'   => 'Djelomični',
'exif-meteringmode-255' => 'Drugo',

'exif-lightsource-0'   => 'Nepoznato',
'exif-lightsource-1'   => 'Dnevna svjetlost',
'exif-lightsource-2'   => 'Fluorescentno',
'exif-lightsource-3'   => 'Volframska žarulja',
'exif-lightsource-4'   => 'Bljeskalica',
'exif-lightsource-9'   => 'Lijepo vrijeme',
'exif-lightsource-10'  => 'Oblačno vrijeme',
'exif-lightsource-11'  => 'Sjena',
'exif-lightsource-12'  => 'Fluorescentna svjetlost (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Fluorescentna svjetlost (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Fluorescentna svjetlost (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Bijela fluorescencija (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Standardno svjetlo A',
'exif-lightsource-18'  => 'Standardno svjetlo B',
'exif-lightsource-19'  => 'Standardno svjetlo C',
'exif-lightsource-24'  => 'ISO studijska svjetiljka',
'exif-lightsource-255' => 'Drugi izvor svjetla',

'exif-focalplaneresolutionunit-2' => 'inči',

'exif-sensingmethod-1' => 'Nedefinirano',
'exif-sensingmethod-2' => 'Jednokristalni matrični senzor',
'exif-sensingmethod-3' => 'Dvokristalni matrični senzor',
'exif-sensingmethod-4' => 'Trokristalni matrični senzor',
'exif-sensingmethod-5' => 'Sekvencijalni matrični senzor',
'exif-sensingmethod-7' => 'Trobojni linearni senzor',
'exif-sensingmethod-8' => 'Sekvencijalni linearni senzor',

'exif-filesource-3' => 'Digitalni fotoaparat',

'exif-scenetype-1' => 'Izravno fotografirana slika',

'exif-customrendered-0' => 'Normalni proces',
'exif-customrendered-1' => 'Nestadardni proces',

'exif-exposuremode-0' => 'Automatski',
'exif-exposuremode-1' => 'Ručno',
'exif-exposuremode-2' => 'Automatski sa zadanim rasponom',

'exif-whitebalance-0' => 'Automatski',
'exif-whitebalance-1' => 'Ručno',

'exif-scenecapturetype-0' => 'Standardno',
'exif-scenecapturetype-1' => 'Pejzaž',
'exif-scenecapturetype-2' => 'Portret',
'exif-scenecapturetype-3' => 'Noćno',

'exif-gaincontrol-0' => 'Nema',
'exif-gaincontrol-1' => 'Malo povećanje',
'exif-gaincontrol-2' => 'Veliko povećanje',
'exif-gaincontrol-3' => 'Malo smanjenje',
'exif-gaincontrol-4' => 'Veliko smanjenje',

'exif-contrast-0' => 'Normalno',
'exif-contrast-1' => 'Meko',
'exif-contrast-2' => 'Tvrdo',

'exif-saturation-0' => 'Normalno',
'exif-saturation-1' => 'Niska saturacija',
'exif-saturation-2' => 'Visoka saturacija',

'exif-sharpness-0' => 'Normalno',
'exif-sharpness-1' => 'Meko',
'exif-sharpness-2' => 'Tvrdo',

'exif-subjectdistancerange-0' => 'Nepoznato',
'exif-subjectdistancerange-1' => 'Krupni plan',
'exif-subjectdistancerange-2' => 'Bliski plan',
'exif-subjectdistancerange-3' => 'Udaljeno',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Sjever',
'exif-gpslatitude-s' => 'Jug',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Istok',
'exif-gpslongitude-w' => 'Zapad',

'exif-gpsstatus-a' => 'Mjerenje u tijeku',
'exif-gpsstatus-v' => 'Spreman za prijenos',

'exif-gpsmeasuremode-2' => 'Dvodimenzionalno mjerenje',
'exif-gpsmeasuremode-3' => 'Trodimenzionalno mjerenje',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'kmh',
'exif-gpsspeed-m' => 'mph',
'exif-gpsspeed-n' => 'čv',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Pravi sjever',
'exif-gpsdirection-m' => 'Magnetni sjever',

# External editor support
'edit-externally'      => 'Uredi koristeći se vanjskom aplikacijom',
'edit-externally-help' => 'Vidi [http://meta.wikimedia.org/wiki/Help:External_editors setup upute] za više informacija.',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'sve',
'imagelistall'     => 'sve',
'watchlistall2'    => 'sve',
'namespacesall'    => 'sve',
'monthsall'        => 'sve',

# E-mail address confirmation
'confirmemail'            => 'Potvrda e-mail adrese',
'confirmemail_noemail'    => 'Niste unijeli važeću e-mail adresu u vaše [[Special:Preferences|suradničke postavke]].',
'confirmemail_text'       => 'U ovom wikiju morate prije korištenja e-mail naredbi verificirati svoju e-mail adresu. Kliknite na dugme ispod kako biste
poslali poruku s potvrdom na vašu adresu. U poruci će biti poveznica koju morate otvoriti u
svom web pregledniku da biste verificirali adresu.',
'confirmemail_pending'    => '<div class="error">
Već vam je e-mailom poslan potvrdni kôd; ako ste upravo otvorili suradnički račun, molimo pričekajte još nekoliko minuta na e-mailu, prije nego što postavite zahtjev za novi kôd.
</div>',
'confirmemail_send'       => 'Pošalji kôd za potvrdu e-mail adrese',
'confirmemail_sent'       => 'Poruka s potvrdom je poslana.',
'confirmemail_oncreate'   => 'Potvrdni kôd poslan je na vašu elektroničku adresu. 
Ovaj kôd nije potreban za prijavljivanje, no bit će vam potreban kako biste osposobili neke od postavki na Wikipediji koje uključuju elektroničku poštu.',
'confirmemail_sendfailed' => 'Poruka s potvrdom nije se mogla poslati. Provjerite pravilnost adrese.',
'confirmemail_invalid'    => 'Pogrešna potvrda. Kod je možda istekao.',
'confirmemail_needlogin'  => 'Trebate se $1, kako bi se potvrdila vaša e-mail adresa.',
'confirmemail_success'    => 'Vaša je e-mail adresa potvrđena. Možete se prijaviti i uživati u wikiju.',
'confirmemail_loggedin'   => 'Vaša je e-mail adresa potvrđena.',
'confirmemail_error'      => 'Došlo je do greške kod snimanja vaše potvrde.',
'confirmemail_subject'    => '{{SITENAME}}: potvrda e-mail adrese',
'confirmemail_body'       => 'Vi ili netko drugi s IP adrese $1 ste otvorili
suradnički račun pod imenom "$2" s ovom e-mail adresom na Wikipediji.

Kako biste potvrdili da je ovaj suradnički račun uistinu vaš i
uključili e-mail naredbe na Wikipediji, otvorite u vašem
pregledniku sljedeću poveznicu:

$3

Ako ovo *niste* vi, nemojte otvarati poveznicu.

Valjanost ovog potvrdnog koda istječe $4.',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki transkluzija isključena]',
'scarytranscludefailed'   => '[Dobava predloška nije uspjela; $1; ispričavam se]',
'scarytranscludetoolong'  => '[URL je predug; ispričavam se]',

# Trackbacks
'trackbackbox'      => "<div id='mw_trackbacks'>
''Trackbackovi'' za ovaj članak:<br />
$1
</div>",
'trackbackremove'   => ' ([$1 izbrisati])',
'trackbackdeleteok' => 'Trackback izbrisan.',

# Delete conflict
'deletedwhileediting' => 'Upozorenje: dok ste uređivali stranicu netko ju je izbrisao!',
'confirmrecreate'     => "Suradnik [[User:$1|$1]] ([[User talk:$1|talk]]) izbrisao je ovaj članak nakon što ste ga počeli uređivati. Razlog brisanja
: ''$2''
Potvrdite namjeru vraćanja ovog članka.",
'recreate'            => 'Vrati',

# HTML dump
'redirectingto' => 'Preusmjeravam na [[$1]]...',

# action=purge
'confirm_purge'        => 'Isprazniti međuspremnik stranice?

$1',
'confirm_purge_button' => 'U redu',

# AJAX search
'searchcontaining' => "Traži članke koji sadržavaju ''$1''.",
'searchnamed'      => "Traži članke po imenu ''$1''.",
'articletitles'    => "Članci koji počinju s ''$1''",
'hideresults'      => 'Sakrij rezultate',

# Table pager
'table_pager_next'         => 'Sljedeća stranica',
'table_pager_prev'         => 'Prethodna stranica',
'table_pager_first'        => 'Prva stranica',
'table_pager_last'         => 'Zadnja stranica',
'table_pager_limit_submit' => 'Idi',
'table_pager_empty'        => 'Nema rezultata',

# Auto-summaries
'autosumm-blank'   => 'Uklonjen cjelokupni sadržaj stranice',
'autosumm-replace' => "Tekst stranice se zamjenjuje s '$1'",
'autoredircomment' => 'Preusmjeravanje na [[$1]]',
'autosumm-new'     => 'Nova stranica: $1',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Moguće je da izmjene nastale u zadnjih $1 sek. neće biti vidljive na ovom popisu.',

# Watchlist editor
'watchlistedit-numitems'       => 'Vaš popis praćenja sadrži {{PLURAL:$1|1 stranicu|$1 stranica}}, bez stranica za razgovor.',
'watchlistedit-noitems'        => 'Vaš popis praćenja je prazan.',
'watchlistedit-clear-title'    => 'Brisanje popisa praćenja',
'watchlistedit-clear-legend'   => 'Obriši popis praćenja',
'watchlistedit-clear-confirm'  => "Klikanje na gumb '''Obriši''' će obrisati vašu listu praćenja. Jeste li sigurni da to želite?
Možete također [[Special:Watchlist/edit|uklanjati pojedinačne stranice]].",
'watchlistedit-clear-submit'   => 'Obriši',
'watchlistedit-clear-done'     => 'Vaš popis praćenja je obrisan.',
'watchlistedit-normal-title'   => 'Uredi popis praćenih stranica',
'watchlistedit-normal-legend'  => 'Ukloni stranice iz popisa praćenja',
'watchlistedit-normal-explain' => "Prikazane su stranice na vašem popisu praćenja. Da uklonite neku s popisa praćenja, označite kućicu kraj nje,
i kliknite na gumb '''Ukloni stranice''' na dnu ove stranice.
Možete također [[Special:Watchlist/raw|uređivati ovaj popis u okviru za uređivanje]],
ili [[Special:Watchlist/clear|obrisati cijeli popis]].",
'watchlistedit-normal-submit'  => 'Ukloni stranice',
'watchlistedit-normal-done'    => '{{PLURAL:$1|1 stranica je uklonjena|$1 stranice su uklonjene}} iz vašeg popisa praćenja. Slijedi popis uklonjenih:',
'watchlistedit-raw-titles'     => 'Imena stranica:',
'watchlistedit-raw-submit'     => 'Snimi promjene',
'watchlistedit-raw-done'       => 'Vaš popis praćenja je snimljen.',

# Watchlist editing tools
'watchlisttools-view'  => 'Pregled promjena praćenih stranica',
'watchlisttools-edit'  => 'Pregled i uređivanje praćenih stranica',
'watchlisttools-raw'   => 'Uređivanje praćenih stranica u okviru za uređivanje',
'watchlisttools-clear' => 'Isprazni popis praćenja',

);
