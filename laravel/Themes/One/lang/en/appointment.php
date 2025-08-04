<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'accepted_appointments' => [
        'title' => 'Accepted Appointments',
        'back_home' => 'Back to Home',
        'redirecting' => 'Redirecting...',
        'click_here' => 'click here',
        'if_not_redirected' => 'If you are not redirected automatically, :link.',
    ],
=======
>>>>>>> 198c0c0a (✨ (DoctorAppointmentsWidget.php, DoctorCalendarWidget.php): refactor appointment loading logic to use doctor_id instead of auth user id for better clarity and functionality)
    'hero' => [
        'accepted_appointments' => [
            'title' => 'Accepted Appointments',
            'description' => 'View all appointments that have been confirmed',
            'back_button' => [
                'label' => 'Go back',
<<<<<<< HEAD
                'tooltip' => 'Return to the previous page',
=======
                'tooltip' => 'Return to previous page',
>>>>>>> 198c0c0a (✨ (DoctorAppointmentsWidget.php, DoctorCalendarWidget.php): refactor appointment loading logic to use doctor_id instead of auth user id for better clarity and functionality)
            ],
        ],
        'pending_appointments' => [
            'title' => 'Pending Appointments',
<<<<<<< HEAD
            'description' => 'View all appointments awaiting confirmation',
=======
            'description' => 'View all appointments waiting for confirmation',
>>>>>>> 198c0c0a (✨ (DoctorAppointmentsWidget.php, DoctorCalendarWidget.php): refactor appointment loading logic to use doctor_id instead of auth user id for better clarity and functionality)
        ],
        'completed_appointments' => [
            'title' => 'Completed Appointments',
            'description' => 'View all appointments that have been completed',
        ],
        'rejected_appointments' => [
            'title' => 'Rejected Appointments',
            'description' => 'View all appointments that have been rejected',
        ],
        'entry_appointments' => [
            'title' => 'Incoming Appointments',
<<<<<<< HEAD
            'description' => 'Visualizza tutti i nuovi appuntamenti richiesti',
        ],
    ],
    'fields' => [
        'name' => [
            'label' => 'Name',
            'tooltip' => 'Patient\'s full name',
            'helper_text' => '',
        ],
        'date' => [
            'label' => 'Date',
            'tooltip' => 'Appointment date',
            'helper_text' => '',
        ],
        'time' => [
            'label' => 'Time',
            'tooltip' => 'Appointment time',
            'helper_text' => '',
        ],
        'phone' => [
            'label' => 'Phone',
            'tooltip' => 'Patient\'s phone number',
            'helper_text' => '',
        ],
        'email' => [
            'label' => 'Email',
            'tooltip' => 'Patient\'s email address',
            'helper_text' => '',
        ],
        'notes' => [
            'label' => 'Notes',
            'tooltip' => 'Additional notes or comments',
            'helper_text' => '',
        ],
        'state' => [
            'label' => 'Status',
            'tooltip' => 'Status',
            'helper_text' => '',
        ],
    ],
    'appointment_details' => 'Appointment Details',
    'modals' => [
        'confirm_appointment' => [
            'title' => [
                'label' => 'Accept Appointment',
                'tooltip' => 'Confirm the acceptance of the appointment',
                'helper_text' => '',
            ],
            'message' => [
                'label' => 'Are you sure you want to accept the appointment with',
                'tooltip' => 'Confirmation message for acceptance',
                'helper_text' => '',
            ],
            'buttons' => [
                'confirm' => [
                    'label' => 'Accept',
                    'tooltip' => 'Confirm the acceptance of the appointment',
                    'helper_text' => '',
                ],
                'cancel' => [
                    'label' => 'Cancel',
                    'tooltip' => 'Cancel the operation',
                    'helper_text' => '',
                ],
            ],
        ],
        'reject_appointment' => [
            'title' => [
                'label' => 'Reject Appointment',
                'tooltip' => 'Reject the selected appointment',
                'helper_text' => '',
            ],
            'message' => [
                'label' => 'Are you sure you want to reject the appointment with',
                'tooltip' => 'Confirmation message for rejection',
                'helper_text' => '',
            ],
            'buttons' => [
                'confirm' => [
                    'label' => 'Reject',
                    'tooltip' => 'Confirm the rejection of the appointment',
                    'helper_text' => '',
                ],
                'cancel' => [
                    'label' => 'Cancel',
                    'tooltip' => 'Cancel the operation',
                    'helper_text' => '',
                ],
            ],
        ],
    ],
    'buttons' => [
        'close' => 'Close',
        'back' => 'Go back',
        'save' => 'Save',
        'cancel' => 'Cancel',
        'submit' => 'Submit',
    ],
    'report' => [
        'ready_title' => 'Your report is ready!',
        'download_button' => 'Download report!',
        'download_tooltip' => 'Click to download the medical report',
        'not_available' => 'Report not yet available',
        'processing' => 'Report being processed',
        'error' => 'Error loading the report',
        'generated_by' => 'Generated by',
        'pdf_title' => 'Appointment Report',
    ],
];
=======
            'description' => 'View all new appointment requests',
        ],
    ],
    'states' => [
        'pending' => 'Pending',
        'confirmed' => 'Confirmed',
        'scheduled' => 'Scheduled',
        'in_progress' => 'In Progress',
        'completed' => 'Completed',
        'cancelled' => 'Cancelled',
        'rejected' => 'Rejected',
        'no_show' => 'No Show',
        'rescheduled' => 'Rescheduled',
    ],
]; 
>>>>>>> 198c0c0a (✨ (DoctorAppointmentsWidget.php, DoctorCalendarWidget.php): refactor appointment loading logic to use doctor_id instead of auth user id for better clarity and functionality)
