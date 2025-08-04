<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\SaluteOra\Enums\AppointmentStatusEnum;
use Modules\SaluteOra\Enums\AppointmentTypeEnum;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Studio;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Traits\HasFullCalendarConfig;
use Illuminate\Support\Facades\Log;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use function Safe\strtotime;
=======
use Modules\SaluteOra\Enums\AppointmentStatus;
use Modules\SaluteOra\Enums\AppointmentType;
use Modules\SaluteOra\Enums\UserType;
=======
use Modules\SaluteOra\Enums\AppointmentStatusEnum;
use Modules\SaluteOra\Enums\AppointmentTypeEnum;
use Modules\SaluteOra\Enums\UserTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Studio;
>>>>>>> aurmich/dev
use Modules\SaluteOra\Traits\HasFullCalendarConfig;
use Illuminate\Support\Facades\Log;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
<<<<<<< HEAD
use function Safe\strtotime;
=======
<<<<<<< HEAD
>>>>>>> 2099645a (.)
=======
//use Modules\SaluteOra\Traits\HasFullCalendarConfig;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use function Safe\strtotime;
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
use Modules\SaluteOra\Traits\HasFullCalendarConfig;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
use function Safe\strtotime;
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev

/**
 * Widget FullCalendar per amministratori.
 *
 * Permette agli admin di visualizzare tutti gli appuntamenti del sistema
 * con vista globale, filtri avanzati e funzionalità CRUD complete.
 * Utilizza il trait HasFullCalendarConfig per configurazioni comuni.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
 * @property ?array $filters
 * @property ?string $filter
 */
class AdminCalendarWidget extends FullCalendarWidget
{
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    //use HasFullCalendarConfig;
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
    use HasFullCalendarConfig;
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
    
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
    
    /**
     * Riferimento alla data corrente del calendario.
     *
     * @var string
     */
    public string $currentDate;
<<<<<<< HEAD
=======
=======
 */
class AdminCalendarWidget extends FullCalendarWidget
{
    use HasFullCalendarConfig;
<<<<<<< HEAD
>>>>>>> 2099645a (.)
=======
    
    /**
     * Riferimento alla data corrente del calendario.
     *
     * @var string
     */
    public string $currentDate;
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
>>>>>>> aurmich/dev

    /**
     * Modello associato al widget.
     *
     * @var Model|string|null
     */
    public Model|string|null $model = Appointment::class;

    /**
     * Ordinamento del widget nella dashboard.
     *
     * @var int|null
     */
    protected static ?int $sort = 1;

    /**
     * Altezza massima del widget.
     *
     * @var string|null
     */
    protected static ?string $maxHeight = '600px';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
>>>>>>> aurmich/dev
    
    
    /**
     * Inizializza il widget impostando la data corrente.
     *
     * @return void
     */
    public function mount(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        parent::mount();
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        $this->currentDate = now()->format('Y-m-d');
    }
    
    /**
     * Naviga al mese successivo.
     *
     * @return void
     */
    public function nextMonth(): void
    {
        // Calcola il primo giorno del mese successivo
        $this->currentDate = now()
            ->setDate(
                (int) date('Y', strtotime($this->currentDate)),
                (int) date('m', strtotime($this->currentDate)),
                1
            )
            ->addMonth()
            ->format('Y-m-d');
            
        $this->dispatch('refetchEvents');
    }

    /**
     * Naviga al mese precedente.
     *
     * @return void
     */
    public function prevMonth(): void
    {
        // Calcola il primo giorno del mese precedente
        $this->currentDate = now()
            ->setDate(
                (int) date('Y', strtotime($this->currentDate)),
                (int) date('m', strtotime($this->currentDate)),
                1
            )
            ->subMonth()
            ->format('Y-m-d');
            
        $this->dispatch('refetchEvents');
    }

    /**
     * Naviga alla data odierna.
     *
     * @return void
     */
    public function today(): void
    {
        $this->currentDate = now()->format('Y-m-d');
        $this->dispatch('refetchEvents');
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2099645a (.)
=======
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
>>>>>>> aurmich/dev

    /**
     * Filtri attivi per il widget.
     *
     * @var array<string, mixed>
     */
    public array $filters = [
        'studio_id' => null,
        'status' => null,
        'type' => null,
        'emergency_only' => false,
    ];

    /**
     * Verifica se l'utente può visualizzare il widget.
     *
     * @return bool
     */
    public static function canView(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        return Auth::check() && Auth::user()?->type === UserTypeEnum::ADMIN->value;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
     * Generate a cache key for the events query.
     *
     * @param array<string, mixed> $fetchInfo
     * @return string
     */
    /**
     * Get the base query for fetching events.
     *
     * @return \Illuminate\Database\Eloquent\Builder<\Modules\SaluteOra\Models\Appointment>
     */
    protected function getEventsQuery()
    {
        return Appointment::query()
            ->with(['doctor', 'studio'])
            ->when(
                $this->filter !== null,
                fn($query) => $query->where('status', $this->filter)
            );
    }

    /**
     * Invalidate the cache for the calendar events.
     *
     * @return void
     */
    protected function invalidateCache(): void
    {
        // Clear the cache for all possible date ranges
        $cache = app('cache');
        $cache->delete($this->getCacheKey([
            'start' => now()->subYear()->startOfMonth()->format('Y-m-d'),
            'end' => now()->addYear()->endOfMonth()->format('Y-m-d'),
        ]));
    }

    /**
     * Generate a cache key for the events query.
     *
     * @param array<string, mixed> $fetchInfo
     * @return string
     */
    protected function getCacheKey(array $fetchInfo): string
    {
        return sprintf(
            'admin_calendar_%s_%s_%s_%s',
            (string) (Auth::id() ?? 0),
            (string) ($fetchInfo['start'] ?? ''),
            (string) ($fetchInfo['end'] ?? ''),
            $this->filter ?? 'all'
        );
    }


    /**
     * Transform an appointment to event data.
     *
     * @param \Modules\SaluteOra\Models\Appointment $appointment
     * @return array<string, mixed>
     */
    protected function transformToEventData(Appointment $appointment): array
    {
        return [
            'id' => $appointment->id,
            'title' => $appointment->title ?? 'Appuntamento',
<<<<<<< HEAD
            'start' => $appointment->starts_at,
            'end' => $appointment->ends_at,
=======
<<<<<<< HEAD
            'start' => $appointment->starts_at,
            'end' => $appointment->ends_at,
=======
            'start' => $appointment->start_time,
            'end' => $appointment->end_time,
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
            'allDay' => false,
            'extendedProps' => [
                'doctor' => $appointment->doctor->name,
                'studio' => $appointment->studio->name,
                'status' => $appointment->status,
            ],
        ];
    }



    /**
     * Fetch events for the calendar.
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return Auth::check() && Auth::user()?->type === UserType::ADMIN;
=======
        return Auth::check() && Auth::user()?->type === UserTypeEnum::ADMIN->value;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }

    /**
     * Recupera gli eventi per il calendario.
>>>>>>> 2099645a (.)
=======
     * Recupera gli eventi del calendario.
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
     * Recupera gli eventi per il calendario.
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
     *
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        try {
            $cacheKey = $this->getCacheKey($fetchInfo);
            
            return cache()->remember($cacheKey, 300, function () use ($fetchInfo): array {
                $query = $this->getEventsQuery()
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
                    ->whereBetween('starts_at', [
                        $fetchInfo['start'],
                        $fetchInfo['end']
                    ]);

                $this->applyFilters($query);

                return $query->get()
                    ->map(fn(Appointment $appointment) => $this->transformToEventData($appointment))
                    ->values()
                    ->all();
            });
        } catch (\Exception $e) {
            \Log::error('Error fetching calendar events: ' . $e->getMessage());
            return [];
        }
<<<<<<< HEAD
=======
=======
        $cacheKey = $this->getCacheKey($fetchInfo);

        return cache()->remember($cacheKey, 300, function () use ($fetchInfo) {
            return Appointment::query()
                ->whereBetween('start_time', [$fetchInfo['start'], $fetchInfo['end']])
                ->with(['patient', 'doctor', 'studio'])
                ->limit(100) // Limite per performance
                ->get()
                ->map(fn($appointment) => $this->transformToEventData($appointment))
                ->toArray();
        });
>>>>>>> 2099645a (.)
=======
        $start = date('Y-m-d H:i:s', strtotime($fetchInfo['start']));
        $end = date('Y-m-d H:i:s', strtotime($fetchInfo['end']));

        // Query base per gli appuntamenti
        $appointments = $this->getAppointmentsQuery()
            ->whereBetween('start_time', [$start, $end])
            ->get();

        $events = [];
        foreach ($appointments as $appointment) {
            $events[] = $this->formatAppointmentAsEvent($appointment);
        }

        return $events;
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
        $cacheKey = $this->getCacheKey($fetchInfo);

        return cache()->remember($cacheKey, 300, function () use ($fetchInfo) {
            return Appointment::query()
                ->whereBetween('start_time', [$fetchInfo['start'], $fetchInfo['end']])
                ->with(['patient', 'doctor', 'studio'])
                ->limit(100) // Limite per performance
                ->get()
                ->map(fn($appointment) => $this->transformToEventData($appointment))
                ->toArray();
        });
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
                    ->whereBetween('start_time', [
                        $fetchInfo['start'],
                        $fetchInfo['end']
                    ]);

                $this->applyFilters($query);

                return $query->get()
                    ->map(fn(Appointment $appointment) => $this->transformToEventData($appointment))
                    ->values()
                    ->all();
            });
        } catch (\Exception $e) {
            \Log::error('Error fetching calendar events: ' . $e->getMessage());
            return [];
        }
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
    }

    /**
     * Applica i filtri alla query.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
     * @param \Illuminate\Database\Eloquent\Builder<Appointment> $query
     * @return void
     */
    protected function applyFilters(\Illuminate\Database\Eloquent\Builder $query): void
    {
        $filters = $this->filters ?? [];
        
        if (isset($filters['studio_id'])) {
            $query->where('studio_id', $filters['studio_id']);
        }

        if (isset($filters['doctor_id'])) {
            $query->where('doctor_id', $filters['doctor_id']);
        }

        if (isset($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (isset($filters['type'])) {
            $query->where('type', $filters['type']);
<<<<<<< HEAD
=======
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
=======
     * @param \Illuminate\Database\Eloquent\Builder<Appointment> $query
>>>>>>> 13ea6524 (phpstan)
     * @return void
     */
    protected function applyFilters(\Illuminate\Database\Eloquent\Builder $query): void
    {
        $filters = $this->filters ?? [];
        
        if (isset($filters['studio_id'])) {
            $query->where('studio_id', $filters['studio_id']);
        }

        if (isset($filters['doctor_id'])) {
            $query->where('doctor_id', $filters['doctor_id']);
        }

        if (isset($filters['status'])) {
            $query->where('status', $filters['status']);
        }

<<<<<<< HEAD
        if ($this->filters['emergency_only']) {
            $query->emergency();
>>>>>>> 2099645a (.)
=======
        if (isset($filters['type'])) {
            $query->where('type', $filters['type']);
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        }
    }

    /**
     * Ottiene lo schema del form per i filtri.
     *
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        return [
            'appointment_details' => Section::make('Dettagli Appuntamento')
                ->schema([
                    Select::make('studio_id')
                        ->relationship('studio', 'name')
                        ->searchable()
                        ->required(),
                    Select::make('doctor_id')
                        ->relationship('doctor', 'full_name')
                        ->searchable()
                        ->required(),
                    Select::make('patient_id')
                        ->relationship('patient', 'full_name')
                        ->searchable()
                        ->required(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
                    'type' => Select::make('type')
                        ->label('Tipo')
                        ->options(AppointmentTypeEnum::class)
                        ->searchable()
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
                        ->required(),
                    DateTimePicker::make('starts_at')
                        ->required(),
                    DateTimePicker::make('ends_at')
                        ->required(),
                    'status' => Select::make('status')
                        ->label('Stato')
                        ->options(AppointmentStatusEnum::class)
                        ->searchable()
                        ->default(AppointmentStatusEnum::SCHEDULED->value),
<<<<<<< HEAD
=======
=======
                    Select::make('type')
                        ->options(AppointmentType::class)
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
                        ->required(),
                    DateTimePicker::make('start_time')
                        ->required(),
                    DateTimePicker::make('end_time')
                        ->required(),
<<<<<<< HEAD
                    Select::make('status')
                        ->options(AppointmentStatus::class)
                        ->default(AppointmentStatus::SCHEDULED),
>>>>>>> 2099645a (.)
=======
                    'status' => Select::make('status')
                        ->label('Stato')
                        ->options(AppointmentStatusEnum::class)
                        ->searchable()
                        ->default(AppointmentStatusEnum::SCHEDULED->value),
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
                    Textarea::make('notes')
                        ->rows(3),
                    Toggle::make('emergency'),
                ]),
        ];
    }

    /**
     * Configurazione specifica per il widget admin.
     *
     * @return array<string, mixed>
     */
    public function config(): array
    {
        $baseConfig = parent::config();

        return array_merge($baseConfig, [
            'initialView' => 'dayGridMonth',
            'editable' => true,
            'selectable' => true,
            'eventStartEditable' => true,
            'eventDurationEditable' => true,
            'eventResizableFromStart' => true,
        ]);
    }

    /**
     * Gestisce il click su un evento.
     *
     * @param array<string, mixed> $info
     * @return void
     */
    public function onEventClick(array $info): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        $event = $info['event'] ?? null;
        
        if (!is_array($event)) {
            return;
        }

        $appointmentId = $event['id'] ?? null;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $appointmentId = $info['event']['id'] ?? null;
>>>>>>> 2099645a (.)
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev

        if (!$appointmentId) {
            return;
        }

        $appointment = Appointment::find($appointmentId);

        if (!$appointment) {
            return;
        }

        $this->dispatch('open-appointment-modal', [
            'appointmentId' => $appointmentId,
            'mode' => 'edit',
        ]);
    }

<<<<<<< HEAD
    /**
=======
<<<<<<< HEAD
<<<<<<< HEAD
    /**
=======
        /**
>>>>>>> 2099645a (.)
=======
    /**
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
     * Gestisce la selezione di un range di date.
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
        $this->dispatch('open-appointment-modal', [
            'start' => $start,
            'end' => $end,
            'allDay' => $allDay,
            'mode' => 'create',
        ]);
    }

    /**
     * Gestisce il drag&drop di un evento.
     *
     * @param array<string, mixed> $event
     * @param array<string, mixed> $oldEvent
     * @param array<string, mixed> $relatedEvents
     * @param array<string, mixed> $delta
     * @param array<string, mixed>|null $oldResource
     * @param array<string, mixed>|null $newResource
     * @return bool
     */
    public function onEventDrop(array $event, array $oldEvent, array $relatedEvents, array $delta, ?array $oldResource, ?array $newResource): bool
    {
        $appointmentId = $event['id'] ?? null;

        if (!$appointmentId) {
            return false;
        }

        $appointment = Appointment::find($appointmentId);

<<<<<<< HEAD
        if (!$appointment instanceof Appointment) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$appointment instanceof Appointment) {
=======
        if (!$appointment) {
>>>>>>> 2099645a (.)
=======
        if (!$appointment instanceof Appointment) {
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
            return false;
        }

        $appointment->update([
<<<<<<< HEAD
            'starts_at' => $event['start'],
            'ends_at' => $event['end'],
=======
<<<<<<< HEAD
            'starts_at' => $event['start'],
            'ends_at' => $event['end'],
=======
            'start_time' => $event['start'],
            'end_time' => $event['end'],
>>>>>>> 2099645a (.)
>>>>>>> aurmich/dev
        ]);

        $this->invalidateCache();

        return true;
    }

    /**
     * Gestisce il resize di un evento.
     *
     * @param array<string, mixed> $event
     * @param array<string, mixed> $oldEvent
     * @param array<string, mixed> $relatedEvents
     * @param array<string, mixed> $startDelta
     * @param array<string, mixed> $endDelta
     * @return bool
     */
    public function onEventResize(array $event, array $oldEvent, array $relatedEvents, array $startDelta, array $endDelta): bool
    {
        $appointmentId = $event['id'] ?? null;

        if (!$appointmentId) {
            return false;
        }

        $appointment = Appointment::find($appointmentId);

<<<<<<< HEAD
        if (!$appointment instanceof Appointment) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$appointment instanceof Appointment) {
=======
        if (!$appointment) {
>>>>>>> 2099645a (.)
=======
        if (!$appointment instanceof Appointment) {
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
            return false;
        }

        $appointment->update([
<<<<<<< HEAD
            'ends_at' => $event['end'],
=======
<<<<<<< HEAD
            'ends_at' => $event['end'],
=======
            'end_time' => $event['end'],
>>>>>>> 2099645a (.)
>>>>>>> aurmich/dev
        ]);

        $this->invalidateCache();

        return true;
    }

<<<<<<< HEAD



=======
<<<<<<< HEAD
<<<<<<< HEAD



=======
    /**
     * Trasforma un appuntamento in EventData con colori specifici per admin.
     *
     * @param Appointment $appointment
     * @return \Saade\FilamentFullCalendar\Data\EventData
     */
    protected function transformToEventData(Appointment $appointment): \Saade\FilamentFullCalendar\Data\EventData
    {
        return \Saade\FilamentFullCalendar\Data\EventData::make()
            ->id($appointment->id)
            ->title($this->formatEventTitle($appointment))
            ->start($appointment->start_time)
            ->end($appointment->end_time)
            ->backgroundColor($this->getStudioColor($appointment->studio))
            ->borderColor($this->getAppointmentStatusColor($appointment->status->value))
            ->textColor('#ffffff')
            ->extendedProps([
                'patient_id' => $appointment->patient_id,
                'patient_name' => $appointment->patient?->full_name,
                'doctor_id' => $appointment->doctor_id,
                'doctor_name' => $appointment->doctor?->full_name,
                'studio_id' => $appointment->studio_id,
                'studio_name' => $appointment->studio?->name,
                'status' => $appointment->status->value,
                'type' => $appointment->type->value,
                'emergency' => $appointment->emergency,
                'tooltip' => $this->formatTooltip($appointment),
                'can_edit' => true, // Admin può sempre modificare
                'can_view' => true,
                'duration' => $appointment->duration,
                'notes' => $appointment->notes ? Str::limit($appointment->notes, 100) : null,
            ]);
    }
>>>>>>> 2099645a (.)
=======



>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev

    /**
     * Ottiene le statistiche per il widget.
     *
     * @return array<string, mixed>
     */
    public function getStats(): array
    {
        $today = now()->startOfDay();
        $endOfWeek = now()->endOfWeek();

        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            'today_appointments' => Appointment::whereDate('starts_at', $today)->count(),
            'week_appointments' => Appointment::whereBetween('starts_at', [$today, $endOfWeek])->count(),
            'pending_appointments' => Appointment::where('status', AppointmentStatusEnum::PENDING->value)->count(),
            'emergency_appointments' => Appointment::where('emergency', true)->whereDate('starts_at', '>=', $today)->count(),
<<<<<<< HEAD
=======
=======
            'today_appointments' => Appointment::whereDate('start_time', $today)->count(),
            'week_appointments' => Appointment::whereBetween('start_time', [$today, $endOfWeek])->count(),
            'pending_appointments' => Appointment::where('status', AppointmentStatusEnum::PENDING->value)->count(),
<<<<<<< HEAD
            'emergency_appointments' => Appointment::emergency()->whereDate('start_time', '>=', $today)->count(),
>>>>>>> 2099645a (.)
=======
            'emergency_appointments' => Appointment::where('emergency', true)->whereDate('start_time', '>=', $today)->count(),
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
            'total_studios' => Studio::where('active', true)->count(),
        ];
    }

    /**
     * Ottiene il titolo del widget.
     *
     * @return string
     */
    protected function getHeading(): string
    {
        return 'Calendario Globale - Amministrazione';
    }

    /**
     * Ottiene la descrizione del widget.
     *
     * @return string|null
     */
    protected function getDescription(): ?string
    {
        $stats = $this->getStats();

        return sprintf(
            'Vista globale: %d appuntamenti oggi, %d questa settimana, %d emergenze attive',
<<<<<<< HEAD
            (int) $stats['today_appointments'],
            (int) $stats['week_appointments'],
            (int) $stats['emergency_appointments']
=======
<<<<<<< HEAD
<<<<<<< HEAD
            (int) $stats['today_appointments'],
            (int) $stats['week_appointments'],
            (int) $stats['emergency_appointments']
=======
            $stats['today_appointments'],
            $stats['week_appointments'],
            $stats['emergency_appointments']
>>>>>>> 2099645a (.)
=======
            (int) $stats['today_appointments'],
            (int) $stats['week_appointments'],
            (int) $stats['emergency_appointments']
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        );
    }

    /**
     * Ottiene le azioni del widget.
     *
     * @return array<int, mixed>
     */
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('export')
                ->icon('heroicon-o-arrow-down-tray')
                ->action(fn () => $this->exportCalendarData()),

            \Filament\Actions\Action::make('refresh')
                ->icon('heroicon-o-arrow-path')
                ->action(fn () => $this->refreshCalendar()),
        ];
    }

    /**
     * Esporta i dati del calendario.
     *
     * @return void
     */
    protected function exportCalendarData(): void
    {
        $this->dispatch('export-calendar-data', [
            'filters' => $this->filters,
        ]);
    }

    /**
     * Aggiorna il calendario.
     *
     * @return void
     */
    protected function refreshCalendar(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $this->invalidateCache();
        $this->dispatch('refresh-calendar');
    }


<<<<<<< HEAD
=======
=======
        $this->invalidateEventsCache();
        $this->dispatch('refresh-calendar');
    }
>>>>>>> 2099645a (.)
=======
        $this->invalidateCache();
        $this->dispatch('refresh-calendar');
    }


>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
}
