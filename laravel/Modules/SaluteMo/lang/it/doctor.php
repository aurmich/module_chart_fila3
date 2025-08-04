<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return array (
<<<<<<< HEAD
=======
return array (
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
return array (
>>>>>>> 8d591468 (fields translations)
  'model' => 
  array (
    'label' => 'Medico',
    'plural' => 'Medici',
    'description' => 'Gestione dei medici registrati nella piattaforma',
  ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
  'navigation' => 
  array (
    'label' => 'Medici',
    'group' => 'Gestione Utenti',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'icon' => 'heroicon-o-user-circle',
    'sort' => 10,
  ),
=======
    'icon' => 'heroicon-o-user-plus',
    'sort' => 10,
  ),
  'model' => 
  array (
    'label' => 'Medico',
    'plural' => 'Medici',
  ),
>>>>>>> f3e4ec66 (.)
=======
    'icon' => 'heroicon-o-user-circle',
    'sort' => 10,
  ),
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
    'icon' => 'heroicon-o-user-circle',
    'sort' => 10,
  ),
>>>>>>> 8d591468 (fields translations)
  'pages' => 
  array (
    'index' => 
    array (
      'title' => 'Elenco Medici',
      'subtitle' => 'Gestisci i medici registrati nell\'app mobile',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'description' => 'Visualizza e gestisci tutti i medici iscritti alla piattaforma',
=======
>>>>>>> f3e4ec66 (.)
=======
      'description' => 'Visualizza e gestisci tutti i medici iscritti alla piattaforma',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'description' => 'Visualizza e gestisci tutti i medici iscritti alla piattaforma',
>>>>>>> 8d591468 (fields translations)
    ),
    'create' => 
    array (
      'title' => 'Nuovo Medico',
      'subtitle' => 'Registra un nuovo medico',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'description' => 'Inserisci i dati per registrare un nuovo professionista',
=======
>>>>>>> f3e4ec66 (.)
=======
      'description' => 'Inserisci i dati per registrare un nuovo professionista',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'description' => 'Inserisci i dati per registrare un nuovo professionista',
>>>>>>> 8d591468 (fields translations)
    ),
    'edit' => 
    array (
      'title' => 'Modifica Medico',
      'subtitle' => 'Modifica le informazioni del medico',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'description' => 'Aggiorna i dati del professionista',
=======
>>>>>>> f3e4ec66 (.)
=======
      'description' => 'Aggiorna i dati del professionista',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'description' => 'Aggiorna i dati del professionista',
>>>>>>> 8d591468 (fields translations)
    ),
    'view' => 
    array (
      'title' => 'Dettagli Medico',
      'subtitle' => 'Visualizza le informazioni complete del medico',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'description' => 'Dettagli completi del profilo medico',
=======
>>>>>>> f3e4ec66 (.)
=======
      'description' => 'Dettagli completi del profilo medico',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'description' => 'Dettagli completi del profilo medico',
>>>>>>> 8d591468 (fields translations)
    ),
  ),
  'fields' => 
  array (
    'full_name' => 
    array (
      'label' => 'Nome e Cognome',
      'placeholder' => 'Inserisci nome e cognome completi',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
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
<<<<<<< HEAD
=======
      'helper_text' => 'Nome e cognome come registrati nell\'Ordine dei Medici',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Nome e cognome come registrati nell\'Ordine dei Medici',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'email@esempio.com',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Indirizzo email per le comunicazioni',
      'description' => 'email',
<<<<<<< HEAD
=======
      'helper_text' => 'Indirizzo email per le comunicazioni',
<<<<<<< HEAD
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Indirizzo email per le comunicazioni',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'description' => 'email',
>>>>>>> 23f43388 (feat: add openingHoursField to studiorelationmanager of doctorresource)
=======
      'help' => 'Indirizzo email per le comunicazioni',
>>>>>>> 8d591468 (fields translations)
=======
>>>>>>> f158a85a (✨ (lang_service.php, doctor.php, xot_base.php): add Italian translations for doctor certificate fields to enhance localization support)
    ),
    'phone' => 
    array (
      'label' => 'Telefono',
      'placeholder' => '+39 123 456 7890',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Numero di telefono principale',
=======
      'helper_text' => 'Numero di telefono principale',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Numero di telefono principale',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'help' => 'Numero di telefono principale',
>>>>>>> 8d591468 (fields translations)
    ),
    'mobile_phone' => 
    array (
      'label' => 'Cellulare',
      'placeholder' => '+39 123 456 7890',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Numero di cellulare per le notifiche push',
=======
      'helper_text' => 'Numero di cellulare per le notifiche push',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Numero di cellulare per le notifiche push',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'help' => 'Numero di cellulare per le notifiche push',
>>>>>>> 8d591468 (fields translations)
    ),
    'license_number' => 
    array (
      'label' => 'Numero Iscrizione Ordine',
      'placeholder' => 'Inserisci il numero di iscrizione',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Numero di iscrizione all\'Ordine dei Medici',
=======
      'helper_text' => 'Numero di iscrizione all\'Ordine dei Medici',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Numero di iscrizione all\'Ordine dei Medici',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'help' => 'Numero di iscrizione all\'Ordine dei Medici',
>>>>>>> 8d591468 (fields translations)
    ),
    'specialization' => 
    array (
      'label' => 'Specializzazione',
      'placeholder' => 'Seleziona la specializzazione',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Specializzazione medica principale',
=======
      'helper_text' => 'Specializzazione medica principale',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Specializzazione medica principale',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'help' => 'Specializzazione medica principale',
>>>>>>> 8d591468 (fields translations)
    ),
    'clinic_address' => 
    array (
      'label' => 'Indirizzo Studio',
      'placeholder' => 'Via Roma, 123',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Indirizzo dello studio medico',
=======
      'helper_text' => 'Indirizzo dello studio medico',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Indirizzo dello studio medico',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'help' => 'Indirizzo dello studio medico',
>>>>>>> 8d591468 (fields translations)
    ),
    'is_active' => 
    array (
      'label' => 'Attivo',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'help' => 'Il medico può ricevere prenotazioni',
=======
      'helper_text' => 'Il medico può ricevere prenotazioni',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Il medico può ricevere prenotazioni',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'help' => 'Il medico può ricevere prenotazioni',
>>>>>>> 8d591468 (fields translations)
    ),
    'verified_at' => 
    array (
      'label' => 'Data Verifica',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Seleziona la data di verifica',
      'help' => 'Data di verifica della documentazione',
=======
      'helper_text' => 'Data di verifica della documentazione',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Data di verifica della documentazione',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'placeholder' => 'Seleziona la data di verifica',
      'help' => 'Data di verifica della documentazione',
>>>>>>> 8d591468 (fields translations)
    ),
    'device_token' => 
    array (
      'label' => 'Token Dispositivo',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Token generato automaticamente',
      'help' => 'Token per le notifiche push',
=======
      'helper_text' => 'Token per le notifiche push',
>>>>>>> f3e4ec66 (.)
=======
      'helper_text' => 'Token per le notifiche push',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'placeholder' => 'Token generato automaticamente',
      'help' => 'Token per le notifiche push',
>>>>>>> 8d591468 (fields translations)
    ),
    'last_login' => 
    array (
      'label' => 'Ultimo Accesso',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
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
<<<<<<< HEAD
=======
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
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
<<<<<<< HEAD
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
<<<<<<< HEAD
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    'attach' => 
    array (
      'label' => 'attach',
    ),
<<<<<<< HEAD
    'edit' => 
    array (
      'label' => 'edit',
    ),
=======
>>>>>>> 8d591468 (fields translations)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
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
<<<<<<< HEAD
=======
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
    'status' => 
    array (
      'label' => 'status',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
<<<<<<< HEAD
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
    'last_name' => 
    array (
      'description' => 'last_name',
      'helper_text' => 'last_name',
      'placeholder' => 'last_name',
      'label' => 'last_name',
    ),
    'first_name' => 
    array (
      'description' => 'first_name',
      'helper_text' => 'first_name',
      'placeholder' => 'first_name',
      'label' => 'first_name',
    ),
<<<<<<< HEAD
>>>>>>> 23f43388 (feat: add openingHoursField to studiorelationmanager of doctorresource)
=======
    'change-schedule' => 
    array (
      'label' => 'change-schedule',
    ),
    'schedule' => 
    array (
      'label' => 'schedule',
    ),
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
  ),
  'actions' => 
  array (
    'verify' => 
    array (
      'label' => 'Verifica',
      'icon' => 'heroicon-o-check-circle',
      'tooltip' => 'Verifica la documentazione del medico',
<<<<<<< HEAD
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
    ),
    'deactivate' => 
    array (
      'label' => 'Disattiva',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
      'tooltip' => 'Disattiva temporaneamente il medico',
      'confirmation' => 'Sei sicuro di voler disattivare questo medico?',
      'success' => 'Medico disattivato con successo',
      'error' => 'Errore durante la disattivazione del medico',
<<<<<<< HEAD
=======
      'icon' => 'heroicon-o-x-circle',
      'tooltip' => 'Disattiva temporaneamente il medico',
>>>>>>> f3e4ec66 (.)
=======
      'icon' => 'heroicon-o-x-circle',
      'tooltip' => 'Disattiva temporaneamente il medico',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
    ),
    'send_notification' => 
    array (
      'label' => 'Invia Notifica',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
      'tooltip' => 'Invia una notifica push al medico',
      'modal_heading' => 'Invia Notifica',
      'modal_description' => 'Scrivi il messaggio da inviare al medico',
      'success' => 'Notifica inviata con successo',
      'error' => 'Errore durante l\'invio della notifica',
<<<<<<< HEAD
=======
      'icon' => 'heroicon-o-bell',
      'tooltip' => 'Invia una notifica push al medico',
>>>>>>> f3e4ec66 (.)
=======
      'icon' => 'heroicon-o-bell',
      'tooltip' => 'Invia una notifica push al medico',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
    ),
    'view_appointments' => 
    array (
      'label' => 'Vedi Appuntamenti',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
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
<<<<<<< HEAD
=======
      'icon' => 'heroicon-o-calendar-days',
      'tooltip' => 'Visualizza gli appuntamenti del medico',
    ),
>>>>>>> f3e4ec66 (.)
=======
      'icon' => 'heroicon-o-calendar-days',
      'tooltip' => 'Visualizza gli appuntamenti del medico',
    ),
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
  ),
  'filters' => 
  array (
    'active' => 
    array (
      'label' => 'Solo Attivi',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Filtra per medici attivi',
      'help' => 'Mostra solo i medici attualmente attivi',
=======
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'placeholder' => 'Filtra per medici attivi',
      'help' => 'Mostra solo i medici attualmente attivi',
>>>>>>> 8d591468 (fields translations)
    ),
    'verified' => 
    array (
      'label' => 'Solo Verificati',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Filtra per medici verificati',
      'help' => 'Mostra solo i medici con documentazione verificata',
=======
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'placeholder' => 'Filtra per medici verificati',
      'help' => 'Mostra solo i medici con documentazione verificata',
>>>>>>> 8d591468 (fields translations)
    ),
    'specialization' => 
    array (
      'label' => 'Per Specializzazione',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'placeholder' => 'Seleziona specializzazione',
      'help' => 'Filtra per specializzazione medica',
=======
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
      'placeholder' => 'Seleziona specializzazione',
      'help' => 'Filtra per specializzazione medica',
>>>>>>> 8d591468 (fields translations)
    ),
  ),
  'bulk_actions' => 
  array (
    'verify_selected' => 
    array (
      'label' => 'Verifica Selezionati',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
      'tooltip' => 'Verifica tutti i medici selezionati',
      'confirmation' => 'Sei sicuro di voler verificare tutti i medici selezionati?',
      'success' => 'Medici verificati con successo',
      'error' => 'Errore durante la verifica dei medici',
<<<<<<< HEAD
=======
      'icon' => 'heroicon-o-check-circle',
>>>>>>> f3e4ec66 (.)
=======
      'icon' => 'heroicon-o-check-circle',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
    ),
    'send_notification_selected' => 
    array (
      'label' => 'Notifica Selezionati',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
      'tooltip' => 'Invia notifica a tutti i medici selezionati',
      'modal_heading' => 'Notifica Multipla',
      'modal_description' => 'Scrivi il messaggio da inviare a tutti i medici selezionati',
      'success' => 'Notifiche inviate con successo',
      'error' => 'Errore durante l\'invio delle notifiche',
<<<<<<< HEAD
=======
      'icon' => 'heroicon-o-bell',
>>>>>>> f3e4ec66 (.)
=======
      'icon' => 'heroicon-o-bell',
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 8d591468 (fields translations)
    ),
  ),
  'messages' => 
  array (
    'verified_successfully' => 'Medico verificato con successo',
    'deactivated_successfully' => 'Medico disattivato con successo',
    'notification_sent' => 'Notifica inviata con successo',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'empty_state' => 'Nessun medico trovato',
    'loading' => 'Caricamento medici in corso...',
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
    'empty_state' => 'Nessun medico trovato',
    'loading' => 'Caricamento medici in corso...',
>>>>>>> 8d591468 (fields translations)
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
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
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
<<<<<<< HEAD
=======
    'verification_required' => 'È necessaria la verifica della documentazione',
  ),
  'search_placeholder' => 'Cerca per nome, email, telefono o numero iscrizione...',
>>>>>>> f3e4ec66 (.)
);
=======
=======
>>>>>>> 98867c82 (translations)
declare(strict_types=1);

return [
    'model' => [
        'label' => 'Medico',
        'plural' => 'Medici',
        'description' => 'Gestione dei medici registrati nella piattaforma',
    ],

    'navigation' => [
        'label' => 'Medici',
        'group' => 'Gestione Utenti',
        'icon' => 'heroicon-o-user-circle',
        'sort' => 10,
    ],

    'pages' => [
        'index' => [
            'title' => 'Elenco Medici',
            'subtitle' => 'Gestisci i medici registrati nell\'app mobile',
            'description' => 'Visualizza e gestisci tutti i medici iscritti alla piattaforma',
        ],
        'create' => [
            'title' => 'Nuovo Medico',
            'subtitle' => 'Registra un nuovo medico',
            'description' => 'Inserisci i dati per registrare un nuovo professionista',
        ],
        'edit' => [
            'title' => 'Modifica Medico',
            'subtitle' => 'Modifica le informazioni del medico',
            'description' => 'Aggiorna i dati del professionista',
        ],
        'view' => [
            'title' => 'Dettagli Medico',
            'subtitle' => 'Visualizza le informazioni complete del medico',
            'description' => 'Dettagli completi del profilo medico',
        ],
    ],

    'fields' => [
        'full_name' => [
            'label' => 'Nome e Cognome',
            'placeholder' => 'Inserisci nome e cognome completi',
<<<<<<< HEAD
            'helper_text' => 'Nome e cognome come registrati nell\'Ordine dei Medici',
=======
            'help' => 'Nome e cognome come registrati nell\'Ordine dei Medici',
        ],
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Nome del medico',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'help' => 'Cognome del medico',
>>>>>>> 98867c82 (translations)
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'email@esempio.com',
<<<<<<< HEAD
            'helper_text' => 'Indirizzo email per le comunicazioni',
=======
            'help' => 'Indirizzo email per le comunicazioni',
>>>>>>> 98867c82 (translations)
        ],
        'phone' => [
            'label' => 'Telefono',
            'placeholder' => '+39 123 456 7890',
<<<<<<< HEAD
            'helper_text' => 'Numero di telefono principale',
=======
            'help' => 'Numero di telefono principale',
>>>>>>> 98867c82 (translations)
        ],
        'mobile_phone' => [
            'label' => 'Cellulare',
            'placeholder' => '+39 123 456 7890',
<<<<<<< HEAD
            'helper_text' => 'Numero di cellulare per le notifiche push',
=======
            'help' => 'Numero di cellulare per le notifiche push',
>>>>>>> 98867c82 (translations)
        ],
        'license_number' => [
            'label' => 'Numero Iscrizione Ordine',
            'placeholder' => 'Inserisci il numero di iscrizione',
<<<<<<< HEAD
            'helper_text' => 'Numero di iscrizione all\'Ordine dei Medici',
=======
            'help' => 'Numero di iscrizione all\'Ordine dei Medici',
>>>>>>> 98867c82 (translations)
        ],
        'specialization' => [
            'label' => 'Specializzazione',
            'placeholder' => 'Seleziona la specializzazione',
<<<<<<< HEAD
            'helper_text' => 'Specializzazione medica principale',
=======
            'help' => 'Specializzazione medica principale',
>>>>>>> 98867c82 (translations)
        ],
        'clinic_address' => [
            'label' => 'Indirizzo Studio',
            'placeholder' => 'Via Roma, 123',
<<<<<<< HEAD
            'helper_text' => 'Indirizzo dello studio medico',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'helper_text' => 'Il medico può ricevere prenotazioni',
        ],
        'verified_at' => [
            'label' => 'Data Verifica',
            'helper_text' => 'Data di verifica della documentazione',
        ],
        'device_token' => [
            'label' => 'Token Dispositivo',
            'helper_text' => 'Token per le notifiche push',
        ],
        'last_login' => [
            'label' => 'Ultimo Accesso',
            'helper_text' => 'Data e ora dell\'ultimo accesso all\'app',
        ],
        'reset_filters' => [
            'label' => 'Azzera Filtri',
        ],
        'apply_filters' => [
            'label' => 'Applica Filtri',
        ],
        'open_filters' => [
            'label' => 'Apri Filtri',
        ],
        'toggle_columns' => [
            'label' => 'Mostra/Nascondi Colonne',
        ],
        'reorder_records' => [
            'label' => 'Riordina Record',
=======
            'help' => 'Indirizzo dello studio medico',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'help' => 'Il medico può ricevere prenotazioni',
        ],
        'verified_at' => [
            'label' => 'Data Verifica',
            'placeholder' => 'Seleziona la data di verifica',
            'help' => 'Data di verifica della documentazione',
        ],
        'device_token' => [
            'label' => 'Token Dispositivo',
            'placeholder' => 'Token generato automaticamente',
            'help' => 'Token per le notifiche push',
        ],
        'last_login' => [
            'label' => 'Ultimo Accesso',
            'placeholder' => 'Ultimo accesso registrato',
            'help' => 'Data e ora dell\'ultimo accesso all\'app',
        ],
        'status' => [
            'label' => 'Stato',
            'placeholder' => 'Seleziona lo stato',
            'help' => 'Stato attuale del medico nella piattaforma',
        ],
        'schedule' => [
            'label' => 'Orario',
            'placeholder' => 'Configura l\'orario',
            'help' => 'Orario di disponibilità del medico',
>>>>>>> 98867c82 (translations)
        ],
    ],

    'actions' => [
<<<<<<< HEAD
        'verify' => [
            'label' => 'Verifica',
            'icon' => 'heroicon-o-check-circle',
            'tooltip' => 'Verifica la documentazione del medico',
        ],
        'deactivate' => [
            'label' => 'Disattiva',
            'icon' => 'heroicon-o-x-circle',
            'tooltip' => 'Disattiva temporaneamente il medico',
        ],
        'send_notification' => [
            'label' => 'Invia Notifica',
            'icon' => 'heroicon-o-bell',
            'tooltip' => 'Invia una notifica push al medico',
        ],
        'view_appointments' => [
            'label' => 'Vedi Appuntamenti',
            'icon' => 'heroicon-o-calendar-days',
            'tooltip' => 'Visualizza gli appuntamenti del medico',
        ],
=======
        'create' => [
            'label' => 'Crea Medico',
            'tooltip' => 'Registra un nuovo medico',
            'modal_heading' => 'Nuovo Medico',
            'modal_description' => 'Inserisci i dati per registrare un nuovo professionista',
            'success' => 'Medico creato con successo',
            'error' => 'Errore durante la creazione del medico',
        ],
        'edit' => [
            'label' => 'Modifica',
            'tooltip' => 'Modifica i dati del medico',
            'modal_heading' => 'Modifica Medico',
            'modal_description' => 'Aggiorna le informazioni del professionista',
            'success' => 'Medico aggiornato con successo',
            'error' => 'Errore durante l\'aggiornamento del medico',
        ],
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina il medico',
            'confirmation' => 'Sei sicuro di voler eliminare questo medico? Questa azione non può essere annullata.',
            'success' => 'Medico eliminato con successo',
            'error' => 'Errore durante l\'eliminazione del medico',
        ],
        'verify' => [
            'label' => 'Verifica',
            'tooltip' => 'Verifica la documentazione del medico',
            'modal_heading' => 'Verifica Medico',
            'modal_description' => 'Conferma la verifica della documentazione del professionista',
            'success' => 'Medico verificato con successo',
            'error' => 'Errore durante la verifica del medico',
        ],
        'deactivate' => [
            'label' => 'Disattiva',
            'tooltip' => 'Disattiva temporaneamente il medico',
            'confirmation' => 'Sei sicuro di voler disattivare questo medico?',
            'success' => 'Medico disattivato con successo',
            'error' => 'Errore durante la disattivazione del medico',
        ],
        'send_notification' => [
            'label' => 'Invia Notifica',
            'tooltip' => 'Invia una notifica push al medico',
            'modal_heading' => 'Invia Notifica',
            'modal_description' => 'Scrivi il messaggio da inviare al medico',
            'success' => 'Notifica inviata con successo',
            'error' => 'Errore durante l\'invio della notifica',
        ],
        'view_appointments' => [
            'label' => 'Vedi Appuntamenti',
            'tooltip' => 'Visualizza gli appuntamenti del medico',
        ],
        'change_schedule' => [
            'label' => 'Modifica Orario',
            'tooltip' => 'Modifica l\'orario di disponibilità',
            'modal_heading' => 'Modifica Orario',
            'modal_description' => 'Configura gli orari di disponibilità del medico',
            'success' => 'Orario aggiornato con successo',
            'error' => 'Errore durante l\'aggiornamento dell\'orario',
        ],
        'attach' => [
            'label' => 'Collega',
            'tooltip' => 'Collega elemento',
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
>>>>>>> 98867c82 (translations)
    ],

    'filters' => [
        'active' => [
            'label' => 'Solo Attivi',
<<<<<<< HEAD
        ],
        'verified' => [
            'label' => 'Solo Verificati',
        ],
        'specialization' => [
            'label' => 'Per Specializzazione',
=======
            'placeholder' => 'Filtra per medici attivi',
            'help' => 'Mostra solo i medici attualmente attivi',
        ],
        'verified' => [
            'label' => 'Solo Verificati',
            'placeholder' => 'Filtra per medici verificati',
            'help' => 'Mostra solo i medici con documentazione verificata',
        ],
        'specialization' => [
            'label' => 'Per Specializzazione',
            'placeholder' => 'Seleziona specializzazione',
            'help' => 'Filtra per specializzazione medica',
>>>>>>> 98867c82 (translations)
        ],
    ],

    'bulk_actions' => [
        'verify_selected' => [
            'label' => 'Verifica Selezionati',
<<<<<<< HEAD
            'icon' => 'heroicon-o-check-circle',
        ],
        'send_notification_selected' => [
            'label' => 'Notifica Selezionati',
            'icon' => 'heroicon-o-bell',
=======
            'tooltip' => 'Verifica tutti i medici selezionati',
            'confirmation' => 'Sei sicuro di voler verificare tutti i medici selezionati?',
            'success' => 'Medici verificati con successo',
            'error' => 'Errore durante la verifica dei medici',
        ],
        'send_notification_selected' => [
            'label' => 'Notifica Selezionati',
            'tooltip' => 'Invia notifica a tutti i medici selezionati',
            'modal_heading' => 'Notifica Multipla',
            'modal_description' => 'Scrivi il messaggio da inviare a tutti i medici selezionati',
            'success' => 'Notifiche inviate con successo',
            'error' => 'Errore durante l\'invio delle notifiche',
>>>>>>> 98867c82 (translations)
        ],
    ],

    'messages' => [
        'verified_successfully' => 'Medico verificato con successo',
        'deactivated_successfully' => 'Medico disattivato con successo',
        'notification_sent' => 'Notifica inviata con successo',
<<<<<<< HEAD
=======
        'empty_state' => 'Nessun medico trovato',
        'loading' => 'Caricamento medici in corso...',
>>>>>>> 98867c82 (translations)
    ],

    'notifications' => [
        'created' => 'Medico creato con successo',
        'updated' => 'Medico aggiornato con successo',
        'deleted' => 'Medico eliminato con successo',
        'error' => 'Si è verificato un errore durante l\'operazione',
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
<<<<<<< HEAD
    ],

    'search_placeholder' => 'Cerca per nome, email, telefono o numero di iscrizione...',
];
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
=======
  ),
  'search_placeholder' => 'Cerca per nome, email, telefono o numero di iscrizione...',
);
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
        'phone_format' => 'Il numero di telefono deve essere in formato valido',
        'license_number_format' => 'Il numero di iscrizione deve essere valido',
    ],

    'search' => [
        'placeholder' => 'Cerca per nome, email, telefono o numero di iscrizione...',
        'label' => 'Cerca',
        'help' => 'Inserisci il termine di ricerca',
    ],

    'empty_state' => [
        'heading' => 'Nessun medico trovato',
        'description' => 'Non sono stati trovati medici corrispondenti ai criteri di ricerca',
        'action' => 'Aggiungi il primo medico',
    ],
];
>>>>>>> 98867c82 (translations)
=======
);
>>>>>>> 8d591468 (fields translations)
