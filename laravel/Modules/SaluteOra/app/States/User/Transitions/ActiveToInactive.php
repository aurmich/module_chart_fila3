<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\States\User\Inactive;
use Modules\SaluteOra\Models\User;

<<<<<<< HEAD
<<<<<<< HEAD
class ActiveToInactive extends BaseTransition
{
    //---
=======
class ActiveToInactive extends Transition
{
    public function __construct(public User $user, public ?string $message='') {}

    public function handle(): User
    {
        $this->user->state = new Inactive($this->user);
        $this->user->save();
        return $this->user;
    }
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
=======
class ActiveToInactive extends BaseTransition
{
    //---
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
}
