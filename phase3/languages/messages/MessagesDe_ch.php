<?php
/** Swiss High German (Schweizer Hochdeutsch)
 *
 * @ingroup Language
 * @file
 *
 * @author MichaelFrey
 */

$fallback = 'de';
$separatorTransformTable = array( ',' => "'", '.' => ',' );

$messages = array(
# Edit pages
'longpagewarning' => '<strong>WARNUNG: Diese Seite ist $1 KB gross; einige Browser k�nnten Probleme haben, Seiten zu bearbeiten, die gr�sser als 32 KB sind.
�berlege bitte, ob eine Aufteilung der Seite in kleinere Abschnitte m�glich ist.</strong>',
'longpageerror'   => '<strong>FEHLER: Der Text, den du zu speichern versuchst, ist $1 KB gross. Das ist gr�sser als das erlaubte Maximum von $2 KB � Speicherung nicht m�glich.</strong>',

# Parser/template warnings
'post-expand-template-inclusion-warning'  => 'Warnung: Die Gr�sse eingebundener Vorlagen ist zu gross, einige Vorlagen k�nnen nicht eingebunden werden.',
'post-expand-template-inclusion-category' => 'Seiten, in denen die maximale Gr�sse eingebundener Vorlagen �berschritten ist',
'post-expand-template-argument-warning'   => 'Warnung: Diese Seite enth�lt mindestens ein Argument in einer Vorlage, das expandiert zu gross ist. Diese Argumente werden ignoriert.',

# Diffs
'diff-big' => "'''gross'''",

# Search results
'nonefound' => "'''Hinweis:''' Es werden standardm�ssig nur einige Namensr�ume durchsucht. Setze ''all:'' vor deinen Suchbegriff, um alle Seiten (inkl. Diskussionsseiten, Vorlagen usw.) zu durchsuchen oder gezielt den Namen des zu durchsuchenden Namensraumes.",

# Preferences page
'prefs-watchlist-days' => 'Anzahl der Tage, die die Beobachtungsliste standardm�ssig umfassen soll:',
'prefs-edit-boxsize'   => 'Gr�sse des Bearbeitungsfensters:',
'defaultns'            => 'In diesen Namensr�umen soll standardm�ssig gesucht werden:',

# Upload
'largefileserver'      => 'Die Datei ist gr�sser als die vom Server eingestellte Maximalgr�sse.',
'fileexists-extension' => 'Eine Datei mit �hnlichem Namen existiert bereits:<br />
Name der hochzuladenden Datei: <strong><tt>$1</tt></strong><br />
Name der vorhandenen Datei: <strong><tt>$2</tt></strong><br />
Nur die Dateiendung unterscheidet sich in Gross-/Kleinschreibung. Bitte pr�fe, ob die Dateien inhaltlich identisch sind.',
'file-thumbnail-no'    => 'Der Dateiname beginnt mit <strong><tt>$1</tt></strong>. Dies deutet auf ein Bild verringerter Gr�sse <i>(thumbnail)</i> hin.
Bitte pr�fe, ob du das Bild in voller Aufl�sung vorliegen hast und lade dieses unter dem Originalnamen hoch.',

# Special:ListFiles
'listfiles-summary' => 'Diese Spezialseite listet alle hochgeladenen Dateien auf. Standardm�ssig werden die zuletzt hochgeladenen Dateien zuerst angezeigt. Durch einen Klick auf die Spalten�berschriften kann die Sortierung umgedreht werden oder es kann nach einer anderen Spalte sortiert werden.',
'listfiles_size'    => 'Gr�sse',

# File description page
'filehist-dimensions' => 'Masse',
'filehist-filesize'   => 'Dateigr�sse',

# Special:Log
'alllogstext' => 'Dies ist die kombinierte Anzeige aller in {{SITENAME}} gef�hrten Logb�cher.
Die Ausgabe kann durch die Auswahl des Logbuchtyps, des Benutzers oder des Seitentitels eingeschr�nkt werden (Gross-/Kleinschreibung muss beachtet werden).',

# Protect
'minimum-size' => 'Mindestgr�sse',
'maximum-size' => 'Maximalgr�sse:',

# Block/unblock
'ipbreason-dropdown' => '* Allgemeine Sperrgr�nde
** L�schen von Seiten
** Einstellen unsinniger Seiten
** Fortgesetzte Verst�sse gegen die Richtlinien f�r Weblinks
** Verstoss gegen den Grundsatz �Keine pers�nlichen Angriffe�
* Benutzerspezifische Sperrgr�nde
** Ungeeigneter Benutzername
** Neuanmeldung eines unbeschr�nkt gesperrten Benutzers
* IP-spezifische Sperrgr�nde
** Proxy, wegen Vandalismus einzelner Benutzer l�ngerfristig gesperrt',

# Thumbnails
'djvu_page_error' => 'DjVu-Seite ausserhalb des Seitenbereichs',

# Special:Import
'importuploaderrorsize' => 'Das Hochladen der Importdatei ist fehlgeschlagen. Die Datei ist gr�sser als die maximal erlaubte Dateigr�sse.',

# Media information
'imagemaxsize'   => 'Maximale Bildgr�sse auf Bildbeschreibungsseiten:',
'file-info'      => '(Dateigr�sse: $1, MIME-Typ: $2)',
'file-info-size' => '($1 � $2 Pixel, Dateigr�sse: $3, MIME-Typ: $4)',

# EXIF tags
'exif-resolutionunit'              => 'Masseinheit der Aufl�sung',
'exif-jpeginterchangeformatlength' => 'Gr�sse der JPEG-Daten in Bytes',
'exif-referenceblackwhite'         => 'Schwarz/Weiss-Referenzpunkte',
'exif-maxaperturevalue'            => 'Gr�sste Blende',
'exif-whitebalance'                => 'Weissabgleich',
'exif-gpsdop'                      => 'Masspr�zision',

'exif-lightsource-13' => 'Tagesweiss fluoreszierend (N 4600�5400 K)',
'exif-lightsource-14' => 'Kaltweiss fluoreszierend (W 3900�4500 K)',
'exif-lightsource-15' => 'Weiss fluoreszierend (WW 3200�3700 K)',

# Special:FileDuplicateSearch
'fileduplicatesearch-info' => '$1 � $2 Pixel<br />Dateigr�sse: $3<br />MIME-Typ: $4',

);
