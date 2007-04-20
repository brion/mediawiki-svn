<?php
/**
 * @author Markus Krötzsch
 */

class SMW_LanguageDe {

/* private */ var $smwContentMessages = array(
	'smw_edithelp' => 'Bearbeitungshilfe für Relationen und Attribute',
	'smw_helppage' => 'Relationen und Attribute',
	'smw_viewasrdf' => 'Als RDF ansehen',
	'smw_finallistconjunct' => ' und', //used in "A, B, and C"
	'smw_factbox_head' => 'Fakten zu $1',
	'smw_att_head' => 'Attribute',
	'smw_rel_head' => 'Relationen zu anderen Seiten',
	'smw_spec_head' => 'Spezielle Eigenschaften',
	/*URIs that should not be used in objects in cases where users can provide URIs */
	'smw_uri_blacklist' => " http://www.w3.org/1999/02/22-rdf-syntax-ns#\n http://www.w3.org/2000/01/rdf-schema#\n http://www.w3.org/2002/07/owl#",
	'smw_baduri' => 'URIs aus dem Bereich "$1" sind an dieser Stelle leider nicht verfügbar.',
	/*Messages and strings for inline queries*/
	'smw_iq_disabled' => "<span class='smwwarning'>Anfragen innerhalb einzelner Seiten sind in diesem Wiki leider nicht erlaubt.</span>",
	'smw_iq_moreresults' => '&hellip; weitere Ergebnisse',
	'smw_iq_nojs' => 'Der Inhalt dieses Elementes kann mit einem Browser mit JavaScript-Unterstützung oder als
	<a href="$1">Liste einzelner Suchergebnisse</a> betrachtet werden.', // TODO: translate
	/*Messages and strings for ontology resued (import) */
	'smw_unknown_importns' => '[Für den Namensraum "$1" sind leider keine Importfunktionen verfügbar.]',
	'smw_nonright_importtype' => '[Das Element "$1" kann nur für Seiten im Namensraum "$2" verwendet werden.]',
	'smw_wrong_importtype' => '[Das Element "$1" kann nicht für Seiten im Namensraum "$2" verwendet werden.]',
	'smw_no_importelement' => '[Das Element "$1" steht leider nicht zum Importieren zur Verfügung.]',
	/*Messages and strings for basic datatype processing*/
	'smw_decseparator' => ',',
	'smw_kiloseparator' => '.',
	'smw_unknowntype' => '[Ups! Dem Attribut wurde der unbekannte Datentyp "$1" zugewiesen]',
	'smw_noattribspecial' => '[Ups! Die spezielle Eigenschaft "$1" ist kein Attribut (verwende "::" anstelle von ":=")]',
	'smw_notype' => '[Ups! Dem Attribut wurde kein Datentyp zugewiesen]',
	'smw_manytypes' => '[Ups! Dem Attribut wurden mehrere Datentypen zugewiesen]',
	'smw_emptystring' => '[Ups! Leere Zeichenfolgen werden nicht akzeptiert]',
	'smw_maxstring' => '[Sorry, die Zeichenkette $1 ist für diese Website zu lang]',
	'smw_nopossiblevalues' => '[Oops! possible values for this attribute are not enumerated]',	//TODO translate
	'smw_notinenum' => '[Oops! "$1" is not in the list of possible values ($2) for this attribute]',	//TODO translate
	'smw_noboolean' => '[Ups! "$1" ist keine ganze Boolescher Wert (wahr/falsch)]', // TODO: Check translation
	'smw_true_words' => 'wahr,ja',	// comma-separated synonyms for boolean TRUE besides 'true' and '1' TODO: Check translation
	'smw_false_words' => 'falsch,nein',	// comma-separated synonyms for boolean FALSE besides 'false' and '0' TODO: Check translation
	'smw_nointeger' => '[Ups! "$1" ist keine ganze Zahl]',
	'smw_nofloat' => '[Ups! "$1" ist keine Dezimalzahl]',
	'smw_infinite' => '[Sorry, die Zahl $1 ist zu lang.]',
	'smw_infinite_unit' => '[Sorry, die Umrechnung in Einheit $1 ist nicht möglich: die Zahl ist zu lang.]',
	// Currently unused, floats silently store units.  'smw_unexpectedunit' => 'dieses Attribut unterstützt keine Umrechnung von Einheiten',
	'smw_unsupportedprefix' => 'prefixes ("$1") are not currently supported',	 // TODO: translate
	'smw_unsupportedunit' => 'Umrechnung der Einheit "$1" nicht unterstützt',
	/*Messages for geo coordinates parsing*/
	'smw_err_latitude' => 'Angaben zur Geographischen Breite (N, S) müssen zwischen 0 und 90 liegen. "$1" liegt nicht in diesem Bereich!',
	'smw_err_longitude' => 'Angaben zur Geographischen Länge (O, W) müssen zwischen 0 und 180 liegen. "$1" liegt nicht in diesem Bereich!',
	'smw_err_noDirection' => '[Ups! Irgendwas stimmt nicht mit der Angabe "$1"]',
	'smw_err_parsingLatLong' => '[Ups! Irgendwas stimmt nicht mit der Angabe "$1". Empfohlen wird hier etwas in der Form "1°2′3.4′′ W" oder zumindest ähnlich!]',
	'smw_err_wrongSyntax' => '[Ups! Irgendwas stimmt nicht mit der Angabe "$1". Empfohlen wird hier etwas in der Form "1°2′3.4′′ W, 5°6′7.8′′ N" oder zumindest ähnlich!]',
	'smw_err_sepSyntax' => 'Der Ausdruck "$1" scheint zwar fast richtig angegeben zu sein, die Werte für Geographische Breite und Länge sollten aber durch ein Zeichen wie "," oder ";" getrennt werden.',
	'smw_err_notBothGiven' => 'Es muss ein Wert für die Geographische Breite (N, S) <i>und</i> die Geographische Länge (O, W) angegeben werden.',
	/* additionals ... */
	'smw_label_latitude' => 'Geographische Breite:',
	'smw_label_longitude' => 'Geographische Länge:',
	'smw_abb_north' => 'N',
	'smw_abb_east' => 'O',
	'smw_abb_south' => 'S',
	'smw_abb_west' => 'W',
	/* some links for online maps; can be translated to different language versions of services, but need not*/
	'smw_service_online_maps' => " Landkarten|http://kvaleberg.com/extensions/mapsources/?params=\$1_\$3_\$5_\$7_\$2_\$4_\$6_\$8_region:EN_type:city\n Google&nbsp;maps|http://maps.google.com/maps?ll=\$11\$9,\$12\$10&spn=0.1,0.1&t=k\n Mapquest|http://www.mapquest.com/maps/map.adp?searchtype=address&formtype=latlong&latlongtype=degrees&latdeg=\$11\$1&latmin=\$3&latsec=\$5&longdeg=\$12\$2&longmin=\$4&longsec=\$6&zoom=6",
	/*Messages for datetime parsing */
	'smw_nodatetime' => '[Ups! Das Datum "$1" wurde nicht verstanden. Die Unterstützung von Kalenderdaten ist zur Zeit noch experimentell.]'
);

/* private */ var $smwUserMessages = array(
	'smw_devel_warning' => 'Diese Funktion befindet sich zur Zeit in Entwicklung und ist eventuell noch nicht voll einsatzfähig. Eventuell ist es ratsam, den Inhalt des Wikis vor der Benutzung dieser Funktion zu sichern.',
	// Messages for article pages of types, relations, and attributes
	'smw_type_header' => 'Attribute mit dem Datentyp „$1“',
	'smw_typearticlecount' => 'Es werden $1 Attribute mit diesem Datentyp angezeigt.',
	'smw_attribute_header' => 'Seiten mit dem Attribut „$1“',
	'smw_attributearticlecount' => '<p>Es werden $1 Seiten angezeigt, die dieses Attribut verwenden.</p>',
	'smw_relation_header' => 'Seiten mit der Relation „$1“',
	'smw_relationarticlecount' => '<p>Es werden $1 Seiten angezeigt, die diese Relation verwenden.</p>',
	/*Messages for Export RDF Special*/
	'exportrdf' => 'Seite als RDF exportieren', //name of this special
	'smw_exportrdf_docu' => '<p>Auf dieser Seite können Informationen über einzelne Seiten im RDF-Format abgerufen werden. Bitte geben Sie die Namen der gewünschten Seiten <i>zeilenweise</i> ein.</p>',
	'smw_exportrdf_recursive' => 'Exportiere auch alle relevanten Seiten rekursiv. Diese Einstellung kann zu sehr großen Ergebnissen führen!',
	'smw_exportrdf_backlinks' => 'Exportiere auch alle Seiten, die auf exportierte Seiten verweisen. Erzeugt RDF, das leichter durchsucht werden kann.',
	/*Messages for Search Triple Special*/
	'searchtriple' => 'Einfache semantische Suche', //name of this special
	'smw_searchtriple_header' => '<h1>Suche nach Relationen und Attributen</h1>',
	'smw_searchtriple_docu' => "<p>Benutzen Sie die Eingabemaske um nach Seiten mit bestimmten Eigenschaften zu suchen. Die obere Zeile dient der Suche nach Relationen, die untere der Suche nach Attributen. Sie können beliebige Felder leer lassen, um nach allen möglichen Belegungen zu suchen. Lediglich bei der Eingabe von Attributwerten (mit den entsprechenden Maßeinheiten) verlangt die Angabe des gewünschten Attributes.</p>\n\n<p>Beachten Sie, dass es zwei Suchknöpfe gibt. Bei Druck der Eingabetaste wird vielleicht nicht die gewünschte Suche durchgeführt.</p>",
	'smw_searchtriple_subject' => 'Seitenname (Subjekt):',
	'smw_searchtriple_relation' => 'Name der Relation:',
	'smw_searchtriple_attribute' => 'Name des Attributs:',
	'smw_searchtriple_object' => 'Seintenname (Objekt):',
	'smw_searchtriple_attvalue' => 'Wert des Attributs:',
	'smw_searchtriple_searchrel' => 'Suche nach Relationen',
	'smw_searchtriple_searchatt' => 'Suche nach Attributen',
	'smw_searchtriple_resultrel' => 'Suchergebnisse (Relationen)',
	'smw_searchtriple_resultatt' => 'Suchergebnisse (Attribute)',
	/*Messages for Relation Special*/
	'relations' => 'Relationen',
	'smw_relations_docu' => 'In diesem Wiki gibt es die folgenden Relationen:',
	/*Messages for WantedRelations*/
	'wantedrelations' => 'Gewünschte Relationen',
	'smw_wanted_relations' => 'Folgende Relationen haben bisher keine erläuterende Seite, obwohl sie bereits für die Beschreibung anderer Seiten verwendet werden.',
	/*Messages for Attributes Special*/
	'attributes' => 'Attribute',
	'smw_attributes_docu' => 'In diesem Wiki gibt es die folgenden Attribute:',
	'smw_attr_type_join' => ' hat $1',
	/*Messages for Unused Relations Special*/
	'unusedrelations' => 'Verwaiste Relationen',
	'smw_unusedrelations_docu' => 'Die folgenden Relationenseiten existieren, obwohl sie nicht verwendet werden.',
	/*Messages for Unused Attributes Special*/
	'unusedattributes' => 'Verwaiste Attribute',
	'smw_unusedattributes_docu' => 'Die folgenden Attributseiten existieren, obwohl sie nicht verwendet werden.',
	/* Messages for the refresh button */
	'tooltip-purge' => 'Alle Anfrageergebnisse und Vorlagen auf dieser Seite auf den neuesten Stand bringen.',
	'purge' => 'aktualisieren',
	/*Messages for Import Ontology Special*/
	'ontologyimport' => 'Importiere Ontologie',
	'smw_ontologyimport_docu' => 'Diese Spezialseite erlaubt es, Informationen aus einer externen Ontologie zu importieren. Die Ontologie sollte in einem vereinfachten RDF-Format vorliegen. Weitere Informationen sind in der englischsprachigen <a href="http://wiki.ontoworld.org/index.php/Help:Ontology_import">Dokumentation zum Ontologieimport</a> zu finden.',
	'smw_ontologyimport_action' => 'Importieren',
	'smw_ontologyimport_return' => 'Zurück zum <a href="$1">Ontologieimport</a>.',
	/*Messages for (data)Types Special*/
	'types' => 'Datentypen',
	'smw_types_docu' => 'Die folgenden Datentypen können Attributen zugewiesen werden. Jeder Datentyp hat eine eigene Seite, auf der genauere Informationen eingetragen werden können.',
	'smw_types_units' => 'Standardumrechnung: $1; gestützte Umrechnungen: $2',
	'smw_types_builtin' => 'Eingebaute datatypen',
	/*Messages for ExtendedStatistics Special*/
	'extendedstatistics' => 'Erweiterte Statistiken',
	'smw_extstats_general' => 'Allgemeine Statistiken',
	'smw_extstats_totalp' => 'Anzahl der Seiten:',
	'smw_extstats_totalv' => 'Anzahl der Besuche:',
	'smw_extstats_totalpe' => 'Anzahl der Seiteneditierungen:',
	'smw_extstats_totali' => 'Anzahl der Bilder:',
	'smw_extstats_totalu' => 'Anzahl der Benutzer:',
	'smw_extstats_totalr' => 'Anzahl der Relationen:',
	'smw_extstats_totalri' => 'Anzahl der Instanzen von Relationen:',
	'smw_extstats_totalra' => 'Durchschnittliche Anzahl der Instanzen pro Relation:',
	'smw_extstats_totalpr' => 'Anzahl der Relationsseiten:',
	'smw_extstats_totala' => 'Anzahl der Attribute:',
	'smw_extstats_totalai' => 'Anzahl der Instanzen von Attributen:',
	'smw_extstats_totalaa' => 'Durchschnittliche Anzahl der Instanzen pro Attribut:',
	/*Messages for Flawed Attributes Special --disabled--*/
	'flawedattributes' => 'Fehlerhafte Attribute',
	'smw_fattributes' => 'Die unten aufgeführten Seiten enthalten fehlerhafte Attribute. Die Anzahl der fehlerhaften Attribute ist in den Klammern angegeben.',
	// Name of the URI Resolver Special (no content)
	'uriresolver' => 'URI-Auflöser',
	'smw_uri_doc' => '<p>Der URI-Auflöser setzt die Empfehlungen »<a href="http://www.w3.org/2001/tag/issues.html#httpRange-14">W3C TAG finding on httpRange-14</a>« um. Er sorgt dafür, dass Menschen nicht zu Webseiten werden.</p>',
	/*Messages for ask Special*/
	'ask' => 'Semantische Suche',
	'smw_ask_docu' => '<p>Bitte geben Sie eine Suchanfrage ein. Weitere Informationen sind auf der <a href="$1">Hilfeseite für die semantische Suche</a> zu finden.</p>',
	'smw_ask_doculink' => 'Semantische Suche',
	'smw_ask_sortby' => 'Sortiere nach Spalte',
	'smw_ask_ascorder' => 'Aufsteigend',
	'smw_ask_descorder' => 'Absteigend',
	'smw_ask_submit' => 'Finde Ergebnisse',
	// Messages for search by relation Special
	'searchbyrelation' => 'Suche mittels Relation',
	'smw_tb_docu' => '<p>Diese Spezialseite findet alle Seiten, die eine bestimmte Relation zur angegebenen Zielseite haben.</p>',
	'smw_tb_notype' => '<p>Bitte den Namen einer Relation eingeben oder <a href="$2">alle Links zur Seite $1 ansehen.</a></p>',
	'smw_tb_notarget' => '<p>Bitte den Namen der Zeilseite eingeben oder alle Verwendungen der Relation $1 ansehen.</p>',
	'smw_tb_displayresult' => 'Eine Liste aller Seiten mit der Relation $1 zur Seite $2.',
	'smw_tb_linktype' => 'Relation',
	'smw_tb_linktarget' => 'Zu',
	'smw_tb_submit' => 'Finde Ergebnisse',
	// Messages for the search by attribute special
	'searchbyattribute' => 'Suche mittels Attribut',
	'smw_sbv_docu' => '<p>Diese Spezialseite findet alle Seiten, die einen bestimmten Wert für das angegebene Attribut haben.</p>',
	'smw_sbv_noattribute' => '<p>Bitte den Namen eines Attributs eingeben</p>',
	'smw_sbv_novalue' => '<p>Bitte den gewünschten Wert eingeben oder alle Werte für das Attribut $1 ansehen.</p>',
	'smw_sbv_displayresult' => 'Eine Liste aller Seiten, die ein Attribut $1 mit dem Wert $2 haben.',
	'smw_sbv_attribute' => 'Attribut',
	'smw_sbv_value' => 'Wert',
	'smw_sbv_submit' => 'Finde Ergebnisse',
	// Messages for the browsing system
	'browse' => 'Wiki browsen',
	'smw_browse_article' => 'Bitte geben Sie eine Seite ein.',
	'smw_browse_go' => 'Los',
	'smw_browse_more' => '&hellip;',
	// Generic messages for result navigation in all kinds of search pages
	'smw_result_prev' => 'Zurück',
	'smw_result_next' => 'Vorwärts',
	'smw_result_results' => 'Ergebnisse',
	'smw_result_noresults' => 'Keine Ergebnisse gefunden.'

);

/* private */ var $smwDatatypeLabels = array(
	'smw_string' => 'Zeichenkette',  // name of the string type
	'smw_enum' => 'Enumeration',  // name of the enum type //TODO: translate
	'smw_bool' => 'Wahrheitswert',  // name of the boolean type
	'smw_int' => 'Ganze Zahl',  // name of the int type
	'smw_float' => 'Dezimalzahl',  // name of the floating point type
	'smw_length' => 'Länge',  // name of the length type
	'smw_area' => 'Fläche',  // name of the area type
	'smw_geolength' => 'Geografische Länge',  // OBSOLETE name of the geolength type
	'smw_geoarea' => 'Geografische Fläche',  // OBSOLETE name of the geoarea type
	'smw_geocoordinate' => 'Geografische Koordinaten', // name of the geocoord type
	'smw_mass' => 'Masse',  // name of the mass type
	'smw_time' => 'Zeit',  // name of the time type
	'smw_temperature' => 'Temperatur',  // name of the temperature type
	'smw_datetime' => 'Datum',  // name of the datetime (calendar) type
	'smw_email' => 'Email',  // name of the email (URI) type
	'smw_url' => 'URL',  // name of the URL type (string datatype property)
	'smw_uri' => 'URI',  // name of the URI type (object property)
	'smw_annouri' => 'URI-Annotation'  // name of the annotation URI type (annotation property)
);

/* private */ var $smwSpecialProperties = array(
	//always start upper-case
	SMW_SP_HAS_TYPE  => 'Hat Datentyp',
	SMW_SP_HAS_URI   => 'Gleichwertige URI',
	SMW_SP_IS_SUBRELATION_OF => 'Ist Unterrelation von',
	SMW_SP_IS_SUBATTRIBUTE_OF => 'Ist Unterattribut von',
	SMW_SP_MAIN_DISPLAY_UNIT => 'Erste Ausgabeeinheit',
	// SMW_SP_MAIN_DISPLAY_UNIT => 'Primärmaßeinheit für Schirmanzeige', // Great! We really should keep this wonderful translation here! Still, I am not fully certain about my versions either. -- mak
	SMW_SP_DISPLAY_UNIT => 'Ausgabeeinheit',
	SMW_SP_IMPORTED_FROM => 'Importiert aus',
	SMW_SP_CONVERSION_FACTOR => 'Entspricht',
	SMW_SP_CONVERSION_FACTOR_SI => 'Entspricht SI',
	SMW_SP_SERVICE_LINK => 'Bietet Service',
	SMW_SP_POSSIBLE_VALUE => 'Erlaubt Wert'
);

	/**
	 * Function that returns the namespace identifiers.
	 */
	function getNamespaceArray() {
		return array(
			SMW_NS_RELATION       => "Relation",
			SMW_NS_RELATION_TALK  => "Relation_Diskussion",
			SMW_NS_ATTRIBUTE      => "Attribut",
			SMW_NS_ATTRIBUTE_TALK => "Attribut_Diskussion",
			SMW_NS_TYPE           => "Datentyp",
			SMW_NS_TYPE_TALK      => "Datentyp_Diskussion"
		);
	}

	/**
	 * Function that returns the localized label for a datatype.
	 */
	function getDatatypeLabel($msgid) {
		return $this->smwDatatypeLabels[$msgid];
	}

	/**
	 * Function that returns the labels for the special relations and attributes.
	 */
	function getSpecialPropertiesArray() {
		return $this->smwSpecialProperties;
	}

	/**
	 * Function that returns all content messages (those that are stored
	 * in some article, and can thus not be translated to individual users).
	 */
	function getContentMsgArray() {
		return $this->smwContentMessages;
	}

	/**
	 * Function that returns all user messages (those that are given only to
	 * the current user, and can thus be given in the individual user language).
	 */
	function getUserMsgArray() {
		return $this->smwUserMessages;
	}

}

?>
