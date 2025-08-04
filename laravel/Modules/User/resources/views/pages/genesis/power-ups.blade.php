<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<x-layouts.marketing>

=======
=======
>>>>>>> b0db4ea8 (fixes)
<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Http;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use function Laravel\Folio\{name};
use Livewire\Volt\Component;
<<<<<<< HEAD

$component = new class extends Component
{
    /** @var array<int, mixed> */
    public array $powerups = [];
    
    /** @var array<int, mixed>|null */
    public ?array $powerupsJSON = null;

    /**
     * Initialize the component and load power-ups data.
     *
=======
use Webmozart\Assert\Assert;

/**
 * Power-ups management component for Genesis framework integration.
 * 
 * Gestisce il caricamento, visualizzazione e installazione dei power-ups
 * seguendo i pattern di qualità PHPStan livello 10 e le best practice del modulo User.
 * Implementa la Generic Moderation Strategy con activity logging e error handling robusto.
 * 
 * @property array<int, mixed> $powerups
 * @property array<int, mixed>|null $powerupsJSON
 */
$component = new class extends Component
{
    /** 
     * Lista dei power-ups caricati dal file JSON.
     * 
     * @var array<int, mixed> 
     */
    public array $powerups = [];
    
    /** 
     * Dati JSON raw dei power-ups per debugging.
     * 
     * @var array<int, mixed>|null 
     */
    public ?array $powerupsJSON = null;

    /**
     * Timeout per operazioni HTTP (sicurezza).
     */
    private const HTTP_TIMEOUT = 30;

    /**
     * Path base per i file Genesis.
     */
    private const GENESIS_BASE_PATH = '/genesis';

    /**
     * Inizializza la componente e carica i dati dei power-ups.
     * Implementa error handling robusto e activity logging.
     * 
>>>>>>> b0db4ea8 (fixes)
     * @return void
     */
    public function mount(): void
    {
        try {
<<<<<<< HEAD
            $powerupsPath = public_path('/genesis/power-ups.json');
            
            if (!File::exists($powerupsPath)) {
                Log::warning('Power-ups JSON file not found', ['path' => $powerupsPath]);
                $this->powerupsJSON = [];
                return;
            }

            $jsonContent = File::get($powerupsPath);
            $decoded = json_decode($jsonContent, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid JSON in power-ups file', [
                    'error' => json_last_error_msg(),
                    'path' => $powerupsPath
                ]);
                $this->powerupsJSON = [];
                return;
            }

            $this->powerupsJSON = is_array($decoded) ? $decoded : [];
            
            if (is_array($this->powerupsJSON)) {
                foreach ($this->powerupsJSON as $powerup) {
                    if (is_array($powerup) && !empty($powerup)) {
                        $repo = array_key_first($powerup);
                        if ($repo !== null && is_string($repo)) {
                            $installed = $powerup[$repo] ?? false;
                            $powerupData = $this->fetchPowerup($repo, $installed);
                            if (!empty($powerupData)) {
                                $this->powerups[] = $powerupData;
                            }
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            Log::error('Error loading power-ups', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->powerupsJSON = [];
            $this->powerups = [];
=======
            $this->loadPowerupsConfiguration();
            
            // Activity logging per audit trail
            activity()
                ->withProperties([
                    'powerups_count' => count($this->powerups),
                    'ip_address' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                ])
                ->log('Power-ups component mounted successfully');
                
        } catch (\Exception $e) {
            Log::error('Power-ups component mount failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'ip' => request()->ip(),
            ]);
            
            // Fallback sicuro
            $this->powerups = [];
            $this->powerupsJSON = null;
            
            session()->flash('error', 'Errore nel caricamento dei power-ups: ' . $e->getMessage());
        }
    }

    /**
     * Carica la configurazione dei power-ups dal file JSON.
     * Implementa validazione rigorosa e gestione errori.
     * 
     * @return void
     * @throws \InvalidArgumentException
     */
    private function loadPowerupsConfiguration(): void
    {
        $filePath = public_path(self::GENESIS_BASE_PATH . '/power-ups.json');
        
        if (!File::exists($filePath)) {
            Log::warning('Power-ups JSON file not found', ['path' => $filePath]);
            throw new \InvalidArgumentException("Power-ups configuration file not found at: {$filePath}");
        }

        try {
            $jsonContent = File::get($filePath);
            Assert::string($jsonContent);
            Assert::stringNotEmpty($jsonContent, 'Power-ups JSON file is empty');
            
            $decoded = json_decode($jsonContent, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON in power-ups file: ' . json_last_error_msg());
            }
            
            Assert::isArray($decoded, 'Power-ups JSON must decode to an array');
            
            // Validazione struttura JSON
            $this->validatePowerupsStructure($decoded);
            
            /** @var array<int, mixed> $validatedPowerups */
            $validatedPowerups = $decoded;
            
            $this->powerupsJSON = $validatedPowerups;
            $this->powerups = $this->processPowerupsData($validatedPowerups);
            
            Log::info('Power-ups configuration loaded successfully', [
                'count' => count($this->powerups),
                'file_path' => $filePath,
            ]);
            
        } catch (\Exception $e) {
            Log::error('Failed to load power-ups configuration', [
                'error' => $e->getMessage(),
                'file_path' => $filePath,
                'trace' => $e->getTraceAsString(),
            ]);
            
            throw $e;
>>>>>>> b0db4ea8 (fixes)
        }
    }

    /**
<<<<<<< HEAD
     * Fetch power-up data from GitHub repository.
     *
     * @param string $repo
     * @param mixed $installed
     * @return array<string, mixed>|object|null
     */
    protected function fetchPowerup(string $repo, mixed $installed): array|object|null
    {
        try {
            $response = Http::timeout(10)->get('https://raw.githubusercontent.com/' . $repo . '/main/powerup.json');
            
            if ($response->successful()) {
                $powerupData = $response->json();
                if (is_array($powerupData)) {
                    $powerup = (object) $powerupData;
                    $powerup->repo = $repo;
                    $powerup->installed = $installed;
                    return $powerup;
                }
            } else {
                Log::warning('Failed to fetch power-up data', [
                    'repo' => $repo,
                    'status' => $response->status()
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Error fetching power-up', [
                'repo' => $repo,
                'error' => $e->getMessage()
            ]);
        }
        
        return null;
    }

    /**
     * Install a power-up with comprehensive error handling.
     *
     * @param string $repo
     * @param int $index
     * @return \Illuminate\Http\RedirectResponse
     */
    public function install(string $repo, int $index): \Illuminate\Http\RedirectResponse
    {
        try {
            // Update powerups JSON to mark as installed
            if (is_array($this->powerupsJSON)) {
                foreach ($this->powerupsJSON as $powerUpIndex => $powerup) {
                    if (is_array($powerup) && array_key_first($powerup) === $repo) {
                        if (is_array($this->powerupsJSON[$powerUpIndex])) {
                            $this->powerupsJSON[$powerUpIndex][$repo] = true;
                        }
                    }
                }
            }

            // Save updated JSON file
            $filePath = public_path('/genesis/power-ups.json');
            $jsonContent = json_encode($this->powerupsJSON, JSON_PRETTY_PRINT);
            
            if ($jsonContent !== false) {
                File::put($filePath, $jsonContent);
            } else {
                throw new \RuntimeException('Failed to encode power-ups JSON');
            }

            // Run installation command
            Artisan::call('powerup:install ' . $repo);

            // Execute post-installation commands and factories
            if (isset($this->powerups[$index]) && is_object($this->powerups[$index])) {
                $this->executePostInstallActions($this->powerups[$index], $index);
            }

            session()->flash('power-up-install', 'success');
            
            Log::info('Power-up installed successfully', [
                'repo' => $repo,
                'index' => $index
            ]);

        } catch (\Exception $e) {
            Log::error('Power-up installation failed', [
                'repo' => $repo,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            session()->flash('power-up-install', 'error');
            session()->flash('power-up-error', 'Installation failed: ' . $e->getMessage());
        }

        return redirect()->to('/genesis/power-ups');
    }

    /**
     * Execute post-installation actions for a power-up.
     *
     * @param object $powerup
     * @param int $index
     * @return void
     */
    private function executePostInstallActions(object $powerup, int $index): void
    {
        $run = $powerup->run_after_install ?? null;
        
        if (!is_array($run)) {
            return;
        }

        // Execute commands
        if (isset($run['commands']) && is_array($run['commands'])) {
            foreach ($run['commands'] as $command) {
                if (is_string($command)) {
                    try {
                        Artisan::call($command);
                        Log::info('Executed post-install command', ['command' => $command]);
                    } catch (\Exception $e) {
                        Log::error('Failed to execute post-install command', [
                            'command' => $command,
                            'error' => $e->getMessage()
                        ]);
                    }
                }
            }
        }

        // Execute factories
        if (isset($run['factories']) && is_array($run['factories'])) {
            foreach ($run['factories'] as $factory) {
                if (is_array($factory) && isset($factory['model'], $factory['count'])) {
                    $model = $factory['model'];
                    $count = $factory['count'];
                    
                    if (is_string($model) && is_int($count) && class_exists($model)) {
                        try {
                            $factoryInstance = $model::factory($count);
                            if (is_object($factoryInstance) && method_exists($factoryInstance, 'create')) {
                                $factoryInstance->create();
                                Log::info('Created factory instances', [
                                    'model' => $model,
                                    'count' => $count
                                ]);
                            }
                        } catch (\Throwable $e) {
                            Log::error('Failed to create factory instances', [
                                'model' => $model,
                                'count' => $count,
                                'error' => $e->getMessage()
                            ]);
                        }
                    }
                }
            }
        }
    }
=======
     * Valida la struttura dei dati power-ups.
     * Implementa validazione type-safe seguendo PHPStan level 10.
     * 
     * @param array<mixed> $data
     * @return void
     * @throws \InvalidArgumentException
     */
    private function validatePowerupsStructure(array $data): void
    {
        foreach ($data as $index => $powerup) {
            Assert::isArray($powerup, "Power-up at index {$index} must be an array");
            
            // Validazione campi obbligatori
            $requiredFields = ['name', 'description', 'version', 'repository'];
            foreach ($requiredFields as $field) {
                Assert::keyExists($powerup, $field, "Power-up at index {$index} missing required field: {$field}");
                Assert::stringNotEmpty($powerup[$field], "Power-up field {$field} cannot be empty at index {$index}");
            }
            
            // Validazione campi opzionali con tipi corretti
            if (isset($powerup['dependencies'])) {
                Assert::isArray($powerup['dependencies'], "Dependencies must be an array at index {$index}");
            }
            
            if (isset($powerup['commands'])) {
                Assert::isArray($powerup['commands'], "Commands must be an array at index {$index}");
            }
        }
    }

    /**
     * Processa i dati dei power-ups per l'utilizzo nell'interfaccia.
     * Implementa sanitizzazione e arricchimento dati.
     * 
     * @param array<int, mixed> $rawData
     * @return array<int, mixed>
     */
    private function processPowerupsData(array $rawData): array
    {
        /** @var array<int, mixed> $processed */
        $processed = [];
        
        foreach ($rawData as $index => $powerup) {
            try {
                Assert::isArray($powerup);
                
                /** @var array<string, mixed> $processedPowerup */
                $processedPowerup = [
                    'id' => $index,
                    'name' => trim((string)$powerup['name']),
                    'description' => trim((string)$powerup['description']),
                    'version' => trim((string)$powerup['version']),
                    'repository' => trim((string)$powerup['repository']),
                    'dependencies' => $powerup['dependencies'] ?? [],
                    'commands' => $powerup['commands'] ?? [],
                    'status' => 'available',
                    'installed' => false,
                ];
                
                // Verifica se il power-up è già installato
                $processedPowerup['installed'] = $this->checkPowerupInstallation($processedPowerup['name']);
                $processedPowerup['status'] = $processedPowerup['installed'] ? 'installed' : 'available';
                
                $processed[] = $processedPowerup;
                
            } catch (\Exception $e) {
                Log::warning('Failed to process power-up', [
                    'index' => $index,
                    'error' => $e->getMessage(),
                    'powerup' => $powerup,
                ]);
                
                // Continua con il prossimo power-up invece di fallire completamente
                continue;
            }
        }
        
        return $processed;
    }

    /**
     * Verifica se un power-up è già installato nel sistema.
     * Implementa controlli sicuri per evitare false positive.
     * 
     * @param string $powerupName
     * @return bool
     */
    private function checkPowerupInstallation(string $powerupName): bool
    {
        try {
            Assert::stringNotEmpty($powerupName);
            
            // Controlla se esiste una cartella del modulo
            $modulePath = base_path("Modules/{$powerupName}");
            
            if (File::isDirectory($modulePath)) {
                // Verifica ulteriore: controlla se esiste il file composer.json del modulo
                $composerPath = $modulePath . '/composer.json';
                return File::exists($composerPath);
            }
            
            return false;
            
        } catch (\Exception $e) {
            Log::warning('Failed to check power-up installation', [
                'powerup_name' => $powerupName,
                'error' => $e->getMessage(),
            ]);
            
            return false;
        }
    }

    /**
     * Installa un power-up specifico.
     * Implementa processo di installazione sicuro con timeout e rollback.
     * 
     * @param array<string, mixed> $powerup
     * @return void
     */
    public function installPowerup(array $powerup): void
    {
        try {
            Assert::keyExists($powerup, 'name');
            Assert::keyExists($powerup, 'repository');
            
            /** @var string $name */
            $name = $powerup['name'];
            /** @var string $repository */
            $repository = $powerup['repository'];
            
            Assert::stringNotEmpty($name);
            Assert::stringNotEmpty($repository);
            
            // Verifica se già installato
            if ($this->checkPowerupInstallation($name)) {
                session()->flash('warning', "Power-up '{$name}' è già installato.");
                return;
            }
            
            // Configurazione timeout per operazioni
            $originalTimeout = ini_get('default_socket_timeout');
            ini_set('default_socket_timeout', (string)self::HTTP_TIMEOUT);
            
            try {
                // Scarica metadata del repository
                $metadata = $this->fetchRepositoryMetadata($repository);
                
                // Processo di installazione con steps
                $this->executeInstallationSteps($powerup, $metadata);
                
                // Activity logging per audit trail
                activity()
                    ->withProperties([
                        'powerup_name' => $name,
                        'repository' => $repository,
                        'ip_address' => request()->ip(),
                        'user_agent' => request()->userAgent(),
                    ])
                    ->log("Power-up '{$name}' installed successfully");
                
                session()->flash('success', "Power-up '{$name}' installato con successo!");
                
                // Ricarica la lista
                $this->mount();
                
            } finally {
                // Ripristina timeout originale
                if ($originalTimeout !== false) {
                    ini_set('default_socket_timeout', $originalTimeout);
                }
            }
            
        } catch (\Exception $e) {
            Log::error('Power-up installation failed', [
                'powerup' => $powerup,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            
            // Activity logging per errori
            activity()
                ->withProperties([
                    'powerup_name' => $powerup['name'] ?? 'unknown',
                    'error' => $e->getMessage(),
                    'ip_address' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                ])
                ->log('Power-up installation failed');
            
            session()->flash('error', 'Errore durante l\'installazione: ' . $e->getMessage());
        }
    }

    /**
     * Scarica i metadata del repository GitHub.
     * Implementa gestione sicura delle richieste HTTP.
     * 
     * @param string $repository
     * @return array<string, mixed>
     * @throws \Exception
     */
    private function fetchRepositoryMetadata(string $repository): array
    {
        try {
            $response = Http::timeout(self::HTTP_TIMEOUT)
                ->retry(3, 1000)
                ->get("https://api.github.com/repos/{$repository}");
            
            if (!$response->successful()) {
                throw new \Exception("Failed to fetch repository metadata: HTTP {$response->status()}");
            }
            
            /** @var array<string, mixed> $metadata */
            $metadata = $response->json();
            
            Assert::isArray($metadata);
            Assert::keyExists($metadata, 'clone_url');
            
            return $metadata;
            
        } catch (\Exception $e) {
            Log::error('Failed to fetch repository metadata', [
                'repository' => $repository,
                'error' => $e->getMessage(),
            ]);
            
            throw new \Exception("Could not fetch repository metadata for '{$repository}': " . $e->getMessage());
        }
    }

    /**
     * Esegue gli step di installazione del power-up.
     * Implementa processo robusto con gestione errori e rollback.
     * 
     * @param array<string, mixed> $powerup
     * @param array<string, mixed> $metadata
     * @return void
     * @throws \Exception
     */
    private function executeInstallationSteps(array $powerup, array $metadata): void
    {
        /** @var string $name */
        $name = $powerup['name'];
        
        try {
            // Step 1: Clona il repository
            $this->cloneRepository($metadata['clone_url'], $name);
            
            // Step 2: Installa dipendenze
            $this->installDependencies($powerup);
            
            // Step 3: Esegui comandi post-installazione
            $this->executePostInstallCommands($powerup);
            
            // Step 4: Esegui factories se presenti
            $this->executeFactories($name);
            
            Log::info('Power-up installation completed', [
                'name' => $name,
                'steps_completed' => ['clone', 'dependencies', 'commands', 'factories'],
            ]);
            
        } catch (\Exception $e) {
            // Rollback in caso di errore
            $this->rollbackInstallation($name);
            throw $e;
        }
    }

    /**
     * Clona il repository del power-up.
     * 
     * @param string $cloneUrl
     * @param string $name
     * @return void
     * @throws \Exception
     */
    private function cloneRepository(string $cloneUrl, string $name): void
    {
        $targetPath = base_path("Modules/{$name}");
        
        if (File::isDirectory($targetPath)) {
            File::deleteDirectory($targetPath);
        }
        
        $command = "git clone {$cloneUrl} {$targetPath}";
        $result = shell_exec($command . ' 2>&1');
        
        if (!File::isDirectory($targetPath)) {
            throw new \Exception("Failed to clone repository: {$result}");
        }
    }

    /**
     * Installa le dipendenze del power-up.
     * 
     * @param array<string, mixed> $powerup
     * @return void
     */
    private function installDependencies(array $powerup): void
    {
        if (empty($powerup['dependencies'])) {
            return;
        }
        
        foreach ($powerup['dependencies'] as $dependency) {
            if (is_string($dependency)) {
                $this->installSingleDependency($dependency);
            }
        }
    }

    /**
     * Installa una singola dipendenza.
     * 
     * @param string $dependency
     * @return void
     */
    private function installSingleDependency(string $dependency): void
    {
        try {
            $command = "composer require {$dependency}";
            $result = shell_exec($command . ' 2>&1');
            
            Log::info('Dependency installed', [
                'dependency' => $dependency,
                'result' => $result,
            ]);
            
        } catch (\Exception $e) {
            Log::warning('Failed to install dependency', [
                'dependency' => $dependency,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Esegue comandi post-installazione.
     * 
     * @param array<string, mixed> $powerup
     * @return void
     */
    private function executePostInstallCommands(array $powerup): void
    {
        if (empty($powerup['commands'])) {
            return;
        }
        
        foreach ($powerup['commands'] as $command) {
            if (is_string($command)) {
                $this->executeSafeCommand($command);
            }
        }
    }

    /**
     * Esegue un comando in modo sicuro.
     * 
     * @param string $command
     * @return void
     */
    private function executeSafeCommand(string $command): void
    {
        try {
            // Lista comandi sicuri consentiti
            $allowedCommands = [
                'php artisan',
                'composer',
                'npm',
                'yarn',
            ];
            
            $isSafe = false;
            foreach ($allowedCommands as $allowed) {
                if (str_starts_with(trim($command), $allowed)) {
                    $isSafe = true;
                    break;
                }
            }
            
            if (!$isSafe) {
                Log::warning('Command blocked for security', ['command' => $command]);
                return;
            }
            
            Artisan::call($command);
            
            Log::info('Command executed', [
                'command' => $command,
                'output' => Artisan::output(),
            ]);
            
        } catch (\Exception $e) {
            Log::warning('Command execution failed', [
                'command' => $command,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Esegue le factories del power-up.
     * 
     * @param string $name
     * @return void
     */
    private function executeFactories(string $name): void
    {
        try {
            $factoryPath = base_path("Modules/{$name}/database/factories");
            
            if (File::isDirectory($factoryPath)) {
                Artisan::call('db:seed', [
                    '--class' => "Modules\\{$name}\\Database\\Seeders\\DatabaseSeeder",
                ]);
                
                Log::info('Factories executed', [
                    'powerup' => $name,
                    'output' => Artisan::output(),
                ]);
            }
            
        } catch (\Exception $e) {
            Log::warning('Factory execution failed', [
                'powerup' => $name,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Rollback dell'installazione in caso di errore.
     * 
     * @param string $name
     * @return void
     */
    private function rollbackInstallation(string $name): void
    {
        try {
            $targetPath = base_path("Modules/{$name}");
            
            if (File::isDirectory($targetPath)) {
                File::deleteDirectory($targetPath);
                
                Log::info('Installation rolled back', [
                    'powerup' => $name,
                    'path' => $targetPath,
                ]);
            }
            
        } catch (\Exception $e) {
            Log::error('Rollback failed', [
                'powerup' => $name,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Renderizza la componente.
     * 
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('user::pages.genesis.power-ups');
    }
>>>>>>> b0db4ea8 (fixes)
};

name('genesis.power-ups');

?>

<<<<<<< HEAD
<x-layouts.marketing>
<<<<<<< HEAD


>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    @volt('genesis-powerups')
    <div class="w-full">
        <x-ui.marketing.breadcrumbs :crumbs="[['text' => 'Power-ups']]" />
        <x-ui.marketing.page-header 
            title="Power-Ups" 
            description="Power-ups offer additional features to help you supercharge the beginning of your application journey." 
        />

        <div class="w-full max-w-6xl px-8 mx-auto">
            {{-- Warning Notice --}}
            <div class="relative w-full p-6 pl-12 text-yellow-700 border border-yellow-200 rounded-lg dark:border-transparent dark:bg-yellow-500 dark:text-white bg-yellow-50">
                <svg class="absolute w-5 h-5 -translate-x-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                <div class="text-sm opacity-80 dark:opacity-100">
                    Before deploying to production you will want to remove the `pages/genesis` folder. 
                    These power-ups should only be installed with a new local app.
                </div>
            </div>

            {{-- Success Message --}}
            @if (session()->has('power-up-install') && session('power-up-install') === 'success')
            <div class="relative w-full p-6 pl-12 mt-8 text-green-700 border border-green-200 rounded-lg dark:border-transparent dark:bg-green-500 dark:text-white bg-green-50">
                <svg class="absolute w-5 h-5 -translate-x-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="text-sm opacity-80 dark:opacity-100">
                    Successfully Installed Power-Up. Please restart your asset watcher to include updated classes and styles.
                </div>
            </div>
            @endif

<<<<<<< HEAD
            <div class="grid w-full grid-cols-3 gap-8 mt-8">
<<<<<<< HEAD
=======

>>>>>>> 54f4fa16 (.)
=======
            {{-- Error Message --}}
            @if (session()->has('power-up-install') && session('power-up-install') === 'error')
            <div class="relative w-full p-6 pl-12 mt-8 text-red-700 border border-red-200 rounded-lg dark:border-transparent dark:bg-red-500 dark:text-white bg-red-50">
                <svg class="absolute w-5 h-5 -translate-x-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9 2.25a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="text-sm opacity-80 dark:opacity-100">
                    {{ session('power-up-error', 'Power-up installation failed. Please check the logs for more details.') }}
                </div>
            </div>
            @endif

            {{-- Power-ups Grid --}}
            <div class="grid w-full grid-cols-3 gap-8 mt-8">
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
                @foreach ($powerups as $index => $powerup)
                <x-ui.slide-over title="{{ $powerup->name }}" name="power-up-details-{{ $index }}" focusable>
                    <x-slot:trigger>
                        <div class="p-3 transition-transform duration-300 bg-white border shadow-sm cursor-pointer group dark:bg-gray-900 rounded-xl hover:-translate-y-1 hover:shadow-xl border-slate-100 dark:border-white/10">
                            <img src="{{ $powerup->cover }}" class="w-full h-auto rounded-md" alt="{{ $powerup->name }} Cover" />
                            <span class="flex flex-col justify-start px-1 py-2">
                                <span class="line-clamp-1 pt-2.5 text-lg font-semibold flex items-center dark:text-white space-x-1.5">
                                    <span class="flex items-center justify-center text-lg">📝</span>
                                    <span>{{ $powerup->name }}</span>
                                </span>
                                <p class="block pt-1.5 pb-3 text-sm text-left line-clamp-2 text-slate-800/60 dark:text-white/50">
                                    {{ $powerup->description }}
                                </p>
                                @if ($powerup->installed)
                                <div class="flex items-center justify-start pb-3">
                                    <span class="flex items-center w-auto px-2 py-1 text-xs text-white bg-green-500 rounded-md">
                                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                        <span>Installed</span>
                                    </span>
                                </div>
                                @endif
                                <x-ui.button type="secondary" rounded="md">View Details</x-ui.button>
                            </span>
                        </div>
                    </x-slot:trigger>
                    
                    {{-- Power-up Details --}}
                    <div class="relative space-y-4">
                        <img src="{{ $powerup->cover }}" class="w-full h-auto rounded-md" alt="{{ $powerup->name }} Cover" />
                        
                        {{-- Badges for included components --}}
                        <div class="flex items-center justify-start space-x-2">
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 54f4fa16 (.)
                            @if (in_array('pages', $powerup->includes))
                            <x-ui.badge background="bg-blue-100 dark:bg-blue-600" color="text-blue-600 dark:text-white"><svg class="relative w-3.5 h-3.5 mr-1 opacity-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
=======
                            @if (in_array('pages', $powerup->includes ?? []))
                            <x-ui.badge background="bg-blue-100 dark:bg-blue-600" color="text-blue-600 dark:text-white">
                                <svg class="relative w-3.5 h-3.5 mr-1 opacity-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
                                    <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
                                    <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                                </svg>
                                <span>Pages</span>
                            </x-ui.badge>
                            @endif
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
                            @if (in_array('models', $powerup->includes))
                            <x-ui.badge background="bg-purple-100 dark:bg-purple-600" color="text-purple-600 dark:text-white"><svg class="relative w-3.5 h-3.5 mr-1 opacity-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
=======
                            @if (in_array('models', $powerup->includes ?? []))
                            <x-ui.badge background="bg-purple-100 dark:bg-purple-600" color="text-purple-600 dark:text-white">
                                <svg class="relative w-3.5 h-3.5 mr-1 opacity-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
                                    <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd" />
                                </svg>
                                <span>Models</span>
                            </x-ui.badge>
                            @endif
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
                            @if (in_array('migrations', $powerup->includes))
                            <x-ui.badge background="bg-amber-100 dark:bg-amber-600" color="text-amber-600 dark:text-white"><svg class="relative w-3.5 h-3.5 mr-0.5 opacity-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
=======
                            @if (in_array('migrations', $powerup->includes ?? []))
                            <x-ui.badge background="bg-amber-100 dark:bg-amber-600" color="text-amber-600 dark:text-white">
                                <svg class="relative w-3.5 h-3.5 mr-0.5 opacity-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
                                    <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z" />
                                    <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z" />
                                    <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z" />
                                    <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z" />
                                </svg>
                                <span>Migrations</span>
                            </x-ui.badge>
                            @endif
                        </div>

                        {{-- GitHub Repository Link --}}
                        <div class="pb-3">
                            <a href="https://github.com/{{ $powerup->repo }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-start px-3 py-1.5 space-x-1 text-xs font-normal rounded-full bg-slate-100 dark:text-slate-100 dark:bg-gray-800 text-slate-700">
                                <svg class="flex w-5 h-5 -ml-1 fill-current" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="underline">https://github.com/{{ $powerup->repo }}</span>
                            </a>
                        </div>

                        {{-- Power-up Details --}}
                        <div class="pt-5 prose-sm prose border-t dark:prose-invert border-slate-200 dark:border-gray-800">
                            @if (!empty($powerup->pages ?? []))
                            <h3>Pages Included</h3>
                            <ul>
                                @foreach ($powerup->pages as $page)
                                <li class="font-mono">{{ $page }}</li>
                                @endforeach
                            </ul>
                            @endif

                            @if (!empty($powerup->models ?? []))
                            <h3>Models Included</h3>
                            <ul>
                                @foreach ($powerup->models as $model)
                                <li class="font-mono">{{ $model }}</li>
                                @endforeach
                            </ul>
                            @endif

                            @if (!empty($powerup->tables ?? []))
                            <h3>Tables Included</h3>
                            <ul>
                                @foreach ($powerup->tables as $table)
                                <li class="font-mono">{{ $table }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>

                        {{-- Install Button --}}
                        @if (!$powerup->installed)
                        <div class="fixed bottom-0 right-0 z-30 w-full max-w-md p-4 bg-white border-t border-gray-200 dark:border-gray-800 dark:bg-gray-900">
                            <x-ui.button wire:click="install('{{ $powerup->repo }}', '{{ $index }}')" type="success" rounded="md">
                                <span class="mr-1.5">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                                    <svg wire:loading class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
>>>>>>> 54f4fa16 (.)
=======
                                    <svg wire:loading class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
                                    <svg wire:loading class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
=======
                                    <svg wire:loading class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
>>>>>>> aurmich/dev
=======
                                    <svg wire:loading class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
                                    <svg wire:loading class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <svg wire:loading.remove class="w-5 h-5 text-white fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" class="signal-icon-wrapper" stroke="none">
                                            <path d="M18.2502 20.25C19.3548 20.25 20.2502 19.3546 20.2502 18.25L20.2501 9.45157C20.2501 8.99742 20.0955 8.5568 19.8118 8.20217L16.8505 4.50059C16.4709 4.02617 15.8963 3.75 15.2888 3.75L5.75 3.75C4.64543 3.75 3.75 4.64543 3.75 5.75V18.25C3.75 19.3546 4.64543 20.25 5.75 20.25H18.2502Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15.25 8C12.6715 8 11.0903 8 8.75041 8C8.19813 8 7.75 7.55228 7.75 7L7.75 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.75 20.25V14.5C7.75 13.6716 8.42157 13 9.25 13H14.75C15.5784 13 16.25 13.6716 16.25 14.5V20.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span>Install Power-up</span>
                            </x-ui.button>
                        </div>
                        @else
                        <div class="fixed bottom-0 right-0 z-30 w-full max-w-md p-4 bg-white border-t border-gray-200 dark:border-gray-800 dark:bg-gray-900">
                            <div class="flex items-center justify-center px-4 py-2 text-green-600 bg-green-100 rounded-md dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                                <span>Already Installed</span>
                            </div>
                        </div>
                        @endif
                    </div>
                </x-ui.slide-over>
                @endforeach

                {{-- Coming Soon Card --}}
                <div class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-dashed rounded-md border-gray-200/70 dark:border-slate-700 dark:bg-gray-800/50 dark:text-gray-400">
                    More Power-ups coming soon.
                </div>
            </div>
        </div>
    </div>
    @endvolt
<<<<<<< HEAD
<<<<<<< HEAD
</x-layouts.marketing>
=======
</x-layouts.marketing>
>>>>>>> aurmich/dev
=======
</x-layouts.marketing>
>>>>>>> 54f4fa16 (.)
=======
 
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
=======
<div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg p-6">
                
                <!-- Header -->
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Genesis Power-ups</h1>
                    <p class="mt-2 text-sm text-gray-600">
                        Gestione e installazione dei power-ups per estendere le funzionalità del sistema.
                    </p>
                </div>

                <!-- Flash Messages -->
                @if (session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('warning'))
                    <div class="mb-4 bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                        {{ session('warning') }}
                    </div>
                @endif

                <!-- Power-ups Grid -->
                @if(!empty($powerups))
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($powerups as $powerup)
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            {{ $powerup['name'] }}
                                        </h3>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                            {{ $powerup['installed'] ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                            {{ $powerup['status'] }}
                                        </span>
                                    </div>
                                    
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">
                                            {{ $powerup['description'] }}
                                        </p>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <span class="text-xs text-gray-400">
                                            Versione: {{ $powerup['version'] }}
                                        </span>
                                    </div>
                                    
                                    <div class="mt-5">
                                        @if(!$powerup['installed'])
                                            <button 
                                                wire:click="installPowerup({{ json_encode($powerup) }})"
                                                class="w-full bg-blue-600 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                            >
                                                Installa
                                            </button>
                                        @else
                                            <button 
                                                disabled
                                                class="w-full bg-gray-300 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm font-medium text-gray-500 cursor-not-allowed"
                                            >
                                                Installato
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M34 40h10v-4a6 6 0 00-10.712-3.714M34 40H14m20 0v-4a9.971 9.971 0 00-.712-3.714M14 40H4v-4a6 6 0 0110.713-3.714M14 40v-4c0-1.313.253-2.566.713-3.714m0 0A10.003 10.003 0 0124 26c4.21 0 7.813 2.602 9.288 6.286M30 14a6 6 0 11-12 0 6 6 0 0112 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Nessun power-up disponibile</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Non sono stati trovati power-ups da installare.
                        </p>
                    </div>
                @endif

                <!-- Debug Info (solo in modalità sviluppo) -->
                @if(app()->environment('local') && !empty($powerupsJSON))
                    <div class="mt-8 bg-gray-50 rounded-lg p-4">
                        <h4 class="text-sm font-medium text-gray-900 mb-2">Debug Info (Development Only)</h4>
                        <pre class="text-xs text-gray-600 overflow-auto max-h-48">{{ json_encode($powerupsJSON, JSON_PRETTY_PRINT) }}</pre>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
</div>
>>>>>>> b0db4ea8 (fixes)
