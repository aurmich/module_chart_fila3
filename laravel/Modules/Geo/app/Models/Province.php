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
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int|null $region_id
 * @property int $id
 * @property string|null $name
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Geo\Models\Locality> $localities
 * @property-read int|null $localities_count
 * @property-read \Modules\Geo\Models\Region|null $region
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereRegionId($value)
 * @mixin \Eloquent
 */
class Province extends BaseModel
{
    use \Sushi\Sushi;

    protected array $schema = [
        'region_id' => 'integer',
        'id' => 'integer',
        'name' => 'string',
    ];


    public function getRows(): array{
        $rows=Comune::select("regione->codice as region_id","provincia->codice as id","provincia->nome as name")
            ->distinct()
            ->orderBy("provincia->nome")
            ->get();
       
        return $rows->toArray();
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function localities(): HasMany
    {
        return $this->hasMany(Locality::class);
    }

    public static function getOptions(Get $get): array
    {
        return self::where('region_id',$get('administrative_area_level_1'))
            ->orderBy('name')
            ->get()
            ->pluck("name", "id")
            ->toArray();

            
<<<<<<< HEAD
    }
}
=======
=======
/**
 * Model readonly per le province italiane, ispirato a Squire.
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
class Province
{
    /**
     * Restituisce tutte le province uniche (proxy).
     */
    public static function all(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return static::loadData()->where('region', $region)->pluck('province')->unique()->values();
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
        return static::loadData()->where('regione.codice', $region)->pluck('provincia')->unique()->values();
>>>>>>> 832cff2a (🐛 (GeoJsonModel, Province, Region): fix incorrect paths and keys in GeoJsonModel and related classes to ensure proper data loading and access)
=======
        return Comune::allProvinces();
>>>>>>> 39ba294d (♻️ (Cap, City, Province, Region): deprecate legacy models and unify into a single Comune model to simplify data access and improve maintainability)
    }

    /**
     * Restituisce le province per regione (proxy).
     */
    public static function byRegion(string $regionCode): Collection
    {
        return Comune::byRegion($regionCode)->pluck('provincia.nome', 'provincia.codice')->unique();
    }
}
>>>>>>> aurmich/dev
