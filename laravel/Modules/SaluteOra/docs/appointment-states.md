# Stati degli Appuntamenti - SaluteOra

## Panoramica

Il sistema di gestione degli stati degli appuntamenti utilizza il pattern State Machine di Spatie per gestire il ciclo di vita degli appuntamenti medici.

## Stati Implementati

### 1. Pending (In attesa)
- **Stato di default** per nuovi appuntamenti
- Il paziente ha prenotato ma deve ancora confermare
<<<<<<< HEAD
- **Transizioni possibili**: Confirmed, Rejected (NON Cancelled - da Pending non si può cancellare direttamente)
- **Colore**: warning
- **Icona**: heroicon-o-clock
=======
- **Transizioni possibili**: Confirmed, Cancelled
- **Colore**: gray
- **Icona**: heroicon-o-question-mark-circle
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)

### 2. Confirmed (Confermato)
- Paziente ha confermato la richiesta di appuntamento
- **Transizioni possibili**: Scheduled, Cancelled, Rescheduled
- **Colore**: success
- **Icona**: heroicon-o-check-circle

### 3. Scheduled (Programmato)
- Appuntamento confermato e inserito nel calendario
- **Transizioni possibili**: InProgress, Cancelled, NoShow, Rescheduled
- **Colore**: info
- **Icona**: heroicon-o-calendar
- **Modificabile**: true
- **Attivo**: true

### 4. InProgress (In corso)
- Visita medica attualmente in corso
- **Transizioni possibili**: Completed
- **Colore**: warning
- **Icona**: heroicon-o-clock
- **Attivo**: true

### 5. Completed (Completato)
- Visita terminata con successo
- **Stato finale** - nessuna transizione possibile
- **Colore**: success
- **Icona**: heroicon-o-check-badge
- **Completato**: true

### 6. Cancelled (Annullato)
- Appuntamento annullato
- **Colore**: danger
- **Icona**: heroicon-o-x-circle

<<<<<<< HEAD
<<<<<<< HEAD
### 7. Rejected (Rifiutato)
- Appuntamento rifiutato dal dottore o sistema
<<<<<<< HEAD
- **Transizioni possibili**: Confirmed (in caso di revisione della decisione)
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
### 7. Rejected (Respinto)
- Appuntamento respinto dal personale medico
- **Stato finale** - nessuna transizione
>>>>>>> 1dc4ede7 (📝 (README.md): update documentation for SaluteOra module to improve clarity and organization of information, including a comprehensive table of contents and sections for best practices, quick start guides, and recent updates)
=======
### 7. Rejected (Rifiutato)
- Appuntamento rifiutato dal dottore o sistema
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
- **Colore**: danger
- **Icona**: heroicon-o-no-symbol

### 8. NoShow (Assente)
- Paziente non si è presentato
- **Colore**: danger
- **Icona**: heroicon-o-exclamation-circle

### 9. Rescheduled (Riprogrammato)
- Appuntamento spostato a nuovo orario
- **Colore**: info
- **Icona**: heroicon-o-arrow-path
- **Modificabile**: true

## Diagramma delle Transizioni

```
Pending → Confirmed → Scheduled → InProgress → Completed
<<<<<<< HEAD
   ↓         ↓          ↓
   ↓      Cancelled   NoShow
Rejected ↔ Confirmed   ↑
=======
   ↓          ↓          ↓
Cancelled   Cancelled   NoShow
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
            ↓          
          Rescheduled ← Scheduled
                        ↓
                    Cancelled
<<<<<<< HEAD
```

<<<<<<< HEAD
**Nota importante**: Da `Pending` si può andare solo a `Confirmed` o `Rejected`. 
La cancellazione diretta da `Pending` non è permessa - un appuntamento in attesa deve essere prima confermato o rifiutato.

=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
## Implementazione
=======
             ↓          ↓
          Rescheduled   Cancelled
             ↓
          Confirmed
```

## Correzioni Implementate
>>>>>>> 1dc4ede7 (📝 (README.md): update documentation for SaluteOra module to improve clarity and organization of information, including a comprehensive table of contents and sections for best practices, quick start guides, and recent updates)
=======
```

## Implementazione
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)

### Classe Base: AppointmentState
```php
abstract class AppointmentState extends State
{
    abstract public function label(): string;
    abstract public function color(): string;
    abstract public function icon(): string;
    
    public function canBeModified(): bool { return false; }
    public function isActive(): bool { return false; }
    public function isPending(): bool { return false; }
    public function isCompleted(): bool { return false; }
}
```

### BaseTransition per Appuntamenti
Estende il pattern BaseTransition con:
- Notifiche automatiche a paziente e dottore
- Dati contestuali (data appuntamento, nomi, etc.)
- Gestione automatica del cambio stato

### Transizioni Implementate
- `PendingToConfirmed`
<<<<<<< HEAD
- `PendingToRejected`
- `ConfirmedToScheduled`
- `ConfirmedToCancelled`
- `ConfirmedToRescheduled`
- `ConfirmedToRejected`
- `RejectedToConfirmed`
=======
- `PendingToCancelled`
- `ConfirmedToScheduled`
- `ConfirmedToCancelled`
- `ConfirmedToRescheduled`
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======

#### Da Scheduled
>>>>>>> 1dc4ede7 (📝 (README.md): update documentation for SaluteOra module to improve clarity and organization of information, including a comprehensive table of contents and sections for best practices, quick start guides, and recent updates)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
- `ScheduledToInProgress`
- `ScheduledToCancelled`
- `ScheduledToNoShow`
- `ScheduledToRescheduled`
- `InProgressToCompleted`
<<<<<<< HEAD
- `RescheduledToConfirmed`
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)

## Pattern di Utilizzo

```php
// Cambio stato con transizione
$appointment->state->transitionTo(Confirmed::class, 'Confermato dal paziente');

// Controllo proprietà stato
if ($appointment->state->canBeModified()) {
    // Appuntamento modificabile
}

if ($appointment->state->isActive()) {
    // Appuntamento attivo
}

// Accesso alle proprietà dello stato
$color = $appointment->state->color();
$icon = $appointment->state->icon();
$label = $appointment->state->label();
```

## Notifiche Automatiche

Le transizioni inviano automaticamente notifiche via email a:
- **Paziente**: Per tutte le transizioni
- **Dottore**: Per tutte le transizioni

### Dati Inclusi nelle Notifiche
- Messaggio personalizzato
- Data e ora appuntamento
- Nome paziente
- Nome dottore
- Slug: `appointment-[nome-transizione]`

## Integrazione con Widget

Il sistema è integrato con il `FindDoctorAndAppointmentWidget` che:
1. Crea appuntamenti in stato `Pending`
2. Permette transizioni verso `Scheduled`
3. Gestisce automaticamente le notifiche

## Best Practices

1. **Sempre usare transizioni**: Non modificare direttamente lo stato
2. **Messaggi descrittivi**: Fornire sempre un messaggio nelle transizioni
3. **Gestire le eccezioni**: Le transizioni possono fallire
4. **Testing completo**: Testare tutti i percorsi di transizione
5. **Logging**: Tutte le transizioni sono automaticamente loggare

## File Implementati

### Stati
- `app/States/Appointment/AppointmentState.php` (classe base)
- `app/States/Appointment/Pending.php`
- `app/States/Appointment/Confirmed.php`
- `app/States/Appointment/Scheduled.php`
- `app/States/Appointment/InProgress.php`
- `app/States/Appointment/Completed.php`
- `app/States/Appointment/Cancelled.php`
- `app/States/Appointment/Rejected.php`
- `app/States/Appointment/NoShow.php`
- `app/States/Appointment/Rescheduled.php`

<<<<<<< HEAD
<<<<<<< HEAD
### Transizioni
- `app/States/Appointment/Transitions/BaseTransition.php`
- `app/States/Appointment/Transitions/PendingToConfirmed.php`
<<<<<<< HEAD
- `app/States/Appointment/Transitions/PendingToRejected.php`
- `app/States/Appointment/Transitions/ConfirmedToScheduled.php`
- `app/States/Appointment/Transitions/ConfirmedToCancelled.php`
- `app/States/Appointment/Transitions/ConfirmedToRescheduled.php`
- `app/States/Appointment/Transitions/ConfirmedToRejected.php`
- `app/States/Appointment/Transitions/RejectedToConfirmed.php`
=======
=======
### Transizioni
- `app/States/Appointment/Transitions/BaseTransition.php`
- `app/States/Appointment/Transitions/PendingToConfirmed.php`
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
- `app/States/Appointment/Transitions/PendingToCancelled.php`
- `app/States/Appointment/Transitions/ConfirmedToScheduled.php`
- `app/States/Appointment/Transitions/ConfirmedToCancelled.php`
- `app/States/Appointment/Transitions/ConfirmedToRescheduled.php`
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
- `app/States/Appointment/Transitions/ScheduledToInProgress.php`
- `app/States/Appointment/Transitions/ScheduledToCancelled.php`
- `app/States/Appointment/Transitions/ScheduledToNoShow.php`
- `app/States/Appointment/Transitions/ScheduledToRescheduled.php`
- `app/States/Appointment/Transitions/InProgressToCompleted.php`
<<<<<<< HEAD
<<<<<<< HEAD
- `app/States/Appointment/Transitions/RescheduledToConfirmed.php`
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
## Troubleshooting

### Errori Comuni
- **Stato non riconosciuto**: Verificare registrazione in `config()`
- **Transizione non permessa**: Controllare `allowTransition()`
- **Labels mancanti**: Implementare metodo `label()` negli stati

### Debug
```php
// Verificare stato corrente
dd($appointment->state::class);

// Verificare transizioni disponibili
dd($appointment->state->transitionableStates());
```
>>>>>>> 1dc4ede7 (📝 (README.md): update documentation for SaluteOra module to improve clarity and organization of information, including a comprehensive table of contents and sections for best practices, quick start guides, and recent updates)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)

## Collegamenti

- [AppointmentStatusEnum](../app/Enums/AppointmentStatusEnum.php)
- [Appointment Model](../app/Models/Appointment.php)
- [User States Pattern](user-states.md)
- [BaseTransition Pattern](../app/States/User/Transitions/BaseTransition.php)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: Gennaio 2025 - Aggiunta transizione RejectedToConfirmed* 
=======
*Ultimo aggiornamento: Dicembre 2024* 
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
### Documentazione Correlata
- [Pattern BaseTransition](patterns/base-transition.md)
- [Widget Development](patterns/widget-development.md)
- [LangServiceProvider](langserviceprovider-labels.md)

*Ultimo aggiornamento: Gennaio 2025*
*Versione: 2.0 - Correzioni IntegrationStates* 
>>>>>>> 1dc4ede7 (📝 (README.md): update documentation for SaluteOra module to improve clarity and organization of information, including a comprehensive table of contents and sections for best practices, quick start guides, and recent updates)
=======
*Ultimo aggiornamento: Dicembre 2024* 
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
