<?php

declare(strict_types=1);

namespace Modules\Geo\Models;

use Illuminate\Support\Collection;
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\file_get_contents;
use function Safe\json_decode;
=======
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
use function Safe\file_get_contents;
>>>>>>> 345f8677 (phpstan)

/**
 * Base model readonly per dati geografici statici (ispirato a Squire).
 * Carica e cache-izza i dati da json.
 */
abstract class GeoJsonModel
{
    /**
     * Percorso relativo al file json (da ridefinire nelle sottoclassi se necessario)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string $jsonFile = 'resources/json/comuni.json';
=======
    protected static string $jsonFile = 'Resources/json/comuni.json';
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
    protected static string $jsonFile = 'resources/json/comuni.json';
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)

    /**
     * Carica e cache-izza i dati dal file json.
     */
    protected static function loadData(): Collection
    {
        $path = module_path('Geo', static::$jsonFile);
        $cacheKey = 'geo_comuni_json_' . md5($path);
        $data = cache()->rememberForever($cacheKey, fn() => json_decode(file_get_contents($path), true));
<<<<<<< HEAD
        /**
         * @phpstan-ignore argument.type, argument.templateType, argument.templateType
         */
=======
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
        return collect($data);
    }

    /**
     * Restituisce tutti i dati come collection.
     */
    public static function all(): Collection
    {
        return static::loadData();
    }

    /**
     * Filtra la collection per chiave/valore.
<<<<<<< HEAD
     * 
     * @phpstan-ignore missingType.parameter, missingType.generics
     */
    public static function where(string $key, $value): Collection
    {
        /**
         * @phpstan-ignore-next-line
         */
=======
     */
    public static function where(string $key, $value): Collection
    {
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
        return static::all()->where($key, $value);
    }
}
