<?php

declare(strict_types=1);

namespace Modules\Geo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Geo\Contracts\HasGeolocation;
use Modules\Geo\Database\Factories\AddressFactory;
use Modules\Geo\Enums\AddressTypeEnum;

/**
 * Class Address
 * 
 * Implementazione di Schema.org PostalAddress
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
 *
>>>>>>> f3e4ec66 (.)
 * @property int $id
 * @property string|null $model_type
 * @property int|null $model_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $route
 * @property string|null $street_number
 * @property string|null $locality
 * @property string|null $administrative_area_level_3
 * @property string|null $administrative_area_level_2
 * @property string|null $administrative_area_level_1
 * @property string|null $country
 * @property string|null $postal_code
 * @property string|null $formatted_address
 * @property string|null $place_id
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $type
 * @property bool $is_primary
 * @property array|null $extra_data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * // implements HasGeolocation
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3e4ec66 (.)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent|null $addressable
<<<<<<< HEAD
 * @property-read \Modules\User\Models\Profile|null $creator
 * @property-read string $full_address
 * @property-read string $street_address
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent|null $model
 * @property-read \Modules\User\Models\Profile|null $updater
=======
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read string $full_address
 * @property-read string $street_address
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent|null $model
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
>>>>>>> f3e4ec66 (.)
 * @method static \Modules\Geo\Database\Factories\AddressFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address nearby(float $latitude, float $longitude, float $radiusKm = '10')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address ofType($type)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address primary()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereExtraData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereIsPrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address wherePlaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereUpdatedBy($value)
 * @mixin \Eloquent
<<<<<<< HEAD
 */
class Address extends BaseModel 
{
        
    /** @var list<string> */
   protected $fillable = [
=======
=======
>>>>>>> f3e4ec66 (.)
 */
class Address extends BaseModel 
{
    use HasFactory;
        
<<<<<<< HEAD
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    /** @var list<string> */
   protected $fillable = [
>>>>>>> 345f8677 (phpstan)
        'model_type',
        'model_id',
        'name',
        'description',
        'route',
        'street_number',
        'locality',
        'administrative_area_level_3', // comune
        'administrative_area_level_2', // provincia
        'administrative_area_level_1', // regione
        'country',// Stato/Paese
        'postal_code',
        'formatted_address',
        'place_id',
        'latitude',
        'longitude',
        'type',
        'is_primary',
        'extra_data',
    ];
    
    /**
<<<<<<< HEAD
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'latitude' => 'float',
            'longitude' => 'float',
            'is_primary' => 'boolean',
            'extra_data' => 'array',
            'type' => AddressTypeEnum::class,
        ];
    }
    
=======
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'is_primary' => 'boolean',
        'extra_data' => 'array',
        'type' => AddressTypeEnum::class,
    ];
    
<<<<<<< HEAD
    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return AddressFactory::new();
    }
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
    
    /**
     * Get the parent model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function model(): MorphTo
    {
        return $this->morphTo();
    }
    
    /**
     * Relazione polimorfica (alternativa con nome più descrittivo)
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function addressable(): MorphTo
    {
        return $this->morphTo('model');
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
    /*
     * Get the city relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
=======
    /**
     * Get the city relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    /*
     * Get the city relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'locality', 'name');
    }
<<<<<<< HEAD
<<<<<<< HEAD
    */
    /*
<<<<<<< HEAD
     * Get the province relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'administrative_area_level_2', 'name');
    }
    */
    /*
     * Get the region relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
    public function regione(): BelongsTo
    {
        return $this->belongsTo(Regione::class, 'administrative_area_level_1', 'name');
    }
     */
    public function getRegione():?array{
        /** @phpstan-ignore method.unresolvableReturnType */
        $res= Comune::select('regione')
        ->distinct()
        ->orderBy('regione->nome')
        ->where('regione->codice', $this->administrative_area_level_1)
        ->get()
        /** @phpstan-ignore argument.unresolvableType */
        ->map(function($item){
            /** @phpstan-ignore offsetAccess.notFound, offsetAccess.notFound */
            return ['codice'=>$item->regione['codice'],'nome'=>$item->regione['nome']];
        })
        ;
        
        
        return $res->first();
    }

    public function getProvincia():?array{
        /** @phpstan-ignore method.unresolvableReturnType */
        $res= Comune::select('provincia')
        ->distinct()
        ->orderBy('provincia->nome')
        ->where('provincia->codice', $this->administrative_area_level_2)
        ->get()
        /** @phpstan-ignore argument.unresolvableType */
        ->map(function($item){
            /** @phpstan-ignore-next-line */
            return [
                /** @phpstan-ignore offsetAccess.notFound */
                'codice'=>$item->provincia['codice'],
                /** @phpstan-ignore offsetAccess.notFound */
                'nome'=>$item->provincia['nome']
            ];
        })
        ;
        return $res->first();
    }


    public function getLocality():?array{
        /** @phpstan-ignore-next-line */
        $res= Comune::where('codice', $this->locality)
        ->distinct()
        ->first()
        ?->toArray()
        ;
        return $res;
    }
    
    /**
     * Getter per l'indirizzo completo in formato italiano
     *
     * @return string
     */
    public function getFullAddressAttribute(): string
    {
        
        $parts = array_filter([
            $this->route . ($this->street_number ? ' ' . $this->street_number : ''),
            $this->locality,
            $this->administrative_area_level_3, // Provincia
            $this->administrative_area_level_2, // Regione
            $this->postal_code,
            $this->country
        ]);

        return implode(', ', $parts);
    }


    public function getFullAddress(): ?string
    {
        $parts = array_filter([
            $this->route . ($this->street_number ? ' ' . $this->street_number : ''),
            $this->locality,
            $this->administrative_area_level_3, // Provincia
            $this->administrative_area_level_2, // Regione
            $this->postal_code,
            $this->country
        ]);

=======
    
=======
    */
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    /**
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
     * Get the province relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'administrative_area_level_2', 'name');
    }
    */
    /*
     * Get the region relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
    public function regione(): BelongsTo
    {
        return $this->belongsTo(Regione::class, 'administrative_area_level_1', 'name');
    }
     */
    public function getRegione():?array{
        /** @phpstan-ignore-next-line */
        $res= Comune::select('regione')
        ->distinct()
        ->orderBy('regione->nome')
        ->where('regione->codice', $this->administrative_area_level_1)
        ->get()
        /** @phpstan-ignore-next-line */
        ->map(function($item){
            /** @phpstan-ignore-next-line */
            return ['codice'=>$item->regione['codice'],'nome'=>$item->regione['nome']];
        })
        ;
        
        
        return $res->first();
    }

    public function getProvincia():?array{
        /** @phpstan-ignore-next-line */
        $res= Comune::select('provincia')
        ->distinct()
        ->orderBy('provincia->nome')
        ->where('provincia->codice', $this->administrative_area_level_2)
        ->get()
        /** @phpstan-ignore-next-line */
        ->map(function($item){
            /** @phpstan-ignore-next-line */
            return [
                /** @phpstan-ignore-next-line */
                'codice'=>$item->provincia['codice'],
                /** @phpstan-ignore-next-line */
                'nome'=>$item->provincia['nome']
            ];
        })
        ;
        return $res->first();
    }


    public function getLocality():?array{
        /** @phpstan-ignore-next-line */
        $res= Comune::where('codice', $this->locality)
        ->distinct()
        ->first()
        ?->toArray()
        ;
        return $res;
    }
    
    /**
     * Getter per l'indirizzo completo in formato italiano
     *
     * @return string
     */
    public function getFullAddressAttribute(): string
    {
        
        $parts = array_filter([
            $this->route . ($this->street_number ? ' ' . $this->street_number : ''),
            $this->locality,
            $this->administrative_area_level_3, // Provincia
            $this->administrative_area_level_2, // Regione
            $this->postal_code,
            $this->country
        ]);

>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
        return implode(', ', $parts);
    }


    public function getFullAddress(): ?string
    {
        $parts = array_filter([
            $this->route . ($this->street_number ? ' ' . $this->street_number : ''),
            $this->locality,
            $this->administrative_area_level_3, // Provincia
            $this->administrative_area_level_2, // Regione
            $this->postal_code,
            $this->country
        ]);

        return implode(', ', $parts);
    }
    
    /**
     * Getter per l'indirizzo strada completo
     *
     * @return string
     */
    public function getStreetAddressAttribute(): string
    {
        return trim(($this->route ?? '') . ' ' . ($this->street_number ?? ''));
    }
    
    /**
     * Get the formatted address.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFormattedAddressAttribute(?string $value): ?string
    {
        if ($value) {
            return $value;
=======
    public function getFormattedAddressAttribute(): ?string
    {
        if ($this->formatted_address) {
            return $this->formatted_address;
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    public function getFormattedAddressAttribute(?string $value): ?string
    {
        if ($value) {
            return $value;
>>>>>>> a872e835 (✨ (AddressResource.php): replace locality text input with a searchable select)
        }
        
        $parts = [];
        
        // Indirizzo stradale
        if ($this->route) {
            $parts[] = $this->getStreetAddressAttribute();
        }
        
        // Località e provincia (formato italiano)
        $localityParts = [];
        if ($this->postal_code) {
            $localityParts[] = $this->postal_code;
        }
        
        if ($this->locality) {
            $localityParts[] = $this->locality;
            
            // Per indirizzi italiani, aggiungiamo la sigla provincia
            if ($this->country === 'IT' && $this->administrative_area_level_3) {
                // Se è un'implementazione reale, potremmo derivare la sigla dalla provincia
                $provinciaSigla = $this->extra_data['provincia_sigla'] ?? null;
                if ($provinciaSigla) {
                    $localityParts[] = "({$provinciaSigla})";
                }
            }
        }
        
        if (!empty($localityParts)) {
            $parts[] = implode(' ', $localityParts);
        }
        
        // Regione
        if ($this->administrative_area_level_2) {
            $parts[] = $this->administrative_area_level_2;
        }
        
        // Paese
        if ($this->country) {
            $countryName = $this->administrative_area_level_1 ?? $this->country;
            $parts[] = strtoupper($countryName);
        }
        
        return implode("\n", $parts);
    }
    
    /**
     * Get the latitude of the address.
     *
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }
    
    /**
     * Get the longitude of the address.
     *
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }
    
    /**
     * Get the formatted address required by HasGeolocation interface.
     *
     * @return string
     */
    public function getFormattedAddress(): string
    {
        return $this->formatted_address ?? '';
    }
    
    /**
     * Restituisce i dati in formato Schema.org PostalAddress
     *
     * @return array<string, mixed>
     */
    public function toSchemaOrg(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'PostalAddress',
            'name' => $this->name,
            'description' => $this->description,
            'streetAddress' => $this->getStreetAddressAttribute(),
            'addressLocality' => $this->locality,
            'addressSubregion' => $this->administrative_area_level_3, // Provincia
            'addressRegion' => $this->administrative_area_level_2, // Regione
            'addressCountry' => $this->country,
            'postalCode' => $this->postal_code,
        ];
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
   
=======
    /**
     * Metodo statico per creare da risposta Google Maps
     *
     * @param array<string, mixed> $googleData
     * @param string|null $name
     * @param string|null $description
     * @return static
     */
    public static function createFromGoogleMaps(array $googleData, ?string $name = null, ?string $description = null): self
    {
        $components = collect($googleData['address_components'] ?? [])
            ->keyBy(fn($component) => $component['types'][0] ?? 'unknown');

        return self::create([
            'name' => $name,
            'description' => $description,
            'street_number' => $components->get('street_number')['long_name'] ?? null,
            'route' => $components->get('route')['long_name'] ?? null,
            'locality' => $components->get('locality')['long_name'] ?? 
                        $components->get('administrative_area_level_3')['long_name'] ?? null,
            'administrative_area_level_3' => $components->get('administrative_area_level_2')['long_name'] ?? null, // Provincia
            'administrative_area_level_2' => $components->get('administrative_area_level_1')['long_name'] ?? null, // Regione
            'administrative_area_level_1' => $components->get('country')['long_name'] ?? null,
            'country' => $components->get('country')['short_name'] ?? null,
            'postal_code' => $components->get('postal_code')['long_name'] ?? null,
            'formatted_address' => $googleData['formatted_address'] ?? null,
            'place_id' => $googleData['place_id'] ?? null,
            'latitude' => $googleData['geometry']['location']['lat'] ?? null,
            'longitude' => $googleData['geometry']['location']['lng'] ?? null,
        ]);
    }
    
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
   
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
    /**
     * Scope per cercare indirizzi nelle vicinanze
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param float $latitude
     * @param float $longitude
     * @param float $radiusKm
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNearby($query, float $latitude, float $longitude, float $radiusKm = 10)
    {
        return $query->selectRaw("
            *,
            (6371 * acos(cos(radians(?)) * cos(radians(latitude)) * cos(radians(longitude) - radians(?)) + sin(radians(?)) * sin(radians(latitude)))) AS distance
        ", [$latitude, $longitude, $latitude])
        ->having('distance', '<', $radiusKm)
        ->orderBy('distance');
    }
    
    /**
     * Scope a query to only include primary addresses.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePrimary($query)
    {
        return $query->where('is_primary', true);
    }
    
    /**
     * Scope a query to filter by address type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|AddressTypeEnum $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type instanceof AddressTypeEnum ? $type->value : $type);
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
}
>>>>>>> 2bcfd382 (fix Address)
