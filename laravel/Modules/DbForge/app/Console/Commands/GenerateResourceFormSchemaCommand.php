<?php

declare(strict_types=1);

namespace Modules\DbForge\Console\Commands;

use Illuminate\Console\Command;
use Modules\Xot\Helpers\ResourceFormSchemaGenerator;

class GenerateResourceFormSchemaCommand extends Command
{
    protected $signature = 'xot:generate-resource-form-schema {--module=} {--resource=}';

    protected $description = 'Genera gli schemi dei form per le risorse Filament';

    public function handle(): int
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $moduleOption = $this->option('module');
        $resourceOption = $this->option('resource');
        
        $module = is_string($moduleOption) ? $moduleOption : '';
        $resource = is_string($resourceOption) ? $resourceOption : '';
<<<<<<< HEAD
=======
=======
        $module = $this->option('module');
        $resource = $this->option('resource');
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev

        try {
            if ($module && $resource) {
                // Generazione per una risorsa specifica
                $fullClassName = "Modules\\{$module}\\Filament\\Resources\\{$resource}Resource";
                
                if (!class_exists($fullClassName)) {
                    $this->error("La risorsa {$fullClassName} non esiste");
                    return Command::FAILURE;
                }
                
                /** @var class-string $fullClassName */
                $result = ResourceFormSchemaGenerator::generateFormSchema($fullClassName);
                
                if ($result) {
                    $this->info("Schema del form generato con successo per {$fullClassName}");
                } else {
                    $this->warn("Schema del form già esistente per {$fullClassName}");
                }
            } elseif ($module) {
                // Per ora, questo caso non è supportato da ResourceFormSchemaGenerator
                $this->error('Generazione per modulo specifico non ancora supportata. Usa --resource insieme a --module');
                return Command::FAILURE;
            } else {
                // Generazione per tutte le risorse
                $results = ResourceFormSchemaGenerator::generateForAllResources();
                
                $this->info('Risultati generazione schema form:');
                $this->info('Risorse aggiornate: ' . count($results['updated']));
                
                foreach ($results['updated'] as $resource) {
                    $this->line("  ✓ {$resource}");
                }
                
                if (!empty($results['skipped'])) {
                    $this->warn('Risorse saltate: ' . count($results['skipped']));
                    foreach ($results['skipped'] as $skipped) {
                        $this->line("  - {$skipped}");
                    }
                }
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Errore durante la generazione: ' . $e->getMessage());
<<<<<<< HEAD
=======
=======

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Errore durante la generazione degli schemi: ' . $e->getMessage());
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            return Command::FAILURE;
        }
    }
}
