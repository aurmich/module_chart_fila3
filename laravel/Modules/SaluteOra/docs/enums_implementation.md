# Implementazione degli Enum in SaluteOra

## Introduzione

Questo documento descrive l'implementazione degli enum in Laravel e Filament per la gestione dei tipi di utente e di altri valori enumerativi all'interno dell'applicazione SaluteOra.

## Indice
1. [Perché usare gli Enum](#perchè-usare-gli-enum)
2. [Implementazione Base](#implementazione-base)
3. [Enum per i Tipi Utente](#enum-per-i-tipi-utente)
4. [Utilizzo nei Modelli](#utilizzo-nei-modelli)
5. [Utilizzo in Filament](#utilizzo-in-filament)
6. [Best Practice](#best-practice)
7. [Esempi Avanzati](#esempi-avanzati)

## Perché usare gli Enum

Gli enum offrono numerosi vantaggi rispetto alle costanti di classe o agli array associativi:

- **Type Safety**: Il tipo viene verificato in fase di compilazione
- **Autocompletamento**: Migliora l'esperienza di sviluppo con l'autocompletamento dell'IDE
- **Documentazione incorporata**: I valori possibili sono espliciti nel codice
- **Mantenibilità**: Modifiche centralizzate ai valori possibili
- **Performance**: Gli enum PHP sono più performanti degli array associativi

## Implementazione Base

### Installazione

Assicurati di utilizzare PHP 8.1+ e Laravel 9+. Non sono necessari pacchetti aggiuntivi.

### Creazione di un Enum Base

```php
<?php

namespace App\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
enum UserTypeEnum: string
=======
enum UserType: string
>>>>>>> 9df8f556 (fix .md)
=======
enum UserTypeEnum: string
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
{
    case ADMIN = 'admin';
    case DOCTOR = 'doctor';
    case PATIENT = 'patient';
    
    public function label(): string
    {
        return match($this) {
            self::ADMIN => 'Amministratore',
            self::DOCTOR => 'Dottore',
            self::PATIENT => 'Paziente',
        };
    }
    
    public static function options(): array
    {
        return [
            self::ADMIN->value => self::ADMIN->label(),
            self::DOCTOR->value => self::DOCTOR->label(),
            self::PATIENT->value => self::PATIENT->label(),
        ];
    }
}
```

## Enum per i Tipi Utente

<<<<<<< HEAD
<<<<<<< HEAD
### UserTypeEnum Enum
=======
### UserType Enum
>>>>>>> 9df8f556 (fix .md)
=======
### UserTypeEnum Enum
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

```php
<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

<<<<<<< HEAD
<<<<<<< HEAD
enum UserTypeEnum: string implements HasLabel
=======
enum UserType: string implements HasLabel
>>>>>>> 9df8f556 (fix .md)
=======
enum UserTypeEnum: string implements HasLabel
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
{
    case ADMIN = 'admin';
    case DOCTOR = 'doctor';
    case PATIENT = 'patient';
    
    public function getLabel(): ?string
    {
        return match($this) {
            self::ADMIN => 'Amministratore',
            self::DOCTOR => 'Dottore',
            self::PATIENT => 'Paziente',
        };
    }
    
    public function getColor(): string
    {
        return match($this) {
            self::ADMIN => 'danger',
            self::DOCTOR => 'primary',
            self::PATIENT => 'success',
        };
    }
    
    public function getIcon(): string
    {
        return match($this) {
            self::ADMIN => 'heroicon-s-shield-check',
            self::DOCTOR => 'heroicon-s-user-plus',
            self::PATIENT => 'heroicon-s-user',
        };
    }
    
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
    
    public static function labels(): array
    {
        return array_combine(
            array_column(self::cases(), 'value'),
            array_map(fn($case) => $case->getLabel(), self::cases())
        );
    }
}
```

## Utilizzo nei Modelli

### Modello Utente con Enum

```php
<?php

namespace App\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use App\Enums\UserTypeEnum;
=======
use App\Enums\UserType;
>>>>>>> 9df8f556 (fix .md)
=======
use App\Enums\UserTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasChildren;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'type', // user_type sarebbe meglio per convenzione
        'clinic_id',
    ];
    
    protected $casts = [
<<<<<<< HEAD
<<<<<<< HEAD
        'type' => UserTypeEnum::class,
=======
        'type' => UserType::class,
>>>>>>> 9df8f556 (fix .md)
=======
        'type' => UserTypeEnum::class,
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
        'email_verified_at' => 'datetime',
    ];
    
    protected $childTypes = [
<<<<<<< HEAD
<<<<<<< HEAD
        UserTypeEnum::ADMIN->value => Admin::class,
        UserTypeEnum::DOCTOR->value => Doctor::class,
        UserTypeEnum::PATIENT->value => Patient::class,
=======
        UserType::ADMIN->value => Admin::class,
        UserType::DOCTOR->value => Doctor::class,
        UserType::PATIENT->value => Patient::class,
>>>>>>> 9df8f556 (fix .md)
=======
        UserTypeEnum::ADMIN->value => Admin::class,
        UserTypeEnum::DOCTOR->value => Doctor::class,
        UserTypeEnum::PATIENT->value => Patient::class,
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    ];
    
    // Metodi di utilità
    public function isAdmin(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->type === UserTypeEnum::ADMIN;
=======
        return $this->type === UserType::ADMIN;
>>>>>>> 9df8f556 (fix .md)
=======
        return $this->type === UserTypeEnum::ADMIN;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }
    
    public function isDoctor(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->type === UserTypeEnum::DOCTOR;
=======
        return $this->type === UserType::DOCTOR;
>>>>>>> 9df8f556 (fix .md)
=======
        return $this->type === UserTypeEnum::DOCTOR;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }
    
    public function isPatient(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->type === UserTypeEnum::PATIENT;
=======
        return $this->type === UserType::PATIENT;
>>>>>>> 9df8f556 (fix .md)
=======
        return $this->type === UserTypeEnum::PATIENT;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }
    
    // Scope per query
    public function scopeAdmins($query)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $query->where('type', UserTypeEnum::ADMIN->value);
=======
        return $query->where('type', UserType::ADMIN->value);
>>>>>>> 9df8f556 (fix .md)
=======
        return $query->where('type', UserTypeEnum::ADMIN->value);
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }
    
    public function scopeDoctors($query)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $query->where('type', UserTypeEnum::DOCTOR->value);
=======
        return $query->where('type', UserType::DOCTOR->value);
>>>>>>> 9df8f556 (fix .md)
=======
        return $query->where('type', UserTypeEnum::DOCTOR->value);
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }
    
    public function scopePatients($query)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $query->where('type', UserTypeEnum::PATIENT->value);
=======
        return $query->where('type', UserType::PATIENT->value);
>>>>>>> 9df8f556 (fix .md)
=======
        return $query->where('type', UserTypeEnum::PATIENT->value);
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }
}
```

## Utilizzo in Filament

### Selezione in un Form

```php
<<<<<<< HEAD
<<<<<<< HEAD
use App\Enums\UserTypeEnum;
=======
use App\Enums\UserType;
>>>>>>> 9df8f556 (fix .md)
=======
use App\Enums\UserTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Filament\Forms\Components\Select;

Select::make('type')
    ->label('Tipo Utente')
<<<<<<< HEAD
<<<<<<< HEAD
    ->options(UserTypeEnum::class) // Sfrutta l'interfaccia HasLabel
    ->enum(UserTypeEnum::class)
=======
    ->options(UserType::class) // Sfrutta l'interfaccia HasLabel
    ->enum(UserType::class)
>>>>>>> 9df8f556 (fix .md)
=======
    ->options(UserTypeEnum::class) // Sfrutta l'interfaccia HasLabel
    ->enum(UserTypeEnum::class)
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    ->required()
    ->searchable()
    ->reactive()
    ->afterStateUpdated(function ($state, callable $set) {
        // Logica aggiuntiva quando cambia il tipo
    });
```

### Filtri in una Tabella

```php
<<<<<<< HEAD
<<<<<<< HEAD
use App\Enums\UserTypeEnum;
=======
use App\Enums\UserType;
>>>>>>> 9df8f556 (fix .md)
=======
use App\Enums\UserTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Filament\Tables\Filters\SelectFilter;

SelectFilter::make('type')
    ->label('Filtra per Tipo')
<<<<<<< HEAD
<<<<<<< HEAD
    ->options(UserTypeEnum::class) // Sfrutta l'interfaccia HasLabel
=======
    ->options(UserType::class) // Sfrutta l'interfaccia HasLabel
>>>>>>> 9df8f556 (fix .md)
=======
    ->options(UserTypeEnum::class) // Sfrutta l'interfaccia HasLabel
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    ->multiple()
    ->query(function (Builder $query, array $state) {
        if (! empty($state['values'])) {
            $query->whereIn('type', $state['values']);
        }
    });
```

### Colonne nella Tabella

```php
<<<<<<< HEAD
<<<<<<< HEAD
use App\Enums\UserTypeEnum;
=======
use App\Enums\UserType;
>>>>>>> 9df8f556 (fix .md)
=======
use App\Enums\UserTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Filament\Tables\Columns\TextColumn;

TextColumn::make('type')
    ->label('Tipo')
    ->badge()
<<<<<<< HEAD
<<<<<<< HEAD
    ->color(fn (string $state): string => UserTypeEnum::from($state)->getColor())
    ->formatStateUsing(fn (string $state): string => UserTypeEnum::from($state)->getLabel())
=======
    ->color(fn (string $state): string => UserType::from($state)->getColor())
    ->formatStateUsing(fn (string $state): string => UserType::from($state)->getLabel())
>>>>>>> 9df8f556 (fix .md)
=======
    ->color(fn (string $state): string => UserTypeEnum::from($state)->getColor())
    ->formatStateUsing(fn (string $state): string => UserTypeEnum::from($state)->getLabel())
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    ->sortable()
    ->searchable();
```

## Best Practice

1. **Naming**: Usa nomi descrittivi per gli enum e i loro casi
2. **Documentazione**: Documenta ogni caso enum con commenti esplicativi
3. **Interfacce**: Implementa `HasLabel` per l'integrazione con Filament
4. **Metodi di utilità**: Aggiungi metodi per colori, icone, ecc.
5. **Localizzazione**: Usa i file di traduzione per le etichette
6. **Validazione**: Crea regole di validazione personalizzate per gli enum
7. **Testing**: Scrivi test per verificare il comportamento degli enum

## Esempi Avanzati

### Validazione Personalizzata

```php
use Illuminate\Validation\Rules\Enum;

$request->validate([
<<<<<<< HEAD
<<<<<<< HEAD
    'type' => ['required', new Enum(UserTypeEnum::class)],
=======
    'type' => ['required', new Enum(UserType::class)],
>>>>>>> 9df8f556 (fix .md)
=======
    'type' => ['required', new Enum(UserTypeEnum::class)],
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
]);
```

### Cast Personalizzato

```php
<<<<<<< HEAD
<<<<<<< HEAD
use App\Enums\UserTypeEnum;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class UserTypeEnumCast implements CastsAttributes
{
    public function get(Model $model, string $key, $value, array $attributes)
    {
        return UserTypeEnum::from($value);
=======
use App\Enums\UserType;
=======
use App\Enums\UserTypeEnum;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class UserTypeEnumCast implements CastsAttributes
{
    public function get(Model $model, string $key, $value, array $attributes)
    {
<<<<<<< HEAD
        return UserType::from($value);
>>>>>>> 9df8f556 (fix .md)
=======
        return UserTypeEnum::from($value);
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }

    public function set(Model $model, string $key, $value, array $attributes)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($value instanceof UserTypeEnum) {
=======
        if ($value instanceof UserType) {
>>>>>>> 9df8f556 (fix .md)
=======
        if ($value instanceof UserTypeEnum) {
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
            return $value->value;
        }
        
        return $value;
    }
}
```

### Utilizzo nei Modelli

```php
protected $casts = [
<<<<<<< HEAD
<<<<<<< HEAD
    'type' => UserTypeEnumCast::class,
=======
    'type' => UserTypeCast::class,
>>>>>>> 9df8f556 (fix .md)
=======
    'type' => UserTypeEnumCast::class,
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
];
```

### Localizzazione

Crea un file di traduzione in `lang/en/enums.php`:

```php
return [
    'user_type' => [
<<<<<<< HEAD
<<<<<<< HEAD
        UserTypeEnum::ADMIN->value => 'Administrator',
        UserTypeEnum::DOCTOR->value => 'Doctor',
        UserTypeEnum::PATIENT->value => 'Patient',
=======
        UserType::ADMIN->value => 'Administrator',
        UserType::DOCTOR->value => 'Doctor',
        UserType::PATIENT->value => 'Patient',
>>>>>>> 9df8f556 (fix .md)
=======
        UserTypeEnum::ADMIN->value => 'Administrator',
        UserTypeEnum::DOCTOR->value => 'Doctor',
        UserTypeEnum::PATIENT->value => 'Patient',
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    ],
];
```

E nel metodo `label()` dell'enum:

```php
public function getLabel(): string
{
    return __("enums.user_type.{$this->value}");
}
```

## Conclusione

L'utilizzo degli enum in Laravel e Filament offre un modo robusto e manutenibile per gestire tipi fissi di dati. Seguendo queste linee guida, puoi sfruttare al massimo le funzionalità di PHP 8.1+ e migliorare la qualità del tuo codice.
