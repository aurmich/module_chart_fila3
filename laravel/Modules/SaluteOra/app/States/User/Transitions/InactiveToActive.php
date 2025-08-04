<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\States\User\Inactive;

class InactiveToActive extends BaseTransition
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
  }
=======
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Inactive;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\Models\User;

class InactiveToActive extends Transition
{
    public function __construct(public User $user, public ?string $message='') {}

    public function handle(): User
    {
        $this->user->state = new Active($this->user);
        $this->user->save();
        return $this->user;
    }
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
}
