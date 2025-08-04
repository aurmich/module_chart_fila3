<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions;

use Illuminate\Support\Facades\Mail;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Mail\DoctorRegistrationModerated;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Enums\DoctorRegistrationStatusEnum;
=======
>>>>>>> 54f4fa16 (.)
=======
use Modules\SaluteOra\Enums\DoctorRegistrationStatusEnum;
>>>>>>> 8e4d163b (phpstan)

class ProcessDoctorModerationAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Elabora la moderazione di un dottore.
     *
     * @param DoctorRegistrationWorkflow $workflow
     * @param bool $approved Se la moderazione è stata approvata
     * @param int $moderatorId ID dell'utente moderatore
     * @param string|null $notes Note di moderazione (opzionali)
=======
     * Processa la moderazione di un medico.
=======
     * Elabora la moderazione di un dottore.
>>>>>>> 8e4d163b (phpstan)
     *
     * @param DoctorRegistrationWorkflow $workflow
     * @param bool $approved Se la moderazione è stata approvata
     * @param int $moderatorId ID dell'utente moderatore
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
     * @param string|null $notes Note di moderazione (opzionali)
>>>>>>> 8e4d163b (phpstan)
     * 
     * @return bool
     */
    public function execute(
        DoctorRegistrationWorkflow $workflow,
        bool $approved,
<<<<<<< HEAD
<<<<<<< HEAD
        int $moderatorId,
        ?string $notes = null
    ): bool {
        try {
            // Aggiorna lo stato del workflow
            $workflow->status = $approved ? DoctorRegistrationStatusEnum::MODERATION_APPROVED : DoctorRegistrationStatusEnum::MODERATION_REJECTED;
=======
        ?string $notes = null,
        int $moderatorId
    ): bool {
        try {
            // Aggiorna lo stato del workflow
            $workflow->status = $approved 
                ? DoctorRegistrationWorkflow::STATUS_MODERATION_APPROVED 
                : DoctorRegistrationWorkflow::STATUS_MODERATION_REJECTED;
>>>>>>> 54f4fa16 (.)
=======
        int $moderatorId,
        ?string $notes = null
    ): bool {
        try {
            // Aggiorna lo stato del workflow
            $workflow->status = $approved ? DoctorRegistrationStatusEnum::MODERATION_APPROVED : DoctorRegistrationStatusEnum::MODERATION_REJECTED;
>>>>>>> 8e4d163b (phpstan)
            
            $workflow->moderation_notes = $notes;
            $workflow->moderated_at = now();
            $workflow->moderated_by = $moderatorId;
            
            // Se approvato, genera token per proseguire e aggiorna lo step
            if ($approved) {
                $workflow->generateModerationToken();
                $workflow->current_step = 'contacts_step';
            }
            
            $workflow->save();

            // Invia email al medico
            $doctor = Doctor::find($workflow->doctor_id);
            if ($doctor && $doctor->email) {
                Mail::to($doctor->email)
                    ->queue(new DoctorRegistrationModerated($workflow));
            }

            // Logga l'azione
            activity()
                ->performedOn($workflow)
                ->causedBy($moderatorId)
                ->withProperties([
<<<<<<< HEAD
<<<<<<< HEAD
                    'status' => $approved ? DoctorRegistrationStatusEnum::MODERATION_APPROVED : DoctorRegistrationStatusEnum::MODERATION_REJECTED,
=======
                    'approved' => $approved,
>>>>>>> 54f4fa16 (.)
=======
                    'status' => $approved ? DoctorRegistrationStatusEnum::MODERATION_APPROVED : DoctorRegistrationStatusEnum::MODERATION_REJECTED,
>>>>>>> 8e4d163b (phpstan)
                    'notes' => $notes,
                ])
                ->log('Doctor registration moderated');

            return true;
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
} 