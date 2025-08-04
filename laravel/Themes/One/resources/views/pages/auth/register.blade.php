<?php
declare(strict_types=1);
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Arr;
use Livewire\Volt\Component;
use Modules\Xot\Datas\XotData;
=======
>>>>>>> 9457e4a5 (- rename file register)
use Modules\SaluteOra\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Volt\Component;
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> 9457e4a5 (- rename file register)
use function Laravel\Folio\{middleware, name};

middleware(['guest']);
name('register');

new class extends Component
{
    public array $types = [];

    public function mount(): void
    {
<<<<<<< HEAD
        $this->types = (new User())->getChildTypes();
=======
<<<<<<< HEAD
        $this->types=XotData::make()->getUserChildTypes();
=======
        $this->types = (new User())->getChildTypes();
>>>>>>> 54f4fa16 (.)
>>>>>>> 9457e4a5 (- rename file register)
    }
};
?>

<x-layouts.app>
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
            <!-- Logo e intestazione -->
            <div class="text-center mb-16">
                <div class="flex justify-center mb-4">
                    <x-ui.logo class="h-12 text-blue-900" />
                </div>
<<<<<<< HEAD
                <h1 class="text-3xl font-light text-blue-900">Benvenuto in <span class="font-bold">SaluteOra</span></h1>
                <p class="text-gray-600 mt-2">Crea il tuo account per accedere a tutti i servizi</p>
            </div>

            <!-- Card contenente il form di registrazione -->
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
            <div class="w-full lg:flex justify-around">
                @foreach($types as $type )
                @if($type->canRegister())
                <div class="flex justify-center">
                    <a class="w-full flex flex-col items-center mb-7" href="{{ $type->getRoute('register') }}" tag="a">
                        <div class="relative w-80 h-80 rounded-[25px] bg-[#E6EBF7] shadow-2xl overflow-hidden">
                        <img src="{{ $type->getImage() }}" class="w-full h-full object-contain"/>
                        <button class="flex items-center justify-between absolute bottom-0 left-0 w-full bg-[#E6EBF7B3] text-[#272C4D] px-3 text-center text-xl font-extrabold py-5 transition-all duration-300 ease-in-out hover:py-9">
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
            <div class="w-full flex justify-around">
                @foreach($types as $type => $class)
                <a class="text-2xl text-[#1A467F] hover:text-primary-400 transition-colors" href="{{ route('register.type', ['type'=>$type]) }}" tag="a">
                <div class="w-80 h-80 rounded-lg flex justify-center items-center bg-[#F9F9F9] hover:bg-white hover:cursor-pointer shadow-2xl">
                        {{ ucfirst($type) }}
                    </div>
                </a>
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
    </div>
    @endvolt
</x-layouts.app>
