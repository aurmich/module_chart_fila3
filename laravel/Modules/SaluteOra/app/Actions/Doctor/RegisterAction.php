<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions\Doctor;

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
use Illuminate\Support\Facades\DB;
use Modules\SaluteOra\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\SaluteOra\Datas\DoctorData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
use Modules\SaluteOra\Enums\DoctorStatus;
use Illuminate\Validation\ValidationException;
use Modules\SaluteOra\Enums\DoctorRegistrationStatus;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
>>>>>>> 54f4fa16 (.)

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
    {
        // Verifica se esiste già un utente con questa email
        // Nota: Dobbiamo cercare nella tabella users, non solo tra i dottori
        $existingUser = Doctor::where('email', $data['email'])->first();
        if ($existingUser) {
            /*
            throw new \Illuminate\Validation\ValidationException([
                'email' => ['Un dottore con questa email è già registrato.'],
            ]);
            */
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'email' => ['Validation Message #1'],
                'field_name_2' => ['Validation Message #2'],
             ]);
             throw $error;
        }
        $doctor = Doctor::create($data);
        // Creazione del workflow di registrazione
        DoctorRegistrationWorkflow::create([
            'doctor_id' => $doctor->id,
            'current_step' => 'personal-info',
            'status' => 'pending',
            'started_at' => now(),
            'last_interaction_at' => now(),
            'session_id' => session()->getId(),
        ]);
        // Invio email di conferma
        $this->sendConfirmationEmail($doctor);
        return $doctor;
        /*
        if ($existingUser) {
            // Se l'utente esiste già, verifica se è già un dottore
            if ($existingUser->type === 'doctor') {
                // L'utente è già registrato come dottore
                throw new \Illuminate\Validation\ValidationException(
                    validator([], [])->errors()->add('email', 'Un dottore con questa email è già registrato.')
                );
            }

            // Utilizziamo una transazione per garantire l'integrità dei dati
            return DB::transaction(function () use ($existingUser, $data) {
                // Se l'utente esiste ma non è un dottore, aggiorna i suoi dati
                $existingUser->update([
                    'type' => 'doctor',
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'certifications' => $data['certifications'] ?? null,
                ]);

                // Ricarica l'utente per ottenere l'istanza di Doctor usando il pattern STI
                // Nota: Con Single Table Inheritance, l'utente è direttamente il dottore
                // dopo aver cambiato il type a 'doctor'
                $doctor = Doctor::find($existingUser->id);

                if ($doctor) {
                    return $doctor;
                }

                // Se non esiste un record Doctor, crealo
                $status = $this->getDoctorRegistrationStatus();
                $doctorData = array_merge(
                    $data,
                    ['user_id' => $existingUser->id, 'status' => $status]
                );
                unset($doctorData['email'], $doctorData['password'], $doctorData['first_name'], $doctorData['last_name']);

                return Doctor::create($doctorData);
            });
        } else {
            // Se l'utente non esiste, crealo utilizzando una transazione
            return DB::transaction(function () use ($data) {
                $userData = [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'type' => 'doctor',
                ];

                $user = User::create($userData);

                $status = $this->getDoctorRegistrationStatus();
                $doctorData = array_merge(
                    $data,
                    ['user_id' => $user->id, 'status' => $status]
                );
                unset($doctorData['first_name'], $doctorData['last_name'], $doctorData['email'], $doctorData['password']);

                $doctor = Doctor::create($doctorData);

                // Creazione del workflow di registrazione
                DoctorRegistrationWorkflow::create([
                    'doctor_id' => $doctor->id,
                    'current_step' => 'personal-info',
                    'status' => 'pending',
                    'started_at' => now(),
                    'last_interaction_at' => now(),
                    'session_id' => session()->getId(),
                ]);

                // Invio email di conferma
                $this->sendConfirmationEmail($doctor);

                return $doctor;
            });
        }
        */
    }

>>>>>>> 54f4fa16 (.)
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
        if (!class_exists(DoctorRegistrationStatus::class)) {
>>>>>>> 54f4fa16 (.)
            return 'pending';
        }

        try {
<<<<<<< HEAD
            $cases = DoctorRegistrationStatusEnum::cases();
=======
            $cases = DoctorRegistrationStatus::cases();
>>>>>>> 54f4fa16 (.)
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
            'type_class' => get_class($doctor->type ?? new \stdClass()),
            'is_doctor' => $doctor->isDoctor(),
        ]);

=======
>>>>>>> 54f4fa16 (.)
        $email = new SpatieEmail($doctor, 'doctor_registration_pending');
        Mail::to($doctor->email)
            ->locale(app()->getLocale())
            ->send($email);
    }
}
