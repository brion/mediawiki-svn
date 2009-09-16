<?php
/**
 * ReplaceSet
 * @package ReplaceSet
 * @author Daniel Friesen (http://mediawiki.org/wiki/User:Dantman) <mediawiki@danielfriesen.name>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

require_once( dirname(__FILE__) . '/ReplaceSet.i18n.magic.php' );

$messages = array();

$messages['en'] = array(
	'replaceset-desc' => 'Adds a <nowiki>{{#replaceset}}</nowiki> parser function used for replacing sections of text with formatted data',
	'replaceset-error-calllimit' => 'The ReplaceSet call limit has been reached.',
	'replaceset-error-regexnoend' => 'The regex pattern "$1" is missing the ending delimiter \'$2\'',
	'replaceset-error-regexbadmodifier' => 'The regex modifier \'$1\' is not valid.'
);

/** Message documentation (Message documentation)
 * @author Fryed-peach
 */
$messages['qqq'] = array(
	'replaceset-desc' => '{{desc}}',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'replaceset-desc' => 'Дадае функцыю парсэра <nowiki>{{#replaceset}}</nowiki> для замены частак тэксту з фарматаванымі зьвесткамі',
	'replaceset-error-calllimit' => 'Была дасягнутая мяжа выклікаў ReplaceSet.',
	'replaceset-error-regexnoend' => 'Ва ўзоры рэгулярнага выразу «$1» адсутнічае канчатковы падзяляльнік «$2»',
	'replaceset-error-regexbadmodifier' => 'Няслушны мадыфікатар рэгулярнага выразу «$1».',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'replaceset-desc' => "Ouzhpennañ a ra un arc'hwel parser <nowiki>{{#replaceset}}</nowiki> a dalvez da erlec'hiañ lodennoù skrid gant roadennoù furmadet",
	'replaceset-error-calllimit' => "Tizhet eo bet bevenn gervel an arc'hwel ReplaceSet.",
	'replaceset-error-regexnoend' => 'Ezvezant eo ar bevenner dibenn \'$2\' er patrom regex "$1"',
	'replaceset-error-regexbadmodifier' => "Direizh eo ar c'hemmer regex '$1'.",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'replaceset-desc' => 'Dodaje parsersku funkciju nowiki>{{#replaceset}}</nowiki> korištenu za zamjenu sekcija teksta sa formatiranim podacima',
	'replaceset-error-calllimit' => 'Ograničenje poziva ReplaceSet je dostignuto.',
	'replaceset-error-regexnoend' => "Šemi regularnih izraza ''$1'' nedostaje završni razdjelnik '$2'",
	'replaceset-error-regexbadmodifier' => "Modifikator regularnih izraza '$1' nije valjan.",
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'replaceset-desc' => 'Pśidawa parserowu funkciju <nowiki>{{#replaceset}}</nowiki>, wužywanu za wuměnjenje tekstowych wótrězkow z formatěrowanymi datami',
	'replaceset-error-calllimit' => 'Limit zawołanjow ReplaceSet jo dojśpjony.',
	'replaceset-error-regexnoend' => 'Mustroju regularnych wurazow "$1" falujo kóńcne źělatko \'$2\'',
	'replaceset-error-regexbadmodifier' => "Modifikator regularnych wurazow '$1' njejo płaśiwy.",
);

/** Greek (Ελληνικά)
 * @author Omnipaedista
 */
$messages['el'] = array(
	'replaceset-error-regexnoend' => 'Το πρότυπο τακτικής έκφρασης "$1" υπολείπεται του ληκτικού χαρακτήρα \'$2\'',
	'replaceset-error-regexbadmodifier' => "Ο τροποποιητής τακτικής έκφρασης '$1' δεν είναι έγκυρος.",
);

/** French (Français)
 * @author PieRRoMaN
 * @author Verdy p
 */
$messages['fr'] = array(
	'replaceset-desc' => 'Ajoute une fonction parseur <nowiki>{{#replaceset}}</nowiki> utilisée pour remplacer des sections de texte avec des données formatées',
	'replaceset-error-calllimit' => "La limite des appels à la fonction ''ReplaceSet'' a été atteinte.",
	'replaceset-error-regexnoend' => 'Le délimiteur de fin « $2 » est manquant dans le motif de l’expression régulière « $1 »',
	'replaceset-error-regexbadmodifier' => 'Le modificateur d’expression régulière  « $1 » est invalide.',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'replaceset-desc' => 'Engade unha función analítica <nowiki>{{#replaceset}}</nowiki> utilizada para a substitución de fragmentos de texto por datos con formato',
	'replaceset-error-calllimit' => 'Atinxiuse o límite de chamadas da función ReplaceSet.',
	'replaceset-error-regexnoend' => 'Fáltalle o delimitador de peche "$2" ao patrón de expresións regulares "$1"',
	'replaceset-error-regexbadmodifier' => 'O modificador de expresións regulares "$1" non é válido.',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'replaceset-desc' => 'Fiegt e <nowiki>{{#replaceset}}</nowiki> Parserfunktion yy, wu mer Abschnitt vu Text cha ersetze dur formatierti Date',
	'replaceset-error-calllimit' => 'D Gränz vu dr Aaruef vu ReplaceSet isch erreicht wore.',
	'replaceset-error-regexnoend' => "Bim Regexbitmuschter „$1“ fählt s Änd-Begränzigszeiche '$2'",
	'replaceset-error-regexbadmodifier' => "Dr Regex-Modifier '$1' isch nit giltig.",
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'replaceset-desc' => 'Přidawa parserowu funkciju <nowiki>{{#replaceset}}</nowiki>, wužiwanu za narunanje tekstowych wotrězkow z formatowanymi datami',
	'replaceset-error-calllimit' => 'Limit zawołanjow ReplaceSet je docpěty.',
	'replaceset-error-regexnoend' => 'Mustrej regularnych wurazow "$1" kónčne dźělatko \'$2\' pobrachuje',
	'replaceset-error-regexbadmodifier' => "Modifikator regularnych wurazow '$1' płaćiwy njeje.",
);

/** Hungarian (Magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'replaceset-desc' => '<nowiki>{{#replaceset}}</nowiki> elemzőfüggvény szöveg szakaszainak formázott adatokra történő cseréjére',
	'replaceset-error-regexnoend' => "A „$1” regex mintának hiányzik a záró határolójele ('$2')",
	'replaceset-error-regexbadmodifier' => "A(z) '$1' reguláris kifejezés módosító nem érvényes.",
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'replaceset-desc' => 'Adde un function de analysator syntactic <nowiki>{{#replaceset}}</nowiki> pro reimplaciar sectiones de texto per datos formatate',
	'replaceset-error-calllimit' => 'Le limite de appellos al function ReplaceSet ha essite attingite.',
	'replaceset-error-regexnoend' => 'Al patrono del expression regular "$1" manca le delimitator final \'$2\'',
	'replaceset-error-regexbadmodifier' => "Le modificator de expression regular '$1' non es valide.",
);

/** Indonesian (Bahasa Indonesia)
 * @author Irwangatot
 */
$messages['id'] = array(
	'replaceset-desc' => 'Masukan  <nowiki>{{#replaceset}}</nowiki> fungsi parser untuk menggantikan teks yang dipilih dengan data berformat.',
	'replaceset-error-calllimit' => 'Pemanggilan ReplaceSet sudah mencapai limit.',
	'replaceset-error-regexnoend' => 'Pola regex "$1" hilang pada akhir pemisah \'$2\'',
	'replaceset-error-regexbadmodifier' => "Pengubah regex '$1' tidak sah.",
);

/** Italian (Italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'replaceset-error-calllimit' => 'Il limite di chiamate ReplaceSet è stato raggiunto.',
	'replaceset-error-regexnoend' => 'Il delimitatore finale \'$2\' manca al pattern della regex "$1"',
	'replaceset-error-regexbadmodifier' => "Il modificatore della regex '$1' non è valido.",
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 */
$messages['ja'] = array(
	'replaceset-desc' => 'テキストの一部分を整形されたデータで置き換えるためのパーサー関数 <nowiki>{{#replaceset}}</nowiki> を追加する',
	'replaceset-error-calllimit' => 'ReplaceSet の呼び出し回数が上限に達しました。',
	'replaceset-error-regexnoend' => '指定した正規表現 "$1" には、終わりを区切る記号 \'$2\' が不足しています',
	'replaceset-error-regexbadmodifier' => "'$1' は正規表現の修飾子として無効です。",
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'replaceset-desc' => 'Deiht de <code><nowiki>{{#replaceset}}</nowiki></code> Paaserfungkßuhn em Wiki dobei, öm Afschnedde fun Täx jääje fommatteete Daate enzetuusche.',
	'replaceset-error-calllimit' => 'De Oproofjrenz för <i lang="en">ReplaceSet</i> es erreisch.',
	'replaceset-error-regexnoend' => 'En dä <i lang="en">regular expression</i> „$1“ fählt et Zeische för et Engk, wat eijentlesch e „$2“ sin mööt.',
	'replaceset-error-regexbadmodifier' => 'En dä <i lang="en">regular expression</i> es dat „$1“ e onjöltisch Zeijsche för en Veränderung udder en jenouere Beschtemmung.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'replaceset-desc' => "Setzt eng <nowiki>{{#replaceset}}</nowiki> Parser-Fonctioun derbäi déi benotzt gëtt fir Text-Abschnitter duerch formatéiert Daten z'ersetzen",
	'replaceset-error-calllimit' => "D'Limit fir d'Opruffe vu ''ReplaceSet'' gouf erreecht.",
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author Siebrand
 */
$messages['nl'] = array(
	'replaceset-desc' => 'Voegt de parserfunctie <nowiki>{{#replaceset}}</nowiki> toe voor het vervangen van tekstdelen met opgemaakte gegevens',
	'replaceset-error-calllimit' => 'De limiet van het aantal aanroepen van ReplaceSet is bereikt.',
	'replaceset-error-regexnoend' => 'In het regex-patroon "$1" ontbreekt het sluitteken \'$2\'',
	'replaceset-error-regexbadmodifier' => 'De modifier "$1" van de reguliere expressie is niet geldig.',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'replaceset-desc' => 'Apond una foncion parser <nowiki>{{#replaceset}}</nowiki> utilizada per remplaçar de seccions de tèxte amb de donadas formatadas',
	'replaceset-error-calllimit' => "Lo limit dels apèls a la foncion ''ReplaceSet'' es estat atench.",
	'replaceset-error-regexnoend' => 'Lo delimitador de fin « $2 » es mancant dins lo motiu de l’expression regulara « $1 »',
	'replaceset-error-regexbadmodifier' => 'Lo modificador d’expression regulara  « $1 » es invalid.',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'replaceset-desc' => 'Dodaje funkcję parsera <nowiki>{{#replaceset}}</nowiki> wykorzystywaną do zastępowania części tekstu sformatowanymi danymi',
	'replaceset-error-calllimit' => 'Został osiągnięty limit liczby wywołań ReplaceSet.',
	'replaceset-error-regexnoend' => "Brak końcowego separatora '$2' w wyrażeniu regularnym wzorca „$1”",
	'replaceset-error-regexbadmodifier' => "Nieprawidłowy modyfikator '$1' wyrażenia regularnego.",
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'replaceset-desc' => 'A gionta na funsion dël parser <nowiki>{{#replaceset}}</nowiki> dovrà për rimpiassé session ëd test con dat formatà',
	'replaceset-error-calllimit' => "Ël lìmit ëd ciamà a ReplaceSet a l'é rivà.",
	'replaceset-error-regexnoend' => 'Ël regex pattern "$1" a l\'ha pa ëd delimitador final \'$2\'',
	'replaceset-error-regexbadmodifier' => "Ël modificador ëd regex '$1' a l'é pa bon.",
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'replaceset-desc' => 'Adiciona a função de análise <nowiki>{{#replaceset}}</nowiki> utilizada para substituir seções de texto com dados formatados',
	'replaceset-error-calllimit' => 'O limite de chamadas de ReplaceSet foi alcançado.',
	'replaceset-error-regexnoend' => 'A expressão regular "$1" está sem um delimitador final \'$2\'',
	'replaceset-error-regexbadmodifier' => "O modificador de expressão regular '$1' não é válido",
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'replaceset-desc' => 'Добавляет функцию парсера <nowiki>{{#replaceset}}</nowiki>, для замены участков текста с форматированными данными',
	'replaceset-error-calllimit' => 'Достигнут предел вызовов ReplaceSet.',
	'replaceset-error-regexnoend' => 'В шаблоне регулярного выражения «$1» отсутствует завершающий разделитель «$2»',
	'replaceset-error-regexbadmodifier' => 'Модификатор регулярного выражения «$1» недействителен.',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'replaceset-desc' => 'Pridáva funkciu syntaktického analyzátora <nowiki>{{#replaceset}}</nowiki> na náhradu sekcií textu formátovanými údajmi',
	'replaceset-error-calllimit' => 'Bol dosiahnutý limit volaní ReplaceSet.',
	'replaceset-error-regexnoend' => 'Regulárnemu výrazu „$1“ chýba ukončovací oddeľovač „$2“',
	'replaceset-error-regexbadmodifier' => 'Modifikátor regulárneho výrazu „$1“ nie je platný.',
);

/** Swedish (Svenska)
 * @author Fluff
 */
$messages['sv'] = array(
	'replaceset-desc' => 'Lägger till parsefunktionen <nowiki>{{#replaceset}}</nowiki> som används för att ersätta sektioner av text med formaterad data',
	'replaceset-error-calllimit' => 'Begränsningen i antal anrop till funktionen ReplaceSet har uppnåtts.',
	'replaceset-error-regexnoend' => 'Det reguljära uttrycket "$1" saknar en avslutande avgränsare \'$2\'',
);

