<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment;

use Modules\SaluteOra\States\Appointment\AppointmentState;

/**
 * Represents a confirmed appointment.
 *
 * The appointment has been confirmed by both parties.
 */
class Confirmed extends AppointmentState
{
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'confirmed';

=======
=======
    /** @var string */
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
    public static $name = 'confirmed';

    public function label(): string
    {
        return static::transClass(__CLASS__,'states.'.static::$name.'.label');
        //return static::transClass(self::class,'label');
        //return 'Confermato';
    }

    public function color(): string
    {
        return static::transClass(__CLASS__,'states.'.static::$name.'.color');
        //return 'success';
    }

    public function icon(): string
    {
        return static::transClass(__CLASS__,'states.'.static::$name.'.icon');
        //return 'heroicon-o-check-circle';
    }

    public function canBeModified(): bool
    {
        return true;
    }

    public function isActive(): bool
    {
        return true;
    }
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======

    public function modalHeading(): string
    {
        //return 'Accetta appuntamento';
        return static::transClass(__CLASS__,'states.'.static::$name.'.modal_heading');
    }
    public function modalDescription(): string
    {
        $appointment = $this->getModel();
        //return 'Sei sicuro di voler l\' appuntamento con '. $appointment->patient?->full_name.' ?';
        return static::transClass(__CLASS__,'states.'.static::$name.'.modal_description');
    }
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
}