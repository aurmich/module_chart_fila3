# Gestione degli Enum in FindDoctorAndAppointmentWidget

## Errore

```
Undefined constant Modules\SaluteOra\Enums\AppointmentType::CHECKUP
```

## Descrizione

<<<<<<< HEAD
L'errore si verifica quando si tenta di utilizzare una costante `CHECKUP` dall'enum `AppointmentType` che non è stata definita o si fa riferimento al path errato. Questo accade nel widget `FindDoctorAndAppointmentWidget` quando si imposta il valore predefinito per il campo `appointment_type`.
=======
L'errore si verifica quando si tenta di utilizzare una costante `CHECKUP` dall'enum `AppointmentType` che non è stata definita. Questo accade nel widget `FindDoctorAndAppointmentWidget` quando si imposta il valore predefinito per il campo `appointment_type`.
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)

## Soluzione

### 1. Verificare l'enum AppointmentType

<<<<<<< HEAD
Assicurarsi che l'enum `AppointmentType` sia definito correttamente in `Modules/SaluteOra/app/Enums/AppointmentType.php` e che contenga la costante `CHECKUP` (o le costanti previste dal dominio).
=======
Assicurarsi che l'enum `AppointmentType` sia definito correttamente in `Modules/SaluteOra/Enums/AppointmentType.php` e che contenga la costante `CHECKUP`.
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)

### 2. Implementazione corretta dell'enum

L'enum dovrebbe essere strutturato come segue:

```php
<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\SaluteOra\App\Enums;
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)

use Filament\Support\Contracts\HasLabel;

enum AppointmentType: string implements HasLabel
{
    case CHECKUP = 'checkup';
    case HYGIENE = 'hygiene';
    case TREATMENT = 'treatment';
    case EMERGENCY = 'emergency';
    case CONSULTATION = 'consultation';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::CHECKUP => __('appointment.types.checkup'),
            self::HYGIENE => __('appointment.types.hygiene'),
            self::TREATMENT => __('appointment.types.treatment'),
            self::EMERGENCY => __('appointment.types.emergency'),
            self::CONSULTATION => __('appointment.types.consultation'),
        };
    }
}
```

### 3. Utilizzo corretto nel widget

Nel widget, assicurarsi di utilizzare l'enum in questo modo:

```php
<<<<<<< HEAD
use Modules\SaluteOra\App\Enums\AppointmentType;
=======
use Modules\SaluteOra\Enums\AppointmentType;
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)

// ...

Select::make('appointment_type')
    ->options(AppointmentType::class)
    ->required()
    ->default(AppointmentType::CHECKUP->value),
```

## Prevenzione

Per prevenire questo tipo di errori in futuro:

1. **Documentare gli enum**: Assicurarsi che tutti gli enum siano documentati e che il loro utilizzo sia chiaro.
<<<<<<< HEAD
2. **Verificare sempre il path**: L'enum deve essere sempre in `app/Enums` e mai in `Enums` root.
3. **Aggiornare la documentazione e i file .mdc**: Ogni modifica di path va propagata nei file di documentazione e regole windsurf/cursor.
=======
2. **Testare gli enum**: Implementare test che verifichino la presenza di tutte le costanti necessarie.
3. **Utilizzare tipi forti**: Utilizzare sempre il tipo enum invece di stringhe letterali per evitare errori di battitura.
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)

## Risorse Correlate

- [Documentazione Ufficiale PHP sugli Enumerazioni](https://www.php.net/manual/en/language.enumerations.php)
- [Documentazione Filament sugli Enums](https://filamentphp.com/docs/3.x/forms/advanced#enums)
