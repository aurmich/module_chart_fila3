<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Geo\Services;
=======
namespace Modules\Geo\App\Services;
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
namespace Modules\Geo\Services;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\json_decode;
=======
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
use function Safe\json_decode;
>>>>>>> 345f8677 (phpstan)

/**
 * Servizio per la gestione dei dati geografici.
 * 
 * Questo servizio fornisce metodi per accedere e manipolare i dati geografici
 * memorizzati nel file JSON.
 * 
 * @see \Modules\Geo\docs\json-database.md
 */
class GeoDataService
{
    /**
     * Chiavi di cache.
     */
    private const CACHE_KEY_REGIONS = 'geo.regions';
    private const CACHE_KEY_PROVINCES = 'geo.provinces.%s';
    private const CACHE_KEY_CITIES = 'geo.cities.%s';
    private const CACHE_KEY_CAP = 'geo.cap.%s.%s';

    /**
     * Tempo di cache in secondi (24 ore).
     */
    private const CACHE_TTL = 86400;

    /**
     * Percorso del file JSON.
     */
    private const JSON_PATH = 'Modules/Geo/resources/json/comuni.json';

    /**
     * Validatore dei dati.
     */
    private GeoDataValidator $validator;

    /**
     * Costruttore.
     */
    public function __construct()
    {
        $this->validator = new GeoDataValidator();
    }

    /**
     * Ottiene tutte le regioni.
     * 
     * @return Collection<int, array{name: string, code: string}>
     */
    public function getRegions(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<int, array{name: string, code: string}> $result */
        $result = Cache::remember(
            self::CACHE_KEY_REGIONS,
            self::CACHE_TTL,
            fn (): Collection => $this->loadData()->pluck('name', 'code')
        );

        return $result;
=======
        return Cache::remember(
=======
        /** @var Collection<int, array{name: string, code: string}> $result */
        $result = Cache::remember(
>>>>>>> 345f8677 (phpstan)
            self::CACHE_KEY_REGIONS,
            self::CACHE_TTL,
            fn () => $this->loadData()->pluck('name', 'code')
        );
<<<<<<< HEAD
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======

        return $result;
>>>>>>> 345f8677 (phpstan)
    }

    /**
     * Ottiene le province di una regione.
     * 
     * @param string $regionCode Codice della regione
     * @return Collection<int, array{name: string, code: string}>
     */
    public function getProvinces(string $regionCode): Collection
    {
        $cacheKey = sprintf(self::CACHE_KEY_PROVINCES, $regionCode);

<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<int, array{name: string, code: string}> $result */
        $result = Cache::remember(
            $cacheKey,
            self::CACHE_TTL,
            function () use ($regionCode): Collection {
                /** @var array<string, mixed>|null $region */
<<<<<<< HEAD
                $region = $this->loadData()->firstWhere('code', $regionCode);
                
                if (!$region || !is_array($region) || !isset($region['provinces']) || !is_array($region['provinces'])) {
                    /** @var Collection<int, array{name: string, code: string}> */
                    return new Collection();
                }
                
                /** @var array<int, array<string, mixed>> $provinces */
                $provinces = $region['provinces'];
                
                /** @var Collection<int, array{name: string, code: string}> */
                return (new Collection($provinces))->pluck('name', 'code');
            }
        );

        return $result;
=======
        return Cache::remember(
=======
        /** @var Collection<int, array{name: string, code: string}> $result */
        $result = Cache::remember(
>>>>>>> 345f8677 (phpstan)
            $cacheKey,
            self::CACHE_TTL,
            function () use ($regionCode) {
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                $region = $this->loadData()->firstWhere('code', $regionCode);
                
                if (!$region || !is_array($region) || !isset($region['provinces']) || !is_array($region['provinces'])) {
                    /** @var Collection<int, array{name: string, code: string}> */
                    return new Collection();
                }
                
                /** @var array<int, array<string, mixed>> $provinces */
                $provinces = $region['provinces'];
                
                /** @var Collection<int, array{name: string, code: string}> */
                return (new Collection($provinces))->pluck('name', 'code');
            }
        );
<<<<<<< HEAD
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======

        return $result;
>>>>>>> 345f8677 (phpstan)
    }

    /**
     * Ottiene le città di una provincia.
     * 
     * @param string $provinceCode Codice della provincia
     * @return Collection<int, array{name: string, code: string}>
     */
    public function getCities(string $provinceCode): Collection
    {
        $cacheKey = sprintf(self::CACHE_KEY_CITIES, $provinceCode);

<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<int, array{name: string, code: string}> $result */
        $result = Cache::remember(
            $cacheKey,
            self::CACHE_TTL,
            function () use ($provinceCode): Collection {
                /** @var array<string, mixed>|null $province */
<<<<<<< HEAD
                $province = $this->loadData()
                    ->flatMap(fn (array $region): array => is_array($region['provinces'] ?? null) ? $region['provinces'] : [])
                    ->firstWhere('code', $provinceCode);

                if (!$province || !is_array($province) || !isset($province['cities']) || !is_array($province['cities'])) {
                    /** @var Collection<int, array{name: string, code: string}> */
                    return new Collection();
                }

                /** @var array<int, array<string, mixed>> $cities */
                $cities = $province['cities'];

                /** @var Collection<int, array{name: string, code: string}> */
                return (new Collection($cities))->pluck('name', 'code');
            }
        );

        return $result;
=======
        return Cache::remember(
=======
        /** @var Collection<int, array{name: string, code: string}> $result */
        $result = Cache::remember(
>>>>>>> 345f8677 (phpstan)
            $cacheKey,
            self::CACHE_TTL,
            function () use ($provinceCode) {
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                $province = $this->loadData()
                    ->flatMap(fn (array $region): array => is_array($region['provinces'] ?? null) ? $region['provinces'] : [])
                    ->firstWhere('code', $provinceCode);

                if (!$province || !is_array($province) || !isset($province['cities']) || !is_array($province['cities'])) {
                    /** @var Collection<int, array{name: string, code: string}> */
                    return new Collection();
                }

                /** @var array<int, array<string, mixed>> $cities */
                $cities = $province['cities'];

                /** @var Collection<int, array{name: string, code: string}> */
                return (new Collection($cities))->pluck('name', 'code');
            }
        );
<<<<<<< HEAD
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======

        return $result;
>>>>>>> 345f8677 (phpstan)
    }

    /**
     * Ottiene il CAP di una città.
     * 
     * @param string $provinceCode Codice della provincia
     * @param string $cityCode Codice della città
     * @return string|null
     */
    public function getCap(string $provinceCode, string $cityCode): ?string
    {
        $cacheKey = sprintf(self::CACHE_KEY_CAP, $provinceCode, $cityCode);

<<<<<<< HEAD
<<<<<<< HEAD
        /** @var string|null $result */
        $result = Cache::remember(
            $cacheKey,
            self::CACHE_TTL,
            function () use ($provinceCode, $cityCode): ?string {
                /** @var array<string, mixed>|null $province */
<<<<<<< HEAD
                $province = $this->loadData()
                    ->flatMap(fn (array $region): array => is_array($region['provinces'] ?? null) ? $region['provinces'] : [])
                    ->firstWhere('code', $provinceCode);

                if (!$province || !is_array($province) || !isset($province['cities']) || !is_array($province['cities'])) {
                    return null;
                }

                /** @var array<int, array<string, mixed>> $cities */
                $cities = $province['cities'];

                /** @var Collection<int, array<string, mixed>> $cityCollection */
                $cityCollection = new Collection($cities);

                /** @var array<string, mixed>|null $city */
                $city = $cityCollection->firstWhere('code', $cityCode);

                return is_array($city) && isset($city['cap']) && is_string($city['cap']) ? $city['cap'] : null;
            }
        );

        return $result;
=======
        return Cache::remember(
=======
        /** @var string|null $result */
        $result = Cache::remember(
>>>>>>> 345f8677 (phpstan)
            $cacheKey,
            self::CACHE_TTL,
            function () use ($provinceCode, $cityCode) {
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                $province = $this->loadData()
                    ->flatMap(fn (array $region): array => is_array($region['provinces'] ?? null) ? $region['provinces'] : [])
                    ->firstWhere('code', $provinceCode);

                if (!$province || !is_array($province) || !isset($province['cities']) || !is_array($province['cities'])) {
                    return null;
                }

                /** @var array<int, array<string, mixed>> $cities */
                $cities = $province['cities'];

                /** @var Collection<int, array<string, mixed>> $cityCollection */
                $cityCollection = new Collection($cities);

                /** @var array<string, mixed>|null $city */
                $city = $cityCollection->firstWhere('code', $cityCode);

                return is_array($city) && isset($city['cap']) ? (string) $city['cap'] : null;
            }
        );
<<<<<<< HEAD
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======

        return $result;
>>>>>>> 345f8677 (phpstan)
    }

    /**
     * Carica i dati dal file JSON.
     * 
     * @return Collection<int, array>
     * @throws \RuntimeException Se il file non esiste o non è valido
     */
    private function loadData(): Collection
    {
        if (!File::exists(base_path(self::JSON_PATH))) {
            throw new \RuntimeException('Il file JSON dei comuni non esiste');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array $data */
=======
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
        /** @var array $data */
>>>>>>> 345f8677 (phpstan)
        $data = json_decode(File::get(base_path(self::JSON_PATH)), true);

        if (!$this->validator->checkIntegrity($data)) {
            throw new \RuntimeException('Il file JSON dei comuni non è valido');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<int, array> $result */
        $result = new Collection($data['regions']);

        return $result;
=======
        return collect($data['regions']);
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
        /** @var Collection<int, array> $result */
        $result = new Collection($data['regions']);

        return $result;
>>>>>>> 345f8677 (phpstan)
    }

    /**
     * Pulisce la cache.
     * 
     * @return void
     */
    public function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY_REGIONS);
<<<<<<< HEAD
<<<<<<< HEAD
        // Nota: forgetPattern non esiste in Laravel Cache, usiamo forget per le chiavi specifiche
        // In un'implementazione reale, dovremmo mantenere traccia delle chiavi create
=======
        Cache::forgetPattern(self::CACHE_KEY_PROVINCES . '*');
        Cache::forgetPattern(self::CACHE_KEY_CITIES . '*');
        Cache::forgetPattern(self::CACHE_KEY_CAP . '*');
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
        // Nota: forgetPattern non esiste in Laravel Cache, usiamo forget per le chiavi specifiche
        // In un'implementazione reale, dovremmo mantenere traccia delle chiavi create
>>>>>>> 345f8677 (phpstan)
    }
} 