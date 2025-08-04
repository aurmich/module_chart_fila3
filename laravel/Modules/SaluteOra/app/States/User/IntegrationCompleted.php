<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User;

/**
 * Stato che rappresenta un utente che ha completato l'integrazione dei dati richiesti.
 * 
 * In questo stato l'utente ha fornito tutte le informazioni richieste
 * e può essere attivato nel sistema dopo l'approvazione dell'amministratore.
 */
class IntegrationCompleted extends UserState
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'integration_completed';
=======
=======
    /** @var string */
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
    /** @var string */
>>>>>>> 13ea6524 (phpstan)
    public static $name = 'integration_completed';
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    
    public function label(): string
    {
        return 'Integrazione completata';
    }
    
    public function color(): string
    {
        return 'warning';
    }
    
    public function icon(): string
    {
        return 'heroicon-o-check-circle';
    }
} 