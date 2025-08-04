<?php
namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
// TEMPORARILY DISABLED FOR PHPSTAN ANALYSIS
// Missing dependency: saade/filament-fullcalendar
// Uncomment when dependency is installed

/*
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use App\Filament\Resources\EventResource;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DateTimePicker;

class UserCalendarWidget extends FullCalendarWidget
{
    use \Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;
    public string $type;

    
    public function getActionName(string $function): string
    {
        $action_suffix=Str::of($function)->studly()->append('Action')->toString();
        $resource=XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $action=\Illuminate\Support\Str::of($model)
            ->replace('\Models\\', '\Actions\\')
            ->append('\Calendar\\'.$action_suffix)
            ->toString();
        return $action;
    }
    
    public function fetchEvents(array $fetchInfo): array
    {
        $action=$this->getActionName(__FUNCTION__);
        return app($action)->execute($fetchInfo);
    }

    public function getFormSchema(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $action = $this->getActionName(__FUNCTION__);
        
        if (class_exists($action)) {
            return app($action)->execute();
        }
        
        // Fallback schema
<<<<<<< HEAD
=======
=======

        $action=$this->getActionName(__FUNCTION__);
        return app($action)->execute();
        
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
        return [
            TextInput::make('title'),
 
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
   
    /*
    protected function modalActions(): array
    {
        return [
            \Saade\FilamentFullCalendar\Actions\EditAction::make(),
            \Saade\FilamentFullCalendar\Actions\DeleteAction::make(),
        ];
    }
    */

    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
        // TODO: Implementare la logica per la selezione della data
        // dd('test');
    }

    
<<<<<<< HEAD
}
=======
}
=======
    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
      dd('test');
    }
}
*/
>>>>>>> aurmich/dev
=======
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
=======
=======
// TEMPORARILY DISABLED FOR PHPSTAN ANALYSIS
// Missing dependency: saade/filament-fullcalendar
// Uncomment when dependency is installed
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)

/*
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
>>>>>>> ca5e1eaf (.)
=======

use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
>>>>>>> d23ba493 (add calendar)
use App\Filament\Resources\EventResource;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DateTimePicker;

class UserCalendarWidget extends FullCalendarWidget
{
    use \Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;
    public string $type;

    
    public function getActionName(string $function): string
    {
        $action_suffix=Str::of($function)->studly()->append('Action')->toString();
        $resource=XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $action=\Illuminate\Support\Str::of($model)
            ->replace('\Models\\', '\Actions\\')
            ->append('\Calendar\\'.$action_suffix)
            ->toString();
        return $action;
    }
    
    public function fetchEvents(array $fetchInfo): array
    {
        $action=$this->getActionName(__FUNCTION__);
        return app($action)->execute($fetchInfo);
    }

    public function getFormSchema(): array
    {

        $action=$this->getActionName(__FUNCTION__);
        return app($action)->execute();
        
        return [
            TextInput::make('title'),
 
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

<<<<<<< HEAD
   
    /*
    protected function modalActions(): array
    {
        return [
            \Saade\FilamentFullCalendar\Actions\EditAction::make(),
            \Saade\FilamentFullCalendar\Actions\DeleteAction::make(),
        ];
    }
    */
<<<<<<< HEAD
<<<<<<< HEAD
}
>>>>>>> 2099645a (.)
=======
=======
>>>>>>> d23ba493 (add calendar)

=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
      dd('test');
    }
<<<<<<< HEAD

    
<<<<<<< HEAD
}
>>>>>>> ca5e1eaf (.)
=======
}
>>>>>>> d23ba493 (add calendar)
=======
}
*/
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
