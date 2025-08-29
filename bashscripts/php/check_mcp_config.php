<?php
declare(strict_types=1);

<<<<<<< HEAD
use function Safe\file;
use function Safe\file_get_contents;
use function Safe\json_decode;
use function Safe\preg_match;

=======
>>>>>>> ca80b08 (.)
/**
 * Script di validazione MCP: controlla la presenza e coerenza dei server MCP tra configurazione reale e documentazione.
 * Conforme alle regole Windsurf: tipizzazione, DocBlock, modularità.
 */

/**
 * Restituisce la lista dei server MCP attesi per ogni modulo dal file summary centrale.
 * @param string $summaryPath
 * @return array<string, array<string>>
 */
function getExpectedServersPerModule(string $summaryPath): array {
<<<<<<< HEAD
    try {
        $lines = file($summaryPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    } catch (\Exception $e) {
        return [];
    }
=======
    $lines = file($summaryPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
>>>>>>> ca80b08 (.)
    $modules = [];
    foreach ($lines as $line) {
        if (preg_match('/^\| (\w+) +\| ([^|]+)\|/', $line, $m)) {
            $mod = trim($m[1]);
            $servers = array_map('trim', explode(',', $m[2]));
            $modules[$mod] = $servers;
        }
    }
    return $modules;
}

/**
 * Controlla la presenza dei server MCP attesi nella configurazione reale del modulo.
 * @param string $configPath
 * @param array<string> $expectedServers
 * @return array<string>
 */
function checkMcpConfig(string $configPath, array $expectedServers): array {
    if (!file_exists($configPath)) {
        return ["[ERROR] Configurazione non trovata: $configPath"];
    }
<<<<<<< HEAD
    try {
        $content = file_get_contents($configPath);
        $config = json_decode($content, true);
        if (!is_array($config) || !isset($config['mcpServers']) || !is_array($config['mcpServers'])) {
            return ["[ERROR] Configurazione MCP non valida o mancante in: $configPath"];
        }
    } catch (\Exception $e) {
        return ["[ERROR] Impossibile leggere/parsare il file: $configPath - " . $e->getMessage()];
    }
    $found = array_keys($config['mcpServers']);
=======
    $config = json_decode(file_get_contents($configPath), true);
    $found = array_keys($config['mcpServers'] ?? []);
>>>>>>> ca80b08 (.)
    $missing = array_diff($expectedServers, $found);
    $extra = array_diff($found, $expectedServers);
    $out = [];
    if ($missing) {
        $out[] = "[ERROR] Mancano i seguenti server MCP: ".implode(', ', $missing);
    }
    if ($extra) {
        $out[] = "[WARN] Server MCP non documentati: ".implode(', ', $extra);
    }
    if (!$missing && !$extra) {
        $out[] = "[OK] Tutti i server MCP richiesti sono presenti e documentati.";
    }
    return $out;
}

// Percorsi
$summary = __DIR__.'/../docs/MCP_SERVERS_PROJECT_SUMMARY.md';
$modulesDir = __DIR__.'/../laravel/Modules/';

$expected = getExpectedServersPerModule($summary);

foreach ($expected as $mod => $servers) {
    $configPath = $modulesDir."$mod/mcp_config.json";
    echo "\n[$mod]\n";
    foreach (checkMcpConfig($configPath, $servers) as $msg) {
        echo $msg."\n";
    }
}
