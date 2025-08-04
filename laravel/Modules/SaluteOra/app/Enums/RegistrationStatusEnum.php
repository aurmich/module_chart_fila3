<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

<<<<<<< HEAD
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
enum RegistrationStatusEnum: string implements HasLabel, HasIcon, HasColor
=======
enum RegistrationStatusEnum implements FilamentSupportContractsHasLabel: string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
<<<<<<< HEAD
    case CANCELLED = 'cancelled';
    case EXPIRED = 'expired';


// Alias per retrocompatibilità
//class_alias(RegistrationStatusEnum::class, 'Modules\\SaluteOra\\Enums\\RegistrationStatus');
=======
}

// Alias per retrocompatibilità
class_alias(RegistrationStatusEnum::class, 'Modules\\SaluteOra\\Enums\\RegistrationStatus');
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

    /**
     * Get the translated label for the enum case.
     */
<<<<<<< HEAD
    public function getLabel(): string
=======
    public function getLabel(): ?string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    {
        return match ($this) {
            self::PENDING => __('saluteora::enums.registrationstatus.pending'),
            self::APPROVED => __('saluteora::enums.registrationstatus.approved'),
            self::REJECTED => __('saluteora::enums.registrationstatus.rejected'),
<<<<<<< HEAD
            self::CANCELLED => __('saluteora::enums.registrationstatus.cancelled'),
            self::EXPIRED => __('saluteora::enums.registrationstatus.expired'),
        };
    }

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-clock',
            self::APPROVED => 'heroicon-o-check-circle',
            self::REJECTED => 'heroicon-o-x-circle',
            self::CANCELLED => 'heroicon-o-ban',
            self::EXPIRED => 'heroicon-o-calendar-x',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => 'gray',
            self::APPROVED => 'success',
            self::REJECTED => 'danger',
            self::CANCELLED => 'warning',
            self::EXPIRED => 'gray',
        };
    }
}
=======
        };
    }
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
