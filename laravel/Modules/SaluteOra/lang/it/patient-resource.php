<?php

declare(strict_types=1);

return [
    'steps' => [
        'personal_data_step' => [
            'label' => 'Dati Personali',
            'description' => 'Inserisci i tuoi dati personali',
        ],
        'documents_step' => [
            'label' => 'Documenti',
            'description' => 'Carica i documenti richiesti',
        ],
        'pre_visit_step' => [
            'label' => 'Pre-Visita',
            'description' => 'Informazioni preliminari',
        ],
        'privacy_step' => [
            'label' => 'Privacy',
            'description' => 'Accettazione privacy e consensi',
        ],
    ],
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Inserisci il nome completo',
=======
>>>>>>> 54f4fa16 (.)
=======
            'help' => 'Inserisci il nome completo',
>>>>>>> d55a72aa (.)
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Inserisci il cognome completo',
=======
>>>>>>> 54f4fa16 (.)
=======
            'help' => 'Inserisci il cognome completo',
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
        ],
        'address' => [
            'label' => 'Indirizzo',
            'placeholder' => 'Inserisci l\'indirizzo',
        ],
        'city' => [
            'label' => 'Città',
            'placeholder' => 'Inserisci la città',
        ],
        'phone' => [
            'label' => 'Telefono',
            'placeholder' => 'Inserisci il numero di telefono',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Numero di telefono per contatti',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'email',
            'help' => 'Indirizzo email valido',
=======
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'indirizzo email',
>>>>>>> 54f4fa16 (.)
=======
            'help' => 'Numero di telefono per contatti',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'email',
            'help' => 'Indirizzo email valido',
>>>>>>> d55a72aa (.)
        ],
        'health_card' => [
            'label' => 'Tessera Sanitaria',
            'tooltip' => 'Carica una scansione della tua tessera sanitaria',
        ],
        'identity_document' => [
            'label' => 'Documento d\'Identità',
            'tooltip' => 'Carica una scansione del tuo documento d\'identità',
        ],
        'isee_certificate' => [
            'label' => 'Certificato ISEE',
            'tooltip' => 'Carica il tuo certificato ISEE se disponibile',
        ],
        'pregnancy_certificate' => [
            'label' => 'Certificato di Gravidanza',
            'tooltip' => 'Carica il certificato di gravidanza se applicabile',
        ],
        'fiscal_code' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Codice fiscale',
            'placeholder' => 'Inserisci il codice fiscale',
            'help' => 'Codice fiscale come da tessera sanitaria',
        ],
        'birth_date' => [
            'label' => 'Data di nascita',
            'placeholder' => 'Seleziona la data di nascita',
            'help' => 'Inserisci la data di nascita nel formato gg/mm/aaaa',
=======
            'label' => 'Codice Fiscale',
            'placeholder' => 'Inserisci il tuo codice fiscale',
        ],
        'birth_date' => [
            'label' => 'Data di Nascita',
>>>>>>> 54f4fa16 (.)
=======
            'label' => 'Codice fiscale',
            'placeholder' => 'Inserisci il codice fiscale',
            'help' => 'Codice fiscale come da tessera sanitaria',
        ],
        'birth_date' => [
            'label' => 'Data di nascita',
            'placeholder' => 'Seleziona la data di nascita',
            'help' => 'Inserisci la data di nascita nel formato gg/mm/aaaa',
>>>>>>> d55a72aa (.)
        ],
        'last_dental_visit' => [
            'label' => 'Ultima Visita Dentistica',
            'tooltip' => 'Quando hai fatto l\'ultima visita dal dentista?',
        ],
        'dental_problems' => [
            'label' => 'Problemi Dentali',
            'placeholder' => 'Descrivi eventuali problemi dentali',
        ],
        'privacy_acceptance' => [
            'label' => 'Accettazione Privacy',
            'tooltip' => 'Devi accettare l\'informativa sulla privacy per continuare',
        ],
        'newsletter' => [
            'label' => 'Newsletter',
            'tooltip' => 'Vuoi ricevere aggiornamenti via email?',
        ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d55a72aa (.)
        'gender' => [
            'label' => 'Sesso',
            'placeholder' => 'Seleziona il sesso',
            'help' => 'Seleziona il sesso anagrafico',
        ],
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> d55a72aa (.)
    ],
    'buttons' => [
        'submit' => [
            'label' => 'ACCETTA E CONTINUA',
        ],
    ],
<<<<<<< HEAD
<<<<<<< HEAD
];
=======
]; 
>>>>>>> 54f4fa16 (.)
=======
];
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
