<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment;

use Modules\SaluteOra\States\Appointment\AppointmentState;

/**
 * Represents an appointment where patient didn't show up.
 *
 * The patient failed to attend the scheduled appointment.
 */
class NoShow extends AppointmentState
{
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'no_show';

=======
=======
    /** @var string */
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
    public static $name = 'no_show';

    public function label(): string
    {
        return 'Assente';
    }

    public function color(): string
    {
        return 'warning';
    }

    public function icon(): string
    {
        return 'heroicon-o-user-minus';
    }

    public function isCancelled(): bool
    {
        return true;
    }
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
}