<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets\Patient;

use Exception;
<<<<<<< HEAD
use Carbon\Carbon;
=======
>>>>>>> aurmich/dev
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
<<<<<<< HEAD
use Illuminate\Support\Str;
use Modules\Geo\Models\Cap;
use Filament\Actions\Action;
use Filament\Widgets\Widget;
use function Safe\strtotime;
use Illuminate\Support\View;
use Webmozart\Assert\Assert;
use Modules\Geo\Models\Comune;
use Modules\Geo\Models\Region;
use Modules\Geo\Models\Locality;
use Modules\Geo\Models\Province;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Models\Doctor;
=======
use Modules\Geo\Models\Cap;
use Filament\Actions\Action;
use Filament\Widgets\Widget;
use Illuminate\Support\View;
use Modules\Geo\Models\Comune;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
>>>>>>> aurmich/dev
use Modules\SaluteOra\Models\Studio;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Session;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Support\Facade\FilamentView;
<<<<<<< HEAD
use Modules\SaluteOra\Models\Appointment;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Wizard\Step;
use Modules\SaluteOra\Models\DoctorStudio;
use Livewire\Component as LivewireComponent;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Notify\Notifications\RecordNotification;
use Modules\UI\Filament\Forms\Components\RadioCollection;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Illuminate\Support\Facades\Notification as LaravelNotification;

/**
 * --
 */
=======
use Filament\Forms\Components\Wizard\Step;
use Livewire\Component as LivewireComponent;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\UI\Filament\Forms\Components\RadioCollection;

>>>>>>> aurmich/dev
class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    /**
     * La vista del widget (richiesta da XotBaseWidget, ma sovrascritta dai form).
     */
    protected static string $view = 'pub_theme::filament.widgets.patient.find-doctor-and-appointment-widget';

<<<<<<< HEAD
    

    /**
     * Mese corrente del calendario per navigazione.
     * 
     * @var string
     */
    public string $currentCalendarMonth;

=======
    /**
     * Filtri attivi per il widget.
     *
     * @var array|null
     */
    public ?array $filters = null;

   

   
>>>>>>> aurmich/dev
    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount(): void
    {
<<<<<<< HEAD
        // ✅ Inizializza sempre con valore valido
        if (empty($this->currentCalendarMonth)) {
            $this->currentCalendarMonth = now()->format('Y-m');
        }
=======
>>>>>>> aurmich/dev
        
        $this->form->fill();
    }

    /**
<<<<<<< HEAD
     * Getter sicuro per currentCalendarMonth - garantisce sempre un valore valido.
     *
     * @return string
     */
    protected function getCurrentCalendarMonth(): string
    {
        if (empty($this->currentCalendarMonth)) {
            $this->currentCalendarMonth = now()->format('Y-m');
        }
        
        return $this->currentCalendarMonth;
    }

    /**
     * Navigazione calendario - mese precedente.
     */
    public function previousMonth(): void
    {
        $currentDate = Carbon::createFromFormat('Y-m', $this->currentCalendarMonth);
        if(!$currentDate){
            return;
        }
        $this->currentCalendarMonth = $currentDate->subMonthNoOverflow()->format('Y-m');
        
        // ✅ Refresh del form per aggiornare il calendario
        //$this->form->fill($this->form->getState());
    }

    /**
     * Navigazione calendario - mese successivo.
     */
    public function nextMonth(): void
    {
        $currentDate = Carbon::createFromFormat('Y-m', $this->currentCalendarMonth);
        if(!$currentDate){
            return;
        }
        $this->currentCalendarMonth = $currentDate->addMonthNoOverflow()->format('Y-m');
        
        // ✅ Refresh del form per aggiornare il calendario
        //$this->form->fill($this->form->getState());
    }

    /**
=======
>>>>>>> aurmich/dev
     * Get the form schema for the widget.
     *
     * @return array<int|string, mixed>
     */
    public function getFormSchema(): array
    {
        return [
            Forms\Components\Wizard::make()
<<<<<<< HEAD
<<<<<<< HEAD
                //->startOnStep($this->getStartStep())
=======
                ->startOnStep($this->getStartStep())
>>>>>>> aurmich/dev
=======
                //->startOnStep($this->getStartStep())
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
                ->steps([
                    //$this->getStepByName('test_step'),
                    $this->getStepByName('search_step')
                        ->icon('heroicon-o-map-pin'),
                    $this->getStepByName('studio_step')
                        ->icon('heroicon-o-building-office'),
                    $this->getStepByName('date_step')
                        ->icon('heroicon-o-calendar'),
<<<<<<< HEAD
                    $this->getStepByName('confirm_step')
                        ->icon('heroicon-o-check-circle')
                ])
                ->submitAction($this->getWizardSubmitAction())
                    /*Action::make('submit')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.submit'))
                        ->action(fn() => $this->submit())
                )*/
=======
                    $this->getStepByName('time_step')
                        ->icon('heroicon-o-clock'),
                    $this->getStepByName('confirm_step')
                        ->icon('heroicon-o-check-circle')
                ])
                ->submitAction(
                    Action::make('submit')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.submit'))
                        ->action(fn() => $this->submit())
                )
>>>>>>> aurmich/dev
        ];
    }
    
    /**
     * Determinare con quale step iniziare.
     *
     * @return int
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getWizardStartOnStep(): int
=======
    protected function getStartStep(): int
>>>>>>> aurmich/dev
=======
    protected function getWizardStartOnStep(): int
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
    {
        return 0; // Prima pagina
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
    protected function getTestStepSchema(): array
    {
        return [
            'test' =>  RadioCollection::make('studio_id')
                ->label('Studio')      
                ->options(fn() => Studio::all()) // La tua collection
                ->itemView('pub_theme::filament.forms.components.studio-item') // La tua blade personalizzata
                ->valueKey('id') // Campo da usare come valore (default: 'id'),
        ];
    }

<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)

    


    /**
     * Get the search step form schema.
     *
     * @return array<string, \Filament\Forms\Components\Select>
     */
    protected function getSearchStepSchema(): array
    {
        return [
            'region' => Select::make('region')
                ->options(function () {
<<<<<<< HEAD
                    return Region::orderBy('name')->get()->pluck("name", "id");
=======
                    return Comune::select('regione')
                    ->distinct()
                    ->orderBy('regione->nome')
                    ->get()
                    ->pluck('regione.nome','regione.codice')
                    ->toArray();
>>>>>>> aurmich/dev
                })
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(function (Set $set){
                    $set('province', null);
                    $set('cap', null);
                }),
            'province' => Select::make('province')
                ->options(function (Get $get) {
                    $region = $get('region');
                    if (!$region) {
                        return [];
                    }
<<<<<<< HEAD
                    return Province::where('region_id',$region)
                    ->orderBy('name')
                    ->get()
                    ->pluck("name", "id")
                    ->toArray();
=======
                    return Comune::query()
                        ->where('regione->codice', $region)
                        ->select('provincia')
                        ->distinct()
                        ->orderBy('provincia->nome')
                        ->get()
                        ->pluck('provincia.nome', 'provincia.codice')
                        ->toArray();
>>>>>>> aurmich/dev
                })
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn (Set $set) => $set('cap', null)),
            'cap' => Select::make('cap')
                ->options(function (Get $get) {
                    $region = $get('region');
                    if (!$region) {
                        return [];
                    }
                    $province = $get('province');
                    if (!$province) {
                        return [];
                    }
<<<<<<< HEAD
                   
                    return Locality::query()
                        ->where('region_id', $region)
                        ->where('province_id', $province)
                        //->when($city, fn($query) => $query->where('id', $city))
                        ->select('postal_code')
                        ->distinct()
                        ->orderBy('postal_code')
                        ->get()
                        ->pluck('postal_code', 'postal_code')
=======
                    return Comune::query()
                        ->where('regione->codice', $region)
                        ->where('provincia->codice', $province)
                        ->select('cap')
                        ->distinct()
                        ->orderBy('cap')
                        ->get()
                        ->pluck('cap.0', 'cap.0')
>>>>>>> aurmich/dev
                        ->toArray();
                })
                ->searchable()
                ->required()
                ->live()
                ->disabled(fn (Get $get) => !$get('region') || !$get('province')),
        ];
    }

    protected function getStudioStepSchema(): array
    {
        
        return [
<<<<<<< HEAD
            
            RadioCollection::make('studio_id')
                ->options(fn($get) => Studio::ofCap($get('cap'))->whereHas('doctors')->get()) // La tua collection
                
                ->itemView('pub_theme::filament.forms.components.studio-item') // La tua blade personalizzata
                //->emptyView('pub_theme::filament.forms.components.studio-empty') // La tua blade personalizzata
                ->valueKey('id') // Campo da usare come valore (default: 'id'),
                
                ->afterStateUpdated(function (Set $set, Get $get){
                    /** @phpstan-ignore argument.type */
                    $options=$this->getDoctorsOptionsByStudioId($get('studio_id'));
                    $options=array_keys($options);
                    if(isset($options[0])){
                        $set('doctor_id', $options[0]);
                    }
                    
                })
                    
                ,
        ];
    }

   

    protected function getDateStepSchema(): array
    {
       

        return [

            'doctor_id'=>Select::make('doctor_id')
                /** @phpstan-ignore argument.type */
                ->options(fn(Get $get)=>$this->getDoctorsOptionsByStudioId($get('studio_id')))
                ->searchable()
                //->default(fn(Get $get)=>dddx('a'))
                ->preload()
                ->required(),
            'appointment_date' => InlineDatePicker::make('appointment_date')
                ->enabledDates(fn(Get $get)=>$this->getEnabledDates($get))
                ->view('pub_theme::filament.forms.components.inline-date-picker')
                ->currentViewMonth($this->getCurrentCalendarMonth()),
            
            'appointment_time'=>  RadioCollection::make('appointment_time')
                ->options(fn(Get $get) => $this->getAvailableTimeSlots($get)) // La tua collection
                ->itemView('pub_theme::filament.forms.components.studio-time') // La tua blade personalizzata
                ->valueKey('id') 
            
        ];
    }

    public function getAvailableTimeSlots(Get $get): \Illuminate\Support\Collection
    {

        $studioId = $get('studio_id');
        $doctorId = $get('doctor_id');
        $date = $get('appointment_date');
        if(!is_string($date)){
            return collect([]);
        }
        
        $pivot = DoctorStudio::where('studio_id',$studioId)->where('user_id',$doctorId)->first();
        
        if (!$pivot) {
            return collect([]);
        }
        
        return $pivot->getAvailableTimeSlotsByDate($date);
        
        
    }

    public function getEnabledDates(Get $get): array
    {   
        
        $studioId = $get('studio_id');
        $doctorId = $get('doctor_id');
        $pivot = DoctorStudio::where('studio_id',$studioId)->where('user_id',$doctorId)->first();
        
        if (!$pivot) {
            return [];
        }
        $enabledDates = $pivot->getEnabledDatesByMonth($this->currentCalendarMonth);

        return $enabledDates;
        
    }

    public function getDoctorsOptionsByStudioId(int|string|null $studioId): array
    {
        $studio = Studio::find($studioId);
        if(!$studio){
            return [];
        }
        $doctors = $studio->doctors()->get();
        $options = $doctors->mapWithKeys(function($doctor){
            Assert::isInstanceOf($doctor, Doctor::class);
            return [$doctor->id => $doctor->first_name.' '.$doctor->last_name];
        })->toArray();
        
        return $options;
    }

=======
            \Modules\SaluteOra\Filament\Forms\Components\StudioSelectorButtons::make('studio_selection')
                ->sectionTitle(__('saluteora::widgets.find_doctor_and_appointment.studio_list.title'))
                ->studios(fn($get) => Studio::ofCap($get('cap'))->get()) // Empty Eloquent collection
                ->populatesStudioField('studio_id')
                ->populatesDoctorField('doctor_id')
                ->emptyStateTitle(__('saluteora::widgets.find_doctor_and_appointment.studio_list.empty_state.title'))
                ->emptyStateDescription(__('saluteora::widgets.find_doctor_and_appointment.studio_list.empty_state.description'))
                ->required()
                ->columnSpanFull(),
                
            Hidden::make('studio_id')->required(),
            Hidden::make('doctor_id')->required(),
        ];
    }

    

    

   

    /**
     * Metodo Livewire per selezionare uno studio.
     *
     * @param int $studioId
     * @return void
     */
    public function selectStudio(int $studioId): void
    {
        $studio = \Modules\SaluteOra\Models\Studio::find($studioId);
        if ($studio) {
            $this->data['selected_studio'] = $studioId;
            $this->data['selected_studio_name'] = $studio->name;
        }
    }

    protected function getDateStepSchema(): array
    {
        return [
            'appointment_date' => DatePicker::make('appointment_date')
            ->disabledDates(['2025-06-05','2025-06-21'])
                ->native(false),
        ];
    }

>>>>>>> aurmich/dev
    /**
     * Ottiene le date non disponibili per gli appuntamenti
     *
     * @return array<string> Date formattate nel formato Y-m-d
     */
    protected function getDisabledDates(): array
    {
        return [
            '2025-06-01', // Domenica
            '2025-06-02', // Festa della Repubblica  
            '2025-06-08', // Domenica
            '2025-06-15', // Domenica
            '2025-06-22', // Domenica
            '2025-06-29', // Domenica
        ];
    }

    /**
     * Aggiorna gli slot orari disponibili in base alla data selezionata
     *
     * @param \Filament\Forms\Set $set
     * @param string|null $appointmentDate
     * @return void
     */
    public function updateAvailableTimeSlots(Set $set, ?string $appointmentDate): void
    {
        if (!$appointmentDate) {
            $set('appointment_time', null);
            return;
        }
        
<<<<<<< HEAD
        // Reset appointment time when date changes
        $set('appointment_time', null);
        
        // Log the date change for debug
        Log::info('Appointment date updated', [
            'date' => $appointmentDate,
            'is_weekend' => in_array(date('w', strtotime($appointmentDate)), [0, 6]),
            'is_monday' => date('w', strtotime($appointmentDate)) == 1,
        ]);
    }

    

    
=======
        // Qui implementeremo la vera logica per ottenere gli slot disponibili dal server
        // Per ora restituiamo degli esempi
        
        // Se è un weekend, meno slot disponibili
        $isWeekend = in_array(date('w', strtotime($appointmentDate)), [0, 6]);
        $isMonday = date('w', strtotime($appointmentDate)) == 1;
        
        $availableSlots = $this->generateTimeSlots($isWeekend, $isMonday);
        
        // Log per debug
        Log::info('Time slots updated', [
            'date' => $appointmentDate,
            'is_weekend' => $isWeekend,
            'is_monday' => $isMonday,
            'slots_count' => count($availableSlots)
        ]);
        
        // Aggiorna il componente con gli slot disponibili
        $this->availableTimeSlots = $availableSlots;
    }

    protected function getTimeStepSchema(): array
    {
        return [
            'appointment_time' => Select::make('appointment_time')
                ->label('saluteora::fields.appointment_time')
                ->options([
                    '09:00' => '09:00',
                    '09:30' => '09:30',
                    '10:00' => '10:00',
                    '10:30' => '10:30',
                    '11:00' => '11:00',
                    '11:30' => '11:30',
                    '12:00' => '12:00',
                    '15:00' => '15:00',
                    '15:30' => '15:30',
                    '16:00' => '16:00',
                    '16:30' => '16:30',
                    '17:00' => '17:00',
                    '17:30' => '17:30',
                    '18:00' => '18:00',
                ])
                ->required(),
        ];
    }
>>>>>>> aurmich/dev

    /**
     * Get the confirmation step form schema.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    protected function getConfirmStepSchema(): array
    {
        return [
<<<<<<< HEAD
            'confirm'=>Forms\Components\Section::make(__('saluteora::widgets.find_doctor_and_appointment.confirm_step.title'))
                ->description(__('saluteora::widgets.find_doctor_and_appointment.confirm_step.description'))
                ->schema([
                    'studio_name'=>Placeholder::make('studio_name')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.studio.label'))
                        ->content(function (Get $get) {
                            $studioId = $get('studio_id');
                            if (!$studioId) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.studio.placeholder');
                            }
                            
                            $studio = \Modules\SaluteOra\Models\Studio::firstWhere('id',$studioId);
                            return $studio ? $studio->name : __('saluteora::widgets.find_doctor_and_appointment.fields.studio.placeholder');
                        }),
                        
                    'doctor_name'=>Placeholder::make('doctor_name')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.doctor.label'))
                        ->content(function (Get $get) {
                            $doctorId = $get('doctor_id');
                            $studioId = $get('studio_id');
                            if (!$doctorId || !$studioId) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.doctor.placeholder');
                            }
                            
                            // Recupera il dottore tramite la relazione studio->doctors
                            $studio = \Modules\SaluteOra\Models\Studio::firstWhere('id',$studioId);
                            if (!$studio) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.doctor.placeholder');
                            }
                            
                            $doctor = $studio->doctors()->where('users.id', $doctorId)->first();
                            /** @phpstan-ignore property.notFound, property.notFound */
                            return $doctor ? ($doctor->first_name . ' ' . $doctor->last_name) : __('saluteora::widgets.find_doctor_and_appointment.fields.doctor.placeholder');
                        }),
                        
                    'appointment_date_display'=>Placeholder::make('appointment_date_display')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.appointment_date.label'))
                        ->content(function (Get $get) {
                            $date = $get('appointment_date');
                            if (!is_string($date)) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.appointment_date.placeholder');
                            }
                            
                            // Formatta la data in modo più leggibile (es: "Lunedì 15 Giugno 2025")
                            try {
                                $carbonDate = Carbon::createFromFormat('Y-m-d', $date);
                                //** @phpstan-ignore method.nonObject */
                                return $carbonDate->isoFormat('dddd DD MMMM YYYY');
                            } catch (\Exception $e) {
                                return $date; // Fallback al formato originale
                            }
                        }),
                        
                    'appointment_time_display'=>Placeholder::make('appointment_time_display')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.appointment_time.label'))
                        ->content(function (Get $get) {
                            $time = $get('appointment_time');
                            return $time ? $time : __('saluteora::widgets.find_doctor_and_appointment.fields.appointment_time.placeholder');
                        }),
                        
                    'notes'=>Textarea::make('notes')
                        ->rows(3)
                        ->columnSpan('full')
                        ->maxLength(500), // Limite di caratteri per le note
=======
            Forms\Components\Section::make(__('saluteora::widgets.find_doctor_and_appointment.confirm_step.title'))
                ->description(__('saluteora::widgets.find_doctor_and_appointment.confirm_step.description'))
                ->schema([
                    Forms\Components\TextInput::make('studio_name')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.studio.label'))
                        ->default(function (Get $get) {
                            $studioId = $get('studio_id');
                            if (!$studioId) return null;
                            
                            $studio = \Modules\SaluteOra\Models\Studio::find($studioId);
                            return $studio ? $studio->name : null;
                        })
                        ->readOnly(),
                        
                    Forms\Components\TextInput::make('appointment_date')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.appointment_date.label'))
                        ->readOnly(),
                        
                    Forms\Components\TextInput::make('appointment_time')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.appointment_time.label'))
                        ->readOnly(),
                        
                    Textarea::make('notes')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.notes.label'))
                        ->placeholder(__('saluteora::widgets.find_doctor_and_appointment.fields.notes.placeholder'))
                        ->rows(3)
                        ->columnSpan('full'),
>>>>>>> aurmich/dev
                ]),
        ];
    }

<<<<<<< HEAD

    public function register(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $data=$this->form->getState();
        $appointment_data=[
            'patient_id'=>Auth::id(),
            'doctor_id'=>$data['doctor_id'],
            'studio_id'=>$data['studio_id'],
            /** @phpstan-ignore binaryOp.invalid, binaryOp.invalid */
            'starts_at'=>Carbon::parse($data['appointment_date'].' '.$data['appointment_time']),
            /** @phpstan-ignore binaryOp.invalid, binaryOp.invalid */
            'ends_at'=>Carbon::parse($data['appointment_date'].' '.$data['appointment_time'])->addMinutes(60),
            'notes'=>$data['notes'],
            'state'=>'pending',
        ];
        $appointment=Appointment::create($appointment_data);
        /** @phpstan-ignore-next-line */
        $slug='patient_appointment_'.Str::snake($appointment->state::$name);
        $slug=Str::slug($slug);
        /*---
        $notify=new RecordNotification($appointment,$slug);
        LaravelNotification::route('mail', $data['email'])
        //->locale('it')
        ->notify($notify);
        --*/
        return redirect()->route('pages.view', ['slug' => $slug]);
       
    }

    
=======
    /**
     * Handle form submission.
     *
     * @return void
     */
    public function submit(): void
    {
        try {
            if (!request()->hasValidSignature()) {
                throw new \Exception('Invalid request signature');
            }

            // Get form data
            $data = $this->form->getState();

            // Log the booking attempt
            Log::info('New appointment booking', [
                'user_id' => Auth::id(),
                'data' => $data
            ]);

            // TODO: Implement actual booking logic here

            // Show success notification
            Notification::make()
                ->success()
                ->title(trans('saluteora::notifications.booking_success'))
                ->send();

            // Reset form
            $this->form->fill();

        } catch (\Exception $e) {
            Log::error('Booking error: ' . $e->getMessage());

            Notification::make()
                ->danger()
                ->title(trans('saluteora::notifications.booking_error'))
                ->body($e->getMessage())
                ->send();
        }
    }

>>>>>>> aurmich/dev
    /**
     * Get the CSRF token for the current request.
     *
     * @return string
     */
    public function getCsrfToken(): string
    {
        return Session::token();
    }

   
}
