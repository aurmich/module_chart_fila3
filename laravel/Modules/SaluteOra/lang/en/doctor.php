<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1d9f49d (translations)
=======
>>>>>>> a0e35b8d (helper text on login)
>>>>>>> aurmich/dev
declare(strict_types=1);

return [
    'name' => 'Doctors',
    'navigation' => [
        'label' => 'Doctors',
        'group' => 'Medical Team',
        'icon' => 'heroicon-o-user-group',
        'color' => 'emerald',
        'sort' => 2,
        'tooltip' => 'Manage medical staff and their professional information',
    ],
    'model' => [
        'label' => 'Doctor',
        'plural' => 'Doctors',
        'description' => 'Medical staff and professional information management',
    ],
    'pages' => [
        'index' => [
            'title' => 'Doctors List',
            'subtitle' => 'Manage medical team',
            'description' => 'View and manage all registered doctors',
        ],
        'create' => [
            'title' => 'New Doctor',
            'subtitle' => 'Register a new doctor',
            'description' => 'Add a new doctor to the team',
        ],
        'edit' => [
            'title' => 'Edit Doctor',
            'subtitle' => 'Update doctor data',
            'description' => 'Modify selected doctor information',
        ],
    ],
    'steps' => [
        'personal_info' => [
            'label' => 'Personal Information',
            'description' => 'Enter personal information',
            'icon' => 'heroicon-o-user',
            'color' => 'primary',
            'tooltip' => 'Personal and biographical data of the doctor',
        ],
        'personal_info_step' => [
            'label' => 'Personal Information',
            'description' => 'Enter personal information',
            'icon' => 'heroicon-o-user',
            'color' => 'primary',
            'tooltip' => 'Personal and biographical data of the doctor',
        ],
        'moderation' => [
            'label' => 'Moderation',
            'description' => 'Information verification',
            'icon' => 'heroicon-o-shield-check',
            'color' => 'warning',
            'tooltip' => 'Profile verification and approval process',
        ],
        'contacts' => [
            'label' => 'Contacts',
            'description' => 'Contact information',
            'icon' => 'heroicon-o-phone',
            'color' => 'info',
            'tooltip' => 'Professional contact data',
        ],
        'professional' => [
            'label' => 'Professional Information',
            'description' => 'Professional data and specializations',
            'icon' => 'heroicon-o-academic-cap',
            'color' => 'success',
            'tooltip' => 'Medical qualifications and specializations',
        ],
        'availability' => [
            'label' => 'Availability',
            'description' => 'Availability hours and days',
            'icon' => 'heroicon-o-calendar',
            'color' => 'danger',
            'tooltip' => 'Calendar and consultation hours',
        ],
        'studio' => [
            'label' => 'Office',
            'description' => 'Medical office information',
            'icon' => 'heroicon-o-building-office-2',
            'color' => 'blue',
            'tooltip' => 'Data of the office where they practice',
        ],
        'studio_step' => [
            'label' => 'Office',
            'description' => 'Medical office information',
            'icon' => 'heroicon-o-building-office-2',
            'color' => 'blue',
            'tooltip' => 'Data of the office where they practice',
        ],
        'privacy_step' => [
            'label' => 'Privacy and Consents',
            'description' => 'Data processing consent and marketing communications',
            'icon' => 'heroicon-o-shield-check',
            'color' => 'info',
            'tooltip' => 'Privacy and marketing consent management',
            'helper_text' => 'Privacy consent is mandatory by law, newsletter is optional',
        ],
        'availability_step' => [
            'label' => 'Availability',
            'description' => 'Schedule and availability days management',
            'icon' => 'heroicon-o-calendar',
            'color' => 'emerald',
            'tooltip' => 'Configuration of schedule and availability days',
            'helper_text' => '',
        ],
    ],
    'fields' => [
        'data_privacy_form' => [
            'label' => 'Data Processing Form',
            'description' => 'Form for consent to personal data processing',
            'placeholder' => 'Upload completed Data Processing form',
            'tooltip' => 'Upload of completed and signed privacy form',
            'helper_text' => '',
        ],
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Doctor identifier',
            'tooltip' => 'Unique doctor identifier',
            'helper_text' => '',
            'description' => 'Unique doctor identifier',
        ],
        'first_name' => [
            'label' => 'First Name',
            'placeholder' => 'Enter first name',
            'tooltip' => 'Name as registered with Medical Board',
            'helper_text' => '',
            'description' => 'Doctor\'s biographical first name',
        ],
        'last_name' => [
            'label' => 'Last Name',
            'placeholder' => 'Enter last name',
            'tooltip' => 'Surname as registered with Medical Board',
            'helper_text' => '',
            'description' => 'Doctor\'s biographical surname',
        ],
        'full_name' => [
            'label' => 'Full Name',
            'placeholder' => 'Enter complete first and last name',
            'tooltip' => 'Full name as registered with the Medical Board',
            'helper_text' => '',
            'description' => 'Doctor\'s complete name',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'doctor@example.com',
            'tooltip' => 'Professional email address',
            'helper_text' => '',
            'description' => 'Email address for professional communications',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => '+39 123 456 7890',
            'tooltip' => 'Professional phone number',
            'helper_text' => '',
            'description' => 'Phone number for professional contacts',
        ],
        'address' => [
            'label' => 'Address',
            'placeholder' => 'Street Address, 123',
            'tooltip' => 'Medical practice address',
            'helper_text' => '',
            'description' => 'Complete practice address',
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
declare(strict_types=1);

>>>>>>> 8d591468 (fields translations)
return [
    'name' => 'Doctors',
    
    'navigation' => [
        'label' => 'Doctors',
        'group' => 'Medical Team',
        'icon' => 'heroicon-o-user-group',
        'color' => 'emerald',
        'sort' => 2,
        'tooltip' => 'Manage medical staff and related professional information',
    ],

    'model' => [
        'label' => 'Doctor',
        'plural' => 'Doctors',
        'description' => 'Management of medical staff and professional information',
    ],

    'pages' => [
        'index' => [
            'title' => 'Doctors List',
            'subtitle' => 'Manage medical team',
            'description' => 'View and manage all registered doctors',
        ],
        'create' => [
            'title' => 'New Doctor',
            'subtitle' => 'Register a new doctor',
            'description' => 'Add a new doctor to the team',
        ],
        'edit' => [
            'title' => 'Edit Doctor',
            'subtitle' => 'Update doctor data',
            'description' => 'Edit information of selected doctor',
        ],
    ],

    'steps' => [
        'personal_info' => [
            'label' => 'Personal Information',
            'description' => 'Enter personal information',
            'icon' => 'heroicon-o-user',
            'color' => 'primary',
            'tooltip' => 'Personal and biographical data of the doctor',
        ],
        'moderation' => [
            'label' => 'Moderation',
            'description' => 'Information verification',
            'icon' => 'heroicon-o-shield-check',
            'color' => 'warning',
            'tooltip' => 'Profile verification and approval process',
        ],
        'contacts' => [
            'label' => 'Contacts',
            'description' => 'Contact information',
            'icon' => 'heroicon-o-phone',
            'color' => 'info',
            'tooltip' => 'Professional contact data',
        ],
        'professional' => [
            'label' => 'Professional Information',
            'description' => 'Professional data and specializations',
            'icon' => 'heroicon-o-academic-cap',
            'color' => 'success',
            'tooltip' => 'Medical qualifications and specializations',
        ],
        'availability' => [
            'label' => 'Availability',
            'description' => 'Available hours and days',
            'icon' => 'heroicon-o-calendar',
            'color' => 'danger',
            'tooltip' => 'Calendar and office hours',
        ],
        'studio' => [
            'label' => 'Practice',
            'description' => 'Medical practice information',
            'icon' => 'heroicon-o-building-office-2',
            'color' => 'blue',
            'tooltip' => 'Data of the practice where they operate',
        ],
    ],

    'fields' => [
<<<<<<< HEAD
        'full_name' => [
            'label' => 'Full Name',
            'placeholder' => 'Enter full name',
        ],
        'certification' => [
            'label' => 'Certification',
            'tooltip' => 'Upload your professional certification',
        ],
        'moderation_status' => [
            'label' => 'Moderation Status',
        ],
        'moderation_notes' => [
            'label' => 'Moderation Notes',
            'placeholder' => 'Enter any moderation notes',
        ],
        'fiscal_code' => [
            'label' => 'Fiscal Code',
            'placeholder' => 'Enter fiscal code',
        ],
        'birth_date' => [
            'label' => 'Date of Birth',
            'placeholder' => 'Select date of birth',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter email address',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => 'Enter phone number',
        ],
        'address' => [
            'label' => 'Address',
            'placeholder' => 'Enter practice address',
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Enter city',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'tooltip' => 'City where the practice is located',
            'helper_text' => '',
            'description' => 'City where the practice is located',
        ],
        'registration_number' => [
            'label' => 'Registration Number',
            'placeholder' => 'Enter registration number',
            'tooltip' => 'Medical Board registration number',
            'helper_text' => '',
            'description' => 'Professional Board registration number',
        ],
        'vat_number' => [
            'label' => 'VAT Number',
            'placeholder' => 'Enter VAT number',
            'tooltip' => 'VAT number for billing purposes',
            'helper_text' => '',
            'description' => 'VAT number for professional activity',
        ],
        'specialization' => [
            'label' => 'Specialization',
            'placeholder' => 'Select specialization',
            'tooltip' => 'Main medical specialization',
            'helper_text' => '',
            'description' => 'Doctor\'s medical specialization',
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Select status',
            'tooltip' => 'Medical profile status',
            'helper_text' => '',
            'description' => 'Current medical profile status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'pending' => 'Pending',
                'suspended' => 'Suspended',
            ],
        ],
        'certification' => [
            'label' => 'Certificateson',
            'placeholder' => 'Upload certification',
            'tooltip' => 'Medical Board registration document',
            'helper_text' => '',
            'description' => 'Medical Board registration certification',
        ],
        'certificates' => [
            'label' => 'Certificates',
            'placeholder' => 'Upload certificates',
            'tooltip' => 'Professional certificates and specializations',
            'helper_text' => '',
            'description' => 'Professional certificates and specializations',
        ],
        'certifications' => [
            'label' => 'Certificatesons',
            'placeholder' => 'Upload certifications',
            'tooltip' => 'Documents attesting professional qualifications',
            'helper_text' => '',
            'description' => 'Professional qualification documents',
        ],
        'moderation_notes' => [
            'label' => 'Moderation Notes',
            'placeholder' => 'Enter any notes',
            'tooltip' => 'Internal notes for the moderation process',
            'helper_text' => '',
            'description' => 'Notes for profile moderation process',
        ],
        'availability' => [
            'label' => 'Availability',
            'placeholder' => 'Set availability',
            'tooltip' => 'Days and hours available for visits',
            'helper_text' => '',
            'description' => 'Availability calendar for appointments',
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
        ],
        'registration_number' => [
            'label' => 'Registration Number',
            'placeholder' => 'Enter professional registration number',
        ],
        'specialties' => [
            'label' => 'Specialties',
            'placeholder' => 'Select specialties',
        ],
        'certifications' => [
            'label' => 'Certifications',
            'tooltip' => 'Upload any additional certifications',
        ],
        'availability' => [
            'label' => 'Availability Schedule',
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
        ],
        'day' => [
            'label' => 'Day',
            'placeholder' => 'Select day',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'tooltip' => 'Day of the week for availability',
            'helper_text' => '',
            'description' => 'Day of the week for availability',
            'options' => [
                'monday' => 'Monday',
                'tuesday' => 'Tuesday',
                'wednesday' => 'Wednesday',
                'thursday' => 'Thursday',
                'friday' => 'Friday',
                'saturday' => 'Saturday',
                'sunday' => 'Sunday',
            ],
<<<<<<< HEAD
=======
=======
            'helper_text' => 'Select the day of the week',
>>>>>>> aurmich/dev
=======
            'helper_text' => 'Select the day of the week',
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
        ],
        'start_time' => [
            'label' => 'Start Time',
            'placeholder' => 'Select start time',
<<<<<<< HEAD
            'tooltip' => 'Start time of availability',
            'helper_text' => '',
            'description' => 'Daily availability start time',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'tooltip' => 'Start time of availability',
            'helper_text' => '',
            'description' => 'Daily availability start time',
=======
            'helper_text' => 'When the availability period begins',
>>>>>>> aurmich/dev
=======
            'helper_text' => 'When the availability period begins',
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
        ],
        'end_time' => [
            'label' => 'End Time',
            'placeholder' => 'Select end time',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'tooltip' => 'End time of availability',
            'helper_text' => '',
            'description' => 'Daily availability end time',
        ],
        'attach' => [
            'label' => 'Attachments',
            'placeholder' => 'Upload attachments',
            'tooltip' => 'Documents attached to the profile',
            'helper_text' => '',
            'description' => 'Documents and attachments of the medical profile',
        ],
        'created_at' => [
            'label' => 'Creation Date',
            'placeholder' => 'Registration date',
            'tooltip' => 'Doctor registration date',
            'helper_text' => '',
            'description' => 'Registration date in the system',
        ],
        'toggle_columns' => [
            'label' => 'Show/Hide Columns',
            'tooltip' => 'Manage column visibility in the table',
            'helper_text' => '',
            'description' => 'Table column visibility control',
        ],
        'reorder_records' => [
            'label' => 'Reorder Records',
            'tooltip' => 'Modify the order of records in the table',
            'helper_text' => '',
            'description' => 'Record reordering function',
        ],
        'reset_filters' => [
            'label' => 'Reset Filters',
            'tooltip' => 'Reset filters to default values',
            'helper_text' => '',
            'description' => 'Reset applied filters',
        ],
        'apply_filters' => [
            'label' => 'Apply Filters',
            'tooltip' => 'Apply selected filters',
            'helper_text' => '',
            'description' => 'Apply search filters',
        ],
        'open_filters' => [
            'label' => 'Open Filters',
            'tooltip' => 'Open the search filters panel',
            'helper_text' => '',
            'description' => 'Open filters panel',
        ],
        'privacy_acceptance' => [
            'label' => 'Privacy Acceptance',
            'tooltip' => 'You must accept the privacy policy to continue',
            'description' => 'Consent to personal data processing',
            'helper_text' => '',
            'placeholder' => 'I accept the privacy policy',
        ],
        'doctor_certificate' => [
            'label' => 'Certificate',
            'description' => 'Medical certificate or health documentation',
            'placeholder' => 'Upload certificate',
            'tooltip' => 'Health card or Medical Board registration certificate',
            'helper_text' => 'Health card or Medical Board registration certificate',
        ],
        'schedule' => [
            'label' => 'Schedule',
            'description' => 'Schedule and availability hours',
            'placeholder' => 'Set schedule',
            'tooltip' => 'Manage availability schedule',
            'helper_text' => '',
        ],
    ],
    'filters' => [
        'search_placeholder' => 'Search doctors...',
        'is_active' => [
            'label' => 'Status',
            'placeholder' => 'Filter by status',
            'tooltip' => 'Filter doctors by profile status',
            'helper_text' => '',
            'description' => 'Filter for medical profile status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'pending' => 'Pending',
                'suspended' => 'Suspended',
            ],
        ],
        'specialization' => [
            'label' => 'Specialization',
            'placeholder' => 'Filter by specialization',
            'tooltip' => 'Filter by medical specialization',
            'helper_text' => '',
            'description' => 'Filter for medical specialization',
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Filter by city',
            'tooltip' => 'Filter by practice city',
            'helper_text' => '',
            'description' => 'Filter by practice location city',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'New Doctor',
            'icon' => 'heroicon-o-plus',
            'color' => 'primary',
            'tooltip' => 'Add a new doctor to the system',
            'modal_heading' => 'Create New Doctor',
            'modal_description' => 'Enter new doctor data',
            'success' => 'Doctor created successfully',
            'error' => 'Error creating doctor',
        ],
        'edit' => [
            'label' => 'Edit',
            'icon' => 'heroicon-o-pencil',
            'color' => 'warning',
            'tooltip' => 'Edit selected doctor data',
            'modal_heading' => 'Edit Doctor',
            'modal_description' => 'Edit doctor data',
            'success' => 'Doctor updated successfully',
            'error' => 'Error updating doctor',
        ],
        'delete' => [
            'label' => 'Delete',
            'icon' => 'heroicon-o-trash',
            'color' => 'danger',
            'tooltip' => 'Delete selected doctor',
            'modal_heading' => 'Delete Doctor',
            'modal_description' => 'Are you sure you want to delete this doctor? This action cannot be undone.',
            'confirmation' => 'Are you sure you want to delete this doctor? All their data will be permanently lost.',
            'success' => 'Doctor deleted successfully',
            'error' => 'Error deleting doctor',
        ],
        'view' => [
            'label' => 'View',
            'icon' => 'heroicon-o-eye',
            'color' => 'info',
            'tooltip' => 'View doctor details',
            'modal_heading' => 'Doctor Details',
        ],
        'approve' => [
            'label' => 'Approve',
            'icon' => 'heroicon-o-check-circle',
            'color' => 'success',
            'tooltip' => 'Approve doctor profile',
            'confirmation' => 'Are you sure you want to approve this doctor?',
            'success' => 'Doctor approved successfully',
            'error' => 'Error approving doctor',
        ],
        'suspend' => [
            'label' => 'Suspend',
            'icon' => 'heroicon-o-pause-circle',
            'color' => 'warning',
            'tooltip' => 'Temporarily suspend profile',
            'confirmation' => 'Are you sure you want to suspend this doctor?',
            'success' => 'Doctor suspended successfully',
            'error' => 'Error suspending doctor',
        ],
    ],
    'messages' => [
        'created' => 'Doctor created successfully',
        'updated' => 'Doctor updated successfully',
        'deleted' => 'Doctor deleted successfully',
        'approved' => 'Doctor approved successfully',
        'suspended' => 'Doctor suspended successfully',
        'activated' => 'Doctor activated successfully',
        'certification_uploaded' => 'Certificateson uploaded successfully',
        'certification_verified' => 'Certificateson verified successfully',
        'availability_updated' => 'Availability updated successfully',
    ],
    'sections' => [
        'personal_info' => [
            'label' => 'Personal Information',
            'description' => 'Doctor\'s personal data',
            'tooltip' => 'Section for doctor\'s personal data',
            'helper_text' => '',
        ],
        'contact_info' => [
            'label' => 'Contact Information',
            'description' => 'Professional contact details',
            'tooltip' => 'Section for professional contacts',
            'helper_text' => '',
        ],
        'professional_info' => [
            'label' => 'Professional Information',
            'description' => 'Qualifications and specializations',
            'tooltip' => 'Section for professional qualifications',
            'helper_text' => '',
        ],
        'availability_settings' => [
            'label' => 'Availability Settings',
            'description' => 'Office hours and days',
            'tooltip' => 'Section for availability management',
            'helper_text' => '',
        ],
        'documents' => [
            'label' => 'Documents',
            'description' => 'Certificatesons and attachments',
            'tooltip' => 'Section for documents and certifications',
            'helper_text' => '',
        ],
    ],
    'validation' => [
        'required' => 'The :attribute field is required',
        'email' => 'The :attribute field must be a valid email address',
        'unique' => 'The :attribute value is already in use',
        'min' => 'The :attribute field must be at least :min characters',
        'max' => 'The :attribute field cannot exceed :max characters',
        'registration_number_format' => 'The registration number must be in the correct format',
        'vat_number_format' => 'The VAT number must be in the correct format',
        'phone_format' => 'The phone number must be in the correct format',
    ],
    'empty_state' => [
        'heading' => 'No doctors found',
        'description' => 'There are no registered doctors matching the search criteria',
        'action' => 'Register the first doctor',
    ],
    'specialties' => [
        'label' => 'Specializations',
        'description' => 'Doctor\'s medical specializations',
        'tooltip' => 'Management of medical specializations',
        'helper_text' => '',
        'empty' => 'No specializations registered',
    ],
    'download_privacy_form' => [
      'label' => 'Download Privacy Form',
      'tooltip' => 'Download the data processing form',
      'description' => 'Privacy form to be completed and signed',
      'success' => 'Privacy form downloaded successfully',
      'error' => 'An error occurred while downloading the form',
<<<<<<< HEAD
    ],
];
=======
=======
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
            'helper_text' => 'When the availability period ends',
        ],
        'last_name' => [
            'label' => 'Last Name',
            'placeholder' => 'Enter last name',
            'helper_text' => 'Your family name',
=======
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Doctor identifier',
            'help' => 'Unique doctor identifier',
            'helper_text' => '',
>>>>>>> 8d591468 (fields translations)
        ],
        'first_name' => [
            'label' => 'First Name',
            'placeholder' => 'Enter first name',
            'help' => 'First name as registered with the Medical Board',
            'helper_text' => '',
        ],
        'last_name' => [
            'label' => 'Last Name',
            'placeholder' => 'Enter last name',
            'help' => 'Last name as registered with the Medical Board',
            'helper_text' => '',
        ],
        'full_name' => [
            'label' => 'Full Name',
            'placeholder' => 'Enter complete first and last name',
            'help' => 'Full name as registered with the Medical Board',
            'helper_text' => '',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'doctor@example.com',
            'help' => 'Professional email address',
            'helper_text' => '',
        ],
        'phone' => [
            'label' => 'Phone',
            'placeholder' => '+39 123 456 7890',
            'help' => 'Professional phone number',
            'helper_text' => '',
        ],
        'address' => [
            'label' => 'Address',
            'placeholder' => 'Via Roma, 123',
            'help' => 'Medical practice address',
            'helper_text' => '',
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Enter city',
            'help' => 'City where the practice is located',
            'helper_text' => '',
        ],
        'registration_number' => [
            'label' => 'Registration Number',
            'placeholder' => 'Enter registration number',
            'help' => 'Medical Board registration number',
            'helper_text' => '',
        ],
        'vat_number' => [
            'label' => 'VAT Number',
            'placeholder' => 'Enter VAT number',
            'help' => 'VAT number for billing purposes',
            'helper_text' => '',
        ],
        'specialization' => [
            'label' => 'Specialization',
            'placeholder' => 'Select specialization',
            'help' => 'Primary medical specialization',
            'helper_text' => '',
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Select status',
            'help' => 'Medical profile status',
            'helper_text' => '',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'pending' => 'Pending',
                'suspended' => 'Suspended',
            ],
        ],
        'certification' => [
            'label' => 'Certification',
            'placeholder' => 'Upload certification',
            'help' => 'Medical Board registration document',
            'helper_text' => '',
        ],
        'certificates' => [
            'label' => 'Certificates',
            'placeholder' => 'Upload certificates',
            'help' => 'Professional certificates and specializations',
            'helper_text' => '',
        ],
        'certifications' => [
            'label' => 'Certifications',
            'placeholder' => 'Upload certifications',
            'help' => 'Documents attesting professional qualifications',
            'helper_text' => '',
        ],
        'moderation_notes' => [
            'label' => 'Moderation Notes',
            'placeholder' => 'Enter any notes',
            'help' => 'Internal notes for the moderation process',
            'helper_text' => '',
        ],
        'availability' => [
            'label' => 'Availability',
            'placeholder' => 'Set availability',
            'help' => 'Days and hours available for visits',
            'helper_text' => '',
        ],
        'day' => [
            'label' => 'Day',
            'placeholder' => 'Select day',
            'help' => 'Day of the week for availability',
            'helper_text' => '',
            'options' => [
                'monday' => 'Monday',
                'tuesday' => 'Tuesday',
                'wednesday' => 'Wednesday',
                'thursday' => 'Thursday',
                'friday' => 'Friday',
                'saturday' => 'Saturday',
                'sunday' => 'Sunday',
            ],
        ],
        'start_time' => [
            'label' => 'Start Time',
            'placeholder' => 'Select start time',
            'help' => 'Start time of availability',
            'helper_text' => '',
        ],
        'end_time' => [
            'label' => 'End Time',
            'placeholder' => 'Select end time',
            'help' => 'End time of availability',
            'helper_text' => '',
        ],
        'attach' => [
            'label' => 'Attachments',
            'placeholder' => 'Upload attachments',
            'help' => 'Documents attached to the profile',
            'helper_text' => '',
        ],
        'created_at' => [
            'label' => 'Creation Date',
            'placeholder' => 'Registration date',
            'help' => 'Doctor registration date',
            'helper_text' => '',
        ],
<<<<<<< HEAD
>>>>>>> aurmich/dev
    ],

    'filters' => [
        'search_placeholder' => 'Search doctors...',
        'is_active' => [
            'label' => 'Status',
            'placeholder' => 'Filter by status',
            'help' => 'Filter doctors by profile status',
            'helper_text' => '',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'pending' => 'Pending',
                'suspended' => 'Suspended',
            ],
        ],
        'specialization' => [
            'label' => 'Specialization',
            'placeholder' => 'Filter by specialization',
            'help' => 'Filter by medical specialization',
            'helper_text' => '',
        ],
        'city' => [
            'label' => 'City',
            'placeholder' => 'Filter by city',
            'help' => 'Filter by practice city',
            'helper_text' => '',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'New Doctor',
            'icon' => 'heroicon-o-plus',
            'color' => 'primary',
            'tooltip' => 'Add a new doctor to the system',
            'modal_heading' => 'Create New Doctor',
            'modal_description' => 'Enter new doctor data',
            'success' => 'Doctor created successfully',
            'error' => 'Error creating doctor',
        ],
        'edit' => [
            'label' => 'Edit',
            'icon' => 'heroicon-o-pencil',
            'color' => 'warning',
            'tooltip' => 'Edit selected doctor data',
            'modal_heading' => 'Edit Doctor',
            'modal_description' => 'Edit doctor data',
            'success' => 'Doctor updated successfully',
            'error' => 'Error updating doctor',
        ],
        'delete' => [
            'label' => 'Delete',
            'icon' => 'heroicon-o-trash',
            'color' => 'danger',
            'tooltip' => 'Delete selected doctor',
            'modal_heading' => 'Delete Doctor',
            'modal_description' => 'Are you sure you want to delete this doctor? This action cannot be undone.',
            'confirmation' => 'Are you sure you want to delete this doctor? All their data will be permanently lost.',
            'success' => 'Doctor deleted successfully',
            'error' => 'Error deleting doctor',
        ],
        'view' => [
            'label' => 'View',
            'icon' => 'heroicon-o-eye',
            'color' => 'info',
            'tooltip' => 'View doctor details',
            'modal_heading' => 'Doctor Details',
        ],
        'approve' => [
            'label' => 'Approve',
            'icon' => 'heroicon-o-check-circle',
            'color' => 'success',
            'tooltip' => 'Approve doctor profile',
            'confirmation' => 'Are you sure you want to approve this doctor?',
            'success' => 'Doctor approved successfully',
            'error' => 'Error approving doctor',
        ],
        'suspend' => [
            'label' => 'Suspend',
            'icon' => 'heroicon-o-pause-circle',
            'color' => 'warning',
            'tooltip' => 'Temporarily suspend profile',
            'confirmation' => 'Are you sure you want to suspend this doctor?',
            'success' => 'Doctor suspended successfully',
            'error' => 'Error suspending doctor',
        ],
    ],

    'messages' => [
        'created' => 'Doctor created successfully',
        'updated' => 'Doctor updated successfully',
        'deleted' => 'Doctor deleted successfully',
        'approved' => 'Doctor approved successfully',
        'suspended' => 'Doctor suspended successfully',
        'activated' => 'Doctor activated successfully',
        'certification_uploaded' => 'Certification uploaded successfully',
        'certification_verified' => 'Certification verified successfully',
        'availability_updated' => 'Availability updated successfully',
    ],

    'sections' => [
        'personal_info' => [
            'label' => 'Personal Information',
            'description' => 'Doctor\'s biographical data',
        ],
        'contact_info' => [
            'label' => 'Contact Information',
            'description' => 'Professional contacts',
        ],
        'professional_info' => [
            'label' => 'Professional Information',
            'description' => 'Qualifications and specializations',
        ],
        'availability_settings' => [
            'label' => 'Availability Settings',
            'description' => 'Office hours and days',
        ],
        'documents' => [
            'label' => 'Documents',
            'description' => 'Certifications and attachments',
        ],
    ],

    'validation' => [
        'required' => 'The :attribute field is required',
        'email' => 'The :attribute field must be a valid email address',
        'unique' => 'The :attribute value is already in use',
        'min' => 'The :attribute field must be at least :min characters',
        'max' => 'The :attribute field cannot exceed :max characters',
        'registration_number_format' => 'The registration number must be in the correct format',
        'vat_number_format' => 'The VAT number must be in the correct format',
        'phone_format' => 'The phone number must be in the correct format',
    ],

    'empty_state' => [
        'heading' => 'No doctors found',
        'description' => 'There are no registered doctors matching the search criteria',
        'action' => 'Register the first doctor',
    ],

    'specialties' => [
        'label' => 'Specializations',
        'description' => 'Doctor\'s medical specializations',
        'empty' => 'No specializations registered',
    ],
];
<<<<<<< HEAD
=======
return array (
=======
return array (
  'name' => 'Doctors',
  'navigation' => 
  array (
    'label' => 'Doctors',
    'group' => 'Medical Team',
    'icon' => 'heroicon-o-user-group',
    'color' => 'emerald',
    'sort' => 2,
    'tooltip' => 'Manage medical staff and related professional information',
  ),
  'model' => 
  array (
    'label' => 'Doctor',
    'plural' => 'Doctors',
    'description' => 'Management of medical staff and professional information',
  ),
  'pages' => 
  array (
    'index' => 
    array (
      'title' => 'Doctors List',
      'subtitle' => 'Manage medical team',
      'description' => 'View and manage all registered doctors',
    ),
    'create' => 
    array (
      'title' => 'New Doctor',
      'subtitle' => 'Register a new doctor',
      'description' => 'Add a new doctor to the team',
    ),
    'edit' => 
    array (
      'title' => 'Edit Doctor',
      'subtitle' => 'Update doctor data',
      'description' => 'Edit information of selected doctor',
    ),
  ),
>>>>>>> 6e6e70f4 (.)
  'steps' => 
  array (
    'personal_info' => 
    array (
<<<<<<< HEAD
<<<<<<< HEAD
      'label' => 'personal_info',
    ),
    'moderation' => 
    array (
      'label' => 'moderation',
    ),
    'contacts' => 
    array (
      'label' => 'contacts',
    ),
    'professional' => 
    array (
      'label' => 'professional',
    ),
    'availability' => 
    array (
      'label' => 'availability',
=======
      'label' => 'Personal Information',
      'description' => 'Enter your personal information',
=======
      'label' => 'Personal Information',
      'description' => 'Enter personal information',
      'icon' => 'heroicon-o-user',
      'color' => 'primary',
      'tooltip' => 'Personal and biographical data of the doctor',
>>>>>>> 6e6e70f4 (.)
    ),
    'moderation' => 
    array (
      'label' => 'Moderation',
<<<<<<< HEAD
      'description' => 'Profile verification and approval',
=======
      'description' => 'Information verification',
      'icon' => 'heroicon-o-shield-check',
      'color' => 'warning',
      'tooltip' => 'Profile verification and approval process',
>>>>>>> 6e6e70f4 (.)
    ),
    'contacts' => 
    array (
      'label' => 'Contacts',
<<<<<<< HEAD
      'description' => 'Enter your contact information',
=======
      'description' => 'Contact information',
      'icon' => 'heroicon-o-phone',
      'color' => 'info',
      'tooltip' => 'Professional contact data',
>>>>>>> 6e6e70f4 (.)
    ),
    'professional' => 
    array (
      'label' => 'Professional Information',
<<<<<<< HEAD
      'description' => 'Enter your professional information',
=======
      'description' => 'Professional data and specializations',
      'icon' => 'heroicon-o-academic-cap',
      'color' => 'success',
      'tooltip' => 'Medical qualifications and specializations',
>>>>>>> 6e6e70f4 (.)
    ),
    'availability' => 
    array (
      'label' => 'Availability',
<<<<<<< HEAD
      'description' => 'Set your availability schedule',
>>>>>>> b1d9f49d (translations)
=======
      'description' => 'Available hours and days',
      'icon' => 'heroicon-o-calendar',
      'color' => 'danger',
      'tooltip' => 'Calendar and office hours',
    ),
    'studio' => 
    array (
      'label' => 'Practice',
      'description' => 'Medical practice information',
      'icon' => 'heroicon-o-building-office-2',
      'color' => 'blue',
      'tooltip' => 'Data of the practice where they operate',
>>>>>>> 6e6e70f4 (.)
    ),
  ),
  'fields' => 
  array (
<<<<<<< HEAD
    'full_name' => 
    array (
<<<<<<< HEAD
      'label' => 'full_name',
      'placeholder' => 'full_name',
      'helper_text' => 'full_name',
      'description' => 'full_name',
    ),
    'certification' => 
    array (
      'label' => 'certification',
      'placeholder' => 'certification',
      'helper_text' => 'certification',
      'description' => 'certification',
    ),
    'moderation_notes' => 
    array (
      'label' => 'moderation_notes',
      'placeholder' => 'moderation_notes',
      'helper_text' => 'moderation_notes',
      'description' => 'moderation_notes',
    ),
    'email' => 
    array (
      'label' => 'email',
      'placeholder' => 'email',
      'helper_text' => 'email',
      'description' => 'email',
    ),
    'phone' => 
    array (
      'label' => 'phone',
      'placeholder' => 'phone',
      'helper_text' => 'phone',
      'description' => 'phone',
    ),
    'address' => 
    array (
      'label' => 'address',
      'placeholder' => 'address',
      'helper_text' => 'address',
      'description' => 'address',
    ),
    'city' => 
    array (
      'label' => 'city',
      'placeholder' => 'city',
      'helper_text' => 'city',
      'description' => 'city',
    ),
    'registration_number' => 
    array (
      'label' => 'registration_number',
      'placeholder' => 'registration_number',
      'helper_text' => 'registration_number',
      'description' => 'registration_number',
    ),
    'certifications' => 
    array (
      'label' => 'certifications',
      'placeholder' => 'certifications',
      'helper_text' => 'certifications',
      'description' => 'certifications',
    ),
    'availability' => 
    array (
      'label' => 'availability',
      'placeholder' => 'availability',
      'helper_text' => 'availability',
      'description' => 'availability',
    ),
    'day' => 
    array (
      'label' => 'day',
      'placeholder' => 'day',
      'helper_text' => 'day',
      'description' => 'day',
    ),
    'start_time' => 
    array (
      'label' => 'start_time',
      'placeholder' => 'start_time',
      'helper_text' => 'start_time',
      'description' => 'start_time',
    ),
    'end_time' => 
    array (
      'label' => 'end_time',
      'placeholder' => 'end_time',
      'helper_text' => 'end_time',
      'description' => 'end_time',
    ),
    'last_name' => 
    array (
      'description' => 'last_name',
      'helper_text' => 'last_name',
      'placeholder' => 'last_name',
      'label' => 'last_name',
    ),
    'first_name' => 
    array (
      'description' => 'first_name',
      'helper_text' => 'first_name',
      'placeholder' => 'first_name',
      'label' => 'first_name',
    ),
  ),
);
>>>>>>> 54f4fa16 (.)
=======
    ],
];
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
      'label' => 'Full Name',
      'placeholder' => 'Enter full name',
    ),
    'certification' => 
    array (
      'label' => 'Certification',
      'tooltip' => 'Upload your professional certification',
    ),
    'moderation_status' => 
    array (
      'label' => 'Moderation Status',
    ),
    'moderation_notes' => 
    array (
      'label' => 'Moderation Notes',
      'placeholder' => 'Enter any moderation notes',
    ),
    'fiscal_code' => 
    array (
      'label' => 'Fiscal Code',
      'placeholder' => 'Enter fiscal code',
    ),
    'birth_date' => 
    array (
      'label' => 'Date of Birth',
      'placeholder' => 'Select date of birth',
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'Enter email address',
      'description' => 'email',
      'helper_text' => 'email',
    ),
    'phone' => 
    array (
      'label' => 'Phone',
      'placeholder' => 'Enter phone number',
    ),
    'address' => 
    array (
      'label' => 'Address',
      'placeholder' => 'Enter practice address',
    ),
    'city' => 
    array (
      'label' => 'City',
      'placeholder' => 'Enter city',
    ),
    'registration_number' => 
    array (
      'label' => 'Registration Number',
      'placeholder' => 'Enter professional registration number',
    ),
    'specialties' => 
    array (
      'label' => 'Specialties',
      'placeholder' => 'Select specialties',
    ),
    'certifications' => 
    array (
      'label' => 'Certifications',
      'tooltip' => 'Upload any additional certifications',
    ),
    'availability' => 
    array (
      'label' => 'Availability Schedule',
    ),
    'day' => 
    array (
      'label' => 'Day',
      'placeholder' => 'Select day',
      'helper_text' => 'Select the day of the week',
    ),
    'start_time' => 
    array (
      'label' => 'Start Time',
      'placeholder' => 'Select start time',
      'helper_text' => 'When the availability period begins',
    ),
    'end_time' => 
    array (
      'label' => 'End Time',
      'placeholder' => 'Select end time',
      'helper_text' => 'When the availability period ends',
    ),
    'last_name' => 
    array (
      'label' => 'Last Name',
      'placeholder' => 'Enter last name',
      'helper_text' => 'Your family name',
=======
    'id' => 
    array (
      'label' => 'ID',
      'placeholder' => 'Doctor identifier',
      'help' => 'Unique doctor identifier',
      'helper_text' => '',
>>>>>>> 6e6e70f4 (.)
    ),
    'first_name' => 
    array (
      'label' => 'First Name',
      'placeholder' => 'Enter first name',
<<<<<<< HEAD
      'helper_text' => 'Your given name',
    ),
  ),
);
>>>>>>> 1c0ba5b2 (translations)
>>>>>>> b1d9f49d (translations)
=======
>>>>>>> a0e35b8d (helper text on login)
=======
      'help' => 'First name as registered with the Medical Board',
      'helper_text' => '',
    ),
    'last_name' => 
    array (
      'label' => 'Last Name',
      'placeholder' => 'Enter last name',
      'help' => 'Last name as registered with the Medical Board',
      'helper_text' => '',
    ),
    'full_name' => 
    array (
      'label' => 'Full Name',
      'placeholder' => 'Enter complete first and last name',
      'help' => 'Full name as registered with the Medical Board',
      'helper_text' => '',
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'doctor@example.com',
      'help' => 'Professional email address',
      'helper_text' => '',
      'description' => 'email',
    ),
    'phone' => 
    array (
      'label' => 'Phone',
      'placeholder' => '+39 123 456 7890',
      'help' => 'Professional phone number',
      'helper_text' => '',
    ),
    'address' => 
    array (
      'label' => 'Address',
      'placeholder' => 'Via Roma, 123',
      'help' => 'Medical practice address',
      'helper_text' => '',
    ),
    'city' => 
    array (
      'label' => 'City',
      'placeholder' => 'Enter city',
      'help' => 'City where the practice is located',
      'helper_text' => '',
    ),
    'registration_number' => 
    array (
      'label' => 'Registration Number',
      'placeholder' => 'Enter registration number',
      'help' => 'Medical Board registration number',
      'helper_text' => '',
    ),
    'vat_number' => 
    array (
      'label' => 'VAT Number',
      'placeholder' => 'Enter VAT number',
      'help' => 'VAT number for billing purposes',
      'helper_text' => '',
    ),
    'specialization' => 
    array (
      'label' => 'Specialization',
      'placeholder' => 'Select specialization',
      'help' => 'Primary medical specialization',
      'helper_text' => '',
    ),
    'status' => 
    array (
      'label' => 'Status',
      'placeholder' => 'Select status',
      'help' => 'Medical profile status',
      'helper_text' => '',
      'options' => 
      array (
        'active' => 'Active',
        'inactive' => 'Inactive',
        'pending' => 'Pending',
        'suspended' => 'Suspended',
      ),
    ),
    'certification' => 
    array (
      'label' => 'Certification',
      'placeholder' => 'Upload certification',
      'help' => 'Medical Board registration document',
      'helper_text' => '',
    ),
    'certificates' => 
    array (
      'label' => 'Certificates',
      'placeholder' => 'Upload certificates',
      'help' => 'Professional certificates and specializations',
      'helper_text' => '',
    ),
    'certifications' => 
    array (
      'label' => 'Certifications',
      'placeholder' => 'Upload certifications',
      'help' => 'Documents attesting professional qualifications',
      'helper_text' => '',
    ),
    'moderation_notes' => 
    array (
      'label' => 'Moderation Notes',
      'placeholder' => 'Enter any notes',
      'help' => 'Internal notes for the moderation process',
      'helper_text' => '',
    ),
    'availability' => 
    array (
      'label' => 'Availability',
      'placeholder' => 'Set availability',
      'help' => 'Days and hours available for visits',
      'helper_text' => '',
    ),
    'day' => 
    array (
      'label' => 'Day',
      'placeholder' => 'Select day',
      'help' => 'Day of the week for availability',
      'helper_text' => '',
      'options' => 
      array (
        'monday' => 'Monday',
        'tuesday' => 'Tuesday',
        'wednesday' => 'Wednesday',
        'thursday' => 'Thursday',
        'friday' => 'Friday',
        'saturday' => 'Saturday',
        'sunday' => 'Sunday',
      ),
    ),
    'start_time' => 
    array (
      'label' => 'Start Time',
      'placeholder' => 'Select start time',
      'help' => 'Start time of availability',
      'helper_text' => '',
    ),
    'end_time' => 
    array (
      'label' => 'End Time',
      'placeholder' => 'Select end time',
      'help' => 'End time of availability',
      'helper_text' => '',
    ),
    'attach' => 
    array (
      'label' => 'Attachments',
      'placeholder' => 'Upload attachments',
      'help' => 'Documents attached to the profile',
      'helper_text' => '',
    ),
    'created_at' => 
    array (
      'label' => 'Creation Date',
      'placeholder' => 'Registration date',
      'help' => 'Doctor registration date',
      'helper_text' => '',
    ),
  ),
  'filters' => 
  array (
    'search_placeholder' => 'Search doctors...',
    'is_active' => 
    array (
      'label' => 'Status',
      'placeholder' => 'Filter by status',
      'help' => 'Filter doctors by profile status',
      'helper_text' => '',
      'options' => 
      array (
        'active' => 'Active',
        'inactive' => 'Inactive',
        'pending' => 'Pending',
        'suspended' => 'Suspended',
      ),
    ),
    'specialization' => 
    array (
      'label' => 'Specialization',
      'placeholder' => 'Filter by specialization',
      'help' => 'Filter by medical specialization',
      'helper_text' => '',
    ),
    'city' => 
    array (
      'label' => 'City',
      'placeholder' => 'Filter by city',
      'help' => 'Filter by practice city',
      'helper_text' => '',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'New Doctor',
      'icon' => 'heroicon-o-plus',
      'color' => 'primary',
      'tooltip' => 'Add a new doctor to the system',
      'modal_heading' => 'Create New Doctor',
      'modal_description' => 'Enter new doctor data',
      'success' => 'Doctor created successfully',
      'error' => 'Error creating doctor',
    ),
    'edit' => 
    array (
      'label' => 'Edit',
      'icon' => 'heroicon-o-pencil',
      'color' => 'warning',
      'tooltip' => 'Edit selected doctor data',
      'modal_heading' => 'Edit Doctor',
      'modal_description' => 'Edit doctor data',
      'success' => 'Doctor updated successfully',
      'error' => 'Error updating doctor',
    ),
    'delete' => 
    array (
      'label' => 'Delete',
      'icon' => 'heroicon-o-trash',
      'color' => 'danger',
      'tooltip' => 'Delete selected doctor',
      'modal_heading' => 'Delete Doctor',
      'modal_description' => 'Are you sure you want to delete this doctor? This action cannot be undone.',
      'confirmation' => 'Are you sure you want to delete this doctor? All their data will be permanently lost.',
      'success' => 'Doctor deleted successfully',
      'error' => 'Error deleting doctor',
    ),
    'view' => 
    array (
      'label' => 'View',
      'icon' => 'heroicon-o-eye',
      'color' => 'info',
      'tooltip' => 'View doctor details',
      'modal_heading' => 'Doctor Details',
    ),
    'approve' => 
    array (
      'label' => 'Approve',
      'icon' => 'heroicon-o-check-circle',
      'color' => 'success',
      'tooltip' => 'Approve doctor profile',
      'confirmation' => 'Are you sure you want to approve this doctor?',
      'success' => 'Doctor approved successfully',
      'error' => 'Error approving doctor',
    ),
    'suspend' => 
    array (
      'label' => 'Suspend',
      'icon' => 'heroicon-o-pause-circle',
      'color' => 'warning',
      'tooltip' => 'Temporarily suspend profile',
      'confirmation' => 'Are you sure you want to suspend this doctor?',
      'success' => 'Doctor suspended successfully',
      'error' => 'Error suspending doctor',
    ),
  ),
  'messages' => 
  array (
    'created' => 'Doctor created successfully',
    'updated' => 'Doctor updated successfully',
    'deleted' => 'Doctor deleted successfully',
    'approved' => 'Doctor approved successfully',
    'suspended' => 'Doctor suspended successfully',
    'activated' => 'Doctor activated successfully',
    'certification_uploaded' => 'Certification uploaded successfully',
    'certification_verified' => 'Certification verified successfully',
    'availability_updated' => 'Availability updated successfully',
  ),
  'sections' => 
  array (
    'personal_info' => 
    array (
      'label' => 'Personal Information',
      'description' => 'Doctor\'s biographical data',
    ),
    'contact_info' => 
    array (
      'label' => 'Contact Information',
      'description' => 'Professional contacts',
    ),
    'professional_info' => 
    array (
      'label' => 'Professional Information',
      'description' => 'Qualifications and specializations',
    ),
    'availability_settings' => 
    array (
      'label' => 'Availability Settings',
      'description' => 'Office hours and days',
    ),
    'documents' => 
    array (
      'label' => 'Documents',
      'description' => 'Certifications and attachments',
    ),
  ),
  'validation' => 
  array (
    'required' => 'The :attribute field is required',
    'email' => 'The :attribute field must be a valid email address',
    'unique' => 'The :attribute value is already in use',
    'min' => 'The :attribute field must be at least :min characters',
    'max' => 'The :attribute field cannot exceed :max characters',
    'registration_number_format' => 'The registration number must be in the correct format',
    'vat_number_format' => 'The VAT number must be in the correct format',
    'phone_format' => 'The phone number must be in the correct format',
  ),
  'empty_state' => 
  array (
    'heading' => 'No doctors found',
    'description' => 'There are no registered doctors matching the search criteria',
    'action' => 'Register the first doctor',
  ),
  'specialties' => 
  array (
    'label' => 'Specializations',
    'description' => 'Doctor\'s medical specializations',
    'empty' => 'No specializations registered',
  ),
);
>>>>>>> 6e6e70f4 (.)
>>>>>>> aurmich/dev
