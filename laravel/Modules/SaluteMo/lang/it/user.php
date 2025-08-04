<?php

<<<<<<< HEAD
return array (
  'navigation' => 
  array (
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return array (
  'navigation' => 
  array (
<<<<<<< HEAD
=======
return array (
  'navigation' => 
  array (
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
return array (
  'navigation' => 
  array (
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    'label' => 'Utenti',
    'group' => 'Gestione Utenti',
    'icon' => 'heroicon-o-user',
    'sort' => 40,
  ),
  'model' => 
  array (
    'label' => 'Utente',
    'plural' => 'Utenti',
    'description' => 'Gestione degli utenti della piattaforma',
  ),
  'pages' => 
  array (
    'index' => 
    array (
      'title' => 'Elenco Utenti',
      'subtitle' => 'Gestisci gli utenti registrati',
      'description' => 'Visualizza e gestisci tutti gli utenti della piattaforma',
    ),
    'create' => 
    array (
      'title' => 'Nuovo Utente',
      'subtitle' => 'Registra un nuovo utente',
      'description' => 'Inserisci i dati per registrare un nuovo utente',
    ),
    'edit' => 
    array (
      'title' => 'Modifica Utente',
      'subtitle' => 'Modifica le informazioni dell\'utente',
      'description' => 'Aggiorna i dati dell\'utente',
    ),
    'view' => 
    array (
      'title' => 'Dettagli Utente',
      'subtitle' => 'Visualizza le informazioni complete dell\'utente',
      'description' => 'Dettagli completi del profilo utente',
    ),
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
<<<<<<< HEAD
      'placeholder' => 'ID generato automaticamente',
      'help' => 'Identificativo univoco dell\'utente',
=======
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'ID generato automaticamente',
      'help' => 'Identificativo univoco dell\'utente',
=======
      'placeholder' => '',
      'helper_text' => '',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'placeholder' => '',
      'helper_text' => '',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Mario Rossi',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'help' => 'Nome completo dell\'utente',
    ),
    'first_name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Mario',
      'help' => 'Nome di battesimo dell\'utente',
    ),
    'last_name' => 
    array (
      'label' => 'Cognome',
      'placeholder' => 'Rossi',
      'help' => 'Cognome dell\'utente',
<<<<<<< HEAD
=======
=======
      'helper_text' => 'Nome completo dell\'utente',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'helper_text' => 'Nome completo dell\'utente',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'utente@email.com',
<<<<<<< HEAD
      'help' => 'Indirizzo email per l\'accesso',
=======
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Indirizzo email per l\'accesso',
=======
      'helper_text' => 'Indirizzo email per l\'accesso',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'helper_text' => 'Indirizzo email per l\'accesso',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'role' => 
    array (
      'label' => 'Ruolo',
      'placeholder' => 'Seleziona il ruolo',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'help' => 'Ruolo assegnato all\'utente',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'placeholder' => 'Seleziona il tipo',
      'help' => 'Tipologia di utente nel sistema',
<<<<<<< HEAD
=======
=======
      'helper_text' => 'Ruolo assegnato all\'utente',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'helper_text' => 'Ruolo assegnato all\'utente',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'active' => 
    array (
      'label' => 'Attivo',
<<<<<<< HEAD
      'placeholder' => 'Stato di attivazione',
      'help' => 'L\'utente è attivo e può accedere',
=======
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Stato di attivazione',
      'help' => 'L\'utente è attivo e può accedere',
=======
      'placeholder' => '',
      'helper_text' => 'L\'utente è attivo e può accedere',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'placeholder' => '',
      'helper_text' => 'L\'utente è attivo e può accedere',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'created_at' => 
    array (
      'label' => 'Data Creazione',
<<<<<<< HEAD
      'placeholder' => 'Data di registrazione',
      'help' => 'Data di registrazione dell\'utente',
=======
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Data di registrazione',
      'help' => 'Data di registrazione dell\'utente',
=======
      'placeholder' => '',
      'helper_text' => 'Data di registrazione dell\'utente',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'placeholder' => '',
      'helper_text' => 'Data di registrazione dell\'utente',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima Modifica',
<<<<<<< HEAD
      'placeholder' => 'Data ultima modifica',
      'help' => 'Data ultima modifica profilo',
=======
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Data ultima modifica',
      'help' => 'Data ultima modifica profilo',
=======
      'placeholder' => '',
      'helper_text' => 'Data ultima modifica profilo',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'placeholder' => '',
      'helper_text' => 'Data ultima modifica profilo',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
<<<<<<< HEAD
  ),
  'actions' => 
  array (
=======
<<<<<<< HEAD
  ),
  'actions' => 
  array (
<<<<<<< HEAD
>>>>>>> aurmich/dev
    'create' => 
    array (
      'label' => 'Crea Utente',
      'tooltip' => 'Registra un nuovo utente',
      'modal_heading' => 'Nuovo Utente',
      'modal_description' => 'Inserisci i dati per registrare un nuovo utente',
      'success' => 'Utente creato con successo',
      'error' => 'Errore durante la creazione dell\'utente',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'tooltip' => 'Modifica i dati dell\'utente',
      'modal_heading' => 'Modifica Utente',
      'modal_description' => 'Aggiorna le informazioni dell\'utente',
      'success' => 'Utente aggiornato con successo',
      'error' => 'Errore durante l\'aggiornamento dell\'utente',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'tooltip' => 'Elimina l\'utente',
      'confirmation' => 'Sei sicuro di voler eliminare questo utente? Questa azione non può essere annullata.',
      'success' => 'Utente eliminato con successo',
      'error' => 'Errore durante l\'eliminazione dell\'utente',
    ),
    'activate' => 
    array (
      'label' => 'Attiva',
      'tooltip' => 'Rendi l\'utente attivo',
      'confirmation' => 'Sei sicuro di voler attivare questo utente?',
      'success' => 'Utente attivato con successo',
      'error' => 'Errore durante l\'attivazione dell\'utente',
<<<<<<< HEAD
=======
=======
=======
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'type' => 
    array (
      'label' => 'type',
    ),
    'last_name' => 
    array (
      'label' => 'last_name',
    ),
    'first_name' => 
    array (
      'label' => 'first_name',
    ),
  ),
  'actions' => 
  array (
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
    'activate' => 
    array (
      'label' => 'Attiva',
      'icon' => 'heroicon-o-check-circle',
      'tooltip' => 'Rendi l\'utente attivo',
<<<<<<< HEAD
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'deactivate' => 
    array (
      'label' => 'Disattiva',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'tooltip' => 'Disattiva temporaneamente l\'utente',
      'confirmation' => 'Sei sicuro di voler disattivare questo utente?',
      'success' => 'Utente disattivato con successo',
      'error' => 'Errore durante la disattivazione dell\'utente',
<<<<<<< HEAD
=======
=======
      'icon' => 'heroicon-o-x-circle',
      'tooltip' => 'Disattiva temporaneamente l\'utente',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'icon' => 'heroicon-o-x-circle',
      'tooltip' => 'Disattiva temporaneamente l\'utente',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'reset_password' => 
    array (
      'label' => 'Reset Password',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'tooltip' => 'Invia una nuova password all\'utente',
      'modal_heading' => 'Reset Password',
      'modal_description' => 'Verrà generata una nuova password temporanea e inviata via email',
      'confirmation' => 'Sei sicuro di voler reimpostare la password di questo utente?',
      'success' => 'Password reimpostata con successo',
      'error' => 'Errore durante il reset della password',
    ),
    'apply_filters' => 
    array (
      'label' => 'Applica Filtri',
      'tooltip' => 'Applica i filtri selezionati',
    ),
    'reset_filters' => 
    array (
      'label' => 'Azzera Filtri',
      'tooltip' => 'Rimuovi tutti i filtri applicati',
    ),
    'open_filters' => 
    array (
      'label' => 'Apri Filtri',
      'tooltip' => 'Mostra pannello filtri',
    ),
    'toggle_columns' => 
    array (
      'label' => 'Mostra/Nascondi Colonne',
      'tooltip' => 'Personalizza le colonne visualizzate',
    ),
    'reorder_records' => 
    array (
      'label' => 'Riordina Record',
      'tooltip' => 'Riordina i record della tabella',
<<<<<<< HEAD
=======
=======
      'icon' => 'heroicon-o-key',
      'tooltip' => 'Invia una nuova password all\'utente',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'icon' => 'heroicon-o-key',
      'tooltip' => 'Invia una nuova password all\'utente',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
  ),
  'filters' => 
  array (
    'active' => 
    array (
      'label' => 'Solo Attivi',
<<<<<<< HEAD
      'placeholder' => 'Filtra per utenti attivi',
      'help' => 'Mostra solo gli utenti attualmente attivi',
=======
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Filtra per utenti attivi',
      'help' => 'Mostra solo gli utenti attualmente attivi',
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'role' => 
    array (
      'label' => 'Per Ruolo',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'placeholder' => 'Seleziona ruolo',
      'help' => 'Filtra per ruolo specifico',
    ),
    'type' => 
    array (
      'label' => 'Per Tipo',
      'placeholder' => 'Seleziona tipo',
      'help' => 'Filtra per tipologia di utente',
    ),
    'created_at' => 
    array (
      'label' => 'Data Registrazione',
      'placeholder' => 'Seleziona periodo',
      'help' => 'Filtra per periodo di registrazione',
<<<<<<< HEAD
=======
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
  ),
  'bulk_actions' => 
  array (
    'activate_selected' => 
    array (
      'label' => 'Attiva Selezionati',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'tooltip' => 'Attiva tutti gli utenti selezionati',
      'confirmation' => 'Sei sicuro di voler attivare tutti gli utenti selezionati?',
      'success' => 'Utenti attivati con successo',
      'error' => 'Errore durante l\'attivazione degli utenti',
<<<<<<< HEAD
=======
=======
      'icon' => 'heroicon-o-check-circle',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'icon' => 'heroicon-o-check-circle',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'deactivate_selected' => 
    array (
      'label' => 'Disattiva Selezionati',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'tooltip' => 'Disattiva tutti gli utenti selezionati',
      'confirmation' => 'Sei sicuro di voler disattivare tutti gli utenti selezionati?',
      'success' => 'Utenti disattivati con successo',
      'error' => 'Errore durante la disattivazione degli utenti',
<<<<<<< HEAD
=======
=======
      'icon' => 'heroicon-o-x-circle',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'icon' => 'heroicon-o-x-circle',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
    'reset_password_selected' => 
    array (
      'label' => 'Reset Password Selezionati',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
      'tooltip' => 'Reimposta password per tutti gli utenti selezionati',
      'modal_heading' => 'Reset Password Multiplo',
      'modal_description' => 'Verranno generate nuove password temporanee per tutti gli utenti selezionati',
      'confirmation' => 'Sei sicuro di voler reimpostare le password di tutti gli utenti selezionati?',
      'success' => 'Password reimpostate con successo',
      'error' => 'Errore durante il reset delle password',
    ),
    'delete_selected' => 
    array (
      'label' => 'Elimina Selezionati',
      'tooltip' => 'Elimina tutti gli utenti selezionati',
      'confirmation' => 'Sei sicuro di voler eliminare tutti gli utenti selezionati? Questa azione non può essere annullata.',
      'success' => 'Utenti eliminati con successo',
      'error' => 'Errore durante l\'eliminazione degli utenti',
<<<<<<< HEAD
=======
=======
      'icon' => 'heroicon-o-key',
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
      'icon' => 'heroicon-o-key',
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
    ),
  ),
  'messages' => 
  array (
    'activated_successfully' => 'Utente attivato con successo',
    'deactivated_successfully' => 'Utente disattivato con successo',
    'password_reset_successfully' => 'Password reimpostata con successo',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    'email_sent' => 'Email di notifica inviata',
    'empty_state' => 'Nessun utente trovato',
    'loading' => 'Caricamento utenti in corso...',
  ),
  'notifications' => 
  array (
    'created' => 'Utente creato con successo',
    'updated' => 'Utente aggiornato con successo',
    'deleted' => 'Utente eliminato con successo',
    'error' => 'Si è verificato un errore durante l\'operazione',
    'permission_denied' => 'Non hai i permessi per eseguire questa operazione',
  ),
  'validation' => 
  array (
    'required' => 'Il campo :attribute è obbligatorio',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido',
    'unique' => 'Il valore del campo :attribute è già stato utilizzato',
    'min' => 
    array (
      'string' => 'Il campo :attribute deve contenere almeno :min caratteri',
    ),
    'max' => 
    array (
      'string' => 'Il campo :attribute non può superare :max caratteri',
    ),
    'confirmed' => 'La conferma del campo :attribute non corrisponde',
    'password_format' => 'La password deve contenere almeno 8 caratteri',
  ),
  'search' => 
  array (
    'placeholder' => 'Cerca per nome, email o ruolo...',
    'label' => 'Cerca',
    'help' => 'Inserisci il termine di ricerca',
  ),
  'empty_state' => 
  array (
    'heading' => 'Nessun utente trovato',
    'description' => 'Non sono stati trovati utenti corrispondenti ai criteri di ricerca',
    'action' => 'Aggiungi il primo utente',
  ),
  'sections' => 
  array (
    'personal_info' => 
    array (
      'label' => 'Informazioni Personali',
      'description' => 'Dati anagrafici dell\'utente',
    ),
    'account_settings' => 
    array (
      'label' => 'Impostazioni Account',
      'description' => 'Configurazioni di accesso e sicurezza',
    ),
    'permissions' => 
    array (
      'label' => 'Permessi',
      'description' => 'Ruoli e autorizzazioni assegnate',
    ),
  ),
  'roles' => 
  array (
    'admin' => 'Amministratore',
    'user' => 'Utente',
    'moderator' => 'Moderatore',
    'guest' => 'Ospite',
  ),
  'statuses' => 
  array (
    'active' => 'Attivo',
    'inactive' => 'Inattivo',
    'pending' => 'In attesa',
    'suspended' => 'Sospeso',
<<<<<<< HEAD
  ),
);
=======
=======
    'label' => 'user.navigation',
    'group' => 'user.navigation',
    'icon' => 'user.navigation',
    'sort' => 45,
>>>>>>> c6edea7c (.)
  ),
);
=======
=======
>>>>>>> 98867c82 (translations)
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Utenti',
        'group' => 'Gestione Utenti',
        'icon' => 'heroicon-o-user',
        'sort' => 40,
    ],
<<<<<<< HEAD
=======

>>>>>>> 98867c82 (translations)
    'model' => [
        'label' => 'Utente',
        'plural' => 'Utenti',
        'description' => 'Gestione degli utenti della piattaforma',
    ],
<<<<<<< HEAD
=======

>>>>>>> 98867c82 (translations)
    'pages' => [
        'index' => [
            'title' => 'Elenco Utenti',
            'subtitle' => 'Gestisci gli utenti registrati',
            'description' => 'Visualizza e gestisci tutti gli utenti della piattaforma',
        ],
        'create' => [
            'title' => 'Nuovo Utente',
            'subtitle' => 'Registra un nuovo utente',
            'description' => 'Inserisci i dati per registrare un nuovo utente',
        ],
        'edit' => [
            'title' => 'Modifica Utente',
            'subtitle' => 'Modifica le informazioni dell\'utente',
            'description' => 'Aggiorna i dati dell\'utente',
        ],
        'view' => [
            'title' => 'Dettagli Utente',
            'subtitle' => 'Visualizza le informazioni complete dell\'utente',
            'description' => 'Dettagli completi del profilo utente',
        ],
    ],
<<<<<<< HEAD
    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => '',
            'helper_text' => '',
=======

    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => 'ID generato automaticamente',
            'help' => 'Identificativo univoco dell\'utente',
>>>>>>> 98867c82 (translations)
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Mario Rossi',
<<<<<<< HEAD
            'helper_text' => 'Nome completo dell\'utente',
=======
            'help' => 'Nome completo dell\'utente',
        ],
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Mario',
            'help' => 'Nome di battesimo dell\'utente',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Rossi',
            'help' => 'Cognome dell\'utente',
>>>>>>> 98867c82 (translations)
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'utente@email.com',
<<<<<<< HEAD
            'helper_text' => 'Indirizzo email per l\'accesso',
=======
            'help' => 'Indirizzo email per l\'accesso',
>>>>>>> 98867c82 (translations)
        ],
        'role' => [
            'label' => 'Ruolo',
            'placeholder' => 'Seleziona il ruolo',
<<<<<<< HEAD
            'helper_text' => 'Ruolo assegnato all\'utente',
        ],
        'active' => [
            'label' => 'Attivo',
            'placeholder' => '',
            'helper_text' => 'L\'utente è attivo e può accedere',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
            'placeholder' => '',
            'helper_text' => 'Data di registrazione dell\'utente',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
            'placeholder' => '',
            'helper_text' => 'Data ultima modifica profilo',
        ],
    ],
    'actions' => [
        'activate' => [
            'label' => 'Attiva',
            'icon' => 'heroicon-o-check-circle',
            'tooltip' => 'Rendi l\'utente attivo',
        ],
        'deactivate' => [
            'label' => 'Disattiva',
            'icon' => 'heroicon-o-x-circle',
            'tooltip' => 'Disattiva temporaneamente l\'utente',
        ],
        'reset_password' => [
            'label' => 'Reset Password',
            'icon' => 'heroicon-o-key',
            'tooltip' => 'Invia una nuova password all\'utente',
        ],
    ],
    'filters' => [
        'active' => [
            'label' => 'Solo Attivi',
        ],
        'role' => [
            'label' => 'Per Ruolo',
        ],
    ],
    'bulk_actions' => [
        'activate_selected' => [
            'label' => 'Attiva Selezionati',
            'icon' => 'heroicon-o-check-circle',
        ],
        'deactivate_selected' => [
            'label' => 'Disattiva Selezionati',
            'icon' => 'heroicon-o-x-circle',
        ],
        'reset_password_selected' => [
            'label' => 'Reset Password Selezionati',
            'icon' => 'heroicon-o-key',
        ],
    ],
=======
            'help' => 'Ruolo assegnato all\'utente',
        ],
        'type' => [
            'label' => 'Tipo',
            'placeholder' => 'Seleziona il tipo',
            'help' => 'Tipologia di utente nel sistema',
        ],
        'active' => [
            'label' => 'Attivo',
            'placeholder' => 'Stato di attivazione',
            'help' => 'L\'utente è attivo e può accedere',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
            'placeholder' => 'Data di registrazione',
            'help' => 'Data di registrazione dell\'utente',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
            'placeholder' => 'Data ultima modifica',
            'help' => 'Data ultima modifica profilo',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'Crea Utente',
            'tooltip' => 'Registra un nuovo utente',
            'modal_heading' => 'Nuovo Utente',
            'modal_description' => 'Inserisci i dati per registrare un nuovo utente',
            'success' => 'Utente creato con successo',
            'error' => 'Errore durante la creazione dell\'utente',
        ],
        'edit' => [
            'label' => 'Modifica',
            'tooltip' => 'Modifica i dati dell\'utente',
            'modal_heading' => 'Modifica Utente',
            'modal_description' => 'Aggiorna le informazioni dell\'utente',
            'success' => 'Utente aggiornato con successo',
            'error' => 'Errore durante l\'aggiornamento dell\'utente',
        ],
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina l\'utente',
            'confirmation' => 'Sei sicuro di voler eliminare questo utente? Questa azione non può essere annullata.',
            'success' => 'Utente eliminato con successo',
            'error' => 'Errore durante l\'eliminazione dell\'utente',
        ],
        'activate' => [
            'label' => 'Attiva',
            'tooltip' => 'Rendi l\'utente attivo',
            'confirmation' => 'Sei sicuro di voler attivare questo utente?',
            'success' => 'Utente attivato con successo',
            'error' => 'Errore durante l\'attivazione dell\'utente',
        ],
        'deactivate' => [
            'label' => 'Disattiva',
            'tooltip' => 'Disattiva temporaneamente l\'utente',
            'confirmation' => 'Sei sicuro di voler disattivare questo utente?',
            'success' => 'Utente disattivato con successo',
            'error' => 'Errore durante la disattivazione dell\'utente',
        ],
        'reset_password' => [
            'label' => 'Reset Password',
            'tooltip' => 'Invia una nuova password all\'utente',
            'modal_heading' => 'Reset Password',
            'modal_description' => 'Verrà generata una nuova password temporanea e inviata via email',
            'confirmation' => 'Sei sicuro di voler reimpostare la password di questo utente?',
            'success' => 'Password reimpostata con successo',
            'error' => 'Errore durante il reset della password',
        ],
        'apply_filters' => [
            'label' => 'Applica Filtri',
            'tooltip' => 'Applica i filtri selezionati',
        ],
        'reset_filters' => [
            'label' => 'Azzera Filtri',
            'tooltip' => 'Rimuovi tutti i filtri applicati',
        ],
        'open_filters' => [
            'label' => 'Apri Filtri',
            'tooltip' => 'Mostra pannello filtri',
        ],
        'toggle_columns' => [
            'label' => 'Mostra/Nascondi Colonne',
            'tooltip' => 'Personalizza le colonne visualizzate',
        ],
        'reorder_records' => [
            'label' => 'Riordina Record',
            'tooltip' => 'Riordina i record della tabella',
        ],
    ],

    'filters' => [
        'active' => [
            'label' => 'Solo Attivi',
            'placeholder' => 'Filtra per utenti attivi',
            'help' => 'Mostra solo gli utenti attualmente attivi',
        ],
        'role' => [
            'label' => 'Per Ruolo',
            'placeholder' => 'Seleziona ruolo',
            'help' => 'Filtra per ruolo specifico',
        ],
        'type' => [
            'label' => 'Per Tipo',
            'placeholder' => 'Seleziona tipo',
            'help' => 'Filtra per tipologia di utente',
        ],
        'created_at' => [
            'label' => 'Data Registrazione',
            'placeholder' => 'Seleziona periodo',
            'help' => 'Filtra per periodo di registrazione',
        ],
    ],

    'bulk_actions' => [
        'activate_selected' => [
            'label' => 'Attiva Selezionati',
            'tooltip' => 'Attiva tutti gli utenti selezionati',
            'confirmation' => 'Sei sicuro di voler attivare tutti gli utenti selezionati?',
            'success' => 'Utenti attivati con successo',
            'error' => 'Errore durante l\'attivazione degli utenti',
        ],
        'deactivate_selected' => [
            'label' => 'Disattiva Selezionati',
            'tooltip' => 'Disattiva tutti gli utenti selezionati',
            'confirmation' => 'Sei sicuro di voler disattivare tutti gli utenti selezionati?',
            'success' => 'Utenti disattivati con successo',
            'error' => 'Errore durante la disattivazione degli utenti',
        ],
        'reset_password_selected' => [
            'label' => 'Reset Password Selezionati',
            'tooltip' => 'Reimposta password per tutti gli utenti selezionati',
            'modal_heading' => 'Reset Password Multiplo',
            'modal_description' => 'Verranno generate nuove password temporanee per tutti gli utenti selezionati',
            'confirmation' => 'Sei sicuro di voler reimpostare le password di tutti gli utenti selezionati?',
            'success' => 'Password reimpostate con successo',
            'error' => 'Errore durante il reset delle password',
        ],
        'delete_selected' => [
            'label' => 'Elimina Selezionati',
            'tooltip' => 'Elimina tutti gli utenti selezionati',
            'confirmation' => 'Sei sicuro di voler eliminare tutti gli utenti selezionati? Questa azione non può essere annullata.',
            'success' => 'Utenti eliminati con successo',
            'error' => 'Errore durante l\'eliminazione degli utenti',
        ],
    ],

>>>>>>> 98867c82 (translations)
    'messages' => [
        'activated_successfully' => 'Utente attivato con successo',
        'deactivated_successfully' => 'Utente disattivato con successo',
        'password_reset_successfully' => 'Password reimpostata con successo',
<<<<<<< HEAD
    ],
    'search_placeholder' => 'Cerca per nome, email o ruolo...'
];
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
=======
  ),
  'search_placeholder' => 'Cerca per nome, email o ruolo...',
);
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
  ),
  'search_placeholder' => 'Cerca per nome, email o ruolo...',
);
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
=======
        'email_sent' => 'Email di notifica inviata',
        'empty_state' => 'Nessun utente trovato',
        'loading' => 'Caricamento utenti in corso...',
    ],

    'notifications' => [
        'created' => 'Utente creato con successo',
        'updated' => 'Utente aggiornato con successo',
        'deleted' => 'Utente eliminato con successo',
        'error' => 'Si è verificato un errore durante l\'operazione',
        'permission_denied' => 'Non hai i permessi per eseguire questa operazione',
    ],

    'validation' => [
        'required' => 'Il campo :attribute è obbligatorio',
        'email' => 'Il campo :attribute deve essere un indirizzo email valido',
        'unique' => 'Il valore del campo :attribute è già stato utilizzato',
        'min' => [
            'string' => 'Il campo :attribute deve contenere almeno :min caratteri',
        ],
        'max' => [
            'string' => 'Il campo :attribute non può superare :max caratteri',
        ],
        'confirmed' => 'La conferma del campo :attribute non corrisponde',
        'password_format' => 'La password deve contenere almeno 8 caratteri',
    ],

    'search' => [
        'placeholder' => 'Cerca per nome, email o ruolo...',
        'label' => 'Cerca',
        'help' => 'Inserisci il termine di ricerca',
    ],

    'empty_state' => [
        'heading' => 'Nessun utente trovato',
        'description' => 'Non sono stati trovati utenti corrispondenti ai criteri di ricerca',
        'action' => 'Aggiungi il primo utente',
    ],

    'sections' => [
        'personal_info' => [
            'label' => 'Informazioni Personali',
            'description' => 'Dati anagrafici dell\'utente',
        ],
        'account_settings' => [
            'label' => 'Impostazioni Account',
            'description' => 'Configurazioni di accesso e sicurezza',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'description' => 'Ruoli e autorizzazioni assegnate',
        ],
    ],

    'roles' => [
        'admin' => 'Amministratore',
        'user' => 'Utente',
        'moderator' => 'Moderatore',
        'guest' => 'Ospite',
    ],

    'statuses' => [
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
        'pending' => 'In attesa',
        'suspended' => 'Sospeso',
    ],
];
>>>>>>> 98867c82 (translations)
>>>>>>> aurmich/dev
