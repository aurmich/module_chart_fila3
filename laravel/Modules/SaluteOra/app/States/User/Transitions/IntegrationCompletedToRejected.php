<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\IntegrationCompleted;
use Modules\SaluteOra\States\User\Rejected;
use Modules\SaluteOra\Models\User;

>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> 6232c656 (✨ (IntegrationCompleted State): introduce new state `IntegrationCompleted` in user workflow to manage users who completed data integration but are not yet approved by the administrator)
/**
 * Transizione da IntegrationCompleted a Rejected.
 * 
 * Questa transizione avviene quando l'amministratore respinge l'utente
 * dopo aver verificato i dati completati (documenti falsi, criteri non rispettati, ecc.).
 */
class IntegrationCompletedToRejected extends BaseTransition
{
<<<<<<< HEAD
<<<<<<< HEAD
    //---
=======
   //---
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
    //---
>>>>>>> 6232c656 (✨ (IntegrationCompleted State): introduce new state `IntegrationCompleted` in user workflow to manage users who completed data integration but are not yet approved by the administrator)
} 