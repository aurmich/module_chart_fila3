<?php
declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Actions\Action;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Volt\Component;
use Modules\Tenant\Services\TenantService;
<<<<<<< HEAD

/** @var array */
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
$base_middleware=['auth'];

name('profile');
middleware($base_middleware);

new class extends Component
{

=======
=======
>>>>>>> 54f4fa16 (.)
use function Livewire\Volt\{state, mount};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)

/** @var array */
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
$base_middleware=['auth'];

name('profile');
middleware($base_middleware);



new class extends Component
{

<<<<<<< HEAD
$updatePassword = function () {
    $validated = $this->validate([
        'current_password' => ['required', 'current_password'],
        'new_password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $this->user->update([
        'password' => Hash::make($validated['new_password']),
    ]);

    $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
    $this->dispatch('password-updated');
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
};

?>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<x-layouts.app>
    @volt('profile')
    <div>
        {{--  route('pages.view',['slug'=>'patient_register_complete'])  --}}
        <x-page side="content" slug="profile" :type="auth()->user()?->type?->value"/>
    </div>
    @endvolt
</x-layouts.app>
=======
=======
>>>>>>> 54f4fa16 (.)
@volt
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
<x-layouts.app>
    @volt('profile')
    <div>
        {{--  route('pages.view',['slug'=>'patient_register_complete'])  --}}
        <x-page side="content" slug="profile" :type="auth()->user()?->type?->value"/>
    </div>
    @endvolt
</x-layouts.app>
<<<<<<< HEAD
@endvolt
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
