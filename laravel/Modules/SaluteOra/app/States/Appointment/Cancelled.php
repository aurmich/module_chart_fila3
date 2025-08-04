<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment;

use Modules\SaluteOra\States\Appointment\AppointmentState;

/**
 * Represents a cancelled appointment.
 *
 * The appointment has been cancelled by either party.
 */
class Cancelled extends AppointmentState
{
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'cancelled';

=======
    public static $name = 'cancelled';

    public function label(): string
    {
        return 'Annullato';
    }

    public function color(): string
    {
        return 'danger';
    }

    public function icon(): string
    {
        return 'heroicon-o-x-circle';
    }

    public function isCancelled(): bool
    {
        return true;
    }
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
}