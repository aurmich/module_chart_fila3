<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\States\User\IntegrationRequested;

class IntegrationRequestedToActive extends BaseTransition
{
    //---
    public function getNotificationData(): array{
        $user=$this->record;
        $password=Str::random(10);
        $user->update(['password'=>$password]);
        return [
            'message' => $this->message,
            'password' => $password,
        ];
<<<<<<< HEAD
    }
=======
=======
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\IntegrationRequested;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\Models\User;

class IntegrationRequestedToActive extends BaseTransition
{
<<<<<<< HEAD
    public function __construct(public User $user, public ?string $message='') {}

    public function handle(): User
    {
        $this->user->state = new Active($this->user);
        $this->user->save();
        return $this->user;
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
    }
=======
    //---
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
>>>>>>> aurmich/dev
}
