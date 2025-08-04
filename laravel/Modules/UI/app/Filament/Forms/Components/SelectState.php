<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Exception;
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\SelectColumn;
<<<<<<< HEAD
use Spatie\ModelStates\HasStatesContract;
=======
>>>>>>> aurmich/dev
use Modules\SaluteOra\States\User\UserState;

class SelectState extends Select
{

    protected function setUp(): void
    {
        parent::setUp();
      //  $this->selectablePlaceholder(false);
<<<<<<< HEAD
        $this->options(function (Model&HasStatesContract $record): array {
=======
        $this->options(function (Model $record): array {
>>>>>>> aurmich/dev
            $name=$this->getName();
            $states=$record->getStatesFor($name)->toArray();
            /*
            dddx([
                'name'=>$name,
                'states'=>$states,
                'record'=>$record,
                'state'=>$record->state,
                'default_state'=>$record->getDefaultStates(),
                'default_states_for'=>$record->getDefaultStateFor($name),
                'record_method'=>get_class_methods($record),
                'userstate_method'=>get_class_methods(UserState::class),
                //'aa'=>$record->state->transitionableStates(),
                //'getStateConfigurations'=>$record->getStateConfigurations(),
            ]);
            */
<<<<<<< HEAD
            /**
             * @var array<int|string>
             * @phpstan-ignore argument.type
             */
=======
>>>>>>> aurmich/dev
            return array_combine($states, $states);
        });
       
    }

   
<<<<<<< HEAD
}
=======
}
>>>>>>> aurmich/dev
