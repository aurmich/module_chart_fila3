<?php
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Actions\Action;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Volt\Component;
use Modules\Tenant\Services\TenantService;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Models\Page;
use Modules\Cms\Http\Middleware\PageSlugMiddleware;
=======
>>>>>>> aurmich/dev

/** @var array */
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
<<<<<<< HEAD

$base_middleware=[];

name('pages.view');
/*
if(isset($slug)){
    $middleware=Page::getMiddlewareBySlug($slug);
    middleware($middleware);
}
*/
middleware(PageSlugMiddleware::class);
=======
$base_middleware=[];

name('pages.view');
middleware($base_middleware);
>>>>>>> aurmich/dev



new class extends Component
{
    public string $slug;
<<<<<<< HEAD

   
=======
>>>>>>> aurmich/dev
};

?>

<x-layouts.app>
    @volt('pages.view')
    <div>
        <x-page side="content" :slug="$slug" />
    </div>
    @endvolt
</x-layouts.app>
=======
=======

>>>>>>> 15cb84fb (fix collisions)
=======
declare(strict_types=1);
>>>>>>> d23ba493 (add calendar)
use Modules\Cms\Models\Page;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use function Laravel\Folio\{withTrashed,middleware, name,render};
=======
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)

/** @var array */
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
$base_middleware=[];

name('pages.view');
middleware($base_middleware);



new class extends Component
{
    public string $slug;
};

?>

<x-layouts.app>
    @volt('pages.view')
    <div>
        <x-page side="content" :slug="$slug" />
    </div>
<<<<<<< HEAD
</x-layouts.marketing>
>>>>>>> 54f4fa16 (.)
=======
    @endvolt
</x-layouts.app>
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
