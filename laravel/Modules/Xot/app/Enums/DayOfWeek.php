<?php

declare(strict_types=1);

namespace Modules\Xot\Enums;

use Carbon\Carbon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Collection;

/**
 * Enum per la gestione dei giorni della settimana.
 *
 * Questo enum fornisce funzionalità per:
 * - Rappresentare i giorni della settimana
 * - Ottenere etichette localizzate
 * - Gestire giorni lavorativi e weekend
 * - Calcolare giorni successivi
 * - Integrazione con Filament UI
 */
enum DayOfWeek: int implements HasLabel, HasColor, HasIcon, HasDescription
{
    case MONDAY = 1;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
    case THURSDAY = 4;
    case FRIDAY = 5;
    case SATURDAY = 6;
    case SUNDAY = 7;

    /**
     * Restituisce l'etichetta localizzata per questo giorno della settimana.
     * Implementazione dell'interfaccia HasLabel di Filament.
     */
<<<<<<< HEAD
    public function getLabel(): string
    {
        $carbon = Carbon::now()->startOfWeek()->addDays($this->value - 1);
        $carbon->locale('it');
        return (string) $carbon->isoFormat('dddd');
=======
    public function getLabel(): ?string
    {
        return Carbon::create()->startOfWeek()->addDays($this->value - 1)->locale('it')->isoFormat('dddd');
>>>>>>> aurmich/dev
    }

    /**
     * Restituisce il colore associato a questo giorno della settimana.
     * Implementazione dell'interfaccia HasColor di Filament.
     */
<<<<<<< HEAD
    public function getColor(): string
=======
    public function getColor(): string|array|null
>>>>>>> aurmich/dev
    {
        return match($this) {
            self::MONDAY => 'primary',
            self::TUESDAY => 'success',
            self::WEDNESDAY => 'warning',
            self::THURSDAY => 'danger',
            self::FRIDAY => 'info',
            self::SATURDAY => 'gray',
            self::SUNDAY => 'gray',
        };
    }

    /**
     * Restituisce l'icona associata a questo giorno della settimana.
     * Implementazione dell'interfaccia HasIcon di Filament.
     */
<<<<<<< HEAD
    public function getIcon(): string
=======
    public function getIcon(): ?string
>>>>>>> aurmich/dev
    {
        return match($this) {
            self::MONDAY => 'heroicon-o-calendar',
            self::TUESDAY => 'heroicon-o-calendar',
            self::WEDNESDAY => 'heroicon-o-calendar',
            self::THURSDAY => 'heroicon-o-calendar',
            self::FRIDAY => 'heroicon-o-calendar',
            self::SATURDAY => 'heroicon-o-calendar',
            self::SUNDAY => 'heroicon-o-calendar',
        };
    }
    
    /**
     * Restituisce la descrizione dettagliata di questo giorno della settimana.
     * Implementazione dell'interfaccia HasDescription di Filament.
     */
<<<<<<< HEAD
    public function getDescription(): string
=======
    public function getDescription(): ?string
>>>>>>> aurmich/dev
    {
        return match($this) {
            self::MONDAY => __('saluteora::common.days.description.monday'),
            self::TUESDAY => __('saluteora::common.days.description.tuesday'),
            self::WEDNESDAY => __('saluteora::common.days.description.wednesday'),
            self::THURSDAY => __('saluteora::common.days.description.thursday'),
            self::FRIDAY => __('saluteora::common.days.description.friday'),
            self::SATURDAY => __('saluteora::common.days.description.saturday'),
            self::SUNDAY => __('saluteora::common.days.description.sunday'),
        };
    }

    /**
     * Restituisce l'etichetta abbreviata per questo giorno della settimana.
     */
    public function shortLabel(): string
    {
<<<<<<< HEAD
        $carbon = Carbon::now()->startOfWeek()->addDays($this->value - 1);
        $carbon->locale('it');
        return (string) $carbon->isoFormat('ddd');
=======
        return Carbon::create()->startOfWeek()->addDays($this->value - 1)->locale('it')->isoFormat('ddd');
>>>>>>> aurmich/dev
    }

    /**
     * Converte tutti i casi dell'enum in un array associativo per l'uso nei componenti select.
     *
     * @return array<int, string>
     */
    public static function toArray(): array
    {
<<<<<<< HEAD
        $result = [];
        foreach (self::cases() as $case) {
            $result[$case->value] = $case->getLabel();
        }
        return $result;
=======
        return collect(self::cases())->mapWithKeys(fn ($case) => [
            $case->value => $case->getLabel()
        ])->toArray();
>>>>>>> aurmich/dev
    }

    /**
     * Restituisce una collezione dei giorni lavorativi (lunedì-venerdì).
     *
<<<<<<< HEAD
     * @return Collection<int, self>
     */
    public static function workingDays(): Collection
    {
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value <= 5);
        return $filtered;
=======
     * @return Collection<self>
     */
    public static function workingDays(): Collection
    {
        return collect(self::cases())->filter(fn ($day) => $day->value <= 5);
>>>>>>> aurmich/dev
    }

    /**
     * Restituisce una collezione dei giorni del weekend (sabato-domenica).
     *
<<<<<<< HEAD
     * @return Collection<int, self>
     */
    public static function weekendDays(): Collection
    {
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value > 5);
        return $filtered;
=======
     * @return Collection<self>
     */
    public static function weekendDays(): Collection
    {
        return collect(self::cases())->filter(fn ($day) => $day->value > 5);
>>>>>>> aurmich/dev
    }

    /**
     * Determina se questo giorno è un giorno del weekend.
     */
    public function isWeekend(): bool
    {
        return $this->value > 5;
    }

    /**
     * Ottiene il giorno successivo della settimana.
     */
    public function next(): self
    {
        return match($this) {
            self::MONDAY => self::TUESDAY,
            self::TUESDAY => self::WEDNESDAY,
            self::WEDNESDAY => self::THURSDAY,
            self::THURSDAY => self::FRIDAY,
            self::FRIDAY => self::SATURDAY,
            self::SATURDAY => self::SUNDAY,
            self::SUNDAY => self::MONDAY,
        };
    }
}
