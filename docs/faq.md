<<<<<<< HEAD
# ❓ FAQ - Domande Frequenti SaluteOra

## 📚 Generale

### Q: Cos'è SaluteOra?
**A:** SaluteOra è una piattaforma digitale per la promozione della salute orale delle gestanti in condizioni di vulnerabilità socio-economica. È sviluppata in collaborazione con ANDI (Associazione Nazionale Dentisti Italiani) e utilizza tecnologie moderne come Laravel, Filament e architettura modulare.

### Q: Quali sono i requisiti di sistema?
**A:** 
- PHP >= 8.2
- MySQL >= 8.0 o MariaDB >= 10.6
- Node.js >= 18.x
- Redis >= 7.0
- Composer >= 2.5

### Q: Come posso contribuire al progetto?
**A:** Segui questi passi:
1. Fork del repository
2. Crea un branch feature (`git checkout -b feature/nome-feature`)
3. Commit delle modifiche (`git commit -m 'feat: descrizione'`)
4. Push al branch (`git push origin feature/nome-feature`)
5. Apri una Pull Request

## 🛠️ Sviluppo

### Q: Come creo un nuovo modulo?
**A:** Usa il comando Artisan:
```bash
php artisan module:make NomeModulo
php artisan module:enable NomeModulo
```
Poi segui la struttura standard nella [Guida Sviluppatore](GUIDA_SVILUPPATORE.md).

### Q: Perché i namespace non includono 'app'?
**A:** ⚠️ **QUESTO È CRITICO**: La configurazione PSR-4 mappa `Modules\NomeModulo\` direttamente alla cartella `app/`. Includere 'App' nel namespace **ROMPE L'AUTOLOADING** e causa errori "Class not found".

```php
// ✅ CORRETTO - SEMPRE COSÌ
namespace Modules\NomeModulo\Models;
namespace Modules\NomeModulo\Filament\Forms;
namespace Modules\NomeModulo\Actions;

// ❌ ERRATO - MAI COSÌ
namespace Modules\NomeModulo\App\Models;
namespace Modules\NomeModulo\App\Filament\Forms;
namespace Modules\NomeModulo\App\Actions;
```

**Verifica sempre con**: `composer dumpautoload` dopo aver creato nuovi file.

### Q: Come posso essere sicuro che i namespace siano corretti?
**A:** Segui questa checklist:
1. Il file è in `Modules/NomeModulo/app/...`? ✓
2. Il namespace inizia con `Modules\NomeModulo\`? ✓
3. Il namespace NON contiene `\App\`? ✓
4. Hai eseguito `composer dumpautoload` senza errori? ✓

### Q: Devo usare Services o Actions?
**A:** Usa sempre **QueueableActions** di Spatie invece dei Services tradizionali:
```php
namespace Modules\NomeModulo\Actions;

use Spatie\QueueableAction\QueueableAction;

class CreateUserAction
{
    use QueueableAction;
}
```

### Q: Come gestisco i DTO?
**A:** Usa sempre **Spatie Laravel Data** nella cartella `Datas`:
```php
namespace Modules\NomeModulo\Datas;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public string $name,
        public string $email,
    ) {}
}
```

## 🎨 Filament

### Q: Come creo una Resource Filament?
**A:** Estendi sempre `XotBaseResource`:
```php
use Modules\Xot\Filament\Resources\XotBaseResource;

class UserResource extends XotBaseResource
{
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name'),
            'email' => TextInput::make('email'),
        ];
=======
# FAQ

## Panoramica

Questa documentazione contiene le domande più frequenti sul tema One e le relative risposte.

## Domande Generali

### 1. Cos'è il tema One?

Il tema One è un tema frontend moderno e riusabile basato su:
- Laravel 10+
- Filament 3.3+
- Volt
- Folio
- Laraxot

### 2. Quali sono i requisiti?

- PHP 8.1+
- Laravel 10+
- Filament 3.3+
- Node.js 16+
- NPM 8+

### 3. Come si installa?

1. Aggiungi il tema al tuo `composer.json`:

```json
{
    "require": {
        "laraxot/theme_one_fila3": "^1.0"
>>>>>>> c07bf8ebb7 (.)
    }
}
```

<<<<<<< HEAD
### Q: Perché getFormSchema() deve restituire array con chiavi stringa?
**A:** Per compatibilità con PHPStan Level 9:
```php
// ✅ Corretto
return [
    'name' => TextInput::make('name'),
    'email' => TextInput::make('email'),
];

// ❌ Errato
return [
    TextInput::make('name'),
    TextInput::make('email'),
];
```

### Q: Come gestisco le traduzioni in Filament?
**A:** NON usare `->label()`. Le traduzioni sono gestite automaticamente dal LangServiceProvider:
```php
// ✅ Corretto
TextInput::make('name')

// ❌ Errato
TextInput::make('name')->label('Nome')
```

## 🗄️ Database

### Q: Come gestisco le migrazioni per modulo?
**A:** Ogni modulo ha le sue migrazioni:
```bash

# Crea migrazione per modulo
php artisan module:make-migration create_users_table NomeModulo

# Esegui migrazioni modulo
php artisan module:migrate NomeModulo

# Esegui tutte le migrazioni moduli
php artisan module:migrate
```

### Q: Come funziona il multi-tenant?
**A:** Il sistema usa il modulo Tenant che isola automaticamente i dati per tenant. Ogni modello che deve essere multi-tenant deve usare il trait `HasTenant`.

## 🧪 Testing

### Q: Come eseguo i test?
**A:** 
```bash

# Tutti i test
php artisan test

# Test specifico modulo
php artisan test Modules/NomeModulo

# Con coverage
php artisan test --coverage

# PHPStan
vendor/bin/phpstan analyse -l 9
```

### Q: Dove metto i test?
**A:** Nella cartella `Tests` del modulo:
```
Modules/NomeModulo/Tests/
├── Unit/        # Test unitari
└── Feature/     # Test funzionali
```

## 🐛 Troubleshooting

### Q: Errore "Class not found"
**A:** Rigenera l'autoload:
```bash
composer dump-autoload
php artisan cache:clear
```

### Q: Errore "View not found"
**A:** Pulisci la cache delle viste:
```bash
php artisan view:clear
php artisan view:cache
```

### Q: Le modifiche al config non si vedono
**A:** Pulisci e ricrea la cache:
=======
2. Esegui l'installazione:

```bash
composer update
```

3. Pubblica gli asset del tema:

```bash
php artisan vendor:publish --tag=theme-one-assets
php artisan vendor:publish --tag=theme-one-views
php artisan vendor:publish --tag=theme-one-config
```

4. Installa le dipendenze NPM:

```bash
npm install
```

5. Compila gli asset:

```bash
npm run build
```

### 4. Come si configura?

1. Configura il file `.env`:

```env
APP_NAME="Tema One"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://example.com
```

2. Configura Nginx:

```nginx
server {
    listen 80;
    server_name example.com;
    root /var/www/html/public;
}
```

3. Configura Redis:

```conf
maxmemory 256mb
maxmemory-policy allkeys-lru
```

4. Configura MySQL:

```sql
CREATE DATABASE theme_one;
CREATE USER 'theme_one'@'localhost' IDENTIFIED BY 'secret';
GRANT ALL PRIVILEGES ON theme_one.* TO 'theme_one'@'localhost';
FLUSH PRIVILEGES;
```

## Domande Tecniche

### 1. Come si personalizza il tema?

1. Modifica i file di configurazione in `config/theme.php`
2. Modifica i file di configurazione in `config/filament.php`
3. Modifica i file di configurazione in `config/vite.php`

### 2. Come si aggiungono nuovi componenti?

1. Crea un nuovo componente in `resources/views/components/`
2. Registra il componente in `config/theme.php`
3. Utilizza il componente nelle viste

### 3. Come si aggiungono nuovi blocchi?

1. Crea un nuovo blocco in `resources/views/blocks/`
2. Registra il blocco in `config/theme.php`
3. Utilizza il blocco nelle viste

### 4. Come si aggiungono nuove pagine?

1. Crea una nuova pagina in `resources/views/pages/`
2. Registra la pagina in `config/theme.php`
3. Utilizza la pagina nelle viste

## Domande sulla Manutenzione

### 1. Come si fa il backup?

1. Backup del database:

```bash
mysqldump -u theme_one -p theme_one > backup.sql
```

2. Backup dei file:

```bash
tar -czf backup.tar.gz storage/
```

3. Backup della configurazione:

```bash
cp .env .env.backup
```

### 2. Come si aggiorna?

1. Aggiorna le dipendenze:

```bash
composer update
npm update
```

2. Esegui le migrazioni:

```bash
php artisan migrate
```

3. Compila gli asset:

```bash
npm run build
```

### 3. Come si pulisce?

1. Pulisci la cache:

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

2. Pulisci i log:

```bash
truncate -s 0 storage/logs/laravel.log
```

3. Pulisci i file temporanei:

```bash
rm -rf storage/framework/cache/*
rm -rf storage/framework/sessions/*
rm -rf storage/framework/views/*
```

## Domande sul Deployment

### 1. Come si fa il deployment?

1. Tagga la versione:

```bash
git tag v1.0.0
git push origin v1.0.0
```

2. Crea il release:

```bash
# Vai su GitHub
# Crea un release
# Attendi il deployment
```

3. Verifica il deployment:

```bash
# Verifica il sito
# Verifica i log
# Verifica le performance
```

### 2. Come si monitora?

1. Monitora le performance:

```bash
php artisan telescope:install
php artisan horizon:install
```

2. Verifica le performance:

```bash
php artisan telescope:status
php artisan horizon:status
```

3. Ottimizza le performance:

```bash
php artisan optimize
```

### 3. Come si risolvono i problemi?

1. Verifica i log:

```bash
tail -f storage/logs/laravel.log
```

2. Verifica la configurazione:

>>>>>>> c07bf8ebb7 (.)
```bash
php artisan config:clear
php artisan config:cache
```

<<<<<<< HEAD
### Q: Permission denied su storage
**A:** Correggi i permessi:
```bash
sudo chown -R $USER:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
```

### Q: La queue non processa i job
**A:** Riavvia i worker:
```bash
php artisan queue:restart

# o con Horizon
php artisan horizon:terminate
php artisan horizon
```

## 📦 Deployment

### Q: Come preparo l'app per la produzione?
**A:** Esegui questi comandi:
```bash
composer install --optimize-autoloader --no-dev
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:cache-components
```

### Q: Come gestisco gli aggiornamenti in produzione?
**A:** Usa questa sequenza:
```bash
php artisan down
git pull origin main
composer install --optimize-autoloader --no-dev
php artisan migrate --force
php artisan cache:clear
php artisan config:cache
php artisan up
```

## 🔒 Sicurezza

### Q: Come gestisco i dati sensibili?
**A:** 
- Mai committare `.env` o credenziali
- Usa variabili d'ambiente per configurazioni sensibili
- Cripta dati sensibili nel database
- Segui le linee guida GDPR nel modulo Gdpr

### Q: Come implemento l'autenticazione?
**A:** Il modulo User gestisce autenticazione con Spatie Permission. Per autorizzazioni custom, crea Policy nel modulo appropriato.

## 🌐 Frontend

### Q: Che stack frontend usa il progetto?
**A:** 
- **Folio**: Routing basato su file
- **Volt**: Template engine
- **Livewire**: Componenti reattivi
- **Alpine.js**: Interattività client-side
- **Tailwind CSS**: Styling

### Q: Come creo una nuova pagina?
**A:** Con Folio, crea semplicemente un file nella cartella `resources/views/pages`:
```php
// resources/views/pages/about.blade.php
<?php
use function Laravel\Folio\{name};
name('about');
?>

<x-layout>
    <h1>About Page</h1>
</x-layout>
```

## 📝 Documentazione

### Q: Come mantengo aggiornata la documentazione?
**A:** 
1. Aggiorna sempre la documentazione PRIMA di fare modifiche al codice
2. Ogni modulo deve avere la sua cartella `docs/`
3. Mantieni aggiornato l'[Indice Documentazione](INDICE_DOCUMENTAZIONE.md)
4. Segui le [Linee Guida Documentazione](linee-guida-documentazione.md)

### Q: Dove trovo la documentazione completa?
**A:** 
- [Indice Documentazione](INDICE_DOCUMENTAZIONE.md) - Indice completo
- [Guida Sviluppatore](GUIDA_SVILUPPATORE.md) - Guida dettagliata
- [Quick Reference](quick-reference.md) - Riferimento rapido
- [Architettura Sistema](ARCHITETTURA_SISTEMA.md) - Overview architettura

## 🤝 Supporto

### Q: Dove posso chiedere aiuto?
**A:** 
- **Slack**: #saluteora-dev
- **Email**: support@saluteora.it
- **GitHub Issues**: Per bug e feature request
- **Documentazione**: Consulta sempre prima la documentazione

### Q: Come segnalo un bug?
**A:** Apri una issue su GitHub con:
1. Descrizione chiara del problema
2. Passi per riprodurre
3. Comportamento atteso vs. attuale
4. Screenshot se applicabile
5. Versione del sistema e ambiente

---

*FAQ aggiornate al: 28 Maggio 2025*
*Per domande non presenti qui, consulta la [documentazione completa](INDICE_DOCUMENTAZIONE.md) o contatta il team.*
=======
3. Verifica le dipendenze:

```bash
composer install
npm install
```

## Riferimenti

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Vite Documentation](https://vitejs.dev/guide)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs) 
>>>>>>> c07bf8ebb7 (.)
