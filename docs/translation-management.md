<<<<<<< HEAD
# Gestione Traduzioni - Regole Critiche

## ⚠️ REGOLA CRITICA: MAI USARE ->label() ⚠️

**MAI, MAI, MAI** usare `->label()` nei componenti Filament. Le traduzioni sono gestite automaticamente dal LangServiceProvider.

### ❌ ERRATO - MAI FARE QUESTO
```php
TextInput::make('name')->label('Nome')  // ❌ ERRORE CRITICO
Select::make('status')->label('Stato')  // ❌ ERRORE CRITICO
Action::make('save')->label('Salva')    // ❌ ERRORE CRITICO
```

### ✅ CORRETTO - SEMPRE FARE QUESTO
```php
TextInput::make('name')  // ✅ CORRETTO - Traduzione automatica
Select::make('status')   // ✅ CORRETTO - Traduzione automatica
Action::make('save')     // ✅ CORRETTO - Traduzione automatica
```

## Motivazione

1. **Centralizzazione**: Le traduzioni sono gestite dai file di lingua
2. **Consistenza**: Tutte le traduzioni seguono lo stesso pattern
3. **Manutenibilità**: Cambiare traduzioni senza toccare il codice
4. **Override**: Permette override delle traduzioni per temi/moduli
5. **Type Safety**: Evita errori di digitazione nelle stringhe

## Struttura File di Traduzione

### Posizionamento
- **Moduli**: `Modules/{ModuleName}/lang/{locale}/`
- **Temi**: `Themes/{ThemeName}/lang/{locale}/`
- **Root**: `lang/{locale}/`

### Struttura Espansa Obbligatoria
```php
// Modules/ModuleName/lang/it/fields.php
return [
    'name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci il nome',
        'help' => 'Nome completo dell\'utente',
    ],
    'email' => [
        'label' => 'Email',
        'placeholder' => 'Inserisci l\'email',
        'help' => 'Indirizzo email valido',
=======
# Gestione delle Traduzioni in SaluteOra

## Panoramica

Questo documento descrive il sistema di gestione delle traduzioni in SaluteOra, con particolare attenzione all'implementazione delle traduzioni nei form Filament e nelle viste frontend.

## Principi Fondamentali

1. **Centralizzazione**: Tutte le traduzioni sono centralizzate nei file di lingua
2. **Namespace**: Ogni modulo ha il proprio namespace di traduzione
3. **No Label Method**: Non utilizzare mai il metodo `->label()` nei componenti Filament
4. **Struttura Gerarchica**: Le traduzioni seguono una struttura gerarchica per facilitare la manutenzione

## Struttura dei File di Traduzione

Ogni modulo ha la propria directory `lang` con sottodirectory per ciascuna lingua supportata:

```
/Modules
  /Patient
    /lang
      /it
        doctor-resource.php
        patient-resource.php
      /en
        doctor-resource.php
        patient-resource.php
```

## Formato dei File di Traduzione

I file di traduzione utilizzano una struttura gerarchica:

```php
// doctor-resource.php
return [
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Il nome del dottore',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'help' => 'Il cognome del dottore',
        ],
        'certifications' => [
            'label' => 'Certificazioni',
            'placeholder' => 'Carica le tue certificazioni',
            'help' => 'Carica i documenti che certificano la tua professionalità',
        ],
    ],
    'moderation' => [
        'pending' => 'In attesa di moderazione',
        'approved' => 'Approvato',
        'rejected' => 'Rifiutato',
        'approve' => 'Approva',
        'reject' => 'Rifiuta',
>>>>>>> aurmich/dev
    ],
];
```

<<<<<<< HEAD
## Regole Fondamentali

### 1. Mai Stringhe Hardcoded
- **VIETATO**: `->label('testo')`
- **VIETATO**: `->placeholder('testo')`
- **VIETATO**: `->helperText('testo')`
- **OBBLIGATORIO**: Usare solo `->make('campo')`

### 2. Struttura Espansa
- **SEMPRE** struttura espansa per tutti i campi
- **SEMPRE** `label`, `placeholder`, `help` per ogni campo
- **SEMPRE** `declare(strict_types=1);` nei file di traduzione

### 3. Sincronizzazione Lingue
- **SEMPRE** sincronizzare tra IT/EN/DE
- **SEMPRE** stessa struttura in tutte le lingue
- **SEMPRE** chiavi in inglese, valori nella lingua target

## Controllo Automatico

Prima di ogni commit, verificare:
- [ ] Nessun `->label()` nei componenti
- [ ] Nessun `->placeholder()` hardcoded
- [ ] Tutte le stringhe nei file di traduzione
- [ ] Struttura espansa per tutti i campi
- [ ] Sincronizzazione tra lingue

## Penalità per Violazioni

- ❌ Codice non conforme
- ❌ Difficoltà di manutenzione
- ❌ Inconsistenza nelle traduzioni
- ❌ Impossibilità di override
- ❌ Errori di type safety

## Collegamenti

- [Regole Traduzioni](../../laravel/Modules/Xot/docs/translation-standards.md)
- [Best Practices Filament](filament-widget-best-practices.md)
- [Enum Standards](enum_standards.md)

## Ultimo Aggiornamento
2025-01-27 - Regola critica per evitare ->label()
=======
## Utilizzo nei Form Filament

### Approccio Corretto

```php
// ✅ CORRETTO: Non utilizzare ->label()
Forms\Components\TextInput::make('first_name')
    ->required()
    ->placeholder(__('patient::doctor-resource.fields.first_name.placeholder'))
```

### Approccio Scorretto

```php
// ❌ ERRATO: Utilizzare ->label()
Forms\Components\TextInput::make('first_name')
    ->required()
    ->label('Nome')
    ->placeholder('Inserisci il nome')
```

## Utilizzo negli Enum

Per gli enum come `DayOfWeek`, le traduzioni sono gestite tramite file di traduzione dedicati:

```php
// xot::enums.day_of_week.php
return [
    '1' => 'Lunedì',
    '2' => 'Martedì',
    '3' => 'Mercoledì',
    // ...
];

// Utilizzo nell'enum
public function getDayLabelAttribute(): string
{
    return __("xot::enums.day_of_week.{$this->day->value}");
}
```

## Gestione delle Traduzioni nei Campi del Database

È importante che i nomi dei campi nei form corrispondano ai campi disponibili nel database. Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).

## Best Practices

1. **Utilizzare Namespace Corretti**: Assicurarsi di utilizzare il namespace corretto per ciascun modulo
2. **Struttura Gerarchica**: Organizzare le traduzioni in una struttura gerarchica
3. **Evitare Hardcoding**: Non inserire mai stringhe hardcoded nel codice
4. **Traduzioni Complete**: Assicurarsi che tutte le stringhe siano tradotte in tutte le lingue supportate

## Documentazione Correlata

- [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md)
- [Gestione dei File Upload in Filament](/docs/filament-file-uploads.md)
- [Linee Guida per le Risorse Filament](/docs/filament-resources-guidelines.md)
- [Gestione degli Utenti](/docs/user-management.md)
- [Migrazioni del Database](/docs/database-migrations.md)
>>>>>>> aurmich/dev
