<?php

<<<<<<< HEAD
<<<<<<< HEAD
return array (
<<<<<<< HEAD
  'title' => 'Appuntamenti Dottore',
  'description' => 'Gestione appuntamenti per i dottori',
=======
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
=======
return array (
  'title' => 'Appuntamenti Dottore',
  'description' => 'Gestione degli appuntamenti per i dottori',
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
  'actions' => 
  array (
    'delete' => 
    array (
<<<<<<< HEAD
<<<<<<< HEAD
      'label' => 'Elimina',
      'tooltip' => 'Elimina questo appuntamento',
      'confirmation' => 'Sei sicuro di voler eliminare questo appuntamento?',
      'success' => 'Appuntamento eliminato con successo',
      'error' => 'Errore durante l\'eliminazione dell\'appuntamento',
=======
      'label' => 'Elimina',
      'tooltip' => 'Elimina questo appuntamento',
      'confirmation' => 'Sei sicuro di voler eliminare questo appuntamento?',
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
    ),
    'accept' => 
    array (
      'label' => 'Accetta',
      'tooltip' => 'Accetta questo appuntamento',
      'confirmation' => 'Sei sicuro di voler accettare questo appuntamento?',
<<<<<<< HEAD
      'success' => 'Appuntamento accettato con successo',
      'error' => 'Errore durante l\'accettazione dell\'appuntamento',
=======
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
    ),
    'confirm' => 
    array (
      'label' => 'Conferma',
      'tooltip' => 'Conferma questo appuntamento',
      'confirmation' => 'Sei sicuro di voler confermare questo appuntamento?',
<<<<<<< HEAD
      'success' => 'Appuntamento confermato con successo',
      'error' => 'Errore durante la conferma dell\'appuntamento',
    ),
    'reject' => 
=======
    ),
    'confirmed' => 
    array (
      'label' => 'Confermato',
      'tooltip' => 'Appuntamento confermato',
    ),
    'confirmAction' => 
    array (
      'label' => 'Azione Conferma',
      'tooltip' => 'Esegui azione di conferma',
    ),
    'rejectAction' => 
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
    array (
      'label' => 'Rifiuta',
      'tooltip' => 'Rifiuta questo appuntamento',
      'confirmation' => 'Sei sicuro di voler rifiutare questo appuntamento?',
<<<<<<< HEAD
      'success' => 'Appuntamento rifiutato con successo',
      'error' => 'Errore durante il rifiuto dell\'appuntamento',
    ),
    'reschedule' => 
    array (
      'label' => 'Riprogramma',
      'tooltip' => 'Riprogramma questo appuntamento',
      'confirmation' => 'Sei sicuro di voler riprogrammare questo appuntamento?',
      'success' => 'Appuntamento riprogrammato con successo',
      'error' => 'Errore durante la riprogrammazione dell\'appuntamento',
    ),
    'complete' => 
    array (
      'label' => 'Completa',
      'tooltip' => 'Completa questo appuntamento',
      'confirmation' => 'Sei sicuro di voler completare questo appuntamento?',
      'success' => 'Appuntamento completato con successo',
      'error' => 'Errore durante il completamento dell\'appuntamento',
    ),
    'cancel' => 
    array (
      'label' => 'Annulla',
      'tooltip' => 'Annulla questo appuntamento',
      'confirmation' => 'Sei sicuro di voler annullare questo appuntamento?',
      'success' => 'Appuntamento annullato con successo',
      'error' => 'Errore durante l\'annullamento dell\'appuntamento',
    ),
    'view_details' => 
    array (
      'label' => 'Visualizza Dettagli',
      'tooltip' => 'Visualizza i dettagli completi dell\'appuntamento',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'tooltip' => 'Modifica questo appuntamento',
      'success' => 'Appuntamento modificato con successo',
      'error' => 'Errore durante la modifica dell\'appuntamento',
    ),
    'generate_report' => 
    array (
      'label' => 'Genera Referto',
      'tooltip' => 'Genera un referto per questo appuntamento',
      'modal_heading' => 'Generazione Referto',
      'modal_description' => 'Sei sicuro di voler generare un referto per questo appuntamento?',
      'modal_icon' => 'heroicon-o-document-text',
      'icon' => 'heroicon-o-document-text',
      'success' => 'Referto generato con successo',
      'error' => 'Errore durante la generazione del referto',
    ),
    'send_reminder' => 
    array (
      'label' => 'Invia Promemoria',
      'tooltip' => 'Invia un promemoria al paziente',
      'confirmation' => 'Sei sicuro di voler inviare un promemoria al paziente?',
      'success' => 'Promemoria inviato con successo',
      'error' => 'Errore durante l\'invio del promemoria',
    ),
    'add_note' => 
    array (
      'label' => 'Aggiungi Nota',
      'tooltip' => 'Aggiungi una nota all\'appuntamento',
      'modal_heading' => 'Aggiungi Nota',
      'modal_description' => 'Inserisci una nota per questo appuntamento',
      'success' => 'Nota aggiunta con successo',
      'error' => 'Errore durante l\'aggiunta della nota',
    ),
    'proBonoAction' => 
    array (
      'label' => 'proBonoAction',
    ),
    'refundPendingAction' => 
    array (
      'label' => 'refundPendingAction',
    ),
    'info' => 
    array (
      'label' => 'info',
    ),
    'rejectedAction' => 
    array (
      'label' => 'rejectedAction',
    ),
    'confirmedAction' => 
    array (
      'label' => 'confirmedAction',
    ),
    'reportPendingAction' => 
    array (
      'label' => 'reportPendingAction',
    ),
    'noShowAction' => 
    array (
      'label' => 'noShowAction',
    ),
    'cancelledAction' => 
    array (
      'label' => 'cancelledAction',
    ),
    'reportCompletedAction' => 
    array (
      'label' => 'reportCompletedAction',
    ),
    'completedAction' => 
    array (
      'label' => 'completedAction',
    ),
    'refundToIntegrateAction' => 
    array (
      'label' => 'refundToIntegrateAction',
    ),
    'refundAcceptedAction' => 
    array (
      'label' => 'refundAcceptedAction',
    ),
    'refundCompletedAction' => 
    array (
      'label' => 'refundCompletedAction',
    ),
    'transition' => 
    array (
      'label' => 'transition',
=======
    ),
    'info' => 
    array (
      'label' => 'Informazioni',
      'tooltip' => 'Visualizza informazioni dettagliate',
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
    ),
  ),
  'messages' => 
  array (
    'appointment_accepted' => 'Appuntamento accettato con successo',
    'appointment_confirmed' => 'Appuntamento confermato con successo',
    'appointment_rejected' => 'Appuntamento rifiutato con successo',
    'appointment_deleted' => 'Appuntamento eliminato con successo',
<<<<<<< HEAD
    'appointment_rescheduled' => 'Appuntamento riprogrammato con successo',
    'appointment_completed' => 'Appuntamento completato con successo',
    'appointment_cancelled' => 'Appuntamento annullato con successo',
    'appointment_updated' => 'Appuntamento aggiornato con successo',
    'error_occurred' => 'Si è verificato un errore',
    'no_appointments_found' => 'Nessun appuntamento trovato',
    'appointment_not_found' => 'Appuntamento non trovato',
  ),
  'status' => 
  array (
    'pending' => 'In Attesa',
=======
    'error_occurred' => 'Si è verificato un errore',
  ),
  'status' => 
  array (
    'pending' => 'In attesa',
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
    'confirmed' => 'Confermato',
    'rejected' => 'Rifiutato',
    'completed' => 'Completato',
    'cancelled' => 'Annullato',
<<<<<<< HEAD
    'rescheduled' => 'Riprogrammato',
    'in_progress' => 'In Corso',
  ),
  'states' => 
  array (
    'pending' => 
    array (
      'label' => 'In Attesa',
      'color' => 'warning',
      'bg_color' => '#FEF3C7',
      'icon' => 'heroicon-o-clock',
      'description' => 'Appuntamento in attesa di conferma',
    ),
    'confirmed' => 
    array (
      'label' => 'Confermato',
      'color' => 'success',
      'bg_color' => '#D1FAE5',
      'icon' => 'heroicon-o-check-circle',
      'description' => 'Appuntamento confermato dal dottore',
    ),
    'rejected' => 
    array (
      'label' => 'Rifiutato',
      'color' => 'danger',
      'bg_color' => '#FEE2E2',
      'icon' => 'heroicon-o-x-circle',
      'description' => 'Appuntamento rifiutato dal dottore',
    ),
    'completed' => 
    array (
      'label' => 'Completato',
      'color' => 'success',
      'bg_color' => '#ECFDF5',
      'icon' => 'heroicon-o-check-badge',
      'description' => 'Appuntamento completato con successo',
    ),
    'cancelled' => 
    array (
      'label' => 'Annullato',
      'color' => 'gray',
      'bg_color' => '#F3F4F6',
      'icon' => 'heroicon-o-no-symbol',
      'description' => 'Appuntamento annullato',
    ),
    'rescheduled' => 
    array (
      'label' => 'Riprogrammato',
      'color' => 'info',
      'bg_color' => '#DBEAFE',
      'icon' => 'heroicon-o-arrow-path',
      'description' => 'Appuntamento riprogrammato per nuova data',
    ),
    'in_progress' => 
    array (
      'label' => 'In Corso',
      'color' => 'primary',
      'bg_color' => '#E0E7FF',
      'icon' => 'heroicon-o-play-circle',
      'description' => 'Appuntamento attualmente in corso',
    ),
=======
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
  ),
  'fields' => 
  array (
    'message' => 
    array (
<<<<<<< HEAD
      'label' => 'Messaggio',
      'placeholder' => 'Inserisci un messaggio per il paziente',
      'helper_text' => 'Il messaggio verrà inviato al paziente',
      'description' => 'Messaggio personalizzato per il paziente',
    ),
    'note' => 
    array (
      'label' => 'Nota',
      'placeholder' => 'Inserisci una nota privata',
      'helper_text' => 'Questa nota sarà visibile solo ai dottori',
      'description' => 'Nota privata per i dottori',
    ),
    'reason' => 
    array (
      'label' => 'Motivo',
      'placeholder' => 'Inserisci il motivo del rifiuto/annullamento',
      'helper_text' => 'Il motivo verrà comunicato al paziente',
      'description' => 'Motivo del rifiuto o annullamento',
    ),
    'new_date' => 
    array (
      'label' => 'Nuova Data',
      'placeholder' => 'Seleziona la nuova data',
      'helper_text' => 'Seleziona la nuova data per l\'appuntamento',
      'description' => 'Nuova data per l\'appuntamento riprogrammato',
    ),
    'new_time' => 
    array (
      'label' => 'Nuovo Orario',
      'placeholder' => 'Seleziona il nuovo orario',
      'helper_text' => 'Seleziona il nuovo orario per l\'appuntamento',
      'description' => 'Nuovo orario per l\'appuntamento riprogrammato',
    ),
    'invoice' => 
    array (
      'label' => 'Fattura',
      'placeholder' => 'Carica la fattura',
      'helper_text' => '',
      'description' => 'Documento fiscale per la prestazione sanitaria',
    ),
    'probono_acceptance' => 
    array (
      'description' => 'se procedi accetti di non ricevere compenso per la tua prestazione',
      'helper_text' => '',
      'placeholder' => '',
      'label' => 'se procedi accetti di non ricevere compenso per la tua prestazione',
    ),
  ),
  'filters' => 
  array (
    'status' => 
    array (
      'label' => 'Stato',
      'placeholder' => 'Filtra per stato',
    ),
    'date_range' => 
    array (
      'label' => 'Intervallo Date',
      'placeholder' => 'Seleziona intervallo date',
    ),
    'patient' => 
    array (
      'label' => 'Paziente',
      'placeholder' => 'Filtra per paziente',
=======
      'label' => 'delete',
    ),
    'accept' => 
    array (
      'label' => 'accept',
    ),
    'confirmed' => 
    array (
      'label' => 'confirmed',
    ),
    'confirm' => 
    array (
      'label' => 'confirm',
    ),
    'confirmAction' => 
    array (
      'label' => 'confirmAction',
    ),
    'Confirmed' => 
    array (
      'label' => 'Confirmed',
    ),
    'rejectAction' => 
    array (
      'label' => 'rejectAction',
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
    ),
    'info' => 
    array (
      'label' => 'info',
    ),
    'info' => 
    array (
      'label' => 'info',
    ),
  ),
);
=======
declare(strict_types=1);

return [
    'title' => 'Appuntamenti Dottore',
    'description' => 'Gestione degli appuntamenti per i dottori',
    
    'actions' => [
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina questo appuntamento',
            'confirmation' => 'Sei sicuro di voler eliminare questo appuntamento?',
        ],
        'accept' => [
            'label' => 'Accetta',
            'tooltip' => 'Accetta questo appuntamento',
            'confirmation' => 'Sei sicuro di voler accettare questo appuntamento?',
        ],
        'confirm' => [
            'label' => 'Conferma',
            'tooltip' => 'Conferma questo appuntamento',
            'confirmation' => 'Sei sicuro di voler confermare questo appuntamento?',
        ],
        'confirmed' => [
            'label' => 'Confermato',
            'tooltip' => 'Appuntamento confermato',
        ],
        'confirmAction' => [
            'label' => 'Azione Conferma',
            'tooltip' => 'Esegui azione di conferma',
        ],
        'rejectAction' => [
            'label' => 'Rifiuta',
            'tooltip' => 'Rifiuta questo appuntamento',
            'confirmation' => 'Sei sicuro di voler rifiutare questo appuntamento?',
        ],
        'info' => [
            'label' => 'Informazioni',
            'tooltip' => 'Visualizza informazioni dettagliate',
        ],
    ],
    
    'messages' => [
        'appointment_accepted' => 'Appuntamento accettato con successo',
        'appointment_confirmed' => 'Appuntamento confermato con successo',
        'appointment_rejected' => 'Appuntamento rifiutato con successo',
        'appointment_deleted' => 'Appuntamento eliminato con successo',
        'error_occurred' => 'Si è verificato un errore',
    ],
    
    'status' => [
        'pending' => 'In attesa',
        'confirmed' => 'Confermato',
        'rejected' => 'Rifiutato',
        'completed' => 'Completato',
        'cancelled' => 'Annullato',
    ],
];
>>>>>>> fa888974 (✨ (SaluteOra): add new language files for English and Italian translations)
=======
      'description' => 'Messaggio',
      'helper_text' => '',
      'placeholder' => '',
      'label' => 'Messaggio',
    ),
  ),
);
>>>>>>> 80d49f8f (feat: add login_url, site_url, logo_header to spatieEmail)
