<x-filament-panels::page class="fi-dashboard-page">
<<<<<<< HEAD
<<<<<<< HEAD
=======
    {{--
>>>>>>> aurmich/dev
=======
    {{--
>>>>>>> 54f4fa16 (.)
    @if (method_exists($this, 'filtersForm'))
        {{ $this->filtersForm }}
    @endif

<<<<<<< HEAD
<<<<<<< HEAD
    <x-filament-widgets::widgets 
        :columns="$this->getColumns()" 
        :data="[...property_exists($this, 'filters') ? ['filters' => $this->filters] : [], ...$this->getWidgetData()]" 
        :widgets="$this->getVisibleWidgets()" 
    />
=======
    <x-filament-widgets::widgets :columns="$this->getColumns()" :data="[...property_exists($this, 'filters') ? ['filters' => $this->filters] : [], ...$this->getWidgetData()]" :widgets="$this->getVisibleWidgets()" />
        --}}
>>>>>>> aurmich/dev
=======
    <x-filament-widgets::widgets :columns="$this->getColumns()" :data="[...property_exists($this, 'filters') ? ['filters' => $this->filters] : [], ...$this->getWidgetData()]" :widgets="$this->getVisibleWidgets()" />
        --}}
>>>>>>> 54f4fa16 (.)
</x-filament-panels::page>
