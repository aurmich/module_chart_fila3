<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;
=======
namespace Modules\SaluteOra\Filament\Resources\UserResource\Pages;
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)

use Modules\User\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Infolists;

<<<<<<< HEAD
/**
 * Base class for viewing user resources.
 * 
 * This class provides the base configuration for viewing user resources
 * across the application. It should be extended by specific user type
 * view classes rather than used directly.
 */
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
abstract class BaseViewUser extends XotBaseViewRecord
{
    protected static string $resource = UserResource::class;

<<<<<<< HEAD
    /**
     * Define the infolist schema for the view.
     *
     * @return array<string, mixed>
     */
    public function getInfolistSchema(): array
    {
        return [
            'name' => Infolists\Components\TextEntry::make('name')
                ->label(trans('user::resource.fields.name')),
                
            'email' => Infolists\Components\TextEntry::make('email')
                ->label(trans('user::resource.fields.email')),
                
            'type' => Infolists\Components\TextEntry::make('type')
                ->label(trans('user::resource.fields.type')),
                
            'state' => Infolists\Components\TextEntry::make('state')
                ->label(trans('user::resource.fields.state')),
                
            'created_at' => Infolists\Components\TextEntry::make('created_at')
                ->label(trans('user::resource.fields.created_at'))
                ->dateTime(),
                
            'updated_at' => Infolists\Components\TextEntry::make('updated_at')
                ->label(trans('user::resource.fields.updated_at'))
=======
    public function getInfolistSchema(): array
    {
        return [
            'name' => Infolists\Components\TextEntry::make('name'),
            'email' => Infolists\Components\TextEntry::make('email'),
            'type' => Infolists\Components\TextEntry::make('type'),
            'state' => Infolists\Components\TextEntry::make('state'),
            'created_at' => Infolists\Components\TextEntry::make('created_at')
                ->dateTime(),
            'updated_at' => Infolists\Components\TextEntry::make('updated_at')
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
                ->dateTime(),
        ];
    }
}
