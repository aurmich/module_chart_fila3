<?php

declare(strict_types=1);

return [
    'studio_name' => [
        'label' => 'Studio',
        'placeholder' => 'Nome dello studio selezionato',
        'helper_text' => 'Studio dentistico per la prenotazione',
        'description' => 'Informazioni sullo studio medico selezionato',
    ],
    
    'doctor_name' => [
        'label' => 'Dottore',
        'placeholder' => 'Seleziona un dottore',
        'helper_text' => 'Scegli il dottore con cui vuoi prenotare l\'appuntamento',
        'description' => 'Medico specialista per la visita',
    ],
    
    'appointment_date_display' => [
        'label' => 'Data Appuntamento',
        'placeholder' => 'Seleziona una data',
        'helper_text' => 'Scegli la data per il tuo appuntamento',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'description' => 'Data selezionata per l\'appuntamento medico',
    ],
    
    'appointment_time_display' => [
        'label' => 'Orario',
        'placeholder' => 'Seleziona un orario',
        'helper_text' => 'Scegli l\'orario per il tuo appuntamento',
        'description' => 'Orario selezionato per l\'appuntamento',
    ],
    
    'notes' => [
        'label' => 'Note',
        'placeholder' => 'Aggiungi eventuali note o richieste speciali',
        'helper_text' => 'Informazioni aggiuntive per il dottore (opzionale)',
        'description' => 'Note aggiuntive per l\'appuntamento',
=======
        'description' => 'Data selezionata per la prenotazione',
=======
        'description' => 'Data selezionata per l\'appuntamento medico',
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
    ],
    
    'appointment_time_display' => [
        'label' => 'Orario',
        'placeholder' => 'Seleziona un orario',
        'helper_text' => 'Scegli l\'orario per il tuo appuntamento',
        'description' => 'Orario selezionato per l\'appuntamento',
    ],
    
    'notes' => [
<<<<<<< HEAD
=======
        'description' => 'Data selezionata per la prenotazione',
    ],
    
    'appointment_time_display' => [
        'label' => 'Orario Appuntamento',
        'placeholder' => 'Seleziona un orario',
        'helper_text' => 'Scegli l\'orario più comodo per il tuo appuntamento',
        'description' => 'Fascia oraria selezionata per la visita',
    ],
    
    'notes' => [
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
        'label' => 'Note Aggiuntive',
        'placeholder' => 'Inserisci eventuali note o richieste particolari...',
        'helper_text' => 'Informazioni aggiuntive per il tuo appuntamento (opzionale)',
        'description' => 'Campo per comunicazioni speciali o richieste particolari',
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
        'label' => 'Note',
        'placeholder' => 'Aggiungi eventuali note o richieste speciali',
        'helper_text' => 'Informazioni aggiuntive per il dottore (opzionale)',
        'description' => 'Note aggiuntive per l\'appuntamento',
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
    ],
    
    // Altri campi del widget per completezza
    'region' => [
        'label' => 'Regione',
        'placeholder' => 'Seleziona una regione',
        'helper_text' => 'Scegli la regione dove cercare uno studio',
        'description' => 'Area geografica di interesse',
    ],
    
    'province' => [
        'label' => 'Provincia',
        'placeholder' => 'Seleziona una provincia',
        'helper_text' => 'Specifica la provincia nella regione selezionata',
        'description' => 'Provincia di interesse per la ricerca',
    ],
    
    'cap' => [
        'label' => 'CAP',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'placeholder' => 'Inserisci il CAP',
        'helper_text' => 'Codice postale della tua zona',
        'description' => 'Codice di avviamento postale per la ricerca degli studi',
    ],
    
    'studio_id' => [
        'label' => 'ID Studio',
        'placeholder' => 'Identificativo dello studio',
        'helper_text' => 'Identificativo unico dello studio medico',
        'description' => 'ID univoco dello studio nel sistema',
    ],
    
    'doctor_id' => [
        'label' => 'ID Dottore',
        'placeholder' => 'Identificativo del dottore',
        'helper_text' => 'Identificativo unico del dottore',
        'description' => 'ID univoco del dottore nel sistema',
=======
        'placeholder' => 'Seleziona un CAP',
        'helper_text' => 'Codice di Avviamento Postale della zona',
        'description' => 'CAP specifico per la ricerca di studi vicini',
=======
        'placeholder' => 'Inserisci il CAP',
        'helper_text' => 'Codice postale della tua zona',
        'description' => 'Codice di avviamento postale per la ricerca degli studi',
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
    ],
    
    'studio_id' => [
        'label' => 'ID Studio',
        'placeholder' => 'Identificativo dello studio',
        'helper_text' => 'Identificativo unico dello studio medico',
        'description' => 'ID univoco dello studio nel sistema',
    ],
    
    'doctor_id' => [
<<<<<<< HEAD
=======
        'placeholder' => 'Seleziona un CAP',
        'helper_text' => 'Codice di Avviamento Postale della zona',
        'description' => 'CAP specifico per la ricerca di studi vicini',
    ],
    
    'studio_id' => [
        'label' => 'Studio Selezionato',
        'placeholder' => 'ID dello studio selezionato',
        'helper_text' => 'Identificativo dello studio per la prenotazione',
        'description' => 'Studio medico scelto per l\'appuntamento',
    ],
    
    'doctor_id' => [
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
        'label' => 'Dottore Selezionato',
        'placeholder' => 'ID del dottore selezionato',
        'helper_text' => 'Identificativo del dottore per la prenotazione',
        'description' => 'Medico scelto per la visita',
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
        'label' => 'ID Dottore',
        'placeholder' => 'Identificativo del dottore',
        'helper_text' => 'Identificativo unico del dottore',
        'description' => 'ID univoco del dottore nel sistema',
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
    ],
    
    'appointment_date' => [
        'label' => 'Data Appuntamento',
        'placeholder' => 'Seleziona una data',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'helper_text' => 'Seleziona la data per il tuo appuntamento',
        'description' => 'Data dell\'appuntamento medico',
    ],
    
    'appointment_time' => [
        'label' => 'Orario',
        'placeholder' => 'Seleziona un orario',
        'helper_text' => 'Seleziona l\'orario per il tuo appuntamento',
        'description' => 'Orario dell\'appuntamento medico',
    ],

    // Campi per informazioni studio
    'studio_address' => [
        'label' => 'Indirizzo Studio',
        'placeholder' => 'Indirizzo dello studio',
        'helper_text' => 'Indirizzo completo dello studio medico',
        'description' => 'Ubicazione fisica dello studio',
    ],
    
    'studio_phone' => [
        'label' => 'Telefono Studio',
        'placeholder' => 'Numero di telefono',
        'helper_text' => 'Numero di telefono dello studio',
        'description' => 'Contatto telefonico dello studio medico',
    ],
    
    'studio_email' => [
        'label' => 'Email Studio',
        'placeholder' => 'Indirizzo email',
        'helper_text' => 'Indirizzo email dello studio',
        'description' => 'Contatto email dello studio medico',
=======
        'helper_text' => 'Scegli la data per il tuo appuntamento',
        'description' => 'Data della prenotazione medica',
=======
        'helper_text' => 'Seleziona la data per il tuo appuntamento',
        'description' => 'Data dell\'appuntamento medico',
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
    ],
    
    'appointment_time' => [
        'label' => 'Orario',
        'placeholder' => 'Seleziona un orario',
<<<<<<< HEAD
        'helper_text' => 'Scegli l\'orario più comodo per il tuo appuntamento',
        'description' => 'Orario della visita medica',
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
        'helper_text' => 'Seleziona l\'orario per il tuo appuntamento',
        'description' => 'Orario dell\'appuntamento medico',
    ],

    // Campi per informazioni studio
    'studio_address' => [
        'label' => 'Indirizzo Studio',
        'placeholder' => 'Indirizzo dello studio',
        'helper_text' => 'Indirizzo completo dello studio medico',
        'description' => 'Ubicazione fisica dello studio',
    ],
    
    'studio_phone' => [
        'label' => 'Telefono Studio',
        'placeholder' => 'Numero di telefono',
        'helper_text' => 'Numero di telefono dello studio',
        'description' => 'Contatto telefonico dello studio medico',
    ],
    
    'studio_email' => [
        'label' => 'Email Studio',
        'placeholder' => 'Indirizzo email',
        'helper_text' => 'Indirizzo email dello studio',
        'description' => 'Contatto email dello studio medico',
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
        'helper_text' => 'Scegli la data per il tuo appuntamento',
        'description' => 'Data della prenotazione medica',
    ],
    
    'appointment_time' => [
        'label' => 'Orario Appuntamento',
        'placeholder' => 'Seleziona un orario',
        'helper_text' => 'Scegli l\'orario più comodo per il tuo appuntamento',
        'description' => 'Orario della visita medica',
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
    ],
]; 