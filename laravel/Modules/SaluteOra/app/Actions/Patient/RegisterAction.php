<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions\Patient;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Contracts\UserContract;
use Modules\SaluteOra\States\User\Pending;
use Illuminate\Support\Facades\Notification;
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Notify\Notifications\RecordNotification;

=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\SaluteOra\Models\Patient;
<<<<<<< HEAD
use Modules\SaluteOra\Models\User;
>>>>>>> 54f4fa16 (.)
=======
use Modules\SaluteOra\States\User\Pending;
use Illuminate\Support\Str;
>>>>>>> 72f588e8 (fileupload to spatiefileupload + final button wizard)

class RegisterAction
{
    /**
     * Esegue l'azione di registrazione del paziente.
     *
     * @param array<string, mixed> $data
     * @return Patient
     */
<<<<<<< HEAD
    public function execute(UserContract $record,array $data): Patient
    {
        
        
        
            // Creazione del paziente usando STI
            if(isset($data['studio'])){
                unset($data['studio']);
            }
            if(!isset($data['name']) && isset($data['email']) && is_string($data['email'])){
                $data['name']=Str::of($data['email'])->before('@')->append('-')->append(Str::random(3))->toString();
            }
            //$patient = Patient::create($data);
            if(isset($data['id'])){
                $patient = $record;
                $patient->update($data);
            }else{
                $patient= new Patient();
                $patient->fill($data);
                $patient->save();
                //$doctor = Doctor::create($data);
            }

            //-------------------------------------------------
             //*
            $attachments = Patient::getAttachments();
            /*
            $data_attachments = [];
            foreach ($attachments as $attachment) {
                    $media=$patient->addMediaFromDisk($data[$attachment],'local')
                        ->toMediaCollection($attachment);
                    $data_attachments[$attachment]=$media->getPathRelativeToRoot();

            }
            $patient->update($data_attachments);
            */
            app(SaveAttachmentsAction::class)->execute($patient,$attachments,$data);
            //*/
            //-------------------------------------------------
            if(!method_exists($patient,'consents')){
                throw new \Exception('Method consents not found');
            }
            // Gestione delle preferenze
            if (isset($data['privacy_acceptance'])) {
                $patient->consents()->create([
                    'type' => 'privacy',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }

            if (isset($data['newsletter'])) {
                $patient->consents()->create([
                    'type' => 'newsletter',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }
            /** @phpstan-ignore argument.type, argument.type */
            $mail_slug=Str::of($data['type'])->append('-')->append($data['state'])->slug()->toString();
           //$mail_slug=Str::of($patient->type->value)->append('-')->append($patient->state::$name)->slug()->toString();
            //Assert::isInstanceOf($patient,Patient::class);
            
            //** @phpstan-ignore argument.type */
            $notify=new RecordNotification($patient,$mail_slug);
            Notification::route('mail', $data['email'])
            //->locale('it')
            ->notify($notify);
            //** @phpstan-ignore return.type */
            return $patient;
        
=======
    public function execute(array $data): Patient
    {
        return DB::transaction(function () use ($data) {
            // Creazione del paziente usando STI
            $patient = Patient::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make(Str::random(12)), // Password temporanea
                'type' => 'patient',
                'state' => Pending::class,
                'date_of_birth' => $data['date_of_birth'] ?? null,
                'gender' => $data['gender'] ?? null,
                'address' => $data['address'] ?? null,
                'phone' => $data['phone'] ?? null,
                'last_dental_visit' => $data['last_dental_visit'] ?? null,
                'dental_problems' => $data['dental_problems'] ?? null,
            ]);

            // Gestione dei documenti
            if (isset($data['health_card'])) {
                $patient->addMedia($data['health_card'])->toMediaCollection('tessera_sanitaria');
            }
            if (isset($data['identity_document'])) {
                $patient->addMedia($data['identity_document'])->toMediaCollection('documento_identita');
            }
            if (isset($data['isee_certificate'])) {
                $patient->addMedia($data['isee_certificate'])->toMediaCollection('certificazione_isee');
            }
            if (isset($data['pregnancy_certificate'])) {
                $patient->addMedia($data['pregnancy_certificate'])->toMediaCollection('certificato_gravidanza');
            }

            // Gestione delle preferenze
            if (isset($data['privacy_acceptance'])) {
                $patient->consents()->create([
                    'type' => 'privacy',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }

            if (isset($data['newsletter'])) {
                $patient->consents()->create([
                    'type' => 'newsletter',
                    'accepted' => true,
                    'accepted_at' => now(),
                ]);
            }

            return $patient;
        });
>>>>>>> 54f4fa16 (.)
    }
}
