<?php

$messages = array(
	'en' => array(
		'inplace_access_disabled' => 'Access to this service has been disabled for all clients.',
		'inplace_access_denied' => 'This service is restricted by client IP.',
		'inplace_scaler_no_temp' => 'No valid temporary directory, set $wgLocalTmpDirectory to a writeable directory.',
		'inplace_scaler_not_enough_params' => 'Not enough parameters.',
		'inplace_scaler_invalid_image' => 'Invalid image, could not determine size.',
		'inplace_scaler_failed' => 'An error was encountered during image scaling: $1',
		'inplace_scaler_no_handler' => 'No handler for transforming this MIME type',
		'inplace_scaler_no_output' => 'No transformation output file was produced.',
		'inplace_scaler_zero_size' => 'Transformation produced a zero-sized output file.',

		'webstore_access' => 'This service is restricted by client IP.',
		'webstore_path_invalid' => 'The filename was invalid.',
		'webstore_dest_open' => 'Unable to open destination file "$1".',
		'webstore_dest_lock' => 'Failed to get lock on destination file "$1".',
		'webstore_dest_mkdir' => 'Unable to create destination directory "$1".',
		'webstore_archive_lock' => 'Failed to get lock on archive file "$1".',
		'webstore_archive_mkdir' => 'Unable to create archive directory "$1".',
		'webstore_src_open' => 'Unable to open source file "$1".',
		'webstore_src_close' => 'Error closing source file "$1".',
		'webstore_src_delete' => 'Error deleting source file "$1".',

		'webstore_rename' => 'Error renaming file "$1" to "$2".',
		'webstore_lock_open' => 'Error opening lock file "$1".',
		'webstore_lock_close' => 'Error closing lock file "$1".',
		'webstore_dest_exists' => 'Error, destination file "$1" exists.',
		'webstore_temp_open' => 'Error opening temporary file "$1".',
		'webstore_temp_copy' => 'Error copying temporary file "$1" to destination file "$2".',
		'webstore_temp_close' => 'Error closing temporary file "$1".',
		'webstore_temp_lock' => 'Error locking temporary file "$1".',
		'webstore_no_archive' => 'Destination file exists and no archive was given.',

		'webstore_no_file' => 'No file was uploaded.',
		'webstore_move_uploaded' => 'Error moving uploaded file "$1" to temporary location "$2".',

		'webstore_invalid_zone' => 'Invalid zone "$1".',

		'webstore_no_deleted' => 'No archive directory for deleted files is defined.',
		'webstore_curl' => 'Error from cURL: $1',
		'webstore_404' => 'File not found.',
		'webstore_php_warning' => 'PHP Warning: $1',
		'webstore_metadata_not_found' => 'File not found: $1',
		'webstore_postfile_not_found' => 'File to post not found.',
		'webstore_scaler_empty_response' => 'The image scaler gave an empty response with a 200 ' .
			'response code. This could be due to a PHP fatal error in the scaler.',

		'webstore_invalid_response' => "Invalid response from server:\n\n$1\n",
		'webstore_no_response' => 'No response from server',
		'webstore_backend_error' => "Error from storage server:\n\n$1\n",
		'webstore_php_error' => 'PHP errors were encountered:',
		'webstore_no_handler' => 'No handler for transforming this MIME type',
	),
	'ar' => array(
	'inplace_access_disabled' => 'الدخول إلى هذه الخدمة تم تعطيله لكل العملاء.',
	'inplace_access_denied' => 'هذه الخدمة مقيدة بواسطة أيبي عميل.',
	'inplace_scaler_no_temp' => 'لا مجلد مؤقت صحيح، ضبط $wgLocalTmpDirectory لمجلد قابل للكتابة.',
	'inplace_scaler_not_enough_params' => 'لا محددات كافية.',
	'inplace_scaler_invalid_image' => 'صورة غير صحيحة، لم يمكن تحديد الحجم.',
	'inplace_scaler_failed' => 'حدث خطأ أثناء وزن الصورة: $1',
	'inplace_scaler_no_handler' => 'لا وسيلة لتحويل نوع MIME هذا',
	'inplace_scaler_no_output' => 'لا ملف تحويل خارج تم إنتاجه.',
	'inplace_scaler_zero_size' => 'التحويل أنتج ملف خروج حجمه صفر.',
	'webstore_access' => 'هذه الخدمة مقيدة بواسطة أيبي عميل.',
	'webstore_path_invalid' => 'اسم الملف كان غير صحيح.',
	'webstore_dest_open' => 'غير قادر على فتح الملف الهدف "$1".',
	'webstore_dest_lock' => 'فشل في الغلق على ملف الوجهة "$1".',
	'webstore_dest_mkdir' => 'غير قادر على إنشاء مجلد الوجهة "$1".',
	'webstore_archive_lock' => 'فشل في الغلق على ملف الأرشيف "$1".',
	'webstore_archive_mkdir' => 'غير قادر على إنشاء مجلد الأرشيف "$1".',
	'webstore_src_open' => 'غير قادر على فتح ملف المصدر "$1".',
	'webstore_src_close' => 'خطأ أثناء إغلاق ملف المصدر "$1".',
	'webstore_src_delete' => 'خطأ أثناء حذف ملف المصدر "$1".',
	'webstore_rename' => 'خطأ أثناء إعادة تسمية الملف "$1" إلى "$2".',
	'webstore_lock_open' => 'خطأ أثناء فتح غلق الملف "$1".',
	'webstore_lock_close' => 'خطأ أثناء إغلاق غلق الملف "$1".',
	'webstore_dest_exists' => 'خطأ، ملف الوجهة "$1" موجود.',
	'webstore_temp_open' => 'خطأ أثناء فتح الملف المؤقت "$1".',
	'webstore_temp_copy' => 'خطأ أثناء نسخ الملف المؤقت "$1" لملف الوجهة "$2".',
	'webstore_temp_close' => 'خطأ أثناء إغلاق الملف المؤقت "$1".',
	'webstore_temp_lock' => 'خطأ غلق الملف المؤقت "$1".',
	'webstore_no_archive' => 'ملف الوجهة موجود ولم يتم إعطاء أرشيف.',
	'webstore_no_file' => 'لم يتم رفع أي ملف.',
	'webstore_move_uploaded' => 'خطأ أثناء نقل الملف المرفوع "$1" إلى الموقع المؤقت "$2".',
	'webstore_invalid_zone' => 'منطقة غير صحيحة "$1".',
	'webstore_no_deleted' => 'لم يتم تعريف مجلد أرشيف للملفات المحذوفة.',
	'webstore_curl' => 'خطأ من cURL: $1',
	'webstore_404' => 'لم يتم إيجاد الملف.',
	'webstore_php_warning' => 'تحذير PHP: $1',
	'webstore_metadata_not_found' => 'الملف غير موجود: $1',
	'webstore_postfile_not_found' => 'الملف للإرسال غير موجود.',
	'webstore_scaler_empty_response' => 'وازن الصورة أعطى ردا فارغا مع 200 كود رد. هذا يمكن أن يكون نتيجة خطأ PHP قاتل في الوازن.',
	'webstore_invalid_response' => 'رد غير صحيح من الخادم:

$1',
	'webstore_no_response' => 'لا رد من الخادم',
	'webstore_backend_error' => 'خطأ من خادم التخزين:

$1',
	'webstore_php_error' => 'حدثت أخطاء PHP:',
	'webstore_no_handler' => 'لا وسيلة لتحويل نوع MIME هذا',
	),
	'bcl' => array(
	'webstore_no_response' => 'Mayong simbag hali sa server',
	),
	'ext' => array(
	'webstore_rename' => 'Marru rehucheandu el archivu "$1" a "$2".',
	'webstore_no_file' => 'Nu s´á empuntau dengún archivu.',
	'webstore_404' => 'Archivu nu alcuentrau.',
	),
	'gl' => array(
	'inplace_access_disabled' => 'Desactivouse o acceso a este servizo para todos os clientes.',
	'inplace_access_denied' => 'Este servizo está restrinxido polo IP do cliente.',
	'inplace_scaler_no_temp' => 'Non é un directorio temporal válido; configure $wgLocalTmpDirectory nun directorio no que se poida escribir.',
	'inplace_scaler_not_enough_params' => 'Os parámetros son insuficientes.',
	'inplace_scaler_invalid_image' => 'A imaxe non é válida, non se puido determinar o seu tamaño.',
	'inplace_scaler_failed' => 'Atopouse un erro mentres se ampliaba a imaxe: $1',
	'inplace_scaler_no_handler' => 'Non se definiu un programa para transformar este tipo MIME',
	'inplace_scaler_no_output' => 'Non se produciu ningún ficheiro de saída da transformación.',
	'inplace_scaler_zero_size' => 'A transformación produciu un ficheiro de saída de tamaño 0.',
	'webstore_access' => 'Este servizo está restrinxido polo IP do cliente.',
	'webstore_path_invalid' => 'O nome do ficheiro non era válido.',
	'webstore_dest_open' => 'Foi imposíbel abrir o ficheiro de destino "$1".',
	'webstore_dest_lock' => 'Non se puido bloquear o ficheiro de destino "$1".',
	'webstore_dest_mkdir' => 'Non se puido crear o directorio de destino "$1".',
	'webstore_archive_lock' => 'Non se puido bloquear o ficheiro de arquivo "$1".',
	'webstore_archive_mkdir' => 'Non se puido crear o directorio de arquivo "$1".',
	'webstore_src_open' => 'Non se puido abrir o ficheiro de orixe "$1".',
	'webstore_src_close' => 'Erro ao pechar o ficheiro de orixe "$1".',
	'webstore_src_delete' => 'Erro ao eliminar o ficheiro de orixe "$1".',
	'webstore_rename' => 'Erro ao lle mudar o nome a "$1" para "$2".',
	'webstore_lock_open' => 'Erro ao abrir o ficheiro de bloqueo "$1".',
	'webstore_lock_close' => 'Erro ao fechar o ficheiro de bloqueo "$1".',
	'webstore_dest_exists' => 'Erro, xa existe o ficheiro de destino "$1".',
	'webstore_temp_open' => 'Erro ao abrir o ficheiro temporal "$1".',
	'webstore_temp_copy' => 'Erro ao copiar o ficheiro temporal "$1" no ficheiro de destino "$2".',
	'webstore_temp_close' => 'Erro ao fechar o ficheiro temporal "$1".',
	'webstore_temp_lock' => 'Erro ao bloquear o ficheiro temporal "$1".',
	'webstore_no_archive' => 'O ficheiro de destino xa existe e non se deu un arquivo.',
	'webstore_no_file' => 'Non se enviou ningún ficheiro.',
	'webstore_move_uploaded' => 'Erro ao mover o ficheiro enviado "$1" para a localización temporal "$2".',
	'webstore_invalid_zone' => 'Zona "$1" non válida.',
	'webstore_no_deleted' => 'Non se definiu un directorio de arquivo para os ficheiros eliminados.',
	'webstore_curl' => 'Erro de cURL: $1',
	'webstore_404' => 'Non se atopou o ficheiro.',
	'webstore_php_warning' => 'Aviso de PHP: $1',
	'webstore_metadata_not_found' => 'Non se atopou o ficheiro: $1',
	'webstore_postfile_not_found' => 'Non se atopou o ficheiro enviado.',
	'webstore_scaler_empty_response' => 'O redimensionador de imaxes deu unha resposta baleira co código de resposta 200. Isto podería deberse a un erro fatal de PHP no redimensionador.',
	'webstore_invalid_response' => 'Resposta non válida do servidor:

$1',
	'webstore_no_response' => 'Sen resposta desde os servidor',
	'webstore_backend_error' => 'Erro do servidor de almacenamento:

$1',
	'webstore_php_error' => 'Atopáronse erros de PHP:',
	'webstore_no_handler' => 'Non hai un programa para transformar este tipo MIME',
	),
	'hsb' => array(
	'inplace_access_disabled' => 'Přistup k tutej słužbje bu za wšě klienty znjemóžnjeny.',
	'inplace_access_denied' => 'Tuta słužba so přez klientowy IP wobmjezuje.',
	'inplace_scaler_no_temp' => 'Žadyn płaćiwy temporerny zapis, staj wariablu $wgLocalTmpDirectory na popisajomny zapis',
	'inplace_scaler_not_enough_params' => 'Falowace parametry.',
	'inplace_scaler_invalid_image' => 'Njepłaćiwy wobraz, wulkosć njeda so zwěsćić.',
	'inplace_scaler_failed' => 'Při skalowanju je zmylk wustupił: $1',
	'inplace_scaler_no_handler' => 'Žadyn rjadowak, zo by so tutón MIME-typ přetworił',
	'inplace_scaler_no_output' => 'Njeje so žana wudawanska dataja spłodźiła.',
	'inplace_scaler_zero_size' => 'Přetworjenje spłodźi prózdnu wudawansku dataju.',
	'webstore_access' => 'Tuta słužba so přez klientowy IP wobmjezuje.',
	'webstore_path_invalid' => 'Datajowe mjeno bě njepłaćiwe.',
	'webstore_dest_open' => 'Njeje móžno cilowu dataju "$1" wočinić.',
	'webstore_dest_lock' => 'Zawrjenje ciloweje dataje "$1" njeje so poradźiło.',
	'webstore_dest_mkdir' => 'Njeje móžno cilowy zapis "$1" wutworić.',
	'webstore_archive_lock' => 'Zawrjenje archiwneje dataje "$1" njeje so poradźiło.',
	'webstore_archive_mkdir' => 'Njeje móžno archiwowy zapis "$1" wutworić.',
	'webstore_src_open' => 'Njeje móžno žórłowu dataju "$1" wočinić.',
	'webstore_src_close' => 'Zmylk při začinjenju žórłoweje dataje "$1".',
	'webstore_src_delete' => 'Zmylk při zničenju dataje "$1".',
	'webstore_rename' => 'Zmylk při přemjenowanju dataje "$1" do "$2".',
	'webstore_lock_open' => 'Zmylk při wočinjenju blokowaceje dataje "$1".',
	'webstore_lock_close' => 'Zmylk při začinjenju blokowaceje dataje "$1".',
	'webstore_dest_exists' => 'Zmylk, cilowa dataja "$1" eksistuje.',
	'webstore_temp_open' => 'Zmylk při wočinjenju temporerneje dataje "$1".',
	'webstore_temp_copy' => 'Zmylk při kopěrowanju temporerneje dataje "$1" do ciloweje dataje "$2".',
	'webstore_temp_close' => 'Zmylk při začinjenju temporerneje dataje "$1".',
	'webstore_temp_lock' => 'Zmylk při zawrjenju temporerneje dataje "$1".',
	'webstore_no_archive' => 'Cilowa dataja eksistuje a žadyn archiw njebu podaty.',
	'webstore_no_file' => 'Žana dataja njebu nahrata.',
	'webstore_move_uploaded' => 'Zmylk při přesunjenju nahrateje dataje "$1" k nachwilnemu městnu "$2".',
	'webstore_invalid_zone' => 'Njepłaćiwy wobłuk "$1".',
	'webstore_no_deleted' => 'Njebu žadyn archiwowy zapis za zničene dataje definowany.',
	'webstore_curl' => 'Zmylk z cURL: $1',
	'webstore_404' => 'Dataja njenamakana.',
	'webstore_php_warning' => 'Warnowanje PHP: $1',
	'webstore_metadata_not_found' => 'Dataja njenamakana: $1',
	'webstore_postfile_not_found' => 'Dataja, kotraž ma so wotesłać, njebu namakana.',
	'webstore_scaler_empty_response' => 'Wobrazowy skalowar wróći prózdnu wotmołwu z wotmołwnym kodom 200. Přičina móhła ćežki zmylk PHP w skalowarju być.',
	'webstore_invalid_response' => 'Njepłaćiwa wotmołwa ze serwera:

$1',
	'webstore_no_response' => 'Žana wotmołwa ze serwera',
	'webstore_backend_error' => 'Zmylk ze składowanskeho serwera:

$1',
	'webstore_php_error' => 'Zmylki PHP su wustupili:',
	'webstore_no_handler' => 'Žadyn rjadowak, zo by so tutón MIME-typ přetworił',
	),
	'nl' => array(
		'inplace_access_disabled' => 'Toegang tot deze dienst is uitgeschakeld voor alle clients.',
		'inplace_access_denied' => 'Deze dienst is afgeschermd op basis van het IP-adres van een client.',
		'inplace_scaler_no_temp' => 'Geen juiste tijdelijke map, geef schrijfrechten op $wgLocalTmpDirectory.',
		'inplace_scaler_not_enough_params' => 'Niet genoeg parameters.',
		'inplace_scaler_invalid_image' => 'Onjuiste afbeelding. Grootte kon niet bepaald worden.',
		'inplace_scaler_failed' => 'Er is een fout opgetreden bij het schalen van de afbeelding: $1',
		'inplace_scaler_no_handler' => 'Dit MIME-type kan niet getransformeerd worden',
		'inplace_scaler_no_output' => 'Er is geen uitvoerbestand voor de transformatie gemaakt.',
		'inplace_scaler_zero_size' => 'De grootte van het uitvoerbestand van de transformatie was nul.',

		'webstore_access' => 'Deze dienst is afgeschermd op basis van het IP-adres van een client.',
		'webstore_path_invalid' => 'De bestandnaam was ongeldig.',
		'webstore_dest_open' => 'Het doelbestand "$1" kon niet geopend worden.',
		'webstore_dest_lock' => 'Het doelbestand "$1" was niet te locken.',
		'webstore_dest_mkdir' => 'De doelmap "$1" kon niet aangemaakt worden.',
		'webstore_archive_lock' => 'Het archiefbestand "$1" was niet te locken.',
		'webstore_archive_mkdir' => 'De archiefmap "$1" kon niet aangemaakt worden.',
		'webstore_src_open' => 'Het bronbestand "$1" was niet te openen.',
		'webstore_src_close' => 'Fout bij het sluiten van bronbestand "$1".',
		'webstore_src_delete' => 'Fout bij het verwijderen van bronbestand "$1".',

		'webstore_rename' => 'Fout bij het hernoemen van "$1" naar "$2".',
		'webstore_lock_open' => 'Fout bij het openen van lockbestand "$1".',
		'webstore_lock_close' => 'Fout bij het sluiten van lockbestand "$1".',
		'webstore_dest_exists' => 'Fout, doelbestand "$1" bestaat al.',
		'webstore_temp_open' => 'Fout bij het openen van tijdelijk bestand "$1".',
		'webstore_temp_copy' => 'Fout bij het kopiren van tijdelijk bestand "$1" naar doelbestand "$2".',
		'webstore_temp_close' => 'Fout bij het sluiten van tijdelijk bestand "$1".',
		'webstore_temp_lock' => 'Fout bij het locken van tijdelijk bestand "$1".',
		'webstore_no_archive' => 'Doelbestand bestaat en er is geen archief opgegeven.',

		'webstore_no_file' => 'Er is geen bestand geuploaded.',
		'webstore_move_uploaded' => 'Fout bij het verplaatsen van geupload bestand "$1" naar tijdelijke locatie "$2".',

		'webstore_invalid_zone' => 'Ongeldige zone "$1".',

		'webstore_no_deleted' => 'Er is geen archiefmap voor verwijderde bestanden gedefinieerd.',
		'webstore_curl' => 'Fout van cURL: $1',
		'webstore_404' => 'Bestand niet gevonden.',
		'webstore_php_warning' => 'PHP-waarschuwing: $1',
		'webstore_metadata_not_found' => 'Bestand  niet gevonden: $1',
		'webstore_postfile_not_found' => 'Te posten bestand niet gevonden.',
		'webstore_scaler_empty_response' => 'De afbeeldingenschaler gaf een leeg antwoorden met een 200 ' .
			'antwoordcode. Dit kan te maken hebben met een fatale PHP-fout in de schaler.',

		'webstore_invalid_response' => "Ongeldig antwoord van de server:\n\n$1\n",
		'webstore_no_response' => 'Geen antwoord van de server',
		'webstore_backend_error' => "Fout van de opslagserver:\n\n$1\n",
		'webstore_php_error' => 'Er zijn PHP-fouten opgetreden:',
		'webstore_no_handler' => 'Dit MIME-type kan niet getransformeerd worden',
	),
);
