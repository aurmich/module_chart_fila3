# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Architecture Overview

This is a Laravel 12 modular monolith application using the nwidart/laravel-modules package. The system is built around a core "Xot" module that provides foundational functionality, with additional specialized modules for different domains.

### Key Modules
- **Xot**: Core foundation module with base classes, utilities, and shared functionality
- **TechPlanner**: Primary business module (currently enabled)
- **Employee**: HR and employee management
- **Notify**: Notification system with multiple channels (email, SMS, Telegram)
- **User**: Authentication and user management
- **Media**: File and media management
- **Lang**: Multi-language support and translations
- **UI**: Frontend components and theming system
- **Tenant**: Multi-tenancy support

### Technology Stack
- **PHP 8.2+** with Laravel 12
- **Filament PHP** for admin panels
- **Livewire 3** with Flux and Volt
- **Vite** for frontend asset building
- **Tailwind CSS 4** for styling
- **MySQL/PostgreSQL/SQLite** databases
- **Redis** for caching and queues

## Development Commands

### Application Commands
```bash
# Start development server with all services
composer dev

# Run tests
composer test
php artisan test

# Run PHPStan static analysis (level 9)
vendor/bin/phpstan analyse

# Run Laravel Pint for code formatting
vendor/bin/pint

# Clear caches
php artisan optimize:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear

# Build frontend assets
npm run dev
npm run build
```

### Module Management
```bash
# Enable/disable modules (edit modules_statuses.json)
php artisan module:list
php artisan module:enable ModuleName
php artisan module:disable ModuleName

# Work with specific modules
php artisan module:make ModuleName
php artisan module:make-controller ControllerName ModuleName
php artisan module:make-model ModelName ModuleName
```

### Database
```bash
# Run migrations
php artisan migrate

# Run seeders
php artisan db:seed

# Refresh database
php artisan migrate:fresh --seed
```

## Code Quality & Standards

### Static Analysis
- PHPStan level 9 configuration with Larastan
- Baseline file: `phpstan-baseline.neon`
- Custom rules and ignore patterns in `phpstan.neon`

### Code Formatting
- Laravel Pint for PHP code formatting
- ESLint and Prettier for JavaScript (in modules)

### Testing
- PHPUnit for unit and feature tests
- Pest PHP in some modules (Xot uses Pest)
- SQLite in-memory database for testing

## Module Structure

Each module follows this structure:
```
ModuleName/
├── app/
│   ├── Filament/           # Admin panel resources
│   ├── Models/             # Eloquent models
│   ├── Providers/          # Service providers
│   └── ...
├── database/
│   ├── factories/          # Model factories
│   ├── migrations/         # Database migrations
│   └── seeders/           # Data seeders
├── resources/
│   ├── views/             # Blade templates
│   └── lang/              # Translation files
├── routes/                # Web and API routes
├── tests/                 # Test suites
└── config/               # Module configuration
```

## Key Configuration Files

- `config/modules.php` - Module configuration and paths
- `modules_statuses.json` - Enabled/disabled modules
- `phpstan.neon` - PHPStan configuration
- `phpunit.xml` - PHPUnit test configuration
- `vite.config.js` - Vite build configuration

## Development Workflow

1. **Start development**: `composer dev` (runs server, queue, logs, and Vite)
2. **Run tests**: `composer test` or `php artisan test`
3. **Static analysis**: `vendor/bin/phpstan analyse`
4. **Code formatting**: `vendor/bin/pint`
5. **Frontend development**: `npm run dev`

## Important Notes

- The Xot module is the core foundation - many other modules depend on it
- Filament PHP is used extensively for admin interfaces
- Multi-tenancy is supported through the Tenant module
- Translations are managed through the Lang module
- All modules are composer packages that can be developed independently