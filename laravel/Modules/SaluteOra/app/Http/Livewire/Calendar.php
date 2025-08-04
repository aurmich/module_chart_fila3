<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Modules\SaluteOra\Enums\AppointmentStatus;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Enums\AppointmentTypeEnum;

class Calendar extends Component
{
    public array $config = [];
    public array $events = [];
    public array $filters = [
=======
use Modules\SaluteOra\Enums\AppointmentType;
=======
use Modules\SaluteOra\Enums\AppointmentTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

class Calendar extends Component
{
    public $config = [];
    public $events = [];
    public $filters = [
>>>>>>> 2099645a (.)
        'status' => null,
        'type' => null,
        'doctor_id' => null,
        'studio_id' => null,
    ];
<<<<<<< HEAD
    public array $availableSlots = [];
    public ?string $selectedDate = null;
    public bool $showSlotModal = false;
=======
    public $availableSlots = [];
    public $selectedDate;
    public $showSlotModal = false;
>>>>>>> 2099645a (.)

    protected $listeners = [
        'refreshCalendar' => '$refresh',
        'eventClick',
        'select',
    ];

<<<<<<< HEAD
    public function mount(): void
=======
    public function mount()
>>>>>>> 2099645a (.)
    {
        $this->selectedDate = now()->toDateString();
        $this->loadConfig();
        $this->fetchEvents();
    }

<<<<<<< HEAD
    protected function loadConfig(): void
=======
    public function loadConfig()
>>>>>>> 2099645a (.)
    {
        try {
            $response = Http::get(route('saluteora.calendar.config'));
            if ($response->successful()) {
                $this->config = $response->json();
            }
        } catch (\Exception $e) {
            $this->addError('config', __('Failed to load calendar configuration'));
        }
    }

<<<<<<< HEAD
    public function nextMonth(): void
    {
        $this->selectedDate = Carbon::parse($this->selectedDate)
            ->addMonth()
            ->toDateString();
        $this->fetchEvents();
    }

    public function previousMonth(): void
    {
        $this->selectedDate = Carbon::parse($this->selectedDate)
            ->subMonth()
            ->toDateString();
        $this->fetchEvents();
    }

    public function fetchEvents(): void
=======
    public function fetchEvents()
>>>>>>> 2099645a (.)
    {
        try {
            $start = now()->startOfMonth()->startOfDay()->toIso8601String();
            $end = now()->addMonths(3)->endOfMonth()->endOfDay()->toIso8601String();

            $response = Http::get(route('saluteora.calendar.events'), [
                'start' => $start,
                'end' => $end,
                'filters' => array_filter($this->filters),
            ]);

            if ($response->successful()) {
                $this->events = $response->json();
            }
        } catch (\Exception $e) {
            $this->addError('events', __('Failed to load calendar events'));
        }
    }

    public function updatedFilters()
    {
        $this->fetchEvents();
    }

    public function loadAvailableSlots($date)
    {
        try {
            $this->selectedDate = $date;
            $response = Http::get(route('saluteora.calendar.available-slots'), [
                'date' => $date,
                'duration' => 30, // Default duration in minutes
            ]);

            if ($response->successful()) {
                $this->availableSlots = $response->json();
                $this->showSlotModal = true;
            }
        } catch (\Exception $e) {
            $this->addError('slots', __('Failed to load available slots'));
        }
    }

    public function eventClick($event)
    {
        $this->emit('showAppointmentDetails', $event['id']);
    }

    public function select($selection)
    {
        $this->emit('createAppointment', [
            'start' => $selection['start'],
            'end' => $selection['end'],
            'allDay' => $selection['allDay'] ?? false,
        ]);
    }

    public function getStatusesProperty()
    {
        return collect(AppointmentStatus::cases())->mapWithKeys(fn ($status) => [
            $status->value => $status->getLabel()
        ]);
    }

    public function getTypesProperty()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return collect(AppointmentTypeEnum::cases())->mapWithKeys(fn ($type) => [
=======
        return collect(AppointmentType::cases())->mapWithKeys(fn ($type) => [
>>>>>>> 2099645a (.)
=======
        return collect(AppointmentTypeEnum::cases())->mapWithKeys(fn ($type) => [
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
            $type->value => $type->getLabel()
        ]);
    }

    public function render()
    {
        return view('saluteora::livewire.calendar', [
            'statuses' => $this->statuses,
            'types' => $this->types,
        ]);
    }
}
