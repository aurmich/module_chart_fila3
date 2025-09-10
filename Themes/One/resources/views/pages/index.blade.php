<?php
use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;

name('home');
middleware(['web']);

new class extends Component
{
    public function mount()
    {
        // Logica del componente Volt per la homepage
    }
};
?>

<x-layouts.marketing>
    <div>
        {!! $_theme->showPageContent('home') !!}
    </div>
</x-layouts.marketing>
