<x-filament-panels::page class="fi-dashboard-page">
<<<<<<< HEAD
=======
    {{--
>>>>>>> aurmich/dev
    @if (method_exists($this, 'filtersForm'))
        {{ $this->filtersForm }}
    @endif

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
</x-filament-panels::page>
