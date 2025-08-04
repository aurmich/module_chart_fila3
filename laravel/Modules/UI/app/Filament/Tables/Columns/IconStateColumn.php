<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
use Illuminate\Support\Arr;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
>>>>>>> 345f8677 (phpstan)
use Webmozart\Assert\Assert;
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
use Filament\Tables\Actions\Action;
<<<<<<< HEAD
=======
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
=======
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
>>>>>>> 1be5d4cb (✨ (state-transitions): add comprehensive documentation for state transitions)
=======
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
>>>>>>> d23ba493 (add calendar)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\ModelStates\HasStatesContract;
=======
use Filament\Tables\Actions\Action;
>>>>>>> aurmich/dev
=======
use Spatie\ModelStates\HasStatesContract;
>>>>>>> 345f8677 (phpstan)
=======
use Modules\SaluteOra\States\User\UserState;
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
use Filament\Tables\Actions\Action;
>>>>>>> 1be5d4cb (✨ (state-transitions): add comprehensive documentation for state transitions)
=======
use Modules\SaluteOra\States\User\UserState;
use Filament\Tables\Actions\Action;
>>>>>>> d23ba493 (add calendar)

class IconStateColumn extends IconColumn
{

    protected function setUp(): void
    {
        parent::setUp();
        //$this->getStateUsing(fn() => true); // the column requires a state to be passed to it
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->icon(fn($state): ?string => $state?->icon());
        $this->color(fn($state): ?string => $state?->color());
        $this->tooltip(fn($state): ?string => $state?->label());
=======
        $this->icon(fn($state): string => $state->icon());
        $this->color(fn($state): string => $state->color());
        $this->tooltip(fn($state): string => $state->label());
>>>>>>> aurmich/dev
=======
        $this->icon(fn($state): string => $state->icon()); // always show the 'edit' icon
        $this->color(fn($state): string => $state->color()); // always show the 'edit' icon
=======
        $this->icon(fn($state): string => $state->icon());
        $this->color(fn($state): string => $state->color());
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
        $this->tooltip(fn($state): string => $state->label());
>>>>>>> 1be5d4cb (✨ (state-transitions): add comprehensive documentation for state transitions)
=======
        $this->icon(fn($state): string => $state->icon()); // always show the 'edit' icon
        $this->color(fn($state): string => $state->color()); // always show the 'edit' icon
        $this->tooltip(fn($state): string => $state->label());
>>>>>>> d23ba493 (add calendar)
        //$this->label('aaa');

        $this->action(Action::make('change-state')
            ->form([
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Select::make('state')
                    ->options(
<<<<<<< HEAD
<<<<<<< HEAD
                        function (Model&HasStatesContract $record ,string $state): array {
=======
                        function (Model $record ,string $state): array {
>>>>>>> aurmich/dev
=======
                        function (Model&HasStatesContract $record ,string $state): array {
>>>>>>> 345f8677 (phpstan)

                            $name=$this->getName();
                            $state=$record->getAttribute($name);
                            if($state==null){
                                $states=Arr::wrap($record->getDefaultStateFor($name));
                                return array_combine($states, $states);
                            }
<<<<<<< HEAD
<<<<<<< HEAD
                            Assert::isInstanceOf($state, State::class);
                            
=======
>>>>>>> aurmich/dev
=======
                            Assert::isInstanceOf($state, State::class);
>>>>>>> 345f8677 (phpstan)
                            try{
                                //$states=$record->getAttribute($name)->transitionableStates();
                                $states=$state->transitionableStates();
                            }catch(Exception $e){
                                $states=$record->getStatesFor($name)->toArray();;
                            }
<<<<<<< HEAD
<<<<<<< HEAD
                            /** @phpstan-ignore-next-line */
                            //$states=[$state::$name, ...$states];
                            //$states=array_combine($states, $states);
                            $states=Arr::mapWithKeys($states,function($state) use ($record){
                                $model=Str::of(class_basename($record))->slug()->toString();
                                /** @phpstan-ignore binaryOp.invalid */
                                Assert::string($label=__('pub_theme::'.$model.'_states.'.$state.'.label'));
                                return [$state=>$label];
                            });
                            
=======
=======
                            /** @phpstan-ignore-next-line */
>>>>>>> 345f8677 (phpstan)
                            $states=[$state::$name, ...$states];
                            $states=array_combine($states, $states);
>>>>>>> aurmich/dev
                            //dddx(['state'=>$state, 'state1'=>$record->getAttribute($name),'record'=>$record]);

                            return $states;
                        }
<<<<<<< HEAD
                    )
                    ->required(),
=======
                    ),
>>>>>>> aurmich/dev
                Textarea::make('message'),
            ])
            ->fillForm(function($record){
                //dddx($record->state);//Modules\SaluteOra\States\User\Pending
                return [
                    'state' => $record->state::$name,
                ];
            })
=======
=======
>>>>>>> d23ba493 (add calendar)
                Select::make('state')->options(function (Model $record ,$state): array {
                    $name=$this->getName();
                    $state=$record->getAttribute($name);
                    if($state==null){
                        $states=Arr::wrap($record->getDefaultStateFor($name));
                        return array_combine($states, $states);
                    }
                    try{
                        //$states=$record->getAttribute($name)->transitionableStates();
                        $states=$state->transitionableStates();
                    }catch(Exception $e){
                        $states=$record->getStatesFor($name)->toArray();;
                    }
                    $states=[$state::$name, ...$states];
                    $states=array_combine($states, $states);
                    //dddx(['state'=>$state, 'state1'=>$record->getAttribute($name),'record'=>$record]);
=======
                Select::make('state')
                    ->options(
                        function (Model $record ,string $state): array {
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)

                            $name=$this->getName();
                            $state=$record->getAttribute($name);
                            if($state==null){
                                $states=Arr::wrap($record->getDefaultStateFor($name));
                                return array_combine($states, $states);
                            }
                            try{
                                //$states=$record->getAttribute($name)->transitionableStates();
                                $states=$state->transitionableStates();
                            }catch(Exception $e){
                                $states=$record->getStatesFor($name)->toArray();;
                            }
                            $states=[$state::$name, ...$states];
                            $states=array_combine($states, $states);
                            //dddx(['state'=>$state, 'state1'=>$record->getAttribute($name),'record'=>$record]);

                            return $states;
                        }
                    ),
                Textarea::make('message'),
            ])
<<<<<<< HEAD
            ->fillForm(fn($record) => [
                'state' => $record->state::$name,

            ])
<<<<<<< HEAD
>>>>>>> 1be5d4cb (✨ (state-transitions): add comprehensive documentation for state transitions)
=======
>>>>>>> d23ba493 (add calendar)
=======
            ->fillForm(function($record){
                //dddx($record->state);//Modules\SaluteOra\States\User\Pending
                return [
                    'state' => $record->state::$name,
                ];
            })
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
            ->action(function($record, $data) {
                //dddx(['record'=>$record, 'data'=>$data]);
                $record->state->transitionTo($data['state'],$data['message']);

            })
        );


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
>>>>>>> 1be5d4cb (✨ (state-transitions): add comprehensive documentation for state transitions)
=======
}
>>>>>>> d23ba493 (add calendar)
