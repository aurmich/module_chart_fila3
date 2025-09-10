---
---

# Module Setup Workflow

Questo workflow automatizza la creazione completa di un nuovo modulo Laraxot, seguendo tutte le convenzioni e best practice del framework.

## Invocazione
Usa `/module-setup` in Windsurf Cascade per creare un nuovo modulo.

## Fase 1: Raccolta Informazioni

### 1.1 Richiedi Nome Modulo
Chiedi all'utente:
- **Nome del modulo** (PascalCase, es. "", "Performance")
- **Descrizione breve** del modulo
- **Tipo di modulo** (Business Logic, UI Component, API, etc.)
- **Dipendenze** da altri moduli esistenti

### 1.2 Validazione Nome
Controlla che:
- Il nome sia in PascalCase
- Non esista già un modulo con quel nome
- Non usi parole riservate PHP/Laravel

## Fase 2: Struttura Directory

### 2.1 Creazione Directory Base
Crea la struttura completa:

```bash

        "laravel/framework": "^10.0"
    },
    "autoload": {
        "psr-4": {
            "Modules\\{ModuleName}\\": "app/"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "Modules\\{ModuleName}\\Providers\\{ModuleName}ServiceProvider"
            ]
        }
    }
}
```

### 3.2 Module.json
Crea `Modules/{ModuleName}/module.json`:

```json
{
    "name": "{ModuleName}",
    "alias": "{module-name-lowercase}",
    "description": "{Descrizione del modulo}",
    "keywords": [],
    "priority": 0,
    "providers": [
        "Modules\\{ModuleName}\\Providers\\{ModuleName}ServiceProvider",
        "Modules\\{ModuleName}\\Providers\\Filament\\AdminPanelProvider"
    ],
    "files": [],
    "require": []
}
```

## Fase 4: Provider e Configurazioni

### 4.1 ServiceProvider Principale
Crea `Modules/{ModuleName}/app/Providers/{ModuleName}ServiceProvider.php`:

```php
<?php

declare(strict_types=1);

namespace Modules\{ModuleName}\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Service provider for the {ModuleName} module.
 */
class {ModuleName}ServiceProvider extends XotBaseServiceProvider
{
    /**
     * The module namespace.
     */
    protected string $module_name = '{ModuleName}';

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();
    }
}
```

Crea `Modules/{ModuleName}/app/Models/BaseModel.php`:

```php
<?php

declare(strict_types=1);

namespace Modules\{ModuleName}\Models;

use Modules\Xot\Models\XotBaseModel;

/**
 * Base model for the {ModuleName} module.
 */
abstract class BaseModel extends XotBaseModel
{
    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'mysql';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ]);
    }
}
```

### 5.2 Modello Esempio
Crea `Modules/{ModuleName}/app/Models/{ModuleName}.php`:

```php
<?php

declare(strict_types=1);

namespace Modules\{ModuleName}\Models;

/**
 * {ModuleName} model.
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 */
class {ModuleName} extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = '{module_name_snake_case}';
}
```

## Fase 6: File di Traduzione

### 6.1 Traduzioni Italiane
Crea `Modules/{ModuleName}/lang/it/general.php`:

```php
<?php

declare(strict_types=1);

return [
    'navigation' => [
        'label' => '{ModuleName}',
        'group' => 'Moduli',
        'sort' => 50,
    ],
    
    'page' => [
        'title' => '{ModuleName}',
        'heading' => 'Gestione {ModuleName}',
        'description' => 'Modulo per la gestione di {descrizione modulo}',
    ],
    
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Nome identificativo univoco',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Inserisci una descrizione',
            'help' => 'Descrizione dettagliata opzionale',
        ],
    ],
    
    'actions' => [
        'create' => [
            'label' => 'Crea nuovo',
            'success' => 'Elemento creato con successo',
            'error' => 'Errore durante la creazione',
        ],
        'edit' => [
            'label' => 'Modifica',
            'success' => 'Elemento modificato con successo',
            'error' => 'Errore durante la modifica',
        ],
        'delete' => [
            'label' => 'Elimina',
            'success' => 'Elemento eliminato con successo',
            'error' => 'Errore durante l\'eliminazione',
            'confirmation' => 'Sei sicuro di voler eliminare questo elemento?',
        ],
    ],
];
```

### 6.2 Traduzioni Inglesi
Crea `Modules/{ModuleName}/lang/en/general.php` (versione inglese equivalente)

## Fase 7: Route Base

### 7.1 Web Routes
Crea `Modules/{ModuleName}/routes/web.php`:

```php
<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\{ModuleName}\Http\Controllers\{ModuleName}Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['web', 'auth'])
    ->prefix('{module-name-lowercase}')
    ->name('{module-name-lowercase}.')
    ->group(function () {
        Route::get('/', [{ModuleName}Controller::class, 'index'])->name('index');
    });
```

### 7.2 API Routes
Crea `Modules/{ModuleName}/routes/api.php`:

```php
<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\{ModuleName}\Http\Controllers\Api\{ModuleName}ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['api', 'auth:sanctum'])
    ->prefix('v1/{module-name-lowercase}')
    ->name('api.{module-name-lowercase}.')
    ->group(function () {
        Route::apiResource('{module-name-lowercase}', {ModuleName}ApiController::class);
    });
```

## Fase 8: Controller Base

### 8.1 Web Controller
Crea `Modules/{ModuleName}/app/Http/Controllers/{ModuleName}Controller.php`:

```php
<?php

declare(strict_types=1);

namespace Modules\{ModuleName}\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Modules\Xot\Http\Controllers\XotBaseController;

/**
 * {ModuleName} controller.
 */
class {ModuleName}Controller extends XotBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request): View
    {
        return view('{module-name-lowercase}::index');
    }
}
```

## Fase 9: Risorsa Filament Base

### 9.1 Risorsa Filament
Crea `Modules/{ModuleName}/app/Filament/Resources/{ModuleName}Resource.php`:

```php
<?php

declare(strict_types=1);

namespace Modules\{ModuleName}\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\{ModuleName}\Models\{ModuleName};
use Modules\{ModuleName}\Filament\Resources\{ModuleName}Resource\Pages;

/**
 * {ModuleName} resource.
 */
class {ModuleName}Resource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string|null
     */
    protected static ?string $model = {ModuleName}::class;

    /**
     * The navigation icon.
     *
     * @var string|null
     */
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * The navigation group.
     *
     * @var string|null
     */
    protected static ?string $navigationGroup = '{ModuleName}';

    /**
     * Configure the form.
     *
     * @param \Filament\Forms\Form $form
     * @return \Filament\Forms\Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    /**
     * Configure the table.
     *
     * @param \Filament\Tables\Table $table
     * @return \Filament\Tables\Table
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Get the relations available for the resource.
     *
     * @return array<string>
     */
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    /**
     * Get the pages available for the resource.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\List{ModuleName}::route('/'),
            'create' => Pages\Create{ModuleName}::route('/create'),
            'edit' => Pages\Edit{ModuleName}::route('/{record}/edit'),
        ];
    }
}
```

### 9.2 Pagine Filament
Crea le pagine di base:

`Modules/{ModuleName}/app/Filament/Resources/{ModuleName}Resource/Pages/List{ModuleName}.php`
`Modules/{ModuleName}/app/Filament/Resources/{ModuleName}Resource/Pages/Create{ModuleName}.php`
`Modules/{ModuleName}/app/Filament/Resources/{ModuleName}Resource/Pages/Edit{ModuleName}.php`

## Fase 10: Documentazione

### 10.1 README del Modulo
Crea `Modules/{ModuleName}/README.md`:

```markdown

# {ModuleName} Module

{Descrizione dettagliata del modulo}

## Installazione

Il modulo viene caricato automaticamente tramite il ServiceProvider.

## Configurazione

### Providers

- `{ModuleName}ServiceProvider`: Provider principale del modulo
- `RouteServiceProvider`: Gestisce le route del modulo  
- `AdminPanelProvider`: Configura il panel Filament

### Modelli

- `{ModuleName}`: Modello principale

### Route

- Web: `/{module-name-lowercase}/`
- API: `/api/v1/{module-name-lowercase}/`

## Utilizzo

### Filament

Il modulo è accessibile tramite il panel Filament configurato all'URL:
`/{module-name-lowercase}`

### API

Endpoint disponibili:
- GET `/api/v1/{module-name-lowercase}` - Lista elementi
- POST `/api/v1/{module-name-lowercase}` - Crea elemento
- GET `/api/v1/{module-name-lowercase}/{id}` - Dettaglio elemento
- PUT `/api/v1/{module-name-lowercase}/{id}` - Aggiorna elemento  
- DELETE `/api/v1/{module-name-lowercase}/{id}` - Elimina elemento

## Sviluppo

### Testing

```bash
php artisan test Modules/{ModuleName}/tests/
```

### PHPStan

```bash
./vendor/bin/phpstan analyze Modules/{ModuleName}/ --level=9
```

## Struttura

```
Modules/{ModuleName}/
├── app/
│   ├── Actions/
│   ├── Console/
│   ├── Data/
│   ├── Filament/
│   ├── Http/
│   ├── Jobs/
│   ├── Models/
│   ├── Providers/
│   └── Services/
├── config/
├── database/
├── docs/
├── lang/
├── resources/
├── routes/
├── tests/
├── composer.json
├── module.json
└── README.md
```

## Contributors

- Laraxot Team

## License

MIT License
```

### 10.2 Documentazione Tecnica
Crea `Modules/{ModuleName}/docs/architecture.md` con dettagli architetturali

## Fase 11: Test Base

### 11.1 Test Feature
Crea `Modules/{ModuleName}/tests/Feature/{ModuleName}Test.php`

### 11.2 Test Unit
Crea `Modules/{ModuleName}/tests/Unit/Models/{ModuleName}Test.php`

## Fase 12: Migrazione Iniziale

### 12.1 Migrazione Base
Crea migrazione per la tabella principale del modulo seguendo le regole Laraxot:

```php
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    protected string $table_name = '{module_name_snake_case}';

    public function up(): void
    {
        if ($this->hasTable($this->table_name)) {
            return;
        }

        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        $this->tableComment($this->table_name, 'Tabella principale del modulo {ModuleName}');
    }
};
```

### 12.2 TestCase Base
Crea `Modules/{ModuleName}/tests/TestCase.php`:

```php
<?php

declare(strict_types=1);

namespace Modules\{ModuleName}\Tests;

use Tests\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Setup specifico del modulo
    }
}
```

## Fase 13: Validazione

### 13.1 Controlli Post-Creazione
Verifica che:
- Tutti i file siano creati correttamente
- I namespace siano corretti
- Le dipendenze siano configurate
- La struttura sia conforme agli standard Laraxot

### 13.2 Test di Base
Esegui:
```bash
cd laravel
composer dump-autoload
php artisan test --filter={ModuleName}
```

## Fase 14: Documentazione Finale

### 14.1 Aggiorna Docs Root
Aggiorna `docs/README.md` con:
- Riferimento al nuovo modulo
- Collegamento alla documentazione
- Aggiornamento della tabella moduli

### 14.2 Aggiorna Windsurf Rules
Aggiorna `.windsurf/rules/` con:
- Regole specifiche del modulo
- Best practices identificate
- Pattern di utilizzo

## Best Practices

1. **Seguire sempre le convenzioni Laraxot**
2. **Utilizzare XotBase per estensioni**
3. **Documentare ogni decisione architetturale**
4. **Implementare test per tutte le funzionalità**
5. **Mantenere coerenza con moduli esistenti**

## Checklist Finale

- [ ] Struttura directory completa
- [ ] File di configurazione creati
- [ ] Service provider configurato
- [ ] BaseModel estende XotBaseModel
- [ ] Documentazione iniziale creata
- [ ] Test base implementati
- [ ] Namespace corretti
- [ ] Autoload funzionante
- [ ] Documentazione root aggiornata
- [ ] Windsurf rules aggiornate

## Note Importanti

- **MAI** creare moduli che duplicano funzionalità esistenti
- **SEMPRE** estendere classi base Xot
- **SEMPRE** documentare decisioni e pattern
- **SEMPRE** implementare test di base
- **SEMPRE** seguire le convenzioni di naming

---

**Ultimo aggiornamento**: Gennaio 2025
**Versione**: 2.1
**Compatibilità**: Laraxot Framework, PHP 8.3+, Laravel 11+
