<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\Notify\Datas\SMS\GammuData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;
use function Safe\tempnam;
use function Safe\file_put_contents;
use function Safe\unlink;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev

final class SendGammuSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /** @var GammuData */
    private GammuData $gammuData;

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
    private string $path;

    /** @var string */
    private string $config;

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
        $this->gammuData = GammuData::make();
        
        if (!$this->gammuData->path) {
            throw new Exception('Path Gammu non configurato in sms.php');
        }

        if (!$this->gammuData->config) {
<<<<<<< HEAD
=======
=======
        $config = config('sms.drivers.gammu');
        if (!is_array($config)) {
            throw new Exception('Configurazione Gammu non trovata in sms.php');
        }

        $this->path = $config['path'] ?? '/usr/bin/gammu';
        if (!is_string($this->path)) {
            throw new Exception('Path Gammu non configurato in sms.php');
        }

        $this->config = $config['config'] ?? '/etc/gammurc';
        if (!is_string($this->config)) {
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
            throw new Exception('Config Gammu non configurato in sms.php');
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
            $to = '+' . mb_substr($to, 2);
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
            $to = '+' . mb_substr($to, 2);
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        }

        // Prepara il messaggio per Gammu
        $tempFile = tempnam(sys_get_temp_dir(), 'sms_');
        file_put_contents($tempFile, $smsData->body);

        // Esegue il comando Gammu per inviare l'SMS
        $process = new Process([
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            $this->gammuData->getPath(),
            '-c', $this->gammuData->getConfig(),
            'sendsms',
            'TEXT',
            $to,
<<<<<<< HEAD
=======
=======
            $this->path,
            '-c', $this->config,
            'sendsms',
            'TEXT',
<<<<<<< HEAD
            $smsData->to,
>>>>>>> 54f4fa16 (.)
=======
            $to,
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
            '-text',
            $tempFile
        ]);

<<<<<<< HEAD
        $process->setTimeout($this->gammuData->getTimeout());
=======
<<<<<<< HEAD
        $process->setTimeout($this->gammuData->getTimeout());
=======
        $process->setTimeout($this->timeout);
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev

        try {
            $process->run();

            // Rimuove il file temporaneo
<<<<<<< HEAD
            unlink($tempFile);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            unlink($tempFile);
=======
            @unlink($tempFile);
>>>>>>> 54f4fa16 (.)
=======
            unlink($tempFile);
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev

            if (!$process->isSuccessful()) {
                throw new Exception('Gammu error: ' . $process->getErrorOutput());
            }

            $this->vars['status_code'] = $process->getExitCode();
            $this->vars['status_txt'] = $process->getOutput();

            return $this->vars;
        } catch (Exception $exception) {
            // Rimuove il file temporaneo in caso di errore
<<<<<<< HEAD
            unlink($tempFile);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            unlink($tempFile);
=======
            @unlink($tempFile);
>>>>>>> 54f4fa16 (.)
=======
            unlink($tempFile);
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev

            throw new Exception(
                $exception->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $exception->getCode(),
                $exception
            );
        }
    }
}
