<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\class_alias;
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
use function Safe\class_alias;
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)

/**
 * Defines the different types of appointments in the system.
 * 
 * @method static self fromName(string $name)
 * @method static self fromValue(string $value)
 * @method static self tryFromName(string $name)
 * @method static self tryFromValue(string $value)
 * @method static self[] cases()
 */
enum AppointmentTypeEnum: string implements HasLabel, HasIcon, HasColor
{
    case CONSULTATION = 'consultation';
    case CLEANING = 'cleaning';
    case TREATMENT = 'treatment';
    case EMERGENCY = 'emergency';
    case FOLLOWUP = 'followup';
    case SURGERY = 'surgery';
    case ORTHODONTICS = 'orthodontics';
    case PREVENTION = 'prevention';

    /**
     * Get the translated label for the appointment type.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLabel(): string
=======
    public function getLabel(): ?string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
    public function getLabel(): string
>>>>>>> 8e4d163b (phpstan)
    {
        return match ($this) {
            self::CONSULTATION => __('saluteora::enums.appointment_type.consultation'),
            self::CLEANING => __('saluteora::enums.appointment_type.cleaning'),
            self::TREATMENT => __('saluteora::enums.appointment_type.treatment'),
            self::EMERGENCY => __('saluteora::enums.appointment_type.emergency'),
            self::FOLLOWUP => __('saluteora::enums.appointment_type.followup'),
            self::SURGERY => __('saluteora::enums.appointment_type.surgery'),
            self::ORTHODONTICS => __('saluteora::enums.appointment_type.orthodontics'),
            self::PREVENTION => __('saluteora::enums.appointment_type.prevention'),
        };
    }

    /**
     * Get the icon for the appointment type.
     */
    public function getIcon(): string
    {
        return match ($this) {
            self::CONSULTATION => 'heroicon-o-clipboard-document-list',
            self::CLEANING => 'heroicon-o-sparkles',
            self::TREATMENT => 'heroicon-o-beaker',
            self::EMERGENCY => 'heroicon-o-exclamation-triangle',
            self::FOLLOWUP => 'heroicon-o-arrow-path',
            self::SURGERY => 'heroicon-o-scissors',
            self::ORTHODONTICS => 'heroicon-o-rectangle-stack',
            self::PREVENTION => 'heroicon-o-shield-check',
        };
    }

    /**
     * Get the color for the appointment type.
     */
    public function getColor(): string
    {
        return match ($this) {
            self::CONSULTATION => 'primary',
            self::CLEANING => 'success',
            self::TREATMENT => 'info',
            self::EMERGENCY => 'danger',
            self::FOLLOWUP => 'warning',
            self::SURGERY => 'pink',
            self::ORTHODONTICS => 'indigo',
            self::PREVENTION => 'emerald',
        };
    }

    /**
     * Get the description for the appointment type.
     */
    public function getDescription(): string
    {
        return match ($this) {
            self::CONSULTATION => __('saluteora::enums.appointment_type_descriptions.consultation'),
            self::CLEANING => __('saluteora::enums.appointment_type_descriptions.cleaning'),
            self::TREATMENT => __('saluteora::enums.appointment_type_descriptions.treatment'),
            self::EMERGENCY => __('saluteora::enums.appointment_type_descriptions.emergency'),
            self::FOLLOWUP => __('saluteora::enums.appointment_type_descriptions.followup'),
            self::SURGERY => __('saluteora::enums.appointment_type_descriptions.surgery'),
            self::ORTHODONTICS => __('saluteora::enums.appointment_type_descriptions.orthodontics'),
            self::PREVENTION => __('saluteora::enums.appointment_type_descriptions.prevention'),
        };
    }

    /**
     * Get the default duration in minutes for the appointment type.
     */
    public function getDuration(): int
    {
        return match ($this) {
            self::EMERGENCY => 30,
            self::CONSULTATION,
            self::FOLLOWUP => 20,
            self::CLEANING,
            self::PREVENTION => 45,
            self::TREATMENT,
            self::ORTHODONTICS => 30,
            self::SURGERY => 60,
        };
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Convert the enum cases to an array suitable for select inputs.
     *
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 8e4d163b (phpstan)
     * @return array<string, string>
     */
    public static function toSelectArray(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
        $result = [];
        foreach (self::cases() as $type) {
            $result[$type->value] = $type->getLabel();
        }
        return $result;
<<<<<<< HEAD
=======
        return collect(self::cases())
            ->mapWithKeys(fn (self $type) => [$type->value => $type->getLabel()])
            ->toArray();
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 8e4d163b (phpstan)
    }
}

// Alias for backward compatibility
<<<<<<< HEAD
//class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
