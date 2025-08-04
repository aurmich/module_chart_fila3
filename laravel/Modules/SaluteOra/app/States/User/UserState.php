<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\ModelStates\State;
use Filament\Forms\Components;
use Spatie\ModelStates\StateConfig;
use Modules\Xot\States\XotBaseState;
use Filament\Forms\Components\Textarea;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
=======
=======
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
//use Filament\Support\Contracts\HasLabel;

/**
 * Classe astratta base per la gestione degli stati dell'utente.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
 *
 * Questa classe definisce le transizioni di stato consentite e i metodi astratti
 * che devono essere implementati da ogni stato concreto.
 */
abstract class UserState extends XotBaseState
{
    

<<<<<<< HEAD
=======
=======
 * 
=======
 *
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
 * Questa classe definisce le transizioni di stato consentite e i metodi astratti
 * che devono essere implementati da ogni stato concreto.
 */
abstract class UserState extends State
{
    /**
     * Restituisce l'etichetta leggibile dello stato.
     */
    abstract public function label(): string;

    /**
     * Restituisce il colore associato allo stato.
     */
    abstract public function color(): string;

    /**
     * Restituisce l'icona associata allo stato.
     */
    abstract public function icon(): string;
<<<<<<< HEAD
    
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======

>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
>>>>>>> aurmich/dev
    /**
     * Configura le transizioni di stato consentite.
     */
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Pending::class)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
>>>>>>> aurmich/dev
            // Pending transitions
            ->allowTransition(Pending::class, Active::class, Transitions\PendingToActive::class)
            ->allowTransition(Pending::class, Rejected::class, Transitions\PendingToRejected::class)
            ->allowTransition(Pending::class, IntegrationRequested::class, Transitions\PendingToIntegrationRequested::class)
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
=======

>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
>>>>>>> aurmich/dev
            // Active transitions
            ->allowTransition(Active::class, Suspended::class, Transitions\ActiveToSuspended::class)
            ->allowTransition(Active::class, Inactive::class, Transitions\ActiveToInactive::class)
            ->allowTransition(Active::class, IntegrationRequested::class, Transitions\ActiveToIntegrationRequested::class)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

            // IntegrationRequested transitions
            ->allowTransition(IntegrationRequested::class, Active::class, Transitions\IntegrationRequestedToActive::class)
            ->allowTransition(IntegrationRequested::class, Rejected::class, Transitions\IntegrationRequestedToRejected::class)
            ->allowTransition(IntegrationRequested::class, IntegrationCompleted::class, Transitions\IntegrationRequestedToIntegrationCompleted::class)

            // IntegrationCompleted transitions
            ->allowTransition(IntegrationCompleted::class, Active::class, Transitions\IntegrationCompletedToActive::class)
            ->allowTransition(IntegrationCompleted::class, Rejected::class, Transitions\IntegrationCompletedToRejected::class)
            ->allowTransition(IntegrationCompleted::class, IntegrationRequested::class, Transitions\IntegrationCompletedToIntegrationRequested::class)
>>>>>>> aurmich/dev

            // IntegrationRequested transitions
            ->allowTransition(IntegrationRequested::class, Active::class, Transitions\IntegrationRequestedToActive::class)
            ->allowTransition(IntegrationRequested::class, Rejected::class, Transitions\IntegrationRequestedToRejected::class)
            ->allowTransition(IntegrationRequested::class, IntegrationCompleted::class, Transitions\IntegrationRequestedToIntegrationCompleted::class)

            // IntegrationCompleted transitions
            ->allowTransition(IntegrationCompleted::class, Active::class, Transitions\IntegrationCompletedToActive::class)
            ->allowTransition(IntegrationCompleted::class, Rejected::class, Transitions\IntegrationCompletedToRejected::class)
            ->allowTransition(IntegrationCompleted::class, IntegrationRequested::class, Transitions\IntegrationCompletedToIntegrationRequested::class)

            // Rejected transitions
            ->allowTransition(Rejected::class, Pending::class, Transitions\RejectedToPending::class)

            // Suspended transitions
            ->allowTransition(Suspended::class, Active::class, Transitions\SuspendedToActive::class)
            ->allowTransition(Suspended::class, Inactive::class, Transitions\SuspendedToInactive::class)

            // Inactive transitions
            ->allowTransition(Inactive::class, Active::class, Transitions\InactiveToActive::class)

            // Register all states
<<<<<<< HEAD
=======
=======
            ->allowTransition(Pending::class, Active::class)
            ->allowTransition(Pending::class, Rejected::class)
            ->allowTransition(Active::class, Suspended::class)
            ->allowTransition([Active::class, Suspended::class], Inactive::class)
            ->allowTransition([Pending::class, Suspended::class], Active::class)
            ->allowTransition([Active::class, Pending::class], IntegrationRequested::class)
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
            
=======

>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
            // Rejected transitions
            ->allowTransition(Rejected::class, Pending::class, Transitions\RejectedToPending::class)

            // Suspended transitions
            ->allowTransition(Suspended::class, Active::class, Transitions\SuspendedToActive::class)
            ->allowTransition(Suspended::class, Inactive::class, Transitions\SuspendedToInactive::class)

            // Register all states
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
>>>>>>> aurmich/dev
            ->registerState(Pending::class)
            ->registerState(Active::class)
            ->registerState(Inactive::class)
            ->registerState(Rejected::class)
            ->registerState(Suspended::class)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            ->registerState(IntegrationRequested::class)
            ->registerState(IntegrationCompleted::class);
    }


   
<<<<<<< HEAD
=======
=======
            ->registerState(IntegrationRequested::class);
=======
            ->registerState(IntegrationRequested::class)
            ->registerState(IntegrationCompleted::class);
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    }
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
}
