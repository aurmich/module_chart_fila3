<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Arr;
use Livewire\Volt\Component;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
=======
=======
>>>>>>> 9457e4a5 (- rename file register)
use Modules\SaluteOra\Models\User;
=======

use App\Models\User;
>>>>>>> 15cb84fb (fix collisions)
=======
declare(strict_types=1);
<<<<<<< HEAD
use Modules\SaluteOra\Models\User;
>>>>>>> d23ba493 (add calendar)
=======
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Arr;
use Livewire\Volt\Component;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> 9457e4a5 (- rename file register)
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Illuminate\Support\HtmlString;
use Livewire\Attributes\Validate;
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
=======
use Modules\Xot\Datas\XotData;
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
>>>>>>> aurmich/dev
use function Laravel\Folio\{middleware, name};

middleware(['guest']);
name('register');

new class extends Component
{
    public array $types = [];

    public function mount(): void
    {
<<<<<<< HEAD
        $this->types=XotData::make()->getUserChildTypes();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->types = (new User())->getChildTypes();
=======
<<<<<<< HEAD
        $this->types=XotData::make()->getUserChildTypes();
=======
        $this->types = (new User())->getChildTypes();
>>>>>>> 54f4fa16 (.)
>>>>>>> 9457e4a5 (- rename file register)
=======
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended('/');
>>>>>>> 15cb84fb (fix collisions)
=======
        $this->types = (new User())->getChildTypes();
>>>>>>> d23ba493 (add calendar)
=======
        $this->types=XotData::make()->getUserChildTypes();
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
>>>>>>> aurmich/dev
    }
};
?>

<x-layouts.app>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    @volt('register')
<<<<<<< HEAD
    <div class="register-container">
        <div class="min-h-screen bg-[#E6EBF7] py-12">
=======
<<<<<<< HEAD
    <!-- background-image: url('/img/background-filigrana-chiaro.png'); background-size: cover; background-position: center -->
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="p-5 m-auto">
=======
    <div class="bg-[#E6EBF7] p-5">
>>>>>>> aurmich/dev
=======
    <div class="bg-[#E6EBF7] p-5 m-auto">
>>>>>>> 3ad9917a (- fix styles registration)
    <div class="register-container">
        <div class="mb-16">
>>>>>>> 9457e4a5 (- rename file register)
=======
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-12">
        <div class="max-w-lg mx-auto px-6">
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> aurmich/dev
    @volt('register')
    <!-- background-image: url('/img/background-filigrana-chiaro.png'); background-size: cover; background-position: center -->
    <div class="p-5 m-auto">
    <div class="register-container">
<<<<<<< HEAD
        <div class="mb-16">
=======
<<<<<<< HEAD
<<<<<<< HEAD
        <div class="min-h-screen bg-[#E6EBF7] py-12">
>>>>>>> d23ba493 (add calendar)
=======
        <div class="bg-white mb-16">
>>>>>>> 1001715a (- continuo stile landing page e pagine paziente/dottore)
=======
        <div class="mb-16">
>>>>>>> f7d3ce4f (- update landing-page;)
>>>>>>> aurmich/dev
            <!-- Logo e intestazione -->
            <div class="text-center mb-16">
                <div class="flex justify-center mb-4">
                    <x-ui.logo class="h-12 text-blue-900" />
                </div>
<<<<<<< HEAD
<<<<<<< HEAD
                <h1 class="text-3xl font-light text-blue-900">{!! __('pub_theme::auth.register.welcome_message') !!}</h1>
                <p class="text-gray-600 mt-2">{{ __('pub_theme::auth.register.description') }}</p>
            </div>

            <!-- Card contenente il form di registrazione -->
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                <h1 class="text-3xl font-light text-blue-900">Benvenuto in <span class="font-bold">SaluteOra</span></h1>
=======
                <h1 class="text-3xl font-light text-blue-900">Benvenuto in <span class="font-bold"><nome progetto></span></h1>
>>>>>>> 15cb84fb (fix collisions)
=======
                <h1 class="text-3xl font-light text-blue-900">Benvenuto in <span class="font-bold">SaluteOra</span></h1>
>>>>>>> d23ba493 (add calendar)
                <p class="text-gray-600 mt-2">Crea il tuo account per accedere a tutti i servizi</p>
=======
                <h1 class="text-3xl font-light text-blue-900">{!! __('pub_theme::auth.register.welcome_message') !!}</h1>
                <p class="text-gray-600 mt-2">{{ __('pub_theme::auth.register.description') }}</p>
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
            </div>

            <!-- Card contenente il form di registrazione -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <div class="w-full flex justify-around">
                @foreach($types as $type => $class)
                <div class="w-80 h-80 rounded-lg flex justify-center items-center bg-[#F9F9F9] hover:bg-white hover:cursor-pointer shadow-2xl">
                    <a class="text-2xl text-[#1A467F] hover:text-primary-400 transition-colors" href="{{ route('register.type', ['type'=>$type]) }}" tag="a">
                        {{ ucfirst($type) }}
                    </a>
                </div>
=======
<<<<<<< HEAD
                <h1 class="text-3xl font-light text-blue-900">{!! __('pub_theme::auth.register.welcome_message') !!}</h1>
                <p class="text-gray-600 mt-2">{{ __('pub_theme::auth.register.description') }}</p>
=======
                <h1 class="text-3xl font-light text-blue-900">Benvenuto in <span class="font-bold">SaluteOra</span></h1>
                <p class="text-gray-600 mt-2">Crea il tuo account per accedere a tutti i servizi</p>
>>>>>>> aurmich/dev
            </div>

            <!-- Card contenente il form di registrazione -->
<<<<<<<< HEAD:laravel/Themes/One/resources/views/pages/auth/register.blade.php.old1
>>>>>>> aurmich/dev
            <div class="w-full lg:flex justify-around">
                @foreach($types as $type )
                @if($type->canRegister())
                <div class="flex justify-center">
                    <a class="w-full flex flex-col items-center mb-7" href="{{ $type->getRoute('register') }}" tag="a">
                        <div class="relative w-80 h-80 rounded-[25px] bg-[#E6EBF7] shadow-2xl overflow-hidden">
                        <img src="{{ $type->getImage() }}" class="w-full h-full object-contain"/>
                        <button class="flex items-center justify-between absolute bottom-0 left-0 w-full bg-[#E6EBF7B3] text-[#272C4D] px-3 text-center text-xl font-extrabold py-5 transition-all duration-300 ease-in-out hover:py-9">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
                            {{ $type->getLabel() }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                        <!-- <x-filament::button class="text-2xl !text-white transition-colors rounded-lg flex justify-center items-center !bg-[#272C4D] hover:bg-[#FF5F7E] hover:cursor-pointer shadow-2xl mt-5 text-lg p-5">
                                {{ $type->getLabel() }}
                        </x-filament::button> -->
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
=======
    <div class="register-container">
        <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-12">
            <!-- Logo e intestazione -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <x-ui.logo class="h-12 text-blue-900" />
                </div>
                <h1 class="text-3xl font-light text-blue-900">Benvenuto in <span class="font-bold">SaluteOra</span></h1>
                <p class="text-gray-600 mt-2">Crea il tuo account per accedere a tutti i servizi4</p>
            </div>

            <!-- Card contenente il form di registrazione -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                @foreach($types as $type => $class)
                    <x-filament::button size="sm" href="{{ route('register.type', ['type'=>$type]) }}" tag="a">
                        {{ ucfirst($type) }}
                    </x-filament::button>
========
=======
>>>>>>> d23ba493 (add calendar)
            <div class="w-full flex justify-around">
                @foreach($types as $type => $class)
                <a class="text-2xl text-[#1A467F] hover:text-primary-400 transition-colors" href="{{ route('register.type', ['type'=>$type]) }}" tag="a">
                <div class="w-80 h-80 rounded-lg flex justify-center items-center bg-[#F9F9F9] hover:bg-white hover:cursor-pointer shadow-2xl">
                        {{ ucfirst($type) }}
                    </div>
                </a>
<<<<<<< HEAD
>>>>>>>> 9457e4a5 (- rename file register):laravel/Themes/One/resources/views/pages/auth/register.blade.php
>>>>>>> 9457e4a5 (- rename file register)
                @endforeach
            </div>
        </div>

<<<<<<< HEAD
        <div class="bg-[#E6EBF7] text-center text-sm text-gray-500">
            <p>Hai bisogno di assistenza? <a href="#" class="text-blue-800 hover:underline">Contattaci</a></p>
        </div>
=======
        <div class="mt-8 text-center text-sm text-gray-500">
            <p>Hai bisogno di assistenza? <a href="#" class="text-blue-800 hover:underline">Contattaci</a></p>
        </div>
>>>>>>> 54f4fa16 (.)
>>>>>>> 9457e4a5 (- rename file register)
=======
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Intestazione card -->
                <div class="bg-blue-900 px-6 py-4">
                    <h2 class="text-xl font-medium text-white flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        Registrazione
                    </h2>
                </div>

                <!-- Form di registrazione -->
                <div class="p-6">
                    @livewire(\Modules\User\Filament\Widgets\RegistrationWidget::class)
                </div>
            </div>

            <!-- Footer con informazioni aggiuntive -->
            <div class="mt-8 text-center text-sm text-gray-500">
                <p>Hai bisogno di assistenza? <a href="#" class="text-blue-800 hover:underline">Contattaci</a></p>
            </div>
        </div>
>>>>>>> 15cb84fb (fix collisions)
=======
=======
            <div class="w-full lg:flex justify-around">
<<<<<<< HEAD
                @foreach($types as $type => $class)
<<<<<<< HEAD
<div class="flex justify-center">
    <a class="w-full flex flex-col items-center mb-7" href="{{ route('register.type', ['type'=>$type]) }}" tag="a">
        <div class="w-80 h-80 rounded-full bg-white shadow-2xl">
        
        </div>
    <x-filament::button class="text-2xl !text-white transition-colors rounded-lg flex justify-center items-center !bg-[#1A467F] hover:bg-[#0D9488] hover:cursor-pointer shadow-2xl mt-5 text-lg p-5">
            {{ ucfirst($type) }}
    </x-filament::button>
    </a>
</div>
>>>>>>> 1001715a (- continuo stile landing page e pagine paziente/dottore)
=======
=======
                @foreach($types as $type )
                @if($type->canRegister())
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
                <div class="flex justify-center">
                    <a class="w-full flex flex-col items-center mb-7" href="{{ $type->getRoute('register') }}" tag="a">
                        <div class="w-80 h-80 rounded-full bg-white shadow-2xl overflow-hidden">
                        <img src="{{ $type->getImage() }}" class="w-full h-full object-cover"/>
                        </div>
                    <x-filament::button class="text-2xl !text-white transition-colors rounded-lg flex justify-center items-center !bg-[#272C4D] hover:bg-[#FF5F7E] hover:cursor-pointer shadow-2xl mt-5 text-lg p-5">
=======
>>>>>>> f7d3ce4f (- update landing-page;)
                            {{ $type->getLabel() }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                        <!-- <x-filament::button class="text-2xl !text-white transition-colors rounded-lg flex justify-center items-center !bg-[#272C4D] hover:bg-[#FF5F7E] hover:cursor-pointer shadow-2xl mt-5 text-lg p-5">
                                {{ $type->getLabel() }}
                        </x-filament::button> -->
                        </div>
                    </a>
                </div>
<<<<<<< HEAD
>>>>>>> 7e1c3ad6 (- sistemato footer;)
=======
                @endif
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
                @endforeach
            </div>
        </div>
<<<<<<< HEAD

        {{--   <div class="bg-[#E6EBF7] text-center text-sm text-gray-500">
            <p>Hai bisogno di assistenza? <a href="#" class="text-blue-800 hover:underline">Contattaci</a></p>
<<<<<<< HEAD
<<<<<<< HEAD
        </div>
>>>>>>> d23ba493 (add calendar)
=======
        </div> -->
>>>>>>> 1001715a (- continuo stile landing page e pagine paziente/dottore)
=======
        </div>
        --}}
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
=======
    </div>
>>>>>>> f7d3ce4f (- update landing-page;)
>>>>>>> aurmich/dev
    </div>
    @endvolt
</x-layouts.app>
