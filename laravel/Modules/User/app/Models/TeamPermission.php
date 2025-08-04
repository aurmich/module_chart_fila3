<?php

declare(strict_types=1);

namespace Modules\User\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * Team Permission Model
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> aurmich/dev
 * Represents a permission assigned to a user within a team context.
=======
 * Modules\User\Models\TeamPermission
>>>>>>> 54f4fa16 (.)
=======
 * Team Permission Model
 *
 * Represents a permission assigned to a user within a team context.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
 *
 * @property string $id
 * @property string $team_id
 * @property string $user_id
 * @property string $permission
 * @property \DateTime|null $created_at
 * @property \DateTime|null $updated_at
 * @property Team $team
 * @property User $user
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f3e4ec66 (.)
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamPermission query()
 * @mixin \Eloquent
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 */
class TeamPermission extends Model
{
    /** 
     * The database connection that should be used by the model.
     *
     * @var string 
     */
    protected $connection = 'user';

    /** 
     * The attributes that are mass assignable.
     *
     * @var list<string> 
     */
=======
=======
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
 */
class TeamPermission extends Model
{
    /** 
     * The database connection that should be used by the model.
     *
     * @var string 
     */
    protected $connection = 'user';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<string> */
>>>>>>> 54f4fa16 (.)
=======
    /** @var list<string> */
>>>>>>> a3174e5b (phpstan)
=======
<<<<<<< HEAD
    /** @var array<string> */
=======
    /** @var list<string> */
>>>>>>> aurmich/dev
=======
    /** @var list<string> */
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
    /** 
     * The attributes that are mass assignable.
     *
     * @var list<string> 
     */
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    protected $fillable = [
        'team_id',
        'user_id',
        'permission',
    ];

    /**
     * Get the team that owns the permission.
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the user that owns the permission.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
