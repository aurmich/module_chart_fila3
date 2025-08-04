<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment\Transitions;

use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
=======
=======
use Modules\SaluteOra\Models\Appointment;
=======
>>>>>>> 13ea6524 (phpstan)
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\Models\Appointment;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\RecordNotification;

abstract class BaseTransition extends Transition
{
    
    public function __construct(public Appointment $appointment, public ?string $message='') {}
     
    public function handle(): Appointment
    {
        $this->sendNotification();
        $class = static::class;
        $newStateClass = Str::of($class)->afterLast('To')->prepend('Modules\SaluteOra\States\Appointment\\')->toString();
        /** @phpstan-ignore-next-line */
        $this->appointment->state = new $newStateClass($this->appointment);
        $this->appointment->save();
        return $this->appointment;
    }
        
    public function sendNotification(): void
    {
        $slug = 'appointment-' . Str::of(class_basename(static::class))->kebab()->toString();
        $slug = Str::slug($slug);
        
        $notify = new RecordNotification(
            $this->appointment,
            $slug
        );

        $data = $this->getNotificationData();
        $notify = $notify->mergeData($data);
        
        // Notifica al paziente
        if ($this->appointment->patient && $this->appointment->patient->email) {
            Notification::route('mail', $this->appointment->patient->email)
                ->notify($notify);
        }
        
        // Notifica al dottore
        if ($this->appointment->doctor && $this->appointment->doctor->email) {
            Notification::route('mail', $this->appointment->doctor->email)
                ->notify($notify);
        }
    }

    public function getNotificationData(): array
    {
        return [
            'message' => $this->message,
<<<<<<< HEAD
            'appointment_date' => $this->appointment->start_time->format('d/m/Y H:i'),
<<<<<<< HEAD
<<<<<<< HEAD
            'patient_name' => $this->appointment->patient?->name ?? 'N/A',
            'doctor_name' => $this->appointment->doctor?->name ?? 'N/A',
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
            'patient_name' => $this->appointment->patient->name ?? 'N/A',
=======
            'patient_name' => $this->appointment->patient?->name ?? 'N/A',
>>>>>>> 2f119323 (cartd)
=======
            'appointment_date' => $this->appointment->start_time->format('d/m/Y H:i') ?? 'N/A',
            'patient_name' => $this->appointment->patient->name ?? 'N/A',
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
            'doctor_name' => $this->appointment->doctor->name ?? 'N/A',
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
>>>>>>> aurmich/dev
        ];
    }
} 