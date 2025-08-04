<?php

declare(strict_types=1);

namespace Modules\Tenant\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;

use function Safe\realpath;

class TenantServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Tenant';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
>>>>>>> aurmich/dev
        
        // Skip complex configuration during testing
        //if (!$this->app->environment('testing')) {
            $this->mergeConfigs();
        //}
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $this->mergeConfigs();
>>>>>>> aurmich/dev
=======
        $this->mergeConfigs();
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
>>>>>>> aurmich/dev
        $this->registerDB();
        $this->registerMorphMap();
        $this->publishConfig();
    }

    public function publishConfig(): void
    {
        // ---
    }

    public function registerMorphMap(): void
    {
        $map = TenantService::config('morph_map');
        if (! \is_array($map)) {
            $map = [];
        }

        Relation::morphMap($map);
    }

    public function registerDB(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
>>>>>>> aurmich/dev
        // Skip database operations during testing
        //if ($this->app->environment('testing')) {
        //    Schema::defaultStringLength(191);
        //    return;
        //}

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
>>>>>>> aurmich/dev
        if (Request::has('act') && Request::input('act') === 'migrate') {
            DB::purge('mysql'); // Call to a member function prepare() on null
            DB::reconnect('mysql');
        }

        // DB::purge(); //Call to a member function prepare() on null
        // Database connection [mysql] not configured.
        DB::reconnect();
        Schema::defaultStringLength(191);
    }

    public function register(): void
    {
        parent::register();
        $this->app->register(Filament\AdminPanelProvider::class);
    }

    public function mergeConfigs(): void
    {
        /*
        dddx([
            'base_path' => base_path(),
            'path1' => realpath(__DIR__ . '/../../../'),
            'run' => $this->app->runningUnitTests(),
            'run1' => $this->app->runningInConsole(),
        ]);
        */
        // if ($this->app->runningUnitTests()) {
        // if (base_path() !== realpath(__DIR__ . '/../../../')) {
        //     // $this->publishes([
        //     //    __DIR__ . '/../config/xra.php' => config_path('xra.php'),
        //     // ], 'config');

        //     $name = TenantService::getName();
        //     File::makeDirectory(config_path($name), 0755, true, true);

        //     $this->mergeConfigFrom(__DIR__ . '/../config/xra.php', 'xra');

        //     return;
        // }

        $configs = TenantService::getConfigNames();

        foreach ($configs as $config) {
            $tmp = TenantService::config($config['name']);
        }
    }
}
