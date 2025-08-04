<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;

/**
 * Defines the different types of appointments in the system.
 * 
 * @method static self fromName(string $name)
 * @method static self fromValue(string $value)
 * @method static self tryFromName(string $name)
 * @method static self tryFromValue(string $value)
 * @method static self[] cases()
 */
enum DayOfWeekEnum: string implements HasLabel, HasIcon, HasColor
<<<<<<< HEAD
=======
enum DayOfWeekEnum implements FilamentSupportContractsHasLabel: string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 8e4d163b (phpstan)
{
    case Monday = 'monday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
    case Thursday = 'thursday';
    case Friday = 'friday';
    case Saturday = 'saturday';
    case Sunday = 'sunday';

    /**
     * Restituisce l'etichetta localizzata per questo giorno della settimana.
     */
    public function label(): string
    {
        $prefix = 'saluteora::doctor.fields.day.options';
        return trans("$prefix.{$this->value}");
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)

    public function getLabel(): string
    {
        return $this->label();
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Monday => 'heroicon-o-calendar-days',
            self::Tuesday => 'heroicon-o-calendar-days',
            self::Wednesday => 'heroicon-o-calendar-days',
            self::Thursday => 'heroicon-o-calendar-days',
            self::Friday => 'heroicon-o-calendar-days',
            self::Saturday => 'heroicon-o-star',
            self::Sunday => 'heroicon-o-star',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Monday => 'primary',
            self::Tuesday => 'primary',
            self::Wednesday => 'primary',
            self::Thursday => 'primary',
            self::Friday => 'primary',
            self::Saturday => 'warning',
            self::Sunday => 'danger',
        };
    }
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 8e4d163b (phpstan)
    
    /**
     * Converte tutti i casi dell'enum in un array associativo per l'uso nei componenti select.
     * 
     * @return array<string, string>
     */
    public static function toArray(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
        $result = [];
        foreach (self::cases() as $case) {
            $result[$case->value] = $case->label();
        }
        return $result;
<<<<<<< HEAD
=======
        return collect(self::cases())->mapWithKeys(fn ($case) => [
            $case->value => $case->label()
        ])->toArray();
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 8e4d163b (phpstan)
    }
    
    /**
     * Determina se questo giorno è un giorno del weekend.
     */
    public function isWeekend(): bool
    {
        return in_array($this, [self::Saturday, self::Sunday]);
    }
    
    /**
     * Ottiene il giorno successivo della settimana.
     */
    public function getNextDay(): self
    {
        return match($this) {
            self::Monday => self::Tuesday,
            self::Tuesday => self::Wednesday,
            self::Wednesday => self::Thursday,
            self::Thursday => self::Friday,
            self::Friday => self::Saturday,
            self::Saturday => self::Sunday,
            self::Sunday => self::Monday,
        };
    }
    
    /**
     * Ottiene il numero del giorno della settimana (1 = Lunedì, 7 = Domenica).
     */
    public function getDayNumber(): int
    {
        return match ($this) {
            self::Monday => 1,
            self::Tuesday => 2,
            self::Wednesday => 3,
            self::Thursday => 4,
            self::Friday => 5,
            self::Saturday => 6,
            self::Sunday => 7,
        };
    }
}

// Alias per retrocompatibilità
<<<<<<< HEAD
<<<<<<< HEAD
//class_alias(DayOfWeekEnum::class, 'Modules\\SaluteOra\\Enums\\DayOfWeek');

   
=======
class_alias(DayOfWeekEnum::class, 'Modules\\SaluteOra\\Enums\\DayOfWeek');

    /**
     * Get the translated label for the enum case.
     */
    public function getLabel(): ?string
    {
        return match ($this) {
            self::Monday => __('saluteora::enums.dayofweek.monday'),
            self::Tuesday => __('saluteora::enums.dayofweek.tuesday'),
            self::Wednesday => __('saluteora::enums.dayofweek.wednesday'),
            self::Thursday => __('saluteora::enums.dayofweek.thursday'),
            self::Friday => __('saluteora::enums.dayofweek.friday'),
            self::Saturday => __('saluteora::enums.dayofweek.saturday'),
            self::Sunday => __('saluteora::enums.dayofweek.sunday'),
        };
    }
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
//class_alias(DayOfWeekEnum::class, 'Modules\\SaluteOra\\Enums\\DayOfWeek');

   
>>>>>>> 8e4d163b (phpstan)
