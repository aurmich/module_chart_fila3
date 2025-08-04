# Regole Fondamentali Base

## XotBaseResource
- ✅ SEMPRE estendere `XotBaseResource` invece di `Resource`
- ✅ SEMPRE usare `getFormSchema(): array` invece di `form(Form $form): Form`
- ❌ NON definire `$navigationIcon`, `$navigationGroup`, `$navigationSort`
- ❌ NON definire `table()`, `getTableColumns()`, `getTableFilters()`
- ✅ SEMPRE definire `protected static ?string $model`
- ❌ NON sovrascrivere metodi `final`
- ✅ SEMPRE usare file di traduzione per le label

## XotBaseListRecords
- ✅ SEMPRE estendere `XotBaseListRecords` invece di `ListRecords`
<<<<<<< HEAD
- ✅ SEMPRE usare `getTableColumns()` invece di `getListTableColumns()`
- ✅ SEMPRE usare `getTableFilters()` invece di `getListTableFilters()`
- ✅ SEMPRE usare `getTableActions()` invece di `getListTableActions()`
- ✅ SEMPRE usare `getTableBulkActions()` invece di `getListTableBulkActions()`
- ✅ SEMPRE restituire array associativo con chiavi stringa
- ❌ NON usare `->label()`, `->placeholder()`, `->helperText()`
- ✅ SEMPRE implementare `getTableColumns(): array` (OBBLIGATORIO)
- ✅ SEMPRE mantenere visibilità `public` dei metodi
- ✅ SEMPRE aggiungere `declare(strict_types=1);`

## XotBaseEditRecord
- ✅ SEMPRE estendere `XotBaseEditRecord` invece di `EditRecord`
- ✅ SEMPRE usare `getHeaderActions()` per azioni nell'header
- ✅ SEMPRE usare `getFormActions()` per azioni del form
- ✅ SEMPRE restituire array di Actions
- ❌ NON estendere mai direttamente `Filament\Resources\Pages\EditRecord`
- ✅ SEMPRE aggiungere `declare(strict_types=1);`
- ✅ SEMPRE documentare con PHPDoc

## XotBaseCreateRecord
- ✅ SEMPRE estendere `XotBaseCreateRecord` invece di `CreateRecord`
- ✅ SEMPRE usare `getHeaderActions()` per azioni nell'header
- ✅ SEMPRE usare `getFormActions()` per azioni del form
- ❌ NON estendere mai direttamente `Filament\Resources\Pages\CreateRecord`
- ✅ SEMPRE aggiungere `declare(strict_types=1);`

## XotBaseViewRecord
- ✅ SEMPRE estendere `XotBaseViewRecord` invece di `ViewRecord`
- ✅ SEMPRE usare `getHeaderActions()` per azioni nell'header
- ❌ NON estendere mai direttamente `Filament\Resources\Pages\ViewRecord`
- ✅ SEMPRE aggiungere `declare(strict_types=1);`

## XotBaseMigration
- ✅ SEMPRE estendere `XotBaseMigration` invece di `Migration`
- ✅ SEMPRE usare classi anonime: `return new class extends XotBaseMigration`
- ❌ NON implementare mai il metodo `down()` (gestito automaticamente)
- ✅ SEMPRE usare `tableCreate()` per creazione tabella
- ✅ SEMPRE usare `tableUpdate()` per modifiche tabella
- ✅ SEMPRE usare `updateTimestamps($table, true)` SOLO in `tableUpdate`
- ❌ NON usare mai `$table->timestamps()` o `$table->softDeletes()` direttamente
- ✅ SEMPRE verificare esistenza con `hasColumn()` e `hasIndex()`
- ✅ SEMPRE usare `foreignIdFor()` per chiavi esterne
- ❌ NON definire manualmente `$table` o `$model_class` (calcolati automaticamente)

## Regole Timestamp XotBaseMigration
- ✅ `updateTimestamps($table, true)` va usato SOLO in `tableUpdate`
- ❌ NON usare `updateTimestamps()` in `tableCreate`
- ❌ NON usare `$table->timestamps()` o `$table->softDeletes()` direttamente
- ✅ Il parametro `true` in `updateTimestamps($table, true)` include soft delete
- ✅ `updateTimestamps()` gestisce automaticamente `created_at`, `updated_at`, `deleted_at`

## Traduzioni
- ✅ SEMPRE usare file di traduzione per label, placeholder, helperText
- ❌ NON usare mai `->label()`, `->placeholder()`, `->helperText()` direttamente
- ✅ Struttura espansa obbligatoria per fields e actions
- ✅ Array syntax breve `[]` invece di `array()`
- ✅ `declare(strict_types=1);` in tutti i file

## Namespace
- ✅ SEMPRE usare namespace `Modules\{ModuleName}\...` (senza segmento 'App')
- ❌ NON usare mai `Modules\{ModuleName}\App\...`
- ✅ Mappatura corretta: `app/Models/` → `Modules\{ModuleName}\Models`

## Regola HasTranslations
- ✅ SE il modello ha `use HasTranslations` → usa `LangBase*` (LangBaseEditRecord, LangBaseCreateRecord)
- ✅ SE il modello NON ha `use HasTranslations` → usa `XotBase*` (XotBaseEditRecord, XotBaseCreateRecord)
- ✅ SEMPRE verificare il modello associato alla risorsa, non la pagina stessa

## Modelli
- ✅ SEMPRE estendere `BaseModel` del proprio modulo
- ❌ NON estendere mai direttamente `Illuminate\Database\Eloquent\Model`
- ❌ NON estendere mai `Modules\Xot\Models\XotBaseModel`
- ✅ SEMPRE usare `protected function casts(): array` invece di `protected $casts = []`
- ✅ SEMPRE commentare relazioni non implementate con `// TODO: implementare`
- ❌ NON implementare `newFactory()` quando si estende `BaseModel`

*Ultimo aggiornamento: 2025-01-06* 
=======
- ✅ SEMPRE usare `getListTableColumns()` invece di `getTableColumns()`
- ✅ SEMPRE usare `getListTableFilters()` invece di `getTableFilters()`
- ✅ SEMPRE usare `getListTableActions()` invece di `getTableActions()`
- ✅ SEMPRE usare `getListTableBulkActions()` invece di `getTableBulkActions()`

## Traduzioni
- ❌ NON usare `->label()` nei componenti
- ✅ SEMPRE definire le traduzioni nei file di lingua
- ✅ SEMPRE seguire la struttura standard delle traduzioni

## Namespace
- ✅ SEMPRE usare `Modules\{Module}\Filament\Resources`
- ✅ SEMPRE importare da `Modules\Xot\Filament\Resources`
- ❌ NON includere `app` nel namespace
- ✅ SEMPRE estendere `BaseModel` dallo stesso namespace

## Metodi Statici
- ✅ `getFormSchema()` deve essere `public static`
- ✅ `$model` deve essere `protected static ?string`
- ❌ NON usare `$this` nei metodi statici

## ServiceProvider
- ✅ SEMPRE estendere `XotBaseServiceProvider`
- ✅ SEMPRE definire `public string $name`
- ❌ NON modificare la visibilità delle proprietà ereditate
- ✅ SEMPRE chiamare `parent::boot()` e `parent::register()`

## Modelli
- ✅ SEMPRE estendere `BaseModel` dallo stesso namespace
- ✅ SEMPRE usare il metodo `casts()` invece della proprietà `$casts`
- ✅ SEMPRE mantenere i cast del modello base con `parent::casts()`
- ❌ NON estendere direttamente `Illuminate\Database\Eloquent\Model`

## Collegamenti
- [Regole Namespace](namespace.md)
- [Regole ServiceProvider](service-providers.md)
- [Regole Modelli](modelli-eloquent.md)
- [Regole Filament](filament-resources.md)

## Regole per l'Estensione dei Modelli

### Regola Fondamentale
I modelli di ogni modulo DEVONO estendere il BaseModel del proprio modulo, NON direttamente Illuminate\Database\Eloquent\Model.

### Motivazione
1. **Coerenza del Sistema**
   - Ogni modulo ha il suo BaseModel con configurazioni specifiche
   - Le funzionalità comuni sono centralizzate
   - La manutenzione è semplificata

2. **Ereditarietà Corretta**
   ```php
   // ✅ CORRETTO
   use Modules\ModuleName\Models\BaseModel;
   class MyModel extends BaseModel { }

   // ❌ SBAGLIATO
   use Illuminate\Database\Eloquent\Model;
   class MyModel extends Model { }
   ```

3. **Vantaggi**
   - Cast comuni automatici
   - Configurazioni di connessione unificate
   - Traits e funzionalità condivise
   - Facilità di aggiornamento
   - Riduzione della duplicazione del codice

### Verifica
Prima di creare un nuovo modello:
1. Verificare l'esistenza di BaseModel nel modulo
2. Controllare le funzionalità ereditate
3. Non duplicare configurazioni già presenti in BaseModel 

# Memoria Tecnica

## Filament

### Metodi Deprecati
- ❌ NON usare `getListTableColumns()` - DEPRECATO
- ❌ NON usare `getGridTableColumns()` - DEPRECATO
- ✅ SEMPRE usare `getTableColumns()` con layout appropriato

### Metodi Standard
- ✅ SEMPRE usare array associativi con chiavi stringa
- ✅ SEMPRE usare file di traduzioni
- ✅ SEMPRE estendere XotBaseResource
- ✅ SEMPRE implementare SOLO getFormSchema()

### Anti-pattern
- ❌ NON estendere direttamente classi Filament
- ❌ NON implementare metodi non necessari
- ❌ NON usare hardcoding di traduzioni
- ❌ NON duplicare codice

### Best Practices
1. **Responsabilità**
   - XotBaseResource gestisce la logica comune
   - Resources specifici gestiscono SOLO lo schema form
   - Traduzioni gestite tramite file di lingua
   - Layout gestito tramite configurazione

2. **Manutenzione**
   - Verificare aggiornamenti Filament
   - Controllare metodi deprecati
   - Aggiornare documentazione
   - Mantenere codice pulito

3. **Performance**
   - Minimizzare codice
   - Evitare duplicazioni
   - Usare cache quando possibile
   - Ottimizzare query

4. **Sicurezza**
   - Validare input
   - Gestire permessi
   - Proteggere dati sensibili
   - Logging appropriato 
>>>>>>> aurmich/dev
