<?php

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\DatePicker;
=======
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
use Filament\Pages\Dashboard as FilamentDashboard;

abstract class XotBaseDashboard extends FilamentDashboard
{
<<<<<<< HEAD
    use FilamentDashboard\Concerns\HasFiltersForm;
    protected static ?int $navigationSort = 1;
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema($this->getFiltersFormSchema())
                    ->columns(3),
            ]);
    }


    public function getFiltersFormSchema():array{
        return [
           
        ];
    }
=======
    
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
}



