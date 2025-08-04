<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\IntegrationCompleted;
use Modules\SaluteOra\States\User\IntegrationRequested;
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
use Modules\SaluteOra\Models\User;

=======
>>>>>>> 6232c656 (✨ (IntegrationCompleted State): introduce new state `IntegrationCompleted` in user workflow to manage users who completed data integration but are not yet approved by the administrator)
=======
use Illuminate\Support\Str;

>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
/**
 * Transizione da IntegrationCompleted a IntegrationRequested.
 * 
 * Questa transizione avviene quando durante la verifica si scopre che servono
 * ulteriori documenti, correzioni o chiarimenti da parte dell'utente.
 */
class IntegrationCompletedToIntegrationRequested extends BaseTransition
{
<<<<<<< HEAD
<<<<<<< HEAD
    //---
    public function getNotificationData(): array{
<<<<<<< HEAD
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
=======
        if($this->user->remember_token==null){
            $this->user->remember_token = Str::random(40);
            $this->user->save();
        }

        $register_url = route('register.type',[
            'type'=>$this->user->type->value,
            'email'=>$this->user->email,
            'token'=>$this->user->remember_token,
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
        ]);

        $data = [
            'message' => $this->message,
            'register_url' => $register_url,
        ];
        return $data;
    }
<<<<<<< HEAD
=======
   ///---
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
    //---
>>>>>>> 6232c656 (✨ (IntegrationCompleted State): introduce new state `IntegrationCompleted` in user workflow to manage users who completed data integration but are not yet approved by the administrator)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
} 