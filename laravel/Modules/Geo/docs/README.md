<<<<<<< HEAD
# Modulo Geo - Documentazione

Il modulo Geo gestisce tutte le funzionalità geografiche dell'applicazione, inclusi modelli Address, integrazioni con API esterne e componenti Filament per la gestione dei dati geografici.

## Panoramica

Il modulo Geo fornisce:
- Modelli per indirizzi e dati geografici
- Integrazione con API Google Maps e Mapbox
- Componenti Filament per form e widget di mappe
- Database JSON per comuni italiani
- Factory per generazione dati di test

## Struttura della Documentazione

### Core Features
- [Implementazione Indirizzo](address-implementation.md) - Guida completa al modello Address
- [Modello Comune](comune-model.md) - Gestione comuni italiani
- [JSON Database](json-database.md) - Sistema database JSON per dati geografici
- [Migration Guide](migration-guide.md) - Guida migrazione database

### API Integration
- [Google Maps](here.md) - Integrazione Google Maps API
- [Mapbox](mapbox.md) - Integrazione Mapbox API
- [Here.com](here_com.md) - Integrazione Here API

### Filament Integration
- [Filament Integration](filament-integration.md) - Componenti Filament per modulo Geo
- [Location Select](location-select.md) - Component di selezione location
- [Address Field](address-field.md) - Campo indirizzo per form

### Sushi Models
- [Sushi Implementation](sushi-implementation.md) - Modelli Sushi per dati statici
- [Sushi Configuration](sushi-configuration.md) - Configurazione modelli Sushi
- [Laravel Sushi Guide](laravel-sushi-guide.md) - Guida completa Laravel Sushi

### Data Management
- [GeoJSON Model](geo-json-model.md) - Gestione dati GeoJSON
- [Consolidamento Modelli](consolidamento-modelli-geografici.md) - Unificazione modelli geografici
- [Naming Conventions](naming-conventions.md) - Convenzioni naming

### Architecture
- [Architecture Overview](architecture.md) - Panoramica architettura modulo
- [Model Inheritance](model-inheritance-pattern.md) - Pattern ereditarietà modelli
- [Service Pattern](services/README.md) - Pattern services per API integration

### Development
- [Enums Implementation](enums-implementation.md) - Enumerazioni modulo Geo
- [Factory Usage](address-factory.md) - Utilizzo factory per test data
- [Seeders](database-seeders.md) - Seeders per popolamento database

## ✅ PHPStan Quality Assurance

### Gennaio 2025 - PHPStan Level 9 Compliance

Il modulo Geo ha raggiunto la **compliance PHPStan livello 9** sui file core:

#### 🎯 File Certificati PHPStan Level 9
- ✅ `app/Services/BaseGeoService.php` - API response type safety
- ✅ `app/Services/GeoDataService.php` - Collection template types resolution
- ✅ `database/factories/AddressFactory.php` - Union type compatibility
- ✅ `database/seeders/SushiSeeder.php` - Mixed array access safety

#### 📊 Metriche di Qualità
- **Type Safety**: 100% sui file core
- **Runtime Safety**: 100% con error handling robusto
- **Template Types**: Risolti tutti i problemi di Collection generics
- **API Integration**: Validazione completa response types

#### 📚 Documentazione PHPStan
- [PHPStan Fixes Gennaio 2025](phpstan/phpstan-fixes-gennaio-2025.md) - **⭐ NUOVO** - Log completo correzioni
- [PHPStan Best Practices](phpstan/best-practices.md) - Best practices per type safety
- [Collection Types Guide](phpstan/collection-types.md) - Gestione template types Collection

#### 🧪 Test di Verifica
```bash

# Test file core PHPStan level 9
cd laravel
./vendor/bin/phpstan analyze Modules/Geo/app/Services/BaseGeoService.php \
                             Modules/Geo/app/Services/GeoDataService.php \
                             Modules/Geo/database/factories/AddressFactory.php \
                             Modules/Geo/database/seeders/SushiSeeder.php \
                             --level=9 --no-progress

# Risultato: [OK] No errors ✅
```

### Future Work PHPStan
Il modulo contiene **176 errori aggiuntivi** in altri file che rappresentano opportunità per future fasi di miglioramento:
- **Phase 2**: Google Maps/Mapbox API integrations (47 errori)
- **Phase 3**: Filament UI components (32 errori)  
- **Phase 4**: Models relationships (85 errori)
- **Phase 5**: Console commands e widgets (12 errori)

## Installation & Setup

```bash

# Abilitare il modulo
php artisan module:enable Geo

# Eseguire le migrazioni
php artisan migrate

# Pubblicare le configurazioni
php artisan vendor:publish --tag=geo-config

# Popolare database comuni (opzionale)
php artisan geo:sushi
```

## Configuration

Il modulo può essere configurato tramite file `config/geo.php`:

```php
return [
    'api_keys' => [
        'google_maps' => env('GOOGLE_MAPS_API_KEY'),
        'mapbox' => env('MAPBOX_API_KEY'),
        'here' => env('HERE_API_KEY'),
    ],
    
    'cache' => [
        'enabled' => true,
        'ttl' => 86400, // 24 ore
        'prefix' => 'geo_',
    ],
    
    'rate_limits' => [
        'google_maps' => ['requests_per_second' => 50],
        'mapbox' => ['requests_per_second' => 100],
    ],
];
```

## Testing

```bash

# Test del modulo
php artisan test --testsuite=Geo

# Test PHPStan compliance
./vendor/bin/phpstan analyze Modules/Geo --level=9

# Test factory
php artisan tinker
>>> Modules\Geo\Models\Address::factory(10)->create()
```

## API Usage Examples

### Address Management
```php
use Modules\Geo\Models\Address;

// Creare un indirizzo
$address = Address::create([
    'route' => 'Via Roma',
    'street_number' => '123',
    'locality' => 'Milano',
    'postal_code' => '20100',
    'latitude' => 45.4642,
    'longitude' => 9.1900,
]);

// Trovare indirizzi nelle vicinanze
$nearby = Address::nearby($address->latitude, $address->longitude, 5); // 5km radius
```

### GeoData Service
```php
use Modules\Geo\Services\GeoDataService;

$geoService = new GeoDataService();

// Ottenere tutte le regioni
$regions = $geoService->getRegions();

// Ottenere province di una regione
$provinces = $geoService->getProvinces('lombardia');

// Ottenere città di una provincia
$cities = $geoService->getCities('milano');

// Ottenere CAP di una città
$cap = $geoService->getCap('milano', 'milano');
```

### Google Maps Integration
```php
use Modules\Geo\Actions\GoogleMaps\GetAddressFromGoogleMapsAction;

$action = new GetAddressFromGoogleMapsAction();
$address = $action->execute('Via Roma 123, Milano');
```

## Contributing

Per contribuire al modulo:

1. Seguire le [Development Rules](development-rules.md)
2. Assicurarsi che nuovi file passino PHPStan level 9
3. Aggiungere test appropriati
4. Aggiornare la documentazione
5. Seguire le convenzioni di naming esistenti

## Best Practices

1. **Type Safety**: Sempre tipizzare parametri e return types
2. **API Integration**: Validare sempre response da API esterne
3. **Collection Usage**: Preferire `new Collection()` vs `collect()` per PHPStan
4. **Error Handling**: Implementare gestione errori robusta
5. **Caching**: Utilizzare cache per API calls costose
6. **Testing**: Scrivere test per nuove funzionalità

## Troubleshooting

### Problemi Comuni

**PHPStan Template Types**: Se hai problemi con template types Collection, consulta [PHPStan Collection Types Guide](phpstan/phpstan-fixes-gennaio-2025.md#2-geodataservice---collection-template-types-resolution-).

**API Rate Limits**: Configurare correttamente i rate limits nel file config.

**Database Performance**: Utilizzare indici appropriati per query geografiche.

## Support & Maintainers

- **Maintainer**: Team Laraxot
- **PHPStan Compliance**: Gennaio 2025
- **Documentation**: Aggiornata costantemente
- **Issue Tracking**: GitHub Issues

---

*Ultimo aggiornamento: Gennaio 2025*  
*PHPStan Level 9 Compliance: File core certificati ✅*
=======
# Modulo Geo

## Descrizione
Il modulo Geo gestisce i dati geografici italiani (regioni, province, città e CAP) utilizzando un file JSON come fonte dati principale. Questo approccio offre vantaggi significativi in termini di performance e manutenibilità rispetto all'utilizzo di un database tradizionale.

## Architettura

### 1. Fonte Dati
- File JSON: `resources/json/comuni.json`
- Struttura gerarchica: Regioni > Province > Città > CAP
- Validazione automatica della struttura e integrità dei dati

### 2. Componenti Principali

#### Servizi
- `GeoDataService`: Gestisce l'accesso ai dati geografici
- `GeoDataValidator`: Valida la struttura e l'integrità dei dati

#### Form e Widget
- `LocationForm`: Form Filament per la selezione della località
- `LocationWidget`: Widget Filament che utilizza il form

### 3. Cache
- Cache a livello di servizio per ottimizzare le performance
- Chiavi di cache separate per regioni, province, città e CAP
- TTL di 24 ore per tutti i dati in cache

## Utilizzo

### 1. Selezione Località
```php
use Modules\Geo\App\Filament\Forms\LocationForm;

class MyForm extends XotBaseForm
{
    public function getSchema(): array
    {
        return [
            ...LocationForm::getSchema(),
            // Altri campi del form
        ];
    }
}
```

### 2. Widget
```php
use Modules\Geo\App\Filament\Widgets\LocationWidget;

class MyPage extends XotBasePage
{
    protected function getHeaderWidgets(): array
    {
        return [
            LocationWidget::class,
        ];
    }
}
```

### 3. Eventi
Il widget emette l'evento `location-selected` quando viene selezionata una località:
```php
$this->dispatch('location-selected', [
    'region' => 'LO',
    'province' => 'MI',
    'city' => 'F205',
    'cap' => '20100'
]);
```

## Best Practices

### 1. Performance
- Utilizzare sempre il servizio `GeoDataService` per accedere ai dati
- Non accedere direttamente al file JSON
- Lasciare che il servizio gestisca la cache

### 2. Validazione
- Utilizzare `GeoDataValidator` per validare i dati
- Verificare l'integrità dei dati prima di utilizzarli
- Gestire gli errori di validazione

### 3. UI/UX
- Utilizzare sempre i componenti Filament forniti
- Non creare form personalizzati per la selezione della località
- Seguire le traduzioni fornite

## Manutenzione

### 1. Aggiornamento Dati
1. Modificare il file JSON
2. Eseguire la validazione
3. Pulire la cache

### 2. Cache
```php
$geoService = app(GeoDataService::class);
$geoService->clearCache();
```

### 3. Traduzioni
- Aggiungere nuove traduzioni in `lang/it/`
- Mantenere la struttura esistente
- Documentare le modifiche

## Collegamenti
- [Documentazione JSON Database](json-database.md)
- [Documentazione Squire](squire-integration.md)
- [Best Practices Filament](../../../docs/filament-best-practices.md)
- [Clean Code](../../../docs/clean-code.md) 
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
