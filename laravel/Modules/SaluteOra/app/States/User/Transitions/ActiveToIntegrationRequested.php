<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\States\User\IntegrationRequested;

class ActiveToIntegrationRequested extends BaseTransition
{
    //--- 
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
=======
=======
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\User;
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\States\User\IntegrationRequested;

class ActiveToIntegrationRequested extends BaseTransition
{
<<<<<<< HEAD
    public function __construct(public User $user, public ?string $message='') {}

    public function handle(): User
    {
        $this->user->state = new IntegrationRequested($this->user);
        $this->user->save();
        return $this->user;
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
    }
=======
    //--- 
<<<<<<< HEAD
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
    public function getNotificationData(): array{
        if($this->user->remember_token==null){
            $this->user->remember_token = Str::random(40);
            $this->user->save();
        }

        $register_url = route('register.type',[
            'type'=>$this->user->type->value,
            'email'=>$this->user->email,
            'token'=>$this->user->remember_token,
        ]);

        $data = [
            'message' => $this->message,
            'register_url' => $register_url,
        ];
        return $data;
    }
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
}
