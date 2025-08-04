<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User;

/**
 * Stato che rappresenta un utente per il quale è richiesta un'integrazione.
 * 
 * In questo stato l'utente ha completato la registrazione ma sono richieste
 * ulteriori informazioni prima di poter attivare l'account.
 */
class IntegrationRequested extends UserState
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'integration_requested';
=======
=======
    /** @var string */
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
    public static $name = 'integration_requested';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    public function label(): string
    {
        return 'Integrazione richiesta';
    }
    
    public function color(): string
    {
        return 'info';
    }
    
    public function icon(): string
    {
        return 'heroicon-o-document-text';
    }
}
