<?php

declare(strict_types=1);

namespace Modules\User\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Contracts\UserContract;
use Modules\User\Database\Factories\ProfileFactory;
use Modules\User\Models\Pivots\DeviceProfile;
use Modules\User\Models\Pivots\ProfileTeam;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\SchemalessAttributes\SchemalessAttributesTrait as HasSchemalessAttributes;
=======
use Spatie\SchemalessAttributes\HasSchemalessAttributes;
>>>>>>> aurmich/dev
=======
use Spatie\SchemalessAttributes\SchemalessAttributesTrait as HasSchemalessAttributes;
>>>>>>> 345f8677 (phpstan)
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * User Profile Model
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> aurmich/dev
 * Represents a user profile with relationships to devices, teams, and roles.
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $user_name
 * @property string $email
 * @property string|null $phone
 * @property string|null $bio
 * @property string|null $avatar
 * @property string|null $timezone
 * @property string|null $locale
 * @property array $preferences
 * @property string $status
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra
 * @property-read string $avatar
 * @property-read ProfileContract|null $creator
=======
=======
>>>>>>> b58de900 (.)
=======
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
use Modules\User\Contracts\UserContract;
use Modules\User\Database\Factories\ProfileFactory;
use Modules\User\Models\Pivots\DeviceProfile;
use Modules\User\Models\Pivots\ProfileTeam;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait as HasSchemalessAttributes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a3174e5b (phpstan)
=======
>>>>>>> aurmich/dev
=======
use Modules\User\Contracts\UserContract;
use Modules\Xot\Contracts\ProfileContract;

>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
/**
 * User Profile Model
 * 
 * Represents a user profile with relationships to devices, teams, and roles.
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $user_name
 * @property string $email
 * @property string|null $phone
 * @property string|null $bio
 * @property string|null $avatar
 * @property string|null $timezone
 * @property string|null $locale
 * @property array $preferences
 * @property string $status
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra
 * @property-read string $avatar
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read \Modules\Broker\Models\Profile|null $creator
>>>>>>> 54f4fa16 (.)
=======
 * @property-read ProfileContract|null $creator
>>>>>>> a3174e5b (phpstan)
=======
<<<<<<< HEAD
 * @property-read \Modules\Broker\Models\Profile|null $creator
=======
 * @property-read ProfileContract|null $creator
>>>>>>> aurmich/dev
=======
 * @property-read ProfileContract|null $creator
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
 * @property-read ProfileContract|null $creator
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser> $deviceUsers
 * @property-read int|null $device_users_count
 * @property-read \Modules\User\Models\ProfileTeam|\Modules\User\Models\DeviceProfile|null $pivot
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device> $devices
 * @property-read int|null $devices_count
 * @property-read string|null $first_name
 * @property-read string|null $full_name
 * @property-read string|null $last_name
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser> $mobileDeviceUsers
 * @property-read int|null $mobile_device_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device> $mobileDevices
 * @property-read int|null $mobile_devices_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team> $teams
 * @property-read int|null $teams_count
<<<<<<< HEAD
 * @property-read ProfileContract|null $updater
 * @property-read UserContract|null $user
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read ProfileContract|null $updater
 * @property-read UserContract|null $user
=======
 * @property-read \Modules\Broker\Models\Profile|null $updater
 * @property-read \Modules\Broker\Models\User|null $user
>>>>>>> 54f4fa16 (.)
=======
 * @property-read ProfileContract|null $updater
 * @property-read UserContract|null $user
>>>>>>> a3174e5b (phpstan)
=======
 * @property-read \Modules\Broker\Models\Profile|null $updater
 * @property-read \Modules\Broker\Models\User|null $user
=======
 * @property-read ProfileContract|null $updater
 * @property-read UserContract|null $user
>>>>>>> aurmich/dev
=======
 * @property-read ProfileContract|null $updater
 * @property-read UserContract|null $user
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
 * @property-read ProfileContract|null $updater
 * @property-read UserContract|null $user
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
 * @property-read string|null $user_name
 * @method static \Modules\User\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile withoutRole($roles, $guard = null)
 * @mixin \Eloquent
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
class Profile extends BaseProfile implements HasMedia
{
    use HasRoles;
    use InteractsWithMedia;
    use HasSchemalessAttributes;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
     * The schemaless attributes.
     *
     * @var list<string>
     */
    protected $schemalessAttributes = [
        'extra',
    ];

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'email',
        'phone',
        'bio',
        'avatar',
        'timezone',
        'locale',
        'status',
        'extra',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'deleted_at',
    ];

    /**
     * The attributes that should be cast.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'preferences' => 'array',
        'extra' => 'array',
    ];
=======
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'preferences' => 'array',
            'extra' => 'array',
        ];
    }
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'preferences' => 'array',
        'extra' => 'array',
    ];
>>>>>>> fb6fbaa2 (move resources/lang to lang)

    /**
     * The accessors to append to the model's array form.
     *
     * @var list<string>
     */
    protected $appends = [
        'full_name',
        'display_name',
        'initials',
        'avatar_url',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var list<string>
     */
    protected $with = [
        'media',
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Restituisce il nome completo dell'utente.
     *
     * @return string
=======
     * Get the user's full name.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Restituisce il nome completo dell'utente.
     *
     * @return string
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function getFullNameAttribute(): string
    {
        return trim("{$this->first_name} {$this->last_name}");
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Restituisce il display name dell'utente.
     *
     * @return string
=======
     * Get the user's display name.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Restituisce il display name dell'utente.
     *
     * @return string
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function getDisplayNameAttribute(): string
    {
        return $this->user_name ?: $this->full_name;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Restituisce le iniziali dell'utente.
     *
     * @return string
=======
     * Get the user's initials.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Restituisce le iniziali dell'utente.
     *
     * @return string
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function getInitialsAttribute(): string
    {
        return strtoupper(
<<<<<<< HEAD
<<<<<<< HEAD
            substr((string) $this->first_name, 0, 1) .
            substr((string) $this->last_name, 0, 1)
=======
            substr($this->first_name, 0, 1) . 
            substr($this->last_name, 0, 1)
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
            substr((string) $this->first_name, 0, 1) .
            substr((string) $this->last_name, 0, 1)
>>>>>>> fb6fbaa2 (move resources/lang to lang)
        );
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Restituisce l'URL dell'avatar dell'utente.
     *
     * @return string|null
=======
     * Get the URL to the user's profile photo.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Restituisce l'URL dell'avatar dell'utente.
     *
     * @return string|null
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function getAvatarUrlAttribute(): ?string
    {
        return $this->getFirstMediaUrl('avatar') ?: null;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Relazione con l'utente proprietario del profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
=======
     * Get the user that owns the profile.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Relazione con l'utente proprietario del profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Relazione con i dispositivi associati al profilo.
     *
     * @return HasManyThrough
=======
     * Get all of the profile's devices.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Relazione con i dispositivi associati al profilo.
     *
     * @return HasManyThrough
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function devices(): HasManyThrough
    {
        return $this->hasManyThrough(
            Device::class,
            DeviceUser::class,
            'profile_id',
            'id',
            'id',
            'device_id'
        );
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Relazione con i device user associati al profilo.
     *
     * @return HasMany
=======
     * Get all of the profile's device users.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Relazione con i device user associati al profilo.
     *
     * @return HasMany
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function deviceUsers(): HasMany
    {
        return $this->hasMany(DeviceUser::class);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Relazione con il creatore del profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
=======
     * Get the profile's creator.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Relazione con il creatore del profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function creator(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(static::class, 'created_by');
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Relazione con l'ultimo utente che ha aggiornato il profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
=======
     * Get the profile's last updater.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Relazione con l'ultimo utente che ha aggiornato il profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function updater(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(static::class, 'updated_by');
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Relazione con i team associati al profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
=======
     * Get the profile's teams.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Relazione con i team associati al profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    public function teams(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'profile_team')
            ->using(ProfileTeam::class)
            ->withPivot('role', 'status')
            ->withTimestamps();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Crea una nuova factory per il modello.
     *
     * @return ProfileFactory
=======
     * Create a new factory instance for the model.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Crea una nuova factory per il modello.
     *
     * @return ProfileFactory
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     */
    protected static function newFactory(): ProfileFactory
    {
        return ProfileFactory::new();
    }
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 345f8677 (phpstan)
}
=======
class Profile extends BaseProfile {}
>>>>>>> 54f4fa16 (.)
=======
}
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
