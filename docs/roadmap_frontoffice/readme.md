<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> bead9c28 (fix case)
>>>>>>> aurmich/dev
# Documentazione Frontoffice SaluteOra

## Struttura della Documentazione

### 1. Registrazione e Autenticazione
- [Panoramica](./registrazione_autenticazione/README.md)
- [Registrazione Pazienti](./registrazione_autenticazione/registrazione_pazienti.md)
- [Login/Logout](./registrazione_autenticazione/login_logout.md)
- [Recupero Password](./registrazione_autenticazione/recupero_password.md)
- [Verifica Email](./registrazione_autenticazione/verifica_email.md)
- [2FA](./registrazione_autenticazione/2fa.md)

### 2. Area Personale Paziente
- [Panoramica](./area_personale_paziente/README.md)
- [Dashboard](./area_personale_paziente/dashboard.md)
- [Gestione Profilo](./area_personale_paziente/gestione_profilo.md)
- [Storico Appuntamenti](./area_personale_paziente/storico_appuntamenti.md)
- [Documenti Clinici](./area_personale_paziente/documenti_clinici.md)

### 3. Prenotazione Visite
- [Panoramica](./prenotazione_visite/README.md)
- [Ricerca Odontoiatri](./prenotazione_visite/ricerca_odontoiatri.md)
- [Disponibilità](./prenotazione_visite/disponibilita.md)
- [Conferma Appuntamento](./prenotazione_visite/conferma_appuntamento.md)

### 4. Area Odontoiatra
- [Panoramica](./area_odontoiatra/README.md)
- [Dashboard](./area_odontoiatra/dashboard.md)
- [Gestione Appuntamenti](./area_odontoiatra/gestione_appuntamenti.md)
- [Gestione Disponibilità](./area_odontoiatra/gestione_disponibilita.md)

### 5. Integrazioni
- [Sistema Notifiche](./integrazioni/notifiche.md)
- [Pagamenti](./integrazioni/pagamenti.md)
- [Documenti Digitali](./integrazioni/documenti_digitali.md)

### 6. Test e Qualità
- [Test Automatizzati](./test_qualita/test_automatizzati.md)
- [Manutenzione](./test_qualita/manutenzione.md)

### 7. Documentazione Tecnica
- [API](./documentazione/api.md)
- [Database](./documentazione/database.md)
- [Sicurezza](./documentazione/sicurezza.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
# Regole di Ereditarietà dei Modelli nei Moduli

- Ogni modello specializzato (es. Doctor) deve estendere il modello User del proprio modulo.
- Il modello User del modulo deve estendere BaseUser del modulo User.
- BaseUser estende Authenticatable.
- **Mai estendere direttamente Model o BaseModel nei modelli child.**

## Esempio
```php
// Modules/User/app/Models/BaseUser.php
class BaseUser extends Authenticatable { /* ... */ }

// Modules/Patient/app/Models/User.php
namespace Modules\Patient\Models;
use Modules\User\Models\BaseUser;
class User extends BaseUser { /* ... */ }

// Modules/Patient/app/Models/Doctor.php
namespace Modules\Patient\Models;
class Doctor extends User { /* ... */ }
```

## Motivazione
- Garantisce coerenza, riuso, centralizzazione delle policy e delle relazioni, e semplifica la gestione dei permessi e delle query.
- Permette di sfruttare la Single Table Inheritance (STI) con tighten/parental. 

## Enum di Utilizzo Comune

- Le enum di uso trasversale (es. DayOfWeek) devono essere definite in `\Modules\Xot\Enums`.
- Nei moduli si importano sempre da Xot, non si duplicano.

### Esempio
```php
// Modules/Xot/Enums/DayOfWeek.php
namespace Modules\Xot\Enums;
enum DayOfWeek: string { /* ... */ }

// Uso nei moduli
use Modules\Xot\Enums\DayOfWeek;
Forms\Components\Select::make('day')
    ->options(DayOfWeek::options())
```

### Motivazione
- Centralizzazione = riuso, coerenza, DRY
- Facilità di localizzazione e validazione
- Manutenzione semplificata
>>>>>>> 54f4fa16 (.)
>>>>>>> bead9c28 (fix case)
>>>>>>> aurmich/dev
