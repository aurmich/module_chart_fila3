<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment\Transitions;

use Illuminate\Support\Str;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Spatie\ModelStates\Transition;
use Modules\Xot\Contracts\UserContract;
use Modules\SaluteOra\Models\Appointment;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\States\Transitions\XotBaseTransition;

abstract class BaseTransition extends XotBaseTransition
{
    
    


    public function getNotificationRecipients(): array
    {
        $record=$this->record;
        Assert::isInstanceOf($record, Appointment::class);
        return [
            'patient' => $record->patient,
            //'doctor' => $record->doctor,
        ];
    }

    
        
    
    public function getNotificationData(): array
    {
        $record=$this->record;
        Assert::isInstanceOf($record, Appointment::class);
        return [
            'message' => $this->message,
            'appointment_date' => $record->starts_at?->format('d/m/Y H:i') ?? 'N/A',
            'patient_name' => $record->patient->name ?? 'N/A',
            'doctor_name' => $record->doctor->name ?? 'N/A',
=======
use Modules\SaluteOra\Models\Appointment;
use Spatie\ModelStates\Transition;
use Modules\Notify\Notifications\RecordNotification;

abstract class BaseTransition extends Transition
{
    
    public function __construct(public Appointment $appointment, public ?string $message='') {}
     
    public function handle(): Appointment
    {
        $this->sendNotification();
        $class = static::class;
        $newStateClass = Str::of($class)->afterLast('To')->prepend('Modules\SaluteOra\States\Appointment\\')->toString();
        $this->appointment->state = new $newStateClass($this->appointment);
        $this->appointment->save();
        return $this->appointment;
    }
        
    public function sendNotification(): void
    {
        $slug = 'appointment-' . Str::of(class_basename(static::class))->kebab()->toString();
        $slug = \Illuminate\Support\Str::slug($slug);
        
        $notify = new RecordNotification(
            $this->appointment,
            $slug
        );

        $data = $this->getNotificationData();
        $notify = $notify->mergeData($data);
        
        // Notifica al paziente
        if ($this->appointment->patient && $this->appointment->patient->email) {
            \Illuminate\Support\Facades\Notification::route('mail', $this->appointment->patient->email)
                ->notify($notify);
        }
        
        // Notifica al dottore
        if ($this->appointment->doctor && $this->appointment->doctor->email) {
            \Illuminate\Support\Facades\Notification::route('mail', $this->appointment->doctor->email)
                ->notify($notify);
        }
    }

    public function getNotificationData(): array
    {
        return [
            'message' => $this->message,
            'appointment_date' => $this->appointment->start_time->format('d/m/Y H:i'),
            'patient_name' => $this->appointment->patient?->name ?? 'N/A',
            'doctor_name' => $this->appointment->doctor?->name ?? 'N/A',
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
        ];
    }
} 