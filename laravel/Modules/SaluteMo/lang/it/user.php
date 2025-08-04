<?php

return array (
  'navigation' => 
  array (
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
      'placeholder' => '',
      'helper_text' => '',
>>>>>>> aurmich/dev
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Mario Rossi',
<<<<<<< HEAD
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
=======
      'helper_text' => 'Nome completo dell\'utente',
>>>>>>> aurmich/dev
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'utente@email.com',
<<<<<<< HEAD
      'help' => 'Indirizzo email per l\'accesso',
=======
      'helper_text' => 'Indirizzo email per l\'accesso',
>>>>>>> aurmich/dev
    ),
    'role' => 
    array (
      'label' => 'Ruolo',
      'placeholder' => 'Seleziona il ruolo',
<<<<<<< HEAD
      'help' => 'Ruolo assegnato all\'utente',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'placeholder' => 'Seleziona il tipo',
      'help' => 'Tipologia di utente nel sistema',
=======
      'helper_text' => 'Ruolo assegnato all\'utente',
>>>>>>> aurmich/dev
    ),
    'active' => 
    array (
      'label' => 'Attivo',
<<<<<<< HEAD
      'placeholder' => 'Stato di attivazione',
      'help' => 'L\'utente è attivo e può accedere',
=======
      'placeholder' => '',
      'helper_text' => 'L\'utente è attivo e può accedere',
>>>>>>> aurmich/dev
    ),
    'created_at' => 
    array (
      'label' => 'Data Creazione',
<<<<<<< HEAD
      'placeholder' => 'Data di registrazione',
      'help' => 'Data di registrazione dell\'utente',
=======
      'placeholder' => '',
      'helper_text' => 'Data di registrazione dell\'utente',
>>>>>>> aurmich/dev
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima Modifica',
<<<<<<< HEAD
      'placeholder' => 'Data ultima modifica',
      'help' => 'Data ultima modifica profilo',
=======
      'placeholder' => '',
      'helper_text' => 'Data ultima modifica profilo',
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
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
=======
    'type' => 
    array (
      'label' => 'type',
    ),
    'last_name' => 
    array (
      'label' => 'last_name',
    ),
<<<<<<< HEAD
>>>>>>> e577f0ca (feat: getDataDefault for fix livewire form data)
=======
    'first_name' => 
    array (
      'label' => 'first_name',
    ),
>>>>>>> 3ad9917a (- fix styles registration)
  ),
  'actions' => 
  array (
    'activate' => 
    array (
      'label' => 'Attiva',
      'icon' => 'heroicon-o-check-circle',
      'tooltip' => 'Rendi l\'utente attivo',
>>>>>>> aurmich/dev
    ),
    'deactivate' => 
    array (
      'label' => 'Disattiva',
<<<<<<< HEAD
      'tooltip' => 'Disattiva temporaneamente l\'utente',
      'confirmation' => 'Sei sicuro di voler disattivare questo utente?',
      'success' => 'Utente disattivato con successo',
      'error' => 'Errore durante la disattivazione dell\'utente',
=======
      'icon' => 'heroicon-o-x-circle',
      'tooltip' => 'Disattiva temporaneamente l\'utente',
>>>>>>> aurmich/dev
    ),
    'reset_password' => 
    array (
      'label' => 'Reset Password',
<<<<<<< HEAD
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
=======
      'icon' => 'heroicon-o-key',
      'tooltip' => 'Invia una nuova password all\'utente',
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
>>>>>>> aurmich/dev
    ),
    'role' => 
    array (
      'label' => 'Per Ruolo',
<<<<<<< HEAD
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
=======
>>>>>>> aurmich/dev
    ),
  ),
  'bulk_actions' => 
  array (
    'activate_selected' => 
    array (
      'label' => 'Attiva Selezionati',
<<<<<<< HEAD
      'tooltip' => 'Attiva tutti gli utenti selezionati',
      'confirmation' => 'Sei sicuro di voler attivare tutti gli utenti selezionati?',
      'success' => 'Utenti attivati con successo',
      'error' => 'Errore durante l\'attivazione degli utenti',
=======
      'icon' => 'heroicon-o-check-circle',
>>>>>>> aurmich/dev
    ),
    'deactivate_selected' => 
    array (
      'label' => 'Disattiva Selezionati',
<<<<<<< HEAD
      'tooltip' => 'Disattiva tutti gli utenti selezionati',
      'confirmation' => 'Sei sicuro di voler disattivare tutti gli utenti selezionati?',
      'success' => 'Utenti disattivati con successo',
      'error' => 'Errore durante la disattivazione degli utenti',
=======
      'icon' => 'heroicon-o-x-circle',
>>>>>>> aurmich/dev
    ),
    'reset_password_selected' => 
    array (
      'label' => 'Reset Password Selezionati',
<<<<<<< HEAD
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
=======
      'icon' => 'heroicon-o-key',
>>>>>>> aurmich/dev
    ),
  ),
  'messages' => 
  array (
    'activated_successfully' => 'Utente attivato con successo',
    'deactivated_successfully' => 'Utente disattivato con successo',
    'password_reset_successfully' => 'Password reimpostata con successo',
<<<<<<< HEAD
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
  ),
=======
  ),
  'search_placeholder' => 'Cerca per nome, email o ruolo...',
>>>>>>> aurmich/dev
);
