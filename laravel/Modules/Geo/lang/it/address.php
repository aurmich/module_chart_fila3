<?php

<<<<<<< HEAD
<<<<<<< HEAD
return array (
  'singular' => 'Indirizzo',
  'plural' => 'Indirizzi',
<<<<<<< HEAD
=======
return array (
  'singular' => 'Indirizzo',
  'plural' => 'Indirizzi',
>>>>>>> f2140a80 (- continuo style landing page;)
  'navigation' => 
  array (
    'sort' => 96,
    'icon' => 'address.navigation',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17e2b6ca (address tranlations)
    'group' => 'address.navigation',
  ),
=======
  'navigation' => 'Gestione Indirizzi',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
  ),
>>>>>>> f2140a80 (- continuo style landing page;)
  'actions' => 
  array (
    'create' => 'Crea indirizzo',
    'edit' => 'Modifica indirizzo',
    'view' => 'Visualizza indirizzo',
    'delete' => 'Elimina indirizzo',
    'set_primary' => 'Imposta come principale',
    'verify' => 'Verifica indirizzo',
    'geocode' => 'Geocodifica',
  ),
  'fields' => 
  array (
    'model_type' => 
    array (
      'label' => 'Tipo modello',
      'placeholder' => 'Seleziona il tipo di modello',
    ),
    'model_id' => 
    array (
      'label' => 'ID modello',
      'placeholder' => 'Inserisci ID del modello',
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci un nome per l\'indirizzo',
      'helper' => 'Un nome identificativo per questo indirizzo, es. "Casa" o "Ufficio"',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'name',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
      'description' => 'name',
    ),
    'description' => 
    array (
      'label' => 'Descrizione',
      'placeholder' => 'Inserisci una descrizione',
      'helper' => 'Note aggiuntive sull\'indirizzo',
    ),
    'route' => 
    array (
      'label' => 'Via',
      'placeholder' => 'Inserisci la via',
      'helper' => 'Nome della via o strada',
      'description' => 'route',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'route',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'street_number' => 
    array (
      'label' => 'Numero civico',
      'placeholder' => 'Inserisci il numero civico',
      'description' => 'street_number',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'street_number',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'locality' => 
    array (
      'label' => 'Città',
      'placeholder' => 'Inserisci la città',
      'description' => 'locality',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'locality',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'administrative_area_level_3' => 
    array (
      'label' => 'Comune',
      'placeholder' => 'Inserisci il comune',
    ),
    'administrative_area_level_2' => 
    array (
      'label' => 'Provincia',
      'placeholder' => 'Inserisci la provincia',
      'description' => 'administrative_area_level_2',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'administrative_area_level_2',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'administrative_area_level_1' => 
    array (
      'label' => 'Regione',
      'placeholder' => 'Inserisci la regione',
      'description' => 'administrative_area_level_1',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'administrative_area_level_1',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'country' => 
    array (
      'label' => 'Paese',
      'placeholder' => 'Inserisci il paese',
      'description' => 'country',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'country',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'postal_code' => 
    array (
      'label' => 'CAP',
      'placeholder' => 'Inserisci il CAP',
      'description' => 'postal_code',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'postal_code',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'formatted_address' => 
    array (
      'label' => 'Indirizzo formattato',
      'placeholder' => 'Indirizzo formattato completo',
      'description' => 'formatted_address',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'formatted_address',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'place_id' => 
    array (
      'label' => 'ID luogo',
      'placeholder' => 'ID riferimento Google Maps',
    ),
    'latitude' => 
    array (
      'label' => 'Latitudine',
      'placeholder' => 'Inserisci la latitudine',
    ),
    'longitude' => 
    array (
      'label' => 'Longitudine',
      'placeholder' => 'Inserisci la longitudine',
      'description' => 'longitude',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'longitude',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'placeholder' => 'Seleziona il tipo di indirizzo',
      'options' => 
      array (
        'billing' => 'Fatturazione',
        'shipping' => 'Spedizione',
        'home' => 'Casa',
        'work' => 'Lavoro',
        'other' => 'Altro',
      ),
    ),
    'is_primary' => 
    array (
      'label' => 'Principale',
      'helper' => 'Imposta questo indirizzo come indirizzo principale',
      'description' => 'is_primary',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'is_primary',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'helper_text' => '',
>>>>>>> f2140a80 (- continuo style landing page;)
      'placeholder' => 'is_primary',
    ),
    'extra_data' => 
    array (
      'label' => 'Dati aggiuntivi',
      'placeholder' => 'Inserisci dati aggiuntivi',
    ),
    'full_address' => 
    array (
      'label' => 'Indirizzo completo',
    ),
    'street_address' => 
    array (
      'label' => 'Indirizzo stradale',
    ),
    'map' => 
    array (
      'description' => 'map',
<<<<<<< HEAD
<<<<<<< HEAD
      'helper_text' => '',
    ),
    'aaa' => 
    array (
      'description' => 'aaa',
      'helper_text' => 'aaa',
      'placeholder' => 'aaa',
<<<<<<< HEAD
=======
      'helper_text' => 'map',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
    ),
=======
      'helper_text' => '',
    ),
>>>>>>> f2140a80 (- continuo style landing page;)
=======
    ),
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
  ),
  'columns' => 
  array (
    'name' => 'Nome',
    'full_address' => 'Indirizzo completo',
    'type' => 'Tipo',
    'is_primary' => 'Principale',
    'locality' => 'Città',
    'postal_code' => 'CAP',
    'model' => 'Associato a',
  ),
  'messages' => 
  array (
    'primary_set' => 'Indirizzo impostato come principale con successo',
    'address_verified' => 'Indirizzo verificato correttamente',
    'geocoding_success' => 'Geocodifica completata con successo',
    'geocoding_failed' => 'Impossibile geocodificare l\'indirizzo',
  ),
  'sections' => 
  array (
    'location' => 
    array (
      'label' => 'Informazioni di localizzazione',
      'description' => 'Dati relativi alla posizione geografica',
    ),
    'address' => 
    array (
      'label' => 'Dati indirizzo',
      'description' => 'Dettagli dell\'indirizzo',
    ),
    'metadata' => 
    array (
      'label' => 'Metadati',
      'description' => 'Informazioni aggiuntive sull\'indirizzo',
    ),
    'map' => 
    array (
      'label' => 'Mappa',
      'description' => 'Visualizzazione su mappa',
    ),
  ),
);
<<<<<<< HEAD
=======
return [
    'singular' => 'Indirizzo',
    'plural' => 'Indirizzi',
    'navigation' => 'Gestione Indirizzi',
    'actions' => [
        'create' => 'Crea indirizzo',
        'edit' => 'Modifica indirizzo',
        'view' => 'Visualizza indirizzo',
        'delete' => 'Elimina indirizzo',
        'set_primary' => 'Imposta come principale',
        'verify' => 'Verifica indirizzo',
        'geocode' => 'Geocodifica',
    ],
    'fields' => [
        'model_type' => [
            'label' => 'Tipo modello',
            'placeholder' => 'Seleziona il tipo di modello',
        ],
        'model_id' => [
            'label' => 'ID modello',
            'placeholder' => 'Inserisci ID del modello',
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => "Inserisci un nome per l'indirizzo",
            'helper' => 'Un nome identificativo per questo indirizzo, es. "Casa" o "Ufficio"',
            'helper_text' => '',
            'description' => 'name',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Inserisci una descrizione',
            'helper' => "Note aggiuntive sull'indirizzo",
        ],
        'route' => [
            'label' => 'Via',
            'placeholder' => 'Inserisci la via',
            'helper' => 'Nome della via o strada',
            'description' => 'route',
            'helper_text' => '',
        ],
        'street_number' => [
            'label' => 'Numero civico',
            'placeholder' => 'Inserisci il numero civico',
            'description' => 'street_number',
            'helper_text' => '',
        ],
        'locality' => [
            'label' => 'Città',
            'placeholder' => 'Inserisci la città',
            'description' => 'locality',
            'helper_text' => '',
        ],
        'administrative_area_level_3' => [
            'label' => 'Comune',
            'placeholder' => 'Inserisci il comune',
        ],
        'administrative_area_level_2' => [
            'label' => 'Provincia',
            'placeholder' => 'Inserisci la provincia',
            'description' => 'administrative_area_level_2',
            'helper_text' => '',
        ],
        'administrative_area_level_1' => [
            'label' => 'Regione',
            'placeholder' => 'Inserisci la regione',
            'description' => 'administrative_area_level_1',
            'helper_text' => '',
        ],
        'country' => [
            'label' => 'Paese',
            'placeholder' => 'Inserisci il paese',
            'description' => 'country',
            'helper_text' => '',
        ],
        'postal_code' => [
            'label' => 'CAP',
            'placeholder' => 'Inserisci il CAP',
            'description' => 'postal_code',
            'helper_text' => '',
        ],
        'formatted_address' => [
            'label' => 'Indirizzo formattato',
            'placeholder' => 'Indirizzo formattato completo',
            'description' => 'formatted_address',
            'helper_text' => '',
        ],
        'place_id' => [
            'label' => 'ID luogo',
            'placeholder' => 'ID riferimento Google Maps',
        ],
        'latitude' => [
            'label' => 'Latitudine',
            'placeholder' => 'Inserisci la latitudine',
        ],
        'longitude' => [
            'label' => 'Longitudine',
            'placeholder' => 'Inserisci la longitudine',
            'description' => 'longitude',
            'helper_text' => '',
        ],
        'type' => [
            'label' => 'Tipo',
            'placeholder' => 'Seleziona il tipo di indirizzo',
            'options' => [
                'billing' => 'Fatturazione',
                'shipping' => 'Spedizione',
                'home' => 'Casa',
                'work' => 'Lavoro',
                'other' => 'Altro',
            ],
        ],
        'is_primary' => [
            'label' => 'Principale',
            'helper' => 'Imposta questo indirizzo come indirizzo principale',
            'description' => 'is_primary',
            'helper_text' => '',
            'placeholder' => 'is_primary',
        ],
        'extra_data' => [
            'label' => 'Dati aggiuntivi',
            'placeholder' => 'Inserisci dati aggiuntivi',
        ],
        'full_address' => [
            'label' => 'Indirizzo completo',
        ],
        'street_address' => [
            'label' => 'Indirizzo stradale',
        ],
        'map' => [
            'description' => 'map',
            'helper_text' => '',
        ],
    ],
    'columns' => [
        'name' => 'Nome',
        'full_address' => 'Indirizzo completo',
        'type' => 'Tipo',
        'is_primary' => 'Principale',
        'locality' => 'Città',
        'postal_code' => 'CAP',
        'model' => 'Associato a',
    ],
    'messages' => [
        'primary_set' => 'Indirizzo impostato come principale con successo',
        'address_verified' => 'Indirizzo verificato correttamente',
        'geocoding_success' => 'Geocodifica completata con successo',
        'geocoding_failed' => "Impossibile geocodificare l'indirizzo",
    ],
    'sections' => [
        'location' => [
            'label' => 'Informazioni di localizzazione',
            'description' => 'Dati relativi alla posizione geografica',
        ],
        'address' => [
            'label' => 'Dati indirizzo',
            'description' => "Dettagli dell'indirizzo",
        ],
        'metadata' => [
            'label' => 'Metadati',
            'description' => "Informazioni aggiuntive sull'indirizzo",
        ],
        'map' => [
            'label' => 'Mappa',
            'description' => 'Visualizzazione su mappa',
        ],
    ],
];
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======
>>>>>>> f2140a80 (- continuo style landing page;)
