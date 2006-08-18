<?php
/**
 * Internationalisation file for Desysop extension.
 *
 * @package MediaWiki
 * @subpackage Extensions
*/

$wgDesysopMessages = array();

$wgDesysopMessages['en'] = array(
	'desysoptitle'         => 'Revoke sysop access for a user',
	'desysoptext'          => "This form is used by bureaucrats to revoke a user's sysop permission. Type the user in the box and press the button to revoke the user's sysop access.",
	'desysopname'          => 'Name of the user:',
	'desysopok'            => "<b>User \"$1\" has been desysopped</b>",
	'set_user_rights'      => 'Set user rights',
	'user_rights_set'      => "<b>User rights for \"$1\" updated</b>",
	'set_rights_fail'      => "<b>User rights for \"$1\" could not be set. (Did you enter the name correctly?)</b>",
	'desysop'              => 'Desysop a user',
	'not_sysop'            => 'This user is not an administrator',
);
$wgDesysopMessages['he'] = array(
	'desysoptitle'         => 'בטל הרשאת מפעיל מערכת למשתמש',
	'desysoptext'          => "דף זה משמש ביורוקרטים לביטול הרשאת מפעיל מערכת של משתמש. אנא הקישו את שם המשתמש בתיבת הטקסט ולחצו על הכפתור על מנת להפוך את המשתמש למפעיל מערכת.",
	'desysopname'          => 'שם המשתמש:',
	'desysopok'            => '\'\'\'המשתמש "$1" כבר אינו מפעיל מערכת.\'\'\'',
	'set_user_rights'      => 'קבל הרשאות משתמש',
	'user_rights_set'      => '\'\'\'הרשאות המשתמש "$1" עודכנו.\'\'\'',
	'set_rights_fail'      => '\'\'\'שינוי הרשאות המשתמש "$1" נכשל.\'\'\' (האם הקלדתם נכונה את שם המשתמש?)',
	'desysop'              => 'בטל הרשאת מפעיל מערכת למשתמש',
	'not_sysop'            => 'משתמש זה אינו מפעיל מערכת',
);
$wgDesysopMessages['nl'] = array(
	'desysoptitle'         => 'Beheerdersrechten voor een gebruiker intrekken',
	'desysoptext'          => "Bureaucraten begruiken dit formulier om beheerdersrechten voor een gebruiker in te trekken. Voer de gebruikersnaam in het veld in en klik op de knop om de beheerdersrechten in te trekken.",
	'desysopname'          => 'Gebruikersnaam:',
	'desysopok'            => "<b>Beheerdersrechten voor gebruiker \"$1\" zijn ingetrokken</b>",
	'set_user_rights'      => 'Gebruikersrechten instellen',
	'user_rights_set'      => "<b>Gebruikersrechten voor gebruiker \"$1\" zijn bijgewerkt</b>",
	'set_rights_fail'      => "<b>Gebruikersrechten voor \"$1\" konden niet ingesteld worden. Heeft u de gebruikersnaam juist ingevoerd?</b>",
	'desysop'              => 'Beheerdersrechten intrekken',
	'not_sysop'            => 'Deze gebruiker is geen beheerder',
);
?>
