<<<<<<< HEAD
# Parental: Ereditarietà a Tabella Singola in <nome progetto>
=======
# Parental: Ereditarietà a Tabella Singola in il progetto
>>>>>>> 54f4fa16 (.)

## Indice
- [Introduzione](#introduzione)
- [Concetti Fondamentali](#concetti-fondamentali)
<<<<<<< HEAD
- [Implementazione in <nome progetto>](#implementazione-in-<nome progetto>)
- [Casi d'Uso nel Modulo User](#casi-duso-nel-modulo-user)
- [Comandi Console Generici](#comandi-console-generici)
=======
- [Implementazione in il progetto](#implementazione-in-<nome progetto>)
- [Casi d'Uso nel Modulo User](#casi-duso-nel-modulo-user)
>>>>>>> 54f4fa16 (.)
- [Best Practices](#best-practices)
- [Troubleshooting](#troubleshooting)
- [Riferimenti](#riferimenti)

## Introduzione

<<<<<<< HEAD
Parental è una libreria sviluppata da [Tighten](https://github.com/tighten/parental) che implementa il pattern di **Single Table Inheritance (STI)** in Laravel. Questo documento analizza in dettaglio come utilizzare Parental nel contesto del modulo User di <nome progetto> per gestire diversi tipi di utenti mantenendo un'architettura pulita e performante.
=======
Parental è una libreria sviluppata da Tighten che implementa il pattern di **Single Table Inheritance (STI)** in Laravel. Questo documento analizza in dettaglio come utilizzare Parental nel contesto del modulo User di il progetto per gestire diversi tipi di utenti mantenendo un'architettura pulita e performante.
>>>>>>> 54f4fa16 (.)

### Cos'è la Single Table Inheritance?

La Single Table Inheritance è un pattern di progettazione che permette di estendere un modello base (genitore) con modelli specializzati (figli) che condividono la stessa tabella nel database. Questo approccio offre diversi vantaggi:

- **Semplicità dello schema database**: una sola tabella per tutti i tipi di entità correlate
- **Prestazioni ottimizzate**: nessun join necessario per recuperare dati specializzati
- **Flessibilità nell'evoluzione del dominio**: facile aggiunta di nuovi tipi specializzati

## Concetti Fondamentali

### 1. Modello Genitore e Modelli Figli

In Parental, definiamo:
- Un **modello genitore** che rappresenta l'entità base (es. `User`)
- Uno o più **modelli figli** che estendono il genitore con comportamenti specifici (es. `Admin`, `Patient`, `Doctor`)

### 2. Trait Principali

Parental fornisce due trait fondamentali:

- **`HasChildren`**: Applicato al modello genitore per permettergli di restituire istanze dei modelli figli appropriati
- **`HasParent`**: Applicato ai modelli figli per permettere loro di utilizzare la tabella del genitore

### 3. Colonna di Tipo

Per distinguere tra i diversi tipi di entità nella stessa tabella, Parental utilizza una colonna di tipo (default: `type`) che memorizza:
- Il nome completo della classe del modello figlio, oppure
- Un alias configurabile più leggibile

<<<<<<< HEAD
## Implementazione in <nome progetto>

### Configurazione Base del Modulo User

Il modulo User di <nome progetto> è progettato per essere **generico e riutilizzabile** in più progetti. La configurazione STI deve essere definita nei moduli specifici del progetto.

#### 1. BaseUser (Modulo User Generico)

```php
namespace Modules\User\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Parental\HasChildren;

abstract class BaseUser extends Authenticatable
{
    use HasChildren;

    /** @var string */
    protected $childColumn = 'type';

    /** @var list<string> */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type', // Campo fondamentale per STI
    ];

    /** @var array<string, class-string> */
    protected $childTypes = [
        // Vuoto per default - deve essere definito nei moduli specifici
=======
## Implementazione in il progetto

### Configurazione Base

1. **Installazione della libreria**:
   ```bash
   composer require tightenco/parental
   ```

2. **Aggiunta della colonna di tipo**:
   ```php
   Schema::table('users', function ($table) {
       $table->string('type')->nullable();
   });
   ```

3. **Configurazione del modello genitore**:
   ```php
   namespace Modules\User\Models;

   use Illuminate\Foundation\Auth\User as Authenticatable;
   use Parental\HasChildren;

   class User extends Authenticatable
   {
       use HasChildren;

       protected $fillable = [
           'name',
           'email',
           'password',
           'type'
       ];

       // Opzionale: definire alias per i tipi
       protected $childTypes = [
           'admin' => \Modules\User\Models\Admin::class,
           'patient' => \Modules\User\Models\Patient::class,
           'doctor' => \Modules\User\Models\Doctor::class,
       ];
   }
   ```

4. **Configurazione dei modelli figli**:
   ```php
   namespace Modules\User\Models;

   use Parental\HasParent;

   class Admin extends User
   {
       use HasParent;

       // Metodi e proprietà specifici per Admin
       public function canAccessDashboard()
       {
           return true;
       }
   }
   ```

### Personalizzazioni Avanzate

#### Cambio del nome della colonna di tipo

Se si desidera utilizzare un nome diverso da `type` per la colonna di discriminazione:

```php
class User extends Authenticatable
{
    use HasChildren;

    protected $childColumn = 'user_type';
}
```

#### Utilizzo di alias per i tipi

Per evitare di memorizzare nomi di classi completi nel database:

```php
class User extends Authenticatable
{
    use HasChildren;

    protected $childTypes = [
        'amministratore' => \Modules\User\Models\Admin::class,
        'paziente' => \Modules\User\Models\Patient::class,
        'medico' => \Modules\User\Models\Doctor::class,
>>>>>>> 54f4fa16 (.)
    ];
}
```

<<<<<<< HEAD
#### 2. User del Modulo Specifico (es. SaluteOra)

```php
namespace Modules\SaluteOra\Models;

use Modules\User\Models\BaseUser;
use Modules\SaluteOra\Enums\UserTypeEnum;

class User extends BaseUser
{
    /** @var string */
    protected $connection = 'salute_ora';

    /**
     * Mappatura dei tipi specifici del progetto SaluteOra
     */
    protected $childTypes = [
        'admin' => Admin::class,
        'doctor' => Doctor::class,
        'patient' => Patient::class,
    ];

    /**
     * Cast per enum del modulo specifico
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'type' => UserTypeEnum::class,
        ]);
    }
}
```

#### 3. Modelli Figli del Modulo Specifico

```php
namespace Modules\SaluteOra\Models;

use Parental\HasParent;
=======
## Casi d'Uso nel Modulo User

### 1. Gestione Utenti con Ruoli Diversi

In il progetto, possiamo utilizzare Parental per implementare diversi tipi di utenti con comportamenti specifici:

```php
// Creazione di utenti specializzati
$admin = Admin::create([
    'name' => 'Mario Rossi',
    'email' => 'admin@<nome progetto>.it',
    'password' => Hash::make('password')
]);

$patient = Patient::create([
    'name' => 'Giulia Bianchi',
    'email' => 'paziente@example.com',
    'password' => Hash::make('password'),
    'codice_fiscale' => 'BNCGLI80A01H501A',
    'data_nascita' => '1980-01-01'
]);

// Recupero di tutti gli utenti (con il tipo corretto)
$users = User::all(); // Restituisce una collezione di Admin, Patient, ecc.

// Filtraggio per tipo specifico
$admins = User::where('type', 'admin')->get(); // o l'alias configurato
```

### 2. Integrazione con il Sistema di Autorizzazioni

Parental si integra perfettamente con i sistemi di autorizzazione di Laravel:

```php
// In AuthServiceProvider.php
Gate::define('access-dashboard', function ($user) {
    // Verifica automaticamente se l'utente è un'istanza di Admin
    return $user instanceof \Modules\User\Models\Admin || 
           ($user instanceof \Modules\User\Models\Doctor && $user->hasPermission('dashboard'));
});
```

### 3. Estensione dei Modelli con Relazioni Specifiche

Ogni modello figlio può definire relazioni specifiche:

```php
class Patient extends User
{
    use HasParent;

    // Relazioni specifiche per i pazienti
    public function appointments()
    {
        return $this->hasMany(\Modules\Appointment\Models\Appointment::class, 'patient_id');
    }

    public function medicalRecords()
    {
        return $this->hasMany(\Modules\MedicalRecord\Models\MedicalRecord::class, 'patient_id');
    }
}
>>>>>>> 54f4fa16 (.)

class Doctor extends User
{
    use HasParent;

<<<<<<< HEAD
    // Comportamenti specifici per Doctor
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

class Patient extends User
{
    use HasParent;

    // Comportamenti specifici per Patient
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
=======
    // Relazioni specifiche per i medici
    public function specialties()
    {
        return $this->belongsToMany(\Modules\Doctor\Models\Specialty::class);
    }

    public function availabilities()
    {
        return $this->hasMany(\Modules\Doctor\Models\Availability::class);
>>>>>>> 54f4fa16 (.)
    }
}
```

<<<<<<< HEAD
### Principi di Modularità

**CRITICO**: Il modulo User deve rimanere generico e **MAI** dipendere da moduli specifici del progetto. Questo garantisce:

- **Riutilizzabilità**: Il modulo User può essere utilizzato in progetti diversi
- **Manutenibilità**: Modifiche specifiche non influenzano il core generico
- **Testabilità**: Il modulo base può essere testato indipendentemente

## Comandi Console Generici

I comandi console nel modulo User devono essere progettati per funzionare con qualsiasi implementazione STI, senza dipendenze specifiche.

### Pattern Generico per Comandi Console

```php
namespace Modules\User\Console\Commands;

use Illuminate\Console\Command;
use Modules\Xot\Datas\XotData;

class ChangeTypeCommand extends Command
{
    protected $name = 'user:change-type';
    protected $description = 'Change user type based on project configuration';

    public function handle(): void
    {
        $email = $this->ask('User email?');
        $user = XotData::make()->getUserByEmail($email);
        
        if (!$user) {
            $this->error("User not found: {$email}");
            return;
        }

        // Ottieni i tipi disponibili dal modello corrente
        $availableTypes = $this->getAvailableTypes($user);
        
        if (empty($availableTypes)) {
            $this->error('No user types configured for this project.');
            return;
        }

        $currentType = $user->type ?? 'Not set';
        $this->info("Current type: {$currentType}");

        $newType = $this->choice('Select new type:', array_keys($availableTypes));

        $user->type = $newType;
        $user->save();

        $this->info("Type changed to '{$newType}' for {$email}");
    }

    /**
     * Ottieni i tipi disponibili dal modello corrente
     */
    private function getAvailableTypes($user): array
    {
        // Verifica se il modello ha childTypes configurati
        if (property_exists($user, 'childTypes') && !empty($user->childTypes)) {
            return $user->childTypes;
        }

        // Fallback: tipi base comuni
        return [
            'admin' => 'Administrator',
            'user' => 'Regular User',
        ];
    }
}
```

### Best Practices per Comandi Generici

1. **Usa Reflection per ispezionare i tipi disponibili**
2. **Fornisci fallback ragionevoli**
3. **Non assumere enum o strutture specifiche**
4. **Documenta chiaramente le dipendenze**

## Best Practices

### 1. Separazione delle Responsabilità

**Modulo User (Generico)**:
- ✅ Definisce l'architettura base STI
- ✅ Fornisce trait e classi base
- ✅ Implementa comandi generici
- ❌ MAI dipendenze da moduli specifici

**Moduli Specifici del Progetto**:
- ✅ Definiscono i tipi specifici del dominio
- ✅ Implementano enum e cast specifici
- ✅ Estendono il comportamento base
- ❌ MAI modificare il modulo User base

### 2. Configurazione Dinamica

Usa configurazioni esterne per definire i tipi:

```php
// config/user_types.php (nel modulo specifico)
return [
    'types' => [
        'admin' => [
            'class' => \Modules\ProjectName\Models\Admin::class,
            'label' => 'Administrator',
            'permissions' => ['*'],
        ],
        'doctor' => [
            'class' => \Modules\ProjectName\Models\Doctor::class,
            'label' => 'Medical Doctor',
            'permissions' => ['medical:*'],
        ],
    ],
];
```

### 3. Testing Strategy

```php
// Test nel modulo User (generico)
class UserTypeCommandTest extends TestCase
{
    /** @test */
    public function it_works_without_specific_types()
    {
        // Test con configurazione base
    }
}

// Test nel modulo specifico
class SaluteOraUserTypeCommandTest extends TestCase
{
    /** @test */
    public function it_works_with_salute_ora_types()
    {
        // Test con tipi specifici di SaluteOra
    }
}
```

## Troubleshooting

### Problema: "No user types configured"

**Causa**: Il modello User del progetto non ha definito `$childTypes`

**Soluzione**: Verificare che il modello User specifico del progetto definisca i tipi:

```php
class User extends BaseUser
{
    protected $childTypes = [
        'admin' => Admin::class,
        // Altri tipi...
    ];
}
```

### Problema: "Call to undefined method"

**Causa**: Comando che tenta di usare metodi specifici di un enum

**Soluzione**: Rendere il comando generico usando reflection:

```php
$typeValue = is_object($user->type) && method_exists($user->type, 'value') 
    ? $user->type->value 
    : (string) $user->type;
```

## Riferimenti

- [Documentazione Parental](https://github.com/tighten/parental)
- [Laravel Single Table Inheritance](https://laravel.com/docs/eloquent-relationships#polymorphic-relationships)
- [Modulo User - Architettura Base](./user-architecture.md)
- [SaluteOra - Implementazione STI](../../SaluteOra/docs/user-types.md)

*Ultimo aggiornamento: Dicembre 2024*
=======
## Best Practices

### 1. Quando Usare Parental vs. Relazioni Tradizionali

**Utilizzare Parental quando**:
- I diversi tipi di utenti condividono la maggior parte degli attributi
- Si desidera evitare join frequenti tra tabelle di utenti correlate
- La logica di business richiede polimorfismo a livello di modello

**Preferire relazioni tradizionali quando**:
- I diversi tipi di utenti hanno molti attributi specifici
- Si prevede una crescita significativa e differenziata tra i diversi tipi
- È necessario ottimizzare query specifiche per tipo

### 2. Gestione delle Migrazioni

Quando si aggiungono attributi specifici per un tipo di utente:

```php
Schema::table('users', function (Blueprint $table) {
    // Campi comuni a tutti gli utenti
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->string('type')->nullable();
    
    // Campi specifici per pazienti (nullable)
    $table->string('codice_fiscale')->nullable();
    $table->date('data_nascita')->nullable();
    
    // Campi specifici per medici (nullable)
    $table->string('numero_iscrizione_albo')->nullable();
    $table->string('specializzazione')->nullable();
});
```

### 3. Ottimizzazione delle Performance

- **Indici appropriati**:
  ```php
  Schema::table('users', function (Blueprint $table) {
      $table->index('type');
  });
  ```

- **Eager Loading selettivo**:
  ```php
  // Carica relazioni specifiche in base al tipo
  $users = User::all()->each(function ($user) {
      if ($user instanceof Patient) {
          $user->load('medicalRecords');
      } elseif ($user instanceof Doctor) {
          $user->load('specialties', 'availabilities');
      }
  });
  ```

## Troubleshooting

### Problemi Comuni e Soluzioni

1. **Il tipo non viene impostato correttamente**
   - Verifica che `type` (o la colonna personalizzata) sia inclusa in `$fillable`
   - Controlla che la colonna esista nella tabella del database

2. **I modelli restituiti sono sempre del tipo genitore**
   - Assicurati che il trait `HasChildren` sia applicato al modello genitore
   - Verifica che i valori nella colonna `type` corrispondano ai nomi delle classi o agli alias configurati

3. **Errori con le relazioni nei modelli figli**
   - Ricorda che le relazioni devono essere definite con la chiave esterna basata sul nome della tabella del genitore
   - Usa `getMorphClass()` quando necessario per ottenere il nome della classe corretto

4. **Problemi con Laravel Nova**
   - Registra il provider `\Parental\Providers\NovaResourceProvider::class` nel `NovaServiceProvider`

## Riferimenti

- [Documentazione ufficiale di Parental](https://github.com/tighten/parental)
- [Articolo: "Single Table Inheritance in Laravel with Parental"](https://tighten.com/blog/single-table-inheritance-in-laravel-with-parental/)
- [Pattern di progettazione: Single Table Inheritance](https://martinfowler.com/eaaCatalog/singleTableInheritance.html)
>>>>>>> 54f4fa16 (.)
