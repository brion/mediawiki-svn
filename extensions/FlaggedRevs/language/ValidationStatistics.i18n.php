<?php
/**
 * Internationalisation file for FlaggedRevs extension, section ValidationStatistics
 *
 * @addtogroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'validationstatistics'        => 'Validation statistics',
	'validationstatistics-users'  => '\'\'\'{{SITENAME}}\'\'\' currently has \'\'\'$1\'\'\' {{PLURAL:$1|user|users}} with [[{{MediaWiki:Validationpage}}|Editor]] rights
and \'\'\'$2\'\'\' {{PLURAL:$2|user|users}} with [[{{MediaWiki:Validationpage}}|Reviewer]] rights.',
	'validationstatistics-table'  => "Statistics for each namespace are shown below, excluding redirects pages.

'''Note:''' the following data is cached for several hours and may not be up to date.",
	'validationstatistics-ns'     => 'Namespace',
	'validationstatistics-total'  => 'Pages',
	'validationstatistics-stable' => 'Reviewed',
	'validationstatistics-latest' => 'Latest reviewed',
	'validationstatistics-synced' => 'Synced/Reviewed',
);

/** Message documentation (Message documentation) */
$messages['qqq'] = array(
	'validationstatistics-ns' => '{{Identical|Namespace}}',
	'validationstatistics-total' => '{{Identical|Pages}}',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'validationstatistics' => 'إحصاءات التحقق',
	'validationstatistics-users' => "'''{{SITENAME}}''' لديه حاليا '''$1''' {{PLURAL:$1|مستخدم|مستخدم}} بصلاحيات [[{{MediaWiki:Validationpage}}|محرر]]
و '''$2''' {{PLURAL:$2|مستخدم|مستخدم}} بصلاحيات [[{{MediaWiki:Validationpage}}|مراجع]].",
	'validationstatistics-table' => "الإحصاءات لكل نطاق معروضة بالأسفل، لا يتضمن ذلك صفحات التحويل.

'''ملاحظة:''' البيانات التالية مخزنة لعدة ساعات وربما لا تكون محدثة.",
	'validationstatistics-ns' => 'النطاق',
	'validationstatistics-total' => 'الصفحات',
	'validationstatistics-stable' => 'مراجع',
	'validationstatistics-latest' => 'مراجع أخيرا',
	'validationstatistics-synced' => 'تم تحديثه/تمت مراجعته',
);

/** German (Deutsch) */
$messages['de'] = array(
	'validationstatistics' => 'Markierungsstatistik',
	'validationstatistics-users' => "'''{{SITENAME}}''' hat '''$1''' {{PLURAL:$1|Benutzer|Benutzer}} mit [[{{MediaWiki:Validationpage}}|Prüferrecht]] und '''$2''' {{PLURAL:$2|Benutzer|Benutzer}} mit [[{{MediaWiki:Validationpage}}|Sichterrecht]].",
	'validationstatistics-table' => "Statistiken für jeden Namensraum, ausgenommen sind Weiterleitungen.

'''Bitte beachten:''' Die folgenden Daten werden jeweils für mehrere Stunden zwischengespeichert und sind daher nicht immer aktuell.",
	'validationstatistics-ns' => 'Namensraum',
	'validationstatistics-total' => 'Seiten',
	'validationstatistics-stable' => 'Gesichtet',
	'validationstatistics-latest' => 'Zuletzt gesichtet',
	'validationstatistics-synced' => 'Synced/Gesichtet',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'validationstatistics' => 'Validigadaj statistikoj',
	'validationstatistics-users' => "'''{{SITENAME}}''' nun havas '''$1''' {{PLURAL:$1|uzanton|uzantojn}} kun
[[{{MediaWiki:Validationpage}}|Redaktanto]]-rajtoj
kaj '''$2''' {{PLURAL:$2|uzanton|uzantojn}} kun [[{{MediaWiki:Validationpage}}|Kontrolanto]]-rajtoj.",
	'validationstatistics-table' => "Statistikoj por ĉiu nomspaco estas jene montritaj, krom alidirektiloj.

'''Notu:''' la jenaj datenoj estas en kaŝmemoro dum multaj horoj kaj eble ne estas ĝisdataj.",
	'validationstatistics-ns' => 'Nomspaco',
	'validationstatistics-total' => 'Paĝoj',
	'validationstatistics-stable' => 'Kontrolitaj',
	'validationstatistics-latest' => 'Laste kontrolita',
	'validationstatistics-synced' => 'Ĝisdatigita/Kontrolita',
);

/** French (Français)
 * @author Grondin
 */
$messages['fr'] = array(
	'validationstatistics' => 'Statistiques de validation',
	'validationstatistics-users' => "'''{{SITENAME}}''' dispose actuellement de '''$1''' {{PLURAL:$1|utilisateur|utilisateurs}} avec les droits d’[[{{MediaWiki:Validationpage}}|éditeur]] et de '''$2''' {{PLURAL:$2|utilisateur|utilisateurs}} avec les droits de [[{{MediaWiki:Validationpage}}|relecteur]].",
	'validationstatistics-table' => "Les statistiques pour chaques espace de nom sont affichée ci-dessous, à l’exclusion des pages de redirection.

'''Note :''les données suivantes sont cachées pendant plusieurs heures et ne peuvent pas être mise à jour.",
	'validationstatistics-ns' => 'Nom de l’espace',
	'validationstatistics-total' => 'Pages',
	'validationstatistics-stable' => 'Relu',
	'validationstatistics-latest' => 'Relu en tout dernier lieu',
	'validationstatistics-synced' => 'Synchronisé/Relu',
);

/** Hungarian (Magyar)
 * @author Samat
 */
$messages['hu'] = array(
	'validationstatistics-table' => "Statisztika valamennyi névtérre, az átirányítások kivételével

'''Megjegyzés:''' ezek az adatok csak néhány óránként frissülnek.",
	'validationstatistics-ns' => 'Névtér',
);

/** Italian (Italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'validationstatistics' => 'Statistiche di convalidazione',
	'validationstatistics-users' => "Al momento, su '''{{SITENAME}}''' {{PLURAL:$1|c'è '''$1''' utente|ci sono '''$1''' utenti}} con i diritti di [[{{MediaWiki:Validationpage}}|Editore]] e '''$2''' {{PLURAL:$2|utente|utenti}} con i diritti di [[{{MediaWiki:Validationpage}}|Revisore]].",
	'validationstatistics-table' => "Le statistiche per ciascun namaspace sono mostrate di seguito, a esclusione dei redirect.

'''Nota:''' i dati che seguono sono estratti da una copia ''cache'' del database, non aggiornati in tempo reale.",
	'validationstatistics-ns' => 'Namespace',
	'validationstatistics-total' => 'Pagine',
	'validationstatistics-stable' => 'Revisionate',
	'validationstatistics-latest' => 'Ultime revisionate',
);

/** Malay (Bahasa Melayu)
 * @author Aviator
 */
$messages['ms'] = array(
	'validationstatistics' => 'Statistik pengesahan',
	'validationstatistics-users' => "'''{{SITENAME}}''' kini mempunyai {{PLURAL:$1|seorang|'''$1''' orang}} pengguna dengan hak [[{{MediaWiki:Validationpage}}|Penyunting]] dan {{PLURAL:$2|seorang|'''$2''' orang}} pengguna dengan hak [[{{MediaWiki:Validationpage}}|Pemeriksa]].",
	'validationstatistics-table' => "Berikut ialah statistik bagi setiap ruang nama, tidak termasuk laman lencongan.

'''Catatan:''' data berikut diambil daripada simpanan sementara ('''cache''') dan kemungkinan besar bukan yang terkini.",
	'validationstatistics-ns' => 'Ruang nama',
	'validationstatistics-total' => 'Laman',
	'validationstatistics-stable' => 'Diperiksa',
	'validationstatistics-latest' => 'Pemeriksaan terakhir',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'validationstatistics' => 'Eindredactiestatistieken',
	'validationstatistics-users' => "'''{{SITENAME}}''' heeft op het moment '''$1''' {{PLURAL:$1|gebruiker|gebruikers}} in de rol van [[{{MediaWiki:Validationpage}}|Redacteur]] en '''$2''' {{PLURAL:$2|gebruiker|gebruikers}} met de rol [[{{MediaWiki:Validationpage}}|Eindredacteur]].",
	'validationstatistics-table' => "Hieronder staan statistieken voor iedere naamruimte, exclusief doorverwijzingen.

'''Let op:''' de onderstaande gegevens komen uit een cache, en kunnen tot enkele uren oud zijn.",
	'validationstatistics-ns' => 'Naamruimte',
	'validationstatistics-total' => "Pagina's",
	'validationstatistics-stable' => 'Eindredactie afgerond',
	'validationstatistics-latest' => 'Meest recente eindredacties',
	'validationstatistics-synced' => 'Gesynchroniseerd/Eindredactie',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'validationstatistics' => 'Valideringsstatistikk',
	'validationstatistics-users' => "'''{{SITENAME}}''' har '''$1''' {{PLURAL:$1|bruker|brukere}} med [[{{MediaWiki:Validationpage}}|skribentrettigheter]] og '''$2''' {{PLURAL:$2|bruker|brukere}} med [[{{MediaWiki:Validationpage}}|anmelderrettigheter]].",
	'validationstatistics-table' => "Statistikk for hvert navnerom vises nedenfor, utenom omdirigeringssider.

'''Merk:''' Følgende data mellomlagres i flere timer og kan være foreldet.",
	'validationstatistics-ns' => 'Navnerom',
	'validationstatistics-total' => 'Sider',
	'validationstatistics-stable' => 'Anmeldt',
	'validationstatistics-latest' => 'Sist anmeldt',
	'validationstatistics-synced' => 'Synkronisert/Anmeldt',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'validationstatistics' => 'Štatistiky overenia',
	'validationstatistics-users' => "'''{{SITENAME}}''' má momentálne '''$1''' {{PLURAL:$1|používateľa|používateľov}} s právami [[{{MediaWiki:Validationpage}}|redaktor]] a '''$2''' {{PLURAL:$2|používateľa|používateľov}} s právami [[{{MediaWiki:Validationpage}}|kontrolór]].",
	'validationstatistics-table' => "Dolu sú zobrazené štatistiky pre každý menný priestor okrem presmerovacích stránok.

'''Pozn.:''' nasledujúce údaje pochádzajú z vyrovnávacej pamäte a môžu byť niekoľko hodín staré.",
	'validationstatistics-ns' => 'Menný priestor',
	'validationstatistics-total' => 'Stránky',
	'validationstatistics-stable' => 'Skontrolované',
	'validationstatistics-latest' => 'Posledné skontrolované',
	'validationstatistics-synced' => 'Synchronizované/skontrolované',
);

/** Swedish (Svenska)
 * @author M.M.S.
 */
$messages['sv'] = array(
	'validationstatistics' => 'Valideringsstatistik',
	'validationstatistics-users' => "'''{{SITENAME}}''' har just nu '''$1''' {{PLURAL:$1|användare|användare}} med [[{{MediaWiki:Validationpage}}|redaktörsrättigheter]] och '''$2''' {{PLURAL:$2|användare|användare}} med [[{{MediaWiki:Validationpage}}|granskningsrättigheter]].",
	'validationstatistics-table' => "Statistik för varje namnrymd visas nedan, förutom omdirigeringssidor.

'''Notera:''' följande data är cachad för flera timmar och kan vara föråldrad.",
	'validationstatistics-ns' => 'Namnrymd',
	'validationstatistics-total' => 'Sidor',
	'validationstatistics-stable' => 'Granskad',
	'validationstatistics-latest' => 'Senast granskad',
	'validationstatistics-synced' => 'Synkad/Granskad',
);

