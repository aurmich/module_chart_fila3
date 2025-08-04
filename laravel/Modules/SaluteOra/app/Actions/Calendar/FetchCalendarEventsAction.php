<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Actions\Calendar;

use Carbon\CarbonInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Spatie\QueueableAction\QueueableAction;
use Modules\SaluteOra\Models\Appointment;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Enums\AppointmentTypeEnum;
=======
use Modules\SaluteOra\Enums\UserType;
use Modules\SaluteOra\Enums\AppointmentType;
>>>>>>> 2099645a (.)
=======
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Enums\AppointmentTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

class FetchCalendarEventsAction
{
    use QueueableAction;

    /**
     * Execute the action to fetch calendar events
     *
     * @param  CarbonInterface  $start
     * @param  CarbonInterface  $end
     * @param  array<string, mixed>  $filters
     * @return Collection<int, array<string, mixed>>
     */
    public function execute(
        CarbonInterface $start, 
        CarbonInterface $end,
        array $filters = []
    ): Collection {
        $query = Appointment::query()
            ->with(['patient', 'doctor', 'studio'])
<<<<<<< HEAD
            ->whereBetween('starts_at', [$start, $end]);
=======
            ->whereBetween('start_time', [$start, $end]);
>>>>>>> 2099645a (.)

        $this->applyFilters($query, $filters);

        return $query->get()->map(function (Appointment $appointment) {
            return $this->transformAppointment($appointment);
        });
    }

    /**
     * Apply filters to the query
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array<string, mixed>  $filters
     * @return void
     */
    protected function applyFilters($query, array $filters): void
    {
        $user = Auth::user();
        
        // Apply role-based filters
        if ($user) {
            match ($user->type) {
<<<<<<< HEAD
<<<<<<< HEAD
                UserTypeEnum::DOCTOR => $query->where('doctor_id', $user->id),
                UserTypeEnum::PATIENT => $query->where('patient_id', $user->id),
=======
                UserType::DOCTOR => $query->where('doctor_id', $user->id),
                UserType::PATIENT => $query->where('patient_id', $user->id),
>>>>>>> 2099645a (.)
=======
                UserTypeEnum::DOCTOR => $query->where('doctor_id', $user->id),
                UserTypeEnum::PATIENT => $query->where('patient_id', $user->id),
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
                default => $query,
            };
        }

        // Apply additional filters
        foreach ($filters as $key => $value) {
            if ($value !== null && $value !== '') {
                $query->where($key, $value);
            }
        }
    }

    /**
     * Transform appointment to calendar event format
     *
     * @param  Appointment  $appointment
     * @return array<string, mixed>
     */
    protected function transformAppointment(Appointment $appointment): array
    {
        $title = $this->formatEventTitle($appointment);
        $color = $this->getEventColor($appointment);
        
        return [
            'id' => $appointment->id,
            'title' => $title,
<<<<<<< HEAD
            'start' => $appointment->starts_at?->toIso8601String(),
            'end' => $appointment->ends_at?->toIso8601String(),
=======
            'start' => $appointment->start_time->toIso8601String(),
<<<<<<< HEAD
            'end' => $appointment->end_time?->toIso8601String(),
>>>>>>> 2099645a (.)
=======
            'end' => $appointment->end_time->toIso8601String(),
>>>>>>> 8e4d163b (phpstan)
            'allDay' => false,
            'backgroundColor' => $color,
            'borderColor' => $color,
            'textColor' => $this->getContrastColor($color),
            'extendedProps' => [
<<<<<<< HEAD
<<<<<<< HEAD
                'type' => $appointment->type->value,
                'status' => $appointment->status->value,
                'patient_id' => $appointment->patient_id,
                'patient_name' =>  $appointment->patient->full_name,
                'doctor_id' => $appointment->doctor_id,
                'doctor_name' => $appointment->doctor->full_name,
                'studio_id' => $appointment->studio_id,
                'studio_name' => $appointment->studio->name,
=======
                'type' => $appointment->type?->value,
                'status' => $appointment->status?->value,
=======
                'type' => $appointment->type->value,
                'status' => $appointment->status->value,
>>>>>>> 8e4d163b (phpstan)
                'patient_id' => $appointment->patient_id,
                'patient_name' => $appointment->patient->full_name,
                'doctor_id' => $appointment->doctor_id,
                'doctor_name' => $appointment->doctor->full_name,
                'studio_id' => $appointment->studio_id,
<<<<<<< HEAD
                'studio_name' => $appointment->studio?->name,
>>>>>>> 2099645a (.)
=======
                'studio_name' => $appointment->studio->name,
>>>>>>> 8e4d163b (phpstan)
                'emergency' => $appointment->emergency,
                'notes' => $appointment->notes,
            ],
            'editable' => $this->isEditable($appointment),
        ];
    }

    /**
     * Format the event title
     *
     * @param  Appointment  $appointment
     * @return string
     */
    protected function formatEventTitle(Appointment $appointment): string
    {
        $parts = [];
        
        if ($appointment->patient) {
<<<<<<< HEAD
            $parts[] =  $appointment->patient->full_name;
=======
            $parts[] = $appointment->patient->full_name;
>>>>>>> 2099645a (.)
        }
        
        if ($appointment->type) {
            $parts[] = $appointment->type->getLabel();
        }
        
        if ($appointment->emergency) {
            $parts[] = '🚨 ' . __('saluteora::app.emergency');
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
        if ($appointment->status !== \Modules\SaluteOra\Enums\AppointmentStatusEnum::CONFIRMED) {
=======
        if ($appointment->status !== \Modules\SaluteOra\Enums\AppointmentStatus::CONFIRMED) {
>>>>>>> 2099645a (.)
=======
        if ($appointment->status !== \Modules\SaluteOra\Enums\AppointmentStatusEnum::CONFIRMED) {
>>>>>>> 8e4d163b (phpstan)
            $parts[] = '(' . $appointment->status->getLabel() . ')';
        }
        
        return implode(' • ', $parts);
    }

    /**
     * Get event color based on appointment properties
     *
     * @param  Appointment  $appointment
     * @return string
     */
    protected function getEventColor(Appointment $appointment): string
    {
        if ($appointment->emergency) {
            return '#dc3545'; // Red for emergencies
        }
        
        return match ($appointment->type) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
            AppointmentTypeEnum::CONSULTATION->value => '#fd7e14',
            AppointmentTypeEnum::CLEANING->value => '#17a2b8',
            AppointmentTypeEnum::TREATMENT->value => '#28a745',
            AppointmentTypeEnum::EMERGENCY->value => '#dc3545',
            AppointmentTypeEnum::FOLLOWUP->value => '#ffc107',
            AppointmentTypeEnum::SURGERY->value => '#6f42c1',
            AppointmentTypeEnum::ORTHODONTICS->value => '#6f42c1',
            AppointmentTypeEnum::PREVENTION->value => '#17a2b8',
<<<<<<< HEAD
=======
            AppointmentType::CONSULTATION->value => '#fd7e14',
            AppointmentType::CLEANING->value => '#17a2b8',
            AppointmentType::TREATMENT->value => '#28a745',
            AppointmentType::EMERGENCY->value => '#dc3545',
            AppointmentType::FOLLOWUP->value => '#ffc107',
            AppointmentType::SURGERY->value => '#6f42c1',
            AppointmentType::ORTHODONTICS->value => '#6f42c1',
            AppointmentType::PREVENTION->value => '#17a2b8',
>>>>>>> 2099645a (.)
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
            default => '#3490dc',
        };
    }

    /**
     * Get contrast color (black or white) for text
     *
     * @param  string  $hexColor
     * @return string
     */
    protected function getContrastColor(string $hexColor): string
    {
        $hexColor = ltrim($hexColor, '#');
        $r = hexdec(substr($hexColor, 0, 2));
        $g = hexdec(substr($hexColor, 2, 2));
        $b = hexdec(substr($hexColor, 4, 2));
        $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;
        return $luminance > 0.5 ? '#000000' : '#ffffff';
    }

    /**
     * Check if appointment is editable by current user
     *
     * @param  Appointment  $appointment
     * @return bool
     */
    protected function isEditable(Appointment $appointment): bool
    {
        $user = Auth::user();
<<<<<<< HEAD
        if (!$user) {
            return false;
        }
        // Only allow editing if the appointment is not in the past
        // and the user is the assigned doctor or has admin rights
        return ($appointment->starts_at instanceof \Carbon\CarbonInterface && $appointment->starts_at->isFuture()) &&
               ($user->type === UserTypeEnum::ADMIN || $user->id === $appointment->doctor_id);
=======
        
        if (!$user) {
            return false;
        }

        // Only allow editing if the appointment is not in the past
        // and the user is the assigned doctor or has admin rights
        return $appointment->start_time->isFuture() && 
               ($user->type === UserTypeEnum::ADMIN || 
                $user->id === $appointment->doctor_id);
>>>>>>> 2099645a (.)
    }
}
