<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
{{--
    View minimale per il widget FindDoctorAndAppointmentWidget.
    Policy: solo wrapper per $this->form, nessun markup custom, nessuna logica Livewire/AlpineJS, nessun CSRF manuale.
    Vedi docs/widgets/find-doctor-appointment-widget.md e docs/rules/filament_best_practices.md
--}}
<div class="find-doctor-widget">
    <form wire:submit.prevent="submit">
        @csrf
<<<<<<< HEAD
        {{ $this->form }}
    </form>
</div>
=======
<<<<<<< HEAD
        {{ $this->form }}
    </form>
</div>
=======
<div class="p-4 bg-white rounded-lg shadow">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-medium text-gray-900">
            {{ __('find_doctor_widget.title') }}
        </h3>
        <div class="flex items-center">
            <x-heroicon-o-user-plus class="w-5 h-5 text-primary-500" />
        </div>
    </div>

    <div class="space-y-4">
        {{ $this->form }}
    </div>
</div>
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
        {{ $this->form }}
    </form>
</div>
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
