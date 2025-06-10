<<<<<<< HEAD
=======
# PHPStan Level 1 - Modulo Chart

## Configurazione Base
```bash
cd /var/www/html/_bases/base_predict_platform/laravel
./vendor/bin/phpstan analyse Modules/Chart --level=1
```

## Errori Comuni Level 1

### 1. Chiamate a Metodi Inesistenti
```php
// Errore: Call to undefined method
$chart->nonExistentMethod();

// Correzione: Verificare che il metodo esista
if (method_exists($chart, 'getData')) {
    $chart->getData();
}
```

### 2. Accesso a Proprietà Inesistenti
```php
// Errore: Access to undefined property
echo $chart->undefinedProperty;

// Correzione: Verificare che la proprietà esista
if (property_exists($chart, 'data')) {
    echo $chart->data;
}
```

## Comandi Utili
```bash
# Analisi con baseline
./vendor/bin/phpstan analyse Modules/Chart --level=1 --generate-baseline

# Analisi specifica
./vendor/bin/phpstan analyse Modules/Chart/app/Models --level=1
```

# Rapporto PHPStan Livello 1 per il modulo Chart

Data analisi: 2025-04-15 21:44:57

## Riepilogo

Trovati 16 errori al livello 1.

## Errori e suggerimenti

### File: `/var/www/html/saluteora/laravel/Modules/Chart/app/Actions/JpGraph/V1/LineSubQuestionAction.php`

#### Linea 60: Constant MARK_FILLEDCIRCLE not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 62: Constant MARK_UTRIANGLE not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 63: Constant MARK_SQUARE not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 64: Constant MARK_DTRIANGLE not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 65: Constant MARK_DIAMOND not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 66: Constant MARK_CIRCLE not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 68: Constant MARK_CROSS not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 69: Constant MARK_STAR not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 70: Constant MARK_X not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 71: Constant MARK_LEFTTRIANGLE not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 72: Constant MARK_RIGHTTRIANGLE not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 73: Constant MARK_FLASH not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

### File: `/var/www/html/saluteora/laravel/Modules/Chart/app/Actions/JpGraph/V1/Pie1Action.php`

#### Linea 86: Constant FF_ARIAL not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 86: Constant FS_BOLD not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 91: Constant FF_ARIAL not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 91: Constant FS_NORMAL not found.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

## Risorse utili

- [Documentazione PHPStan](https://phpstan.org/user-guide/getting-started)
- [Tipi in PHP](https://www.php.net/manual/en/language.types.declarations.php)
- [PSR-12: Standard di codifica](https://www.php-fig.org/psr/psr-12/)

## Collegamenti tra versioni di level_1.md
* [level_1.md](laravel/Modules/Chart/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Reporting/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Gdpr/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Notify/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Xot/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Dental/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/User/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/UI/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Lang/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Job/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Media/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Tenant/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Activity/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Patient/docs/phpstan/level_1.md)
* [level_1.md](laravel/Modules/Cms/docs/phpstan/level_1.md)

>>>>>>> 2eb627a (♻️ (CreateChart.php): refactor CreateChart class to extend XotBaseCreateRecord for better functionality)
