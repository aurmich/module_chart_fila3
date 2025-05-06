<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dacab4a (.)
# Analisi PHPStan per il modulo Chart

Data: Wed Apr 23 10:42:39 CEST 2025

## Riassunto

| Livello | Stato | Errori |
|---------|-------|--------|
| 1 | ❌ Errore | Errore di esecuzione |
## Collegamenti

- [Report Generale](/docs/phpstan/README.md)
<<<<<<< HEAD
=======
# Analisi PHPStan - Modulo Chart

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

## Categorie di Errori

L'analisi PHPStan individuerà diverse categorie di errori:

1. **Errori di Tipo**
   - Parametri mancanti
   - Tipi di ritorno non corretti
   - Tipi di parametri non corretti

2. **Errori di Accesso**
   - Accesso a proprietà/metodi non esistenti
   - Accesso a proprietà/metodi privati

3. **Errori di Sintassi**
   - Chiamate a metodi statici su istanze
   - Chiamate a metodi non statici in modo statico

4. **Errori di Logica**
   - Condizioni sempre vere/false
   - Dead code
   - Unreachable code

## Piano di Correzione

Una volta completata l'analisi di tutti i moduli, procederemo con le correzioni seguendo questo ordine:

1. Errori critici che impediscono il funzionamento
2. Errori di tipo che potrebbero causare bug
3. Errori di accesso che potrebbero causare eccezioni
4. Errori di sintassi e logica minori

## Note

- Non correggere gli errori prima di avere un quadro completo di tutti i moduli
- Documentare ogni errore trovato con la relativa soluzione proposta
- Mantenere aggiornato il file baseline dopo ogni correzione
>>>>>>> 7d3b0bb (.)
=======
# PHPStan Analysis - Modulo Chart

## Panoramica
Questo documento descrive l'analisi statica del codice tramite PHPStan per il modulo Chart, inclusi i livelli di analisi, gli errori comuni e le soluzioni implementate.

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
* [README.md](../../../../../docs/laravel-app/README.md)
* [README.md](../../../../../docs/moduli/struttura/README.md)
* [README.md](../../../../../docs/moduli/README.md)
* [README.md](../../../../../docs/moduli/manutenzione/README.md)
* [README.md](../../../../../docs/moduli/core/README.md)
* [README.md](../../../../../docs/moduli/installati/README.md)
* [README.md](../../../../../docs/moduli/comandi/README.md)
* [README.md](../../../../../docs/phpstan/README.md)
* [README.md](../../../../../docs/README.md)
* [README.md](../../../../../docs/module-links/README.md)
* [README.md](../../../../../docs/troubleshooting/git-conflicts/README.md)
* [README.md](../../../../../docs/tecnico/laraxot/README.md)
* [README.md](../../../../../docs/modules/README.md)
* [README.md](../../../../../docs/conventions/README.md)
* [README.md](../../../../../docs/amministrazione/backup/README.md)
* [README.md](../../../../../docs/amministrazione/monitoraggio/README.md)
* [README.md](../../../../../docs/amministrazione/README.md)
* [README.md](../../../../../docs/amministrazione/deployment/README.md)
* [README.md](../../../../../docs/translations/README.md)
* [README.md](../../../../../docs/roadmap/README.md)
* [README.md](../../../../../docs/ide/cursor/README.md)
* [README.md](../../../../../docs/implementazione/api/README.md)
* [README.md](../../../../../docs/implementazione/README.md)
* [README.md](../../../../../docs/implementazione/testing/README.md)
* [README.md](../../../../../docs/implementazione/pazienti/README.md)
* [README.md](../../../../../docs/implementazione/ui/README.md)
* [README.md](../../../../../docs/implementazione/dental/README.md)
* [README.md](../../../../../docs/implementazione/core/README.md)
* [README.md](../../../../../docs/implementazione/reporting/README.md)
* [README.md](../../../../../docs/implementazione/isee/README.md)
* [README.md](../../../../../docs/it/README.md)
* [README.md](../../../../vendor/mockery/mockery/docs/README.md)
* [README.md](../README.md)
* [README.md](../../../Reporting/docs/README.md)
* [README.md](../../../Gdpr/docs/phpstan/README.md)
* [README.md](../../../Gdpr/docs/README.md)
* [README.md](../../../Notify/docs/phpstan/README.md)
* [README.md](../../../Notify/docs/README.md)
* [README.md](../../../Xot/docs/filament/README.md)
* [README.md](../../../Xot/docs/phpstan/README.md)
* [README.md](../../../Xot/docs/exceptions/README.md)
* [README.md](../../../Xot/docs/README.md)
* [README.md](../../../Xot/docs/standards/README.md)
* [README.md](../../../Xot/docs/conventions/README.md)
* [README.md](../../../Xot/docs/development/README.md)
* [README.md](../../../Dental/docs/README.md)
* [README.md](../../../User/docs/phpstan/README.md)
* [README.md](../../../User/docs/README.md)
* [README.md](../../../User/resources/views/docs/README.md)
* [README.md](../../../UI/docs/phpstan/README.md)
* [README.md](../../../UI/docs/README.md)
* [README.md](../../../UI/docs/standards/README.md)
* [README.md](../../../UI/docs/themes/README.md)
* [README.md](../../../UI/docs/components/README.md)
* [README.md](../../../Lang/docs/phpstan/README.md)
* [README.md](../../../Lang/docs/README.md)
* [README.md](../../../Job/docs/phpstan/README.md)
* [README.md](../../../Job/docs/README.md)
* [README.md](../../../Media/docs/phpstan/README.md)
* [README.md](../../../Media/docs/README.md)
* [README.md](../../../Tenant/docs/phpstan/README.md)
* [README.md](../../../Tenant/docs/README.md)
* [README.md](../../../Activity/docs/phpstan/README.md)
* [README.md](../../../Activity/docs/README.md)
* [README.md](../../../Patient/docs/README.md)
* [README.md](../../../Patient/docs/standards/README.md)
* [README.md](../../../Patient/docs/value-objects/README.md)
* [README.md](../../../Cms/docs/blocks/README.md)
* [README.md](../../../Cms/docs/README.md)
* [README.md](../../../Cms/docs/standards/README.md)
* [README.md](../../../Cms/docs/content/README.md)
* [README.md](../../../Cms/docs/frontoffice/README.md)
* [README.md](../../../Cms/docs/components/README.md)
* [README.md](../../../../Themes/Two/docs/README.md)
* [README.md](../../../../Themes/One/docs/README.md)

>>>>>>> d2e74a3 (.)
=======
>>>>>>> dacab4a (.)
