<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions\Doctor;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Geo\Models\Address;
use Illuminate\Support\Facades\DB;
use Modules\SaluteOra\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Studio;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
use Modules\SaluteOra\Datas\DoctorData;
use Modules\Xot\Contracts\UserContract;
use Modules\SaluteOra\Enums\DoctorStatus;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Models\DoctorStudio;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\ValidationException;
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Notify\Notifications\RecordNotification;
use Modules\SaluteOra\States\User\IntegrationCompleted;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
use Modules\SaluteOra\Enums\DoctorRegistrationStatusEnum;

<<<<<<< HEAD
=======
=======
use Modules\SaluteOra\Models\User;
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
use Illuminate\Support\Str;
use Modules\Geo\Models\Address;
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
use Illuminate\Support\Facades\DB;
use Modules\SaluteOra\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Studio;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
use Modules\SaluteOra\Datas\DoctorData;
use Modules\Xot\Contracts\UserContract;
use Modules\SaluteOra\Enums\DoctorStatus;
use Modules\SaluteOra\Enums\UserTypeEnum;
<<<<<<< HEAD
use Illuminate\Validation\ValidationException;
use Modules\SaluteOra\Enums\DoctorRegistrationStatusEnum;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\ValidationException;
use Modules\Notify\Notifications\RecordNotification;
use Modules\SaluteOra\States\User\IntegrationCompleted;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
use Modules\SaluteOra\Enums\DoctorRegistrationStatusEnum;

>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
>>>>>>> aurmich/dev

class RegisterAction
{
    /**
     * Esegue l'azione di registrazione del dottore.
     *
     * @param array<string, mixed> $data
     * @return Doctor
     */
<<<<<<< HEAD
    public function execute(UserContract $record,array $data): Doctor
    {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(UserContract $record,array $data): Doctor
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if(!isset($data['name']) && isset($data['email']) && is_string($data['email'])){
            $data['name']=Str::of($data['email'])->before('@')->append('-')->append(Str::random(3))->toString();
        }
        if(isset($data['id'])){
            $doctor = $record;
            $doctor->update($data);
        }else{
            $doctor= new Doctor();
            $doctor->fill($data);
            $doctor->save();
            //$doctor = Doctor::create($data);
        }
        Assert::isInstanceOf($doctor, Doctor::class);
        if(isset($data['schedule'])){
            if(!is_array($data['studio'])){
                $data['studio']=[];
            }
            if(!is_array($data['studio']['address'])){
                $data['studio']['address']=[];
            }
            $studio = Studio::create($data['studio']);
            $address = Address::create($data['studio']['address']);
            $studio->address()->save($address);
            /** @phpstan-ignore-next-line */
            $doctor->studio()->save($studio);
            
            $res=$doctor->studios()->sync([$studio->id=>['schedule'=>$data['schedule']]]);

            $pivot=DoctorStudio::firstOrCreate(['user_id'=>$doctor->id,'studio_id'=>$studio->id]);
            if($pivot->schedule==null){
                $pivot->update(['schedule'=>$data['schedule']]);
            }

            
        }

         //-------------------------------------------------
             //*
            $attachments = Doctor::getAttachments();
            /*
            $data_attachments = [];
            foreach ($attachments as $attachment) {
                    
                    $media=$doctor->addMediaFromDisk($data[$attachment],'local')
                        ->toMediaCollection($attachment);
                    $data_attachments[$attachment]=$media->getPathRelativeToRoot();

            }
            $doctor->update($data_attachments);
            */
            app(SaveAttachmentsAction::class)->execute($doctor,$attachments,$data);
             //*/
             //-------------------------------------------------
             
            // Gestione delle preferenze
            if (isset($data['privacy_acceptance'])) {
                $doctor->consents()->create([
                    'type' => 'privacy',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }

            if (isset($data['newsletter'])) {
                $doctor->consents()->create([
                    'type' => 'newsletter',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }

        //$record->save();
        //$record->update($data);
        /*
        $attachments = Doctor::getAttachments();
        foreach ($attachments as $attachment) {
                $doctor->addMediaFromDisk($data[$attachment],'local')
                    ->toMediaCollection($attachment);

        }
        */
        Assert::isInstanceOf($doctor, Doctor::class);
        
        if($data['state']=='integration_requested'){
            if ($doctor->state !== null) {
                $doctor->state->transitionTo(IntegrationCompleted::class);
            }
            return $doctor;
        }

        /** @phpstan-ignore binaryOp.invalid, binaryOp.invalid */
        $mail_slug=Str::slug($data['type'].'-'.$data['state']);
        

        Notification::route('mail', $data['email'])
        //->locale('it')
        ->notify(new RecordNotification($doctor,$mail_slug));

        return $doctor;
    }



<<<<<<< HEAD
=======
=======
    public function execute(array $data): Doctor
=======
    public function execute(Doctor $record,array $data): Doctor
>>>>>>> f3e4ec66 (.)
=======
    public function execute(UserContract $record,array $data): Doctor
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
    {
=======
        if(isset($data['studio'])){
            unset($data['studio']);
        }
<<<<<<< HEAD
>>>>>>> 3f885cdc (♻️ (RegisterAction.php): refactor execute method to remove 'studio' from data array to ensure cleaner data handling during doctor registration)
        //$data['type']=UserTypeEnum::DOCTOR;
=======
>>>>>>> e577f0ca (feat: getDataDefault for fix livewire form data)
=======
        
>>>>>>> 17b35338 (add doctor-register-integration-completed  page)
=======
        if(!isset($data['name']) && isset($data['email'])){
=======
        if(!isset($data['name']) && isset($data['email']) && is_string($data['email'])){
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
            $data['name']=Str::of($data['email'])->before('@')->append('-')->append(Str::random(3))->toString();
        }
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
        if(isset($data['id'])){
            $doctor = $record;
            $doctor->update($data);
        }else{
            $doctor= new Doctor();
            $doctor->fill($data);
            $doctor->save();
            //$doctor = Doctor::create($data);
        }
        if(isset($data['schedule'])){
            if(!is_array($data['studio'])){
                $data['studio']=[];
            }
            if(!is_array($data['studio']['address'])){
                $data['studio']['address']=[];
            }
            $studio = Studio::create($data['studio']);
            $address = Address::create($data['studio']['address']);
            $studio->address()->save($address);
            /** @phpstan-ignore-next-line */
            $doctor->studio()->save($studio);
            /** @phpstan-ignore-next-line */
<<<<<<< HEAD
            $doctor->studios()->attach($studio,['schedule'=>$data['schedule']]);
=======
    public function execute(array $data): Doctor
=======
    public function execute(UserContract $record,array $data): Doctor
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
    {
        
<<<<<<< HEAD
        $studio = Studio::create($studioData);

        // Creazione dell'indirizzo se presente
        if (isset($data['studio']['address']) && is_array($data['studio']['address'])) {
            $addressData = $data['studio']['address'];
            $address = Address::create($addressData);
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
        if(isset($data['id'])){
            $doctor = $record;
            $doctor->update($data);
        }else{
            $doctor= new Doctor();
            $doctor->fill($data);
            $doctor->save();
            //$doctor = Doctor::create($data);
        }
        if(isset($data['schedule'])){
            $studio = Studio::create($data['studio']);
            $address = Address::create($data['studio']['address']);
            $studio->address()->save($address);
            $doctor->studio()->save($studio);
            $doctor->studios()->attach($studio,['schedule'=>$data['schedule']]);
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
            //$doctor->studios()->attach($studio,['schedule'=>$data['schedule']]);
            /** @phpstan-ignore-next-line */
            $doctor->studios()->sync($studio,['schedule'=>$data['schedule']]);
>>>>>>> 96f87894 (.)
        }

         //-------------------------------------------------
             //*
            $attachments = Doctor::getAttachments();
            $data_attachments = [];
            foreach ($attachments as $attachment) {
                    /** @phpstan-ignore-next-line */
                    $media=$doctor->addMediaFromDisk($data[$attachment],'local')
                        ->toMediaCollection($attachment);
                    $data_attachments[$attachment]=$media->getPathRelativeToRoot();

            }
            $doctor->update($data_attachments);
             //*/
             //-------------------------------------------------
             if(!method_exists($doctor,'consents')){
                throw new \Exception('Method consents not found');
            }
            // Gestione delle preferenze
            if (isset($data['privacy_acceptance'])) {
                $doctor->consents()->create([
                    'type' => 'privacy',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }

            if (isset($data['newsletter'])) {
                $doctor->consents()->create([
                    'type' => 'newsletter',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }

        //$record->save();
        //$record->update($data);
        /*
        $attachments = Doctor::getAttachments();
        foreach ($attachments as $attachment) {
                $doctor->addMediaFromDisk($data[$attachment],'local')
                    ->toMediaCollection($attachment);

        }
        */
        Assert::isInstanceOf($doctor, Doctor::class);
        
        if($data['state']=='integration_requested'){
            $doctor->state->transitionTo(IntegrationCompleted::class);
            return $doctor;
        }

        /** @phpstan-ignore-next-line */
        $mail_slug=Str::slug($data['type'].'-'.$data['state']);
        

        Notification::route('mail', $data['email'])
        //->locale('it')
        ->notify(new RecordNotification($doctor,$mail_slug));

        return $doctor;
    }

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======


>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
>>>>>>> aurmich/dev
    /**
     * Ottiene lo stato di registrazione del dottore.
     *
     * @return string
     */
    private function getDoctorRegistrationStatus(): string
    {
<<<<<<< HEAD
        if (!class_exists(DoctorRegistrationStatusEnum::class)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists(DoctorRegistrationStatusEnum::class)) {
=======
        if (!class_exists(DoctorRegistrationStatus::class)) {
>>>>>>> 54f4fa16 (.)
=======
        if (!class_exists(DoctorRegistrationStatusEnum::class)) {
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
>>>>>>> aurmich/dev
            return 'pending';
        }

        try {
<<<<<<< HEAD
            $cases = DoctorRegistrationStatusEnum::cases();
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $cases = DoctorRegistrationStatusEnum::cases();
=======
            $cases = DoctorRegistrationStatus::cases();
>>>>>>> 54f4fa16 (.)
=======
            $cases = DoctorRegistrationStatusEnum::cases();
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
>>>>>>> aurmich/dev
            foreach ($cases as $case) {
                if (strtolower($case->name) === 'pending') {
                    return $case->value;
                }
            }
            return 'pending';
        } catch (\Exception $e) {
            return 'pending';
        }
    }

    /**
     * Invia l'email di conferma della registrazione.
     *
     * @param Doctor $doctor
     * @return void
     */
    protected function sendConfirmationEmail(Doctor $doctor): void
    {
        // Verifica se esiste già il template, altrimenti crealo
        if (!MailTemplate::where('slug', 'doctor_registration_pending')->exists()) {
            MailTemplate::create([
                'mailable' => SpatieEmail::class,
                'slug' => 'doctor_registration_pending',
                'subject' => 'Benvenuto, {{ first_name }}',
                'html_template' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione come dottore è in attesa di approvazione. Ti contatteremo presto.</p>',
                'text_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione come dottore è in attesa di approvazione. Ti contatteremo presto.'
            ]);
        }

<<<<<<< HEAD
        // Debug sicuro del tipo
        dddx([
            'type_value' => $doctor->type->value ?? 'null',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        // Debug sicuro del tipo
        dddx([
            'type_value' => $doctor->type->value ?? 'null',
=======
        // Debug sicuro del tipo
        dddx([
<<<<<<< HEAD
            'type_value' => $doctor->type?->value ?? 'null',
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
=======
            'type_value' => $doctor->type->value ?? 'null',
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
            'type_class' => get_class($doctor->type ?? new \stdClass()),
            'is_doctor' => $doctor->isDoctor(),
        ]);

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
>>>>>>> aurmich/dev
        $email = new SpatieEmail($doctor, 'doctor_registration_pending');
        Mail::to($doctor->email)
            ->locale(app()->getLocale())
            ->send($email);
    }
}
