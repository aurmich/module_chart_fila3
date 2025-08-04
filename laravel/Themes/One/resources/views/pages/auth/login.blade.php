<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======
use App\Models\User;
use Illuminate\Support\Facades\Auth;
>>>>>>> 54f4fa16 (.)
=======
use App\Models\User;
use Illuminate\Auth\Events\Login;
>>>>>>> 15cb84fb (fix collisions)
=======
declare(strict_types=1);

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Support\Facades\Auth;
>>>>>>> d23ba493 (add calendar)
=======
>>>>>>> adac82bd (rebase)
>>>>>>> aurmich/dev
use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, rules};

middleware(['guest']);
name('login');

<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> d23ba493 (add calendar)
state([
    'email' => '',
    'password' => '',
    'remember' => false,
]);
<<<<<<< HEAD
=======
new class extends Component
{
    #[Validate('required|email')]
    public $email = '';
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)

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
=======

>>>>>>> adac82bd (rebase)
>>>>>>> aurmich/dev

?>

<x-layouts.main>
<<<<<<< HEAD
    @volt('login')
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden">
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    @volt('login')
<<<<<<< HEAD
<<<<<<< HEAD
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden">
=======
    @volt('login')
<<<<<<< HEAD
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-indigo-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800">
>>>>>>> adac82bd (rebase)
=======
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden bg-[#EBF5FF]">
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
=======
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden bg-[#F5F5F5]">
>>>>>>> 89a8313a (- update primary colors)
=======
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden">
>>>>>>> 9dcbbc15 (- updated login e reset view)
>>>>>>> aurmich/dev
        <!-- Reactive subtle background waves -->
        <svg id="wave-svg" class="absolute inset-0 w-full h-full opacity-10 pointer-events-none" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#A5B4FC" fill-opacity="0.1" d="M0,224L60,213.3C120,203,240,181,360,176C480,171,600,181,720,181.3C840,181,960,171,1080,160C1200,149,1320,139,1380,133.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
<<<<<<< HEAD

        <div class="flex justify-center">
            <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
        </div>
=======
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        <div class="flex justify-center">
            <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
        </div>
=======
<div class="flex justify-center">
    <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
</div>
>>>>>>> aurmich/dev
=======

<<<<<<< HEAD
<div class="flex justify-center">
    <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
</div>
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
>>>>>>> aurmich/dev
=======
        <div class="flex justify-center">
            <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
        </div>
>>>>>>> 5ba41858 (✨ (register.blade.php, login.blade.php): update layout component from x-layouts.main to x-layouts.app for consistency in theme structure)

        <div class="mt-8 mx-auto w-full max-w-md relative">
            <!-- Glassmorphism login card -->
            <div class="relative bg-white m-6 z-10 backdrop-blur-md rounded-2xl p-8 shadow-lg ring-1 ring-white/20">
            <div class="mx-auto w-full max-w-md">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    <div class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center">
        <div class="mx-auto w-full max-w-md">
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
            <a href="{{ route('home') }}" class="block text-center">
                <x-filament::icon name="heroicon-o-home" class="w-auto h-10 mx-auto text-primary-600" />
            </a>

<<<<<<< HEAD
            <h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-[#272C4D]">
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
            <h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-[#272C4D]">
<<<<<<< HEAD
>>>>>>> aurmich/dev
                {{ __('pub_theme::auth.login.title') }}
            </h2>
            <div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
                <span>{{ __('pub_theme::auth.login.or') }}</span>
                <a href="{{ route('register') }}" class="text-[#FF5F7E] font-medium">
                    {{ __('pub_theme::auth.login.create_account') }}
<<<<<<< HEAD
=======
=======
=======
            <h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-gray-900 dark:text-white">
>>>>>>> 54f4fa16 (.)
=======
            <h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-[#272C4D]">
>>>>>>> 89a8313a (- update primary colors)
                {{ __('auth.login.title') }}
            </h2>
            <div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
                <span>{{ __('auth.login.or') }}</span>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 89a8313a (- update primary colors)
                <a href="{{ route('register') }}" class="text-[#FF5F7E] font-medium">
                    {{ __('auth.login.create_account') }}
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
=======
                {{ __('pub_theme::auth.login.title') }}
            </h2>
            <div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
                <span>{{ __('pub_theme::auth.login.or') }}</span>
                <a href="{{ route('register') }}" class="text-[#FF5F7E] font-medium">
                    {{ __('pub_theme::auth.login.create_account') }}
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
                </a>
            </div>
        </div>
                <!-- Livewire Login Form -->
                <div class="space-y-6 flex flex-col justify-center">
                    @livewire(\Modules\User\Filament\Widgets\LoginWidget::class)
<<<<<<< HEAD
<<<<<<< HEAD
                    <a href="/{{ $lang }}/auth/password/reset" class="text-[#FF5F7E] text-center text-sm !mt-0">{{ __('pub_theme::auth.login.forgot_password') }}</a>
=======
<<<<<<< HEAD
<<<<<<< HEAD
                    <a href="/{{ $lang }}/auth/password/reset" class="text-[#FF5F7E] text-center text-sm !mt-0">{{ __('pub_theme::auth.login.forgot_password') }}</a>
=======
                    <a href="/it/auth/password/reset" class="text-[#FF5F7E] text-center text-sm !mt-0">Hai dimenticato la password?</a>
>>>>>>> aurmich/dev
=======
                    <a href="/it/auth/password/reset" class="text-[#FF5F7E] text-center text-sm !mt-0">Hai dimenticato la password?</a>
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
>>>>>>> aurmich/dev
=======
                    <a href="/it/auth/password/reset" class="text-[#FF5F7E] text-center text-sm !mt-0">{{ __('pub_theme::auth.login.forgot_password') }}</a>
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
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
<<<<<<< HEAD
</x-layouts.main>
=======
=======
                <a href="{{ route('register') }}" class="text-primary-600 hover:text-primary-500 font-medium">
                    {{ __('auth.login.create_account') }}
                </a>
=======
=======
    <div class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center">
=======
        <!-- Floating decorative shapes -->
        <div class="absolute top-8 left-8 w-16 h-16 bg-pink-300 rounded-full mix-blend-multiply opacity-30 animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-20 h-20 bg-yellow-300 rounded-full mix-blend-multiply opacity-20 animate-bounce"></div>
>>>>>>> adac82bd (rebase)
        <div class="mx-auto w-full max-w-md">
=======
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
            <a href="{{ route('home') }}" class="block text-center">
                <x-filament::icon name="heroicon-o-home" class="w-auto h-10 mx-auto text-primary-600" />
            </a>
>>>>>>> d23ba493 (add calendar)

            <h2 class="mt-5 text-2xl font-extrabold leading-9 text-center text-[#1A467F]">
                {{ __('auth.login.title') }}
            </h2>
            <div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5">
<<<<<<< HEAD
                <span>Or</span>
                <x-ui.text-link href="{{ route('register') }}">create a new account</x-ui.text-link>
>>>>>>> 15cb84fb (fix collisions)
=======
                <span>{{ __('auth.login.or') }}</span>
                <a href="{{ route('register') }}" class="text-[#0D9488] font-medium">
                    {{ __('auth.login.create_account') }}
                </a>
>>>>>>> d23ba493 (add calendar)
            </div>
        </div>
                <!-- Livewire Login Form -->
                <div class="space-y-6">
                    @livewire(\Modules\User\Filament\Widgets\LoginWidget::class)
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
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
>>>>>>> adac82bd (rebase)
</x-layouts.main>
=======

</x-layouts.main>
>>>>>>> 15cb84fb (fix collisions)
=======
</x-layouts.main>
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
