<?php

namespace Modules\Notify\Channels;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSMSAction;
<<<<<<< HEAD
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\DTOs\NetfunSMSMessage;
>>>>>>> 54f4fa16 (.)

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
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForNetfun')) {
            return null;
        }
        
        $to = $notifiable->routeNotificationForNetfun($notification);
        if (!$to) {
=======
        if (!$to = $notifiable->routeNotificationForNetfun($notification)) {
>>>>>>> 54f4fa16 (.)
            return null;
        }
        
        // Ottieni il messaggio dalla notifica
<<<<<<< HEAD
        if (!method_exists($notification, 'toNetfun')) {
            throw new \Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
        
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
>>>>>>> 54f4fa16 (.)
        
        // Esegui l'invio tramite la Queueable Action
        // L'esecuzione avverrà in modo asincrono (in background)
        return $this->sendSMSAction
            ->onQueue('sms') // Esegui sulla coda 'sms'
<<<<<<< HEAD
            ->execute($smsData);
=======
            ->execute(
                $to,
                $message->content,
                $message->toArray()
            );
>>>>>>> 54f4fa16 (.)
    }
}
