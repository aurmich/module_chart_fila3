<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev
use Carbon\Carbon;
use Spatie\Activitylog\LogOptions;
use Modules\User\Models\BaseTenant;
use Spatie\OpeningHours\OpeningHours;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Models\Contracts\HasName;
use Modules\SaluteOra\Models\BaseModel;
use Modules\User\Models\Traits\IsTenant;
use Modules\Xot\Models\Traits\RelationX;
use Illuminate\Database\Eloquent\Builder;
use Modules\Geo\Models\Traits\HasAddress;
use Modules\User\Contracts\TenantContract;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Studio model for the SaluteOra module.
<<<<<<< HEAD
=======
=======
=======
use Spatie\Activitylog\LogOptions;
use Modules\User\Models\BaseTenant;
>>>>>>> 2bcfd382 (fix Address)
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
use Filament\Models\Contracts\HasName;
use Modules\SaluteOra\Models\BaseModel;
use Modules\User\Models\Traits\IsTenant;
use Modules\Xot\Models\Traits\RelationX;
use Illuminate\Database\Eloquent\Builder;
use Modules\Geo\Models\Traits\HasAddress;
use Modules\User\Contracts\TenantContract;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
<<<<<<< HEAD
 * Modello Studio per il sistema multi-tenant.
 *
 * Rappresenta uno studio medico/dentistico che può avere
 * più dottori e gestire appuntamenti.
>>>>>>> 2099645a (.)
 *
 * @property int $id
 * @property string $name
<<<<<<< HEAD
 * @property string|null $address
<<<<<<< HEAD
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $slug
=======
 * @property string|null $city
 * @property string|null $postal_code
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
 * @property string|null $phone
 * @property string|null $email
>>>>>>> 2099645a (.)
=======
 * Studio model for the SaluteOra module.
>>>>>>> aurmich/dev
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $slug
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
 * @property string|null $website
 * @property string|null $registration_number
 * @property string|null $vat_number
 * @property string|null $description
 * @property array|null $opening_hours
 * @property array|null $services
 * @property bool $active
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
 * @property bool $is_active
 * @property int $owner_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Doctor> $doctors
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Appointment> $appointments
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Geo\Models\Address> $addresses
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Activity\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read int|null $addresses_count
 * @property-read int|null $appointments_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Modules\SaluteOra\Models\StudioUser|\Modules\SaluteOra\Models\DoctorStudio|null $pivot
 * @property-read int|null $doctors_count
 * @property-read string $services_string
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\SaluteOra\Models\User> $members
 * @property-read int|null $members_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\SaluteOra\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio active()
 * @method static \Modules\SaluteOra\Database\Factories\StudioFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio inCity(string $city)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio inPostalCode(string $postalCode)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio inProvince(string $province)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio inRegion(string $region)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereOpeningHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereVatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereWebsite($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
 * @property string|null $city
 * @property string|null $postal_code
 * @property string|null $province
 * @property string|null $region
 * @property string $country
 * @property string|null $tax_code
 * @property string|null $settings
 * @property string|null $business_hours
 * @property string|null $model_type
 * @property string|null $model_id
 * @property-read string|null $full_address
 * @method static Builder<static>|Studio ofCap(string|int|null $cap)
 * @method static Builder<static>|Studio whereAddress($value)
 * @method static Builder<static>|Studio whereBusinessHours($value)
 * @method static Builder<static>|Studio whereCity($value)
 * @method static Builder<static>|Studio whereCountry($value)
 * @method static Builder<static>|Studio whereModelId($value)
 * @method static Builder<static>|Studio whereModelType($value)
 * @method static Builder<static>|Studio wherePostalCode($value)
 * @method static Builder<static>|Studio whereProvince($value)
 * @method static Builder<static>|Studio whereRegion($value)
 * @method static Builder<static>|Studio whereSettings($value)
 * @method static Builder<static>|Studio whereTaxCode($value)
 * @mixin \Eloquent
 */
class Studio extends BaseTenant
{
    use LogsActivity;
    use HasAddress;
    

   /** @var string */
   protected $connection = 'salute_ora';
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
=======
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
>>>>>>> 8e4d163b (phpstan)
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Doctor> $doctors
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Appointment> $appointments
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Geo\Models\Address> $addresses
=======
 * @mixin \Eloquent
>>>>>>> f3e4ec66 (.)
 */
class Studio extends BaseTenant
{
    use LogsActivity;
    use HasAddress;
    

<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    protected $connection = 'mysql';
>>>>>>> 2099645a (.)
=======
    // La connessione è già definita in BaseModel come 'salute_ora'
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
   /** @var string */
   protected $connection = 'salute_ora';
>>>>>>> 2bcfd382 (fix Address)
>>>>>>> aurmich/dev

    /** @var string */
    protected $table = 'studios';

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a3174e5b (phpstan)
>>>>>>> aurmich/dev
    /** @var list<string> */
    protected $fillable = [
        'name',
        'slug',
<<<<<<< HEAD
=======
=======
    /** @var array<string> */
    protected $fillable = [
        'name',
<<<<<<< HEAD
<<<<<<< HEAD
        'address',
        'city',
        'postal_code',
>>>>>>> 2099645a (.)
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
        'slug',
>>>>>>> 2bcfd382 (fix Address)
>>>>>>> aurmich/dev
        'phone',
        'email',
        'website',
        'registration_number',
        'vat_number',
        'description',
        'opening_hours',
        'services',
        'active',
    ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
>>>>>>> aurmich/dev
     /** @var list<string> */
     protected $with = [
        'address',
     ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2099645a (.)
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
>>>>>>> aurmich/dev
    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'opening_hours' => 'array',
            'services' => 'array',
            'active' => 'boolean',
        ];
    }

<<<<<<< HEAD
    /*
     * Implementazione del contratto HasName per Filament tenancy.
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
    /*
     * Implementazione del contratto HasName per Filament tenancy.
    
=======
    /**
     * Implementazione del contratto HasName per Filament tenancy.
     */
>>>>>>> 2099645a (.)
=======
    /*
     * Implementazione del contratto HasName per Filament tenancy.
    
>>>>>>> 2bcfd382 (fix Address)
>>>>>>> aurmich/dev
    public function getFilamentName(): string
    {
        return $this->name;
    }
<<<<<<< HEAD
    */
=======
<<<<<<< HEAD
<<<<<<< HEAD
    */
=======

>>>>>>> 2099645a (.)
=======
    */
>>>>>>> 2bcfd382 (fix Address)
>>>>>>> aurmich/dev
    /**
     * Configurazione per il logging delle attività.
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'name',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'address',
                'city',
>>>>>>> 2099645a (.)
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
>>>>>>> aurmich/dev
                'phone',
                'email',
                'registration_number',
                'active'
            ])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2bcfd382 (fix Address)
>>>>>>> aurmich/dev
     * Relazione molti-a-molti con i dottori che lavorano nello studio.
     * 
     * IMPORTANTE: Questa è una relazione cross-database, dove:
     * - Doctor risiede nel database 'user'
     * - Studio risiede nel database 'salute_ora'
     * - doctor_studio (pivot) risiede nel database 'salute_ora'
     *
     * @return BelongsToMany
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
     */
    public function doctors(): BelongsToMany
    {
        // Per una relazione cross-database, non possiamo usare belongsToManyX
        // Dobbiamo specificare esplicitamente tutti i parametri
        return $this->belongsToManyX(Doctor::class);
<<<<<<< HEAD
=======
=======
     * Relazione con i dottori dello studio.
=======
>>>>>>> 2bcfd382 (fix Address)
     */
    public function doctors(): BelongsToMany
    {
<<<<<<< HEAD
        return $this->hasMany(Doctor::class, 'tenant_id');
>>>>>>> 2099645a (.)
=======
        // Per una relazione cross-database, non possiamo usare belongsToManyX
        // Dobbiamo specificare esplicitamente tutti i parametri
        return $this->belongsToManyX(Doctor::class);
>>>>>>> 2bcfd382 (fix Address)
>>>>>>> aurmich/dev
    }

    /**
     * Relazione con gli appuntamenti dello studio.
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'studio_id');
    }

    /**
     * Scope per studi attivi.
     */
<<<<<<< HEAD
    public function scopeActive(\Illuminate\Database\Eloquent\Builder $query): \Illuminate\Database\Eloquent\Builder
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function scopeActive(\Illuminate\Database\Eloquent\Builder $query): \Illuminate\Database\Eloquent\Builder
=======
    public function scopeActive($query)
>>>>>>> 2099645a (.)
=======
    public function scopeActive(\Illuminate\Database\Eloquent\Builder $query): \Illuminate\Database\Eloquent\Builder
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
    {
        return $query->where('active', true);
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Scope per studi in una specifica città.
     */
    public function scopeInCity($query, string $city)
    {
        return $query->where('city', $city);
    }

    /**
>>>>>>> 2099645a (.)
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
>>>>>>> aurmich/dev
     * Verifica se lo studio è attivo.
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * Attiva lo studio.
     */
    public function activate(): void
    {
        $this->update(['active' => true]);
    }

    /**
     * Disattiva lo studio.
     */
    public function deactivate(): void
    {
        $this->update(['active' => false]);
    }

    /**
     * Ottiene gli orari di apertura per un giorno specifico.
     */
    public function getOpeningHoursForDay(string $day): ?array
    {
        return $this->opening_hours[$day] ?? null;
    }

    /**
     * Verifica se lo studio è aperto in un giorno specifico.
     */
    public function isOpenOnDay(string $day): bool
    {
        $hours = $this->getOpeningHoursForDay($day);
        return $hours && !empty($hours['open']) && !empty($hours['close']);
    }

    /**
     * Ottiene tutti i servizi offerti dallo studio.
     */
    public function getServices(): array
    {
        return $this->services ?? [];
    }

    /**
     * Verifica se lo studio offre un servizio specifico.
     */
    public function hasService(string $service): bool
    {
        return in_array($service, $this->getServices());
    }

    /**
     * Aggiunge un servizio allo studio.
     */
    public function addService(string $service): void
    {
        $services = $this->getServices();
        if (!in_array($service, $services)) {
            $services[] = $service;
            $this->update(['services' => $services]);
        }
    }

    /**
     * Rimuove un servizio dallo studio.
     */
    public function removeService(string $service): void
    {
        $services = $this->getServices();
        $services = array_filter($services, fn($s) => $s !== $service);
        $this->update(['services' => array_values($services)]);
    }

    /**
     * Ottiene il numero di dottori attivi nello studio.
     */
    public function getActiveDoctorsCount(): int
    {
        return $this->doctors()->where('active', true)->count();
    }

    /**
     * Ottiene il numero di appuntamenti del mese corrente.
     */
    public function getCurrentMonthAppointmentsCount(): int
    {
        return $this->appointments()
<<<<<<< HEAD
            ->whereMonth('starts_at', now()->month)
            ->whereYear('starts_at', now()->year)
=======
<<<<<<< HEAD
            ->whereMonth('starts_at', now()->month)
            ->whereYear('starts_at', now()->year)
=======
            ->whereMonth('start_time', now()->month)
            ->whereYear('start_time', now()->year)
>>>>>>> 2099645a (.)
>>>>>>> aurmich/dev
            ->count();
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Ottiene l'indirizzo completo formattato.
     */
    public function getFullAddress(): string
    {
        $parts = array_filter([
            $this->address,
            $this->postal_code,
            $this->city,
        ]);

        return implode(', ', $parts);
    }

    /**
>>>>>>> 2099645a (.)
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
>>>>>>> aurmich/dev
     * Ottiene le informazioni di contatto formattate.
     */
    public function getContactInfo(): array
    {
        return array_filter([
            'phone' => $this->phone,
            'email' => $this->email,
            'website' => $this->website,
        ]);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
>>>>>>> aurmich/dev

    /**
     * Restituisce i servizi come stringa leggibile per Filament.
     */
    public function getServicesStringAttribute(): string
    {
        return is_array($this->services) ? implode(', ', $this->services) : (string) $this->services;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
>>>>>>> aurmich/dev


    public function scopeOfCap(Builder $query,string|int|null $cap): void
    {
        $query->whereHas('address', function($q) use ($cap) {
            $q->where('postal_code', $cap);
        });
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev

    public function getEnabledDatesByMonth(string $month): array
    {
        /*
        if($this->doctors->count()==0){
            $doctor = Doctor::inRandomOrder()->first();
            $this->doctors()->attach($doctor);
        }
        */
        $dates=[];
        $doctors=$this->doctors()->get();
        foreach($doctors as $doctor){
<<<<<<< HEAD
            //** @phpstan-ignore property.notFound */
            $tmp=$this->getDoctorEnabledDatesByMonth($doctor->id, $month);
            $dates=array_merge($dates, $tmp);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            //** @phpstan-ignore property.notFound */
=======
            //** @phpstan-ignore-next-line */
>>>>>>> 13ea6524 (phpstan)
            $tmp=$this->getDoctorEnabledDatesByMonth($doctor->id, $month);
            $dates=array_merge($dates, $tmp);
=======
            $pivot=DoctorStudio::where('studio_id',$this->id)->where('user_id',$doctor->id)->first();
            $openingHours=$pivot->getOpeningHours();
            for($i=1;$i<=31;$i++){
                $date = Carbon::parse($month.'-'.$i);
                $date1=$date->format('Y-m-d');
                if($openingHours->isOpenOn($date1)){
                    $dates[] = $date1;
                }
            }
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
            $tmp=$this->getDoctorEnabledDatesByMonth($doctor->id, $month);
            $dates=array_merge($dates, $tmp);
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
>>>>>>> aurmich/dev
            
        }
        return $dates;
        /*
        $openingHours = OpeningHours::create([
            //'monday'     => ['09:00-12:00', '13:00-18:00'],
            'monday'     => [],
            'tuesday'    => ['09:00-12:00', '13:00-18:00'],
            'wednesday'  => ['09:00-12:00'],
            'thursday'   => ['09:00-12:00', '13:00-18:00'],
            'friday'     => ['09:00-12:00', '13:00-20:00'],
            'saturday'   => ['09:00-12:00', '13:00-16:00'],
            'sunday'     => [],
            'exceptions' => [
                //'2016-11-11' => ['09:00-12:00'],
                //'2016-12-25' => [],
                '01-01'      => [],                // Recurring on each 1st of January
                '12-25'      => ['09:00-12:00'],   // Recurring on each 25th of December
            ],
        ]);

        $dates=[];
        for($i=1;$i<=31;$i++){
            $date = Carbon::parse($month.'-'.$i);
            $date1=$date->format('Y-m-d');
            if($openingHours->isOpenOn($date1)){
                $dates[] = $date1;
            }
        }
            */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        //return $dates;
       
    }


    public function getDoctorEnabledDatesByMonth(int|string|null $doctorId, string $month): array
    {
        $dates=[];
        $pivot=DoctorStudio::where('studio_id',$this->id)->where('user_id',$doctorId)->first();
        if(!$pivot){
            return [];
        }
        $openingHours=$pivot->getOpeningHours();
        for($i=1;$i<=31;$i++){
            $date = Carbon::parse($month.'-'.$i);
            $date1=$date->format('Y-m-d');
            if($openingHours->isOpenOn($date1)){
                $dates[] = $date1;
            }
        }
        return $dates;
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 2099645a (.)
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
=======
        return $dates;
       
    }
<<<<<<< HEAD
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======


    public function getDoctorEnabledDatesByMonth(int|string|null $doctorId, string $month): array
    {
        $dates=[];
        $pivot=DoctorStudio::where('studio_id',$this->id)->where('user_id',$doctorId)->first();
        if(!$pivot){
            return [];
        }
        $openingHours=$pivot->getOpeningHours();
        for($i=1;$i<=31;$i++){
            $date = Carbon::parse($month.'-'.$i);
            $date1=$date->format('Y-m-d');
            if($openingHours->isOpenOn($date1)){
                $dates[] = $date1;
            }
        }
        return $dates;
    }
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
>>>>>>> aurmich/dev
}
