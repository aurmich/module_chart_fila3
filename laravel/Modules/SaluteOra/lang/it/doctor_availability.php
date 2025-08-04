<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return array (
  'navigation' => 
  array (
<<<<<<< HEAD
    'label' => 'Disponibilità Medici',
    'group' => 'Agenda',
=======
return array (
  'navigation' => 
  array (
    'label' => 'Disponibilità Medici',
    'group' => 'Gestione',
>>>>>>> 2bcfd382 (fix Address)
    'icon' => 'heroicon-o-calendar',
    'sort' => 6,
  ),
  'model' => 
  array (
<<<<<<< HEAD
    'label' => 'Disponibilità Medico',
    'plural' => 'Disponibilità Medici',
  ),
  'sections' => 
  array (
    'general_settings' => 'Impostazioni Generali',
    'weekly_availability' => 'Disponibilità Settimanale',
    'exceptions' => 'Eccezioni e Giorni Speciali',
    'pending_appointments' => 'Appuntamenti in Attesa di Approvazione',
    'pending_appointments_description' => 'Qui puoi vedere e gestire tutti gli appuntamenti in attesa della tua approvazione.',
    'calendar' => 'Calendario Disponibilità',
    'calendar_description' => 'Visualizza i tuoi appuntamenti e le tue disponibilità in un\'unica vista.',
  ),
  'fields' => 
  array (
    'is_accepting_appointments' => 
    array (
      'label' => 'Accetto nuovi appuntamenti',
      'help' => 'Abilita/disabilita la possibilità per i pazienti di prenotare nuovi appuntamenti con te.',
    ),
    'default_duration' => 
    array (
      'label' => 'Durata predefinita degli appuntamenti',
      'help' => 'La durata predefinita degli appuntamenti in minuti.',
    ),
    'notice_hours' => 
    array (
      'label' => 'Preavviso minimo',
      'help' => 'Il preavviso minimo richiesto per prenotare un appuntamento (in ore).',
    ),
    'day' => 
    array (
      'label' => 'Giorno della settimana',
    ),
    'start_time' => 
    array (
      'label' => 'Ora di inizio',
    ),
    'end_time' => 
    array (
      'label' => 'Ora di fine',
    ),
    'is_available' => 
    array (
      'label' => 'Disponibile',
      'help' => 'Indica se sei disponibile in questo intervallo orario.',
    ),
    'date' => 
    array (
      'label' => 'Data',
    ),
    'exception_available' => 
    array (
      'help' => 'Attiva per aggiungere disponibilità extra in un giorno specifico. Disattiva per bloccare un periodo in cui normalmente saresti disponibile.',
    ),
  ),
  'actions' => 
  array (
    'save' => 
    array (
      'label' => 'save',
    ),
    'add_exception' => 'Aggiungi Eccezione',
    'approve' => 'Approva',
    'reject' => 'Rifiuta',
    'toggle_appointments' => 'Appuntamenti',
    'toggle_availability' => 'Disponibilità',
  ),
  'notifications' => 
  array (
    'saved' => 
    array (
      'title' => 'Disponibilità salvate',
      'body' => 'Le tue disponibilità sono state aggiornate con successo.',
    ),
    'not_doctor' => 
    array (
      'title' => 'Utente non autorizzato',
      'body' => 'Solo i profili medico possono gestire le disponibilità.',
    ),
    'error' => 
    array (
      'title' => 'Errore durante il salvataggio',
      'body' => 'Si è verificato un errore durante il salvataggio delle disponibilità.',
    ),
    'not_found' => 
    array (
      'title' => 'Appuntamento non trovato',
      'body' => 'L\'appuntamento selezionato non esiste o non è associato al tuo profilo.',
    ),
    'appointment_approved' => 
    array (
      'title' => 'Appuntamento approvato',
      'body' => 'L\'appuntamento è stato confermato con successo.',
    ),
    'appointment_rejected' => 
    array (
      'title' => 'Appuntamento rifiutato',
      'body' => 'L\'appuntamento è stato rifiutato con successo.',
    ),
  ),
  'calendar' => 
  array (
    'month' => 'Mese',
    'week' => 'Settimana',
    'day' => 'Giorno',
  ),
  'legend' => 
  array (
    'pending' => 'In Attesa',
    'confirmed' => 'Confermato',
    'completed' => 'Completato',
    'cancelled' => 'Cancellato',
    'no_show' => 'Non Presentato',
    'availability' => 'Guida Orari',
  ),
  'table' => 
  array (
    'patient' => 'Paziente',
    'date' => 'Data',
    'time' => 'Orario',
    'reason' => 'Motivo',
    'actions' => 'Azioni',
  ),
  'empty_states' => 
  array (
    'no_pending_appointments' => 'Nessun appuntamento in attesa',
    'no_pending_appointments_description' => 'Non ci sono appuntamenti in attesa di approvazione.',
  ),
  'available' => 'Disponibile',
=======
    'label' => 'doctor availability.navigation',
    'group' => 'doctor availability.navigation',
    'icon' => 'doctor availability.navigation',
    'sort' => 6,
  ),
>>>>>>> 54f4fa16 (.)
);
=======
=======
>>>>>>> d18a3adf (✨ (saluteora): implement new DoctorAvailabilityCalendar widget to manage doctor availability using FullCalendar)
return [
    'navigation' => [
        'label' => 'Disponibilità Medici',
        'group' => 'Agenda',
        'icon' => 'heroicon-o-calendar',
        'sort' => 6,
    ],
<<<<<<< HEAD
];
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    'label' => 'doctor availability.model',
  ),
);
>>>>>>> 2bcfd382 (fix Address)
=======
    'model' => [
        'label' => 'Disponibilità Medico',
        'plural' => 'Disponibilità Medici',
    ],
    'sections' => [
        'general_settings' => 'Impostazioni Generali',
        'weekly_availability' => 'Disponibilità Settimanale',
        'exceptions' => 'Eccezioni e Giorni Speciali',
        'pending_appointments' => 'Appuntamenti in Attesa di Approvazione',
        'pending_appointments_description' => 'Qui puoi vedere e gestire tutti gli appuntamenti in attesa della tua approvazione.',
        'calendar' => 'Calendario Disponibilità',
        'calendar_description' => 'Visualizza i tuoi appuntamenti e le tue disponibilità in un\'unica vista.',
    ],
    'fields' => [
        'is_accepting_appointments' => [
            'label' => 'Accetto nuovi appuntamenti',
            'help' => 'Abilita/disabilita la possibilità per i pazienti di prenotare nuovi appuntamenti con te.',
        ],
        'default_duration' => [
            'label' => 'Durata predefinita degli appuntamenti',
            'help' => 'La durata predefinita degli appuntamenti in minuti.',
        ],
        'notice_hours' => [
            'label' => 'Preavviso minimo',
            'help' => 'Il preavviso minimo richiesto per prenotare un appuntamento (in ore).',
        ],
        'day' => [
            'label' => 'Giorno della settimana',
        ],
        'start_time' => [
            'label' => 'Ora di inizio',
        ],
        'end_time' => [
            'label' => 'Ora di fine',
        ],
        'is_available' => [
            'label' => 'Disponibile',
            'help' => 'Indica se sei disponibile in questo intervallo orario.',
        ],
        'date' => [
            'label' => 'Data',
        ],
        'exception_available' => [
            'help' => 'Attiva per aggiungere disponibilità extra in un giorno specifico. Disattiva per bloccare un periodo in cui normalmente saresti disponibile.',
        ],
    ],
    'actions' => [
        'save' => 'Salva Disponibilità',
        'add_exception' => 'Aggiungi Eccezione',
        'approve' => 'Approva',
        'reject' => 'Rifiuta',
        'toggle_appointments' => 'Appuntamenti',
        'toggle_availability' => 'Disponibilità',
    ],
    'notifications' => [
        'saved' => [
            'title' => 'Disponibilità salvate',
            'body' => 'Le tue disponibilità sono state aggiornate con successo.',
        ],
        'not_doctor' => [
            'title' => 'Utente non autorizzato',
            'body' => 'Solo i profili medico possono gestire le disponibilità.',
        ],
        'error' => [
            'title' => 'Errore durante il salvataggio',
            'body' => 'Si è verificato un errore durante il salvataggio delle disponibilità.',
        ],
        'not_found' => [
            'title' => 'Appuntamento non trovato',
            'body' => 'L\'appuntamento selezionato non esiste o non è associato al tuo profilo.',
        ],
        'appointment_approved' => [
            'title' => 'Appuntamento approvato',
            'body' => 'L\'appuntamento è stato confermato con successo.',
        ],
        'appointment_rejected' => [
            'title' => 'Appuntamento rifiutato',
            'body' => 'L\'appuntamento è stato rifiutato con successo.',
        ],
    ],
    'calendar' => [
        'month' => 'Mese',
        'week' => 'Settimana',
        'day' => 'Giorno',
    ],
    'legend' => [
        'pending' => 'In Attesa',
        'confirmed' => 'Confermato',
        'completed' => 'Completato',
        'cancelled' => 'Cancellato',
        'no_show' => 'Non Presentato',
        'availability' => 'Disponibilità',
    ],
    'table' => [
        'patient' => 'Paziente',
        'date' => 'Data',
        'time' => 'Orario',
        'reason' => 'Motivo',
        'actions' => 'Azioni',
    ],
    'empty_states' => [
        'no_pending_appointments' => 'Nessun appuntamento in attesa',
        'no_pending_appointments_description' => 'Non ci sono appuntamenti in attesa di approvazione.',
    ],
    'available' => 'Disponibile',
];
>>>>>>> d18a3adf (✨ (saluteora): implement new DoctorAvailabilityCalendar widget to manage doctor availability using FullCalendar)
