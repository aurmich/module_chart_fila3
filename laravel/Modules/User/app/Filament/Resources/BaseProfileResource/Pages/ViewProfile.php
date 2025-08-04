<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\BaseProfileResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Actions\EditAction;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
use Filament\Actions\EditAction;
>>>>>>> 15cb84fb (fix collisions)
use Filament\Infolists\Components;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Modules\User\Filament\Resources\BaseProfileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> 54f4fa16 (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 2bcfd382 (fix Address)

class ViewProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = BaseProfileResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)
    /*
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
    */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)

=======
   
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    /**
     * @return array<string, \Filament\Infolists\Components\Component>
     */
<<<<<<< HEAD
    public function getInfolistSchema(): array
=======
    public function getInfolistSchema(): array 
>>>>>>> 54f4fa16 (.)
=======
=======
=======
>>>>>>> 7ace243 (.)
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)

    /**
     * @return array<string, \Filament\Infolists\Components\Component>
     */
    public function getInfolistSchema(): array
>>>>>>> 2bcfd382 (fix Address)
    {
        return [
            'profile_info' => Components\Section::make()
                ->schema([
                    Components\Split::make([
                        Components\Grid::make(2)
                            ->schema([
                                Components\Group::make([
                                    TextEntry::make('email'),
                                    TextEntry::make('first_name'),
                                    TextEntry::make('last_name'),
                                    TextEntry::make('created_at')
                                        ->badge()
                                        ->date()
                                        ->color('success'),
                                ]),
                                /*
                                Components\Group::make([
                                    Components\TextEntry::make('author.name'),
                                    Components\TextEntry::make('category.name'),
                                    Components\TextEntry::make('tags')
                                        ->badge()
                                        ->getStateUsing(fn () => ['one', 'two', 'three', 'four']),
                                ]),
                                */
                            ]),
                        Components\ImageEntry::make('image')
                            ->hiddenLabel()
                            ->grow(false),
                    ])->from('lg'),
                ]),
            'content' => Components\Section::make('Content')
                ->schema([
                    TextEntry::make('content')
                        ->prose()
                        ->markdown()
                        ->hiddenLabel(),
                ])
                ->collapsible(),
        ];
    }
}
