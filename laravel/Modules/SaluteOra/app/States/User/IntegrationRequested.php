<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User;

/**
 * Stato che rappresenta un utente per il quale è richiesta un'integrazione.
 * 
 * In questo stato l'utente ha completato la registrazione ma sono richieste
 * ulteriori informazioni prima di poter attivare l'account.
 */
class IntegrationRequested extends UserState
{
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'integration_requested';
=======
    public static $name = 'integration_requested';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    public function label(): string
    {
        return 'Integrazione richiesta';
    }
    
    public function color(): string
    {
        return 'info';
    }
    
    public function icon(): string
    {
        return 'heroicon-o-document-text';
    }
}
