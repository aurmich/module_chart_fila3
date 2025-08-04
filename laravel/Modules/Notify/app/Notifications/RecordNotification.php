<?php

namespace Modules\Notify\Notifications;

<<<<<<< HEAD
use Illuminate\Support\Str;
=======
>>>>>>> 54f4fa16 (.)
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
<<<<<<< HEAD
use Modules\Notify\Models\MailTemplate;
=======
>>>>>>> 54f4fa16 (.)
use Illuminate\Notifications\Notification;

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
<<<<<<< HEAD
    public array $data=[];
    public array $attachments=[];
=======
>>>>>>> 54f4fa16 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
<<<<<<< HEAD
        $this->slug = Str::slug($slug);
        

    }
    /** 
     * @param object $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
        if (!method_exists($notifiable, 'routeNotificationFor')){
            return $channels;
        }
        if($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

    /**
     * @param object $notifiable
     * @return SpatieEmail
     */
    public function toMail($notifiable): SpatieEmail
    {
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
            }
        }
        
=======
        $this->slug = $slug;
    }

    public function via($notifiable): array
    {
        //return ['mail'];
        return [SmsChannel::class];
    }

    public function toMail($notifiable): SpatieEmail
    {

        $email = new SpatieEmail($this->record, $this->slug);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $email->to($notifiable->routeNotificationFor('mail'));
        }

>>>>>>> 54f4fa16 (.)
        return $email;
    }

    /**
     * Get the SMS representation of the notification.
     *
     * @param object $notifiable
     * @return SmsData
     */
<<<<<<< HEAD
    public function toSms(object $notifiable): ?SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);
        
        $email=$email->mergeData($this->data);
       
        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to=null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        if($to==null){
            return null;
        }

        $smsData = SmsData::from([
            'from'=>'Xot',
            'to'=>$to,
            'body'=>$email->buildSms(),
        ]);
=======
    public function toSms(object $notifiable): SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);
        /*
        dddx([
            'methods' => get_class_methods($email),
           // 'text' => $email->text(),
           'getHtmlLayout' => $email->getHtmlLayout(),


        ]);
        */
        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable

        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }

        $smsData = SmsData::from(['from'=>'Xot','to'=>$to,'body'=>'test']);
>>>>>>> 54f4fa16 (.)


        return $smsData;
    }
<<<<<<< HEAD

    public function mergeData(array $data): self
    {
        $this->data=array_merge($this->data,$data);
        return $this;
    }

    public function addAttachments(array $attachments): self
    {
        $this->attachments=array_merge($this->attachments,$attachments);
        return $this;
    }
}
=======
}
>>>>>>> 54f4fa16 (.)
