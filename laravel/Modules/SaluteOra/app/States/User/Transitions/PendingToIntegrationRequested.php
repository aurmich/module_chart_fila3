<?php

namespace Modules\SaluteOra\States\User\Transitions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
use Illuminate\Support\Str;
>>>>>>> f3e4ec66 (.)
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
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
use Spatie\ModelStates\Transition;
use Modules\SaluteOra\States\User\Pending;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\RecordNotification;
use Modules\SaluteOra\States\User\IntegrationRequested;

class PendingToIntegrationRequested extends Transition
{
    private User $user;
    private ?string $message;

    public function __construct(User $user,?string $message='')
    {
        $this->user = $user;
        $this->message = $message;
    }

    public function handle(): User
    {
        $notify = new RecordNotification(
            $this->user,
            $this->user->type->value . '_integration_requested'
        );
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
        dddx($data);
        $notify = $notify->mergeData($data);
        Notification::route('mail', $this->user->email)
            //->locale('it')
            ->notify($notify);
        dddx('a');
        $this->user->state = new IntegrationRequested($this->user);
        $this->user->save();

        return $this->user;
    }
>>>>>>> f4ba6a58 (✨ (User.php): add user state transition classes to manage user state changes)
}
