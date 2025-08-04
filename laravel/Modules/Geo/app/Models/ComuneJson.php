<?php

declare(strict_types=1);

namespace Modules\Geo\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

/**
 * Modello unico readonly per i comuni italiani (Facade pattern).
 * 
 * Implementa il pattern Facade per fornire un'interfaccia unificata a tutti i dati geografici:
 * regioni, province, città, CAP, codici ISTAT, ecc.
 * Tutti i dati sono estratti da un'unica fonte (comuni.json) e gestiti tramite metodi statici.
 * Include un sistema di caching multilivello per ottimizzare le performance.
 * 
 * @see GeoJsonModel Classe base per l'accesso ai dati JSON
 * @see docs/consolidamento-modelli-geografici.md Analisi comparativa della struttura
 * @see docs/comune-unificazione-analisi.md Analisi dell'unificazione dei modelli
 * @see docs/geo-json-model.md Documentazione tecnica del modello base
 */
class ComuneJson extends GeoJsonModel
{
    /**
     * Cache duration in seconds (1 week)
     */
    protected const CACHE_TTL = 604800;

    /**
     * Get all comuni with their complete data
     * 
     * @return Collection<array-key, array{
     *     nome: string,
     *     codice: string,
     *     regione: array{codice: string, nome: string},
     *     provincia: array{codice: string, nome: string},
     *     cap: array<int, string>,
     *     codiceCatastale: string,
     *     popolazione: int
     * }>
     */
    public static function all(): Collection
    {
        return static::loadData();
    }

    /**
     * Get comuni by region code
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     * 
     * @return Collection<int, array{
     *     nome: string,
     *     codice: string,
     *     regione: array{codice: string, nome: string},
     *     provincia: array{codice: string, nome: string},
     *     cap: array<int, string>,
     *     codiceCatastale: string,
     *     popolazione: int
     * }>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public static function byRegion(string $regionCode): Collection
    {
        $cacheKey = "geo_region_{$regionCode}";
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($regionCode) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($regionCode) {
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            return static::all()
                ->where('regione.codice', $regionCode)
                ->sortBy('nome')
                ->values();
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $result */
        return $result;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Get comuni by province code
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     * 
     * @return Collection<int, array{
     *     nome: string,
     *     codice: string,
     *     regione: array{codice: string, nome: string},
     *     provincia: array{codice: string, nome: string},
     *     cap: array<int, string>,
     *     codiceCatastale: string,
     *     popolazione: int
     * }>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public static function byProvince(string $provinceCode): Collection
    {
        $cacheKey = "geo_province_{$provinceCode}";
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($provinceCode) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($provinceCode) {
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            return static::all()
                ->where('provincia.codice', $provinceCode)
                ->sortBy('nome')
                ->values();
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $result */
        return $result;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Get all comuni by name (case insensitive partial match)
     * 
     * @param string $name Nome parziale del comune da cercare
     * @param int $limit Numero massimo di risultati (0 = nessun limite)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     * @return Collection<int, array{
     *     nome: string,
     *     codice: string,
     *     regione: array{codice: string, nome: string},
     *     provincia: array{codice: string, nome: string},
     *     cap: array<int, string>,
     *     codiceCatastale: string,
     *     popolazione: int
     * }> Comuni che corrispondono alla ricerca
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * @return Collection<array-key, array> Comuni che corrispondono alla ricerca
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public static function searchByName(string $name, int $limit = 0): Collection
    {
        $name = mb_strtolower($name);
        $cacheKey = "geo_search_" . md5($name) . "_" . $limit;
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($name, $limit) {
<<<<<<< HEAD
            $results = static::all()
                /** @phpstan-ignore nullCoalesce.offset */
                ->filter(fn($item) => str_contains(mb_strtolower($item['nome'] ?? ''), $name))
=======
<<<<<<< HEAD
            $results = static::all()
                /** @phpstan-ignore nullCoalesce.offset */
                ->filter(fn($item) => str_contains(mb_strtolower($item['nome'] ?? ''), $name))
=======
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($name, $limit) {
            $results = static::all()
                ->filter(fn($item) => str_contains(mb_strtolower($item['nome']), $name))
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
            $results = static::all()
                /** @phpstan-ignore-next-line */
                ->filter(fn($item) => str_contains(mb_strtolower($item['nome'] ?? ''), $name))
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
                ->sortBy('nome');
                
            return $limit > 0 ? $results->take($limit)->values() : $results->values();
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $result */
        return $result;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Get comuni by CAP
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     * 
     * @return Collection<int, array{
     *     nome: string,
     *     codice: string,
     *     regione: array{codice: string, nome: string},
     *     provincia: array{codice: string, nome: string},
     *     cap: array<int, string>,
     *     codiceCatastale: string,
     *     popolazione: int
     * }>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
     */
    public static function byCap(string $cap): Collection
    {
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $filtered */
        $filtered = static::all()
            /** @phpstan-ignore nullCoalesce.offset */
            ->filter(fn($item) => in_array($cap, $item['cap'] ?? [], true))
            ->sortBy('nome')
            ->values();
            
        return $filtered;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
     */
    public static function byCap(string $cap): Collection
    {
        /** @var Collection<int, array{
         *     nome: string,
         *     codice: string,
         *     regione: array{codice: string, nome: string},
         *     provincia: array{codice: string, nome: string},
         *     cap: array<int, string>,
         *     codiceCatastale: string,
         *     popolazione: int
         * }> $filtered */
        $filtered = static::all()
            /** @phpstan-ignore-next-line */
            ->filter(fn($item) => in_array($cap, $item['cap'] ?? [], true))
            ->sortBy('nome')
            ->values();
<<<<<<< HEAD
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
            
        return $filtered;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Get all regions with their codes and names
     * 
     * @return Collection<string, string> [code => name]
     */
    public static function allRegions(): Collection
    {
<<<<<<< HEAD
        /** @var Collection<string, string> $result */
        $result = Cache::remember('geo_all_regions', self::CACHE_TTL, function () {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<string, string> $result */
        $result = Cache::remember('geo_all_regions', self::CACHE_TTL, function () {
=======
        return Cache::remember('geo_all_regions', self::CACHE_TTL, function () {
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        /** @var Collection<string, string> $result */
        $result = Cache::remember('geo_all_regions', self::CACHE_TTL, function () {
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            return static::all()
                ->pluck('regione.nome', 'regione.codice')
                ->unique()
                ->sort();
        });
<<<<<<< HEAD
        
        return $result;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        
        return $result;
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        
        return $result;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Get all provinces with their codes and names
     * 
     * @return Collection<string, string> [code => name]
     */
    public static function allProvinces(): Collection
    {
<<<<<<< HEAD
        /** @var Collection<string, string> $result */
        $result = Cache::remember('geo_all_provinces', self::CACHE_TTL, function () {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<string, string> $result */
        $result = Cache::remember('geo_all_provinces', self::CACHE_TTL, function () {
=======
        return Cache::remember('geo_all_provinces', self::CACHE_TTL, function () {
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        /** @var Collection<string, string> $result */
        $result = Cache::remember('geo_all_provinces', self::CACHE_TTL, function () {
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            return static::all()
                ->pluck('provincia.nome', 'provincia.codice')
                ->unique()
                ->sort();
        });
<<<<<<< HEAD
        
        return $result;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        
        return $result;
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        
        return $result;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Get all provinces for a specific region
     * 
     * @return Collection<string, string> [code => name]
     */
    public static function getProvincesByRegion(string $regionCode): Collection
    {
        $cacheKey = "geo_region_{$regionCode}_provinces";
        
<<<<<<< HEAD
        /** @var Collection<string, string> $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($regionCode) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<string, string> $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($regionCode) {
=======
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($regionCode) {
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        /** @var Collection<string, string> $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($regionCode) {
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            return static::all()
                ->where('regione.codice', $regionCode)
                ->pluck('provincia.nome', 'provincia.codice')
                ->unique()
                ->sort();
        });
<<<<<<< HEAD
        
        return $result;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        
        return $result;
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        
        return $result;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Get all CAPs for a specific city
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
     * 
     * @return Collection<int, string> List of CAP codes for the city
     */
    public static function getCapsByCity(string $cityName): Collection
    {
        /** @var Collection<int, string> $result */
        $result = static::all()
<<<<<<< HEAD
=======
=======
     */
    public static function getCapsByCity(string $cityName): Collection
    {
        return static::all()
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
     * 
     * @return Collection<int, string> List of CAP codes for the city
     */
    public static function getCapsByCity(string $cityName): Collection
    {
        /** @var Collection<int, string> $result */
        $result = static::all()
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            ->where('nome', $cityName)
            ->pluck('cap')
            ->flatten()
            ->unique()
            ->sort()
            ->values();
<<<<<<< HEAD
            
        return $result;
=======
<<<<<<< HEAD
<<<<<<< HEAD
            
        return $result;
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
            
        return $result;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Clear all cached data
     * 
     * @param bool $verbose Se true, restituisce la lista delle chiavi di cache eliminate
     * @return array<int, string>|null Lista delle chiavi di cache eliminate se $verbose è true
     */
    public static function clearCache(bool $verbose = false): ?array
    {
        $clearedKeys = [];
        
        // Chiavi base
        $baseKeys = ['geo_all_regions', 'geo_all_provinces'];
        foreach ($baseKeys as $key) {
            Cache::forget($key);
            $clearedKeys[] = $key;
        }
        
        // Chiavi specifiche per regione
        static::allRegions()->each(function ($nome, $code) use (&$clearedKeys) {
            $keys = ["geo_region_{$code}", "geo_region_{$code}_provinces"];
            foreach ($keys as $key) {
                Cache::forget($key);
                $clearedKeys[] = $key;
            }
        });
        
        // Chiavi specifiche per provincia
        static::allProvinces()->each(function ($nome, $code) use (&$clearedKeys) {
            $key = "geo_province_{$code}";
            Cache::forget($key);
            $clearedKeys[] = $key;
        });
        
        // Nota: La pulizia delle chiavi di pattern matching è limitata
        // poiché non tutti i driver di cache supportano la ricerca per pattern
        // Le chiavi di ricerca più comuni vengono gestite esplicitamente
        $searchPatterns = [
            'geo_search_', // Ricerche generiche
            'geo_valid_cap_', // Validazione CAP
            'geo_gerarchia_', // Gerarchie geografiche
        ];
        
        // Puliamo alcune chiavi di ricerca comuni per essere sicuri
        foreach ($searchPatterns as $pattern) {
            for ($i = 0; $i < 10; $i++) {
                $testKey = $pattern . md5((string)$i);
                Cache::forget($testKey);
            }
        }
        
        return $verbose ? $clearedKeys : null;
    }
    
    /**
     * Verifica se il CAP esiste nel database
     * 
     * @param string $cap CAP da verificare
     * @return bool True se il CAP esiste, false altrimenti
     */
    public static function isValidCap(string $cap): bool
    {
        $cacheKey = "geo_valid_cap_{$cap}";
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        /** @var bool $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($cap) {
            return static::byCap($cap)->isNotEmpty();
        });
        
        return $result;
<<<<<<< HEAD
=======
=======
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($cap) {
            return static::byCap($cap)->isNotEmpty();
        });
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        /** @var bool $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($cap) {
            return static::byCap($cap)->isNotEmpty();
        });
        
        return $result;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }
    
    /**
     * Ottiene la gerarchia completa per un comune (regione, provincia, comune, cap)
     * 
     * @param string $comuneNome Nome esatto del comune
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     * @return array{
     *     regione: array{codice: string, nome: string}|null,
     *     provincia: array{codice: string, nome: string}|null,
     *     comune: array{
     *         nome: string,
     *         codice: string|null,
     *         codiceCatastale: string|null,
     *         popolazione: int|null
     *     },
     *     cap: array<int, string>
     * }|null Gerarchia completa o null se il comune non esiste
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * @return array|null Gerarchia completa o null se il comune non esiste
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public static function getGerarchia(string $comuneNome): ?array
    {
        $cacheKey = "geo_gerarchia_" . md5($comuneNome);
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        /** @var array{
         *     regione: array{codice: string, nome: string}|null,
         *     provincia: array{codice: string, nome: string}|null,
         *     comune: array{
         *         nome: string,
         *         codice: string|null,
         *         codiceCatastale: string|null,
         *         popolazione: int|null
         *     },
         *     cap: array<int, string>
         * }|null $result */
        $result = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($comuneNome) {
            /** @var array{
             *     nome: string,
             *     codice: string,
             *     regione: array{codice: string, nome: string},
             *     provincia: array{codice: string, nome: string},
             *     cap: array<int, string>,
             *     codiceCatastale: string,
             *     popolazione: int
             * }|null $comune */
            $comune = static::searchByName($comuneNome, 1)->first();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($comuneNome) {
            $comune = static::all()->firstWhere('nome', $comuneNome);
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            
            if (!$comune) {
                return null;
            }
            
            return [
                'regione' => $comune['regione'] ?? null,
                'provincia' => $comune['provincia'] ?? null,
                'comune' => [
                    'nome' => $comune['nome'],
                    'codice' => $comune['codice'] ?? null,
                    'codiceCatastale' => $comune['codiceCatastale'] ?? null,
                    'popolazione' => $comune['popolazione'] ?? null,
                ],
                'cap' => $comune['cap'] ?? [],
            ];
        });
<<<<<<< HEAD
        
        return $result;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        
        return $result;
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        
        return $result;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }
    
    /**
     * Restituisce regole di validazione Laravel per form geografici
     * 
     * @param bool $required Se true, tutti i campi sono obbligatori
     * @return array<string, array<int, mixed>> Regole di validazione
     */
    public static function getValidationRules(bool $required = true): array
    {
        $requiredRule = $required ? 'required' : 'nullable';
        
        return [
            'regione_codice' => [$requiredRule, 'string', function ($attribute, $value, $fail) {
                if (!static::allRegions()->has($value)) {
                    $fail('La regione selezionata non è valida.');
                }
            }],
            'provincia_codice' => [$requiredRule, 'string', function ($attribute, $value, $fail) {
                if (!static::allProvinces()->has($value)) {
                    $fail('La provincia selezionata non è valida.');
                }
            }],
            'comune_nome' => [$requiredRule, 'string', function ($attribute, $value, $fail) {
                if (!empty($value) && static::searchByName($value, 1)->isEmpty()) {
                    $fail('Il comune selezionato non è valido.');
                }
            }],
            'cap' => [$requiredRule, 'string', function ($attribute, $value, $fail) {
                if (!empty($value) && !static::isValidCap($value)) {
                    $fail('Il CAP inserito non è valido.');
                }
            }],
        ];
    }
}
