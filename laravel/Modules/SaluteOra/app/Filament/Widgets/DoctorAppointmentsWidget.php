<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Filament\Actions\Action;
use Filament\Forms\Components;
use Webmozart\Assert\Assert;
use Spatie\ModelStates\State;
use Filament\Facades\Filament;
use Illuminate\Support\HtmlString;
use Modules\SaluteOra\Models\Report;
use Illuminate\Support\Facades\Cache;
use Filament\Support\Enums\ActionSize;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Contracts\StateContract;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Models\Appointment;
use Filament\Actions\Contracts\HasActions;
use Illuminate\Database\Eloquent\Collection;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\SaluteOra\States\Appointment\Pending;
use Modules\SaluteOra\States\Appointment\Rejected;
use Filament\Actions\Concerns\InteractsWithActions;
use Modules\SaluteOra\States\Appointment\Confirmed;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Modules\SaluteOra\States\Appointment\ReportPending;
use Modules\SaluteOra\Filament\Resources\ReportResource;
use Modules\SaluteOra\States\Appointment\AppointmentState;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Modules\SaluteOra\States\Appointment as StateAppointment;
use Illuminate\Support\Facades\Gate;
=======
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
=======
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
use Livewire\Attributes\On;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Cache;
use Filament\Support\Enums\ActionSize;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Models\Appointment;
use Filament\Actions\Contracts\HasActions;
use Illuminate\Database\Eloquent\Collection;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\SaluteOra\States\Appointment\Pending;
use Modules\SaluteOra\States\Appointment\Rejected;
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseWidget;
>>>>>>> 2df8b507 (bozza widget doctor appointments)
=======
use Filament\Actions\Concerns\InteractsWithActions;
use Modules\SaluteOra\States\Appointment\Confirmed;
<<<<<<< HEAD
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
=======
use Modules\SaluteOra\States\Appointment\AppointmentState;
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)

/**
 * Widget per gestire gli appuntamenti del dottore.
 * 
 * Mostra gli appuntamenti in stato pending per il dottore loggato
 * con azioni per confermare o rifiutare gli appuntamenti.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class DoctorAppointmentsWidget extends XotBaseWidget implements HasActions
{
    use InteractsWithActions;
<<<<<<< HEAD
    //public string $state;
    public string $doctor_id;
    public array $states = [];
    public array $all_states = [];

    /**
     * Vista del widget.
     */
    protected static string $view = 'pub_theme::filament.widgets.doctor-appointments-widget';
=======
class DoctorAppointmentsWidget extends XotBaseWidget
=======
class DoctorAppointmentsWidget extends XotBaseWidget implements HasActions
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
{
    use InteractsWithActions;
=======
    public string $state;
    public string $doctor_id;
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
    /**
     * Vista del widget.
     */
<<<<<<< HEAD
    protected static string $view = 'saluteora::filament.widgets.doctor-appointments-widget';
>>>>>>> 2df8b507 (bozza widget doctor appointments)
=======
    protected static string $view = 'pub_theme::filament.widgets.doctor-appointments-widget';
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)

    /**
     * Schema del form per il widget.
     * 
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        // Questo widget non ha form, restituisce array vuoto
        return [];
    }

    /**
     * Ordinamento del widget.
     */
    protected static ?int $sort = 2;

    /**
     * Altezza massima del widget.
     */
    protected static ?string $maxHeight = '400px';

    /**
     * Appuntamenti caricati.
     *
     * @var Collection<int, Appointment>
     */
    public Collection $appointments;

    /**
     * Monta il widget.
     */
    public function mount(): void
    {
<<<<<<< HEAD
        $all_states=AppointmentState::getStateMapping()->toArray();
        $this->all_states=$all_states;
        //$this->states=['delete']; //testing
=======
>>>>>>> 2df8b507 (bozza widget doctor appointments)
        $this->loadAppointments();
    }

    /**
     * Controlla se l'utente può visualizzare il widget.
     */
    public static function canView(): bool
    {
        $user = auth()->user();

        if (!$user) {
            return false;
        }

        // Solo i dottori possono vedere questo widget
        if ($user->type !== UserTypeEnum::DOCTOR) {
            return false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
       
=======
        // Verificare tenancy per il dottore
        $tenant = Filament::getTenant();
        if (!$tenant) {
            return false;
        }
>>>>>>> 2df8b507 (bozza widget doctor appointments)
=======
       
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)

        return true;
    }

    /**
     * Carica gli appuntamenti pending per il dottore corrente.
     */
    private function loadAppointments(): void
    {
<<<<<<< HEAD
        
        $this->invalidateCache();
        $cacheKey = $this->getCacheKey();
        
        /** @phpstan-ignore assign.propertyType */        
        $this->appointments = Cache::remember($cacheKey, 300, function ()  {
            return Appointment::query()
                ->with(['patient', 'doctor', 'studio'])
                ->where('doctor_id', $this->doctor_id)
                //->whereState('state', Pending::class)
                ->whereIn('state', $this->states)
                ->orderBy('starts_at', 'asc')
                ->limit(100)
=======
        $user = auth()->user();

        $cacheKey = $this->getCacheKey();
        
        $this->appointments = Cache::remember($cacheKey, 300, function () use ($user) {
            return Appointment::query()
                ->with(['patient', 'doctor', 'studio'])
                //->where('doctor_id', $user->id)
                //->whereState('state', Pending::class)
                ->where('state', $this->state)
                ->orderBy('starts_at', 'asc')
                ->limit(10)
>>>>>>> 2df8b507 (bozza widget doctor appointments)
                ->get();
        });
    }

    /**
     * Genera la chiave di cache per gli appuntamenti.
     */
    private function getCacheKey(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
       
        $key= sprintf(
            'doctor_appointments_%s_%s',
            $this->doctor_id ?? 0,
            implode('_',$this->states),
        );
        return $key;
    }

    
=======
        $user = auth()->user();
        

        return sprintf(
            'doctor_appointments_%d',
            $user?->id ?? 0,
            
=======
        $user_id = auth()->id();
       
       
        $key= sprintf(
            'doctor_appointments_%s_%s',
            $user_id ?? 0,
            $this->state,
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
        );
        return $key;
    }

<<<<<<< HEAD
    /**
     * Conferma un appuntamento (transizione da Pending a Confirmed).
     */
    public function confirmAppointment(int $appointmentId): void
    {
        try {
            $appointment = $this->findAppointment($appointmentId);

            if (!$appointment || !$appointment->state->canTransitionTo(Confirmed::class)) {
                $this->dispatch('notify', [
                    'type' => 'error',
                    'message' => __('saluteora::widgets.doctor_appointments.errors.cannot_confirm'),
                ]);
                return;
            }

            $appointment->state->transitionTo(Confirmed::class);

            $this->invalidateCache();
            $this->loadAppointments();

            $this->dispatch('notify', [
                'type' => 'success',
                'message' => __('saluteora::widgets.doctor_appointments.messages.appointment_confirmed'),
            ]);

        } catch (\Exception $e) {
            logger()->error('Error confirming appointment', [
                'appointment_id' => $appointmentId,
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
            ]);

            $this->dispatch('notify', [
                'type' => 'error',
                'message' => __('saluteora::widgets.doctor_appointments.errors.confirm_failed'),
            ]);
        }
    }

    /**
     * Rifiuta un appuntamento (transizione da Pending a Rejected).
     */
    public function rejectAppointment(int $appointmentId): void
    {
        try {
            $appointment = $this->findAppointment($appointmentId);

            if (!$appointment || !$appointment->state->canTransitionTo(Rejected::class)) {
                $this->dispatch('notify', [
                    'type' => 'error',
                    'message' => __('saluteora::widgets.doctor_appointments.errors.cannot_reject'),
                ]);
                return;
            }

            $appointment->state->transitionTo(Rejected::class);

            $this->invalidateCache();
            $this->loadAppointments();

            $this->dispatch('notify', [
                'type' => 'success',
                'message' => __('saluteora::widgets.doctor_appointments.messages.appointment_rejected'),
            ]);

        } catch (\Exception $e) {
            logger()->error('Error rejecting appointment', [
                'appointment_id' => $appointmentId,
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
            ]);

            $this->dispatch('notify', [
                'type' => 'error',
                'message' => __('saluteora::widgets.doctor_appointments.errors.reject_failed'),
            ]);
        }
    }
>>>>>>> 2df8b507 (bozza widget doctor appointments)
=======
    
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)

    /**
     * Trova un appuntamento per ID verificando che appartenga al dottore corrente.
     */
    private function findAppointment(int $appointmentId): ?Appointment
    {
        return $this->appointments->firstWhere('id', $appointmentId);
    }

    /**
     * Invalida la cache degli appuntamenti.
     */
    private function invalidateCache(): void
    {
        Cache::forget($this->getCacheKey());
    }

    /**
     * Refresh del widget quando ci sono cambiamenti.
     */
    #[On('appointment-updated')]
    public function refresh(): void
    {
        $this->invalidateCache();
        $this->loadAppointments();
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)



    /**
     * Azioni disponibili per il widget.
     * 
     * @return array<Action>
     */
    protected function getActions(): array
    {
        return [
<<<<<<< HEAD
            //
        ];
    }

    

    public function canTransitionTo(int $appointmentId,string $stateClass): bool
    {
        $appointment = Appointment::firstWhere('id',$appointmentId);
        if(null == $appointment){
            return false;
        }
        $startState=$appointment->state;
        if(!$startState->canTransitionTo($stateClass)){
            return false;
        }
        $policy=Str::of(class_basename($stateClass))->camel()->toString();
        if(!Gate::allows($policy, $appointment)){
            return false;
        }
        

        return true;
    }

   

   public function transitionAction(): Action
   {
        return Action::make('transition')
            ->iconButton()
            //->button()
            ->size(ActionSize::ExtraLarge)
            ->tooltip(fn($arguments,$data)=>$this->getState(arguments:$arguments)->label())
            ->icon(fn($arguments,$data)=>$this->getState(arguments:$arguments)->icon())
            ->color(fn($arguments,$data)=>$this->getState(arguments:$arguments)->color())
            ->requiresConfirmation()
            ->modalHeading(fn($arguments,$data)=>$this->getState(arguments:$arguments)->modalHeading())
            ->modalDescription(fn($arguments,$data)=>$this->getState(arguments:$arguments)->modalDescription())
            ->form(fn($arguments,$data)=>$this->getState(arguments:$arguments)->modalFormSchema())
            ->fillForm(fn($arguments,$data)=>$this->getState(arguments:$arguments)->modalFillForm($arguments,$data))
            ->action(function($arguments,$data){
                $this->getState(arguments:$arguments)->modalAction($arguments,$data);
                $this->invalidateCache();
                $this->loadAppointments();
                $this->dispatch('notify', [
                    'type' => 'success',
                    'message' => __('saluteora::widgets.doctor_appointments.messages.appointment_confirmed'),
                ]);
            })
            //->visible(fn($arguments,$data)=>$this->getState(arguments:$arguments)->canTransitionTo($arguments['stateClass']))
            ;
   }

   public function getState(array $arguments): AppointmentState
   {
        $cacheKey=sprintf('state_%s',implode('_',$arguments));
        $cacheKey=(Str::of($cacheKey)->slug()->toString());
            $state=Cache::remember($cacheKey, 300, function () use($arguments)  {
            $stateClass=Arr::get($arguments,'stateClass');
            $appointmentId=Arr::get($arguments,'appointment');
            $appointment=Appointment::firstWhere('id',$appointmentId);
            $state=new $stateClass($appointment);

            return $state;
        });
        Assert::isInstanceOf($state,AppointmentState::class);
        return $state;
   }
    
   

   

    public function infoAction(): Action
    {
    return Action::make('info')
        ->iconButton()
        //->label('Mostra Info')
        ->size(ActionSize::ExtraLarge)
        ->icon('heroicon-o-information-circle')
        ->color('info')
        ->modalHeading('Dettagli appuntamento')
        ->modalContent(function (array $data,$arguments) {
            $appointmentId = $arguments['appointment'];
            $appointment = Appointment::firstWhere('id',$appointmentId);
            $view='pub_theme::appointment.modal_content';
            $view_params=[
                'appointment' => $appointment,
            ];
            return view($view,$view_params);
            //return  new HtmlString($arguments['appointment']);
        })
        ->modalSubmitAction(false) // ⛔️ nasconde il bottone di conferma
        ->modalCancelActionLabel('Chiudi'); // ✅ personalizzi il bottone di chiusura
    }
=======
>>>>>>> 2df8b507 (bozza widget doctor appointments)
=======
            $this->deleteAction(),
        ];
    }

    /**
     * Azione per eliminare un appuntamento.
     */
    public function deleteAction(): Action
    {
        return Action::make('delete')
            ->label('Elimina')
            ->icon('heroicon-o-trash')
            ->color('danger')
            ->requiresConfirmation()
            ->modalHeading('Elimina Appuntamento')
            ->modalDescription('Sei sicuro di voler eliminare questo appuntamento?')
            ->action(function (array $data) {
                // Per ora implementazione di debug
                $this->dispatch('notify', [
                    'type' => 'info',
                    'message' => 'Funzionalità eliminazione in sviluppo',
                ]);
            });
    }

   public function getActionByState(string $stateClass,string $name): Action
   {
    $appointment = new Appointment(); // senza salvarlo nel db
    $state = new $stateClass($appointment);
    //canTransitionTo
    /*
    dddx([
        'transitionableStates'=>$state->transitionableStates(),
        'get_class_methods'=>get_class_methods($state),
        //'a'=>Appointment::resolveStateClass('state', 'pending'),
        'b'=>AppointmentState::getStateMapping()->get($this->state),
    ]);
    */
    $startStateClass=AppointmentState::getStateMapping()->get($this->state);
    $startState=new $startStateClass($appointment);
    //dddx();
    
    
   
    return Action::make($name)
        ->iconButton()
        //->button()
        ->size(ActionSize::ExtraLarge)
        ->tooltip($state->label())
        ->icon($state->icon())
        ->color($state->color())
        ->requiresConfirmation()
        ->modalHeading($state->modalHeading())
        ->modalDescription($state->modalDescription())
        ->action(function (array $data,$arguments) use($stateClass){
            $appointmentId = $arguments['appointment'];
            $appointment = Appointment::firstWhere('id',$appointmentId);
            $appointment->state->transitionTo($stateClass);
            // Per ora implementazione di debug
            //$this->dispatch('notify', [
            //    'type' => 'info',
            //    'message' => 'Funzionalità eliminazione in sviluppo',
            //]);
            $this->invalidateCache();
            $this->loadAppointments();

            $this->dispatch('notify', [
                'type' => 'success',
                'message' => __('saluteora::widgets.doctor_appointments.messages.appointment_confirmed'),
            ]);
        })
        ->visible($startState->canTransitionTo($stateClass))
        ;
        
            
   }


    public function confirmAction(): Action
    {
        return $this->getActionByState(Confirmed::class,__FUNCTION__);
       
    }

    public function rejectAction(): Action
    {
        return $this->getActionByState(Rejected::class,__FUNCTION__);
       
    }
<<<<<<< HEAD
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
=======

    public function infoAction(): Action
    {
    return Action::make('info')
        ->iconButton()
        //->label('Mostra Info')
        ->size(ActionSize::ExtraLarge)
        ->icon('heroicon-o-information-circle')
        ->color('info')
        ->modalHeading('Dettagli appuntamento')
        ->modalContent(function (array $data,$arguments) {
            $appointmentId = $arguments['appointment'];
            $appointment = Appointment::firstWhere('id',$appointmentId);
            $view='pub_theme::appointment.card';
            $view_params=[
                'appointment' => $appointment,
            ];
            return view($view,$view_params);
            //return  new HtmlString($arguments['appointment']);
        })
        ->modalSubmitAction(false) // ⛔️ nasconde il bottone di conferma
        ->modalCancelActionLabel('Chiudi'); // ✅ personalizzi il bottone di chiusura
    }
>>>>>>> a123f7ba (✨ (appointment states): implement new appointment state transitions and update documentation to reflect changes)
}
