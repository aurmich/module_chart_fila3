<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\SmsFactorData;
=======
>>>>>>> 54f4fa16 (.)
use Spatie\QueueableAction\QueueableAction;

final class SendSmsFactorSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    /** @var SmsFactorData */
    private SmsFactorData $smsFactorData;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected ?string $defaultSender = null;
=======
=======
    /** @var string */
>>>>>>> 345f8677 (phpstan)
    private string $token;

    /** @var string */
    private string $baseUrl;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var int */
    protected int $timeout;
<<<<<<< HEAD
    protected ?string $defaultSender;
>>>>>>> 54f4fa16 (.)
=======

    /** @var string|null */
    protected ?string $defaultSender = null;
>>>>>>> 345f8677 (phpstan)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->smsFactorData = SmsFactorData::make();
        
        if (!$this->smsFactorData->token) {
            throw new Exception('Token SMSFactor non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
=======
        $config = config('sms.drivers.smsfactor');
        if (!is_array($config)) {
            throw new Exception('Configurazione SMSFactor non trovata in sms.php');
        }

        $this->token = $config['token'] ?? null;
        if (!is_string($this->token)) {
            throw new Exception('Token SMSFactor non configurato in sms.php');
        }

        $this->baseUrl = $config['base_url'] ?? 'https://api.smsfactor.com';

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
        $this->timeout = (int) config('sms.timeout', 30);
>>>>>>> 54f4fa16 (.)
    }

    /**
     * Execute the action.
     *
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    public function execute(SmsData $smsData): array
    {
<<<<<<< HEAD
        $headers = $this->smsFactorData->getAuthHeaders();

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
=======
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->token,
        ];

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

<<<<<<< HEAD
        if (!Str::startsWith($smsData->to, '+')) {
            $smsData->to = '+39' . $smsData->to;
>>>>>>> 54f4fa16 (.)
=======
        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 345f8677 (phpstan)
        }

        $body = [
            'text' => $smsData->body,
            'sender' => $smsData->from ?? $this->defaultSender,
            'recipients' => [
                [
<<<<<<< HEAD
<<<<<<< HEAD
                    'phone' => $to,
=======
                    'phone' => $smsData->to,
>>>>>>> 54f4fa16 (.)
=======
                    'phone' => $to,
>>>>>>> 345f8677 (phpstan)
                ],
            ],
            'type' => 'sms',
        ];

        $client = new Client([
<<<<<<< HEAD
            'timeout' => $this->smsFactorData->getTimeout(),
=======
            'timeout' => $this->timeout,
>>>>>>> 54f4fa16 (.)
            'headers' => $headers
        ]);

        try {
<<<<<<< HEAD
            $response = $client->post($this->smsFactorData->getBaseUrl() . '/messages', ['json' => $body]);
=======
            $response = $client->post($this->baseUrl . '/messages', ['json' => $body]);
>>>>>>> 54f4fa16 (.)
            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getCode(),
                $clientException
            );
        }
    }
}
