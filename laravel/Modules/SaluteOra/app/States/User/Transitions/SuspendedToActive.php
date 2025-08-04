<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\States\User\Suspended;
=======
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Suspended;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\Models\User;
>>>>>>> aurmich/dev

class SuspendedToActive extends BaseTransition
{
    //---
<<<<<<< HEAD

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
>>>>>>> aurmich/dev
}
