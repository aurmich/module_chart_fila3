<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'fields' => [
        'view' => [
            'label' => 'View',
            'description' => 'View item details',
            'placeholder' => 'Click to view',
            'help' => 'View all details of the selected item',
        ],
        'delete' => [
            'label' => 'Delete',
            'description' => 'Delete item',
            'placeholder' => 'Click to delete',
            'help' => 'Permanently delete the selected item',
        ],
        'edit' => [
            'label' => 'Edit',
            'description' => 'Edit item',
            'placeholder' => 'Click to edit',
            'help' => 'Edit the selected item data',
        ],
        'detach' => [
            'label' => 'Detach',
            'description' => 'Detach item',
            'placeholder' => 'Click to detach',
            'help' => 'Remove the connection with the selected item',
        ],
        'attach' => [
            'label' => 'Attach',
            'description' => 'Attach item',
            'placeholder' => 'Click to attach',
            'help' => 'Create a connection with the selected item',
        ],
        'pregnancy_certificate' => [
            'label' => 'Pregnancy Certificate',
            'description' => 'Document certifying pregnancy status',
            'placeholder' => 'Upload pregnancy certificate',
            'help' => 'Upload the medical certificate attesting pregnancy',
        ],
        'health_card' => [
            'label' => 'Health Card',
            'description' => 'National Health System card',
            'placeholder' => 'Upload health card',
            'help' => 'Upload front/back photo of the health card',
        ],
        'identity_document' => [
            'label' => 'Identity Document',
            'description' => 'Valid identity document (ID, License, Passport)',
            'placeholder' => 'Upload identity document',
            'help' => 'Upload a valid and non-expired identity document',
        ],
        'isee_certificate' => [
            'label' => 'ISEE Certificate',
            'description' => 'Equivalent Economic Situation Indicator',
            'placeholder' => 'Upload ISEE certificate',
            'help' => 'Upload the ISEE certificate for any economic benefits',
        ],
        'certifications' => [
            'label' => 'Certifications',
            'description' => 'Medical certifications or additional documents',
            'placeholder' => 'Upload certifications',
            'help' => 'Upload any required medical certifications or additional documents',
        ],
        'certification' => [
            'label' => 'Certificate',
            'description' => 'Medical certificate or health documentation',
            'placeholder' => 'Upload certificate',
            'help' => 'Health card or professional registration certificate',
        ],
        'doctor_certificate' => [
            'label' => 'Doctor Certificate',
            'description' => 'Professional qualification or registration certificate',
            'placeholder' => 'Upload doctor certificate',
            'help' => 'Health card or professional registration certificate',
        ],
    ],
    'validation' => [
        'required' => [
            'label' => 'Required field',
            'description' => 'This field is required and must be filled in',
        ],
        'email' => [
            'label' => 'Invalid email',
            'description' => 'Enter a valid email address',
        ],
        'numeric' => [
            'label' => 'Must be a number',
            'description' => 'This field must contain only numbers',
        ],
        'date' => [
            'label' => 'Invalid date',
            'description' => 'Enter a valid date in the required format',
        ],
        'file' => [
            'label' => 'Invalid file',
            'description' => 'The uploaded file is invalid or too large',
        ],
    ],
];
=======
return array (
  'steps' => 
  array (
    'personal_info_step' => 
    array (
      'label' => 'personal_info_step',
    ),
    'studio_step' => 
    array (
      'label' => 'studio_step',
    ),
    'personal_data_step' => 
    array (
      'label' => 'personal_data_step',
    ),
    'documents_step' => 
    array (
      'label' => 'documents_step',
    ),
    'previsit_step' => 
    array (
      'label' => 'previsit_step',
    ),
    'privacy_step' => 
    array (
      'label' => 'privacy_step',
    ),
    'availability_step' => 
    array (
      'label' => 'availability_step',
    ),
  ),
  'fields' => 
  array (
    'certifications' => 
    array (
      'label' => 'certifications',
      'placeholder' => 'certifications',
      'helper_text' => 'certifications',
      'description' => 'certifications',
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
    'pregnancy_certificate' => 
    array (
      'label' => 'pregnancy_certificate',
      'placeholder' => 'pregnancy_certificate',
      'helper_text' => 'pregnancy_certificate',
      'description' => 'pregnancy_certificate',
    ),
    'doctor_certificate' => 
    array (
      'description' => 'doctor_certificate',
    ),
  ),
);
>>>>>>> b1d9f49d (translations)
