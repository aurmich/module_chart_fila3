<?php

declare(strict_types=1);

namespace Modules\Geo\Models\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
use Webmozart\Assert\Assert;
use Modules\Geo\Models\Address;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
=======
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Geo\Models\Address;
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
use Modules\Geo\Models\Address;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)

/**
 * Trait HasAddress
 * 
 * Fornisce funzionalità per la gestione degli indirizzi nei modelli Eloquent.
 * Questo trait implementa la relazione polimorfica con il modello Address
 * e offre metodi di utilità per la gestione degli indirizzi.
 * 
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Geo\Models\Address> $addresses
 */
trait HasAddress
{
    /**
     * Ottiene gli indirizzi associati al modello.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'model');
    }
    
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
     * Ottiene indirizzo associato al modello.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'model');
    }
    
    /**
<<<<<<< HEAD
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
     * Ottiene l'indirizzo principale del modello.
     *
     * @return \Modules\Geo\Models\Address|null
     */
    public function primaryAddress(): ?Address
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
        $res= $this->addresses()->where('is_primary', true)->first();
        if($res==null){
            return $res;
        }
        Assert::isInstanceOf($res, Address::class);
        return $res;
<<<<<<< HEAD
=======
        return $this->addresses()->where('is_primary', true)->first();
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
    }
    
    /**
     * Ottiene l'indirizzo completo formattato.
     *
     * @return string|null
     */
    public function getFullAddress(): ?string
    {
        $address = $this->primaryAddress();
<<<<<<< HEAD
<<<<<<< HEAD
        return $address ? $address->getFullAddress() : null;
    }


    public function getFullAddressAttribute(?string $value): ?string
    {
        if($value){
            return $value;
        }
        $address = $this->address()->first();
        if($address==null){
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore method.notFound */
=======
>>>>>>> 23f43388 (feat: add openingHoursField to studiorelationmanager of doctorresource)
=======
        /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
        $locality=$address->getLocality();
        if($locality==null){
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore property.notFound, property.notFound */
=======
        /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
        return $address->street_address.' '.$address->street_number.' '.implode('',$locality['cap']).' '.$locality['nome'].' ('.$locality['provincia']['nome'].') - '.$locality['regione']['nome'];
=======
        return $address ? $address->getFormattedAddress() : null;
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
        return $address ? $address->getFullAddress() : null;
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======
        return $address->street_address.' '.$address->street_number.' '.implode('',$locality['cap']).' '.$locality['nome'].' ('.$locality['provincia']['nome'].') - '.$locality['regione']['nome'];
>>>>>>> 23f43388 (feat: add openingHoursField to studiorelationmanager of doctorresource)
    }
    
    /**
     * Ottiene la località dell'indirizzo principale.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        $address = $this->primaryAddress();
        return $address ? $address->locality : null;
    }
    
    /**
     * Ottiene il CAP dell'indirizzo principale.
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        $address = $this->primaryAddress();
        return $address ? $address->postal_code : null;
    }
    
    /**
     * Ottiene la provincia dell'indirizzo principale.
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        $address = $this->primaryAddress();
        return $address ? $address->administrative_area_level_3 : null;
    }
    
    /**
     * Ottiene la regione dell'indirizzo principale.
     *
     * @return string|null
     */
    public function getRegion(): ?string
    {
        $address = $this->primaryAddress();
        return $address ? $address->administrative_area_level_2 : null;
    }
    
    /**
     * Ottiene il paese dell'indirizzo principale.
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        $address = $this->primaryAddress();
        return $address ? $address->country : null;
    }
    
    /**
     * Imposta un indirizzo come principale e rimuove il flag da tutti gli altri.
     *
     * @param \Modules\Geo\Models\Address $address
     * @return bool
     */
    public function setAsPrimaryAddress(Address $address): bool
    {
        // Verifica che l'indirizzo appartenga a questo modello
        if ($address->model_id != $this->id || $address->model_type != get_class($this)) {
            return false;
        }
        
        // Rimuovi il flag is_primary da tutti gli altri indirizzi
        $this->addresses()
            ->where('id', '!=', $address->id)
            ->where('is_primary', true)
            ->update(['is_primary' => false]);
        
        // Imposta questo indirizzo come principale
        return $address->update(['is_primary' => true]);
    }
    
    /**
     * Ottiene gli indirizzi di un determinato tipo.
     *
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAddressesByType(string $type)
    {
        return $this->addresses()->where('type', $type)->get();
    }
    
    /**
     * Aggiunge un nuovo indirizzo al modello.
     *
     * @param array<string, mixed> $data
     * @param bool $setPrimary Se impostare questo indirizzo come principale
     * @return \Modules\Geo\Models\Address
     */
    public function addAddress(array $data, bool $setPrimary = false): Address
    {
        // Se è il primo indirizzo o è richiesto esplicitamente, impostalo come principale
        if ($setPrimary || $this->addresses()->count() === 0) {
            $data['is_primary'] = true;
            
            // Rimuovi il flag is_primary da tutti gli altri indirizzi
            if ($this->addresses()->count() > 0) {
                $this->addresses()->update(['is_primary' => false]);
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore return.type */
=======
        
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
        /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
        return $this->addresses()->create($data);
    }
    
    /**
     * Aggiorna l'indirizzo principale.
     *
     * @param array<string, mixed> $data
     * @return \Modules\Geo\Models\Address|null
     */
    public function updatePrimaryAddress(array $data): ?Address
    {
        $primaryAddress = $this->primaryAddress();
        
        if (!$primaryAddress) {
            return $this->addAddress($data, true);
        }
        
        $primaryAddress->update($data);
        return $primaryAddress;
    }
    
    /**
     * Scope per filtrare i modelli in base alla città dell'indirizzo.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $city
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInCity($query, string $city)
    {
        return $query->whereHas('addresses', function ($q) use ($city) {
            $q->where('locality', $city);
        });
    }
    
    /**
     * Scope per filtrare i modelli in base alla provincia dell'indirizzo.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $province
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInProvince($query, string $province)
    {
        return $query->whereHas('addresses', function ($q) use ($province) {
            $q->where('administrative_area_level_3', $province);
        });
    }
    
    /**
     * Scope per filtrare i modelli in base alla regione dell'indirizzo.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $region
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInRegion($query, string $region)
    {
        return $query->whereHas('addresses', function ($q) use ($region) {
            $q->where('administrative_area_level_2', $region);
        });
    }
    
    /**
     * Scope per filtrare i modelli in base al CAP dell'indirizzo.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $postalCode
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInPostalCode($query, string $postalCode)
    {
        return $query->whereHas('addresses', function ($q) use ($postalCode) {
            $q->where('postal_code', $postalCode);
        });
    }
}