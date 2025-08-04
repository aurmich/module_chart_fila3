<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\User\Transitions;

use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Pending;
use Modules\SaluteOra\States\User\Active;
use Modules\SaluteOra\Models\User;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4047cb2d (✨ (mail_template.php, send_email.php): add descriptions and placeholders for mail template fields to enhance clarity for users)
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\RecordNotification;
use Modules\SaluteOra\States\User\IntegrationRequested;
<<<<<<< HEAD

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
=======
>>>>>>> 4047cb2d (✨ (mail_template.php, send_email.php): add descriptions and placeholders for mail template fields to enhance clarity for users)

class PendingToActive extends Transition
{
    public function __construct(
        public User $user,
        public ?string $message=''
    ) {

    }

    public function handle(): User
    {
        $slug=$this->user->type->value . '-'.Str::of(class_basename(self::class))->kebab()->toString();
        $notify = new RecordNotification(
            $this->user,
            $slug
        );
        $password=Str::random(10);
        $this->user->update(['password'=>$password]);

        $data = [
            'message' => $this->message,
            'password' => $password,
        ];
        //dddx($data);
        $notify = $notify->mergeData($data);
        Notification::route('mail', $this->user->email)
            //->locale('it')
            ->notify($notify);
        
        
        // Additional logic before transition can be added here
        $this->user->state = new Active($this->user);
        $this->user->save();

        return $this->user;
    }
}
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
