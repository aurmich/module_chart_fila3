<<<<<<< HEAD
## Modifiche Recenti

### Uso di Spatie Queable Actions

Nel progetto Geo, abbiamo sostituito l'uso dei servizi con Spatie Queable Actions per una gestione più efficiente delle azioni asincrone. Questo approccio ci consente di eseguire azioni in coda, migliorando la scalabilità e la manutenibilità del codice.

#### Esempio di Implementazione

Abbiamo creato l'azione `GetCoordinatesAction` per gestire il recupero delle coordinate geografiche utilizzando l'API di Google Maps. Questa azione sostituisce il precedente servizio `GoogleMapsService`.

```php
use Modules\Geo\Actions\GetCoordinatesAction;

$action = new GetCoordinatesAction();
$coordinates = $action->execute('1600 Amphitheatre Parkway, Mountain View, CA');
```

Questa modifica è stata applicata anche in `UpdateCoordinatesAction`, dove ora utilizziamo `GetCoordinatesAction` per aggiornare le coordinate di un luogo. 
=======
# Project Documentation

## Overview
This is the main documentation for the Base TechPlanner Fila3 project.

## Project Structure
- Laravel-based architecture
- Modular design with multiple independent modules
- Uses modern PHP/Laravel tools and packages

## Key Features
- Geo module for location-based services
- Activity tracking system
- XOT core module for base functionality

## Development Setup
1. Clone repository
2. Install dependencies via Composer
3. Configure environment variables
4. Run migrations and seeders

## Deployment
- Automated deployment scripts available
- CI/CD pipeline integration

## Maintenance
- Regular updates through Composer
- Automated testing via PHPUnit
- Code quality checks with PHPStan
>>>>>>> 5e5f2e85b (first)
