<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
use App\Models\User;
use Illuminate\Support\Facades\Auth;
>>>>>>> 54f4fa16 (.)
use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, rules};

middleware(['guest']);
name('login');

<<<<<<< HEAD

=======
state([
    'email' => '',
    'password' => '',
    'remember' => false,
]);

rules([
    'email' => ['required', 'email'],
    'password' => ['required'],
]);

$authenticate = function() {
    $this->validate();

    if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
        $this->addError('email', __('auth.failed'));
        return;
    }

    // Laravel gestirà automaticamente l'evento Login
    return redirect()->intended(route('home'));
};
>>>>>>> 54f4fa16 (.)

?>

<x-layouts.main>
<<<<<<< HEAD
    @volt('login')
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden">
        <!-- Reactive subtle background waves -->
        <svg id="wave-svg" class="absolute inset-0 w-full h-full opacity-10 pointer-events-none" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#A5B4FC" fill-opacity="0.1" d="M0,224L60,213.3C120,203,240,181,360,176C480,171,600,181,720,181.3C840,181,960,171,1080,160C1200,149,1320,139,1380,133.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>

<<<<<<< HEAD
        <div class="flex justify-center">
            <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
        </div>
=======
<div class="flex justify-center">
    <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
</div>
>>>>>>> aurmich/dev

        <div class="mt-8 mx-auto w-full max-w-md relative">
            <!-- Glassmorphism login card -->
            <div class="relative bg-white m-6 z-10 backdrop-blur-md rounded-2xl p-8 shadow-lg ring-1 ring-white/20">
            <div class="mx-auto w-full max-w-md">
=======
    <div class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center">
        <div class="mx-auto w-full max-w-md">
>>>>>>> 54f4fa16 (.)
            <a href="{{ route('home') }}" class="block text-center">
                <x-filament::icon name="heroicon-o-home" class="w-auto h-10 mx-auto text-primary-600" />
            </a>

<<<<<<< HEAD
            <h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-[#272C4D]">
<<<<<<< HEAD
                {{ __('pub_theme::auth.login.title') }}
            </h2>
            <div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
                <span>{{ __('pub_theme::auth.login.or') }}</span>
                <a href="{{ route('register') }}" class="text-[#FF5F7E] font-medium">
                    {{ __('pub_theme::auth.login.create_account') }}
=======
=======
            <h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-gray-900 dark:text-white">
>>>>>>> 54f4fa16 (.)
                {{ __('auth.login.title') }}
            </h2>
            <div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
                <span>{{ __('auth.login.or') }}</span>
<<<<<<< HEAD
                <a href="{{ route('register') }}" class="text-[#FF5F7E] font-medium">
                    {{ __('auth.login.create_account') }}
>>>>>>> aurmich/dev
                </a>
            </div>
        </div>
                <!-- Livewire Login Form -->
                <div class="space-y-6 flex flex-col justify-center">
                    @livewire(\Modules\User\Filament\Widgets\LoginWidget::class)
<<<<<<< HEAD
                    <a href="/{{ $lang }}/auth/password/reset" class="text-[#FF5F7E] text-center text-sm !mt-0">{{ __('pub_theme::auth.login.forgot_password') }}</a>
=======
                    <a href="/it/auth/password/reset" class="text-[#FF5F7E] text-center text-sm !mt-0">Hai dimenticato la password?</a>
>>>>>>> aurmich/dev
                </div>
            </div>
        </div>
    </div>
    @endvolt
    <!-- Mousemove handler for wave effect -->
    <script>
        document.getElementById('wave-container').addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const dx = ((e.clientX - rect.left) / rect.width - 0.5) * 30;
            const dy = ((e.clientY - rect.top) / rect.height - 0.5) * 20;
            const svg = document.getElementById('wave-svg');
            svg.style.transform = `translate(${dx}px, ${dy}px)`;
        });
    </script>
=======
                <a href="{{ route('register') }}" class="text-primary-600 hover:text-primary-500 font-medium">
                    {{ __('auth.login.create_account') }}
                </a>
            </div>
        </div>

        <div class="mt-8 mx-auto w-full max-w-md">
            <div class="px-10 py-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                @volt('auth.login')
                <form wire:submit="authenticate" class="space-y-6">
                    <x-ui.input
                        label="{{ __('auth.login.email') }}"
                        type="email"
                        id="email"
                        name="email"
                        wire:model="email"
                        required
                        autocomplete="email"
                    />

                    <x-ui.input
                        label="{{ __('auth.login.password') }}"
                        type="password"
                        id="password"
                        name="password"
                        wire:model="password"
                        required
                        autocomplete="current-password"
                    />

                    <div class="flex items-center justify-between mt-6 text-sm leading-5">
                        <x-ui.checkbox
                            label="{{ __('auth.login.remember_me') }}"
                            id="remember"
                            name="remember"
                            wire:model="remember"
                        />

                        <a href="{{ route('password.request') }}" class="text-primary-600 hover:text-primary-500 font-medium">
                            {{ __('auth.login.forgot_password') }}
                        </a>
                    </div>

                    <x-ui.button type="primary" rounded="md" submit="true" class="w-full">
                        {{ __('auth.login.submit') }}
                    </x-ui.button>
                </form>
                @endvolt
            </div>
        </div>
    </div>
>>>>>>> 54f4fa16 (.)
</x-layouts.main>
