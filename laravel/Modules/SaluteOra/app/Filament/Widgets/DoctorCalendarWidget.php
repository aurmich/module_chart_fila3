<?php

<<<<<<< HEAD
namespace Modules\SaluteOra\Filament\Widgets;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Saade\FilamentFullCalendar\Actions;
use Modules\SaluteOra\Models\Appointment;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class DoctorCalendarWidget extends FullCalendarWidget
{
    public Model | string | null $model = Appointment::class;
    public string $calendarContainerClass = '';

    protected  ?string $modelLabel = 'Appuntamento'; // Singolare
    protected ?string $pluralModelLabel = 'Appuntamenti'; // Plurale

    protected function headerActions(): array
    {
        return [
            //Actions\CreateAction::make(),
            /*
            \Filament\Actions\Action::make('studio')
            ->label(fn () => 'Studio: ' . optional($this->studio)->name)
            //->disabled() // Solo visualizzazione
            ->form([
                Forms\Components\Select::make('authorId')
                    ->label('Author')
                    ->options(['1'=>'1','2'=>'2'])
                    ->required(),
            ])->action(function ($data) {
                dd($data);
            })
            ->color('gray'),
           */
        ];
    }

    protected function modalActions(): array
    {
        return [
            //Actions\EditAction::make(),
            //Actions\DeleteAction::make(),
        ];
    }

    public function config(): array
    {
        $lang=app()->getLocale();
        
        return [
            'firstDay' => 1,
            'headerToolbar' => [
                //'left' => 'dayGridWeek,dayGridMonth',
                'left' => 'prev',
                'center' => 'title',
                //'right' => 'today prev,next',
                //'right' => 'prev,next',
                'right' => 'next',
            ],
            'titleFormat' => [
                'year' => 'numeric',
                'month' => 'long' // Questo dovrebbe capitalizzare automaticamente
            ],
            'locale' =>  $lang,
            'modal_title' => 'Zibibbo',
        ];
    }

   

    //protected function viewAction(): Action
    //{
    //    return Actions\ViewAction::make();
    //}

    public function getFormSchema(): array
    {
       
        return [
           Forms\Components\Grid::make('patient')
               ->relationship('patient')
               ->schema([
                    'first_name' => Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255),
            'last_name' => Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255),
                /*
            'fiscal_code' => Forms\Components\TextInput::make('fiscal_code')
                ->required()
                ->maxLength(16),
                */
            'email' => Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            'phone' => Forms\Components\TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(20),
                ])->columns(2),

            Forms\Components\Grid::make()
                ->schema([
                   // Forms\Components\TextInput::make('patient.first_name')
                   // ->formatStateUsing(fn($state,$record) => $record->patient->first_name),
                    //Forms\Components\TextInput::make('patient.last_name')
                    //->formatStateUsing(fn($state,$record) => $record->patient->last_name),
                    Forms\Components\DateTimePicker::make('starts_at'),
                    Forms\Components\DateTimePicker::make('ends_at'),
                ]),
            Forms\Components\Textarea::make('notes'),
            Forms\Components\TextInput::make('state'),
        ];
    }


    public function fetchEvents(array $fetchInfo): array
    {
        return Appointment::query()
            ->where('starts_at', '>=', $fetchInfo['start'])
            ->where('ends_at', '<=', $fetchInfo['end'])
            ->where('doctor_id',auth()->id())
            ->get()
            ->map(
                fn (Appointment $event) => EventData::make()
                    ->id($event->id)
                    ->title($event->patient()->first()->full_name ?? 'N/A')
                    /** @phpstan-ignore argument.type */
                    ->start($event->starts_at)
                    ->end($event->ends_at)
                    ->backgroundColor($event->state->bgColor())
                    //->backgroundColor('#00aa00')
                    ->borderColor($event->state->bgColor())
                    //->textColor('blue')
                    ->textColor($event->state->bgColor())
                    //->textColor('blue')
                    //->extraProperties(['class'=>['text-gray-600']])
                    //->url(
                    //    url: EventResource::getUrl(name: 'view', parameters: ['record' => $event]),
                    //    shouldOpenUrlInNewTab: true
                    //)
            )
            ->toArray();
    }


    protected function getViewEventModalTitle(): string
    {
        return __('Vedi :label', ['label' => __('Appuntamento')]);
    }

    
=======
declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets;

use Filament\Facades\Filament;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Enums\AppointmentStatus;
use Modules\SaluteOra\Enums\AppointmentType;
use Modules\SaluteOra\Enums\UserType;
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Traits\HasFullCalendarConfig;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

/**
 * Widget FullCalendar per dottori.
 *
 * Permette ai dottori di gestire gli appuntamenti del proprio studio
 * con funzionalità CRUD complete, drag&drop e resize.
 * Utilizza il trait HasFullCalendarConfig per configurazioni comuni.
 */
class DoctorCalendarWidget extends FullCalendarWidget
{
    use HasFullCalendarConfig;

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

    /**
     * Verifica se l'utente può visualizzare il widget.
     *
     * @return bool
     */
    public static function canView(): bool
    {
        return Auth::check() &&
               Auth::user()?->type === UserType::DOCTOR &&
               Filament::getTenant() !== null;
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

        return cache()->remember($cacheKey, 300, function () use ($fetchInfo) {
            $query = Appointment::query()
                ->where('studio_id', Filament::getTenant()->id)
                ->whereBetween('start_time', [$fetchInfo['start'], $fetchInfo['end']])
                ->with(['patient', 'doctor']);

            // Se non è admin, mostra solo propri appuntamenti
            $user = Auth::user();
            if ($user && $user->type !== UserType::ADMIN) {
                $query->where('doctor_id', Auth::id());
            }

            return $query->limit(100)
                ->get()
                ->map(fn($appointment) => $this->transformToEventData($appointment))
                ->toArray();
        });
    }

    /**
     * Schema del form per la creazione/modifica eventi.
     *
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        return [
            'appointment_details' => Section::make('Dettagli Appuntamento')
                ->schema([
                    Select::make('patient_id')
                        ->relationship('patient', 'full_name')
                        ->searchable()
                        ->required(),
                    Select::make('type')
                        ->options(AppointmentType::class)
                        ->required(),
                    DateTimePicker::make('start_time')
                        ->required(),
                    DateTimePicker::make('end_time')
                        ->required(),
                    Select::make('status')
                        ->options(AppointmentStatus::class)
                        ->default(AppointmentStatus::SCHEDULED),
                    Textarea::make('notes')
                        ->rows(3),
                    Toggle::make('emergency'),
                ]),
        ];
    }

    /**
     * Configurazione specifica per il widget dottore.
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
        $appointmentId = $info['event']['id'] ?? null;

        if (!$appointmentId) {
            return;
        }

        $appointment = Appointment::find($appointmentId);

        if (!$appointment || !$this->canEditAppointment($appointment)) {
            return;
        }

        $this->dispatch('open-appointment-modal', [
            'appointmentId' => $appointmentId,
            'mode' => 'edit',
        ]);
    }

    /**
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

        if (!$appointment || !$this->canEditAppointment($appointment)) {
            return false;
        }

        $appointment->update([
            'start_time' => $event['start'],
            'end_time' => $event['end'],
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

        if (!$appointment || !$this->canEditAppointment($appointment)) {
            return false;
        }

        $appointment->update([
            'end_time' => $event['end'],
        ]);

        $this->invalidateCache();

        return true;
    }

    /**
     * Ottiene il titolo del widget.
     *
     * @return string
     */
    protected function getHeading(): string
    {
        $tenant = Filament::getTenant();
        return "Calendario - {$tenant?->name}";
    }

    /**
     * Ottiene la descrizione del widget.
     *
     * @return string|null
     */
    protected function getDescription(): ?string
    {
        return 'Gestisci gli appuntamenti del tuo studio. Trascina per spostare, ridimensiona per modificare la durata.';
    }
>>>>>>> 2099645a (.)
}
