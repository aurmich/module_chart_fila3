<?php

namespace Modules\SaluteOra\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
use function Safe\preg_match;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\preg_match;
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
use function Safe\preg_match;
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev

class CheckDirectoryStructure extends Command
{
    protected $signature = 'saluteora:check-structure';
    protected $description = 'Verifica la struttura delle directory del modulo SaluteOra';

<<<<<<< HEAD
    public function handle(): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle(): int
=======
    public function handle()
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    public function handle(): int
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
    {
        $this->info('Verifica struttura directory SaluteOra...');

        $basePath = module_path('SaluteOra');
        $errors = [];

        // Verifica directory Filament
        $filamentPath = $basePath . '/app/Filament';
        if (!File::isDirectory($filamentPath)) {
            $errors[] = "Directory mancante: {$filamentPath}";
        }

        // Verifica directory Resources
        $resourcesPath = $filamentPath . '/Resources';
        if (!File::isDirectory($resourcesPath)) {
            $errors[] = "Directory mancante: {$resourcesPath}";
        }

        // Verifica namespace nei file
        $this->checkNamespaces($basePath, $errors);

        if (empty($errors)) {
            $this->info('✓ Struttura directory corretta!');
            return 0;
        }

        $this->error('❌ Errori trovati:');
        foreach ($errors as $error) {
            $this->line("  - {$error}");
        }

        return 1;
    }

<<<<<<< HEAD
    protected function checkNamespaces(string $basePath, array &$errors): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
    protected function checkNamespaces(string $basePath, array &$errors): void
=======
    protected function checkNamespaces($basePath, &$errors)
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    protected function checkNamespaces(string $basePath, array &$errors): void
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
    {
        $files = File::allFiles($basePath . '/app');
        foreach ($files as $file) {
            if ($file->getExtension() === 'php') {
                $content = File::get($file->getPathname());
                $relativePath = str_replace($basePath . '/', '', $file->getPathname());
                
                // Verifica namespace corretto
                if (strpos($relativePath, 'Filament') !== false) {
                    $expectedNamespace = 'Modules\\SaluteOra\\' . str_replace('/', '\\', dirname($relativePath));
                    if (!preg_match("/namespace\s+{$expectedNamespace}/", $content)) {
                        $errors[] = "Namespace errato in {$relativePath}. Dovrebbe essere: {$expectedNamespace}";
                    }
                }
            }
        }
    }
<<<<<<< HEAD
} 
=======
<<<<<<< HEAD
} 
=======
} 
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
