<?php

<<<<<<< HEAD
<<<<<<< HEAD
// DEPRECATO: Vietato usare questo modello. Tutte le disponibilità dei dottori vanno gestite solo tramite la tabella appointments (con patient_id null o type AVAILABILITY). Vedi docs/appointment-management.md e docs/calendar/doctor-availability-management.md
// Questo file va eliminato appena possibile.

=======
>>>>>>> 54f4fa16 (.)
=======
// DEPRECATO: Vietato usare questo modello. Tutte le disponibilità dei dottori vanno gestite solo tramite la tabella appointments (con patient_id null o type AVAILABILITY). Vedi docs/appointment-management.md e docs/calendar/doctor-availability-management.md
// Questo file va eliminato appena possibile.

>>>>>>> d18a3adf (✨ (saluteora): implement new DoctorAvailabilityCalendar widget to manage doctor availability using FullCalendar)
declare(strict_types=1);

namespace Modules\SaluteOra\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Xot\Enums\DayOfWeek;

<<<<<<< HEAD
/**
 * 
 *
 * @property DayOfWeek $day
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Modules\SaluteOra\Models\Doctor|null $doctor
 * @property-read string $day_label
 * @property-read string $day_short_label
 * @property-read string $time_range
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Modules\SaluteOra\Database\Factories\DoctorAvailabilityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorAvailability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorAvailability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorAvailability query()
 * @mixin \Eloquent
 */
=======
>>>>>>> 54f4fa16 (.)
class DoctorAvailability extends BaseModel
{
    protected $fillable = [
        'doctor_id',
        'day',
        'start_time',
        'end_time',
        'is_available',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    protected function casts(): array
=======
    public function casts(): array
>>>>>>> 54f4fa16 (.)
=======
    protected function casts(): array
>>>>>>> 2099645a (.)
    {
        return array_merge(parent::casts(), [
            'day' => DayOfWeek::class,
            'start_time' => 'datetime',
            'end_time' => 'datetime',
            'is_available' => 'boolean',
        ]);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function getDayLabelAttribute(): string
    {
        return __("xot::enums.day_of_week.{$this->day->value}");
    }

    public function getDayShortLabelAttribute(): string
    {
        return __("xot::enums.day_of_week_short.{$this->day->value}");
    }

    public function getTimeRangeAttribute(): string
    {
        return sprintf(
            '%s - %s',
            $this->start_time->format('H:i'),
            $this->end_time->format('H:i')
        );
    }
}
