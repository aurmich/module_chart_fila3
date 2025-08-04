<?php

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\DatePicker;
<<<<<<< HEAD
=======
=======
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
use Filament\Pages\Dashboard as FilamentDashboard;

abstract class XotBaseDashboard extends FilamentDashboard
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
=======
=======
    
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
}



