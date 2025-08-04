<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Events;

<<<<<<< HEAD
use Modules\SaluteOra\Models\User;
use Illuminate\Queue\SerializesModels;
use Modules\SaluteOra\States\User\UserState;
use Illuminate\Foundation\Events\Dispatchable;
=======
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\SaluteOra\States\UserState;
use Modules\SaluteOra\Models\User;
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
} 
>>>>>>> aurmich/dev
