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
    /** @var string */
    public static string $name = 'no_show';

=======
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