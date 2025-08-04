<?php

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Pending;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\RecordNotification;
use Modules\SaluteOra\States\User\IntegrationRequested;

class PendingToIntegrationRequested extends BaseTransition
{
    

    public function getNotificationData(): array{
        $user=$this->record;
        Assert::isInstanceOf($user, User::class);
        if($user->remember_token==null){
            $user->remember_token = Str::random(40);
            $user->save();
        }

        $register_url = route('register.type',[
            'type'=>$user->type->value,
            'email'=>$user->email,
            'token'=>$user->remember_token,
        ]);

        $data = [
            'message' => $this->message,
            'register_url' => $register_url,
        ];
        return $data;
    }


=======
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Pending;
use Modules\SaluteOra\States\User\IntegrationRequested;
use Modules\SaluteOra\Models\User;

class PendingToIntegrationRequested extends Transition
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle(): User
    {
        $this->user->state = new IntegrationRequested($this->user);
        $this->user->save();

        return $this->user;
    }
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
}
