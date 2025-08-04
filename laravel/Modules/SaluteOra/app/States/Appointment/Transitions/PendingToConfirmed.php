<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment\Transitions;

<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Modules\SaluteOra\Models\Appointment;

=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
/**
 * Transition from Pending to Confirmed state.
 */
class PendingToConfirmed extends BaseTransition
{
    //--- (Funziona automaticamente grazie al pattern BaseTransition!)
<<<<<<< HEAD


    
    public function getNotificationRecipients(): array
    {
        $record=$this->record;
        Assert::isInstanceOf($record, Appointment::class);
        return [
            'patient' => $record->patient,
            'doctor' => $record->doctor,
        ];
    }
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
} 