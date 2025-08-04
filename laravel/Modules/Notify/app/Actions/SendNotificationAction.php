<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
=======
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Models\NotificationLog;
>>>>>>> 54f4fa16 (.)
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Notifications\GenericNotification;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per l'invio di notifiche multi-canale.
 * Supporta l'invio via email, SMS e notifiche in-app.
 */
class SendNotificationAction
{
    use QueueableAction;

    /**
     * Invia una notifica utilizzando un template.
     *
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
     * 
<<<<<<< HEAD
     * @return bool
=======
     * @return NotificationLog
>>>>>>> 54f4fa16 (.)
     * @throws \Exception Se il template non esiste o non è attivo
     */
    public function execute(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
        array $options = []
<<<<<<< HEAD
    ): bool {
=======
    ): NotificationLog {
>>>>>>> 54f4fa16 (.)
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)
            ->where('is_active', true)
            ->first();

        if (!$template) {
            throw new \Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
        if (!$template->shouldSend($data)) {
<<<<<<< HEAD
            return false;
=======
            return $this->createSkippedNotification($recipient, $template, $data);
>>>>>>> 54f4fa16 (.)
        }

        // Compila il template
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
        $effectiveChannels = $channels ?: $template->channels;

<<<<<<< HEAD
        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            try {
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
            } catch (\Exception $e) {
                // Log dell'errore ma continua con altri canali
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
=======
        // Crea il log della notifica
        $log = NotificationLog::create([
            'template_id' => $template->id,
            'notifiable_type' => get_class($recipient),
            'notifiable_id' => $recipient->getKey(),
            'status' => NotificationLog::STATUS_PROCESSING,
            'data' => $data,
            'tenant_id' => $template->tenant_id,
        ]);

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            try {
                $this->sendViaChannel($recipient, $channel, $compiled, $options, $log);
            } catch (\Exception $e) {
                $log->markAsFailed($e->getMessage());
>>>>>>> 54f4fa16 (.)
                continue;
            }
        }

<<<<<<< HEAD
        return true;
=======
        return $log;
>>>>>>> 54f4fa16 (.)
    }

    /**
     * Invia la notifica attraverso un canale specifico.
     *
     * @param Model $recipient
     * @param string $channel
     * @param array $compiled
     * @param array $options
<<<<<<< HEAD
=======
     * @param NotificationLog $log
>>>>>>> 54f4fa16 (.)
     * @return void
     */
    protected function sendViaChannel(
        Model $recipient,
        string $channel,
        array $compiled,
<<<<<<< HEAD
        array $options
    ): void {
        switch ($channel) {
            case 'mail':
                $this->sendMail($recipient, $compiled, $options);
                break;
            case 'database':
                $this->sendDatabase($recipient, $compiled, $options);
                break;
            case 'sms':
                $this->sendSms($recipient, $compiled, $options);
=======
        array $options,
        NotificationLog $log
    ): void {
        $log->update(['channel' => $channel]);

        switch ($channel) {
            case 'mail':
                $this->sendMail($recipient, $compiled, $options, $log);
                break;
            case 'database':
                $this->sendDatabase($recipient, $compiled, $options, $log);
                break;
            case 'sms':
                $this->sendSms($recipient, $compiled, $options, $log);
>>>>>>> 54f4fa16 (.)
                break;
            default:
                throw new \Exception("Canale {$channel} non supportato");
        }
    }

    /**
     * Invia una notifica via email.
     */
<<<<<<< HEAD
    protected function sendMail(Model $recipient, array $compiled, array $options): void
=======
    protected function sendMail(Model $recipient, array $compiled, array $options, NotificationLog $log): void
>>>>>>> 54f4fa16 (.)
    {
        if (!method_exists($recipient, 'routeNotificationForMail')) {
            throw new \Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
        if (!$email) {
            throw new \Exception('Email destinatario non disponibile');
        }

<<<<<<< HEAD
        // Usa il sistema di notifiche di Laravel
        if (method_exists($recipient, 'notify')) {
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ])
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ])
            ));
        }
=======
        Mail::to($email)->send(new GenericNotification(
            $compiled['subject'],
            $compiled['body_html'] ?? $compiled['body_text'],
            ['mail'],
            array_merge($options, [
                'text_view' => $compiled['body_text'],
                'tracking_pixel_url' => route('notify.track.open', ['id' => $log->id]),
            ])
        ));

        $log->markAsSent();
>>>>>>> 54f4fa16 (.)
    }

    /**
     * Invia una notifica nel database.
     */
<<<<<<< HEAD
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
=======
    protected function sendDatabase(Model $recipient, array $compiled, array $options, NotificationLog $log): void
>>>>>>> 54f4fa16 (.)
    {
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $compiled['body_text'] ?? strip_tags($compiled['body_html']),
            ['database'],
            $options
        ));
<<<<<<< HEAD
=======

        $log->markAsSent();
>>>>>>> 54f4fa16 (.)
    }

    /**
     * Invia una notifica via SMS.
     */
<<<<<<< HEAD
    protected function sendSms(Model $recipient, array $compiled, array $options): void
=======
    protected function sendSms(Model $recipient, array $compiled, array $options, NotificationLog $log): void
>>>>>>> 54f4fa16 (.)
    {
        if (!method_exists($recipient, 'routeNotificationForSms')) {
            throw new \Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
        if (!$phone) {
            throw new \Exception('Numero di telefono destinatario non disponibile');
        }

        // Usa il testo plain o una versione senza HTML
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
            $message = mb_substr($message, 0, 317) . '...';
        }

        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
            ['sms'],
            $options
        ));
<<<<<<< HEAD
=======

        $log->markAsSent();
    }

    /**
     * Crea un log per una notifica saltata a causa delle condizioni.
     */
    protected function createSkippedNotification(
        Model $recipient,
        NotificationTemplate $template,
        array $data
    ): NotificationLog {
        return NotificationLog::create([
            'template_id' => $template->id,
            'notifiable_type' => get_class($recipient),
            'notifiable_id' => $recipient->getKey(),
            'status' => NotificationLog::STATUS_FAILED,
            'status_message' => 'Saltata per condizioni non soddisfatte',
            'data' => $data,
            'tenant_id' => $template->tenant_id,
        ]);
>>>>>>> 54f4fa16 (.)
    }
}
