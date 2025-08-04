<<<<<<< HEAD
=======
<<<<<<< HEAD
# Gestione Asset nel Modulo Chart

## Panoramica

Questo documento descrive la gestione degli asset (JavaScript, CSS, ecc.) nel modulo Chart.

## Collegamenti
- [Documentazione Principale](../../../docs/modules.md)
- [Configurazione Vite](../../../docs/vite.md)
- [Configurazione Laravel Mix](../../../docs/laravel-mix.md)

## Struttura Asset

```
Chart/
├── resources/
│   ├── assets/
│   │   ├── js/
│   │   │   ├── app.js
│   │   │   └── filament-chart-js-plugins.js
│   │   └── sass/
│   │       └── app.scss
│   └── dist/
│       └── .vite/
│           └── manifest.json
└── webpack.mix.js
```

## Configurazione Build

### Laravel Mix
Il modulo utilizza Laravel Mix per la compilazione degli asset:

```javascript
// webpack.mix.js
mix.setPublicPath('../../public').mergeManifest();
mix.js(__dirname + '/resources/assets/js/app.js', 'js/chart.js')
   .sass(__dirname + '/resources/assets/sass/app.scss', 'css/chart.css');
```

### Vite
Il modulo supporta anche Vite per lo sviluppo:

```json
// manifest.json
{
  "resources/css/app.css": {
    "file": "assets/app-l0sNRNKZ.js",
    "name": "app",
    "src": "resources/css/app.css",
    "isEntry": true
  },
  "resources/js/app.js": {
    "file": "assets/app-DP2rzg_V.js",
    "name": "app",
    "src": "resources/js/app.js",
    "isEntry": true
  }
}
```

## Best Practices

### Organizzazione File
1. Mantenere gli asset sorgente in `resources/assets/`
2. Utilizzare sottocartelle per tipo di asset (js, sass, etc.)
3. Seguire la convenzione di naming del progetto

### Build Process
1. Eseguire `npm run dev` durante lo sviluppo
2. Usare `npm run build` per la produzione
3. Verificare il manifest.json dopo ogni build

### Versioning
1. Gli asset vengono versionati automaticamente in produzione
2. Il manifest.json tiene traccia delle versioni
3. Utilizzare i mix() helper per il caricamento

## Risoluzione Problemi

### Conflitti di Build
1. Pulire la cache: `npm run clean`
2. Rimuovere node_modules: `rm -rf node_modules`
3. Reinstallare dipendenze: `npm install`

### Errori di Compilazione
1. Verificare i percorsi nel webpack.mix.js
2. Controllare le dipendenze nel package.json
3. Assicurarsi che i file sorgente esistano
=======
>>>>>>> aurmich/dev
# Gestione degli Asset nel Progetto

## Struttura degli Asset

### Directory Principali
```
public_html/
├── css/
│   ├── filament/
│   └── dotswan/
├── js/
│   ├── filament/
│   └── dotswan/
└── vendor/
```

## Pubblicazione degli Asset

### Comandi Principali
```bash
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
# 1. Pulizia Cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# 2. Pubblicazione Asset Filament
php artisan filament:assets

# 3. Ottimizzazione
php artisan optimize
```

### Asset per Modulo
Ogni modulo può avere i propri asset che devono essere pubblicati separatamente:

```php
// ModuleNameServiceProvider.php
public function boot(): void
{
    parent::boot();
    
    $this->publishes([
        __DIR__.'/../resources/dist' => public_path('vendor/module-name'),
    ], 'module-name-assets');
}
```

## Errori Comuni e Soluzioni

### 1. Timeout durante la Pubblicazione
```bash
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
# Soluzione 1: Aumentare il timeout
php artisan vendor:publish --tag=package-assets --timeout=3600

# Soluzione 2: Pubblicare singolarmente
php artisan filament:assets
php artisan vendor:publish --tag=module-name-assets
```

### 2. Asset non Trovati
```bash
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
# Verifica dei percorsi
ls -la public_html/vendor
ls -la public_html/css/filament
ls -la public_html/js/filament

# Ripubblicazione mirata
php artisan vendor:publish --tag=filament-assets --force
```

### 3. Permessi Errati
```bash
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
# Correzione permessi
chmod -R 775 public_html/vendor
chown -R www-data:www-data public_html/vendor
```

## Best Practices

### 1. Gestione delle Dipendenze
```json
// composer.json
{
    "scripts": {
        "post-update-cmd": [
            "@php artisan filament:assets",
            "@php artisan optimize"
        ]
    }
}
```

### 2. Versionamento degli Asset
```php
// config/app.php
'asset_version' => env('ASSET_VERSION', '1.0.0'),

// In blade
<link href="{{ asset('css/app.css') }}?v={{ config('app.asset_version') }}" rel="stylesheet">
```

### 3. Ottimizzazione
```bash
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
# Compressione degli asset
npm run production

# Cache delle viste
php artisan view:cache

# Cache delle route
php artisan route:cache
```

## Troubleshooting

### Checklist di Verifica
1. Asset pubblicati correttamente?
   ```bash
   ls -la public_html/vendor
   ls -la public_html/css/filament
   ```

2. Permessi corretti?
   ```bash
   stat public_html/vendor
   stat public_html/css/filament
   ```

3. Cache pulita?
   ```bash
   php artisan cache:clear
   php artisan view:clear
   ```

### Risoluzione Problemi
1. Se gli asset non vengono caricati:
   - Verificare il percorso nel browser (F12)
   - Controllare i log di Laravel
   - Verificare i permessi dei file

2. Se la pubblicazione fallisce:
   - Aumentare il timeout
   - Pubblicare un pacchetto alla volta
   - Verificare lo spazio su disco
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev

## Manutenzione

### Aggiornamenti
<<<<<<< HEAD
```bash

=======
<<<<<<< HEAD
1. Mantenere aggiornate le dipendenze npm
2. Verificare la compatibilità con Laravel Mix
3. Testare dopo ogni aggiornamento

### Monitoraggio
1. Controllare le dimensioni degli asset
2. Verificare i tempi di build
3. Monitorare l'utilizzo delle risorse

## Vedi Anche
- [Documentazione Chart.js](https://www.chartjs.org/docs/)
- [Documentazione Filament](https://filamentphp.com/docs)
- [Guida Asset Laravel](https://laravel.com/docs/asset-compilation) 
=======
```bash
>>>>>>> aurmich/dev
# 1. Backup degli asset
cp -r public_html/vendor public_html/vendor_backup

# 2. Aggiornamento dei pacchetti
composer update

# 3. Ripubblicazione degli asset
php artisan filament:assets
```

### Pulizia
```bash
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
# Rimozione asset non utilizzati
php artisan vendor:cleanup

# Pulizia cache
php artisan cache:clear
php artisan view:clear
```

## Note Importanti
- Mantenere un elenco degli asset necessari per ogni modulo
- Documentare i tag di pubblicazione utilizzati
- Verificare sempre dopo la pubblicazione
- Usare percorsi relativi nei file di configurazione
- Mantenere un backup degli asset prima degli aggiornamenti
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
