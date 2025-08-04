<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\preg_replace;
=======
>>>>>>> 54f4fa16 (.)
=======
use function Safe\preg_replace;
>>>>>>> 345f8677 (phpstan)

final class SendNetfunSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    private string $token;

    /** @var string */
    private string $endpoint;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var int */
    protected int $timeout;

    /** @var string|null */
    protected ?string $defaultSender = null;
=======
=======
    /** @var string */
>>>>>>> 345f8677 (phpstan)
    private string $token;

    /** @var string */
    private string $endpoint;

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
     *
     * @throws Exception Se il token API non è configurato
     */
    public function __construct()
    {
        // Recupera la configurazione specifica per il provider Netfun dalla sezione drivers
        $token = config('sms.drivers.netfun.token');
        if (!is_string($token)) {
            throw new Exception('put [NETFUN_TOKEN] variable to your .env and config [sms.drivers.netfun.token]');
        }
        $this->token = $token;
<<<<<<< HEAD
<<<<<<< HEAD
        $endpoint = config('sms.drivers.netfun.api_url', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json');
        $this->endpoint = is_string($endpoint) ? $endpoint : 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? (int) config('sms.timeout', 30) : 30;
=======
        $this->endpoint = config('sms.drivers.netfun.api_url', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json');

=======
        $endpoint = config('sms.drivers.netfun.api_url', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json');
        $this->endpoint = is_string($endpoint) ? $endpoint : 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
>>>>>>> 345f8677 (phpstan)
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
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];

        // Normalizza il numero di telefono
<<<<<<< HEAD
<<<<<<< HEAD
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . mb_substr($to, 2)) : $to;
        }
        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
=======
        $smsData->to .= '';
        if (Str::startsWith($smsData->to, '00')) {
            $smsData->to = '+39' . mb_substr($smsData->to, 2);
        }

        if (!Str::startsWith($smsData->to, '+')) {
            $smsData->to = '+39' . $smsData->to;
>>>>>>> 54f4fa16 (.)
=======
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . mb_substr($to, 2)) : $to;
        }
        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 345f8677 (phpstan)
        }

        $body = [
            'api_token' => $this->token,
<<<<<<< HEAD
<<<<<<< HEAD
            'sender' => $smsData->from ?? $this->defaultSender,
=======
            'sender' => $smsData->from,
>>>>>>> 54f4fa16 (.)
=======
            'sender' => $smsData->from ?? $this->defaultSender,
>>>>>>> 345f8677 (phpstan)
            'text_template' => $smsData->body,
            'async' => true,
            'utf8_enabled' => true,
            'destinations' => [
                [
<<<<<<< HEAD
<<<<<<< HEAD
                    'number' => $to,
=======
                    'number' => $smsData->to,
>>>>>>> 54f4fa16 (.)
=======
                    'number' => $to,
>>>>>>> 345f8677 (phpstan)
                ],
            ],
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($this->endpoint, ['json' => $body]);
        } catch (ClientException $clientException) {
            throw new Exception(
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getCode(),
                $clientException
            );
        }

        $this->vars['status_code'] = $response->getStatusCode();
        $this->vars['status_txt'] = $response->getBody()->getContents();

        return $this->vars;
    }

    /**
     * Normalizza il numero di telefono nel formato E.164
     *
     * @param string $phoneNumber Numero di telefono da normalizzare
     * @return string Numero di telefono normalizzato in formato E.164
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
    /**
     * Normalizza il numero di telefono nel formato E.164
     *
     * @param string $phoneNumber Numero di telefono da normalizzare
     * @return string Numero di telefono normalizzato in formato E.164
     */
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 345f8677 (phpstan)
    protected function normalizePhoneNumber(string $phoneNumber): string
    {
        // Rimuovi tutti i caratteri non numerici tranne il +
        $cleaned = preg_replace('/[^0-9+]/', '', $phoneNumber);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
        
        // Se preg_replace restituisce null (non dovrebbe succedere con input string)
        if (!is_string($cleaned) || $cleaned === '') {
            $cleaned = '';
        }
        
<<<<<<< HEAD
        // Se il numero non inizia con '+'
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
        }
        
=======

=======
>>>>>>> 345f8677 (phpstan)
        // Se il numero non inizia con '+'
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
        }
<<<<<<< HEAD

>>>>>>> 54f4fa16 (.)
=======
        
>>>>>>> 345f8677 (phpstan)
        return $cleaned;
    }
}
