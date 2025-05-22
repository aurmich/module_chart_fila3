<<<<<<< HEAD
# Analisi PHPStan per il modulo Chart

Data: Wed Apr 23 10:42:39 CEST 2025

## Riassunto

| Livello | Stato | Errori |
|---------|-------|--------|
| 1 | ❌ Errore | Errore di esecuzione |

## Panoramica
Questo documento descrive l'analisi statica del codice tramite PHPStan per il modulo Chart, inclusi i livelli di analisi, gli errori comuni e le soluzioni implementate.

## Struttura della Documentazione

Questa cartella contiene l'analisi statica del codice eseguita con PHPStan per il modulo Chart.

## File di Configurazione

- `phpstan.neon.dist`: Configurazione principale di PHPStan
- `phpstan-baseline.neon`: Baseline degli errori noti
- `analysis.json`: Risultati dell'analisi corrente

## Come Eseguire l'Analisi

```bash
cd laravel/Modules/Chart
composer install
vendor/bin/phpstan analyse --error-format=json > docs/phpstan/analysis.json
```

## Livelli di Analisi

### [Livello 0](./level_0.md) - Base
- Controlli di base
- Errori di sintassi
- Chiamate a funzioni inesistenti

### [Livello 1](./level_1.md) - Tipi Base
- Type hints base
- Return types
- Parametri obbligatori

### [Livello 2](./level_2.md) - Controlli Avanzati
- Controlli di tipo più stretti
- Null checks
- Array shapes

### [Livello 3](./level_3.md) - Proprietà
- Proprietà di classe
- Proprietà dinamiche
- Proprietà statiche

### [Livello 4](./level_4.md) - Type Inference
- Type inference base
- Operatori
- Costrutti di controllo

### [Livello 5](./level_5.md) - Types
- Controlli di tipo completi
- Generics
- Template types

### [Livello 6](./level_6.md) - Signatures
- Signatures di metodi
- Ereditarietà
- Interfacce

### [Livello 7](./level_7.md) - Union Types
- Union types
- Intersection types
- Template type variance

### [Livello 8](./level_8.md) - Magic
- Magic methods
- Magic properties
- Dynamic calls

### [Livello 9](./level_9.md) - Strict
- Strict types
- Strict properties
- Strict methods

## Configurazione

### phpstan.neon
```yaml
parameters:
    level: 5
    paths:
        - app
    excludePaths:
        - app/Filament/Pages
        - build
        - vendor
        - Tests
    ignoreErrors:
        - '#Unsafe usage of new static#'
        - '#Access to an undefined property#'
        - '#Call to an undefined method#'
        - '#Call to an undefined static method#'
        - '#PHPDoc tag @mixin contains unknown class#'
```

### Baseline
```bash

# Generare baseline
php artisan phpstan:generate-baseline

# Applicare baseline
php artisan phpstan:analyse
```

## Errori Comuni

### 1. Type Hints Mancanti
```php
// ❌ NON FARE QUESTO
function getData($id) {
    return Chart::find($id);
}

// ✅ FARE QUESTO
function getData(int $id): ?Chart {
    return Chart::find($id);
}
```

### 2. Null Safety
```php
// ❌ NON FARE QUESTO
$chart->title = $request->title;

// ✅ FARE QUESTO
$chart->title = $request->title ?? $chart->title;
```

### 3. Return Types
```php
// ❌ NON FARE QUESTO
public function getChartData() {
    return $this->data;
}

// ✅ FARE QUESTO
public function getChartData(): array {
    return $this->data;
}
```

## Best Practices

### 1. Type Declarations
- Usare sempre type hints
- Specificare return types
- Utilizzare nullable types quando appropriato

### 2. PHPDoc
- Documentare parametri complessi
- Specificare tipi generici
- Mantenere documentazione aggiornata

### 3. Testing
- Scrivere test per casi edge
- Verificare null safety
- Testare type conversions

## Risoluzione Problemi

### Analisi
```bash

# Analisi completa
php artisan phpstan:analyse

# Analisi specifica
php artisan phpstan:analyse app/Models/Chart.php

# Debug
php artisan phpstan:analyse --debug
```

### Fixing
```bash

# Fix automatici
php artisan phpstan:fix

# Fix specifici
php artisan phpstan:fix app/Models/Chart.php
```

## Collegamenti Bidirezionali

### Collegamenti ad Altri Moduli
- [PHPStan User](../../User/docs/phpstan/README.md)
- [PHPStan Activity](../../Activity/docs/phpstan/README.md)
- [PHPStan Xot](../../Xot/docs/phpstan/README.md)

### Collegamenti Interni
- [README Principale](../README.md)
- [Implementazione](../implementation.md)
- [Testing](../testing.md)
- [Performance](../performance/README.md)

## Collegamenti tra versioni di README.md
* [README.md](../../../../../bashscripts/docs/README.md)
* [README.md](../../../../../bashscripts/docs/it/README.md)
* [README.md](../../../../../docs/laravel-app/phpstan/README.md)
=======
# Analisi Statica con PHPStan

## Configurazione

### Script di Analisi
Lo script `phpstan-limit-100.sh` esegue l'analisi statica e mostra i primi 100 errori:

```bash
#!/bin/bash

# Configurazione
PHPSTAN="./vendor/bin/phpstan"
LEVEL="9"
TARGET_DIR="Modules"
OUTPUT_FILE="../docs/phpstan/level_9_first_100.json"
MEMORY_LIMIT="16G"

# Esegui PHPStan e filtra i primi 100 errori
php -d memory_limit=$MEMORY_LIMIT $PHPSTAN analyse --level=$LEVEL --error-format=json $TARGET_DIR
```

### Livelli di Analisi
- Livello 0: Controlli di base
- Livello 9: Controlli più rigorosi

## Report degli Errori

### Struttura JSON
```json
{
    "files": {
        "path/to/file.php": {
            "messages": [
                {
                    "message": "Descrizione errore",
                    "line": 123,
                    "ignorable": true
                }
            ]
        }
    }
}
```

### Tipi di Errori
1. Type Hints mancanti
2. Return Type mancanti
3. Proprietà non dichiarate
4. Metodi non esistenti
5. Null safety

## Processo di Correzione

### 1. Analisi
- Eseguire lo script
- Analizzare il report JSON
- Identificare pattern comuni

### 2. Documentazione
- Aggiornare la documentazione del modulo
- Creare collegamenti bidirezionali
- Documentare le correzioni

### 3. Implementazione
- Correggere gli errori
- Testare le modifiche
- Rilanciare l'analisi

### 4. Verifica
- Controllare il nuovo report
- Verificare effetti collaterali
- Aggiornare la documentazione

## Best Practices

### 1. Type Safety
- Dichiarare sempre i tipi di parametri
- Specificare i return type
- Utilizzare type hints per le proprietà

### 2. Null Safety
- Evitare comparazioni loose
- Gestire esplicitamente i null
- Utilizzare operatori null-safe

### 3. Documentazione
- PHPDoc completi
- Esempi di utilizzo
- Note sui cambiamenti

## Collegamenti

- [PHPStan Documentation](https://phpstan.org/user-guide/getting-started)
- [Type System Documentation](../types/README.md)
- [Coding Standards](../standards/README.md) 

## Collegamenti tra versioni di README.md
* [README.md](bashscripts/docs/README.md)
* [README.md](bashscripts/docs/it/README.md)
* [README.md](docs/laravel-app/phpstan/README.md)
* [README.md](docs/laravel-app/README.md)
* [README.md](docs/moduli/struttura/README.md)
* [README.md](docs/moduli/README.md)
* [README.md](docs/moduli/manutenzione/README.md)
* [README.md](docs/moduli/core/README.md)
* [README.md](docs/moduli/installati/README.md)
* [README.md](docs/moduli/comandi/README.md)
* [README.md](docs/phpstan/README.md)
* [README.md](docs/README.md)
* [README.md](docs/module-links/README.md)
* [README.md](docs/troubleshooting/git-conflicts/README.md)
* [README.md](docs/tecnico/laraxot/README.md)
* [README.md](docs/modules/README.md)
* [README.md](docs/conventions/README.md)
* [README.md](docs/amministrazione/backup/README.md)
* [README.md](docs/amministrazione/monitoraggio/README.md)
* [README.md](docs/amministrazione/deployment/README.md)
* [README.md](docs/translations/README.md)
* [README.md](docs/roadmap/README.md)
* [README.md](docs/ide/cursor/README.md)
* [README.md](docs/implementazione/api/README.md)
* [README.md](docs/implementazione/testing/README.md)
* [README.md](docs/implementazione/pazienti/README.md)
* [README.md](docs/implementazione/ui/README.md)
* [README.md](docs/implementazione/dental/README.md)
* [README.md](docs/implementazione/core/README.md)
* [README.md](docs/implementazione/reporting/README.md)
* [README.md](docs/implementazione/isee/README.md)
* [README.md](docs/it/README.md)
* [README.md](laravel/vendor/mockery/mockery/docs/README.md)
* [README.md](laravel/Modules/Chart/docs/README.md)
* [README.md](laravel/Modules/Reporting/docs/README.md)
* [README.md](laravel/Modules/Gdpr/docs/phpstan/README.md)
* [README.md](laravel/Modules/Gdpr/docs/README.md)
* [README.md](laravel/Modules/Notify/docs/phpstan/README.md)
* [README.md](laravel/Modules/Notify/docs/README.md)
* [README.md](laravel/Modules/Xot/docs/filament/README.md)
* [README.md](laravel/Modules/Xot/docs/phpstan/README.md)
* [README.md](laravel/Modules/Xot/docs/exceptions/README.md)
* [README.md](laravel/Modules/Xot/docs/README.md)
* [README.md](laravel/Modules/Xot/docs/standards/README.md)
* [README.md](laravel/Modules/Xot/docs/conventions/README.md)
* [README.md](laravel/Modules/Xot/docs/development/README.md)
* [README.md](laravel/Modules/Dental/docs/README.md)
* [README.md](laravel/Modules/User/docs/phpstan/README.md)
* [README.md](laravel/Modules/User/docs/README.md)
* [README.md](laravel/Modules/User/resources/views/docs/README.md)
* [README.md](laravel/Modules/UI/docs/phpstan/README.md)
* [README.md](laravel/Modules/UI/docs/README.md)
* [README.md](laravel/Modules/UI/docs/standards/README.md)
* [README.md](laravel/Modules/UI/docs/themes/README.md)
* [README.md](laravel/Modules/UI/docs/components/README.md)
* [README.md](laravel/Modules/Lang/docs/phpstan/README.md)
* [README.md](laravel/Modules/Lang/docs/README.md)
* [README.md](laravel/Modules/Job/docs/phpstan/README.md)
* [README.md](laravel/Modules/Job/docs/README.md)
* [README.md](laravel/Modules/Media/docs/phpstan/README.md)
* [README.md](laravel/Modules/Media/docs/README.md)
* [README.md](laravel/Modules/Tenant/docs/phpstan/README.md)
* [README.md](laravel/Modules/Tenant/docs/README.md)
* [README.md](laravel/Modules/Activity/docs/phpstan/README.md)
* [README.md](laravel/Modules/Activity/docs/README.md)
* [README.md](laravel/Modules/Patient/docs/README.md)
* [README.md](laravel/Modules/Patient/docs/standards/README.md)
* [README.md](laravel/Modules/Patient/docs/value-objects/README.md)
* [README.md](laravel/Modules/Cms/docs/blocks/README.md)
* [README.md](laravel/Modules/Cms/docs/README.md)
* [README.md](laravel/Modules/Cms/docs/standards/README.md)
* [README.md](laravel/Modules/Cms/docs/content/README.md)
* [README.md](laravel/Modules/Cms/docs/frontoffice/README.md)
* [README.md](laravel/Modules/Cms/docs/components/README.md)
* [README.md](laravel/Themes/Two/docs/README.md)
* [README.md](laravel/Themes/One/docs/README.md)

>>>>>>> 54f4fa16 (.)
