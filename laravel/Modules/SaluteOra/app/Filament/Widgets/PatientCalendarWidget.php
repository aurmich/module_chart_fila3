<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets;

use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Enums\UserTypeEnum;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Enums\UserTypeEnum;
=======
use Modules\SaluteOra\Enums\UserType;
>>>>>>> 2099645a (.)
=======
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Enums\UserTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Traits\HasFullCalendarConfig;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
<<<<<<< HEAD
use function Safe\strtotime;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\strtotime;
=======
>>>>>>> 2099645a (.)
=======
use function Safe\strtotime;
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev

/**
 * Widget FullCalendar per pazienti.
 *
 * Permette ai pazienti di visualizzare i propri appuntamenti in modalità sola lettura.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
 */
class PatientCalendarWidget extends FullCalendarWidget
{
<<<<<<< HEAD
<<<<<<< HEAD
   
=======
    //use HasFullCalendarConfig;
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
    use HasFullCalendarConfig;
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
>>>>>>> aurmich/dev
 */
class PatientCalendarWidget extends FullCalendarWidget
{
   
<<<<<<< HEAD
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
 * Utilizza il trait HasFullCalendarConfig per configurazioni comuni.
 */
class PatientCalendarWidget extends FullCalendarWidget
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
     * Verifica se l'utente può visualizzare il widget.
     *
     * @return bool
     */
    public static function canView(): bool
    {
<<<<<<< HEAD
        return Auth::check() && Auth::user()?->type === UserTypeEnum::PATIENT->value;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return Auth::check() && Auth::user()?->type === UserTypeEnum::PATIENT->value;
=======
        return auth()->check() && auth()->user()?->type === UserType::PATIENT;
>>>>>>> 2099645a (.)
=======
        return Auth::check() && Auth::user()?->type === UserTypeEnum::PATIENT->value;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
    }

    /**
     * Recupera gli eventi per il calendario.
     *
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        $cacheKey = $this->getCacheKey($fetchInfo);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        /** @var array<int, array<string, mixed>> $events */
        $events = cache()->remember($cacheKey, 300, function () use ($fetchInfo): array {
            return Appointment::query()
                ->where('patient_id', Auth::id())
                ->whereBetween('starts_at', [$fetchInfo['start'], $fetchInfo['end']])
                ->with(['doctor', 'studio'])
                ->limit(100)
                ->get()
                ->map(fn(Appointment $appointment): array => $this->transformToEventData($appointment))
                ->toArray();
        });

        return $events;
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
            'patient_calendar_%s_%s_%s',
            (string) (Auth::id() ?? 0),
            (string) ($fetchInfo['start'] ?? ''),
            (string) ($fetchInfo['end'] ?? '')
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
            'start' => $appointment->starts_at,
            'end' => $appointment->ends_at,
            'allDay' => false,
            'extendedProps' => [
                'doctor' => $appointment->doctor->name,
                'studio' => $appointment->studio->name,
                'status' => $appointment->status,
            ],
        ];
<<<<<<< HEAD
=======
=======
        return cache()->remember($cacheKey, 300, function () use ($fetchInfo) {
=======
        /** @var array<int, array<string, mixed>> $events */
        $events = cache()->remember($cacheKey, 300, function () use ($fetchInfo): array {
>>>>>>> 13ea6524 (phpstan)
            return Appointment::query()
                ->where('patient_id', Auth::id())
                ->whereBetween('start_time', [$fetchInfo['start'], $fetchInfo['end']])
                ->with(['doctor', 'studio'])
                ->limit(100)
                ->get()
                ->map(fn(Appointment $appointment): array => $this->transformToEventData($appointment))
                ->toArray();
        });
<<<<<<< HEAD
>>>>>>> 2099645a (.)
=======

        return $events;
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
            'patient_calendar_%s_%s_%s',
            (string) (Auth::id() ?? 0),
            (string) ($fetchInfo['start'] ?? ''),
            (string) ($fetchInfo['end'] ?? '')
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
            'start' => $appointment->start_time,
            'end' => $appointment->end_time,
            'allDay' => false,
            'extendedProps' => [
                'doctor' => $appointment->doctor->name,
                'studio' => $appointment->studio->name,
                'status' => $appointment->status,
            ],
        ];
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
    }

    /**
     * Schema del form per la creazione/modifica eventi.
     *
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        return [
            'readonly_info' => Section::make('Informazioni')
                ->schema([
                    Placeholder::make('readonly_info')
                        ->content('I pazienti possono solo visualizzare i propri appuntamenti. Per modifiche, contattare il proprio medico.'),
                ]),
        ];
    }

    /**
     * Configurazione specifica per il widget paziente.
     *
     * @return array<string, mixed>
     */
    public function config(): array
    {
        $baseConfig = parent::config();

        return array_merge($baseConfig, [
            'initialView' => 'timeGridWeek',
            'editable' => false,
            'selectable' => false,
            'eventStartEditable' => false,
            'eventDurationEditable' => false,
            'eventResizableFromStart' => false,
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
        // I pazienti possono solo visualizzare i dettagli
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        if (!isset($info['event']) || !is_array($info['event'])) {
            return;
        }

        $appointmentId = $info['event']['id'] ?? null;
        
        if ($appointmentId !== null) {
            $this->dispatch('open-appointment-details', [
                'appointmentId' => $appointmentId,
                'readonly' => true,
            ]);
        }
<<<<<<< HEAD
    }

=======
<<<<<<< HEAD
    }

=======
        $this->dispatch('open-appointment-details', [
            'appointmentId' => $info['event']['id'],
            'readonly' => true,
        ]);
    }



>>>>>>> 2099645a (.)
=======
    }

>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
    /**
     * Gestisce il drop di eventi.
     * I pazienti non possono spostare appuntamenti.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
     * @param array<string, mixed> $event
     * @param array<string, mixed> $oldEvent
     * @param array<string, mixed> $relatedEvents
     * @param array<string, mixed> $delta
     * @param array<string, mixed>|null $oldResource
     * @param array<string, mixed>|null $newResource
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * @param array<string, mixed> $info
>>>>>>> 2099645a (.)
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
     * @return bool
     */
    public function onEventDrop(array $event, array $oldEvent, array $relatedEvents, array $delta, ?array $oldResource, ?array $newResource): bool
    {
        // I pazienti non possono spostare appuntamenti
        return false;
    }

    /**
     * Gestisce il resize di eventi.
     * I pazienti non possono ridimensionare appuntamenti.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
     * @param array<string, mixed> $event
     * @param array<string, mixed> $oldEvent
     * @param array<string, mixed> $relatedEvents
     * @param array<string, mixed> $startDelta
     * @param array<string, mixed> $endDelta
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * @param array<string, mixed> $info
>>>>>>> 2099645a (.)
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
     * @return bool
     */
    public function onEventResize(array $event, array $oldEvent, array $relatedEvents, array $startDelta, array $endDelta): bool
    {
        // I pazienti non possono ridimensionare appuntamenti
        return false;
    }

    /**
     * Ottiene il titolo del widget.
     *
     * @return string
     */
    protected function getHeading(): string
    {
        return 'I Miei Appuntamenti';
    }

    /**
     * Ottiene la descrizione del widget.
     *
     * @return string|null
     */
    protected function getDescription(): ?string
    {
        return 'Visualizza i tuoi appuntamenti programmati. Per modifiche, contatta il tuo medico.';
    }
}
