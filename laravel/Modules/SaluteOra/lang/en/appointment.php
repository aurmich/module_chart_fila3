<?php

<<<<<<< HEAD
return [
    'name' => 'Appointments',
=======
declare(strict_types=1);

return [
    'name' => 'Appointments',
    
>>>>>>> 8d591468 (fields translations)
    'navigation' => [
        'label' => 'Appointment Calendar',
        'group' => 'Schedule',
        'icon' => 'heroicon-o-calendar-days',
        'color' => 'sky',
<<<<<<< HEAD
        'sort' => '1',
        'tooltip' => 'View and manage all appointments and visits',
    ],
=======
        'sort' => 1,
        'tooltip' => 'View and manage all appointments and visits',
    ],

>>>>>>> 8d591468 (fields translations)
    'model' => [
        'label' => 'Appointment',
        'plural' => 'Appointments',
        'description' => 'Management of medical appointments and visits',
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'pages' => [
        'index' => [
            'title' => 'Appointments',
            'subtitle' => 'Manage all appointments',
            'description' => 'View and manage the medical appointment calendar',
        ],
        'create' => [
            'title' => 'New Appointment',
            'subtitle' => 'Create a new appointment',
            'description' => 'Book a new appointment for a patient',
        ],
        'edit' => [
            'title' => 'Edit Appointment',
            'subtitle' => 'Update appointment details',
            'description' => 'Modify information for the selected appointment',
        ],
        'availability' => [
            'title' => 'Availability Management',
            'heading' => 'Availability Calendar',
            'subheading' => 'Manage your availability and approve appointments',
            'description' => 'Create availability slots to allow patients to book appointments and manage existing appointments.',
        ],
    ],
<<<<<<< HEAD
    'fields' => [
        'patient_id' => [
            'label' => 'Patient',
            'placeholder' => 'Select the patient',
            'help' => 'Patient for whom the appointment is scheduled',
            'helper_text' => '',
        ],
        'title' => [
            'label' => 'Title',
            'placeholder' => 'Enter a title for the appointment',
            'help' => 'Brief description of the appointment',
            'helper_text' => '',
        ],
        'studio_id' => [
            'label' => 'Studio',
            'placeholder' => 'Select the studio',
            'help' => 'Studio where the appointment will take place',
=======

    'fields' => [
        'title' => [
            'label' => 'Title',
            'placeholder' => 'Enter a title for the appointment',
            'help' => 'Brief description of the appointment',
            'helper_text' => '',
        ],
        'patient_id' => [
            'label' => 'Patient',
            'placeholder' => 'Select the patient',
<<<<<<< HEAD
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Patient for whom the appointment is scheduled',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'doctor_id' => [
            'label' => 'Doctor',
            'placeholder' => 'Select the doctor',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Doctor who will hold the appointment',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Doctor who will hold the appointment',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'dentist_id' => [
            'label' => 'Dentist',
            'placeholder' => 'Select the dentist',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Dentist responsible for the treatment',
            'helper_text' => '',
        ],
        'starts_at_legacy' => [
            'label' => 'Start Date and Time',
            'placeholder' => 'Select start date and time',
            'help' => 'When the appointment starts',
            'helper_text' => '',
        ],
        'ends_at_legacy' => [
            'label' => 'End Date and Time',
            'placeholder' => 'Select end date and time',
            'help' => 'When the appointment ends',
=======
=======
            'help' => 'Dentist responsible for the treatment',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'studio_id' => [
            'label' => 'Studio',
            'placeholder' => 'Select the studio',
            'help' => 'Studio where the appointment will take place',
            'helper_text' => '',
        ],
        'start_time' => [
            'label' => 'Start Time',
            'placeholder' => 'Select the start time',
            'help' => 'When the appointment starts',
            'helper_text' => '',
        ],
        'end_time' => [
            'label' => 'End Time',
            'placeholder' => 'Select the end time',
<<<<<<< HEAD
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'When the appointment ends',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'treatment_id' => [
            'label' => 'Treatment',
            'placeholder' => 'Select a treatment',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'The type of treatment planned',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'The type of treatment planned',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Select the status',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Current status of the appointment',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Current status of the appointment',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
            'options' => [
                'scheduled' => 'Scheduled',
                'confirmed' => 'Confirmed',
                'completed' => 'Completed',
                'cancelled' => 'Cancelled',
                'no_show' => 'No Show',
            ],
        ],
        'type' => [
            'label' => 'Appointment Type',
            'placeholder' => 'Select the type',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Type of medical appointment',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Type of medical appointment',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
            'options' => [
                'consultation' => 'Consultation',
                'follow_up' => 'Follow-up',
                'treatment' => 'Treatment',
                'surgery' => 'Surgery',
                'emergency' => 'Emergency',
            ],
        ],
        'notes' => [
            'label' => 'Notes',
            'placeholder' => 'Enter any notes',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Additional information about the appointment',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Additional information about the appointment',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'reason' => [
            'label' => 'Reason',
            'placeholder' => 'Enter the reason for the appointment',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Main reason for the visit',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Main reason for the visit',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'emergency' => [
            'label' => 'Emergency',
            'placeholder' => 'Indicate if this is an emergency',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Mark as emergency appointment',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Mark as emergency appointment',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'eligibility_confirmed' => [
            'label' => 'Eligibility Confirmed',
            'placeholder' => 'Confirm eligibility',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Confirm that the patient is eligible for treatment',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Confirm that the patient is eligible for treatment',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'created_at' => [
            'label' => 'Creation Date',
            'placeholder' => 'Appointment creation date',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'When the appointment was created',
            'helper_text' => '',
        ],
    ],
=======
=======
            'help' => 'When the appointment was created',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
    ],

>>>>>>> 8d591468 (fields translations)
    'actions' => [
        'create' => [
            'label' => 'New Appointment',
            'tooltip' => 'Create a new appointment',
            'modal_heading' => 'New Appointment',
            'modal_description' => 'Fill in the details to create a new appointment',
            'success' => 'Appointment created successfully',
            'error' => 'Error during appointment creation',
        ],
        'edit' => [
            'label' => 'Edit',
            'tooltip' => 'Edit appointment details',
            'modal_heading' => 'Edit Appointment',
            'modal_description' => 'Update appointment details',
            'success' => 'Appointment updated successfully',
            'error' => 'Error during appointment update',
        ],
        'delete' => [
            'label' => 'Delete',
            'tooltip' => 'Remove this appointment',
            'confirmation' => 'Are you sure you want to delete this appointment? This action cannot be undone.',
            'success' => 'Appointment deleted successfully',
            'error' => 'Error during appointment deletion',
        ],
        'view' => [
            'label' => 'View',
            'tooltip' => 'View appointment details',
            'modal_heading' => 'Appointment Details',
        ],
        'confirm' => [
            'label' => 'Confirm',
            'tooltip' => 'Confirm this appointment',
            'success' => 'Appointment confirmed successfully',
            'error' => 'Error during appointment confirmation',
        ],
        'cancel' => [
            'label' => 'Cancel',
            'tooltip' => 'Cancel this appointment',
            'confirmation' => 'Are you sure you want to cancel this appointment?',
            'success' => 'Appointment cancelled successfully',
            'error' => 'Error during appointment cancellation',
        ],
        'reschedule' => [
            'label' => 'Reschedule',
            'tooltip' => 'Change appointment date and time',
            'modal_heading' => 'Reschedule Appointment',
            'modal_description' => 'Select a new date and time',
            'success' => 'Appointment rescheduled successfully',
            'error' => 'Error during appointment rescheduling',
        ],
        'mark_completed' => [
            'label' => 'Complete',
            'tooltip' => 'Mark as completed',
            'confirmation' => 'Are you sure you want to mark this appointment as completed?',
            'success' => 'Appointment completed successfully',
            'error' => 'Error during appointment completion',
        ],
        'mark_no_show' => [
            'label' => 'No Show',
            'tooltip' => 'Mark as no show',
            'confirmation' => 'Are you sure you want to mark this patient as no show?',
            'success' => 'Patient marked as no show',
            'error' => 'Error during status update',
        ],
        'legend' => [
            'label' => 'Legend',
            'modal_heading' => 'Calendar Legend',
            'modal_description' => 'Explanation of colors and symbols used',
        ],
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'filters' => [
        'today' => [
            'label' => 'Today',
            'description' => 'Today\'s appointments',
        ],
        'upcoming' => [
            'label' => 'Upcoming',
            'description' => 'Future appointments',
        ],
        'past' => [
            'label' => 'Past',
            'description' => 'Past appointments',
        ],
        'by_status' => [
            'label' => 'By Status',
            'placeholder' => 'Filter by status',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Filter appointments by status',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Filter appointments by status',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'by_doctor' => [
            'label' => 'By Doctor',
            'placeholder' => 'Select a doctor',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Filter by specific doctor',
=======
>>>>>>> 8d591468 (fields translations)
=======
            'help' => 'Filter by specific doctor',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
        'by_date_range' => [
            'label' => 'By Date Range',
            'placeholder' => 'Select the range',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Filter by specific date period',
            'helper_text' => '',
        ],
    ],
=======
=======
            'help' => 'Filter by specific date period',
>>>>>>> 3f5cd0b5 (📝 (appointment.php, widgets.php): add help text for appointment fields to enhance user guidance and improve usability)
            'helper_text' => '',
        ],
    ],

>>>>>>> 8d591468 (fields translations)
    'calendar' => [
        'title' => 'Appointment Calendar',
        'today' => 'Today',
        'month' => 'Month',
        'week' => 'Week',
        'day' => 'Day',
        'list' => 'List',
        'next' => 'Next',
        'previous' => 'Previous',
        'day_view' => 'Day View',
        'week_view' => 'Week View',
        'month_view' => 'Month View',
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'availability' => [
        'title' => 'Availability',
        'add' => 'Add Availability',
        'edit' => 'Edit Availability',
        'delete' => 'Delete Availability',
        'create_success' => 'Availability created successfully',
        'update_success' => 'Availability updated successfully',
        'delete_success' => 'Availability deleted successfully',
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'legend' => [
        'description' => 'Legend of colors and icons used in the calendar.',
        'types' => 'Event Types',
        'icons' => 'Icon Meanings',
        'availability' => 'Availability',
        'pending' => 'Pending appointment',
        'confirmed' => 'Confirmed appointment',
        'completed' => 'Completed appointment',
        'cancelled' => 'Cancelled appointment',
        'availability_icon' => 'Availability slot',
        'pending_icon' => 'Appointment pending confirmation',
        'confirmed_icon' => 'Confirmed appointment',
        'completed_icon' => 'Completed appointment',
        'cancelled_icon' => 'Cancelled appointment',
        'instructions' => 'Instructions',
        'instruction_add' => 'Click on an empty slot or the \'+\' button to add new availability.',
        'instruction_edit' => 'Click on an existing event to edit it or change its status.',
        'instruction_delete' => 'In the edit options, click \'Delete\' to remove an availability or unconfirmed appointment.',
        'instruction_approve' => 'To approve an appointment, change status from \'Pending\' to \'Confirmed\'.',
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'notifications' => [
        'reminder' => [
            'title' => 'Appointment Reminder',
            'body' => 'You have an appointment with :doctor in :time hours',
        ],
        'confirmation' => [
            'title' => 'Appointment Confirmed',
            'body' => 'Your appointment with :doctor for :date has been confirmed',
        ],
        'cancellation' => [
            'title' => 'Appointment Cancelled',
            'body' => 'Your appointment with :doctor for :date has been cancelled',
        ],
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'messages' => [
        'created' => 'Appointment created successfully',
        'updated' => 'Appointment updated successfully',
        'deleted' => 'Appointment deleted successfully',
        'confirmed' => 'Appointment confirmed successfully',
        'cancelled' => 'Appointment cancelled successfully',
        'completed' => 'Appointment completed successfully',
        'rescheduled' => 'Appointment rescheduled successfully',
        'conflict' => 'Another appointment already exists at this time',
        'unavailable_slot' => 'This time slot is not available for the selected doctor',
        'past_date' => 'Cannot schedule appointments in the past',
        'unavailable' => 'The doctor is not available at this time',
        'availability_created' => 'Availability created successfully',
        'availability_updated' => 'Availability updated successfully',
        'availability_deleted' => 'Availability deleted successfully',
        'appointment_updated' => 'Appointment updated successfully',
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'validation' => [
        'required' => 'The :attribute field is required',
        'date' => 'The :attribute field must be a valid date',
        'after' => 'The :attribute field must be after :date',
        'before' => 'The :attribute field must be before :date',
        'time_conflict' => 'An appointment already exists at this time',
        'past_appointment' => 'Cannot create appointments in the past',
        'doctor_unavailable' => 'The doctor is not available at the selected time',
    ],
<<<<<<< HEAD
=======

>>>>>>> 8d591468 (fields translations)
    'empty_state' => [
        'heading' => 'No appointments found',
        'description' => 'There are no appointments for the selected criteria',
        'action' => 'Create the first appointment',
    ],
<<<<<<< HEAD
<<<<<<< HEAD
    'states' => [
        'confirmed' => [
            'label' => 'Confirm',
            'color' => 'success',
            'icon' => 'heroicon-o-check-circle',
            'modal_heading' => 'Accept appointment',
            'modal_description' => 'Are you sure you want to accept this appointment?',
            'bg_color' => '#10b981',
        ],
        'rejected' => [
            'label' => 'Reject',
            'color' => 'danger',
            'icon' => 'heroicon-o-x-mark',
            'modal_heading' => 'Reject appointment',
            'modal_description' => 'Are you sure you want to reject this appointment?',
            'bg_color' => '#ef4444',
        ],
        'pending' => [
            'label' => 'Pending',
            'color' => 'warning',
            'bg_color' => '#f59e0b',
            'icon' => 'heroicon-o-clock',
            'modal_heading' => 'Pending Appointment',
            'modal_description' => 'This appointment is pending confirmation.',
        ],
        'scheduled' => [
            'label' => 'Scheduled',
            'color' => 'info',
            'bg_color' => '#3b82f6',
            'icon' => 'heroicon-o-calendar',
            'modal_heading' => 'Scheduled Appointment',
            'modal_description' => 'This appointment has been scheduled in the calendar.',
        ],
        'in_progress' => [
            'label' => 'In Progress',
            'color' => 'warning',
            'bg_color' => '#f59e0b',
            'icon' => 'heroicon-o-clock',
            'modal_heading' => 'Visit in Progress',
            'modal_description' => 'The medical visit is currently in progress.',
        ],
        'completed' => [
            'label' => 'Completed',
            'color' => 'success',
            'bg_color' => '#10b981',
            'icon' => 'heroicon-o-check-badge',
            'modal_heading' => 'Visit Completed',
            'modal_description' => 'The visit has been completed successfully.',
        ],
        'cancelled' => [
            'label' => 'Cancelled',
            'color' => 'danger',
            'bg_color' => '#ef4444',
            'icon' => 'heroicon-o-x-circle',
            'modal_heading' => 'Cancel Appointment',
            'modal_description' => 'Are you sure you want to cancel this appointment?',
        ],
        'no_show' => [
            'label' => 'No Show',
            'color' => 'danger',
            'bg_color' => '#ef4444',
            'icon' => 'heroicon-o-exclamation-circle',
            'modal_heading' => 'Patient Not Present',
            'modal_description' => 'The patient did not show up for the appointment.',
        ],
        'rescheduled' => [
            'label' => 'Rescheduled',
            'color' => 'info',
            'bg_color' => '#3b82f6',
            'icon' => 'heroicon-o-arrow-path',
            'modal_heading' => 'Reschedule Appointment',
            'modal_description' => 'This appointment has been rescheduled for a new date.',
        ],
        'report_pending' => [
            'label' => 'Report Pending',
            'color' => 'warning',
            'bg_color' => '#f59e0b',
            'icon' => 'heroicon-o-document-text',
            'modal_heading' => 'Report Pending',
            'modal_description' => 'The appointment is completed but the medical report is still pending compilation.',
        ],
        'report_completed' => [
            'label' => 'Report Completed',
            'color' => 'success',
            'bg_color' => '#10b981',
            'icon' => 'heroicon-o-document-check',
            'modal_heading' => 'Report Completed',
            'modal_description' => 'The medical report has been completed and the appointment can be finalized.',
        ],
        'banned' => [
            'label' => 'Banned',
            'color' => 'danger',
            'bg_color' => '#dc2626',
            'icon' => 'heroicon-o-no-symbol',
            'modal_heading' => 'User Banned',
            'modal_description' => 'This user has been banned from the system for violations.',
        ],
        'refund_pending' => [
            'label' => 'Refund Pending',
            'color' => 'warning',
            'bg_color' => '#f59e0b',
            'icon' => 'heroicon-o-currency-euro',
            'modal_heading' => 'Refund Pending',
            'modal_description' => 'The refund for this appointment is pending processing.',
        ],
        'refund_accepted' => [
            'label' => 'Refund Accepted',
            'color' => 'success',
            'bg_color' => '#10b981',
            'icon' => 'heroicon-o-check-circle',
            'modal_heading' => 'Refund Accepted',
            'modal_description' => 'The refund has been accepted and will be processed.',
        ],
        'refund_completed' => [
            'label' => 'Refund Completed',
            'color' => 'success',
            'bg_color' => '#10b981',
            'icon' => 'heroicon-o-banknotes',
            'modal_heading' => 'Refund Completed',
            'modal_description' => 'The refund has been completed and paid to the patient.',
        ],
        'refund_to_integrate' => [
            'label' => 'Refund to Integrate',
            'color' => 'info',
            'bg_color' => '#3b82f6',
            'icon' => 'heroicon-o-arrow-path',
            'modal_heading' => 'Refund to Integrate',
            'modal_description' => 'The refund needs to be integrated with other services.',
        ],
        'pro_bono' => [
            'label' => 'Pro Bono',
            'color' => 'info',
            'bg_color' => '#3b82f6',
            'icon' => 'heroicon-o-heart',
            'modal_heading' => 'Pro Bono Service',
            'modal_description' => 'This appointment was provided as a free service.',
        ],
    ],
=======
>>>>>>> 8d591468 (fields translations)
=======
    'states' => [
        'confirmed' => [
            'label' => 'Confirm',
            'color' => 'success',
            'icon' => 'heroicon-o-check-circle',
            'modal_heading' => 'Accept appointment',
            'modal_description' => 'Are you sure you want to accept this appointment?',
        ],
        'rejected' => [
            'label' => 'Reject',
            'color' => 'danger',
            'icon' => 'heroicon-o-x-mark',
            'modal_heading' => 'Reject appointment',
            'modal_description' => 'Are you sure you want to reject this appointment?',
        ],
    ],
>>>>>>> 49a567a1 (✨ (appointment.php): add new appointment states for confirmed and rejected to enhance user experience and provide clear actions)
];
