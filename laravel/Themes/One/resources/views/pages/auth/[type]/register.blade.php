<?php
<<<<<<< HEAD

declare(strict_types=1);

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

=======
declare(strict_types=1);
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Volt\Component;
use function Laravel\Folio\{middleware, name};
use Livewire\Attributes\Validate;


>>>>>>> aurmich/dev
middleware(['guest']);
name('register.type');

new class extends Component
{
    #[Validate('required')]
    public $type;
<<<<<<< HEAD
    public $isDoctor;

    public function mount()
    {
        $this->isDoctor = $this->type === 'doctor';
    }
=======

    //public function mount(string $type)
    //{
    //    $this->type = $type;
    //}

    // Logica del componente se necessaria
>>>>>>> aurmich/dev
};

?>

<x-layouts.app>
    @volt('register.type')
<<<<<<< HEAD
<<<<<<< HEAD
    <div >
        
        
        <div class="mt-8 mx-auto w-full max-w-4xl ">
            <div class=" bg-white m-6 z-10 backdrop-blur-md rounded-2xl p-8 shadow-lg ring-1 ring-white/20">
                <div class="mx-auto w-full">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <a href="{{ route('home') }}" class="inline-block mb-4">
                            <x-filament::icon name="heroicon-o-home" class="w-auto h-10 mx-auto text-primary-600" />
                        </a>
                        
                        <h2 class="text-3xl font-extrabold leading-9 text-[#272C4D]">
                             {{  __('pub_theme::auth.register.'.$type.'.title') }}
                        </h2>
                        
                        <p class="mt-2 text-lg text-gray-600">
                            {{ __('pub_theme::auth.register.'.$type.'.subtitle') }}
                        </p>
                        
                        <div class="text-sm leading-5 text-center text-gray-600 dark:text-gray-400 space-x-0.5 mt-4">
                            <span>{{ __('pub_theme::auth.register.already_registered') }}</span>
                            <a href="{{ route('login') }}" class="text-[#FF5F7E] font-medium">
                                {{ __('pub_theme::auth.register.login_link') }}
                            </a>
                        </div>
                    </div>

                    <!-- Registration Form Widget -->
                    <div class="space-y-6">
                        @livewire(\Modules\User\Filament\Widgets\RegistrationWidget::class, ['type' => $type])
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endvolt

   
=======
    <div class="min-h-screen bg-white pb-5">
=======
    <div class="min-h-screen bg-[#E6EBF7] pb-5">
>>>>>>> 3ad9917a (- fix styles registration)
        <!-- Logo e intestazione -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <x-ui.logo class="h-12 text-blue-900" />
            </div>
            <h1 class="text-3xl font-light text-blue-900">Benvenuto in <span class="font-bold">il Progetto</span></h1>
            <p class="text-gray-600 mt-2">Crea il tuo account per accedere a tutti i servizi</p>
        </div>

        <!-- Card contenente il form di registrazione -->
        <div id="doctor-section" class="rounded-2xl overflow-hidden">
            <!-- Form di registrazione -->
            @livewire(\Modules\User\Filament\Widgets\RegistrationWidget::class, ['type' => $type])
        </div>

        <!-- Footer con informazioni aggiuntive -->
        <!-- <div class="mt-8 text-center text-sm text-gray-500">
            <p>Hai bisogno di assistenza? <a href="#" class="text-blue-800 hover:underline">Contattaci</a></p>
        </div> -->
    </div>
    @endvolt
>>>>>>> aurmich/dev
</x-layouts.app>
