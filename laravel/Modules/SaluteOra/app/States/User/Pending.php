<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User;

/**
 * Stato che rappresenta un utente in attesa di attivazione.
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
 *
>>>>>>> 7440f060 (delete duplicate folder + add .md)
 * Questo è lo stato predefinito per i nuovi utenti registrati.
 */
class Pending extends UserState
{
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    public static string $name = 'pending';
=======
    public static $name = 'pendig';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    public static $name = 'pending';
>>>>>>> 7440f060 (delete duplicate folder + add .md)

    public function label(): string
    {
        return 'In attesa';
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
    public function color(): string
    {
        return 'warning';
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
    public function icon(): string
    {
        return 'heroicon-o-clock';
    }
}
