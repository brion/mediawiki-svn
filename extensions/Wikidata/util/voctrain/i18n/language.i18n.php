<?php

# messages for voctrain
# now mediawiki style -ish


# fallback array. English is default!
# (although it's always nice to specify)
# if set to false, there is no fallback
$fallback=array(
	"en"=>false,
	"ar"=>"en",
	"bg"=>"en",
	"eo"=>"en",
	"fi"=>"en",
	"nap"=>"en",
	"nl"=>"en",
	"ru"=>"en"
);

# is this language rtl or ltr? assumes ltr as default
$direction=array(
	"ar"=>"rtl"
);

# Words starting with '%' (ie %action, or %questions_total) are
# "variable names", for use by the program. Don't translate those!

$messages=array();

/** English */
$messages['en'] = array(
	"voctrain_Hello_World"=>"HELLO WIKI!",
	"voctrain_Permission_Denied"=>"Permission Denied",
	"voctrain_try_again_"=>"try again?",
	"voctrain_Action_unknown"=>"Action unknown",
	"voctrain_I_don_t_know_what_to_do_with_action_" =>
		"I don't know what to do with '%action'.",
	"voctrain_User_added" => "User added",
	"voctrain_Hello_username_welcome_to_the_omega_language_trainer" => 
		"Hello, %username, welcome to the omega language trainer",
	"voctrain_continue"=>"continue",
	"voctrain_hello_place"=>"hello there %place",
	"voctrain_bye"=>"goodbye",
	"voctrain_Set_up_your_exercise"=>"Set up your exercise",
	"voctrain_Number_of_questions"=>"Number of questions",
	"voctrain_Languages"=>"Languages",
	"voctrain_Please_specify_the_languages_you_want_to_test_in"=>"Please specify the languages you want to test in",
	"voctrain_eg_eng_for_English_deu_for_Deutch_German_"=>"(eg, eng for English, deu for German).",
	"voctrain_Depending_on_your_test_set_some_combinations_might_work_better_than_others_"=>"Depending on your test set, some combinations might work better than others.",
	"voctrain_Questions"=>"Questions",
	"voctrain_Answers"=>"Answers",
	"voctrain_start_exercise"=>"start exercise",
	"voctrain_collection"=>"collection",
	"voctrain_ISO_639_3_format"=>"ISO-639-3 format",
	"voctrain_There_are_questions_remaining_questions_remaining_out_of_a_total_of_questions_total_"=>"There are %questions_remaining questions remaining, out of a total of %questions_total.",
	"voctrain_Definition"=>"Definition",
	"voctrain_Dictionary_definition_to_help_you"=>"Dictionary definition to help you",
	"voctrain_Word"=>"Word",
	"voctrain_Please_type_your_answer_here"=>"Please type your answer here",
	"voctrain_submit_answer"=>"submit answer",
	"voctrain_peek"=>"peek",
	"voctrain_skip"=>"skip",
	"voctrain_I_know_it_do_not_ask_again"=>"I know it/do not ask again",
	"voctrain_abort_exercise"=>"abort exercise",
	"voctrain_list_answers"=>"list answers",
	"voctrain_Question"=>"Question",
	"voctrain_The_word_to_translate"=>"The word to translate",
	"voctrain_Answer"=>"Answer",
	"voctrain_one_of"=>"one of",
	"voctrain_list_of_questions_and_answers"=>"list of questions and answers",
	"voctrain_Answer_s_"=>"Answer(s)",
	"voctrain_logout"=>"logout",
	"voctrain_Powered_by"=>"Powered by",
	"voctrain_Omegawiki"=>"Omegawiki",
	"voctrain_Exercise_complete"=>"Exercise complete",
	"voctrain_Exercise_terminated"=>"Exercise terminated",
	"voctrain_Start_a_new_exercise"=>"Start a new exercise",
	"voctrain_User_name"=>"User name",
	"voctrain_Password"=>"Password",
	"voctrain_Login"=>"Login",
	"voctrain_Create_new_user"=>"Create new user",
	"voctrain_Switch_language"=>"Switch language",
	"voctrain_Language"=>"Language",
	"voctrain_Log_in"=>"Log in",
	"voctrain_Omegawiki_vocabulary_trainer"=>"Omegawiki vocabulary trainer",
	"voctrain_Definitions"=>"Definitions",
	"voctrain_Could_not_create_new_user"=>"Could not create new user",
	"voctrain_Type_a_username_and_optional_password_or_try_a_different_username_"=>"Type a username and optional password, (or try a different username)"
);

/** Message documentation */

$messages['qqq'] = array(
	"voctrain_Hello_World"=>"Test message",
	"voctrain_Permission_Denied"=>"login: access is denied",
	"voctrain_try_again_"=>"An operation failed, link back to normal voctrainer (used in multiple locations)",
	"voctrain_Action_unknown"=>"Action unknown: Page title",
	"voctrain_I_don_t_know_what_to_do_with_action_" =>
		"Action unknown: body text of page (don't translate %action).",
	"voctrain_User_added" => "login: title of User added page",
	"voctrain_Hello_username_welcome_to_the_omega_language_trainer" => 
		"login: Greeting when user created. (Don't translate %username)",
	"voctrain_continue"=>"continue operation (used in multiple locations)",
	"voctrain_hello_place"=>"Test message (don't translate %place)",
	"voctrain_bye"=>"Test message",
	"voctrain_Set_up_your_exercise"=>"setup: Page title",
	"voctrain_Number_of_questions"=>"setup: subheading",
	"voctrain_Languages"=>"Languages",
	"voctrain_Please_specify_the_languages_you_want_to_test_in"=>"Setup:text the in refers to '...in iso-693-3 format'",
	"voctrain_eg_eng_for_English_deu_for_Deutch_German_"=>"Setup:text",
	"voctrain_Depending_on_your_test_set_some_combinations_might_work_better_than_others_"=>"setup:text",
	"voctrain_Questions"=>"Questions",
	"voctrain_Answers"=>"Answers",
	"voctrain_start_exercise"=>"button:start exercise",
	"voctrain_collection"=>"a wikidata collection",
	"voctrain_ISO_639_3_format"=>"ISO-639-3 format",
	"voctrain_There_are_questions_remaining_questions_remaining_out_of_a_total_of_questions_total_"=>"exercise: status at top of page (don't translate %questions_remaining and %questions_total)",
	"voctrain_Definition"=>"exercise: subheading",
	"voctrain_Dictionary_definition_to_help_you"=>"exercise: text",
	"voctrain_Word"=>"exercise: subheading",
	"voctrain_Please_type_your_answer_here"=>"exercise: text",
	"voctrain_submit_answer"=>"exercise: button: Button by which the user submits their answer, which will be checked (and scored).",
	"voctrain_peek"=>"exercise: button",
	"voctrain_skip"=>"exercise: button",
	"voctrain_I_know_it_do_not_ask_again"=>"exercise: button",
	"voctrain_abort_exercise"=>"exercise: button",
	"voctrain_list_answers"=>"exercise: button",
	"voctrain_Question"=>"Question",
	"voctrain_The_word_to_translate"=>"The word to translate",
	"voctrain_Answer"=>"Answer",
	"voctrain_one_of"=>"one of",
	"voctrain_list_of_questions_and_answers"=>"list: heading",
	"voctrain_Answer_s_"=>"list: table header",
	"voctrain_logout"=>"logout button on all pages",
	"voctrain_Powered_by"=>"footer: Powered by",
	"voctrain_Omegawiki"=>"footer: Omegawiki",
	"voctrain_Exercise_complete"=>"end exercise: page heading",
	"voctrain_Exercise_terminated"=>"end exercise: page heading",
	"voctrain_Start_a_new_exercise"=>"end exercise: Start a new exercise",
	"voctrain_User_name"=>"login: User name",
	"voctrain_Password"=>"login: Password",
	"voctrain_Login"=>"login: button",
	"voctrain_Create_new_user"=>"login: button",
	"voctrain_Switch_language"=>"login: button",
	"voctrain_Language"=>"login: label",
	"voctrain_Log_in"=>"login: header",
	"voctrain_Omegawiki_vocabulary_trainer"=>"login: header"
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'voctrain_Hello_World'                       => 'أهلا ويكي!',
	'voctrain_Permission_Denied'                 => 'السماح مرفوض',
	'voctrain_try_again_'                        => 'حاول ثانية؟',
	'voctrain_Action_unknown'                    => 'الفعل غير معروف',
	'voctrain_User_added'                        => 'المستخدم تمت إضافته',
	'voctrain_continue'                          => 'استمر',
	'voctrain_bye'                               => 'وداعا',
	'voctrain_Number_of_questions'               => 'عدد الأسئلة',
	'voctrain_Languages'                         => 'لغات',
	'voctrain_Questions'                         => 'أسئلة',
	'voctrain_Answers'                           => 'إجابات',
	'voctrain_start_exercise'                    => 'ابدأ التدريب',
	'voctrain_collection'                        => 'مجموعة',
	'voctrain_Definition'                        => 'تعريف',
	'voctrain_Dictionary_definition_to_help_you' => 'تعريف القاموس لمساعدتك',
	'voctrain_Word'                              => 'كلمة',
	'voctrain_Please_type_your_answer_here'      => 'من فضلك اكتب إجابتك هنا',
	'voctrain_submit_answer'                     => 'إرسال الإجابة',
	'voctrain_skip'                              => 'تجاوز',
	'voctrain_abort_exercise'                    => 'إنهاء التدريب',
	'voctrain_list_answers'                      => 'عرض الإجابات',
	'voctrain_Question'                          => 'سؤال',
	'voctrain_The_word_to_translate'             => 'الكلمة للترجمة',
	'voctrain_Answer'                            => 'إجابة',
	'voctrain_one_of'                            => 'واحد من',
	'voctrain_list_of_questions_and_answers'     => 'قائمة الأسئلة والأجوبة',
	'voctrain_logout'                            => 'خروج',
	'voctrain_Omegawiki'                         => 'أوميجاويكي',
	'voctrain_Exercise_complete'                 => 'التدريب اكتمل',
	'voctrain_Exercise_terminated'               => 'التدريب تم إنهاؤه',
	'voctrain_Start_a_new_exercise'              => 'ابدأ تدريبا جديدا',
	'voctrain_User_name'                         => 'اسم المستخدم',
	'voctrain_Password'                          => 'كلمة السر',
	'voctrain_Login'                             => 'دخول',
	'voctrain_Create_new_user'                   => 'إنشاء مستخدم جديد',
	'voctrain_Switch_language'                   => 'تغيير اللغة',
	'voctrain_Language'                          => 'اللغة',
	'voctrain_Log_in'                            => 'دخول',
	'voctrain_Omegawiki_vocabulary_trainer'      => 'مدرب مفردات أوميجاويكي',
	'voctrain_Definitions'                       => 'التعريفات',
	'voctrain_Could_not_create_new_user'         => 'لم يمكن إنشاء مستخدم جديد',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'voctrain_Number_of_questions' => 'Брой въпроси',
	'voctrain_Questions'           => 'Въпроси',
	'voctrain_Answers'             => 'Отговори',
	'voctrain_Question'            => 'Въпрос',
	'voctrain_Answer'              => 'Отговор',
	'voctrain_Answer_s_'           => 'Отговор(и)',
	'voctrain_logout'              => 'излизане',
	'voctrain_User_name'           => 'Потребителско име',
	'voctrain_Password'            => 'Парола',
	'voctrain_Login'               => 'Влизане',
	'voctrain_Create_new_user'     => 'Създаване на нов потребител',
	'voctrain_Language'            => 'Език',
	'voctrain_Log_in'              => 'Влизане',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'voctrain_Hello_World'                                      => 'SALUTON, VIKIO!',
	'voctrain_Permission_Denied'                                => 'Malpermesita',
	'voctrain_try_again_'                                       => 'ĉu reprovu?',
	'voctrain_Action_unknown'                                   => 'Ago nekonata',
	'voctrain_User_added'                                       => 'Uzanto aldonita',
	'voctrain_continue'                                         => 'kontinui',
	'voctrain_hello_place'                                      => 'saluton %place',
	'voctrain_bye'                                              => 'ĝis',
	'voctrain_Set_up_your_exercise'                             => 'Starigi vian ekzercon',
	'voctrain_Number_of_questions'                              => 'Nombro de demandoj',
	'voctrain_Languages'                                        => 'Lingvoj',
	'voctrain_Please_specify_the_languages_you_want_to_test_in' => 'Bonvolu specifigi la lingvojn kiun vi volas testi',
	'voctrain_eg_eng_for_English_deu_for_Deutch_German_'        => '(ekz-e: eng por angla lingvo, deu por germana lingvo).',
	'voctrain_Questions'                                        => 'Demandoj',
	'voctrain_Answers'                                          => 'Respondoj',
	'voctrain_start_exercise'                                   => 'starti ekzercon',
	'voctrain_collection'                                       => 'kolekto',
	'voctrain_ISO_639_3_format'                                 => 'ISO-639-3 formato',
	'voctrain_Word'                                             => 'Vorto',
	'voctrain_I_know_it_do_not_ask_again'                       => 'Mi scias ĝin/ne redemandu',
	'voctrain_abort_exercise'                                   => 'nuligi ekzercon',
	'voctrain_Question'                                         => 'Demando',
	'voctrain_The_word_to_translate'                            => 'La vorto traduki',
	'voctrain_Answer'                                           => 'Respondo',
	'voctrain_logout'                                           => 'Elsaluti',
	'voctrain_Exercise_complete'                                => 'Ezkerco kompleta',
	'voctrain_Exercise_terminated'                              => 'Ekzerco estis haltita',
	'voctrain_User_name'                                        => 'Salutnomo',
	'voctrain_Password'                                         => 'Pasvorto',
	'voctrain_Login'                                            => 'Ensaluti',
	'voctrain_Create_new_user'                                  => 'Krei novan uzanton',
	'voctrain_Language'                                         => 'Lingvo',
	'voctrain_Log_in'                                           => 'Ensaluti',
);

/** Finnish (Suomi) */
$messages['fi'] = array(
	'voctrain_Languages' => 'Kielet',
);

/** Neapolitan (Nnapulitano) */
$messages['nap'] = array(
	'voctrain_Hello_World'                                                                          => 'SALUTAMMO!',
	'voctrain_Permission_Denied'                                                                    => "Nun tieni 'e diritte",
	'voctrain_try_again_'                                                                           => "vuò pruvà n'ata vota?",
	'voctrain_Action_unknown'                                                                       => 'Azzione nun è canasciuta',
	'voctrain_I_don_t_know_what_to_do_with_action_'                                                 => "Nun saccio c'aggio fà cu '%action'.",
	'voctrain_User_added'                                                                           => 'Utente aggiunto',
	'voctrain_Hello_username_welcome_to_the_omega_language_trainer'                                 => "Bemmenuto %username 'o Omega Language Trainer.",
	'voctrain_continue'                                                                             => 'va annanz',
	'voctrain_hello_place'                                                                          => 'salutammo %place',
	'voctrain_bye'                                                                                  => 'statte bbuono',
	'voctrain_Set_up_your_exercise'                                                                 => "Prugramma chillo che tiene 'a ffà",
	'voctrain_Number_of_questions'                                                                  => "Número 'e dumanne",
	'voctrain_Languages'                                                                            => 'Lengue',
	'voctrain_Please_specify_the_languages_you_want_to_test_in'                                     => "Nzerisce 'e lengue che vô mparà",
	'voctrain_eg_eng_for_English_deu_for_Deutch_German_'                                            => '(asempio: eng pe English (ngrese), deu per Deutsch (germanese))',
	'voctrain_Depending_on_your_test_set_some_combinations_might_work_better_than_others_'          => "Secunno 'e lengue ca vô mparà nce stanno coppie 'e lengue ca funzionano meglio 'e ll'ate.",
	'voctrain_Questions'                                                                            => 'Dumanne',
	'voctrain_Answers'                                                                              => 'Risposte',
	'voctrain_start_exercise'                                                                       => "Ncummincia 'e mparà",
	'voctrain_collection'                                                                           => 'collezzióne',
	'voctrain_ISO_639_3_format'                                                                     => 'Furmato ISO-639-3',
	'voctrain_There_are_questions_remaining_questions_remaining_out_of_a_total_of_questions_total_' => "Tieni 'e ffà ncora %questions_remaining dumanne 'e cumpressivamiente %questions_total dumanne.",
	'voctrain_Definition'                                                                           => 'Definizzióne',
	'voctrain_Dictionary_definition_to_help_you'                                                    => 'Definizzióne d&#39;&#39;o dizzionario pe te aiutà',
	'voctrain_Word'                                                                                 => 'Paróla',
	'voctrain_Please_type_your_answer_here'                                                         => "Nzerisce 'a respuosta toja ccà",
	'voctrain_submit_answer'                                                                        => "Cunferma 'a respuosta",
	'voctrain_peek'                                                                                 => "Guarda 'a respuosta",
	'voctrain_skip'                                                                                 => 'passa annanz',
	'voctrain_I_know_it_do_not_ask_again'                                                           => "'O cunosco/num me dummanà cciù.",
	'voctrain_abort_exercise'                                                                       => "firnisce 'e mparà",
	'voctrain_list_answers'                                                                         => "Fa vedè a lista 'e respuoste",
	'voctrain_Question'                                                                             => 'Dumanna',
	'voctrain_The_word_to_translate'                                                                => "'A pparola ca s'ha ddà traducere",
	'voctrain_Answer'                                                                               => 'Respuosta',
	'voctrain_one_of'                                                                               => "uno 'e",
	'voctrain_list_of_questions_and_answers'                                                        => "lista 'e dumanne e rispuoste",
	'voctrain_Answer_s_'                                                                            => 'Rispuosta/e',
	'voctrain_logout'                                                                               => 'jésce',
	'voctrain_Powered_by'                                                                           => "Cu suppuorto 'e",
	'voctrain_Omegawiki'                                                                            => 'OmegaWiki',
	'voctrain_Exercise_complete'                                                                    => 'Dumanne cumprete',
	'voctrain_Exercise_terminated'                                                                  => 'Dumanne fernute',
	'voctrain_Start_a_new_exercise'                                                                 => "Mpara n'ata vota cu ate dumanne",
	'voctrain_User_name'                                                                            => 'Nomme utente',
	'voctrain_Password'                                                                             => 'Parola cchiave',
	'voctrain_Login'                                                                                => 'Trase',
	'voctrain_Create_new_user'                                                                      => "Cria n'utente nuovo",
	'voctrain_Switch_language'                                                                      => 'Cagna lengua',
	'voctrain_Language'                                                                             => 'Lengua',
	'voctrain_Log_in'                                                                               => 'Trase',
	'voctrain_Omegawiki_vocabulary_trainer'                                                         => 'Prugramma pe mparà e vucabbole - OmegaWiki',
	'voctrain_Definitions'                                                                          => 'Definizzione',
	'voctrain_Could_not_create_new_user'                                                            => "Nun putevo crià n'utente nuovo",
	'voctrain_Type_a_username_and_optional_password_or_try_a_different_username_'                   => "Nzerisci nu nomme pe utente e na pparola cchiave (o ppruva 'e trasere cu nu nomme utente deverzo)",
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author GerardM
 * @author SPQRobin
 */
$messages['nl'] = array(
	'voctrain_Hello_World'                                                                          => 'HALLO WIKI!',
	'voctrain_Permission_Denied'                                                                    => 'Toestemming geweigerd',
	'voctrain_try_again_'                                                                           => 'opnieuw proberen?',
	'voctrain_Action_unknown'                                                                       => 'Actie onbekend',
	'voctrain_I_don_t_know_what_to_do_with_action_'                                                 => "Het is niet duidelijk wat te doen met '%action'.",
	'voctrain_User_added'                                                                           => 'Gebruiker toegevoegd',
	'voctrain_Hello_username_welcome_to_the_omega_language_trainer'                                 => 'Hallo, %username. Welkom bij de Omega-taaltrainer',
	'voctrain_continue'                                                                             => 'doorgaan',
	'voctrain_hello_place'                                                                          => 'hallo daar %place',
	'voctrain_bye'                                                                                  => 'tot ziens',
	'voctrain_Set_up_your_exercise'                                                                 => 'Uw oefening opstellen',
	'voctrain_Number_of_questions'                                                                  => 'Aantal vragen',
	'voctrain_Languages'                                                                            => 'Talen',
	'voctrain_Please_specify_the_languages_you_want_to_test_in'                                     => 'Geef alstublieft de talen op waarin u wilt oefenen',
	'voctrain_eg_eng_for_English_deu_for_Deutch_German_'                                            => '(bijvoorbeeld eng voor het Engels en deu voor Duits).',
	'voctrain_Depending_on_your_test_set_some_combinations_might_work_better_than_others_'          => 'Afhankelijk van uw testset werken sommige combinaties beter dan anderen.',
	'voctrain_Questions'                                                                            => 'Vragen',
	'voctrain_Answers'                                                                              => 'Antwoorden',
	'voctrain_start_exercise'                                                                       => 'oefening starten',
	'voctrain_collection'                                                                           => 'collectie',
	'voctrain_ISO_639_3_format'                                                                     => 'ISO-639-3 formaat',
	'voctrain_There_are_questions_remaining_questions_remaining_out_of_a_total_of_questions_total_' => 'Er zijn nog %questions_remaining vragen over, uit een totaal van %questions_total.',
	'voctrain_Definition'                                                                           => 'Definitie',
	'voctrain_Dictionary_definition_to_help_you'                                                    => 'Woordenboekdefinitie om u te helpen',
	'voctrain_Word'                                                                                 => 'Woord',
	'voctrain_Please_type_your_answer_here'                                                         => 'Geef hier uw antwoord in.',
	'voctrain_submit_answer'                                                                        => 'antwoord controleren',
	'voctrain_peek'                                                                                 => 'spieken',
	'voctrain_skip'                                                                                 => 'overslaan',
	'voctrain_I_know_it_do_not_ask_again'                                                           => 'Ik weet dit antwoord/niet nogmaals vragen',
	'voctrain_abort_exercise'                                                                       => 'Oefening afbreken',
	'voctrain_list_answers'                                                                         => 'antwoordlijst',
	'voctrain_Question'                                                                             => 'Vraag',
	'voctrain_The_word_to_translate'                                                                => 'Het te vertalen woord',
	'voctrain_Answer'                                                                               => 'Antwoord',
	'voctrain_one_of'                                                                               => 'een van',
	'voctrain_list_of_questions_and_answers'                                                        => 'lijst van vragen en antwoorden',
	'voctrain_Answer_s_'                                                                            => 'Antwoord(en)',
	'voctrain_logout'                                                                               => 'afmelden',
	'voctrain_Powered_by'                                                                           => 'Aangedreven door',
	'voctrain_Omegawiki'                                                                            => 'OmegaWiki',
	'voctrain_Exercise_complete'                                                                    => 'Oefening voltooid',
	'voctrain_Exercise_terminated'                                                                  => 'Oefening afgebroken',
	'voctrain_Start_a_new_exercise'                                                                 => 'Nieuwe oefening starten',
	'voctrain_User_name'                                                                            => 'Gebruikersnaam',
	'voctrain_Password'                                                                             => 'Wachtwoord',
	'voctrain_Login'                                                                                => 'Aanmelden',
	'voctrain_Create_new_user'                                                                      => 'Nieuwe gebruiker aanmaken',
	'voctrain_Switch_language'                                                                      => 'Taal wijzigen',
	'voctrain_Language'                                                                             => 'Taal',
	'voctrain_Log_in'                                                                               => 'Aanmelden',
	'voctrain_Omegawiki_vocabulary_trainer'                                                         => 'OmegaWiki woordenschattrainer',
	'voctrain_Definitions'                                                                          => 'Definities',
	'voctrain_Could_not_create_new_user'                                                            => 'Het was niet mogelijk een nieuwe gebruiker aan te maken',
	'voctrain_Type_a_username_and_optional_password_or_try_a_different_username_'                   => 'Geef een gebruikersnaam en wachtwoord in (optineel), of probeer een andere gebruikersnaam',
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'voctrain_Hello_World'                                          => 'ПРИВЕТ, ВИКИ!',
	'voctrain_Permission_Denied'                                    => 'Доступ запрещён',
	'voctrain_try_again_'                                           => 'попробовать ещё раз?',
	'voctrain_Action_unknown'                                       => 'Неизвестное действие',
	'voctrain_I_don_t_know_what_to_do_with_action_'                 => 'Я не знаю, что делать с «%action».',
	'voctrain_User_added'                                           => 'Участник добавлен',
	'voctrain_Hello_username_welcome_to_the_omega_language_trainer' => 'Привет, %username, добро пожаловать в программу обучения языкам Omega',
);

/** Swedish (Svenska)
 * @author M.M.S.
 */
$messages['sv'] = array(
	'voctrain_Hello_World'                               => 'HEJ WIKI!',
	'voctrain_Permission_Denied'                         => 'Åtkomst nekas',
	'voctrain_try_again_'                                => 'pröva igen?',
	'voctrain_User_added'                                => 'Användare tillagd',
	'voctrain_continue'                                  => 'fortsätt',
	'voctrain_bye'                                       => 'hej då',
	'voctrain_Number_of_questions'                       => 'Antal frågor',
	'voctrain_Languages'                                 => 'Språk',
	'voctrain_eg_eng_for_English_deu_for_Deutch_German_' => '(t.ex., eng för engelska, deu för tyska).',
	'voctrain_Questions'                                 => 'Frågor',
	'voctrain_Answers'                                   => 'Svar',
	'voctrain_Word'                                      => 'Ord',
	'voctrain_skip'                                      => 'hoppa över',
	'voctrain_Question'                                  => 'Fråga',
	'voctrain_Answer'                                    => 'Svar',
	'voctrain_one_of'                                    => 'en av',
	'voctrain_Answer_s_'                                 => 'Svar',
	'voctrain_logout'                                    => 'logga ut',
	'voctrain_User_name'                                 => 'Användarnamn',
	'voctrain_Password'                                  => 'Lösenord',
	'voctrain_Login'                                     => 'Logga in',
	'voctrain_Create_new_user'                           => 'Skapa ny användare',
	'voctrain_Switch_language'                           => 'Ändra språk',
	'voctrain_Language'                                  => 'Språk',
	'voctrain_Log_in'                                    => 'Logga in',
	'voctrain_Could_not_create_new_user'                 => 'Kunde inte skapa ny användare',
);

