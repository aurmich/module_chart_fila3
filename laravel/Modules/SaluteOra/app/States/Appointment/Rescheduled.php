<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment;

use Modules\SaluteOra\States\Appointment\AppointmentState;

/**
 * Represents a rescheduled appointment.
 *
 * The appointment has been moved to a new date/time.
 */
class Rescheduled extends AppointmentState
{
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'rescheduled';

    
=======
    public static $name = 'rescheduled';

    public function label(): string
    {
        return 'Riprogrammato';
    }

    public function color(): string
    {
        return 'info';
    }

    public function icon(): string
    {
        return 'heroicon-o-arrow-path';
    }

    public function canBeModified(): bool
    {
        return true;
    }
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
} 