<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
declare(strict_types=1);

return [
    'widget' => [
        'title' => 'Trova Dottore e Prenota Appuntamento',
        'description' => 'Cerca un dottore nella tua zona e prenota un appuntamento online',
    ],
    
    'steps' => [
        'search_step' => [
            'label' => 'Ricerca Dottore',
            'description' => 'Seleziona specializzazione e località per trovare il dottore giusto',
            'icon' => 'heroicon-o-magnifying-glass',
        ],
        'studio_step' => [
            'label' => 'Scegli Studio',
            'description' => 'Seleziona lo studio medico più comodo per te',
            'icon' => 'heroicon-o-building-office',
        ],
        'date_step' => [
            'label' => 'Seleziona Data',
            'description' => 'Scegli la data più adatta per il tuo appuntamento',
            'icon' => 'heroicon-o-calendar-days',
        ],
        'time_step' => [
            'label' => 'Orario',
            'description' => 'Seleziona l\'orario preferito per la visita',
            'icon' => 'heroicon-o-clock',
        ],
        'confirm_step' => [
            'label' => 'Conferma',
            'description' => 'Verifica i dettagli e conferma la prenotazione',
            'icon' => 'heroicon-o-check-circle',
        ],
    ],
    
    'fields' => [
        'specialization' => [
            'label' => 'Specializzazione',
            'placeholder' => 'Seleziona una specializzazione medica',
            'help' => 'Scegli la specializzazione medica di cui hai bisogno (es. Cardiologia, Dermatologia)',
            'description' => 'La specializzazione determina il tipo di visita che puoi prenotare',
            'helper_text' => '',
        ],
        'location' => [
            'label' => 'Località',
            'placeholder' => 'Inserisci la tua città o zona',
            'help' => 'Specifica dove preferisci che si trovi lo studio medico',
            'description' => 'La ricerca mostrerà i dottori disponibili nella zona indicata',
            'helper_text' => '',
        ],
        'region' => [
            'label' => 'Regione',
            'placeholder' => 'Seleziona la regione',
            'help' => 'Scegli la regione dove cercare il dottore',
            'description' => 'Prima seleziona la regione, poi potrai scegliere provincia e città',
            'helper_text' => '',
        ],
        'province' => [
            'label' => 'Provincia',
            'placeholder' => 'Seleziona la provincia',
            'help' => 'Scegli la provincia nella regione selezionata',
            'description' => 'La provincia restringerà l\'area di ricerca',
            'helper_text' => '',
        ],
        'city' => [
            'label' => 'Città',
            'placeholder' => 'Seleziona la città',
            'help' => 'Scegli la città dove preferisci trovare il dottore',
            'description' => 'La città determinerà i risultati più vicini a te',
            'helper_text' => '',
        ],
        'cap' => [
            'label' => 'CAP',
            'placeholder' => 'Inserisci il codice postale',
            'help' => 'Inserisci il CAP per una ricerca più precisa (opzionale)',
            'description' => 'Il CAP aiuta a trovare studi medici nella tua zona specifica',
            'helper_text' => '',
        ],
        'appointment_type' => [
            'label' => 'Tipo di Appuntamento',
            'placeholder' => 'Seleziona il tipo di visita',
            'help' => 'Scegli se hai bisogno di una prima visita, controllo o consulenza',
            'description' => 'Il tipo di appuntamento influenza durata e costo della visita',
            'helper_text' => '',
        ],
        'selected_studio' => [
            'label' => 'Studio Selezionato',
            'placeholder' => 'Nessuno studio selezionato',
            'help' => 'Studio medico scelto per l\'appuntamento',
            'description' => 'Conferma lo studio dove si svolgerà la visita',
            'helper_text' => '',
        ],
        'selected_studio_name' => [
            'label' => 'Nome Studio',
            'placeholder' => 'Nome dello studio medico',
            'help' => 'Denominazione completa dello studio medico',
            'description' => 'Nome ufficiale della struttura sanitaria',
            'helper_text' => '',
        ],
        'doctor_id' => [
            'label' => 'Dottore',
            'placeholder' => 'Seleziona un dottore',
            'help' => 'Dottore che effettuerà la visita',
            'description' => 'Medico specialista che ti riceverà',
            'helper_text' => '',
        ],
        'studio_id' => [
            'label' => 'Studio',
            'placeholder' => 'Seleziona uno studio',
            'help' => 'Studio medico dove si svolgerà la visita',
            'description' => 'Struttura sanitaria di riferimento',
            'helper_text' => '',
        ],
        'studio_name' => [
            'label' => 'Nome Studio',
            'placeholder' => 'Nome dello studio medico',
            'help' => 'Denominazione dello studio medico selezionato',
            'description' => 'Nome della struttura sanitaria',
            'helper_text' => '',
        ],
        'appointment_date' => [
            'label' => 'Data Appuntamento',
            'placeholder' => 'Seleziona una data',
            'help' => 'Scegli il giorno per il tuo appuntamento',
            'description' => 'Data in cui si svolgerà la visita medica',
            'helper_text' => '',
        ],
        'appointment_time' => [
            'label' => 'Orario Appuntamento',
            'placeholder' => 'Seleziona un orario',
            'help' => 'Scegli l\'orario più comodo per te',
            'description' => 'Ora di inizio della visita medica',
            'helper_text' => '',
        ],
        'appointment_time_display' => [
            'label' => 'Orario Selezionato',
            'placeholder' => 'Nessun orario selezionato',
            'help' => 'Orario confermato per l\'appuntamento',
            'description' => 'Ora in cui inizierà la tua visita',
            'helper_text' => '',
        ],
        'date' => [
            'label' => 'Data',
            'placeholder' => 'Seleziona una data',
            'help' => 'Scegli la data per il tuo appuntamento',
            'description' => 'Giorno in cui si svolgerà la visita',
            'helper_text' => '',
        ],
        'time' => [
            'label' => 'Orario',
            'placeholder' => 'Seleziona un orario',
            'help' => 'Scegli l\'orario preferito',
            'description' => 'Ora di inizio della visita',
            'helper_text' => '',
        ],
        'notes' => [
            'label' => 'Note Aggiuntive',
            'placeholder' => 'Inserisci eventuali note o richieste particolari',
            'help' => 'Aggiungi informazioni utili per il dottore (sintomi, allergie, farmaci)',
            'description' => 'Note che aiuteranno il medico a prepararsi meglio per la visita',
            'helper_text' => '',
        ],
        'search' => [
            'label' => 'Ricerca',
            'placeholder' => 'Cerca dottori nella tua zona',
            'help' => 'Usa i filtri per trovare il dottore più adatto',
            'description' => 'Sistema di ricerca medici specializzati',
            'helper_text' => '',
        ],
    ],
    
    'actions' => [
        'submit' => [
            'label' => 'Conferma Prenotazione',
            'modal' => [
                'heading' => 'Conferma Appuntamento',
                'description' => 'Stai per confermare la prenotazione del tuo appuntamento. Verifica che tutti i dati siano corretti.',
                'confirm' => 'Conferma',
                'cancel' => 'Annulla',
            ],
            'messages' => [
                'success' => 'Appuntamento prenotato con successo! Riceverai una email di conferma.',
                'error' => 'Si è verificato un errore durante la prenotazione. Riprova più tardi.',
                'validation_error' => 'Alcuni campi non sono compilati correttamente. Controlla i dati inseriti.',
            ],
            'tooltip' => 'Completa la prenotazione del tuo appuntamento',
        ],
        'search' => [
            'label' => 'Cerca Dottori',
            'tooltip' => 'Inizia la ricerca dei dottori disponibili',
            'messages' => [
                'success' => 'Ricerca completata',
                'error' => 'Errore durante la ricerca',
                'no_results' => 'Nessun dottore trovato con i criteri selezionati',
            ],
        ],
        'back' => [
            'label' => 'Indietro',
            'tooltip' => 'Torna al passaggio precedente',
        ],
        'next' => [
            'label' => 'Avanti',
            'tooltip' => 'Procedi al passaggio successivo',
        ],
        'reset' => [
            'label' => 'Ricomincia',
            'modal' => [
                'heading' => 'Ricominciare la Ricerca?',
                'description' => 'Tutti i dati inseriti andranno persi. Sei sicuro di voler ricominciare?',
                'confirm' => 'Sì, ricomincia',
                'cancel' => 'No, continua',
            ],
            'tooltip' => 'Cancella tutti i dati e ricomincia la ricerca',
        ],
    ],
    
    'messages' => [
        'welcome' => 'Benvenuto nel sistema di prenotazione online',
        'loading' => 'Caricamento in corso...',
        'no_doctors_found' => 'Nessun dottore trovato con i criteri di ricerca selezionati',
        'no_appointments_available' => 'Non ci sono appuntamenti disponibili per questa data',
        'select_specialization' => 'Seleziona prima una specializzazione',
        'select_location' => 'Specifica la località per la ricerca',
        'appointment_confirmed' => 'Il tuo appuntamento è stato confermato',
        'appointment_pending' => 'La tua prenotazione è in attesa di conferma',
    ],
    
    'empty_states' => [
        'no_doctors' => 'Nessun dottore disponibile',
        'no_appointments' => 'Nessun appuntamento disponibile',
        'no_results' => 'Nessun risultato trovato',
        'search_required' => 'Compila i campi di ricerca per iniziare',
    ],
    
    'validation' => [
        'specialization_required' => 'La specializzazione è obbligatoria',
        'location_required' => 'La località è obbligatoria',
        'date_required' => 'La data è obbligatoria',
        'time_required' => 'L\'orario è obbligatorio',
        'doctor_required' => 'Il dottore è obbligatorio',
        'studio_required' => 'Lo studio è obbligatorio',
        'invalid_date' => 'La data selezionata non è valida',
        'past_date' => 'Non puoi selezionare una data passata',
        'appointment_not_available' => 'L\'orario selezionato non è più disponibile',
    ],
];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
return array (
  'widget' => 
  array (
    'title' => 'Trova Dottore e Prenota Appuntamento',
    'description' => 'Cerca un dottore nella tua zona e prenota un appuntamento online',
  ),
  'steps' => 
  array (
    'search_step' => 
    array (
<<<<<<< HEAD
      'label' => 'search',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
    'confirmation' => 
    array (
      'label' => 'confirmation',
    ),
    'date_time' => 
    array (
      'label' => 'date_time',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    'confirm' => 
    array (
      'label' => 'confirm',
    ),
    'time' => 
    array (
      'label' => 'time',
    ),
    'date' => 
    array (
      'label' => 'date',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
    'Conferma' => 
    array (
      'label' => 'Conferma',
    ),
    'confirm_step' => 
    array (
      'label' => 'confirm_step',
    ),
    'time_step' => 
    array (
      'label' => 'time_step',
    ),
    'date_step' => 
    array (
      'label' => 'date_step',
=======
      'label' => 'Ricerca Dottore',
      'description' => 'Seleziona specializzazione e località per trovare il dottore giusto',
      'icon' => 'heroicon-o-magnifying-glass',
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    ),
    'studio_step' => 
    array (
      'label' => 'Scegli Studio',
      'description' => 'Seleziona lo studio medico più comodo per te',
      'icon' => 'heroicon-o-building-office',
    ),
    'date_step' => 
    array (
      'label' => 'Seleziona Data',
      'description' => 'Scegli la data più adatta per il tuo appuntamento',
      'icon' => 'heroicon-o-calendar-days',
    ),
    'time_step' => 
    array (
      'label' => 'Orario',
      'description' => 'Seleziona l\'orario preferito per la visita',
      'icon' => 'heroicon-o-clock',
    ),
    'confirm_step' => 
    array (
      'label' => 'Conferma',
      'description' => 'Verifica i dettagli e conferma la prenotazione',
      'icon' => 'heroicon-o-check-circle',
    ),
<<<<<<< HEAD
=======
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
  ),
  'fields' => 
  array (
    'specialization' => 
    array (
      'label' => 'Specializzazione',
      'placeholder' => 'Seleziona una specializzazione medica',
      'help' => 'Scegli la specializzazione medica di cui hai bisogno (es. Cardiologia, Dermatologia)',
      'description' => 'La specializzazione determina il tipo di visita che puoi prenotare',
    ),
    'location' => 
    array (
<<<<<<< HEAD
      'label' => 'location',
      'placeholder' => 'location',
      'helper_text' => 'location',
      'description' => 'location',
    ),
    'appointment_type' => 
    array (
      'label' => 'appointment_type',
      'placeholder' => 'appointment_type',
      'helper_text' => 'appointment_type',
      'description' => 'appointment_type',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
    'time' => 
    array (
      'description' => 'time',
      'helper_text' => 'time',
      'label' => 'time',
      'placeholder' => 'time',
    ),
    'date' => 
    array (
      'label' => 'date',
      'placeholder' => 'date',
      'helper_text' => 'date',
      'description' => 'date',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
    'cap' => 
    array (
      'description' => 'cap',
      'helper_text' => 'cap',
      'placeholder' => 'cap',
      'label' => 'cap',
    ),
    'search' => 
    array (
      'description' => 'search',
      'helper_text' => 'search',
      'placeholder' => 'search',
      'label' => 'search',
    ),
    'city' => 
    array (
      'description' => 'city',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => 'city',
      'placeholder' => 'city',
      'label' => 'city',
=======
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
=======
      'helper_text' => 'city',
      'placeholder' => 'city',
      'label' => 'city',
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
      'label' => 'Località',
      'placeholder' => 'Inserisci la tua città o zona',
      'help' => 'Specifica dove preferisci che si trovi lo studio medico',
      'description' => 'La ricerca mostrerà i dottori disponibili nella zona indicata',
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    ),
    'region' => 
    array (
      'label' => 'Regione',
      'placeholder' => 'Seleziona la regione',
      'help' => 'Scegli la regione dove cercare il dottore',
      'description' => 'Prima seleziona la regione, poi potrai scegliere provincia e città',
      'helper_text' => 'region',
    ),
    'province' => 
    array (
      'label' => 'Provincia',
      'placeholder' => 'Seleziona la provincia',
      'help' => 'Scegli la provincia nella regione selezionata',
      'description' => 'La provincia restringerà l\'area di ricerca',
      'helper_text' => 'province',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    'appointment_date' => 
=======
    'city' => 
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    array (
      'label' => 'Città',
      'placeholder' => 'Seleziona la città',
      'help' => 'Scegli la città dove preferisci trovare il dottore',
      'description' => 'La città determinerà i risultati più vicini a te',
    ),
    'cap' => 
    array (
      'label' => 'CAP',
      'placeholder' => 'Inserisci il codice postale',
      'help' => 'Inserisci il CAP per una ricerca più precisa (opzionale)',
      'description' => 'Il CAP aiuta a trovare studi medici nella tua zona specifica',
      'helper_text' => 'cap',
    ),
    'appointment_type' => 
    array (
<<<<<<< HEAD
      'description' => 'appointment_time',
      'helper_text' => 'appointment_time',
      'placeholder' => 'appointment_time',
      'label' => 'appointment_time',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
    'test_field' => 
    array (
      'description' => 'test_field',
      'helper_text' => 'test_field',
      'placeholder' => 'test_field',
      'label' => 'test_field',
=======
      'label' => 'Tipo di Appuntamento',
      'placeholder' => 'Seleziona il tipo di visita',
      'help' => 'Scegli se hai bisogno di una prima visita, controllo o consulenza',
      'description' => 'Il tipo di appuntamento influenza durata e costo della visita',
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
    'selected_studio' => 
    array (
      'label' => 'Studio Selezionato',
      'placeholder' => 'Nessuno studio selezionato',
      'help' => 'Studio medico scelto per l\'appuntamento',
      'description' => 'Conferma lo studio dove si svolgerà la visita',
    ),
    'selected_studio_name' => 
    array (
      'label' => 'Nome Studio',
      'placeholder' => 'Nome dello studio medico',
      'help' => 'Denominazione completa dello studio medico',
      'description' => 'Nome ufficiale della struttura sanitaria',
    ),
    'doctor_id' => 
    array (
      'label' => 'Dottore',
      'placeholder' => 'Seleziona un dottore',
      'help' => 'Dottore che effettuerà la visita',
      'description' => 'Medico specialista che ti riceverà',
      'helper_text' => 'doctor_id',
    ),
    'studio_id' => 
    array (
      'label' => 'Studio',
      'placeholder' => 'Seleziona uno studio',
      'help' => 'Studio medico dove si svolgerà la visita',
      'description' => 'Struttura sanitaria di riferimento',
    ),
    'studio_name' => 
    array (
      'label' => 'Nome Studio',
      'placeholder' => 'Nome dello studio medico',
      'help' => 'Denominazione dello studio medico selezionato',
      'description' => 'Nome della struttura sanitaria',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
    'test' => 
=======
    'appointment_date' => 
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    array (
      'label' => 'Data Appuntamento',
      'placeholder' => 'Seleziona una data',
      'help' => 'Scegli il giorno per il tuo appuntamento',
      'description' => 'Data in cui si svolgerà la visita medica',
    ),
    'appointment_time' => 
    array (
      'label' => 'Orario Appuntamento',
      'placeholder' => 'Seleziona un orario',
      'help' => 'Scegli l\'orario più comodo per te',
      'description' => 'Ora di inizio della visita medica',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
    'appointment_time_display' => 
    array (
      'label' => 'Orario Selezionato',
      'placeholder' => 'Nessun orario selezionato',
      'help' => 'Orario confermato per l\'appuntamento',
      'description' => 'Ora in cui inizierà la tua visita',
    ),
    'date' => 
    array (
      'label' => 'Data',
      'placeholder' => 'Seleziona una data',
      'help' => 'Scegli la data per il tuo appuntamento',
      'description' => 'Giorno in cui si svolgerà la visita',
    ),
    'time' => 
    array (
      'label' => 'Orario',
      'placeholder' => 'Seleziona un orario',
      'help' => 'Scegli l\'orario preferito',
      'description' => 'Ora di inizio della visita',
    ),
    'notes' => 
    array (
      'label' => 'Note Aggiuntive',
      'placeholder' => 'Inserisci eventuali note o richieste particolari',
      'help' => 'Aggiungi informazioni utili per il dottore (sintomi, allergie, farmaci)',
      'description' => 'Note che aiuteranno il medico a prepararsi meglio per la visita',
      'helper_text' => '',
    ),
    'search' => 
    array (
      'label' => 'Ricerca',
      'placeholder' => 'Cerca dottori nella tua zona',
      'help' => 'Usa i filtri per trovare il dottore più adatto',
      'description' => 'Sistema di ricerca medici specializzati',
    ),
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
  ),
  'actions' => 
  array (
    'submit' => 
    array (
      'label' => 'Conferma Prenotazione',
      'modal' => 
      array (
        'heading' => 'Conferma Appuntamento',
        'description' => 'Stai per confermare la prenotazione del tuo appuntamento. Verifica che tutti i dati siano corretti.',
        'confirm' => 'Conferma',
        'cancel' => 'Annulla',
      ),
      'messages' => 
      array (
        'success' => 'Appuntamento prenotato con successo! Riceverai una email di conferma.',
        'error' => 'Si è verificato un errore durante la prenotazione. Riprova più tardi.',
        'validation_error' => 'Alcuni campi non sono compilati correttamente. Controlla i dati inseriti.',
      ),
      'tooltip' => 'Completa la prenotazione del tuo appuntamento',
    ),
    'search' => 
    array (
      'label' => 'Cerca Dottori',
      'tooltip' => 'Inizia la ricerca dei dottori disponibili',
      'messages' => 
      array (
        'success' => 'Ricerca completata',
        'error' => 'Errore durante la ricerca',
        'no_results' => 'Nessun dottore trovato con i criteri selezionati',
      ),
    ),
    'back' => 
    array (
      'label' => 'Indietro',
      'tooltip' => 'Torna al passaggio precedente',
    ),
    'next' => 
    array (
      'label' => 'Avanti',
      'tooltip' => 'Procedi al passaggio successivo',
    ),
    'reset' => 
    array (
      'label' => 'Ricomincia',
      'modal' => 
      array (
        'heading' => 'Ricominciare la Ricerca?',
        'description' => 'Tutti i dati inseriti andranno persi. Sei sicuro di voler ricominciare?',
        'confirm' => 'Sì, ricomincia',
        'cancel' => 'No, continua',
      ),
      'tooltip' => 'Cancella tutti i dati e ricomincia la ricerca',
    ),
<<<<<<< HEAD
=======
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
=======
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> d23ba493 (add calendar)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
  ),
  'messages' => 
  array (
    'welcome' => 'Benvenuto nel sistema di prenotazione online',
    'loading' => 'Caricamento in corso...',
    'no_doctors_found' => 'Nessun dottore trovato con i criteri di ricerca selezionati',
    'no_appointments_available' => 'Non ci sono appuntamenti disponibili per questa data',
    'select_specialization' => 'Seleziona prima una specializzazione',
    'select_location' => 'Specifica la località per la ricerca',
    'appointment_confirmed' => 'Il tuo appuntamento è stato confermato',
    'appointment_pending' => 'La tua prenotazione è in attesa di conferma',
  ),
  'empty_states' => 
  array (
    'no_doctors' => 'Nessun dottore disponibile',
    'no_appointments' => 'Nessun appuntamento disponibile',
    'no_results' => 'Nessun risultato trovato',
    'search_required' => 'Compila i campi di ricerca per iniziare',
  ),
  'validation' => 
  array (
    'specialization_required' => 'La specializzazione è obbligatoria',
    'location_required' => 'La località è obbligatoria',
    'date_required' => 'La data è obbligatoria',
    'time_required' => 'L\'orario è obbligatorio',
    'doctor_required' => 'Il dottore è obbligatorio',
    'studio_required' => 'Lo studio è obbligatorio',
    'invalid_date' => 'La data selezionata non è valida',
    'past_date' => 'Non puoi selezionare una data passata',
    'appointment_not_available' => 'L\'orario selezionato non è più disponibile',
  ),
);
>>>>>>> aurmich/dev
=======
  ),
);
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
