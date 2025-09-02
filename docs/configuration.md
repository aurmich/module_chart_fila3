<<<<<<< HEAD
# Configurazione del Progetto

## Prerequisiti
- Laravel 12.x
- PHP 8.2+
- Composer 2.x

## Introduzione
Questo documento fornisce una panoramica delle configurazioni del progetto, con particolare attenzione alla gestione dei domini e delle risorse.

## Indice

### Configurazione Dominio
- [Configurazione Basata sul Dominio](../laravel/Modules/Xot/docs/DOMAIN_CONFIGURATION.md)
  - Meccanismo di risoluzione del dominio
  - Struttura delle configurazioni
  - Gestione dei loghi
  - Best practices

### Configurazioni Specifiche per Modulo
- [Configurazione Xot](../laravel/Modules/Xot/docs/CONFIGURATION.md)
- [Configurazione UI](../laravel/Modules/UI/docs/configuration.md)
- [Configurazione Moduli](../laravel/Modules/Xot/docs/MODULE_CONFIGURATION.md)

### Asset e Risorse
- [Gestione Asset](../laravel/Modules/Xot/docs/assets.md)
- [Gestione Temi](../laravel/Modules/Xot/docs/themes.md)
- [Gestione Media](../laravel/Modules/Media/docs/README.md)

## Struttura delle Configurazioni

### 1. Configurazione per Dominio
```
laravel/config/
└── [dominio]/
    └── [sottodominio]/
        ├── metatag.php      # Configurazioni metatag e loghi
        └── config.php       # Configurazioni specifiche
```

### 2. Configurazione dei Moduli
```
laravel/Modules/
└── [NomeModulo]/
    ├── config/
    │   └── config.php       # Configurazione modulo
    └── resources/
        └── images/          # Risorse del modulo
            └── logo.svg
```

## Best Practices
1. Seguire la struttura di configurazione definita nel [modulo Xot](../laravel/Modules/Xot/docs/DOMAIN_CONFIGURATION.md)
2. Mantenere le configurazioni specifiche nei rispettivi moduli
3. Utilizzare i percorsi relativi per le risorse
4. Documentare ogni modifica alle configurazioni
5. Mantenere la compatibilità con Laravel 12.x e PHP 8.2+

## Gestione Multi-dominio
- Ogni dominio ha la propria configurazione in `config/[dominio]/`
- I moduli sono riutilizzabili tra diversi domini
- Le configurazioni specifiche per dominio sovrascrivono quelle dei moduli

## Collegamenti Utili
- [Documentazione Sviluppo](development.md)
- [Guida all'Installazione](installation.md)
- [Troubleshooting](troubleshooting.md) 
## Collegamenti tra versioni di configuration.md
* [configuration.md](docs/configuration.md)
* [configuration.md](laravel/Modules/Xot/docs/configuration.md)
* [configuration.md](laravel/Modules/Cms/docs/configuration.md)

=======
# Configurazione

## Panoramica

Il tema One può essere configurato attraverso vari file di configurazione. Questa documentazione descrive le opzioni disponibili e come configurarle.

## File di Configurazione

### 1. `config/theme.php`

```php
<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Nome del Tema
    |--------------------------------------------------------------------------
    |
    | Il nome del tema utilizzato nell'applicazione.
    |
    */
    'name' => 'One',

    /*
    |--------------------------------------------------------------------------
    | Versione del Tema
    |--------------------------------------------------------------------------
    |
    | La versione del tema utilizzata nell'applicazione.
    |
    */
    'version' => '1.0.0',

    /*
    |--------------------------------------------------------------------------
    | Provider del Tema
    |--------------------------------------------------------------------------
    |
    | Il provider del tema utilizzato nell'applicazione.
    |
    */
    'provider' => \Laraxot\ThemeOne\ThemeOneServiceProvider::class,

    /*
    |--------------------------------------------------------------------------
    | Asset del Tema
    |--------------------------------------------------------------------------
    |
    | Gli asset del tema utilizzati nell'applicazione.
    |
    */
    'assets' => [
        'css' => [
            'resources/css/app.css',
        ],
        'js' => [
            'resources/js/app.js',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Viste del Tema
    |--------------------------------------------------------------------------
    |
    | Le viste del tema utilizzate nell'applicazione.
    |
    */
    'views' => [
        'path' => 'resources/views',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Componenti del Tema
    |--------------------------------------------------------------------------
    |
    | I componenti del tema utilizzati nell'applicazione.
    |
    */
    'components' => [
        'path' => 'resources/views/components',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Layout del Tema
    |--------------------------------------------------------------------------
    |
    | Il layout del tema utilizzato nell'applicazione.
    |
    */
    'layout' => [
        'path' => 'resources/views/layouts',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocchi del Tema
    |--------------------------------------------------------------------------
    |
    | I blocchi del tema utilizzati nell'applicazione.
    |
    */
    'blocks' => [
        'path' => 'resources/views/blocks',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagine del Tema
    |--------------------------------------------------------------------------
    |
    | Le pagine del tema utilizzate nell'applicazione.
    |
    */
    'pages' => [
        'path' => 'resources/views/pages',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentazione del Tema
    |--------------------------------------------------------------------------
    |
    | La documentazione del tema utilizzata nell'applicazione.
    |
    */
    'docs' => [
        'path' => 'docs',
        'namespace' => 'theme',
    ],
];
```

### 2. `config/filament.php`

```php
<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configurazione Filament
    |--------------------------------------------------------------------------
    |
    | Configurazione di Filament per l'admin panel.
    |
    */
    'theme' => [
        'name' => 'One',
        'version' => '1.0.0',
        'provider' => \Laraxot\ThemeOne\ThemeOneServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Filament
    |--------------------------------------------------------------------------
    |
    | Asset di Filament per l'admin panel.
    |
    */
    'assets' => [
        'css' => [
            'resources/css/filament.css',
        ],
        'js' => [
            'resources/js/filament.js',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Viste Filament
    |--------------------------------------------------------------------------
    |
    | Viste di Filament per l'admin panel.
    |
    */
    'views' => [
        'path' => 'resources/views/filament',
        'namespace' => 'filament',
    ],

    /*
    |--------------------------------------------------------------------------
    | Componenti Filament
    |--------------------------------------------------------------------------
    |
    | Componenti di Filament per l'admin panel.
    |
    */
    'components' => [
        'path' => 'resources/views/components/filament',
        'namespace' => 'filament',
    ],

    /*
    |--------------------------------------------------------------------------
    | Layout Filament
    |--------------------------------------------------------------------------
    |
    | Layout di Filament per l'admin panel.
    |
    */
    'layout' => [
        'path' => 'resources/views/layouts/filament',
        'namespace' => 'filament',
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocchi Filament
    |--------------------------------------------------------------------------
    |
    | Blocchi di Filament per l'admin panel.
    |
    */
    'blocks' => [
        'path' => 'resources/views/blocks/filament',
        'namespace' => 'filament',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagine Filament
    |--------------------------------------------------------------------------
    |
    | Pagine di Filament per l'admin panel.
    |
    */
    'pages' => [
        'path' => 'resources/views/pages/filament',
        'namespace' => 'filament',
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentazione Filament
    |--------------------------------------------------------------------------
    |
    | Documentazione di Filament per l'admin panel.
    |
    */
    'docs' => [
        'path' => 'docs/filament',
        'namespace' => 'filament',
    ],
];
```

### 3. `config/vite.php`

```php
<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configurazione Vite
    |--------------------------------------------------------------------------
    |
    | Configurazione di Vite per il frontend.
    |
    */
    'theme' => [
        'name' => 'One',
        'version' => '1.0.0',
        'provider' => \Laraxot\ThemeOne\ThemeOneServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Vite
    |--------------------------------------------------------------------------
    |
    | Asset di Vite per il frontend.
    |
    */
    'assets' => [
        'css' => [
            'resources/css/app.css',
        ],
        'js' => [
            'resources/js/app.js',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Viste Vite
    |--------------------------------------------------------------------------
    |
    | Viste di Vite per il frontend.
    |
    */
    'views' => [
        'path' => 'resources/views',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Componenti Vite
    |--------------------------------------------------------------------------
    |
    | Componenti di Vite per il frontend.
    |
    */
    'components' => [
        'path' => 'resources/views/components',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Layout Vite
    |--------------------------------------------------------------------------
    |
    | Layout di Vite per il frontend.
    |
    */
    'layout' => [
        'path' => 'resources/views/layouts',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocchi Vite
    |--------------------------------------------------------------------------
    |
    | Blocchi di Vite per il frontend.
    |
    */
    'blocks' => [
        'path' => 'resources/views/blocks',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagine Vite
    |--------------------------------------------------------------------------
    |
    | Pagine di Vite per il frontend.
    |
    */
    'pages' => [
        'path' => 'resources/views/pages',
        'namespace' => 'theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentazione Vite
    |--------------------------------------------------------------------------
    |
    | Documentazione di Vite per il frontend.
    |
    */
    'docs' => [
        'path' => 'docs/vite',
        'namespace' => 'vite',
    ],
];
```

## Opzioni di Configurazione

### 1. Tema

- `name`: Nome del tema
- `version`: Versione del tema
- `provider`: Provider del tema
- `assets`: Asset del tema
- `views`: Viste del tema
- `components`: Componenti del tema
- `layout`: Layout del tema
- `blocks`: Blocchi del tema
- `pages`: Pagine del tema
- `docs`: Documentazione del tema

### 2. Filament

- `theme`: Configurazione del tema
- `assets`: Asset di Filament
- `views`: Viste di Filament
- `components`: Componenti di Filament
- `layout`: Layout di Filament
- `blocks`: Blocchi di Filament
- `pages`: Pagine di Filament
- `docs`: Documentazione di Filament

### 3. Vite

- `theme`: Configurazione del tema
- `assets`: Asset di Vite
- `views`: Viste di Vite
- `components`: Componenti di Vite
- `layout`: Layout di Vite
- `blocks`: Blocchi di Vite
- `pages`: Pagine di Vite
- `docs`: Documentazione di Vite

## Personalizzazione

### 1. Tema

Per personalizzare il tema, modifica i file di configurazione in `config/theme.php`.

### 2. Filament

Per personalizzare Filament, modifica i file di configurazione in `config/filament.php`.

### 3. Vite

Per personalizzare Vite, modifica i file di configurazione in `config/vite.php`.

## Riferimenti

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Vite Documentation](https://vitejs.dev/guide)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs) 
>>>>>>> c07bf8ebb7 (.)
