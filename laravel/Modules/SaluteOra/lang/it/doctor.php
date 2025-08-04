<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

return [
  'name' => 'Medici',
  'navigation' => [
=======
return array (
  'name' => 'Medici',
  'navigation' => 
  array (
>>>>>>> aurmich/dev
    'label' => 'Medici',
    'group' => 'Team Medico',
    'icon' => 'heroicon-o-user-group',
    'color' => 'emerald',
    'sort' => 2,
    'tooltip' => 'Gestisci il personale medico e le relative informazioni professionali',
<<<<<<< HEAD
  ],
  'model' => [
    'label' => 'Medico',
    'plural' => 'Medici',
    'description' => 'Gestione del personale medico e delle informazioni professionali',
  ],
  'pages' => [
    'index' => [
      'title' => 'Elenco Medici',
      'subtitle' => 'Gestisci il team medico',
      'description' => 'Visualizza e gestisci tutti i medici registrati',
    ],
    'create' => [
      'title' => 'Nuovo Medico',
      'subtitle' => 'Registra un nuovo medico',
      'description' => 'Aggiungi un nuovo medico al team',
    ],
    'edit' => [
      'title' => 'Modifica Medico',
      'subtitle' => 'Aggiorna i dati del medico',
      'description' => 'Modifica le informazioni del medico selezionato',
    ],
  ],
  'steps' => [
    'personal_info' => [
=======
  ),
  'steps' => 
  array (
    'personal_info' => 
    array (
>>>>>>> aurmich/dev
      'label' => 'Informazioni Personali',
      'description' => 'Inserisci le informazioni personali',
      'icon' => 'heroicon-o-user',
      'color' => 'primary',
      'tooltip' => 'Dati anagrafici e personali del medico',
<<<<<<< HEAD
    ],
    'personal_info_step' => [
      'label' => 'Informazioni Personali',
      'description' => 'Inserisci le informazioni personali',
      'icon' => 'heroicon-o-user',
      'color' => 'primary',
      'tooltip' => 'Dati anagrafici e personali del medico',
    ],
    'moderation' => [
=======
    ),
    'moderation' => 
    array (
>>>>>>> aurmich/dev
      'label' => 'Moderazione',
      'description' => 'Verifica delle informazioni',
      'icon' => 'heroicon-o-shield-check',
      'color' => 'warning',
      'tooltip' => 'Processo di verifica e approvazione del profilo',
<<<<<<< HEAD
    ],
    'contacts' => [
=======
    ),
    'contacts' => 
    array (
>>>>>>> aurmich/dev
      'label' => 'Contatti',
      'description' => 'Informazioni di contatto',
      'icon' => 'heroicon-o-phone',
      'color' => 'info',
      'tooltip' => 'Dati di contatto professionali',
<<<<<<< HEAD
    ],
    'professional' => [
=======
    ),
    'professional' => 
    array (
>>>>>>> aurmich/dev
      'label' => 'Informazioni Professionali',
      'description' => 'Dati professionali e specializzazioni',
      'icon' => 'heroicon-o-academic-cap',
      'color' => 'success',
      'tooltip' => 'Qualifiche e specializzazioni mediche',
<<<<<<< HEAD
    ],
    'availability' => [
=======
    ),
    'availability' => 
    array (
>>>>>>> aurmich/dev
      'label' => 'Disponibilità',
      'description' => 'Orari e giorni di disponibilità',
      'icon' => 'heroicon-o-calendar',
      'color' => 'danger',
      'tooltip' => 'Calendario e orari di ricevimento',
<<<<<<< HEAD
    ],
    'studio' => [
      'label' => 'Studio',
      'description' => 'Informazioni dello studio medico',
      'icon' => 'heroicon-o-building-office-2',
      'color' => 'blue',
      'tooltip' => 'Dati dello studio dove opera',
    ],
    'studio_step' => [
      'label' => 'Studio',
      'description' => 'Informazioni dello studio medico',
      'icon' => 'heroicon-o-building-office-2',
      'color' => 'blue',
      'tooltip' => 'Dati dello studio dove opera',
    ],
    'privacy_step' => [
      'label' => 'Privacy e Consensi',
      'description' => 'Consenso al trattamento dati e comunicazioni marketing',
      'icon' => 'heroicon-o-shield-check',
      'color' => 'info',
      'tooltip' => 'Gestione consensi privacy e marketing',
      'helper_text' => 'Il consenso privacy è obbligatorio per legge, la newsletter è facoltativa',
    ],
    'availability_step' => [
      'label' => 'Disponibilità',
      'description' => 'Gestione orari e giorni di disponibilità',
      'icon' => 'heroicon-o-calendar',
      'color' => 'emerald',
      'tooltip' => 'Configurazione degli orari e dei giorni di disponibilità',
      'helper_text' => '',
    ],
  ],
  'fields' => [
    'id' => [
      'label' => 'ID',
      'placeholder' => 'Identificativo del medico',
      'tooltip' => 'Identificativo univoco del medico',
      'helper_text' => '',
      'description' => 'Identificativo univoco del medico',
    ],
    'first_name' => [
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'tooltip' => 'Nome come registrato all\'Ordine',
      'helper_text' => '',
      'description' => 'Nome anagrafico del medico',
    ],
    'last_name' => [
      'label' => 'Cognome',
      'placeholder' => 'Inserisci il cognome',
      'tooltip' => 'Cognome come registrato all\'Ordine',
      'helper_text' => '',
      'description' => 'Cognome anagrafico del medico',
    ],
    'full_name' => [
      'label' => 'Nome e Cognome',
      'placeholder' => 'Inserisci nome e cognome completi',
      'tooltip' => 'Nome e cognome come registrati all\'Ordine',
      'helper_text' => '',
      'description' => 'Nome e cognome completi del medico',
    ],
    'email' => [
      'label' => 'Email',
      'placeholder' => 'medico@example.com',
      'tooltip' => 'Indirizzo email professionale',
      'helper_text' => '',
      'description' => 'Indirizzo email per comunicazioni professionali',
    ],
    'phone' => [
      'label' => 'Telefono',
      'placeholder' => '+39 123 456 7890',
      'tooltip' => 'Numero di telefono professionale',
      'helper_text' => '',
      'description' => 'Numero di telefono per contatti professionali',
    ],
    'address' => [
      'label' => 'Indirizzo',
      'placeholder' => 'Via Roma, 123',
      'tooltip' => 'Indirizzo dello studio medico',
      'helper_text' => '',
      'description' => 'Indirizzo completo dello studio',
    ],
    'city' => [
      'label' => 'Città',
      'placeholder' => 'Inserisci la città',
      'tooltip' => 'Città dove si trova lo studio',
      'helper_text' => '',
      'description' => 'Città di ubicazione dello studio',
    ],
    'registration_number' => [
      'label' => 'Numero di Iscrizione',
      'placeholder' => 'Inserisci il numero di iscrizione',
      'tooltip' => 'Numero di iscrizione all\'Ordine dei Medici',
      'helper_text' => '',
      'description' => 'Numero di iscrizione all\'Ordine Professionale',
    ],
    'vat_number' => [
      'label' => 'Partita IVA',
      'placeholder' => 'Inserisci la Partita IVA',
      'tooltip' => 'Partita IVA per fatturazione',
      'helper_text' => '',
      'description' => 'Partita IVA per attività professionale',
    ],
    'specialization' => [
      'label' => 'Specializzazione',
      'placeholder' => 'Seleziona la specializzazione',
      'tooltip' => 'Specializzazione medica principale',
      'helper_text' => '',
      'description' => 'Specializzazione medica del dottore',
    ],
    'status' => [
      'label' => 'Stato',
      'placeholder' => 'Seleziona lo stato',
      'tooltip' => 'Stato del profilo medico',
      'helper_text' => '',
      'description' => 'Stato attuale del profilo medico',
      'options' => [
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
        'pending' => 'In attesa',
        'suspended' => 'Sospeso',
      ],
    ],
    'certification' => [
      'label' => 'Certificazione',
      'placeholder' => 'Carica la certificazione',
      'tooltip' => 'Documento di iscrizione all\'Ordine dei Medici',
      'helper_text' => '',
      'description' => 'Certificazione di iscrizione all\'Ordine',
    ],
    'certificates' => [
      'label' => 'Certificati',
      'placeholder' => 'Carica i certificati',
      'tooltip' => 'Certificati e specializzazioni professionali',
      'helper_text' => '',
      'description' => 'Certificati professionali e specializzazioni',
    ],
    'certifications' => [
      'label' => 'Certificazioni',
      'placeholder' => 'Carica le certificazioni',
      'tooltip' => 'Documenti attestanti le qualifiche professionali',
      'helper_text' => '',
      'description' => 'Documenti di certificazione professionale',
    ],
    'moderation_notes' => [
      'label' => 'Note Moderazione',
      'placeholder' => 'Inserisci eventuali note',
      'tooltip' => 'Note interne per il processo di moderazione',
      'helper_text' => '',
      'description' => 'Note per il processo di moderazione del profilo',
    ],
    'availability' => [
      'label' => 'Disponibilità',
      'placeholder' => 'Imposta la disponibilità',
      'tooltip' => 'Giorni e orari di disponibilità per visite',
      'helper_text' => '',
      'description' => 'Calendario di disponibilità per appuntamenti',
    ],
    'day' => [
      'label' => 'Giorno',
      'placeholder' => 'Seleziona il giorno',
      'tooltip' => 'Giorno della settimana di disponibilità',
      'helper_text' => '',
      'description' => 'Giorno della settimana per disponibilità',
      'options' => [
        'monday' => 'Lunedì',
        'tuesday' => 'Martedì',
        'wednesday' => 'Mercoledì',
        'thursday' => 'Giovedì',
        'friday' => 'Venerdì',
        'saturday' => 'Sabato',
        'sunday' => 'Domenica',
      ],
    ],
    'start_time' => [
      'label' => 'Ora Inizio',
      'placeholder' => 'Seleziona l\'ora di inizio',
      'tooltip' => 'Orario di inizio della disponibilità',
      'helper_text' => '',
      'description' => 'Orario di inizio della disponibilità giornaliera',
    ],
    'end_time' => [
      'label' => 'Ora Fine',
      'placeholder' => 'Seleziona l\'ora di fine',
      'tooltip' => 'Orario di fine della disponibilità',
      'helper_text' => '',
      'description' => 'Orario di fine della disponibilità giornaliera',
    ],
    'attach' => [
      'label' => 'Allegati',
      'placeholder' => 'Carica allegati',
      'tooltip' => 'Documenti allegati al profilo',
      'helper_text' => '',
      'description' => 'Documenti e allegati del profilo medico',
    ],
    'created_at' => [
      'label' => 'Data Creazione',
      'placeholder' => 'Data di registrazione',
      'tooltip' => 'Data di registrazione del medico',
      'helper_text' => '',
      'description' => 'Data di registrazione nel sistema',
    ],
    'toggle_columns' => [
      'label' => 'Mostra/Nascondi Colonne',
      'placeholder' => 'Gestisci colonne',
      'tooltip' => 'Gestisci la visibilità delle colonne nella tabella',
      'helper_text' => '',
      'description' => 'Controllo visibilità colonne tabella',
    ],
    'reorder_records' => [
      'label' => 'Riordina Record',
      'placeholder' => 'Riordina elementi',
      'tooltip' => 'Modifica l\'ordine dei record nella tabella',
      'helper_text' => '',
      'description' => 'Funzione di riordinamento record',
    ],
    'reset_filters' => [
      'label' => 'Reset Filtri',
      'placeholder' => 'Reimposta filtri',
      'tooltip' => 'Ripristina i filtri ai valori predefiniti',
      'helper_text' => '',
      'description' => 'Ripristino filtri applicati',
    ],
    'apply_filters' => [
      'label' => 'Applica Filtri',
      'placeholder' => 'Applica filtri selezionati',
      'tooltip' => 'Applica i filtri selezionati',
      'helper_text' => '',
      'description' => 'Applicazione filtri di ricerca',
    ],
    'open_filters' => [
      'label' => 'Apri Filtri',
      'placeholder' => 'Mostra filtri',
      'tooltip' => 'Apri il pannello dei filtri di ricerca',
      'helper_text' => '',
      'description' => 'Apertura pannello filtri',
    ],
    'privacy_acceptance' => [
      'label' => 'Accettazione Privacy',
      'placeholder' => 'Accetto l\'informativa sulla privacy',
      'tooltip' => 'Devi accettare l\'informativa sulla privacy per continuare',
      'description' => 'Consenso al trattamento dei dati personali',
      'helper_text' => '',
    ],
    'doctor_certificate' => [
      'label' => 'Certificato',
      'description' => 'Certificato medico o documentazione sanitaria',
      'placeholder' => 'Carica Tesserino sanitario o certificato di iscrizione all\'Ordine',
      'tooltip' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
      'helper_text' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
    ],
    'schedule' => [
      'label' => 'Programma',
      'description' => 'Programma e orari di disponibilità',
      'placeholder' => 'Imposta il programma',
      'tooltip' => 'Gestisci il programma di disponibilità',
      'helper_text' => '',
    ],
    'value' => [
      'label' => 'Valore',
      'description' => 'Valore del campo',
      'placeholder' => 'Inserisci valore',
      'tooltip' => 'Valore da inserire',
      'helper_text' => '',
    ],
    'delete' => [
      'label' => 'Elimina',
      'placeholder' => 'Conferma eliminazione',
      'tooltip' => 'Elimina l\'elemento selezionato',
      'description' => 'Azione di eliminazione',
      'helper_text' => '',
    ],
    'applyFilters' => [
      'label' => 'Applica Filtri',
      'placeholder' => 'Applica filtri selezionati',
      'tooltip' => 'Applica i filtri di ricerca',
      'description' => 'Applicazione filtri',
      'helper_text' => '',
    ],
    'toggleColumns' => [
      'label' => 'Mostra/Nascondi Colonne',
      'placeholder' => 'Gestisci colonne',
      'tooltip' => 'Gestisci visibilità colonne',
      'description' => 'Controllo colonne tabella',
      'helper_text' => '',
    ],
    'reorderRecords' => [
      'label' => 'Riordina Record',
      'placeholder' => 'Riordina elementi',
      'tooltip' => 'Riordina i record della tabella',
      'description' => 'Riordinamento record',
      'helper_text' => '',
    ],
    'resetFilters' => [
      'label' => 'Reset Filtri',
      'placeholder' => 'Reimposta filtri',
      'tooltip' => 'Reimposta tutti i filtri',
      'description' => 'Reset filtri',
      'helper_text' => '',
    ],
    'name' => [
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'tooltip' => 'Nome dell\'elemento',
      'description' => 'Nome identificativo',
      'helper_text' => '',
    ],
    'type' => [
      'label' => 'Tipo',
      'placeholder' => 'Seleziona il tipo',
      'tooltip' => 'Tipologia dell\'elemento',
      'description' => 'Tipo di elemento',
      'helper_text' => '',
    ],
    'state' => [
      'label' => 'Stato',
      'placeholder' => 'Seleziona lo stato',
      'tooltip' => 'Stato dell\'elemento',
      'description' => 'Stato attuale',
      'helper_text' => '',
    ],
    'create' => [
      'label' => 'Crea',
      'placeholder' => 'Crea nuovo elemento',
      'tooltip' => 'Crea un nuovo elemento',
      'description' => 'Azione di creazione',
      'helper_text' => '',
    ],
    'layout' => [
      'label' => 'Layout',
      'placeholder' => 'Seleziona layout',
      'tooltip' => 'Layout di visualizzazione',
      'description' => 'Impostazioni layout',
      'helper_text' => '',
    ],
    'changePassword' => [
      'label' => 'Cambia Password',
      'placeholder' => 'Inserisci nuova password',
      'tooltip' => 'Modifica la password',
      'description' => 'Cambio password',
      'helper_text' => '',
    ],
    'view' => [
      'label' => 'Visualizza',
      'placeholder' => 'Visualizza dettagli',
      'tooltip' => 'Visualizza l\'elemento',
      'description' => 'Azione di visualizzazione',
      'helper_text' => '',
    ],
    'edit' => [
      'label' => 'Modifica',
      'placeholder' => 'Modifica elemento',
      'tooltip' => 'Modifica l\'elemento',
      'description' => 'Azione di modifica',
      'helper_text' => '',
    ],
    'openFilters' => [
      'label' => 'Apri Filtri',
      'placeholder' => 'Mostra pannello filtri',
      'tooltip' => 'Apri il pannello dei filtri',
      'description' => 'Apertura filtri',
      'helper_text' => '',
    ],
    'data_privacy_form' => [
      'label' => 'Modulo Trattamento Dati',
      'description' => 'Modulo per il consenso al trattamento dei dati personali',
      'placeholder' => 'Carica il modulo Trattamento Dati compilato',
      'tooltip' => 'Upload del modulo privacy compilato e firmato',
      'helper_text' => '',
    ],
  ],
  'filters' => [
    'search_placeholder' => 'Cerca medici...',
    'is_active' => [
      'label' => 'Stato',
      'placeholder' => 'Filtra per stato',
      'tooltip' => 'Filtra i medici per stato del profilo',
      'helper_text' => '',
      'description' => 'Filtro per stato del profilo medico',
      'options' => [
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
        'pending' => 'In attesa',
        'suspended' => 'Sospeso',
      ],
    ],
    'specialization' => [
      'label' => 'Specializzazione',
      'placeholder' => 'Filtra per specializzazione',
      'tooltip' => 'Filtra per specializzazione medica',
      'helper_text' => '',
      'description' => 'Filtro per specializzazione medica',
    ],
    'city' => [
      'label' => 'Città',
      'placeholder' => 'Filtra per città',
      'tooltip' => 'Filtra per città dello studio',
      'helper_text' => '',
      'description' => 'Filtro per città di ubicazione studio',
    ],
  ],
  'actions' => [
    'create' => [
      'label' => 'Crea Nuovo Medico',
      'modal_heading' => 'Registrazione Nuovo Medico',
      'modal_description' => 'Inserisci i dati per registrare un nuovo medico nel sistema',
      'success' => 'Medico creato con successo',
      'error' => 'Si è verificato un errore durante la creazione del medico',
      'confirmation' => 'Confermi di voler creare questo medico?',
      'buttons' => [
        'confirm' => 'Conferma',
        'cancel' => 'Annulla',
      ],
    ],
    'edit' => [
      'label' => 'Modifica Medico',
      'modal_heading' => 'Modifica Dati Medico',
      'modal_description' => 'Aggiorna i dati del medico selezionato',
      'success' => 'Medico aggiornato con successo',
      'error' => 'Si è verificato un errore durante l\'aggiornamento del medico',
    ],
    'delete' => [
      'label' => 'Elimina Medico',
      'modal_heading' => 'Elimina Medico',
      'modal_description' => 'Sei sicuro di voler eliminare questo medico? Questa azione è irreversibile.',
      'success' => 'Medico eliminato con successo',
      'error' => 'Si è verificato un errore durante l\'eliminazione del medico',
      'confirmation' => 'Sei sicuro di voler eliminare questo medico? Questa azione è irreversibile.',
      'buttons' => [
        'confirm' => 'Elimina',
        'cancel' => 'Annulla',
      ],
    ],
    'view' => [
      'label' => 'Visualizza Medico',
      'modal_heading' => 'Dettagli Medico',
    ],
    'download_privacy_form' => [
      'label' => 'Scarica Modulo Privacy',
      'tooltip' => 'Scarica il modulo per il trattamento dei dati personali',
      'description' => 'Modulo privacy da compilare e firmare',
      'success' => 'Modulo privacy scaricato con successo',
      'error' => 'Si è verificato un errore durante il download del modulo',
    ],
  ],
  'messages' => [
    'created' => 'Medico creato con successo',
    'updated' => 'Medico aggiornato con successo',
    'deleted' => 'Medico eliminato con successo',
    'approved' => 'Medico approvato con successo',
    'suspended' => 'Medico sospeso con successo',
    'activated' => 'Medico attivato con successo',
    'certification_uploaded' => 'Certificazione caricata con successo',
    'certification_verified' => 'Certificazione verificata con successo',
    'availability_updated' => 'Disponibilità aggiornata con successo',
  ],
  'sections' => [
    'personal_info' => [
      'label' => 'Informazioni Personali',
      'description' => 'Dati anagrafici del medico',
      'tooltip' => 'Sezione per i dati personali del medico',
      'helper_text' => '',
    ],
    'contact_info' => [
      'label' => 'Informazioni di Contatto',
      'description' => 'Recapiti professionali',
      'tooltip' => 'Sezione per i contatti professionali',
      'helper_text' => '',
    ],
    'professional_info' => [
      'label' => 'Informazioni Professionali',
      'description' => 'Qualifiche e specializzazioni',
      'tooltip' => 'Sezione per le qualifiche professionali',
      'helper_text' => '',
    ],
    'availability_settings' => [
      'label' => 'Impostazioni Disponibilità',
      'description' => 'Orari e giorni di ricevimento',
      'tooltip' => 'Sezione per la gestione della disponibilità',
      'helper_text' => '',
    ],
    'documents' => [
      'label' => 'Documenti',
      'description' => 'Certificazioni e allegati',
      'tooltip' => 'Sezione per i documenti e certificazioni',
      'helper_text' => '',
    ],
  ],
  'validation' => [
    'required' => 'Il campo :attribute è obbligatorio',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido',
    'unique' => 'Il valore del campo :attribute è già in uso',
    'min' => 'Il campo :attribute deve essere di almeno :min caratteri',
    'max' => 'Il campo :attribute non può superare i :max caratteri',
    'registration_number_format' => 'Il numero di iscrizione deve essere nel formato corretto',
    'vat_number_format' => 'La partita IVA deve essere nel formato corretto',
    'phone_format' => 'Il numero di telefono deve essere nel formato corretto',
  ],
  'empty_state' => [
    'heading' => 'Nessun medico trovato',
    'description' => 'Non ci sono medici registrati che corrispondono ai criteri di ricerca',
    'action' => 'Registra il primo medico',
  ],
  'specialties' => [
    'label' => 'Specializzazioni',
    'description' => 'Specializzazioni mediche del dottore',
    'tooltip' => 'Gestione delle specializzazioni mediche',
    'helper_text' => '',
    'empty' => 'Nessuna specializzazione registrata',
  ],
  'widgets' => [
    'user_type_registrations_chart' => [
      'heading' => 'Registrazioni Medici nel Tempo',
      'description' => 'Grafico che mostra l\'andamento delle registrazioni medici',
      'label' => 'Nuove registrazioni',
      'tooltip' => 'Numero di medici registrati per periodo',
    ],
    'states_chart' => [
      'heading' => 'Distribuzione Stati Medici',
      'description' => 'Grafico che mostra la distribuzione degli stati dei medici',
      'label' => 'Stati medici',
      'tooltip' => 'Distribuzione dei medici per stato',
    ],
  ],
  'states' => [
    'active' => [
      'label' => 'Attivo',
      'description' => 'Medico attivo nel sistema',
      'tooltip' => 'Il medico è attivo e può ricevere appuntamenti',
      'color' => 'success',
      'icon' => 'heroicon-o-check-circle',
    ],
    'pending' => [
      'label' => 'In Attesa',
      'description' => 'Medico in attesa di approvazione',
      'tooltip' => 'Il medico è in attesa di essere approvato',
      'color' => 'warning',
      'icon' => 'heroicon-o-clock',
    ],
    'inactive' => [
      'label' => 'Non Attivo',
      'description' => 'Medico non attivo nel sistema',
      'tooltip' => 'Il medico è stato disattivato',
      'color' => 'danger',
      'icon' => 'heroicon-o-x-circle',
    ],
    'rejected' => [
      'label' => 'Rifiutato',
      'description' => 'Registrazione medico rifiutata',
      'tooltip' => 'La registrazione del medico è stata rifiutata',
      'color' => 'danger',
      'icon' => 'heroicon-o-x-mark',
    ],
    'suspended' => [
      'label' => 'Sospeso',
      'description' => 'Medico sospeso temporaneamente',
      'tooltip' => 'Il medico è stato sospeso temporaneamente',
      'color' => 'warning',
      'icon' => 'heroicon-o-pause',
    ],
    'integration_requested' => [
      'label' => 'Integrazione Richiesta',
      'description' => 'Richiesta integrazione documentale',
      'tooltip' => 'Il medico deve integrare la documentazione',
      'color' => 'info',
      'icon' => 'heroicon-o-document-plus',
    ],
    'integration_completed' => [
      'label' => 'Integrazione Completata',
      'description' => 'Integrazione documentale completata',
      'tooltip' => 'Il medico ha completato l\'integrazione della documentazione',
      'color' => 'success',
      'icon' => 'heroicon-o-document-check',
    ],
  ],
];
=======
    ),
    'studio' => 
    array (
      'label' => 'studio',
    ),
  ),
  'fields' => 
  array (
    'full_name' => 
    array (
      'label' => 'Nome e Cognome',
      'placeholder' => 'Inserisci nome e cognome completi',
      'helper_text' => 'Nome e cognome del medico',
      'description' => 'Nome e cognome come registrati all\'Ordine',
      'tooltip' => 'Nome e cognome completo del medico',
    ),
    'certification' => 
    array (
      'label' => 'Certificazione',
      'placeholder' => 'Carica la certificazione',
      'helper_text' => 'Certificazione di iscrizione all\'Ordine',
      'description' => 'Documento che attesta l\'iscrizione all\'Ordine',
      'tooltip' => 'Documento ufficiale di iscrizione all\'Ordine',
    ),
    'moderation_notes' => 
    array (
      'label' => 'Note Moderazione',
      'placeholder' => 'Inserisci eventuali note',
      'helper_text' => 'Note per la moderazione del profilo',
      'description' => 'Note interne per la moderazione',
      'tooltip' => 'Note riservate per il processo di moderazione',
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'Inserisci l\'email',
      'helper_text' => 'Indirizzo email professionale',
      'description' => 'Email per le comunicazioni professionali',
      'tooltip' => 'Indirizzo email per contatti professionali',
    ),
    'phone' => 
    array (
      'label' => 'Telefono',
      'placeholder' => 'Inserisci il numero di telefono',
      'helper_text' => 'Numero di telefono professionale',
      'description' => 'Telefono per le comunicazioni professionali',
      'tooltip' => 'Numero di telefono per contatti professionali',
    ),
    'address' => 
    array (
      'label' => 'Indirizzo',
      'placeholder' => 'Inserisci l\'indirizzo dello studio',
      'helper_text' => 'Indirizzo dello studio professionale',
      'description' => 'Indirizzo completo dello studio',
      'tooltip' => 'Indirizzo completo dello studio medico',
    ),
    'city' => 
    array (
      'label' => 'Città',
      'placeholder' => 'Inserisci la città',
      'helper_text' => 'Città dello studio',
      'description' => 'Città dove si trova lo studio',
      'tooltip' => 'Città di ubicazione dello studio',
    ),
    'registration_number' => 
    array (
      'label' => 'Numero di Iscrizione',
      'placeholder' => 'Inserisci il numero di iscrizione',
      'helper_text' => 'Numero di iscrizione all\'Ordine',
      'description' => 'Numero di iscrizione all\'Ordine dei Medici',
      'tooltip' => 'Numero di iscrizione all\'Ordine dei Medici',
    ),
    'certifications' => 
    array (
      'label' => 'Certificazioni',
      'placeholder' => 'Carica le certificazioni',
      'helper_text' => 'Certificazioni professionali',
      'description' => 'Certificazioni e specializzazioni',
      'tooltip' => 'Documenti attestanti le qualifiche professionali',
    ),
    'availability' => 
    array (
      'label' => 'Disponibilità',
      'placeholder' => 'Imposta la disponibilità',
      'helper_text' => 'Orari di disponibilità',
      'description' => 'Giorni e orari di disponibilità',
      'tooltip' => 'Calendario degli orari di ricevimento',
    ),
    'day' => 
    array (
      'label' => 'Giorno',
      'placeholder' => 'Seleziona il giorno',
      'helper_text' => 'Giorno della settimana',
      'description' => 'Giorno di disponibilità',
      'tooltip' => 'Giorno della settimana per il ricevimento',
    ),
    'start_time' => 
    array (
      'label' => 'Ora Inizio',
      'placeholder' => 'Seleziona l\'ora di inizio',
      'helper_text' => 'Ora di inizio disponibilità',
      'description' => 'Orario di inizio della disponibilità',
      'tooltip' => 'Orario di inizio del ricevimento',
    ),
    'end_time' => 
    array (
      'label' => 'Ora Fine',
      'placeholder' => 'Seleziona l\'ora di fine',
      'helper_text' => 'Ora di fine disponibilità',
      'description' => 'Orario di fine della disponibilità',
      'tooltip' => 'Orario di fine del ricevimento',
    ),
    'last_name' => 
    array (
      'label' => 'Cognome',
      'placeholder' => 'Inserisci il cognome',
      'help' => 'Inserisci il cognome completo',
      'description' => 'Cognome come registrato all\'Ordine',
      'tooltip' => 'Cognome del medico',
      'helper_text' => 'last_name',
    ),
    'first_name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Inserisci il nome completo',
      'description' => 'Nome come registrato all\'Ordine',
      'tooltip' => 'Nome del medico',
      'helper_text' => 'first_name',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'name' => 
    array (
      'label' => 'name',
    ),
    'specialties' => 
    array (
      'name' => 
      array (
        'label' => 'specialties.name',
      ),
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'specialization' => 
    array (
      'label' => 'specialization',
      'description' => 'specialization',
      'helper_text' => 'specialization',
    ),
    'status' => 
    array (
      'label' => 'status',
    ),
    'created_at' => 
    array (
      'label' => 'created_at',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'certificates' => 
    array (
      'label' => 'certificates',
    ),
    'id' => 
    array (
      'description' => 'id',
      'helper_text' => 'id',
      'placeholder' => 'id',
      'label' => 'id',
    ),
    'vat_number' => 
    array (
      'description' => 'vat_number',
    ),
  ),
  'filters' => 
  array (
    'search_placeholder' => 'Cerca medici...',
    'is_active' => 
    array (
      'label' => 'Stato',
      'options' => 
      array (
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
      ),
      'tooltip' => 'Filtra per stato del profilo',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Nuovo Medico',
      'icon' => 'heroicon-o-plus',
      'color' => 'primary',
      'modal' => 
      array (
        'heading' => 'Crea Nuovo Medico',
        'description' => 'Inserisci i dati del nuovo medico',
      ),
      'tooltip' => 'Aggiungi un nuovo medico al sistema',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'icon' => 'heroicon-o-pencil',
      'color' => 'warning',
      'modal' => 
      array (
        'heading' => 'Modifica Medico',
        'description' => 'Modifica i dati del medico',
      ),
      'tooltip' => 'Modifica i dati del medico selezionato',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'icon' => 'heroicon-o-trash',
      'color' => 'danger',
      'modal' => 
      array (
        'heading' => 'Elimina Medico',
        'description' => 'Sei sicuro di voler eliminare questo medico? Questa azione non può essere annullata.',
      ),
      'tooltip' => 'Elimina il medico selezionato',
    ),
  ),
  'messages' => 
  array (
    'created' => 'Medico creato con successo',
    'updated' => 'Medico aggiornato con successo',
    'deleted' => 'Medico eliminato con successo',
  ),
  'model' => 
  array (
    'label' => 'Medico',
  ),
);
>>>>>>> aurmich/dev
=======
declare(strict_types=1);

return [
    'navigation' => [
        'group' => 'Gestione Medici',
        'label' => 'Medici',
        'plural' => 'Medici',
        'singular' => 'Medico',
        'icon' => 'heroicon-o-user-group',
        'sort' => 2,
    ],

    'fields' => [
        'full_name' => [
            'label' => 'Nome Completo',
            'placeholder' => 'Inserisci il nome completo',
            'help' => 'Nome e cognome del medico',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'indirizzo email',
            'help' => 'Indirizzo email principale per le comunicazioni',
        ],
        'phone' => [
            'label' => 'Telefono',
            'placeholder' => 'Inserisci il numero di telefono',
            'help' => 'Numero di telefono per contatti diretti',
        ],
        'address' => [
            'label' => 'Indirizzo',
            'placeholder' => 'Inserisci l\'indirizzo',
            'help' => 'Indirizzo dello studio medico',
        ],
        'city' => [
            'label' => 'Città',
            'placeholder' => 'Inserisci la città',
            'help' => 'Città dello studio medico',
        ],
        'registration_number' => [
            'label' => 'Numero di Iscrizione',
            'placeholder' => 'Inserisci il numero di iscrizione all\'albo',
            'help' => 'Numero di iscrizione all\'albo dei medici',
        ],
        'certification' => [
            'label' => 'Certificazione',
            'placeholder' => 'Carica la certificazione',
            'help' => 'Documento di certificazione professionale',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'help' => 'Indica se il medico è attualmente disponibile',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
        ],
    ],

    'filters' => [
        'search_placeholder' => 'Cerca medici...',
        'is_active' => [
            'label' => 'Stato',
            'options' => [
                'active' => 'Attivo',
                'inactive' => 'Inattivo',
            ],
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'Nuovo Medico',
            'modal' => [
                'heading' => 'Crea Nuovo Medico',
                'description' => 'Inserisci i dati del nuovo medico',
            ],
        ],
        'edit' => [
            'label' => 'Modifica',
            'modal' => [
                'heading' => 'Modifica Medico',
                'description' => 'Modifica i dati del medico',
            ],
        ],
        'delete' => [
            'label' => 'Elimina',
            'modal' => [
                'heading' => 'Elimina Medico',
                'description' => 'Sei sicuro di voler eliminare questo medico? Questa azione non può essere annullata.',
            ],
        ],
    ],

    'messages' => [
        'created' => 'Medico creato con successo',
        'updated' => 'Medico aggiornato con successo',
        'deleted' => 'Medico eliminato con successo',
    ],
];
>>>>>>> 54f4fa16 (.)
