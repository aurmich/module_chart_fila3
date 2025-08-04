<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\GammuData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;
use function Safe\tempnam;
use function Safe\file_put_contents;
use function Safe\unlink;
=======
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;
>>>>>>> aurmich/dev

final class SendGammuSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    /** @var GammuData */
    private GammuData $gammuData;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected ?string $defaultSender = null;
=======
    private string $path;
    private string $config;
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
        $this->gammuData = GammuData::make();
        
        if (!$this->gammuData->path) {
            throw new Exception('Path Gammu non configurato in sms.php');
        }

        if (!$this->gammuData->config) {
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
>>>>>>> aurmich/dev
            throw new Exception('Config Gammu non configurato in sms.php');
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
        // Normalizza il numero di telefono
<<<<<<< HEAD
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = '+' . mb_substr($to, 2);
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

        // Prepara il messaggio per Gammu
        $tempFile = tempnam(sys_get_temp_dir(), 'sms_');
        file_put_contents($tempFile, $smsData->body);

        // Esegue il comando Gammu per inviare l'SMS
        $process = new Process([
<<<<<<< HEAD
            $this->gammuData->getPath(),
            '-c', $this->gammuData->getConfig(),
            'sendsms',
            'TEXT',
            $to,
=======
            $this->path,
            '-c', $this->config,
            'sendsms',
            'TEXT',
            $smsData->to,
>>>>>>> aurmich/dev
            '-text',
            $tempFile
        ]);

<<<<<<< HEAD
        $process->setTimeout($this->gammuData->getTimeout());
=======
        $process->setTimeout($this->timeout);
>>>>>>> aurmich/dev

        try {
            $process->run();

            // Rimuove il file temporaneo
<<<<<<< HEAD
            unlink($tempFile);
=======
            @unlink($tempFile);
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
            @unlink($tempFile);
>>>>>>> aurmich/dev

            throw new Exception(
                $exception->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $exception->getCode(),
                $exception
            );
        }
    }
}
