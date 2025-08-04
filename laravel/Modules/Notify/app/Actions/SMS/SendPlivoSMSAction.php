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
use Modules\Notify\Datas\SMS\PlivoData;
=======
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\PlivoData;
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
use Spatie\QueueableAction\QueueableAction;

final class SendPlivoSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /** @var PlivoData */
    private PlivoData $plivoData;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected ?string $defaultSender = null;
<<<<<<< HEAD
=======
=======
=======
    /** @var string */
>>>>>>> 345f8677 (phpstan)
    private string $authId;

    /** @var string */
    private string $authToken;

    /** @var string */
    private string $baseUrl = 'https://api.plivo.com/v1/Account/';

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
>>>>>>> aurmich/dev

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $this->plivoData = PlivoData::make();
        
        if (!$this->plivoData->auth_id) {
            throw new Exception('Auth ID Plivo non configurato in sms.php');
        }

        if (!$this->plivoData->auth_token) {
<<<<<<< HEAD
=======
=======
        $config = config('sms.drivers.plivo');
        if (!is_array($config)) {
            throw new Exception('Configurazione Plivo non trovata in sms.php');
        }

        $this->authId = $config['auth_id'] ?? null;
        if (!is_string($this->authId)) {
            throw new Exception('Auth ID Plivo non configurato in sms.php');
        }

        $this->authToken = $config['auth_token'] ?? null;
        if (!is_string($this->authToken)) {
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
            throw new Exception('Auth Token Plivo non configurato in sms.php');
        }

        // Parametri a livello di root
<<<<<<< HEAD
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
=======
        $this->defaultSender = config('sms.from');
=======
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
>>>>>>> 345f8677 (phpstan)
        $this->debug = (bool) config('sms.debug', false);
        $this->timeout = (int) config('sms.timeout', 30);
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
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
        // Normalizza il numero di telefono
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
<<<<<<< HEAD
=======
=======
        $smsData->to .= '';
        if (Str::startsWith($smsData->to, '00')) {
            $smsData->to = '+' . mb_substr($smsData->to, 2);
        }

        if (!Str::startsWith($smsData->to, '+')) {
            $smsData->to = '+39' . $smsData->to;
>>>>>>> 54f4fa16 (.)
=======
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Plivo richiede l'autenticazione Basic
        $client = new Client([
<<<<<<< HEAD
            'timeout' => $this->plivoData->getTimeout(),
            'auth' => [$this->plivoData->auth_id, $this->plivoData->auth_token],
=======
<<<<<<< HEAD
            'timeout' => $this->plivoData->getTimeout(),
            'auth' => [$this->plivoData->auth_id, $this->plivoData->auth_token],
=======
            'timeout' => $this->timeout,
            'auth' => [$this->authId, $this->authToken],
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);

<<<<<<< HEAD
        $endpoint = $this->plivoData->getBaseUrl() . '/v1/Account/' . $this->plivoData->auth_id . '/Message/';
=======
<<<<<<< HEAD
        $endpoint = $this->plivoData->getBaseUrl() . '/v1/Account/' . $this->plivoData->auth_id . '/Message/';
=======
        $endpoint = $this->baseUrl . $this->authId . '/Message/';
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev

        try {
            $response = $client->post($endpoint, [
                'json' => [
                    'src' => $from,
<<<<<<< HEAD
                    'dst' => $to,
=======
<<<<<<< HEAD
<<<<<<< HEAD
                    'dst' => $to,
=======
                    'dst' => $smsData->to,
>>>>>>> 54f4fa16 (.)
=======
                    'dst' => $to,
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
                    'text' => $smsData->body,
                ]
            ]);

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
