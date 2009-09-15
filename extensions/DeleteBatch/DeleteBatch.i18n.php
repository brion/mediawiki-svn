<?php
/**
 * Internationalization file for the DeleteBatch extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Bartek Łapiński
 */
$messages['en'] = array(
	'deletebatch' => 'Delete batch of pages',
	'deletebatch-desc' => '[[Special:DeleteBatch|Delete a batch of pages]]',
	'deletebatch-help' => 'Delete a batch of pages.
You can either perform a single delete, or delete pages listed in a file.
Choose a user that will be shown in deletion logs.
Uploaded files should contain page name and optional reason, separated by a "|" character in each line.',
	'deletebatch-caption' => 'Page list:',
	'deletebatch-title' => 'Delete batch',
	'deletebatch-link-back' => 'Go back to the special page',
	'deletebatch-as' => 'Run the script as:',
	'deletebatch-both-modes' => 'Please choose either one specified page or a given list of pages.',
	'deletebatch-or' => '<b>or</b>',
	'deletebatch-delete' => 'Delete',
	'deletebatch-page' => 'Pages to be deleted:',
	'deletebatch-processing-from-file' => 'deleting pages from file list',
	'deletebatch-processing-from-form' => 'deleting pages from form',
	'deletebatch-omitting-nonexistant' => 'Omitting non-existing page $1.',
	'deletebatch-omitting-invalid' => 'Omitting invalid page $1.',
	'deletebatch-file-bad-format' => 'The file should be plain text',
	'deletebatch-file-missing' => 'Unable to read given file',
	'deletebatch-select-script' => 'Delete page script',
	'deletebatch-select-yourself' => 'You',
	'deletebatch-no-page' => 'Please specify at least one page to delete or choose a file containing page list.',
	'right-deletebatch' => 'Batch delete pages',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author IAlex
 * @author Jon Harald Søby
 * @author Malafaya
 * @author Purodha
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'deletebatch-desc' => 'Short description of the :Deletebatch extension, shown in [[Special:Version]]. Do not translate or change links.',
	'deletebatch-or' => '{{Identical|Or}}',
	'deletebatch-delete' => '{{Identical|Delete}}',
	'deletebatch-select-script' => 'User name. Entry in dropdown for user that should execute the deletions',
	'deletebatch-select-yourself' => 'Entry in dropdown for user that should execute the deletions',
	'right-deletebatch' => '{{doc-right|deletebatch}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'deletebatch-or' => '<b>Of</b>',
	'deletebatch-delete' => 'Skrap',
	'deletebatch-select-yourself' => 'u',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'deletebatch' => 'حذف باتش من الصفحات',
	'deletebatch-desc' => '[[Special:DeleteBatch|حذف باتش من الصفحات]]',
	'deletebatch-help' => 'حذف باتش من الصفحات. يمكنك إما عمل عملية حذف واحدة، أو حذف الصفحات المرتبة في ملف.
اختر مستخدما ليتم عرضه في سجلات الحذف.
الملف المرفوع ينبغي أن يحتوي على اسم الصفحة وسبب اختياري مفصولين بواسطة حرف "|" في كل سطر.',
	'deletebatch-caption' => 'قائمة الصفحات:',
	'deletebatch-title' => 'حذف الباتش',
	'deletebatch-link-back' => 'ارجع إلى الصفحة الخاصة',
	'deletebatch-as' => 'تشغيل السكريبت ك:',
	'deletebatch-both-modes' => 'من فضلك اختر إما صفحة واحدة أو قائمة معطاة من الصفحات.',
	'deletebatch-or' => '<b>أو</b>',
	'deletebatch-delete' => 'حذف',
	'deletebatch-page' => 'الصفحات للحذف:',
	'deletebatch-processing-from-file' => 'جاري حذف الصفحات من قائمة الملف',
	'deletebatch-processing-from-form' => 'جاري حذف الصفحات من الاستمارة',
	'deletebatch-omitting-nonexistant' => 'إزالة صفحة غير موجودة $1.',
	'deletebatch-omitting-invalid' => 'إزالة صفحة غير صحيحة $1.',
	'deletebatch-file-bad-format' => 'الملف ينبغي أن يكون نصا خالصا',
	'deletebatch-file-missing' => 'غير قادر على قراءة الملف المعطى',
	'deletebatch-select-script' => 'سكريبت حذف الصفحات',
	'deletebatch-select-yourself' => 'أنت',
	'deletebatch-no-page' => 'من فضلك اختر على الأقل صفحة واحدة للحذف أو اختر ملفا يحتوي على قائمة الصفحات.',
	'right-deletebatch' => 'حذف باتش الصفحات',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 * @author Ouda
 * @author Ramsis II
 */
$messages['arz'] = array(
	'deletebatch' => 'حذف باتش من الصفحات',
	'deletebatch-desc' => '[[Special:DeleteBatch|حذف باتش من الصفحات]]',
	'deletebatch-help' => 'حذف باتش من الصفحات. يمكنك إما عمل عملية حذف واحدة، أو حذف الصفحات المرتبة فى ملف.
اختر مستخدما ليتم عرضه فى سجلات الحذف.
الملف المرفوع ينبغى أن يحتوى على اسم الصفحة وسبب اختيارى مفصولين بواسطة حرف "|" فى كل سطر.',
	'deletebatch-caption' => 'قائمة الصفحات:',
	'deletebatch-title' => 'حذف الباتش',
	'deletebatch-link-back' => 'ارجع إلى الصفحة الخاصة',
	'deletebatch-as' => 'تشغيل السكريبت ك:',
	'deletebatch-both-modes' => 'من فضلك اختر إما صفحة واحدة أو قائمة معطاة من الصفحات.',
	'deletebatch-or' => '<b>أو</b>',
	'deletebatch-page' => 'الصفحات للحذف:',
	'deletebatch-omitting-nonexistant' => 'إزالة صفحة غير موجودة $1.',
	'deletebatch-omitting-invalid' => 'إزالة صفحة غير صحيحة $1.',
	'deletebatch-file-bad-format' => 'الملف ينبغى أن يكون نصا خالصا',
	'deletebatch-file-missing' => 'غير قادر على قراءة الملف المعطى',
	'deletebatch-select-script' => 'سكريبت حذف الصفحات',
	'deletebatch-select-yourself' => 'أنت',
	'deletebatch-no-page' => 'من فضلك اختر على الأقل صفحة واحدة للحذف أو اختر ملفا يحتوى على قائمة الصفحات.',
	'right-deletebatch' => 'حذف باتش الصفحات',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'deletebatch' => 'Выдаленьне групы старонак',
	'deletebatch-desc' => '[[Special:DeleteBatch|Выдаліць групу старонак]]',
	'deletebatch-help' => 'Выдаленьне групы старонак. Вы можаце выдаляць старонкі па адной альбо выдаліць старонкі зьмешчаныя ў файле.
Выберыце ўдзельніка, які будзе паказаны ў журнале выдаленьняў.
Загружаны файл павінен зьмяшчаць назвы старонак і неабавязковую прычыну выдаленьня, якія падзеленыя паміж сабой сымбалем «|» па аднаму запісу на радок.',
	'deletebatch-caption' => 'Сьпіс старонак:',
	'deletebatch-title' => 'Выдаліць групу',
	'deletebatch-link-back' => 'Вярнуцца да спэцыяльнай старонкі',
	'deletebatch-as' => 'Запусьціць скрыпт як:',
	'deletebatch-both-modes' => 'Калі ласка, выберыце адну вызначаную старонку альбо сьпіс старонак.',
	'deletebatch-or' => '<b>ці</b>',
	'deletebatch-delete' => 'Выдаліць',
	'deletebatch-page' => 'Старонкі да выдаленьня:',
	'deletebatch-processing-from-file' => 'выдаленьне старонак са сьпісу ў файле',
	'deletebatch-processing-from-form' => 'выдаленьне старонак з формы',
	'deletebatch-omitting-nonexistant' => 'Прапушчаная неіснуючая старонка $1.',
	'deletebatch-omitting-invalid' => 'Прапушчаная няслушная старонка $1.',
	'deletebatch-file-bad-format' => 'Файл павінен утрымліваць толькі тэкст',
	'deletebatch-file-missing' => 'Немагчыма прачытаць пададзены файл',
	'deletebatch-select-script' => 'скрыпт выдаленьня старонак',
	'deletebatch-select-yourself' => 'Вы',
	'deletebatch-no-page' => 'Калі ласка, пазначце хаця б адну старонку АЛЬБО файл, які ўтрымлівае сьпіс старонак да выдаленьня.',
	'right-deletebatch' => 'выдаленьне групы старонак',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'deletebatch-link-back' => 'Връщане към специалната страница',
	'deletebatch-as' => 'Стартиране на скрипта като:',
	'deletebatch-or' => '<b>ИЛИ</b>',
	'deletebatch-delete' => 'Изтриване',
	'deletebatch-page' => 'Страници за изтриване:',
	'deletebatch-file-bad-format' => 'Необходимо е файлът да съдържа само текст',
	'deletebatch-file-missing' => 'Предоставеният файл не може да бъде прочетен',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'deletebatch-caption' => 'Spisak stranica:',
	'deletebatch-link-back' => 'Nazad na posebnu stranicu',
	'deletebatch-as' => 'Pokreni skriptu kao:',
	'deletebatch-or' => '<b>ili</b>',
	'deletebatch-delete' => 'Obriši',
	'deletebatch-page' => 'Stranice koje će biti obrisane:',
	'deletebatch-processing-from-file' => 'brisanje stranica sa spiska datoteka',
	'deletebatch-processing-from-form' => 'brisanje stranica iz obrazca',
	'deletebatch-file-bad-format' => 'Datoteka bi trebala biti u formi običnog teksta',
	'deletebatch-file-missing' => 'Ne možete se pročitati navedena datoteka',
	'deletebatch-select-yourself' => 'vi',
);

/** Catalan (Català)
 * @author Aleator
 * @author SMP
 */
$messages['ca'] = array(
	'deletebatch' => 'Esborra un lot de pàgines',
	'deletebatch-desc' => '[[Special:DeleteBatch|Esborreu un lot de pàgines]]',
	'deletebatch-help' => "Esborreu un lot de pàgines. Podeu fer esborraments senzills o esborrar les pàgines llistades en un fitxer.
Escolliu l'usuari que es mostrarà en el registre d'esborrament.
El fitxer indicat només pot contenir el títol de la pàgina i el motiu per a esborrar-la separats per una barra vertical | a cada línia.",
	'deletebatch-caption' => 'Llista de pàgines:',
	'deletebatch-title' => 'Esborra lot',
	'deletebatch-link-back' => 'Torna a la pàgina especial',
	'deletebatch-as' => 'Executa el script com a:',
	'deletebatch-both-modes' => 'Escolliu una pàgina especificada o una llista de pàgines donada.',
	'deletebatch-or' => '<b>o</b>',
	'deletebatch-page' => 'Pàgines a esborrar:',
	'deletebatch-omitting-nonexistant' => "S'ha omès la pàgina inexistent $1.",
	'deletebatch-omitting-invalid' => "S'ha omès la pàgina no vàlida $1.",
	'deletebatch-file-bad-format' => 'El fitxer ha de ser de text pla',
	'deletebatch-file-missing' => "No s'ha pogut llegir el fitxer",
	'deletebatch-select-script' => "script d'eliminació de pàgines",
	'deletebatch-select-yourself' => 'vós',
	'deletebatch-no-page' => 'Especifiqueu com a mínim una pàgina per esborrar o escolliu un fitxer que contingui una llista de pàgines.',
	'right-deletebatch' => 'Lot de pàgines a esborrar',
);

/** German (Deutsch)
 * @author Als-Holder
 * @author ChrisiPK
 * @author Leithian
 * @author MF-Warburg
 * @author Purodha
 * @author Revolus
 * @author Umherirrender
 */
$messages['de'] = array(
	'deletebatch' => 'Eine Reihe von Seiten löschen',
	'deletebatch-desc' => '[[Special:DeleteBatch|Lösche eine Reihe von Seiten]]',
	'deletebatch-help' => 'Lösche eine Reihe von Seiten. Du kannst einerseits eine einzelne Seite löschen, aber auch mehrere Seiten, die du in einer Datei aufzählst.
Wähle einen Benutzer, der im Löschlogbuch angezeigt werden soll.
Die hochzuladende Datei sollte pro Zeile einen Seitentitel und kann optional einen mit einem senkrechten Strich („|“) abgetrennten Löschgrund enthalten.',
	'deletebatch-caption' => 'Seitenliste:',
	'deletebatch-title' => 'Mehrere Seiten löschen',
	'deletebatch-link-back' => 'Zurück zur Spezialseite',
	'deletebatch-as' => 'Skript ausführen als:',
	'deletebatch-both-modes' => 'Bitte wähle entweder eine spezifische Seite oder eine gegebene Liste von Seiten.',
	'deletebatch-or' => '<b>oder</b>',
	'deletebatch-delete' => 'Löschen',
	'deletebatch-page' => 'Zu löschende Seiten:',
	'deletebatch-processing-from-file' => 'Seiten über Dateiliste löschen',
	'deletebatch-processing-from-form' => 'Seiten über Formular löschen',
	'deletebatch-omitting-nonexistant' => 'Überspringe nicht vorhandene Seite $1.',
	'deletebatch-omitting-invalid' => 'Überspringe ungültige Seite $1.',
	'deletebatch-file-bad-format' => 'Die Datei sollte Klartext enthalten.',
	'deletebatch-file-missing' => 'Übergebene Datei konnte nicht gelesen werden',
	'deletebatch-select-script' => 'Seitenlöschskript',
	'deletebatch-select-yourself' => 'du',
	'deletebatch-no-page' => 'Bitte gib entweder zumindest eine zu löschende Seite an oder wähle eine Datei, die eine Liste von zu löschenden Seiten enthält.',
	'right-deletebatch' => 'Eine Reihe von Seiten löschen',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author ChrisiPK
 * @author Imre
 */
$messages['de-formal'] = array(
	'deletebatch-link-back' => 'Sie können zur Erweiterung zurückgehen',
	'deletebatch-select-yourself' => 'Sie',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'deletebatch' => 'Někotare boki wulašowaś',
	'deletebatch-desc' => '[[Special:DeleteBatch|Někotare boki wulašowaś]]',
	'deletebatch-help' => 'Wulašuj někotare boki. Móžoš pak jadnotliwe wulašowanje pśewjasć pak boki z dataje wulašowaś.
Wubjeŕ wužywarja, kótaryž se pokažo w protokolach wulašowanjow.
Nagrata dataja by měła mě boka a opcionelnu pśicynu wopśimjeś, kótarejž stej pśez znamuško "|" w  kuždej smužce wótźělonej.',
	'deletebatch-caption' => 'Lisćina bokow:',
	'deletebatch-title' => 'Někotare boki wulašowaś',
	'deletebatch-link-back' => 'Slědk k specialnemu bokoju',
	'deletebatch-as' => 'Skript wuwjasć ako:',
	'deletebatch-both-modes' => 'Pšosym wubjeŕ pak jaden pódany boka pak danu lisćinu bokow.',
	'deletebatch-or' => '<b>abo</b>',
	'deletebatch-delete' => 'Wulašowaś',
	'deletebatch-page' => 'Boki, kótarež maju se wulašowaś:',
	'deletebatch-processing-from-file' => 'boki lašuju se z datajoweje lisćiny',
	'deletebatch-processing-from-form' => 'boki lašuju so z formulara',
	'deletebatch-omitting-nonexistant' => 'Njeeksistujucy bok $1 se wuwóstaja.',
	'deletebatch-omitting-invalid' => 'Njepłaśiwy bok $1 se wuwóstaja.',
	'deletebatch-file-bad-format' => 'Dataja by měła lutny tekst wopśimjeś',
	'deletebatch-file-missing' => 'Jo njemóžno danu dataju cytaś',
	'deletebatch-select-script' => 'skript za wulašowanje bokow',
	'deletebatch-select-yourself' => 'ty',
	'deletebatch-no-page' => 'Pšosym pódaj nanejmjenjej jaden bok za wulašowanje ABO wujeŕ dataju, kótaraž wopśimujo lisćinu bokow.',
	'right-deletebatch' => 'Někotare boki wulašowaś',
);

/** Greek (Ελληνικά)
 * @author Omnipaedista
 */
$messages['el'] = array(
	'deletebatch-caption' => 'Λίστα σελίδων:',
	'deletebatch-or' => '<b>ή</b>',
	'deletebatch-delete' => 'Διαγραφή',
	'deletebatch-select-yourself' => 'Εσείς',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'deletebatch' => 'Forigi aron de paĝoj',
	'deletebatch-desc' => '[[Special:DeleteBatch|Forigi aron de paĝoj]]',
	'deletebatch-help' => 'Por forigi aron de paĝoj. Vi povas aŭ fari unuopan forigon, aŭ forigi paĝojn listitajn en dosiero.
Selektu uzanton kiu estos montrata en forigadaj protokoloj.
Alŝutita dosiero enhavu paĝan nomon kaj nedevigan kialon apartigita de signo "|" en ĉiu linio.',
	'deletebatch-caption' => 'Paĝlisto:',
	'deletebatch-title' => 'Forigi aron',
	'deletebatch-link-back' => 'Vi povas reiri al la etendilo',
	'deletebatch-as' => 'Voki la skripton kiel',
	'deletebatch-both-modes' => 'Bonvolu selekti aŭ unu specifan paĝon aŭ donatan liston de paĝoj.',
	'deletebatch-or' => '<b>AŬ</b>',
	'deletebatch-delete' => 'Forigi',
	'deletebatch-page' => 'Forigotaj paĝoj',
	'deletebatch-omitting-nonexistant' => 'Pasante neekzistan paĝon $1.',
	'deletebatch-omitting-invalid' => 'Pasante nevalidan paĝon $1.',
	'deletebatch-file-bad-format' => 'La dosiero estu norma teksto',
	'deletebatch-file-missing' => 'Ne eblas legi donatan dosieron',
	'deletebatch-select-script' => 'skripto por forigi paĝon',
	'deletebatch-select-yourself' => 'vi',
	'deletebatch-no-page' => 'Bonvolu specifigi almenaŭ unu paĝon por forigi AŬ selekti dosieron enhavantan paĝliston.',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Sanbec
 */
$messages['es'] = array(
	'deletebatch-caption' => 'Lista de páginas:',
	'deletebatch-link-back' => 'Regresar a la página especial',
	'deletebatch-both-modes' => 'Por favor escoger ya sea una página específica o una lista dada de páginas.',
	'deletebatch-or' => '<b>o</b>',
	'deletebatch-delete' => 'Borrar',
	'deletebatch-page' => 'Páginas a ser borradas:',
	'deletebatch-processing-from-file' => 'borrando páginas de la lista de archivos',
	'deletebatch-processing-from-form' => 'borrando páginas del formulario',
	'deletebatch-omitting-nonexistant' => 'Omitiendo página no existente $1.',
	'deletebatch-omitting-invalid' => 'Omitiendo página inválida $1.',
	'deletebatch-file-bad-format' => 'El archivo debería ser texto simple',
	'deletebatch-file-missing' => 'Incapaz de leer archivo dado',
	'deletebatch-select-yourself' => 'usted',
	'deletebatch-no-page' => 'Por favor especifique al menos una página a borrar O escoja un archivo conteniendo una lista de páginas.',
);

/** Basque (Euskara)
 * @author Kobazulo
 */
$messages['eu'] = array(
	'deletebatch-caption' => 'Orrialde zerrenda:',
	'deletebatch-or' => '<b>edo</b>',
	'deletebatch-delete' => 'Ezabatu',
	'deletebatch-page' => 'Ezabatu beharreko orrialdeak:',
	'deletebatch-select-yourself' => 'Zu',
);

/** Finnish (Suomi)
 * @author Crt
 * @author Jack Phoenix
 * @author Mobe
 * @author Nike
 */
$messages['fi'] = array(
	'deletebatch' => 'Poista useita sivuja',
	'deletebatch-desc' => 'Mahdollistaa [[Special:DeleteBatch|sivujen poistamisen erissä]].',
	'deletebatch-help' => 'Poista useita sivuja. Voit joko tehdä yhden poiston tai poistaa tiedostossa listatut sivut. Valitse käyttäjä, joka näytetään poistolokeissa. Tallennetun tiedoston tulisi sisältää sivun nimi ja vapaaehtoinen syy | -merkin erottamina joka rivillä.',
	'deletebatch-caption' => 'Sivulista',
	'deletebatch-title' => 'Poista useita sivuja',
	'deletebatch-link-back' => 'Palaa takaisin toimintosivulle',
	'deletebatch-as' => 'Poiston suorittaja',
	'deletebatch-both-modes' => 'Valitse joko määritelty sivu tai annettu lista sivuista.',
	'deletebatch-or' => '<b>TAI</b>',
	'deletebatch-delete' => 'Poista',
	'deletebatch-page' => 'Poistettavat sivut',
	'deletebatch-omitting-nonexistant' => 'Ohitetaan olematon sivu $1.',
	'deletebatch-omitting-invalid' => 'Ohitetaan kelpaamaton sivu $1.',
	'deletebatch-file-bad-format' => 'Tiedoston tulisi olla raakatekstiä',
	'deletebatch-file-missing' => 'Ei voi lukea annettua tiedostoa',
	'deletebatch-select-script' => 'yleinen sivunpoistotunnus',
	'deletebatch-select-yourself' => 'oma tunnus',
	'deletebatch-no-page' => 'Määrittele ainakin yksi poistettava sivu TAI valitse tiedosto, joka sisältää sivulistan.',
	'right-deletebatch' => 'Poistaa sivuja erissä',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author IAlex
 * @author McDutchie
 */
$messages['fr'] = array(
	'deletebatch' => 'Supprimer lot de pages',
	'deletebatch-desc' => '[[Special:DeleteBatch|Supprime un lot de pages]]',
	'deletebatch-help' => 'Supprime un lot de pages. Vous pouvez soit lancer une simple suppression, soit supprimer des pages listées dans un fichier.
Choisissez un utilisateur qui sera affiché dans le journal des suppressions.
Un fichier importé pourra contenir un nom de la page et un motif facultatif séparé par un « | » dans chaque ligne.',
	'deletebatch-caption' => 'Liste des pages :',
	'deletebatch-title' => 'Supprimer en lot',
	'deletebatch-link-back' => 'Revenir à la page spéciale',
	'deletebatch-as' => 'Lancer le script comme :',
	'deletebatch-both-modes' => 'Veuillez choisir, soit une des pages indiquées, soit une liste donnée de pages.',
	'deletebatch-or' => '<b>OU</b>',
	'deletebatch-delete' => 'Supprimer',
	'deletebatch-page' => 'Pages à supprimer :',
	'deletebatch-processing-from-file' => 'suppression des pages depuis un fichier de liste',
	'deletebatch-processing-from-form' => 'suppression des pages depuis le formulaire',
	'deletebatch-omitting-nonexistant' => 'Omission de la page « $1 » inexistante.',
	'deletebatch-omitting-invalid' => 'Omission de la page « $1 » incorrecte.',
	'deletebatch-file-bad-format' => 'Le fichier doit être en texte simple',
	'deletebatch-file-missing' => 'Impossible de lire le fichier donné',
	'deletebatch-select-script' => 'script pour supprimer pages',
	'deletebatch-select-yourself' => 'vous',
	'deletebatch-no-page' => 'Veuillez indiquer au moins une page à supprimer OU un fichier donné contenant une liste de pages.',
	'right-deletebatch' => 'Supprimer des pages en lot',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'deletebatch' => 'Borrar un conxunto de páxinas',
	'deletebatch-desc' => '[[Special:DeleteBatch|Borrar un conxunto de páxinas]]',
	'deletebatch-help' => 'Borrar un conxunto de páxinas. Pode levar a cabo un borrado único ou borrar as páxinas listadas nun ficheiro.
Escolla o usuario que será amosado nos rexistros de borrado.
O ficheiro cargado debería conter o nome da páxina e unha razón opcional separados por un carácter de barra vertical ("|") en cada liña.',
	'deletebatch-caption' => 'Lista da páxina:',
	'deletebatch-title' => 'Borrar un conxunto',
	'deletebatch-link-back' => 'Voltar á páxina especial',
	'deletebatch-as' => 'Executar a escritura como:',
	'deletebatch-both-modes' => 'Por favor, escolla unha páxina específica ou unha lista de páxinas dadas.',
	'deletebatch-or' => '<b>OU</b>',
	'deletebatch-delete' => 'Borrar',
	'deletebatch-page' => 'Páxinas a ser borradas:',
	'deletebatch-processing-from-file' => 'borrando as páxinas da lista de ficheiros',
	'deletebatch-processing-from-form' => 'borrando as páxinas do formulario',
	'deletebatch-omitting-nonexistant' => 'Omitindo a páxina $1, que non existe.',
	'deletebatch-omitting-invalid' => 'Omitindo a páxina inválida $1.',
	'deletebatch-file-bad-format' => 'O ficheiro debería ser un texto sinxelo',
	'deletebatch-file-missing' => 'Non se pode ler o ficheiro dado',
	'deletebatch-select-script' => 'borrar o guión dunha páxina',
	'deletebatch-select-yourself' => 'vostede',
	'deletebatch-no-page' => 'Por favor, especifique, polo menos, unha páxina para borrar OU escolla un ficheiro que conteña unha lista de páxinas.',
	'right-deletebatch' => 'Borrar conxuntos de páxinas',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'deletebatch-or' => '<b>ἢ</b>',
	'deletebatch-select-yourself' => 'Σύ',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'deletebatch' => 'E ganzi Zyylete vu Syte lesche',
	'deletebatch-desc' => '[[Special:DeleteBatch|E Zyylete vu Syte lesche]]',
	'deletebatch-help' => 'Lesch e Zyylete vu Syte. Du chasch uf eire Syte ei einzelni Syte lesche, aber au mehreri Syte, wu Du in ere Datei ufzellsch.
Wehl e Benutzer, wu im Leschlogbuech soll aazeigt wäre.
D Datei, wu soll uffeglade wäre, sott pro Zyyle ei Sytetitel haa un s cha optional e Leschgrund din haa, wu mit eme sänkrächte Strich („|“) abtrännt isch.',
	'deletebatch-caption' => 'Sytelischt:',
	'deletebatch-title' => 'Mehreri Syte lesche',
	'deletebatch-link-back' => 'Zrugg zue dr Spezialsyte',
	'deletebatch-as' => 'Skript uusfieren as:',
	'deletebatch-both-modes' => 'Bitte wehl äntwäder e spezifischi Seite oder e Lischt vu Syte.',
	'deletebatch-or' => '<b>oder</b>',
	'deletebatch-delete' => 'Lesche',
	'deletebatch-page' => 'Syte, wu solle glescht wäre:',
	'deletebatch-processing-from-file' => 'Lescht Syte us dr Dateie-Lischt',
	'deletebatch-processing-from-form' => 'Lescht Dateie us dr Formular',
	'deletebatch-omitting-nonexistant' => 'Ibergump Syte $1, wu s nit git.',
	'deletebatch-omitting-invalid' => 'Ibergump nit giltigi Syte $1.',
	'deletebatch-file-bad-format' => 'In dr Datei sott s Klartäxt haa.',
	'deletebatch-file-missing' => 'Datei, wu ibergee woren isch, het nit chenne gläse wäre',
	'deletebatch-select-script' => 'Syteleschskript',
	'deletebatch-select-yourself' => 'Du',
	'deletebatch-no-page' => 'Bitte gib äntwäder zmindescht ei Syten aa, wu glescht soll wäre, oder wehl e Datei, wu s e Lischt din het vu Syte, wu glescht solle wäre.',
	'right-deletebatch' => 'E Zyylete vu Syte lesche',
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'deletebatch' => 'מחיקת מקבץ דפים',
	'deletebatch-desc' => '[[Special:DeleteBatch|מחיקת מקבץ דפים]]',
	'deletebatch-help' => 'מחיקת מקבץ דפים. באפשרותכם לבצע מחיקה בודדת, או למחוק דפים הרשומים בקובץ.
נא בחרו משתמש שיופיע ביומני המחיקה.
הקובץ המועלה אמור לכלול שם של דף בכל שורה, ואפשר גם לכלול סיבה המופרדת בתו "|" משם הדף בכל אחת מהשורות.',
	'deletebatch-caption' => 'רשימת דפים:',
	'deletebatch-title' => 'מחיקת מקבץ',
	'deletebatch-link-back' => 'חזרה לדף המיוחד',
	'deletebatch-as' => 'הרצת הסקריפט בתור:',
	'deletebatch-both-modes' => 'אנא בחרו בדף אחד מסוים או ברשימה נתונה של דפים.',
	'deletebatch-or' => '<b>או</b>',
	'deletebatch-delete' => 'מחיקה',
	'deletebatch-page' => 'דפים למחיקה:',
	'deletebatch-processing-from-file' => 'מחיקת דפים מרשימת הקבצים',
	'deletebatch-processing-from-form' => 'מחיקת דפים מטופס',
	'deletebatch-omitting-nonexistant' => 'השמטת דף שאינו קיים $1.',
	'deletebatch-omitting-invalid' => 'השמטת דף בלתי תקין $1.',
	'deletebatch-file-bad-format' => 'הקובץ אמור להיות קובץ טקסט פשוט.',
	'deletebatch-file-missing' => 'לא ניתן לקרוא את הקובץ הנתון.',
	'deletebatch-select-script' => 'סקריפט מחיקת דפים',
	'deletebatch-select-yourself' => 'אתם',
	'deletebatch-no-page' => 'אנא ציינו לפחות דף אחד למחיקה או בחרו קובץ המכיל רשימת דפים.',
	'right-deletebatch' => 'מחיקה של דפים רבים ביחד',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author Suradnik13
 */
$messages['hr'] = array(
	'deletebatch' => 'Izbriši skupinu stranica',
	'deletebatch-desc' => '[[Special:DeleteBatch|Izbriši skupinu stranica]]',
	'deletebatch-help' => 'Brisanje skupine stranica. Možete izbrisati samo jednu stranicu, ili izbrisati stranice s popisa.
Odaberite suradnika koje će biti prikazan u evidencijama.
Postavljena datoteka treba sadržavati nazive stranica, a dodatno razlog odvojen kosom crtom "|", u svakom redu.',
	'deletebatch-caption' => 'Popis stranica:',
	'deletebatch-title' => 'Skupno brisanje',
	'deletebatch-link-back' => 'Vrati se na posebnu stranicu',
	'deletebatch-as' => 'Pokreni skriptu kao:',
	'deletebatch-both-modes' => 'Molimo vas odaberiti ili jednu određenu stranicu ili popis stranica.',
	'deletebatch-or' => '<b>ili</b>',
	'deletebatch-page' => 'Stranice za brisanje:',
	'deletebatch-omitting-nonexistant' => 'Izostavljanje nepostojeće stranice $1.',
	'deletebatch-omitting-invalid' => 'Izostavljanje neispravne stranice $1.',
	'deletebatch-file-bad-format' => 'U datoteci bi trebao biti čisti tekst',
	'deletebatch-file-missing' => 'Datoteka se ne može pročitati',
	'deletebatch-select-script' => 'skripta za brisanje',
	'deletebatch-select-yourself' => 'vi',
	'deletebatch-no-page' => 'Molimo vas odredite barem jednu stranicu za brisanje ILI odaberite datoteku koja sadrži popis.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'deletebatch' => 'Wjacore strony wušmórnyć',
	'deletebatch-desc' => '[[Special:DeleteBatch|Wjacore strony wušmórnyć]]',
	'deletebatch-help' => 'Wušmórń wjacore strony. Móžeš pak jednotliwe wušmórnjenje přewjesć pak strony z dataje wušmórnyc. Wubjer wužiwarja, kotryž so w protokolach wušmórnjenjow pokaza.
Nahrata dataja měła mjeno strony a opcionalnu přičinu wobsahować, kotrejž so přez znamješko "|" na kóždej lince wotdźěletej.',
	'deletebatch-caption' => 'Lisćina stronow:',
	'deletebatch-title' => 'Wjacore strony wušmórnyć',
	'deletebatch-link-back' => 'Wróćo k specialnej stronje',
	'deletebatch-as' => 'Skript wuwjesć jako:',
	'deletebatch-both-modes' => 'Prošu wubjer pak jednu podatu stronu abo datu lisćinu stronow.',
	'deletebatch-or' => '<b>abo</b>',
	'deletebatch-delete' => 'Wušmórnyć',
	'deletebatch-page' => 'Strony, kotrež maja so wušmórnyć:',
	'deletebatch-processing-from-file' => 'strony wušmóruja so z datajoweje lisćiny',
	'deletebatch-processing-from-form' => 'Strony wušmóruja so z formulara',
	'deletebatch-omitting-nonexistant' => 'Njeeksistowaca strona $1 so wuwostaja.',
	'deletebatch-omitting-invalid' => 'Njepłaćiwa strona $1 so wuwostaja.',
	'deletebatch-file-bad-format' => 'Dataja měła z luteho teksta wobstać.',
	'deletebatch-file-missing' => 'Je njemóžno datu dataju čitać',
	'deletebatch-select-script' => 'skript za wušmórnjenje strony',
	'deletebatch-select-yourself' => 'ty',
	'deletebatch-no-page' => 'Prošu podaj znajmjeńša jednun stronu abo wušmórń ABO wubjer dataju, kotraž lisćinu stronow wobsahuje.',
	'right-deletebatch' => 'Wjacore strony wušmórnyć',
);

/** Hungarian (Magyar)
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'deletebatch' => 'Lapok tömeges törlése',
	'deletebatch-desc' => '[[Special:DeleteBatch|Lapok tömeges törlése]]',
	'deletebatch-help' => 'Törölhetsz egyetlen lapot, vagy egy fájlban listázottakat.
Válaszd ki a felhasználói nevet, ami meg fog jelenni a törlési naplóban.
A feltöltött fájl minden sora tartalmazhat „|” karakterrel elválasztva egy törlési okot.',
	'deletebatch-caption' => 'Lapok listája:',
	'deletebatch-title' => 'Lapok tömeges törlése',
	'deletebatch-link-back' => 'Vissza a speciális lapra',
	'deletebatch-as' => 'A szkript futtatása mint:',
	'deletebatch-or' => '<b>vagy</b>',
	'deletebatch-delete' => 'Törlés',
	'deletebatch-page' => 'Törlendő lapok:',
	'deletebatch-file-bad-format' => 'A fájlnak egyszerű szövegnek kell lennie',
	'deletebatch-file-missing' => 'A megadott fájl nem olvasható',
	'deletebatch-select-script' => 'Laptörlés szkript',
	'deletebatch-select-yourself' => 'te',
	'right-deletebatch' => 'Lapok kötegelt törlése',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'deletebatch' => 'Deler lot de paginas',
	'deletebatch-desc' => '[[Special:DeleteBatch|Deler un lot de paginas]]',
	'deletebatch-help' => 'Deler un lot de paginas. Tu pote executar un deletion singule, o deler paginas listate in un file.
Selige un usator que se monstrara in le registro de deletiones.
Le file cargate debe continer in cata linea un nomine de pagina e un motivo facultative separate per un character "|".',
	'deletebatch-caption' => 'Lista de paginas:',
	'deletebatch-title' => 'Deler in lot',
	'deletebatch-link-back' => 'Retornar al pagina special',
	'deletebatch-as' => 'Executar le script como:',
	'deletebatch-both-modes' => 'Per favor selige, o un del paginas specificate, o un lista date de paginas.',
	'deletebatch-or' => '<b>o</b>',
	'deletebatch-delete' => 'Deler',
	'deletebatch-page' => 'Paginas a deler:',
	'deletebatch-processing-from-file' => 'deletion de paginas ex un lista de files',
	'deletebatch-processing-from-form' => 'deletion de paginas ex formulario',
	'deletebatch-omitting-nonexistant' => 'Omission del pagina non existente "$1".',
	'deletebatch-omitting-invalid' => 'Omission del pagina invalide "$1".',
	'deletebatch-file-bad-format' => 'Le file debe esser in texto simple',
	'deletebatch-file-missing' => 'Non pote leger le file date',
	'deletebatch-select-script' => 'script pro deler paginas',
	'deletebatch-select-yourself' => 'tu',
	'deletebatch-no-page' => 'Per favor, o specifica al minus un pagina a deler, o selige un file continente un lista de paginas.',
	'right-deletebatch' => 'Deler paginas in lot',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 */
$messages['id'] = array(
	'deletebatch-or' => '<b>atau</b>',
	'deletebatch-delete' => 'Hapus',
);

/** Italian (Italiano)
 * @author Darth Kule
 * @author Melos
 * @author Pietrodn
 */
$messages['it'] = array(
	'deletebatch' => 'Elimina un gruppo di pagine',
	'deletebatch-desc' => '[[Special:DeleteBatch|Elimina un gruppo di pagine]]',
	'deletebatch-help' => 'Eliminazione di un gruppo di pagine. Puoi eseguire una sola eliminazione, o eliminare le pagine elencate in un file.
Scegli un utente che sarà mostrato nel registro delle cancellazioni.
I file caricati dovrebbero contenere il nome della pagina e un motivo opzionale separati da un carattere "|" in ciascuna linea.',
	'deletebatch-caption' => 'Elenco delle pagine:',
	'deletebatch-title' => 'Elimina gruppo',
	'deletebatch-link-back' => 'Torna alla pagina speciale',
	'deletebatch-as' => 'Esegui lo script come:',
	'deletebatch-both-modes' => 'Per favore scegli o una pagina specificata o una data lista di pagine.',
	'deletebatch-or' => '<b>o</b>',
	'deletebatch-delete' => 'Cancella',
	'deletebatch-page' => 'Pagine da cancellare:',
	'deletebatch-processing-from-file' => 'eliminazione di pagine da un file di elenco',
	'deletebatch-processing-from-form' => 'eliminazione di pagine da modulo',
	'deletebatch-omitting-nonexistant' => 'Tralascio la pagina non esistente $1.',
	'deletebatch-omitting-invalid' => 'Tralascio la pagina non valida $1.',
	'deletebatch-file-bad-format' => 'Il file dovrebbe essere di solo testo',
	'deletebatch-file-missing' => 'Impossibile leggere il file dato',
	'deletebatch-select-script' => 'script di cancellazione pagina',
	'deletebatch-select-yourself' => 'tu',
	'deletebatch-no-page' => "Per favore specifica almeno una pagina da eliminare O scegli un file contenente l'elenco delle pagine.",
	'right-deletebatch' => 'Elimina le pagine in massa',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Fryed-peach
 */
$messages['ja'] = array(
	'deletebatch' => 'ページを一括削除する',
	'deletebatch-desc' => '[[Special:DeleteBatch|ページを一括削除する]]',
	'deletebatch-help' => 'ページを一括削除することができます。ページ毎の削除の他に、ファイルに列挙したページ群を削除することができます。削除記録に表示される利用者を選択してください。アップロードされたファイルについては、各行にページ名とパイプ記号 (|) で区切った理由の追加説明を記す必要があります。',
	'deletebatch-caption' => 'ページ一覧:',
	'deletebatch-title' => '一括削除',
	'deletebatch-link-back' => '特別ページに戻る',
	'deletebatch-as' => 'スクリプトを実行する名義:',
	'deletebatch-both-modes' => '特定の1ページか、または与えられたページ一覧のどちらかを選んでください。',
	'deletebatch-or' => '<b>または</b>',
	'deletebatch-delete' => '削除',
	'deletebatch-page' => '削除するページ:',
	'deletebatch-processing-from-file' => 'ファイル一覧からページを削除',
	'deletebatch-processing-from-form' => 'フォームからページを削除',
	'deletebatch-omitting-nonexistant' => '存在しないページ $1 は省略しました。',
	'deletebatch-omitting-invalid' => '無効なページ $1 は省略しました。',
	'deletebatch-file-bad-format' => 'ファイルは、プレーンテキストであるべきです',
	'deletebatch-file-missing' => '与えられたファイルを読み込むことができません。',
	'deletebatch-select-script' => 'ページ削除スクリプト',
	'deletebatch-select-yourself' => 'あなた',
	'deletebatch-no-page' => '削除するページを少なくとも1ページ指定するか、ページ一覧を含むファイルを選んでください。',
	'right-deletebatch' => 'ページ削除を一括して実行する',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'deletebatch' => 'លុប​បាច់​នៃ​ទំព័រ',
	'deletebatch-desc' => '[[Special:DeleteBatch|លុប​បាច់​ទំព័រ]]',
	'deletebatch-caption' => 'បញ្ជី​ទំព័រ៖',
	'deletebatch-title' => 'លុប​បាច់',
	'deletebatch-link-back' => 'ត្រឡប់​ទៅកាន់​ទំព័រ​ពិសេស',
	'deletebatch-as' => 'រត់​ស្គ្រីប​ជា៖',
	'deletebatch-or' => '<b>ឬ</b>',
	'deletebatch-delete' => 'លុបចោល',
	'deletebatch-page' => 'ទំព័រ​ដែល​ត្រូវ​លុប៖',
	'deletebatch-processing-from-file' => 'កំពុង​លុប​ទំព័រ​ចេញ​ពី​បញ្ជី​ឯកសារ​',
	'deletebatch-omitting-invalid' => 'លុប​ទំព័រ​មិនត្រឹមត្រូវ $1 ។',
	'deletebatch-file-bad-format' => 'ឯកសារ​គួរតែ​ជា​អត្ថបទធម្មតា',
	'deletebatch-file-missing' => 'មិន​អាច​អាន​ឯកសារ​ដែល​បាន​ផ្ដល់​ឱ្យ',
	'deletebatch-select-script' => 'លុប​ស្គ្រីប​ទំព័រ',
	'deletebatch-select-yourself' => 'អ្នក',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'deletebatch' => 'En Aanzahl Sigge fottschmiiße',
	'deletebatch-desc' => 'En [[Special:DeleteBatch|Aanzahl Sigge fottschmiiße]]',
	'deletebatch-help' => 'Donn En Aanzahl Sigge fottschmiiße.
Do kanns entweder ein einzel Sigg fottschmiiße, udder en Aanzahl Sigge,
die en ener Datei jeliß sen.
Sök Der ene Metmaacher uß, dä em Logbooch för et Fottschmiiße enjedraare weed.
De huhjelade Datei sullt en jeede Reih ene Name fun ene Sigg han,
dohenger kann ene „|“ stonn, un dann dohenger ene Jrond för et Fottschmiiße.',
	'deletebatch-caption' => 'Leß met de Sigge:',
	'deletebatch-title' => 'En Aanzahl Sigge fottschmiiße',
	'deletebatch-link-back' => 'Donn op dä Zosatz zom Wiki retuur jonn',
	'deletebatch-as' => 'Lohß dat Projramm loufe als Metmaacher:',
	'deletebatch-both-modes' => 'Sök entweder en bestemmpte Sigg uß, udder en Leß met Sigge.',
	'deletebatch-or' => '<b>udder</b>',
	'deletebatch-delete' => 'Maach fott!',
	'deletebatch-page' => 'Sigge zom Fottschmiiße:',
	'deletebatch-processing-from-file' => 'Sigge per Datei-Leß fott am schmiiße',
	'deletebatch-processing-from-form' => 'Sigge per Fommulaa fott am schmiiße',
	'deletebatch-omitting-nonexistant' => 'Donn de Sigg $1 övverjonn, weil et se nit jit.',
	'deletebatch-omitting-invalid' => 'Donn dä Tittel $1 övverjonn, weil hä onjöltesh eß.',
	'deletebatch-file-bad-format' => 'En dä Datei sullt nommaale Täx stonn.',
	'deletebatch-file-missing' => 'Die aanjejovve Datei kunnte mer nit lesse.',
	'deletebatch-select-script' => 'Projramm zom Sigge Fottschmiiße',
	'deletebatch-select-yourself' => 'Do',
	'deletebatch-no-page' => 'Beß esu joot, un jif winnischstens ein Sigg zom Fottschmiiße aan, udder
söök en Datei uß, wo en Leß met Sigge zom Fottschmiiße dren steiht.',
	'right-deletebatch' => 'En Aanzahl Sigge fottschmiiße',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'deletebatch' => 'Rei vu Säite läschen',
	'deletebatch-desc' => '[[Special:DeleteBatch|Läscht eng Rei Säiten]]',
	'deletebatch-caption' => 'Lëscht vun der Säit:',
	'deletebatch-title' => 'Zesumme läschen',
	'deletebatch-link-back' => "Gitt zréck op d'Spezialsäit",
	'deletebatch-both-modes' => 'Wielt entweder eng spezifesch Säit oder eng spezifesch Lëscht vu Säiten.',
	'deletebatch-or' => '<b>ODER</b>',
	'deletebatch-page' => 'Säite fir ze läschen:',
	'deletebatch-omitting-nonexistant' => "D'Säit $1 déi et net gëtt iwwersprangen.",
	'deletebatch-omitting-invalid' => 'Déi ongëlteg Säit $1 iwwersprangen.',
	'deletebatch-select-script' => 'de Script vun der Säit läschen',
	'deletebatch-select-yourself' => 'Dir',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'deletebatch-or' => '<b>эли</b>',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'deletebatch-select-yourself' => 'teh',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author Tvdm
 */
$messages['nl'] = array(
	'deletebatch' => 'Paginareeks verwijderen',
	'deletebatch-desc' => '[[Special:DeleteBatch|Paginareeks verwijderen]]',
	'deletebatch-help' => 'Een lijst pagina\'s verwijderen.
U kunt een enkele pagina verwijderen of een lijst van pagina\'s in een bestand.
Kies een gebruiker die in het verwijderlogboek wordt genoemd.
Het bestand dat u uploadt moet op iedere regel een paginanaam en een reden bevatten (optioneel), gescheiden door het karakter "|".',
	'deletebatch-caption' => 'Paginalijst:',
	'deletebatch-title' => 'Reeks verwijderen',
	'deletebatch-link-back' => 'Teruggaan naar de speciale pagina',
	'deletebatch-as' => 'Script uitvoeren als:',
	'deletebatch-both-modes' => "Kies een bepaalde pagina of geef een list met pagina's op.",
	'deletebatch-or' => '<b>Of</b>',
	'deletebatch-delete' => 'Verwijderen',
	'deletebatch-page' => "Te verwijderen pagina's:",
	'deletebatch-processing-from-file' => "bezig met het verwijderen van pagina's uit een bestandslijst",
	'deletebatch-processing-from-form' => "bezig met het verwijderen van pagina's uit het formulier",
	'deletebatch-omitting-nonexistant' => 'Niet-bestaande pagina $1 is overgeslagen.',
	'deletebatch-omitting-invalid' => 'Ongeldige paginanaam $1 is overgeslagen.',
	'deletebatch-file-bad-format' => 'Het bestand moet platte tekst bevatten',
	'deletebatch-file-missing' => 'Het bestnad kan niet gelezen worden',
	'deletebatch-select-script' => "script pagina's verwijderen",
	'deletebatch-select-yourself' => 'u',
	'deletebatch-no-page' => "Geef tenminste één te verwijderen pagina op of kies een bestand dat de lijst met pagina's bevat.",
	'right-deletebatch' => "Pagina's in batch verwijderen",
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Gunnernett
 * @author Harald Khan
 */
$messages['nn'] = array(
	'deletebatch' => 'Masseslett sider',
	'deletebatch-desc' => '[[Special:DeleteBatch|Masseslett sider]]',
	'deletebatch-help' => 'Slett ein serie av sider. Du kan òg utføra ei enkel sletting, eller sletta sider lista opp i ei fil.
Vel ein brukar som skal bli vist i sletteloggen.
Ei opplasta fil må innehalda namnet på sida, og kan òg ha ei valfri sletteårsak skilt frå tittelen med «|».',
	'deletebatch-caption' => 'Sidelista:',
	'deletebatch-title' => 'Slett serie',
	'deletebatch-link-back' => 'Gå attende til spesialsida',
	'deletebatch-as' => 'Køyr skriptet som:',
	'deletebatch-both-modes' => 'Vel éi sida eller ei lista over sider.',
	'deletebatch-or' => '<b>eller</b>',
	'deletebatch-page' => 'Sider som skal bli sletta:',
	'deletebatch-processing-from-file' => 'slettar sider frå lista over filer',
	'deletebatch-processing-from-form' => 'slettar sider frå skjemaet',
	'deletebatch-omitting-nonexistant' => 'Tek ikkje med sida $1 som ikkje finst.',
	'deletebatch-omitting-invalid' => 'Tek ikkje med den ugyldige sida $1.',
	'deletebatch-file-bad-format' => 'Fila bør innehalda rein tekst',
	'deletebatch-file-missing' => 'Kunne ikkje lesa fila',
	'deletebatch-select-script' => 'slett sideskript',
	'deletebatch-select-yourself' => 'du',
	'deletebatch-no-page' => 'Oppgje minst éi sida som skal bli sletta, eller vel ei fil med ei lista over sider.',
	'right-deletebatch' => 'Massesletta sider',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'deletebatch' => 'Slett mange sider',
	'deletebatch-desc' => '[[Special:DeleteBatch|Slett mange sider]]',
	'deletebatch-help' => 'Slett en serie av sider. Du kan også utføre en enkel sletting, eller slette sider listet opp i en fil.
Velg en bruker som skal vises i slettingsloggen.
En opplastet fil må inneholde navnet på siden, og kan også ha en valgfri slettingsgrunn skilt fra tittelen med «|».',
	'deletebatch-caption' => 'Sideliste:',
	'deletebatch-title' => 'Slett serie',
	'deletebatch-link-back' => 'Gå tilbake til spesialsiden',
	'deletebatch-as' => 'Kjør skriptet som:',
	'deletebatch-both-modes' => 'Velg én side eller en liste over sider.',
	'deletebatch-or' => '<b>eller</b>',
	'deletebatch-page' => 'Sider som skal slettes:',
	'deletebatch-omitting-nonexistant' => 'Utelater den ikke-eksisterende siden $1.',
	'deletebatch-omitting-invalid' => 'Utelater den ugyldige siden $1.',
	'deletebatch-file-bad-format' => 'Filen bør inneholde ren tekst',
	'deletebatch-file-missing' => 'Kunne ikke lese filen',
	'deletebatch-select-script' => 'slett sideskript',
	'deletebatch-select-yourself' => 'du',
	'deletebatch-no-page' => 'Vennligst oppgi minst én side å slette eller velg en fil med en liste av sider.',
	'right-deletebatch' => 'Masseslett sider',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'deletebatch' => 'Lòt de supression de las paginas',
	'deletebatch-desc' => '[[Special:DeleteBatch|Suprimís un lòt de paginas]]',
	'deletebatch-help' => 'Suprimís un lòt de paginas. Podètz siá aviar una supression simpla, siá suprimir de paginas listadas dins un fichièr.
Causissètz un utilizaire que serà afichat dins lo jornal de las supressions.
Un fichièr importat poirà conténer un nom de la pagina e un motiu facultatiu separat per un « | » dins cada linha.',
	'deletebatch-caption' => 'Tièra de paginas :',
	'deletebatch-title' => 'Suprimir en lòt',
	'deletebatch-link-back' => 'Tornar a la pagina especiala',
	'deletebatch-as' => "Aviar l'escript coma :",
	'deletebatch-both-modes' => 'Causissètz, siá una de las paginas indicadas, siá una tièra donada de paginas.',
	'deletebatch-or' => '<b>o</b>',
	'deletebatch-delete' => 'Suprimir',
	'deletebatch-page' => 'Paginas de suprimir :',
	'deletebatch-processing-from-file' => 'supression de las paginas dempuèi un fichièr de lista',
	'deletebatch-processing-from-form' => 'supression de las paginas dempuèi lo formulari',
	'deletebatch-omitting-nonexistant' => 'Omission de la pagina « $1 » inexistenta.',
	'deletebatch-omitting-invalid' => 'Omission de la pagina « $1 » incorrècta.',
	'deletebatch-file-bad-format' => 'Lo fichièr deu èsser en tèxte simple',
	'deletebatch-file-missing' => 'Impossible de legir lo fichièr donat',
	'deletebatch-select-script' => "suprimir l'escript de la pagina",
	'deletebatch-select-yourself' => 'vos',
	'deletebatch-no-page' => 'Indicatz al mens una pagina de suprimir O un fichièr donat que conten una tièra de paginas.',
	'right-deletebatch' => 'Suprimir de paginas en lòt',
);

/** Polish (Polski)
 * @author Airwolf
 * @author Maikking
 * @author Matma Rex
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'deletebatch' => 'Usuń grupę stron',
	'deletebatch-desc' => '[[Special:DeleteBatch|Usuwanie grup stron]]',
	'deletebatch-help' => 'Usuwanie grupy stron. Strony możesz usuwać pojedynczo lub poprzez usunięcie grupy stron, wymienionych w pliku.
Wybierz użytkownika, który będzie widoczny w logu stron usuniętych.
Przesyłany plik powinien zawierać nazwę strony i powód usunięcia w jednej linii tekstu, przedzielone symbolem „|”.',
	'deletebatch-caption' => 'Lista stron:',
	'deletebatch-title' => 'Usuń grupę stron',
	'deletebatch-link-back' => 'Cofnij do strony specjalnej',
	'deletebatch-as' => 'Uruchom skrypt jako',
	'deletebatch-both-modes' => 'Wybierz jedną stronę albo grupę stron.',
	'deletebatch-or' => '<b>lub</b>',
	'deletebatch-delete' => 'Usuń',
	'deletebatch-page' => 'Lista stron do usunięcia:',
	'deletebatch-processing-from-file' => 'usuwanie stron z użyciem listy plików',
	'deletebatch-processing-from-form' => 'usuwanie stron z wykorzystaniem formularza',
	'deletebatch-omitting-nonexistant' => 'Pominięto nieistniejącą stronę $1.',
	'deletebatch-omitting-invalid' => 'Pominięto niewłaściwą stronę $1.',
	'deletebatch-file-bad-format' => 'Plik powinien zawierać wyłącznie tekst',
	'deletebatch-file-missing' => 'Nie można odczytać pliku',
	'deletebatch-select-script' => 'usuwanie stron skryptem',
	'deletebatch-select-yourself' => 'Ty',
	'deletebatch-no-page' => 'Wybierz jedną stronę LUB plik z listą stron do usunięcia.',
	'right-deletebatch' => 'usuwanie grupy stron',
);

/** Portuguese (Português)
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'deletebatch' => 'Apagar páginas em bloco',
	'deletebatch-desc' => 'Permite [[Special:DeleteBatch|eliminar páginas em bloco]]',
	'deletebatch-help' => 'Elimine um bloco de páginas. Você pode realizar uma única eliminação, ou eliminar páginas listadas num ficheiro.
Escolha um utilizador que será mostrado nos registos de eliminação.
O ficheiro carregado deverá conter o nome da página e um motivo opcional, separados por um carácter "|" em cada linha.',
	'deletebatch-caption' => 'Lista de páginas:',
	'deletebatch-title' => 'Apagar bloco',
	'deletebatch-link-back' => 'Voltar à página especial',
	'deletebatch-as' => 'Executar o script como:',
	'deletebatch-both-modes' => 'Por favor, escolha uma página especificada ou uma dada lista de páginas.',
	'deletebatch-or' => '<b>ou</b>',
	'deletebatch-page' => 'Páginas a eliminar:',
	'deletebatch-omitting-nonexistant' => 'A omitir página não existente $1.',
	'deletebatch-omitting-invalid' => 'A omitir página inválida $1.',
	'deletebatch-file-bad-format' => 'O ficheiro deve conter texto pleno',
	'deletebatch-file-missing' => 'Não foi possível ler o ficheiro fornecido',
	'deletebatch-select-script' => 'script de eliminação de páginas',
	'deletebatch-select-yourself' => 'você',
	'deletebatch-no-page' => 'Por favor, especifique pelo menos uma página para eliminar OU escolha um ficheiro contendo uma lista de páginas.',
	'right-deletebatch' => 'Apagar páginas em bloco',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'deletebatch' => 'Apagar páginas em bloco',
	'deletebatch-desc' => 'Permite [[Special:DeleteBatch|eliminar páginas em bloco]]',
	'deletebatch-help' => 'Elimine um bloco de páginas. Você pode realizar uma única eliminação, ou eliminar páginas listadas num arquivo.
Escolha um utilizador que será mostrado nos registros de eliminação.
O arquivo carregado deverá conter o nome da página e um motivo opcional, separados por um caractere "|" em cada linha.',
	'deletebatch-caption' => 'Lista de páginas:',
	'deletebatch-title' => 'Apagar bloco',
	'deletebatch-link-back' => 'Voltar à página especial',
	'deletebatch-as' => 'Executar o script como:',
	'deletebatch-both-modes' => 'Por favor, escolha uma página especificada ou uma dada lista de páginas.',
	'deletebatch-or' => '<b>ou</b>',
	'deletebatch-delete' => 'Remover',
	'deletebatch-page' => 'Páginas a eliminar:',
	'deletebatch-processing-from-file' => 'Removendo páginas da lista de arquivos',
	'deletebatch-processing-from-form' => 'deletando páginas do formulário',
	'deletebatch-omitting-nonexistant' => 'Omitindo página não existente $1.',
	'deletebatch-omitting-invalid' => 'Omitindo página inválida $1.',
	'deletebatch-file-bad-format' => 'O arquivo deve conter texto pleno',
	'deletebatch-file-missing' => 'Não foi possível ler o arquivo fornecido',
	'deletebatch-select-script' => 'script de eliminação de páginas',
	'deletebatch-select-yourself' => 'você',
	'deletebatch-no-page' => 'Por favor, especifique pelo menos uma página para eliminar OU escolha um arquivo contendo uma lista de páginas.',
	'right-deletebatch' => 'Apagar páginas em bloco',
);

/** Romanian (Română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'deletebatch-caption' => 'Lista de pagini:',
	'deletebatch-or' => '<b>sau</b>',
	'deletebatch-delete' => 'Ştergere',
	'deletebatch-page' => 'Pagini de şters:',
	'deletebatch-file-missing' => 'Nu se poate citi fişierul dat',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'deletebatch-or' => '<b>o</b>',
	'deletebatch-select-yourself' => 'tu',
);

/** Russian (Русский)
 * @author Ferrer
 * @author Innv
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'deletebatch' => 'Удаление набора страниц',
	'deletebatch-desc' => '[[Special:DeleteBatch|Удаление набора страниц]]',
	'deletebatch-help' => 'Удаление набора страниц. Вы можете использовать это для одного удаления, или удаления страниц, перечисленных в файле.
Выберите участника, который будет показан в журнале удалений.
Загружаемый файл должен содержать имя страницы и необязательную причину удаления, их должен разделять символ «|».',
	'deletebatch-caption' => 'Список страниц:',
	'deletebatch-title' => 'Удаление набора',
	'deletebatch-link-back' => 'Вернуться к служебной странице',
	'deletebatch-as' => 'Запустить скрипт как:',
	'deletebatch-both-modes' => 'Пожалуйста, выберите одну страницу или список страниц.',
	'deletebatch-or' => '<b>или</b>',
	'deletebatch-delete' => 'Удалить',
	'deletebatch-page' => 'Страницы к удалению:',
	'deletebatch-processing-from-file' => 'удаление страниц из списка в файле',
	'deletebatch-processing-from-form' => 'удаление страниц из веб-формы',
	'deletebatch-omitting-nonexistant' => 'За исключением несуществующей страницы $1.',
	'deletebatch-omitting-invalid' => 'За исключением ошибочной страницы $1.',
	'deletebatch-file-bad-format' => 'Файл должен содержать простой текст',
	'deletebatch-file-missing' => 'Невозможно прочитать данный файл',
	'deletebatch-select-script' => 'скрипт удаления страниц',
	'deletebatch-select-yourself' => 'вы',
	'deletebatch-no-page' => 'Пожалуйста, выберите минимум одну страницу для удаления ИЛИ выберите файл, содержащий список страниц.',
	'right-deletebatch' => 'удаление набора страниц',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'deletebatch' => 'Zmazanie viacerých stránok',
	'deletebatch-desc' => '[[Special:DeleteBatch|Zmazanie viacerých stránok]]',
	'deletebatch-help' => 'Zmazanie viacerých stránok. Môžete buď vykonať jedno zmazanie alebo zmazať stránky uvedené v súbore.
Vyberte, ktorý používateľ sa zobrazí v záznamoch zmazania.
Nahraný súbor by mal na každom riadku obsahovať názov stránky a nepovinne aj dôvod zmazania oddelený znakom „|”.',
	'deletebatch-caption' => 'Zoznam stránok:',
	'deletebatch-title' => 'Zmazať dávku',
	'deletebatch-link-back' => 'Môžete sa vrátiť späť na špeciálnu stránku',
	'deletebatch-as' => 'Spustiť skript ako:',
	'deletebatch-both-modes' => 'Prosím, vyberte buď zadanú stránku alebo zadaý zoznam stránok.',
	'deletebatch-or' => '<b>ALEBO</b>',
	'deletebatch-delete' => 'Zmazať',
	'deletebatch-page' => 'Stránky, ktoré budú zmazané:',
	'deletebatch-processing-from-file' => 'mažú sa stránky zo zoznamu súborov',
	'deletebatch-processing-from-form' => 'mažú sa stránky z formulára',
	'deletebatch-omitting-nonexistant' => 'Vynecháva sa neexistujúca stránka $1.',
	'deletebatch-omitting-invalid' => 'Vynecháva sa neplatná stránka $1.',
	'deletebatch-file-bad-format' => 'Súbor by mal byť textovom formáte',
	'deletebatch-file-missing' => 'Nebolo možné prečítať zadaný súbor',
	'deletebatch-select-script' => 'skript na zmazanie stránok',
	'deletebatch-select-yourself' => 'vy',
	'deletebatch-no-page' => 'Prosím, zadajte aspoň jednu stránku, ktorá sa má zmazať ALEBO súbor obsahujúci zoznam stránok.',
	'right-deletebatch' => 'Dávkové mazanie stránok',
);

/** Swedish (Svenska)
 * @author M.M.S.
 * @author Najami
 */
$messages['sv'] = array(
	'deletebatch' => 'Radera serier av sidor',
	'deletebatch-desc' => '[[Special:DeleteBatch|Radera en serie av sidor]]',
	'deletebatch-help' => 'Radera en serie av sidor. Du kan också utföra en ensam radering, eller radera sidor listade i en fil.
Välj en användare som kommer att visas i raderingsloggen.
En uppladdad fil ska innehålla sidnamn och en valfri anledning separerade med ett "|"-tecken på varje rad.',
	'deletebatch-caption' => 'Sidlista:',
	'deletebatch-title' => 'Radera serie',
	'deletebatch-link-back' => 'Gå tillbaka till specialsidan',
	'deletebatch-as' => 'Kör skriptet som:',
	'deletebatch-both-modes' => 'Var god välj antingen en specifierad sida eller en lista över sidor.',
	'deletebatch-or' => '<b>ELLER</b>',
	'deletebatch-page' => 'Sidor som ska raderas:',
	'deletebatch-omitting-nonexistant' => 'Utelämna ej existerande sida $1.',
	'deletebatch-omitting-invalid' => 'Utelämna ogiltig sida $1.',
	'deletebatch-file-bad-format' => 'Filen ska innehålla ren text',
	'deletebatch-file-missing' => 'Kan inte läsa filen',
	'deletebatch-select-script' => 'radera sidskript',
	'deletebatch-select-yourself' => 'du',
	'deletebatch-no-page' => 'Var god specifiera minst en sida för att radera ELLER välj en fil innehållande en sidlista.',
	'right-deletebatch' => 'Massradera sidor',
);

/** Telugu (తెలుగు)
 * @author C.Chandra Kanth Rao
 * @author Veeven
 */
$messages['te'] = array(
	'deletebatch-caption' => 'పేజీల జాబితా:',
	'deletebatch-link-back' => 'తిరిగి ప్రత్యేక పేజీకి వెళ్ళండి',
	'deletebatch-or' => '<b>లేదా</b>',
	'deletebatch-delete' => 'తొలగించు',
	'deletebatch-page' => 'తొలగించాల్సిన పేజీలు:',
	'deletebatch-select-yourself' => 'మీరు',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'deletebatch-caption' => 'Феҳристи саҳифа',
	'deletebatch-select-yourself' => 'шумо',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'deletebatch' => 'Burahin ang bungkos ng mga pahina',
	'deletebatch-desc' => '[[Special:DeleteBatch|Burahin ang isang bungkos ng mga pahina]]',
	'deletebatch-help' => 'Burahin ang isang bungkos ng mga pahina. Maaari kang magsagawa ng isang pang-isahang pagbubura, o burahin ang mga pahinang nakatala sa loob ng isang talaksan.
Pumili ng isang tagagamit na ipapakita sa mga talaan ng pagbubura.
Dapat na naglalaman ang ikinargang talaksan ng pangalan ng pahina at maaaring hindi ilagay na paliwanag na inihihiwalay ng isang panitik na "|" sa bawat guhit.',
	'deletebatch-caption' => 'Talaan ng pahina:',
	'deletebatch-title' => 'Burahin ang bungkos',
	'deletebatch-link-back' => 'Bumalik sa natatanging pahina',
	'deletebatch-as' => 'Patakbuhin ang panitik bilang:',
	'deletebatch-both-modes' => 'Pakipili ang isang tinukoy na pahina o isang ibinigay na talaan ng mga pahina.',
	'deletebatch-or' => '<b>o</b>',
	'deletebatch-page' => 'Mga pahinang buburahin:',
	'deletebatch-omitting-nonexistant' => 'Hindi isinasali ang hindi umiiral na pahinang $1.',
	'deletebatch-omitting-invalid' => 'Hindi isinasali ang hindi tanggap na pahinang $1.',
	'deletebatch-file-bad-format' => 'Dapat na teksto lamang ang talaksan',
	'deletebatch-file-missing' => 'Hindi mabasa ang talaksang ibinigay',
	'deletebatch-select-script' => 'burahin ang panitik ng pahina',
	'deletebatch-select-yourself' => 'ikaw',
	'deletebatch-no-page' => 'Pakitukoy ang kahit na isang pahinang buburahin O pumili ng isang talaksang naglalaman ng talaan ng pahina.',
	'right-deletebatch' => 'Burahin ang bungkos ng mga pahina',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Mach
 */
$messages['tr'] = array(
	'deletebatch-caption' => 'Sayfa listesi:',
);

/** Ukrainian (Українська)
 * @author AS
 * @author Ahonc
 */
$messages['uk'] = array(
	'deletebatch' => 'Вилучення сторінок групами',
	'deletebatch-desc' => '[[Special:DeleteBatch|Вилучення сторінок групами]]',
	'deletebatch-help' => 'Вилучення групи сторінок. Також ви можете зробити окреме вилучення, або вилучити сторінки, перераховані у файлі.
Виберіть користувача, який згадуватиметься у журналі вилучень.
Завантажений файл повинен містити у кожному рядку назву сторінки та необов\'язкову причину вилучення, відокремлену символом "|".',
	'deletebatch-caption' => 'Список сторінок:',
	'deletebatch-title' => 'Вилучити групу',
	'deletebatch-link-back' => 'Ви можете повернутися до розширення',
	'deletebatch-as' => 'Запустити скрипт як:',
	'deletebatch-both-modes' => 'Виберіть або одну вказану сторінку, або наданий список сторінок.',
	'deletebatch-or' => '<b>або</b>',
	'deletebatch-page' => 'Сторінки до вилучення:',
	'deletebatch-omitting-nonexistant' => 'Пропускання неіснуючої сторінки $1.',
	'deletebatch-file-missing' => 'Не в змозі прочитати наданий файл',
	'deletebatch-select-yourself' => 'ви',
);

/** Veps (Vepsan kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'deletebatch-caption' => 'Lehtpoliden nimikirjutez:',
	'deletebatch-title' => 'Čuta uded lehtpoled',
	'deletebatch-link-back' => 'Tagaze specialižele lehtpolele',
	'deletebatch-as' => 'Radatada skript kut:',
	'deletebatch-both-modes' => "Olgat hüväd, valikat lehtpol' vai lehtpoliden nimikirjutez.",
	'deletebatch-or' => '<b>vai</b>',
	'deletebatch-page' => 'Lehtpoled čutes:',
);

/** Vietnamese (Tiếng Việt)
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'deletebatch' => 'Xóa một nhóm trang',
	'deletebatch-desc' => '[[Special:DeleteBatch|Xóa một nhóm trang]]',
	'deletebatch-help' => 'Xóa một nhóm trang. Bạn có thể thực hiện việc xóa từng trang, hoặc xóa các trang liệt kê trong một tập tin.
Chọn một thành viên sẽ hiện ra trong nhật trình xóa.
Tập tin đã tải nên có chứa tên trang và lý do tùy chọn phân tách bằng ký tự "|" tại mỗi dòng.',
	'deletebatch-caption' => 'Danh sách trang:',
	'deletebatch-title' => 'Xóa nhóm',
	'deletebatch-link-back' => 'Trở lại trang đặc biệt',
	'deletebatch-as' => 'Chạy script với tên:',
	'deletebatch-both-modes' => 'Xin hãy chọn một trang hoặc một danh sách trang cho trước.',
	'deletebatch-or' => '<b>hoặc</b>',
	'deletebatch-page' => 'Các trang sẽ bị xóa:',
	'deletebatch-omitting-nonexistant' => 'Đang bỏ trang $1 không tồn tại.',
	'deletebatch-omitting-invalid' => 'Đang bỏ trang $1 không hợp lệ.',
	'deletebatch-file-bad-format' => 'Tập tin nên ở dạng thuần ký tự',
	'deletebatch-file-missing' => 'Không thể đọc tập tin có sẵn',
	'deletebatch-select-script' => 'xóa script của trang',
	'deletebatch-select-yourself' => 'bạn',
	'deletebatch-no-page' => 'Xin hãy chỉ định ít nhất một trang để xóa HOẶC chọn một tập tin có chứa danh sách các trang.',
	'right-deletebatch' => 'Xóa nhóm trang',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'deletebatch' => 'Moükön padamödoti',
	'deletebatch-desc' => '[[Special:DeleteBatch|Moükön padamödoti]]',
	'deletebatch-caption' => 'Padalised:',
	'deletebatch-title' => 'Moükön padamödoti',
	'deletebatch-or' => '<b>u</b>',
	'deletebatch-page' => 'Pads moükabik:',
	'deletebatch-omitting-nonexistant' => 'Pad no dabinöl $1 pamoädon.',
	'deletebatch-omitting-invalid' => 'Pad no lonöföl $1 pamoädon.',
	'deletebatch-file-missing' => 'No mögos ad reidön ragivi pavilöl',
	'deletebatch-select-yourself' => 'ol',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Gzdavidwong
 */
$messages['zh-hans'] = array(
	'deletebatch-caption' => '页面列表',
	'deletebatch-or' => '<b>或</b>',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Gzdavidwong
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'deletebatch-caption' => '頁面清單',
	'deletebatch-or' => '<b>或</b>',
);

