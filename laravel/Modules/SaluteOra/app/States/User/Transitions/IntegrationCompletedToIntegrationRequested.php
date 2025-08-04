<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\IntegrationCompleted;
use Modules\SaluteOra\States\User\IntegrationRequested;
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
use Modules\SaluteOra\Models\User;

/**
 * Transizione da IntegrationCompleted a IntegrationRequested.
 * 
 * Questa transizione avviene quando durante la verifica si scopre che servono
 * ulteriori documenti, correzioni o chiarimenti da parte dell'utente.
 */
class IntegrationCompletedToIntegrationRequested extends BaseTransition
{
<<<<<<< HEAD
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
    }
=======
   ///---
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
} 