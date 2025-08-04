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
use Modules\Notify\Datas\SMS\NexmoData;
=======
>>>>>>> aurmich/dev
use Spatie\QueueableAction\QueueableAction;

final class SendNexmoSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    /** @var NexmoData */
    private NexmoData $nexmoData;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected ?string $defaultSender = null;
=======
    private string $key;
    private string $secret;
    private string $baseUrl = 'https://rest.nexmo.com/sms/json';
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
    protected ?string $defaultSender;
>>>>>>> aurmich/dev

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->nexmoData = NexmoData::make();
        
        if (!$this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (!$this->nexmoData->secret) {
=======
        $config = config('sms.drivers.nexmo');
        if (!is_array($config)) {
            throw new Exception('Configurazione Nexmo non trovata in sms.php');
        }

        $this->key = $config['key'] ?? null;
        if (!is_string($this->key)) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        $this->secret = $config['secret'] ?? null;
        if (!is_string($this->secret)) {
>>>>>>> aurmich/dev
            throw new Exception('Secret Nexmo non configurato in sms.php');
        }

        // Parametri a livello di root
<<<<<<< HEAD
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
=======
        $this->defaultSender = config('sms.from');
        $this->debug = (bool) config('sms.debug', false);
        $this->timeout = (int) config('sms.timeout', 30);
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
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        // Normalizza il numero di telefono
<<<<<<< HEAD
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
=======
        $smsData->to .= '';
        if (Str::startsWith($smsData->to, '00')) {
            $smsData->to = '+' . mb_substr($smsData->to, 2);
        }

        if (!Str::startsWith($smsData->to, '+')) {
            $smsData->to = '+39' . $smsData->to;
>>>>>>> aurmich/dev
        }

        $from = $smsData->from ?? $this->defaultSender;

        $client = new Client([
<<<<<<< HEAD
            'timeout' => $this->nexmoData->getTimeout(),
=======
            'timeout' => $this->timeout,
>>>>>>> aurmich/dev
            'headers' => $headers
        ]);

        try {
<<<<<<< HEAD
            $response = $client->post($this->nexmoData->getBaseUrl() . '/sms/json', [
                'form_params' => [
                    'api_key' => $this->nexmoData->key,
                    'api_secret' => $this->nexmoData->secret,
                    'to' => $to,
=======
            $response = $client->post($this->baseUrl, [
                'form_params' => [
                    'api_key' => $this->key,
                    'api_secret' => $this->secret,
                    'to' => $smsData->to,
>>>>>>> aurmich/dev
                    'from' => $from,
                    'text' => $smsData->body,
                    'type' => 'unicode'
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
