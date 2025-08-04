<?php

declare(strict_types=1);

namespace Modules\User\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Contracts\HasTeamsContract;
=======
>>>>>>> 54f4fa16 (.)
=======
use Modules\User\Contracts\HasTeamsContract;
>>>>>>> a3174e5b (phpstan)
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\Membership;
use Modules\User\Models\Role;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Schema;

/**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a3174e5b (phpstan)
 * Trait HasTeams
 * 
 * Provides team functionality for User models implementing team-based organization.
 * This trait handles team ownership, membership, permissions, and relationships.
<<<<<<< HEAD
 *
 * @property TeamContract $currentTeam
 * @property int|null $current_team_id
 * @property Collection<int, TeamContract> $teams
 * @property Collection<int, TeamContract> $ownedTeams
 * @property Collection<int, UserContract> $teamUsers
 * @property UserContract|null $owner
=======
 * Trait HasTeams.
 *
 * @property TeamContract $currentTeam
 * @property int|null $current_team_id
 * @property Collection $teams
 * @property Collection $ownedTeams
>>>>>>> 54f4fa16 (.)
=======
 *
 * @property TeamContract $currentTeam
 * @property int|null $current_team_id
 * @property Collection<int, TeamContract> $teams
 * @property Collection<int, TeamContract> $ownedTeams
 * @property Collection<int, UserContract> $teamUsers
 * @property UserContract|null $owner
>>>>>>> a3174e5b (phpstan)
 */
trait HasTeams
{
    /**
     * Add a user to the team.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $user
     * @param  \Illuminate\Database\Eloquent\Model|null  $role
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addTeamMember($user, $role = null)
    {
        $teamUser = $this->teamUsers()->create([
            'user_id' => $user->getKey(),
            'role_id' => $role ? $role->getKey() : null,
        ]);

        $this->increment('total_members');

        return $teamUser;
    }

    /**
     * Get all teams the user belongs to.
     *
     * @return \Illuminate\Support\Collection<TeamContract>
     */
    public function allTeams(): Collection
    {
        return $this->ownedTeams->merge($this->teams)->sortBy('name');
    }

    /**
     * Check if the user belongs to any teams.
     */
    public function belongsToTeams(): bool
    {
        return true;
    }

    /**
     * Check if the user belongs to a specific team.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function belongsToTeam(TeamContract $team): bool
=======
    public function belongsToTeam(\Modules\User\Contracts\TeamContract $team): bool
>>>>>>> 54f4fa16 (.)
=======
    public function belongsToTeam(?TeamContract $team): bool
>>>>>>> 15cb84fb (fix collisions)
=======
    public function belongsToTeam(\Modules\User\Contracts\TeamContract $team): bool
>>>>>>> d23ba493 (add calendar)
=======
    public function belongsToTeam(TeamContract $team): bool
>>>>>>> 1def8bbe (fix hint)
    {
        $found = $this->teams()->where('teams.id', $team->id)->first();
        if ($found === null) {
            return false;
        }
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isInstanceOf($found, TeamContract::class, 'Team must implement TeamContract.');
=======
        \Webmozart\Assert\Assert::isInstanceOf($found, \Modules\User\Contracts\TeamContract::class, 'Team must implement TeamContract.');
>>>>>>> 54f4fa16 (.)
=======
        Assert::isInstanceOf($found, TeamContract::class, 'Team must implement TeamContract.');
>>>>>>> 1def8bbe (fix hint)
        return true;
    }

    /**
     * Boot the HasTeams trait.
     *
     * @return void
     */
    protected static function bootHasTeams()
    {
<<<<<<< HEAD
        /*
=======
>>>>>>> 54f4fa16 (.)
        static::deleting(function ($team) {
            $team->teamUsers()->delete();
            $team->teamInvitations()->delete();
        });
<<<<<<< HEAD
        */
=======
>>>>>>> 54f4fa16 (.)
    }

    /**
     * Check if the user can add a member to a team.
     */
    public function canAddTeamMember(TeamContract $team): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'add team member');
    }

    /**
     * Check if the user can create a team.
     */
    public function canCreateTeam(): bool
    {
        return $this->hasPermissionTo('create team');
    }

    /**
     * Check if the user can delete a team.
     */
    public function canDeleteTeam(TeamContract $team): bool
    {
        return $this->ownsTeam($team);
    }

    /**
     * Check if the user can leave a team.
     */
    public function canLeaveTeam(TeamContract $team): bool
    {
        return $this->belongsToTeam($team) && ! $this->ownsTeam($team);
    }

    /**
     * Check if the user can manage a team.
     */
    public function canManageTeam(TeamContract $team): bool
    {
        return $this->ownsTeam($team);
    }

    /**
     * Check if the user can remove a member from a team.
     */
    public function canRemoveTeamMember(TeamContract $team, UserContract $user): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'remove team member');
    }

    /**
     * Check if the user can update a team.
     */
    public function canUpdateTeam(TeamContract $team): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'update team');
    }

    /**
     * Check if the user can update a team member.
     */
    public function canUpdateTeamMember(TeamContract $team, UserContract $user): bool
    {
        return $this->ownsTeam($team) || $this->hasTeamPermission($team, 'update team member');
    }

    /**
     * Check if the user can view a team.
     */
    public function canViewTeam(TeamContract $team): bool
    {
        return $this->belongsToTeam($team) || $this->hasTeamPermission($team, 'view team');
    }

    /**
     * Get all of the team's users including its owner.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Support\Collection<int, UserContract>
     */
    public function getAllTeamUsersAttribute(): Collection
    {
        $owner = $this->owner;
        if ($owner === null) {
            return $this->teamUsers;
        }
        return $this->teamUsers->merge([$owner]);
=======
     * @return \Illuminate\Support\Collection
=======
     * @return \Illuminate\Support\Collection<int, UserContract>
>>>>>>> a3174e5b (phpstan)
     */
    public function getAllTeamUsersAttribute(): Collection
    {
<<<<<<< HEAD
        return $this->teamUsers->merge([$this->owner]);
>>>>>>> 54f4fa16 (.)
=======
        $owner = $this->owner;
        if ($owner === null) {
            return $this->teamUsers;
        }
        return $this->teamUsers->merge([$owner]);
>>>>>>> a3174e5b (phpstan)
    }

    /**
     * Determine if the given user is on the team.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param UserContract $user
     * @return bool
     */
    public function hasTeamMember(UserContract $user): bool
    {
        if ($this->teamUsers->contains($user)) {
            return true;
        }

        // Check if user can own this team (UserContract sempre ha il metodo ownsTeam)
        if ($this instanceof TeamContract) {
<<<<<<< HEAD
            return $user->ownsTeam($this);
        }

        return false;
=======
     * @param  \Illuminate\Database\Eloquent\Model  $user
=======
     * @param UserContract $user
>>>>>>> a3174e5b (phpstan)
     * @return bool
     */
    public function hasTeamMember(UserContract $user): bool
    {
<<<<<<< HEAD
        return $this->teamUsers->contains($user) || $user->ownsTeam($this);
>>>>>>> 54f4fa16 (.)
=======
        if ($this->teamUsers->contains($user)) {
            return true;
        }

        // Check if user can own this team (assuming BaseUser implements HasTeamsContract)
        if ($this instanceof TeamContract && method_exists($user, 'ownsTeam')) {
=======
>>>>>>> 1def8bbe (fix hint)
            return $user->ownsTeam($this);
        }

        return false;
>>>>>>> a3174e5b (phpstan)
    }

    /**
     * Check if the user has teams.
     */
    public function hasTeams(): bool
    {
        return true;
    }

    /**
     * Check if the user has a specific permission in a team.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasTeamPermission(TeamContract $team, string $permission): bool
=======
    public function hasTeamPermission(\Modules\User\Contracts\TeamContract $team, string $permission): bool
>>>>>>> 54f4fa16 (.)
=======
    public function hasTeamPermission(TeamContract $team, string $permission): bool
>>>>>>> 1def8bbe (fix hint)
    {
        return $this->ownsTeam($team) || in_array($permission, $this->teamPermissions($team));
    }

    /**
     * Check if the user has a specific role in a team.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasTeamRole(TeamContract $team, string $role): bool
=======
    public function hasTeamRole(\Modules\User\Contracts\TeamContract $team, string $role): bool
>>>>>>> 54f4fa16 (.)
=======
    public function hasTeamRole(TeamContract $team, string $role): bool
>>>>>>> 1def8bbe (fix hint)
    {
        if ($this->ownsTeam($team)) {
            return true;
        }

        $teamRole = $this->teamRole($team);
        return $teamRole !== null && isset($teamRole->name) && $teamRole->name === $role;
    }

    /**
     * Get the current team of the user's context.
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Modules\User\Contracts\TeamContract, $this>
>>>>>>> aurmich/dev
=======
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, $this>
>>>>>>> 345f8677 (phpstan)
=======
     * Commented out as it is less comprehensive and does not use TeamContract.
     * The preferred method (below) includes logic for default team switching and uses TeamContract for better abstraction.
     */
    /*
    public function currentTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'current_team_id');
    }
    */

    /**
     * Get the current team of the user's context.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Modules\User\Contracts\TeamContract, static>
>>>>>>> 54f4fa16 (.)
=======
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, static>
>>>>>>> a3174e5b (phpstan)
=======
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Modules\User\Contracts\TeamContract, $this>
>>>>>>> 1def8bbe (fix hint)
     */
    public function currentTeam(): BelongsTo
    {
        $xot = XotData::make();
        if ($this->current_team_id === null && $this->id) {
            $this->switchTeam($this->personalTeam());
        }

        if ($this->allTeams()->isEmpty() && $this->getKey() !== null) {
            $this->current_team_id = null;
            $this->save();
        }

        $teamClass = $xot->getTeamClass();

        return $this->belongsTo($teamClass, 'current_team_id');
    }

    /**
     * Get the teams owned by the user.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Contracts\TeamContract, $this>
>>>>>>> aurmich/dev
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, $this>
>>>>>>> 345f8677 (phpstan)
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
>>>>>>> 54f4fa16 (.)
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, static>
>>>>>>> a3174e5b (phpstan)
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Contracts\TeamContract, $this>
>>>>>>> 1def8bbe (fix hint)
     */
    public function ownedTeams(): HasMany
    {
        $xot = XotData::make();
        $teamClass = $xot->getTeamClass();
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> 54f4fa16 (.)
        return $this->hasMany($teamClass, 'user_id');
=======
        
<<<<<<< HEAD
        // Cast a Model generico per compatibilità con template types
        /** @var class-string<\Illuminate\Database\Eloquent\Model> $modelClass */
        $modelClass = $teamClass;
        
        return $this->hasMany($modelClass, 'user_id');
>>>>>>> a3174e5b (phpstan)
=======
        return $this->hasMany($teamClass, 'user_id');
>>>>>>> 1def8bbe (fix hint)
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get all team users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Models\Membership, $this>
     */
    public function teamUsers(): HasMany
    {
        /** @var \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Models\Membership, $this> $relation */
        $relation = $this->hasMany(\Modules\User\Models\Membership::class, 'user_id');
        return $relation;
=======
     * Get all of the pending invitations for the team.
=======
     * Get all team users.
>>>>>>> 345f8677 (phpstan)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Models\Membership, $this>
     */
    public function teamUsers(): HasMany
    {
<<<<<<< HEAD
        $invitationModel = app('team_invitation_model');
        return $this->hasMany($invitationModel, 'team_id');
>>>>>>> aurmich/dev
=======
        /** @var \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Models\Membership, $this> $relation */
        $relation = $this->hasMany(\Modules\User\Models\Membership::class, 'user_id');
        return $relation;
>>>>>>> 345f8677 (phpstan)
=======
     * Get all of the pending invitations for the team.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Illuminate\Database\Eloquent\Model, $this>
     */
    public function teamInvitations(): HasMany
    {
        $invitationModel = app('team_invitation_model');
        return $this->hasMany($invitationModel, 'team_id');
    }

    /**
     * Get the relationship name of the primary team user.
     *
     * @return string
     */
    public function teamRelation(): string
    {
        return (string) config('teams.relationship_name', 'teamUsers');
    }

    /**
     * Get all of the team's users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Illuminate\Database\Eloquent\Model, $this>
     */
    public function teamUsers(): HasMany
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->hasMany(app('team_user_model'), 'team_id');
>>>>>>> 54f4fa16 (.)
=======
        /** @var class-string<\Illuminate\Database\Eloquent\Model> $teamUserModel */
=======
>>>>>>> 1def8bbe (fix hint)
        $teamUserModel = app('team_user_model');
        return $this->hasMany($teamUserModel, 'team_id');
>>>>>>> a3174e5b (phpstan)
    }

    /**
     * Get the role for a specific team.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function teamRole(TeamContract $team): ?Role
=======
    public function teamRole(\Modules\User\Contracts\TeamContract $team): ?Role
>>>>>>> 54f4fa16 (.)
=======
    public function teamRole(TeamContract $team): ?Role
>>>>>>> 1def8bbe (fix hint)
    {
        /** @var \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Pivot|null $teamUser */
        $teamUser = $this->teamUsers()->where('team_id', $team->id)->first();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1def8bbe (fix hint)
        if ($teamUser === null) {
            return null;
        }

        // Accesso sicuro alla proprietà role usando getAttribute
        $role = $teamUser->getAttribute('role');
        
        return $role instanceof Role ? $role : null;
<<<<<<< HEAD
=======
        return $teamUser?->role;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 1def8bbe (fix hint)
    }

    /**
     * Get permissions for a specific team.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param TeamContract $team
=======
     * @param \Modules\User\Contracts\TeamContract $team
>>>>>>> 54f4fa16 (.)
=======
     * @param TeamContract $team
>>>>>>> 1def8bbe (fix hint)
     * @return array<int, string>
     */
    public function teamPermissions(TeamContract $team): array
    {
        $role = $this->teamRole($team);

        if ($role === null || !$role->permissions) {
            return [];
        }

        /** @var array<int, string> */
        return $role->permissions->pluck('name')->values()->toArray();
    }

    /**
     * Remove a user from the team.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $user
     * @return void
     */
    public function removeTeamMember($user)
    {
        $this->teamUsers()
            ->where('user_id', $user->getKey())
            ->delete();

        $this->decrement('total_members');
    }

    /**
     * Get the user's personal team.
     *
     * @return \Modules\User\Contracts\TeamContract|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function personalTeam(): ?TeamContract
=======
    public function personalTeam(): ?\Modules\User\Contracts\TeamContract
>>>>>>> 54f4fa16 (.)
=======
    public function personalTeam(): ?TeamContract
>>>>>>> 1def8bbe (fix hint)
    {
        /** @var \Modules\User\Contracts\TeamContract|null */
        $personalTeam = $this->ownedTeams->where('personal_team', true)->first();

        return $personalTeam;
    }

    /**
     * Switch the user's context to the given team.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1def8bbe (fix hint)
     * @param TeamContract $team
     */
    public function switchTeam(?TeamContract $team): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
        if ($team === null) {
            return false;
        }

<<<<<<< HEAD
=======
     * @param \Modules\User\Contracts\TeamContract $team
     */
    public function switchTeam(?\Modules\User\Contracts\TeamContract $team): bool
    {
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
        if ($team === null) {
            return false;
        }

>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
        if (! $this->belongsToTeam($team)) {
            return false;
        }

        $this->current_team_id = (string) $team->id;
        $this->save();

        return true;
    }

    /**
     * Determine if the given team is the current team.
     */
    public function isCurrentTeam(TeamContract $team): bool
    {
        if ($this->currentTeam === null) {
            return false;
        }

        return $team->getKey() == $this->currentTeam->getKey();
    }

    /**
     * Determine if the user owns the given team.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param TeamContract $team
     */
    public function ownsTeam(TeamContract $team): bool
=======
     * @param \Modules\User\Contracts\TeamContract $team
     */
    public function ownsTeam(\Modules\User\Contracts\TeamContract $team): bool
>>>>>>> 54f4fa16 (.)
=======
     * @param TeamContract $team
     */
    public function ownsTeam(TeamContract $team): bool
>>>>>>> 1def8bbe (fix hint)
    {
        /** @var ?\Illuminate\Database\Eloquent\Model $found */
        $found = $this->ownedTeams()->where('teams.id', $team->id)->first();

        return $found !== null;
    }

    /**
     * Get all of the teams the user belongs to.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return BelongsToMany<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, \Illuminate\Database\Eloquent\Model>
=======
     * @return BelongsToMany<\Modules\User\Contracts\TeamContract, static>
     * @phpstan-return BelongsToMany<\Modules\User\Contracts\TeamContract&\Illuminate\Database\Eloquent\Model, static>
>>>>>>> aurmich/dev
=======
     * @return BelongsToMany<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, \Illuminate\Database\Eloquent\Model>
>>>>>>> 345f8677 (phpstan)
=======
     * @return BelongsToMany<\Modules\User\Contracts\TeamContract, static>
     * @phpstan-return BelongsToMany<\Modules\User\Contracts\TeamContract&\Illuminate\Database\Eloquent\Model, static>
>>>>>>> 54f4fa16 (.)
=======
     * @return BelongsToMany<\Modules\User\Contracts\TeamContract, $this>
>>>>>>> 1def8bbe (fix hint)
     */
    public function teams(): BelongsToMany
    {
        $xot = XotData::make();
        $teamClass = $xot->getTeamClass();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
        /** @var BelongsToMany<\Illuminate\Database\Eloquent\Model&\Modules\User\Contracts\TeamContract, \Illuminate\Database\Eloquent\Model> $relation */
        $relation = $this->belongsToMany(
            $teamClass,
            'team_user',
            'user_id',
            'team_id'
        )->using(Membership::class);

        return $relation;
<<<<<<< HEAD
=======
        return $this->belongsToManyX($teamClass, null, null, 'team_id');
        // ->as('membership')
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
=======
        return $this->belongsToManyX($teamClass, null, null, 'team_id');
        // ->as('membership')
>>>>>>> 54f4fa16 (.)
    }

    /**
     * Invite a user to a team.
     */
    public function inviteToTeam(UserContract $user, TeamContract $team): bool
    {
        if ($this->ownsTeam($team)) {
            $team->members()->attach($user->id, ['role' => 'member']);

            return true;
        }

        return false;
    }

    /**
     * Remove a user from the team.
     */
    public function removeFromTeam(UserContract $user, TeamContract $team): bool
    {
        if ($this->ownsTeam($team)) {
            $team->members()->detach($user->id);

            return true;
        }

        return false;
    }

    /**
     * Check if the user is an owner or a member.
     */
    public function isOwnerOrMember(TeamContract $team): bool
    {
        return $this->ownsTeam($team) || $this->belongsToTeam($team);
    }

    /**
     * Promote a member to team admin.
     */
    public function promoteToAdmin(UserContract $user, TeamContract $team): bool
    {
        if ($this->ownsTeam($team)) {
            $team->members()->updateExistingPivot($user->id, ['role' => 'admin']);

            return true;
        }

        return false;
    }

    /**
     * Demote a member from team admin.
     */
    public function demoteFromAdmin(UserContract $user, TeamContract $team): bool
    {
        if ($this->ownsTeam($team)) {
            $team->members()->updateExistingPivot($user->id, ['role' => 'member']);

            return true;
        }

        return false;
    }

    /**
     * Get all admins of the team.
     */
    public function getTeamAdmins(TeamContract $team): Collection
    {
        return $team->members()->wherePivot('role', 'admin')->get();
    }

    /**
     * Get all members of the team.
     */
    public function getTeamMembers(TeamContract $team): Collection
    {
        return $team->members()->wherePivot('role', 'member')->get();
    }

    /**
     * Determine if the user owns the given team.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param TeamContract $team
     */
    public function checkTeamOwnership(TeamContract $team): bool
=======
     * @param \Modules\User\Contracts\TeamContract $team
     */
    public function checkTeamOwnership(\Modules\User\Contracts\TeamContract $team): bool
>>>>>>> 54f4fa16 (.)
=======
     * @param TeamContract $team
     */
    public function checkTeamOwnership(TeamContract $team): bool
>>>>>>> 1def8bbe (fix hint)
    {
        return $this->ownsTeam($team);
    }
}
