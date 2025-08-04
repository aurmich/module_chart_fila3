<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Notifications\Channels\SmsChannel;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 345f8677 (phpstan)

/**
 * Class SmsNotification
 *
 * Notification class for sending SMS messages through various providers.
 * 
 * @package Modules\Notify\Notifications
 */
class SmsNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The SMS data.
     *
     * @var SmsData
     */
    protected SmsData $smsData;

    /**
     * Additional configuration options.
     *
     * @var array<string, mixed>
     */
    protected array $config;

    /**
     * Create a new notification instance.
     *
     * @param string|SmsData $content The content of the SMS or SmsData object
     * @param array<string, mixed> $config Configuration options including provider
     */
    public function __construct(string|SmsData $content, array $config = [])
    {
        if ($content instanceof SmsData) {
            $this->smsData = $content;
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
            $to = $config['to'] ?? '';
            $from = $config['from'] ?? '';
            
            $this->smsData = new SmsData();
            $this->smsData->body = $content;
            /** @phpstan-ignore-next-line */
            $this->smsData->to = (string) $to;
            /** @phpstan-ignore-next-line */
            $this->smsData->from = (string) $from;
=======
            $this->smsData = new SmsData();
            $this->smsData->body = $content;
            
            if (isset($config['to'])) {
                $this->smsData->to = $config['to'];
            }
            
            if (isset($config['from'])) {
                $this->smsData->from = $config['from'];
            }
>>>>>>> 54f4fa16 (.)
=======
            $to = $config['to'] ?? '';
            $from = $config['from'] ?? '';
            
            $this->smsData = new SmsData();
            $this->smsData->body = $content;
            $this->smsData->to = (string) $to;
            $this->smsData->from = (string) $from;
>>>>>>> 345f8677 (phpstan)
        }
        
        $this->config = $config;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array<int, string>
     */
    public function via(mixed $notifiable): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // TODO: Implementare SmsChannel quando disponibile
        return ['sms'];
=======
        return [SmsChannel::class];
>>>>>>> 54f4fa16 (.)
=======
        // TODO: Implementare SmsChannel quando disponibile
        return ['sms'];
>>>>>>> 345f8677 (phpstan)
    }

    /**
     * Get the SMS representation of the notification.
     *
     * @param mixed $notifiable
     * @return SmsData
     */
    public function toSms(mixed $notifiable): SmsData
    {
        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
<<<<<<< HEAD
<<<<<<< HEAD
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForSms')) {
            $routeResult = $notifiable->routeNotificationForSms($this);
            $this->smsData->to = (string) ($routeResult ?? '');
=======
        if (method_exists($notifiable, 'routeNotificationForSms')) {
            $this->smsData->to = $notifiable->routeNotificationForSms($this);
>>>>>>> 54f4fa16 (.)
=======
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForSms')) {
            $this->smsData->to = (string) $notifiable->routeNotificationForSms($this);
>>>>>>> 345f8677 (phpstan)
        }

        return $this->smsData;
    }

    /**
     * Get the provider configuration for this notification.
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * Get the provider to use for sending the SMS.
     *
     * @return string|null
     */
    public function getProvider(): ?string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $provider = $this->config['provider'] ?? null;
        return is_string($provider) ? $provider : null;
=======
        return $this->config['provider'] ?? null;
>>>>>>> 54f4fa16 (.)
=======
        $provider = $this->config['provider'] ?? null;
        return is_string($provider) ? $provider : null;
>>>>>>> 345f8677 (phpstan)
    }
}
