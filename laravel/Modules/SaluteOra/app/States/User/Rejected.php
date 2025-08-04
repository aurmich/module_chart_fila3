<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User;

/**
 * Stato che rappresenta un utente rifiutato.
 * 
 * Questo stato viene utilizzato quando la registrazione di un utente viene rifiutata.
 * L'utente non può accedere al sistema e l'account non può essere riattivato.
 */
class Rejected extends UserState
{
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'rejected';
=======
    public static $name = 'rejected';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    public function label(): string
    {
        return 'Rifiutato';
    }
    
    public function color(): string
    {
        return 'danger';
    }
    
    public function icon(): string
    {
        return 'heroicon-o-x-mark';
    }
}
