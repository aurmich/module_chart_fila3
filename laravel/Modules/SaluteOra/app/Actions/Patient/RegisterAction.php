<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions\Patient;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
>>>>>>> 86a4d226 (✨ (patient.php): add new localization keys for reorderRecords, resetFilters, and openFilters to enhance user interface)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Contracts\UserContract;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\SaluteOra\States\User\Pending;
use Illuminate\Support\Facades\Notification;
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Notify\Notifications\RecordNotification;

<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 72f588e8 (fileupload to spatiefileupload + final button wizard)
=======
=======
use Modules\SaluteOra\States\User\Pending;
>>>>>>> 86a4d226 (✨ (patient.php): add new localization keys for reorderRecords, resetFilters, and openFilters to enhance user interface)
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\RecordNotification;

>>>>>>> adac82bd (rebase)
>>>>>>> aurmich/dev

class RegisterAction
{
    /**
     * Esegue l'azione di registrazione del paziente.
     *
     * @param array<string, mixed> $data
     * @return Patient
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public function execute(UserContract $record,array $data): Patient
    {
        
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        
            // Creazione del paziente usando STI
            if(isset($data['studio'])){
                unset($data['studio']);
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
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
        
<<<<<<< HEAD
=======
=======
    public function execute(array $data): Patient
=======
    public function execute(UserContract $record,array $data): Patient
>>>>>>> 86a4d226 (✨ (patient.php): add new localization keys for reorderRecords, resetFilters, and openFilters to enhance user interface)
    {
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
        return DB::transaction(function () use ($data) {
=======
        
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
            // Creazione del paziente usando STI
            if(isset($data['studio'])){
                unset($data['studio']);
            }
=======
            if(!isset($data['name']) && isset($data['email'])){
=======
            if(!isset($data['name']) && isset($data['email']) && is_string($data['email'])){
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                $data['name']=Str::of($data['email'])->before('@')->append('-')->append(Str::random(3))->toString();
            }
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
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
            $data_attachments = [];
            foreach ($attachments as $attachment) {
                    /** @phpstan-ignore-next-line */
                    $media=$patient->addMediaFromDisk($data[$attachment],'local')
                        ->toMediaCollection($attachment);
                    $data_attachments[$attachment]=$media->getPathRelativeToRoot();

            }
            $patient->update($data_attachments);
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
            /** @phpstan-ignore-next-line */
            $mail_slug=Str::of($data['type'])->append('-')->append($data['state'])->slug()->toString();
           //$mail_slug=Str::of($patient->type->value)->append('-')->append($patient->state::$name)->slug()->toString();
            //Assert::isInstanceOf($patient,Patient::class);
            
            //** @phpstan-ignore-next-line */
            $notify=new RecordNotification($patient,$mail_slug);
            Notification::route('mail', $data['email'])
            //->locale('it')
            ->notify($notify);
            //** @phpstan-ignore-next-line */
            return $patient;
<<<<<<< HEAD
        });
>>>>>>> 54f4fa16 (.)
=======
        
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
>>>>>>> aurmich/dev
    }
}
