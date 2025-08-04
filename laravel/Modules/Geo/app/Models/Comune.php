<?php

declare(strict_types=1);

namespace Modules\Geo\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Sushi\Sushi;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Modules\Tenant\Models\Traits\SushiToJson;

/**
 * Modello per i comuni italiani con Sushi.
 * 
 * Implementa il pattern Facade per fornire un'interfaccia unificata a tutti i dati geografici:
 * regioni, province, città, CAP, codici ISTAT, ecc.
 * Tutti i dati sono estratti da file JSON e gestiti tramite Sushi.
 *
 * @property int $id
 * @property string $nome
 * @property string $codice
 * @property string $regione
 * @property string $provincia
 * @property string $sigla_provincia
 * @property string $cap
 * @property string $codice_catastale
 * @property int $popolazione
 * @property string $zona_altimetrica
 * @property int $altitudine
 * @property float $superficie
 * @property float $lat
 * @property float $lng
 * @property array<array-key, mixed>|null $zona
 * @property string|null $sigla
 * @property string|null $codiceCatastale
 * @property-read \Modules\User\Models\Profile|null $creator
 * @property-read \Modules\User\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereCap($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereCodice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereCodiceCatastale($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune wherePopolazione($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereRegione($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereSigla($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comune whereZona($value)
 * @mixin \Eloquent
 */
class Comune extends BaseModel
{
    use SushiToJson;

    public string $jsonDirectory='';

    /** @var array<int, string> */
    public $translatable = [
    ];
    
    /** @var list<string> */
    protected $fillable = [
        'id',
        'codice',
        'nome',
        'regione',
        'provincia',
        'sigla_provincia',
        'cap',
        'codice_catastale',
        'popolazione',
        'zona_altimetrica',
        'altitudine',
        'superficie',
        'lat',
        'lng',
    ];

    protected array $schema = [
        'id' => 'integer',
        'title' => 'json',
        'slug' => 'string',
        'content' => 'string',

        'zona' => 'json',
        'provincia' => 'json',
        'regione' => 'json',
        'cap' => 'json',

        'created_at' => 'datetime',
        'updated_at' => 'datetime',

        'created_by' => 'string',
        'updated_by' => 'string',
    ];

    public function getJsonFile(): string
    {
        return module_path('Geo', 'resources/json/comuni.json');
    }

    public function getRows(): array
    {
        return $this->getSushiRows();
    }

    /** @return array<string, string>     */
    protected function casts(): array
    {
        return [
            'regione' => 'array',
            'zona' => 'array',
            'provincia' => 'array',
            'cap' => 'array',
        ];
    }

    /**
     * Get all regions
     *
     * @return Collection<string>
     */
    public static function getRegioni(): Collection
    {
        /** @phpstan-ignore return.type */
        return static::all()->pluck('regione')->unique()->sort()->values();
    }

    /**
     * Get all provinces for a region
     *
     * @param string $regione
     * @return Collection<string>
     */
    public static function getProvinceByRegione(string $regione): Collection
    {
        /** @phpstan-ignore return.type */
        return static::where('regione', $regione)
            ->pluck('provincia')
=======
=======
use Sushi\Sushi;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Modules\Tenant\Models\Traits\SushiToJson;

/**
 * Modello per i comuni italiani con Sushi.
 * 
 * Implementa il pattern Facade per fornire un'interfaccia unificata a tutti i dati geografici:
 * regioni, province, città, CAP, codici ISTAT, ecc.
 * Tutti i dati sono estratti da file JSON e gestiti tramite Sushi.
 * 
 * @property int $id
 * @property string $nome
 * @property string $codice
 * @property string $regione
 * @property string $provincia
 * @property string $sigla_provincia
 * @property string $cap
 * @property string $codice_catastale
 * @property int $popolazione
 * @property string $zona_altimetrica
 * @property int $altitudine
 * @property float $superficie
 * @property float $lat
 * @property float $lng
 */
class Comune extends BaseModel
{
    use SushiToJson;


    /** @var array<int, string> */
    public $translatable = [
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'codice',
        'nome',
        'regione',
        'provincia',
        'sigla_provincia',
        'cap',
        'codice_catastale',
        'popolazione',
        'zona_altimetrica',
        'altitudine',
        'superficie',
        'lat',
        'lng',
    ];

    protected array $schema = [
        'id' => 'integer',
        'title' => 'json',
        'slug' => 'string',
        'content' => 'string',

        'zona' => 'json',
        'provincia' => 'json',
        'regione' => 'json',
        'cap' => 'json',

        'created_at' => 'datetime',
        'updated_at' => 'datetime',

        'created_by' => 'string',
        'updated_by' => 'string',
    ];

    public function getJsonFile(): string
    {
        return module_path('Geo', 'resources/json/comuni.json');
    }

    public function getRows(): array
    {
        return $this->getSushiRows();
    }

    /** @return array<string, string>     */
    protected function casts(): array
    {
        return [
            'regione' => 'array',
            'zona' => 'array',
            'provincia' => 'array',
            'cap' => 'array',
        ];
    }

    /**
     * Get all regions
     *
     * @return Collection<string>
     */
    public static function getRegioni(): Collection
    {
        return static::all()->pluck('regione')->unique()->sort()->values();
    }

    /**
     * Get all provinces for a region
     *
     * @param string $regione
     * @return Collection<string>
     */
    public static function getProvinceByRegione(string $regione): Collection
    {
<<<<<<< HEAD
        $cacheKey = "geo_province_{$provinceCode}";
        
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($provinceCode) {
            return static::all()
                ->where('provincia.codice', $provinceCode)
                ->sortBy('nome')
                ->values();
        });
    }

    /**
     * Get all comuni by name (case insensitive partial match)
     * 
     * @param string $name Nome parziale del comune da cercare
     * @param int $limit Numero massimo di risultati (0 = nessun limite)
     * @return Collection<array-key, array> Comuni che corrispondono alla ricerca
     */
    public static function searchByName(string $name, int $limit = 0): Collection
    {
        $name = mb_strtolower($name);
        $cacheKey = "geo_search_" . md5($name) . "_" . $limit;
        
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($name, $limit) {
            $results = static::all()
                ->filter(fn($item) => str_contains(mb_strtolower($item['nome']), $name))
                ->sortBy('nome');
                
            return $limit > 0 ? $results->take($limit)->values() : $results->values();
        });
    }

    /**
     * Get comuni by CAP
     */
    public static function byCap(string $cap): Collection
    {
        return static::all()
            ->filter(fn($item) => in_array($cap, $item['cap'], true))
            ->sortBy('nome')
            ->values();
    }

    /**
     * Get all regions with their codes and names
     * 
     * @return Collection<string, string> [code => name]
     */
    public static function allRegions(): Collection
    {
        return Cache::remember('geo_all_regions', self::CACHE_TTL, function () {
            return static::all()
                ->pluck('regione.nome', 'regione.codice')
                ->unique()
                ->sort();
        });
    }

    /**
     * Get all provinces with their codes and names
     * 
     * @return Collection<string, string> [code => name]
     */
    public static function allProvinces(): Collection
    {
        return Cache::remember('geo_all_provinces', self::CACHE_TTL, function () {
            return static::all()
                ->pluck('provincia.nome', 'provincia.codice')
                ->unique()
                ->sort();
        });
    }

    /**
     * Get all provinces for a specific region
     * 
     * @return Collection<string, string> [code => name]
     */
    public static function getProvincesByRegion(string $regionCode): Collection
    {
        $cacheKey = "geo_region_{$regionCode}_provinces";
        
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($regionCode) {
            return static::all()
                ->where('regione.codice', $regionCode)
                ->pluck('provincia.nome', 'provincia.codice')
                ->unique()
                ->sort();
        });
    }

    /**
     * Get all CAPs for a specific city
     */
    public static function getCapsByCity(string $cityName): Collection
    {
        return static::all()
            ->where('nome', $cityName)
            ->pluck('cap')
            ->flatten()
>>>>>>> 39ba294d (♻️ (Cap, City, Province, Region): deprecate legacy models and unify into a single Comune model to simplify data access and improve maintainability)
=======
        return static::where('regione', $regione)
            ->pluck('provincia')
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
            ->unique()
            ->sort()
            ->values();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
     * Get all comuni for a province
     *
     * @param string $provincia
     * @return Collection<static>
<<<<<<< HEAD
     */
    public static function getComuniByProvincia(string $provincia): Collection
    {
        /** @phpstan-ignore return.type */
        return static::where('provincia', $provincia)
            ->orderBy('nome')
            ->get();
    }

    /**
     * Find a comune by name (case insensitive)
     *
     * @param string $nome The name of the comune to find (case insensitive)
     * @return static|null The found comune or null if not found
     */
    public static function findByNome(string $nome): ?self
    {
        /** @phpstan-ignore return.type */
        return static::all()->first(function ($comune) use ($nome) {
            return strtolower($comune->nome) === strtolower($nome);
        });
    }

    /**
     * Find comuni by CAP code (partial match supported)
     *
     * @param string $cap The CAP code to search for
     * @return Collection<static> Collection of matching comuni
     */
    public static function findByCap(string $cap): Collection
    {
        /** @phpstan-ignore return.type */
        return static::where('cap', 'like', "%{$cap}%")->get();
    }

    /**
     * Find a city by ID
     * 
     * @param int $id
     * @return array{id: int, nome: string, provincia: string, regione: string, cap: string, codice_catastale: string, popolazione: int, altitudine: int, superficie: float, lat: float, lng: float, zona_altimetrica: string}|null
     */
    public static function findComune(int $id): ?array
    {
        $comune = static::query()->where('id', $id)->first();
        
        /** @phpstan-ignore return.type */
        return $comune ? $comune->toArray() : null;
    }

    /**
     * Get the directory where Comune JSON files are stored.
     *
     * @return string
     */
    public function getJsonDirectory(): string
    {
        return $this->jsonDirectory;
    }

    /**
     * Set the directory where Comune JSON files are stored.
     *
     * @param string $directory
     * @return void
     */
    public function setJsonDirectory(string $directory): void
    {
        $this->jsonDirectory = $directory;
=======
     * Clear all cached data
     * 
     * @param bool $verbose Se true, restituisce la lista delle chiavi di cache eliminate
     * @return array<int, string>|null Lista delle chiavi di cache eliminate se $verbose è true
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
     */
    public static function getComuniByProvincia(string $provincia): Collection
    {
<<<<<<< HEAD
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
>>>>>>> 39ba294d (♻️ (Cap, City, Province, Region): deprecate legacy models and unify into a single Comune model to simplify data access and improve maintainability)
=======
        return static::where('provincia', $provincia)
            ->orderBy('nome')
            ->get();
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
    }

    /**
     * Find a comune by name (case insensitive)
     *
     * @param string $nome The name of the comune to find (case insensitive)
     * @return static|null The found comune or null if not found
     */
    public static function findByNome(string $nome): ?self
    {
        return static::all()->first(function ($comune) use ($nome) {
            return strtolower($comune->nome) === strtolower($nome);
        });
    }

    /**
     * Find comuni by CAP code (partial match supported)
     *
     * @param string $cap The CAP code to search for
     * @return Collection<static> Collection of matching comuni
     */
    public static function findByCap(string $cap): Collection
    {
        return static::where('cap', 'like', "%{$cap}%")->get();
    }

    /**
     * Find a city by ID
     * 
     * @param int $id
     * @return array{id: int, nome: string, provincia: string, regione: string, cap: string, codice_catastale: string, popolazione: int, altitudine: int, superficie: float, lat: float, lng: float, zona_altimetrica: string}|null
     */
    public static function findComune(int $id): ?array
    {
        $comune = static::query()->where('id', $id)->first();
        return $comune ? $comune->toArray() : null;
    }

    /**
     * Get the directory where Comune JSON files are stored.
     *
     * @return string
     */
    public function getJsonDirectory(): string
    {
        return $this->jsonDirectory;
    }

    /**
     * Set the directory where Comune JSON files are stored.
     *
     * @param string $directory
     * @return void
     */
    public function setJsonDirectory(string $directory): void
    {
        $this->jsonDirectory = $directory;
    }
}
