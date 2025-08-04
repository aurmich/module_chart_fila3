<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Filament Best Practices (Moduli Riutilizzabili)
=======
# Best Practices per Filament Resources in Laraxot
>>>>>>> d23ba493 (add calendar)

Questo documento definisce le linee guida ufficiali e le best practices per l'implementazione delle risorse Filament all'interno del framework Laraxot.

## Regole Generali per XotBaseResource e Filament

## Filosofia del Progetto

Il progetto utilizza un'architettura basata su classi base personalizzate (`XotBase*`) che estendono le classi Filament standard. Questo approccio garantisce:

- **Centralizzazione**: Configurazioni e comportamenti comuni gestiti in un unico punto
- **Coerenza**: Tutti i moduli seguono le stesse regole e convenzioni
- **Manutenibilità**: Modifiche globali senza toccare ogni singola risorsa
- **Scalabilità**: Architettura che cresce senza aumentare la complessità

## Regole Fondamentali per XotBaseResource

### Proprietà/Metodi VIETATI

**Se una classe estende `XotBaseResource`, NON deve mai dichiarare:**

- `protected static ?string $navigationGroup`
- `protected static ?string $navigationLabel`
- `protected static ?string $navigationIcon`
- `protected static ?string $translationPrefix`
- `public static function table(Table $table): Table`
- `public static function getListTableColumns(): array`
- `public static function getTableFilters(): array`
- `public static function getBulkActions(): array`
- `public static function getPages(): array` (se restituisce solo index,create,edit o index,create,edit,view)

### Motivazioni

1. **Gestione Centralizzata**: Queste proprietà sono gestite automaticamente dalla classe base o dai provider
2. **Evitare Override**: Dichiarare questi elementi causa comportamenti incoerenti
3. **Automazione**: La configurazione avviene tramite convenzioni e configurazioni centralizzate
4. **Flessibilità**: I metodi che restituiscono array associativo permettono maggiore configurabilità

## Namespace e Struttura File

### Regola Critica
**I file devono essere in `app/` ma il namespace NON include `app`**

### Esempi Corretti
- **File**: `Modules/<Nome>/app/Filament/Resources/UserResource.php`
- **Namespace**: `Modules\<Nome>\Filament\Resources` (SENZA `app`)

### Estensioni Obbligatorie
- **Resources**: `Modules\Xot\Filament\Resources\XotBaseResource`
- **Pages**: `Modules\Xot\Filament\Resources\Pages\XotBase*`
- **Widgets**: `Modules\Xot\Filament\Widgets\XotBaseWidget`

## Metodi con Array Associativo

I seguenti metodi devono SEMPRE restituire un array associativo con chiavi string:

- `getFormSchema(): array` - chiavi: sezioni del form
- `getTableActions(): array` - chiavi: nomi delle azioni
- `getTableColumns(): array` - chiavi: nomi delle colonne
- `getTableFilters(): array` - chiavi: nomi dei filtri
- `getTableBulkActions(): array` - chiavi: nomi delle azioni bulk

### Esempio
```php
<<<<<<< HEAD
// ❌ Anti-pattern
class MyResource extends \Filament\Resources\Resource {}
=======
# Best Practices per Filament Resources in Laraxot
=======
# Filament Best Practices (Moduli Riutilizzabili)
>>>>>>> 15cb84fb (fix collisions)
=======
# Filament Best Practices (Moduli Riutilizzabili)
>>>>>>> b58de900 (.)

## Descrizione
Best practice generiche per l'utilizzo di Filament in moduli Laravel riutilizzabili. Nessun riferimento a nomi di progetto o brand.

## Regole principali
- NON estendere mai direttamente le classi di Filament: creare sempre wrapper personalizzati
- Utilizzare traits per funzionalità riutilizzabili
- Seguire il pattern di composizione invece dell'ereditarietà
- Mantenere la compatibilità con gli aggiornamenti di Filament
- Centralizzare le configurazioni comuni nelle classi base
- Non inserire proprietà statiche custom nei resource (es. $navigationIcon, $navigationGroup, $translationPrefix)
- Non usare ->label() direttamente nei form: usare sempre i file di traduzione

## Esempi
```php
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
public static function getFormSchema(): array
{
    return [
        'personal_info' => Section::make()
            ->schema([
                TextInput::make('name'),
                TextInput::make('email'),
            ]),
        'preferences' => Section::make()
            ->schema([
                Select::make('status')->options(StatusEnum::class),
            ]),
    ];
}
```

## Traduzioni

### Regole
- **MAI** utilizzare `->label()` sui componenti Filament
- **SEMPRE** utilizzare i file di traduzione in `Modules/<Nome>/lang/<lingua>/`
- Il LangServiceProvider gestisce automaticamente le traduzioni

### Motivazione
Il sistema di traduzione automatico elimina la necessità di specificare manualmente le etichette, garantendo coerenza e facilità di manutenzione.

## Enum vs Array Options

### Regola
Se una select ha options che sono un array, convertire agli enum PHP 8.1+

### Esempio
```php
// ❌ ERRATO
Select::make('status')->options([
    'active' => 'Attivo',
    'inactive' => 'Inattivo',
])

// ✅ CORRETTO
Select::make('status')->options(StatusEnum::class)
```

## Checklist per Sviluppatori

### Prima di Creare/Modificare File Filament
- [ ] File posizionato in `app/Filament/`?
- [ ] Namespace corretto senza `app`?
- [ ] Estende la classe XotBase* appropriata?
- [ ] Nessuna proprietà navigationGroup/navigationLabel/navigationIcon?
- [ ] Nessun metodo table() se estende XotBaseResource?
- [ ] Metodi restituiscono array associativo con chiavi string?
- [ ] Nessun `->label()` sui componenti?
- [ ] Array options convertiti in enum?

### Dopo Creazione/Modifica
- [ ] IDE riconosce correttamente il file?
- [ ] Autoloading funziona (`php artisan` non da errori)?
- [ ] Traduzioni funzionano correttamente?
- [ ] Navigazione Filament appare correttamente?
- [ ] Test passano?

## Errori Comuni

### Namespace Errati
- **Errore**: `Modules\SaluteOra\App\Filament\Resources`
- **Soluzione**: `Modules\SaluteOra\Filament\Resources`

### Estensioni Dirette
- **Errore**: Estendere `Filament\Resources\Resource`
- **Soluzione**: Estendere `Modules\Xot\Filament\Resources\XotBaseResource`

### Proprietà Vietate
- **Errore**: Dichiarare `$navigationGroup` in XotBaseResource
- **Soluzione**: Rimuovere la dichiarazione, usare configurazione centralizzata

## Documentazione Correlata

### Moduli Specifici
- [SaluteOra Filament Best Practices](../../SaluteOra/docs/filament-best-practices.mdc)
- [SaluteOra Namespace Rules](../../SaluteOra/docs/filament-namespace-rules.md)
- [SaluteOra README](../../SaluteOra/docs/README.md)

### Regole Globali
- [Regole Cursor XotBaseResource](../../../.cursor/rules/filament-xotbase-resource-best-practices.mdc)
- [Regole Windsurf XotBaseResource](../../../.windsurf/rules/filament-xotbase-resource-best-practices.mdc)
- [Regole Namespace](../../../.cursor/rules/namespace-structure-rules.mdc)

### Standard di Riferimento
- [PSR-4 Autoloading](https://www.php-fig.org/psr/psr-4/)
- [Laravel Modules Documentation](https://nwidart.com/laravel-modules/)
- [Filament Documentation](https://filamentphp.com/docs)

## Principi DRY e KISS

### DRY (Don't Repeat Yourself)
- Centralizzazione delle configurazioni comuni
- Riutilizzo di trait e classi base
- Evitare duplicazione di codice tra moduli

### KISS (Keep It Simple, Stupid)
- Convenzioni chiare e semplici
- Configurazione automatica quando possibile
- Riduzione della complessità cognitiva

## Zen del Progetto

> "La semplicità è la sofisticazione suprema. Un sistema ben progettato nasconde la complessità dietro un'interfaccia semplice."

- **Coerenza**: Ogni modulo segue le stesse regole
- **Prevedibilità**: Gli sviluppatori sanno sempre cosa aspettarsi
- **Manutenibilità**: Le modifiche sono facili e sicure
- **Scalabilità**: Il sistema cresce senza aumentare la complessità

---

**Queste regole sono vincolanti per tutti i moduli che utilizzano XotBaseResource e devono essere seguite rigorosamente per mantenere la coerenza e la qualità del progetto.**

## Regole Fondamentali

### 1. Utilizzo delle Classi Base Corrette

#### ✅ DO - Estendere XotBaseResource

È **obbligatorio** che tutte le risorse Filament estendano `XotBaseResource` invece della classe standard di Filament:

```php
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
// ❌ Anti-pattern
class MyResource extends \Filament\Resources\Resource {}
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
=======
// ❌ Anti-pattern
class MyResource extends \Filament\Resources\Resource {}
>>>>>>> b58de900 (.)

class UserResource extends XotBaseResource
{
    // ...
}
```

#### ❌ DON'T - Non estendere mai direttamente la classe base di Filament

```php
// NON FARE MAI QUESTO
use Filament\Resources\Resource;

class UserResource extends Resource
{
    // ...
}
```

### 2. Definizione Form Schema

#### ✅ DO - Utilizzare getFormSchema()

Tutte le risorse Filament devono implementare il metodo `getFormSchema()` che restituisce un array di componenti:

```php
public static function getFormSchema(): array
{
    return [
        TextInput::make('nome')->required(),
        TextInput::make('cognome')->required(),
        DatePicker::make('data_nascita'),
        // altri componenti...
    ];
}
```

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
> **ATTENZIONE:** Nelle classi base che estendono Filament (es. XotBasePage), NON dichiarare mai abstract getFormSchema(). Fornire sempre una implementazione di default (array vuoto). Le classi figlie possono sovrascrivere il metodo se necessario.

>>>>>>> 7440f060 (delete duplicate folder + add .md)
### Versione HEAD


### Versione Incoming

### 3. Gestione delle Traduzioni

#### ✅ DO - Utilizzare il Sistema di Traduzioni Automatiche

**Non utilizzare mai** il metodo `->label()` nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider` attraverso i file di traduzione.

```php
// ✅ CORRETTO: Non specificare l'etichetta
Forms\Components\TextInput::make('first_name')
    ->required();
```

#### ❌ DON'T - Non Specificare Manualmente le Etichette

```php
// ❌ ERRATO: Specificare manualmente l'etichetta
Forms\Components\TextInput::make('first_name')
    ->label('Nome')
    ->required();
```

Per maggiori dettagli e motivazioni, consulta la [documentazione completa sulle traduzioni automatiche](../../Lang/docs/automatic-translations.md).

### 4. Implementazione dei Wizard

#### ✅ DO - Estrarre gli Step in Metodi Dedicati

Quando si implementa un `Wizard` in Filament, ogni step deve essere definito in un metodo dedicato che restituisce un oggetto `Forms\Components\Wizard\Step`:

```php
// ✅ CORRETTO
public static function getFormSchemaWidget(): array
{
    return [
        Forms\Components\Wizard::make([
            self::getPersonalDataStep(),
            self::getContactsStep(),
            self::getPrivacyStep(),
        ])
        ->skippable(false)
    ];
}

protected static function getPersonalDataStep(): Forms\Components\Wizard\Step
{
    return Forms\Components\Wizard\Step::make('Dati Personali')
        ->icon('heroicon-o-user')
        ->description('Inserisci i tuoi dati personali')
        ->schema([
            // ...componenti del form
        ]);
}
```

#### ❌ DON'T - Non Definire gli Step Direttamente nel Wizard

```php
// ❌ ERRATO
public static function getFormSchemaWidget(): array
{
    return [
        Forms\Components\Wizard::make([
            Forms\Components\Wizard\Step::make('Dati Personali')
                ->icon('heroicon-o-user')
                ->description('Inserisci i tuoi dati personali')
                ->schema([
                    // ...componenti del form
                ]),
            // ...altri step
        ])
    ];
}
```

Per maggiori dettagli e motivazioni, consulta la [documentazione completa sulle best practices per i wizard](../../UI/docs/filament/wizard-best-practices.md).


---

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9df8f556 (fix .md)
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> bead9c28 (fix case)
=======
>>>>>>> b58de900 (.)
#### ❌ DON'T - Non utilizzare il metodo form()

```php
// NON FARE MAI QUESTO
public static function form(Form $form): Form
{
    return $form->schema([
        // componenti...
    ]);
}
```

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
### 3. Traduzioni e Label
=======
=======
>>>>>>> b58de900 (.)
### 3. Proprietà e Metodi da NON Definire

#### ✅ DO - Omettere proprietà e metodi gestiti dalla classe base

Quando si estende `XotBaseResource`, NON definire le seguenti proprietà e metodi:

1. **NON definire** `protected static ?string $navigationIcon`
   - Questa proprietà è gestita automaticamente da `XotBaseResource`

2. **NON definire** `protected static ?string $navigationGroup`
   - Questa proprietà è gestita automaticamente da `XotBaseResource`

3. **NON definire** `protected static ?int $navigationSort`
   - Questa proprietà è gestita automaticamente da `XotBaseResource`

4. **NON definire** `public static function getTableColumns()`
   - Utilizzare invece `getListTableColumns()` definito in `XotBaseResource`

5. **NON definire** `public static function getRelations()`
   - Se restituisce un array vuoto, non definirlo affatto

6. **NON definire** `public static function getPages()`
   - Se restituisce solo le route standard (index, create, edit), non definirlo affatto

#### ❌ DON'T - Non ridefinire proprietà e metodi gestiti dalla classe base

```php
// NON FARE MAI QUESTO
class DoctorResource extends XotBaseResource
{
    protected static ?string $navigationIcon = 'heroicon-o-user'; // ERRORE
    
    protected static ?string $navigationGroup = 'Pazienti'; // ERRORE
    
    protected static ?int $navigationSort = 3; // ERRORE
    
    public static function getRelations(): array
    {
        return []; // ERRORE: se vuoto, non definire
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ]; // ERRORE: se standard, non definire
    }
}
```

### 4. Traduzioni e Label
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
### 3. Traduzioni e Label
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> b58de900 (.)

#### ✅ DO - Utilizzare i file di traduzione

Non specificare le label direttamente nei componenti. Invece, definire le traduzioni nei file di lingua:

```php
// Componente senza label esplicita
TextInput::make('nome')->required()
```

Con corrispondenza nel file di traduzione:

```php
// resources/lang/it/nome-resource.php
return [
    'fields' => [
        'nome' => [
            'label' => 'Nome Utente',
            'tooltip' => 'Nome completo dell\'utente',
            'placeholder' => 'Inserisci il nome'
        ],
    ],
];
```

#### ❌ DON'T - Non utilizzare il metodo label() direttamente

```php
// NON FARE MAI QUESTO
TextInput::make('nome')
    ->label('Nome Utente')
    ->required()
```

## Struttura Completa di una Risorsa

```php
<?php

namespace Modules\Brain\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Brain\Models\Socio;

class SocioResource extends XotBaseResource
{
    protected static ?string $model = Socio::class;
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $navigationIcon = 'heroicon-o-user';
    
    protected static ?int $navigationSort = 1;
=======
    // NON definire $navigationIcon quando si estende XotBaseResource
    // NON definire $navigationSort quando si estende XotBaseResource
>>>>>>> aurmich/dev
=======
    protected static ?string $navigationIcon = 'heroicon-o-user';
    
    protected static ?int $navigationSort = 1;
>>>>>>> 54f4fa16 (.)
=======
    // NON definire $navigationIcon quando si estende XotBaseResource
    // NON definire $navigationSort quando si estende XotBaseResource
>>>>>>> b58de900 (.)
    
    // Form Schema - CORRETTO ✅
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('cognome')
                ->required()
                ->maxLength(255),
            
            TextInput::make('nome')
                ->required()
                ->maxLength(255),
            
            DatePicker::make('data_nascita'),
            
            TextInput::make('email')
                ->email()
                ->required(),
            
            Select::make('id_stato_socio')
                ->relationship('statoSocio', 'descrizione'),
            
            Toggle::make('is_attivo'),
        ];
    }
    
    // Table - CORRETTO ✅
    public static function table(\Filament\Tables\Table $table): \Filament\Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('cognome')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('nome')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('sezione.descrizione'),
                
                TextColumn::make('statoSocio.descrizione'),
                
                BooleanColumn::make('is_attivo'),
            ])
            ->filters([
                SelectFilter::make('id_stato_socio')
                    ->relationship('statoSocio', 'descrizione'),
                
                SelectFilter::make('id_sezione')
                    ->relationship('sezione', 'descrizione'),
            ])
            ->actions([
                Action::make('view'),
                Action::make('edit'),
                Action::make('delete'),
            ]);
    }
    
    // Query Scope - CORRETTO ✅
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['sezione', 'statoSocio']);
    }
}
```

## Struttura delle Traduzioni

### File di Traduzione Completo

```php
// resources/lang/it/socio-resource.php
return [
    'label' => 'Socio',
    'plural_label' => 'Soci',
    'navigation_group' => 'Anagrafiche',
    'navigation_icon' => 'heroicon-o-user',
    'navigation_sort' => 1,
    'description' => 'Gestione completa dei soci',
    
    'fields' => [
        'id_socio' => [
            'label' => 'ID Socio',
            'tooltip' => 'Identificativo univoco del socio'
        ],
        'cognome' => [
            'label' => 'Cognome',
            'tooltip' => 'Cognome del socio',
            'placeholder' => 'Inserisci il cognome'
        ],
        'nome' => [
            'label' => 'Nome',
            'tooltip' => 'Nome del socio',
            'placeholder' => 'Inserisci il nome'
        ],
        'email' => [
            'label' => 'Email',
            'tooltip' => 'Indirizzo email principale del socio',
            'placeholder' => 'esempio@dominio.it'
        ],
        'data_nascita' => [
            'label' => 'Data di nascita',
            'tooltip' => 'Data di nascita del socio'
        ],
        'id_stato_socio' => [
            'label' => 'Stato Socio',
            'tooltip' => 'Stato attuale del socio'
        ],
        'id_sezione' => [
            'label' => 'Sezione',
            'tooltip' => 'Sezione di appartenenza del socio'
        ],
        'is_attivo' => [
            'label' => 'Attivo',
            'tooltip' => 'Indica se il socio è attualmente attivo'
        ]
    ],
    
    'actions' => [
        'create' => [
            'label' => 'Nuovo Socio',
            'icon' => 'heroicon-o-plus',
            'color' => 'primary',
            'tooltip' => 'Crea un nuovo profilo socio'
        ],
        'edit' => [
            'label' => 'Modifica',
            'icon' => 'heroicon-o-pencil',
            'color' => 'primary',
            'tooltip' => 'Modifica i dati del socio'
        ],
        'view' => [
            'label' => 'Visualizza',
            'icon' => 'heroicon-o-eye',
            'color' => 'secondary',
            'tooltip' => 'Visualizza i dettagli del socio'
        ],
        'delete' => [
            'label' => 'Elimina',
            'icon' => 'heroicon-o-trash',
            'color' => 'danger',
            'tooltip' => 'Rimuovi questo socio dal sistema'
        ]
    ],
    
    'sections' => [
        'personal_data' => [
            'label' => 'Dati Personali',
            'tooltip' => 'Informazioni anagrafiche di base'
        ],
        'contact_info' => [
            'label' => 'Contatti',
            'tooltip' => 'Informazioni di contatto del socio'
        ],
        'membership' => [
            'label' => 'Iscrizione',
            'tooltip' => 'Dettagli relativi all\'iscrizione'
        ]
    ],
    
    'messages' => [
        'created' => 'Socio creato con successo',
        'updated' => 'Socio aggiornato con successo',
        'deleted' => 'Socio eliminato con successo'
    ],
    
    'table' => [
        'empty_text' => 'Nessun socio trovato',
        'search_prompt' => 'Cerca soci...'
    ]
];
```

## Organizzazione dei Form

### Raggruppamento Logico

Utilizzare componenti come `Section`, `Tabs` e `Fieldset` per organizzare logicamente i campi:

```php
public static function getFormSchema(): array
{
    return [
        Forms\Components\Tabs::make('Tabs')
            ->tabs([
                Forms\Components\Tabs\Tab::make(trans('socio-resource.sections.personal_data.label'))
                    ->icon('heroicon-o-user')
                    ->schema([
                        TextInput::make('cognome')->required(),
                        TextInput::make('nome')->required(),
                        DatePicker::make('data_nascita'),
                    ]),
                
                Forms\Components\Tabs\Tab::make(trans('socio-resource.sections.contact_info.label'))
                    ->icon('heroicon-o-mail')
                    ->schema([
                        TextInput::make('email')->email(),
                        TextInput::make('telefono'),
                        TextInput::make('cellulare'),
                    ]),
            ]),
    ];
}
```

### Colonne Responsive

Utilizzare Grid e Columns per layout responsivi:

```php
Forms\Components\Section::make(trans('socio-resource.sections.personal_data.label'))
    ->schema([
        Forms\Components\Grid::make()
            ->schema([
                TextInput::make('cognome')
                    ->required()
                    ->columnSpan(1),
                
                TextInput::make('nome')
                    ->required()
                    ->columnSpan(1),
            ])
            ->columns(2),
            
        DatePicker::make('data_nascita')
            ->columnSpan('full'),
    ])
```

## Validazione

### Regole di Validazione

Applicare regole di validazione direttamente sui componenti:

```php
TextInput::make('email')
    ->email()
    ->required()
    ->unique(table: 'socio', column: 'email', ignorable: fn ($record) => $record)
    ->regex('/^.+@.+\..+$/')
    ->maxLength(255)
```

### Validazione Personalizzata

Per validazioni più complesse, utilizzare i metodi rules() o rule():

```php
DatePicker::make('data_nascita')
    ->rules([
        'required', 
        'date', 
        'before:today'
    ])
    
TextInput::make('codice_fiscale')
    ->rule(fn() => function (string $attribute, $value, \Closure $fail) {
        if (!Str::isValidCF($value)) {
            $fail("Il codice fiscale non è valido.");
        }
    })
```

## Relazioni

### Relazioni Base

```php
Select::make('id_sezione')
    ->relationship('sezione', 'descrizione')
    ->searchable()
    ->preload()
```

### Relazioni Multiple

```php
CheckboxList::make('convenzioni')
    ->relationship('convenzioni', 'descrizione')
    ->columns(2)
    ->searchable()
```

## Filtri e Azioni Personalizzate

### Filtri Avanzati

```php
SelectFilter::make('sezione')
    ->relationship('sezione', 'descrizione')
    ->multiple()
    ->preload()

Filter::make('iscritto_da')
    ->form([
        Forms\Components\DatePicker::make('created_from'),
        Forms\Components\DatePicker::make('created_until'),
    ])
    ->query(function (Builder $query, array $data): Builder {
        return $query
            ->when(
                $data['created_from'],
                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
            )
            ->when(
                $data['created_until'],
                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
            );
    })
```

### Azioni Personalizzate

```php
Action::make('invia_email')
    ->requiresConfirmation()
    ->form([
        Forms\Components\TextInput::make('subject')
            ->required(),
        Forms\Components\Textarea::make('message')
            ->required(),
    ])
    ->action(function (Socio $record, array $data): void {
        // Implementazione dell'invio email
    })
```

## Uso delle funzioni Safe\*

Le funzioni `Safe\*` sono una libreria che fornisce versioni 'sicure' delle funzioni native di PHP, che lanciano eccezioni invece di restituire `false` in caso di errore. Questo approccio è particolarmente utile in contesti dove la gestione degli errori è cruciale.

### Quando usare Safe\*
- Quando si vuole gestire esplicitamente gli errori
- Quando si vuole evitare controlli multipli su `false`
- Quando si vuole migliorare la leggibilità del codice

### Esempio di utilizzo
```php
use function Safe\file_get_contents;

try {
    $content = file_get_contents('file.txt');
} catch (\Safe\Exceptions\FilesystemException $e) {
    // Gestione dell'errore
}
```

### Alternative
Se non si vuole usare `Safe\*`, si possono usare le funzioni native di PHP con controlli espliciti:
```php
$content = file_get_contents('file.txt');
if ($content === false) {
    // Gestione dell'errore
}
```

## Ottimizzazione delle Prestazioni

### Eager Loading

Utilizzare sempre l'eager loading per le relazioni utilizzate nelle tabelle:

```php
public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()
        ->with([
            'sezione', 
            'statoSocio', 
            'convenzioni',
        ]);
}
```

### Paginazione e Lazy Loading

Configurare la paginazione appropriata:

```php
public static function table(Table $table): Table
{
    return $table
        // ...
        ->defaultPaginationPageOption(25)
        ->paginated([10, 25, 50, 100]);
}
```

## Troubleshooting
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Se compare un errore di override di proprietà statiche, rimuovere la proprietà dal resource e centralizzare nella base
- Se le traduzioni non vengono applicate, controllare la struttura dei file lang e l'assenza di ->label() hardcoded

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
## Riferimenti

- [Documentazione Filament](https://filamentphp.com/docs)
- [Documentazione XotBaseResource](/var/www/html/exa/base_orisbroker_fila3/laravel/Modules/Xot/docs/resource.md)
- [Best Practices Laraxot](/var/www/html/exa/base_orisbroker_fila3/laravel/Modules/Xot/docs/best-practices.md)

## Regole per Widget Filament: Path View e Localizzazione

- Tutti i widget Filament devono avere la view in `modulo::filament.widgets.nome-widget`.
- Non usare mai `modulo::widgets.nome-widget` o altri path non standard.
- Non usare mai ->label(), ->placeholder(), __() o trans() nei form component (TextInput, Select, ecc).
- La localizzazione è centralizzata tramite LangServiceProvider e i file di lingua del modulo.
- Le chiavi dei campi devono corrispondere a quelle dei file di lingua.

### Esempio corretto
```php
protected static string $view = 'saluteora::filament.widgets.find-doctor-and-appointment';
TextInput::make('location')->required()
```

### Esempio errato
```php
protected static string $view = 'saluteora::widgets.find-doctor-and-appointment';
TextInput::make('location')->label(__('modulo::campo.label'))
```

**Motivazione:** coerenza, manutenzione, override, policy di qualità.

> Aggiornare sempre anche i file .mdc in .windsurf/rules e .cursor/rules

**Vedi anche:** [filament-best-practices.mdc](../../../.windsurf/rules/filament-best-practices.mdc)

## Regole di Ereditarietà: Trait e Interfacce

- Non replicare mai trait, interfacce o logica già presenti nella classe base che si estende (es. XotBaseWidget).
- Studiare sempre la classe base prima di estendere.
- Se serve estendere il comportamento, usare override o metodi custom, non duplicare trait/interfacce.

<<<<<<< HEAD
>>>>>>> aurmich/dev
## Collegamenti
- [Filament Docs](https://filamentphp.com/docs)
- [Best practices moduli riutilizzabili](../module-documentation-neutrality.md)
- [Ereditarietà modelli](../model-inheritance-best-practices.md)

<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
- Se compare un errore di override di proprietà statiche, rimuovere la proprietà dal resource e centralizzare nella base
- Se le traduzioni non vengono applicate, controllare la struttura dei file lang e l'assenza di ->label() hardcoded
>>>>>>> 15cb84fb (fix collisions)

<<<<<<< HEAD
=======

>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)
=======
- Se compare un errore di override di proprietà statiche, rimuovere la proprietà dal resource e centralizzare nella base
- Se le traduzioni non vengono applicate, controllare la struttura dei file lang e l'assenza di ->label() hardcoded

>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
## Collegamenti
- [Filament Docs](https://filamentphp.com/docs)
- [Best practices moduli riutilizzabili](../module-documentation-neutrality.md)
- [Ereditarietà modelli](../model-inheritance-best-practices.md)

<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> d23ba493 (add calendar)
=======
>>>>>>> b58de900 (.)
### Problema: Form non visualizzato correttamente

**Soluzione:** Assicurarsi di utilizzare `getFormSchema()` invece di `form()` e controllare che tutti i componenti siano configurati correttamente.

### Problema: Label non tradotte
<<<<<<< HEAD
<<<<<<< HEAD
=======
## Problema: Form non visualizzato correttamente

**Soluzione:** Assicurarsi di utilizzare `getFormSchema()` invece di `form()` e controllare che tutti i componenti siano configurati correttamente.

## Problema: Label non tradotte

### Problema: Form non visualizzato correttamente
=======

**Soluzione:** Assicurarsi di utilizzare `getFormSchema()` invece di `form()` e controllare che tutti i componenti siano configurati correttamente.

## Problema: Label non tradotte
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> b58de900 (.)
=======
## Problema: Form non visualizzato correttamente

**Soluzione:** Assicurarsi di utilizzare `getFormSchema()` invece di `form()` e controllare che tutti i componenti siano configurati correttamente.

## Problema: Label non tradotte
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)

**Soluzione:** Verificare che:
1. Non si stia utilizzando `->label()` direttamente sui componenti
2. I file di traduzione siano nella posizione corretta e seguano la struttura espansa
3. Le chiavi dei campi nel form corrispondano esattamente alle chiavi dei campi nel file di traduzione

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
## Problema: Relazioni non caricate correttamente
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> b58de900 (.)
### Problema: Relazioni non caricate correttamente
=======
## Problema: Relazioni non caricate correttamente
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)

**Soluzione:** Verificare che:
1. I nomi delle relazioni e delle colonne siano corretti
2. Le relazioni siano definite correttamente nel modello
3. Sia utilizzato l'eager loading appropriato in `getEloquentQuery()`

## Esempi Pratici

### Risorsa Base

```php
<?php

namespace Modules\Brain\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Brain\Models\Socio;

class SocioResource extends XotBaseResource
{
    protected static ?string $model = Socio::class;
    
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('nome')->required(),
            TextInput::make('cognome')->required(),
        ];
    }
    
    public static function table(\Filament\Tables\Table $table): \Filament\Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nome'),
                TextColumn::make('cognome'),
            ]);
    }
}
```

### Risorsa Avanzata

Consulta l'esempio completo all'inizio di questo documento per una implementazione avanzata.

## Riferimenti

- [Documentazione Filament](https://filamentphp.com/docs)
- [Documentazione XotBaseResource](/var/www/html/exa/base_orisbroker_fila3/laravel/Modules/Xot/docs/resource.md)
- [Best Practices Laraxot](/var/www/html/exa/base_orisbroker_fila3/laravel/Modules/Xot/docs/best-practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0e2182f (.)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> aurmich/dev
=======

>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
=======

>>>>>>> b58de900 (.)
## Regole per Widget Filament: Path View e Localizzazione

- Tutti i widget Filament devono avere la view in `modulo::filament.widgets.nome-widget`.
- Non usare mai `modulo::widgets.nome-widget` o altri path non standard.
- Non usare mai ->label(), ->placeholder(), __() o trans() nei form component (TextInput, Select, ecc).
- La localizzazione è centralizzata tramite LangServiceProvider e i file di lingua del modulo.
- Le chiavi dei campi devono corrispondere a quelle dei file di lingua.

### Esempio corretto
```php
protected static string $view = 'saluteora::filament.widgets.find-doctor-and-appointment';
TextInput::make('location')->required()
```

### Esempio errato
```php
protected static string $view = 'saluteora::widgets.find-doctor-and-appointment';
TextInput::make('location')->label(__('modulo::campo.label'))
```

**Motivazione:** coerenza, manutenzione, override, policy di qualità.

> Aggiornare sempre anche i file .mdc in .windsurf/rules e .cursor/rules

**Vedi anche:** [filament-best-practices.mdc](../../../.windsurf/rules/filament-best-practices.mdc)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
=======
>>>>>>> b58de900 (.)

## Regole di Ereditarietà: Trait e Interfacce

- Non replicare mai trait, interfacce o logica già presenti nella classe base che si estende (es. XotBaseWidget).
- Studiare sempre la classe base prima di estendere.
- Se serve estendere il comportamento, usare override o metodi custom, non duplicare trait/interfacce.

### Esempio errato
```php
class FindDoctorAndAppointmentWidget extends XotBaseWidget implements HasForms
{
    use InteractsWithForms; // ERRORE: già presente in XotBaseWidget
}
```

### Esempio corretto
```php
class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    // NIENTE implements HasForms, NIENTE use InteractsWithForms
}
```

**Motivazione:** DRY, KISS, manutenzione, coerenza, evitare conflitti e ridondanza.

> Aggiornare sempre anche i file .mdc in .windsurf/rules e .cursor/rules

**Vedi anche:** [filament-best-practices.mdc](../../../.windsurf/rules/filament-best-practices.mdc)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d18a3adf (✨ (saluteora): implement new DoctorAvailabilityCalendar widget to manage doctor availability using FullCalendar)
=======
>>>>>>> b58de900 (.)

## Policy DRY su Disponibilità e Prenotazione

La disponibilità e la prenotazione sono sempre rappresentate da record Appointment con type=status specifici (es. type=availability, status=available). Non vanno mai create tabelle custom per la disponibilità. Tutte le logiche di calendario, slot, prenotazione e approvazione sono centralizzate su Appointment.

### Esempio di query DRY
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
=======
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
## Collegamenti tra versioni di FILAMENT-BEST-PRACTICES.md
* [FILAMENT-BEST-PRACTICES.md](../../../Xot/docs/filament/FILAMENT-BEST-PRACTICES.md)
* [FILAMENT-BEST-PRACTICES.md](../../../Xot/docs/FILAMENT-BEST-PRACTICES.md)


## Collegamenti tra versioni di filament-best-practices.md
### Versione HEAD

* [filament-best-practices.md](../filament-best-practices.md)

### Versione Incoming

* [filament-best-practices.md](filament/filament-best-practices.md)

---

## Collocazione dei metodi tabellari

**Regola:**
I metodi `getTableColumns`, `getTableFilters`, `getTableActions`, `getTableBulkActions` vanno sempre implementati nella pagina collegata (es. `ListXResource`), **mai** nella Resource, secondo le regole Filament e Laraxot. La Resource deve solo definire le pagine e la form schema.

**Motivazione:**
- Rispetta la separazione delle responsabilità tra Resource e Page
- Permette override e personalizzazione per singola pagina
- Facilita la manutenzione e la testabilità
- Allinea il codice agli standard Filament e Laraxot

**Esempio corretto:**
```php
// In Resource:
public static function getPages(): array {
    return [
        'index' => Pages\ListPerformanceFondos::route('/'),
        // ...
    ];
}

// In Pages/ListPerformanceFondos.php:
public function getTableColumns(): array { /* ... */ }
public function getTableFilters(): array { /* ... */ }
public function getTableActions(): array { /* ... */ }
public function getTableBulkActions(): array { /* ... */ }
```

**Esempio sbagliato:**
```php
// In Resource:
public static function getTableColumns(): array { /* ... */ }
```

**Nota:**
Aggiornare sempre la documentazione e le regole di progetto. Applicare la stessa regola a tutti i moduli e risorse Filament, anche custom.

**Vedi anche:**
- [Best Practices Filament per il modulo Performance](../../Performance/docs/filament.md)


<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9df8f556 (fix .md)
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> bead9c28 (fix case)
=======
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
=======
>>>>>>> d18a3adf (✨ (saluteora): implement new DoctorAvailabilityCalendar widget to manage doctor availability using FullCalendar)
=======
>>>>>>> 460d425 (.)
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
=======
>>>>>>> 460d425 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> 7ec6ffa (.)
=======
>>>>>>> 3fc99caa662508b51bcbc764ddca541111daeb21
>>>>>>> 07b734cd (.)
>>>>>>> b58de900 (.)
