<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment\Transitions;

<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Modules\SaluteOra\Models\Appointment;

=======
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Modules\SaluteOra\Models\Appointment;

=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
>>>>>>> aurmich/dev
/**
 * Transition from Pending to Confirmed state.
 */
class PendingToConfirmed extends BaseTransition
{
    //--- (Funziona automaticamente grazie al pattern BaseTransition!)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev


    
    public function getNotificationRecipients(): array
    {
        $record=$this->record;
        Assert::isInstanceOf($record, Appointment::class);
        return [
            'patient' => $record->patient,
            'doctor' => $record->doctor,
        ];
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
>>>>>>> aurmich/dev
} 