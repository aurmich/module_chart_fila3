<<<<<<< HEAD
# StudioFilterWidget - Documentazione Completa

## Panoramica

Il `StudioFilterWidget` è un componente fondamentale dell'interfaccia dottore che permette di:
- Visualizzare le informazioni dello studio corrente
- Cambiare studio tra quelli associati al dottore
- Filtrare i dati mostrati negli altri widget/componenti della dashboard
- Fornire informazioni dettagliate sui dottori e studi

## Architettura e Pattern

### Estensione XotBaseWidget
```php
class StudioFilterWidget extends XotBaseWidget implements HasActions
{
    use InteractsWithActions;
    
    protected static string $view = 'saluteora::filament.widgets.studio-filter';
}
```

**Lezioni apprese**:
- ✅ **SEMPRE** estendere `XotBaseWidget` invece di `Widget` direttamente
- ✅ **SEMPRE** implementare `getFormSchema(): array` anche se restituisce array vuoto
- ✅ **SEMPRE** usare `static function canView(): bool` (non public)

### Sicurezza e Controllo Accesso
```php
public static function canView(): bool
{
    $user = Auth::user();
    
    return $user instanceof User && 
           $user->type === UserTypeEnum::DOCTOR &&
           $user instanceof Doctor;
}
```

**Pattern di sicurezza multi-livello**:
1. Verifica che sia un User
2. Verifica che sia di tipo DOCTOR
3. Verifica che sia un'istanza di Doctor (STI)

### Gestione Multi-Studio con Relazioni
```php
public function getAvailableStudios(): Collection
{
    return $this->getDoctor()
        ->studios()
        ->where('active', true)
        ->orderBy('name')
        ->get();
}

private function loadStudioData(): void
{
    $doctor = $this->getDoctor();
    
    // Prima lo studio principale
    $primaryStudio = $doctor->studios()
        ->wherePivot('is_primary', true)
        ->first();
        
    if ($primaryStudio) {
        $this->currentStudio = $primaryStudio;
        return;
    }
    
    // Poi il primo disponibile
    $firstStudio = $doctor->studios()->where('active', true)->first();
    if ($firstStudio) {
        $this->currentStudio = $firstStudio;
    }
}
```

## Comunicazione tra Componenti

### Dispatch di Eventi
```php
public function changeStudio(string $studioId): void
{
    // ... validazione e cambio studio ...
    
    // Dispatch eventi per altri componenti
    $this->dispatch('studio-changed', studioId: $studioId, studioName: $studio->name);
    $this->dispatch('studio-filter-applied', studioId: $studioId);
}
```

### Eventi Supportati
- `studio-changed`: Quando viene cambiato lo studio
- `studio-filter-applied`: Per filtrare altri componenti della dashboard

## Struttura Traduzioni

Le traduzioni sono organizzate in modo gerarchico:
```php
// laravel/Modules/SaluteOra/lang/it/widgets.php
'studio_filter' => [
    'title' => 'Filtro Studio',
    'description' => 'Seleziona lo studio per filtrare i dati visualizzati',
    
    'current_studio' => [
        'label' => 'Studio Attuale',
        'no_studio' => 'Nessuno studio selezionato',
    ],
    
    'doctor_info' => [
        'label' => 'Informazioni Dottore',
        'full_name' => 'Dr. :first_name :last_name',
        'studios_count' => '{0} Nessuno studio|{1} 1 studio|[2,*] :count studi',
    ],
    
    'actions' => [
        'change_studio' => [
            'label' => 'Cambia Studio',
            'tooltip' => 'Seleziona un altro studio',
        ],
        'view_details' => [
            'label' => 'Dettagli Studio',
            'tooltip' => 'Visualizza dettagli completi',
        ],
    ],
    
    'messages' => [
        'studio_changed' => 'Studio cambiato con successo',
        'studio_change_error' => 'Errore nel cambio studio',
    ],
];
```

## Vista Blade Pattern

### Wrapper Filament Standard
```blade
<x-filament::widget>
    <x-filament::section>
        <x-slot name="heading">
            {{ __('saluteora::widgets.studio_filter.title') }}
        </x-slot>
        
        {{-- Contenuto del widget --}}
    </x-filament::section>
</x-filament::widget>
```

### Responsive Design
- Grid layout per desktop/tablet
- Stack verticale per mobile
- Badge e stati visivi chiari

## Integrazione con Filament Tenancy

Il widget si integra automaticamente con il sistema di tenancy di Filament:
```php
private function initializeStudio(): void
{
    // Usa il tenant corrente se disponibile
    $this->currentStudioId = Filament::getTenant()?->id ?? $this->getFirstAvailableStudioId();
    $this->loadStudioData();
}
```

## Pattern per Actions

### Actions Modal
```php
public function viewStudioDetailsAction(): Action
{
    return Action::make('viewStudioDetails')
        ->label(__('saluteora::widgets.studio_filter.actions.view_details.label'))
        ->tooltip(__('saluteora::widgets.studio_filter.actions.view_details.tooltip'))
        ->icon('heroicon-o-eye')
        ->color('info')
        ->modalContent(function (): View {
            return view('saluteora::filament.modals.studio-details', [
                'studio' => $this->getCurrentStudio(),
            ]);
        });
}
```

### Actions Redirect
```php
public function manageScheduleAction(): Action
{
    return Action::make('manageSchedule')
        ->url(function (): string {
            $studio = $this->getCurrentStudio();
            return $studio ? route('filament.admin.resources.studios.edit', $studio) : '#';
        });
}
```

## Errori Comuni e Soluzioni

### 1. Widget non visibile
**Problema**: `canView()` non implementato correttamente
**Soluzione**: Verificare che sia `static` e gestisca tutti i controlli di sicurezza

### 2. Relazioni non caricate
**Problema**: N+1 queries o dati mancanti
**Soluzione**: Usare `with()` per eager loading delle relazioni

### 3. Eventi non intercettati
**Problema**: Altri componenti non ricevono eventi
**Soluzione**: Verificare che i listener siano configurati correttamente

## Best Practices

1. **Sicurezza Multi-Livello**: Sempre verificare tipo utente, autenticazione e autorizzazioni
2. **Lazy Loading**: Caricare dati studio solo quando necessario
3. **Event-Driven**: Usare eventi per comunicazione tra componenti
4. **Traduzioni Strutturate**: Organizzare traduzioni in modo gerarchico e completo
5. **Error Handling**: Gestire gracefully errori di rete, permessi, etc.
6. **Logging**: Registrare azioni importanti per audit trail

## Testing

### Test di Sicurezza
```php
public function test_widget_only_visible_to_doctors()
{
    // Test che il widget sia visibile solo ai dottori
}

public function test_studio_change_requires_association()
{
    // Test che si possa cambiare solo a studi associati
}
```

### Test di Funzionalità
```php
public function test_events_are_dispatched_on_studio_change()
{
    // Test che gli eventi vengano emessi correttamente
}
```

## Collegamenti

- [Doctor Availabilities Widget](doctor-availabilities-widget-implementation.md)
- [Multi-Studio Management](../models/multi-studio-management.md)
- [Filament Widget Best Practices](../filament/widget-best-practices.md)
- [Translation Guidelines](../translations/widget-translations.md)

*Ultimo aggiornamento: Gennaio 2025*
*Versione: 1.0 - Implementazione Completa*
=======
# StudioFilterWidget

## Overview

The `StudioFilterWidget` is a Filament widget designed to allow doctors to switch between their associated studios. It provides a user-friendly interface to view studio details and quickly switch between different studios.

## Features

- Displays current studio information (name, address, contact details)
- Allows switching between multiple studios
- Shows a list of all available studios
- Persists the selected studio in the session
- Dispatches events when the studio changes
- Responsive design that works on all screen sizes

## Requirements

- PHP 8.1+
- Laravel 10+
- Filament 3.x
- `mcamara/laravel-localization` package

## Installation

The widget is automatically registered with the Filament panel. No additional installation steps are required.

## Usage

### Adding to a Panel

To add the widget to a Filament panel, include it in the `widgets` method of your panel provider:

```php
use Modules\SaluteOra\Filament\Widgets\StudioFilterWidget;

public function panel(Panel $panel): Panel
{
    return $panel
        // ... other configuration
        ->widgets([
            StudioFilterWidget::class,
            // ... other widgets
        ]);
}
```

### Displaying in a View

The widget can also be included in any Blade view using the Livewire component syntax:

```blade
<livewire:studio-filter-widget />
```

## Components

### StudioFilterWidget

The main widget class that handles the studio selection logic and data retrieval.

### Views

- `studio-filter.blade.php` - Main view template
- `studio-details.blade.php` - Reusable studio details component

## Events

The widget dispatches the following events:

- `studioChanged` - Dispatched when a new studio is selected

## Methods

### getStudio()

Retrieves the currently selected studio model.

### getStudioAddress()

Gets the formatted address of the current studio.

### getStudioDoctors()

Retrieves a list of doctors associated with the current studio.

## Styling

The widget uses Tailwind CSS classes for styling and follows Filament's design system. Custom styling can be added by publishing the views and modifying the Blade templates.

## Best Practices

1. **Performance**: The widget uses eager loading to minimize database queries.
2. **Accessibility**: Follows WCAG 2.1 AA standards.
3. **Responsiveness**: Works on all screen sizes.
4. **Error Handling**: Includes proper error handling and user feedback.

## Troubleshooting

### Widget Not Appearing

- Ensure the widget is registered in your panel provider
- Check that the authenticated user has the correct permissions
- Verify that the user has at least one associated studio

### Studio Not Changing

- Check the browser's developer console for JavaScript errors
- Verify that the studio ID exists and is associated with the current user
- Check the Laravel logs for any server-side errors

## Related Components

- `Studio` - The studio model
- `Doctor` - The doctor model with studio relationships
- `StudioFilter` - The Livewire component powering the widget

## Version History

- **1.0.0** - Initial release
  - Basic studio selection functionality
  - Studio details display
  - Responsive design
  - Event dispatching

## Contributing

Contributions are welcome! Please read the [contributing guide](CONTRIBUTING.md) before submitting a pull request.

## License

This widget is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
