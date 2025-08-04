<?php

declare(strict_types=1);

namespace Modules\User\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * Authentication Model
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> aurmich/dev
 * Tracks user authentication attempts and sessions.
 *
 * @property int $id
 * @property string $type Type of authentication (e.g., 'login', 'logout')
 * @property string|null $ip_address IP address used for authentication
 * @property string|null $user_agent User agent string from the request
 * @property string|null $location Geographic location derived from IP
 * @property bool $login_successful Whether the login attempt was successful
 * @property Carbon|null $login_at When the login attempt occurred
 * @property Carbon|null $logout_at When the logout occurred
 * @property string $authenticatable_type The class name of the authenticatable model
 * @property string $authenticatable_id The ID of the authenticatable model
 * @property Carbon|null $created_at When the record was created
 * @property Carbon|null $updated_at When the record was last updated
<<<<<<< HEAD
 * @property-read Model|\Eloquent $authenticatable The authenticatable model instance
=======
 * 
 * @property-read Model|\Eloquent $authenticatable The authenticatable model instance
 * 
>>>>>>> aurmich/dev
 * @method static Builder<static>|Authentication newModelQuery()
 * @method static Builder<static>|Authentication newQuery()
 * @method static Builder<static>|Authentication query()
 * @method static Builder<static>|Authentication whereCreatedAt($value)
 * @method static Builder<static>|Authentication whereId($value)
 * @method static Builder<static>|Authentication whereIpAddress($value)
 * @method static Builder<static>|Authentication whereLocation($value)
 * @method static Builder<static>|Authentication whereType($value)
 * @method static Builder<static>|Authentication whereUpdatedAt($value)
 * @method static Builder<static>|Authentication whereUserAgent($value)
 * @method static Builder<static>|Authentication whereLoginAt($value)
 * @method static Builder<static>|Authentication whereLogoutAt($value)
 * @method static Builder<static>|Authentication whereLoginSuccessful($value)
 * @method static Builder<static>|Authentication whereAuthenticatableType($value)
 * @method static Builder<static>|Authentication whereAuthenticatableId($value)
<<<<<<< HEAD
=======
 * 
>>>>>>> aurmich/dev
 * @mixin \Eloquent
 */
class Authentication extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type',
        'ip_address',
        'user_agent',
        'location',
=======
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * Authentication Model
 *
=======
 * 
>>>>>>> 13ea6524 (phpstan)
 * Tracks user authentication attempts and sessions.
 *
 * @property int $id
 * @property string $type Type of authentication (e.g., 'login', 'logout')
 * @property string|null $ip_address IP address used for authentication
 * @property string|null $user_agent User agent string from the request
 * @property string|null $location Geographic location derived from IP
 * @property bool $login_successful Whether the login attempt was successful
 * @property Carbon|null $login_at When the login attempt occurred
 * @property Carbon|null $logout_at When the logout occurred
 * @property string $authenticatable_type The class name of the authenticatable model
 * @property string $authenticatable_id The ID of the authenticatable model
 * @property Carbon|null $created_at When the record was created
 * @property Carbon|null $updated_at When the record was last updated
 * @property-read Model|\Eloquent $authenticatable The authenticatable model instance
 * @method static Builder<static>|Authentication newModelQuery()
 * @method static Builder<static>|Authentication newQuery()
 * @method static Builder<static>|Authentication query()
 * @method static Builder<static>|Authentication whereCreatedAt($value)
 * @method static Builder<static>|Authentication whereId($value)
 * @method static Builder<static>|Authentication whereIpAddress($value)
 * @method static Builder<static>|Authentication whereLocation($value)
 * @method static Builder<static>|Authentication whereType($value)
 * @method static Builder<static>|Authentication whereUpdatedAt($value)
 * @method static Builder<static>|Authentication whereUserAgent($value)
 * @method static Builder<static>|Authentication whereLoginAt($value)
 * @method static Builder<static>|Authentication whereLogoutAt($value)
 * @method static Builder<static>|Authentication whereLoginSuccessful($value)
 * @method static Builder<static>|Authentication whereAuthenticatableType($value)
 * @method static Builder<static>|Authentication whereAuthenticatableId($value)
 * @mixin \Eloquent
 */
class Authentication extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type',
        'ip_address',
        'user_agent',
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
        'location',
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
        'login_at',
        'login_successful',
        'logout_at',
        'authenticatable_type',
        'authenticatable_id',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'login_at' => 'datetime',
            'logout_at' => 'datetime',
            'login_successful' => 'boolean',
        ];
    }
<<<<<<< HEAD
=======
    protected $casts = [
        'login_at' => 'datetime',
        'logout_at' => 'datetime',
        'login_successful' => 'boolean',
    ];
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)

    public function authenticatable(): MorphTo
    {
        return $this->morphTo();
    }
}
