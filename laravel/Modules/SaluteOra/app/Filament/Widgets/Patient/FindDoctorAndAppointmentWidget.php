<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets\Patient;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Illuminate\Support\Str;
<<<<<<< HEAD
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
=======
use Filament\Forms\Components as Form;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form as FormBuilder;
=======
>>>>>>> d23ba493 (add calendar)
=======
use Filament\Forms;
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
use Modules\Geo\Models\Cap;
use Filament\Actions\Action;
use Filament\Widgets\Widget;
use Illuminate\Support\View;
use Modules\Geo\Models\Comune;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
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

class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    /**
     * La vista del widget (richiesta da XotBaseWidget, ma sovrascritta dai form).
     */
    protected static string $view = 'pub_theme::filament.widgets.patient.find-doctor-and-appointment-widget';

    /**
     * Filtri attivi per il widget.
     *
     * @var array|null
     */
    public ?array $filters = null;

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
        
        $this->form->fill();
    }

<<<<<<< HEAD
    public function mount(): void
    {
<<<<<<< HEAD
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
        $this->form->fill();
=======
        $this->form = Form::make($this)
            ->schema($this->getFormSchema())
            ->statePath('data');
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
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

=======
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
    /**
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int|string, mixed>
=======
     * Get the form schema for the widget.
     *
<<<<<<< HEAD
     * @return array<int|string, \Filament\Forms\Components\Component>
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
     * @return array<string, \Filament\Forms\Components\Component>
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
=======
     * @return array<string, mixed>
     */
    /**
     * Get the form schema for the widget.
     *
     * @return array<string, mixed>
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
     * @return array<string, \Filament\Forms\Components\Wizard>
>>>>>>> 8e4d163b (phpstan)
=======
     * @return array<int|string, mixed>
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
     */
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Forms\Components\Wizard::make()
                //->startOnStep($this->getStartStep())
=======
            Forms\Components\Wizard::make()
<<<<<<< HEAD
                ->startOnStep($this->getStartStep())
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
                //->startOnStep($this->getStartStep())
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
                ->steps([
                    $this->getStepByName('search_step')
                        ->icon('heroicon-o-map-pin'),
                    $this->getStepByName('studio_step')
                        ->icon('heroicon-o-building-office'),
                    $this->getStepByName('date_step')
                        ->icon('heroicon-o-calendar'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    $this->getStepByName('availability_step')
                        ->icon('heroicon-o-user-circle'),
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
                    $this->getStepByName('confirm_step')
                        ->icon('heroicon-o-check-circle')
=======
                        
                    //$this->getStepByName('confirm_step')
                    //    ->icon('heroicon-o-check-circle')
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
                    $this->getStepByName('confirm_step')
                        ->icon('heroicon-o-check-circle')
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
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
=======
            'wizard' => Wizard::make([
<<<<<<< HEAD
                $this->getSearchStep(),
                //$this->getDateTimeStep(),
                $this->getConfirmationStep(),
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
=======
                Wizard\Step::make('search')
                    ->icon('heroicon-o-magnifying-glass')
                    ->schema($this->getSearchStep()),

                Wizard\Step::make('date')
                    ->icon('heroicon-o-calendar')
                    ->schema($this->getDateStep()),

                Wizard\Step::make('time')
                    ->icon('heroicon-o-clock')
                    ->schema($this->getTimeStep()),

                Wizard\Step::make('confirm')
                    ->icon('heroicon-o-document-check')
                    ->schema($this->getConfirmStep()),
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
            ])
            /*
            ->submitAction(view('filament.buttons.submit-button', [
                'label' => __('saluteora::actions.book_appointment'),
            ]))
                */
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
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return [
            Wizard\Step::make('search')
                ->schema([
                    Fieldset::make('dentist_search')
                        ->schema([
                            Select::make('region')
                                ->options(fn () => Region::all()->pluck('name', 'id'))
                                ->searchable()
                                ->required()
                                ->live()
                                ->afterStateUpdated(fn (Set $set) => $set('province', null)),
                            
                            Select::make('province')
                                ->options(fn (Get $get) => Province::where('region_id', $get('region'))->pluck('name', 'id'))
                                ->searchable()
                                ->required()
                                ->live()
                                ->afterStateUpdated(fn (Set $set) => $set('city', null))
                                ->visible(fn (Get $get) => filled($get('region'))),
                            
                            Select::make('city')
                                ->options(fn (Get $get) => City::where('province_id', $get('province'))->pluck('name', 'id'))
                                ->searchable()
                                ->required()
                                ->live()
                                ->afterStateUpdated(fn (Set $set) => $set('cap', null))
                                ->visible(fn (Get $get) => filled($get('province'))),
                            
                            Select::make('cap')
                                ->options(fn (Get $get) => Cap::where('city_id', $get('city'))->pluck('code', 'id'))
                                ->searchable()
                                ->required()
                                ->visible(fn (Get $get) => filled($get('city'))),
                        ]),
                ])
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
        ];
    }

<<<<<<< HEAD
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
=======
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
    protected function getDateTimeStep(): array
=======
        return Wizard\Step::make('search')
            ->schema([
                Fieldset::make('dentist_search')
                    ->schema([
                        Select::make('region')
                            ->options(fn () => Region::all()->pluck('nome','codice')->toArray())
                            ->searchable()
                            ->required()
                            ->live()
                            ->afterStateUpdated(function (Set $set,$state) {
                                $set('province', null);
=======
        
=======

>>>>>>> d23ba493 (add calendar)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
        return [
            'region' => Select::make('region')
                ->options(function () {
                    return Comune::select('regione')
                    ->distinct()
                    ->orderBy('regione->nome')
                    ->get()
                    ->pluck('regione.nome','regione.codice')
                    ->toArray();
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
                    return Comune::query()
                        ->where('regione->codice', $region)
                        ->select('provincia')
                        ->distinct()
                        ->orderBy('provincia->nome')
                        ->get()
                        ->pluck('provincia.nome', 'provincia.codice')
                        ->toArray();
                })
                ->searchable()
                ->required()
                ->live()
<<<<<<< HEAD
                ->afterStateUpdated(fn (Set $set) => $set('cap', null))
                ,
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

=======
                ->afterStateUpdated(fn (Set $set) => $set('cap', null)),
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
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
                    return Comune::query()
                        ->where('regione->codice', $region)
                        ->where('provincia->codice', $province)
                        ->select('cap')
                        ->distinct()
                        ->orderBy('cap')
                        ->get()
                        ->pluck('cap.0', 'cap.0')
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
<<<<<<< HEAD
<<<<<<< HEAD
            'appointment_date' => DatePicker::make('appointment_date')
<<<<<<< HEAD
                ->label('saluteora::fields.appointment_date')
                ->minDate(now())
                ->maxDate(now()->addMonths(3))
                ->required()
                ->native(false)
                //->inline(true)
                ->extraAttributes([
        'data-inline' => true,  // Forza Flatpickr a renderlo inline
    ])
    ->closeOnDateSelection(false) 
    //->extraFlatpickrOptions([
    //    'inline' => true,
    //])
    ->configure(function (DatePicker $component) {
        $component->getExtraAttributes()['data-inline'] = 'true';
    })
     ->extraInputAttributes([
                            'x-data' => '{
                                init() {
                                    this.$nextTick(() => {
                                        this.initInlineCalendar();
                                    });
                                },
                                initInlineCalendar() {
                                    const fp = flatpickr(this.$el, {
                                        inline: true,
                                        enableTime: false,
                                        dateFormat: "Y-m-d",
                                        altFormat: "d/m/Y",
                                        minDate: "today",
                                        maxDate: new Date().fp_incr(180),
                                        disable: this.getDisabledDates(),
                                        locale: "it",
                                        onChange: (selectedDates, dateStr) => {
                                            this.$dispatch("date-selected", { date: dateStr });
                                        }
                                    });
                                },
                                getDisabledDates() {
                                    // Logica per date disabilitate
                                    return window.disabledAppointmentDates || [];
                                }
<<<<<<< HEAD

                                return Province::byRegion($region)->pluck('nome','codice')->toArray();
                            })
                            ->searchable()
                            ->required()
                            ->live()
                            //->afterStateUpdated(fn (Set $set) => $set('city', null))
                            ->visible(fn (Get $get) => filled($get('region')))
                            ->disabled(fn (Get $get) => !filled($get('region')))
                            ,
/*
                        Select::make('city')
                            ->label('find_doctor_widget.fields.city')
                            ->placeholder('find_doctor_widget.placeholders.city')
                            ->options(fn (Get $get) => filled($get('province'))
                                ? City::where('province_id', $get('province'))->pluck('name', 'id')
                                : [])
                            ->searchable()
                            ->required()
                            ->live()
                            ->afterStateUpdated(fn (Set $set) => $set('cap', null))
                            ->visible(fn (Get $get) => filled($get('province')))
                            ->disabled(fn (Get $get) => !filled($get('province'))),
*/
                        Select::make('cap')
                            ->options(fn (Get $get) => filled($get('city'))
                                ? Cap::where('city_id', $get('city'))->pluck('code', 'id')
                                : [])
                            ->searchable()
                            ->required()
                            ->visible(fn (Get $get) => filled($get('city')))
                            ->disabled(fn (Get $get) => !filled($get('city'))),
/*
                        Select::make('specialization')
                            ->label('find_doctor_widget.fields.specialization')
                            ->placeholder('find_doctor_widget.placeholders.specialization')
                            ->options(DentistSpecialization::class)
                            ->searchable()
                            ->columnSpanFull(),

                        Select::make('appointment_type')
                            ->label('find_doctor_widget.fields.appointment_type')
                            ->placeholder('find_doctor_widget.placeholders.appointment_type')
                            ->options(AppointmentType::class)
                            ->required()
                            ->default(AppointmentType::FOLLOWUP->value)
                            ->columnSpanFull(),
                        */
                    ])
            ]);
    }

    protected function getDateTimeStep(): Wizard\Step
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
    {
        return Wizard\Step::make('date_time')
            ->schema([
                Fieldset::make('appointment_details')
                    ->schema([
                        DatePicker::make('date')
                            ->required()
                            ->minDate(now())
                            ->live()
                            ->afterStateUpdated(fn (Set $set) => $set('time', null)),
                        Select::make('time')
                            ->options($this->availableSlots)
                            ->required()
                            ->disabled(fn (Get $get) => !$get('date')),
                        $this->getLoadingState()
                    ])
            ]);
    }

    protected function getConfirmationStep(): Wizard\Step
    {
        return Wizard\Step::make('confirmation')
            ->schema([
                Placeholder::make('confirmation_message')
                    ->content(fn (Get $get) => $this->getConfirmationContent($get)),
            ]);
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
=======
                            }'
                        ])
                ->displayFormat('d/m/Y')
                ->closeOnDateSelection()
                ->timezone('Europe/Rome')
                ->disabledDates($this->getDisabledDates())
                ->afterStateUpdated(function (Set $set, $state) {
                    $this->updateAvailableTimeSlots($set, $state);
                })
                //->openToDate(now()->addDay())
                ->firstDayOfWeek(1) // Inizia con lunedì
                //->disablePopover()
                ->closeOnDateSelection(false), // Mantiene il calendario aperto
                
=======
            ->disabledDates(['2025-06-05','2025-06-21'])
                ->native(false),
<<<<<<< HEAD
            /*
            'test_field' => Flatpickr::make('test_field')
                //->allowInput()
                ->inline(true)
                ->format('Y-m-d')
                ->altFormat('d/m/Y')
                ->disabledDates(['2025-06-05','2025-06-21'])

                ,
            /*
>>>>>>> d23ba493 (add calendar)
            'appointment_type' => Select::make('appointment_type')
                ->label('saluteora::fields.appointment_type')
                ->options(AppointmentTypeEnum::class)
                ->live()
                ->afterStateUpdated(function (Set $set) {
                    // Reinizializza le disponibilità quando cambia il tipo di appuntamento
                    if ($this->data['appointment_date']) {
                        $this->updateAvailableTimeSlots($set, $this->data['appointment_date']);
                    }
                })
                ->required(),
<<<<<<< HEAD
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
            */
>>>>>>> d23ba493 (add calendar)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
=======

            'doctor_id'=>Select::make('doctor_id')
                ->options(fn(Get $get)=>$this->getDoctorsOptionsByStudioId($get('studio_id')))
                ->searchable()
                //->default(fn(Get $get)=>dddx('a'))
                ->preload()
                ->required(),
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
            'appointment_date' => InlineDatePicker::make('appointment_date')
<<<<<<< HEAD
                ->enabledDates(['2025-06-05','2025-06-21'])
<<<<<<< HEAD
            ,
<<<<<<< HEAD
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
=======
            'appointment_time'=>  RadioCollection::make('appointment_time')
            ->label('Orario')      
            ->options(fn() => $times) // La tua collection
            ->itemView('pub_theme::filament.forms.components.studio-time') // La tua blade personalizzata
            ->valueKey('id') 
>>>>>>> b13ef45d (✨ (InlineDatePicker): add comprehensive documentation for the InlineDatePicker component to improve developer understanding and usage)
=======
=======
                ->enabledDates(fn(Get $get)=>$this->getEnabledDates($get))
>>>>>>> e40f0fb9 (✨ (FindDoctorAndAppointmentWidget.php): refactor enabledDates method to use dynamic dates based on current month for better flexibility)
                ->view('pub_theme::filament.forms.components.inline-date-picker')
                ->currentViewMonth($this->getCurrentCalendarMonth()),
            
            'appointment_time'=>  RadioCollection::make('appointment_time')
                ->options(fn(Get $get) => $this->getAvailableTimeSlots($get)) // La tua collection
                ->itemView('pub_theme::filament.forms.components.studio-time') // La tua blade personalizzata
                ->valueKey('id') 
<<<<<<< HEAD
>>>>>>> 16a242b3 (✨ (InlineDatePicker): implement advanced navigation architecture for better UX and performance)
=======
            
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
        ];
    }

    public function getAvailableTimeSlots(Get $get): \Illuminate\Support\Collection
    {

        $studioId = $get('studio_id');
        $doctorId = $get('doctor_id');
        $date = $get('appointment_date');
        if(!$date){

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
        $studio = Studio::find($studioId);
        if(!$studio){
            return [];
        }
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
            Forms\Components\Section::make(__('saluteora::widgets.find_doctor_and_appointment.confirm_step.title'))
                ->description(__('saluteora::widgets.find_doctor_and_appointment.confirm_step.description'))
                ->schema([
                    Placeholder::make('studio_name')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.studio.label'))
                        ->content(function (Get $get) {
                            $studioId = $get('studio_id');
                            if (!$studioId) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.studio.placeholder');
                            }
                            
                            $studio = \Modules\SaluteOra\Models\Studio::find($studioId);
                            return $studio ? $studio->name : __('saluteora::widgets.find_doctor_and_appointment.fields.studio.placeholder');
                        }),
                        
                    Placeholder::make('doctor_name')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.doctor.label'))
                        ->content(function (Get $get) {
                            $doctorId = $get('doctor_id');
                            $studioId = $get('studio_id');
                            if (!$doctorId || !$studioId) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.doctor.placeholder');
                            }
                            
                            // Recupera il dottore tramite la relazione studio->doctors
                            $studio = \Modules\SaluteOra\Models\Studio::find($studioId);
                            if (!$studio) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.doctor.placeholder');
                            }
                            
                            $doctor = $studio->doctors()->where('users.id', $doctorId)->first();
                            return $doctor ? ($doctor->first_name . ' ' . $doctor->last_name) : __('saluteora::widgets.find_doctor_and_appointment.fields.doctor.placeholder');
                        }),
                        
                    Placeholder::make('appointment_date_display')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.appointment_date.label'))
                        ->content(function (Get $get) {
                            $date = $get('appointment_date');
                            if (!$date) {
                                return __('saluteora::widgets.find_doctor_and_appointment.fields.appointment_date.placeholder');
                            }
                            
                            // Formatta la data in modo più leggibile (es: "Lunedì 15 Giugno 2025")
                            try {
                                $carbonDate = Carbon::createFromFormat('Y-m-d', $date);
                                return $carbonDate->locale('it')->isoFormat('dddd DD MMMM YYYY');
                            } catch (\Exception $e) {
                                return $date; // Fallback al formato originale
                            }
                        }),
                        
                    Placeholder::make('appointment_time_display')
                        ->label(__('saluteora::widgets.find_doctor_and_appointment.fields.appointment_time.label'))
                        ->content(function (Get $get) {
                            $time = $get('appointment_time');
                            return $time ? $time : __('saluteora::widgets.find_doctor_and_appointment.fields.appointment_time.placeholder');
                        }),
                        
                    Textarea::make('notes')
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
            'starts_at'=>Carbon::parse($data['appointment_date'].' '.$data['appointment_time']),
            'ends_at'=>Carbon::parse($data['appointment_date'].' '.$data['appointment_time'])->addMinutes(60),
            'notes'=>$data['notes'],
            'state'=>'pending',
        ];
        $appointment=Appointment::create($appointment_data);
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
<<<<<<< HEAD
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======

   
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
}
