<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Enums;

use Filament\Support\Contracts\HasLabel;
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

/**
 * Defines the different types of users in the system.
 */
enum UserTypeEnum: string implements HasLabel
{
    case ADMIN = 'admin';
    case DOCTOR = 'doctor';
    case PATIENT = 'patient';
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

    /**
     * Get the translated label for the user type.
     */
<<<<<<< HEAD
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
=======
    public function getLabel(): ?string
    {
        return match ($this) {
            self::ADMIN => __('saluteora::enums.user_type.admin'),
            self::DOCTOR => __('saluteora::enums.user_type.doctor'),
            self::PATIENT => __('saluteora::enums.user_type.patient'),
        };
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }

    /**
     * Get the color associated with the user type for UI display.
     */
    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.color');

=======
        return match ($this) {
            self::ADMIN => 'danger',
            self::DOCTOR => 'primary',
            self::PATIENT => 'success',
        };
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }

    /**
     * Get the icon associated with the user type for UI display.
     */
    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.icon');
        /*
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
        return match ($this) {
            self::ADMIN => 'heroicon-o-shield-check',
            self::DOCTOR => 'heroicon-o-user-circle',
            self::PATIENT => 'heroicon-o-user',
        };
<<<<<<< HEAD
        */
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
    }

    /**
     * Convert the enum cases to an array suitable for select inputs.
     *
     * @return array<string, string>
     */
    public static function toSelectArray(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $type) => [$type->value => $type->getLabel()])
            ->toArray();
    }
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
}

// Alias per retrocompatibilità
//class_alias(UserTypeEnum::class, 'Modules\\SaluteOra\\Enums\\UserType');
