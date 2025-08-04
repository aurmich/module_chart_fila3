<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Chart\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

=======
namespace Modules\Geo\Providers;

// --- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider.
 */
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
<<<<<<< HEAD
    protected string $moduleNamespace = 'Modules\Chart\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Chart';
=======
    protected string $moduleNamespace = 'Modules\Geo\Http\Controllers';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Geo';
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
}
