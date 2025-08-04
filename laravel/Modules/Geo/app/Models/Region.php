<?php

declare(strict_types=1);

namespace Modules\Geo\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Forms\Get;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string|null $name
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Geo\Models\Province> $provinces
 * @property-read int|null $provinces_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereName($value)
 * @mixin \Eloquent
 */
class Region extends BaseModel
{
    use \Sushi\Sushi;

    /**
     * The data type of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'integer';


    protected array $schema = [
        'id' => 'integer',
        'name' => 'string',
    ];

    public function getRows(): array{
        $rows=Comune::select("regione->codice as id","regione->nome as name")
            ->distinct()
            ->orderBy("regione->nome")
            ->get();
       
        return $rows->toArray();
    }

    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class);
    }

    public static function getOptions(Get $get): array
    {
        return self::orderBy('name')
            ->get()
            ->pluck("name", "id")
            ->toArray();
<<<<<<< HEAD
    }
}
=======
=======
/**
 * Model readonly per le regioni italiane, ispirato a Squire.
 * Legge i dati da json tramite GeoJsonModel.
 * Vedi Geo/docs/geo-json-model.md, module_geo.md, Xot/module-structure.md
 */

=======
>>>>>>> 39ba294d (♻️ (Cap, City, Province, Region): deprecate legacy models and unify into a single Comune model to simplify data access and improve maintainability)
use Illuminate\Support\Collection;

/**
 * @deprecated Usare Modules\Geo\Models\Comune. Questa classe è solo una facciata legacy per compatibilità.
 * Tutti i metodi delegano a Comune.
 * Vedi Geo/docs/geo_entities.md
 */
class Region
{
    /**
     * Restituisce tutte le regioni uniche (proxy).
     */
    public static function all(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return static::loadData()->pluck('region')->unique()->values();
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
        $res=static::loadData()->pluck('regione')->unique()->values();

        return $res;
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
=======
        return Comune::allRegions();
>>>>>>> 39ba294d (♻️ (Cap, City, Province, Region): deprecate legacy models and unify into a single Comune model to simplify data access and improve maintainability)
    }
}
>>>>>>> aurmich/dev
