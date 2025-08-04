<?php

declare(strict_types=1);

namespace Modules\User\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Panel;
use Parental\HasChildren;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Spatie\MediaLibrary\HasMedia;
use Laravel\Passport\HasApiTokens;
use Filament\Models\Contracts\HasName;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Notifications\Notifiable;
use Modules\User\Models\Traits\HasTeams;
use Modules\Xot\Models\Traits\RelationX;
use Filament\Models\Contracts\HasTenants;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Database\Factories\UserFactory;
<<<<<<< HEAD
use Modules\Xot\Actions\Factory\GetFactoryAction;
=======
>>>>>>> aurmich/dev
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\DatabaseNotificationCollection;

/**
 * Base User Model
 *
 * This is the base user model that provides the core authentication and authorization
 * functionality for the application. It extends Laravel's Authenticatable class
 * and implements the required interfaces for Filament and multi-tenancy.
=======
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\HasTenants;
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
use Filament\Panel;
use Parental\HasChildren;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Spatie\MediaLibrary\HasMedia;
use Laravel\Passport\HasApiTokens;
use Filament\Models\Contracts\HasName;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Notifications\Notifiable;
use Modules\User\Models\Traits\HasTeams;
use Modules\Xot\Models\Traits\RelationX;
use Filament\Models\Contracts\HasTenants;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\DatabaseNotificationCollection;

/**
 * Modules\User\Models\User.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @template TModel of \Illuminate\Database\Eloquent\Model
 * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
 *
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 1def8bbe (fix hint)
=======
<<<<<<< HEAD
 * @template TModel of \Illuminate\Database\Eloquent\Model
 * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
 *
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
 * @property Collection<int, OauthClient> $clients
 * @property int|null $clients_count
 * @property Team|null $currentTeam
 * @property Collection<int, Device> $devices
 * @property int|null $devices_count
 * @property string|null $full_name
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property int|null $notifications_count
 * @property Collection<int, Team> $ownedTeams
 * @property int|null $owned_teams_count
 * @property Collection<int, Permission> $permissions
 * @property int|null $permissions_count
 * @property \Modules\Xot\Contracts\ProfileContract|null $profile
 * @property Collection<int, Role> $roles
 * @property int|null $roles_count
 * @property Collection<int, Team> $teams
 * @property int|null $teams_count
 * @property Collection<int, Tenant> $tenants
 * @property int|null $tenants_count
 * @property Collection<int, OauthAccessToken> $tokens
 * @property int|null $tokens_count
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string $last_name
=======
 * @property string $surname
>>>>>>> 54f4fa16 (.)
=======
 * @property string $last_name
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
 * @property string|null $facebook_id
 * @property Collection<int, SocialiteUser> $socialiteUsers
 * @property int|null $socialite_users_count
 * @property string|null $name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $lang
 * @property string|null $current_team_id
 * @property bool|null $is_active
 * @property bool|null $is_otp
 * @property \DateTime|null $password_expires_at
 * @property \DateTime|null $email_verified_at
 * @property string|null $remember_token
 * @property \DateTime|null $created_at
 * @property \DateTime|null $updated_at
 * @property \DateTime|null $deleted_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $profile_photo_path
 * @property \Illuminate\Database\Eloquent\Relations\Pivot|null $pivot
 *
 * @method static \Modules\User\Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePasswordExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
abstract class BaseUser extends Authenticatable implements HasName, HasTenants, UserContract,HasMedia
{


    use HasApiTokens;
    use HasFactory;
    use HasRoles;
<<<<<<< HEAD
<<<<<<< HEAD
    // Guard coerente con Spatie/Permission
=======
abstract class BaseUser extends Authenticatable implements HasName, HasTenants, UserContract
=======
abstract class BaseUser extends Authenticatable
{
    /**
     * Guard coerente con Spatie/Permission: deve essere 'web'.
     * @var string
     */
    protected $guard_name = 'web'; implements HasName, HasTenants, UserContract
>>>>>>> bead9c28 (fix case)
=======
abstract class BaseUser extends Authenticatable implements HasName, HasTenants, UserContract
>>>>>>> d4c0700e (♻️ (SelectStateColumn.php): refactor state retrieval logic to use $state directly for clarity)
{


    use HasApiTokens;
    use HasFactory;
    use HasRoles;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    // Guard coerente con Spatie/Permission
>>>>>>> bead9c28 (fix case)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
    // Guard coerente con Spatie/Permission
>>>>>>> d23ba493 (add calendar)
    use HasUuids;
    use Notifiable;
    use RelationX;
    use Traits\HasAuthenticationLogTrait;
    use Traits\HasTenants;
    use Traits\HasTeams;
    use HasChildren;
<<<<<<< HEAD
<<<<<<< HEAD
    use InteractsWithMedia;
=======
>>>>>>> 54f4fa16 (.)
=======
    use InteractsWithMedia;
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)


    public $incrementing = false;

    /** @var string */
    protected $connection = 'user';

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var string */
    protected $childColumn = 'type';

    /** @var list<string> */
    protected $fillable = [
        'id',
        'name',
        'first_name',
        'last_name',
        'email',
        'password',
        'lang',
        'current_team_id',
        'is_active',
        'is_otp', // is One Time Password
        'password_expires_at',
        'type',
    ];

    /** @var list<string> */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /** @var list<string> */
    protected $with = [
        'roles',
    ];

    /** @var list<string> */
    protected $appends = [
        // 'profile_photo_url',
    ];

    /** @var array<string, class-string> */
    protected $childTypes = [

    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<string, mixed>  */
    protected $attributes = [
        //'state' => Pending::class,
        //'state' => 'pending',
        'is_otp'=>false,
        'is_active'=>true,
    ];

=======
>>>>>>> d4c0700e (♻️ (SelectStateColumn.php): refactor state retrieval logic to use $state directly for clarity)
=======
>>>>>>> d23ba493 (add calendar)
    /**
     * Guard coerente con Spatie/Permission: deve essere 'web'.
     * @var string
     */
    protected $guard_name = 'web';
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected $guard_name = "web";
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d4c0700e (♻️ (SelectStateColumn.php): refactor state retrieval logic to use $state directly for clarity)

=======
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
    /** @var \Illuminate\Database\Eloquent\Relations\Pivot|null */
    public $pivot;

    public function __construct(array $attributes = [])
    {
        // Concateno i fillable del parent con quelli della classe corrente
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->fillable = array_merge(parent::getFillable(), $this->getFillable());
=======
>>>>>>> b58de900 (.)
        // array_values() garantisce che sia un array indicizzato (list<string>)
        $this->fillable = array_values(array_merge(parent::getFillable(), $this->getFillable()));
>>>>>>> aurmich/dev
=======
        // array_values() garantisce che sia un array indicizzato (list<string>)
        $this->fillable = array_values(array_merge(parent::getFillable(), $this->getFillable()));
>>>>>>> a3f7230 (.)

        parent::__construct($attributes);
    }

=======
    /** @var \Illuminate\Database\Eloquent\Relations\Pivot|null */
    public $pivot;

>>>>>>> 54f4fa16 (.)
=======
        $this->fillable = array_merge(parent::getFillable(), $this->getFillable());
=======
        // array_values() garantisce che sia un array indicizzato (list<string>)
        $this->fillable = array_values(array_merge(parent::getFillable(), $this->getFillable()));
>>>>>>> a3174e5b (phpstan)

        parent::__construct($attributes);
    }

>>>>>>> adac82bd (rebase)
    public function canAccessFilament(?Panel $panel = null): bool
    {
        // return $this->role_id === Role::ROLE_ADMINISTRATOR;
        return true;
    }

    /**
     * Get the user's name for Filament.
     *
     * @return string
     */
    public function getFilamentName(): string
    {
        /** @var string|null */
        $name = $this->getAttribute('name');

        /** @var string|null */
        $firstName = $this->getAttribute('first_name');

        /** @var string|null */
        $lastName = $this->getAttribute('last_name');

        return trim(sprintf(
            '%s %s %s',
            $name ?? '',
            $firstName ?? '',
            $lastName ?? '',
        ));
    }

    public function profile(): HasOne
    {
        /** @var class-string<Model> */
        $profileClass = XotData::make()->getProfileClass();

        return $this->hasOne($profileClass);
    }

    /**
     * Verifica se l'utente ha il ruolo di super-admin.
     *
     * @return bool True se l'utente è super-admin, altrimenti false
     */
    public function isSuperAdmin(): bool
    {
        return $this->hasRole('super-admin');
    }


    public function canAccessPanel(Panel $panel): bool
    {
        // $panel->default('admin');
        if ($panel->getId() !== 'admin') {
            $role = $panel->getId();
            /*
            $xot = XotData::make();
            if ($xot->super_admin === $this->email) {
                $role = Role::firstOrCreate(['name' => $role]);
                $this->assignRole($role);
            }
            */

            return $this->hasRole($role);
        }

        return true; // str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
    }

    public function canAccessSocialite(): bool
    {
        return true;
    }

    public function detach(Model $model): void
    {
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($this, 'teams')) {
            // @phpstan-ignore function.alreadyNarrowedType
            $this->teams()->detach($model);
        }
    }

    public function attach(Model $model): void
    {
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($this, 'teams')) {
            // @phpstan-ignore function.alreadyNarrowedType
            $this->teams()->attach($model);
        }
    }

    public function treeLabel(): string
    {
        return strval($this->name ?? $this->email);
    }

    public function treeSons(): Collection
    {
        return $this->teams ?? new Collection();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the devices associated with the user.
     *
     * @return BelongsToMany<Device, static>
=======
     * @return BelongsToMany<Device, static|$this>
>>>>>>> 54f4fa16 (.)
=======
     * @return BelongsToMany<Device, static>
>>>>>>> 1def8bbe (fix hint)
=======
     * @return BelongsToMany<Device, static|$this>
=======
     * @return BelongsToMany<Device, static>
>>>>>>> aurmich/dev
=======
     * @return BelongsToMany<Device, static>
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
     */
    public function devices(): BelongsToMany
    {
        return $this
            ->belongsToManyX(Device::class);
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Get the socialite users associated with the user.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return HasMany<SocialiteUser, $this>
=======
     * @return HasMany<SocialiteUser, static>
>>>>>>> aurmich/dev
=======
     * @return HasMany<SocialiteUser, $this>
>>>>>>> 345f8677 (phpstan)
     */
    public function socialiteUsers(): HasMany
    {
        return $this->hasMany(SocialiteUser::class);
=======
=======
>>>>>>> b58de900 (.)
    public function socialiteUsers(): HasMany
    {
        return $this
            ->hasMany(SocialiteUser::class);
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
=======
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
    /**
     * @return HasMany<SocialiteUser, static>
     */
    public function socialiteUsers(): HasMany
    {
<<<<<<< HEAD
        /** @var class-string<SocialiteUser> $socialiteUserClass */
        $socialiteUserClass = SocialiteUser::class;
        
        return $this->hasMany($socialiteUserClass);
>>>>>>> a3174e5b (phpstan)
=======
        return $this->hasMany(SocialiteUser::class);
<<<<<<< HEAD
>>>>>>> 1def8bbe (fix hint)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
    }

    public function getProviderField(string $provider, string $field): string
    {
        $socialiteUser = $this->socialiteUsers()->firstWhere(['provider' => $provider]);
        if ($socialiteUser == null) {
            throw new \Exception('SocialiteUser not found');
        }

        $res = $socialiteUser->{$field};
        return (string) $res;
    }

    /**
     * Get the entity's notifications.
     *
     * @return MorphMany<Notification, static|$this>
     */
    public function notifications()
    {
        // @phpstan-ignore return.type
        return $this->morphMany(Notification::class, 'notifiable');
    }

    /**
     * Get the user's latest authentication log.
     *
     * @return MorphOne<AuthenticationLog, static>
     */
    public function latestAuthentication(): MorphOne
    {
        // @phpstan-ignore return.type
        return $this->morphOne(AuthenticationLog::class, 'authenticatable')
            ->latestOfMany();
    }

    public function getFullNameAttribute(?string $value): ?string
    {
        return $value ?? $this->first_name . ' ' . $this->last_name;
    }

    public function getNameAttribute(?string $value): ?string
    {
        if ($value !== null || $this->getKey() === null) {
            return $value;
        }
        $name = Str::of((string) $this->email)->before('@')->toString();
        $i = 1;
        $value = $name . '-' . $i;
        while (self::firstWhere(['name' => $value]) !== null) {
            $i++;
            $value = $name . '-' . $i;
        }
        $this->update(['name' => $value]);

        return $value;
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return app(GetFactoryAction::class)->execute(static::class);
=======
        return UserFactory::new();
>>>>>>> aurmich/dev
=======
        return UserFactory::new();
>>>>>>> 54f4fa16 (.)
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'email_verified_at' => 'datetime',
            // 'password' => 'hashed', //Call to undefined cast [hashed] on column [password] in model [Modules\User\Models\User].
            'is_active' => 'boolean',
            'roles.pivot.id' => 'string',
            // https://github.com/beitsafe/laravel-uuid-auditing
            // ALTER TABLE model_has_role CHANGE COLUMN `id` `id` CHAR(37) NOT NULL DEFAULT uuid();

            'is_otp' => 'boolean',
            'password_expires_at' => 'datetime',

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }



<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 15cb84fb (fix collisions)
    /**
     * Get the role name for the current team.
     *
     * @return array<int, string>
     */
    /**
     * Get all role names associated with the user.
     *
     * @return array<int, string>
     */
    public function getRoleNames(): array
    {
        /** @var array<int, string> */
        return $this->roles()->pluck('name')->filter()->values()->toArray();
    }




<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 2099645a (.)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)

    public function authentications(): MorphMany
    {
        return $this->morphMany(\Modules\User\Models\Authentication::class, 'authenticatable');
    }

    /**
     * Check if the user has a specific role.
     *
     * @param array|\Illuminate\Support\Collection|int|\Spatie\Permission\Contracts\Role|string $roles
     * @param string|null $guard
     * @return bool
     */
    public function hasRole($roles, ?string $guard = null): bool
    {
        // Se è una stringa semplice, utilizziamo il metodo interno tramite relazione roles
        if (is_string($roles)) {
            return once(function () use ($roles) {
                return $this->roles()->where('name', $roles)->exists();
            });
        }

        // Per gli altri tipi, implementiamo una logica di base
        if (is_array($roles) || $roles instanceof \Illuminate\Support\Collection) {
            foreach ($roles as $role) {
                if ($this->hasRole($role, $guard)) {
                    return true;
                }
            }
            return false;
        }

        if ($roles instanceof \Spatie\Permission\Contracts\Role) {
            return $this->roles()->where('id', $roles->id)->exists();
        }

        if (is_int($roles)) {
            return $this->roles()->where('id', $roles)->exists();
        }

        return false;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    /**
     * Get all permission names associated with the user's roles.
     *
     * @return array<int, string>
     */
    public function getPermissionNames(): array
    {
        $roles = $this->roles()->with('permissions')->get();
        if ($roles->isEmpty()) {
            return [];
        }

=======
    /**
     * Get all permission names associated with the user's roles.
     *
     * @return array<int, string>
     */
    public function getPermissionNames(): array
    {
        $roles = $this->roles()->with('permissions')->get();
        if ($roles->isEmpty()) {
            return [];
        }

>>>>>>> 15cb84fb (fix collisions)
        $permissions = collect();
        foreach ($roles as $role) {
            if (isset($role->permissions) && $role->permissions !== null) {
                $permissions = $permissions->merge($role->permissions);
            }
        }

        /** @var array<int, string> */
        return $permissions->pluck('name')->values()->toArray();
    }
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 2099645a (.)
=======
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
}
