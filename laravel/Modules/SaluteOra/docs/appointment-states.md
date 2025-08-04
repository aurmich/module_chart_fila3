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

### 4. InProgress (In corso)
- Visita medica attualmente in corso
- **Transizioni possibili**: Completed, Cancelled
- **Colore**: info (aggiornato da warning)
- **Icona**: heroicon-o-play-circle (aggiornato)

### 5. Completed (Completato)
- Appuntamento completato con successo
- **Stato finale** - nessuna transizione
- **Colore**: success
- **Icona**: heroicon-o-check-badge

### 6. Cancelled (Annullato)
- Appuntamento annullato da una delle parti
- **Stato finale** - nessuna transizione
- **Colore**: danger
- **Icona**: heroicon-o-x-circle

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
- **Colore**: danger
- **Icona**: heroicon-o-x-mark (aggiornato)
- **Label**: "Respinto" (aggiornato da "Rifiutato")

### 8. NoShow (Assente)
- Paziente non si è presentato senza preavviso
- **Stato finale** - nessuna transizione
- **Colore**: warning (aggiornato da danger)
- **Icona**: heroicon-o-user-minus (aggiornato)

### 9. Rescheduled (Riprogrammato)
- Appuntamento spostato a nuova data/ora
- **Transizioni possibili**: Confirmed
- **Colore**: info
- **Icona**: heroicon-o-arrow-path

## Flusso degli Stati

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
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
            ↓          
          Rescheduled ← Scheduled
                        ↓
                    Cancelled
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

### Rimossi Stati Non Pertinenti
- ❌ **IntegrationRequested**: Non applicabile agli appuntamenti
- ❌ **IntegrationCompleted**: Non applicabile agli appuntamenti

### Miglioramenti Visuali
- 🎨 **InProgress**: Icona cambiata da `clock` a `play-circle`
- 🎨 **Rejected**: Icona cambiata da `no-symbol` a `x-mark`
- 🎨 **NoShow**: Icona cambiata da `exclamation-circle` a `user-minus`
- 🎨 **NoShow**: Colore cambiato da `danger` a `warning`

### Miglioramenti Traduzioni
- 📝 **Rejected**: Label migliorata da "Rifiutato" a "Respinto"
- 📝 **InProgress**: Label ottimizzata

## Architettura Tecnica

### Classe Base
```php
abstract class AppointmentState extends State
{
    abstract public function label(): string;
    abstract public function color(): string;
    abstract public function icon(): string;
}
```

### Pattern BaseTransition
Il modulo implementa un pattern **BaseTransition** che automatizza:

```php
class BaseTransition extends Transition
{
    public function __construct(public Appointment $appointment, public ?string $message='') {}
    
    public function handle(): Appointment
    {
        $this->sendNotification();
        // Auto-discovery del nuovo stato dal nome della classe
        $class = static::class;
        $newStateClass = Str::of($class)->afterLast('To')->prepend('Modules\\SaluteOra\\States\\Appointment\\\\')->toString();
        
        $this->appointment->state = new $newStateClass($this->appointment);
        $this->appointment->save();
        
        return $this->appointment;
    }
}
```

### Transizioni Implementate

#### Da Pending
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

#### Da Confirmed
- `ConfirmedToScheduled`
- `ConfirmedToCancelled`
- `ConfirmedToRescheduled`
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======

#### Da Scheduled
>>>>>>> 1dc4ede7 (📝 (README.md): update documentation for SaluteOra module to improve clarity and organization of information, including a comprehensive table of contents and sections for best practices, quick start guides, and recent updates)
- `ScheduledToInProgress`
- `ScheduledToCancelled`
- `ScheduledToNoShow`
- `ScheduledToRescheduled`

#### Da InProgress
- `InProgressToCompleted`
<<<<<<< HEAD
- `RescheduledToConfirmed`
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)

#### Da Rescheduled
- `RescheduledToConfirmed`

## Utilizzo

### Configurazione States
```php
public static function config(): StateConfig
{
    return parent::config()
        ->default(Pending::class)
        
        // Pending transitions
        ->allowTransition(Pending::class, Confirmed::class, 
            Transitions\PendingToConfirmed::class)
        ->allowTransition(Pending::class, Cancelled::class, 
            Transitions\PendingToCancelled::class)
        
        // ... altre transizioni
}
```

### Ottenere Stati Disponibili
```php
$statuses = AppointmentState::getStatuses();
// Restituisce array con label localizzate automaticamente
```

### Transizioni
```php
// Esempio di transizione
$appointment->state->transitionTo(Confirmed::class);
```

## Best Practices

### Sviluppo
1. **Usare BaseTransition**: Per tutte le nuove transizioni
2. **Nome Classes Descrittivi**: `FromStateToToState`
3. **Label Localizzate**: Sempre in italiano comprensibile
4. **Icone Semantiche**: Che rappresentano chiaramente lo stato
5. **Colori Consistenti**: Seguire la palette definita

### Business Logic
1. **Stati Finali**: Completed, Cancelled, Rejected, NoShow
2. **Stati Attivi**: Pending, Confirmed, Scheduled, InProgress
3. **Stati Modificabili**: Rescheduled può tornare a Confirmed

### UX
1. **Feedback Visivo**: Colori e icone immediate
2. **Traduzioni Chiare**: Comprensibili per utenti finali
3. **Transizioni Logiche**: Flusso naturale del processo

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
- `app/States/Appointment/Transitions/PendingToCancelled.php`
- `app/States/Appointment/Transitions/ConfirmedToScheduled.php`
- `app/States/Appointment/Transitions/ConfirmedToCancelled.php`
- `app/States/Appointment/Transitions/ConfirmedToRescheduled.php`
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
- `app/States/Appointment/Transitions/ScheduledToInProgress.php`
- `app/States/Appointment/Transitions/ScheduledToCancelled.php`
- `app/States/Appointment/Transitions/ScheduledToNoShow.php`
- `app/States/Appointment/Transitions/ScheduledToRescheduled.php`
- `app/States/Appointment/Transitions/InProgressToCompleted.php`
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

## Collegamenti

### File Correlati
- `app/States/Appointment/AppointmentState.php`
- `app/States/Appointment/Transitions/BaseTransition.php`
- `app/Models/Appointment.php`

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
