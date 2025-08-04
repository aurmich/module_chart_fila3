<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment;

use Modules\SaluteOra\States\Appointment\AppointmentState;

/**
 * Represents a rejected appointment.
 *
 * The appointment has been rejected by the medical staff.
 */
class Rejected extends AppointmentState
{
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'rejected';

=======
    public static $name = 'rejected';

    public function label(): string
    {
        return 'Respinto';
    }

    public function color(): string
    {
        return 'danger';
    }

    public function icon(): string
    {
        return 'heroicon-o-x-mark';
    }

    public function isRejected(): bool
    {
        return true;
    }
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
}
