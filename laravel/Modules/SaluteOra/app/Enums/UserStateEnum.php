<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

use Filament\Support\Contracts\HasLabel;
<<<<<<< HEAD
use function Safe\class_alias;
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)

enum UserStateEnum: string implements HasLabel
{
    case PENDING = 'pending';
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case REJECTED = 'rejected';
    case SUSPENDED = 'suspended';
    case INTEGRATION_REQUESTED = 'integration_requested';

<<<<<<< HEAD
<<<<<<< HEAD
    public function getLabel(): string
=======
    public function getLabel(): ?string
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    public function getLabel(): string
>>>>>>> 8e4d163b (phpstan)
    {
        return match($this) {
            self::PENDING => 'In attesa',
            self::ACTIVE => 'Attivo',
            self::INACTIVE => 'Non attivo',
            self::REJECTED => 'Rifiutato',
            self::SUSPENDED => 'Sospeso',
            self::INTEGRATION_REQUESTED => 'Integrazione richiesta',
        };
    }

    public function getColor(): string
    {
        return match($this) {
            self::PENDING => 'warning',
            self::ACTIVE => 'success',
            self::INACTIVE => 'gray',
            self::REJECTED => 'danger',
            self::SUSPENDED => 'gray',
            self::INTEGRATION_REQUESTED => 'info',
        };
    }

    public function getIcon(): string
    {
        return match($this) {
            self::PENDING => 'heroicon-o-clock',
            self::ACTIVE => 'heroicon-o-check-circle',
            self::INACTIVE => 'heroicon-o-x-circle',
            self::REJECTED => 'heroicon-o-x-mark',
            self::SUSPENDED => 'heroicon-o-pause-circle',
            self::INTEGRATION_REQUESTED => 'heroicon-o-document-text',
        };
    }

    public static function toSelectArray(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $state) => [$state->value => $state->getLabel()])
            ->toArray();
    }
}
<<<<<<< HEAD
<<<<<<< HEAD

// Alias for backward compatibility
<<<<<<< HEAD
//class_alias(UserStateEnum::class, 'Modules\SaluteOra\Enums\UserState');
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======

// Alias for backward compatibility
<<<<<<< HEAD
class_alias(UserStateEnum::class, 'Modules\SaluteOra\Enums\UserState');
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
use function Safe\class_alias;

class_alias(UserStateEnum::class, 'Modules\\SaluteOra\\Enums\\UserState');
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
class_alias(UserStateEnum::class, 'Modules\SaluteOra\Enums\UserState');
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
