<?php

declare(strict_types=1);

/**
 * ----------------------------------------------------------------.
 */

namespace Modules\Xot\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\UserContract;

// use Modules\Xot\Datas\XotData;

abstract class XotBasePolicy
{
    use HandlesAuthorization;

    public function before(UserContract $user, string $ability): ?bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return once(function () use ($user) {
=======
        return once(function () use ($user, $ability) {
>>>>>>> aurmich/dev
=======
        return once(function () use ($user) {
>>>>>>> 345f8677 (phpstan)
            if ($user->hasRole('super-admin')) {
                return true;
            }

            return null;
        });
    }

    public function viewAny(UserContract $userContract): bool
    {
        return false;
    }
}
