<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions;

use Illuminate\Support\Facades\Mail;
use Modules\SaluteOra\Models\DoctorRegistrationWorkflow;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Mail\DoctorRegistrationModerated;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use Modules\SaluteOra\Enums\DoctorRegistrationStatusEnum;
=======
>>>>>>> 54f4fa16 (.)

class ProcessDoctorModerationAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Elabora la moderazione di un dottore.
     *
     * @param DoctorRegistrationWorkflow $workflow
     * @param bool $approved Se la moderazione è stata approvata
     * @param int $moderatorId ID dell'utente moderatore
     * @param string|null $notes Note di moderazione (opzionali)
=======
     * Processa la moderazione di un medico.
     *
     * @param DoctorRegistrationWorkflow $workflow
     * @param bool $approved Se la moderazione è stata approvata
     * @param string|null $notes Note di moderazione (opzionali)
     * @param int $moderatorId ID dell'utente moderatore
>>>>>>> 54f4fa16 (.)
     * 
     * @return bool
     */
    public function execute(
        DoctorRegistrationWorkflow $workflow,
        bool $approved,
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
                    'status' => $approved ? DoctorRegistrationStatusEnum::MODERATION_APPROVED : DoctorRegistrationStatusEnum::MODERATION_REJECTED,
=======
                    'approved' => $approved,
>>>>>>> 54f4fa16 (.)
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