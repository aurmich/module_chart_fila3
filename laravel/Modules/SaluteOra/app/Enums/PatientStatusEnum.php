<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
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
enum PatientStatusEnum: string implements HasLabel, HasIcon, HasColor
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
enum PatientStatusEnum implements FilamentSupportContractsHasLabel: string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
<<<<<<< HEAD

// Alias per retrocompatibilità
//class_alias(PatientStatusEnum::class, 'Modules\\SaluteOra\\Enums\\PatientStatus');
=======
<<<<<<< HEAD
<<<<<<< HEAD

// Alias per retrocompatibilità
//class_alias(PatientStatusEnum::class, 'Modules\\SaluteOra\\Enums\\PatientStatus');
=======
}

// Alias per retrocompatibilità
class_alias(PatientStatusEnum::class, 'Modules\\SaluteOra\\Enums\\PatientStatus');
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======

// Alias per retrocompatibilità
//class_alias(PatientStatusEnum::class, 'Modules\\SaluteOra\\Enums\\PatientStatus');
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev

    /**
     * Get the translated label for the enum case.
     */
<<<<<<< HEAD
    public function getLabel(): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLabel(): string
=======
    public function getLabel(): ?string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
    public function getLabel(): string
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
    {
        return match ($this) {
            self::PENDING => __('saluteora::enums.patientstatus.pending'),
            self::APPROVED => __('saluteora::enums.patientstatus.approved'),
            self::REJECTED => __('saluteora::enums.patientstatus.rejected'),
        };
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev

    public function getIcon(): string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-clock',
            self::APPROVED => 'heroicon-o-check-circle',
            self::REJECTED => 'heroicon-o-x-circle',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => 'warning',
            self::APPROVED => 'success',
            self::REJECTED => 'danger',
        };
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
}
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
