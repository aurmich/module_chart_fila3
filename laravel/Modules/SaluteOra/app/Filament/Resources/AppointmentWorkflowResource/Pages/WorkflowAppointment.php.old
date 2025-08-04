<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions;
=======
>>>>>>> 54f4fa16 (.)
=======
use Filament\Actions;
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
use Filament\Forms;
use Filament\Forms\Components\Component;
use Filament\Forms\Form;
use Filament\Pages\Concerns\InteractsWithFormActions;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Exceptions\Halt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
=======
use Filament\Resources\Pages\Page;
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
use Filament\Support\Exceptions\Halt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Contracts\View\View;
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
use Livewire\Attributes\Computed;
use Modules\SaluteOra\Actions\FinalizeAppointmentWorkflowAction;
use Modules\SaluteOra\Actions\UpdateAppointmentWorkflowStepAction;
use Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource;
use Modules\SaluteOra\Models\AppointmentWorkflow;
use Modules\SaluteOra\Models\Dentist;
use Modules\SaluteOra\Models\Patient;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseResourcePage;

class WorkflowAppointment extends XotBaseResourcePage
=======

class WorkflowAppointment extends Page
>>>>>>> 54f4fa16 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseResourcePage;

class WorkflowAppointment extends XotBaseResourcePage
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
{
    use InteractsWithFormActions;
    
    protected static string $resource = AppointmentWorkflowResource::class;
<<<<<<< HEAD
<<<<<<< HEAD
    
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    
    /**
     * Dati del form.
     */
    public array $data = [];
    
    /**
     * Nome del passo corrente.
     */
    protected string $currentStep = 'patient_info';
=======
    protected static ?string $view = null; // Utilizziamo la vista predefinita di Filament
    protected static ?string $title = 'Workflow Prenotazione Appuntamento';
=======
    
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    
    /**
     * Dati del form.
     */
    public array $data = [];
    
    /**
     * Nome del passo corrente.
     */
<<<<<<< HEAD
    public string $currentStep;
>>>>>>> 54f4fa16 (.)
=======
    protected string $currentStep = 'patient_info';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    
    /**
     * Elenco di tutti i passi disponibili.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    protected array $steps = [];
    
    /**
     * Il record associato alla pagina.
     *
     * @var Model|int|string|null
     */
    public Model|int|string|null $record;
<<<<<<< HEAD
=======
    protected array $steps;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    
    /**
     * Hook chiamato all'inizializzazione del componente.
     */
    public function mount(int|string $record): void
    {
        $this->record = AppointmentWorkflow::findOrFail($record);
        
        // Ottiene i dati del workflow
        $this->steps = AppointmentWorkflow::getSteps();
        $this->currentStep = $this->record->current_step;
        
        // Carica i dati del passo corrente, se esistono
        $stepData = $this->record->step_data ?? [];
        $this->data = $stepData[$this->currentStep] ?? [];
    }
    
    /**
     * Hook chiamato prima del rendering.
     */
    protected function beforeValidate(): void
    {
        // Controlla se il workflow è già completato o cancellato
        if ($this->record->isCompleted() || $this->record->isCancelled()) {
            $this->notify('danger', 'Questo workflow è già completato o cancellato.');
            $this->redirect(static::getResource()::getUrl('view', ['record' => $this->record->id]));
        }
    }
    
    /**
     * Ottiene il form schema in base al passo corrente.
     */
    public function form(Form $form): Form
    {
        return $form->schema($this->getStepFormSchema())
            ->statePath('data');
    }
    
    /**
     * Elabora il form quando viene inviato.
     */
    public function submit(): void
    {
        try {
            // Valida i dati
            $this->form->validate();
            
            // Salva i dati del passo
            $this->saveCurrentStep();
            
            // Se è l'ultimo passo, finalizza il workflow
            if ($this->currentStep === 'confirmation') {
                $this->finalizeWorkflow();
                return;
            }
            
            // Passa al passo successivo
            $this->goToNextStep();
            
            $this->notify('success', 'Passo completato con successo');
        } catch (Halt $exception) {
            // La validation è fallita
            return;
        } catch (\Exception $e) {
            // Errore generico
            $this->notify('danger', 'Si è verificato un errore: ' . $e->getMessage());
        }
    }
    
    /**
     * Salva i dati del passo corrente e aggiorna il workflow.
     */
    protected function saveCurrentStep(): void
    {
        $workflowData = app(UpdateAppointmentWorkflowStepAction::class)->execute(
            $this->record,
            $this->currentStep,
            $this->data,
            false // Non passare automaticamente al passo successivo
        );
        
        // Refresh del record
        $this->record = $workflowData->fresh();
    }
    
    /**
     * Passa al passo successivo del workflow.
     */
    protected function goToNextStep(): void
    {
        $steps = array_keys($this->steps);
        $currentIndex = array_search($this->currentStep, $steps, true);
        
        if ($currentIndex !== false && $currentIndex < count($steps) - 1) {
            $this->currentStep = $steps[$currentIndex + 1];
            
            // Aggiorna il passo corrente nel record
            $this->record->current_step = $this->currentStep;
            $this->record->save();
            
            // Carica i dati del nuovo passo, se esistono
            $stepData = $this->record->step_data ?? [];
            $this->data = $stepData[$this->currentStep] ?? [];
            
            // Reset del form
            $this->form->fill($this->data);
        }
    }
    
    /**
     * Finalizza il workflow creando l'appuntamento.
     */
    protected function finalizeWorkflow(): void
    {
        // Salva i dati del passo di conferma
        $this->saveCurrentStep();
        
        try {
            // Finalizza il workflow con l'action di Spatie QueueableAction
            $appointment = app(FinalizeAppointmentWorkflowAction::class)->execute(
                $this->record,
                true // Invia notifiche
            );
            
            $this->notify('success', 'Appuntamento creato con successo');
            
            // Redirect alla pagina di visualizzazione dell'appuntamento
            $this->redirect(static::getResource()::getUrl('view', ['record' => $this->record->id]));
        } catch (\Exception $e) {
            $this->notify('danger', 'Errore nella creazione dell\'appuntamento: ' . $e->getMessage());
        }
    }
    
    /**
     * Ottiene lo schema del form in base al passo corrente.
     *
     * @return array<Component>
     */
    #[Computed]
    protected function getStepFormSchema(): array
    {
        $currentStepIndex = $this->getCurrentStepIndex();
        
        return match($this->currentStep) {
            'patient_info' => \Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Forms\WorkflowForms::getPatientInfoStepSchema(
                $this->record, 
                $currentStepIndex, 
                $this->steps
            ),
            'dentist_selection' => \Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Forms\WorkflowForms::getDentistSelectionStepSchema(
                $this->record, 
                $currentStepIndex, 
                $this->steps
            ),
            'date_selection' => \Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Forms\WorkflowForms::getDateSelectionStepSchema(
                $this->record, 
                $currentStepIndex, 
                $this->steps
            ),
            'treatment_definition' => \Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Forms\WorkflowForms::getTreatmentDefinitionStepSchema(
                $this->record, 
                $currentStepIndex, 
                $this->steps
            ),
            'confirmation' => \Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Forms\WorkflowForms::getConfirmationStepSchema(
                $this->record, 
                $currentStepIndex, 
                $this->steps
            ),
            default => [],
        };
    }
    
    // I metodi getPatientInfoStepSchema, getDentistSelectionStepSchema, getDateSelectionStepSchema,
    // getTreatmentDefinitionStepSchema e getConfirmationStepSchema sono stati spostati nella classe
    // \Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Forms\WorkflowForms
    // per migliorare la separazione delle responsabilità e garantire l'uso esclusivo di componenti Filament.
    
    /**
     * Ottiene l'indice del passo corrente.
     */
    #[Computed]
    public function getCurrentStepIndex(): int
    {
        $steps = array_keys($this->steps);
        return array_search($this->currentStep, $steps) !== false ? array_search($this->currentStep, $steps) : 0;
    }
    
    /**
     * Ottiene la percentuale di completamento del workflow.
     */
    #[Computed]
    public function getCompletionPercentage(): int
    {
        $steps = array_keys($this->steps);
        $currentIndex = $this->getCurrentStepIndex();
        $totalSteps = count($steps);
        
        return $totalSteps > 0 ? intval(($currentIndex / $totalSteps) * 100) : 0;
    }
    
    /**
     * Controlla se un determinato passo è completato.
     */
    public function isStepCompleted(string $step): bool
    {
        return $this->record->isStepCompleted($step);
    }
    
    /**
     * Ottiene le azioni del form.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFormActions(): array
=======
    protected function getFormActions(): array
>>>>>>> 54f4fa16 (.)
=======
    public function getFormActions(): array
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    {
        return [
            $this->getSubmitFormAction(),
        ];
    }
    
    /**
     * Ottiene l'azione di invio del form.
     */
    protected function getSubmitFormAction(): \Filament\Forms\Components\Actions\Action
    {
        return \Filament\Forms\Components\Actions\Action::make('submit')
            ->label(fn () => $this->currentStep === 'confirmation' ? 'Conferma Prenotazione' : 'Avanti')
            ->submit('submit');
    }
    
    /**
     * Ottiene i bottoni di navigazione del form.
<<<<<<< HEAD
<<<<<<< HEAD
     * 
     * @return string L'allineamento delle azioni del form
     */
    public function getFormActionsAlignment(): string
    {
        return \Filament\Support\Enums\Alignment::Center->value;
=======
=======
     * 
     * @return string L'allineamento delle azioni del form
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
     */
    public function getFormActionsAlignment(): string
    {
<<<<<<< HEAD
        return \Filament\Support\Enums\Alignment::Center;
>>>>>>> 54f4fa16 (.)
=======
        return \Filament\Support\Enums\Alignment::Center->value;
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    }
}
