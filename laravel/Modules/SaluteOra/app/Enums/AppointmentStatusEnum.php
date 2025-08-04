<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

<<<<<<< HEAD
=======
<<<<<<< HEAD
/**
 * @deprecated Use AppointmentStatusEnum instead
 */
enum AppointmentStatus: string
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;

<<<<<<< HEAD
enum AppointmentStatusEnum: string implements HasLabel, HasIcon, HasColor
=======
<<<<<<<< HEAD:laravel/Modules/SaluteOra/app/Enums/AppointmentStatus.php
enum AppointmentStatus: string implements HasLabel, HasIcon, HasColor
>>>>>>> 2099645a (.)
========
enum AppointmentStatusEnum: string implements HasLabel, HasIcon, HasColor
>>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development):laravel/Modules/SaluteOra/app/Enums/AppointmentStatusEnum.php
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
{
    case SCHEDULED = 'scheduled';
    case CONFIRMED = 'confirmed';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
    case NO_SHOW = 'no_show';
    case RESCHEDULED = 'rescheduled';
    case PENDING = 'pending';

<<<<<<< HEAD
<<<<<<< HEAD
    public function getLabel(): string
    {
=======
<<<<<<< HEAD
    public function getLabel(): string
    {
        return AppointmentStatusEnum::from($this->value)->getLabel();
=======
    public function getLabel(): ?string
=======
    public function getLabel(): string
>>>>>>> 8e4d163b (phpstan)
    {
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
        return match ($this) {
            self::SCHEDULED => 'Programmato',
            self::CONFIRMED => 'Confermato',
            self::IN_PROGRESS => 'In corso',
            self::COMPLETED => 'Completato',
            self::CANCELLED => 'Annullato',
            self::NO_SHOW => 'Assente',
            self::RESCHEDULED => 'Riprogrammato',
            self::PENDING => 'In attesa',
        };
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getIcon(): string
=======
    public function getIcon(): ?string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
    public function getIcon(): string
>>>>>>> 8e4d163b (phpstan)
    {
        return match ($this) {
            self::SCHEDULED => 'heroicon-o-calendar',
            self::CONFIRMED => 'heroicon-o-check-circle',
            self::IN_PROGRESS => 'heroicon-o-clock',
            self::COMPLETED => 'heroicon-o-check-badge',
            self::CANCELLED => 'heroicon-o-x-circle',
            self::NO_SHOW => 'heroicon-o-exclamation-circle',
            self::RESCHEDULED => 'heroicon-o-arrow-path',
            self::PENDING => 'heroicon-o-question-mark-circle',
        };
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getColor(): string
=======
    public function getColor(): string | array | null
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
    public function getColor(): string
>>>>>>> 8e4d163b (phpstan)
    {
        return match ($this) {
            self::SCHEDULED => 'primary',
            self::CONFIRMED => 'success',
            self::IN_PROGRESS => 'warning',
            self::COMPLETED => 'success',
            self::CANCELLED => 'danger',
            self::NO_SHOW => 'danger',
            self::RESCHEDULED => 'info',
            self::PENDING => 'gray',
        };
    }

    public function getDescription(): string
    {
        return match ($this) {
            self::SCHEDULED => 'Appuntamento programmato',
            self::CONFIRMED => 'Appuntamento confermato dal paziente',
            self::IN_PROGRESS => 'Visita in corso',
            self::COMPLETED => 'Visita completata',
            self::CANCELLED => 'Appuntamento annullato',
            self::NO_SHOW => 'Paziente non si è presentato',
            self::RESCHEDULED => 'Appuntamento riprogrammato',
            self::PENDING => 'In attesa di conferma',
        };
    }

    public function canTransitionTo(self $status): bool
    {
        return match ($this) {
            self::PENDING => in_array($status, [self::SCHEDULED, self::CANCELLED]),
            self::SCHEDULED => in_array($status, [self::CONFIRMED, self::CANCELLED, self::RESCHEDULED]),
            self::CONFIRMED => in_array($status, [self::IN_PROGRESS, self::CANCELLED, self::NO_SHOW, self::RESCHEDULED]),
            self::IN_PROGRESS => in_array($status, [self::COMPLETED, self::CANCELLED]),
            self::COMPLETED => false, // Stato finale
            self::CANCELLED => in_array($status, [self::SCHEDULED, self::RESCHEDULED]),
            self::NO_SHOW => in_array($status, [self::RESCHEDULED]),
            self::RESCHEDULED => in_array($status, [self::SCHEDULED, self::CANCELLED]),
        };
<<<<<<< HEAD
=======
>>>>>>> 2099645a (.)
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }

    public function isActive(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return AppointmentStatusEnum::from($this->value)->isActive();
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
        return in_array($this, [self::SCHEDULED, self::CONFIRMED, self::IN_PROGRESS]);
    }

    public function isFinal(): bool
    {
        return in_array($this, [self::COMPLETED, self::CANCELLED, self::NO_SHOW]);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<string, string>
     */
    public static function toSelectArray(): array
    {
        $result = [];
        foreach (self::cases() as $status) {
            $result[$status->value] = $status->getLabel();
        }
        return $result;
    }

    /**
     * @return array<int, self>
     */
    public static function getActiveStatuses(): array
    {
        $result = [];
        foreach (self::cases() as $status) {
            if ($status->isActive()) {
                $result[] = $status;
            }
        }
        return $result;
    }

    /**
     * @return array<int, string>
     */
=======
    public static function toSelectArray(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $status) => [$status->value => $status->getLabel()])
            ->toArray();
>>>>>>> 2099645a (.)
=======
    /**
     * @return array<string, string>
     */
    public static function toSelectArray(): array
    {
        $result = [];
        foreach (self::cases() as $status) {
            $result[$status->value] = $status->getLabel();
        }
        return $result;
>>>>>>> 8e4d163b (phpstan)
    }

    /**
     * @return array<int, self>
     */
    public static function getActiveStatuses(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return AppointmentStatusEnum::getActiveStatuses();
    }
} 
=======
        return collect(self::cases())
            ->filter(fn (self $status) => $status->isActive())
            ->values()
            ->toArray();
    }

>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        $result = [];
        foreach (self::cases() as $status) {
            if ($status->isActive()) {
                $result[] = $status;
            }
        }
        return $result;
    }

    /**
     * @return array<int, string>
     */
>>>>>>> 8e4d163b (phpstan)
    public static function getFinalStatuses(): array
    {
        return [
            self::COMPLETED->value,
            self::CANCELLED->value,
            self::NO_SHOW->value,
        ];
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<<< HEAD:laravel/Modules/SaluteOra/app/Enums/AppointmentStatus.php
>>>>>>> 2099645a (.)
========

// Alias per retrocompatibilità
class_alias(AppointmentStatusEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentStatus');
>>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development):laravel/Modules/SaluteOra/app/Enums/AppointmentStatusEnum.php
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 8e4d163b (phpstan)
