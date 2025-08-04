<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php



?>

<div>
    
    <!-- Back button -->
    <div class="w-full flex justify-start">
        {{-- DA AGGIORNARE URL --}}
        <a href="{{ route('home') }}">
            <div class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="size-9">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
            </div>
        </a>
    </div>

    <!-- Page title -->
    <div class="p-10">
        <div class="w-full flex justify-center">
            <h1 class="text-center">@lang('pub_theme::appointment.hero.completed_appointments.title')</h1>
        </div>
    </div>
    
      <div>
    @livewire(\Modules\SaluteOra\Filament\Widgets\DoctorAppointmentsWidget::class, ['doctor_id' => $user->id,
    'states' => ['completed','report_completed',
    'refund_pending','refund_accepted','refund_to_integrate','refund_completed',
    'pro_bono',]])
    </div>
    
=======
<div class="bg-[#E6EBF7]"> 
=======
<div class="bg-[#E6EBF7]">
 <div>   
>>>>>>> f7d3ce4f (- update landing-page;)
=======
<div class="bg-[#E6EBF7]"> 
>>>>>>> 0e655426 (- aggiunti modal di delete e di dettaglio nelle pagine degli appuntamenti;)
=======
<div> 
<<<<<<< HEAD
>>>>>>> 8da6447c (- updated style dettaglio-dottore (new calendar))
     <div class="w-full flex justify-start p-6">
=======
     <div class="w-full flex justify-start">
>>>>>>> 8d28bdca (- updated style area dottore)
         {{-- DA AGGIORNARE URL --}}
         <a href="/it">
             <div class="cursor-pointer">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                   </svg>
             </div>
         </a>
     </div>
     
     
     <div class="p-10">
         <div class="w-full flex justify-center">
             <h1 class="text-center">Appuntamenti Conclusi</h1>
         </div>
     </div>
    
     
     
     <div class="w-full flex flex-col justify-center items-center my-9 px-6">
<<<<<<< HEAD
<<<<<<< HEAD
     <div class="bg-[#DDE5EB] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 rounded-[15px]">
=======
     <div class="bg-[#C6E6CE] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 rounded-[15px]">
>>>>>>> f7d3ce4f (- update landing-page;)
=======
     <div class="bg-[#DDE5EB] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 rounded-[15px]">
>>>>>>> 0e655426 (- aggiunti modal di delete e di dettaglio nelle pagine degli appuntamenti;)
             <div>
                 <span class="text-[#3E783E] text-lg">Mara Rossi</span>
                 <div>
                 <p class="text-[#3E783E] text-xs">19 Giugno 2025</p>
                 <p class="text-[#3E783E] text-xs">10:00 - 11:00</p>
                 </div>
             </div>
             <div class="cursor-pointer flex flex-row items-center">
            <div class="flex flex-row items-center">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
                <div x-data="{ showInfo: false }" class="relative">
                    <div @click="showInfo = true" class="mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="#3E783E" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>

                    <!-- Modal info -->
                    <div x-show="showInfo" x-cloak class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
                        <div class="bg-white p-6 rounded-xl max-w-md w-3/4 lg:w-full">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4">Dettagli Appuntamento</h2>
                            <div class="text-sm text-gray-700 space-y-2">
                                <p><strong>Nome:</strong> Mara Rossi</p>
                                <p><strong>Data:</strong> 19 Giugno 2025</p>
                                <p><strong>Orario:</strong> 10:00 - 11:00</p>
                                <p><strong>Cellulare:</strong> +39 999999999</p>
                                <p><strong>Email:</strong> mararossi@email.com</p>
                                <p><strong>Problemi dentali:</strong> Caria su 38</p>
                            </div>
                            <div class="mt-6 flex justify-end">
                                <button @click="showInfo = false" class="px-4 py-2 bg-[#FF5F7E] text-white rounded-md">
                                    Chiudi
                                </button>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
=======
                <div class="flex flex-col-reverse items-center lg:flex-row">
                    <p class="text-[#3E783E] text-sm pr-1">Apri dettaglio</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
=======
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
                </div>
            </div>
             </div>
    </div>
<<<<<<< HEAD
    <div class="bg-[#C6E6CE] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 mt-5 rounded-[15px]">
             <div>
                 <span class="text-[#3E783E] text-lg">Mara Rossi</span>
                 <div>
                 <p class="text-[#3E783E] text-xs">19 Giugno 2025</p>
                 <p class="text-[#3E783E] text-xs">10:00 - 11:00</p>
                 </div>
             </div>
             <div class="cursor-pointer flex flex-row items-center">
            <div class="flex flex-col-reverse items-center lg:flex-row">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="flex flex-col-reverse items-center lg:flex-row">
                    <p class="text-[#3E783E] text-sm pr-1">Apri dettaglio</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
             </div>
    </div>
    <div class="bg-[#C6E6CE] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 mt-5 rounded-[15px]">
             <div>
                 <span class="text-[#3E783E] text-lg">Mara Rossi</span>
                 <div>
                 <p class="text-[#3E783E] text-xs">19 Giugno 2025</p>
                 <p class="text-[#3E783E] text-xs">10:00 - 11:00</p>
                 </div>
             </div>
             <div class="cursor-pointer flex flex-row items-center">
            <div class="flex flex-col-reverse items-center lg:flex-row">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="flex flex-col-reverse items-center lg:flex-row">
                    <p class="text-[#3E783E] text-sm pr-1">Apri dettaglio</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
             </div>
    </div>
    <div class="bg-[#C6E6CE] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 mt-5 rounded-[15px]">
             <div>
                 <span class="text-[#3E783E] text-lg">Mara Rossi</span>
                 <div>
                 <p class="text-[#3E783E] text-xs">19 Giugno 2025</p>
                 <p class="text-[#3E783E] text-xs">10:00 - 11:00</p>
                 </div>
             </div>
             <div class="cursor-pointer flex flex-row items-center">
            <div class="flex flex-col-reverse items-center lg:flex-row">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="flex flex-col-reverse items-center lg:flex-row">
                    <p class="text-[#3E783E] text-sm pr-1">Apri dettaglio</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
             </div>
    </div>
    <div class="bg-[#C6E6CE] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 mt-5 rounded-[15px]">
             <div>
                 <span class="text-[#3E783E] text-lg">Mara Rossi</span>
                 <div>
                 <p class="text-[#3E783E] text-xs">19 Giugno 2025</p>
                 <p class="text-[#3E783E] text-xs">10:00 - 11:00</p>
                 </div>
             </div>
             <div class="cursor-pointer flex flex-row items-center">
            <div class="flex flex-col-reverse items-center lg:flex-row">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="flex flex-col-reverse items-center lg:flex-row">
                    <p class="text-[#3E783E] text-sm pr-1">Apri dettaglio</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
             </div>
    </div>
    <div class="bg-[#C6E6CE] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 mt-5 rounded-[15px]">
             <div>
                 <span class="text-[#3E783E] text-lg">Mara Rossi</span>
                 <div>
                 <p class="text-[#3E783E] text-xs">19 Giugno 2025</p>
                 <p class="text-[#3E783E] text-xs">10:00 - 11:00</p>
                 </div>
             </div>
             <div class="cursor-pointer flex flex-row items-center">
            <div class="flex flex-col-reverse items-center lg:flex-row">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="flex flex-col-reverse items-center lg:flex-row">
                    <p class="text-[#3E783E] text-sm pr-1">Apri dettaglio</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
             </div>
    </div>
    <div class="bg-[#C6E6CE] w-full lg:w-2/4 flex flex-row items-center justify-between p-5 mt-5 rounded-[15px]">
             <div>
                 <span class="text-[#3E783E] text-lg">Mara Rossi</span>
                 <div>
                 <p class="text-[#3E783E] text-xs">19 Giugno 2025</p>
                 <p class="text-[#3E783E] text-xs">10:00 - 11:00</p>
                 </div>
             </div>
             <div class="cursor-pointer flex flex-row items-center">
            <div class="flex flex-col-reverse items-center lg:flex-row">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="flex flex-col-reverse items-center lg:flex-row">
                    <p class="text-[#3E783E] text-sm pr-1">Apri dettaglio</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3E783E" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
>>>>>>> f7d3ce4f (- update landing-page;)
                </div>
=======
<?php
use Livewire\Volt\Component;

$user=auth()->user();
?>

<div>
    
    <!-- Back button -->
    <div class="w-full flex justify-start">
        {{-- DA AGGIORNARE URL --}}
        <a href="{{ route('home') }}">
            <div class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="size-9">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
            </div>
        </a>
    </div>

<<<<<<< HEAD
     </div>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
    <!-- Page title -->
    <div class="p-10">
        <div class="w-full flex justify-center">
            <h1 class="text-center">@lang('pub_theme::appointment.hero.completed_appointments.title')</h1>
        </div>
    </div>
    
      <div>
    @livewire(\Modules\SaluteOra\Filament\Widgets\DoctorAppointmentsWidget::class, ['doctor_id' => $user->id,'state' => 'completed'])
    </div>
    
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
</div>
=======
</div>
>>>>>>> f7d3ce4f (- update landing-page;)
=======

     </div>
>>>>>>> 0e655426 (- aggiunti modal di delete e di dettaglio nelle pagine degli appuntamenti;)
=======
</div>
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
