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
use Modules\Notify\Datas\SMS\TwilioData;
=======
>>>>>>> 54f4fa16 (.)
use Spatie\QueueableAction\QueueableAction;

final class SendTwilioSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    /** @var TwilioData */
    private TwilioData $twilioData;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected ?string $defaultSender = null;
=======
    private string $accountSid;
    private string $authToken;
    private string $baseUrl = 'https://api.twilio.com/2010-04-01';
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
    protected ?string $defaultSender;
>>>>>>> 54f4fa16 (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->twilioData = TwilioData::make();
        
        if (!$this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (!$this->twilioData->auth_token) {
=======
        $config = config('sms.drivers.twilio');
        if (!is_array($config)) {
            throw new Exception('Configurazione Twilio non trovata in sms.php');
        }

        $this->accountSid = $config['account_sid'] ?? null;
        if (!is_string($this->accountSid)) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        $this->authToken = $config['auth_token'] ?? null;
        if (!is_string($this->authToken)) {
>>>>>>> 54f4fa16 (.)
            throw new Exception('Auth Token Twilio non configurato in sms.php');
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
        // Normalizza il numero di telefono
<<<<<<< HEAD
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = '+39' . mb_substr($to, 2);
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
>>>>>>> 54f4fa16 (.)
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Twilio richiede l'autenticazione Basic
        $client = new Client([
<<<<<<< HEAD
            'timeout' => $this->twilioData->getTimeout(),
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token]
        ]);

        $endpoint = $this->twilioData->getBaseUrl() . '/2010-04-01/Accounts/' . $this->twilioData->account_sid . '/Messages.json';
=======
            'timeout' => $this->timeout,
            'auth' => [$this->accountSid, $this->authToken]
        ]);

        $endpoint = $this->baseUrl . '/Accounts/' . $this->accountSid . '/Messages.json';
>>>>>>> 54f4fa16 (.)

        try {
            $response = $client->post($endpoint, [
                'form_params' => [
<<<<<<< HEAD
                    'To' => $to,
=======
                    'To' => $smsData->to,
>>>>>>> 54f4fa16 (.)
                    'From' => $from,
                    'Body' => $smsData->body,
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
