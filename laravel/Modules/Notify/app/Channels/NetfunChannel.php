<?php

namespace Modules\Notify\Channels;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSMSAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\DTOs\NetfunSMSMessage;
>>>>>>> aurmich/dev
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 345f8677 (phpstan)

class NetfunChannel
{
    protected SendNetfunSMSAction $sendSMSAction;
    
    public function __construct(SendNetfunSMSAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
    }
    
    /**
     * Invia la notifica tramite Netfun SMS
     * 
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     * @return array|null
     */
    public function send($notifiable, Notification $notification)
    {
        // Ottieni il numero di telefono dal Notifiable
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForNetfun')) {
            return null;
        }
        
        $to = $notifiable->routeNotificationForNetfun($notification);
        if (!$to) {
<<<<<<< HEAD
=======
        if (!$to = $notifiable->routeNotificationForNetfun($notification)) {
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
            return null;
        }
        
        // Ottieni il messaggio dalla notifica
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
        if (!method_exists($notification, 'toNetfun')) {
            throw new \Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
        
<<<<<<< HEAD
        $message = $notification->toNetfun($notifiable);
        
        // Crea i dati SMS
        $smsData = SmsData::from([
            'to'=>  $to,
            'body'=> is_string($message) ? $message : (is_object($message) && method_exists($message, 'getContent') ? $message->getContent() : ''),
            'from'=> null
        ]);
=======
        $message = $notification->toNetfun($notifiable);
        
        if (!$message instanceof NetfunSMSMessage) {
            throw new \Exception('Il metodo toNetfun() deve restituire un\'istanza di NetfunSMSMessage');
        }
>>>>>>> aurmich/dev
=======
        $message = $notification->toNetfun($notifiable);
        
        // Crea i dati SMS
        $smsData = SmsData::from([
            'to'=>  $to,
            'body'=> is_string($message) ? $message : (is_object($message) && method_exists($message, 'getContent') ? $message->getContent() : ''),
            'from'=> null
        ]);
>>>>>>> 345f8677 (phpstan)
        
        // Esegui l'invio tramite la Queueable Action
        // L'esecuzione avverrà in modo asincrono (in background)
        return $this->sendSMSAction
            ->onQueue('sms') // Esegui sulla coda 'sms'
<<<<<<< HEAD
<<<<<<< HEAD
            ->execute($smsData);
=======
            ->execute(
                $to,
                $message->content,
                $message->toArray()
            );
>>>>>>> aurmich/dev
=======
            ->execute($smsData);
>>>>>>> 345f8677 (phpstan)
    }
}
