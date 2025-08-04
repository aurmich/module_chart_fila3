<?php
declare(strict_types=1);
use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Actions\Action;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Volt\Component;
use Modules\Tenant\Services\TenantService;

/** @var array */
<<<<<<< HEAD
<<<<<<< HEAD
=======
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
>>>>>>> aurmich/dev
=======
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
>>>>>>> 54f4fa16 (.)
$base_middleware=[];

name('home');
middleware($base_middleware);



new class extends Component
{

};

?>

<<<<<<< HEAD
<<<<<<< HEAD
<x-layouts.app>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 @volt('home')
    <div>
        <x-page side="content" slug="home" :type="auth()->user()?->type?->value"/>
    </div>
 @endvolt
=======
    @volt('home')
    <div>
        {{--  route('pages.view',['slug'=>'patient_register_complete'])  --}}
<<<<<<< HEAD
<<<<<<< HEAD
        <x-page side="content" slug="home" :type="auth()->user()?->type?->value"/>
=======
        <x-page side="content" slug="home" :type="auth()->user()?->type?->value ?? 'patient'"/>
>>>>>>> e577f0ca (feat: getDataDefault for fix livewire form data)
    </div>
    @endvolt
>>>>>>> aurmich/dev
=======
=======
    @volt('home')
>>>>>>> 7274ba81 (✨ (vscode): add new recommended extensions for Laravel development to improve developer experience)
    <div>
=======
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
        <x-page side="content" slug="home" :type="auth()->user()?->type->value"/>
    </div>
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    @endvolt
>>>>>>> 7274ba81 (✨ (vscode): add new recommended extensions for Laravel development to improve developer experience)
</x-layouts.app>
=======
<x-layouts.marketing>
=======
<x-layouts.app>
    @volt('home')
>>>>>>> d23ba493 (add calendar)
    <div>
        <x-page side="content" slug="home" :type="auth()->user()?->type->value"/>
    </div>
<<<<<<< HEAD
</x-layouts.marketing>
>>>>>>> 15cb84fb (fix collisions)
=======
    @endvolt
</x-layouts.app>
>>>>>>> d23ba493 (add calendar)
