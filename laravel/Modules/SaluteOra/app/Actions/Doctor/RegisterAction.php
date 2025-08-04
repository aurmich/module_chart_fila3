<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions\Doctor;

<<<<<<< HEAD
<<<<<<< HEAD
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

=======
use Modules\SaluteOra\Models\User;
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
use Illuminate\Support\Facades\DB;
use Modules\SaluteOra\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\SaluteOra\Models\Doctor;
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
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
use Modules\SaluteOra\Enums\DoctorRegistrationStatusEnum;

>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)

class RegisterAction
{
    /**
     * Esegue l'azione di registrazione del dottore.
     *
     * @param array<string, mixed> $data
     * @return Doctor
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(UserContract $record,array $data): Doctor
    {
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



=======
    public function execute(array $data): Doctor
=======
    public function execute(Doctor $record,array $data): Doctor
>>>>>>> f3e4ec66 (.)
=======
    public function execute(UserContract $record,array $data): Doctor
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
    {
        //$data['type']=UserTypeEnum::DOCTOR;
        
        $doctor = Doctor::create($data);
        //$record->save();
        //$record->update($data);
        /*
        $attachments = Doctor::$attachments;
        foreach ($attachments as $attachment) {
                $doctor->addMediaFromDisk($data[$attachment],'local')
                    ->toMediaCollection($attachment);

        }
        */
        

        Notification::route('mail', $data['email'])
        //->locale('it')
        ->notify(new RecordNotification($doctor,'doctor_registration_pending'));

        return $doctor;
    }

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======


>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
    /**
     * Ottiene lo stato di registrazione del dottore.
     *
     * @return string
     */
    private function getDoctorRegistrationStatus(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists(DoctorRegistrationStatusEnum::class)) {
=======
        if (!class_exists(DoctorRegistrationStatus::class)) {
>>>>>>> 54f4fa16 (.)
=======
        if (!class_exists(DoctorRegistrationStatusEnum::class)) {
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
            return 'pending';
        }

        try {
<<<<<<< HEAD
<<<<<<< HEAD
            $cases = DoctorRegistrationStatusEnum::cases();
=======
            $cases = DoctorRegistrationStatus::cases();
>>>>>>> 54f4fa16 (.)
=======
            $cases = DoctorRegistrationStatusEnum::cases();
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
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
            'type_class' => get_class($doctor->type ?? new \stdClass()),
            'is_doctor' => $doctor->isDoctor(),
        ]);

<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
        $email = new SpatieEmail($doctor, 'doctor_registration_pending');
        Mail::to($doctor->email)
            ->locale(app()->getLocale())
            ->send($email);
    }
}
