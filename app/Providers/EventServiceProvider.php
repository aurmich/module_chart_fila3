<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Chart\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
namespace Modules\Geo\Providers;

use Modules\Xot\Providers\XotBaseEventServiceProvider;

class EventServiceProvider extends XotBaseEventServiceProvider
{
    public string $name = 'Geo';
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
     * Configure the proper event listeners for email verification.
     */
    protected function configureEmailVerification(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // ...
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
    }
}
