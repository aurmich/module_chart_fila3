<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev

declare(strict_types=1);

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

<<<<<<< HEAD
=======
=======
=======
>>>>>>> 54f4fa16 (.)
declare(strict_types=1);
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Volt\Component;
use function Laravel\Folio\{middleware, name};
use Livewire\Attributes\Validate;


<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
middleware(['guest']);
name('register.type');

new class extends Component
{
    #[Validate('required')]
    public $type;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3a1259c1 (- updated dettaglio-paziente;)
>>>>>>> aurmich/dev
    public $isDoctor;

    public function mount()
    {
        $this->isDoctor = $this->type === 'doctor';
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 3a1259c1 (- updated dettaglio-paziente;)

    //public function mount(string $type)
    //{
    //    $this->type = $type;
    //}

    // Logica del componente se necessaria
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
};

?>

<x-layouts.app>
    @volt('register.type')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
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

   
<<<<<<< HEAD
=======
=======
    <div class="min-h-screen bg-white pb-5">
=======
    <div class="min-h-screen bg-[#E6EBF7] pb-5">
>>>>>>> 3ad9917a (- fix styles registration)
=======
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-12">
>>>>>>> 54f4fa16 (.)
=======
    <div class="min-h-screen bg-white pb-5">
>>>>>>> 1001715a (- continuo stile landing page e pagine paziente/dottore)
=======
    <div class="min-h-screen bg-[#E6EBF7] pb-5">
>>>>>>> 3ad9917a (- fix styles registration)
=======
    <div class="min-h-screen pb-5">
>>>>>>> 8da6447c (- updated style dettaglio-dottore (new calendar))
        <!-- Logo e intestazione -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <x-ui.logo class="h-12 text-blue-900" />
            </div>
            <h1 class="text-3xl text-blue-900">Registrazione {{ $isDoctor ? 'Odontoiatra' : 'Paziente' }}</h1>
            <p class="text-gray-600 mt-2">Crea il tuo account</p>
        </div>

        <!-- Card contenente il form di registrazione -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <div id="doctor-section" class="rounded-2xl overflow-hidden">
=======
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
>>>>>>> 54f4fa16 (.)
=======
        <div id="doctor-section" class="rounded-2xl shadow-xl overflow-hidden">
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
>>>>>>> 15cb84fb (fix collisions)
=======
        <div id="doctor-section" class="rounded-2xl shadow-xl overflow-hidden">
>>>>>>> d23ba493 (add calendar)
=======
        <div id="doctor-section" class="rounded-2xl overflow-hidden">
>>>>>>> 1001715a (- continuo stile landing page e pagine paziente/dottore)
            <!-- Form di registrazione -->
            @livewire(\Modules\User\Filament\Widgets\RegistrationWidget::class, ['type' => $type])
        </div>

        <!-- Footer con informazioni aggiuntive -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <!-- <div class="mt-8 text-center text-sm text-gray-500">
=======
        <div class="mt-8 text-center text-sm text-gray-500">
>>>>>>> 15cb84fb (fix collisions)
=======
        <!-- <div class="mt-8 text-center text-sm text-gray-500">
>>>>>>> d23ba493 (add calendar)
            <p>Hai bisogno di assistenza? <a href="#" class="text-blue-800 hover:underline">Contattaci</a></p>
        </div> -->
    </div>
    @endvolt
>>>>>>> aurmich/dev
=======
        <div class="mt-8 text-center text-sm text-gray-500">
=======
        <!-- <div class="mt-8 text-center text-sm text-gray-500">
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
            <p>Hai bisogno di assistenza? <a href="#" class="text-blue-800 hover:underline">Contattaci</a></p>
        </div> -->
    </div>
    @endvolt
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
</x-layouts.app>
