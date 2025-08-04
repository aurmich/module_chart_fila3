<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets\Patient;

use Exception;
<<<<<<< HEAD
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
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
class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    /**
     * La vista del widget (richiesta da XotBaseWidget, ma sovrascritta dai form).
     */
    protected static string $view = 'pub_theme::filament.widgets.patient.find-doctor-and-appointment-widget';

    

    /**
     * Mese corrente del calendario per navigazione.
     * 
     * @var string
     */
    public string $currentCalendarMonth;

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount(): void
    {
        // ✅ Inizializza sempre con valore valido
        if (empty($this->currentCalendarMonth)) {
            $this->currentCalendarMonth = now()->format('Y-m');
        }
        
=======
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\SaluteOra\Enums\AppointmentType;
use Modules\SaluteOra\Enums\DentistSpecialization;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Spatie\Permission\Traits\HasRoles;

/**
 * Widget per la ricerca e prenotazione del dentista.
 * ATTENZIONE: Non usare ->label(), ->placeholder(), __() nei form component.
 * La localizzazione è gestita centralmente tramite LangServiceProvider e file di lingua.
 * Le chiavi dei campi devono corrispondere ai file di lingua del modulo.
 * Vedi anche: ../../../../Xot/docs/filament_widget_regole.md
 */
class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    //use HasRoles;

    /**
     * The sort order of the widget in the sidebar.
     *
     * @var int
     */
    protected static ?int $sort = 1;

    /**
     * The number of columns the widget should span.
     *
     * @var int|string|array
     */
    protected int|string|array $columnSpan = 'full';

    /**
     * The widget's form data.
     *
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    /**
     * Available time slots for the selected date.
     *
     * @var array<string, string>
     */
    public array $availableSlots = [];

    /**
     * Whether the widget is currently loading data.
     *
     * @var bool
     */
    public bool $isLoading = false;

    /**
     * Widget title.
     *
     * @var string
     */
    public string $title = 'find_doctor_widget.title';

    /**
     * The view that should be used to render the widget.
     *
     * @var string
     */
    protected static string $view = 'saluteora::filament.widgets.find-doctor-and-appointment';

    /**
     * Widget icon.
     *
     * @var string
     */
    public string $icon = 'heroicon-o-user-plus';

    public function mount(): void
    {
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
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
     * Get the form schema for the widget.
     *
     * @return array<int|string, mixed>
=======
     * Get the form schema for the widget.
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
     */
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            Forms\Components\Wizard::make()
                //->startOnStep($this->getStartStep())
                ->steps([
                    $this->getStepByName('search_step')
                        ->icon('heroicon-o-map-pin'),
                    $this->getStepByName('studio_step')
                        ->icon('heroicon-o-building-office'),
                    $this->getStepByName('date_step')
                        ->icon('heroicon-o-calendar'),
                    $this->getStepByName('confirm_step')
                        ->icon('heroicon-o-check-circle')
                ])
                ->submitAction($this->getWizardSubmitAction())
                    /*Action::make('submit')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.submit'))
                        ->action(fn() => $this->submit())
                )*/
        ];
    }
    
    /**
     * Determinare con quale step iniziare.
     *
     * @return int
     */
    protected function getWizardStartOnStep(): int
    {
        return 0; // Prima pagina
    }

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
                    return Region::orderBy('name')->get()->pluck("name", "id");
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
                    return Province::where('region_id',$region)
                    ->orderBy('name')
                    ->get()
                    ->pluck("name", "id")
                    ->toArray();
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
                   
                    return Locality::query()
                        ->where('region_id', $region)
                        ->where('province_id', $province)
                        //->when($city, fn($query) => $query->where('id', $city))
                        ->select('postal_code')
                        ->distinct()
                        ->orderBy('postal_code')
                        ->get()
                        ->pluck('postal_code', 'postal_code')
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
=======
            Wizard::make([
                ...$this->getSearchStep(),
                ...$this->getDateTimeStep(),
                ...$this->getConfirmationStep(),
            ])
            ->submitAction(
                \Filament\Forms\Components\Actions\Action::make('submit')
                    ->submit('save')
            )
        ];
    }

    /**
     * Get the search step schema.
     *
     * @return array<int, \Filament\Forms\Components\Component>
     */
    protected function getSearchStep(): array
    {
        return [
            Wizard\Step::make('search')
                ->schema([
                    Fieldset::make('dentist_search')
                        ->schema([
                            Select::make('specialization')
                                ->options(DentistSpecialization::class)
                                ->searchable()
                                ->required(),
                            TextInput::make('location')
                                ->required(),
                            Select::make('appointment_type')
                                ->options(AppointmentType::getOptions())
                                ->required()
                                ->default(AppointmentType::CHECKUP->value),
                        ]),
                ])
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
        ];
    }

    /**
<<<<<<< HEAD
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
        
        // Reset appointment time when date changes
        $set('appointment_time', null);
        
        // Log the date change for debug
        Log::info('Appointment date updated', [
            'date' => $appointmentDate,
            'is_weekend' => in_array(date('w', strtotime($appointmentDate)), [0, 6]),
            'is_monday' => date('w', strtotime($appointmentDate)) == 1,
        ]);
    }

    

    

    /**
     * Get the confirmation step form schema.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    protected function getConfirmStepSchema(): array
    {
        return [
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
                ]),
        ];
    }


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

    
    /**
     * Get the CSRF token for the current request.
     *
     * @return string
     */
    public function getCsrfToken(): string
    {
        return Session::token();
    }

   
=======
     * Get the date/time step schema.
     *
     * @return array<int, \Filament\Forms\Components\Component>
     */
    protected function getDateTimeStep(): array
    {
        return [
            Wizard\Step::make('date_time')
                ->schema([
                    Fieldset::make('appointment_details')
                        ->schema([
                            DatePicker::make('date')
                                ->required()
                                ->minDate(now())
                                ->live()
                                ->afterStateUpdated(fn (callable $set) => $set('time', null)),
                            Select::make('time')
                                ->options($this->availableSlots)
                                ->required()
                                ->disabled(fn (callable $get) => !$get('date')),
                            $this->getLoadingState()
                        ]),
                ])
        ];
    }

    /**
     * Get the confirmation step schema.
     *
     * @return array<int, \Filament\Forms\Components\Component>
     */
    protected function getConfirmationStep(): array
    {
        return [
            Wizard\Step::make('confirmation')
                ->schema([
                    Placeholder::make('confirmation_message')
                        ->content(fn (callable $get) => $this->getConfirmationContent($get)),
                ])
        ];
    }

    protected function getLoadingState()
    {
        if ($this->isLoading) {
            return Placeholder::make('loading')
                ->content('find_doctor_widget.messages.loading_available_slots')
                ->columnSpanFull();
        }

        return null;
    }

    public function loadAvailableSlots(): void
    {
        if (empty($this->data['appointment_date'])) {
            return;
        }

        $this->isLoading = true;

        // Simulate API call to fetch available slots
        $this->availableSlots = [
            '09:00' => '09:00 - 09:30',
            '10:00' => '10:00 - 10:30',
            '11:00' => '11:00 - 11:30',
            '14:00' => '14:00 - 14:30',
            '15:00' => '15:00 - 15:30',
        ];

        $this->isLoading = false;
    }

    /**
     * Handle form submission.
     */
    public function submit(): void
    {
        try {
            $data = $this->form->getState();
            $appointment = $this->createAppointment($data);
            $this->sendConfirmation($appointment);

            Notification::make()
                ->title('find_doctor_widget.messages.appointment_booked_successfully')
                ->success()
                ->send();

            $this->form->fill();
            $this->availableSlots = [];

        } catch (Exception $e) {
            Log::error('Error booking appointment: ' . $e->getMessage());

            Notification::make()
                ->title('find_doctor_widget.messages.error_booking_appointment')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }

    /**
     * Create a new appointment.
     */
    protected function createAppointment(array $data): array
    {
        return [
            'id' => uniqid('appt_', true),
            'reference' => 'APT-' . strtoupper(uniqid()),
            'date' => $data['appointment_date'] ?? null,
            'time' => $data['appointment_time'] ?? null,
            'type' => $data['appointment_type'] ?? null,
            'specialization' => $data['specialization'] ?? null,
            'location' => $data['location'] ?? null,
            'status' => 'scheduled',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Send confirmation for the booked appointment.
     */
    protected function sendConfirmation(array $appointment): void
    {
        // Implementation for sending confirmation
        // This could send an email, SMS, or notification to the patient
    }

    /**
     * Determine if the widget should be visible to the current user.
     *
     * @return bool
     */
    public static function canView(): bool
    {
        if (!Auth::check()) {
            return false;
        }

        /** @var \Modules\Xot\Models\User $user */
        $user = Auth::user();

        return $user->hasRole('patient');
    }
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
}
