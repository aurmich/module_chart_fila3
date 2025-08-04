<?php

namespace Modules\Notify\Notifications;

<<<<<<< HEAD
use Illuminate\Support\Str;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Support\Str;
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
>>>>>>> aurmich/dev
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
<<<<<<< HEAD
use Modules\Notify\Models\MailTemplate;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Models\MailTemplate;
=======
>>>>>>> 54f4fa16 (.)
=======
use Modules\Notify\Models\MailTemplate;
>>>>>>> adac82bd (rebase)
>>>>>>> aurmich/dev
use Illuminate\Notifications\Notification;

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
<<<<<<< HEAD
    public array $data=[];
    public array $attachments=[];
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public array $data=[];
    public array $attachments=[];
=======
>>>>>>> 54f4fa16 (.)
=======
    public array $data=[];
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $this->slug = Str::slug($slug);
        

    }
    /** 
     * @param object $notifiable
     * @return array<string|class-string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
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
        
<<<<<<< HEAD
=======
=======
        $this->slug = $slug;
=======
        $this->slug = Str::slug($slug);
        
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)

    }

=======
>>>>>>> 345f8677 (phpstan)
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

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
            $email->to($to);
        }

>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
        return $email;
    }

    /**
     * Get the SMS representation of the notification.
     *
     * @param object $notifiable
     * @return SmsData
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
=======
=======
    public function toSms(object $notifiable): SmsData
=======
    public function toSms(object $notifiable): ?SmsData
>>>>>>> adac82bd (rebase)
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
        $to=null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        if($to==null){
            return null;
        }

        $smsData = SmsData::from(['from'=>'Xot','to'=>$to,'body'=>'test']);
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev


        return $smsData;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev

    public function mergeData(array $data): self
    {
        $this->data=array_merge($this->data,$data);
        return $this;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev

    public function addAttachments(array $attachments): self
    {
        $this->attachments=array_merge($this->attachments,$attachments);
        return $this;
    }
}
<<<<<<< HEAD
=======
=======
}
>>>>>>> 54f4fa16 (.)
=======
}
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev
