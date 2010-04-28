<?php
/**
 * Internationalization file for the Semantic Result Formats extension
 *
 * @addtogroup Extensions
*/

$messages = array();

/** English
 */
$messages['en'] = array(
	'srf-desc' => 'Additional formats for Semantic MediaWiki inline queries', // FIXME: descmsg in extension credits should allow for parameter(s) so that $formats_list can be added

	// user messages
	'srf-name' => 'Semantic Result Formats', // name of extension, can be translated or not; used by Admin Links
	// format "calendar"
	'srfc_previousmonth' => 'Previous month',
	'srfc_nextmonth'     => 'Next month',
	'srfc_today'         => 'Today',
	'srfc_gotomonth'     => 'Go to month',
	'srf_printername_calendar' => 'Monthly calendar',
	// format "vCard"
	'srf_vcard_link'     => 'vCard',
	'srf_printername_vcard' => 'vCard export',
	// format "iCalendar"
	'srf_icalendar_link' => 'iCalendar',
	'srf_printername_icalendar' => 'iCalendar export',
	// format "BibTeX"
	'srf_bibtex_link'    => 'BibTeX',
	'srf_printername_bibtex' => 'BibTeX export',
	// format "outline"
	'srf_outline_novalue' => 'No value',
	'srf_printername_outline' => 'Outline',
	// format "math"
	'srf_printername_sum' => 'Sum of numbers',
	'srf_printername_average' => 'Average of numbers',
	'srf_printername_min' => 'Maximum number',
	'srf_printername_max' => 'Minimum number',
	// format "timeline"
	'srf_printername_timeline' => 'Timeline',
	'srf_printername_eventline' => 'Eventline',
);

/** Message documentation (Message documentation)
 * @author Raymond
 */
$messages['qqq'] = array(
	'srf_vcard_link' => '{{optional}}',
	'srf_icalendar_link' => '{{optional}}',
	'srf_bibtex_link' => '{{optional}}',
);

/** Afrikaans (Afrikaans)
 * @author SPQRobin
 */
$messages['af'] = array(
	'srfc_gotomonth' => 'Gaan na maand',
	'srf_icalendar_link' => 'iKalender',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'srfc_today' => 'ዛሬ',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'srfc_previousmonth' => 'الشهر السابق',
	'srfc_nextmonth' => 'الشهر التالي',
	'srfc_today' => 'اليوم',
	'srfc_gotomonth' => 'اذهب إلى شهر',
	'srf_printername_calendar' => 'نتيجة شهرية',
	'srf_vcard_link' => 'في كارد',
	'srf_printername_vcard' => 'تصدير vCard',
	'srf_icalendar_link' => 'آي كالندر',
	'srf_printername_icalendar' => 'تصدير iCalendar',
	'srf_bibtex_link' => 'بب تكس',
	'srf_printername_bibtex' => 'تصدير BibTeX',
	'srf_printername_sum' => 'مجموع الأرقام',
	'srf_printername_average' => 'متوسط الأرقام',
	'srf_printername_min' => 'الرقم الأقصى',
	'srf_printername_max' => 'الرقم الأدنى',
	'srf_printername_timeline' => 'خط زمني',
	'srf_printername_eventline' => 'خط الأحداث',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'srfc_previousmonth' => 'الشهر السابق',
	'srfc_nextmonth' => 'الشهر التالي',
	'srfc_today' => 'اليوم',
	'srfc_gotomonth' => 'اذهب إلى شهر',
	'srf_vcard_link' => 'فى كارد',
	'srf_icalendar_link' => 'آى كالندر',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'srf-desc' => 'Дадатковыя фарматы для ўбудаваных запытаў Semantic MediaWiki',
	'srf-name' => 'Фарматы сэмантычных вынікаў',
	'srfc_previousmonth' => 'Папярэдні месяц',
	'srfc_nextmonth' => 'Наступны месяц',
	'srfc_today' => 'Сёньня',
	'srfc_gotomonth' => 'Перайсьці да месяца',
	'srf_printername_calendar' => 'Каляндар на месяц',
	'srf_printername_vcard' => 'экспарт у фармаце vCard',
	'srf_printername_icalendar' => 'экспарт у фармаце iCalendar',
	'srf_printername_bibtex' => 'экспарт у фармаце BibTeX',
	'srf_outline_novalue' => 'Няма значэньня',
	'srf_printername_outline' => 'Контуры',
	'srf_printername_sum' => 'Сума лікаў',
	'srf_printername_average' => 'Сярэдняе значэньне лікаў',
	'srf_printername_min' => 'Максымальны лік',
	'srf_printername_max' => 'Мінімальны лік',
	'srf_printername_timeline' => 'Храналёгія',
	'srf_printername_eventline' => 'Храналёгія падзеяў',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'srfc_previousmonth' => 'Предходен месец',
	'srfc_nextmonth' => 'Следващ месец',
	'srfc_today' => 'Днес',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'srfc_previousmonth' => 'Miz a-raok',
	'srfc_nextmonth' => 'Miz a zeu',
	'srfc_today' => 'Hiziv',
	'srfc_gotomonth' => "Mont d'ar miz",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'srf-desc' => 'Dodatni formati za linijske upite na Semantic MediaWiki',
	'srf-name' => 'Formati semantičkih rezultata',
	'srfc_previousmonth' => 'Prethodni mjesec',
	'srfc_nextmonth' => 'Slijedeći mjesec',
	'srfc_today' => 'Danas',
	'srfc_gotomonth' => 'Idi na mjesec',
	'srf_printername_calendar' => 'Mjesečni kalendar',
	'srf_printername_vcard' => 'Izvoz u vCard',
	'srf_printername_icalendar' => 'Izvoz u iCalendar',
	'srf_printername_bibtex' => 'Izvoz u BibTeX',
	'srf_outline_novalue' => 'Nema vrijednosti',
	'srf_printername_outline' => 'Kontura',
	'srf_printername_sum' => 'Zbir brojeva',
	'srf_printername_average' => 'Prosjek brojeva',
	'srf_printername_min' => 'Najveći broj',
	'srf_printername_max' => 'Najmanji broj',
	'srf_printername_timeline' => 'Vremenska linija',
	'srf_printername_eventline' => 'Linija događaja',
);

/** German (Deutsch)
 * @author Krabina
 * @author Purodha
 * @author Umherirrender
 */
$messages['de'] = array(
	'srf-desc' => 'Ergänzende Formate für Inline-Abfragen in „Semantic MediaWiki“',
	'srfc_previousmonth' => 'Voriger Monat',
	'srfc_nextmonth' => 'Nächster Monat',
	'srfc_today' => 'Heute',
	'srfc_gotomonth' => 'Gehe zu Monat',
	'srf_printername_calendar' => 'Monatlicher Kalendar',
	'srf_printername_vcard' => 'vCard Export',
	'srf_printername_icalendar' => 'iCalendar Export',
	'srf_printername_bibtex' => 'BibTeX Export',
	'srf_outline_novalue' => 'Kein Wert',
	'srf_printername_sum' => 'Summe der Zahlen',
	'srf_printername_average' => 'Durchschnittliche Zahl',
	'srf_printername_min' => 'Maximale Zahl',
	'srf_printername_max' => 'Minimale Zahl',
	'srf_printername_timeline' => 'Zeitlinie',
	'srf_printername_eventline' => 'Eventlinie',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'srf-desc' => 'Pśidatne formaty za rědowe wótpšašanja Semantic MediaWiki',
	'srf-name' => 'Formaty semantiskich wuslědkow',
	'srfc_previousmonth' => 'Slědny mjasec',
	'srfc_nextmonth' => 'Pśiducy mjasec',
	'srfc_today' => 'Źinsa',
	'srfc_gotomonth' => 'Źi k mjasecoju',
	'srf_printername_calendar' => 'Mjasecny kalendaŕ',
	'srf_printername_vcard' => 'vCard eksportěrowaś',
	'srf_printername_icalendar' => 'iCalendar eksportěrowaś',
	'srf_printername_bibtex' => 'BibTeX eksportěrowaś',
	'srf_outline_novalue' => 'Žedna gódnota',
	'srf_printername_outline' => 'Kontura',
	'srf_printername_sum' => 'Suma licbow',
	'srf_printername_average' => 'Pśerězk licbow',
	'srf_printername_min' => 'Maksimalna licba',
	'srf_printername_max' => 'Minimalna licba',
	'srf_printername_timeline' => 'Casowy wótběg',
	'srf_printername_eventline' => 'Wótběg tšojenjow',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Omnipaedista
 */
$messages['el'] = array(
	'srfc_previousmonth' => 'Προηγούμενος μήνας',
	'srfc_nextmonth' => 'Επόμενος μήνας',
	'srfc_today' => 'Σήμερα',
	'srfc_gotomonth' => 'Μετάβαση στον μήνα',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'srfc_previousmonth' => 'Antaŭa monato',
	'srfc_nextmonth' => 'Posta monato',
	'srfc_today' => 'Hodiaŭ',
	'srfc_gotomonth' => 'Iru al monato',
	'srf_icalendar_link' => 'iKalendaro',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Imre
 * @author Sanbec
 */
$messages['es'] = array(
	'srfc_previousmonth' => 'Mes anterior',
	'srfc_nextmonth' => 'Próximo mes',
	'srfc_today' => 'Hoy',
	'srfc_gotomonth' => 'Ir al mes',
	'srf_printername_average' => 'Promedio de números',
	'srf_printername_min' => 'Número máximo',
	'srf_printername_max' => 'Número mínimo',
	'srf_printername_timeline' => 'Línea de tiempo',
	'srf_printername_eventline' => 'Línea de eventos',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'srfc_previousmonth' => 'Aurreko hilabetea',
	'srfc_nextmonth' => 'Hurrengo hilabetea',
	'srfc_today' => 'Gaur',
	'srfc_gotomonth' => 'Hilabetera joan',
);

/** Persian (فارسی)
 * @author Tofighi
 */
$messages['fa'] = array(
	'srfc_previousmonth' => 'ماه گذشته',
	'srfc_nextmonth' => 'ماه آینده',
	'srfc_today' => 'امروز',
	'srfc_gotomonth' => 'برو به ماه',
);

/** Finnish (Suomi)
 * @author Str4nd
 */
$messages['fi'] = array(
	'srfc_today' => 'Tänään',
	'srfc_gotomonth' => 'Siirry kuukauteen',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author IAlex
 * @author Urhixidur
 */
$messages['fr'] = array(
	'srf-desc' => 'Formats additionnels pour les requêtes de Semantic MediaWiki',
	'srf-name' => 'Formattage des résultats sémantiques',
	'srfc_previousmonth' => 'Mois précédent',
	'srfc_nextmonth' => 'Mois suivant',
	'srfc_today' => 'Aujourd’hui',
	'srfc_gotomonth' => 'Aller vers le mois',
	'srf_printername_calendar' => 'Calendrier mensuel',
	'srf_vcard_link' => 'vCarte',
	'srf_printername_vcard' => 'export en vCard',
	'srf_icalendar_link' => 'iCalendrier',
	'srf_printername_icalendar' => 'export en iCalendar',
	'srf_printername_bibtex' => 'export en BibTeX',
	'srf_outline_novalue' => 'Aucune valeur',
	'srf_printername_outline' => 'esquisse',
	'srf_printername_sum' => 'Somme de nombres',
	'srf_printername_average' => 'Moyenne des nombres',
	'srf_printername_min' => 'Nombre maximal',
	'srf_printername_max' => 'Nombre minimal',
	'srf_printername_timeline' => 'Chronologie',
	'srf_printername_eventline' => 'Chronologie des événements',
);

/** Galician (Galego)
 * @author Alma
 * @author Toliño
 */
$messages['gl'] = array(
	'srf-desc' => 'Outros formatos para Semantic MediaWiki dentro das pescudas',
	'srf-name' => 'Formatos semánticos resultantes',
	'srfc_previousmonth' => 'Mes anterior',
	'srfc_nextmonth' => 'Mes seguinte',
	'srfc_today' => 'Hoxe',
	'srfc_gotomonth' => 'Ir ao mes',
	'srf_printername_calendar' => 'Calendario mensual',
	'srf_vcard_link' => 'vTarxeta',
	'srf_printername_vcard' => 'Exportación en vCard',
	'srf_icalendar_link' => 'iCalendario',
	'srf_printername_icalendar' => 'Exportación en iCalendar',
	'srf_printername_bibtex' => 'Exportación en BibTeX',
	'srf_outline_novalue' => 'Sen valor',
	'srf_printername_outline' => 'Esquema',
	'srf_printername_sum' => 'Suma dos números',
	'srf_printername_average' => 'Media dos números',
	'srf_printername_min' => 'Número máximo',
	'srf_printername_max' => 'Número mínimo',
	'srf_printername_timeline' => 'Liña do tempo',
	'srf_printername_eventline' => 'Liña do evento',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'srfc_today' => 'Σήμερον',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'srf-desc' => 'Zuesätzligi Format fir Semantic MediaWiki inline-Abfroge',
	'srf-name' => 'Semantisch Ergebnis-Format',
	'srfc_previousmonth' => 'Vorige Monet',
	'srfc_nextmonth' => 'Negschte Monet',
	'srfc_today' => 'Hit',
	'srfc_gotomonth' => 'Gang zum Monet',
	'srf_printername_calendar' => 'Monetlige Kaländer',
	'srf_printername_vcard' => 'vCard-Export',
	'srf_printername_icalendar' => 'iCalendar-Export',
	'srf_printername_bibtex' => 'BibTeX-Export',
	'srf_outline_novalue' => 'Kei Wärt',
	'srf_printername_outline' => 'Entwurf',
	'srf_printername_sum' => 'Zahl vu Nummere',
	'srf_printername_average' => 'Durschnitt vu Nummere',
	'srf_printername_min' => 'Hegschti Nummere',
	'srf_printername_max' => 'Niderschti Nummere',
	'srf_printername_timeline' => 'Zytlyschte',
	'srf_printername_eventline' => 'Ereignislyschte',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'srfc_previousmonth' => 'Yn mee roish shen',
	'srfc_nextmonth' => 'Yn chied mee elley',
	'srfc_today' => 'Jiu',
);

/** Hebrew (עברית)
 * @author StuB
 */
$messages['he'] = array(
	'srfc_previousmonth' => 'החודש הקודם',
	'srfc_nextmonth' => 'החודש הבא',
	'srfc_today' => 'היום',
	'srfc_gotomonth' => 'מעבר לחודש',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'srfc_previousmonth' => 'पिछला महिना',
	'srfc_nextmonth' => 'अगला महिना',
	'srfc_today' => 'आज़',
	'srfc_gotomonth' => 'महिनेपर चलें',
	'srf_icalendar_link' => 'आइकैलेंडर',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'srf-desc' => 'Přidatne formaty za rjadowe wotprašowanja Semantic MediaWiki',
	'srf-name' => 'Formaty semantiskich wuslědkow',
	'srfc_previousmonth' => 'Předchadny měsac',
	'srfc_nextmonth' => 'Přichodny měsac',
	'srfc_today' => 'Dźensa',
	'srfc_gotomonth' => 'Dźi k měsacej',
	'srf_printername_calendar' => 'Měsačna protyka',
	'srf_printername_vcard' => 'vCard eksportować',
	'srf_printername_icalendar' => 'iCalendar eksportować',
	'srf_printername_bibtex' => 'BibTeX eksportować',
	'srf_outline_novalue' => 'Žana hódnota',
	'srf_printername_outline' => 'Kontura',
	'srf_printername_sum' => 'Suma ličbow',
	'srf_printername_average' => 'Přerězk ličbow',
	'srf_printername_min' => 'Maksimalna ličba',
	'srf_printername_max' => 'Minimalna ličba',
	'srf_printername_timeline' => 'Časowa wotběh',
	'srf_printername_eventline' => 'Wotběh podawkow',
);

/** Haitian (Kreyòl ayisyen)
 * @author Jvm
 * @author Masterches
 */
$messages['ht'] = array(
	'srf_icalendar_link' => 'iKalandrye',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'srfc_previousmonth' => 'Előző hónap',
	'srfc_nextmonth' => 'Következő hónap',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'srf-desc' => 'Formatos additional pro incorporar consultas a Semantic MediaWiki',
	'srf-name' => 'Formatos de resultatos semantic',
	'srfc_previousmonth' => 'Mense precedente',
	'srfc_nextmonth' => 'Mense sequente',
	'srfc_today' => 'Hodie',
	'srfc_gotomonth' => 'Ir al mense',
	'srf_printername_calendar' => 'Calendario mensual',
	'srf_printername_vcard' => 'Exportation in vCard',
	'srf_printername_icalendar' => 'Exportation in iCalendar',
	'srf_printername_bibtex' => 'Exportation in BibTeX',
	'srf_outline_novalue' => 'Nulle valor',
	'srf_printername_outline' => 'Schizzo',
	'srf_printername_sum' => 'Total del numeros',
	'srf_printername_average' => 'Media del numeros',
	'srf_printername_min' => 'Numero maxime',
	'srf_printername_max' => 'Numeros minime',
	'srf_printername_timeline' => 'Chronologia',
	'srf_printername_eventline' => 'Chronologia de eventos',
);

/** Italian (Italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'srfc_previousmonth' => 'Mese precedente',
	'srfc_nextmonth' => 'Mese successivo',
	'srfc_today' => 'Oggi',
	'srfc_gotomonth' => 'Vai al mese',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author JtFuruhata
 * @author 青子守歌
 */
$messages['ja'] = array(
	'srf-desc' => 'Semantic MediaWiki のインラインクエリーのための追加的なフォーマット',
	'srf-name' => 'セマンティック・リザルト・フォーマット',
	'srfc_previousmonth' => '前の月',
	'srfc_nextmonth' => '次の月',
	'srfc_today' => '今日',
	'srfc_gotomonth' => 'この月を表示',
	'srf_printername_calendar' => '月毎のカレンダー',
	'srf_printername_vcard' => 'vCard形式で書き出し',
	'srf_printername_icalendar' => 'iCalender形式で書き出し',
	'srf_printername_bibtex' => 'BibTeX形式で書き出し',
	'srf_outline_novalue' => '値なし',
	'srf_printername_outline' => 'アウトライン',
	'srf_printername_sum' => '数の合計',
	'srf_printername_average' => '数の平均',
	'srf_printername_min' => '最大数',
	'srf_printername_max' => '最小数',
	'srf_printername_timeline' => '時系列',
	'srf_printername_eventline' => '事象系列',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'srfc_previousmonth' => 'Sasi sadurungé',
	'srfc_nextmonth' => 'Sasi sabanjuré',
	'srfc_today' => 'Dina iki',
	'srfc_gotomonth' => 'Tumuju menyang sasi',
	'srf_icalendar_link' => 'iKalèndher',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'srfc_previousmonth' => 'ខែមុន',
	'srfc_nextmonth' => 'ខែបន្ទាប់',
	'srfc_today' => 'ថ្ងៃនេះ',
	'srfc_gotomonth' => 'ទៅកាន់ខែ',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'srf-desc' => 'Zohsäzlejje Fommaate för dem „Semantesch MediaWiki“ sing Froore em Täx vun Sigge.',
	'srf-name' => 'Fomaate för wat bei Semantesch Froore eruß kohm',
	'srfc_previousmonth' => 'Jangk nohm Moohnd dovör',
	'srfc_nextmonth' => 'Jangk nohm näkßte Moohnd',
	'srfc_today' => 'Hück',
	'srfc_gotomonth' => 'Jangk noh däm Moohnd',
	'srf_printername_calendar' => 'Dä Kaländer fum Mohnd',
	'srf_vcard_link' => '<i lang="en">vCard</i>',
	'srf_printername_vcard' => 'Expoot em <i lang="en">vCard</i>-Fommaat',
	'srf_icalendar_link' => '<i lang="en">iCalendar</i>',
	'srf_printername_icalendar' => 'Expoot em Fommaat vun <i lang="en">iCalendar</i>',
	'srf_printername_bibtex' => 'Expoot em <i lang="en">BibTeX</i>-Fommaat',
	'srf_outline_novalue' => 'Keine Wäät',
	'srf_printername_outline' => 'Ömreß',
	'srf_printername_sum' => 'De Zahle zosammejetrocke',
	'srf_printername_average' => 'Der Schnett vun dä Zahle',
	'srf_printername_min' => 'De kleinßte Nommer',
	'srf_printername_max' => 'De jüüßte Nommer',
	'srf_printername_timeline' => 'De Reih noh de Zigk',
	'srf_printername_eventline' => 'De Reih noh dämm, wat vörjekumme es',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'srfc_previousmonth' => 'Mount virdrun',
	'srfc_nextmonth' => 'Nächste Mount',
	'srfc_today' => 'Haut',
	'srfc_gotomonth' => 'Géi op de Mount',
	'srf_printername_calendar' => 'Monatleche Kalenner',
	'srf_printername_vcard' => 'Export als vCard',
	'srf_icalendar_link' => 'iKalenner',
	'srf_printername_icalendar' => 'Export als iCalendar',
	'srf_printername_bibtex' => 'Export als BibTeX',
	'srf_printername_sum' => 'Total vun den Zuelen',
	'srf_printername_average' => 'Duerchschnëtt vun den Zuelen',
	'srf_printername_min' => 'Maximal Zuel',
	'srf_printername_max' => 'Minimal Zuel',
	'srf_printername_timeline' => 'Chronologie',
	'srf_printername_eventline' => 'Chronologie vun den Evenementer',
);

/** Lithuanian (Lietuvių)
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'srfc_previousmonth' => 'Praeitas mėnuo',
	'srfc_nextmonth' => 'Ateinantis mėnuo',
	'srfc_today' => 'Šiandien',
	'srfc_gotomonth' => 'Eiti į mėnesį',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 */
$messages['ml'] = array(
	'srfc_previousmonth' => 'കഴിഞ്ഞ മാസം',
	'srfc_nextmonth' => 'അടുത്ത മാസം',
	'srfc_today' => 'ഇന്ന്',
	'srfc_gotomonth' => 'മാസത്തിലേക്ക് പോവുക',
	'srf_icalendar_link' => 'iകലണ്ടര്‍',
);

/** Marathi (मराठी)
 * @author Mahitgar
 */
$messages['mr'] = array(
	'srfc_previousmonth' => 'मागचा महीना',
	'srfc_nextmonth' => 'पुढचा महीना',
	'srfc_today' => 'आज',
	'srfc_gotomonth' => 'महीन्याकडे चला',
	'srf_icalendar_link' => 'इ-कैलेंडर',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'srfc_previousmonth' => 'Йутазь ковсто',
	'srfc_nextmonth' => 'Сы ковсто',
	'srfc_today' => 'Течи',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'srfc_previousmonth' => 'Achto mētztli',
	'srfc_nextmonth' => 'Niman mētztli',
	'srfc_today' => 'Āxcān',
	'srfc_gotomonth' => 'Yāuh mētzhuīc',
);

/** Dutch (Nederlands)
 * @author GerardM
 * @author Siebrand
 */
$messages['nl'] = array(
	'srf-desc' => 'Aanvullende formaten voor inline zoekopdrachten via Semantic MediaWiki',
	'srf-name' => 'Semantische resultaatformaten',
	'srfc_previousmonth' => 'Vorige maand',
	'srfc_nextmonth' => 'Volgende maand',
	'srfc_today' => 'Vandaag',
	'srfc_gotomonth' => 'Ga naar maand',
	'srf_printername_calendar' => 'Maandkalender',
	'srf_printername_vcard' => 'Naar vCard exporteren',
	'srf_printername_icalendar' => 'Naar iCalendar exporteren',
	'srf_printername_bibtex' => 'Naar BibTeX exporteren',
	'srf_outline_novalue' => 'Geen waarde',
	'srf_printername_outline' => 'Outline',
	'srf_printername_sum' => 'Som van getallen',
	'srf_printername_average' => 'Gemiddelde van getallen',
	'srf_printername_min' => 'Hoogste getal',
	'srf_printername_max' => 'Laagste getal',
	'srf_printername_timeline' => 'Tijdlijn',
	'srf_printername_eventline' => 'Gebeurtenissenlijn',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Eirik
 * @author Gunnernett
 */
$messages['nn'] = array(
	'srf-desc' => 'Fleire format for Semantic MediaWiki «inline»-spørjingar',
	'srf-name' => 'Semantisk resultatformat',
	'srfc_previousmonth' => 'Førre månad',
	'srfc_nextmonth' => 'Neste månad',
	'srfc_today' => 'I dag',
	'srfc_gotomonth' => 'Gå til månad',
	'srf_printername_calendar' => 'Månadleg kalender',
	'srf_printername_vcard' => 'vCard eksport',
	'srf_printername_icalendar' => 'iCalendar eksport',
	'srf_printername_bibtex' => 'BibTeX eksport',
	'srf_outline_novalue' => 'Ingen verdi',
	'srf_printername_sum' => 'Sum av tal',
	'srf_printername_average' => 'Gjennomsnitt av tal',
	'srf_printername_min' => 'Største tal',
	'srf_printername_max' => 'Minste tal',
	'srf_printername_timeline' => 'Tidsline',
	'srf_printername_eventline' => 'Tidsline for hendingar',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'srf-desc' => 'Ytterligere format for Semantic MediaWiki «inline»-spørringer',
	'srf-name' => 'Semantic resultatformat',
	'srfc_previousmonth' => 'Forrige måned',
	'srfc_nextmonth' => 'Neste måned',
	'srfc_today' => 'I dag',
	'srfc_gotomonth' => 'Gå til måned',
	'srf_printername_calendar' => 'Månedlig kalender',
	'srf_printername_vcard' => 'vCard-eksport',
	'srf_icalendar_link' => 'iKalender',
	'srf_printername_icalendar' => 'iCalendar-eksport',
	'srf_printername_bibtex' => 'BibTeX-eksport',
	'srf_outline_novalue' => 'Ingen verdi',
	'srf_printername_sum' => 'Sum av tall',
	'srf_printername_average' => 'Gjennomsnitt av tall',
	'srf_printername_min' => 'Største tall',
	'srf_printername_max' => 'Minste tall',
	'srf_printername_timeline' => 'Tidslinje',
	'srf_printername_eventline' => 'Hendelseslinje',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'srf-desc' => 'Formats adicionals per las requèstas de Semantic MediaWiki',
	'srf-name' => 'Formatatge dels resultats semantics',
	'srfc_previousmonth' => 'Mes precedent',
	'srfc_nextmonth' => 'Mes seguent',
	'srfc_today' => 'Uèi',
	'srfc_gotomonth' => 'Anar cap al mes',
	'srf_printername_calendar' => 'Calendièr mesadièr',
	'srf_vcard_link' => 'vCarta',
	'srf_printername_vcard' => 'expòrt en vCard',
	'srf_icalendar_link' => 'iCalendièr',
	'srf_printername_icalendar' => 'expòrt en iCalendar',
	'srf_printername_bibtex' => 'expòrt en BibTeX',
	'srf_outline_novalue' => 'Pas cap de valor',
	'srf_printername_outline' => 'Esbòs',
	'srf_printername_sum' => 'Soma de nombres',
	'srf_printername_average' => 'Mejana dels nombres',
	'srf_printername_min' => 'Nombre maximal',
	'srf_printername_max' => 'Nombre minimal',
	'srf_printername_timeline' => 'Cronologia',
	'srf_printername_eventline' => 'Cronologia dels eveniments',
);

/** Polish (Polski)
 * @author Maire
 */
$messages['pl'] = array(
	'srfc_previousmonth' => 'Poprzedni miesiąc',
	'srfc_nextmonth' => 'Następny miesiąc',
	'srfc_today' => 'Dzisiaj',
	'srfc_gotomonth' => 'Idź do miesiąca',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'srfc_previousmonth' => 'پخوانۍ مياشت',
	'srfc_nextmonth' => 'راتلونکې مياشت',
	'srfc_today' => 'نن',
	'srfc_gotomonth' => 'مياشت ته ورځه',
);

/** Portuguese (Português)
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'srfc_previousmonth' => 'Mês anterior',
	'srfc_nextmonth' => 'Mês seguinte',
	'srfc_today' => 'Hoje',
	'srfc_gotomonth' => 'Ir para mês',
	'srf_printername_calendar' => 'Calendário mensal',
	'srf_printername_vcard' => 'exportação vCard',
	'srf_icalendar_link' => 'iCalendário',
	'srf_printername_icalendar' => 'exportação iCalendar',
	'srf_printername_bibtex' => 'exportação BibTeX',
	'srf_printername_sum' => 'Soma dos números',
	'srf_printername_average' => 'Média dos números',
	'srf_printername_min' => 'Número máximo',
	'srf_printername_max' => 'Número mínimo',
	'srf_printername_timeline' => 'Cronograma',
	'srf_printername_eventline' => 'Cronograma de eventos',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 * @author GKnedo
 */
$messages['pt-br'] = array(
	'srfc_previousmonth' => 'Mês anterior',
	'srfc_nextmonth' => 'Mês seguinte',
	'srfc_today' => 'Hoje',
	'srfc_gotomonth' => 'Ir para mês',
	'srf_printername_calendar' => 'Calendário mensal',
	'srf_printername_vcard' => 'Exportar vCard',
	'srf_printername_icalendar' => 'Exportar iCalendar',
	'srf_printername_bibtex' => 'Exportar BibTeX',
	'srf_printername_sum' => 'Soma dos Números',
	'srf_printername_average' => 'Média dos números',
	'srf_printername_min' => 'Número máximo',
	'srf_printername_max' => 'Número mínimo',
	'srf_printername_timeline' => 'Linha do Tempo',
	'srf_printername_eventline' => 'Linha de Eventos',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'srfc_previousmonth' => 'Luna anterioară',
	'srfc_nextmonth' => 'Luna următoare',
	'srfc_today' => 'Astăzi',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'srfc_previousmonth' => 'Mese precedende',
	'srfc_nextmonth' => 'Mese successive',
	'srfc_today' => 'Osce',
	'srfc_gotomonth' => "Va a 'u mese",
);

/** Russian (Русский)
 * @author Innv
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'srfc_previousmonth' => 'Предыдущий месяц',
	'srfc_nextmonth' => 'Следующий месяц',
	'srfc_today' => 'Сегодня',
	'srfc_gotomonth' => 'Перейти к месяцу',
	'srf_icalendar_link' => 'iКалендарь',
	'srf_printername_min' => 'Максимальное число',
	'srf_printername_max' => 'Минимальное число',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'srf-desc' => 'Ďalšie formáty inline požiadaviek Semantic MediaWiki',
	'srf-name' => 'Formáty sémantických výsledkov',
	'srfc_previousmonth' => 'Predošlý mesiac',
	'srfc_nextmonth' => 'Ďalší mesiac',
	'srfc_today' => 'Dnes',
	'srfc_gotomonth' => 'Prejsť na mesiac',
	'srf_printername_calendar' => 'Mesačný kalendár',
	'srf_printername_vcard' => 'export vCard',
	'srf_printername_icalendar' => 'export iCalendar',
	'srf_printername_bibtex' => 'export BibTeX',
	'srf_outline_novalue' => 'Žiadna hodnota',
	'srf_printername_outline' => 'Náčrt',
	'srf_printername_sum' => 'Suma čísiel',
	'srf_printername_average' => 'Priemer čísiel',
	'srf_printername_min' => 'Maximálne číslo',
	'srf_printername_max' => 'Minimálne číslo',
	'srf_printername_timeline' => 'Časová os',
	'srf_printername_eventline' => 'Os udalostí',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'srfc_previousmonth' => 'Претходни месец',
	'srfc_nextmonth' => 'Следећи месец',
	'srfc_today' => 'Данас',
	'srfc_gotomonth' => 'Пређи на месец',
	'srf_printername_calendar' => 'Месечни календар',
);

/** Swedish (Svenska)
 * @author M.M.S.
 */
$messages['sv'] = array(
	'srfc_previousmonth' => 'Föregående månad',
	'srfc_nextmonth' => 'Nästa månad',
	'srfc_today' => 'Idag',
	'srfc_gotomonth' => 'Gå till månad',
	'srf_icalendar_link' => 'iKalender',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'srfc_previousmonth' => 'క్రితం నెల',
	'srfc_nextmonth' => 'తర్వాతి నెల',
	'srfc_today' => 'ఈరోజు',
	'srfc_gotomonth' => 'నెలకి వెళ్ళండి',
	'srf_printername_average' => 'సంఖ్యల సగటు',
	'srf_printername_min' => 'గరిష్ఠ సంఖ్య',
	'srf_printername_max' => 'కనిష్ఠ సంఖ్య',
	'srf_printername_timeline' => 'కాలరేఖ',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'srfc_previousmonth' => 'Моҳи қаблӣ',
	'srfc_nextmonth' => 'Моҳи баъдӣ',
	'srfc_today' => 'Имрӯз',
	'srfc_gotomonth' => 'Рафтан ба моҳ',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'srfc_previousmonth' => 'Nakaraang buwan',
	'srfc_nextmonth' => 'Susunod na buwan',
	'srfc_today' => 'Ngayong araw na ito',
	'srfc_gotomonth' => 'Pumunta sa buwan',
	'srf_printername_vcard' => 'Luwas ng vCard',
	'srf_printername_icalendar' => 'Luwas ng iCalendar',
	'srf_printername_bibtex' => 'Luwas ng BibTeX',
	'srf_printername_timeline' => 'Guhit ng panahon',
	'srf_printername_eventline' => 'Guhit ng kaganapan',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Karduelis
 */
$messages['tr'] = array(
	'srfc_previousmonth' => 'Önceki ay',
	'srfc_nextmonth' => 'Sonraki ay',
	'srfc_today' => 'Bugün',
	'srfc_gotomonth' => 'Aya git',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'srfc_previousmonth' => 'Mese preçedente',
	'srfc_nextmonth' => 'Mese sucessivo',
	'srfc_today' => 'Ancuó',
	'srfc_gotomonth' => 'Và al mese',
);

/** Veps (Vepsan kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'srfc_previousmonth' => 'Edeline ku',
	'srfc_nextmonth' => "Jäl'ghine ku",
	'srfc_today' => 'Tämbei',
	'srfc_gotomonth' => 'Mända kunnoks',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'srf-desc' => 'Các định dạng bổ sung cho các câu truy vấn trong dòng lệnh của MediaWiki Ngữ Nghĩa',
	'srf-name' => 'Định dạng Kết quả Ngữ nghĩa',
	'srfc_previousmonth' => 'Tháng trước',
	'srfc_nextmonth' => 'Tháng sau',
	'srfc_today' => 'Hôm nay',
	'srfc_gotomonth' => 'Đến tháng',
	'srf_printername_calendar' => 'Lịch tháng',
	'srf_printername_vcard' => 'Xuất vCard',
	'srf_printername_icalendar' => 'Xuất iCalendar',
	'srf_printername_bibtex' => 'Xuất BibTeX',
	'srf_outline_novalue' => 'Vô giá trị',
	'srf_printername_outline' => 'Khái quát',
	'srf_printername_sum' => 'Tổng số',
	'srf_printername_average' => 'Trung bình số',
	'srf_printername_min' => 'Số lớn nhất',
	'srf_printername_max' => 'Số nhỏ nhất',
	'srf_printername_timeline' => 'Thời gian biểu',
	'srf_printername_eventline' => 'Sự kiện biểu',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'srfc_previousmonth' => 'Mul büik',
	'srfc_nextmonth' => 'Mul sököl',
	'srfc_today' => 'Adelo',
	'srfc_gotomonth' => 'Lü mul',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Gzdavidwong
 */
$messages['zh-hans'] = array(
	'srfc_previousmonth' => '上月',
	'srfc_nextmonth' => '下月',
	'srfc_today' => '今天',
	'srfc_gotomonth' => '跳至月份',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'srfc_previousmonth' => '上月',
	'srfc_nextmonth' => '下月',
	'srfc_today' => '今天',
	'srfc_gotomonth' => '跳至月份',
);

/** Chinese (Taiwan) (‪中文(台灣)‬)
 * @author Roc michael
 */
$messages['zh-tw'] = array(
	'srfc_previousmonth' => '前一月',
	'srfc_nextmonth' => '次一月',
	'srfc_today' => '今日',
	'srfc_gotomonth' => '前往',
);
