<?php

declare(strict_types=1);

/**
 * Script per correggere i file di traduzione che contengono ".navigation"
 * 
 * Questo script:
 * 1. Cerca in tutti i file di traduzione la presenza di ".navigation"
 * 2. Sostituisce i valori con le etichette appropriate
 * 3. Mantiene la struttura corretta per la navigazione
 */

use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\preg_match;

$basePath = __DIR__ . '/../laravel/Modules';

// Mappatura dei valori di default per la navigazione
$defaultNavigation = [
    'appointment_workflow' => [
        'label' => 'Workflow Appuntamenti',
        'group' => 'Gestione',
        'icon' => 'heroicon-o-clock',
    ],
    'treatment' => [
        'label' => 'Trattamenti',
        'group' => 'Gestione',
        'icon' => 'heroicon-o-beaker',
    ],
    'appointment' => [
        'label' => 'Appuntamenti',
        'group' => 'Prenotazioni',
        'icon' => 'heroicon-o-calendar',
    ],
    'report' => [
        'label' => 'Report',
        'group' => 'Analisi',
        'icon' => 'heroicon-o-chart-bar',
    ],
    'medical_history' => [
        'label' => 'Anamnesi',
        'group' => 'Cartella Clinica',
        'icon' => 'heroicon-o-document-text',
    ],
    'user' => [
        'label' => 'Utenti',
        'group' => 'Amministrazione',
        'icon' => 'heroicon-o-users',
    ],
    'dentist' => [
        'label' => 'Dentisti',
        'group' => 'Gestione',
        'icon' => 'heroicon-o-user-circle',
    ],
    'patient' => [
        'label' => 'Pazienti',
        'group' => 'Gestione',
        'icon' => 'heroicon-o-user-group',
    ],
    'doctor' => [
        'label' => 'Medici',
        'group' => 'Gestione',
        'icon' => 'heroicon-o-user-plus',
    ],
];

/**
 * Processa un file di traduzione per correggere i valori della navigazione
 * @param string $filePath Percorso del file da processare
 * @param array<string, mixed> $defaults Valori di default per la navigazione
 * @return bool True se il file è stato modificato, false altrimenti
 */
function processFile(string $filePath, array $defaults): bool {
    $content = file_get_contents($filePath);
    $originalContent = $content;
    
    // Cerca la chiave 'navigation' nel file
    if (preg_match("/'navigation'\s*=>\s*(\[.*?\])/s", $content, $matches)) {
        $navigationBlock = $matches[1];
        
        // Estrai il nome del file senza estensione
        $fileName = basename($filePath, '.php');
        
        // Se il file è nella cartella it/en, prendi il nome della cartella genitore
        $dirName = basename(dirname($filePath));
        $moduleName = basename(dirname(dirname($filePath)));
        
        // Determina le impostazioni di default in base al nome del file
        $settings = $defaults[$fileName] ?? [
            'label' => ucfirst(str_replace('_', ' ', $fileName)),
            'group' => 'Altro',
            'icon' => 'heroicon-o-document',
        ];
        
        // Validazione del tipo e estrazione sicura dei valori
        if (!is_array($settings)) {
            return false;
        }
        
        $label = is_string($settings['label'] ?? null) ? $settings['label'] : 'Unknown';
        $group = is_string($settings['group'] ?? null) ? $settings['group'] : 'Altro';
        $icon = is_string($settings['icon'] ?? null) ? $settings['icon'] : 'heroicon-o-document';
        
        // Costruisci il nuovo blocco di navigazione
        $newNavigation = "[\n";
        $newNavigation .= "        'label' => '" . $label . "',\n";
        $newNavigation .= "        'group' => '" . $group . "',\n";
        $newNavigation .= "        'icon' => '" . $icon . "',\n";
        $newNavigation .= "    ]";
        
        // Sostituisci il blocco di navigazione
        $content = str_replace($matches[1], $newNavigation, $content);
    }
    
    // Se il contenuto è cambiato, salva il file
    if ($content !== $originalContent) {
        file_put_contents($filePath, $content);
        echo "Aggiornato: " . $filePath . "\n";
        return true;
    }
    
    return false;
}

// Cerca tutti i file di traduzione
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($basePath, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

$updatedFiles = 0;

foreach ($files as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filePath = $file->getRealPath();
        
        // Leggi il contenuto del file
        $content = file_get_contents($filePath);
        
        // Cerca la presenza di .navigation nel file
        if (strpos($content, '.navigation') !== false) {
            if (processFile($filePath, $defaultNavigation)) {
                $updatedFiles++;
            }
        }
    }
}

echo "\nOperazione completata. $updatedFiles file sono stati aggiornati.\n";
