<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
=======
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\Action;
>>>>>>> 0015a493 (✨ (DoctorAvailabilitiesWidget): implement the DoctorAvailabilitiesWidget to provide doctors with a comprehensive overview of their availability across multiple studios, enhancing user experience and data management.)
use Illuminate\Support\Collection;
use Modules\SaluteOra\Models\User;
use Filament\Forms\Components\Grid;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Components\Group;
<<<<<<< HEAD
use Modules\SaluteOra\Models\Doctor;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
=======
use Carbon\Carbon;
use Filament\Facades\Filament;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
>>>>>>> 16ac401c (📝 (doctor-availabilities-widget): remove outdated documentation and files related to the DoctorAvailabilitiesWidget to streamline the codebase and improve maintainability.)
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Models\DoctorStudio;
use Modules\SaluteOra\Traits\HasFullCalendarConfig;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

/**
 * Widget per la gestione delle disponibilità dei dottori.
 *
<<<<<<< HEAD
 * Widget per visualizzare tutti gli studi in cui lavora il dottore
 * e i relativi orari di disponibilità (schedule) configurati.
 * .
<<<<<<< HEAD
 * Caratteristiche:
 * - Multi-studio overview per dottori
 * - Visualizzazione schedule dal pivot studio_user
 * - Link diretti per modifica orari per studio
 * - Studio principale evidenziato
 * - Gestione empty states
 * - Security: solo per UserType::DOCTOR
 * 
 * @property-read Collection<int, array> $studios_schedules
 * @property-read User $doctor
=======
 * Permette ai dottori di visualizzare e gestire le proprie disponibilità
 * settimanali nel contesto multi-tenant dello studio corrente.
 * Utilizza il trait HasFullCalendarConfig per configurazioni comuni.
>>>>>>> 16ac401c (📝 (doctor-availabilities-widget): remove outdated documentation and files related to the DoctorAvailabilitiesWidget to streamline the codebase and improve maintainability.)
 */
class DoctorAvailabilitiesWidget extends FullCalendarWidget
{
    use HasFullCalendarConfig;

    /**
     * Modello associato al widget.
     *
     * @var Model|string|null
     */
<<<<<<< HEAD
    protected static string $view = 'pub_theme::filament.widgets.doctor-availabilities';
=======
    public Model|string|null $model = DoctorStudio::class;
>>>>>>> 16ac401c (📝 (doctor-availabilities-widget): remove outdated documentation and files related to the DoctorAvailabilitiesWidget to streamline the codebase and improve maintainability.)

    /**
     * Ordinamento del widget nella dashboard.
     *
     * @var int|null
     */
    protected static ?int $sort = 2;

    /**
     * Altezza massima del widget.
     *
     * @var string|null
     */
    protected static ?string $maxHeight = '600px';

    /**
     * Verifica se l'utente può visualizzare il widget.
     *
     * @return bool
     */
    public static function canView(): bool
    {
        if (!Auth::check() || Auth::user()?->type !== UserTypeEnum::DOCTOR->value) {
            return false;
        }
        return Filament::getTenant() !== null;
    }

    /**
     * Recupera gli eventi di disponibilità per il calendario.
     *
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        $cacheKey = $this->getCacheKey($fetchInfo);

        return cache()->remember($cacheKey, 300, function () use ($fetchInfo) {
            $doctorStudio = $this->getDoctorStudioPivot();

            if (!$doctorStudio || !$doctorStudio->schedule) {
                return [];
            }

            return $this->generateAvailabilitySlots(
                $doctorStudio->schedule,
                $fetchInfo
            );
        });
    }

    /**
     * Schema del form per la creazione/modifica slot di disponibilità.
     *
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
<<<<<<< HEAD
       
        /** @var User $doctor */
        $doctor = auth()->user();
        Assert::isInstanceOf($doctor, Doctor::class);        
        // Recupera tutti gli studi con schedule dal pivot
        // con eager loading per evitare query N+1
        $studiosWithSchedules = $doctor->studios()
            ->withPivot(['schedule', 'is_primary'])
            ->orderBy('studio_user.is_primary', 'desc') // Studio principale in cima
            ->get()
            ->map(function ($studio) {
                return [
                    'studio' => $studio,
                    'schedule' => $studio->pivot->schedule ?? [],
                    'is_primary' => $studio->pivot->is_primary ?? false,
                ];
            });
        
        return [
            'studios_schedules' => $studiosWithSchedules,
            'doctor' => $doctor,
=======
use Carbon\Carbon;
use Filament\Facades\Filament;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
=======
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
>>>>>>> 0015a493 (✨ (DoctorAvailabilitiesWidget): implement the DoctorAvailabilitiesWidget to provide doctors with a comprehensive overview of their availability across multiple studios, enhancing user experience and data management.)
use Filament\Notifications\Notification;
use Modules\SaluteOra\Models\StudioUser;
use Illuminate\Database\Eloquent\Builder;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Placeholder;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Filament\Actions\Concerns\InteractsWithActions;
use Modules\UI\Filament\Forms\Components\OpeningHoursField;

/**
 * DoctorAvailabilitiesWidget
 *
 * Widget per visualizzare tutti gli studi in cui lavora il dottore
 * e i relativi orari di disponibilità (schedule) configurati.
 * 
=======
>>>>>>> b705fb0e (📝 (DoctorAvailabilitiesWidget.php): update documentation comment to improve clarity)
 * Caratteristiche:
 * - Multi-studio overview per dottori
 * - Visualizzazione schedule dal pivot studio_user
 * - Link diretti per modifica orari per studio
 * - Studio principale evidenziato
 * - Gestione empty states
 * - Security: solo per UserType::DOCTOR
 * 
 * @property-read Collection<int, array> $studios_schedules
 * @property-read User $doctor
 */
class DoctorAvailabilitiesWidget extends XotBaseWidget implements HasActions
{
    use InteractsWithActions;
    /**
     * Vista del widget.
     */
    protected static string $view = 'saluteora::filament.widgets.doctor-availabilities';

   

    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'availability_details' => Section::make('Dettagli Disponibilità')
                ->schema([
                    'day_of_week' => Select::make('day_of_week')
                        ->options([
                            'monday' => 'Lunedì',
                            'tuesday' => 'Martedì',
                            'wednesday' => 'Mercoledì',
                            'thursday' => 'Giovedì',
                            'friday' => 'Venerdì',
                            'saturday' => 'Sabato',
                            'sunday' => 'Domenica',
                        ])
                        ->required(),
                    'period' => Select::make('period')
                        ->options([
                            'morning' => 'Mattina',
                            'afternoon' => 'Pomeriggio',
                            'evening' => 'Sera',
                        ])
                        ->required(),
                    'start_time' => TimePicker::make('start_time')
                        ->required()
                        ->seconds(false),
                    'end_time' => TimePicker::make('end_time')
                        ->required()
                        ->seconds(false),
                    'effective_date' => DatePicker::make('effective_date')
                        ->label('Data di Validità')
                        ->helperText('Da quando è valida questa disponibilità'),
                ]),
>>>>>>> b6f55f10 (✨ (DoctorAvailabilitiesWidget): introduce a new widget for managing doctor availability in a multi-tenant context to enhance usability and streamline scheduling for doctors.)
=======
            //OpeningHoursField::make('schedule')
            //    ->columnSpanFull(),
>>>>>>> 0015a493 (✨ (DoctorAvailabilitiesWidget): implement the DoctorAvailabilitiesWidget to provide doctors with a comprehensive overview of their availability across multiple studios, enhancing user experience and data management.)
        ];
    }
    /**
     * Determina se il widget può essere visualizzato.
     * Solo dottori autenticati possono vedere questo widget.
     */
    public static function canView(): bool
    {
        $user = auth()->user();
        
        return $user instanceof User 
            && $user->type === UserTypeEnum::DOCTOR->value;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Formatta un orario per la visualizzazione.
     * 
     * @param array<string, string|null> $timeSlot
     * @return string
     */
    protected function formatTimeSlot(array $timeSlot): string
    {
        $from = $timeSlot['from'] ?? $timeSlot['morning_from'] ?? $timeSlot['afternoon_from'] ?? null;
        $to = $timeSlot['to'] ?? $timeSlot['morning_to'] ?? $timeSlot['afternoon_to'] ?? null;
        
        if (empty($from) || empty($to)) {
            return 'Chiuso';
        }
        
        return "{$from} - {$to}";
    }

    /**
     * Determina se un giorno ha orari configurati.
     * 
     * @param array<string, mixed> $daySchedule
     * @return bool
     */
    protected function hasDaySchedule(array $daySchedule): bool
    {
        return !empty($daySchedule['morning_from']) && !empty($daySchedule['morning_to'])
            || !empty($daySchedule['afternoon_from']) && !empty($daySchedule['afternoon_to']);
    }

    /**
     * Ottiene l'etichetta localizzata per un giorno.
     * 
     * @param string $dayKey
     * @return string
     */
    protected function getDayLabel(string $dayKey): string
    {
        return ucfirst(__('ui::opening_hours.days.' . $dayKey));
    }

    /**
     * Conta il numero totale di studi configurati.
     * 
     * @return int
     */
    protected function getTotalConfiguredStudios(): int
    {
        $data = $this->getViewData();
        /** @phpstan-ignore method.nonObject */        
        return $data['studios_schedules']->filter(function ($studioData) {
            return !empty($studioData['schedule']);
        })->count();
    }

    /**
     * Ottiene statistiche rapide per il widget.
     * 
     * @return array<string, mixed>
     */
    protected function getQuickStats(): array
    {
        $data = $this->getViewData();
        $studiosSchedules = $data['studios_schedules'];
        /** @phpstan-ignore method.nonObject */
        $totalStudios = $studiosSchedules->count();
        /** @phpstan-ignore method.nonObject */
        $configuredStudios = $studiosSchedules->filter(fn($studio) => !empty($studio['schedule']))->count();
        /** @phpstan-ignore method.nonObject */
        $primaryStudio = $studiosSchedules->firstWhere('is_primary', true);
        
        return [
            'total_studios' => $totalStudios,
            'configured_studios' => $configuredStudios,
            'unconfigured_studios' => $totalStudios - $configuredStudios,
            'has_primary_studio' => !is_null($primaryStudio),
            'primary_studio_name' => $primaryStudio['studio']->name ?? null,
        ];
    }

   

    /**
     * Ottiene tutti gli studi del dottore con le disponibilità.
     *
     * @return Collection<int, StudioUser>
     */
    public function getDoctorStudios(): Collection
    {
        /** @var User $doctor */
        $doctor = auth()->user();
        
        return StudioUser::where('user_id', $doctor->id)
            ->with(['studio'])
            ->get();
    }

    /**
     * Formatta gli orari per la visualizzazione.
     */
    public function formatSchedule(?array $schedule): string
    {
        if (empty($schedule)) {
            return __('saluteora::doctor_availability.widget.no_schedule');
        }

        $formatted = [];
        $daysTranslation = [
            'monday' => __('saluteora::days.monday'),
            'tuesday' => __('saluteora::days.tuesday'),
            'wednesday' => __('saluteora::days.wednesday'),
            'thursday' => __('saluteora::days.thursday'),
            'friday' => __('saluteora::days.friday'),
            'saturday' => __('saluteora::days.saturday'),
            'sunday' => __('saluteora::days.sunday'),
        ];

        foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'] as $day) {
            if (!empty($schedule[$day])) {
                $daySchedule = $schedule[$day];
                $times = [];
                
                if (!empty($daySchedule['morning'])) {
                    $times[] = __('saluteora::doctor_availability.widget.morning') . ': ' . $daySchedule['morning'];
                }
                
                if (!empty($daySchedule['afternoon'])) {
                    $times[] = __('saluteora::doctor_availability.widget.afternoon') . ': ' . $daySchedule['afternoon'];
                }
                
                if (!empty($times)) {
                    $formatted[] = $daysTranslation[$day] . ' (' . implode(', ', $times) . ')';
                }
            }
        }

        return !empty($formatted) 
            ? implode(' | ', $formatted)
            : __('saluteora::doctor_availability.widget.no_schedule');
    }

    /**
     * Azione per modificare gli orari di uno studio.
     * 
     * @return Action
     */
    public function editScheduleAction(): Action
    {
        return Action::make('editSchedule')
            
            ->icon('heroicon-o-clock')
            ->color('primary')
            ->form([
                OpeningHoursField::make('schedule')
                    ->columnSpanFull(),
            ])
            ->fillForm(function (array $arguments): array {
                
                $studioUserId = $arguments['studioUserId'] ?? null;
                
                if (!$studioUserId) {
                    return ['schedule' => []];
                }
                
                $studioUser = StudioUser::find($studioUserId);
                
                return [
                    'schedule' => $studioUser->schedule ?? [],
                ];
            })
            ->action(function (array $data, array $arguments): void {
                $studioUserId = $arguments['studioUserId'] ?? null;
                
                if (!$studioUserId) {
                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.error.title'))
                        ->body(__('saluteora::doctor_availability.notifications.error.invalid_studio'))
                        ->danger()
                        ->send();
                    return;
                }

                try {
                    $studioUser = StudioUser::firstWhere('id', $studioUserId);

                    $studioUser?->update(['schedule' => $data['schedule']]);

                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.saved.title'))
                        ->body(__('saluteora::doctor_availability.notifications.saved.body'))
                        ->success()
                        ->send();

                    // Refresh del widget
                    $this->dispatch('$refresh');
                    
                } catch (\Exception $e) {
                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.error.title'))
                        ->body(__('saluteora::doctor_availability.notifications.error.body') . ': ' . $e->getMessage())
                        ->danger()
                        ->send();
                }
            });
    }

    /**
     * Azione per impostare uno studio come primario.
     */
    public function setPrimaryAction(): Action
    {
        return Action::make('setPrimary')
            ->label(__('saluteora::doctor_availability.actions.set_primary'))
            ->icon('heroicon-o-star')
            ->color('warning')
            ->requiresConfirmation()
            ->modalHeading(__('saluteora::doctor_availability.actions.set_primary'))
            ->modalDescription(__('saluteora::doctor_availability.modals.set_primary_description'))
            ->action(function (array $arguments): void {
                $studioUserId = $arguments['studioUserId'] ?? null;
                
                if (!$studioUserId) {
                    return;
                }

                try {
                    /** @var User $doctor */
                    $doctor = auth()->user();
                    
                    // Rimuovi il flag primario da tutti gli altri studi
                    StudioUser::where('user_id', $doctor->id)
                        ->where('id', '!=', $studioUserId)
                        ->update(['is_primary' => false]);
                    
                    // Imposta questo studio come primario
                    StudioUser::where('id', $studioUserId)
                        ->update(['is_primary' => true]);

                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.primary_set.title'))
                        ->body(__('saluteora::doctor_availability.notifications.primary_set.body'))
                        ->success()
                        ->send();

                    // Refresh del widget
                    $this->dispatch('$refresh');
                    
                } catch (\Exception $e) {
                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.error.title'))
                        ->body($e->getMessage())
                        ->danger()
                        ->send();
                }
            });
    }

    /**
     * Ottiene le azioni disponibili.
     *
     * @return array<Action>
     */
    protected function getActions(): array
    {
        return [
            $this->editScheduleAction(),
            $this->setPrimaryAction(),
        ];
    }

    /**
     * Crea un form per un studio specifico.
     * Utilizzato per forms inline nei template.
     * 
     * @param int $studioId
     * @return Form
     */
    public function studioForm(int $studioId): Form
    {
        return Form::make($this)
            ->schema([
                OpeningHoursField::make('schedule')
                    ->default($this->getStudioSchedule($studioId))
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (array $state) use ($studioId) {
                        $this->saveStudioSchedule($studioId, $state);
                    })
                    ->columnSpanFull(),
            ])
            ->statePath("studio_schedules.{$studioId}");
    }

    /**
     * Ottiene il schedule corrente per uno studio.
     * 
     * @param int $studioId
     * @return array<string, mixed>
     */
    public function getStudioSchedule(int $studioId): array
    {
        /** @var User $doctor */
        $doctor = auth()->user();
        
        $studioUser = StudioUser::where('user_id', $doctor->id)
            ->where('studio_id', $studioId)
            ->first();
            
        return $studioUser->schedule ?? [];
    }

    /**
     * Salva il schedule per uno studio specifico.
     * 
     * @param int $studioId
     * @param array<string, mixed> $schedule
     * @return void
     */
    public function saveStudioSchedule(int $studioId, array $schedule): void
    {
        try {
            /** @var User $doctor */
            $doctor = auth()->user();
            
            // Verifica che lo studio appartenga al dottore (security)
            $studioUser = StudioUser::where('user_id', $doctor->id)
                ->where('studio_id', $studioId)
                ->first();
                
            if (!$studioUser) {
                throw new \Exception(__('saluteora::doctor_availability.notifications.error.unauthorized'));
            }
            
            // Aggiorna il schedule
            $studioUser->update(['schedule' => $schedule]);
            
            // Notifica successo
            Notification::make()
                ->title(__('saluteora::doctor_availability.notifications.saved.title'))
                ->body(__('saluteora::doctor_availability.notifications.saved.body'))
                ->success()
                ->send();
                
        } catch (\Exception $e) {
            // Notifica errore
            Notification::make()
                ->title(__('saluteora::doctor_availability.notifications.error.title'))
                ->body($e->getMessage())
                ->danger()
                ->send();
                
            // Log dell'errore per debugging
            Log::error('Failed to save studio schedule', [
                'studio_id' => $studioId,
                'doctor_id' => auth()->id(),
                'error' => $e->getMessage(),
            ]);
        }
    }

   
=======
     * Configurazione specifica per il widget disponibilità.
=======
     * Ottiene i dati per la vista.
     * 
     * Recupera tutti gli studi associati al dottore con i relativi
     * schedule dalla tabella pivot studio_user.
>>>>>>> 0015a493 (✨ (DoctorAvailabilitiesWidget): implement the DoctorAvailabilitiesWidget to provide doctors with a comprehensive overview of their availability across multiple studios, enhancing user experience and data management.)
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
       
        /** @var User $doctor */
        $doctor = auth()->user();
        
        // Recupera tutti gli studi con schedule dal pivot
        // con eager loading per evitare query N+1
        $studiosWithSchedules = $doctor->studios()
            ->withPivot(['schedule', 'is_primary'])
            ->orderBy('studio_user.is_primary', 'desc') // Studio principale in cima
            ->get()
            ->map(function ($studio) {
                return [
                    'studio' => $studio,
                    'schedule' => $studio->pivot->schedule ?? [],
                    'is_primary' => $studio->pivot->is_primary ?? false,
                ];
            });
        
=======
>>>>>>> 16ac401c (📝 (doctor-availabilities-widget): remove outdated documentation and files related to the DoctorAvailabilitiesWidget to streamline the codebase and improve maintainability.)
        return [
            'availability_details' => Section::make('Dettagli Disponibilità')
                ->schema([
                    'day_of_week' => Select::make('day_of_week')
                        ->options([
                            'monday' => 'Lunedì',
                            'tuesday' => 'Martedì',
                            'wednesday' => 'Mercoledì',
                            'thursday' => 'Giovedì',
                            'friday' => 'Venerdì',
                            'saturday' => 'Sabato',
                            'sunday' => 'Domenica',
                        ])
                        ->required(),
                    'period' => Select::make('period')
                        ->options([
                            'morning' => 'Mattina',
                            'afternoon' => 'Pomeriggio',
                            'evening' => 'Sera',
                        ])
                        ->required(),
                    'start_time' => TimePicker::make('start_time')
                        ->required()
                        ->seconds(false),
                    'end_time' => TimePicker::make('end_time')
                        ->required()
                        ->seconds(false),
                    'effective_date' => DatePicker::make('effective_date')
                        ->label('Data di Validità')
                        ->helperText('Da quando è valida questa disponibilità'),
                ]),
        ];
    }

    /**
     * Configurazione specifica per il widget disponibilità.
     *
     * @return array<string, mixed>
     */
    public function config(): array
    {
        $baseConfig = parent::config();

        return array_merge($baseConfig, [
            'initialView' => 'timeGridWeek',
            'editable' => true,
            'selectable' => true,
            'selectConstraint' => 'businessHours',
            'eventBackgroundColor' => '#10b981', // Verde per disponibilità
            'eventBorderColor' => '#059669',
            'eventTextColor' => '#ffffff',
            'events' => [],
        ]);
    }

    /**
     * Gestisce la selezione di un range di tempo per creare disponibilità.
     *
     * @param string $start
     * @param string|null $end
     * @param bool $allDay
     * @param array<string, mixed>|null $view
     * @param array<string, mixed>|null $resource
     * @return void
     */
    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
        if ($allDay) {
            return; // Non gestiamo eventi di tutta la giornata
        }

        $startDate = Carbon::parse($start);
        $endDate = Carbon::parse($end);

        // Determina il giorno della settimana e il periodo
        $dayOfWeek = strtolower($startDate->format('l'));
        $period = $this->determinePeriod($startDate);

        $this->createAvailabilitySlot([
            'day_of_week' => $dayOfWeek,
            'period' => $period,
            'start_time' => $startDate->format('H:i'),
            'end_time' => $endDate->format('H:i'),
            'effective_date' => $startDate->format('Y-m-d'),
        ]);
    }

    /**
     * Gestisce il click su un evento di disponibilità.
     *
     * @param array<string, mixed> $info
     * @return void
     */
    public function onEventClick(array $info): void
    {
        $eventData = $info['event'] ?? [];
        
        if (!isset($eventData['extendedProps']['availability_id'])) {
            return;
        }

        $this->dispatch('open-availability-modal', [
            'availabilityId' => $eventData['extendedProps']['availability_id'],
            'mode' => 'edit',
        ]);
    }

    /**
     * Ottiene il pivot DoctorStudio corrente.
     *
     * @return DoctorStudio|null
     */
    protected function getDoctorStudioPivot(): ?DoctorStudio
    {
        $user = Auth::user();
        $studio = Filament::getTenant();

        if (!$user || !$studio) {
            return null;
        }

        return DoctorStudio::where([
            'user_id' => $user->id,
            'studio_id' => $studio->id,
        ])->first();
    }

    /**
     * Genera gli slot di disponibilità per il calendario.
     *
     * @param array<string, mixed> $schedule
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
     */
    protected function generateAvailabilitySlots(array $schedule, array $fetchInfo): array
    {
        $events = [];
        $start = Carbon::parse($fetchInfo['start']);
        $end = Carbon::parse($fetchInfo['end']);

        for ($date = $start->copy(); $date <= $end; $date->addDay()) {
            $dayKey = strtolower($date->format('l'));

            if (!isset($schedule[$dayKey])) {
                continue;
            }

            $daySchedule = $schedule[$dayKey];

            foreach ($daySchedule as $period => $timeRange) {
                if (empty($timeRange)) {
                    continue;
                }

                $event = $this->createAvailabilityEvent($date, $period, $timeRange);
                if ($event) {
                    $events[] = $event;
                }
            }
        }

        return $events;
    }

    /**
     * Crea un evento di disponibilità per il calendario.
     *
     * @param Carbon $date
     * @param string $period
     * @param string $timeRange
     * @return array<string, mixed>|null
     */
    protected function createAvailabilityEvent(Carbon $date, string $period, string $timeRange): ?array
    {
        if (!preg_match('/^(\d{2}:\d{2})-(\d{2}:\d{2})$/', $timeRange, $matches)) {
            return null;
        }

        [$_, $startTime, $endTime] = $matches;

        $startDateTime = $date->copy()->setTimeFromTimeString($startTime);
        $endDateTime = $date->copy()->setTimeFromTimeString($endTime);

        $title = match ($period) {
            'morning' => 'Disponibile - Mattina',
            'afternoon' => 'Disponibile - Pomeriggio',
            'evening' => 'Disponibile - Sera',
            default => 'Disponibile',
        };

        return [
            'id' => "availability_{$date->format('Y-m-d')}_{$period}",
            'title' => $title,
            'start' => $startDateTime->toDateTimeString(),
            'end' => $endDateTime->toDateTimeString(),
            'backgroundColor' => '#10b981',
            'borderColor' => '#059669',
            'textColor' => '#ffffff',
            'extendedProps' => [
                'type' => 'availability',
                'day_of_week' => strtolower($date->format('l')),
                'period' => $period,
                'availability_id' => "availability_{$date->format('Y-m-d')}_{$period}",
                'editable' => true,
            ],
        ];
    }

    /**
     * Crea un nuovo slot di disponibilità.
     *
     * @param array<string, mixed> $data
     * @return void
     */
    protected function createAvailabilitySlot(array $data): void
    {
        $doctorStudio = $this->getDoctorStudioPivot();

        if (!$doctorStudio) {
            Notification::make()
                ->title('Errore')
                ->body('Impossibile trovare l\'associazione dottore-studio')
                ->danger()
                ->send();
            return;
        }

        $schedule = $doctorStudio->schedule ?? [];
        $timeRange = "{$data['start_time']}-{$data['end_time']}";

        // Aggiorna lo schedule
        $schedule[$data['day_of_week']][$data['period']] = $timeRange;

        $doctorStudio->update(['schedule' => $schedule]);

        $this->invalidateCache();

        Notification::make()
            ->title('Disponibilità aggiunta')
            ->body("Disponibilità aggiunta per {$this->formatDayName($data['day_of_week'])} - {$data['period']}")
            ->success()
            ->send();
    }

    /**
     * Determina il periodo basato sull'ora.
     *
     * @param Carbon $time
     * @return string
     */
    protected function determinePeriod(Carbon $time): string
    {
        $hour = $time->hour;

        if ($hour < 12) {
            return 'morning';
        } elseif ($hour < 17) {
            return 'afternoon';
        } else {
            return 'evening';
        }
    }

    /**
     * Formatta il nome del giorno.
     *
     * @param string $dayKey
     * @return string
     */
    protected function formatDayName(string $dayKey): string
    {
        $days = [
            'monday' => 'Lunedì',
            'tuesday' => 'Martedì',
            'wednesday' => 'Mercoledì',
            'thursday' => 'Giovedì',
            'friday' => 'Venerdì',
            'saturday' => 'Sabato',
            'sunday' => 'Domenica',
        ];

        return $days[$dayKey] ?? ucfirst($dayKey);
    }

    /**
     * Ottiene il titolo del widget.
     *
     * @return string
     */
    protected function getHeading(): string
    {
        $tenant = Filament::getTenant();
        return "Disponibilità - {$tenant?->name}";
    }

    /**
<<<<<<< HEAD
     * Formatta gli orari per la visualizzazione.
     */
    public function formatSchedule(?array $schedule): string
    {
        if (empty($schedule)) {
            return __('saluteora::doctor_availability.widget.no_schedule');
        }

        $formatted = [];
        $daysTranslation = [
            'monday' => __('saluteora::days.monday'),
            'tuesday' => __('saluteora::days.tuesday'),
            'wednesday' => __('saluteora::days.wednesday'),
            'thursday' => __('saluteora::days.thursday'),
            'friday' => __('saluteora::days.friday'),
            'saturday' => __('saluteora::days.saturday'),
            'sunday' => __('saluteora::days.sunday'),
        ];

        foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'] as $day) {
            if (!empty($schedule[$day])) {
                $daySchedule = $schedule[$day];
                $times = [];
                
                if (!empty($daySchedule['morning'])) {
                    $times[] = __('saluteora::doctor_availability.widget.morning') . ': ' . $daySchedule['morning'];
                }
                
                if (!empty($daySchedule['afternoon'])) {
                    $times[] = __('saluteora::doctor_availability.widget.afternoon') . ': ' . $daySchedule['afternoon'];
                }
                
                if (!empty($times)) {
                    $formatted[] = $daysTranslation[$day] . ' (' . implode(', ', $times) . ')';
                }
            }
        }

        return !empty($formatted) 
            ? implode(' | ', $formatted)
            : __('saluteora::doctor_availability.widget.no_schedule');
    }

    /**
     * Azione per modificare gli orari di uno studio.
     */
    public function editScheduleAction(): Action
    {
        return Action::make('editSchedule')
            ->label(__('saluteora::doctor_availability.actions.edit_schedule'))
            ->icon('heroicon-o-clock')
            ->color('primary')
            ->form([
                OpeningHoursField::make('schedule')
                    ->columnSpanFull(),
            ])
            ->fillForm(function (array $arguments): array {
                
                $studioUserId = $arguments['studioUserId'] ?? null;
                
                if (!$studioUserId) {
                    return ['schedule' => []];
                }
                
                $studioUser = StudioUser::find($studioUserId);
                
                return [
                    'schedule' => $studioUser?->schedule ?? [],
                ];
            })
            ->action(function (array $data, array $arguments): void {
                $studioUserId = $arguments['studioUserId'] ?? null;
                
                if (!$studioUserId) {
                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.error.title'))
                        ->body(__('saluteora::doctor_availability.notifications.error.invalid_studio'))
                        ->danger()
                        ->send();
                    return;
                }

                try {
                    $studioUser = StudioUser::findOrFail($studioUserId);
                    $studioUser->update(['schedule' => $data['schedule']]);

                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.saved.title'))
                        ->body(__('saluteora::doctor_availability.notifications.saved.body'))
                        ->success()
                        ->send();

                    // Refresh del widget
                    $this->dispatch('$refresh');
                    
                } catch (\Exception $e) {
                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.error.title'))
                        ->body(__('saluteora::doctor_availability.notifications.error.body') . ': ' . $e->getMessage())
                        ->danger()
                        ->send();
                }
            });
    }

    /**
     * Azione per impostare uno studio come primario.
     */
    public function setPrimaryAction(): Action
    {
        return Action::make('setPrimary')
            ->label(__('saluteora::doctor_availability.actions.set_primary'))
            ->icon('heroicon-o-star')
            ->color('warning')
            ->requiresConfirmation()
            ->modalHeading(__('saluteora::doctor_availability.actions.set_primary'))
            ->modalDescription(__('saluteora::doctor_availability.modals.set_primary_description'))
            ->action(function (array $arguments): void {
                $studioUserId = $arguments['studioUserId'] ?? null;
                
                if (!$studioUserId) {
                    return;
                }

                try {
                    /** @var User $doctor */
                    $doctor = auth()->user();
                    
                    // Rimuovi il flag primario da tutti gli altri studi
                    StudioUser::where('user_id', $doctor->id)
                        ->where('id', '!=', $studioUserId)
                        ->update(['is_primary' => false]);
                    
                    // Imposta questo studio come primario
                    StudioUser::where('id', $studioUserId)
                        ->update(['is_primary' => true]);

                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.primary_set.title'))
                        ->body(__('saluteora::doctor_availability.notifications.primary_set.body'))
                        ->success()
                        ->send();

                    // Refresh del widget
                    $this->dispatch('$refresh');
                    
                } catch (\Exception $e) {
                    Notification::make()
                        ->title(__('saluteora::doctor_availability.notifications.error.title'))
                        ->body($e->getMessage())
                        ->danger()
                        ->send();
                }
            });
    }
<<<<<<< HEAD
>>>>>>> b6f55f10 (✨ (DoctorAvailabilitiesWidget): introduce a new widget for managing doctor availability in a multi-tenant context to enhance usability and streamline scheduling for doctors.)
=======

    /**
     * Ottiene le azioni disponibili.
=======
     * Ottiene la descrizione del widget.
>>>>>>> 16ac401c (📝 (doctor-availabilities-widget): remove outdated documentation and files related to the DoctorAvailabilitiesWidget to streamline the codebase and improve maintainability.)
     *
     * @return string|null
     */
    protected function getDescription(): ?string
    {
        return 'Gestisci le tue disponibilità settimanali. Seleziona un range di tempo per aggiungere nuove disponibilità.';
    }
<<<<<<< HEAD

    /**
     * Crea un form per un studio specifico.
     * Utilizzato per forms inline nei template.
     * 
     * @param int $studioId
     * @return Form
     */
    public function studioForm(int $studioId): Form
    {
        return Form::make()
            ->schema([
                OpeningHoursField::make('schedule')
                    ->default($this->getStudioSchedule($studioId))
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (array $state) use ($studioId) {
                        $this->saveStudioSchedule($studioId, $state);
                    })
                    ->columnSpanFull(),
            ])
            ->statePath("studio_schedules.{$studioId}");
    }

    /**
     * Ottiene il schedule corrente per uno studio.
     * 
     * @param int $studioId
     * @return array<string, mixed>
     */
    public function getStudioSchedule(int $studioId): array
    {
        /** @var User $doctor */
        $doctor = auth()->user();
        
        $studioUser = StudioUser::where('user_id', $doctor->id)
            ->where('studio_id', $studioId)
            ->first();
            
        return $studioUser?->schedule ?? [];
    }

    /**
     * Salva il schedule per uno studio specifico.
     * 
     * @param int $studioId
     * @param array<string, mixed> $schedule
     * @return void
     */
    public function saveStudioSchedule(int $studioId, array $schedule): void
    {
        try {
            /** @var User $doctor */
            $doctor = auth()->user();
            
            // Verifica che lo studio appartenga al dottore (security)
            $studioUser = StudioUser::where('user_id', $doctor->id)
                ->where('studio_id', $studioId)
                ->first();
                
            if (!$studioUser) {
                throw new \Exception(__('saluteora::doctor_availability.notifications.error.unauthorized'));
            }
            
            // Aggiorna il schedule
            $studioUser->update(['schedule' => $schedule]);
            
            // Notifica successo
            Notification::make()
                ->title(__('saluteora::doctor_availability.notifications.saved.title'))
                ->body(__('saluteora::doctor_availability.notifications.saved.body'))
                ->success()
                ->send();
                
        } catch (\Exception $e) {
            // Notifica errore
            Notification::make()
                ->title(__('saluteora::doctor_availability.notifications.error.title'))
                ->body($e->getMessage())
                ->danger()
                ->send();
                
            // Log dell'errore per debugging
            Log::error('Failed to save studio schedule', [
                'studio_id' => $studioId,
                'doctor_id' => auth()->id(),
                'error' => $e->getMessage(),
            ]);
        }
    }

   
>>>>>>> 0015a493 (✨ (DoctorAvailabilitiesWidget): implement the DoctorAvailabilitiesWidget to provide doctors with a comprehensive overview of their availability across multiple studios, enhancing user experience and data management.)
=======
>>>>>>> 16ac401c (📝 (doctor-availabilities-widget): remove outdated documentation and files related to the DoctorAvailabilitiesWidget to streamline the codebase and improve maintainability.)
} 