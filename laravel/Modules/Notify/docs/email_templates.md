# Sistema di Email Template

## Introduzione

Il modulo Notify implementa un sistema avanzato di gestione delle email template basato su [spatie/laravel-database-mail-templates](https://github.com/spatie/laravel-database-mail-templates). Questo sistema permette di gestire e personalizzare facilmente i template delle email direttamente dal database.

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
## 🚨 Errore Critico Identificato

**Data**: 26 Giugno 2025  
**Errore**: `MissingMailTemplate` durante registrazione pazienti  
**Status**: CRITICO - Sistema registrazione bloccato  

➡️ **Documentazione completa**: [SaluteOra: Missing Mail Template Error](../../SaluteOra/docs/errori/missing-mail-template-spatiemail.md)  
➡️ **Pattern globali**: [Missing Mail Template Patterns](../../../docs/errori_gravi/missing-mail-template-patterns.md)

### Fix Immediato

Per risolvere immediatamente il problema di registrazione:

```bash
<<<<<<< HEAD

=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
# 1. Creare seeder per template critici
php artisan make:seeder CriticalMailTemplatesSeeder

# 2. Eseguire seeder
php artisan db:seed --class=CriticalMailTemplatesSeeder

# 3. Verificare template
php artisan tinker
>>> \Modules\Notify\Models\MailTemplate::where('slug', 'patient-pending')->exists()
```

<<<<<<< HEAD
=======
>>>>>>> 9df8f556 (fix .md)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
## Struttura del Sistema

### Componenti Principali

1. **SpatieEmail** (`app/Emails/SpatieEmail.php`)
   - Classe base per l'invio di email template
   - Gestisce il layout HTML e i dati aggiuntivi
   - Supporta la personalizzazione del layout
   - Supporta l'identificazione dei template tramite slug
<<<<<<< HEAD
<<<<<<< HEAD
   - ⚠️ **ATTENZIONE**: Constructor può fallire se template mancante
=======
>>>>>>> 9df8f556 (fix .md)
=======
   - ⚠️ **ATTENZIONE**: Constructor può fallire se template mancante
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)

2. **MailTemplate** (`app/Models/MailTemplate.php`)
   - Model per la gestione dei template nel database
   - Supporta traduzioni multilingua
   - Gestisce versioni dei template
   - Traccia i log delle email inviate
   - Include identificatore slug per i template
<<<<<<< HEAD
<<<<<<< HEAD
   - ⚠️ **ATTENZIONE**: Richiede pre-creazione per template critici
=======
>>>>>>> 9df8f556 (fix .md)
=======
   - ⚠️ **ATTENZIONE**: Richiede pre-creazione per template critici
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)

### Database

La tabella `mail_templates` contiene:
- `mailable`: Classe Mailable associata
- `subject`: Oggetto dell'email (traducibile)
- `html_template`: Template HTML (traducibile)
- `text_template`: Template testo (traducibile)
- `version`: Versione corrente del template
- `slug`: Identificatore univoco del template

## Utilizzo Pratico

### 1. Creazione di un Template Email

```php
// Esempio: Template Email di Benvenuto
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'welcome-email',
    'subject' => [
        'it' => 'Benvenuto, {{ first_name }}!',
        'en' => 'Welcome, {{ first_name }}!'
    ],
    'html_template' => [
        'it' => '
            <h1>Benvenuto!</h1>
            <p>Ciao {{ first_name }},</p>
            <p>Grazie per esserti registrato.</p>
            <p>Puoi accedere al tuo account utilizzando le credenziali che hai fornito.</p>
        ',
        'en' => '
            <h1>Welcome!</h1>
            <p>Hello {{ first_name }},</p>
            <p>Thank you for registering.</p>
            <p>You can access your account using the credentials you provided.</p>
        '
    ]
]);

<<<<<<< HEAD
<<<<<<< HEAD
// ✅ TEMPLATE CRITICI - Registrazione Pazienti
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'patient-pending',
    'subject' => ['it' => 'Registrazione in attesa di approvazione'],
    'html_template' => ['it' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione è in attesa di approvazione.</p>'],
    'text_template' => ['it' => 'La tua registrazione è in attesa di approvazione.']
]);

MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'patient-active',
    'subject' => ['it' => 'Account attivato con successo'],
    'html_template' => ['it' => '<p>Gentile {{ first_name }},</p><p>Il tuo account è stato attivato.</p>'],
    'text_template' => ['it' => 'Il tuo account è stato attivato.']
=======
// Esempio: Template Email per Completamento Registrazione
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'complete-registration',
    'subject' => [
        'it' => 'Completa la tua registrazione',
        'en' => 'Complete your registration'
    ],
    'html_template' => [
        'it' => '
            <h1>Completa la tua registrazione</h1>
            <p>Gentile {{ last_name }},</p>
            <p>Per completare la registrazione del tuo account, clicca sul link sottostante:</p>
            <p><a href="{{ registration_link }}">Completa Registrazione</a></p>
            <p>Il link scadrà tra 24 ore.</p>
        ',
        'en' => '
            <h1>Complete your registration</h1>
            <p>Dear {{ last_name }},</p>
            <p>To complete your account registration, click the link below:</p>
            <p><a href="{{ registration_link }}">Complete Registration</a></p>
            <p>The link will expire in 24 hours.</p>
        '
    ]
>>>>>>> 9df8f556 (fix .md)
=======
// ✅ TEMPLATE CRITICI - Registrazione Pazienti
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'patient-pending',
    'subject' => ['it' => 'Registrazione in attesa di approvazione'],
    'html_template' => ['it' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione è in attesa di approvazione.</p>'],
    'text_template' => ['it' => 'La tua registrazione è in attesa di approvazione.']
]);

MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'patient-active',
    'subject' => ['it' => 'Account attivato con successo'],
    'html_template' => ['it' => '<p>Gentile {{ first_name }},</p><p>Il tuo account è stato attivato.</p>'],
    'text_template' => ['it' => 'Il tuo account è stato attivato.']
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
]);
```

### 2. Invio di Email

```php
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Support\Facades\Mail;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
// ✅ CORRETTO - Con validazione slug
try {
    $user = User::find(1);
    
    // Verifica esistenza template prima dell'invio
    if (!\Modules\Notify\Models\MailTemplate::where('slug', 'welcome-email')->exists()) {
        throw new \Exception('Template welcome-email non trovato');
    }
    
    Mail::to($user->email)->send(new SpatieEmail($user, 'welcome-email'));
} catch (\Exception $e) {
    \Log::error('Email sending failed', ['error' => $e->getMessage()]);
}

// ❌ ERRATO - Senza validazione (può causare MissingMailTemplate)
<<<<<<< HEAD
$user = User::find(1);
Mail::to($user->email)->send(new SpatieEmail($user, 'welcome-email'));
=======
// Email di benvenuto usando lo slug
$user = User::find(1);
Mail::to($user->email)->send(new SpatieEmail($user, 'welcome-email'));

// Email per completamento registrazione usando lo slug
$user = User::find(1);
$user->registration_link = route('complete-registration', ['token' => $token]);
Mail::to($user->email)->send(new SpatieEmail($user, 'complete-registration'));
>>>>>>> 9df8f556 (fix .md)
=======
$user = User::find(1);
Mail::to($user->email)->send(new SpatieEmail($user, 'welcome-email'));
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
```

### 3. Personalizzazione del Layout

Per personalizzare il layout HTML delle email, modifica il metodo `getHtmlLayout()` in `SpatieEmail`:

```php
public function getHtmlLayout(): string
{
    return view('emails.layouts.main', [
        'siteName' => config('app.name'),
        'year' => date('Y')
    ])->render();
}
```

## Best Practices

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
1. **Prevenzione Errori MissingMailTemplate** ⚠️ **CRITICO**
   - **SEMPRE** creare seeder per template critici
   - **SEMPRE** validare esistenza template prima dell'invio
   - **SEMPRE** implementare fallback per template mancanti
   - **MAI** generare slug dinamici senza validazione

2. **Gestione delle Versioni**
<<<<<<< HEAD
=======
1. **Gestione delle Versioni**
>>>>>>> 9df8f556 (fix .md)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
   - Utilizzare il sistema di versioning per tracciare le modifiche ai template
   - Documentare le modifiche significative
   - Mantenere lo slug costante tra le versioni

<<<<<<< HEAD
<<<<<<< HEAD
3. **Traduzioni**
=======
2. **Traduzioni**
>>>>>>> 9df8f556 (fix .md)
=======
3. **Traduzioni**
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
   - Mantenere sempre le traduzioni in italiano e inglese
   - Utilizzare chiavi di traduzione coerenti
   - Utilizzare lo slug come chiave di traduzione quando appropriato

<<<<<<< HEAD
<<<<<<< HEAD
4. **Variabili nei Template**
=======
3. **Variabili nei Template**
>>>>>>> 9df8f556 (fix .md)
=======
4. **Variabili nei Template**
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
   - Utilizzare nomi descrittivi per le variabili
   - Documentare tutte le variabili disponibili
   - Validare la presenza delle variabili richieste

<<<<<<< HEAD
<<<<<<< HEAD
5. **Testing**
=======
4. **Testing**
>>>>>>> 9df8f556 (fix .md)
=======
5. **Testing**
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
   - Testare i template con dati reali
   - Verificare il rendering in diversi client email
   - Controllare le traduzioni in tutte le lingue supportate

<<<<<<< HEAD
<<<<<<< HEAD
6. **Gestione degli Slug**
=======
5. **Gestione degli Slug**
>>>>>>> 9df8f556 (fix .md)
=======
6. **Gestione degli Slug**
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
   - Utilizzare kebab-case per gli slug
   - Mantenere gli slug brevi e descrittivi
   - Evitare caratteri speciali
   - Verificare l'unicità degli slug
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
   - **✅ NUOVO**: Implementare validazione slug robusti

## Template Critici per il Sistema

### Template di Registrazione (PRIORITÀ URGENTE)

Questi template DEVONO esistere per il funzionamento del sistema:

```php
// Paziente - Stati registrazione
'patient-pending'     // Registrazione in attesa
'patient-active'      // Account attivato
'patient-rejected'    // Registrazione respinta

// Dottore - Stati registrazione  
'doctor-pending'      // Registrazione in verifica
'doctor-active'       // Account dottore attivato
'doctor-rejected'     // Registrazione respinta

// Sistema - Template fallback
'system-notification' // Notifica generica
'default-notification' // Template di emergenza
```
<<<<<<< HEAD
=======
>>>>>>> 9df8f556 (fix .md)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)

## Esempi di Template Comuni

### 1. Conferma Appuntamento

```php
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'appointment-confirmation',
    'subject' => [
        'it' => 'Conferma Appuntamento: {{ appointment_date }}',
        'en' => 'Appointment Confirmation: {{ appointment_date }}'
    ],
    'html_template' => [
        'it' => '
            <h1>Conferma Appuntamento</h1>
            <p>Gentile {{ first_name }},</p>
            <p>Il tuo appuntamento è stato confermato per il {{ appointment_date }} alle {{ appointment_time }}.</p>
            <p>Dottore: {{ doctor_name }}</p>
            <p>Servizio: {{ service_name }}</p>
            <p>Per modificare o cancellare l\'appuntamento, accedi al tuo account.</p>
        '
    ]
]);
```

### 2. Promemoria Appuntamento

```php
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'slug' => 'appointment-reminder',
    'subject' => [
        'it' => 'Promemoria: Appuntamento domani',
        'en' => 'Reminder: Appointment tomorrow'
    ],
    'html_template' => [
        'it' => '
            <h1>Promemoria Appuntamento</h1>
            <p>Gentile {{ first_name }},</p>
            <p>Ti ricordiamo il tuo appuntamento di domani:</p>
            <p>Data: {{ appointment_date }}</p>
            <p>Ora: {{ appointment_time }}</p>
            <p>Dottore: {{ doctor_name }}</p>
            <p>Servizio: {{ service_name }}</p>
        '
    ]
]);
```

## Troubleshooting

### Problemi Comuni

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
1. **🚨 CRITICO: MissingMailTemplate Exception**
   ```
   Spatie\MailTemplates\Exceptions\MissingMailTemplate
   No mail template exists for mailable `SpatieEmail`.
   ```
   
   **Soluzioni**:
   - Eseguire `CriticalMailTemplatesSeeder`
   - Verificare esistenza template con `php artisan mail:check-templates`
   - Implementare validazione slug nelle Actions
   - ➡️ [Documentazione completa errore](../../SaluteOra/docs/errori/missing-mail-template-spatiemail.md)

2. **Template non trovato**
<<<<<<< HEAD
   - Verificare che il template esista nel database
   - Controllare che la classe Mailable sia corretta
   - **NUOVO**: Controllare che lo slug sia corretto e non vuoto

3. **Variabili mancanti**
   - Assicurarsi che tutti i dati necessari siano passati al costruttore
   - Verificare i nomi delle variabili nel template

4. **Problemi di traduzione**
   - Controllare che tutte le traduzioni necessarie siano presenti
   - Verificare la configurazione della lingua corrente

### Comandi Utili per Debug

```bash

# Verifica template esistenti
php artisan tinker
>>> \Modules\Notify\Models\MailTemplate::where('mailable', 'like', '%SpatieEmail%')->get(['id', 'slug', 'subject'])

# Verifica template specifico
>>> \Modules\Notify\Models\MailTemplate::where('slug', 'patient-pending')->exists()

# Test invio email
>>> Mail::to('test@example.com')->send(new \Modules\Notify\Emails\SpatieEmail(User::first(), 'patient-pending'))
```

## Collegamenti Correlati

### **Errori Critici e Soluzioni**
- [SaluteOra: Missing Mail Template Error](../../SaluteOra/docs/errori/missing-mail-template-spatiemail.md) - **URGENT**
- [Missing Mail Template Patterns](../../../docs/errori_gravi/missing-mail-template-patterns.md) - Pattern globali
- [Array to String Conversion](../../../docs/errori_gravi/array-to-string-conversion-patterns.md) - Errore correlato

### **Documentazione Tecnica**
=======
1. **Template non trovato**
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
   - Verificare che il template esista nel database
   - Controllare che la classe Mailable sia corretta
   - **NUOVO**: Controllare che lo slug sia corretto e non vuoto

3. **Variabili mancanti**
   - Assicurarsi che tutti i dati necessari siano passati al costruttore
   - Verificare i nomi delle variabili nel template

4. **Problemi di traduzione**
   - Controllare che tutte le traduzioni necessarie siano presenti
   - Verificare la configurazione della lingua corrente

### Comandi Utili per Debug

```bash
# Verifica template esistenti
php artisan tinker
>>> \Modules\Notify\Models\MailTemplate::where('mailable', 'like', '%SpatieEmail%')->get(['id', 'slug', 'subject'])

# Verifica template specifico
>>> \Modules\Notify\Models\MailTemplate::where('slug', 'patient-pending')->exists()

# Test invio email
>>> Mail::to('test@example.com')->send(new \Modules\Notify\Emails\SpatieEmail(User::first(), 'patient-pending'))
```

## Collegamenti Correlati

<<<<<<< HEAD
>>>>>>> 9df8f556 (fix .md)
=======
### **Errori Critici e Soluzioni**
- [SaluteOra: Missing Mail Template Error](../../SaluteOra/docs/errori/missing-mail-template-spatiemail.md) - **URGENT**
- [Missing Mail Template Patterns](../../../docs/errori_gravi/missing-mail-template-patterns.md) - Pattern globali
- [Array to String Conversion](../../../docs/errori_gravi/array-to-string-conversion-patterns.md) - Errore correlato

### **Documentazione Tecnica**
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
- [Documentazione Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [Gestione Traduzioni](../Lang/docs/TRANSLATION_KEYS_BEST_PRACTICES.md)
- [Configurazione Email](../../../docs/email-configuration.md)
- [Documentazione Traduzioni](./translations.md)
- [Proposta Slug Template](./EMAIL_TEMPLATE_SLUG_PROPOSAL.md)
- [Notify Module Index](./INDEX.md)
- [Architecture Overview](./ARCHITECTURE.md)
- [Notification Channels Implementation](./NOTIFICATION_CHANNELS_IMPLEMENTATION.md)
- [SMS Implementation](./SMS_IMPLEMENTATION.md)
- [Troubleshooting](./TROUBLESHOOTING.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)

---

**Ultimo aggiornamento**: 26 Giugno 2025  
**Status**: Aggiornato per errore critico MissingMailTemplate  
**Priorità**: URGENT - Fix sistema registrazione
<<<<<<< HEAD
=======
>>>>>>> 9df8f556 (fix .md)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
