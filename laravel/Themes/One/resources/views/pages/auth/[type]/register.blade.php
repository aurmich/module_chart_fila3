<?php
<<<<<<< HEAD
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
=======
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)

declare(strict_types=1);

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
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
=======
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
};

?>

<x-layouts.main>
    @volt('register.type')
<<<<<<< HEAD
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
=======
    <div id="wave-container" class="flex flex-col items-stretch justify-center w-full min-h-screen py-10 sm:items-center relative overflow-hidden">
        <!-- Reactive subtle background waves -->
        <svg id="wave-svg" class="absolute inset-0 w-full h-full opacity-10 pointer-events-none" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#A5B4FC" fill-opacity="0.1" d="M0,224L60,213.3C120,203,240,181,360,176C480,171,600,181,720,181.3C840,181,960,171,1080,160C1200,149,1320,139,1380,133.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>

        <!-- Logo -->
        <div class="flex justify-center">
            <img class="w-[300px] lg:w-[350px]" src="/img/logo-v2.png"/>
        </div>

        <div class="mt-8 mx-auto w-full max-w-4xl relative">
            <!-- Glassmorphism registration card -->
            <div class="relative bg-white m-6 z-10 backdrop-blur-md rounded-2xl p-8 shadow-lg ring-1 ring-white/20">
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
                <div class="mx-auto w-full">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <a href="{{ route('home') }}" class="inline-block mb-4">
                            <x-filament::icon name="heroicon-o-home" class="w-auto h-10 mx-auto text-primary-600" />
                        </a>
                        
                        <h2 class="text-3xl font-extrabold leading-9 text-[#272C4D]">
<<<<<<< HEAD
<<<<<<< HEAD
                             {{  __('pub_theme::auth.register.'.$type.'.title') }}
                        </h2>
                        
                        <p class="mt-2 text-lg text-gray-600">
                            {{ __('pub_theme::auth.register.'.$type.'.subtitle') }}
=======
                            {{ $isDoctor ? __('pub_theme::auth.register.doctor.title') : __('pub_theme::auth.register.patient.title') }}
                        </h2>
                        
                        <p class="mt-2 text-lg text-gray-600">
                            {{ $isDoctor ? __('pub_theme::auth.register.doctor.subtitle') : __('pub_theme::auth.register.patient.subtitle') }}
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
=======
                             {{  __('pub_theme::auth.register.'.$type.'.title') }}
                        </h2>
                        
                        <p class="mt-2 text-lg text-gray-600">
                            {{ __('pub_theme::auth.register.'.$type.'.subtitle') }}
>>>>>>> 96f87894 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                        @try
                            @livewire(\Modules\User\Filament\Widgets\RegistrationWidget::class, ['type' => $type])
                        @catch(Exception $e)
                            <div class="p-6 bg-red-50 border border-red-200 rounded-lg">
                                <div class="flex items-center">
                                    <x-filament::icon name="heroicon-o-exclamation-triangle" class="w-5 h-5 text-red-500 mr-2" />
                                    <h3 class="text-lg font-medium text-red-800">
                                        {{ __('pub_theme::auth.register.errors.loading_failed') }}
                                    </h3>
                                </div>
                                <p class="mt-2 text-sm text-red-700">
                                    {{ __('pub_theme::auth.register.errors.please_refresh') }}
                                </p>
                                <div class="mt-4">
                                    <button onclick="window.location.reload()" 
                                            class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors">
                                        {{ __('pub_theme::auth.register.actions.refresh') }}
                                    </button>
                                </div>
                            </div>
                        @endtry
=======
                        @livewire(\Modules\User\Filament\Widgets\RegistrationWidget::class, ['type' => $type])
>>>>>>> 96f87894 (.)
                    </div>

                    
                    
                    

                    
                </div>
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
            </div>
        </div>
<<<<<<< HEAD

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
=======
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

        // Handle registration form submissions with loading states
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function() {
                    const submitButtons = form.querySelectorAll('button[type="submit"]');
                    submitButtons.forEach(button => {
                        button.disabled = true;
                        button.innerHTML = '<span class="inline-flex items-center"><svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>' + '{{ __("pub_theme::auth.register.actions.processing") }}</span>';
                    });
                });
            }
        });
    </script>
</x-layouts.main>
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
