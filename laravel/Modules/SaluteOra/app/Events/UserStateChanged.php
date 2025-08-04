<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Events;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\SaluteOra\Models\User;
use Illuminate\Queue\SerializesModels;
use Modules\SaluteOra\States\User\UserState;
use Illuminate\Foundation\Events\Dispatchable;
<<<<<<< HEAD
=======
=======
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\SaluteOra\States\UserState;
use Modules\SaluteOra\Models\User;
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
use Modules\SaluteOra\Models\User;
use Illuminate\Queue\SerializesModels;
use Modules\SaluteOra\States\User\UserState;
use Illuminate\Foundation\Events\Dispatchable;
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev

class UserStateChanged
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public User $user,
        public UserState $oldState,
        public UserState $newState
    ) {}
<<<<<<< HEAD
} 
=======
<<<<<<< HEAD
} 
=======
} 
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
