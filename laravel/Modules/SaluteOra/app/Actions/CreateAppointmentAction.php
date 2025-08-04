<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions;

use Illuminate\Support\Facades\DB;
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Dentist;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Treatment;
use Spatie\QueueableAction\QueueableAction;
use Safe\DateTime;


class CreateAppointmentAction
{
    use QueueableAction;
    
    /**
     * Crea un nuovo appuntamento.
     *
     * @param array<string, mixed> $data
     * @return Appointment
     */
    public function execute(array $data): Appointment
    {
        return DB::transaction(function () use ($data) {
            // Validazione dati essenziali
            if (!isset($data['patient_id'], $data['dentist_id'], $data['start_time'])) {
                throw new \InvalidArgumentException('Dati appuntamento incompleti');
            }
            
            // Verifica esistenza relazioni
            $patient = Patient::findOrFail($data['patient_id']);
            $dentist = Dentist::findOrFail($data['dentist_id']);
            
            if (isset($data['treatment_id'])) {
                $treatment = Treatment::findOrFail($data['treatment_id']);
                
                // Se c'è un trattamento, impostiamo una durata predefinita
                if (!isset($data['end_time']) && isset($treatment->duration_minutes)) {
<<<<<<< HEAD
<<<<<<< HEAD
                    // Ensure start_time is a valid datetime string
                    $startTimeStr = is_string($data['start_time']) ? $data['start_time'] : '';
<<<<<<< HEAD
                    $startTime = new \DateTime($startTimeStr);
=======
                    $startTime = new \DateTime($data['start_time']);
>>>>>>> 54f4fa16 (.)
=======
                    // Ensure start_time is a valid datetime string
                    $startTimeStr = is_string($data['start_time']) ? $data['start_time'] : '';
                    $startTime = new \DateTime($startTimeStr);
>>>>>>> 8e4d163b (phpstan)
=======
                    $startTime = new DateTime($startTimeStr);
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
                    $endTime = (clone $startTime)->modify("+{$treatment->duration_minutes} minutes");
                    $data['end_time'] = $endTime->format('Y-m-d H:i:s');
                }
            }
            
            // Crea appuntamento
            $appointment = new Appointment();
            $appointment->fill($data);
            $appointment->save();
            
            // Controllo idoneità
            if (isset($data['treatment_id']) && isset($data['check_eligibility']) && $data['check_eligibility']) {
                $this->checkEligibility($appointment);
            }
            
            return $appointment;
        });
    }
    
    /**
     * Verifica l'idoneità del paziente per il trattamento.
     *
     * @param Appointment $appointment
     * @return void
     */
    private function checkEligibility(Appointment $appointment): void
    {
        // Questo metodo conterrebbe la logica di verifica dell'idoneità
        // In questo esempio semplice impostiamo solo un valore predefinito
        $appointment->eligibility_confirmed = true;
        $appointment->save();
    }
}
