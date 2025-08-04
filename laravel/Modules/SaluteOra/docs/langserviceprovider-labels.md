<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
# LangServiceProvider: Label automatiche nei Filament Forms (modulo SaluteOra)

## Nota
In questo modulo le label dei campi sono gestite esclusivamente tramite LangServiceProvider e i file di traduzione. Non va mai usato il metodo `->label()`, `->placeholder()`, `->helperText()` nei componenti Filament.

## Esempio pratico - FindDoctorAndAppointmentWidget
```php
// ✅ CORRETTO: la label viene risolta automaticamente
Placeholder::make('studio_name')
    ->content(function (Get $get) {
        // logica per contenuto
    }),

// ✅ CORRETTO: la label viene risolta automaticamente  
Textarea::make('notes')
    ->rows(3)
    ->columnSpan('full')
    ->maxLength(500),

// ❌ ERRATO: mai usare label esplicite
Textarea::make('notes')
    ->label('Note Aggiuntive') // NON FARE!
    ->placeholder('Inserisci note...') // NON FARE!
    ->helperText('Campo opzionale') // NON FARE!
```

## Struttura File di Traduzione
Le traduzioni seguono la struttura espansa in `lang/it/fields.php`:

```php
return [
    'studio_name' => [
        'label' => 'Studio',
        'placeholder' => 'Nome dello studio selezionato',
        'helper_text' => 'Studio dentistico per la prenotazione',
        'description' => 'Informazioni sullo studio medico selezionato',
    ],
    
    'notes' => [
        'label' => 'Note Aggiuntive',
        'placeholder' => 'Inserisci eventuali note o richieste particolari...',
        'helper_text' => 'Informazioni aggiuntive per il tuo appuntamento (opzionale)',
        'description' => 'Campo per comunicazioni speciali o richieste particolari',
    ],
    
    // Altri campi...
];
```

## Meccanismo Automatico
Il LangServiceProvider genera automaticamente le chiavi nel formato:
- `saluteora::fields.{nome_campo}.label`
- `saluteora::fields.{nome_campo}.placeholder`  
- `saluteora::fields.{nome_campo}.helper_text`
- `saluteora::fields.{nome_campo}.description`

## Vantaggi
1. **Coerenza**: Tutte le etichette seguono lo stesso pattern
2. **Manutenibilità**: Traduzioni centralizzate nei file di lingua
3. **Automazione**: Chiavi mancanti vengono create automaticamente
4. **Multilingua**: Supporto nativo per più lingue

## Implementazione Widget Corretta
Nel `FindDoctorAndAppointmentWidget` tutti i campi seguono questa regola:

### Step di Conferma
- `studio_name` → `Placeholder::make('studio_name')` (senza ->label())
- `doctor_name` → `Placeholder::make('doctor_name')` (senza ->label())  
- `appointment_date_display` → `Placeholder::make('appointment_date_display')` (senza ->label())
- `appointment_time_display` → `Placeholder::make('appointment_time_display')` (senza ->label())
- `notes` → `Textarea::make('notes')` (senza ->label())

### Altri Step
- `studio_id` → `RadioCollection::make('studio_id')` (senza ->label())
- `doctor_id` → `Select::make('doctor_id')` (senza ->label())
- `appointment_time` → `RadioCollection::make('appointment_time')` (senza ->label())

<<<<<<< HEAD
=======
<<<<<<< HEAD
#### Traduzioni Corrispondenti
```php
// lang/it/fields.php
'studio_name' => [
    'label' => 'Studio Corrente',           // Appare automaticamente
    'placeholder' => 'Nessuno studio',      // Fallback se vuoto
    'helper_text' => 'Studio attualmente selezionato',
    'description' => 'Studio medico per le operazioni correnti',
],

'doctor_id' => [
    'label' => 'Dottore',
    'placeholder' => 'Seleziona un dottore',
    'helper_text' => 'Scegli il dottore per l\'operazione',
],

'studio_id' => [
    'label' => 'Selezione Studio',
    'helper_text' => 'Clicca su uno studio per selezionarlo',
],
```

## Widget e Viste

### Traduzioni Widget
```php
// lang/it/widgets.php
'studio_filter' => [
    'title' => 'Filtro Studio',                    // Titolo widget
    'description' => 'Seleziona lo studio',        // Descrizione widget
    
    'current_studio' => [
        'label' => 'Studio Attuale',               // Sezioni
        'no_studio' => 'Nessuno studio selezionato',
    ],
    
    'actions' => [
        'switch_studio' => [
            'label' => 'Cambia Studio',            // Azioni
            'tooltip' => 'Seleziona altro studio',
        ],
    ],
    
    'messages' => [
        'studio_changed' => 'Studio cambiato',     // Notifiche
        'studio_change_error' => 'Errore cambio',
    ],
];
```

### Uso nelle Viste Blade
```blade
{{-- Vista widget: studio-filter-widget.blade.php --}}
<x-filament::widget>
    <x-filament::card>
        <h3>{{ __('saluteora::widgets.studio_filter.title') }}</h3>
        <p>{{ __('saluteora::widgets.studio_filter.description') }}</p>
        
        @if($currentStudio)
            <div>
                <p>{{ __('saluteora::widgets.studio_filter.current_studio.label') }}</p>
                <h4>{{ $currentStudio->name }}</h4>
            </div>
        @else
            <p>{{ __('saluteora::widgets.studio_filter.current_studio.no_studio') }}</p>
        @endif
        
        <x-filament::button wire:click="refresh">
            {{ __('saluteora::widgets.studio_filter.actions.refresh.label') }}
        </x-filament::button>
    </x-filament::card>
</x-filament::widget>
```

## Pattern Avanzati

<<<<<<< HEAD
## Implementazione Widget Corretta
Nel `FindDoctorAndAppointmentWidget` tutti i campi seguono questa regola:

### Step di Conferma
- `studio_name` → `Placeholder::make('studio_name')` (senza ->label())
- `doctor_name` → `Placeholder::make('doctor_name')` (senza ->label())  
- `appointment_date_display` → `Placeholder::make('appointment_date_display')` (senza ->label())
- `appointment_time_display` → `Placeholder::make('appointment_time_display')` (senza ->label())
- `notes` → `Textarea::make('notes')` (senza ->label())

### Altri Step
- `studio_id` → `RadioCollection::make('studio_id')` (senza ->label())
- `doctor_id` → `Select::make('doctor_id')` (senza ->label())
- `appointment_time` → `RadioCollection::make('appointment_time')` (senza ->label())

=======
# LangServiceProvider: Label automatiche nei Filament Forms (modulo Patient)
=======
# LangServiceProvider: Label automatiche nei Filament Forms (modulo SaluteOra)
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)

## Nota
In questo modulo le label dei campi sono gestite esclusivamente tramite LangServiceProvider e i file di traduzione. Non va mai usato il metodo `->label()`, `->placeholder()`, `->helperText()` nei componenti Filament.

## Esempio pratico - FindDoctorAndAppointmentWidget
```php
// ✅ CORRETTO: la label viene risolta automaticamente
Placeholder::make('studio_name')
    ->content(function (Get $get) {
        // logica per contenuto
    }),

// ✅ CORRETTO: la label viene risolta automaticamente  
Textarea::make('notes')
    ->rows(3)
    ->columnSpan('full')
    ->maxLength(500),

// ❌ ERRATO: mai usare label esplicite
Textarea::make('notes')
    ->label('Note Aggiuntive') // NON FARE!
    ->placeholder('Inserisci note...') // NON FARE!
    ->helperText('Campo opzionale') // NON FARE!
```

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
## Struttura File di Traduzione
Le traduzioni seguono la struttura espansa in `lang/it/fields.php`:

```php
return [
    'studio_name' => [
        'label' => 'Studio',
        'placeholder' => 'Nome dello studio selezionato',
        'helper_text' => 'Studio dentistico per la prenotazione',
        'description' => 'Informazioni sullo studio medico selezionato',
    ],
    
    'notes' => [
        'label' => 'Note Aggiuntive',
        'placeholder' => 'Inserisci eventuali note o richieste particolari...',
        'helper_text' => 'Informazioni aggiuntive per il tuo appuntamento (opzionale)',
        'description' => 'Campo per comunicazioni speciali o richieste particolari',
    ],
    
    // Altri campi...
];
```

## Meccanismo Automatico
Il LangServiceProvider genera automaticamente le chiavi nel formato:
- `saluteora::fields.{nome_campo}.label`
- `saluteora::fields.{nome_campo}.placeholder`  
- `saluteora::fields.{nome_campo}.helper_text`
- `saluteora::fields.{nome_campo}.description`

## Vantaggi
1. **Coerenza**: Tutte le etichette seguono lo stesso pattern
2. **Manutenibilità**: Traduzioni centralizzate nei file di lingua
3. **Automazione**: Chiavi mancanti vengono create automaticamente
4. **Multilingua**: Supporto nativo per più lingue

## Implementazione Widget Corretta
Nel `FindDoctorAndAppointmentWidget` tutti i campi seguono questa regola:

### Step di Conferma
- `studio_name` → `Placeholder::make('studio_name')` (senza ->label())
- `doctor_name` → `Placeholder::make('doctor_name')` (senza ->label())  
- `appointment_date_display` → `Placeholder::make('appointment_date_display')` (senza ->label())
- `appointment_time_display` → `Placeholder::make('appointment_time_display')` (senza ->label())
- `notes` → `Textarea::make('notes')` (senza ->label())

### Altri Step
- `studio_id` → `RadioCollection::make('studio_id')` (senza ->label())
- `doctor_id` → `Select::make('doctor_id')` (senza ->label())
- `appointment_time` → `RadioCollection::make('appointment_time')` (senza ->label())

>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
>>>>>>> aurmich/dev
## Motivazione e dettagli
Vedi la [doc generale in Xot](../../Xot/docs/langserviceprovider-labels.md) per motivazione, vantaggi e struttura dei file di lingua.

## Collegamenti
- [Doc generale LangServiceProvider in Xot](../../Xot/docs/langserviceprovider-labels.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [File traduzioni fields.php](../lang/it/fields.php)
- [FindDoctorAndAppointmentWidget](../app/Filament/Widgets/Patient/FindDoctorAndAppointmentWidget.php)
=======
>>>>>>> 54f4fa16 (.)
=======
- [File traduzioni fields.php](../lang/it/fields.php)
- [FindDoctorAndAppointmentWidget](../app/Filament/Widgets/Patient/FindDoctorAndAppointmentWidget.php)
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)

**Questa regola è obbligatoria per tutti i moduli.**

## Collegamenti tra versioni di langserviceprovider-labels.md
* [langserviceprovider-labels.md](../../Xot/docs/langserviceprovider-labels.md)

# Gestione Label con LangServiceProvider

## Regola Fondamentale
<<<<<<< HEAD
<<<<<<< HEAD
NON utilizzare mai il metodo `->label()`, `->placeholder()`, `->helperText()` nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider`.
=======
NON utilizzare mai il metodo `->label()` nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider`.
>>>>>>> 54f4fa16 (.)
=======
NON utilizzare mai il metodo `->label()`, `->placeholder()`, `->helperText()` nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider`.
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)

## Struttura Corretta
```php
// Nel componente Filament
Forms\Components\TextInput::make('first_name')
    ->required()
    ->maxLength(255);

<<<<<<< HEAD
<<<<<<< HEAD
// Nel file di traduzione (lang/it/fields.php)
return [
    'first_name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci il nome',
        'helper_text' => 'Il tuo nome di battesimo',
        'description' => 'Nome come appare sui documenti ufficiali'
=======
// Nel file di traduzione (lang/it/patient-resource.php)
return [
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Il tuo nome di battesimo'
        ]
>>>>>>> 54f4fa16 (.)
=======
// Nel file di traduzione (lang/it/fields.php)
return [
    'first_name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci il nome',
        'helper_text' => 'Il tuo nome di battesimo',
        'description' => 'Nome come appare sui documenti ufficiali'
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
    ]
];
```

## Vantaggi
1. Gestione centralizzata delle traduzioni
2. Supporto multilingua nativo
3. Manutenzione semplificata
4. Performance ottimizzate
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
5. Coerenza nell'interfaccia utente
6. Automazione delle chiavi mancanti

## Implementazione Completata
✅ **FindDoctorAndAppointmentWidget** - Tutti i campi seguono il pattern LangServiceProvider
✅ **File fields.php** - Struttura espansa implementata con tutte le chiavi
✅ **Documentazione** - Aggiornata con esempi pratici
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
### Traduzioni Condizionali
```php
// Notificazioni con parametri
$this->notification()
    ->title(__('saluteora::widgets.studio_filter.messages.studio_changed'))
    ->body(__('saluteora::widgets.studio_filter.messages.studio_changed_body', [
        'studio' => $this->currentStudio->name
    ]))
    ->success()
    ->send();
```

### Traduzioni Parametrizzate
```php
// lang/it/widgets.php
'messages' => [
    'studio_changed_body' => 'Ora stai lavorando nello studio: :studio',
    'doctor_count' => '{0} Nessun dottore|{1} Un dottore|[2,*] :count dottori',
],
```

### Fallback e Gestione Errori
```php
// Nel widget
public function getStudioLabel(): string
{
    return $this->currentStudio?->name ?? 
           __('saluteora::widgets.studio_filter.current_studio.no_studio');
}
```

## Debugging Traduzioni

### Verifica Risoluzione
```php
// In sviluppo, per verificare chiavi traduzione
dd([
    'label' => __('saluteora::fields.studio_name.label'),
    'placeholder' => __('saluteora::fields.studio_name.placeholder'),
    'helper_text' => __('saluteora::fields.studio_name.helper_text'),
]);
```

### File Mancanti
Se le traduzioni non funzionano:

1. **Verifica file esistenti**:
   ```bash
   ls laravel/Modules/SaluteOra/lang/it/
   ```

2. **Verifica struttura**:
   ```php
   // Deve esistere la chiave
   'studio_name' => [
       'label' => 'Studio',
       // ...
   ]
   ```

3. **Cache traduzioni**:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

## Migrazione da Label Manuali

### Prima (ERRATO)
```php
Forms\Components\Section::make(__('Studio'))
    ->schema([
        Placeholder::make('studio_name')
            ->label(__('Nome Studio'))
            ->content($content),
            
        TextInput::make('address')
            ->label(__('Indirizzo'))
            ->placeholder(__('Inserisci indirizzo')),
    ]);
```

### Dopo (CORRETTO)
```php
Forms\Components\Section::make(__('saluteora::widgets.studio_filter.title'))
    ->schema([
        Placeholder::make('studio_name')
            ->content($content),
            
        TextInput::make('address'),
    ]);
```

E aggiungere in `lang/it/fields.php`:
```php
'studio_name' => [
    'label' => 'Nome Studio',
],
'address' => [
    'label' => 'Indirizzo',
    'placeholder' => 'Inserisci indirizzo',
],
```

## Best Practices

### Organizzazione File
1. **widgets.php**: Traduzioni specifiche widget (titoli, descrizioni, azioni)
2. **fields.php**: Traduzioni campi form (label, placeholder, helper_text)
3. **messages.php**: Messaggi di sistema e notifiche

### Naming Convention
1. **Campi**: Snake_case (`studio_name`, `doctor_id`)
2. **Widget**: Kebab-case (`studio_filter`, `appointment_form`)
3. **Chiavi**: Snake_case (`current_studio`, `view_details`)

### Struttura Coerente
```php
'nome_entità' => [
    'title' => 'Titolo principale',
    'description' => 'Descrizione',
    
    'sections' => [
        'nome_sezione' => [
            'title' => 'Titolo sezione',
            'items' => [...],
        ],
    ],
    
    'actions' => [
        'nome_azione' => [
            'label' => 'Label azione',
            'tooltip' => 'Tooltip azione',
        ],
    ],
    
    'messages' => [
        'success' => 'Messaggio successo',
        'error' => 'Messaggio errore',
    ],
],
```

## Checklist Pre-Commit

- [ ] **Rimosso** tutti `->label()`, `->placeholder()`, `->helperText()`
- [ ] **Aggiunto** traduzioni in `fields.php` per ogni campo
- [ ] **Aggiunto** traduzioni in `widgets.php` per widget specifici
- [ ] **Testato** che le traduzioni appaiano correttamente
- [ ] **Verificato** fallback per chiavi mancanti
- [ ] **Documentato** nuove chiavi traduzione

## Troubleshooting

### Problema: Label non appaiono
**Soluzione**: Verificare che LangServiceProvider sia registrato e file traduzioni esistano

### Problema: Chiavi traduzione sbagliate
**Soluzione**: Verificare naming convention e struttura file

### Problema: Cache traduzioni
**Soluzione**: Pulire cache con `php artisan config:clear`
>>>>>>> 1dc4ede7 (📝 (README.md): update documentation for SaluteOra module to improve clarity and organization of information, including a comprehensive table of contents and sections for best practices, quick start guides, and recent updates)
=======
## Motivazione e dettagli
Vedi la [doc generale in Xot](../../Xot/docs/langserviceprovider-labels.md) per motivazione, vantaggi e struttura dei file di lingua.
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)

## Collegamenti
- [Doc generale LangServiceProvider in Xot](../../Xot/docs/langserviceprovider-labels.md)
>>>>>>> aurmich/dev
- [File traduzioni fields.php](../lang/it/fields.php)
- [FindDoctorAndAppointmentWidget](../app/Filament/Widgets/Patient/FindDoctorAndAppointmentWidget.php)

**Questa regola è obbligatoria per tutti i moduli.**

## Collegamenti tra versioni di langserviceprovider-labels.md
* [langserviceprovider-labels.md](../../Xot/docs/langserviceprovider-labels.md)

# Gestione Label con LangServiceProvider

## Regola Fondamentale
NON utilizzare mai il metodo `->label()`, `->placeholder()`, `->helperText()` nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider`.

## Struttura Corretta
```php
// Nel componente Filament
Forms\Components\TextInput::make('first_name')
    ->required()
    ->maxLength(255);

// Nel file di traduzione (lang/it/fields.php)
return [
    'first_name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci il nome',
        'helper_text' => 'Il tuo nome di battesimo',
        'description' => 'Nome come appare sui documenti ufficiali'
    ]
];
```

## Vantaggi
1. Gestione centralizzata delle traduzioni
2. Supporto multilingua nativo
3. Manutenzione semplificata
4. Performance ottimizzate
5. Coerenza nell'interfaccia utente
6. Automazione delle chiavi mancanti

## Implementazione Completata
✅ **FindDoctorAndAppointmentWidget** - Tutti i campi seguono il pattern LangServiceProvider
✅ **File fields.php** - Struttura espansa implementata con tutte le chiavi
✅ **Documentazione** - Aggiornata con esempi pratici

## Collegamenti
- [Documentazione Traduzioni](translations.md)
- [Best Practices Filament](filament-wizard-best-practices.md)
- [Guida Sviluppatori](guida-sviluppatori.md)

