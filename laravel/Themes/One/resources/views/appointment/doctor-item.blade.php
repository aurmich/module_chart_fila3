<!-- Appointment card -->
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="w-full flex flex-col justify-center items-center py-3 px-4">
=======
    <div class="w-full flex flex-col justify-center items-center py-9 px-4">
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
=======
    <div class="w-full flex flex-col justify-center items-center py-3 px-4">
>>>>>>> 0c7257a8 (- updated testi sale d'attesa)
        <div class="bg-[#D1DDEF] w-full lg:w-2/4 flex flex-row justify-between p-4 rounded-[15px]">
            
            <!-- Info -->
            <div class="flex flex-row items-center">
                <div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="text-lg">{{ $appointment->patient?->full_name }}</span>
                    <div>
                        <p class="text-xs">{{ $appointment->starts_at?->format('d/m/Y') }}</p>
                        <p class="text-xs">{{ $appointment->time_range }}</p>
=======
                    <span class="text-lg">{{ $appointment->patient->full_name }}</span>
=======
                    <span class="text-lg">{{ $appointment->patient?->full_name }}</span>
>>>>>>> dad4bfe5 (🐛 (doctor-item.blade.php): fix potential null reference by using nullsafe operator for patient full name retrieval)
=======
                    <span class="text-lg">{{ $appointment->patient?->full_name }}</span>
>>>>>>> 0c7257a8 (- updated testi sale d'attesa)
                    <div>
                        <p class="text-xs">{{ $appointment->starts_at?->format('d/m/Y') }}</p>
                        <p class="text-xs">{{ $appointment->time_range }}</p>
                        
                       
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
                    </div>
                </div>
            </div>

            <!-- Placeholder for layout (can be used for actions or icons later) -->
            <div class="flex flex-col-reverse items-center lg:flex-row"></div>

            <!-- Actions -->
            <div class="cursor-pointer flex flex-row items-center">
                {{ ($this->infoAction)(['appointment' => $appointment->id]) }}
<<<<<<< HEAD
                @foreach($this->all_states as $state=>$stateClass)
                @if($this->canTransitionTo($appointment->id,$stateClass))
                    @php
                        $action=Str::camel($state).'Action';
                    @endphp
                   {{-- ($this->$action)(['appointment' => $appointment->id]) --}} 
                   {{ ($this->transitionAction)(['appointment' => $appointment->id,'stateClass'=>$stateClass]) }}
                @endif
                @endforeach
                
                
=======
                @if ($this->confirmAction->isVisible())
                {{ ($this->confirmAction)(['appointment' => $appointment->id]) }}
                @endif
                @if ($this->rejectAction->isVisible())
                {{ ($this->rejectAction)(['appointment' => $appointment->id]) }}
                @endif
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
            </div>
        </div>
    </div>