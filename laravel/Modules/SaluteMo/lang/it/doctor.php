<?php

return array (
  'model' => 
  array (
    'label' => 'Medico',
    'plural' => 'Medici',
    'description' => 'Gestione dei medici registrati nella piattaforma',
  ),
  'navigation' => 
  array (
    'label' => 'Medici',
    'group' => 'Gestione Utenti',
    'icon' => 'heroicon-o-user-circle',
    'sort' => 10,
  ),
  'pages' => 
  array (
    'index' => 
    array (
      'title' => 'Elenco Medici',
      'subtitle' => 'Gestisci i medici registrati nell\'app mobile',
      'description' => 'Visualizza e gestisci tutti i medici iscritti alla piattaforma',
    ),
    'create' => 
    array (
      'title' => 'Nuovo Medico',
      'subtitle' => 'Registra un nuovo medico',
      'description' => 'Inserisci i dati per registrare un nuovo professionista',
    ),
    'edit' => 
    array (
      'title' => 'Modifica Medico',
      'subtitle' => 'Modifica le informazioni del medico',
      'description' => 'Aggiorna i dati del professionista',
    ),
    'view' => 
    array (
      'title' => 'Dettagli Medico',
      'subtitle' => 'Visualizza le informazioni complete del medico',
      'description' => 'Dettagli completi del profilo medico',
    ),
  ),
  'fields' => 
  array (
    'full_name' => 
    array (
      'label' => 'Nome e Cognome',
      'placeholder' => 'Inserisci nome e cognome completi',
<<<<<<< HEAD
      'help' => 'Nome e cognome come registrati nell\'Ordine dei Medici',
    ),
    'first_name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Nome del medico',
    ),
    'last_name' => 
    array (
      'label' => 'Cognome',
      'placeholder' => 'Inserisci il cognome',
      'help' => 'Cognome del medico',
=======
      'helper_text' => 'Nome e cognome come registrati nell\'Ordine dei Medici',
>>>>>>> aurmich/dev
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'email@esempio.com',
<<<<<<< HEAD
      'help' => 'Indirizzo email per le comunicazioni',
      'description' => 'email',
=======
      'helper_text' => 'Indirizzo email per le comunicazioni',
>>>>>>> aurmich/dev
    ),
    'phone' => 
    array (
      'label' => 'Telefono',
      'placeholder' => '+39 123 456 7890',
<<<<<<< HEAD
      'help' => 'Numero di telefono principale',
=======
      'helper_text' => 'Numero di telefono principale',
>>>>>>> aurmich/dev
    ),
    'mobile_phone' => 
    array (
      'label' => 'Cellulare',
      'placeholder' => '+39 123 456 7890',
<<<<<<< HEAD
      'help' => 'Numero di cellulare per le notifiche push',
=======
      'helper_text' => 'Numero di cellulare per le notifiche push',
>>>>>>> aurmich/dev
    ),
    'license_number' => 
    array (
      'label' => 'Numero Iscrizione Ordine',
      'placeholder' => 'Inserisci il numero di iscrizione',
<<<<<<< HEAD
      'help' => 'Numero di iscrizione all\'Ordine dei Medici',
=======
      'helper_text' => 'Numero di iscrizione all\'Ordine dei Medici',
>>>>>>> aurmich/dev
    ),
    'specialization' => 
    array (
      'label' => 'Specializzazione',
      'placeholder' => 'Seleziona la specializzazione',
<<<<<<< HEAD
      'help' => 'Specializzazione medica principale',
=======
      'helper_text' => 'Specializzazione medica principale',
>>>>>>> aurmich/dev
    ),
    'clinic_address' => 
    array (
      'label' => 'Indirizzo Studio',
      'placeholder' => 'Via Roma, 123',
<<<<<<< HEAD
      'help' => 'Indirizzo dello studio medico',
=======
      'helper_text' => 'Indirizzo dello studio medico',
>>>>>>> aurmich/dev
    ),
    'is_active' => 
    array (
      'label' => 'Attivo',
<<<<<<< HEAD
      'help' => 'Il medico può ricevere prenotazioni',
=======
      'helper_text' => 'Il medico può ricevere prenotazioni',
>>>>>>> aurmich/dev
    ),
    'verified_at' => 
    array (
      'label' => 'Data Verifica',
<<<<<<< HEAD
      'placeholder' => 'Seleziona la data di verifica',
      'help' => 'Data di verifica della documentazione',
=======
      'helper_text' => 'Data di verifica della documentazione',
>>>>>>> aurmich/dev
    ),
    'device_token' => 
    array (
      'label' => 'Token Dispositivo',
<<<<<<< HEAD
      'placeholder' => 'Token generato automaticamente',
      'help' => 'Token per le notifiche push',
=======
      'helper_text' => 'Token per le notifiche push',
>>>>>>> aurmich/dev
    ),
    'last_login' => 
    array (
      'label' => 'Ultimo Accesso',
<<<<<<< HEAD
      'placeholder' => 'Ultimo accesso registrato',
      'help' => 'Data e ora dell\'ultimo accesso all\'app',
    ),
    'status' => 
    array (
      'label' => 'Stato',
      'placeholder' => 'Seleziona lo stato',
      'help' => 'Stato attuale del medico nella piattaforma',
    ),
    'schedule' => 
    array (
      'label' => 'Orario',
      'placeholder' => 'Configura l\'orario',
      'help' => 'Orario di disponibilità del medico',
=======
      'helper_text' => 'Data e ora dell\'ultimo accesso all\'app',
    ),
    'reset_filters' => 
    array (
      'label' => 'Azzera Filtri',
    ),
    'apply_filters' => 
    array (
      'label' => 'Applica Filtri',
    ),
    'open_filters' => 
    array (
      'label' => 'Apri Filtri',
    ),
    'toggle_columns' => 
    array (
      'label' => 'Mostra/Nascondi Colonne',
    ),
    'reorder_records' => 
    array (
      'label' => 'Riordina Record',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
>>>>>>> aurmich/dev
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
<<<<<<< HEAD
=======
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'status' => 
    array (
      'label' => 'status',
    ),
>>>>>>> aurmich/dev
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
<<<<<<< HEAD
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
=======
>>>>>>> aurmich/dev
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
<<<<<<< HEAD
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Crea Medico',
      'tooltip' => 'Registra un nuovo medico',
      'modal_heading' => 'Nuovo Medico',
      'modal_description' => 'Inserisci i dati per registrare un nuovo professionista',
      'success' => 'Medico creato con successo',
      'error' => 'Errore durante la creazione del medico',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'tooltip' => 'Modifica i dati del medico',
      'modal_heading' => 'Modifica Medico',
      'modal_description' => 'Aggiorna le informazioni del professionista',
      'success' => 'Medico aggiornato con successo',
      'error' => 'Errore durante l\'aggiornamento del medico',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'tooltip' => 'Elimina il medico',
      'confirmation' => 'Sei sicuro di voler eliminare questo medico? Questa azione non può essere annullata.',
      'success' => 'Medico eliminato con successo',
      'error' => 'Errore durante l\'eliminazione del medico',
    ),
    'verify' => 
    array (
      'label' => 'Verifica',
      'tooltip' => 'Verifica la documentazione del medico',
      'modal_heading' => 'Verifica Medico',
      'modal_description' => 'Conferma la verifica della documentazione del professionista',
      'success' => 'Medico verificato con successo',
      'error' => 'Errore durante la verifica del medico',
=======
  ),
  'actions' => 
  array (
    'verify' => 
    array (
      'label' => 'Verifica',
      'icon' => 'heroicon-o-check-circle',
      'tooltip' => 'Verifica la documentazione del medico',
>>>>>>> aurmich/dev
    ),
    'deactivate' => 
    array (
      'label' => 'Disattiva',
<<<<<<< HEAD
      'tooltip' => 'Disattiva temporaneamente il medico',
      'confirmation' => 'Sei sicuro di voler disattivare questo medico?',
      'success' => 'Medico disattivato con successo',
      'error' => 'Errore durante la disattivazione del medico',
=======
      'icon' => 'heroicon-o-x-circle',
      'tooltip' => 'Disattiva temporaneamente il medico',
>>>>>>> aurmich/dev
    ),
    'send_notification' => 
    array (
      'label' => 'Invia Notifica',
<<<<<<< HEAD
      'tooltip' => 'Invia una notifica push al medico',
      'modal_heading' => 'Invia Notifica',
      'modal_description' => 'Scrivi il messaggio da inviare al medico',
      'success' => 'Notifica inviata con successo',
      'error' => 'Errore durante l\'invio della notifica',
=======
      'icon' => 'heroicon-o-bell',
      'tooltip' => 'Invia una notifica push al medico',
>>>>>>> aurmich/dev
    ),
    'view_appointments' => 
    array (
      'label' => 'Vedi Appuntamenti',
<<<<<<< HEAD
      'tooltip' => 'Visualizza gli appuntamenti del medico',
    ),
    'change_schedule' => 
    array (
      'label' => 'Modifica Orario',
      'tooltip' => 'Modifica l\'orario di disponibilità',
      'modal_heading' => 'Modifica Orario',
      'modal_description' => 'Configura gli orari di disponibilità del medico',
      'success' => 'Orario aggiornato con successo',
      'error' => 'Errore durante l\'aggiornamento dell\'orario',
    ),
    'attach' => 
    array (
      'label' => 'Collega',
      'tooltip' => 'Collega elemento',
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
    ),
=======
      'icon' => 'heroicon-o-calendar-days',
      'tooltip' => 'Visualizza gli appuntamenti del medico',
    ),
>>>>>>> aurmich/dev
  ),
  'filters' => 
  array (
    'active' => 
    array (
      'label' => 'Solo Attivi',
<<<<<<< HEAD
      'placeholder' => 'Filtra per medici attivi',
      'help' => 'Mostra solo i medici attualmente attivi',
=======
>>>>>>> aurmich/dev
    ),
    'verified' => 
    array (
      'label' => 'Solo Verificati',
<<<<<<< HEAD
      'placeholder' => 'Filtra per medici verificati',
      'help' => 'Mostra solo i medici con documentazione verificata',
=======
>>>>>>> aurmich/dev
    ),
    'specialization' => 
    array (
      'label' => 'Per Specializzazione',
<<<<<<< HEAD
      'placeholder' => 'Seleziona specializzazione',
      'help' => 'Filtra per specializzazione medica',
=======
>>>>>>> aurmich/dev
    ),
  ),
  'bulk_actions' => 
  array (
    'verify_selected' => 
    array (
      'label' => 'Verifica Selezionati',
<<<<<<< HEAD
      'tooltip' => 'Verifica tutti i medici selezionati',
      'confirmation' => 'Sei sicuro di voler verificare tutti i medici selezionati?',
      'success' => 'Medici verificati con successo',
      'error' => 'Errore durante la verifica dei medici',
=======
      'icon' => 'heroicon-o-check-circle',
>>>>>>> aurmich/dev
    ),
    'send_notification_selected' => 
    array (
      'label' => 'Notifica Selezionati',
<<<<<<< HEAD
      'tooltip' => 'Invia notifica a tutti i medici selezionati',
      'modal_heading' => 'Notifica Multipla',
      'modal_description' => 'Scrivi il messaggio da inviare a tutti i medici selezionati',
      'success' => 'Notifiche inviate con successo',
      'error' => 'Errore durante l\'invio delle notifiche',
=======
      'icon' => 'heroicon-o-bell',
>>>>>>> aurmich/dev
    ),
  ),
  'messages' => 
  array (
    'verified_successfully' => 'Medico verificato con successo',
    'deactivated_successfully' => 'Medico disattivato con successo',
    'notification_sent' => 'Notifica inviata con successo',
<<<<<<< HEAD
    'empty_state' => 'Nessun medico trovato',
    'loading' => 'Caricamento medici in corso...',
=======
>>>>>>> aurmich/dev
  ),
  'notifications' => 
  array (
    'created' => 'Medico creato con successo',
    'updated' => 'Medico aggiornato con successo',
    'deleted' => 'Medico eliminato con successo',
    'error' => 'Si è verificato un errore durante l\'operazione',
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
<<<<<<< HEAD
    'phone_format' => 'Il numero di telefono deve essere in formato valido',
    'license_number_format' => 'Il numero di iscrizione deve essere valido',
  ),
  'search' => 
  array (
    'placeholder' => 'Cerca per nome, email, telefono o numero di iscrizione...',
    'label' => 'Cerca',
    'help' => 'Inserisci il termine di ricerca',
  ),
  'empty_state' => 
  array (
    'heading' => 'Nessun medico trovato',
    'description' => 'Non sono stati trovati medici corrispondenti ai criteri di ricerca',
    'action' => 'Aggiungi il primo medico',
  ),
=======
  ),
  'search_placeholder' => 'Cerca per nome, email, telefono o numero di iscrizione...',
>>>>>>> aurmich/dev
);
