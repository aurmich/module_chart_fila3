<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Pending;
use Modules\SaluteOra\States\User\Rejected;
use Modules\SaluteOra\Models\User;

<<<<<<< HEAD
class PendingToRejected extends BaseTransition
{
    
=======
class PendingToRejected extends Transition
{
    public function __construct(public User $user, public ?string $message='') {}

    public function handle(): User
    {
        $this->user->state = new Rejected($this->user);
        $this->user->save();
        return $this->user;
    }
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
}
