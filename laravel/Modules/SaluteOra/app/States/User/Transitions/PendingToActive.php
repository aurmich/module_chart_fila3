<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Pending;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\Models\User;
<<<<<<< HEAD
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\RecordNotification;
use Modules\SaluteOra\States\User\IntegrationRequested;

class PendingToActive extends BaseTransition
{
    

    public function getNotificationData(): array{
        $user=$this->record;
        $password=Str::random(10);
        $user->update(['password'=>$password]);

        $data = [
            'message' => $this->message,
            'password' => $password,
        ];
        return $data;
    }
}



=======

class PendingToActive extends Transition
{
    public function __construct(
        public User $user,
        public ?string $message=''
    ) {

    }

    public function handle(): User
    {
        // Additional logic before transition can be added here
        //$this->user->state = new Active($this->user);
        //$this->user->save();
        dddx('a');
        return $this->user;
    }
}
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
