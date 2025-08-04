<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User;

/**
 * Stato che rappresenta un utente in attesa di attivazione.
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
 *
>>>>>>> 7440f060 (delete duplicate folder + add .md)
>>>>>>> aurmich/dev
 * Questo è lo stato predefinito per i nuovi utenti registrati.
 */
class Pending extends UserState
{
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'pending';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'pending';
=======
    public static $name = 'pendig';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
=======
    /** @var string */
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
    /** @var string */
>>>>>>> 13ea6524 (phpstan)
    public static $name = 'pending';
>>>>>>> 7440f060 (delete duplicate folder + add .md)
>>>>>>> aurmich/dev

    public function label(): string
    {
        return 'In attesa';
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
>>>>>>> aurmich/dev
    public function color(): string
    {
        return 'warning';
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
>>>>>>> aurmich/dev
    public function icon(): string
    {
        return 'heroicon-o-clock';
    }
}
