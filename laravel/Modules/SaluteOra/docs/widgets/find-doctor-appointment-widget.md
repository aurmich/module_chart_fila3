# FindDoctorAndAppointmentWidget

## Overview

<<<<<<< HEAD
<<<<<<< HEAD
The `FindDoctorAndAppointmentWidget` provides a multi-step wizard interface for patients to find available dentists and book appointments, following Clean Code, DRY, and KISS principles.

## View Implementation (Theme)

### Custom Theme View
La view del widget è implementata nel tema One per permettere personalizzazione completa dell'interfaccia:

**File**: `laravel/Themes/One/resources/views/filament/widgets/patient/find-doctor-and-appointment-widget.blade.php`

### Pattern Architetturale
- **Logica**: Widget PHP in `Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget`
- **Presentazione**: View nel tema (`pub_theme::`) per personalizzazione visiva completa
- **Separazione**: Logica form wizard nel modulo, styling e layout nel tema

### View Structure
```blade
<x-filament-widgets::widget>
    <x-filament::section>
        <div class="max-w-4xl mx-auto">
            {{-- Header Section --}}
            <div class="mb-8 text-center">
                <h2>{{ __('saluteora::widgets.find_doctor_and_appointment.title') }}</h2>
                <p>{{ __('saluteora::widgets.find_doctor_and_appointment.description') }}</p>
            </div>

            {{-- Form Wizard --}}
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border p-6">
                <form wire:submit.prevent="submit" class="space-y-6">
                    @csrf
                    {{ $this->form }}
                    
                    {{-- Loading State --}}
                    <div wire:loading wire:target="submit" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 flex items-center space-x-3">
                            <x-filament::loading-indicator class="h-6 w-6 text-primary-600" />
                            <span>{{ __('saluteora::widgets.find_doctor_and_appointment.processing') }}</span>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Help Text --}}
            <div class="mt-6 text-center">
                <p>{{ __('saluteora::widgets.find_doctor_and_appointment.help_text') }}</p>
            </div>
        </div>
    </x-filament::section>
    
    <x-filament-actions::modals />
</x-filament-widgets::widget>
```

### Features della View
1. **Responsive Design**: Layout mobile-first con `max-w-4xl mx-auto`
2. **Dark Mode Support**: Supporto completo per tema scuro
3. **Loading States**: Overlay fullscreen durante elaborazione
4. **Typography Hierarchy**: Header centrato con titolo e descrizione
5. **Form Integration**: Wrapper per `{{ $this->form }}` di Filament
6. **Modal Support**: Include automaticamente i modali Filament
7. **CSRF Protection**: Token di sicurezza integrato

### Traduzioni Richieste
La view utilizza le seguenti chiavi di traduzione:
```php
'find_doctor_and_appointment' => [
    'title' => 'Trova e Prenota Dentista',
    'description' => 'Trova un dentista nella tua zona e prenota un appuntamento', 
    'submit' => 'Prenota Appuntamento',
    'processing' => 'Elaborazione prenotazione in corso...',
    'help_text' => 'Segui tutti i passaggi per completare la tua prenotazione...',
],
```

### Customization Options
Il tema One permette di personalizzare:
- **Colori**: Tramite variabili CSS Tailwind
- **Spacing**: Classi margin/padding modificabili
- **Typography**: Font e dimensioni tramite config Tailwind
- **Componenti**: Override di componenti Filament specifici
- **Layout**: Struttura container e sezioni

=======
The `FindDoctorAndAppointmentWidget` provides a multi-step wizard interface for patients to find available dentists and book appointments, following Clean Code, DRY, and KISS principles.

>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
## Architecture Principles

1. **Clean Code**
   - Single Responsibility Principle (SRP) for each step
   - Clear and descriptive method names
   - Small, focused methods
   - Proper error handling

2. **DRY (Don't Repeat Yourself)**
   - Reusable form components
   - Centralized validation rules
   - Shared state management

3. **KISS (Keep It Simple, Stupid)**
   - Minimal and focused functionality
   - Clear data flow
   - No premature optimization
<<<<<<< HEAD

## Features

- Multi-step wizard interface with clear separation of concerns
- Location-based dentist search with cascading selects
- Specialization filtering using enums
- Real-time availability checking with loading states
- Responsive design following Filament best practices
- Comprehensive form validation with user-friendly messages
- Centralized error handling and user feedback
=======
The `FindDoctorAndAppointmentWidget` provides a multi-step wizard interface for patients to find available dentists and book appointments.

## Features

- Multi-step wizard interface
- Location-based dentist search
- Specialization filtering
- Real-time availability checking
- Responsive design
- Form validation
- Error handling
- Loading states
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======

## Features

- Multi-step wizard interface with clear separation of concerns
- Location-based dentist search with cascading selects
- Specialization filtering using enums
- Real-time availability checking with loading states
- Responsive design following Filament best practices
- Comprehensive form validation with user-friendly messages
- Centralized error handling and user feedback
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)

## Implementation Details

### Class Structure

```php
class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    protected static string $view = 'saluteora::widgets.find-doctor-and-appointment';
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?int $sort = 1;
    protected int|string|array $columnSpan = 'full';
    public ?array $data = [];
    public array $availableSlots = [];
    public bool $isLoading = false;
    
    // Form step methods
    protected function getSearchStep(): Wizard\Step { /* ... */ }
    protected function getDateTimeStep(): Wizard\Step { /* ... */ }
    protected function getConfirmationStep(): Wizard\Step { /* ... */ }
    
    // Schema methods
    protected function getSearchStepSchema(): array { /* ... */ }
    protected function getDateTimeStepSchema(): array { /* ... */ }
    protected function getConfirmationStepSchema(): array { /* ... */ }
    
    // Helper methods
    protected function getAvailableTimeSlots(string $date): array { /* ... */ }
    protected function getConfirmationContent(Get $get): string { /* ... */ }
}
```

### Wizard Implementation

The widget follows the wizard pattern with these steps:

1. **Search Step**
   - Location selection (Region → Province → City → CAP)
   - Uses cascading selects with live updates
   - Implements proper loading states

2. **Date & Time Step**
   - Date selection with minimum date validation
   - Time slot selection based on availability
   - Real-time validation

3. **Confirmation Step**
   - Summary of selected options
   - Final confirmation
   - Submission handling

### Methods

#### `getFormSchema(): array`
Defines the wizard form structure using dedicated step methods:

```php
protected function getFormSchema(): array
{
    return [
        Wizard::make([
            $this->getSearchStep(),
            $this->getDateTimeStep(),
            $this->getConfirmationStep(),
        ])
        ->submitAction(
            \Filament\Forms\Components\Actions\Action::make('submit')
                ->submit('save')
        )
    ];
}
```

#### Step Methods

1. **Search Step**
   ```php
   protected function getSearchStep(): Wizard\Step
   {
       return Wizard\Step::make('search')
           ->schema($this->getSearchStepSchema())
           ->afterValidation(fn () => $this->isLoading = true);
   }
   ```

2. **Date & Time Step**
   ```php
   protected function getDateTimeStep(): Wizard\Step
   {
       return Wizard\Step::make('date_time')
           ->schema($this->getDateTimeStepSchema())
           ->afterValidation(fn (Get $get) => $this->availableSlots = $this->getAvailableTimeSlots($get('date')));
   }
   ```

3. **Confirmation Step**
   ```php
   protected function getConfirmationStep(): Wizard\Step
   {
       return Wizard\Step::make('confirmation')
           ->schema($this->getConfirmationStepSchema());
   }
   ```
=======
=======
    protected static ?int $sort = 1;
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
    protected int|string|array $columnSpan = 'full';
    public ?array $data = [];
    public array $availableSlots = [];
    public bool $isLoading = false;
    
    // Form step methods
    protected function getSearchStep(): Wizard\Step { /* ... */ }
    protected function getDateTimeStep(): Wizard\Step { /* ... */ }
    protected function getConfirmationStep(): Wizard\Step { /* ... */ }
    
    // Schema methods
    protected function getSearchStepSchema(): array { /* ... */ }
    protected function getDateTimeStepSchema(): array { /* ... */ }
    protected function getConfirmationStepSchema(): array { /* ... */ }
    
    // Helper methods
    protected function getAvailableTimeSlots(string $date): array { /* ... */ }
    protected function getConfirmationContent(Get $get): string { /* ... */ }
}
```

### Wizard Implementation

The widget follows the wizard pattern with these steps:

1. **Search Step**
   - Location selection (Region → Province → City → CAP)
   - Uses cascading selects with live updates
   - Implements proper loading states

2. **Date & Time Step**
   - Date selection with minimum date validation
   - Time slot selection based on availability
   - Real-time validation

3. **Confirmation Step**
   - Summary of selected options
   - Final confirmation
   - Submission handling

### Methods

<<<<<<< HEAD
#### `form(Form $form): Form`
Defines the wizard form structure with multiple steps:
1. **Search Criteria**
   - Location input
   - Specialization dropdown
   - Appointment type selection
2. **Date & Time Selection**
   - Date picker
   - Time slot selection
   - Duration options
3. **Confirmation**
   - Appointment summary
   - Patient details form
   - Terms acceptance
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
#### `getFormSchema(): array`
Defines the wizard form structure using dedicated step methods:

```php
protected function getFormSchema(): array
{
    return [
        Wizard::make([
            $this->getSearchStep(),
            $this->getDateTimeStep(),
            $this->getConfirmationStep(),
        ])
        ->submitAction(
            \Filament\Forms\Components\Actions\Action::make('submit')
                ->submit('save')
        )
    ];
}
```

#### Step Methods

1. **Search Step**
   ```php
   protected function getSearchStep(): Wizard\Step
   {
       return Wizard\Step::make('search')
           ->schema($this->getSearchStepSchema())
           ->afterValidation(fn () => $this->isLoading = true);
   }
   ```

2. **Date & Time Step**
   ```php
   protected function getDateTimeStep(): Wizard\Step
   {
       return Wizard\Step::make('date_time')
           ->schema($this->getDateTimeStepSchema())
           ->afterValidation(fn (Get $get) => $this->availableSlots = $this->getAvailableTimeSlots($get('date')));
   }
   ```

3. **Confirmation Step**
   ```php
   protected function getConfirmationStep(): Wizard\Step
   {
       return Wizard\Step::make('confirmation')
           ->schema($this->getConfirmationStepSchema());
   }
   ```
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)

#### `submit()`
Handles form submission, including:
- Validation
- Appointment creation
- Error handling
- Success/error notifications
- Redirection

<<<<<<< HEAD
<<<<<<< HEAD
## Schema Implementation

### Search Step Schema

```php
protected function getSearchStepSchema(): array
{
    return [
        Fieldset::make('dentist_search')
            ->schema([
                Select::make('region')
                    ->options(fn () => Region::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('province', null)),
                // Other fields...
            ])
    ];
}
```

### Date & Time Step Schema

```php
protected function getDateTimeStepSchema(): array
{
    return [
        Fieldset::make('appointment_details')
            ->schema([
                DatePicker::make('date')
                    ->required()
                    ->minDate(now())
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('time', null)),
                // Other fields...
            ])
    ];
}
```

### Confirmation Step Schema

```php
protected function getConfirmationStepSchema(): array
{
    return [
        Placeholder::make('confirmation_message')
            ->content(fn (Get $get) => $this->getConfirmationContent($get)),
    ];
}
```

## Best Practices

1. **Separation of Concerns**
   - Each step has its own method
   - Schema definitions are separated from step configuration
   - Business logic is encapsulated in dedicated methods

2. **State Management**
   - Uses Livewire's reactive properties
   - Implements proper loading states
   - Maintains form state between steps

3. **Validation**
   - Client-side validation with real-time feedback
   - Server-side validation for security
   - Clear error messages

4. **Performance**
   - Lazy loading of options
   - Minimal database queries
   - Optimized re-rendering
=======
## View Components

The widget uses the following Blade components:
- `filament::widgets.widget`
- `filament-forms::wizard`
- Custom form components
- Loading indicators
- Error messages
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
## Schema Implementation

### Search Step Schema

```php
protected function getSearchStepSchema(): array
{
    return [
        Fieldset::make('dentist_search')
            ->schema([
                Select::make('region')
                    ->options(fn () => Region::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('province', null)),
                // Other fields...
            ])
    ];
}
```

### Date & Time Step Schema

```php
protected function getDateTimeStepSchema(): array
{
    return [
        Fieldset::make('appointment_details')
            ->schema([
                DatePicker::make('date')
                    ->required()
                    ->minDate(now())
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('time', null)),
                // Other fields...
            ])
    ];
}
```

### Confirmation Step Schema

```php
protected function getConfirmationStepSchema(): array
{
    return [
        Placeholder::make('confirmation_message')
            ->content(fn (Get $get) => $this->getConfirmationContent($get)),
    ];
}
```

## Best Practices

1. **Separation of Concerns**
   - Each step has its own method
   - Schema definitions are separated from step configuration
   - Business logic is encapsulated in dedicated methods

2. **State Management**
   - Uses Livewire's reactive properties
   - Implements proper loading states
   - Maintains form state between steps

3. **Validation**
   - Client-side validation with real-time feedback
   - Server-side validation for security
   - Clear error messages

4. **Performance**
   - Lazy loading of options
   - Minimal database queries
   - Optimized re-rendering
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)

## Usage Example

```php
// In a service provider's boot method
Filament\Facades\Filament::registerWidgets([
    \Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget::class,
]);
```

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
## Related Documentation

- [Clean Code Wizard Steps](../clean-code-wizard-steps.md)
- [Filament Widgets Documentation](https://filamentphp.com/docs/3.x/panels/widgets)
- [Form Components Reference](https://filamentphp.com/docs/3.x/forms/fields)

<<<<<<< HEAD
=======
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
>>>>>>> 9bb1b9f9 (feat: add new rules and documentation for implementing wizards in SaluteOra to enhance code quality and maintainability)
## Styling

Uses Tailwind CSS classes for styling. Custom styles can be added in:
```
resources/css/filament/patient/widgets/find-doctor-appointment.css
```

## Dependencies

- Filament Forms
- Filament Widgets
- Livewire
- Alpine.js
- Tailwind CSS

## Testing

Test cases cover:
- Form validation
- Wizard navigation
- API integration
- Error scenarios
- Success flow

## Localization

All user-facing strings are localized using Laravel's translation system. Translation keys are in:
```
lang/vendor/saluteora/en/widgets.php
```

## Performance Considerations

- Uses Livewire for dynamic updates
- Implements loading states
- Optimized database queries
- Cached results where appropriate
- Lazy-loaded components

## Security

- CSRF protection
- Input validation
- Authorization checks
- Rate limiting
- Data sanitization

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile Safari
- Chrome for Android

## Known Issues

- None currently

## Changelog

### 1.0.0
- Initial release

## Contributing

Please follow the project's coding standards and submit pull requests to the `develop` branch.

## License

This widget is part of the SaluteOra module and is licensed under the [MIT license](LICENSE).
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

## Policy view widget
La view deve essere solo un wrapper per $this->form. Niente markup custom, niente logica Livewire/AlpineJS, niente gestione CSRF manuale. Tutta la logica va nel widget PHP o nel tema. Motivazione: coerenza, DRY, KISS, troubleshooting semplificato. Collegamento a docs/rules/filament_best_practices.md e docs/xot.md.

## Regola: vietato usare ->label() e ->placeholder() nei form component
Tutti i form component devono usare solo chiavi campo, senza label o placeholder inline. Le etichette e i placeholder sono gestiti tramite i file di traduzione del modulo e il LangServiceProvider. Motivazione: coerenza, centralizzazione, override semplice, policy di qualità. Collegamento a docs/rules/filament_best_practices.md e docs/xot.md.
<<<<<<< HEAD

## Policy DRY: disponibilità e appuntamenti

La disponibilità e la prenotazione sono sempre gestite tramite il modello Appointment:
- Gli slot disponibili sono Appointment con type=availability, status=available
- Le prenotazioni sono Appointment con altri type/status

Non vanno mai create tabelle custom per la disponibilità. Tutte le logiche di fetch, creazione, modifica, cancellazione sono centralizzate su Appointment.

### Esempio di fetch slot disponibili
```php
Appointment::where('doctor_id', $doctorId)
    ->where('type', AppointmentTypeEnum::AVAILABILITY)
    ->where('status', AppointmentStatusEnum::AVAILABLE)
    ->get();
```

### Motivazione filosofica, politica, zen
- Un solo punto di verità: nessuna duplicazione, nessun lock-in
- DRY, KISS, serenità del codice
- Refactoring sicuro, massima estendibilità
=======
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
