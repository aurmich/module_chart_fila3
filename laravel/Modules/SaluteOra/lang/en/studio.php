<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return [
    'navigation' => [
        'label' => 'Medical Practices',
        'group' => 'Health Management',
        'icon' => 'heroicon-o-building-office',
        'sort' => '20',
        'color' => 'primary',
        'tooltip' => 'Gestisci gli studi odontoiatrici registrati nel sistema',
    ],
    'model' => [
        'label' => 'Medical Practice',
        'plural_label' => 'Medical Practices',
        'description' => 'Complete management of medical studios and healthcare facilities',
        'plural' => 'Studi',
    ],
    'pages' => [
        'index' => [
            'title' => 'Dental Practices List',
=======
=======
>>>>>>> b1d9f49d (translations)
=======
>>>>>>> a0e35b8d (helper text on login)
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Medical Studios',
        'group' => 'Health Management',
        'icon' => 'heroicon-o-building-office',
        'sort' => 20,
    ],

    'model' => [
        'label' => 'Medical Studio',
        'plural_label' => 'Medical Studios',
        'description' => 'Complete management of medical studios and healthcare facilities',
    ],

    'pages' => [
        'index' => [
            'title' => 'Dental Studios List',
>>>>>>> 8d591468 (fields translations)
            'subtitle' => 'Registered studios management',
            'description' => 'View, edit and manage all registered dental studios in the system',
        ],
        'create' => [
<<<<<<< HEAD
            'title' => 'Register New Practice',
            'subtitle' => 'Practice data entry',
            'description' => 'Fill the form to register a new dental studio',
        ],
        'edit' => [
            'title' => 'Edit Dental Practice',
=======
            'title' => 'Register New Studio',
            'subtitle' => 'Studio data entry',
            'description' => 'Fill the form to register a new dental studio',
        ],
        'edit' => [
            'title' => 'Edit Dental Studio',
>>>>>>> 8d591468 (fields translations)
            'subtitle' => 'Update information',
            'description' => 'Edit the selected studio information',
        ],
        'view' => [
<<<<<<< HEAD
            'title' => 'Dental Practice Details',
=======
            'title' => 'Dental Studio Details',
>>>>>>> 8d591468 (fields translations)
            'subtitle' => 'Complete view',
            'description' => 'View all dental studio information',
        ],
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Automatic identifier',
            'help' => 'Unique system identifier for the studio',
<<<<<<< HEAD
            'helper_text' => '',
            'description' => '',
        ],
        'name' => [
            'label' => 'Practice Name',
            'placeholder' => 'Enter medical studio name',
            'help' => 'Official name of the medical studio or clinic',
            'helper_text' => '',
            'description' => '',
=======
        ],
        'name' => [
            'label' => 'Studio Name',
            'placeholder' => 'Enter medical studio name',
            'help' => 'Official name of the medical studio or clinic',
>>>>>>> 8d591468 (fields translations)
        ],
        'slug' => [
            'label' => 'URL Slug',
            'placeholder' => 'studio-name-location',
            'help' => 'URL-friendly identifier for the studio',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter studio description...',
            'help' => 'Brief description of services and specializations offered',
<<<<<<< HEAD
            'description' => 'description',
            'helper_text' => '',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'email' => [
            'label' => 'Email Address',
            'placeholder' => 'studio@example.com',
            'help' => 'Primary email contact for the medical studio',
<<<<<<< HEAD
            'helper_text' => '',
            'description' => '',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'phone' => [
            'label' => 'Phone Number',
            'placeholder' => '+39 02 1234567',
            'help' => 'Main phone number for appointments and inquiries',
<<<<<<< HEAD
            'helper_text' => '',
            'description' => '',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'website' => [
            'label' => 'Website',
            'placeholder' => 'https://www.studio.com',
            'help' => 'Official website URL (optional)',
<<<<<<< HEAD
            'helper_text' => '',
            'description' => '',
        ],
        'address' => [
            'label' => 'Street Address',
            'placeholder' => 'Street Address 123',
            'help' => 'Complete street address with building number',
            'helper_text' => '',
            'description' => '',
            'full_address' => [
                'label' => 'Address Completo',
                'placeholder' => 'Address formattato completo',
                'help' => 'Address completo formattato per visualizzazione e mappe',
                'helper_text' => '',
                'description' => '',
            ],
=======
        ],
        'address' => [
            'label' => 'Street Address',
            'placeholder' => 'Via Roma 123',
            'help' => 'Complete street address with building number',
>>>>>>> 8d591468 (fields translations)
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Milan',
            'help' => 'City where the studio is located',
<<<<<<< HEAD
            'helper_text' => '',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'state' => [
            'label' => 'State/Region',
            'placeholder' => 'Lombardy',
            'help' => 'Italian region or state',
        ],
        'postal_code' => [
            'label' => 'Postal Code',
            'placeholder' => '20100',
            'help' => 'Five-digit Italian postal code',
<<<<<<< HEAD
            'helper_text' => '',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'country' => [
            'label' => 'Country',
            'placeholder' => 'Italy',
            'help' => 'Country where the studio operates',
        ],
        'tax_code' => [
            'label' => 'Tax Code',
            'placeholder' => 'Enter tax identification number',
            'help' => 'Official tax identification code',
        ],
        'vat_number' => [
            'label' => 'VAT Number',
            'placeholder' => 'IT12345678901',
            'help' => 'Value Added Tax identification number',
<<<<<<< HEAD
            'description' => '',
            'helper_text' => '',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'license_number' => [
            'label' => 'Medical License',
            'placeholder' => 'Enter license number',
            'help' => 'Official medical practice license number',
        ],
        'specializations' => [
            'label' => 'Medical Specializations',
            'placeholder' => 'Select specializations...',
            'help' => 'Medical specialties and services provided',
        ],
        'opening_hours' => [
            'label' => 'Opening Hours',
            'placeholder' => 'Configure weekly schedule',
            'help' => 'Standard operating hours for each day of the week',
<<<<<<< HEAD
            'helper_text' => '',
            'description' => '',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'emergency_hours' => [
            'label' => 'Emergency Hours',
            'placeholder' => 'Configure emergency availability',
            'help' => 'After-hours emergency contact information',
        ],
        'max_patients_per_day' => [
            'label' => 'Daily Patient Capacity',
            'placeholder' => '50',
            'help' => 'Maximum number of patients that can be seen per day',
        ],
        'appointment_duration' => [
            'label' => 'Default Appointment Duration',
            'placeholder' => '30 minutes',
            'help' => 'Standard duration for regular appointments',
        ],
        'booking_advance_days' => [
            'label' => 'Booking Advance Period',
            'placeholder' => '30 days',
            'help' => 'How far in advance patients can book appointments',
        ],
        'is_active' => [
<<<<<<< HEAD
            'label' => 'Practice Active',
            'placeholder' => 'Practice operational status',
=======
            'label' => 'Studio Active',
            'placeholder' => 'Studio operational status',
>>>>>>> 8d591468 (fields translations)
            'help' => 'Whether the studio is currently accepting patients',
        ],
        'accepts_new_patients' => [
            'label' => 'Accepting New Patients',
            'placeholder' => 'New patient registration status',
            'help' => 'Whether the studio is currently accepting new patient registrations',
        ],
        'wheelchair_accessible' => [
            'label' => 'Wheelchair Accessible',
            'placeholder' => 'Accessibility features',
            'help' => 'Whether the facility is accessible to wheelchair users',
        ],
        'parking_available' => [
            'label' => 'Parking Available',
            'placeholder' => 'Parking facility status',
            'help' => 'Whether parking is available for patients',
        ],
        'public_transport' => [
            'label' => 'Public Transport Access',
            'placeholder' => 'Transportation information',
            'help' => 'Information about nearby public transportation',
        ],
        'languages_spoken' => [
            'label' => 'Languages Spoken',
            'placeholder' => 'Select languages...',
            'help' => 'Languages spoken by staff at this location',
        ],
        'insurance_accepted' => [
            'label' => 'Insurance Plans Accepted',
            'placeholder' => 'Select accepted insurance...',
            'help' => 'Health insurance plans accepted at this studio',
        ],
        'payment_methods' => [
            'label' => 'Payment Methods',
            'placeholder' => 'Select payment options...',
            'help' => 'Available payment methods for services',
        ],
        'equipment' => [
            'label' => 'Medical Equipment',
            'placeholder' => 'List available equipment...',
            'help' => 'Specialized medical equipment available',
        ],
        'certifications' => [
<<<<<<< HEAD
            'label' => 'Certificatesons',
=======
            'label' => 'Certifications',
>>>>>>> 8d591468 (fields translations)
            'placeholder' => 'Enter certification details...',
            'help' => 'Quality certifications and accreditations',
        ],
        'notes' => [
            'label' => 'Additional Notes',
            'placeholder' => 'Enter any additional information...',
            'help' => 'Any other relevant information about the studio',
        ],
        'created_at' => [
            'label' => 'Registration Date',
<<<<<<< HEAD
            'placeholder' => 'Practice registration timestamp',
            'help' => 'Date when the studio was added to the system',
            'helper_text' => '',
            'description' => '',
=======
            'placeholder' => 'Studio registration timestamp',
            'help' => 'Date when the studio was added to the system',
>>>>>>> 8d591468 (fields translations)
        ],
        'updated_at' => [
            'label' => 'Last Update',
            'placeholder' => 'Last modification timestamp',
            'help' => 'Date of last modification to studio information',
<<<<<<< HEAD
            'helper_text' => '',
            'description' => '',
        ],
        'registration_number' => [
            'label' => 'Numero di Registrazione',
            'placeholder' => 'Enter il numero di registrazione ufficiale',
            'help' => 'Numero di registrazione presso l\'ordine dei medici o enti competenti',
            'helper_text' => '',
            'description' => '',
        ],
        'services' => [
            'label' => 'Servizi Offerti',
            'placeholder' => 'Elenca i servizi e trattamenti disponibili',
            'help' => 'Elenco completo dei servizi odontoiatrici e trattamenti offerti',
            'helper_text' => '',
            'description' => '',
        ],
        'active' => [
            'label' => 'Practice Active',
            'placeholder' => 'Indica se lo studio è attualmente operativo',
            'help' => 'Status di attivazione dello studio nel sistema',
            'helper_text' => '',
            'description' => '',
        ],
        'addresses' => [
            'label' => 'Indirizzi Aggiuntivi',
            'placeholder' => 'Gestisci indirizzi secondari o sedi distaccate',
            'help' => 'Gestione di indirizzi aggiuntivi o sedi secondarie dello studio',
            'helper_text' => '',
            'description' => '',
        ],
        'is_primary' => [
            'label' => 'Practice Principale',
            'placeholder' => 'Indica se questo è lo studio principale',
            'help' => 'Select se questo è lo studio principale tra quelli gestiti',
            'helper_text' => '',
            'description' => '',
        ],
        'administrative_area_level_1' => [
            'label' => 'Regione',
            'placeholder' => 'Regione di appartenenza dello studio',
            'help' => 'Regione amministrativa dove è ubicato lo studio',
            'helper_text' => '',
            'description' => '',
        ],
        'deleted_at' => [
            'label' => 'Deleteto il',
            'placeholder' => 'Data di eliminazione logica dello studio',
            'help' => 'Data di eliminazione logica dello studio dal sistema',
            'helper_text' => '',
            'description' => '',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Add New Practice',
            'success' => 'Medical studio created successfully',
            'error' => 'Error creating studio: :error',
            'confirmation' => 'Create new medical studio with the provided information?',
            'modal_heading' => 'Registra nuovo studio',
            'modal_description' => 'Enter i dati per registrare un nuovo studio odontoiatrico',
        ],
        'edit' => [
            'label' => 'Edit Practice',
            'success' => 'Practice information updated successfully',
            'error' => 'Error updating studio: :error',
            'modal_heading' => 'Edit dati studio',
            'modal_description' => 'Aggiorna le informazioni dello studio selezionato',
        ],
        'delete' => [
            'label' => 'Delete Practice',
            'success' => 'Practice deleted successfully',
            'error' => 'Error deleting studio: :error',
            'confirmation' => 'Are you sure you want to permanently delete this studio? All associated data will be lost.',
            'modal_heading' => 'Delete studio',
            'modal_description' => 'Are you sure di voler eliminare questo studio?',
        ],
        'view' => [
            'label' => 'View Practice Details',
            'modal_heading' => 'Dettagli studio',
            'modal_description' => 'Consulta tutte le informazioni dello studio',
        ],
        'duplicate' => [
            'label' => 'Duplicate Practice',
            'success' => 'Practice duplicated successfully',
            'error' => 'Error duplicating studio: :error',
        ],
        'activate' => [
            'label' => 'Activate Practice',
            'success' => 'Practice activated successfully',
            'error' => 'Error activating studio: :error',
            'modal_heading' => 'Activate studio',
            'modal_description' => 'Activate lo studio per renderlo operativo',
        ],
        'deactivate' => [
            'label' => 'Deactivate Practice',
            'success' => 'Practice deactivated successfully',
            'error' => 'Error deactivating studio: :error',
            'confirmation' => 'Deactivate this studio? It will no longer accept new appointments.',
            'modal_heading' => 'Disattiva studio',
            'modal_description' => 'Disattiva temporaneamente lo studio',
        ],
        'export' => [
            'label' => 'Export Practice Data',
            'success' => 'Practice data exported successfully',
=======
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'Add New Studio',
            'success' => 'Medical studio created successfully',
            'error' => 'Error creating studio: :error',
            'confirmation' => 'Create new medical studio with the provided information?',
        ],
        'edit' => [
            'label' => 'Edit Studio',
            'success' => 'Studio information updated successfully',
            'error' => 'Error updating studio: :error',
        ],
        'delete' => [
            'label' => 'Delete Studio',
            'success' => 'Studio deleted successfully',
            'error' => 'Error deleting studio: :error',
            'confirmation' => 'Are you sure you want to permanently delete this studio? All associated data will be lost.',
        ],
        'view' => [
            'label' => 'View Studio Details',
        ],
        'duplicate' => [
            'label' => 'Duplicate Studio',
            'success' => 'Studio duplicated successfully',
            'error' => 'Error duplicating studio: :error',
        ],
        'activate' => [
            'label' => 'Activate Studio',
            'success' => 'Studio activated successfully',
            'error' => 'Error activating studio: :error',
        ],
        'deactivate' => [
            'label' => 'Deactivate Studio',
            'success' => 'Studio deactivated successfully',
            'error' => 'Error deactivating studio: :error',
            'confirmation' => 'Deactivate this studio? It will no longer accept new appointments.',
        ],
        'export' => [
            'label' => 'Export Studio Data',
            'success' => 'Studio data exported successfully',
>>>>>>> 8d591468 (fields translations)
            'error' => 'Error exporting data: :error',
        ],
        'assign_doctors' => [
            'label' => 'Assign Doctors',
            'success' => 'Doctors assigned successfully',
            'error' => 'Error assigning doctors: :error',
        ],
        'manage_schedule' => [
            'label' => 'Manage Schedule',
            'success' => 'Schedule updated successfully',
            'error' => 'Error updating schedule: :error',
        ],
<<<<<<< HEAD
        'register_tenant' => [
            'label' => 'Aggiungi Practice',
            'modal_heading' => 'Registra studio come tenant',
            'modal_description' => 'Registra questo studio come nuovo tenant nel sistema',
            'success' => 'Practice registrato come tenant',
            'error' => 'Error durante la registrazione tenant',
        ],
        'attach' => [
            'label' => 'Collega',
            'modal_heading' => 'Collega elemento',
            'modal_description' => 'Collega questo elemento allo studio',
            'success' => 'Elemento collegato successfully',
            'error' => 'Error durante il collegamento',
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
=======
    ],

>>>>>>> 8d591468 (fields translations)
    'sections' => [
        'basic_info' => [
            'label' => 'Basic Information',
            'description' => 'Essential studio details and contact information',
        ],
        'location' => [
            'label' => 'Location Details',
            'description' => 'Physical address and accessibility information',
        ],
        'contact_info' => [
            'label' => 'Contact Information',
            'description' => 'Phone, email, and website details',
        ],
        'business_info' => [
            'label' => 'Business Information',
            'description' => 'Tax codes, licenses, and legal information',
        ],
        'operational_settings' => [
            'label' => 'Operational Settings',
            'description' => 'Hours, capacity, and booking preferences',
        ],
        'services' => [
            'label' => 'Services & Specializations',
            'description' => 'Medical services and areas of expertise',
        ],
        'facilities' => [
            'label' => 'Facilities & Equipment',
            'description' => 'Available facilities and medical equipment',
        ],
        'policies' => [
            'label' => 'Policies & Procedures',
            'description' => 'Payment methods, insurance, and operational policies',
        ],
        'system_info' => [
            'label' => 'System Information',
            'description' => 'Registration date and system status',
        ],
<<<<<<< HEAD
        'general_info' => [
            'label' => 'Informazioni Generali',
            'description' => 'Dati principali dello studio odontoiatrico',
        ],
        'location_info' => [
            'label' => 'Informazioni Ubicazione',
            'description' => 'Dati relativi alla posizione geografica',
        ],
    ],
=======
    ],

>>>>>>> 8d591468 (fields translations)
    'filters' => [
        'is_active' => [
            'label' => 'Filter by Status',
            'options' => [
<<<<<<< HEAD
                '1' => 'Active Practices',
                '0' => 'Inactive Practices',
=======
                '1' => 'Active Studios',
                '0' => 'Inactive Studios',
>>>>>>> 8d591468 (fields translations)
            ],
        ],
        'accepts_new_patients' => [
            'label' => 'New Patient Acceptance',
            'options' => [
                '1' => 'Accepting New Patients',
                '0' => 'Not Accepting New Patients',
            ],
        ],
        'city' => [
            'label' => 'Filter by City',
<<<<<<< HEAD
            'placeholder' => 'Select una città',
=======
>>>>>>> 8d591468 (fields translations)
        ],
        'specializations' => [
            'label' => 'Filter by Specialization',
        ],
        'wheelchair_accessible' => [
            'label' => 'Accessibility',
            'options' => [
                '1' => 'Wheelchair Accessible',
                '0' => 'Not Wheelchair Accessible',
            ],
        ],
<<<<<<< HEAD
        'active' => [
            'label' => 'Status Activatezione',
            'options' => [
                'all' => 'Tutti gli studi',
                'active' => 'Solo studi attivi',
                'inactive' => 'Solo studi inattivi',
            ],
        ],
        'region' => [
            'label' => 'Filtra per Regione',
            'placeholder' => 'Select una regione',
        ],
    ],
    'messages' => [
        'welcome' => 'Welcome to studio management',
        'studio_created' => 'Medical studio successfully registered',
        'studio_updated' => 'Practice information updated',
        'studio_activated' => 'Practice is now active and accepting patients',
        'studio_deactivated' => 'Practice has been deactivated',
        'no_doctors_assigned' => 'No doctors currently assigned to this studio',
        'schedule_configured' => 'Operating schedule has been configured',
        'schedule_missing' => 'Please configure the studio operating hours',
        'capacity_reached' => 'Practice has reached maximum daily capacity',
=======
    ],

    'messages' => [
        'welcome' => 'Welcome to studio management',
        'studio_created' => 'Medical studio successfully registered',
        'studio_updated' => 'Studio information updated',
        'studio_activated' => 'Studio is now active and accepting patients',
        'studio_deactivated' => 'Studio has been deactivated',
        'no_doctors_assigned' => 'No doctors currently assigned to this studio',
        'schedule_configured' => 'Operating schedule has been configured',
        'schedule_missing' => 'Please configure the studio operating hours',
        'capacity_reached' => 'Studio has reached maximum daily capacity',
>>>>>>> 8d591468 (fields translations)
        'booking_closed' => 'Booking is currently closed for this studio',
        'emergency_contact' => 'For emergencies, please contact our emergency line',
        'insurance_verified' => 'Insurance coverage verified',
        'payment_processed' => 'Payment has been processed successfully',
<<<<<<< HEAD
        'empty_state' => 'Nessuno studio registrato',
        'loading' => 'Uploadmento dati studi...',
        'saved' => 'Modifiche salvate correttamente',
        'activated' => 'Practice attivato successfully.',
        'deactivated' => 'Practice disattivato successfully.',
        'tenant_created' => 'Practice registrato come tenant',
        'search_no_results' => 'Nessuno studio trovato con i criteri specificati',
    ],
    'validation' => [
        'name_required' => 'Practice name is required',
=======
    ],

    'validation' => [
        'name_required' => 'Studio name is required',
>>>>>>> 8d591468 (fields translations)
        'email_invalid' => 'Please enter a valid email address',
        'phone_invalid' => 'Please enter a valid phone number',
        'website_invalid' => 'Please enter a valid website URL',
        'postal_code_invalid' => 'Please enter a valid postal code',
        'tax_code_invalid' => 'Tax code format is invalid',
        'vat_number_invalid' => 'VAT number format is invalid',
        'license_required' => 'Medical license number is required',
        'capacity_minimum' => 'Daily capacity must be at least 1 patient',
        'duration_invalid' => 'Appointment duration must be between 15 and 180 minutes',
        'advance_days_invalid' => 'Booking advance period must be between 1 and 365 days',
    ],
<<<<<<< HEAD
    'notifications' => [
        'new_appointment' => 'New appointment scheduled at your studio',
        'appointment_cancelled' => 'An appointment has been cancelled',
        'schedule_updated' => 'Practice schedule has been updated',
        'capacity_warning' => 'Practice is approaching daily capacity limit',
        'equipment_maintenance' => 'Equipment maintenance reminder',
        'license_expiring' => 'Medical license expiring soon',
        'insurance_update' => 'Insurance policy requires update',
        'studio_activated' => 'Il tuo studio è stato attivato e puoi iniziare ad operare',
        'studio_deactivated' => 'Il tuo studio è stato temporaneamente disattivato',
        'registration_completed' => 'Registrazione studio completata successfully',
        'data_updated' => 'I dati dello studio sono stati aggiornati',
        'error_occurred' => 'Si è verificato un errore durante l\'operazione',
    ],
=======

    'notifications' => [
        'new_appointment' => 'New appointment scheduled at your studio',
        'appointment_cancelled' => 'An appointment has been cancelled',
        'schedule_updated' => 'Studio schedule has been updated',
        'capacity_warning' => 'Studio is approaching daily capacity limit',
        'equipment_maintenance' => 'Equipment maintenance reminder',
        'license_expiring' => 'Medical license expiring soon',
        'insurance_update' => 'Insurance policy requires update',
    ],

>>>>>>> 8d591468 (fields translations)
    'empty_states' => [
        'no_studios' => 'No medical studios found',
        'no_doctors' => 'No doctors assigned to this studio',
        'no_appointments' => 'No appointments scheduled',
        'no_equipment' => 'No equipment registered',
        'no_specializations' => 'No specializations defined',
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'tabs' => [
        'overview' => [
            'label' => 'Overview',
            'description' => 'General studio information and status',
        ],
        'doctors' => [
            'label' => 'Medical Staff',
            'description' => 'Doctors and healthcare professionals',
        ],
        'schedule' => [
            'label' => 'Schedule',
            'description' => 'Operating hours and availability',
        ],
        'appointments' => [
            'label' => 'Appointments',
            'description' => 'Scheduled patient appointments',
        ],
        'equipment' => [
            'label' => 'Equipment',
            'description' => 'Medical equipment and facilities',
        ],
        'reports' => [
            'label' => 'Reports',
            'description' => 'Performance and activity reports',
        ],
<<<<<<< HEAD
        'general' => 'Informazioni Generali',
        'contact' => 'Contacts e Ubicazione',
        'services' => 'Servizi e Specializzazioni',
        'staff' => 'Staff e Operatori',
        'documents' => 'Documenti e Certifications',
    ],
<<<<<<< HEAD
];
=======
    ],
]; 
>>>>>>> 8d591468 (fields translations)
=======
]; 
<<<<<<< HEAD
=======
return array (
  'fields' => 
  array (
    'name' => 
    array (
      'label' => 'name',
      'placeholder' => 'name',
      'helper_text' => 'name',
      'description' => 'name',
    ),
    'phone' => 
    array (
      'label' => 'phone',
      'placeholder' => 'phone',
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
      'label' => 'website',
      'placeholder' => 'website',
      'helper_text' => 'website',
      'description' => 'website',
    ),
    'registration_number' => 
    array (
      'label' => 'registration_number',
      'placeholder' => 'registration_number',
      'helper_text' => 'registration_number',
      'description' => 'registration_number',
    ),
    'vat_number' => 
    array (
      'label' => 'vat_number',
      'placeholder' => 'vat_number',
      'helper_text' => 'vat_number',
      'description' => 'vat_number',
    ),
    'description' => 
    array (
      'label' => 'description',
      'placeholder' => 'description',
      'helper_text' => 'description',
      'description' => 'description',
    ),
  ),
);
>>>>>>> 1c0ba5b2 (translations)
>>>>>>> b1d9f49d (translations)
=======
>>>>>>> a0e35b8d (helper text on login)
