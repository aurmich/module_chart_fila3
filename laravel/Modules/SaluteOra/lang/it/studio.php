<?php

<<<<<<< HEAD
return array (
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return array (
<<<<<<< HEAD
<<<<<<< HEAD
=======
return array (
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
  'navigation' => 
  array (
    'label' => 'Studi',
    'group' => 'Gestione Studi',
    'icon' => 'saluteora-studio',
    'color' => 'primary',
    'sort' => 18,
    'tooltip' => 'Gestisci gli studi odontoiatrici registrati nel sistema',
  ),
  'model' => 
  array (
    'label' => 'Studio',
    'plural' => 'Studi',
    'description' => 'Gestione anagrafica e informazioni degli studi odontoiatrici',
  ),
  'pages' => 
  array (
    'index' => 
    array (
      'title' => 'Elenco Studi Medici',
      'subtitle' => 'Gestione studi registrati',
      'description' => 'Visualizza, modifica e gestisci tutti gli studi medici registrati nel sistema',
    ),
    'create' => 
    array (
      'title' => 'Registrazione Nuovo Studio',
      'subtitle' => 'Inserimento dati studio',
      'description' => 'Compila il modulo per registrare un nuovo studio medico',
    ),
    'edit' => 
    array (
      'title' => 'Modifica Studio Medico',
      'subtitle' => 'Aggiornamento informazioni',
      'description' => 'Modifica le informazioni dello studio selezionato',
    ),
    'view' => 
    array (
      'title' => 'Dettagli Studio Medico',
      'subtitle' => 'Visualizzazione completa',
      'description' => 'Consulta tutte le informazioni dello studio medico',
    ),
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID Studio',
      'placeholder' => 'Identificativo univoco generato automaticamente',
      'help' => 'Numero identificativo univoco dello studio nel sistema',
      'helper_text' => '',
      'description' => '',
    ),
    'name' => 
    array (
      'label' => 'Nome Studio',
      'placeholder' => 'Inserisci il nome dello studio odontoiatrico',
      'help' => 'Denominazione ufficiale dello studio o della struttura sanitaria',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
  'single' => 'Studio',
  'plural' => 'Studi',
  'fields' =>
  array (
    'name' =>
    array (
<<<<<<< HEAD
      'label' => 'nome studio',
      'placeholder' => 'nome studio',
>>>>>>> aurmich/dev
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
      'helper_text' => '',
      'description' => '',
    ),
    'address' => 
    array (
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
      'label' => 'Indirizzo Completo',
      'placeholder' => 'Via/Piazza e numero civico dello studio',
      'help' => 'Indirizzo fisico completo dove si trova lo studio',
      'helper_text' => '',
      'description' => '',
      'full_address' => 
      array (
        'label' => 'Indirizzo Completo',
        'placeholder' => 'Indirizzo formattato completo',
        'help' => 'Indirizzo completo formattato per visualizzazione e mappe',
        'helper_text' => '',
        'description' => '',
      ),
    ),
    'city' => 
    array (
      'label' => 'Città',
      'placeholder' => 'Inserisci la città dove si trova lo studio',
      'help' => 'Città di ubicazione dello studio odontoiatrico',
      'helper_text' => '',
    ),
    'postal_code' => 
    array (
      'label' => 'CAP',
      'placeholder' => 'Inserisci il codice postale (es. 00100)',
      'help' => 'Codice di avviamento postale della zona dove si trova lo studio',
      'helper_text' => '',
    ),
    'phone' => 
    array (
      'label' => 'Numero di Telefono',
      'placeholder' => 'Inserisci il numero di telefono dello studio',
      'help' => 'Numero di telefono principale per contatti e prenotazioni',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
      'full_address' => 
      array (
        'label' => 'address.full_address',
      ),
      'label' => 'address',
    ),
=======
      'label' => 'name',
      'placeholder' => 'name',
      'helper_text' => 'name',
      'description' => 'name',
    ),
    'address' => 'Indirizzo',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
    'city' => 'Città',
    'postal_code' => 'CAP',
    'phone' =>
    array (
      'label' => 'phone',
      'placeholder' => 'phone',
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
return array (
  'single' => 'Studio',
  'plural' => 'Studi',
  'fields' => 
  array (
    'name' => 
    array (
      'label' => 'nome studio',
      'placeholder' => 'nome studio',
      'helper_text' => '',
      'description' => '',
    ),
    'address' => 
    array (
      'full_address' => 
      array (
        'label' => 'address.full_address',
      ),
      'label' => 'address',
    ),
    'city' => 'Città',
    'postal_code' => 'CAP',
    'phone' => 
    array (
      'label' => 'phone',
      'placeholder' => 'phone',
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
      'helper_text' => '',
      'description' => '',
    ),
    'email' => 
    array (
<<<<<<< HEAD
      'label' => 'Email Studio',
      'placeholder' => 'Inserisci l\'email di contatto dello studio',
      'help' => 'Indirizzo email ufficiale per comunicazioni professionali',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      'label' => 'Email Studio',
      'placeholder' => 'Inserisci l\'email di contatto dello studio',
      'help' => 'Indirizzo email ufficiale per comunicazioni professionali',
=======
      'label' => 'email',
      'placeholder' => 'email',
>>>>>>> aurmich/dev
=======
      'label' => 'email',
      'placeholder' => 'email',
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
      'label' => 'Email Studio',
      'placeholder' => 'Inserisci l\'email di contatto dello studio',
      'help' => 'Indirizzo email ufficiale per comunicazioni professionali',
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
      'helper_text' => '',
      'description' => '',
    ),
    'website' => 
    array (
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
      'label' => 'Sito Web',
      'placeholder' => 'Inserisci l\'URL del sito web (es. https://studio.it)',
      'help' => 'Indirizzo del sito web ufficiale dello studio odontoiatrico',
      'helper_text' => '',
      'description' => '',
    ),
    'registration_number' => 
    array (
      'label' => 'Numero di Registrazione',
      'placeholder' => 'Inserisci il numero di registrazione ufficiale',
      'help' => 'Numero di registrazione presso l\'ordine dei medici o enti competenti',
      'helper_text' => '',
      'description' => '',
    ),
    'vat_number' => 
    array (
      'label' => 'Partita IVA',
      'placeholder' => 'Inserisci la partita IVA dello studio',
      'help' => 'Numero di partita IVA per fatturazione e aspetti fiscali',
      'description' => '',
      'helper_text' => '',
    ),
    'description' => 
    array (
      'label' => 'Descrizione Studio',
      'placeholder' => 'Descrivi i servizi e le specializzazioni dello studio',
      'help' => 'Descrizione dettagliata dei servizi offerti e delle specializzazioni',
      'description' => '',
      'helper_text' => '',
    ),
    'opening_hours' => 
    array (
      'label' => 'Orari di Apertura',
      'placeholder' => 'Inserisci gli orari di apertura dello studio',
      'help' => 'Orari di apertura settimanali per appuntamenti e visite',
      'helper_text' => '',
      'description' => '',
    ),
    'services' => 
    array (
      'label' => 'Servizi Offerti',
      'placeholder' => 'Elenca i servizi e trattamenti disponibili',
      'help' => 'Elenco completo dei servizi odontoiatrici e trattamenti offerti',
      'helper_text' => '',
      'description' => '',
    ),
    'active' => 
    array (
      'label' => 'Studio Attivo',
      'placeholder' => 'Indica se lo studio è attualmente operativo',
      'help' => 'Stato di attivazione dello studio nel sistema',
      'helper_text' => '',
      'description' => '',
    ),
    'addresses' => 
    array (
      'label' => 'Indirizzi Aggiuntivi',
      'placeholder' => 'Gestisci indirizzi secondari o sedi distaccate',
      'help' => 'Gestione di indirizzi aggiuntivi o sedi secondarie dello studio',
      'helper_text' => '',
      'description' => '',
    ),
    'is_primary' => 
    array (
      'label' => 'Studio Principale',
      'placeholder' => 'Indica se questo è lo studio principale',
      'help' => 'Seleziona se questo è lo studio principale tra quelli gestiti',
      'helper_text' => '',
      'description' => '',
    ),
    'administrative_area_level_1' => 
    array (
      'label' => 'Regione',
      'placeholder' => 'Regione di appartenenza dello studio',
      'help' => 'Regione amministrativa dove è ubicato lo studio',
      'helper_text' => '',
      'description' => '',
    ),
    'created_at' => 
    array (
      'label' => 'Data Creazione',
      'placeholder' => 'Data di registrazione dello studio nel sistema',
      'help' => 'Data e ora di prima registrazione dello studio',
      'helper_text' => '',
      'description' => '',
    ),
    'updated_at' => 
    array (
      'label' => 'Aggiornato il',
      'placeholder' => 'Data ultima modifica dei dati dello studio',
      'help' => 'Data e ora dell\'ultimo aggiornamento delle informazioni',
      'helper_text' => '',
      'description' => '',
    ),
    'deleted_at' => 
    array (
      'label' => 'Eliminato il',
      'placeholder' => 'Data di eliminazione logica dello studio',
      'help' => 'Data di eliminazione logica dello studio dal sistema',
      'helper_text' => '',
      'description' => '',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
      'description' => 'website',
      'helper_text' => '',
=======
      'helper_text' => 'phone',
      'description' => 'phone',
    ),
    'email' =>
    array (
      'label' => 'email',
      'placeholder' => 'email',
      'helper_text' => 'email',
      'description' => 'email',
    ),
    'website' =>
    array (
      'description' => 'website',
      'helper_text' => 'website',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
      'placeholder' => 'website',
      'label' => 'website',
    ),
    'registration_number' =>
    array (
      'description' => 'registration_number',
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'registration_number',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
      'placeholder' => 'registration_number',
      'label' => 'registration_number',
    ),
    'vat_number' =>
    array (
      'description' => 'vat_number',
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'vat_number',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
      'placeholder' => 'vat_number',
      'label' => 'vat_number',
    ),
    'description' =>
    array (
      'description' => 'description',
<<<<<<< HEAD
      'helper_text' => '',
=======
      'helper_text' => 'description',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'description' => 'website',
      'helper_text' => '',
      'placeholder' => 'website',
      'label' => 'website',
    ),
    'registration_number' => 
    array (
      'description' => 'registration_number',
      'helper_text' => '',
      'placeholder' => 'registration_number',
      'label' => 'registration_number',
    ),
    'vat_number' => 
    array (
      'description' => 'vat_number',
      'helper_text' => '',
      'placeholder' => 'vat_number',
      'label' => 'vat_number',
    ),
    'description' => 
    array (
      'description' => 'description',
      'helper_text' => '',
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
      'placeholder' => 'description',
      'label' => 'description',
    ),
    'opening_hours' => 'Orari di apertura',
    'services' => 'Servizi',
<<<<<<< HEAD
    'active' =>
    array (
      'description' => 'active',
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'active' => 
    array (
      'description' => 'active',
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
      'label' => 'active',
    ),
    'created_at' => 
    array (
      'label' => 'created_at',
    ),
<<<<<<< HEAD
=======
    ),
    'created_at' => 'Creato il',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
      'label' => 'active',
    ),
    'created_at' =>
    array (
      'label' => 'created_at',
    ),
>>>>>>> 2bcfd382 (fix Address)
    'updated_at' => 'Aggiornato il',
    'deleted_at' => 'Eliminato il',
    'resetFilters' =>
    array (
      'label' => 'resetFilters',
    ),
    'addresses' =>
=======
    'updated_at' => 'Aggiornato il',
    'deleted_at' => 'Eliminato il',
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'addresses' => 
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    array (
      'description' => 'addresses',
      'helper_text' => 'addresses',
      'placeholder' => 'addresses',
      'label' => 'addresses',
    ),
<<<<<<< HEAD
    'applyFilters' =>
    array (
      'label' => 'applyFilters',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a872e835 (✨ (AddressResource.php): replace locality text input with a searchable select)
=======
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'id' => 
    array (
      'label' => 'id',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'is_primary' => 
    array (
      'description' => 'is_primary',
      'label' => 'is_primary',
      'placeholder' => 'is_primary',
      'helper_text' => 'is_primary',
<<<<<<< HEAD
>>>>>>> aurmich/dev
    ),
    'administrative_area_level_1' => 
    array (
      'description' => 'administrative_area_level_1',
      'helper_text' => 'administrative_area_level_1',
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    ),
    'administrative_area_level_1' => 
    array (
      'description' => 'administrative_area_level_1',
      'helper_text' => 'administrative_area_level_1',
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
    ),
  ),
  'actions' => 
  array (
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
    'create' => 
    array (
      'label' => 'Nuovo Studio',
      'modal_heading' => 'Registra nuovo studio',
      'modal_description' => 'Inserisci i dati per registrare un nuovo studio odontoiatrico',
      'success' => 'Studio registrato con successo',
      'error' => 'Errore durante la registrazione dello studio',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'modal_heading' => 'Modifica dati studio',
      'modal_description' => 'Aggiorna le informazioni dello studio selezionato',
      'success' => 'Dati studio aggiornati con successo',
      'error' => 'Errore durante l\'aggiornamento',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'modal_heading' => 'Elimina studio',
      'modal_description' => 'Sei sicuro di voler eliminare questo studio?',
      'success' => 'Studio eliminato con successo',
      'error' => 'Errore durante l\'eliminazione',
      'confirmation' => 'Questa azione eliminerà tutti i dati associati',
    ),
    'view' => 
    array (
      'label' => 'Visualizza',
      'modal_heading' => 'Dettagli studio',
      'modal_description' => 'Consulta tutte le informazioni dello studio',
    ),
    'activate' => 
    array (
      'label' => 'Attiva',
      'modal_heading' => 'Attiva studio',
      'modal_description' => 'Attiva lo studio per renderlo operativo',
      'success' => 'Studio attivato con successo',
      'error' => 'Errore durante l\'attivazione',
    ),
    'deactivate' => 
    array (
      'label' => 'Disattiva',
      'modal_heading' => 'Disattiva studio',
      'modal_description' => 'Disattiva temporaneamente lo studio',
      'success' => 'Studio disattivato con successo',
      'error' => 'Errore durante la disattivazione',
    ),
    'register_tenant' => 
    array (
      'label' => 'Aggiungi Studio',
      'modal_heading' => 'Registra studio come tenant',
      'modal_description' => 'Registra questo studio come nuovo tenant nel sistema',
      'success' => 'Studio registrato come tenant',
      'error' => 'Errore durante la registrazione tenant',
    ),
    'attach' => 
    array (
      'label' => 'Collega',
      'modal_heading' => 'Collega elemento',
      'modal_description' => 'Collega questo elemento allo studio',
      'success' => 'Elemento collegato con successo',
      'error' => 'Errore durante il collegamento',
    ),
    'reset_filters' => 
    array (
      'label' => 'Azzera Filtri',
      'tooltip' => 'Rimuovi tutti i filtri di ricerca applicati',
    ),
    'apply_filters' => 
    array (
      'label' => 'Applica Filtri',
      'tooltip' => 'Applica i filtri di ricerca selezionati',
    ),
    'toggle_columns' => 
    array (
      'label' => 'Mostra/Nascondi Colonne',
      'tooltip' => 'Personalizza le colonne visibili nella tabella',
    ),
    'reorder_records' => 
    array (
      'label' => 'Riordina Record',
      'tooltip' => 'Riordina i record trascinandoli',
    ),
    'open_filters' => 
    array (
      'label' => 'Apri Filtri',
      'tooltip' => 'Apri il pannello dei filtri di ricerca',
    ),
  ),
  'filters' => 
  array (
    'active' => 
    array (
      'label' => 'Stato Attivazione',
      'options' => 
      array (
        'all' => 'Tutti gli studi',
        'active' => 'Solo studi attivi',
        'inactive' => 'Solo studi inattivi',
      ),
    ),
    'city' => 
    array (
      'label' => 'Filtra per Città',
      'placeholder' => 'Seleziona una città',
    ),
    'region' => 
    array (
      'label' => 'Filtra per Regione',
      'placeholder' => 'Seleziona una regione',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    'activate' => 'Attiva',
    'deactivate' => 'Disattiva',
    'register_tenant' => 
    array (
      'label' => 'Aggiungi Studio',
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
    ),
  ),
  'messages' => 
  array (
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
    'empty_state' => 'Nessuno studio registrato',
    'loading' => 'Caricamento dati studi...',
    'saved' => 'Modifiche salvate correttamente',
    'activated' => 'Studio attivato con successo.',
    'deactivated' => 'Studio disattivato con successo.',
    'tenant_created' => 'Studio registrato come tenant',
    'search_no_results' => 'Nessuno studio trovato con i criteri specificati',
  ),
  'notifications' => 
  array (
    'studio_activated' => 'Il tuo studio è stato attivato e puoi iniziare ad operare',
    'studio_deactivated' => 'Il tuo studio è stato temporaneamente disattivato',
    'registration_completed' => 'Registrazione studio completata con successo',
    'data_updated' => 'I dati dello studio sono stati aggiornati',
    'error_occurred' => 'Si è verificato un errore durante l\'operazione',
  ),
  'tabs' => 
  array (
    'general' => 'Informazioni Generali',
    'contact' => 'Contatti e Ubicazione',
    'services' => 'Servizi e Specializzazioni',
    'staff' => 'Staff e Operatori',
    'schedule' => 'Orari e Disponibilità',
    'documents' => 'Documenti e Certificazioni',
  ),
  'sections' => 
  array (
    'general_info' => 
    array (
      'label' => 'Informazioni Generali',
      'description' => 'Dati principali dello studio odontoiatrico',
    ),
    'contact_info' => 
    array (
      'label' => 'Informazioni di Contatto',
      'description' => 'Recapiti e modalità di contatto dello studio',
    ),
    'location_info' => 
    array (
      'label' => 'Informazioni Ubicazione',
      'description' => 'Dati relativi alla posizione geografica',
    ),
    'business_info' => 
    array (
      'label' => 'Informazioni Commerciali',
      'description' => 'Dati fiscali e commerciali dello studio',
    ),
<<<<<<< HEAD
  ),
);
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> a872e835 (✨ (AddressResource.php): replace locality text input with a searchable select)
=======
    'toggleColumns' =>
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' =>
    array (
      'label' => 'reorderRecords',
    ),
    'openFilters' =>
    array (
      'label' => 'openFilters',
    ),
    'id' =>
    array (
      'label' => 'id',
    ),
    'attach' =>
    array (
      'label' => 'attach',
    ),
>>>>>>> 2bcfd382 (fix Address)
  ),
  'actions' =>
  array (
    'activate' => 'Attiva',
    'deactivate' => 'Disattiva',
  ),
  'messages' =>
  array (
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
    'activated' => 'Studio attivato con successo.',
    'deactivated' => 'Studio disattivato con successo.',
  ),
  'navigation' =>
  array (
    'sort' => 18,
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'activated' => 'Studio attivato con successo.',
    'deactivated' => 'Studio disattivato con successo.',
  ),
  'navigation' => 
  array (
    'sort' => 18,
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    'label' => 'Studi',
    'icon' => 'saluteora-studio',
    'group' => 'Gestione Studi',
  ),
  'model' => 
  array (
    'label' => 'Studio',
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
    'label' => 'studio.navigation',
    'icon' => 'studio.navigation',
    'group' => 'studio.navigation',
=======
    'label' => 'Studi',
    'icon' => 'saluteora-studio',
    'group' => 'Gestione Studi',
>>>>>>> 2bcfd382 (fix Address)
  ),
  'model' =>
  array (
<<<<<<< HEAD
    'label' => 'studio.model',
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    'label' => 'Studio',
>>>>>>> 2bcfd382 (fix Address)
  ),
);
=======
return [
    'single' => 'Studio',
    'plural' => 'Studi',
    'fields' => [
        'name' => [
            'label' => 'nome studio',
            'placeholder' => 'nome studio',
            'helper_text' => '',
            'description' => '',
        ],
        'address' => 'Indirizzo',
        'city' => 'Città',
        'postal_code' => 'CAP',
        'phone' => [
            'label' => 'phone',
            'placeholder' => 'phone',
            'helper_text' => '',
            'description' => '',
        ],
        'email' => [
            'label' => 'email',
            'placeholder' => 'email',
            'helper_text' => '',
            'description' => '',
        ],
        'website' => [
            'description' => 'website',
            'helper_text' => '',
            'placeholder' => 'website',
            'label' => 'website',
        ],
        'registration_number' => [
            'description' => 'registration_number',
            'helper_text' => '',
            'placeholder' => 'registration_number',
            'label' => 'registration_number',
        ],
        'vat_number' => [
            'description' => 'vat_number',
            'helper_text' => '',
            'placeholder' => 'vat_number',
            'label' => 'vat_number',
        ],
        'description' => [
            'description' => 'description',
            'helper_text' => '',
            'placeholder' => 'description',
            'label' => 'description',
        ],
        'opening_hours' => 'Orari di apertura',
        'services' => 'Servizi',
        'active' => [
            'description' => 'active',
            'label' => 'active',
        ],
        'created_at' => [
            'label' => 'created_at',
        ],
        'updated_at' => 'Aggiornato il',
        'deleted_at' => 'Eliminato il',
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'addresses' => [
            'description' => 'addresses',
            'helper_text' => 'addresses',
            'placeholder' => 'addresses',
            'label' => 'addresses',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'openFilters' => [
            'label' => 'openFilters',
        ],
        'id' => [
            'label' => 'id',
        ],
        'attach' => [
            'label' => 'attach',
        ],
    ],
    'actions' => [
        'activate' => 'Attiva',
        'deactivate' => 'Disattiva',
        'register_tenant' => [
            'label' => 'Aggiungi Studio',
        ],
    ],
    'messages' => [
        'activated' => 'Studio attivato con successo.',
        'deactivated' => 'Studio disattivato con successo.',
    ],
    'navigation' => [
        'sort' => 18,
        'label' => 'Studi',
        'icon' => 'saluteora-studio',
        'group' => 'Gestione Studi',
    ],
    'model' => [
        'label' => 'Studio',
    ],
];
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======
  ),
);
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Studi',
        'group' => 'Gestione Studi',
        'icon' => 'saluteora-studio',
        'color' => 'primary',
        'sort' => 18,
        'tooltip' => 'Gestisci gli studi odontoiatrici registrati nel sistema',
    ],

    'model' => [
        'label' => 'Studio',
        'plural' => 'Studi',
        'description' => 'Gestione anagrafica e informazioni degli studi odontoiatrici',
    ],

    'pages' => [
        'index' => [
            'title' => 'Elenco Studi Medici',
            'subtitle' => 'Gestione studi registrati',
            'description' => 'Visualizza, modifica e gestisci tutti gli studi medici registrati nel sistema',
        ],
        'create' => [
            'title' => 'Registrazione Nuovo Studio',
            'subtitle' => 'Inserimento dati studio',
            'description' => 'Compila il modulo per registrare un nuovo studio medico',
        ],
        'edit' => [
            'title' => 'Modifica Studio Medico',
            'subtitle' => 'Aggiornamento informazioni',
            'description' => 'Modifica le informazioni dello studio selezionato',
        ],
        'view' => [
            'title' => 'Dettagli Studio Medico',
            'subtitle' => 'Visualizzazione completa',
            'description' => 'Consulta tutte le informazioni dello studio medico',
        ],
    ],

    'fields' => [
        'id' => [
            'label' => 'ID Studio',
            'placeholder' => 'Identificativo univoco generato automaticamente',
            'help' => 'Numero identificativo univoco dello studio nel sistema',
        ],
        'name' => [
            'label' => 'Nome Studio',
            'placeholder' => 'Inserisci il nome dello studio odontoiatrico',
            'help' => 'Denominazione ufficiale dello studio o della struttura sanitaria',
        ],
        'address' => [
            'label' => 'Indirizzo Completo',
            'placeholder' => 'Via/Piazza e numero civico dello studio',
            'help' => 'Indirizzo fisico completo dove si trova lo studio',
            'full_address' => [
                'label' => 'Indirizzo Completo',
                'placeholder' => 'Indirizzo formattato completo',
                'help' => 'Indirizzo completo formattato per visualizzazione e mappe',
            ],
        ],
        'city' => [
            'label' => 'Città',
            'placeholder' => 'Inserisci la città dove si trova lo studio',
            'help' => 'Città di ubicazione dello studio odontoiatrico',
        ],
        'postal_code' => [
            'label' => 'CAP',
            'placeholder' => 'Inserisci il codice postale (es. 00100)',
            'help' => 'Codice di avviamento postale della zona dove si trova lo studio',
        ],
        'phone' => [
            'label' => 'Numero di Telefono',
            'placeholder' => 'Inserisci il numero di telefono dello studio',
            'help' => 'Numero di telefono principale per contatti e prenotazioni',
        ],
        'email' => [
            'label' => 'Email Studio',
            'placeholder' => 'Inserisci l\'email di contatto dello studio',
            'help' => 'Indirizzo email ufficiale per comunicazioni professionali',
        ],
        'website' => [
            'label' => 'Sito Web',
            'placeholder' => 'Inserisci l\'URL del sito web (es. https://studio.it)',
            'help' => 'Indirizzo del sito web ufficiale dello studio odontoiatrico',
        ],
        'registration_number' => [
            'label' => 'Numero di Registrazione',
            'placeholder' => 'Inserisci il numero di registrazione ufficiale',
            'help' => 'Numero di registrazione presso l\'ordine dei medici o enti competenti',
        ],
        'vat_number' => [
            'label' => 'Partita IVA',
            'placeholder' => 'Inserisci la partita IVA dello studio',
            'help' => 'Numero di partita IVA per fatturazione e aspetti fiscali',
        ],
        'description' => [
            'label' => 'Descrizione Studio',
            'placeholder' => 'Descrivi i servizi e le specializzazioni dello studio',
            'help' => 'Descrizione dettagliata dei servizi offerti e delle specializzazioni',
        ],
        'opening_hours' => [
            'label' => 'Orari di Apertura',
            'placeholder' => 'Inserisci gli orari di apertura dello studio',
            'help' => 'Orari di apertura settimanali per appuntamenti e visite',
        ],
        'services' => [
            'label' => 'Servizi Offerti',
            'placeholder' => 'Elenca i servizi e trattamenti disponibili',
            'help' => 'Elenco completo dei servizi odontoiatrici e trattamenti offerti',
        ],
        'active' => [
            'label' => 'Studio Attivo',
            'placeholder' => 'Indica se lo studio è attualmente operativo',
            'help' => 'Stato di attivazione dello studio nel sistema',
        ],
        'addresses' => [
            'label' => 'Indirizzi Aggiuntivi',
            'placeholder' => 'Gestisci indirizzi secondari o sedi distaccate',
            'help' => 'Gestione di indirizzi aggiuntivi o sedi secondarie dello studio',
        ],
        'is_primary' => [
            'label' => 'Studio Principale',
            'placeholder' => 'Indica se questo è lo studio principale',
            'help' => 'Seleziona se questo è lo studio principale tra quelli gestiti',
        ],
        'administrative_area_level_1' => [
            'label' => 'Regione',
            'placeholder' => 'Regione di appartenenza dello studio',
            'help' => 'Regione amministrativa dove è ubicato lo studio',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
            'placeholder' => 'Data di registrazione dello studio nel sistema',
            'help' => 'Data e ora di prima registrazione dello studio',
        ],
        'updated_at' => [
            'label' => 'Aggiornato il',
            'placeholder' => 'Data ultima modifica dei dati dello studio',
            'help' => 'Data e ora dell\'ultimo aggiornamento delle informazioni',
        ],
        'deleted_at' => [
            'label' => 'Eliminato il',
            'placeholder' => 'Data di eliminazione logica dello studio',
            'help' => 'Data di eliminazione logica dello studio dal sistema',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'Nuovo Studio',
            'modal_heading' => 'Registra nuovo studio',
            'modal_description' => 'Inserisci i dati per registrare un nuovo studio odontoiatrico',
            'success' => 'Studio registrato con successo',
            'error' => 'Errore durante la registrazione dello studio',
        ],
        'edit' => [
            'label' => 'Modifica',
            'modal_heading' => 'Modifica dati studio',
            'modal_description' => 'Aggiorna le informazioni dello studio selezionato',
            'success' => 'Dati studio aggiornati con successo',
            'error' => 'Errore durante l\'aggiornamento',
        ],
        'delete' => [
            'label' => 'Elimina',
            'modal_heading' => 'Elimina studio',
            'modal_description' => 'Sei sicuro di voler eliminare questo studio?',
            'success' => 'Studio eliminato con successo',
            'error' => 'Errore durante l\'eliminazione',
            'confirmation' => 'Questa azione eliminerà tutti i dati associati',
        ],
        'view' => [
            'label' => 'Visualizza',
            'modal_heading' => 'Dettagli studio',
            'modal_description' => 'Consulta tutte le informazioni dello studio',
        ],
        'activate' => [
            'label' => 'Attiva',
            'modal_heading' => 'Attiva studio',
            'modal_description' => 'Attiva lo studio per renderlo operativo',
            'success' => 'Studio attivato con successo',
            'error' => 'Errore durante l\'attivazione',
        ],
        'deactivate' => [
            'label' => 'Disattiva',
            'modal_heading' => 'Disattiva studio',
            'modal_description' => 'Disattiva temporaneamente lo studio',
            'success' => 'Studio disattivato con successo',
            'error' => 'Errore durante la disattivazione',
        ],
        'register_tenant' => [
            'label' => 'Aggiungi Studio',
            'modal_heading' => 'Registra studio come tenant',
            'modal_description' => 'Registra questo studio come nuovo tenant nel sistema',
            'success' => 'Studio registrato come tenant',
            'error' => 'Errore durante la registrazione tenant',
        ],
        'attach' => [
            'label' => 'Collega',
            'modal_heading' => 'Collega elemento',
            'modal_description' => 'Collega questo elemento allo studio',
            'success' => 'Elemento collegato con successo',
            'error' => 'Errore durante il collegamento',
        ],
        'reset_filters' => [
            'label' => 'Azzera Filtri',
            'tooltip' => 'Rimuovi tutti i filtri di ricerca applicati',
        ],
        'apply_filters' => [
            'label' => 'Applica Filtri',
            'tooltip' => 'Applica i filtri di ricerca selezionati',
        ],
        'toggle_columns' => [
            'label' => 'Mostra/Nascondi Colonne',
            'tooltip' => 'Personalizza le colonne visibili nella tabella',
        ],
        'reorder_records' => [
            'label' => 'Riordina Record',
            'tooltip' => 'Riordina i record trascinandoli',
        ],
        'open_filters' => [
            'label' => 'Apri Filtri',
            'tooltip' => 'Apri il pannello dei filtri di ricerca',
        ],
    ],

    'filters' => [
        'active' => [
            'label' => 'Stato Attivazione',
            'options' => [
                'all' => 'Tutti gli studi',
                'active' => 'Solo studi attivi',
                'inactive' => 'Solo studi inattivi',
            ],
        ],
        'city' => [
            'label' => 'Filtra per Città',
            'placeholder' => 'Seleziona una città',
        ],
        'region' => [
            'label' => 'Filtra per Regione',
            'placeholder' => 'Seleziona una regione',
        ],
    ],

    'messages' => [
        'empty_state' => 'Nessuno studio registrato',
        'loading' => 'Caricamento dati studi...',
        'saved' => 'Modifiche salvate correttamente',
        'activated' => 'Studio attivato con successo.',
        'deactivated' => 'Studio disattivato con successo.',
        'tenant_created' => 'Studio registrato come tenant',
        'search_no_results' => 'Nessuno studio trovato con i criteri specificati',
    ],

    'notifications' => [
        'studio_activated' => 'Il tuo studio è stato attivato e puoi iniziare ad operare',
        'studio_deactivated' => 'Il tuo studio è stato temporaneamente disattivato',
        'registration_completed' => 'Registrazione studio completata con successo',
        'data_updated' => 'I dati dello studio sono stati aggiornati',
        'error_occurred' => 'Si è verificato un errore durante l\'operazione',
    ],

    'tabs' => [
        'general' => 'Informazioni Generali',
        'contact' => 'Contatti e Ubicazione',
        'services' => 'Servizi e Specializzazioni',
        'staff' => 'Staff e Operatori',
        'schedule' => 'Orari e Disponibilità',
        'documents' => 'Documenti e Certificazioni',
    ],

    'sections' => [
        'general_info' => [
            'label' => 'Informazioni Generali',
            'description' => 'Dati principali dello studio odontoiatrico',
        ],
        'contact_info' => [
            'label' => 'Informazioni di Contatto',
            'description' => 'Recapiti e modalità di contatto dello studio',
        ],
        'location_info' => [
            'label' => 'Informazioni Ubicazione',
            'description' => 'Dati relativi alla posizione geografica',
        ],
        'business_info' => [
            'label' => 'Informazioni Commerciali',
            'description' => 'Dati fiscali e commerciali dello studio',
        ],
    ],
];
>>>>>>> 8d591468 (fields translations)
=======
  ),
);
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
