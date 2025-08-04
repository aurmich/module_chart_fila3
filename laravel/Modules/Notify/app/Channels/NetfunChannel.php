<?php

namespace Modules\Notify\Channels;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSMSAction;
<<<<<<< HEAD
use Modules\Notify\Datas\SmsData;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\DTOs\NetfunSMSMessage;
>>>>>>> 54f4fa16 (.)
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForNetfun')) {
            return null;
        }
        
        $to = $notifiable->routeNotificationForNetfun($notification);
        if (!$to) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (!$to = $notifiable->routeNotificationForNetfun($notification)) {
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
            return null;
        }
        
        // Ottieni il messaggio dalla notifica
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        if (!method_exists($notification, 'toNetfun')) {
            throw new \Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $message = $notification->toNetfun($notifiable);
        
        // Crea i dati SMS
        $smsData = SmsData::from([
            'to'=>  $to,
            'body'=> is_string($message) ? $message : (is_object($message) && method_exists($message, 'getContent') ? $message->getContent() : ''),
            'from'=> null
        ]);
<<<<<<< HEAD
=======
=======
        $message = $notification->toNetfun($notifiable);
        
        if (!$message instanceof NetfunSMSMessage) {
            throw new \Exception('Il metodo toNetfun() deve restituire un\'istanza di NetfunSMSMessage');
        }
>>>>>>> 54f4fa16 (.)
=======
        $message = $notification->toNetfun($notifiable);
        
        // Crea i dati SMS
        $smsData = SmsData::from([
            'to'=>  $to,
            'body'=> is_string($message) ? $message : (is_object($message) && method_exists($message, 'getContent') ? $message->getContent() : ''),
            'from'=> null
        ]);
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        
        // Esegui l'invio tramite la Queueable Action
        // L'esecuzione avverrà in modo asincrono (in background)
        return $this->sendSMSAction
            ->onQueue('sms') // Esegui sulla coda 'sms'
<<<<<<< HEAD
            ->execute($smsData);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->execute($smsData);
=======
            ->execute(
                $to,
                $message->content,
                $message->toArray()
            );
>>>>>>> 54f4fa16 (.)
=======
            ->execute($smsData);
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
    }
}
