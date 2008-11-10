<?php

/**
 * Translations of Tasks extension.
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$messages = array();

/** English
 * @author Magnus Manske
 */
$messages['en'] = array( 
		'tasks' => 'Tasks',
		'tasks_desc' => 'An extension to manage tasks',
		'tasks_tab' => 'Tasks',
		'tasks_title' => "Tasks for \"$1\"",
		'tasks_form_new' => "Create new task",
		'tasks_form_comment' => "Comment",
		'tasks_error1' => "Task was not created: there is already such a task!",
		'tasks_ok1' => "New task has been created!",
		'tasks_create_header' => "Create a new task",
		'tasks_existing_header' => "Existing tasks",
		'tasks_existing_table_header' => "Task|Dates|Initial comment|Assignment/Actions/Page",
		'tasks_noone' => "no one",
		'tasks_assign_me' => "Assign myself",
		'tasks_assign_to' => "Assign to",
		'tasks_unassign_me' => "Remove my assignment",
		'tasks_close' => "Close task",
		'tasks_wontfix' => "Won't fix",
		'tasks_delete' => "Delete",
		'tasks_no_task_delete_title' => "Not allowed",
		'tasks_no_task_delete_texe' => "You are not allowed to delete a task. Only admins can do that.",
		'tasks_action_delete' => "A task was deleted.",
		'tasks_task_was_deleted' => "The task was successfully deleted.",
		'tasks_reopen' => "Reopen task",
		'tasks_assignedto' => "Assigned to $1",
		'tasks_created_by' => "Created by $1",
		'tasks_discussion_page_link' => "Task discussion page",
		'tasks_closedby' => "Closed by $1",
		'tasks_assigned_myself_log' => "Self-assignment of task \"$1\"",
		'tasks_discussion_page_for' => "This task is for the page \"$1\". The list of all tasks for that page is $2.",
		'tasks_sidebar_title' => "Open tasks",
		'tasks_here' => "here",
		'tasks_returnto' => "You will be redirected now. If you have not been redirected in a few seconds, click $1.",
		'tasks_see_page_tasks' => "(tasks of this page)",
		'tasks_task_is_assigned' => "(assigned)",
		'tasks_plain_text_only' => "(plain text, 256 chars only)",
		'tasks_help_page' => "Tasks",
		'tasks_help_page_link' => "?",
		'tasks_help_separator' => "$2 | $1",
		'tasks_more_like_it' => "more",
		'tasks_task_types' => "1:cleanup:Cleanup|2:wikify:Wikify|3:rewrite:Rewrite|4:delete:Delete|5:create:Create|6:write:Write|7:check:Check",
		'tasks_significance_order' => "rewrite<delete",
		'tasks_creation_tasks' => "5,6",
		'tasks_event_on_creation' => "check",
		'tasks_event_on_creation_anon' => "check",
		'tasks_on_creation_comment' => "Automatic task, generated on article creation",
		'tasks_link_your_assignments' => "open assignments",
		'tasks_see_your_assignments' => "You currently have $1 open assignments. See your $2.",
		'tasks_my_assignments' => "Your current assignments",
		'tasks_table_header_page' => "Page",
		'tasks_you_have_no_assignments' => "You have no open assignments",
		'tasks_search_form_title' => "Search",
		'tasks_search_tasks' => "Tasks",
		'tasks_search_status' => "Status",
		'tasks_search_no_tasks_chosen_note' => "(No selection here will search all task types.)",
		'tasks_search_results' => "Search results",
		'tasks_previous' => "Previous",
		'tasks_next' => "Next",
		'tasks_sort' => "Sort",
		'tasks_ascending' => "Oldest first",
		'tasks_search_limit' => "10",
		'tasks_status_open' => "Open",
		'tasks_status_assigned' => "Assigned",
		'tasks_status_closed' => "Closed",
		'tasks_status_wontfix' => "Won't fix",
		'tasks_action_open' => "Task \"$1\" opened.",
		'tasks_action_assigned' => "Task \"$1\" assigned.",
		'tasks_action_closed' => "Task \"$1\" closed.",
		'tasks_action_wontfix' => "Won't fix task \"$1\".",
		'tasks_sign_delete' => "<b>It has been asked to delete this page!</b>",
		'tasks_logpage' => "Tasks log",
		'tasks_logpagetext' => 'This is a log of changes to tasks',
		'tasks_logentry' => 'For "[[$1]]"',
		'tog-show_task_comments' => 'Transclude task comments page.',
);

/** Message documentation (Message documentation)
 * @author Darth Kule
 */
$messages['qqq'] = array(
	'tasks_desc' => 'Short description of the Tasks extension, shown on [[Special:Version]].',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'tasks' => 'Задачи',
	'tasks_desc' => 'Разширение за управление на задачи',
	'tasks_tab' => 'Задачи',
	'tasks_title' => 'Задачи за „$1“',
	'tasks_form_new' => 'Създаване на нова задача',
	'tasks_form_comment' => 'Коментар',
	'tasks_error1' => 'Задачата не беше създадена: вече съществува такава задача!',
	'tasks_ok1' => 'Новата задача беше създадена!',
	'tasks_create_header' => 'Създаване на нова задача',
	'tasks_existing_header' => 'Съществуващи задачи',
	'tasks_close' => 'Затваряне на задачата',
	'tasks_delete' => 'Изтриване',
	'tasks_task_was_deleted' => 'Задачата беше изтрита успешно.',
	'tasks_created_by' => 'Създадена от $1',
	'tasks_discussion_page_link' => 'Беседа на задачата',
	'tasks_closedby' => 'Затворена от $1',
	'tasks_sidebar_title' => 'Отворени задачи',
	'tasks_here' => 'тук',
	'tasks_more_like_it' => 'още',
	'tasks_table_header_page' => 'Страница',
	'tasks_search_form_title' => 'Търсене',
	'tasks_search_tasks' => 'Задачи',
	'tasks_search_status' => 'Статут',
	'tasks_previous' => 'Предишна',
	'tasks_next' => 'Следваща',
	'tasks_sort' => 'Сортиране',
	'tasks_logpage' => 'Дневник на задачите',
	'tasks_logentry' => 'За „[[$1]]“',
);

/** German (Deutsch)
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'tasks_tab' => 'Aufgaben',
	'tasks_title' => 'Aufgaben für "$1"',
	'tasks_form_new' => 'Neue Aufgabe erstellen',
	'tasks_form_comment' => 'Kommentar',
	'tasks_error1' => 'Aufgabe wurde nicht erstellt: Es gibt bereits eine solche Aufgabe!',
	'tasks_ok1' => 'Neue Aufgabe wurde erstellt!',
	'tasks_create_header' => 'Neue Aufgabe erstellen',
	'tasks_existing_header' => 'Vorhandene Aufgaben',
	'tasks_existing_table_header' => 'Aufgabe|Datum|Kommentar|Zuordnung/Aktionen/Seite',
	'tasks_noone' => 'no one',
	'tasks_assign_me' => 'Selbst zuweisen',
	'tasks_assign_to' => 'Zuweisen an',
	'tasks_unassign_me' => 'Meine Zuordnung entfernen',
	'tasks_close' => 'Schliessen',
	'tasks_wontfix' => 'Ablehnen',
	'tasks_delete' => 'Löschen',
	'tasks_no_task_delete_title' => 'Nicht erlaubt',
	'tasks_no_task_delete_texe' => 'Du darfst keine Aufgabe löschen.
Nur Administratoren dürfen dies tun.',
	'tasks_action_delete' => 'Eine Aufgabe wurde gelöscht.',
	'tasks_task_was_deleted' => 'Die Aufgabe wurde erfolgreich gelöscht.',
	'tasks_reopen' => 'Aufgabe wieder eröffnen',
	'tasks_assignedto' => 'Zuweisen an $1',
	'tasks_created_by' => 'Erstellt von $1',
	'tasks_discussion_page_link' => 'Aufgaben-Diskussionsseite',
	'tasks_closedby' => 'Geschlossen von $1',
	'tasks_assigned_myself_log' => 'Selbstzuweisung von Aufgabe $1',
	'tasks_discussion_page_for' => 'Diese Aufgabe ist für die Seite "$1". Die Liste für alle Aufgaben für diese Seite ist $2.',
	'tasks_sidebar_title' => 'Aufgaben öffnen',
	'tasks_here' => 'hier',
	'tasks_returnto' => 'Du wirst nun weitergeleitet.
Falls du nicht in ein paar Sekunden weitergeleitet wirst, klicke $1.',
	'tasks_see_page_tasks' => '(Aufgaben dieser Seite)',
	'tasks_task_is_assigned' => '(zugewiesen)',
	'tasks_plain_text_only' => '(Klartext, nur 256 Zeichen)',
	'tasks_help_page' => 'Aufgaben',
	'tasks_help_page_link' => 'Hilfe',
	'tasks_more_like_it' => 'mehr',
	'tasks_task_types' => '1:cleanup:Säubern|2:wikify:Wikify|3:rewrite:Umschreiben|4:delete:Löschen|5:create:Erstellen|6:write:Schreiben|7:check:Prüfen',
	'tasks_event_on_creation' => 'prüfen',
	'tasks_event_on_creation_anon' => 'prüfen',
	'tasks_on_creation_comment' => 'Automatische Aufgabe, angelegt durch Seitenerstellung',
	'tasks_link_your_assignments' => 'offenen Aufgaben',
	'tasks_see_your_assignments' => 'Du hast $1 offene Aufgaben.
Siehe deine $2.',
	'tasks_my_assignments' => 'Deine aktuellen Aufgaben',
	'tasks_table_header_page' => 'Seite',
	'tasks_you_have_no_assignments' => 'Du hast keine offenen Aufgaben',
	'tasks_search_form_title' => 'Ausführen',
	'tasks_search_tasks' => 'Aufgaben',
	'tasks_search_status' => 'Status',
	'tasks_search_no_tasks_chosen_note' => '(keine Auswahl sucht in allen Aufgaben)',
	'tasks_search_results' => 'Suche Ergebnisse',
	'tasks_previous' => 'Vorherige',
	'tasks_next' => 'Nächster',
	'tasks_sort' => 'Sortieren',
	'tasks_ascending' => 'Älteste zuerst',
	'tasks_status_open' => 'Offen',
	'tasks_status_assigned' => 'Zugewiesen',
	'tasks_status_closed' => 'Geschlossen',
	'tasks_status_wontfix' => 'Abgelehnt',
	'tasks_action_open' => 'Aufgabe "$1" geöffnet.',
	'tasks_action_assigned' => 'Aufgabe "$1" zugewiesen.',
	'tasks_action_closed' => 'Aufgabe "$1" geschlosssen.',
	'tasks_action_wontfix' => 'Aufgabe "$1" abgelehnt.',
	'tasks_sign_delete' => '<b>Es wurde angefordert diese Seite zu löschen!</b>',
	'tasks_logpage' => 'Aufgaben-Logbuch',
	'tasks_logpagetext' => 'Dieses Logbuch protokolliert Änderungen an Aufgaben.',
	'tasks_logentry' => 'für „[[$1]]“',
	'tog-show_task_comments' => 'Aufgaben-Diskussionsseite einbinden.',
);

/** German (formal address) (Deutsch (Sie-Form)) */
$messages['de-formal'] = array(
	'tasks_no_task_delete_texe' => 'Sie dürfen keine Aufgabe löschen. Nur Administratoren dürfen dies tun.',
	'tasks_returnto' => 'Sie werden nun weitergeleitet.
Falls Sie nicht in ein paar Sekunden weitergeleitet wurden, klicken Sie $1.',
	'tasks_see_your_assignments' => 'Sie haben $1 offene Aufgaben. Siehe Ihre $2.',
	'tasks_my_assignments' => 'Ihre aktuellen Aufgaben',
	'tasks_you_have_no_assignments' => 'Sie haben keine offenen Aufgaben',
);

/** Finnish (Suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'tasks' => 'Tehtävät',
	'tasks_tab' => 'Tehtävät',
	'tasks_delete' => 'Poista',
	'tasks_see_page_tasks' => '(tämän sivun tehtävät)',
	'tasks_table_header_page' => 'Sivu',
);

/** French (Français)
 * @author Grondin
 * @author Korrigan
 */
$messages['fr'] = array(
	'tasks' => 'Tâches',
	'tasks_desc' => 'Une extension servant à gérer les tâches à faire',
	'tasks_tab' => 'Tâches',
	'tasks_title' => 'Tâches pour « $1 »',
	'tasks_form_new' => 'Créer tâche',
	'tasks_form_comment' => 'Commentaire',
	'tasks_error1' => 'Tâche non créée : il existe déjà une tâche de ce type !',
	'tasks_ok1' => 'Nouvelle tâche créée !',
	'tasks_create_header' => 'Créer une nouvelle tâche',
	'tasks_existing_header' => 'Tâches existantes',
	'tasks_existing_table_header' => 'Tâche|Dates|Commentaire|Assignement/Actions/Page',
	'tasks_noone' => 'aucune',
	'tasks_assign_me' => 'Me l’assigner',
	'tasks_assign_to' => 'Assigner à',
	'tasks_unassign_me' => 'Me désassigner',
	'tasks_close' => 'Clôturer',
	'tasks_wontfix' => 'Ne sera pas réparée',
	'tasks_delete' => 'Supprimer',
	'tasks_no_task_delete_title' => 'Non autorisé',
	'tasks_no_task_delete_texe' => "Vous n'avez pas le droit de supprimer une tâche. Seuls les administrateurs peuvent le faire.",
	'tasks_action_delete' => 'Une tâche a été supprimée.',
	'tasks_task_was_deleted' => 'La tâche a été supprimée avec succès.',
	'tasks_reopen' => 'Réouvrir',
	'tasks_assignedto' => 'Assignée à $1',
	'tasks_created_by' => 'Créée par $1',
	'tasks_discussion_page_link' => 'Discuter de la tâche',
	'tasks_closedby' => 'Fermée par $1',
	'tasks_assigned_myself_log' => 'Auto assignement de la tâche « $1 »',
	'tasks_discussion_page_for' => 'Cette tâche est pour la page « $1 ». La liste de toutes les tâches de cette page est $2.',
	'tasks_sidebar_title' => 'Tâches en cours',
	'tasks_here' => 'ici',
	'tasks_returnto' => 'Vous allez être redirigé maintenant. Si vous ne l’êtes pas, cliquez $1.',
	'tasks_see_page_tasks' => '(tâches de la page)',
	'tasks_task_is_assigned' => '(assignée)',
	'tasks_plain_text_only' => '(texte brut seulement)',
	'tasks_help_page' => 'Tâches',
	'tasks_help_page_link' => '?',
	'tasks_more_like_it' => 'plus',
	'tasks_task_types' => '1:cleanup:Cleanup|2:wikify:Wikify|3:rewrite:Rewrite|4:delete:Delete|5:create:Create|6:write:Write',
	'tasks_significance_order' => 'réécrire<supprimer',
	'tasks_event_on_creation' => 'vérifier',
	'tasks_event_on_creation_anon' => 'vérifier',
	'tasks_on_creation_comment' => "Tâche automatique, créée lors de la création de l'article",
	'tasks_link_your_assignments' => 'distributions ouvertes',
	'tasks_see_your_assignments' => 'Vous avez actuellement $1 tâches assignées. Voyez vos $2.',
	'tasks_my_assignments' => 'Vos assignements en cours',
	'tasks_table_header_page' => 'Page',
	'tasks_you_have_no_assignments' => 'Vous n’avez aucune tâche',
	'tasks_search_form_title' => 'Chercher',
	'tasks_search_tasks' => 'Tâches',
	'tasks_search_status' => 'Statut',
	'tasks_search_no_tasks_chosen_note' => '(Aucune sélection, recherche de tous types de tâches.)',
	'tasks_search_results' => 'Résultats de recherche',
	'tasks_previous' => 'Précédent',
	'tasks_next' => 'Suivant',
	'tasks_sort' => 'Trier',
	'tasks_ascending' => 'Plus anciennes d’abord',
	'tasks_status_open' => 'Ouverte',
	'tasks_status_assigned' => 'Assignée',
	'tasks_status_closed' => 'Fermée',
	'tasks_status_wontfix' => 'Ne sera pas fait',
	'tasks_action_open' => 'Tâche « $1 » ouverte.',
	'tasks_action_assigned' => 'Tâche « $1 » assignée.',
	'tasks_action_closed' => 'Tâche « $1 » fermée.',
	'tasks_action_wontfix' => 'Indiquer que la tâche « $1 » ne sera pas faite.',
	'tasks_sign_delete' => '<b>Cette page a été proposée à la suppression !</b>',
	'tasks_logpage' => 'Historique des tâches',
	'tasks_logpagetext' => 'Ceci est un historique des changements dans les tâches',
	'tasks_logentry' => 'Pour « [[$1]] »',
	'tog-show_task_comments' => 'Voir la page de commentaires à propos des tâches.',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'tasks' => 'Tarefas',
	'tasks_tab' => 'Tarefas',
	'tasks_title' => 'Tarefas para "$1"',
	'tasks_form_new' => 'Crear unha tarefa nova',
	'tasks_form_comment' => 'Comentario',
	'tasks_ok1' => 'A nova tarefa foi creada!',
	'tasks_create_header' => 'Crear unha tarefa nova',
	'tasks_existing_header' => 'Tarefas existentes',
	'tasks_noone' => 'ningunha',
	'tasks_assign_to' => 'Asignada a',
	'tasks_unassign_me' => 'Eliminar o meu traballo',
	'tasks_close' => 'Pechar a tarefa',
	'tasks_wontfix' => 'Non será arranxada',
	'tasks_delete' => 'Borrar',
	'tasks_reopen' => 'Reabrir a tarefa',
	'tasks_closedby' => 'Pechada por $1',
	'tasks_sidebar_title' => 'Tarefas abertas',
	'tasks_here' => 'aquí',
	'tasks_see_page_tasks' => '(tarefas desta páxina)',
	'tasks_task_is_assigned' => '(asignada)',
	'tasks_help_page' => 'Tarefas',
	'tasks_more_like_it' => 'máis',
	'tasks_event_on_creation' => 'comprobar',
	'tasks_event_on_creation_anon' => 'comprobar',
	'tasks_table_header_page' => 'Páxina',
	'tasks_search_form_title' => 'Procurar',
	'tasks_search_tasks' => 'Tarefas',
	'tasks_search_status' => 'Status',
	'tasks_search_results' => 'Resultados da procura',
	'tasks_previous' => 'Anterior',
	'tasks_next' => 'Seguinte',
	'tasks_sort' => 'Ordenar',
	'tasks_ascending' => 'As máis vellas primeiro',
	'tasks_status_open' => 'Aberta',
	'tasks_status_assigned' => 'Asignada',
	'tasks_status_closed' => 'Pechada',
	'tasks_status_wontfix' => 'Non será arranxada',
	'tasks_logpage' => 'Rexistro de tarefas',
	'tasks_logentry' => 'De "[[$1]]"',
);

/** Italian (Italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'tasks' => 'Attività',
	'tasks_desc' => "Un'estensione per gestire attività",
	'tasks_tab' => 'Attività',
	'tasks_title' => 'Attività per "$1"',
	'tasks_form_new' => 'Crea attività',
	'tasks_form_comment' => 'Commento',
	'tasks_error1' => "Impossibile creare l'attività (attività già esistente).",
	'tasks_ok1' => 'Attività creata',
	'tasks_create_header' => 'Crea una nuova attività',
	'tasks_existing_header' => 'Attività esistenti',
	'tasks_existing_table_header' => 'Attività|Date|Commento iniziale|Assegnazione/Azioni/Pagina',
	'tasks_noone' => 'nessuno',
	'tasks_assign_me' => 'Assegna a me stesso',
	'tasks_assign_to' => 'Assegna a',
	'tasks_unassign_me' => 'Elimina assegnazione',
	'tasks_close' => 'Chiudi attività',
	'tasks_wontfix' => 'Ignora',
	'tasks_delete' => 'Elimina',
	'tasks_no_task_delete_title' => 'Operazione non consentita',
	'tasks_no_task_delete_texe' => "L'eliminazione delle attività è riservata ai soli amministratori.",
	'tasks_action_delete' => 'Attività eliminata.',
	'tasks_task_was_deleted' => "L'attività è stata eliminata correttamente.",
	'tasks_reopen' => 'Riapri attività',
	'tasks_assignedto' => 'Assegnata a $1',
	'tasks_created_by' => 'Creata da $1',
	'tasks_discussion_page_link' => "Pagina di discussione dell'attività",
	'tasks_closedby' => 'Chiusa da $1',
	'tasks_assigned_myself_log' => 'Autoassegnazione dell\'attività "$1"',
	'tasks_discussion_page_for' => 'Questa attività è relativa alla pagina "$1". L\'elenco di tutte le attività relative alla pagina è $2.',
	'tasks_sidebar_title' => 'Attività aperte',
	'tasks_here' => 'qui',
	'tasks_returnto' => 'Reindirizzamento in corso. Se il reindirizzamento non viene eseguito entro pochi secondi, fare clic $1.',
	'tasks_see_page_tasks' => '(attività per questa pagina)',
	'tasks_task_is_assigned' => '(assegnata)',
	'tasks_plain_text_only' => '(solo testo, massimo 256 caratteri)',
	'tasks_help_page' => 'Attività',
	'tasks_help_page_link' => '?',
	'tasks_more_like_it' => 'altre',
	'tasks_task_types' => '1:cleanup:Aiutare|2:wikify:Wikificare|3:rewrite:Riscrivere|4:delete:Cancellare|5:create:Creare|6:write:Scrivere|7:check:Verificare',
	'tasks_significance_order' => 'rewrite<delete',
	'tasks_event_on_creation' => 'check',
	'tasks_event_on_creation_anon' => 'check',
	'tasks_on_creation_comment' => 'Attività generata automaticamente alla creazione della voce',
	'tasks_link_your_assignments' => 'attività assegnate aperte',
	'tasks_see_your_assignments' => 'Attività assegnate aperte in questo momento: $1. Si veda $2.',
	'tasks_my_assignments' => 'Attività assegnate',
	'tasks_table_header_page' => 'Pagina',
	'tasks_you_have_no_assignments' => 'Nessuna attività assegnata aperta',
	'tasks_search_form_title' => 'Ricerca',
	'tasks_search_tasks' => 'Attività',
	'tasks_search_status' => 'Stato',
	'tasks_search_no_tasks_chosen_note' => '(nessuna selezione = cerca tutte le attività)',
	'tasks_search_results' => 'Risultati della ricerca',
	'tasks_previous' => 'Precedenti',
	'tasks_next' => 'Successivi',
	'tasks_sort' => 'Ordine',
	'tasks_ascending' => 'Cronologico',
	'tasks_status_open' => 'Aperta',
	'tasks_status_assigned' => 'Assegnata',
	'tasks_status_closed' => 'Chiusa',
	'tasks_status_wontfix' => 'Ignorata',
	'tasks_action_open' => 'Attività "$1" aperta.',
	'tasks_action_assigned' => 'Attività "$1" assegnata.',
	'tasks_action_closed' => 'Attività "$1" chiusa.',
	'tasks_action_wontfix' => 'Attività "$1\\ ignorata.',
	'tasks_sign_delete' => '<b>Per questa pagina è stata richiesta la cancellazione.</b>',
	'tasks_logpage' => 'Registro attività',
	'tasks_logpagetext' => 'Registro delle modifiche alle attività',
	'tasks_logentry' => 'Per "[[$1]]"',
	'tog-show_task_comments' => "Inclusione della pagina dei commenti dell'attività",
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 */
$messages['km'] = array(
	'tasks_form_comment' => 'យោបល់',
	'tasks_delete' => 'លុប',
	'tasks_created_by' => 'បានបង្កើតដោយ $1',
	'tasks_closedby' => 'បានបិទដោយ $1',
	'tasks_here' => 'ទីនេះ',
	'tasks_more_like_it' => 'បន្ថែម',
	'tasks_table_header_page' => 'ទំព័រ',
	'tasks_search_form_title' => 'ស្វែងរក',
	'tasks_search_results' => 'លទ្ធផលស្វែងរក',
	'tasks_previous' => 'មុន',
	'tasks_next' => 'បន្ទាប់',
	'tasks_status_open' => 'បើក',
	'tasks_status_closed' => 'បានបិទ',
	'tasks_logentry' => 'សំរាប់"[[$1]]"',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'tasks' => 'Aufgaben',
	'tasks_desc' => "Eng Erweiderung fir Aufgaben z'administréieren",
	'tasks_tab' => 'Aufgaben',
	'tasks_title' => 'Aufgabe fir "$1"',
	'tasks_form_comment' => 'Bemierkung',
	'tasks_noone' => 'keen',
	'tasks_close' => 'Aufgab ofschléissen',
	'tasks_delete' => 'Läschen',
	'tasks_no_task_delete_title' => 'Net erlaabt',
	'tasks_no_task_delete_texe' => 'Dir Dàerft keng Aufgab läschen. Nëmmen Administrateuren kënnen dat maachen.',
	'tasks_action_delete' => 'Eng Aufgab gouf geläscht.',
	'tasks_task_was_deleted' => "D'Aufgab gouf geläscht.",
	'tasks_reopen' => 'Aufgab nees opmaachen',
	'tasks_created_by' => 'Vum $1 gemaach',
	'tasks_discussion_page_link' => 'Diskussiounssäit vun der Aufgab',
	'tasks_closedby' => 'Zougemaach vum $1',
	'tasks_here' => 'hei',
	'tasks_returnto' => 'Dir gitt elo virugeleed. Wann Dir net no e puer Sekonnen virugeleed sidd, da clickt $1.',
	'tasks_see_page_tasks' => '(Aufgabe vun dëser Säit)',
	'tasks_help_page' => 'Aufgaben',
	'tasks_more_like_it' => 'méi',
	'tasks_significance_order' => 'Iwwerschreiwen<läschen',
	'tasks_event_on_creation' => 'nokucken',
	'tasks_event_on_creation_anon' => 'nokucken',
	'tasks_table_header_page' => 'Säit',
	'tasks_search_form_title' => 'Sichen',
	'tasks_search_tasks' => 'Aufgaben',
	'tasks_previous' => 'Vireg',
	'tasks_sort' => 'Sortéieren',
	'tasks_status_open' => 'Op',
	'tasks_status_closed' => 'Zou',
	'tasks_action_open' => 'Aufgab "$1" opgemaach.',
	'tasks_action_closed' => 'Aufgab "$1" ass fäerdeg.',
	'tasks_sign_delete' => '<b>Et gouf gefrot fir dëse Säit ze läschen</b>',
	'tasks_logpage' => 'Lëscht vun den Aufgaben',
	'tasks_logentry' => 'Fir [[$1}}',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'tasks' => 'Taken',
	'tasks_desc' => 'Een uitbreiding om taken te beheren',
	'tasks_tab' => 'Taken',
	'tasks_title' => 'Taken voor "$1"',
	'tasks_form_new' => 'Nieuwe taak aanmaken',
	'tasks_form_comment' => 'Opmerking',
	'tasks_error1' => 'Taak is niet aangemaakt; er was al een dergelijke taak!',
	'tasks_ok1' => 'Nieuw taak is aangemaakt!',
	'tasks_create_header' => 'Nieuwe taak aanmaken',
	'tasks_existing_header' => 'Bestaande taken',
	'tasks_existing_table_header' => 'Taak|Datums|Eerste opmerking|Toewijzing/Acties/Pagina',
	'tasks_noone' => 'niemand',
	'tasks_assign_me' => 'Toewijzen aan mezelf',
	'tasks_assign_to' => 'Toewijzen aan',
	'tasks_unassign_me' => 'Mijn toewijzing verwijderen',
	'tasks_close' => 'Taak sluiten',
	'tasks_wontfix' => 'Wordt niet opgelost',
	'tasks_delete' => 'Verwijderen',
	'tasks_no_task_delete_title' => 'Niet toegestaan',
	'tasks_no_task_delete_texe' => 'U kunt geen taken verwijderen. Alleen beheerders kunnen dat.',
	'tasks_action_delete' => 'Er is een taak verwijderd.',
	'tasks_task_was_deleted' => 'De taak is verwijderd.',
	'tasks_reopen' => 'Taak heropenen',
	'tasks_assignedto' => 'Toegewezen aan $1',
	'tasks_created_by' => 'Aangemaakt door $1',
	'tasks_discussion_page_link' => 'Overlegpagina taak',
	'tasks_closedby' => 'Gesloten door $1',
	'tasks_assigned_myself_log' => 'Zelftoewijzing van taak "$1"',
	'tasks_discussion_page_for' => 'Deze taak is voor de pagina "$1". Het overzicht van alle taken voor die pagina is $2.',
	'tasks_sidebar_title' => 'Open taken',
	'tasks_here' => 'hier',
	'tasks_returnto' => 'U wordt nu doorverwezen. Als u over een aantal seconden niet bent doorverwezen, klik dan $1.',
	'tasks_see_page_tasks' => '(taken van deze pagina)',
	'tasks_task_is_assigned' => '(toegewezen)',
	'tasks_plain_text_only' => '(platte tekst, maximaal 256 tekens)',
	'tasks_help_page' => 'Taken',
	'tasks_help_page_link' => '?',
	'tasks_more_like_it' => 'meer',
	'tasks_task_types' => '1:cleanup:Opschonen|2:wikify:Wikificatie|3:rewrite:Herschrijven|4:delete:Verwijderen|5:create:Aanmaken|6:write:Schrijven|7:check:Controleren',
	'tasks_significance_order' => 'herschrijven<verwijderen',
	'tasks_creation_tasks' => '5,6',
	'tasks_event_on_creation' => 'controleren',
	'tasks_event_on_creation_anon' => 'controleren',
	'tasks_on_creation_comment' => 'Automatische taak, gemaakt bij het aanmaken van de pagina',
	'tasks_link_your_assignments' => 'toewijzingen openen',
	'tasks_see_your_assignments' => 'U hebt op het moment $1 open toewijzingen.
Zie uw $2.',
	'tasks_my_assignments' => 'Uw huidige toewijzingen',
	'tasks_table_header_page' => 'Pagina',
	'tasks_you_have_no_assignments' => 'U hebt geen open toewijzingen',
	'tasks_search_form_title' => 'Zoeken',
	'tasks_search_tasks' => 'Taken',
	'tasks_search_status' => 'Status',
	'tasks_search_no_tasks_chosen_note' => '(Bij geen selectie hier worden alle taaktypen doorzocht.)',
	'tasks_search_results' => 'Zoekresulaten',
	'tasks_previous' => 'Vorige',
	'tasks_next' => 'Volgende',
	'tasks_sort' => 'Sorteren',
	'tasks_ascending' => 'Oudere eerst',
	'tasks_status_open' => 'Open',
	'tasks_status_assigned' => 'Toegewezen',
	'tasks_status_closed' => 'Gesloten',
	'tasks_status_wontfix' => 'Wordt niet opgelost',
	'tasks_action_open' => 'Taak "$1" geopend.',
	'tasks_action_assigned' => 'Taak "$1" toegewezen.',
	'tasks_action_closed' => 'Taak "$1" gesloten.',
	'tasks_action_wontfix' => 'Taak "$1" wordt niet opgelost.',
	'tasks_sign_delete' => '<b>Er is een verzoek tot verwijdering van deze pagina ingediend!</b>',
	'tasks_logpage' => 'Takenlogboek',
	'tasks_logpagetext' => 'Hieronder staan alle wijzigingen aan taken',
	'tasks_logentry' => 'Voor "[[$1]]"',
	'tog-show_task_comments' => 'Opmerkingenpagina voor taak transcluderen.',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'tasks' => 'Prètzfaches',
	'tasks_desc' => 'Una extension que servís a gerir los prètzfaches de far',
	'tasks_tab' => 'Prètzfaches',
	'tasks_title' => 'Prètzfaches per « $1 »',
	'tasks_form_new' => 'Crear un prètzfach novèl',
	'tasks_form_comment' => 'Comentari',
	'tasks_error1' => "Prètfech pas creat : ja existís un prètfach d'aqueste tipe !",
	'tasks_ok1' => 'Prètzfach novèl creat !',
	'tasks_create_header' => 'Crear un prètzfach novèl',
	'tasks_existing_header' => 'Prètzfaches existents',
	'tasks_existing_table_header' => 'Prètfach|Datas|Comentari|Assignament/Accions/Pagina',
	'tasks_noone' => 'cap',
	'tasks_assign_me' => 'Me l’assignar',
	'tasks_assign_to' => 'Assignar a',
	'tasks_unassign_me' => 'Me desassignar',
	'tasks_close' => 'Clausurar',
	'tasks_wontfix' => 'Serà pas reparat',
	'tasks_delete' => 'Suprimir',
	'tasks_no_task_delete_title' => 'Pas autorizat',
	'tasks_no_task_delete_texe' => 'Avètz pas lo drech de suprimir un prètzfach. Sols los administrators o pòdon far.',
	'tasks_action_delete' => 'Un prètzfach es estat suprimit.',
	'tasks_task_was_deleted' => 'Lo prètzfach es estat suprimit amb succès.',
	'tasks_reopen' => 'Tornar dobrir',
	'tasks_assignedto' => 'Assignat a $1',
	'tasks_created_by' => 'Creat per $1',
	'tasks_discussion_page_link' => 'Discutir del prètzfach',
	'tasks_closedby' => 'Tampat per $1',
	'tasks_assigned_myself_log' => 'Auto assignament del prètzfach « $1 »',
	'tasks_discussion_page_for' => "Aqueste prètzfach es per la pagina « $1 ». La lista de totes los prètzfaches d'aquesta pagina es $2.",
	'tasks_sidebar_title' => 'Prètzfaches en cors',
	'tasks_here' => 'aicí',
	'tasks_returnto' => "Ara anatz èsser redirigit(ida). S'o sètz pas, clicatz $1.",
	'tasks_see_page_tasks' => '(prètzfaches de la pagina)',
	'tasks_task_is_assigned' => '(assignat)',
	'tasks_plain_text_only' => '(tèxt brut solament)',
	'tasks_help_page' => 'Prètzfaches',
	'tasks_help_page_link' => '?',
	'tasks_help_separator' => '$2 | $1',
	'tasks_more_like_it' => 'mai',
	'tasks_task_types' => '1:cleanup:Cleanup|2:wikify:Wikify|3:rewrite:Rewrite|4:delete:Delete|5:create:Create|6:write:Write',
	'tasks_significance_order' => 'tornar escriure<suprimir',
	'tasks_creation_tasks' => '5,6',
	'tasks_event_on_creation' => 'verificar',
	'tasks_event_on_creation_anon' => 'verificar',
	'tasks_on_creation_comment' => "Prètzfach automatic, creat al moment de la creacion de l'article",
	'tasks_link_your_assignments' => 'distribucions dobertas',
	'tasks_see_your_assignments' => 'Actualament, avètz $1 prètzfaches assignats. Vejatz vòstres $2.',
	'tasks_my_assignments' => 'Vòstres assignaments en cors',
	'tasks_table_header_page' => 'Pagina',
	'tasks_you_have_no_assignments' => 'Avètz pas cap de prètzfach',
	'tasks_search_form_title' => 'Cercar',
	'tasks_search_tasks' => 'Prètzfaches',
	'tasks_search_status' => 'Estatut',
	'tasks_search_no_tasks_chosen_note' => '(Pas cap de seleccion, recèrca de totes los tipes de prètzfaches.)',
	'tasks_search_results' => 'Resultats de recèrca',
	'tasks_previous' => 'Precedent',
	'tasks_next' => 'Seguent',
	'tasks_sort' => 'Triar',
	'tasks_ascending' => 'Mai ancians d’en primièr',
	'tasks_status_open' => 'Dobert',
	'tasks_status_assigned' => 'Assignat',
	'tasks_status_closed' => 'Tampat',
	'tasks_status_wontfix' => 'Serà pas fach',
	'tasks_action_open' => 'Prètzfach « $1 » dobert.',
	'tasks_action_assigned' => 'Prètzfach « $1 » assignat.',
	'tasks_action_closed' => 'Prètzfach « $1 » tampat.',
	'tasks_action_wontfix' => 'Indicar que lo prètzfach « $1 » serà pas fach.',
	'tasks_sign_delete' => '<b>Aquesta pagina es estada prepausada a la supression !</b>',
	'tasks_logpage' => 'Istoric dels prètzfaches',
	'tasks_logpagetext' => 'Aquò es un istoric dels cambiaments dins los prètzfaches',
	'tasks_logentry' => 'Per « [[$1]] »',
	'tog-show_task_comments' => 'Veire la pagina de comentaris a prepaus dels prètzfaches.',
);

/** Polish (Polski)
 * @author Leinad
 * @author Maikking
 */
$messages['pl'] = array(
	'tasks' => 'Zadania',
	'tasks_desc' => 'Rozszerzenie do zarządzania zadaniami',
	'tasks_tab' => 'Zadania',
	'tasks_title' => 'Zadania dla „$1”',
	'tasks_form_new' => 'Utwórz nowe zadanie',
	'tasks_form_comment' => 'Komentarz',
	'tasks_error1' => 'Zadanie nie zostało utworzone: już takie istnieje!',
	'tasks_ok1' => 'Nowe zadanie zostało utworzone!',
	'tasks_create_header' => 'Utwórz nowe zadanie',
	'tasks_existing_header' => 'Istniejące zadania',
	'tasks_delete' => 'Usuń',
	'tasks_action_delete' => 'Zadanie zostało usunięte.',
	'tasks_sidebar_title' => 'Rozpoczęte zadania',
	'tasks_here' => 'tutaj',
	'tasks_plain_text_only' => '(tylko tekst, maksymalnie 256 znaków)',
	'tasks_help_page' => 'Zadania',
	'tasks_more_like_it' => 'więcej',
	'tasks_event_on_creation' => 'sprawdź',
	'tasks_event_on_creation_anon' => 'sprawdź',
	'tasks_on_creation_comment' => 'Zadanie wygenerowane automatycznie przez utworzenie artykułu',
	'tasks_search_form_title' => 'Szukaj',
	'tasks_search_tasks' => 'Zadania',
	'tasks_search_status' => 'Status',
	'tasks_search_results' => 'Wyniki wyszukiwania',
	'tasks_previous' => 'Poprzednie',
	'tasks_next' => 'Następne',
	'tasks_sort' => 'Sortuj',
	'tasks_ascending' => 'Od najstarszych',
	'tasks_status_open' => 'Otwórz',
);

/** Russian (Русский) */
$messages['ru'] = array(
	'tasks_tab' => 'Задачи',
	'tasks_title' => 'Задачи для «$1»',
	'tasks_form_new' => 'Установить новую задачу',
	'tasks_form_comment' => 'Примечание',
	'tasks_error1' => 'Задача не была установлена: уже существует такая задача!',
	'tasks_ok1' => 'Была установлена новая задача!',
	'tasks_create_header' => 'Создание новой задачи',
	'tasks_existing_header' => 'Существующие задачи',
	'tasks_existing_table_header' => 'Задача|Даты|Первоначальное примечание|Назначен/Действия/Страница',
	'tasks_noone' => 'никто',
	'tasks_assign_me' => 'Взять задачу себе',
	'tasks_assign_to' => 'Назначить участнику',
	'tasks_unassign_me' => 'Убрать моё назначение',
	'tasks_close' => 'Закрыть задачу',
	'tasks_wontfix' => 'Не будет решаться',
	'tasks_delete' => 'Удалить',
	'tasks_no_task_delete_title' => 'Нет доступа',
	'tasks_no_task_delete_texe' => 'Вам не разрешено удалять задания. Это могут делать только администраторы.',
	'tasks_action_delete' => 'Задание было удалено.',
	'tasks_task_was_deleted' => 'Заданиче было успешно удалено.',
	'tasks_reopen' => 'Открыть задачу вновь',
	'tasks_assignedto' => 'Назначено участнику $1',
	'tasks_created_by' => 'Создано участником $1',
	'tasks_discussion_page_link' => 'страница обсуждение задачи',
	'tasks_closedby' => 'Закрыта участником $1',
	'tasks_assigned_myself_log' => 'Самоназначение на задачу «$1»',
	'tasks_discussion_page_for' => 'Это задача для страницы «$1». Список всех задач для этой страницы $2.',
	'tasks_sidebar_title' => 'Открытые задачи',
	'tasks_here' => 'здесь',
	'tasks_returnto' => 'Сейчас вы будите перенаправлены. Если вы не были перенаправлены в течение нескольких секунд, нажмите $1.',
	'tasks_see_page_tasks' => '(задачи этой страницы)',
	'tasks_task_is_assigned' => '(назначена)',
	'tasks_plain_text_only' => '(простой текст, не более 256 символов)',
	'tasks_help_page' => 'Задачи',
	'tasks_help_page_link' => '?',
	'tasks_more_like_it' => 'далее',
	'tasks_task_types' => '1:cleanup:Почистить|2:wikify:Викифицировать|3:rewrite:Переписать|4:delete:Удалить|5:create:Создать|6:write:Написать|7:check:Проверить',
	'tasks_significance_order' => 'rewrite<delete',
	'tasks_event_on_creation' => 'проверить',
	'tasks_event_on_creation_anon' => 'проверить',
	'tasks_on_creation_comment' => 'Автоматическая задача, установлена после создания статьи',
	'tasks_link_your_assignments' => 'текущие назначения',
	'tasks_see_your_assignments' => 'У вас сейчас $1 назначений. См. ваш $2.',
	'tasks_my_assignments' => 'Ваши текущие назначений',
	'tasks_table_header_page' => 'Страница',
	'tasks_you_have_no_assignments' => 'У вас нет текущих назначений',
	'tasks_search_form_title' => 'Поиск',
	'tasks_search_tasks' => 'Задачи',
	'tasks_search_status' => 'Статус',
	'tasks_search_no_tasks_chosen_note' => '(если здесь ничего не выбрано, то будут искаться все типы задач)',
	'tasks_search_results' => 'Результаты поиска',
	'tasks_previous' => 'назад',
	'tasks_next' => 'Далее',
	'tasks_sort' => 'Сортировка',
	'tasks_ascending' => 'Старые первыми',
	'tasks_status_open' => 'Открыта',
	'tasks_status_assigned' => 'Назначена',
	'tasks_status_closed' => 'Закрыта',
	'tasks_status_wontfix' => 'Не будет решаться',
	'tasks_action_open' => 'Открыта задача «$1».',
	'tasks_action_assigned' => 'Задача «$1» назначена.',
	'tasks_action_closed' => 'Закрыта задача «$1».',
	'tasks_action_wontfix' => 'Задача «$1» не будет решаться.',
	'tasks_sign_delete' => '<b>Был запрос на удаление этой страницы!</b>',
	'tasks_logpage' => 'Журнал задач',
	'tasks_logpagetext' => 'Это журнал изменения задач',
	'tasks_logentry' => 'Для «[[$1]]»',
	'tog-show_task_comments' => 'Включить страницу примечаний задачи.',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'tasks' => 'Úlohy',
	'tasks_desc' => 'Rozšírenie na správu úloh',
	'tasks_tab' => 'Úlohy',
	'tasks_title' => 'Úlohy pre "$1"',
	'tasks_form_new' => 'Vytvoriť novú úlohu',
	'tasks_form_comment' => 'Komentár',
	'tasks_error1' => 'Úloha nebola vytvorená: taká úloha už existuje!',
	'tasks_ok1' => 'Nová úloha bola vytvorená!',
	'tasks_create_header' => 'Vytvoriť novú úlohu',
	'tasks_existing_header' => 'Existujúce úlohy',
	'tasks_existing_table_header' => 'Úlohy|Dátumy|Úvodný komentár|Pridelenie/Činnosti/Stránka',
	'tasks_noone' => 'nikto',
	'tasks_assign_me' => 'Prideliť sebe',
	'tasks_assign_to' => 'Prideliť pre',
	'tasks_unassign_me' => 'Odstrániť pridelenie mne',
	'tasks_close' => 'Zatvoriť úlohu',
	'tasks_wontfix' => 'Neopravíme',
	'tasks_delete' => 'Zmazať',
	'tasks_no_task_delete_title' => 'Nepovolené',
	'tasks_no_task_delete_texe' => 'Nemáte povolenie zmazať úlohu. To môžu iba správci.',
	'tasks_action_delete' => 'Úloha bola zmazaná.',
	'tasks_task_was_deleted' => 'Úloha bola úspešne zmazaná.',
	'tasks_reopen' => 'Znovuotvoriť úlohu',
	'tasks_assignedto' => 'Pridelené pre $1',
	'tasks_created_by' => 'Vytvoril $1',
	'tasks_discussion_page_link' => 'Diskusná stránka úlohy',
	'tasks_closedby' => 'Zatvoril $1',
	'tasks_assigned_myself_log' => 'Úlohu priradil sebe "$1"',
	'tasks_discussion_page_for' => 'Táto úloha je pre stránku "$1". Zoznam všetkých úloh pre túto stránku je $2.',
	'tasks_sidebar_title' => 'Otvorené úlohy',
	'tasks_here' => 'tu',
	'tasks_returnto' => 'Teraz budete presmerovaní. Ak nebudete presmerovaní do niekoľkých sekúnd, kliknite na $1.',
	'tasks_see_page_tasks' => '(úlohy k tejto stránke)',
	'tasks_task_is_assigned' => '(pridelené)',
	'tasks_plain_text_only' => '(čistý text, max. 256 znakov)',
	'tasks_help_page' => 'Úlohy',
	'tasks_help_page_link' => '?',
	'tasks_more_like_it' => 'viac',
	'tasks_task_types' => '1:cleanup:Vyčistiť|2:wikify:Wikifikácia|3:rewrite:Prepísať|4:delete:Zmazať|5:create:Vytvoriť|6:write:Napísať|7:check:Skontolovať',
	'tasks_significance_order' => 'rewrite<delete',
	'tasks_event_on_creation' => 'skontrolovať',
	'tasks_event_on_creation_anon' => 'skontrolovať',
	'tasks_on_creation_comment' => 'Automatický úloha, vygenerovaná pri vytvorení článku',
	'tasks_link_your_assignments' => 'otvoriť pridelené úlohy',
	'tasks_see_your_assignments' => 'Momentálne máte $1 otvorených pridelených úloh. Pozrite si váš $2.',
	'tasks_my_assignments' => 'Vaše súčasné pridelené úlohy',
	'tasks_table_header_page' => 'Stránka',
	'tasks_you_have_no_assignments' => 'Nemáte otvorené pridelené úlohy',
	'tasks_search_form_title' => 'Hľadať',
	'tasks_search_tasks' => 'Úlohy',
	'tasks_search_status' => 'Stav',
	'tasks_search_no_tasks_chosen_note' => '(Žiadny výber odtiaľto nevyhľadá všetky typy úloh.)',
	'tasks_search_results' => 'Výsledky vyhľadávania',
	'tasks_previous' => 'Predchádzajúce',
	'tasks_next' => 'Nasledovné',
	'tasks_sort' => 'Triediť',
	'tasks_ascending' => 'Najstaršie na začiatku',
	'tasks_status_open' => 'Otvorená',
	'tasks_status_assigned' => 'Pridelená',
	'tasks_status_closed' => 'Zatvorená',
	'tasks_status_wontfix' => 'Neopravíme',
	'tasks_action_open' => 'Úloha "$1" bola otvorená.',
	'tasks_action_assigned' => 'Úloha "$1" bola pridelená.',
	'tasks_action_closed' => 'Úloha "$1" bola zatvorená.',
	'tasks_action_wontfix' => 'Neopravíme úlohu "$1".',
	'tasks_sign_delete' => '<b>Bolo žiadané zmazanie tejto stránky!</b>',
	'tasks_logpage' => 'Záznam úloh',
	'tasks_logpagetext' => 'Toto je záznam zmien v úlohách',
	'tasks_logentry' => 'Pre "[[$1]]"',
	'tog-show_task_comments' => 'Transklúzia diskusnej stránky úlohy.',
);

/** Swedish (Svenska)
 * @author Najami
 */
$messages['sv'] = array(
	'tasks' => 'Uppgifter',
	'tasks_desc' => 'Ett programtillägg för att hantera uppgifter',
	'tasks_tab' => 'Uppgifter',
	'tasks_title' => 'Uppgifter för "$1"',
	'tasks_form_new' => 'Skapa ny uppgift',
	'tasks_form_comment' => 'Kommentar',
	'tasks_error1' => 'Uppgiften skapades inte: det finns redan en sådan uppgift!',
	'tasks_ok1' => 'En ny uppgift har skapats!',
	'tasks_create_header' => 'Skapa en ny uppgift',
	'tasks_existing_header' => 'Existerande uppgifter',
	'tasks_delete' => 'Radera',
	'tasks_created_by' => 'Skapad av $1',
	'tasks_here' => 'här',
	'tasks_more_like_it' => 'mer',
	'tasks_table_header_page' => 'Sida',
	'tasks_search_form_title' => 'Sök',
	'tasks_search_tasks' => 'Uppgifter',
	'tasks_search_status' => 'Status',
	'tasks_search_results' => 'Sökresultat',
	'tasks_previous' => 'Föregående',
	'tasks_next' => 'Nästa',
	'tasks_sort' => 'Sortera',
	'tasks_ascending' => 'Äldsta först',
	'tasks_status_open' => 'Öppen',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'tasks' => 'Việc cần làm',
	'tasks_tab' => 'Việc cần làm',
	'tasks_form_new' => 'Tạo việc mới',
	'tasks_form_comment' => 'Lời ghi',
	'tasks_create_header' => 'Tạo việc',
	'tasks_existing_header' => 'Việc hiện có',
	'tasks_noone' => 'không ai',
	'tasks_assign_me' => 'Chỉ định cho mình',
	'tasks_assign_to' => 'Chỉ định cho',
	'tasks_close' => 'Đóng việc',
	'tasks_delete' => 'Xóa',
	'tasks_reopen' => 'Mở lại việc cần làm',
	'tasks_discussion_page_link' => 'Trang thảo luận về việc cần làm',
	'tasks_here' => 'đây',
	'tasks_task_is_assigned' => '(chỉ định)',
	'tasks_help_page' => 'Việc cần làm',
	'tasks_more_like_it' => 'thêm',
	'tasks_table_header_page' => 'Trang',
	'tasks_search_form_title' => 'Tìm kiếm',
	'tasks_search_tasks' => 'Việc cần làm',
	'tasks_search_status' => 'Trạng thái',
	'tasks_search_results' => 'Kết quả tìm kiếm',
	'tasks_previous' => 'Trước',
	'tasks_next' => 'Sau',
	'tasks_sort' => 'Xếp',
	'tasks_status_open' => 'Mở',
	'tasks_status_assigned' => 'Chỉ định',
	'tasks_status_closed' => 'Đóng',
	'tasks_logpage' => 'Nhật trình việc cần làm',
);

