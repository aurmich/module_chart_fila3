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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\ModelStates\HasStatesContract;
=======
>>>>>>> aurmich/dev
=======
use Spatie\ModelStates\HasStatesContract;
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
use Modules\SaluteOra\States\User\UserState;

class SelectState extends Select
{

    protected function setUp(): void
    {
        parent::setUp();
      //  $this->selectablePlaceholder(false);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->options(function (Model&HasStatesContract $record): array {
=======
        $this->options(function (Model $record): array {
>>>>>>> aurmich/dev
=======
        $this->options(function (Model&HasStatesContract $record): array {
>>>>>>> 345f8677 (phpstan)
=======
        $this->options(function (Model $record): array {
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
        $this->options(function (Model $record): array {
>>>>>>> d23ba493 (add calendar)
            $name=$this->getName();
            
            // Verifica se il metodo esiste prima di chiamarlo
            if (!method_exists($record, 'getStatesFor')) {
                return [];
            }
            
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            /**
             * @var array<int|string>
             * @phpstan-ignore argument.type
             */
=======
>>>>>>> aurmich/dev
=======
            /**
             * @var array<int|string>
             * @phpstan-ignore-next-line
             */
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
            return array_combine($states, $states);
        });
       
    }

   
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> aurmich/dev
=======
}
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
}
>>>>>>> d23ba493 (add calendar)
