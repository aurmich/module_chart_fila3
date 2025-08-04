<?php

return array (
  'fields' => 
  array (
    'view' => 
    array (
<<<<<<< HEAD
<<<<<<< HEAD
      'label' => 'Visualizza',
      'description' => 'Visualizza dettagli elemento',
      'placeholder' => 'Clicca per visualizzare',
      'help' => 'Visualizza i dettagli completi dell\'elemento selezionato',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'description' => 'Elimina elemento',
      'placeholder' => 'Clicca per eliminare',
      'help' => 'Elimina definitivamente l\'elemento selezionato',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'description' => 'Modifica elemento',
      'placeholder' => 'Clicca per modificare',
      'help' => 'Modifica i dati dell\'elemento selezionato',
    ),
    'detach' => 
    array (
      'label' => 'Scollega',
      'description' => 'Scollega elemento',
      'placeholder' => 'Clicca per scollegare',
      'help' => 'Rimuovi la connessione con l\'elemento selezionato',
    ),
    'attach' => 
    array (
      'label' => 'Collega',
      'description' => 'Collega elemento',
      'placeholder' => 'Clicca per collegare',
      'help' => 'Crea una connessione con l\'elemento selezionato',
    ),
    'pregnancy_certificate' => 
    array (
      'label' => 'Certificato di Gravidanza',
      'description' => 'Documento attestante lo stato di gravidanza',
      'placeholder' => 'Carica certificato di gravidanza',
      'help' => 'Carica il certificato medico che attesta lo stato di gravidanza',
    ),
    'health_card' => 
    array (
      'label' => 'Tessera Sanitaria',
      'description' => 'Tessera sanitaria del Sistema Sanitario Nazionale',
      'placeholder' => 'Carica tessera sanitaria',
      'help' => 'Carica la foto fronte/retro della tessera sanitaria',
    ),
    'identity_document' => 
    array (
      'label' => 'Documento di Identità',
      'description' => 'Documento di identità valido (CI, Patente, Passaporto)',
      'placeholder' => 'Carica documento di identità',
      'help' => 'Carica un documento di identità valido e non scaduto',
    ),
    'isee_certificate' => 
    array (
      'label' => 'Certificazione ISEE',
      'description' => 'Indicatore della Situazione Economica Equivalente',
      'placeholder' => 'Carica certificazione ISEE',
      'help' => 'Carica la certificazione ISEE per eventuali agevolazioni economiche',
    ),
    'certifications' => 
    array (
      'label' => 'Certificazioni',
      'description' => 'Certificazioni e documenti aggiuntivi',
      'placeholder' => 'Carica certificazioni',
      'help' => 'Carica eventuali certificazioni mediche o documenti aggiuntivi richiesti',
    ),
    'certification' => 
    array (
      'label' => 'Certificato',
      'description' => 'Certificato medico o documentazione sanitaria',
      'placeholder' => 'Carica certificato',
      'help' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
    ),
    'doctor_certificate' => 
    array (
      'label' => 'Certificato Medico',
      'description' => 'Certificato di abilitazione o iscrizione all\'Ordine',
      'placeholder' => 'Carica certificato medico',
      'help' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
    ),
  ),
  'validation' => 
  array (
    'required' => 
    array (
      'label' => 'Campo obbligatorio',
      'description' => 'Questo campo è obbligatorio e deve essere compilato',
    ),
    'email' => 
    array (
      'label' => 'Email non valida',
      'description' => 'Inserisci un indirizzo email valido',
    ),
    'numeric' => 
    array (
      'label' => 'Deve essere un numero',
      'description' => 'Questo campo deve contenere solo numeri',
    ),
    'date' => 
    array (
      'label' => 'Data non valida',
      'description' => 'Inserisci una data valida nel formato richiesto',
    ),
    'file' => 
    array (
      'label' => 'File non valido',
      'description' => 'Il file caricato non è valido o è troppo grande',
    ),
  ),
  'actions' => 
  array (
    'submit' => 
    array (
      'label' => 'submit',
    ),
  ),
  'steps' => 
  array (
    'confirm_step' => 
    array (
      'label' => 'confirm_step',
    ),
    'date_step' => 
    array (
      'label' => 'date_step',
    ),
    'studio_step' => 
    array (
      'label' => 'studio_step',
    ),
    'search_step' => 
    array (
      'label' => 'search_step',
=======
      'label' => 'view',
      'description' => 'view',
      'helper_text' => 'view',
      'placeholder' => 'view',
<<<<<<< HEAD
>>>>>>> aurmich/dev
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'detach' => 
    array (
      'label' => 'detach',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
<<<<<<< HEAD
=======
    'pregnancy_certificate' => 
    array (
      'description' => 'pregnancy_certificate',
      'label' => 'pregnancy_certificate',
      'placeholder' => 'pregnancy_certificate',
      'helper_text' => 'pregnancy_certificate',
    ),
    'health_card' => 
    array (
      'label' => 'health_card',
      'placeholder' => 'health_card',
      'helper_text' => 'health_card',
      'description' => 'health_card',
    ),
    'identity_document' => 
    array (
      'label' => 'identity_document',
      'placeholder' => 'identity_document',
      'helper_text' => 'identity_document',
      'description' => 'identity_document',
    ),
    'isee_certificate' => 
    array (
      'label' => 'isee_certificate',
      'placeholder' => 'isee_certificate',
      'helper_text' => 'isee_certificate',
      'description' => 'isee_certificate',
    ),
    'certifications' => 
    array (
      'description' => 'certifications',
      'helper_text' => 'certifications',
      'placeholder' => 'certifications',
      'label' => 'certifications',
    ),
  ),
  'steps' => 
  array (
    'documents_step' => 
    array (
      'label' => 'documents_step',
    ),
    'personal_data_step' => 
    array (
      'label' => 'personal_data_step',
    ),
    'privacy_step' => 
    array (
      'label' => 'privacy_step',
    ),
    'previsit_step' => 
    array (
      'label' => 'previsit_step',
    ),
    'seach_step' => 
    array (
      'label' => 'seach_step',
    ),
    'date_step' => 
    array (
      'label' => 'date_step',
    ),
    'time_step' => 
    array (
      'label' => 'time_step',
    ),
    'confirm_step' => 
    array (
      'label' => 'confirm_step',
    ),
    'doctor_step' => 
    array (
      'label' => 'doctor_step',
    ),
    'studio_step' => 
    array (
      'label' => 'studio_step',
    ),
    'search_step' => 
    array (
      'label' => 'search_step',
    ),
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
    'test_step' => 
    array (
      'label' => 'test_step',
    ),
<<<<<<< HEAD
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
=======
    'personal_info_step' => 
    array (
      'label' => 'personal_info_step',
    ),
    'availability_step' => 
    array (
      'label' => 'availability_step',
    ),
>>>>>>> 53293856 (✨ (laravel): add infinite loop prevention rules and documentation for Sushi models)
  ),
  'actions' => 
  array (
    'submit' => 
    array (
      'label' => 'submit',
=======
      'label' => 'view',
      'description' => 'view',
      'helper_text' => 'view',
>>>>>>> 54f4fa16 (.)
=======
<<<<<<< HEAD
      'placeholder' => 'view',
=======
>>>>>>> 4ec8f92 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'detach' => 
    array (
      'label' => 'detach',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'pregnancy_certificate' => 
    array (
      'description' => 'pregnancy_certificate',
      'label' => 'pregnancy_certificate',
      'placeholder' => 'pregnancy_certificate',
      'helper_text' => 'pregnancy_certificate',
    ),
    'health_card' => 
    array (
      'label' => 'health_card',
      'placeholder' => 'health_card',
      'helper_text' => 'health_card',
      'description' => 'health_card',
    ),
    'identity_document' => 
    array (
      'label' => 'identity_document',
      'placeholder' => 'identity_document',
      'helper_text' => 'identity_document',
      'description' => 'identity_document',
    ),
    'isee_certificate' => 
    array (
      'label' => 'isee_certificate',
      'placeholder' => 'isee_certificate',
      'helper_text' => 'isee_certificate',
      'description' => 'isee_certificate',
    ),
  ),
  'steps' => 
  array (
    'documents_step' => 
    array (
      'label' => 'documents_step',
    ),
    'personal_data_step' => 
    array (
      'label' => 'personal_data_step',
    ),
    'privacy_step' => 
    array (
      'label' => 'privacy_step',
    ),
    'previsit_step' => 
    array (
      'label' => 'previsit_step',
    ),
    'seach_step' => 
    array (
      'label' => 'seach_step',
    ),
    'date_step' => 
    array (
      'label' => 'date_step',
    ),
    'time_step' => 
    array (
      'label' => 'time_step',
    ),
    'confirm_step' => 
    array (
      'label' => 'confirm_step',
    ),
    'doctor_step' => 
    array (
      'label' => 'doctor_step',
    ),
    'studio_step' => 
    array (
      'label' => 'studio_step',
    ),
    'search_step' => 
    array (
      'label' => 'search_step',
    ),
    'test_step' => 
    array (
      'label' => 'test_step',
    ),
  ),
);
