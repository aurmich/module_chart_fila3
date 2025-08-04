<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3e4ec66 (.)
>>>>>>> aurmich/dev
/**
 * Route Service Provider per il modulo Activity.
 *
 * Gestisce la registrazione delle route per il modulo Activity.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
   /**
     * The module namespace to assume when generating URLs to actions.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> f3e4ec66 (.)
>>>>>>> aurmich/dev
    protected string $moduleNamespace = 'Modules\Activity\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 54f4fa16 (.)
=======
>>>>>>> f3e4ec66 (.)
>>>>>>> aurmich/dev
    public string $name = 'Activity';
}
