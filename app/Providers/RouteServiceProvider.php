<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Chart\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
namespace Modules\Geo\Providers;

// --- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider.
 */
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected string $moduleNamespace = 'Modules\Chart\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Chart';
=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
    protected string $moduleNamespace = 'Modules\Geo\Http\Controllers';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Geo';
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
}
