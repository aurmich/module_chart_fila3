<?php
declare(strict_types=1);

namespace Modules\SaluteOra\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Parental\HasParent;

/**
 * @property string $id
 * @property int $team_id
 * @property string|null $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereUserId($value)
 * @mixin \Eloquent
 */
class DoctorTeam extends TeamUser
{
    use HasParent;
    
    //protected $connection = 'salute_ora'; //in teamuser è già impostato
<<<<<<< HEAD
=======
=======
class DoctorTeam extends BasePivot
{
<<<<<<< HEAD
    protected $connection = 'patient';
>>>>>>> 54f4fa16 (.)
=======
    protected $connection = 'salute_ora';
>>>>>>> 2e1ed088 (chore(docs): delete troubleshooting.md as it is no longer relevant)
=======
use Parental\HasParent;

/**
 * 
 *
 * @property string $id
 * @property int $team_id
 * @property string|null $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctorTeam whereUserId($value)
 * @mixin \Eloquent
 */
class DoctorTeam extends TeamUser
{
    use HasParent;
    
    //protected $connection = 'salute_ora'; //in teamuser è già impostato
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
>>>>>>> aurmich/dev
}
