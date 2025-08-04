<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Rejected;
use Modules\SaluteOra\States\User\Pending;
use Modules\SaluteOra\Models\User;

<<<<<<< HEAD
class RejectedToPending extends BaseTransition
{
    //---
=======
<<<<<<< HEAD
<<<<<<< HEAD
class RejectedToPending extends BaseTransition
{
    //---
=======
class RejectedToPending extends Transition
{
    public function __construct(
        public User $user,
        public ?string $message=''
    ) {
    }

    public function handle(): User
    {
        // Additional logic before transition can be added here
        $this->user->state = new Pending($this->user);
        $this->user->save();

        return $this->user;
    }
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
=======
class RejectedToPending extends BaseTransition
{
    //---
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
>>>>>>> aurmich/dev
}
