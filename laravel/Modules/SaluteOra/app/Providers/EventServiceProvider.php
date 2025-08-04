<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\SaluteOra\Events\UserModerationStatusUpdated;
use Modules\SaluteOra\Listeners\UserModerationListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [
<<<<<<< HEAD
<<<<<<< HEAD
        //UserModerationStatusUpdated::class => [
         //   UserModerationListener::class,
        //],
=======
        UserModerationStatusUpdated::class => [
            UserModerationListener::class,
        ],
>>>>>>> 54f4fa16 (.)
=======
        //UserModerationStatusUpdated::class => [
         //   UserModerationListener::class,
        //],
>>>>>>> 13ea6524 (phpstan)
    ];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = false;

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
