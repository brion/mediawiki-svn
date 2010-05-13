<?php
/** Aragonese (Aragonés)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Juanpabl
 * @author Malafaya
 * @author Remember the dot
 * @author Urhixidur
 * @author Willtron
 * @author לערי ריינהארט
 */

$fallback = 'es';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Espezial',
	NS_TALK             => 'Descusión',
	NS_USER             => 'Usuario',
	NS_USER_TALK        => 'Descusión_usuario',
	NS_PROJECT_TALK     => 'Descusión_$1',
	NS_FILE             => 'Imachen',
	NS_FILE_TALK        => 'Descusión_imachen',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Descusión_MediaWiki',
	NS_TEMPLATE         => 'Plantilla',
	NS_TEMPLATE_TALK    => 'Descusión_plantilla',
	NS_HELP             => 'Aduya',
	NS_HELP_TALK        => 'Descusión_aduya',
	NS_CATEGORY         => 'Categoría',
	NS_CATEGORY_TALK    => 'Descusión_categoría',
);

$magicWords = array(
	'redirect'              => array( '0', '#ENDRECERA', '#REENDRECERA', '#REDIRECCIÓN', '#REDIRECCION', '#REDIRECT' ),
	'namespace'             => array( '1', 'ESPACIODENOMBRES', 'ESPACIODENOMBRE', 'NAMESPACE' ),
	'namespacee'            => array( '1', 'ESPACIODENOMBRESE', 'ESPACIODENOMBREC', 'NAMESPACEE' ),
	'img_right'             => array( '1', 'dreita', 'derecha', 'dcha', 'der', 'right' ),
	'img_left'              => array( '1', 'cucha', 'zurda', 'izquierda', 'izda', 'izq', 'left' ),
	'ns'                    => array( '0', 'EN:', 'EDN:', 'NS:' ),
	'displaytitle'          => array( '1', 'TÍTOL', 'MOSTRARTÍTULO', 'MOSTRARTITULO', 'DISPLAYTITLE' ),
	'currentversion'        => array( '1', 'BERSIÓNAUTUAL', 'BERSIONAUTUAL', 'REVISIÓNACTUAL', 'VERSIONACTUAL', 'VERSIÓNACTUAL', 'CURRENTVERSION' ),
	'language'              => array( '0', '#LUENGA:', '#IDIOMA:', '#LANGUAGE:' ),
	'special'               => array( '0', 'espezial', 'especial', 'special' ),
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'Endreceras doples', 'Reendrezeras dobles', 'Dobles reendrezeras', 'Endrezeras dobles', 'Dobles endrezeras' ),
	'BrokenRedirects'           => array( 'Endreceras trencatas', 'Endreceras trencadas', 'Reendrezeras trencatas', 'Endrezeras trencatas', 'Reendrezeras crebatas', 'Endrezeras crebatas', 'Endrezeras trencadas', 'Endrezeras crebadas' ),
	'Disambiguations'           => array( 'Desambigacions', 'Desambigazions', 'Pachinas de desambigazión' ),
	'Userlogin'                 => array( 'Encetar sesión', 'Enzetar sesión', 'Dentrar' ),
	'Userlogout'                => array( 'Salir', 'Rematar sesión' ),
	'CreateAccount'             => array( 'Creyar cuenta' ),
	'Preferences'               => array( 'Preferencias' ),
	'Watchlist'                 => array( 'Lista de seguimiento' ),
	'Recentchanges'             => array( 'Zaguers cambeos', 'Cambeos recients' ),
	'Upload'                    => array( 'Cargar', 'Puyar' ),
	'Listfiles'                 => array( 'Lista de fichers', 'Lista d\'imáchens', 'Lista d\'imachens' ),
	'Newimages'                 => array( 'Nuevos fichers', 'Nuevas imáchens', 'Nuevas imachens', 'Nuebas imachens' ),
	'Listusers'                 => array( 'Lista d\'usuarios' ),
	'Listgrouprights'           => array( 'ListaDreitosGrupos' ),
	'Statistics'                => array( 'Estatisticas', 'Estadisticas' ),
	'Randompage'                => array( 'Pachina a l\'azar', 'Pachina aleatoria', 'Pachina aliatoria' ),
	'Lonelypages'               => array( 'Pachinas popiellas' ),
	'Uncategorizedpages'        => array( 'Pachinas sin categorizar', 'Pachinas sin categorías' ),
	'Uncategorizedcategories'   => array( 'Categorías sin categorizar. Categorías sin categorías' ),
	'Uncategorizedimages'       => array( 'Fichers sin categorizar', 'Fichers sin categorías', 'Imáchens sin categorías', 'Imachens sin categorizar', 'Imáchens sin categorizar' ),
	'Uncategorizedtemplates'    => array( 'Plantillas sin categorizar. Plantillas sin categorías' ),
	'Unusedcategories'          => array( 'Categorías no emplegatas', 'Categorías sin emplegar' ),
	'Unusedimages'              => array( 'Fichers no emplegatos', 'Fichers sin emplegar', 'Imáchens no emplegatas', 'Imáchens sin emplegar' ),
	'Wantedpages'               => array( 'Pachinas requiestas', 'Pachinas demandatas', 'Binclos crebatos', 'Binclos trencatos' ),
	'Wantedcategories'          => array( 'Categorías requiestas', 'Categorías demandatas' ),
	'Wantedfiles'               => array( 'Fichers requiestos', 'Fichers demandaus', 'Archibos requiestos', 'Archibos demandatos' ),
	'Wantedtemplates'           => array( 'Plantillas requiestas', 'Plantillas demandatas' ),
	'Mostlinked'                => array( 'Pachinas más enlazatas', 'Pachinas más vinculatas' ),
	'Mostlinkedcategories'      => array( 'Categorías más emplegatas', 'Categorías más enlazatas', 'Categorías más binculatas' ),
	'Mostlinkedtemplates'       => array( 'Plantillas más emplegatas', 'Plantillas más enlazatas', 'Plantillas más binculatas' ),
	'Mostimages'                => array( 'Fichers más emplegatos', 'Imáchens más emplegatas', 'Imachens más emplegatas' ),
	'Mostcategories'            => array( 'Pachinas con más categorías' ),
	'Mostrevisions'             => array( 'Pachinas con más edicions', 'Pachinas con más edizions', 'Pachinas más editatas', 'Pachinas con más bersions' ),
	'Fewestrevisions'           => array( 'Pachinas con menos edicions', 'Pachinas con menos edizions', 'Pachinas menos editatas', 'Pachinas con menos bersions' ),
	'Shortpages'                => array( 'Pachinas más curtas' ),
	'Longpages'                 => array( 'Pachinas más largas' ),
	'Newpages'                  => array( 'Pachinas nuevas', 'Pachinas recients', 'Pachinas nuebas', 'Pachinas más nuebas', 'Pachinas más rezients', 'Pachinas rezients' ),
	'Ancientpages'              => array( 'Pachinas más viellas', 'Pachinas más antigas', 'Pachinas más biellas', 'Pachinas biellas', 'Pachinas antigas' ),
	'Deadendpages'              => array( 'Pachinas sin salida', 'Pachinas sin de salida' ),
	'Protectedpages'            => array( 'Pachinas protechitas', 'Pachinas protechidas' ),
	'Protectedtitles'           => array( 'Títols protechitos', 'Títols protexitos', 'Títols protechius' ),
	'Allpages'                  => array( 'Todas as pachinas' ),
	'Prefixindex'               => array( 'Pachinas por prefixo', 'Mirar por prefixo' ),
	'Ipblocklist'               => array( 'Lista d\'IPs bloqueyatas', 'Lista d\'IPs bloquiatas', 'Lista d\'adrezas IP bloqueyatas', 'Lista d\'adrezas IP bloquiatas' ),
	'Specialpages'              => array( 'Pachinas especials', 'Pachinas espezials' ),
	'Contributions'             => array( 'Contrebucions', 'Contrebuzions' ),
	'Emailuser'                 => array( 'Ninvía mensache', 'Nimbía mensache' ),
	'Confirmemail'              => array( 'Confirmar e-mail' ),
	'Movepage'                  => array( 'TresladarPachina', 'Renombrar pachina', 'Mober pachina', 'Tresladar pachina' ),
	'Blockme'                   => array( 'Bloqueya-me' ),
	'Booksources'               => array( 'Fuents de libros' ),
	'Categories'                => array( 'Categorías' ),
	'Export'                    => array( 'Exportar' ),
	'Version'                   => array( 'Versión', 'Bersión' ),
	'Allmessages'               => array( 'Totz os mensaches', 'Toz os mensaches' ),
	'Log'                       => array( 'Rechistro', 'Rechistros' ),
	'Blockip'                   => array( 'Bloqueyar' ),
	'Undelete'                  => array( 'Restaurar' ),
	'Import'                    => array( 'Importar' ),
	'Unwatchedpages'            => array( 'Pachinas no cosiratas', 'Pachinas sin cosirar' ),
	'Mypage'                    => array( 'A mía pachina', 'A mía pachina d\'usuario' ),
	'Mytalk'                    => array( 'A mía descusión', 'A mía pachina de descusión' ),
	'Mycontributions'           => array( 'As mías contrebucions', 'As mías contrebuzions' ),
	'Listadmins'                => array( 'Lista d\'almenistradors' ),
	'Listbots'                  => array( 'Lista de botz', 'Lista de bots' ),
	'Popularpages'              => array( 'Pachinas populars', 'Pachinas más populars' ),
	'Search'                    => array( 'Mirar' ),
	'Resetpass'                 => array( 'Cambiar contrasenya' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Subrayar os vinclos:',
'tog-highlightbroken'         => 'Formateyar os vinclos trencatos <a href="" class="new"> d\'ista traza </a> (alternativa: asinas <a href="" class="internal">?</a>).',
'tog-justify'                 => 'Achustar parrafos',
'tog-hideminor'               => 'Amagar edizions menors en a pachina de "zaguers cambeos"',
'tog-hidepatrolled'           => 'Amagar as edizions patrullatas en os zaguers cambeos',
'tog-newpageshidepatrolled'   => "Amagar as pachinas patrulladas d'a lista de pachinas nuevas",
'tog-extendwatchlist'         => "Expandir a lista de seguimiento t'amostrar toz os cambeos, no nomás os más rezients.",
'tog-usenewrc'                => 'Zaguers cambeos con presentazión amillorada (cal JavaScript)',
'tog-numberheadings'          => 'Numerar automaticament os encabezaus',
'tog-showtoolbar'             => "Amostrar a barra de ferramientas d'edizión (cal JavaScript)",
'tog-editondblclick'          => 'Autibar edizión de pachinas fendo-ie doble click (cal JavaScript)',
'tog-editsection'             => 'Autibar a edizión por sezions usando os binclos [editar]',
'tog-editsectiononrightclick' => "Autibar a edizión de sezions punchando con o botón dreito d'a rateta <br /> en os títols de sezions (cal JavaScript)",
'tog-showtoc'                 => "Amostrar l'endice (ta pachinas con más de 3 seccions)",
'tog-rememberpassword'        => 'Remerar a parola de paso entre sesions',
'tog-watchcreations'          => 'Cosirar as pachinas que creye',
'tog-watchdefault'            => 'Cosirar as pachinas que edite',
'tog-watchmoves'              => 'Cosirar as pachinas que treslade',
'tog-watchdeletion'           => 'Cosirar as pachinas que borre',
'tog-minordefault'            => 'Siñalar por defeuto totas as edizions como menors',
'tog-previewontop'            => "Amostrar l'anvista previa antes d'o quatrón d'edición",
'tog-previewonfirst'          => "Amostrar l'anvista previa de l'articlo en a primera edición",
'tog-nocache'                 => "Desautibar a ''caché'' de pachinas",
'tog-enotifwatchlistpages'    => 'Rezibir un correu cuan se faigan cambios en una pachina cosirata por yo',
'tog-enotifusertalkpages'     => 'Nimbiar-me un correu cuan cambee a mía pachina de descusión',
'tog-enotifminoredits'        => 'Nimbiar-me un correu tamién cuan bi aiga edizions menors de pachinas',
'tog-enotifrevealaddr'        => 'Fer veyer a mía adreza de correu-e en os correus de notificación',
'tog-shownumberswatching'     => "Amostrar o numero d'usuarios que cosiran un articlo",
'tog-oldsig'                  => "Bista prebia d'a siñadura:",
'tog-fancysig'                => 'Tratar as siñaduras como wikitesto (sin de binclo automatico)',
'tog-externaleditor'          => "Fer serbir l'editor esterno por defeuto (nomás ta espiertos, cal confegurar o suyo ordenador).",
'tog-externaldiff'            => 'Fer serbir o bisualizador de cambeos esterno por defeuto (nomás ta espiertos, cal confegurar o suyo ordenador)',
'tog-showjumplinks'           => 'Autibar binclos d\'azesibilidat "blincar enta"',
'tog-uselivepreview'          => 'Autibar prebisualizazión automatica (cal JavaScript) (Esperimental)',
'tog-forceeditsummary'        => 'Abisar-me cuan o campo de resumen siga buedo.',
'tog-watchlisthideown'        => 'Amagar as mías edizions en a lista de seguimiento',
'tog-watchlisthidebots'       => 'Amagar edizions de bots en a lista de seguimiento',
'tog-watchlisthideminor'      => 'Amagar edizions menors en a lista de seguimiento',
'tog-watchlisthideliu'        => 'Amagar en a lista de seguimiento as edizions feitas por usuarios rechistratos',
'tog-watchlisthideanons'      => 'Amagar en a lista de seguimiento as edizions feitas por usuarios anonimos.',
'tog-watchlisthidepatrolled'  => 'Amagar as edizions patrullatas en a lista de seguimiento',
'tog-nolangconversion'        => 'Desautibar conversión de bariants',
'tog-ccmeonemails'            => 'Rezibir copias de os correus que nimbío ta atros usuarios',
'tog-diffonly'                => "No amostrar o conteniu d'a pachina debaxo d'as esferenzias",
'tog-showhiddencats'          => 'Amostrar categorías amagatas',
'tog-norollbackdiff'          => 'No amostrar as diferenzias dimpués de rebertir',

'underline-always'  => 'Siempre',
'underline-never'   => 'Nunca',
'underline-default' => "Confegurazión por defeuto d'o nabegador",

# Font style option in Special:Preferences
'editfont-style'     => "Tipo de letra de l'aria d'edizión:",
'editfont-default'   => "O predeterminau d'o nabegador",
'editfont-monospace' => 'Tipo de letra monoespaziada',
'editfont-sansserif' => 'Tipo de letra sans-serif',
'editfont-serif'     => 'Tipo de letra Serif',

# Dates
'sunday'        => 'domingo',
'monday'        => 'luns',
'tuesday'       => 'martes',
'wednesday'     => 'miércols',
'thursday'      => 'chueves',
'friday'        => 'biernes',
'saturday'      => 'sabado',
'sun'           => 'dom',
'mon'           => 'lun',
'tue'           => 'mar',
'wed'           => 'mie',
'thu'           => 'chu',
'fri'           => 'vie',
'sat'           => 'sab',
'january'       => 'chinero',
'february'      => 'febrero',
'march'         => 'marzo',
'april'         => 'abril',
'may_long'      => 'mayo',
'june'          => 'chunio',
'july'          => 'chulio',
'august'        => 'agosto',
'september'     => 'setiembre',
'october'       => 'octubre',
'november'      => 'noviembre',
'december'      => 'aviento',
'january-gen'   => 'de chinero',
'february-gen'  => 'de febrero',
'march-gen'     => 'de marzo',
'april-gen'     => "d'abril",
'may-gen'       => 'de mayo',
'june-gen'      => 'de chunio',
'july-gen'      => 'de chulio',
'august-gen'    => "d'agosto",
'september-gen' => 'de setiembre',
'october-gen'   => "d'octubre",
'november-gen'  => 'de noviembre',
'december-gen'  => "d'aviento",
'jan'           => 'chi',
'feb'           => 'feb',
'mar'           => 'mar',
'apr'           => 'abr',
'may'           => 'may',
'jun'           => 'chun',
'jul'           => 'chul',
'aug'           => 'ago',
'sep'           => 'set',
'oct'           => 'oct',
'nov'           => 'nov',
'dec'           => 'avi',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Categoría|Categorías}}',
'category_header'                => 'Articlos en a categoría "$1"',
'subcategories'                  => 'Subcategorías',
'category-media-header'          => 'Contenius multimedia en a categoría "$1"',
'category-empty'                 => "''Ista categoría no tiene por agora garra articlo ni conteniu multimedia''",
'hidden-categories'              => '{{PLURAL:$1|Categoría amagata|Categorías amagatas}}',
'hidden-category-category'       => 'Categorías amagatas',
'category-subcat-count'          => "{{PLURAL:$2|Ista categoría contiene nomás a siguient subcategoría.|Ista categoría encluye {{PLURAL:$1|a siguient subcategoría|as siguients $1 subcategorías}}, d'un total de $2.}}",
'category-subcat-count-limited'  => 'Ista categoría contiene {{PLURAL:$1|a siguient subcategoría|as siguients $1 subcategorías}}.',
'category-article-count'         => "{{PLURAL:$2|Ista categoría nomás encluye a pachina siguient.|{{PLURAL:$1|A pachina siguient fa parte|As pachinas siguients fan parte}} d'esta categoría, d'un total de $2.}}",
'category-article-count-limited' => "{{PLURAL:$1|A pachina siguient fa parte|As $1 pachinas siguients fan parte}} d'ista categoría.",
'category-file-count'            => "{{PLURAL:$2|Ista categoría nomás contiene l'archibo siguient.|{{PLURAL:$1|L'archibo siguient fa parte|Os $1 archibos siguients fan parte}} d'ista categoría, d'un total de $2.}}",
'category-file-count-limited'    => "{{PLURAL:$1|L'archibo siguient fa parte|Os $1 archibos siguients fan parte}} d'ista categoría.",
'listingcontinuesabbrev'         => 'cont.',
'index-category'                 => 'Pachinas indexadas',
'noindex-category'               => 'Pachinas sin indexar',

'mainpagetext'      => "'''O programa MediaWiki s'ha instalato correutament.'''",
'mainpagedocfooter' => "Consulta a [http://meta.wikimedia.org/wiki/Help:Contents Guía d'usuario] ta mirar informazión sobre cómo usar o software wiki.

== Ta prenzipiar ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Lista de carauteristicas confegurables]
* [http://www.mediawiki.org/wiki/Manual:FAQ Preguntas cutianas sobre MediaWiki (FAQ)]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Lista de correu sobre ta anunzios de MediaWiki]",

'about'         => 'Informazión sobre',
'article'       => 'Articlo',
'newwindow'     => "(s'ubre en una nueva finestra)",
'cancel'        => 'Cancelar',
'moredotdotdot' => 'Más...',
'mypage'        => 'A mía pachina',
'mytalk'        => 'Pachina de descusión',
'anontalk'      => "Pachina de descusión d'ista IP",
'navigation'    => 'Navego',
'and'           => '&#32;y',

# Cologne Blue skin
'qbfind'         => 'Mirar',
'qbbrowse'       => 'Nabegar',
'qbedit'         => 'Editar',
'qbpageoptions'  => 'Ista pachina',
'qbpageinfo'     => 'Contexto',
'qbmyoptions'    => 'Pachinas propias',
'qbspecialpages' => 'Pachinas especials',
'faq'            => 'Preguntas freqüents (FAQ)',
'faqpage'        => 'Project:Preguntas freqüents',

# Vector skin
'vector-action-addsection'   => 'Adhibir nueva sección',
'vector-action-delete'       => 'Borrar',
'vector-action-move'         => 'Tresladar',
'vector-action-protect'      => 'Protecher',
'vector-action-undelete'     => 'Restaurar',
'vector-action-unprotect'    => 'Desprotecher',
'vector-namespace-category'  => 'Categoría',
'vector-namespace-help'      => "Pachina d'aduya",
'vector-namespace-image'     => 'Fichero',
'vector-namespace-main'      => 'Pachina',
'vector-namespace-media'     => 'Pachina multimedia',
'vector-namespace-mediawiki' => 'Mensache',
'vector-namespace-project'   => "Pachina d'o prochecto",
'vector-namespace-special'   => 'Pachina especial',
'vector-namespace-talk'      => 'Discusión',
'vector-namespace-template'  => 'Plantilla',
'vector-namespace-user'      => "Pachina d'usuario",
'vector-view-create'         => 'Creyar',
'vector-view-edit'           => 'Editar',
'vector-view-history'        => "Amostrar l'historial",
'vector-view-view'           => 'Leyer',
'vector-view-viewsource'     => 'Veyer o codigo fuent',
'actions'                    => 'Accions',
'namespaces'                 => 'Espacios de nombres',
'variants'                   => 'Variants',

'errorpagetitle'    => 'Error',
'returnto'          => 'Tornar ta $1.',
'tagline'           => 'De {{SITENAME}}',
'help'              => 'Aduya',
'search'            => 'Mirar',
'searchbutton'      => 'Mirar-lo',
'go'                => 'Ir-ie',
'searcharticle'     => 'Ir-ie',
'history'           => "Historial d'a pachina",
'history_short'     => 'Historial',
'updatedmarker'     => 'esbiellato dende a zaguera besita',
'info_short'        => 'Informazión',
'printableversion'  => 'Versión ta imprentar',
'permalink'         => 'Vinclo permanent',
'print'             => 'Imprentar',
'edit'              => 'Editar',
'create'            => 'Creyar',
'editthispage'      => 'Editar ista pachina',
'create-this-page'  => 'Creyar ista pachina',
'delete'            => 'Borrar',
'deletethispage'    => 'Borrar ista pachina',
'undelete_short'    => 'Restaurar {{PLURAL:$1|una edizión|$1 edizions}}',
'protect'           => 'Protecher',
'protect_change'    => 'cambiar',
'protectthispage'   => 'Protecher ista pachina',
'unprotect'         => 'esprotecher',
'unprotectthispage' => 'Esprotecher ista pachina',
'newpage'           => 'Pachina nueva',
'talkpage'          => "Descusión d'ista pachina",
'talkpagelinktext'  => 'Descutir',
'specialpage'       => 'Pachina Espezial',
'personaltools'     => 'Ferramientas personals',
'postcomment'       => 'Nueva sección',
'articlepage'       => "Beyer l'articlo",
'talk'              => 'Descusión',
'views'             => 'Visualizacions',
'toolbox'           => 'Ferramientas',
'userpage'          => "Beyer a pachina d'usuario",
'projectpage'       => "Beyer a pachina d'o procheuto",
'imagepage'         => "Beyer a pachina de l'archibo",
'mediawikipage'     => "Beyer a pachina d'o mensache",
'templatepage'      => "Beyer a pachina d'a plantilla",
'viewhelppage'      => "Beyer a pachina d'aduya",
'categorypage'      => "Beyer a pachina d'a categoría",
'viewtalkpage'      => 'Beyer a pachina de descusión',
'otherlanguages'    => 'En atras luengas',
'redirectedfrom'    => '(Reendrezato dende $1)',
'redirectpagesub'   => 'Pachina reendrezata',
'lastmodifiedat'    => "Zaguera edición d'ista pachina o $1 a las $2.",
'viewcount'         => 'Ista pachina ha tenito {{PLURAL:$1|una besita|$1 besitas}}.',
'protectedpage'     => 'Pachina protechita',
'jumpto'            => 'Ir ta:',
'jumptonavigation'  => 'navego',
'jumptosearch'      => 'busca',
'view-pool-error'   => "Desincuse, os servidors son agora sobrecargaus.
Masiaus usuarios son mirando d'acceder ta ista pachina.
Aguarde una mica antes de tornar a acceder ta ista pachina.

$1",

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Información sobre {{SITENAME}}',
'aboutpage'            => 'Project:Sobre',
'copyright'            => 'O conteniu ye disponible baixo a licencia $1.',
'copyrightpage'        => "{{ns:project}}:Dreitos d'autor",
'currentevents'        => 'Actualidat',
'currentevents-url'    => 'Project:Actualidat',
'disclaimers'          => 'Alvertencias chenerals',
'disclaimerpage'       => 'Project:Alvertencias chenerals',
'edithelp'             => 'Aduya ta editar pachinas',
'edithelppage'         => "Help:Cómo s'edita una pachina",
'helppage'             => 'Help:Aduya',
'mainpage'             => 'Portalada',
'mainpage-description' => 'Portalada',
'policy-url'           => 'Project:Politicas y normas',
'portal'               => "Portal d'a comunidat",
'portal-url'           => "Project:Portal d'a comunidat",
'privacy'              => 'Politica de privacidat',
'privacypage'          => 'Project:Politica de privacidat',

'badaccess'        => 'Error de premisos',
'badaccess-group0' => "No tiene premisos ta fer l'aizión que ha demandato.",
'badaccess-groups' => "L'aizión que ha demandato no ye premitita que ta os usuarios {{PLURAL:$2|d'a colla|d'as collas}}: $1.",

'versionrequired'     => 'Ye precisa a versión $1 de MediaWiki',
'versionrequiredtext' => 'Ye precisa a versión $1 de MediaWiki ta fer servir ista pachina. Ta más información, consulte [[Special:Version]]',

'ok'                      => "D'alcuerdo",
'retrievedfrom'           => 'Obtenito de "$1"',
'youhavenewmessages'      => 'Tiene $1 ($2).',
'newmessageslink'         => 'mensaches nuevos',
'newmessagesdifflink'     => 'Esferencias con a versión anterior',
'youhavenewmessagesmulti' => 'Tiene nuevos mensaches en $1',
'editsection'             => 'editar',
'editold'                 => 'editar',
'viewsourceold'           => 'veyer o codigo fuent',
'editlink'                => 'editar',
'viewsourcelink'          => 'veyer o codigo fuent',
'editsectionhint'         => 'Editar a sección: $1',
'toc'                     => 'Contenius',
'showtoc'                 => 'amostrar',
'hidetoc'                 => 'amagar',
'thisisdeleted'           => 'Quiere amostrar u restaurar $1?',
'viewdeleted'             => 'Quiere amostrar $1?',
'restorelink'             => '{{PLURAL:$1|una edizión borrata|$1 edizions borratas}}',
'feedlinks'               => 'Sendicazión como fuent de notizias:',
'feed-invalid'            => 'Sendicazión como fuent de notizias no conforme.',
'feed-unavailable'        => 'As canals de sendicazión no son disponibles.',
'site-rss-feed'           => 'Canal RSS $1',
'site-atom-feed'          => 'Canal Atom $1',
'page-rss-feed'           => 'Canal RSS "$1"',
'page-atom-feed'          => 'Canal Atom "$1"',
'red-link-title'          => '$1 (a pachina encara no existe)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Pachina',
'nstab-user'      => "Pachina d'usuario",
'nstab-media'     => 'Pachina multimedia',
'nstab-special'   => 'Pachina especial',
'nstab-project'   => "Pachina d'o prochecto",
'nstab-image'     => 'Fichero',
'nstab-mediawiki' => 'Mensache',
'nstab-template'  => 'Plantilla',
'nstab-help'      => 'Aduya',
'nstab-category'  => 'Categoría',

# Main script and global functions
'nosuchaction'      => 'No se reconoxe ista aizión',
'nosuchactiontext'  => "L'azión espezificata por a URL no ye conforme. 
Talment s'aya entibocau en escribir a URL, u aya seguiu un binclo incorreuto. 
Tamién podría endicar un bug en o software emplegato por {{SITENAME}}.",
'nosuchspecialpage' => 'No esiste ixa pachina espezial',
'nospecialpagetext' => '<strong>A pachina espezial que ha demandato no esiste.</strong>

Puede trobar una lista de pachinas espezials en [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error'                => 'Error',
'databaseerror'        => "Error d'a base de datos",
'dberrortext'          => 'Ha suzedito una error de sintaxis en una consulta á la base de datos.
Isto podría endicar una error en o programa.
A zaguera consulta estió: 
<blockquote><tt>$1</tt></blockquote> 
dende adintro d\'a funzión "<tt>$2</tt>". 
A error retornata por a base de datos estió "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'S\'ha produzito una error de sintaxis en una consulta á la base de datos. 
A zaguera consulta estió:
"$1"
dende adintro d\'a funzión "$2".
A base de datos retornó a error "$3: $4"',
'laggedslavemode'      => "Pare cuenta: podrían faltar as zagueras edizions d'ista pachina.",
'readonly'             => 'Base de datos bloqueyata',
'enterlockreason'      => "Esplique a causa d'o bloqueyo, encluyendo una estimazión de cuán se produzirá o desbloqueyo",
'readonlytext'         => "A base de datos de {{SITENAME}} ye bloqueyata temporalment, probablement por mantenimiento rutinario, dimpués d'ixo tornará á la normalidat.
L'almenistrador que la bloqueyó dió ista esplicazión:
<p>$1",
'missing-article'      => "No s'ha trobato en a base de datos o texto d'una pachina que i habría d'haber trobato, clamada \"\$1\" \$2.

Cal que a razón d'isto siga que s'ha seguito un diff no esviellato u un vinclo ta l'historial d'una pachina que ya s'ha borrato.

Si no ye iste o caso, talment haiga trobato un error en o software. 
Por favor, comunique-lo a un [[Special:ListUsers/sysop|almenistrador]] endicando-le l'adreza URL.",
'missingarticle-rev'   => '(versión#: $1)',
'missingarticle-diff'  => '(Esf: $1, $2)',
'readonly_lag'         => 'A base de datos ye bloqueyata temporalment entre que os serbidors se sincronizan.',
'internalerror'        => 'Error interna',
'internalerror_info'   => 'Error interna: $1',
'fileappenderrorread'  => 'No s\'ha puesto leyer "$1" durant a inserción.',
'fileappenderror'      => 'No s\'ha puesto adhibir "$1" a "$2".',
'filecopyerror'        => 'No s\'ha puesto copiar l\'archibo "$1" ta "$2".',
'filerenameerror'      => 'No s\'ha puesto cambiar o nombre de l\'archibo "$1" á "$2".',
'filedeleteerror'      => 'No s\'ha puesto borrar l\'archibo "$1".',
'directorycreateerror' => 'No s\'ha puesto crear o direutorio "$1".',
'filenotfound'         => 'No s\'ha puesto trobar l\'archibo "$1".',
'fileexistserror'      => 'No s\'ha puesto escribir en l\'archibo "$1": l\'archibo ya esiste',
'unexpected'           => 'Balura no prebista: "$1"="$2".',
'formerror'            => 'Error: no se podió nimbiar o formulario',
'badarticleerror'      => 'Ista aizión no se puede no se puede reyalizar en ista pachina.',
'cannotdelete'         => 'No s\'ha puesto borrar pachina u fichero "$1". Talment belatro usuario l\'ha borrato dinantes.',
'badtitle'             => 'Títol incorreuto',
'badtitletext'         => "O títol d'a pachina demandata ye buedo, incorreuto, u tiene un binclo interwiki mal feito. Puede contener uno u más carauters que no se pueden fer serbir en títols.",
'perfcached'           => 'Os datos que siguen son en caché, y podrían no estar esbiellatos:',
'perfcachedts'         => 'Istos datos se troban en a caché, que estió esbiellata por zaguer begada o $1.',
'querypage-no-updates' => "S'han desautibato as autualizazions d'ista pachina. Por ixo, no s'esta esbiellando os datos.",
'wrong_wfQuery_params' => 'Parametros incorreutos ta wfQuery()<br />
Funzión: $1<br />
Consulta: $2',
'viewsource'           => 'Veyer o codigo fuent',
'viewsourcefor'        => 'ta $1',
'actionthrottled'      => 'Aizión afogata',
'actionthrottledtext'  => 'Como mesura contra lo "spam", bi ha un limite en o numero de vegadas que puede fer ista acción en un curto espacio de tiempo, y ha brincato d\'ixe limite. Aguarde bells menutos y prebe de fer-lo de nuevas.',
'protectedpagetext'    => 'Ista pachina ha estato protechita ta aprebenir a suya edizión.',
'viewsourcetext'       => "Puede beyer y copiar o codigo fuent d'ista pachina:",
'protectedinterface'   => "Ista pachina furne o testo d'a interfaz ta o software. Ye protechita ta pribar o bandalismo. Si creye que bi ha bella error, contaute con un almenistrador.",
'editinginterface'     => "'''Pare cuenta:''' Ye editando una pachina emplegata ta furnir o testo d'a interfaz de {{SITENAME}}. Os cambeos en ista pachina tendrán efeuto en l'aparenzia d'a interfaz ta os atros usuarios. Ta fer traduzions d'a interfaz, puede considerar fer serbir [http://translatewiki.net/wiki/Main_Page?setlang=an translatewiki.net], o procheuto de localizazión de MediaWiki.",
'sqlhidden'            => '(Consulta SQL amagata)',
'cascadeprotected'     => 'Ista pachina ye protechita y no se puede editar porque ye encluyita en {{PLURAL:$1|a siguient pachina|as siguients pachinas}}, que son protechitas con a opzión de "cascada": $2',
'namespaceprotected'   => "No tiene premiso ta editar as pachinas d'o espazio de nombres '''$1'''.",
'customcssjsprotected' => "No tiene premiso ta editar ista pachina porque contiene a confegurazión presonal d'atro usuario.",
'ns-specialprotected'  => "No ye posible editar as pachinas d'o espazio de nombres {{ns:special}}.",
'titleprotected'       => "Iste títol no puede creyar-se porque ye estato protechito por [[User:$1|$1]].
A razón data ye ''$2''.",

# Virus scanner
'virus-badscanner'     => "Confegurazión incorreuta: rastriador de birus esconoixito: ''$1''",
'virus-scanfailed'     => 'o rastreyo ha fallato (codigo $1)',
'virus-unknownscanner' => 'antibirus esconoixito:',

# Login and logout pages
'logouttext'                 => "'''Ha rematato a sesión.'''

Puede continar navegando por {{SITENAME}} anonimament, u puede [[Special:UserLogin|enzetar]] una nueva sesión con o mesmo nombre d'usuario u bell atro diferent. Pare cuenta que, entre que se limpia a caché d'o navegador, puet estar que bellas pachinas s'amuestren como si encara continase en a sesión anterior.",
'welcomecreation'            => "== ¡Bienbeniu(da), $1! ==
S'ha creyato a suya cuenta.
No xublide presonalizar [[Special:Preferences|as suyas preferenzias en {{SITENAME}}]].",
'yourname'                   => "Nombre d'usuario:",
'yourpassword'               => 'Palabra de paso:',
'yourpasswordagain'          => 'Torne á escribir a palabra de paso:',
'remembermypassword'         => "Remerar datos d'usuario entre sesions.",
'yourdomainname'             => 'Dominio:',
'externaldberror'            => "Bi abió una error d'autenticazión esterna d'a base de datos u bien no tiene premisos ta esbiellar a suya cuenta esterna.",
'login'                      => 'Encetar sesión',
'nav-login-createaccount'    => 'Encetar una sesión / creyar cuenta',
'loginprompt'                => "Ta rechistrar-se en {{SITENAME}} ha d'autibar as cookies en o nabegador.",
'userlogin'                  => 'Encetar una sesión / creyar cuenta',
'userloginnocreate'          => 'Enzetar una sesión',
'logout'                     => "Salir d'a sesión",
'userlogout'                 => 'Salir',
'notloggedin'                => 'No ha dentrato en o sistema',
'nologin'                    => "No tiene garra cuenta? '''$1'''.",
'nologinlink'                => 'Creyar una nueva cuenta',
'createaccount'              => 'Creyar una nueva cuenta',
'gotaccount'                 => "Tiene ya una cuenta? '''$1'''.",
'gotaccountlink'             => 'Identificar-se y enzetar sesión',
'createaccountmail'          => 'por correu electronico',
'badretype'                  => 'As palabras de paso que ha escrito no son iguals.',
'userexists'                 => 'Ixe nombre ya ye en uso. Por fabor, meta un nombre diferent.',
'loginerror'                 => 'Error en enzetar a sesión',
'createaccounterror'         => "No s'ha puesto creyar a cuenta: $1",
'nocookiesnew'               => "A cuenta d'usuario s'ha creyata, pero encara no ye indentificato. {{SITENAME}} fa serbir <em>cookies</em> ta identificar á os usuario rechistratos, pero pareix que las tiene desautibatas. Por fabor, autibe-las e identifique-se con o suyo nombre d'usuario y palabra de paso.",
'nocookieslogin'             => "{{SITENAME}} fa serbir <em>cookies</em> ta la identificazión d'usuarios. Tiene as <em>cookies</em> desactivatas en o suyo navegador. Por favor, active-las y prebe d'identificar-se de nuevas.",
'noname'                     => "No ha escrito un nombre d'usuario correuto.",
'loginsuccesstitle'          => "S'ha identificato correutament",
'loginsuccess'               => 'Ha enzetato una sesión en {{SITENAME}} como "$1".',
'nosuchuser'                 => 'No bi ha garra usuario clamato "$1".
Os nombres d\'usuario son sensibles á las mayusclas.
Comprebe si ha escrito bien o nombre u [[Special:UserLogin/signup|creye una nueva cuenta d\'usuario]].',
'nosuchusershort'            => 'No bi ha garra usuario con o nombre "<nowiki>$1</nowiki>". Comprebe si o nombre ye bien escrito.',
'nouserspecified'            => "Ha d'escribir un nombre d'usuario.",
'login-userblocked'          => "Iste usuario ye bloqueyau. No se permite l'inicio de sesión.",
'wrongpassword'              => 'A palabra de paso endicata no ye correuta. Prebe unatra begada.',
'wrongpasswordempty'         => 'No ha escrito garra palabra de paso. Prebe unatra begada.',
'passwordtooshort'           => 'As contraseñas han de tener á lo menos {{PLURAL:$1|1 carácter|$1 carácters}}.',
'password-name-match'        => "A contrasenya ha d'estar diferent d'o suyo nombre d'usuario.",
'mailmypassword'             => 'Ninviar una nueva contrasenya por correu electronico',
'passwordremindertitle'      => 'Nueva contrasenya temporal de {{SITENAME}}',
'passwordremindertext'       => 'Bell un (probablement vusté mesmo, dende l\'adreza IP $1) demandó una nueva contrasenya ta la suya cuenta en {{SITENAME}} ($4). S\'ha creyato una nueva contrasenya temporal ta l\'usuario "$2", que ye "$3".
Si isto ye o que quereba, ha d\'encetar agora una sesión y trigar una nueva contrasenya.
A suya contrasenya temporal circumducirá en {{PLURAL:$5|un día|$5 días}}

Si estió bell atro qui fació ista demanda, u ya se\'n ha alcordau d\'a contrasenya y ya no deseya cambiar-la, puet ignorar iste mensache y continar fendo servir l\'antiga contrasenya.',
'noemail'                    => 'No bi ha garra adreza de correu electronico rechistrada ta "$1".',
'noemailcreate'              => "Has d'indicar una adreza de correu electronico valida",
'passwordsent'               => 'Una nueva contrasenya plega de ninviar-se ta o correu electronico de "$1".
Por favor, identifique-se un atra vez malas que la reculla.',
'blocked-mailpassword'       => "A suya adreza IP ye bloqueyata y, ta pribar abusos, no se li premite emplegar d'a funzión de recuperazión de palabras de paso.",
'eauthentsent'               => "S'ha nimbiato un correu electronico de confirmazión ta l'adreza espezificata. Antes que no se nimbíe dengún atro correu ta ixa cuenta, ha de confirmar que ixa adreza te pertenexe. Ta ixo, cal que siga as instruzions que trobará en o mensache.",
'throttled-mailpassword'     => "Ya s'ha nimbiato un correu recordatorio con a suya palabra de paso fa menos de {{PLURAL:$1|1 ora|$1 oras}}. Ta escusar abusos, nomás se nimbia un recordatorio cada {{PLURAL:$1|ora|$1 oras}}.",
'mailerror'                  => 'Error en nimbiar o correu: $1',
'acct_creation_throttle_hit' => 'Os besitants ta iste wiki dende a suya adreza IP han creyato ya {{PLURAL:$1|1 cuenta|$1 cuentas}} en o zaguer día, o que ye o masimo premitito en iste periodo de tiempo. 
Por ixo, no se pueden creyar más cuentas por agora dende ixa adreza IP.',
'emailauthenticated'         => 'A suya adreza de correu-e estió confirmata o $2 á las $3.',
'emailnotauthenticated'      => "A suya adreza de correu-e <strong> no ye encara confirmata </strong>. No podrá recullir garra correu t'as siguients funzions.",
'noemailprefs'               => 'Escriba una adreza de correu-e ta autibar istas carauteristicas.',
'emailconfirmlink'           => 'Confirme a suya adreza de correu-e',
'invalidemailaddress'        => "No se puet azeutar l'adreza de correu-e pues pareix que tien un formato no conforme. Escriba una adreza bien formateyata, u deixe buedo ixe campo.",
'accountcreated'             => 'Cuenta creyata',
'accountcreatedtext'         => "S'ha creyato a cuenta d'usuario de $1.",
'createaccount-title'        => 'Creyar una cuenta en {{SITENAME}}',
'createaccount-text'         => 'Belún ha creyato una cuenta con o nombre "$2" en {{SITENAME}} ($4), con a palabra de paso "$3" y endicando a suya adreza de correu. Abría de dentrar-ie agora y cambiar a suya palabra de paso.

Si a cuenta s\'ha creyato por error, simplament innore iste mensache.',
'usernamehasherror'          => "O nombre d'usuario no puet contener simbolos hash",
'login-throttled'            => 'Ha feito masiaus intentos ta enzetar una sesión. Por fabor, aspere antes de prebar de fer-lo unatra begada.',
'loginlanguagelabel'         => 'Idioma: $1',
'suspicious-userlogout'      => "S'ha denegau a suya demanda de zarrar a sesión ya que pareix que la ninvió un navegador defectuoso u bel proxy amagau.",

# Password reset dialog
'resetpass'                 => 'Cambiar a palabra de paso',
'resetpass_announce'        => 'Ha encetato una sesión con una contrasenya temporal que se le ninvió por correu. Por favor, escriba aquí una nueva contrasenya:',
'resetpass_text'            => '<!-- Adiba aquí o testo -->',
'resetpass_header'          => "Cambiar a palabra de paso d'a cuenta",
'oldpassword'               => 'Palabra de paso antiga:',
'newpassword'               => 'Nueva contrasenya:',
'retypenew'                 => 'Torne á escribir a nueva contrasenya:',
'resetpass_submit'          => 'Cambiar a palabra de paso e identificar-se',
'resetpass_success'         => 'A suya palabra de paso ya ye cambiata. Agora ya puede dentrar-ie...',
'resetpass_forbidden'       => 'No se pueden cambiar as palabras de paso.',
'resetpass-no-info'         => 'Debe identificar-se como usuario ta poder azeder dreitament ta ista pachina.',
'resetpass-submit-loggedin' => 'Cambiar a palabra de paso',
'resetpass-submit-cancel'   => 'Cancelar',
'resetpass-wrong-oldpass'   => 'A contrasenya actual u temporal no ye conforme. 
Talment ya ha cambiato a suya contrasenya u ha demandato una nueva contrasenya temporal.',
'resetpass-temp-password'   => 'Palabra de paso temporal:',

# Edit page toolbar
'bold_sample'     => 'Testo en negreta',
'bold_tip'        => 'Texto en negreta',
'italic_sample'   => 'Texto en cursiva',
'italic_tip'      => 'Texto en cursiva',
'link_sample'     => "Títol d'o vinclo",
'link_tip'        => 'Vinclo interno',
'extlink_sample'  => "http://www.example.com Títol d'o vinclo",
'extlink_tip'     => 'Vinclo externo  (recuerde o prefixo http://)',
'headline_sample' => 'Texto de subtítol',
'headline_tip'    => 'Soztítol de livel 2',
'math_sample'     => 'Escriba aquí a formula',
'math_tip'        => 'Formula matematica (LaTeX)',
'nowiki_sample'   => 'Escriba aquí texto sin formateyar',
'nowiki_tip'      => 'Ignorar o formato wiki',
'image_sample'    => 'Exemplo.jpg',
'image_tip'       => 'Imachen incorporada',
'media_sample'    => 'Exemplo.ogg',
'media_tip'       => 'Vinclo ta un fichero',
'sig_tip'         => 'A suya sinyadura con marca de calendata y hora',
'hr_tip'          => 'Linia horizontal (faiga-ne un emplego amoderau)',

# Edit pages
'summary'                          => 'Resumen:',
'subject'                          => 'Tema/títol:',
'minoredit'                        => 'He feito una edición menor',
'watchthis'                        => 'Cosirar ista pachina',
'savearticle'                      => 'Alzar pachina',
'preview'                          => 'Previsualización',
'showpreview'                      => 'Amostrar previsualización',
'showlivepreview'                  => 'Anvista previa',
'showdiff'                         => 'Amostrar cambeos',
'anoneditwarning'                  => "''Pare cuenta:'' No s'ha identificato con un nombre d'usuario. A suya adreza IP s'alzará en l'historial d'a pachina.",
'anonpreviewwarning'               => "''No s'ha identificau con una cuenta d'usuario. A suya adreza IP quedará rechistrada en l'historial d'edicions d'ista pachina.\"",
'missingsummary'                   => "'''Pare cuenta:''' No ha escrito garra resumen d'edición. Si puncha de nuevas en «{{MediaWiki:Savearticle}}» a suya edición se grabará sin resumen.",
'missingcommenttext'               => 'Por fabor, escriba o testo astí baxo.',
'missingcommentheader'             => "'''Pare cuenta:''' No ha escrito garra títol ta iste comentario. Si puncha de nuevas en \"Alzar\", a suya edición se grabará sin títol.",
'summary-preview'                  => "Veyer anvista previa d'o resumen:",
'subject-preview'                  => "Ambiesta previa d'o tema/títol:",
'blockedtitle'                     => "L'usuario ye bloqueyato",
'blockedtext'                      => "'''O suyo nombre d'usuario u adreza IP ye bloqueyato.'''

O bloqueyo lo fazió $1. 
A razón data ye ''$2''.

* Prenzipio d'o bloqueyo: $8
* Fin d'o bloqueyo: $6
* Indentificazión bloqueyata: $7

Puede contautar con $1 u con atro [[{{MediaWiki:Grouppage-sysop}}|almenistrador]] ta letigar sobre o bloqueyo.
No puede fer serbir o binclo 'nimbiar correu electronico ta iste usuario' si no ha rechistrato una adreza conforme de correu electronico en as suyas [[Special:Preferences|preferenzias]] y si no se l'ha bedau d'emplegar-la. A suya adreza IP autual ye $3, y o identificador d'o bloqueyo ye #$5. Por fabor encluiga ixos datos cuan faga cualsiquier consulta.",
'autoblockedtext'                  => "A suya adreza IP s'ha bloqueyata automaticament porque la eba feito serbir un atro usuario bloqueyato por \$1.

A razón d'o bloqueyo ye ista:

:''\$2''

* Prenzipio d'o bloqueyo: \$8
* Fin d'o bloqueyo: \$6
* Usuario que se prebaba de bloqueyar: \$7

Puede contautar con \$1 u con atro d'os [[{{MediaWiki:Grouppage-sysop}}|almenistradors]] ta litigar sobre o bloqueyo.

Pare cuenta que no puede emplegar a funzión \"Nimbiar correu electronico ta iste usuario\" si no tiene una adreza de correu electronico conforme rechistrada en as suyas [[Special:Preferences|preferenzias d'usuario]] u si se l'ha bedato d'emplegar ista funzión.

A suya adreza IP autual ye \$3, y o identificador de bloqueyo ye #\$5. Por fabor encluiga os datos anteriors cuan faga cualsiquier consulta.",
'blockednoreason'                  => "No s'ha dato garra causa",
'blockedoriginalsource'            => "Contino s'amuestra o codigo fuent de  '''$1''':",
'blockededitsource'                => "Contino s'amuestra o testo d'as suyas '''edizions''' á '''$1''':",
'whitelistedittitle'               => 'Cal enzetar una sesión ta poder editar.',
'whitelistedittext'                => 'Ha de $1 ta poder editar pachinas.',
'confirmedittext'                  => "Ha de confirmar a suya adreza de correu-e antis de poder editar pachinas. Por fabor, establa y confirme una adreza de correu-e a trabiés d'as suyas [[Special:Preferences|preferenzias d'usuario]].",
'nosuchsectiontitle'               => 'No se puede trobar ixa sección',
'nosuchsectiontext'                => "Ha mirau d'editar una sección que no existe.
Talment bell un l'haiga mobiu u borrau entre que vusté vesitaba a pachina.",
'loginreqtitle'                    => 'Cal que enzete una sesión',
'loginreqlink'                     => 'enzetar una sesión',
'loginreqpagetext'                 => 'Ha de $1 ta beyer atras pachinas.',
'accmailtitle'                     => 'A palabra de paso ha estato nimbiata.',
'accmailtext'                      => "S'ha ninviato a $2 una contrasenya ta [[User talk:$1|$1]] chenerata aliatoriament.

A contrasenya ta ista nueva cuenta la puet cambiar en a pachina ''[[Special:ChangePassword|cambiar contrasenya]]'' dimpués d'haber dentrato en ella.",
'newarticle'                       => '(Nuevo)',
'newarticletext'                   => "Ha siguito un vinclo ta una pachina que encara no existe.
Ta creyar a pachina, prencipie a escribir en a caixa d'abaixo (mire-se l'[[{{MediaWiki:Helppage}}|aduya]] ta más información).
Si ye plegau por error, punche o botón \"enta zaga\" d'o suyo navegador.",
'anontalkpagetext'                 => "----''Ista ye a pachina de descusión d'un usuario anonimo que encara no ha creyato una cuenta, u no l'ha feito serbir. Por ixo, emos d'emplegar a suya adreza IP ta identificar-lo/a. 
Barios usuarios pueden compartir una mesma adreza IP. 
Si busté ye un usuario anonimo y creye que l'han escrito comentarios no relebants, [[Special:UserLogin/signup|creye una cuenta]] u [[Special:UserLogin/signup|identifique-se]] ta pribar confusions futuras con atros usuarios anonimos.''",
'noarticletext'                    => 'Por agora no bi ha garra testo en ista pachina. Puet [[Special:Search/{{PAGENAME}}|mirar o títol d\'ista pachina]] en atras pachinas, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} mirar os rechistros relacionatos] u [{{fullurl:{{FULLPAGENAME}}|action=edit}} escribir ista pachina].',
'noarticletext-nopermission'       => 'Por l\'inte no i hai garra texto en ista pachina.
Puet [[Special:Search/{{PAGENAME}}|mirar iste títol]] en atras páginas,
u bien <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} mirar en os rechistros relacionatos]</span>.',
'userpage-userdoesnotexist'        => 'A cuenta d\'usuario "$1" no ye rechistrada. Piense si quiere creyar u editar ista pachina.',
'clearyourcache'                   => "'''Pare cuenta: Si quiere beyer os cambeos dimpués d'alzar l'archibo, puede estar que tienga que refrescar a caché d'o suyo nabegador ta beyer os cambeos.''' 

*'''Mozilla / Firefox / Safari:''' prete a tecla de ''Mayusclas'' mientras puncha ''Reload,'' u prete '''Ctrl-F5''' u '''Ctrl-R''' (''Command-R'' en un Macintosh); 
*'''Konqueror: ''' punche ''Reload'' u prete ''F5;'' 
*'''Opera:''' limpiar a caché en ''Tools → Preferences;'' 
*'''Internet Explorer:''' prete ''Ctrl'' mientres puncha ''Refresh,'' u prete ''Ctrl-F5.''",
'usercssyoucanpreview'             => "'''Consello:''' Faga serbir o botón «Amostrar prebisualizazión» ta prebar o nuebo css/js antes de grabar-lo.",
'userjsyoucanpreview'              => "'''Consello:''' Faiga servir o botón «Amostrar previsualización» ta prebar o nuebo css/js antes de grabar-lo.",
'usercsspreview'                   => "'''Remere que isto no ye que una prebisualizazión d'o suyo CSS d'usuario.'''
'''Encara no s'ha alzato!'''",
'userjspreview'                    => "'''Remere que sólo ye prebisualizando o suyo javascript d'usuario y encara no ye grabato!'''",
'userinvalidcssjstitle'            => "'''Pare cuenta:''' No bi ha garra aparenzia clamata \"\$1\". Remere que as pachinas presonalizatas .css y .js tienen un títol en minusclas, p.e. {{ns:user}}:Foo/monobook.css en cuenta de {{ns:user}}:Foo/Monobook.css.",
'updated'                          => '(Esbiellato)',
'note'                             => "'''Nota:'''",
'previewnote'                      => "'''Pare cuenta que isto no ye que l'anvista previa d'a pachina; os cambeos encara no s'ha alzato!'''",
'previewconflict'                  => "L'anvista previa li amostrará l'aparencia d'o texto dimpués d'alzar os cambeos.",
'session_fail_preview'             => "'''Ya lo sentimos, pero no emos puesto alzar a suya edizión por una perduga d'os datos de sesion. Por fabor, prebe de fer-lo una atra bez, y si encara no funziona, [[Special:UserLogout|salga d'a sesión]] y torne á identificar-se.'''",
'session_fail_preview_html'        => "'''Ya lo sentimos, pero no s'ha puesto procesar a suya edición por haber-se trafegato os datos de sesión.'''

''Como que {{SITENAME}} tiene l'HTML puro activato, s'ha amagato l'anviesta previa ta aprevenir ataques en JavaScript.''

'''Si ye mirando d'editar lechitimament, por favor, prebe una atra vegada. Si encara no funcionase alavez, prebe de [[Special:UserLogout|zarrar a sesión]] y dentrar-ie identificando-se de nuevas.'''",
'token_suffix_mismatch'            => "'''S'ha refusato a suya edizión porque o suyo client ha esbarafundiato os caráuters de puntuazión en o editor. A edizión s'ha refusata ta pribar a corrompizión d'a pachina de testo. Isto gosa escaizer cuan se fa serbir un serbizio de proxy defeutuoso alazetato en a web.'''",
'editing'                          => 'Editando $1',
'editingsection'                   => 'Editando $1 (sección)',
'editingcomment'                   => 'Editando $1 (nueva sección)',
'editconflict'                     => "Conflito d'edizión: $1",
'explainconflict'                  => "Bel atro usuario ha cambiato ista pachina dende que bustet prenzipió á editar-la.
O cuatrón de testo superior contiene o testo d'a pachina como ye autualment.
Os suyos cambeos s'amuestran en o cuatrón de testo inferior.
Abrá d'encorporar os suyos cambeos en o testo esistent.
'''Nomás''' o testo en o cuatrón superior s'alzará cuan prete o botón \"Alzar a pachina\".",
'yourtext'                         => 'O testo suyo',
'storedversion'                    => 'Versión almadazenata',
'nonunicodebrowser'                => "'''Pare cuenta: O suyo nabegador no cumple a norma Unicode. S'ha autibato un sistema d'edizión alternatibo que li premitirá d'editar articlos con seguridat: os caráuters no ASCII aparixerán en a caxa d'edizión como codigos exadezimals.'''",
'editingold'                       => "'''Pare cuenta: Ye editando una versión antiga d'ista pachina. Si alza a pachina, totz os cambios feitos dende ixa revisión se perderán.'''",
'yourdiff'                         => 'Esferenzias',
'copyrightwarning'                 => "Por favor, pare cuenta en que todas as contrebucions a {{SITENAME}} se consideran publicatas baixo a licencia $2 (se veigan os detalles en $1). Si no deseya que atra chent corricha os suyos escritos sin piedat y los distribuiga librement, alavez, no habría de meter-los aquí. En publicar aquí, tamién ye declarando que vusté mesmo escribió iste texto y ye l'amo d'os dreitos d'autor, u bien lo copió dende o dominio publico u de cualsiquier atra fuent libre.
'''NO COPIE SIN PREMISO ESCRITOS CON DREITOS D'AUTOR!'''<br />",
'copyrightwarning2'                => "Por fabor, pare cuenta que todas as contrebuzions á {{SITENAME}} pueden estar editatas, cambiatas u borratas por atros colaboradors. Si no deseya que atra chent corricha os suyos escritos sin piedat y los destribuiga librement, alabez, no debería meter-los aquí. <br /> En publicar aquí, tamién ye declarando que busté mesmo escribió iste testo y ye o dueño d'os dreitos d'autor, u bien lo copió dende o dominio publico u cualsiquier atra fuent libre (beyer $1 ta más informazión). <br />
'''NO COPIE SIN PREMISO ESCRITOS CON DREITOS D'AUTOR!'''",
'longpagewarning'                  => "'''Pare cuenta: Ista pachina tiene ya $1 kilobytes; bels nabegadors pueden tener problemas en editar pachinas de 32 kB o más.
Considere, por fabor, a posibilidat de troxar ista pachina en trestallos más chicoz.'''",
'longpageerror'                    => "'''ERROR: O testo que ha escrito ye de $1 kilobytes, que ye mayor que a grandaria masima de $2 kilobytes. No se puede alzar.'''",
'readonlywarning'                  => "'''Pare cuenta: A base de datos ye bloqueyata por custions de mantenimiento. Por ixo, en iste inte ye imposible d'alzar as suyas edizions. Puede copiar y apegar o testo en un archibo y alzar-lo ta dimpués.'''

A esplicazión ufierta por l'almenistrador que bloqueyó a base de datos ye ista: $1",
'protectedpagewarning'             => "'''Pare cuenta: Ista pachina s'ha protechito ta que nomás os usuarios con premisos d'almenistrador puedan editar-la.'''",
'semiprotectedpagewarning'         => "'''Pare cuenta:''' Ista pachina s'ha protechito ta que nomás os usuarios rechistratos puedan editar-la.",
'cascadeprotectedwarning'          => "'''Pare cuenta:''' Ista pachina ye protechita ta que nomás os almenistrador puedan editar-la, porque ye encluyita en {{PLURAL:$1|a siguient pachina, protechita|as siguients pachinas, protechitas}} con a opzión de ''cascada'' :",
'titleprotectedwarning'            => "'''PARE CUENTA:  Ista pachina s'ha bloqueyato de traza que s'aprecisan [[Special:ListGroupRights|dreitos especificos]] ta creyar-la.'''
Como información adicional s'amuestra contino a zaguera dentrada en o rechistro.",
'templatesused'                    => '{{PLURAL:$1|Plantilla|Planillas}} emplegatas en ista pachina:',
'templatesusedpreview'             => '{{PLURAL:$1|Plantilla|Plantillas}} emplegadas en ista anvista previa:',
'templatesusedsection'             => '{{PLURAL:$1|Plantilla|Plantillas}} emplegatas en ista sezión:',
'template-protected'               => '(protechita)',
'template-semiprotected'           => '(semiprotechita)',
'hiddencategories'                 => 'Ista pachina fa parte de {{PLURAL:$1|1 categoría amagata|$1 categorías amagatas}}:',
'edittools'                        => "<!-- Iste testo amanixerá baxo os formularios d'edizión y carga. -->",
'nocreatetitle'                    => "S'ha restrinchito a creyazión de pachinas",
'nocreatetext'                     => '{{SITENAME}} ha restrinchito a creyación de nuevas pachinas. Puede tornar entazaga y editar una pachina ya existent, [[Special:UserLogin|identificarse u creyar una cuenta]].',
'nocreate-loggedin'                => 'No tiene premiso ta creyar nuevas pachinas.',
'permissionserrors'                => 'Errors de premisos',
'permissionserrorstext'            => 'No tiene premisos ta fer-lo, por {{PLURAL:$1|ista razón|istas razons}}:',
'permissionserrorstext-withaction' => 'No tiene premisos ta $2, por {{PLURAL:$1|ista razón|istas razons}}:',
'recreate-moveddeleted-warn'       => "Pare cuenta: ye creyando de nuevas una pachina que ya ha s'heba borrada denantes.'''

Considere si ye preciso continar editando ista pachina.
Contino s'amuestra o rechistro de borraus y treslaus ta ista pachina:",
'moveddeleted-notice'              => "Ista pachina s'ha borrato.
Contino s'amuestra o rechistro de borraus y treslaus como referenzia.",
'edit-hook-aborted'                => 'Edizión albortada por o grifio (hook). 
No dio garra esplicazión.',
'edit-gone-missing'                => "No s'ha puesto esbiellar a pachina.
Pareix que la esen borrau.",
'edit-conflict'                    => "Conflito d'edizión.",
'edit-no-change'                   => "S'ha ignorato a suya edizión, pos no s'ha feito garra cambeo ta o testo.",
'edit-already-exists'              => "No s'ha puesto creyar una pachina nueva.
Ya existe.",

# Parser/template warnings
'expensive-parserfunction-warning'        => 'Pare cuenta: Ista pachina tiene masiadas cridas ta funzions de preprozeso (parser functions) costosas.

Abría de tener-ne menos de {{PLURAL:$2|$2|$2}}, y por agora en tiene {{PLURAL:$1|$1|$1}}.',
'expensive-parserfunction-category'       => 'Pachinas con masiadas cridas á funzions de preprozeso (parser functions) costosas',
'post-expand-template-inclusion-warning'  => "Pare cuenta: A mida d'enclusión d'a plantilla ye masiau gran.
Bellas plantillas no se bi encluyen.",
'post-expand-template-inclusion-category' => "Pachinas an que se brinca a mida d'enclusión d'as plantillas",
'post-expand-template-argument-warning'   => "Pare cuenta: Ista pachina contiene á lo menos un argumento de plantilla con una mida d'espansión masiau gran. S'han omeso estos argumentos.",
'post-expand-template-argument-category'  => 'Pachinas con argumentos de plantilla omesos',
'parser-template-loop-warning'            => "S'ha deteutato un bucle de plantillas: [[$1]]",
'parser-template-recursion-depth-warning' => "S'ha brincato o limite de recursión de plantillas ($1)",

# "Undo" feature
'undo-success' => 'A edición se puet desfer. 
Antes de desfer a edición, mire-se a siguient comparanza ta comprebar que ye ixo o que quiere fer, y alce alavez os cambios ta desfer asinas a edición.',
'undo-failure' => 'No se puet desfer a edizión pues un atro usuario ha feito una edizión intermeya.',
'undo-norev'   => "No s'ha puesto desfer a edizión porque no esistiba u ya s'eba borrato.",
'undo-summary' => 'Desfeita a edizión $1 de [[Special:Contributions/$2|$2]] ([[User talk:$2|desc.]])',

# Account creation failure
'cantcreateaccounttitle' => 'No se puede creyar a cuenta',
'cantcreateaccount-text' => "A creyazión de cuentas dende ixa adreza IP ('''$1''') estió bloqueyata por [[User:$3|$3]].

A razón endicata por $3 ye ''$2''",

# History pages
'viewpagelogs'           => "Veyer os rechistros d'ista pachina",
'nohistory'              => "Ista pachina no tiene un istorial d'edizions.",
'currentrev'             => 'Versión actual',
'currentrev-asof'        => "Zaguera versión d'o $1",
'revisionasof'           => "Versión d'o $1",
'revision-info'          => "Versión d'o $1 feita por $2",
'previousrevision'       => '← Versión anterior',
'nextrevision'           => 'Versión siguient →',
'currentrevisionlink'    => 'Versión actual',
'cur'                    => 'act',
'next'                   => 'siguient',
'last'                   => 'ant',
'page_first'             => 'primeras',
'page_last'              => 'zagueras',
'histlegend'             => "Selección de diferencias: sinyale as versions a comparar y prete \"enter\" u o botón d'o cobaixo.<br />
Leyenda: '''({{int:cur}})''' = esferencias con a versión actual, '''({{int:last}})''' = esferencias con a versión anterior, '''{{int:minoreditletter}}''' = edición menor",
'history-fieldset-title' => 'Mirar en o historial',
'histfirst'              => 'Primeras contrebucions',
'histlast'               => 'Zagueras',
'historysize'            => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty'           => '(buedo)',

# Revision feed
'history-feed-title'          => 'Historial de versions',
'history-feed-description'    => "Historial de versions d'ista pachina en o wiki",
'history-feed-item-nocomment' => '$1 en $2',
'history-feed-empty'          => "A pachina demandata no esiste.
Puede que aiga estato borrata d'o wiki u renombrata.
Prebe de [[Special:Search|mirar en o wiki]] atras pachinas relebants.",

# Revision deletion
'rev-deleted-comment'         => "(s'ha sacato iste comentario)",
'rev-deleted-user'            => "(s'ha sacato iste nombre d'usuario)",
'rev-deleted-event'           => "(Aizión borrata d'o rechistro)",
'rev-deleted-text-permission' => "Ista versión d'a pachina s'ha '''borrato'''.
Talment pueda trobe más detalles en o [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} rechistro de borraus].",
'rev-deleted-text-view'       => "Ista versión d'a pachina s'ha '''borrato'''.
Como admenistrador, la puet beyer; talment trobe más detalles en o [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} rechistro de borraus].",
'rev-delundel'                => 'amostrar/amagar',
'revisiondelete'              => 'Borrar/restaurar versions',
'revdelete-nooldid-title'     => 'A versión de destino no ye conforme',
'revdelete-nooldid-text'      => "No ha endicato sobre qué versión u versions de destino s'ha d'aplicar ista función, a versión especificata no existe u ye mirando d'amagar a versión actual.",
'revdelete-nologtype-title'   => "No s'ha endicau garra mena de rechistro",
'revdelete-nologtype-text'    => 'No ha endicato sobre qué tipo de rechistro quiere fer ista azión.',
'revdelete-nologid-title'     => 'Dentrada de rechistro imbalida',
'revdelete-nologid-text'      => 'No ha endicau sobre qué ebento rechistrau quiere fer serbir ista funzión u bien no esiste a dentrada de rechistro que ha endicau.',
'revdelete-selected'          => "'''{{PLURAL:$2|Versión trigata|Versions trigatas}} de [[:$1]]:'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Escaizimiento d'o rechistro trigato|Escaizimientos d'o rechistro trigatos}}:'''",
'revdelete-text'              => "'''As versions y esdevenimientos borratos encara apareixerán en o istorial d'a pachina y en os rechistros, pero bellas partes d'o suyo conteniu serán inaccesibles ta o publico.'''
Atros admenistradors de {{SITENAME}} encara podrán acceder t'o conteniu amagato y podrán desfer o borrau á traviés d'ista mesma interfaz, fueras de si s'estableixen restriccions adicionals.",
'revdelete-confirm'           => "Por fabor confirme que ye mirando de fer ísto, que entiende as consecuenzias, y que lo ye fendo d'alcuerdo con [[{{MediaWiki:Policy-url}}|as politicas]].",
'revdelete-legend'            => 'Establir as restrizions de bisibilidat:',
'revdelete-hide-text'         => "Amagar o texto d'a versión",
'revdelete-hide-image'        => "Amagar o conteniu de l'archibo",
'revdelete-hide-name'         => 'Amagar aizión y obchetibo',
'revdelete-hide-comment'      => "Amagar comentario d'edizión",
'revdelete-hide-user'         => "Amagar o nombre/l'adreza IP d'o editor",
'revdelete-hide-restricted'   => "Suprimir os datos d'os almenistradors igual como os d'a resta",
'revdelete-suppress'          => "Sacar os datos d'os almenistradors igual como os d'a resta d'usuarios",
'revdelete-unsuppress'        => "Sacar restriccions d'as versions restauradas",
'revdelete-log'               => 'Razón ta o borrau:',
'revdelete-submit'            => 'Aplicar a {{PLURAL:$1|la versión trigata|las versions trigatas}}',
'revdelete-logentry'          => "S'ha cambiato a visibilidat d'a versión de [[$1]]",
'logdelete-logentry'          => "S'ha cambiato a bisibilidat d'escaizimientos de [[$1]]",
'revdelete-success'           => "'''S'ha cambiato correctament a visibilidat d'as versions.'''",
'logdelete-success'           => "'''S'ha cambiato correutament a bisibilidat d'os escaizimientos.'''",
'revdel-restore'              => 'Cambiar a visibilidat',
'pagehist'                    => 'Istorial',
'deletedhist'                 => 'Istorial de borrau',
'revdelete-content'           => 'conteniu',
'revdelete-summary'           => 'editar resumen',
'revdelete-uname'             => "nombre d'usuario",
'revdelete-restricted'        => "S'han aplicato as restrizions ta almenistradors",
'revdelete-unrestricted'      => "S'han borrato as restrizions ta almenistradors",
'revdelete-hid'               => 'amagar $1',
'revdelete-unhid'             => 'amostrar $1',
'revdelete-log-message'       => '$1 ta $2 {{PLURAL:$2|versión|versions}}',
'logdelete-log-message'       => '$1 ta $2 {{PLURAL:$2|esdebenimiento|esdebenimientos}}',
'revdelete-reasonotherlist'   => 'Atra razón',

# Suppression log
'suppressionlog'     => 'Rechistro de supresions',
'suppressionlogtext' => "En o cobaxo bi ye una lista de borraus y bloqueyos referitos á contenius amagaus ta os almenistradors. Mire-se a [[Special:IPBlockList|lista d'adrezas IP bloqueyatas]] ta beyer a lista de bloqueyos y bedas bichents.",

# History merging
'mergehistory'                     => 'Aunir istorials',
'mergehistory-header'              => "Ista pachina li premite de fusionar versions d'o historial d'una pachina d'orichen con una nueva pachina.
Asegure-se que iste cambio no trencará a continidat de l'historial d'a pachina.",
'mergehistory-box'                 => 'Fusionar as versions de dos pachinas:',
'mergehistory-from'                => "Pachina d'orichen:",
'mergehistory-into'                => 'Pachina de destino:',
'mergehistory-list'                => "Istorial d'edizions aunible",
'mergehistory-merge'               => "As siguients versions de [[:$1]] se pueden fundir con [[:$2]]. Faiga serbir a columna de botons d'opciónradio ta fusionar nomás as versions creyadas antis d'un tiempo especificato. Pare cuenta que si emplega os vinclos de navegación meterá os botons en o suyo estau orichinal.",
'mergehistory-go'                  => 'Amostrar edizions aunibles',
'mergehistory-submit'              => 'Fusionar versions',
'mergehistory-empty'               => 'No puede aunir-se garra rebisión.',
'mergehistory-success'             => '$3 {{PLURAL:$3|rebisión|rebisions}} de [[:$1]] {{PLURAL:$3|combinata|combinatas}} correutament con [[:$2]].',
'mergehistory-fail'                => "No s'ha puesto aunir os dos istorials, por fabor comprebe a pachina y os parametros de tiempo.",
'mergehistory-no-source'           => "A pachina d'orichen $1 no esiste.",
'mergehistory-no-destination'      => 'A pachina de destino $1 no esiste.',
'mergehistory-invalid-source'      => "A pachina d'orichen ha de tener un títol correuto.",
'mergehistory-invalid-destination' => 'A pachina de destino ha de tener un títol correuto.',
'mergehistory-autocomment'         => "S'ha combinato [[:$1]] en [[:$2]]",
'mergehistory-comment'             => "S'ha combinato [[:$1]] en [[:$2]]: $3",
'mergehistory-same-destination'    => "As pachinas d'orichen y destín han d'estar diferents",

# Merge log
'mergelog'           => "Rechistro d'unions",
'pagemerge-logentry' => "s'ha aunito [[$1]] con [[$2]] (rebisions dica $3)",
'revertmerge'        => 'Desfer a fusión',
'mergelogpagetext'   => "Contino s'amuestra una lista d'as pachinas más rezients que os suyos istorials s'han aunito con o d'atra pachina.",

# Diffs
'history-title'           => 'Historial de versions de "$1"',
'difference'              => '(Esferencias entre versions)',
'lineno'                  => 'Linia $1:',
'compareselectedversions' => 'Confrontar as versions trigatas',
'editundo'                => 'desfer',
'diff-multi'              => "(S'ha amagato {{PLURAL:$1|una edizión entremeya|$1 edizions entremeyas}}.)",

# Search results
'searchresults'                    => "Resultau d'a busca",
'searchresults-title'              => 'Resultaus de mirar "$1"',
'searchresulttext'                 => "Ta más información sobre cómo mirar pachinas en {{SITENAME}}, consulte l'[[{{MediaWiki:Helppage}}|{{int:help}}]].",
'searchsubtitle'                   => 'Ha mirato \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|todas as pachinas que prencipian con "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|todas as pachinas con vinclos enta "$1"]])',
'searchsubtitleinvalid'            => 'Ha mirato "$1"',
'toomanymatches'                   => "S'ha retornato masiadas coinzidenzias, por fabor, torne á prebar con una consulta diferent",
'titlematches'                     => 'Consonanzias de títols de pachina',
'notitlematches'                   => "No bi ha garra consonancia en os títols d'as pachinas",
'textmatches'                      => "Consonanzias en o testo d'as pachinas",
'notextmatches'                    => "No bi ha garra consonancia en os textos d'as pachinas",
'prevn'                            => '{{PLURAL:$1|$1}} anteriors',
'nextn'                            => '{{PLURAL:$1|$1}} siguients',
'viewprevnext'                     => 'Veyer ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend'                => 'Opzions de busca',
'searchmenu-exists'                => "'''Bi ha una pachina clamada \"[[\$1]]\" en ista wiki'''",
'searchmenu-new'                   => "'''Creyar a pachina \"[[:\$1]]\" en ista wiki!'''",
'searchhelp-url'                   => 'Help:Aduya',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Beyer pachinas con iste prefixo]]',
'searchprofile-articles'           => 'Pachinas de conteniu',
'searchprofile-project'            => "Pachinas d'aduya y d'o prochecto",
'searchprofile-images'             => 'Multimedia',
'searchprofile-everything'         => 'Tot',
'searchprofile-advanced'           => 'Abanzato',
'searchprofile-articles-tooltip'   => 'Mirar en $1',
'searchprofile-project-tooltip'    => 'Mirar en $1',
'searchprofile-images-tooltip'     => 'Mirar archibos',
'searchprofile-everything-tooltip' => 'Mirar en toz os contenius (tamién en as pachinas de descusión)',
'searchprofile-advanced-tooltip'   => 'Mirar en os siguients espazios de nombres',
'search-result-size'               => '$1 ({{PLURAL:$2|1 parola|$2 parolas}})',
'search-result-score'              => 'Relebanzia: $1%',
'search-redirect'                  => '(endrecera dende $1)',
'search-section'                   => '(sección $1)',
'search-suggest'                   => 'Quereba dicir $1?',
'search-interwiki-caption'         => 'Prochectos chermans',
'search-interwiki-default'         => '$1 resultaus:',
'search-interwiki-more'            => '(más)',
'search-mwsuggest-enabled'         => 'con socherencias',
'search-mwsuggest-disabled'        => 'garra socherencia',
'search-relatedarticle'            => 'Relacionato',
'mwsuggest-disable'                => "Desautibar as socherenzias d'AJAX",
'searchrelated'                    => 'relacionato',
'searchall'                        => 'toz',
'showingresults'                   => "Contino se bi {{PLURAL:$1|amuestra '''1''' resultau|amuestran '''$1''' resultaus}} prenzipiando por o numero '''$2'''.",
'showingresultsnum'                => "Contino se bi {{PLURAL:$3|amuestra '''1''' resultau|amuestran os '''$3''' resultaus}} prenzipiando por o numero '''$2'''.",
'nonefound'                        => "'''Pare cuenta''': Por defecto nomás se mira en bells espacios de nombres. Si quiere mirar en totz os contenius (incluyendo-ie pachinas de descusión, plantillas, etc), mire d'emplegar o prefixo ''all:'' u clave como prefixo o espacio de nombres deseyau.",
'search-nonefound'                 => "No s'ha trobato garra resultau que cumpla os criterios.",
'powersearch'                      => 'Busca avanzata',
'powersearch-legend'               => 'Busca avanzata',
'powersearch-ns'                   => 'Mirar en os espacios de nombres:',
'powersearch-redir'                => 'Listar reendreceras',
'powersearch-field'                => 'Mirar',
'search-external'                  => 'Busca externa',
'searchdisabled'                   => 'A busca en {{SITENAME}} ye temporalment desautibata. Entremistanto, puede mirar en {{SITENAME}} fendo serbir buscadors esternos, pero pare cuenta que os suyos endizes de {{SITENAME}} puede no estar esbiellatos.',

# Quickbar
'qbsettings'               => 'Preferenzias de "Quickbar"',
'qbsettings-none'          => 'Denguna',
'qbsettings-fixedleft'     => 'Fixa á la zurda',
'qbsettings-fixedright'    => 'Fixa á la dreita',
'qbsettings-floatingleft'  => 'Flotant á la zurda',
'qbsettings-floatingright' => 'Flotant á la dreita',

# Preferences page
'preferences'                 => 'Preferencias',
'mypreferences'               => 'Preferencias',
'prefs-edits'                 => "Numero d'edizions:",
'prefsnologin'                => 'No ye identificato',
'prefsnologintext'            => 'Ha d\'aber <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} enzetato una sesión] </span> ta cambiar as preferenzias d\'usuario.',
'changepassword'              => 'Cambiar a palabra de paso',
'prefs-skin'                  => 'Aparenzia',
'skin-preview'                => 'Fer una prebatina',
'prefs-math'                  => 'Esprisions matematicas',
'datedefault'                 => 'Sin de preferenzias',
'prefs-datetime'              => 'Calendata y ora',
'prefs-personal'              => 'Datos presonals',
'prefs-rc'                    => 'Zaguers cambeos',
'prefs-watchlist'             => 'Lista de seguimiento',
'prefs-watchlist-days'        => "Numero de días que s'amostrarán en a lista de seguimiento:",
'prefs-watchlist-days-max'    => '(masimo 7 diyas)',
'prefs-watchlist-edits'       => "Numero d'edizions que s'amostrarán en a lista ixamplata:",
'prefs-watchlist-edits-max'   => '(numero masimo: 1000)',
'prefs-misc'                  => 'Atras preferenzias',
'prefs-resetpass'             => 'Cambear a palabra de paso',
'saveprefs'                   => 'Alzar preferenzias',
'resetprefs'                  => "Tornar t'as preferenzias por defeuto",
'restoreprefs'                => 'Restaure todas as confegurazions por defeuto',
'prefs-editing'               => 'Edizión',
'prefs-edit-boxsize'          => "Grandaria d'a finestra d'edizión.",
'rows'                        => 'Ringleras:',
'columns'                     => 'Colunnas:',
'searchresultshead'           => 'Mirar',
'resultsperpage'              => "Resultaus que s'amostrarán por pachina:",
'contextlines'                => "Linias de contexto que s'amostrarán por resultau",
'contextchars'                => 'Caráuters de contesto por linia',
'stub-threshold'              => 'Branquil superior ta o formateyo de <a href="#" class="stub">binclos ta borradors</a> (en bytes):',
'recentchangesdays'           => "Días que s'amostrarán en ''zaguers cambeos'':",
'recentchangesdays-max'       => '(masimo $1 {{PLURAL:$1|día|días}})',
'recentchangescount'          => "Numero d'edizions á amostrar, por defecto:",
'savedprefs'                  => "S'han alzato as suyas preferenzias.",
'timezonelegend'              => 'Fuso orario:',
'localtime'                   => 'Ora local:',
'timezoneuseserverdefault'    => "Usar a zona d'o serbidor",
'timezoneuseoffset'           => 'Atra (espezifica a esferenzia)',
'timezoneoffset'              => 'Esferenzia¹:',
'servertime'                  => 'A ora en o serbidor ye:',
'guesstimezone'               => "Emplir-lo con a ora d'o nabegador",
'timezoneregion-africa'       => 'Africa',
'timezoneregion-america'      => 'America',
'timezoneregion-antarctica'   => 'Antartica',
'timezoneregion-arctic'       => 'Artico',
'timezoneregion-asia'         => 'Asia',
'timezoneregion-atlantic'     => 'Oziano Atlantico',
'timezoneregion-australia'    => 'Australia',
'timezoneregion-europe'       => 'Europa',
'timezoneregion-indian'       => 'Oziano Indico',
'timezoneregion-pacific'      => 'Oziano Pazifico',
'allowemail'                  => "Autibar a rezepzión de correu d'atros usuarios",
'prefs-searchoptions'         => 'Opzions de busca',
'prefs-namespaces'            => 'Espacios de nombres',
'defaultns'                   => 'Si no, mirar en istos espazios de nombres:',
'default'                     => 'por defeuto',
'prefs-files'                 => 'Archibos',
'prefs-custom-css'            => 'CSS presonalizato',
'prefs-custom-js'             => 'JS presonalizato',
'youremail'                   => 'Adreza de correu electronico:',
'username'                    => "Nombre d'usuario:",
'uid'                         => "ID d'usuario:",
'prefs-memberingroups'        => "Miembro {{PLURAL:$1|d'a colla|d'as collas}}:",
'yourrealname'                => 'Nombre reyal:',
'yourlanguage'                => 'Luenga:',
'yourvariant'                 => 'Modalidat linguistica:',
'yournick'                    => 'Siñadura:',
'badsig'                      => 'A suya siñadura no ye conforme; comprebe as etiquetas HTML.',
'badsiglength'                => 'A siñadura ye masiau larga. 
Abría de tener menos de $1 {{PLURAL:$1|caráuter|caráuters}}.',
'yourgender'                  => 'Secso:',
'gender-unknown'              => 'No espezificato',
'gender-male'                 => 'Ombre',
'gender-female'               => 'Muller',
'prefs-help-gender'           => 'Opzional: Emplegada ta correzión de chenero por o software. Ista informazión será publica.',
'email'                       => 'Adreza de correu-e',
'prefs-help-realname'         => "* Nombre reyal (opzional): si esliche escribir-lo, se ferá serbir ta l'atribuzión d'a suya faina.",
'prefs-help-email'            => "L'adreza de correu-e ye opcional, pero ye precisa ta que le ninviemos una nueva contrasenya si nunc la xublidase. Tamién puede fer que atros usuarios puedan contactar con vusté dende a suya pachina d'usuario u de descusión d'usuario sin haber de revelar a suya identidat.",
'prefs-help-email-required'   => 'Cal una adreza de correu-e.',
'prefs-advancedediting'       => 'Opzions abanzadas',
'prefs-advancedrc'            => 'Opzions abanzadas',
'prefs-advancedrendering'     => 'Opzions abanzadas',
'prefs-advancedsearchoptions' => 'Opzions abanzadas',
'prefs-advancedwatchlist'     => 'Opzions abanzadas',

# User rights
'userrights'                  => "Confegurazión d'os dreitos d'os usuarios",
'userrights-lookup-user'      => "Confegurar collas d'usuarios",
'userrights-user-editname'    => "Escriba un nombre d'usuario:",
'editusergroup'               => "Editar as collas d'usuarios",
'editinguser'                 => "S'esta cambiando os dreitos de l'usuario  '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup'    => "Editar as collas d'usuarios",
'saveusergroups'              => "Alzar as collas d'usuarios",
'userrights-groupsmember'     => 'Miembro de:',
'userrights-groups-help'      => "Puede cambiar as collas a on que bi ye iste usuario.
* Un caixa sinyalata significa que l'usuario ye en ixa colla.
* Una caixa no sinyalata significa que l'usuario no ye en ixa colla.
* Un * endica que vusté no puet sacar a colla dimpués d'adhibir-la, u vice-versa.",
'userrights-reason'           => 'Razón:',
'userrights-no-interwiki'     => "No tiene premiso ta editar os dreitos d'usuario en atras wikis.",
'userrights-nodatabase'       => 'A base de datos $1 no esiste u no ye local.',
'userrights-nologin'          => "Ha d'[[Special:UserLogin|enzetar una sesión]] con una cuenta d'almenistrador ta poder dar dreitos d'usuario.",
'userrights-notallowed'       => "A suya cuenta no tiene premisos ta dar dreitos d'usuario.",
'userrights-changeable-col'   => 'Grupos que puede cambiar',
'userrights-unchangeable-col' => 'Collas que no puede cambiar',

# Groups
'group'               => 'Colla:',
'group-user'          => 'Usuarios',
'group-autoconfirmed' => 'Usuarios Autoconfirmatos',
'group-bot'           => 'Bots',
'group-sysop'         => 'Almenistradors',
'group-bureaucrat'    => 'Burocratas',
'group-suppress'      => 'Superbisors',
'group-all'           => '(toz)',

'group-user-member'          => 'Usuario',
'group-autoconfirmed-member' => 'Usuario autoconfirmato',
'group-bot-member'           => 'Bot',
'group-sysop-member'         => 'Almenistrador',
'group-bureaucrat-member'    => 'Burocrata',
'group-suppress-member'      => 'Superbisor',

'grouppage-user'          => '{{ns:project}}:Usuarios',
'grouppage-autoconfirmed' => '{{ns:project}}:Usuarios autoconfirmatos',
'grouppage-bot'           => '{{ns:project}}:Bots',
'grouppage-sysop'         => '{{ns:project}}:Almenistradors',
'grouppage-bureaucrat'    => '{{ns:project}}:Burocratas',
'grouppage-suppress'      => '{{ns:project}}:Superbisors',

# Rights
'right-read'                 => 'Leyer pachinas',
'right-edit'                 => 'Editar pachinas',
'right-createpage'           => 'Creyar pachinas (que no sían pachinas de descusión)',
'right-createtalk'           => 'Creyar pachinas de descusión',
'right-createaccount'        => "Creyar nuevas cuentas d'usuario",
'right-minoredit'            => 'Siñalar como edizions menors',
'right-move'                 => 'Tresladar pachinas',
'right-move-subpages'        => 'Tresladar as pachinas con a suyas sozpachinas',
'right-move-rootuserpages'   => "Tresladar pachinas de l'usuario radiz",
'right-movefile'             => 'Tresladar archibos',
'right-suppressredirect'     => 'No creyar una reendrezera dende o nombre antigo cuan se treslade una pachina',
'right-upload'               => 'Cargar archibos',
'right-reupload'             => "Cargar denzima d'un archibo esistent",
'right-reupload-own'         => "Cargar denzima d'un archibo que ya eba cargau o mesmo usuario",
'right-reupload-shared'      => 'Sobreescribir localment archibos en o reposte multimedia compartito',
'right-upload_by_url'        => 'Cargar un archibo dende una adreza URL',
'right-purge'                => 'Porgar a memoria caché ta una pachina sin nezesidat de confirmar-la',
'right-autoconfirmed'        => 'Editar pachinas semiprotechitas',
'right-bot'                  => 'Ser tratato como un prozeso automatico (bot)',
'right-nominornewtalk'       => 'Fer que as edicions menors en pachinas de descusión no cheneren l\'aviso de "nuevos mensaches"',
'right-apihighlimits'        => 'Usar limites más altos en consultas API',
'right-writeapi'             => "Emplego de l'API d'escritura",
'right-delete'               => 'Borrar pachinas',
'right-bigdelete'            => 'Borrar pachinas con istorials largos',
'right-deleterevision'       => "Borrar y recuperar versions especificas d'una pachina",
'right-deletedhistory'       => "Beyer as dentradas borratas de l'istorial, sin o suyo testo asoziato",
'right-browsearchive'        => 'Mirar pachinas borratas',
'right-undelete'             => 'Recuperar una pachina',
'right-suppressrevision'     => 'Revisar y recuperar versions amagatas ta os Admenistradors',
'right-suppressionlog'       => 'Veyer os rechistro privatos',
'right-block'                => "Bloqueyar á atros usuarios ta pribar-les d'editar",
'right-blockemail'           => 'Bloqueyar á un usuario ta pribar-le de nimbiar correus',
'right-hideuser'             => "Bloqueyar un nombre d'usuario, amagando-lo d'o publico",
'right-ipblock-exempt'       => "Inorar os bloqueyos d'adrezas IP, os autobloqueyos y os bloqueyos de rangos de IPs.",
'right-proxyunbannable'      => 'Inorar os bloqueyos automaticos de proxies',
'right-protect'              => 'Cambiar os libels de protezión y editar pachinas protechitas',
'right-editprotected'        => 'Editar pachinas protechitas (sin de protezión en cascada)',
'right-editinterface'        => "Editar a interfizie d'usuario",
'right-editusercssjs'        => "Editar os archibos CSS y JS d'atros usuarios",
'right-editusercss'          => "Editar os archibos CSS d'atros usuarios",
'right-edituserjs'           => "Editar os archibos JS d'atros usuarios",
'right-rollback'             => "Desfer a escape as edicions d'o zaguer usuario que cambió una pachina",
'right-markbotedits'         => 'Siñalar as edizions esfeitas como edizions de bot',
'right-noratelimit'          => "No se les aplican as tasas masimas d'edizions",
'right-import'               => 'Importar pachinas dende atros wikis',
'right-importupload'         => "Importar pacihnas d'archibos cargatos",
'right-patrol'               => 'Siñalar edizions como patrullatas',
'right-autopatrol'           => 'Siñalar automaticament as edizions como patrullatas',
'right-patrolmarks'          => 'Amostrar os siñals de patrullache en os zaguers cambeos',
'right-unwatchedpages'       => 'Amostrar una lista de pachinas sin cosirar',
'right-trackback'            => 'Adibir un trackback',
'right-mergehistory'         => "Combinar l'istorial d'as pachinas",
'right-userrights'           => "Editar toz os dreitos d'usuario",
'right-userrights-interwiki' => "Editar os dreitos d'usuario d'os usuarios d'atros wikis",
'right-siteadmin'            => 'Trancar y estrancar a base de datos',

# User rights log
'rightslog'      => "Rechistro de cambios en os dreitos d'os usuarios",
'rightslogtext'  => "Iste ye un rechistro d'os cambios en os dreitos d'os usuarios",
'rightslogentry' => "ha cambiato os dreitos d'usuario de $1: de $2 a $3",
'rightsnone'     => '(denguno)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => 'leyer ista pachina',
'action-edit'                 => 'editar ista pachina',
'action-createpage'           => 'creyar pachinas',
'action-createtalk'           => 'creyar pachinas de descusión',
'action-createaccount'        => "creyar ista cuenta d'usuario",
'action-minoredit'            => 'siñalar iste cambeo como menor',
'action-move'                 => 'tresladar ista pachina',
'action-move-subpages'        => 'tresladar ista pachina y as suyas subpachinas',
'action-move-rootuserpages'   => "tresladar as pachinas de l'usuario radiz",
'action-movefile'             => 'tresladar iste archibo',
'action-upload'               => 'cargar iste archibo',
'action-reupload'             => "cargar denzima d'un archibo esistent",
'action-reupload-shared'      => "cargar denzima d'iste archibo en un reposte compartito",
'action-upload_by_url'        => 'cargar iste archibo dende una adreza URL',
'action-writeapi'             => "fer serbir l'API d'escritura",
'action-delete'               => 'borrar ista pachina',
'action-deleterevision'       => 'borrar ista versión',
'action-deletedhistory'       => "beyer o istorial borrato d'ista pachina",
'action-browsearchive'        => 'mirar pachinas borratas',
'action-undelete'             => 'recuperar ista pachina',
'action-suppressrevision'     => 'revisar y restaurar ista versión amagata',
'action-suppressionlog'       => 'beyer iste rechistro pribato',
'action-block'                => 'bloqueyar iste usuario ta que no pueda editar',
'action-protect'              => "cambiar os libels de protezión d'ista pachina",
'action-import'               => 'importar ista pachina dende atro wiki',
'action-importupload'         => 'importar ista pachina dende un fichero cargato',
'action-patrol'               => "siñalar as edizions d'atros como patrulladas",
'action-autopatrol'           => 'siñalar as edizions propias como patrulladas',
'action-unwatchedpages'       => 'beyer a lista de pachinas no cosiratas',
'action-trackback'            => "nimbiar informazión d'una referenzia",
'action-mergehistory'         => "combinar o istorial d'ista pachina",
'action-userrights'           => "cambiar toz os dreitos d'usuario",
'action-userrights-interwiki' => "cambiar os dreitos d'usuario en atros wikis",
'action-siteadmin'            => 'bloqueyar o esbloqueyar a base de datos',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|cambeo|cambeos}}',
'recentchanges'                     => 'Zaguers cambeos',
'recentchanges-legend'              => 'Opcions sobre a pachina de zaguers cambeos',
'recentchangestext'                 => "Siga os cambeos más rezients d'a wiki en ista pachina.",
'recentchanges-feed-description'    => "Seguir os cambios más recients d'o wiki en ista fuent de noticias.",
'rcnote'                            => "Contino {{PLURAL:$1|s'amuestra o unico cambeo feito|s'amuestran os zaguers '''$1''' cambeos feitos}} en {{PLURAL:$2|o zaguer día|os zaguers '''$2''' días}}, dica o $5, $4.",
'rcnotefrom'                        => "Contino s'amuestran os cambeos dende '''$2''' (dica '''$1''').",
'rclistfrom'                        => 'Amostrar cambeos recients dende $1',
'rcshowhideminor'                   => '$1 as edicions menors',
'rcshowhidebots'                    => '$1 bots',
'rcshowhideliu'                     => '$1 usuarios rechistraus',
'rcshowhideanons'                   => '$1 usuarios anonimos',
'rcshowhidepatr'                    => '$1 edizions controlatas',
'rcshowhidemine'                    => '$1 as mías edicions',
'rclinks'                           => 'Amostrar os zaguers $1 cambeos en os zaguers $2 días.<br />$3',
'diff'                              => 'esf',
'hist'                              => 'hist',
'hide'                              => 'Amagar',
'show'                              => 'Amostrar',
'minoreditletter'                   => 'm',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|usuario|usuarios}} cosirando]',
'rc_categories'                     => 'Limite d\'as categorías (deseparatas por "|")',
'rc_categories_any'                 => 'Todas',
'newsectionsummary'                 => 'Nueva sección: /* $1 */',
'rc-enhanced-expand'                => 'Amostrar detalles (cal JavaScript)',
'rc-enhanced-hide'                  => 'Amagar detalles',

# Recent changes linked
'recentchangeslinked'          => 'Cambeos relacionatos',
'recentchangeslinked-feed'     => 'Cambeos relacionatos',
'recentchangeslinked-toolbox'  => 'Cambios relacionatos',
'recentchangeslinked-title'    => 'Cambeos relacionatos con "$1"',
'recentchangeslinked-noresult' => 'No bi abió cambeos en as pachinas binculatas en o entrebalo de tiempo endicato.',
'recentchangeslinked-summary'  => "Ista ye una lista d'os zaguers cambios feitos en pachinas con vinclos dende una pachina especifica (u ta miembros d'una categoría especificata).  S'amuestran en '''negreta''' as pachinas d'a suya [[Special:Watchlist|lista de seguimiento]].",
'recentchangeslinked-page'     => "Nombre d'a pachina:",
'recentchangeslinked-to'       => "En cuentas d'ixo, amostrar os cambios en pachinas con vinclos enta a pachina data",

# Upload
'upload'                      => 'Cargar fichero',
'uploadbtn'                   => 'Cargar un archibo',
'reuploaddesc'                => "Anular a carga y tornar ta o formulario de carga d'archibos.",
'uploadnologin'               => 'No ha enzetato una sesión',
'uploadnologintext'           => "Ha d'estar [[Special:UserLogin|rechistrau]] ta cargar archibos.",
'upload_directory_missing'    => 'O direutorio de carga ($1) no esiste y no lo puede creyar o serbidor web.',
'upload_directory_read_only'  => "O serbidor web no puede escribir en o direutorio de carga d'archibos ($1).",
'uploaderror'                 => "S'ha produzito una error en cargar l'archibo",
'uploadtext'                  => "Faiga serbir o formulario d'o cobaxo ta cargar fichers.
Ta veyer u mirar fichers cargatas denantes vaiga t'a [[Special:FileList|lista de fichers cargatos]]. As cargas y recargas tamién se rechistran en o [[Special:Log/upload|rechistro de cargas]], y os borraus en o [[Special:Log/delete|rechistro de borraus]].

Ta incluyir un fichero en una pachina, emplegue un vinclo d'una d'istas trazas 
*'''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fichero.jpg]]</nowiki></tt>''' ta fer servir a version completa d'o fichero, 
*'''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fichero.png|200px|thumb|left|texto alternativo]]</nowiki></tt>''' ta fer serivr una versión de 200 píxels d'amplaria en una caixa a la marguin cucha con 'texto alternativo' como descripción
*'''<tt><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Fichero.ogg]]</nowiki></tt>''' ta fer un vinclo dreitament ta o fichero sin amostrar-lo.",
'upload-permitted'            => "Tipos d'archibo premititos: $1.",
'upload-preferred'            => "Tipos d'archibo preferitos: $1.",
'upload-prohibited'           => "Tipos d'archibo biedatos: $1.",
'uploadlog'                   => 'rechistro de cargas',
'uploadlogpage'               => "Rechistro de cargas d'archibos",
'uploadlogpagetext'           => "Contino s'amuestra  una lista d'os zaguers fichers cargatos. Mire-se a [[Special:NewFiles|galería de nuevos fichers]] ta tener una amvista más visual.",
'filename'                    => "Nombre de l'archibo",
'filedesc'                    => 'Resumen',
'fileuploadsummary'           => 'Resumen:',
'filereuploadsummary'         => "Cambios de l'archibo:",
'filestatus'                  => "Estau d'os dreitos d'autor (copyright):",
'filesource'                  => 'Fuent:',
'uploadedfiles'               => 'Archibos cargatos',
'ignorewarning'               => "Inorar l'abiso y alzar l'archibo en cualsiquier caso",
'ignorewarnings'              => 'Inorar cualsiquier abiso',
'minlength1'                  => "Os nombres d'archibo han de tener á lo menos una letra.",
'illegalfilename'             => "O nombre d'archibo «$1» tiene caráuters no premititos en títols de pachinas. Por fabor, cambee o nombre de l'archibo y mire de tornar á cargarlo.",
'badfilename'                 => 'O nombre d\'a imachen s\'ha cambiato por "$1".',
'filetype-badmime'            => 'No se premite cargar archibos de tipo MIME "$1".',
'filetype-bad-ie-mime'        => 'No puet cargar iste archibo porque o Internet Explorer lo consideraría como "$1", que ye un tipo d\'archibo no premitito y potenzialment perigloso.',
'filetype-unwanted-type'      => "Os '''\".\$1\"''' son un tipo d'archibo no deseyato.  Se prefieren os archibos {{PLURAL:\$3|de tipo|d'os tipos}} \$2.",
'filetype-banned-type'        => "No se premiten os archibos de tipo '''\".\$1\"'''. {{PLURAL:\$3|O tipo premitito ye|Os tipos premititos son}} \$2.",
'filetype-missing'            => 'L\'archibo no tiene garra estensión (como ".jpg").',
'large-file'                  => 'Se consella que os archibos no sigan mayors de $1; iste archibo ocupa $2.',
'largefileserver'             => "A grandaria d'iste archibo ye mayor d'a que a confegurazión d'iste serbidor premite.",
'emptyfile'                   => "Parixe que l'archibo que se miraba de cargar ye buedo; por fabor, comprebe que ixe ye reyalment l'archibo que quereba cargar.",
'fileexists'                  => "Ya bi ha un archibo con ixe nombre.
Por fabor, Por favor mire-se l'archibo esistent '''<tt>[[:$1]]</tt>''' si no ye seguro de querer sustituyir-lo.
[[$1|thumb]]",
'filepageexists'              => "A pachina de descripzión d'iste fichero ya s'ha creyau en '''<tt>[[:$1]]</tt>''', pero no i hai garra fichero con iste nombre. O resumen que escriba no amaneixerá en a pachina de descripzión. 
Si quiere que o suyo resumen amaneixca aquí, abrá d'editar-lo manualment.
[[$1|thumb]]",
'fileexists-extension'        => "Ya bi ha un archibo con un nombre parexiu: [[$2|thumb]]
* Nombre de l'archibo que ye cargando: '''<tt>[[:$1]]</tt>'''
* Nombre de l'archibo ya esistent: '''<tt>[[:$2]]</tt>'''
Por fabor, trigue un nombre diferent.",
'fileexists-thumbnail-yes'    => "Pareix que l'archivo ye una imachen chicota ''(miniatura)''. [[$1|thumb]]
Comprebe por fabor l'archivo '''<tt>[[:$1]]</tt>'''.
Si l'archivo comprebato ye a mesma imachen en tamaño orichinal no cal cargar una nueva miniatura.",
'file-thumbnail-no'           => "O nombre de l'archibo prenzipia con '''<tt>$1</tt>'''. 
Pareix que estase una imachen achiquida ''(thumbnail)''.
Si tiene ista imachen a toda resoluzión, cargue-la, si no, por fabor, cambee o nombre de l'archibo.",
'fileexists-forbidden'        => 'Ya bi ha un fichero con iste nombre, y no se puet sobrescribir. 
Si encara quiere cargar ixe archivo, torne y faiga serbir un nuevo nombre. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Ya bi ha un archivo con ixe nombre en o reposte compartito. Si encara quiere cargar o fichero, por favor, torne entazaga y faiga servir un nuevo nombre. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate'       => "Iste archibo ye un duplicau {{PLURAL:$1|d'o siguient archibo|d'os siguients archibos}}:",
'file-deleted-duplicate'      => "Un archibo igual que iste ([[$1]]) s'ha borrato enantes. Debería mirar-se o istorial de borraus de l'archibo antes de continar cargando-lo atra begada.",
'successfulupload'            => 'Cargata correutament',
'uploadwarning'               => "Albertenzia de carga d'archibo",
'uploadwarning-text'          => "Por favor, modifique a descripción d'o fichero d'abaixo y torne a intentar-lo.",
'savefile'                    => 'Alzar archibo',
'uploadedimage'               => '«[[$1]]» cargato.',
'overwroteimage'              => 's\'ha cargato una nueva versión de "[[$1]]"',
'uploaddisabled'              => "A carga d'archibos ye desautibata",
'uploaddisabledtext'          => 'A carga de archibos ye desautibata.',
'php-uploaddisabledtext'      => 'A carga de fichers PHP ye desautibata. Por fabor, berifique a confegurazión de file_uploads.',
'uploadscripted'              => 'Iste archibo contiene codigo de script u HTML que puede estar interpretado incorreutament por un nabegador.',
'uploadvirus'                 => 'Iste archibo tiene un birus! Detalles: $1',
'upload-source'               => 'Fichero fuent',
'sourcefilename'              => "Nombre de l'archibo d'orichen:",
'sourceurl'                   => "URL d'orichen",
'destfilename'                => "Nombre de l'archibo de destín:",
'upload-maxfilesize'          => "Masima grandaria de l'archibo: $1",
'upload-description'          => "Descripción d'o fichero",
'upload-options'              => 'Opcions de carga',
'watchthisupload'             => 'Cosirar iste fichero',
'filewasdeleted'              => 'Una archibo con iste mesmo nombre ya se cargó denantes y estió borrato dimpués. Abría de comprebar $1 antes de tornar á cargar-lo una atra begada.',
'upload-wasdeleted'           => "'''Pare cuenta: Ye cargando un archibo que ya estió borrato d'antes más.'''

Abría de repensar si ye apropiato continar con a carga d'iste archibo. Aquí tiene o rechistro de borrau d'iste archibo ta que pueda comprebar a razón que se dio ta borrar-lo:",
'filename-bad-prefix'         => "O nombre de l'archibo que ye cargando prenzipia por '''\"\$1\"''', que ye un nombre no descriptibo que gosa clabar automaticament as camaras dichitals. Por fabor, trigue un nombre más descriptibo ta iste archibo.",
'filename-prefix-blacklist'   => ' #<!-- dixe ista linia esautament igual como ye --> <pre>
# A sintacsis ye asinas:
#   * Tot o que prenzipia por un caráuter "#" dica la fin d\'a linia ye un comentario
#   * As atras linias tienen os prefixos que claban automaticament as camaras dichitals
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # bels telefonos móbils
IMG # chenerica
JD # Jenoptik
MGP # Pentax
PICT # misz.
 #</pre> <!-- dixe ista linia esautament igual como ye -->',

'upload-proto-error'      => 'Protocolo incorreuto',
'upload-proto-error-text' => 'Si quiere cargar archibos dende atra pachina, a URL ha de prenzipiar por <code>http://</code> u <code>ftp://</code>.',
'upload-file-error'       => 'Error interna',
'upload-file-error-text'  => "Ha escaizito una error interna entre que se prebaba de creyar un archibo temporal en o serbidor. Por fabor, contaute con un [[Special:ListUsers/sysop|almenistrador]] d'o sistema.",
'upload-misc-error'       => 'Error esconoixita en a carga',
'upload-misc-error-text'  => "Ha escaizito una error entre que se cargaba l'archibo. Por fabor, comprebe que a URL ye conforme y aczesible y dimpués prebe de fer-lo una atra begada. Si o problema contina, contaute con un [[Special:ListUsers/sysop|almenistrador]] d'o sistema.",

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'No se podió aczeder dica la URL',
'upload-curl-error6-text'  => 'No se podió plegar dica a URL. Por fabor, comprebe que a URL sía correuta y o sitio web sía funzionando.',
'upload-curl-error28'      => "Tiempo d'aspera sobrexito",
'upload-curl-error28-text' => "O tiempo de respuesta d'a pachina ye masiau gran. Por favor, comprebe si o servidor ye funcionando, aguarde bell ratet y mire de tornar á fer-lo.  Talment deseye prebar de nuevas quan o ret tienga menos carga.",

'license'            => 'Lizenzia:',
'license-header'     => 'Lizenziando',
'nolicense'          => "No s'en ha trigato garra",
'license-nopreview'  => '(Anvista previa no disponible)',
'upload_source_url'  => ' (una URL conforme y publicament aczesible)',
'upload_source_file' => ' (un archibo en o suyo ordenador)',

# Special:ListFiles
'listfiles-summary'     => "Ista pachina espezial amuestra toz os archibos cargatos.
Por defeuto os zaguers archibos cargatos s'amuestran en o cobalto d'a lista.
Fendo click en un encabezau de colunna se cambia o criterio d'ordenazión.",
'listfiles_search_for'  => "Mirar por nombre de l'archibo:",
'imgfile'               => 'fichero',
'listfiles'             => 'Lista de imachens',
'listfiles_date'        => 'Calendata:',
'listfiles_name'        => 'Nombre',
'listfiles_user'        => 'Usuario',
'listfiles_size'        => 'Grandaria (bytes)',
'listfiles_description' => 'Descripzión',
'listfiles_count'       => 'Versions',

# File description page
'file-anchor-link'          => 'Fichero',
'filehist'                  => "Historial d'o fichero",
'filehist-help'             => 'Punche en una calendata/hora ta veyer o fichero como amaneixeba por ixas envueltas.',
'filehist-deleteall'        => 'borrar-lo tot',
'filehist-deleteone'        => 'borrar',
'filehist-revert'           => 'esfer',
'filehist-current'          => 'actual',
'filehist-datetime'         => 'Calendata/Ora',
'filehist-thumb'            => 'Miniatura',
'filehist-thumbtext'        => "Miniatura d'a versión de $1",
'filehist-nothumb'          => 'Sin de miniatura',
'filehist-user'             => 'Usuario',
'filehist-dimensions'       => 'Dimensions',
'filehist-filesize'         => "Grandaria d'o fichero",
'filehist-comment'          => 'Comentario',
'imagelinks'                => 'Vinclos ta o fichero',
'linkstoimage'              => "{{PLURAL:$1|A pachina siguient tiene|Contino s'amuestran $1 pachinas que tienen}} binclos ta iste archibo:",
'linkstoimage-more'         => 'Bi ha más de {{PLURAL:$1|una pachina con binclos|$1 pachinas con binclos}} enta iste archibo.
 
A lista siguient nomás amuestra {{PLURAL:$1|a primer pachina con binclos|as primeras $1 pachinas con binclos}} enta iste fichero.
Tamién puez consultar a [[Special:WhatLinksHere/$2|lista completa]].',
'nolinkstoimage'            => 'Denguna pachina tiene un binclo ta ista imachen.',
'morelinkstoimage'          => 'Amostrar [[Special:WhatLinksHere/$1|más binclos]] ta iste archibo.',
'redirectstofile'           => '{{PLURAL:$1|O siguient archibo reendreza|Os siguients $1 archibos reendrezan}} enta iste archibo:',
'duplicatesoffile'          => "{{PLURAL:$1|O siguient archibo ye un duplicato|Os siguients $1 archibos son duplicatos}} d'iste archibo ([[Special:FileDuplicateSearch/$2|más detalles]]):",
'sharedupload'              => 'Iste fichero provién de $1 y talment siga emplegato en atros prochectos.',
'uploadnewversion-linktext' => "Cargar una nueva versión d'iste fichero",

# File reversion
'filerevert'                => 'Rebertir $1',
'filerevert-legend'         => 'Rebertir fichero',
'filerevert-intro'          => "Ye revertindo '''[[Media:$1|$1]]''' a la [$4 versión de $3, $2].",
'filerevert-comment'        => 'Comentario:',
'filerevert-defaultcomment' => "Revertito t'a versión de $1, $2",
'filerevert-submit'         => 'Rebertir',
'filerevert-success'        => "S'ha revertito '''[[Media:$1|$1]]''' a la [$4 versión de $3, $2].",
'filerevert-badversion'     => "No bi ha garra versión antiga d'o fichero con ixa calendata y hora.",

# File deletion
'filedelete'                  => 'Borrar $1',
'filedelete-legend'           => 'Borrar archibo',
'filedelete-intro'            => "Ye en momentos de borrar o fichero '''[[Media:$1|$1]]''' chunto con toda a suya istoria.",
'filedelete-intro-old'        => "Ye en momentos de borrar a versión de '''[[Media:$1|$1]]''' de [$4 $3, $2].",
'filedelete-comment'          => 'Causa:',
'filedelete-submit'           => 'Borrar',
'filedelete-success'          => "S'ha borrato '''$1'''.",
'filedelete-success-old'      => "S'ha borrato a versión de '''[[Media:$1|$1]]''' de $2 a las $3.",
'filedelete-nofile'           => "'''$1''' no esiste.",
'filedelete-nofile-old'       => "No bi ha garra versión alzata de '''$1''' con os atributos especificatos.",
'filedelete-otherreason'      => 'Atras razons:',
'filedelete-reason-otherlist' => 'Atra razón',
'filedelete-reason-dropdown'  => "*Razons comuns ta borrar archibos
** Dreitos d'autor no respetatos
** Archibo duplicato",
'filedelete-edit-reasonlist'  => "Editar as razons d'o borrau",

# MIME search
'mimesearch'         => 'Mirar por tipo MIME',
'mimesearch-summary' => 'Ista pachina premite filtrar archibos seguntes o suyo tipo MIME. Escribir: tipodeconteniu/subtipo, por exemplo <tt>image/jpeg</tt>.',
'mimetype'           => 'Tipo MIME:',
'download'           => 'escargar',

# Unwatched pages
'unwatchedpages' => 'Pachinas no cosiratas',

# List redirects
'listredirects' => 'Lista de reendrezeras',

# Unused templates
'unusedtemplates'     => 'Plantillas sin de uso',
'unusedtemplatestext' => "En ista pachina se fa una lista de todas as pachinas en o espazio de nombres {{ns:template}} que no sían encluyitas en atras pachinas. Alcuerde-se de comprebar as pachinas que tiengan binclos t'as plantillas antis de no borrar-las.",
'unusedtemplateswlh'  => 'atros binclos',

# Random page
'randompage'         => "Una pachina á l'azar",
'randompage-nopages' => 'No i ha garra pachina en {{PLURAL:$2|o siguient espazio de nombres|os siguients espazions de nombres}}: "$1".',

# Random redirect
'randomredirect'         => 'Ir-ie á una adreza cualsiquiera',
'randomredirect-nopages' => 'No bi ha garra reendrezera en o espazio de nombres "$1".',

# Statistics
'statistics'                   => 'Estatisticas',
'statistics-header-pages'      => 'Estatisticas de pachinas',
'statistics-header-edits'      => "Estatisticas d'edizions",
'statistics-header-views'      => 'Estatisticas de besitas',
'statistics-header-users'      => "Estatisticas d'usuarios",
'statistics-header-hooks'      => 'Atras estatisticas',
'statistics-articles'          => 'Pachinas de contenito',
'statistics-pages'             => 'Pachinas',
'statistics-pages-desc'        => "Todas as pachinas d'o wiki, encluyendo pachinas de descusión, reendrezeras, etz.",
'statistics-files'             => 'Archibos cargatos',
'statistics-edits'             => 'Edizions en pachinas dende que se debantó {{SITENAME}}',
'statistics-edits-average'     => "Meya d'edizions por pachina",
'statistics-views-total'       => 'Total de besitas',
'statistics-views-peredit'     => 'Besitas por edizión',
'statistics-users'             => '[[Special:ListUsers|Usuarios]] rechistratos',
'statistics-users-active'      => 'Usuarios autibos',
'statistics-users-active-desc' => 'Usuarios que han feito cualsiquier azión en {{PLURAL:$1|o zaguer día|os zaguers $1 días}}',
'statistics-mostpopular'       => 'Pachinas más bistas',

'disambiguations'      => 'Pachinas de desambigazión',
'disambiguationspage'  => 'Template:Desambigazión',
'disambiguations-text' => "As siguients pachinas tienen binclos ta una '''pachina de desambigazión'''.
Ixos binclos abrían de ir millor t'a pachina espezifica apropiada.<br />
Una pachina se considera pachina de desambigazión si fa serbir una plantilla probenient de  [[MediaWiki:Disambiguationspage]].",

'doubleredirects'            => 'Reendrezeras dobles',
'doubleredirectstext'        => "En ista pachina s'amuestran as pachinas que son reendrezeras enta atras pachinas reendrezatas. 
Cada ringlera contién o binclo t'a primer y segunda reendrezeras, y tamién o destino d'a segunda reendrezera, que ye á ormino a pachina obchetibo \"reyal\" á la que a primer pachina abría d'endrezar.",
'double-redirect-fixed-move' => "S'ha tresladau [[$1]], agora ye una endrezera ta [[$2]]",
'double-redirect-fixer'      => 'Apañador de reendrezeras',

'brokenredirects'        => 'Reendrezeras crebatas',
'brokenredirectstext'    => 'As siguients endrezeras leban enta pachinas inesistents.',
'brokenredirects-edit'   => 'editar',
'brokenredirects-delete' => 'borrar',

'withoutinterwiki'         => "Pachinas sin d'interwikis",
'withoutinterwiki-summary' => 'As pachinas siguients no tienen vinclos ta versions en atras luengas:',
'withoutinterwiki-legend'  => 'Prefixo',
'withoutinterwiki-submit'  => 'Amostrar',

'fewestrevisions' => 'Articlos con menos edizions',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|categoría|categorías}}',
'nlinks'                  => '$1 {{PLURAL:$1|binclo|binclos}}',
'nmembers'                => '$1 {{PLURAL:$1|miembro|miembros}}',
'nrevisions'              => '$1 {{PLURAL:$1|versión|versions}}',
'nviews'                  => '$1 {{PLURAL:$1|vesita|vesitas}}',
'specialpage-empty'       => 'Ista pachina ye bueda.',
'lonelypages'             => 'Pachinas popiellas',
'lonelypagestext'         => "As siguients pachinas no tienen binclos dende atras pachinas ni s'encluyen en atras pachinas de {{SITENAME}}.",
'uncategorizedpages'      => 'Pachinas sin categorizar',
'uncategorizedcategories' => 'Categorías sin categorizar',
'uncategorizedimages'     => 'Archibos sin categorizar',
'uncategorizedtemplates'  => 'Plantillas sin categorizar',
'unusedcategories'        => 'Categorías sin emplegar',
'unusedimages'            => 'Imachens sin uso',
'popularpages'            => 'Pachinas populars',
'wantedcategories'        => 'Categorías requiestas',
'wantedpages'             => 'Pachinas requiestas',
'wantedfiles'             => 'Archibos requiestos',
'wantedtemplates'         => 'Plantillas requiestas',
'mostlinked'              => 'Pachinas más enlazadas',
'mostlinkedcategories'    => 'Categorías más enlazadas',
'mostlinkedtemplates'     => 'Plantillas más binculatas',
'mostcategories'          => 'Pachinas con más categorías',
'mostimages'              => 'Archibos más emplegatos',
'mostrevisions'           => 'Pachinas con más edizions',
'prefixindex'             => 'Todas as pachinas con prefixo',
'shortpages'              => 'Pachinas más curtas',
'longpages'               => 'Pachinas más largas',
'deadendpages'            => 'Pachinas sin salida',
'deadendpagestext'        => 'As siguients pachinas no tienen binclos ta denguna atra pachina de {{SITENAME}}.',
'protectedpages'          => 'Pachinas protechitas',
'protectedpages-indef'    => 'Nomás protezions indefinitas',
'protectedpages-cascade'  => 'Nomás protezions en cascada',
'protectedpagestext'      => 'As siguients pachinas son protechitas contra edizions u treslaus',
'protectedpagesempty'     => 'En iste inte no bi ha garra pachina protechita con ixos parametros.',
'protectedtitles'         => 'Títols protechitos',
'protectedtitlestext'     => 'Os siguients títols son protechitos ta pribar a suya creyazión',
'protectedtitlesempty'    => 'En iste inte no bi ha garra títol protechito con ixos parametros.',
'listusers'               => "Lista d'usuarios",
'listusers-editsonly'     => 'Amostrar nomás usuarios con edizions',
'listusers-creationsort'  => 'Ordenato por calendata de creyazión',
'usereditcount'           => '$1 {{PLURAL:$1|edizión|edizions}}',
'usercreated'             => 'Creyato o $1 á las $2',
'newpages'                => 'Pachinas nuevas',
'newpages-username'       => "Nombre d'usuario",
'ancientpages'            => 'Pachinas más biellas',
'move'                    => 'Tresladar',
'movethispage'            => 'Tresladar ista pachina',
'unusedimagestext'        => 'Os siguient fichers existen pero no amaneixen incorporaus en garra pachina. 
Por fabor, pare cuenta que atros puestos web pueden tener vinclos ta fichers con una URL dreita y, por ixo, podrían amaneixer en ista lista encara que sí se faigan servir activament.',
'unusedcategoriestext'    => 'As siguients categoría son creyatas, pero no bi ha garra articlo u categoría que las faiga serbir.',
'notargettitle'           => 'No bi ha garra pachina de destino',
'notargettext'            => 'No ha espezificato en que pachina quiere aplicar ista funzión.',
'nopagetitle'             => 'No esiste ixa pachina',
'nopagetext'              => 'A pachina que ha espezificato no esiste.',
'pager-newer-n'           => '{{PLURAL:$1|1 más recient|$1 más recients}}',
'pager-older-n'           => '{{PLURAL:$1|1 más antiga|$1 más antigas}}',
'suppress'                => 'Superbisión',

# Book sources
'booksources'               => 'Fuents de libros',
'booksources-search-legend' => 'Mirar fuents de libros',
'booksources-go'            => 'Ir-ie',
'booksources-text'          => 'Contino ye una lista de vinclos ta atros puestos an que venden libros nuevos y usatos, talment bi aiga más información sobre os libros que ye mirando.',
'booksources-invalid-isbn'  => "O numero d'ISBN dato pareix que no ye conforme; comprebe si no bi ha garra error en copiar d'a fuent orichinal.",

# Special:Log
'specialloguserlabel'  => 'Usuario:',
'speciallogtitlelabel' => 'Títol:',
'log'                  => 'Rechistros',
'all-logs-page'        => 'Toz os rechistros publicos',
'alllogstext'          => "Presentazión conchunta de toz os rechistros de  {{SITENAME}}.
Puede reduzir o listau trigando un tipo de rechistro, o nombre de l'usuario (sensible á mayusclas), u a pachina afeutata (tamién sensible a mayusclas).",
'logempty'             => 'No bi ha garra elemento en o rechistro con ixas carauteristicas.',
'log-title-wildcard'   => 'Mirar títols que prenzipien con iste testo',

# Special:AllPages
'allpages'          => 'Todas as pachinas',
'alphaindexline'    => '$1 á $2',
'nextpage'          => 'Siguient pachina ($1)',
'prevpage'          => 'Pachina anterior ($1)',
'allpagesfrom'      => 'Amostrar as pachinas que prencipien por:',
'allpagesto'        => 'Amostrar as pachinas que rematen en:',
'allarticles'       => 'Toz os articlos',
'allinnamespace'    => 'Todas as pachinas (espazio $1)',
'allnotinnamespace' => "Todas as pachinas (fueras d'o espazio de nombres $1)",
'allpagesprev'      => 'Anterior',
'allpagesnext'      => 'Siguient',
'allpagessubmit'    => 'Amostrar',
'allpagesprefix'    => 'Amostrar pachinas con o prefixo:',
'allpagesbadtitle'  => 'O títol yera incorreuto u teneba un prefixo de binclo inter-luenga u inter-wiki. Puede contener uno u más caráuters que no se pueden emplegar en títols.',
'allpages-bad-ns'   => '{{SITENAME}} no tiene o espazio de nombres "$1".',

# Special:Categories
'categories'                    => 'Categorías',
'categoriespagetext'            => "{{PLURAL:$1|A siguient categoría contién|As siguients categorías contienen}} pachinas u archibos multimedia.
No s'amuestran aquí as [[Special:UnusedCategories|categorías no emplegatas]].
Se beigan tamién as [[Special:WantedCategories|categorías requiestas]].",
'categoriesfrom'                => 'Amostrar as categoría que prenzipien por:',
'special-categories-sort-count' => 'ordenar por recuento',
'special-categories-sort-abc'   => 'ordenar alfabeticament',

# Special:DeletedContributions
'deletedcontributions'             => "Contrebuzions d'usuario borratas",
'deletedcontributions-title'       => "Contrebuzions d'usuario borradas",
'sp-deletedcontributions-contribs' => 'contrebucions',

# Special:LinkSearch
'linksearch'       => 'Binclos esternos',
'linksearch-pat'   => 'Mirar patrón:',
'linksearch-ns'    => 'Espacio de nombres:',
'linksearch-ok'    => 'Mirar',
'linksearch-text'  => 'Pueden usar-se caráuters comodín como "*.wikipedia.org".<br />
Protocolos suportados: <tt>$1</tt>',
'linksearch-line'  => '$1 tiene un binclo dende $2',
'linksearch-error' => "Os caráuters comodín nomás pueden apareixer en o prenzipio d'o nombre d'o sitio.",

# Special:ListUsers
'listusersfrom'      => 'Amostrar usuarios que o nombre suyo prenzipie por:',
'listusers-submit'   => 'Amostrar',
'listusers-noresult' => "No s'ha trobato ixe usuario.",

# Special:Log/newusers
'newuserlogpage'              => 'Rechistro de nuevos usuarios',
'newuserlogpagetext'          => "Isto ye un rechistro de creyazión d'usuarios.",
'newuserlog-byemail'          => 'Palabra de paso nimbiata por correu electronico',
'newuserlog-create-entry'     => 'Nuevo usuario',
'newuserlog-create2-entry'    => "s'ha creyato a nueva cuenta $1",
'newuserlog-autocreate-entry' => 'Cuenta creyata automaticament',

# Special:ListGroupRights
'listgrouprights'                 => "Dreitos d'a colla d'usuarios",
'listgrouprights-summary'         => "Contino bi ye una lista de collas d'usuario definitas en iste wiki, con os suyos dreitos d'aczeso asoziatos. Tamién puet trobar aquí [[{{MediaWiki:Listgrouprights-helppage}}|informazión adizional]] sobre os dreitos indibiduals.",
'listgrouprights-group'           => 'Colla',
'listgrouprights-rights'          => 'Dreitos',
'listgrouprights-helppage'        => "Help:Dreitos d'a colla",
'listgrouprights-members'         => '(lista de miembros)',
'listgrouprights-addgroup'        => 'Puet adhibir {{PLURAL:$2|colla|collas}}: $1',
'listgrouprights-removegroup'     => 'Puede borrar {{PLURAL:$2|colla|collas}}: $1',
'listgrouprights-addgroup-all'    => 'Puede adhibir todas as collas',
'listgrouprights-removegroup-all' => 'Puede borrar todas as collas',

# E-mail user
'mailnologin'      => "No nimbiar l'adreza",
'mailnologintext'  => "Ha d'aber [[Special:UserLogin|enzetato una sesión]] y tener una adreza de correu-e conforme en as suyas [[Special:Preferences|preferenzias]] ta nimbiar un correu eletronico ta atros usuarios.",
'emailuser'        => 'Nimbiar un correu electronico ta iste usuario',
'emailpage'        => "Nimbiar correu ta l'usuario",
'emailpagetext'    => 'Puede fer serbir o formulario que bi ye contino ta nimbiar un correu eletronico á iste usuario.
L\'adreza de correu-e que endicó en as suyas [[Special:Preferences|preferenzias d\'usuario]] amaneixerá en o campo "Remitent" ta que o destinatario pueda responder-le.',
'usermailererror'  => "L'ocheto de correu retornó una error:",
'defemailsubject'  => 'Correu de {{SITENAME}}',
'noemailtitle'     => 'No bi ha garra adreza de correu eletronico',
'noemailtext'      => 'Iste usuario no ha espezificato una adreza conforme de correu electronico.',
'nowikiemailtitle' => 'no se premiten os correus eletronicos',
'nowikiemailtext'  => "Iste usuario ha esleyiu de no rezibir correus eletronicos d'atros usuarios.",
'email-legend'     => 'Nimbiar un correu eletronico ta atro usuario de {{SITENAME}}',
'emailfrom'        => 'De:',
'emailto'          => 'Ta:',
'emailsubject'     => 'Afer:',
'emailmessage'     => 'Mensache:',
'emailsend'        => 'Nimbiar',
'emailccme'        => "Nimbiar-me una copia d'o mío mensache.",
'emailccsubject'   => "Copia d'o suyo mensache ta $1: $2",
'emailsent'        => 'Mensache de correu nimbiato',
'emailsenttext'    => "S'ha nimbiato o suyo correu.",
'emailuserfooter'  => 'Iste correu-e s\'ha nimbiato por $1 ta $2 fendo serbir a funzión "Email user" de {{SITENAME}}.',

# Watchlist
'watchlist'            => 'Lista de seguimiento',
'mywatchlist'          => 'Lista de seguimiento',
'watchlistfor'         => "(de '''$1''')",
'nowatchlist'          => 'No tiens denguna pachina en a lista de seguimiento.',
'watchlistanontext'    => "Ha de $1 ta beyer u editar as dentradas d'a suya lista de seguimiento.",
'watchnologin'         => 'No ha enzetato a sesión',
'watchnologintext'     => "Ha d'estar [[Special:UserLogin|identificato]] ta poder cambiar a suya lista de seguimiento.",
'addedwatch'           => 'Adibiu á la suya lista de seguimiento',
'addedwatchtext'       => "A pachina «[[:\$1]]» s'ha adibhito t'a suya [[Special:Watchlist|lista de seguimiento]]. Os cambios esdevenideros en ista pachina y en a suya pachina de descusión asociata s'endicarán astí, y a pachina amanixerá '''en negreta''' en a [[Special:RecentChanges|lista de cambios recients]] ta que se veiga millor. <p>Si nunca quiere borrar a pachina d'a suya lista de seguimiento, punche \"Deixar de cosirar\" en o menú.",
'removedwatch'         => "Borrata d'a lista de seguimiento",
'removedwatchtext'     => 'A pachina "[[:$1]]" s\'ha sacau d\'a suya [[Special:Watchlist|lista de seguimiento]].',
'watch'                => 'Cosirar',
'watchthispage'        => 'Cosirar ista pachina',
'unwatch'              => 'Deixar de cosirar',
'unwatchthispage'      => 'Deixar de cosirar',
'notanarticle'         => 'No ye una pachina de conteniu',
'notvisiblerev'        => "S'ha borrato a revisión",
'watchnochange'        => "Dengún d'os articlos d'a suya lista de seguimiento no s'ha editoato en o periodo de tiempo amostrato.",
'watchlist-details'    => '{{PLURAL:$1|$1 pachina|$1 pachinas}} en a suya lista de seguimiento, sin contar-ie as pachinas de descusión.',
'wlheader-enotif'      => '* A notificazión por correu eletronico ye autibata',
'wlheader-showupdated' => "* Las pachinas cambiadas dende a suya zaguer besita s'amuestran en '''negreta'''",
'watchmethod-recent'   => 'Mirando pachinas cosiratas en os zaguers cambeos',
'watchmethod-list'     => 'mirando edizions rezients en as pachinas cosiratas',
'watchlistcontains'    => 'A suya lista de seguimiento tiene $1 {{PLURAL:$1|pachina|pachinas}}.',
'iteminvalidname'      => "Bi ha un problema con l'articlo '$1', o nombre no ye conforme...",
'wlnote'               => "Contino se i {{PLURAL:$1|amuestra o zaguer cambeo|amuestran os zaguers '''$1''' cambeos}} en {{PLURAL:$2|a zaguer ora|as zagueras '''$2''' oras}}.",
'wlshowlast'           => 'Amostrar as zagueras $1 horas, $2 días u $3',
'watchlist-options'    => "Opcions d'a lista de seguimiento",

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Cosirando...',
'unwatching' => 'Deixar de cosirar...',

'enotif_mailer'                => 'Sistema de notificazión por correu de {{SITENAME}}',
'enotif_reset'                 => 'Marcar todas as pachinas como besitatas',
'enotif_newpagetext'           => 'Ista ye una nueva pachina.',
'enotif_impersonal_salutation' => 'usuario de {{SITENAME}}',
'changed'                      => 'editata',
'created'                      => 'creyata',
'enotif_subject'               => 'A pachina $PAGETITLE de {{SITENAME}} ha estato $CHANGEDORCREATED por $PAGEEDITOR',
'enotif_lastvisited'           => 'Baiga ta $1 ta beyer toz os cambeos dende a suya zaguer besita.',
'enotif_lastdiff'              => 'Baiga ta $1 ta beyer iste cambeo.',
'enotif_anon_editor'           => 'usuario anonimo $1',
'enotif_body'                  => 'Quiesto/a $WATCHINGUSERNAME,

A pachina $PAGETITLE de {{SITENAME}} ha estato $CHANGEDORCREATED por l\'usuario $PAGEEDITOR o $PAGEEDITDATE. Puede veyer a versión actual en $PAGETITLE_URL.

$NEWPAGE

Resumen d\'edición: $PAGESUMMARY $PAGEMINOREDIT

Ta contactar con l\'editor:
correu: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Ta recullir nuevas notificacions de cambios d\'ista pachina habrá de vesitar-la nuevament.
Tamién puede cambiar, en a su lista de seguimiento, as opcions de notificación d\'as pachinas que ye cosirando.

Atentament,
O sistema de notificazión de {{SITENAME}}.

--
Ta cambiar as opcions d\'a suya lista de seguimiento, punche:
{{fullurl:{{#special:Watchlist}}/edit}}

Ta borrar ista pachina d\'a suya lista de seguimiento, punche:
$UNWATCHURL

Ta obtenir más informazión y aduya:
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'             => 'Borrar ista pachina',
'confirm'                => 'Confirmar',
'excontent'              => "O conteniu yera: '$1'",
'excontentauthor'        => "O conteniu yera: '$1' (y o suyo unico autor '$2')",
'exbeforeblank'          => "O conteniu antis de blanquiar yera: '$1'",
'exblank'                => 'a pachina yera bueda',
'delete-confirm'         => 'Borrar "$1"',
'delete-legend'          => 'Borrar',
'historywarning'         => "'''Pare cuenta!:''' A pachina que ye en momentos de borrar tien un istorial de $1 {{PLURAL:$1|versión|versions}}:",
'confirmdeletetext'      => "Ye en momentos de borrar d'a base de datos una pachina con tot o suyo historial.
Por favor, confirme que reyalment ye mirando de fer ixo, que entiende as conseqüencias, y que lo fa d'alcuerdo con as [[{{MediaWiki:Policy-url}}|politicas]] d'o wiki.",
'actioncomplete'         => 'Acción rematada',
'actionfailed'           => "L'acción ha feito fallita",
'deletedtext'            => 'S\'ha borrau "<nowiki>$1</nowiki>".
Se veiga en $2 un rechistro d\'os borraus recients.',
'deletedarticle'         => 'borrato "$1"',
'suppressedarticle'      => 's\'ha supreso "[[$1]]"',
'dellogpage'             => 'Rechistro de borraus',
'dellogpagetext'         => "Contino se i amuestra una lista d'os borraus más rezients.",
'deletionlog'            => 'rechistro de borraus',
'reverted'               => "S'ha tornato ta una versión anterior",
'deletecomment'          => 'Razón ta borrar:',
'deleteotherreason'      => 'Otras/Más razons:',
'deletereasonotherlist'  => 'Atra razón',
'deletereason-dropdown'  => "*Razons comuns de borrau
** Á demanda d'o mesmo autor
** trencadura de copyright
** Bandalismo",
'delete-edit-reasonlist' => "Editar as razons d'o borrau",
'delete-toobig'          => "Ista pachina tiene un historial d'edicions prou largo, con mas de $1 {{PLURAL:$1|versión|versions}}. S'ha restrinchito o borrau d'ista mena de pachinas ta aprevenir d'a corrompición accidental de {{SITENAME}}.",
'delete-warning-toobig'  => "Ista pachina tiene un historial d'edición prou largo, con más de $1 {{PLURAL:$1|versión|versions}}. Si la borra podría corromper as operacions d'a base de datos de {{SITENAME}}; contine con cuenta.",

# Rollback
'rollback'          => 'Revertir edicions',
'rollback_short'    => 'Revertir',
'rollbacklink'      => 'revertir',
'rollbackfailed'    => "No s'ha puesto esfer",
'cantrollback'      => "No se pueden esfer as edizions; o zaguer colaborador ye o unico autor d'iste articlo.",
'alreadyrolled'     => "No se puet desfer a zaguer edizión de [[:$1]] feita por [[User:$2|$2]] ([[User talk:$2|descusión]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]); belatro usuario ya ha editato u desfeito edizions en ixa pachina. 

A zaguer edizión d'a pachina la fazió [[User:$3|$3]] ([[User talk:$3|descusión]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).",
'editcomment'       => "O resumen d'a edizión ye: \"''\$1''\".",
'revertpage'        => "S'han revertito as edicions de [[Special:Contributions/$2|$2]] ([[User talk:$2|Descusión]]); tornando t'a zaguera versión editada por [[User:$1|$1]]",
'revertpage-nouser' => "S'han revertito as edicions feitas por (nombre d'usuario eliminato) a la zaguera versión feita por [[User:$1|$1]]",
'rollback-success'  => "Revertidas as edicions de $1; s'ha retornato t'a zaguer versión de $2.",
'sessionfailure'    => 'Pareix que bi ha un problema con a suya sesión;
s\'ha anulato ista aizión como mida de precura contra secuestros de sesión.
Por fabor, prete "Entazaga", recargue a pachina d\'a que benió, y torne á prebar alabez.',

# Protect
'protectlogpage'              => 'Rechistro de proteccions de pachinas',
'protectlogtext'              => 'Contino se i amuestra una lista de protezions y esprotezions de pachinas. Se beiga [[Special:ProtectedPages|lista de pachinas protechitas]] ta más informazión.',
'protectedarticle'            => "s'ha protechito [[$1]]",
'modifiedarticleprotection'   => 's\'ha cambiato o livel de protección de "[[$1]]"',
'unprotectedarticle'          => "s'ha esprotechito [[$1]]",
'movedarticleprotection'      => 'camiatos os parametros de protezión de "[[$2]]" á "[[$1]]"',
'protect-title'               => 'Protechendo "$1"',
'prot_1movedto2'              => '[[$1]] tresladada á [[$2]]',
'protect-legend'              => 'Confirmar protezión',
'protectcomment'              => 'Razón:',
'protectexpiry'               => 'Calendata de circundución:',
'protect_expiry_invalid'      => 'O tiempo de circunducción ye incorrecto.',
'protect_expiry_old'          => 'O tiempo de circumducción ye una calendata ya pasata.',
'protect-text'                => "Puetz veyer y cambiar o livel e protección d'a pachina '''<nowiki>$1</nowiki>'''.",
'protect-locked-blocked'      => "No puede cambiar os libels de protezión mientres ye bloqueyato. Contino se i amuestran as opzions autuals d'a pachina '''$1''':",
'protect-locked-dblock'       => "Os libels de protezión no se pueden cambiar por un bloqueyo autibo d'a base de datos.
Contino se i amuestran as opzions autuals d'a pachina '''$1''':",
'protect-locked-access'       => "A suya cuenta no tiene premiso ta cambiar os livels de protección d'as pachinas. Aquí bi son as propiedatz actuals d'a pachina '''$1''':",
'protect-cascadeon'           => "Ista pachina ye actualment protechita por estar encluyita en {{PLURAL:$1|a siguient pachina|as siguients pachinas}}, que tienen activata a opción de protección en cascada. Puede cambiar o livel de protección d'ista pachina, pero no afectará á la protección en cascada.",
'protect-default'             => 'Premitir á toz os usuarios',
'protect-fallback'            => 'Amenista o premiso "$1"',
'protect-level-autoconfirmed' => 'Bloqueyar os usuarios nuevos y no rechistratos',
'protect-level-sysop'         => 'Sólo almenistradors',
'protect-summary-cascade'     => 'en cascada',
'protect-expiring'            => 'caduca o $1 (UTC)',
'protect-expiry-indefinite'   => 'indefinito',
'protect-cascade'             => 'Protección en cascada - protecher totas as pachinas encluyidas en ista.',
'protect-cantedit'            => "No puet cambiar os livels de protección d'ista pachina, porque no tiene premiso ta editar-la.",
'protect-othertime'           => 'atro periodo:',
'protect-othertime-op'        => 'atra (espezificar)',
'protect-existing-expiry'     => 'Calendata de zircunduzión autual: $2 a las $3',
'protect-otherreason'         => 'Atra razón:',
'protect-otherreason-op'      => 'Atra razón',
'protect-dropdown'            => "*Razons de protezión eszesibo
**Bandalismo eszesibo
**Spam eszesibo
**Guerra d'edizions
**Pachina muit besitada",
'protect-edit-reasonlist'     => 'Editar as razons ta protecher',
'protect-expiry-options'      => '1 ora:1 hour,1 día:1 day,1 semana:1 week,2 semanas:2 weeks,1 mes:1 month,3 meses:3 months,6 meses:6 months,1 año:1 year,ta cutio:infinite',
'restriction-type'            => 'Premiso:',
'restriction-level'           => 'Livel de restricción:',
'minimum-size'                => 'Grandaria menima',
'maximum-size'                => 'Grandaria masima:',
'pagesize'                    => '(bytes)',

# Restrictions (nouns)
'restriction-edit'   => 'Edizión',
'restriction-move'   => 'Tresladar',
'restriction-create' => 'Creyar',
'restriction-upload' => 'Carga',

# Restriction levels
'restriction-level-sysop'         => 'protechita de tot',
'restriction-level-autoconfirmed' => 'semiprotechita',
'restriction-level-all'           => 'cualsiquier libel',

# Undelete
'undelete'                     => 'Beyer pachinas borratas',
'undeletepage'                 => 'Beyer y restaurar pachinas borratas',
'undeletepagetitle'            => "'''Contino s'amuestran as versions borratas de [[:$1]]'''.",
'viewdeletedpage'              => 'Beyer pachinas borratas',
'undeletepagetext'             => "{{PLURAL:$1|A pachina siguent ye estada borrata pera encara ye|As siguients $1 pachinas son estadas borratas pero encara son}} en l'archibo y {{PLURAL:$1|podría restaurar-se|podrían restaurar-sen}}. L'archibo se borra periodicament.",
'undelete-fieldset-title'      => 'Restaurar versions',
'undeleteextrahelp'            => "Ta restaurar tot o istorial de versions d'una pachina, deixe todas as caixetas sin sinyalar y prete '''''Restaurar!'''''. Ta no restaurar que bell unas d'as versions, sinyale as caixetas correspondients a las versions que quiere restaurar y punche dimpués en '''''Restaurar!'''''. Punchando en '''''Prencipiar''''' se borrará o comentario y se tirarán os sinyals d'as caixetas.",
'undeleterevisions'            => '$1 {{PLURAL:$1|versión|versions}} archivatas',
'undeletehistory'              => "Si restableix a pachina, se restaurarán  todas as versions en o suyo historial. 
Si s'ha creyato una nueva pachina con o mesmo nombre dende que se borró a orichinal, as versions restauradas amaneixerán antes en o istorial.",
'undeleterevdel'               => "O borrau no se desferá si resultalse en o borrau parcial d'a zaguera versión d'a pachina u o fichero.  En ixos casos, ha de deseleccionar u fer veyer as versions borratas más recients.",
'undeletehistorynoadmin'       => "Esta pachina ye borrata. A razón d'o suyo borrau s'amuestra más t'abaixo en o resumen, asinas como os detalles d'os usuarios que eban editato a pachina antes d'o borrau. O testo completo d'istas edizions borratas ye disponible nomás ta os almenistradors.",
'undelete-revision'            => 'Versión borrata de $1 (editada por $3, o $4 a las $5):',
'undeleterevision-missing'     => "Versión no conforme u no trobata. Regular que o vinclo sía incorreuto u que ixa versión s'haiga restaurato u borrato de l'archivo.",
'undelete-nodiff'              => "No s'ha trobato garra versión anterior.",
'undeletebtn'                  => 'Restaurar!',
'undeletelink'                 => 'amostrar/restaurar',
'undeleteviewlink'             => 'veyer',
'undeletereset'                => 'Prenzipiar',
'undeleteinvert'               => 'Contornar selezión',
'undeletecomment'              => 'Razón ta restaurar:',
'undeletedarticle'             => 'restaurata "$1"',
'undeletedrevisions'           => '{{PLURAL:$1|Una edizión restaurata|$1 edizions restauratas}}',
'undeletedrevisions-files'     => '$1 {{PLURAL:$1|rebisión|rebisions}} y $2 {{PLURAL:$2|archibo|archibos}} restauratos',
'undeletedfiles'               => '$1 {{PLURAL:$1|archibo restaurato|archibos restauratos}}',
'cannotundelete'               => "No s'ha puesto esfer o borrau; belatro usuario puede aber esfeito antis o borrau.",
'undeletedpage'                => "'''S'ha restaurato $1'''

Consulte o [[Special:Log/delete|rechistro de borraus]] ta beyer una lista d'os zaguers borraus y restaurazions.",
'undelete-header'              => 'En o [[Special:Log/delete|rechistro de borraus]] se listan as pachina borratas fa poco tiempo.',
'undelete-search-box'          => 'Mirar en as pachinas borratas',
'undelete-search-prefix'       => 'Amostrar as pachinas que prenzipien por:',
'undelete-search-submit'       => 'Mirar',
'undelete-no-results'          => "No s'han trobato pachinas borratas con ixos criterios.",
'undelete-filename-mismatch'   => "No se pueden restaurar a rebisión d'archibo con calendata $1: o nombre d'archibo no consona",
'undelete-bad-store-key'       => "No se puede restaurar a versión de l'archivo con calendata $1: l'archivo ya no se i trobaba antis d'o borrau.",
'undelete-cleanup-error'       => 'Bi abió una error mientres se borraba l\'archibo "$1".',
'undelete-missing-filearchive' => "No ye posible restaurar l'archibo con ID $1 porque no bi ye en a base de datos. Puede que ya s'aiga restaurato.",
'undelete-error-short'         => "Error mientres se restauraba l'archibo: $1",
'undelete-error-long'          => 'Bi abió errors mientres se borraban os archibos:

$1',
'undelete-show-file-confirm'   => 'Seguro que quiere veyer una versión borrata d\'o fichero "<nowiki>$1</nowiki>" d\'o $2 a las $3?',
'undelete-show-file-submit'    => 'Sí',

# Namespace form on various pages
'namespace'      => 'Espacio de nombres:',
'invert'         => 'Contornar selección',
'blanknamespace' => '(Prencipal)',

# Contributions
'contributions'       => "Contrebucions de l'usuario",
'contributions-title' => "Contribucions de l'usuario $1",
'mycontris'           => 'Contrebucions',
'contribsub2'         => 'De $1 ($2)',
'nocontribs'          => "No s'han trobato cambeos que concordasen con ixos criterios",
'uctop'               => '(zaguer cambeo)',
'month'               => 'Dende o mes (y anteriors):',
'year'                => "Dende l'anyo (y anteriors):",

'sp-contributions-newbies'       => "Amostrar nomás as contrebucions d'os usuarios nuevos",
'sp-contributions-newbies-sub'   => 'Por nuevos usuarios',
'sp-contributions-newbies-title' => "Contrebucions d'os nuevos usuarios",
'sp-contributions-blocklog'      => 'Rechistro de bloqueyos',
'sp-contributions-talk'          => 'descusión',
'sp-contributions-search'        => 'Mirar contribucions',
'sp-contributions-username'      => "Adreza IP u nombre d'usuario:",
'sp-contributions-submit'        => 'Mirar',

# What links here
'whatlinkshere'            => 'Pachinas que enlazan con ista',
'whatlinkshere-title'      => 'Pachinas que tienen vinclos ta $1',
'whatlinkshere-page'       => 'Pachina:',
'linkshere'                => "As siguients pachinas tienen vinclos enta '''[[:$1]]''':",
'nolinkshere'              => "Denguna pachina tiene binclos ta '''[[:$1]]'''.",
'nolinkshere-ns'           => "Denguna pachina d'o espazio de nombres trigato tiene binclos ta '''[[:$1]]'''.",
'isredirect'               => 'pachina reendrezata',
'istemplate'               => 'encluyida',
'isimage'                  => 'vinclo ta imachen',
'whatlinkshere-prev'       => '{{PLURAL:$1|anterior|anteriors $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|siguient|siguients $1}}',
'whatlinkshere-links'      => '← vinclos',
'whatlinkshere-hideredirs' => '$1 endreceras',
'whatlinkshere-hidetrans'  => '$1 transclusions',
'whatlinkshere-hidelinks'  => '$1 vinclos',
'whatlinkshere-hideimages' => '$1 binclos ta imachens',
'whatlinkshere-filters'    => 'Filtros',

# Block/unblock
'blockip'                         => 'Bloqueyar usuario',
'blockip-legend'                  => 'Bloqueyar usuario',
'blockiptext'                     => "Replene o siguient formulario ta bloqueyar l'azeso
d'escritura dende una cuenta d'usuario u una adreza IP espezifica.
Isto abría de fer-se sólo ta pribar bandalismos, y d'alcuerdo con
as [[{{MediaWiki:Policy-url}}|politicas]].
Escriba a razón espezifica ta o bloqueyo (por exemplo, cuaternando
as pachinas que s'han bandalizato).",
'ipaddress'                       => 'Adreza IP',
'ipadressorusername'              => "Adreza IP u nombre d'usuario",
'ipbexpiry'                       => 'Zircunduzión:',
'ipbreason'                       => 'Razón:',
'ipbreasonotherlist'              => 'Atra razón',
'ipbreason-dropdown'              => "*Razons comuns de bloqueyo
** Meter informazión falsa
** Borrar conteniu d'as pachinas
** Fer publizidat ficando binclos con atras pachinas web
** Meter sinconisions u basuera en as pachinas
** Portar-se de traza intimidatoria u biolenta / atosegar
** Abusar de multiples cuentas
** Nombre d'usuario inazeutable",
'ipbanononly'                     => 'Bloqueyar nomás os usuarios anonimos',
'ipbcreateaccount'                => "Aprebenir a creyazión de cuentas d'usuario.",
'ipbemailban'                     => 'Pribar que os usuarios nimbíen correus electronicos',
'ipbenableautoblock'              => "bloqueyar automaticament l'adreza IP emplegata por iste usuario, y cualsiquier IP posterior dende a que prebe d'editar",
'ipbsubmit'                       => 'bloqueyar á iste usuario',
'ipbother'                        => 'Espezificar atro periodo',
'ipboptions'                      => '2 horas:2 hours,1 día:1 day,3 días:3 days,1 semana:1 week,2 semanas:2 weeks,1 mes:1 month,3 meses:3 months,6 meses:6 months,1 anyo:1 year,ta cutio:infinite',
'ipbotheroption'                  => 'un atra',
'ipbotherreason'                  => 'Razons diferens u adizionals',
'ipbhidename'                     => "Amagar o nombre d'usuario en edizions y listas",
'ipbwatchuser'                    => "Cosirar as pachinas d'usuario y de descusión d'iste usuario",
'ipballowusertalk'                => 'Premitir que iste usuario edite a suya pachina de descusión en o tiempo que ye bloqueyato',
'ipb-change-block'                => "Rebloquyear á l'usuario con istas condizions",
'badipaddress'                    => "L'adreza IP no ye conforme.",
'blockipsuccesssub'               => "O bloqueyo s'ha feito correutament",
'blockipsuccesstext'              => "L'adreza IP [[Special:Contributions/$1|$1]] ye bloqueyata. <br />Ir t'a [[Special:IPBlockList|lista d'adrezas IP bloqueyatas]] ta beyer os bloqueyos.",
'ipb-edit-dropdown'               => "Editar as razons d'o bloqueyo",
'ipb-unblock-addr'                => 'Esbloqueyar $1',
'ipb-unblock'                     => 'Esbloqueyar un usuario u una IP',
'ipb-blocklist-addr'              => 'Bloqueyos autuals de $1',
'ipb-blocklist'                   => 'Amostrar bloqueyos autuals',
'ipb-blocklist-contribs'          => 'Contrebuzions de $1',
'unblockip'                       => 'Esbloqueyar usuario',
'unblockiptext'                   => "Replene o formulario que bi ha contino ta tornar os premisos d'escritura ta una adreza IP u cuenta d'usuario que aiga estato bloqueyata.",
'ipusubmit'                       => 'Debantar ista bloqueyo',
'unblocked'                       => '[[User:$1|$1]] ha estato esbloqueyato',
'unblocked-id'                    => "S'ha sacato o bloqueyo $1",
'ipblocklist'                     => "Adrezas IP y nombres d'usuario bloqueyatos",
'ipblocklist-legend'              => 'Mirar un usuario bloqueyato',
'ipblocklist-username'            => "Nombre d'usuario u adreza IP:",
'ipblocklist-sh-userblocks'       => '$1 bloqueyos de cuentas',
'ipblocklist-sh-tempblocks'       => '$1 bloqueyos temporals',
'ipblocklist-sh-addressblocks'    => "$1 bloqueyos d'adrezas IP endibiduals",
'ipblocklist-submit'              => 'Mirar',
'ipblocklist-localblock'          => 'Bloqueyo local',
'ipblocklist-otherblocks'         => '{{PLURAL:$1|Atro bloqueyo|Atros bloqueyos}}',
'blocklistline'                   => '$1, $2 ha bloqueyato á $3 ($4)',
'infiniteblock'                   => 'infinito',
'expiringblock'                   => 'zircunduz o $1 á las $2',
'anononlyblock'                   => 'nomás anon.',
'noautoblockblock'                => 'Bloqueyo automatico desautibato',
'createaccountblock'              => "S'ha bloqueyato a creyación de nuevas cuentas",
'emailblock'                      => "S'ha bloqueyato o nimbió de correus electronicos",
'blocklist-nousertalk'            => 'No puet editar a suya propia pachina de descusión',
'ipblocklist-empty'               => 'A lista de bloqueyos ye bueda.',
'ipblocklist-no-results'          => "A cuenta d'usuario u adreza IP endicata no ye bloqueyata.",
'blocklink'                       => 'bloqueyar',
'unblocklink'                     => 'esbloqueyar',
'change-blocklink'                => 'cambear bloqueyo',
'contribslink'                    => 'contrebucions',
'autoblocker'                     => 'Ye bloqueyato automaticament porque a suya adreza IP l\'ha feito serbir rezientement "[[User:$1|$1]]". A razón data ta bloqueyar á "[[User:$1|$1]]" estió "$2".',
'blocklogpage'                    => 'Rechistro de bloqueyos',
'blocklog-showlog'                => "Iste usuario ya ha estau bloqueyau. 
Ta más detalles, debaixo s'amuestro o rechistro de bloqueyos:",
'blocklog-showsuppresslog'        => "Iste usuario ha estau bloqueyau y amagau.
Ta más detalles, debaixo s'amuestra o rechistro de supresions:",
'blocklogentry'                   => "S'ha bloqueyato á [[$1]] con una durada de $2 $3",
'reblock-logentry'                => 'cambiato o bloqueyo de [[$1]] con zircunduzión o $3 á las $2',
'blocklogtext'                    => "Isto ye un rechistro de bloqueyos y esbloqueyos d'usuarios. As adrezas bloqueyatas automaticament no amaneixen aquí. Mire-se a [[Special:IPBlockList|lista d'adrezas IP bloqueyatas]] ta beyer a lista autual de biedas y bloqueyos.",
'unblocklogentry'                 => 'ha esbloqueyato á "$1"',
'block-log-flags-anononly'        => 'nomás os usuarios anonimos',
'block-log-flags-nocreate'        => "s'ha desactivato a creyación de cuentas",
'block-log-flags-noautoblock'     => "s'ha desautibato o bloqueyo automatico",
'block-log-flags-noemail'         => "s'ha desautibato o nimbío de mensaches por correu electronico",
'block-log-flags-nousertalk'      => 'no puet editar a suya pachina de descusión',
'block-log-flags-angry-autoblock' => "s'ha autibato l'autobloqueyo amillorato",
'block-log-flags-hiddenname'      => "nombre d'usuario oculto",
'range_block_disabled'            => "A posibilidat d'os almenistradors de bloqueyar rangos d'adrezas IP ye desautibata.",
'ipb_expiry_invalid'              => 'O tiempo de zircunduzión no ye conforme.',
'ipb_expiry_temp'                 => "Os bloqueyos con nombre d'usuario amagato abría d'estar ta cutio.",
'ipb_hide_invalid'                => "No s'ha puesto eliminar a cuenta; talment tiene masiadas edicions.",
'ipb_already_blocked'             => '"$1" ya yera bloqueyato',
'ipb-needreblock'                 => "== Ya ye bloqueyato ==
$1 ya ye bloqueyato. Quiere cambiar as condizions d'o bloqueyo?",
'ipb-otherblocks-header'          => '{{PLURAL:$1|Atro bloqueyo|Atros bloqueyos}}',
'ipb_cant_unblock'                => "'''Error''': no s'ha trobato o ID de bloqueyo $1. Talment sía ya esbloqueyato.",
'ipb_blocked_as_range'            => "Error: L'adreza IP $1 no s'ha bloqueyato dreitament y por ixo no se puede esbloqueyar. Manimenos, ye bloqueyata por estar parte d'o rango $2, que sí buede esbloqueyar-se de conchunta.",
'ip_range_invalid'                => "O rango d'adrezas IP no ye conforme.",
'ip_range_toolarge'               => 'No se permiten os bloqueyos de rangos más grans que /$1.',
'blockme'                         => 'bloqueyar-me',
'proxyblocker'                    => 'bloqueyador de proxies',
'proxyblocker-disabled'           => 'Ista funzión ye desautibata.',
'proxyblockreason'                => "S'ha bloqueyato a suya adreza IP porque ye un proxy ubierto. Por fabor, contaute on o suyo furnidor de serbizios d'Internet u con o suyo serbizio d'asistenzia tecnica e informe-les d'iste grau problema de seguridat.",
'proxyblocksuccess'               => 'Feito.',
'sorbsreason'                     => 'A suya adreza IP ye en a lista de proxies ubiertos en a DNSBL de {{SITENAME}}.',
'sorbs_create_account_reason'     => 'A suya adreza IP ye en a lista de proxies ubiertos en a DNSBL de {{SITENAME}}. No puede creyar una cuenta',
'cant-block-while-blocked'        => 'No puet bloqueyar á atros usuarios en o tiempo que ye bloqueyato.',
'cant-see-hidden-user'            => "L'usuario a qui ye mirando de bloqueyar ya ye bloqueyau y amagau. Como que ye posible que vusté no tienga o dreito hideuser, no puede veyer ni editar os bloqueyos d'ixe usuario.",
'ipbblocked'                      => 'No puede bloqueyar ni desbloqueyar atros usuarios porque ya ye bloqueyau.',
'ipbnounblockself'                => 'No tiene permiso ta sacar o suyo propio bloqueyo',

# Developer tools
'lockdb'              => 'Trancar a base de datos',
'unlockdb'            => 'Estrancar a base de datos',
'lockdbtext'          => "Trancando a base de datos pribará á toz os usuarios d'editar pachinas, cambiar as preferenzias, cambiar as listas de seguimiento y cualsiquier atra funzión que ameniste fer cambios en a base de datos. Por fabor, confirme que isto ye mesmament o que se mira de fer y que estrancará a base de datos malas que aiga rematato con a faina de mantenimiento.",
'unlockdbtext'        => "Estrancando a base de datos premitirá á toz os usuarios d'editar pachinas, cambiar as preferenzias y as listas de seguimiento, y cualsiquier atra funzión que ameniste cambiar a base de datos. Por fabor, confirme que isto ye mesmament o que se mira de fer.",
'lockconfirm'         => 'Sí, de berdat quiero trancar a base de datos.',
'unlockconfirm'       => 'Sí, de berdat quiero estrancar a base de datos.',
'lockbtn'             => 'Trancar a base de datos',
'unlockbtn'           => 'Estrancar a base de datos',
'locknoconfirm'       => 'No ha siñalato a caixeta de confirmazión.',
'lockdbsuccesssub'    => "A base de datos s'ha trancato correutament",
'unlockdbsuccesssub'  => "A base de datos s'ha estrancato correutament",
'lockdbsuccesstext'   => "Ha trancato a base de datos de {{SITENAME}}.
Alcuerde-se-ne d'[[Special:UnlockDB|estrancar a base de datos]] dimpués de rematar as fayenas de mantenimiento.",
'unlockdbsuccesstext' => "S'ha estrancato a base de datos de {{SITENAME}}.",
'lockfilenotwritable' => "O rechistro de trancamientos d'a base de datos no tiene premiso d'escritura. Ta trancar u estrancar a base de datos, iste archibo ha de tener premisos d'escritura en o serbidor web.",
'databasenotlocked'   => 'A base de datos no ye trancata.',

# Move page
'move-page'                    => 'Tresladar $1',
'move-page-legend'             => 'Tresladar pachina',
'movepagetext'                 => "Fendo servir o formulario siguient se cambiará o nombre d'a pachina, tresladando tot o suyo historial t'o nuevo nombre.
O títol anterior se tornará en una reendrecera ta o nuevo títol.
Puede esviellar automaticament as reendreceras que plegan ta o títol orichinal.
Si s'estima más de no fer-lo, asegure-se de no deixar [[Special:DoubleRedirects|reendreceras doples]] u [[Special:BrokenRedirects|trencatas]].
Ye a suya responsabilidat d'asegurar-se que os vinclos continan endrezando t'a on que habrían de fer-lo.

Remere que a pachina '''no''' se renombrará si ya existe una pachina con o nuebo títol, si no ye que estase una pachina vueda u una ''reendrecera'' sin historial.
Isto significa que podrá tresladar una pachina ta o suyo títol orichinal si ha feito una error, pero no podrá escribir dencima d'una pachina ya existent.

'''¡PARE CUENTA!'''
Iste puede estar un cambio drastico e inasperato ta una pachina popular;
por favor, asegure-se d'entender as conseqüencias que tendrá ista acción antes de seguir enta debant.",
'movepagetalktext'             => "A pachina de descusión asociata será tresladata automaticament '''de no estar que:'''

*Ya exista una pachina de descusión no vueda con o nombre nuevo, u
*Desactive a caixeta d'abaixo.

En ixos casos, si lo deseya, habrá de tresladar u combinar manualment o conteniu d'a pachina de descusión.",
'movearticle'                  => 'Tresladar pachina:',
'movenologin'                  => 'No ha enzetato sesión',
'movenologintext'              => 'Amenista estar un usuario rechistrato y [[Special:UserLogin|aber-se identificato enzetando una sesión]] ta tresladar una pachina.',
'movenotallowed'               => 'No tiene premisos ta tresladar pachinas.',
'movenotallowedfile'           => 'No tien premiso ta tresladar archibos.',
'cant-move-user-page'          => "No tien premiso ta tresladar pachinas d'usuario (fueras de subpachinas).",
'cant-move-to-user-page'       => "No tiene premisos ta tresladar una pachina ta una pachina d'usuario (fueras de si ye ta una subpachina).",
'newtitle'                     => 'Ta o nuevo títol',
'move-watch'                   => 'Cosirar iste articlo',
'movepagebtn'                  => 'Tresladar pachina',
'pagemovedsub'                 => 'Treslado feito correutament',
'movepage-moved'               => "S'ha tresladato '''\"\$1\"  ta \"\$2\"'''",
'movepage-moved-redirect'      => "S'ha creyato una reendrezera.",
'movepage-moved-noredirect'    => "S'ha canzelato a creyazión d'una reendrezera.",
'articleexists'                => 'Ya bi ha una pachina con ixe nombre u o nombre que ha eslechito no ye conforme. Por fabor trigue un atro nombre.',
'cantmove-titleprotected'      => 'No puede tresladar una pachina ta íste títol porque o nuevo títol ye protechito y no puede estar creyato',
'talkexists'                   => "A pachina s'ha tresladato correctament, pero a descusión no s'ha puesto tresladar porque ya en existe una con o nuebo títol. Por favor, incorpore manualment o suyo conteniu.",
'movedto'                      => 'tresladato ta',
'movetalk'                     => 'Tresladar a pachina de descusión asociata.',
'move-subpages'                => 'Tresladar as sozpachinas (dica $1)',
'move-talk-subpages'           => "Tresladar todas as sozpachinas d'a pachina de descusión (dica $1)",
'movepage-page-exists'         => 'A pachina $1 ya esiste y no se puede sobrescribir automaticament.',
'movepage-page-moved'          => "S'ha tresladato a pachina $1 ta $2.",
'movepage-page-unmoved'        => "No s'ha puesto tresladar a pachina $1 ta $2.",
'movepage-max-pages'           => "S'han tresladato o masimo posible de $1 {{PLURAL:$1|pachina|pachinas}} y no se tresladarán más automaticament.",
'1movedto2'                    => '[[$1]] tresladada á [[$2]]',
'1movedto2_redir'              => '[[$1]] tresladada á [[$2]] sobre una reendrecera',
'move-redirect-suppressed'     => 'reendrezera eliminata',
'movelogpage'                  => 'Rechistro de treslatos',
'movelogpagetext'              => 'Contino se i amuestra una lista de pachinas tresladatas.',
'movereason'                   => 'Razón:',
'revertmove'                   => 'revertir',
'delete_and_move'              => 'Borrar y tresladar',
'delete_and_move_text'         => '==S\'amenista borrar a pachina==

A pachina de destino ("[[:$1]]") ya esiste. Quiere borrar-la ta premitir o treslau?',
'delete_and_move_confirm'      => 'Sí, borrar a pachina',
'delete_and_move_reason'       => 'Borrata ta premitir o treslau',
'selfmove'                     => "Os títols d'orichen y destino son os mesmos. No se puede tresladar una pachina ta ella mesma.",
'immobile-source-namespace'    => 'No puede tresladar pachinas en o espazio de nombres "$1"',
'immobile-target-namespace'    => 'No puede tresladar pachinas enta o espazio de nombres "$1"',
'immobile-target-namespace-iw' => 'No se puet tresladar una pachina enta un binclo interwiki.',
'immobile-source-page'         => 'Ista pachina no se puet tresladar.',
'immobile-target-page'         => 'No se puet tresladar ta ixe títol.',
'imagenocrossnamespace'        => "No se puede tresladar un archibo ta un espazio de nombres que no sía t'archibos",
'imagetypemismatch'            => 'A nueva estensión no concuerda con o tipo de fichero',
'imageinvalidfilename'         => "O nombre de l'archibo obchetibo no ye conforme",
'fix-double-redirects'         => 'Esbiellar todas as reendrezeras que plegan ta o títol orichinal',
'move-leave-redirect'          => 'Deixar una reendrezera',

# Export
'export'            => 'Exportar pachinas',
'exporttext'        => "Puede exportar o texto y l'historial d'edicions d'una pachina u conchunto de pachinas ta un texto XML. Iste texto XML puede importar-se ta atro wiki que faiga servir MediaWiki a traviés d'a [[Special:Import|pachina d'importación]].

Ta exportar pachinas, escriba os títols en a caixa de texto que bi ha más ta baixo, metendo un títol en cada linia, y esliya si quiere exportar a versión autual con as versions anteriors y as linias de l'historial u nomás a versión actual con a información sobre a zaguer edición.

En iste zaguer caso tamién puede usar un vinclo, por eixemplo [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] t'a pachina \"[[{{MediaWiki:Mainpage}}]]\".",
'exportcuronly'     => "Incluyir nomás a versión actual, no pas l'historial de versions completo.",
'exportnohistory'   => "----
'''Nota:''' A esportazión de istorials de pachinas á trabiés d'iste formulario ye desautibata por problemas en o rendimiento d'o serbidor.",
'export-submit'     => 'Esportar',
'export-addcattext' => 'Adibir pachinas dende a categoría:',
'export-addcat'     => 'Adibir',
'export-download'   => 'Alzar como un archibo',
'export-templates'  => 'Encluyir-ie plantillas',

# Namespace 8 related
'allmessages'               => "Mensaches d'o sistema",
'allmessagesname'           => 'Nombre',
'allmessagesdefault'        => 'Testo por defeuto',
'allmessagescurrent'        => 'Testo autual',
'allmessagestext'           => "Ista ye una lista de toz os mensaches disponibles en o espazio de nombres MediaWiki.
Besite por fabor [http://www.mediawiki.org/wiki/Localisation a pachina sobre localizazión de MediaWiki] y  [http://translatewiki.net translatewiki.net] si deseya contrebuyir t'a localizazión cheneral de MediaWiki.",
'allmessagesnotsupportedDB' => 'Ista pachina no ye disponible porque wgUseDatabaseMessages ye desautibato.',

# Thumbnails
'thumbnail-more'           => 'Fer más gran',
'filemissing'              => 'Archibo no trobato',
'thumbnail_error'          => "S'ha produzito una error en creyar a miniatura: $1",
'djvu_page_error'          => "Pachina DjVu difuera d'o rango",
'djvu_no_xml'              => "No s'ha puesto replegar o XML ta l'archibo DjVu",
'thumbnail_invalid_params' => "Os parametros d'as miniatura no son correutos",
'thumbnail_dest_directory' => "No s'ha puesto creyar o direutorio de destino",

# Special:Import
'import'                     => 'Importar pachinas',
'importinterwiki'            => 'Importazión interwiki',
'import-interwiki-text'      => "Trigue un wiki y un títol de pachina ta importar.
As calendatas d'as versions y os nombres d'os editors se preservarán.
Todas as importacions interwiki se rechistran en o [[Special:Log/import|rechistro d'importacions]].",
'import-interwiki-source'    => 'Wiki/pachina fuent:',
'import-interwiki-history'   => "Copiar todas as versions de l'historial d'ista pachina",
'import-interwiki-submit'    => 'Importar',
'import-interwiki-namespace' => 'Espazio de nombres de destín:',
'import-upload-filename'     => "Nombre d'archibo:",
'import-comment'             => 'Comentario:',
'importtext'                 => "Por fabor, esporte l'archibo dende o wiki d'orichen fendo serbir a [[Special:Export|ferramienta d'esportazión]]. Alze-lo en o suyo ordenador y cargue-lo aquí.",
'importstart'                => 'Importando pachinas...',
'import-revision-count'      => '$1 {{PLURAL:$1|versión|versions}}',
'importnopages'              => 'No bi ha garra pachina ta importar.',
'importfailed'               => 'Ha fallato a importazión: $1',
'importunknownsource'        => "O tipo de fuent d'a importazión ye esconoixito",
'importcantopen'             => "No s'ha puesto importar iste archibo",
'importbadinterwiki'         => 'Binclo interwiki incorreuto',
'importnotext'               => 'Buendo y sin de testo',
'importsuccess'              => "S'ha rematato a importazión!",
'importhistoryconflict'      => "Bi ha un conflicto de versions en o istorial (talment ista pachina s'haiga importato denantes)",
'importnosources'            => "No bi ha fuents d'importazión interwiki y no ye premitito cargar o istorial dreitament.",
'importnofile'               => "No s'ha cargato os archibos d'importazión.",
'importuploaderrorsize'      => "Ha fallato a carga de l'archibo importato. L'archibo brinca d'a grandaria de carga premitita.",
'importuploaderrorpartial'   => "Ha fallato a carga de l'archibo importato. Sólo una parte de l'archibo s'ha cargato.",
'importuploaderrortemp'      => "Ha fallato a carga de l'archibo importato. No se troba o direutorio temporal.",
'import-parse-failure'       => "Fallo en o parseyo d'a importazión XML",
'import-noarticle'           => 'No bi ha garra pachina ta importar!',
'import-nonewrevisions'      => "Ya s'heban importato denantes todas as versions.",
'xml-error-string'           => '$1 en a linia $2, col $3 (byte $4): $5',
'import-upload'              => 'Datos XML cargatos',
'import-token-mismatch'      => "S'han perdito os datos d'a sesión. Por fabor, prebe unatra begada.",
'import-invalid-interwiki'   => 'No se puet importar dende o wiki espezificato.',

# Import log
'importlogpage'                    => "Rechistro d'importazions",
'importlogpagetext'                => 'Importazions almenistratibas de pachinas con istorial dende atros wikis.',
'import-logentry-upload'           => 'importata [[$1]] cargando un archibo',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|versión|versions}}',
'import-logentry-interwiki'        => 'Importata $1 entre wikis',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|versión|versions}} dende $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => "A suya pachina d'usuario",
'tooltip-pt-anonuserpage'         => "A pachina d'usuario de l'adreza IP dende a que ye editando",
'tooltip-pt-mytalk'               => 'A suya pachina de descusión',
'tooltip-pt-anontalk'             => 'Descusión sobre edizions feitas dende ista adreza IP',
'tooltip-pt-preferences'          => 'As suyas preferencias',
'tooltip-pt-watchlist'            => 'A lista de pachinas que en ye cosirando os cambeos',
'tooltip-pt-mycontris'            => "Lista d'as suyas contrebucions",
'tooltip-pt-login'                => 'Le recomendamos que se rechistre, encara que no ye obligatorio',
'tooltip-pt-anonlogin'            => 'Li alentamos á rechistrar-se, anque no ye obligatorio',
'tooltip-pt-logout'               => 'Rematar a sesión',
'tooltip-ca-talk'                 => "Descusión sobre l'articlo",
'tooltip-ca-edit'                 => 'Puede editar ista pachina. Por favor, faiga servir o botón de visualización previa antes de grabar.',
'tooltip-ca-addsection'           => 'Encetar una nueva sección',
'tooltip-ca-viewsource'           => 'Ista pachina ye protechit.
Puede veyer-ne, manimenos, o codigo fuent.',
'tooltip-ca-history'              => "Versions anteriors d'ista pachina.",
'tooltip-ca-protect'              => 'Protecher ista pachina',
'tooltip-ca-delete'               => 'Borrar ista pachina',
'tooltip-ca-undelete'             => 'Restaurar as edizions feitas á ista pachina antis que no estase borrata',
'tooltip-ca-move'                 => 'Tresladar (renombrar) ista pachina',
'tooltip-ca-watch'                => 'Adibir ista pachina a la suya lista de seguimiento',
'tooltip-ca-unwatch'              => "Borrar ista pachina d'a suya lista de seguimiento",
'tooltip-search'                  => 'Mirar en {{SITENAME}}',
'tooltip-search-go'               => "Ir t'a pachina con iste títol exacto, si existe",
'tooltip-search-fulltext'         => 'Mirar iste texto en as pachinas',
'tooltip-p-logo'                  => 'Portalada',
'tooltip-n-mainpage'              => 'Vesitar a Portalada',
'tooltip-n-mainpage-description'  => 'Vesitar a pachina prencipal',
'tooltip-n-portal'                => 'Sobre o prochecto, que puede fer, a on trobar as cosas',
'tooltip-n-currentevents'         => 'Trobar información cheneral sobre escaicimientos actuals',
'tooltip-n-recentchanges'         => "A lista d'os zaguers cambeos en o wiki",
'tooltip-n-randompage'            => 'Cargar una pachina aleatoriament',
'tooltip-n-help'                  => 'O puesto ta saber más.',
'tooltip-t-whatlinkshere'         => "Lista de todas as pachinas d'o wiki vinculatas con ista",
'tooltip-t-recentchangeslinked'   => 'Zaguers cambeos en as pachinas que tienen vinclos enta ista',
'tooltip-feed-rss'                => "Canal RSS d'ista pachina",
'tooltip-feed-atom'               => "Canal Atom d'ista pachina",
'tooltip-t-contributions'         => "Veyer a lista de contrebucions d'iste usuario",
'tooltip-t-emailuser'             => 'Ninviar un correu electronico ta iste usuario',
'tooltip-t-upload'                => 'Cargar archivos',
'tooltip-t-specialpages'          => 'Lista de todas as pachinas especials',
'tooltip-t-print'                 => "Versión d'ista pachina ta imprentar",
'tooltip-t-permalink'             => "Vinclo permanent ta ista versión d'a pachina",
'tooltip-ca-nstab-main'           => 'Veyer a pachina',
'tooltip-ca-nstab-user'           => "Veyer a pachina d'usuario",
'tooltip-ca-nstab-media'          => "Beyer a pachina d'o elemento multimedia",
'tooltip-ca-nstab-special'        => 'Ista ye una pachina especial, y no puede editar-la',
'tooltip-ca-nstab-project'        => "Veyer a pachina d'o prochecto",
'tooltip-ca-nstab-image'          => "Veyer a pachina de l'archivo",
'tooltip-ca-nstab-mediawiki'      => 'Beyer o mensache de sistema',
'tooltip-ca-nstab-template'       => 'Beyer a plantilla',
'tooltip-ca-nstab-help'           => "Beyer a pachina d'aduya",
'tooltip-ca-nstab-category'       => "Veyer a pachina d'a categoría",
'tooltip-minoredit'               => 'Sinyalar ista edición como menor',
'tooltip-save'                    => 'Alzar os cambeos',
'tooltip-preview'                 => 'Rebise os suyos cambeos, por fabor, faga serbir isto antes de grabar!',
'tooltip-diff'                    => 'Amuestra os cambeos que ha feito en o testo.',
'tooltip-compareselectedversions' => "Veyer  as esferencias entre as dos versions trigatas d'ista pachina.",
'tooltip-watch'                   => 'Adibir ista pachina á la suya lista de seguimiento',
'tooltip-recreate'                => 'Recreya una pachina mesmo si ya ha estato borrata dinantes',
'tooltip-upload'                  => 'Prenzipia a carga',
'tooltip-rollback'                => '"Revertir" revierte todas as zagueras edicions d\'un mesmo usuario en ista pachina nomás con un clic.',
'tooltip-undo'                    => '"Desfer" revierte a edición trigata y ubre a pachina d\'edición en o modo de previsualización. Deixa escribir una razón en o resumen d\'edición.',

# Metadata
'nodublincore'      => 'Metadatos Dublin Core RDF desautibatos en iste serbidor.',
'nocreativecommons' => 'Metadatos Creative Commons RDF desautibatos en iste serbidor.',
'notacceptable'     => 'O serbidor wiki no puede ufrir os datos en un formato que o suyo client (nabegador) pueda leyer.',

# Attribution
'anonymous'        => '{{PLURAL:$1|Usuario anónimo|Usuarios anónimos}} de {{SITENAME}}',
'siteuser'         => 'Usuario $1 de {{SITENAME}}',
'lastmodifiedatby' => 'Ista pachina estió modificata por zaguer begada á $2, $1 por $3.',
'othercontribs'    => 'Basato en o treballo de $1.',
'others'           => 'atros',
'siteusers'        => '{{PLURAL:$2|Usuario|Usuarios}} $1 de {{SITENAME}}',
'creditspage'      => "Creditos d'a pachina",
'nocredits'        => 'No bi ha informazión de creditos ta ista pachina.',

# Spam protection
'spamprotectiontitle' => 'Filtro de protezión contra o spam',
'spamprotectiontext'  => "A pachina que mira d'alzar l'ha bloqueyata o filtro de spam.  Regular que a causa sía que i aiga bel binclo ta un sitio esterno que i sía en a lista negra.",
'spamprotectionmatch' => 'O testo siguient ye o que autibó o nuestro filtro de spam: $1',
'spambot_username'    => 'Esporga de spam de MediaWiki',
'spam_reverting'      => "Tornando t'a zaguera versión sin de vinclos ta $1",
'spam_blanking'       => 'Todas as versions teneban vinclos ta $1, se deixa en blanco',

# Info page
'infosubtitle'   => "Informazión d'a pachina",
'numedits'       => "Numero d'edizions (articlo): $1",
'numtalkedits'   => "Numero d'edizions (pachina de descusión): $1",
'numwatchers'    => "Número d'usuario cosirando: $1",
'numauthors'     => "Numero d'autors (articlo): $1",
'numtalkauthors' => "Numero d'autors (pachina de descusión): $1",

# Skin names
'skinname-standard'    => 'Clasica (Classic)',
'skinname-nostalgia'   => 'Recosiros (Nostalgia)',
'skinname-cologneblue' => 'Colonia Azul (Cologne Blue)',
'skinname-myskin'      => 'A mía aparenzia (MySkin)',
'skinname-simple'      => 'Simpla (Simple)',

# Math options
'mw_math_png'    => 'Produzir siempre PNG',
'mw_math_simple' => "HTML si ye muit simple, si no'n ye, PNG",
'mw_math_html'   => "HTML si ye posible, si no'n ye, PNG",
'mw_math_source' => 'Deixar como TeX (ta nabegadores en formato testo)',
'mw_math_modern' => 'Recomendato ta nabegadors modernos',
'mw_math_mathml' => 'MathML si ye posible (esperimental)',

# Math errors
'math_failure'          => 'Error en o codigo',
'math_unknown_error'    => 'error esconoxita',
'math_unknown_function' => 'funzión esconoxita',
'math_lexing_error'     => 'error de lesico',
'math_syntax_error'     => 'error de sintacsis',
'math_image_error'      => 'A conversión enta PNG ha tenito errors; 
comprebe si latex, dvips, gs y convert son bien instalatos.',
'math_bad_tmpdir'       => "No s'ha puesto escribir u creyar o direutorio temporal d'esprisions matematicas",
'math_bad_output'       => "No s'ha puesto escribir u creyar o direutorio de salida d'esprisions matematicas",
'math_notexvc'          => "No s'ha trobato l'archibo executable ''texvc''. Por fabor, leiga <em>math/README</em> ta confegurar-lo correutament.",

# Patrolling
'markaspatrolleddiff'                 => 'Siñalar como ya controlato',
'markaspatrolledtext'                 => 'Siñalar iste articlo como controlato',
'markedaspatrolled'                   => 'Siñalato como controlato',
'markedaspatrolledtext'               => "A versión seleccionata de [[:$1]] s'ha sinyalato como patrullata.",
'rcpatroldisabled'                    => "S'ha desautibato o control d'os zagurers cambeos",
'rcpatroldisabledtext'                => "A funzión de control d'os zaguers cambeos ye desautibata en iste inte.",
'markedaspatrollederror'              => 'No se puede siñalar como controlata',
'markedaspatrollederrortext'          => "Ha d'especificar una versión ta sinyalar-la como revisata.",
'markedaspatrollederror-noautopatrol' => 'No tiene premisos ta siñalar os suyos propios cambios como controlatos.',

# Patrol log
'patrol-log-page'      => 'Rechistro de control de revisions',
'patrol-log-header'    => 'Iste ye un rechistro de rebisions patrullatas.',
'patrol-log-line'      => "s'ha sinyalato a versión $1 de $2 como revisata $3",
'patrol-log-auto'      => '(automatico)',
'patrol-log-diff'      => 'versión $1',
'log-show-hide-patrol' => '$1 o rechistro de patrullache',

# Image deletion
'deletedrevision'                 => "S'ha borrato a versión antiga $1",
'filedeleteerror-short'           => "Error borrando l'archibo: $1",
'filedeleteerror-long'            => "Se troboron errors borrando l'archibo:

$1",
'filedelete-missing'              => 'L\'archibo "$1" no se puede borrar porque no esiste.',
'filedelete-old-unregistered'     => 'A versión de l\'archivo especificata "$1" no ye en a base de datos.',
'filedelete-current-unregistered' => 'L\'archibo espezificato "$1" no ye en a base de datos.',
'filedelete-archive-read-only'    => 'O direutorio d\'archibo "$1" no puede escribir-se en o serbidor web.',

# Browsing diffs
'previousdiff' => "← Ir t'a edición anterior",
'nextdiff'     => "Ir t'a edición siguient →",

# Media information
'mediawarning'         => "'''Pare cuenta!''': Iste tipo de fichero puet contener codigo endino. 
En executar-lo, podría meter en un contornillo a seguridat d'o suyo sistema.<hr />",
'imagemaxsize'         => "Limite de grandaria d'as imáchens:<br />''(ta pachinas de descripzión de fichers)''",
'thumbsize'            => "Midas d'a miniatura:",
'widthheightpage'      => '$1×$2, $3 {{PLURAL:$3|pachina|pachinas}}',
'file-info'            => "(grandaria de l'archibo: $1; tipo MIME: $2)",
'file-info-size'       => "($1 × $2 píxels; grandaria de l'archibo: $3; tipo MIME: $4)",
'file-nohires'         => '<small>No bi ha garra versión con resolución más gran.</small>',
'svg-long-desc'        => '(archibo SVG, nominalment $1 × $2 píxels, grandaria: $3)',
'show-big-image'       => 'Imachen en a maxima resolución',
'show-big-image-thumb' => "<small>Grandaria d'ista anvista previa: $1 × $2 píxels</small>",
'file-info-gif-looped' => 'embuclau',
'file-info-gif-frames' => '$1 {{PLURAL:$1|imachen|imáchens}}',

# Special:NewFiles
'newimages'             => 'Galería de nuevas imachens',
'imagelisttext'         => "Contino bi ha una lista de '''$1''' {{PLURAL:$1|imachen ordenata|imachens ordenatas}} $2.",
'newimages-summary'     => 'Ista pachina espezial amuestra os zaguers archibos cargatos.',
'newimages-legend'      => 'Filtro',
'newimages-label'       => "Nombre de l'archibo (u bella parte d'el):",
'showhidebots'          => '($1 bots)',
'noimages'              => 'No bi ha cosa á beyer.',
'ilsubmit'              => 'Mirar',
'bydate'                => 'por a calendata',
'sp-newimages-showfrom' => "Amostrar fichers nuevos dende as $2 d'o $1",

# Bad image list
'bad_image_list' => "O formato ha d'estar o siguient:

Nomás se consideran os elementos de lista (ringleras que escomienzan por *). O primer vinclo de cada linia ha d'estar un vinclo ta un fichero malo. Qualsiquier atros vinclos en a mesma linia se consideran excepcions, ye dicir, pachinas an que o fichero puede amaneixer.",

# Metadata
'metadata'          => 'Metadatos',
'metadata-help'     => 'Iste fichero contiene información adicional, probablement adibida dende a camara dichital, o escáner u o programa emplegato ta creyar-lo u dichitalizar-lo.  Si o fichero ha estato modificato dende o suyo estau orichinal, bells detalles podrían no refleixar de tot o fichero modificato.',
'metadata-expand'   => 'Amostrar información detallata',
'metadata-collapse' => 'Amagar a información detallata',
'metadata-fields'   => "Os campos de metadatos EXIF que amaneixen en iste mensache s'amostrarán en a pachina de descripción d'a imachen, mesmo si a tabla ye plegata. Bi ha atros campos que remanirán amagatos por defecto.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength",

# EXIF tags
'exif-imagewidth'                  => 'Amplaria',
'exif-imagelength'                 => 'Altaria',
'exif-bitspersample'               => 'Bits por component',
'exif-compression'                 => 'Esquema de compresión',
'exif-photometricinterpretation'   => "Composizión d'os pixels",
'exif-orientation'                 => 'Orientazión',
'exif-samplesperpixel'             => 'Numero de components por píxel',
'exif-planarconfiguration'         => 'Ordinazión de datos',
'exif-ycbcrsubsampling'            => 'Razón de submuestreyo de Y á C',
'exif-ycbcrpositioning'            => 'Posizión de Y y C',
'exif-xresolution'                 => 'Resoluzión orizontal',
'exif-yresolution'                 => 'Resoluzión bertical',
'exif-resolutionunit'              => "Unidaz d'as resoluzions en X e Y",
'exif-stripoffsets'                => "Localizazión d'os datos d'a imachen",
'exif-rowsperstrip'                => 'Numero de ringleras por faixa',
'exif-stripbytecounts'             => 'Bytes por faixa comprimita',
'exif-jpeginterchangeformat'       => "Offset d'o JPEG SOI",
'exif-jpeginterchangeformatlength' => 'Bytes de datos JPEG',
'exif-transferfunction'            => 'Funzión de transferenzia',
'exif-whitepoint'                  => "Coordinatas cromaticas d'o punto blanco",
'exif-primarychromaticities'       => "Coordinatas cromaticas d'as colors primarias",
'exif-ycbcrcoefficients'           => "Coefizients d'a matriz de transformazión d'o espazio de colors",
'exif-referenceblackwhite'         => 'Parella de baluras blanco/negro de referenzia',
'exif-datetime'                    => "Calendata y ora d'o zaguer cambeo de l'archibo",
'exif-imagedescription'            => "Títol d'a imachen",
'exif-make'                        => "Fabriquero d'a maquina",
'exif-model'                       => 'Modelo de maquina',
'exif-software'                    => 'Software emplegato',
'exif-artist'                      => 'Autor',
'exif-copyright'                   => "Dueño d'os dreitos d'autor (copyright)",
'exif-exifversion'                 => 'Versión Exif',
'exif-flashpixversion'             => 'Versión de Flashpix almesa',
'exif-colorspace'                  => 'Espazio de colors',
'exif-componentsconfiguration'     => 'Sinnificazión de cada component',
'exif-compressedbitsperpixel'      => "Modo de compresión d'a imachen",
'exif-pixelydimension'             => "Amplaria conforme d'a imachen",
'exif-pixelxdimension'             => "Altaria conforme d'a imachen",
'exif-makernote'                   => "Notas d'o fabriquero",
'exif-usercomment'                 => "Comentarios de l'usuario",
'exif-relatedsoundfile'            => "Fichero d'audio relacionato",
'exif-datetimeoriginal'            => "Calendata y ora de chenerazión d'os datos",
'exif-datetimedigitized'           => "Calendata y ora d'a dichitalizazión",
'exif-subsectime'                  => 'Calendata y ora (frazions de segundo)',
'exif-subsectimeoriginal'          => "Calendata y ora d'a chenerazión d'os datos (frazions de segundo)",
'exif-subsectimedigitized'         => "Calendata y ora d'a dichitalizazión (frazions de segundo)",
'exif-exposuretime'                => "Tiempo d'esposizión",
'exif-exposuretime-format'         => '$1 seg ($2)',
'exif-fnumber'                     => 'Numero F',
'exif-exposureprogram'             => "Programa d'esposizión",
'exif-spectralsensitivity'         => 'Sensibilidat espeutral',
'exif-isospeedratings'             => 'Sensibilidat ISO',
'exif-oecf'                        => 'Factor de conversión optoelectronica',
'exif-shutterspeedvalue'           => "Velocidat de l'obturador",
'exif-aperturevalue'               => 'Obredura',
'exif-brightnessvalue'             => 'Brilura',
'exif-exposurebiasvalue'           => "Siesco d'esposizión",
'exif-maxaperturevalue'            => 'Obredura maxima',
'exif-subjectdistance'             => 'Distanzia á o sucheto',
'exif-meteringmode'                => 'Modo de mesura',
'exif-lightsource'                 => 'Fuent de luz',
'exif-flash'                       => 'Flash',
'exif-focallength'                 => "Longaria d'o lente focal",
'exif-subjectarea'                 => "Aria d'o sucheto",
'exif-flashenergy'                 => "Enerchía d'o flash",
'exif-spatialfrequencyresponse'    => 'Respuesta en freqüencia espacial',
'exif-focalplanexresolution'       => 'Resoluzión en o plano focal X',
'exif-focalplaneyresolution'       => 'Resolución en o plano focal Y',
'exif-focalplaneresolutionunit'    => "Unidaz d'a resoluzión en o plano focal",
'exif-subjectlocation'             => "Posizión d'o sucheto",
'exif-exposureindex'               => "Endize d'esposizión",
'exif-sensingmethod'               => 'Metodo de sensache',
'exif-filesource'                  => "Fuent de l'archibo",
'exif-scenetype'                   => "Mena d'eszena",
'exif-cfapattern'                  => 'Patrón CFA',
'exif-customrendered'              => "Prozesau d'imachen presonalizato",
'exif-exposuremode'                => "Modo d'esposizión",
'exif-whitebalance'                => 'Balanze de blancos',
'exif-digitalzoomratio'            => 'Ratio de zoom dichital',
'exif-focallengthin35mmfilm'       => 'Longaria focal equibalent á zinta de 35 mm',
'exif-scenecapturetype'            => "Mena de captura d'a eszena",
'exif-gaincontrol'                 => "Control d'eszena",
'exif-contrast'                    => 'Contraste',
'exif-saturation'                  => 'Saturazión',
'exif-sharpness'                   => 'Nitideza',
'exif-devicesettingdescription'    => "Descripzión d'os achustes d'o dispositibo",
'exif-subjectdistancerange'        => 'Rango de distancias á o sucheto',
'exif-imageuniqueid'               => "ID unico d'a imachen",
'exif-gpsversionid'                => "Versión d'as etiquetas de GPS",
'exif-gpslatituderef'              => 'Latitut norte/sud',
'exif-gpslatitude'                 => 'Latitut',
'exif-gpslongituderef'             => 'Lonchitut este/ueste',
'exif-gpslongitude'                => 'Lonchitut',
'exif-gpsaltituderef'              => "Referenzia d'a altitut",
'exif-gpsaltitude'                 => 'Altitut',
'exif-gpstimestamp'                => 'Tiempo GPS (reloch atomico)',
'exif-gpssatellites'               => 'Satelites emplegatos en a mida',
'exif-gpsstatus'                   => "Estau d'o rezeptor",
'exif-gpsmeasuremode'              => 'Modo de mesura',
'exif-gpsdop'                      => "Prezisión d'a mida",
'exif-gpsspeedref'                 => 'Unidaz de belozidat',
'exif-gpsspeed'                    => "Belozidat d'o rezeptor GPS",
'exif-gpstrackref'                 => "Referenzia d'a endrezera d'o mobimiento",
'exif-gpstrack'                    => "Endrezera d'o mobimiento",
'exif-gpsimgdirectionref'          => "Referenzia d'a orientazión d'a imachen",
'exif-gpsimgdirection'             => "Orientazión d'a imachen",
'exif-gpsmapdatum'                 => 'Emplegatos datos de mesura cheodesica',
'exif-gpsdestlatituderef'          => "Referenzia t'a latitut d'o destino",
'exif-gpsdestlatitude'             => "Latitut d'o destino",
'exif-gpsdestlongituderef'         => "Referenzia d'a lonchitut d'o destino",
'exif-gpsdestlongitude'            => "Lonchitut d'o destino",
'exif-gpsdestbearingref'           => "Referenzia d'a orientazión á o destino",
'exif-gpsdestbearing'              => "Orientazión d'o destino",
'exif-gpsdestdistanceref'          => "Referenzia d'a distanzia á o destino",
'exif-gpsdestdistance'             => 'Distanzia á o destino',
'exif-gpsprocessingmethod'         => "Nombre d'o metodo de prozesamiento GPS",
'exif-gpsareainformation'          => "Nombre d'aria GPS",
'exif-gpsdatestamp'                => 'Calendata GPS',
'exif-gpsdifferential'             => 'Correzión diferenzial de GPS',

# EXIF attributes
'exif-compression-1' => 'Sin de compresión',

'exif-unknowndate' => 'Calendata esconoixita',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Contornata orizontalment',
'exif-orientation-3' => 'Chirata 180º',
'exif-orientation-4' => 'Contornata berticalment',
'exif-orientation-5' => "Chirata 90° en contra d'as agullas d'o reloch y contornata berticalment",
'exif-orientation-6' => "Chirata 90° como as agullas d'o reloch",
'exif-orientation-7' => "Chirata 90° como as agullas d'o reloch y contornata berticalment",
'exif-orientation-8' => "Chirata 90° en contra d'as agullas d'o reloch",

'exif-planarconfiguration-1' => 'formato de paquez de píxels',
'exif-planarconfiguration-2' => 'formato plano',

'exif-componentsconfiguration-0' => 'no esiste',

'exif-exposureprogram-0' => 'No definito',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Modo normal',
'exif-exposureprogram-3' => "Prioridat á l'obredura",
'exif-exposureprogram-4' => "Prioridat á l'obturador",
'exif-exposureprogram-5' => 'Modo creatibo (con prioridat á la fondura de campo)',
'exif-exposureprogram-6' => "Modo aizión (alta belozidat de l'obturador)",
'exif-exposureprogram-7' => 'Modo retrato (ta primers planos con o fundo desenfocato)',
'exif-exposureprogram-8' => 'Modo paisache (ta fotos de paisaches con o fundo enfocato)',

'exif-subjectdistance-value' => '$1 metros',

'exif-meteringmode-0'   => 'Esconoixito',
'exif-meteringmode-1'   => 'Meya',
'exif-meteringmode-2'   => 'Meya aponderata á o zentro',
'exif-meteringmode-3'   => 'Puntual',
'exif-meteringmode-4'   => 'Multipunto',
'exif-meteringmode-5'   => 'Patrón',
'exif-meteringmode-6'   => 'Parzial',
'exif-meteringmode-255' => 'Atros',

'exif-lightsource-0'   => 'Esconoixito',
'exif-lightsource-1'   => 'Luz de día',
'exif-lightsource-2'   => 'Fluoreszent',
'exif-lightsource-3'   => 'Tungsteno (luz incandeszent)',
'exif-lightsource-4'   => 'Flash',
'exif-lightsource-9'   => 'Buen orache',
'exif-lightsource-10'  => 'Orache nublo',
'exif-lightsource-11'  => 'Guambra',
'exif-lightsource-12'  => 'Fluorescente de luz de día (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Fluoreszent blanco de día (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Fluoreszent blanco fredo (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Fluoreszent blanco (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Luz estándar A',
'exif-lightsource-18'  => 'Luz estándar B',
'exif-lightsource-19'  => 'Luz estándar C',
'exif-lightsource-24'  => "Bombeta de tungsteno d'estudeo ISO",
'exif-lightsource-255' => 'Atra fuent de luz',

# Flash modes
'exif-flash-fired-0'    => 'No se disparó o flash',
'exif-flash-fired-1'    => 'Flash disparato',
'exif-flash-return-0'   => "no bi ha funzión de detezión d'o retorno d'a luz estroboscopica",
'exif-flash-return-2'   => 'no se deteutó retorno de luz estroboscopica',
'exif-flash-return-3'   => 'luz estroboscopica deteutata',
'exif-flash-mode-1'     => 'disparo de flash forzato',
'exif-flash-mode-2'     => 'supresión de flash forzato',
'exif-flash-mode-3'     => 'modo automatico',
'exif-flash-function-1' => 'Modo sin de flash',
'exif-flash-redeye-1'   => 'modo de reduzión de güellos royos',

'exif-focalplaneresolutionunit-2' => 'pulgadas',

'exif-sensingmethod-1' => 'No definito',
'exif-sensingmethod-2' => "Sensor d'aria de color d'un chip",
'exif-sensingmethod-3' => "Sensor d'aria de color de dos chips",
'exif-sensingmethod-4' => "Sensor d'aria de color de tres chips",
'exif-sensingmethod-5' => "Sensor d'aria de color secuenzial",
'exif-sensingmethod-7' => 'Sensor trilinial',
'exif-sensingmethod-8' => 'Sensor linial de color secuenzial',

'exif-scenetype-1' => 'Una imachen fotiata dreitament',

'exif-customrendered-0' => 'Prozeso normal',
'exif-customrendered-1' => 'Prozeso presonalizato',

'exif-exposuremode-0' => 'Esposizión automatica',
'exif-exposuremode-1' => 'Esposizión manual',
'exif-exposuremode-2' => 'Bracketting automatico',

'exif-whitebalance-0' => 'Balanze automatico de blancos',
'exif-whitebalance-1' => 'Balanze manual de blancos',

'exif-scenecapturetype-0' => 'Estándar',
'exif-scenecapturetype-1' => 'Ambiesta (orizontal)',
'exif-scenecapturetype-2' => 'Retrato (bertical)',
'exif-scenecapturetype-3' => 'Eszena de nueits',

'exif-gaincontrol-0' => 'Denguna',
'exif-gaincontrol-1' => 'Gananzia baixa ta baluras altas (low gain up)',
'exif-gaincontrol-2' => 'Gananzia alta ta baluras altas (high gain up)',
'exif-gaincontrol-3' => 'Gananzia baixa ta baluras baixas (low gain down)',
'exif-gaincontrol-4' => 'Gananzia alta ta baluras baixas (high gain down)',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Suabe',
'exif-contrast-2' => 'Fuerte',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Baixa saturazión',
'exif-saturation-2' => 'Alta saturazión',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Suabe',
'exif-sharpness-2' => 'Fuerte',

'exif-subjectdistancerange-0' => 'Esconoixita',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Vista amanada',
'exif-subjectdistancerange-3' => 'Vista leixana',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitut norte',
'exif-gpslatitude-s' => 'Latitut sud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Lonchitut este',
'exif-gpslongitude-w' => 'Lonchitut ueste',

'exif-gpsstatus-a' => "S'está fendo a mida",
'exif-gpsstatus-v' => 'Interoperabilitat de mesura',

'exif-gpsmeasuremode-2' => 'Mesura bidimensional',
'exif-gpsmeasuremode-3' => 'Mesura tridimensional',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Quilometros por ora',
'exif-gpsspeed-m' => 'Millas por ora',
'exif-gpsspeed-n' => 'Nugos',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Endrezera reyal',
'exif-gpsdirection-m' => 'Endrezera magnetica',

# External editor support
'edit-externally'      => 'Editar iste archivo fendo servir una aplicación externa',
'edit-externally-help' => '(Ta más información, leiga as [http://www.mediawiki.org/wiki/Manual:External_editors instruccions de configuración])',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'toz',
'imagelistall'     => 'todas',
'watchlistall2'    => 'totz',
'namespacesall'    => 'todo',
'monthsall'        => '(totz)',

# E-mail address confirmation
'confirmemail'             => 'Confirmar adreza de correu-e',
'confirmemail_noemail'     => "No tiene una adreza de correu-e conforme en as suyas [[Special:Preferences|preferenzias d'usuario]].",
'confirmemail_text'        => "{{SITENAME}} requiere que confirme a suya adreza de correu-e antis de poder usar as funzions de correu-e. Punche o botón de baxo ta nimbiar un mensache de confirmazión t'a suya adreza. O mensache encluirá un binclo con un codigo. Escriba-lo ta confirmar que a suya adreza ye conforme.",
'confirmemail_pending'     => "Ya se le ha ninviato un codigo de confirmación; si creyó una cuenta fa poco tiempo, puede que s'estime más d'aguardar bells  bels menutos ta veyer si le plega antes de pedir un nuevo codigo.",
'confirmemail_send'        => 'Nimbiar un codigo de confirmazión.',
'confirmemail_sent'        => "S'ha nimbiato un correu de confirmazión.",
'confirmemail_oncreate'    => "S'ha nimbiato un codigo de confirmazión t'a suya adreza de correu-e.
Iste codigo no ye nezesario ta dentrar, pero amenistará escribir-lo antis d'autibar cualsiquier funzión d'o wiki basata en o correu electronico.",
'confirmemail_sendfailed'  => "{{SITENAME}} no ha puesto nimbiar-le o mensache de confirmazión. Por fabor, comprebe que no bi aiga carauters no conformes en l'adreza de correu electronico endicata.

Correu retornato: $1",
'confirmemail_invalid'     => 'O codigo de confirmazión no ye conforme. Regular que o codigo sía zircunduzito.',
'confirmemail_needlogin'   => 'Amenistar $1 ta confirmar a suya adreza de correu-e.',
'confirmemail_success'     => 'A suya adreza de correu-e ya ye confirmata. Agora puede dentrar en o wiki y espleitiar-lo.',
'confirmemail_loggedin'    => 'A suya adreza de correu-e ya ye confirmata.',
'confirmemail_error'       => 'Bella cosa falló en alzar a suya confirmazión.',
'confirmemail_subject'     => "confirmazión de l'adreza de correu-e de {{SITENAME}}",
'confirmemail_body'        => 'Belún, probablement busté mesmo, ha rechistrato una cuenta "$2" con ista adreza de correu-e en {{SITENAME}} dende l\'adreza IP $1.

Ta confirmar que ista cuenta reyalment le perteneixe y autibar as funzions de correu-e en {{SITENAME}}, ubra iste binclo en o suyo nabegador:

$3

Si a cuenta *no* ye suya, siga iste atro binclo ta anular a confirmazión d\'adreza de correu-e:

$5

Iste codigo de confirmazión zircunduzirá en $4.',
'confirmemail_invalidated' => "Anular a confirmazión d'adreza de correu-e",
'invalidateemail'          => 'Anular a confirmazión de correu-e',

# Scary transclusion
'scarytranscludedisabled' => "[S'ha desautibato a transclusión interwiki]",
'scarytranscludefailed'   => "[Ha fallato a recuperazión d'a plantilla ta $1]",
'scarytranscludetoolong'  => '[O URL ye masiau largo]',

# Trackbacks
'trackbackbox'      => 'Retrobinclos (trackbacks) ta ista pachina:<br />
$1',
'trackbackremove'   => '([$1 Borrar])',
'trackbacklink'     => 'Retrobinclo (Trackback)',
'trackbackdeleteok' => "O retrobinclo (trackback) s'ha borrato correutament.",

# Delete conflict
'deletedwhileediting' => "Pare cuenta: Ista pachina s'ha borrato dimpués de que busté prenzipiase á editar!",
'confirmrecreate'     => "L'usuario [[User:$1|$1]] ([[User talk:$1|descusión]]) ha borrato iste articlo dimpués que vusté prencipase a editar-lo, y ha dato a siguient razón:
: ''$2''
Por favor, confirme que reyalment deseya tornar a creyar l'articlo.",
'recreate'            => 'Tornar a creyar',

# action=purge
'confirm_purge_button' => 'Confirmar',
'confirm-purge-top'    => "Limpiar a caché d'ista pachina?",
'confirm-purge-bottom' => 'En porgar una pachina, se limpia a memoria caché y afuerza que amaneixca a versión más actual.',

# Multipage image navigation
'imgmultipageprev' => '← pachina anterior',
'imgmultipagenext' => 'pachina siguient →',
'imgmultigo'       => 'Ir-ie!',
'imgmultigoto'     => "Ir t'a pachina $1",

# Table pager
'ascending_abbrev'         => 'asz',
'descending_abbrev'        => 'desz',
'table_pager_next'         => 'Pachina siguient',
'table_pager_prev'         => 'Pachina anterior',
'table_pager_first'        => 'Primera pachina',
'table_pager_last'         => 'Zaguer pachina',
'table_pager_limit'        => 'Amostrar $1 elementos por pachina',
'table_pager_limit_submit' => 'Ir-ie',
'table_pager_empty'        => 'No bi ha garra resultau',

# Auto-summaries
'autosumm-blank'   => "S'ha blanquiato a pachina",
'autosumm-replace' => 'O conteniu s\'ha cambiato por "$1"',
'autoredircomment' => 'Reendrezando ta [[$1]]',
'autosumm-new'     => "Pachina creyada con '$1'",

# Live preview
'livepreview-loading' => 'Cargando…',
'livepreview-ready'   => 'Cargando… ya!',
'livepreview-failed'  => "A prebisualizazión á l'inte falló!
Prebe con a prebisualizazión normal.",
'livepreview-error'   => 'No s\'ha puesto coneutar: $1 "$2". Prebe con l\'ambiesta prebia normal.',

# Friendlier slave lag warnings
'lag-warn-normal' => "Talment no s'amuestren en ista lista as edizions feitas en {{PLURAL:$1|o zaguer segundo|os zaguers $1 segundos}}.",
'lag-warn-high'   => "Por o retardo d'o serbidor d'a base de datos, talment no s'amuestren en ista lista as edizions feitas en {{PLURAL:$1|o zaguer segundo|os zaguers $1 segundos}}.",

# Watchlist editor
'watchlistedit-numitems'       => 'A suya lista de seguimiento tiene {{PLURAL:$1|una pachina |$1 pachinas}}, sin contar-ie as pachinas de descusión.',
'watchlistedit-noitems'        => 'A suya lista de seguimiento ye bueda.',
'watchlistedit-normal-title'   => 'Editar a lista de seguimiento',
'watchlistedit-normal-legend'  => "Borrar títols d'a lista de seguimiento",
'watchlistedit-normal-explain' => "As pachinas d'a suya lista de seguimiento s'amuestran contino. Ta sacar-ne una pachina, marque o cuatrón que ye a o canto d'a pachina, y punche con a rateta en ''Borrar pachinas''. Tamién puede [[Special:Watchlist/raw|editar dreitament o testo d'a pachina]].",
'watchlistedit-normal-submit'  => 'Borrar pachinas',
'watchlistedit-normal-done'    => "{{PLURAL:$1|S'ha borrato 1 pachina|s'han borrato $1 pachinas}} d'a suya lista de seguimiento:",
'watchlistedit-raw-title'      => 'Editar a lista de seguimiento en formato testo',
'watchlistedit-raw-legend'     => 'Editar a lista de seguimiento en formato testo',
'watchlistedit-raw-explain'    => "Contino s'amuestran as pachinas d'a suya lista de seguimiento.
Puede editar ista lista adibiendo u borrando líneas d'a lista; una pachina por linia.
Cuan remate, punche ''esbiellar lista de seguimiento''.
Tamién puede fer serbir o [[Special:Watchlist/edit|editor estándar]].",
'watchlistedit-raw-titles'     => 'Pachinas:',
'watchlistedit-raw-submit'     => 'Esbiellar lista de seguimiento',
'watchlistedit-raw-done'       => "S'ha esbiellato a suya lista de seguimiento.",
'watchlistedit-raw-added'      => "{{PLURAL:$1|S'ha esbiellato una pachina|S'ha esbiellato $1 pachinas}}:",
'watchlistedit-raw-removed'    => "{{PLURAL:$1|S'ha borrato una pachina|S'ha borrato $1 pachinas}}:",

# Watchlist editing tools
'watchlisttools-view' => 'Amostrar cambeos',
'watchlisttools-edit' => 'Veyer y editar a lista de seguimiento',
'watchlisttools-raw'  => 'Editar a lista de seguimiento en formato testo',

# Core parser functions
'unknown_extension_tag' => 'Etiqueta d\'estensión "$1" esconoixita',
'duplicate-defaultsort' => "Pare cuenta: A clau d'ordenazión por defeuto «$2» anula l'anterior clau d'ordenazión por defeuto «$1».",

# Special:Version
'version'                          => 'Versión',
'version-extensions'               => 'Estensions instalatas',
'version-specialpages'             => 'Pachinas espezials',
'version-parserhooks'              => "Grifios d'o parser (parser hooks)",
'version-variables'                => 'Bariables',
'version-other'                    => 'Atros',
'version-mediahandlers'            => "Maneyador d'archibos multimedia",
'version-hooks'                    => 'Grifios (Hooks)',
'version-extension-functions'      => "Funzions d'a estensión",
'version-parser-extensiontags'     => "Etiquetas d'estensión d'o parseyador",
'version-parser-function-hooks'    => "Grifios d'as funzions d'o parseyador",
'version-skin-extension-functions' => "Funzions d'estensión de l'aparenzia (Skin)",
'version-hook-name'                => "Nombre d'o grifio",
'version-hook-subscribedby'        => 'Suscrito por',
'version-version'                  => '(Versión $1)',
'version-license'                  => 'Lizenzia',
'version-software'                 => 'Software instalato',
'version-software-product'         => 'Produto',
'version-software-version'         => 'Versión',

# Special:FilePath
'filepath'         => "Camín de l'archibo",
'filepath-page'    => 'Fichero:',
'filepath-submit'  => 'Camín',
'filepath-summary' => "Ista pachina espezial le retorna o camín completo d'un archibo.
As imachens s'amuestran en resoluzión completa, a resta d'archibos fan enzetar dreitament os suyos programas asoziatos.

Escriba o nombre de l'archibo sin o prefixo \"{{ns:file}}:\".",

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Mirar archibos duplicatos',
'fileduplicatesearch-summary'  => 'Mirar achibos duplicatos basatos en a suya balura hash.

Escriba o nombre de l\'archibo sin o prefixo "{{ns:file}}:".',
'fileduplicatesearch-legend'   => 'Mirar duplicatos',
'fileduplicatesearch-filename' => "Nombre de l'archibo:",
'fileduplicatesearch-submit'   => 'Mirar',
'fileduplicatesearch-info'     => "$1 × $2 pixels<br />Grandaria de l'archibo: $3<br />tipo MIME: $4",
'fileduplicatesearch-result-1' => 'L\'archibo "$1" no en tiene de duplicaus identicos.',
'fileduplicatesearch-result-n' => 'L\'archibo "$1" tiene {{PLURAL:$2|1 duplicau identico|$2 duplicaus identicos}}.',

# Special:SpecialPages
'specialpages'                   => 'Pachinas especials',
'specialpages-note'              => '----
* Pachinas espezials normals.
* <strong class="mw-specialpagerestricted">Pachinas espezials restrinchitas.</strong>',
'specialpages-group-maintenance' => 'Informes de mantenimiento',
'specialpages-group-other'       => 'Atras pachinas espezials',
'specialpages-group-login'       => 'Inizio de sesión / rechistro',
'specialpages-group-changes'     => 'Zaguers cambios y rechistros',
'specialpages-group-media'       => "Informes d'archibos multimedias y cargas",
'specialpages-group-users'       => 'Usuarios y dreitos',
'specialpages-group-highuse'     => 'Pachinas con muito uso',
'specialpages-group-pages'       => 'Listas de pachinas',
'specialpages-group-pagetools'   => 'Ferramientas de pachinas',
'specialpages-group-wiki'        => 'Datos sobre a wiki y ferramientas',
'specialpages-group-redirects'   => 'Reendrezando as pachinas espezials',
'specialpages-group-spam'        => 'Ferramientas de spam',

# Special:BlankPage
'blankpage'              => 'Pachina en blanco',
'intentionallyblankpage' => "Esta pachina s'ha deixato en blanco aldredes y se fa serbir ta fer prebatinas, ezt.",

# External image whitelist
'external_image_whitelist' => "  #Deixe ista linia sin cambiar-la<pre>
#Meta debaixo fragmentos d'esprisions regulars (nomás a parte que be entre //)
#Se mirará si istas concuerdan con os URLs d'imáchens esternas (hotlinked)
#As que concorden s'amostrarán como imáchens, en as que no, nomás s'amostrará un binclo t'a imachen
#As ringleras que prenzipian por «#» se consideran comentarios
#Tot isto ye insensible á las mayusclas/minusclas

#Meta toz os fragmentos de regex denzima d'ista ringlera. No faiga cambeos en ista linia</pre>",

# Special:Tags
'tag-filter'              => 'Filtrar as [[Special:Tags|etiquetas]]:',
'tag-filter-submit'       => 'Filtrar',
'tags-title'              => 'Etiquetas',
'tags-intro'              => 'Ista pachina amuestra as etiquetas con que o software puet siñalar una edizión, y o suyo sinnificau.',
'tags-tag'                => "Nombre d'a etiqueta",
'tags-display-header'     => 'Aparenzia en as listas de cambeos',
'tags-description-header' => "Descripzión completa d'o sinnificau",
'tags-hitcount-header'    => 'Cambeos etiquetatos',
'tags-edit'               => 'editar',
'tags-hitcount'           => '$1 {{PLURAL:$1|cambeo|cambeos}}',

# Database error messages
'dberr-info' => "(No s'ha puesto contactar con o serbidor d'a base de datos: $1)",

# HTML forms
'htmlform-reset'               => 'Desfer cambios',
'htmlform-selectorother-other' => 'Atros',

# Add categories per AJAX
'ajax-add-category'            => 'Adhibir categoría',
'ajax-add-category-submit'     => 'Adhibir',
'ajax-confirm-title'           => 'Confirmar acción',
'ajax-confirm-prompt'          => 'Puet furnir debaixo un resumen d\'edición.
Punche en "Grabar" ta grabar a suya edición.',
'ajax-confirm-save'            => 'Alzar',
'ajax-add-category-summary'    => 'Adibir categoría "$1"',
'ajax-remove-category-summary' => 'Sacar a categoría "$1"',
'ajax-confirm-actionsummary'   => 'Aczión á prener:',
'ajax-error-title'             => 'Error',
'ajax-error-dismiss'           => "D'alcuerdo",
'ajax-remove-category-error'   => "No s'ha puesto eliminar ista categoría. Isto gosa pasar, por un regular, quan a categoría ha estau adibida por una plantilla.",

);