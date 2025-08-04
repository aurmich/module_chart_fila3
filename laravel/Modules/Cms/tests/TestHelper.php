<?php

declare(strict_types=1);

namespace Modules\Cms\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Cms\Models\Module;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use Tests\CreatesApplication;

abstract class TestHelper extends BaseTestCase
{
<<<<<<< HEAD
<<<<<<< HEAD
    //use CreatesApplication;
=======
    use CreatesApplication;
>>>>>>> 54f4fa16 (.)
=======
    //use CreatesApplication;
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)

    // in User
    public function getSuperAdminUser()
    {
        return User::role('super-admin')->first();
    }

    // in User
    public function getNoSuperAdminUser()
    {
        return User::all()
            ->map(function ($item) {
                if (! $item->hasRole('super-admin')) {
                    return $item;
                }
            })->first();
    }

    // in Tenant o Cms
    public function getModuleNameLists()
    {
        return collect(app(Module::class)
            ->getRows())
            ->pluck('name')
            ->all();
    }

    // in Tenant o Cms
    public function getMainAdminNavigationUrlItems()
    {
        return $item_navs = collect(app(GetModulesNavigationItems::class)->execute())
            ->map(fn ($item) => $item->getUrl());
    }

    // in Tenant o Cms
    public function getUserNavigationItemUrlRoles($user)
    {
        return $role_names = $user->getRoleNames()->map(function ($item) {
            if ('super-admin' !== $item) {
                return '/'.mb_substr($item, 0, -7).'/admin';
            }
        })->filter(fn ($value): bool => ! is_null($value));
    }
}
