<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

use Filament\Support\Contracts\HasLabel;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\TransTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Defines the different types of users in the system.
 *
 * Implementazione ottimizzata per Laravel 12 seguendo le best practices:
 * - Metodo tryFrom() per gestione valori null/invalidi
 * - Implementazione HasLabel per Filament
 * - Pattern flessibile e modulare
 *
 * @see https://laravel.com/docs/12.x/eloquent-mutators
 * @see https://medium.com/@zulfikarditya/using-php-enums-in-laravel-12-a-comprehensive-guide-af75689f88e8
 */
enum UserTypeEnum: string implements HasLabel
{
    use TransTrait;
    
    case ADMIN = 'admin';
    case DOCTOR = 'doctor';
    case PATIENT = 'patient';
    //case MODERATOR = 'moderator';
    //case STAFF = 'staff';
=======
=======
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)

/**
 * Defines the different types of users in the system.
 *
 * Implementazione ottimizzata per Laravel 12 seguendo le best practices:
 * - Metodo tryFrom() per gestione valori null/invalidi
 * - Implementazione HasLabel per Filament
 * - Pattern flessibile e modulare
 *
 * @see https://laravel.com/docs/12.x/eloquent-mutators
 * @see https://medium.com/@zulfikarditya/using-php-enums-in-laravel-12-a-comprehensive-guide-af75689f88e8
 */
enum UserTypeEnum: string implements HasLabel
{
    use TransTrait;
    case ADMIN = 'admin';
    case DOCTOR = 'doctor';
    case PATIENT = 'patient';
<<<<<<< HEAD
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
    case MODERATOR = 'moderator';
    case STAFF = 'staff';
>>>>>>> 8e4d163b (phpstan)

    /**
     * Get the translated label for the user type.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
=======
    public function getLabel(): ?string
    {
<<<<<<< HEAD
        return match ($this) {
            self::ADMIN => __('saluteora::enums.user_type.admin'),
            self::DOCTOR => __('saluteora::enums.user_type.doctor'),
            self::PATIENT => __('saluteora::enums.user_type.patient'),
        };
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        return $this->transClass(self::class,$this->value.'.label');

>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======
    public function getLabel(): string
    {
        return match($this) {
            self::PATIENT => 'Paziente',
            self::DOCTOR => 'Dottore',
            self::ADMIN => 'Amministratore',
            self::MODERATOR => 'Moderatore',
            self::STAFF => 'Staff',
        };
>>>>>>> 8e4d163b (phpstan)
    }

    /**
     * Get the color associated with the user type for UI display.
     */
    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.color');

=======
=======
        return $this->transClass(self::class,$this->value.'.color');
<<<<<<< HEAD
        /*
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
        return match ($this) {
            self::ADMIN => 'danger',
            self::DOCTOR => 'primary',
            self::PATIENT => 'success',
        };
<<<<<<< HEAD
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        */
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======

>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
    }

    /**
     * Get the icon associated with the user type for UI display.
     */
    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.icon');
        /*
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        return $this->transClass(self::class,$this->value.'.icon');
        /*
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
        return match ($this) {
            self::ADMIN => 'heroicon-o-shield-check',
            self::DOCTOR => 'heroicon-o-user-circle',
            self::PATIENT => 'heroicon-o-user',
        };
<<<<<<< HEAD
<<<<<<< HEAD
        */
    }

    public function getImage(): string
    {
        return $this->transClass(self::class,$this->value.'.image');
    }

    public function canRegister(): bool
    {
        return match ($this) {
            self::ADMIN => false,
            self::DOCTOR => true,
            self::PATIENT => true,
            self::MODERATOR => false,
            self::STAFF => false,
        };
    }

    /**
     * Get the translated description for the user type.
     */
    public function getDescription(): string
    {
        return $this->transClass(self::class,$this->value.'.description');
    }

    public function getImage(): string
    {
        //return 'https://placehold.co/600x400';
        return $this->transClass(self::class,$this->value.'.image');
    }

    public function canRegister(): bool
    {
        return match ($this) {
            self::ADMIN => false,
            self::DOCTOR => true,
            self::PATIENT => true,
            //self::MODERATOR => false,
            //self::STAFF => false,
        };
    }

    

    // Nota: tryFrom() è un metodo nativo di PHP 8.1+ per gli enum backed (con valore)
    // Non implementare mai un metodo tryFrom() personalizzato perché entra in conflitto
    // con quello nativo, causando l'errore "Cannot redeclare UserTypeEnum::tryfrom()".
    //
    // Il metodo nativo fa già ciò che serve: converte un valore al caso dell'enum
    // o restituisce null se la conversione non è possibile.

    /**
     * Valore predefinito da utilizzare quando il valore da convertire è null.
     * Questo metodo è opzionale ma utile per implementare valori di default.
     *
     * @return static Il valore predefinito dell'enum
     */
    public static function default(): static
    {
        return self::PATIENT;
    }


    public function getRoute(string $action): string
    {
        return route($action.'.type', ['type' => $this->value]);
    }

    

   
=======
=======
        */
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
    }

    /**
     * Convert the enum cases to an array suitable for select inputs.
     * Implementazione ottimizzata per evitare il collect e l'iterazione.
     *
     * @return array<string, string>
     */
    public static function toSelectArrayTEST(): array
    {
        return [
            self::ADMIN->value => __('saluteora::enums.user_type.admin'),
            self::DOCTOR->value => __('saluteora::enums.user_type.doctor'),
            self::PATIENT->value => __('saluteora::enums.user_type.patient'),
        ];
    }

    // Nota: tryFrom() è un metodo nativo di PHP 8.1+ per gli enum backed (con valore)
    // Non implementare mai un metodo tryFrom() personalizzato perché entra in conflitto
    // con quello nativo, causando l'errore "Cannot redeclare UserTypeEnum::tryfrom()".
    //
    // Il metodo nativo fa già ciò che serve: converte un valore al caso dell'enum
    // o restituisce null se la conversione non è possibile.

    /**
     * Valore predefinito da utilizzare quando il valore da convertire è null.
     * Questo metodo è opzionale ma utile per implementare valori di default.
     *
     * @return static Il valore predefinito dell'enum
     */
    public static function default(): static
    {
        return self::PATIENT;
    }
<<<<<<< HEAD
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======


    public function getRoute(string $action): string
    {
        return route($action.'.type', ['type' => $this->value]);
    }
<<<<<<< HEAD
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
=======

    /**
     * Get the translated description for the user type.
     */
    public function getDescription(): string
    {
        return match($this) {
            self::PATIENT => 'Utente paziente del sistema',
            self::DOCTOR => 'Medico o dentista autorizzato',
            self::ADMIN => 'Amministratore del sistema',
            self::MODERATOR => 'Moderatore dei contenuti',
            self::STAFF => 'Membro dello staff',
        };
    }

    /**
     * Restituisce la traduzione per la tipologia utente.
     */
    public function transClass(string $class, string $key): string
    {
        return match($this) {
            self::PATIENT => __('saluteora::usertype.patient'),
            self::DOCTOR => __('saluteora::usertype.doctor'),
            self::ADMIN => __('saluteora::usertype.admin'),
            self::MODERATOR => __('saluteora::usertype.moderator'),
            self::STAFF => __('saluteora::usertype.staff'),
        };
    }
>>>>>>> 8e4d163b (phpstan)
}

// Alias per retrocompatibilità
//class_alias(UserTypeEnum::class, 'Modules\\SaluteOra\\Enums\\UserType');
