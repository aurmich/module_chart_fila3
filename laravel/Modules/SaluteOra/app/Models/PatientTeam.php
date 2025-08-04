<?php
declare(strict_types=1);

namespace Modules\SaluteOra\Models;

use Parental\HasParent;

<<<<<<< HEAD
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PatientTeam whereUserId($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
class PatientTeam extends TeamUser
{
    use HasParent;
    
    //protected $connection = 'salute_ora'; //in teamuser è già impostato
}
