<?php

namespace Modules\Notify\Notifications\Channels;

use Illuminate\Notifications\Notification;
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
use Modules\Notify\Actions\Telegram\BotTelegramAction;
use Modules\Notify\Datas\TelegramMessageData;
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev

class TelegramChannel
{
    /**
     * Invia la notifica tramite Telegram.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        if (!method_exists($notification, 'toTelegram')) {
            throw new \Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForTelegram')) {
            throw new \Exception('Il metodo routeNotificationForTelegram() non è definito nel notifiable.');
        }

        // TODO: Implementare il metodo toTelegram nella notifica
        $message = 'Messaggio Telegram placeholder';
<<<<<<< HEAD
=======
=======
        if (!method_exists($notifiable, 'routeNotificationForTelegram')) {
            throw new \Exception('Il metodo routeNotificationForTelegram() non è definito nel notifiable.');
        }

        $message = $notification->toTelegram($notifiable);
>>>>>>> 54f4fa16 (.)
=======
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForTelegram')) {
            throw new \Exception('Il metodo routeNotificationForTelegram() non è definito nel notifiable.');
        }

        // TODO: Implementare il metodo toTelegram nella notifica
        $message = 'Messaggio Telegram placeholder';
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        $chatId = $notifiable->routeNotificationForTelegram();

        if (empty($chatId)) {
            throw new \Exception('Chat ID Telegram non trovato per il notifiable.');
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        // TODO: Implementare BotTelegramAction e TelegramMessageData
        // Per ora, logghiamo solo l'intento di invio
        Log::info('Telegram notification would be sent', [
            'chat_id' => $chatId,
            'message' => $message
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $action = new BotTelegramAction();
        $result = $action->execute(new TelegramMessageData(
            chat_id: $chatId,
            text: $message
        ));

        if (!$result['success']) {
            throw new \Exception('Errore nell\'invio del messaggio Telegram: ' . ($result['error'] ?? 'Errore sconosciuto'));
        }
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
    }
}
