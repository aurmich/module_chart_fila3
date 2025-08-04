<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
return [
    'widget' => [
        'title' => 'Find Doctor and Book Appointment',
        'description' => 'Search for a doctor in your area and book an appointment online',
    ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
    'steps' => [
        'search_step' => [
            'label' => 'Search Doctor',
            'description' => 'Select specialization and location to find the right doctor',
            'icon' => 'heroicon-o-magnifying-glass',
        ],
        'studio_step' => [
<<<<<<< HEAD
            'label' => 'Choose Practice',
=======
<<<<<<< HEAD
            'label' => 'Choose Practice',
=======
            'label' => 'Choose Studio',
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
            'description' => 'Select the medical studio most convenient for you',
            'icon' => 'heroicon-o-building-office',
        ],
        'date_step' => [
            'label' => 'Select Date',
            'description' => 'Choose the most suitable date for your appointment',
            'icon' => 'heroicon-o-calendar-days',
        ],
        'time_step' => [
            'label' => 'Time',
            'description' => 'Select your preferred time for the visit',
            'icon' => 'heroicon-o-clock',
        ],
        'confirm_step' => [
            'label' => 'Confirm',
            'description' => 'Verify details and confirm your booking',
            'icon' => 'heroicon-o-check-circle',
        ],
    ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
    'fields' => [
        'specialization' => [
            'label' => 'Specialization',
            'placeholder' => 'Select a medical specialization',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli la specializzazione medica di cui hai bisogno (es. Cardiologia, Dermatologia)',
            'description' => 'La specializzazione determina il tipo di visita che puoi prenotare',
=======
<<<<<<< HEAD
            'help' => 'Scegli la specializzazione medica di cui hai bisogno (es. Cardiologia, Dermatologia)',
            'description' => 'La specializzazione determina il tipo di visita che puoi prenotare',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'location' => [
            'label' => 'Location',
            'placeholder' => 'Enter your city or area',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Specifica dove preferisci che si trovi lo studio doctor',
            'description' => 'La ricerca mostrerà i dottori disponibili nella zona indicata',
=======
<<<<<<< HEAD
            'help' => 'Specifica dove preferisci che si trovi lo studio doctor',
            'description' => 'La ricerca mostrerà i dottori disponibili nella zona indicata',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'region' => [
            'label' => 'Region',
            'placeholder' => 'Select the region',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli la regione dove cercare il dottore',
            'description' => 'Prima seleziona la regione, poi potrai scegliere provincia e città',
=======
<<<<<<< HEAD
            'help' => 'Scegli la regione dove cercare il dottore',
            'description' => 'Prima seleziona la regione, poi potrai scegliere provincia e città',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'province' => [
            'label' => 'Province',
            'placeholder' => 'Select the province',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli la provincia nella regione selezionata',
            'description' => 'La provincia restringerà l\'area di ricerca',
=======
<<<<<<< HEAD
            'help' => 'Scegli la provincia nella regione selezionata',
            'description' => 'La provincia restringerà l\'area di ricerca',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Select the city',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli la città dove preferisci trovare il dottore',
            'description' => 'La città determinerà i risultati più vicini a te',
=======
<<<<<<< HEAD
            'help' => 'Scegli la città dove preferisci trovare il dottore',
            'description' => 'La città determinerà i risultati più vicini a te',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'cap' => [
            'label' => 'ZIP Code',
            'placeholder' => 'Enter the postal code',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Enter il CAP per una ricerca più precisa (opzionale)',
            'description' => 'Il CAP aiuta a trovare studi medici nella tua zona specifica',
=======
<<<<<<< HEAD
            'help' => 'Enter il CAP per una ricerca più precisa (opzionale)',
            'description' => 'Il CAP aiuta a trovare studi medici nella tua zona specifica',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'appointment_type' => [
            'label' => 'Appointment Type',
            'placeholder' => 'Select the type of visit',
            'helper_text' => '',
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'help' => 'Scegli se hai bisogno di una prima visita, controllo o consulenza',
            'description' => 'Il tipo di appuntamento influenza durata e costo della visita',
        ],
        'selected_studio' => [
            'label' => 'Selected Practice',
            'placeholder' => 'No studio selected',
            'helper_text' => '',
            'help' => 'Practice doctor scelto per l\'appuntamento',
            'description' => 'Conferma lo studio dove si svolgerà la visita',
        ],
        'selected_studio_name' => [
            'label' => 'Practice Name',
            'placeholder' => 'Medical studio name',
            'helper_text' => '',
            'help' => 'Denominazione completa dello studio doctor',
            'description' => 'First Name ufficiale della struttura sanitaria',
<<<<<<< HEAD
=======
=======
        ],
        'selected_studio' => [
            'label' => 'Selected Studio',
            'placeholder' => 'No studio selected',
            'helper_text' => '',
        ],
        'selected_studio_name' => [
            'label' => 'Studio Name',
            'placeholder' => 'Medical studio name',
            'helper_text' => '',
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'doctor_id' => [
            'label' => 'Doctor',
            'placeholder' => 'Select a doctor',
            'helper_text' => '',
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'help' => 'Dottore che effettuerà la visita',
            'description' => 'Doctor specialista che ti riceverà',
        ],
        'studio_id' => [
            'label' => 'Practice',
            'placeholder' => 'Select a studio',
            'helper_text' => '',
            'help' => 'Practice doctor dove si svolgerà la visita',
            'description' => 'Struttura sanitaria di riferimento',
        ],
        'studio_name' => [
            'label' => 'Practice Name',
            'placeholder' => 'Medical studio name',
            'helper_text' => '',
            'help' => 'Denominazione dello studio doctor selezionato',
            'description' => 'First Name della struttura sanitaria',
<<<<<<< HEAD
=======
=======
        ],
        'studio_id' => [
            'label' => 'Studio',
            'placeholder' => 'Select a studio',
            'helper_text' => '',
        ],
        'studio_name' => [
            'label' => 'Studio Name',
            'placeholder' => 'Medical studio name',
            'helper_text' => '',
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'appointment_date' => [
            'label' => 'Appointment Date',
            'placeholder' => 'Select a date',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli il giorno per il tuo appuntamento',
            'description' => 'Data in cui si svolgerà la visita medica',
=======
<<<<<<< HEAD
            'help' => 'Scegli il giorno per il tuo appuntamento',
            'description' => 'Data in cui si svolgerà la visita medica',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'appointment_time' => [
            'label' => 'Appointment Time',
            'placeholder' => 'Select a time',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli l\'orario più comodo per te',
            'description' => 'Ora di inizio della visita medica',
=======
<<<<<<< HEAD
            'help' => 'Scegli l\'orario più comodo per te',
            'description' => 'Ora di inizio della visita medica',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'appointment_time_display' => [
            'label' => 'Selected Time',
            'placeholder' => 'No time selected',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Orario confermato per l\'appuntamento',
            'description' => 'Ora in cui inizierà la tua visita',
=======
<<<<<<< HEAD
            'help' => 'Orario confermato per l\'appuntamento',
            'description' => 'Ora in cui inizierà la tua visita',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'date' => [
            'label' => 'Date',
            'placeholder' => 'Select a date',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli la data per il tuo appuntamento',
            'description' => 'Giorno in cui si svolgerà la visita',
=======
<<<<<<< HEAD
            'help' => 'Scegli la data per il tuo appuntamento',
            'description' => 'Giorno in cui si svolgerà la visita',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'time' => [
            'label' => 'Time',
            'placeholder' => 'Select a time',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Scegli l\'orario preferito',
            'description' => 'Ora di inizio della visita',
=======
<<<<<<< HEAD
            'help' => 'Scegli l\'orario preferito',
            'description' => 'Ora di inizio della visita',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'notes' => [
            'label' => 'Additional Notes',
            'placeholder' => 'Enter any notes or special requests',
            'helper_text' => '',
<<<<<<< HEAD
            'help' => 'Aggiungi informazioni utili per il dottore (sintomi, allergie, farmaci)',
            'description' => 'Note che aiuteranno il doctor a prepararsi meglio per la visita',
=======
<<<<<<< HEAD
            'help' => 'Aggiungi informazioni utili per il dottore (sintomi, allergie, farmaci)',
            'description' => 'Note che aiuteranno il doctor a prepararsi meglio per la visita',
=======
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        ],
        'search' => [
            'label' => 'Search',
            'placeholder' => 'Search for doctors in your area',
            'helper_text' => '',
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'help' => 'Usa i filtri per trovare il dottore più adatto',
            'description' => 'Sistema di ricerca medici specializzati',
        ],
    ],
<<<<<<< HEAD
=======
=======
        ],
    ],
    
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
    'actions' => [
        'submit' => [
            'label' => 'Confirm Booking',
            'modal' => [
                'heading' => 'Confirm Appointment',
                'description' => 'You are about to confirm your appointment booking. Please verify that all details are correct.',
                'confirm' => 'Confirm',
                'cancel' => 'Cancel',
            ],
            'messages' => [
                'success' => 'Appointment booked successfully! You will receive a confirmation email.',
                'error' => 'An error occurred during booking. Please try again later.',
                'validation_error' => 'Some fields are not filled correctly. Please check the entered data.',
            ],
            'tooltip' => 'Complete your appointment booking',
        ],
        'search' => [
            'label' => 'Search Doctors',
            'tooltip' => 'Start searching for available doctors',
            'messages' => [
                'success' => 'Search completed',
                'error' => 'Error during search',
                'no_results' => 'No doctors found with the selected criteria',
            ],
        ],
        'back' => [
            'label' => 'Back',
            'tooltip' => 'Go back to the previous step',
        ],
        'next' => [
            'label' => 'Next',
            'tooltip' => 'Proceed to the next step',
        ],
        'reset' => [
            'label' => 'Start Over',
            'modal' => [
                'heading' => 'Start Search Over?',
                'description' => 'All entered data will be lost. Are you sure you want to start over?',
                'confirm' => 'Yes, start over',
                'cancel' => 'No, continue',
            ],
            'tooltip' => 'Clear all data and restart the search',
        ],
    ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
    'messages' => [
        'welcome' => 'Welcome to the online booking system',
        'loading' => 'Loading...',
        'no_doctors_found' => 'No doctors found with the selected search criteria',
        'no_appointments_available' => 'No appointments available for this date',
        'select_specialization' => 'Please select a specialization first',
        'select_location' => 'Please specify the location for the search',
        'appointment_confirmed' => 'Your appointment has been confirmed',
        'appointment_pending' => 'Your booking is pending confirmation',
    ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
    'empty_states' => [
        'no_doctors' => 'No doctors available',
        'no_appointments' => 'No appointments available',
        'no_results' => 'No results found',
        'search_required' => 'Fill in the search fields to begin',
    ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
    'validation' => [
        'specialization_required' => 'Specialization is required',
        'location_required' => 'Location is required',
        'date_required' => 'Date is required',
        'time_required' => 'Time is required',
        'doctor_required' => 'Doctor is required',
<<<<<<< HEAD
        'studio_required' => 'Practice is required',
=======
<<<<<<< HEAD
        'studio_required' => 'Practice is required',
=======
        'studio_required' => 'Studio is required',
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
        'invalid_date' => 'The selected date is not valid',
        'past_date' => 'You cannot select a past date',
        'appointment_not_available' => 'The selected time is no longer available',
    ],
<<<<<<< HEAD
];
=======
<<<<<<< HEAD
];
=======
]; 
>>>>>>> 8d591468 (fields translations)
>>>>>>> aurmich/dev
