<x-filament-panels::page class="fi-dashboard-page">
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    {{--
>>>>>>> aurmich/dev
=======
    {{--
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
    @if (method_exists($this, 'filtersForm'))
        {{ $this->filtersForm }}
    @endif

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    <x-filament-widgets::widgets 
        :columns="$this->getColumns()" 
        :data="[...property_exists($this, 'filters') ? ['filters' => $this->filters] : [], ...$this->getWidgetData()]" 
        :widgets="$this->getVisibleWidgets()" 
    />
<<<<<<< HEAD
=======
=======
    <x-filament-widgets::widgets :columns="$this->getColumns()" :data="[...property_exists($this, 'filters') ? ['filters' => $this->filters] : [], ...$this->getWidgetData()]" :widgets="$this->getVisibleWidgets()" />
        --}}
>>>>>>> aurmich/dev
=======
    <x-filament-widgets::widgets :columns="$this->getColumns()" :data="[...property_exists($this, 'filters') ? ['filters' => $this->filters] : [], ...$this->getWidgetData()]" :widgets="$this->getVisibleWidgets()" />
        --}}
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
</x-filament-panels::page>
