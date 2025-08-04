<<<<<<< HEAD
# Traduzioni di Autenticazione - Tema One

## Panoramica

Questo documento descrive le traduzioni di autenticazione disponibili nel tema One per SaluteOra. Le traduzioni sono organizzate in modo gerarchico e supportano sia l'italiano che l'inglese.

## Struttura delle Traduzioni

### Login
- `pub_theme::auth.login.title` - Titolo della pagina di login
- `pub_theme::auth.login.or` - Separatore "oppure"
- `pub_theme::auth.login.create_account` - Link per creare account
- `pub_theme::auth.login.forgot_password` - Link password dimenticata
- `pub_theme::auth.login.back_to_login` - Link per tornare al login
- `pub_theme::auth.login.email` - Label campo email
- `pub_theme::auth.login.password` - Label campo password
- `pub_theme::auth.login.remember_me` - Checkbox "ricordami"
- `pub_theme::auth.login.login_button` - Pulsante di accesso

### Registrazione Generale
- `pub_theme::auth.register.title` - Titolo generale registrazione
- `pub_theme::auth.register.welcome_message` - Messaggio di benvenuto
- `pub_theme::auth.register.description` - Descrizione generale
- `pub_theme::auth.register.already_have_account` - Testo per utenti già registrati
- `pub_theme::auth.register.login_link` - Link per accedere
- `pub_theme::auth.register.register_button` - Pulsante registrazione
- `pub_theme::auth.register.already_registered` - Testo alternativo per utenti già registrati

### Registrazione Dottore
- `pub_theme::auth.register.doctor.title` - Titolo registrazione dottore
- `pub_theme::auth.register.doctor.subtitle` - Sottotitolo registrazione dottore
- `pub_theme::auth.register.doctor.description` - Descrizione per dottori
- `pub_theme::auth.register.doctor.welcome_message` - Messaggio di benvenuto per dottori
- `pub_theme::auth.register.doctor.info.title` - Titolo sezione informazioni professionali
- `pub_theme::auth.register.doctor.info.message` - Messaggio descrittivo informazioni professionali
- `pub_theme::auth.register.doctor.specialization_label` - Label specializzazione
- `pub_theme::auth.register.doctor.specialization_placeholder` - Placeholder specializzazione
- `pub_theme::auth.register.doctor.license_number_label` - Label numero licenza
- `pub_theme::auth.register.doctor.license_number_placeholder` - Placeholder numero licenza
- `pub_theme::auth.register.doctor.phone_label` - Label telefono
- `pub_theme::auth.register.doctor.phone_placeholder` - Placeholder telefono
- `pub_theme::auth.register.doctor.address_label` - Label indirizzo
- `pub_theme::auth.register.doctor.address_placeholder` - Placeholder indirizzo
- `pub_theme::auth.register.doctor.terms_acceptance` - Accettazione termini
- `pub_theme::auth.register.doctor.privacy_policy` - Accettazione privacy
- `pub_theme::auth.register.doctor.register_button` - Pulsante registrazione dottore

### Registrazione Paziente
- `pub_theme::auth.register.patient.title` - Titolo registrazione paziente
- `pub_theme::auth.register.patient.subtitle` - Sottotitolo registrazione paziente
- `pub_theme::auth.register.patient.description` - Descrizione per pazienti
- `pub_theme::auth.register.patient.welcome_message` - Messaggio di benvenuto per pazienti
- `pub_theme::auth.register.patient.phone_label` - Label telefono
- `pub_theme::auth.register.patient.phone_placeholder` - Placeholder telefono
- `pub_theme::auth.register.patient.date_of_birth_label` - Label data di nascita
- `pub_theme::auth.register.patient.date_of_birth_placeholder` - Placeholder data di nascita
- `pub_theme::auth.register.patient.gender_label` - Label sesso
- `pub_theme::auth.register.patient.gender_placeholder` - Placeholder sesso
- `pub_theme::auth.register.patient.terms_acceptance` - Accettazione termini
- `pub_theme::auth.register.patient.privacy_policy` - Accettazione privacy
- `pub_theme::auth.register.patient.register_button` - Pulsante registrazione paziente

### Registrazione Amministratore
- `pub_theme::auth.register.admin.title` - Titolo registrazione amministratore
- `pub_theme::auth.register.admin.subtitle` - Sottotitolo registrazione amministratore
- `pub_theme::auth.register.admin.description` - Descrizione per amministratori
- `pub_theme::auth.register.admin.welcome_message` - Messaggio di benvenuto per amministratori
- `pub_theme::auth.register.admin.role_label` - Label ruolo amministrativo
- `pub_theme::auth.register.admin.role_placeholder` - Placeholder ruolo
- `pub_theme::auth.register.admin.phone_label` - Label telefono
- `pub_theme::auth.register.admin.phone_placeholder` - Placeholder telefono
- `pub_theme::auth.register.admin.terms_acceptance` - Accettazione termini
- `pub_theme::auth.register.admin.privacy_policy` - Accettazione privacy
- `pub_theme::auth.register.admin.register_button` - Pulsante registrazione amministratore

### Campi Comuni di Registrazione
- `pub_theme::auth.register.fields.name_label` - Label nome completo
- `pub_theme::auth.register.fields.name_placeholder` - Placeholder nome
- `pub_theme::auth.register.fields.email_label` - Label email
- `pub_theme::auth.register.fields.email_placeholder` - Placeholder email
- `pub_theme::auth.register.fields.password_label` - Label password
- `pub_theme::auth.register.fields.password_placeholder` - Placeholder password
- `pub_theme::auth.register.fields.password_confirmation_label` - Label conferma password
- `pub_theme::auth.register.fields.password_confirmation_placeholder` - Placeholder conferma password

### Validazione Registrazione
- `pub_theme::auth.register.validation.name_required` - Errore nome obbligatorio
- `pub_theme::auth.register.validation.email_required` - Errore email obbligatoria
- `pub_theme::auth.register.validation.email_email` - Errore email non valida
- `pub_theme::auth.register.validation.email_unique` - Errore email già registrata
- `pub_theme::auth.register.validation.password_required` - Errore password obbligatoria
- `pub_theme::auth.register.validation.password_min` - Errore password troppo corta
- `pub_theme::auth.register.validation.password_confirmed` - Errore password non coincidono
- `pub_theme::auth.register.validation.terms_required` - Errore termini non accettati
- `pub_theme::auth.register.validation.privacy_required` - Errore privacy non accettata

### Successo Registrazione
- `pub_theme::auth.register.success.title` - Titolo successo registrazione
- `pub_theme::auth.register.success.message` - Messaggio successo
- `pub_theme::auth.register.success.verification_sent` - Messaggio verifica inviata
- `pub_theme::auth.register.success.check_email` - Istruzioni per controllare email

### Errori Registrazione
- `pub_theme::auth.register.errors.registration_failed` - Errore registrazione fallita
- `pub_theme::auth.register.errors.email_already_exists` - Errore email già esistente
- `pub_theme::auth.register.errors.invalid_data` - Errore dati non validi

### Reset Password
- `pub_theme::auth.password.reset.title` - Titolo reset password
- `pub_theme::auth.password.reset.subtitle` - Sottotitolo reset password
- `pub_theme::auth.password.reset.description` - Descrizione reset password
- `pub_theme::auth.password.reset.email_label` - Label email
- `pub_theme::auth.password.reset.email_placeholder` - Placeholder email
- `pub_theme::auth.password.reset.send_button` - Pulsante invia link
- `pub_theme::auth.password.reset.back_to_login` - Link torna al login
- `pub_theme::auth.password.reset.or` - Separatore "oppure"
- `pub_theme::auth.password.reset.email_sent` - Messaggio email inviata
- `pub_theme::auth.password.reset.email_sent_title` - Titolo email inviata
- `pub_theme::auth.password.reset.email_sent_message` - Messaggio dettagliato email inviata
- `pub_theme::auth.password.reset.check_email_status` - Pulsante controlla email

### Password Reset Widget
- `pub_theme::password-reset.submit.label` - Pulsante invia link reset password

### Conferma Password
- `pub_theme::auth.confirm.title` - Titolo conferma password
- `pub_theme::auth.confirm.description` - Descrizione conferma password

### Nuova Password
- `pub_theme::auth.new.title` - Titolo nuova password
- `pub_theme::auth.new.password_label` - Label nuova password
- `pub_theme::auth.new.confirm_password_label` - Label conferma nuova password
- `pub_theme::auth.new.update_button` - Pulsante aggiorna password

### Verifica Account
- `pub_theme::auth.verify.title` - Titolo verifica account
- `pub_theme::auth.verify.description` - Descrizione verifica account
- `pub_theme::auth.verify.resend_button` - Pulsante reinvia
- `pub_theme::auth.verify.change_email` - Link cambia email

### Logout
- `pub_theme::auth.logout.title` - Titolo logout
- `pub_theme::auth.logout.message` - Messaggio logout
- `pub_theme::auth.logout.redirect_message` - Messaggio reindirizzamento

### Ringraziamento
- `pub_theme::auth.thank_you.title` - Titolo ringraziamento
- `pub_theme::auth.thank_you.message` - Messaggio ringraziamento
- `pub_theme::auth.thank_you.continue_button` - Pulsante continua

### Azioni
- `pub_theme::auth.actions.processing` - Messaggio elaborazione
- `pub_theme::auth.actions.sending` - Messaggio invio
- `pub_theme::auth.actions.refresh` - Pulsante ricarica

### Errori
- `pub_theme::auth.errors.loading_failed` - Errore caricamento fallito
- `pub_theme::auth.errors.please_refresh` - Messaggio ricarica pagina

## Utilizzo nelle View

### Esempio di utilizzo in Blade
```blade
<h1>{{ __('pub_theme::auth.register.doctor.title') }}</h1>
<p>{{ __('pub_theme::auth.register.doctor.subtitle') }}</p>

<div class="info-section">
    <h3>{{ __('pub_theme::auth.register.doctor.info.title') }}</h3>
    <p>{{ __('pub_theme::auth.register.doctor.info.message') }}</p>
</div>

<form>
    <label>{{ __('pub_theme::auth.register.fields.name_label') }}</label>
    <input placeholder="{{ __('pub_theme::auth.register.fields.name_placeholder') }}">
    
    <button>{{ __('pub_theme::auth.register.doctor.register_button') }}</button>
</form>
```

### Esempio di utilizzo in Filament
```php
TextInput::make('name')
    ->label(__('pub_theme::auth.register.fields.name_label'))
    ->placeholder(__('pub_theme::auth.register.fields.name_placeholder'))
    ->required();

TextInput::make('email')
    ->label(__('pub_theme::auth.register.fields.email_label'))
    ->placeholder(__('pub_theme::auth.register.fields.email_placeholder'))
    ->email()
    ->required();

// Sezione informazioni professionali per dottori
Section::make(__('pub_theme::auth.register.doctor.info.title'))
    ->description(__('pub_theme::auth.register.doctor.info.message'))
    ->schema([
        Select::make('specialization')
            ->label(__('pub_theme::auth.register.doctor.specialization_label'))
            ->placeholder(__('pub_theme::auth.register.doctor.specialization_placeholder'))
            ->options($specializations)
            ->required(),
    ])
```

## File di Traduzione

- **Italiano**: `/laravel/Themes/One/lang/it/auth.php`
- **Inglese**: `/laravel/Themes/One/lang/en/auth.php`

## Note Importanti

1. **Struttura Gerarchica**: Le traduzioni seguono una struttura gerarchica per organizzare meglio i contenuti
2. **Campi Specifici**: Ogni tipo di utente (dottore, paziente, amministratore) ha i propri campi specifici
3. **Validazione**: Include messaggi di validazione per tutti i campi
4. **Stati**: Gestisce tutti gli stati del processo di registrazione (form, successo, errori)
5. **Accessibilità**: Tutti i campi hanno label e placeholder appropriati
6. **Sezioni Informative**: Le sezioni info forniscono contesto e istruzioni agli utenti

## Aggiornamenti

- **2025-01-XX**: Aggiunte traduzioni complete per registrazione dottore, paziente e amministratore
- **2025-01-XX**: Aggiunte traduzioni per validazione e gestione errori
- **2025-01-XX**: Aggiunte traduzioni per stati di successo e feedback utente
- **2025-01-XX**: Aggiunte traduzioni per sezioni informative (info.title, info.message)

## Collegamenti

- [Documentazione Tema One](../README.md)
- [Regole Traduzioni](../../../docs/translation-standards.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
=======
# Traduzioni di Autenticazione del Tema One

## Panoramica

Questo documento descrive il sistema di traduzioni per l'autenticazione nel tema One, includendo tutte le chiavi di traduzione disponibili, la struttura dei file e le best practices per l'implementazione.

## Struttura dei File di Traduzione Auth

Le traduzioni di autenticazione sono organizzate nei file:
- `/laravel/Themes/One/lang/it/auth.php`
- `/laravel/Themes/One/lang/en/auth.php`

### Struttura Completa delle Traduzioni

#### Login
```php
'login' => [
    'title' => 'Accedi al tuo account',
    'or' => 'oppure',
    'create_account' => 'crea un nuovo account',
    'forgot_password' => 'Hai dimenticato la password?',
    'back_to_login' => 'torna al login',
    'email' => 'Indirizzo email',
    'password' => 'Password',
    'remember_me' => 'Ricordami',
    'login_button' => 'Accedi',
],
```

#### Registrazione
```php
'register' => [
    'title' => 'Crea il tuo account',
    'welcome_message' => 'Benvenuto in <span class="font-bold">SaluteOra</span>',
    'description' => 'Crea il tuo account per accedere a tutti i servizi',
    'already_have_account' => 'Hai già un account?',
    'login_link' => 'accedi qui',
    'register_button' => 'Registrati',
],
```

#### Reset Password
```php
'password' => [
    'reset' => [
        'title' => 'Reimposta password',
        'description' => 'Inserisci il tuo indirizzo email per ricevere il link di reimpostazione password',
        'email_label' => 'Indirizzo email',
        'send_button' => 'Invia link reimpostazione password',
        'back_to_login' => 'torna al login',
        'or' => 'oppure',
        'email_sent' => 'Link di reimpostazione password inviato!',
    ],
    'confirm' => [
        'title' => 'Conferma password',
        'description' => 'Inserisci la tua password per confermare l\'identità',
    ],
    'new' => [
        'title' => 'Nuova password',
        'password_label' => 'Nuova password',
        'confirm_password_label' => 'Conferma nuova password',
        'update_button' => 'Aggiorna password',
    ],
],
```

#### Verifica Email
```php
'verify' => [
    'title' => 'Verifica il tuo account',
    'description' => 'Ti abbiamo inviato un\'email di verifica. Controlla la tua casella di posta.',
    'resend_button' => 'Invia nuovamente',
    'change_email' => 'Cambia indirizzo email',
],
```

#### Logout
```php
'logout' => [
    'title' => 'Disconnessione',
    'message' => 'Sei stato disconnesso con successo',
    'redirect_message' => 'Reindirizzamento in corso...',
],
```

#### Thank You Page
```php
'thank_you' => [
    'title' => 'Grazie per la registrazione',
    'message' => 'Il tuo account è stato creato con successo',
    'continue_button' => 'Continua',
],
```

#### Azioni e Stati
```php
'actions' => [
    'processing' => 'Elaborazione in corso...',
    'sending' => 'Invio in corso...',
    'refresh' => 'Ricarica pagina',
],
```

#### Gestione Errori
```php
'errors' => [
    'loading_failed' => 'Errore di caricamento',
    'please_refresh' => 'Si è verificato un errore. Ricarica la pagina e riprova.',
],
```

## Utilizzo nelle View

### Namespace delle Traduzioni

Il tema One utilizza il namespace `pub_theme::` per le traduzioni:

```php
{{ __('pub_theme::auth.login.title') }}
{{ __('pub_theme::auth.login.or') }}
{{ __('pub_theme::auth.login.create_account') }}
```

### Esempi di Implementazione

#### Login Page
```blade
<!-- resources/views/pages/auth/login.blade.php -->
<h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-[#272C4D]">
    {{ __('pub_theme::auth.login.title') }}
</h2>
<div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
    <span>{{ __('pub_theme::auth.login.or') }}</span>
    <a href="{{ route('register') }}" class="text-[#FF5F7E] font-medium">
        {{ __('pub_theme::auth.login.create_account') }}
    </a>
</div>
```

#### Register Page
```blade
<!-- resources/views/pages/auth/register.blade.php -->
<h1 class="text-3xl font-light text-blue-900">
    {!! __('pub_theme::auth.register.welcome_message') !!}
</h1>
<p class="text-gray-600 mt-2">
    {{ __('pub_theme::auth.register.description') }}
</p>
```

#### Password Reset Page
```blade
<!-- resources/views/pages/auth/password/reset.blade.php -->
<h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-[#272C4D]">
    {{ __('pub_theme::auth.password.reset.title') }}
</h2>
<div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
    <span>{{ __('pub_theme::auth.password.reset.or') }}</span>
    <x-ui.text-link href="{{ route('login') }}">
        {{ __('pub_theme::auth.password.reset.back_to_login') }}
    </x-ui.text-link>
</div>
```

## REGOLA CRITICA: Struttura Directory Blade

⚠️ **SEMPRE** seguire la gerarchia Laravel per i file di autenticazione:

### ✅ CORRETTO - Struttura Gerarchica
```
resources/views/pages/auth/
├── password/
│   ├── reset.blade.php        # /password/reset
│   ├── confirm.blade.php      # /password/confirm
│   └── [token].blade.php      # /password/reset/{token}
├── register.blade.php         # /register
├── login.blade.php           # /login
└── verify.blade.php          # /verify
```

### ❌ ERRATO - Nomi Piatti con Trattini
```
resources/views/pages/auth/
├── password-reset.blade.php   # ❌ Non segue convenzioni Laravel
├── password-confirm.blade.php # ❌ Non scalabile
└── password-email.blade.php   # ❌ Inconsistente con route
```

### Motivazioni
1. **Coerenza Route**: Laravel usa `/password/reset`, non `/password-reset`
2. **Coerenza Controller**: `Password\ResetController`, non `PasswordResetController`
3. **Organizzazione Logica**: Raggruppa funzionalità correlate (password)
4. **Scalabilità**: Facile aggiungere nuove funzionalità password
5. **Standard Laravel**: Convenzione ufficiale del framework

## Best Practices

### Struttura delle Traduzioni

1. **Gerarchia Chiara**: Organizzare le traduzioni in gruppi logici (login, register, password, etc.)
2. **Coerenza**: Utilizzare la stessa terminologia tra diverse sezioni
3. **Completezza**: Assicurarsi che tutte le stringhe abbiano traduzioni corrispondenti in entrambe le lingue

### Utilizzo HTML nelle Traduzioni

Per le traduzioni che contengono HTML (come `welcome_message`), utilizzare `{!! !!}` invece di `{{ }}`:

```blade
<!-- Corretto per HTML -->
{!! __('pub_theme::auth.register.welcome_message') !!}

<!-- Corretto per testo normale -->
{{ __('pub_theme::auth.login.title') }}
```

### Fallback e Gestione Errori

Il sistema utilizza il fallback automatico dalla lingua italiana all'inglese:

```php
// Se manca in italiano, usa inglese
{{ __('pub_theme::auth.login.title') }}
```

### Personalizzazione per Progetti Specifici

Se si desidera personalizzare le traduzioni per un progetto specifico:

1. **Non modificare** i file del tema direttamente
2. **Estendere** le traduzioni tramite il sistema di override di Laravel
3. **Documentare** tutte le personalizzazioni

## Manutenzione e Aggiornamenti

### Controllo Completezza

Per verificare che tutte le traduzioni siano complete:

```bash
# Confrontare i file di traduzione
diff -u lang/it/auth.php lang/en/auth.php
```

### Aggiunta di Nuove Traduzioni

Quando si aggiungono nuove traduzioni:

1. **Aggiornare entrambi i file** (italiano e inglese)
2. **Mantenere la struttura** coerente
3. **Testare** in entrambe le lingue
4. **Documentare** le modifiche

### Testing

Per testare le traduzioni:

```bash
# Pulire la cache delle traduzioni
php artisan cache:clear

# Testare il cambio di lingua
app()->setLocale('en');
app()->setLocale('it');
```

## Integrazione con il Sistema di Localizzazione

Le traduzioni auth si integrano con il sistema di localizzazione globale:

- **Middleware**: `SetLocale` gestisce la lingua corrente
- **Route**: Le route includono il parametro `{locale}`
- **Fallback**: Sistema automatico di fallback inglese → italiano

## Troubleshooting

### Problemi Comuni

1. **Traduzione non trovata**: Verificare il namespace `pub_theme::`
2. **HTML non renderizzato**: Usare `{!! !!}` invece di `{{ }}`
3. **Cache delle traduzioni**: Pulire la cache con `php artisan cache:clear`

### Debug

Per debuggare le traduzioni:

```php
// Verificare se esiste la traduzione
if (Lang::has('pub_theme::auth.login.title')) {
    echo "Traduzione trovata";
}

// Ottenere il percorso del file di traduzione
echo app('translator')->getLoader()->get(app()->getLocale(), 'auth', 'pub_theme');
```

## Collegamenti e Riferimenti

- [Sistema di Localizzazione](./i18n.md)
- [Configurazione Tema](../config/theme.php)
- [Documentazione Laravel Localization](https://laravel.com/docs/localization)
- [Best Practices Traduzioni](/docs/translation-standards.md)

## Fix Critico: Email Password Reset

### Problema Risolto
- **Errore**: "An email must have a 'To', 'Cc', or 'Bcc' header"
- **Causa**: `SpatieEmail` non aveva destinatario impostato
- **Soluzione**: Cambiato `setRecipient()` → `to()` in `UserServiceProvider`

### Correzione Implementata
```php
// ✅ FIX CRITICO in UserServiceProvider.php
if (method_exists($notifiable, 'getEmailForPasswordReset')) {
    $email->to($notifiable->getEmailForPasswordReset());
} elseif (isset($notifiable->email)) {
    $email->to($notifiable->email);
}
```

### Widget Namespace Corretto
- **Widget Auth**: `pub_theme::filament.widgets.auth.password.reset`
- **Motivazione**: Widget auth fanno parte dell'UX del tema
- **Regola**: Widget AUTH sempre `pub_theme::`, widget funzionali namespace modulo

## Cronologia Aggiornamenti

- **2024-12**: Implementazione iniziale traduzioni auth
- **2024-12**: Aggiunta traduzioni complete per login, register, password reset
- **2024-12**: Integrazione con sistema di localizzazione esistente
- **2024-12**: Correzione struttura directory auth (password-reset.blade.php → password/reset.blade.php)
- **2024-12**: Aggiunta sezioni azioni e gestione errori nelle traduzioni
- **2024-12**: Implementazione regola critica per struttura directory Laravel Auth
- **2024-12**: **FIX CRITICO**: Correzione email password reset - destinatario mancante
- **2024-12**: **CORREZIONE NAMESPACE**: Widget auth usano `pub_theme::` (non `user::`)

---

*Documento aggiornato: Dicembre 2024* 
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
