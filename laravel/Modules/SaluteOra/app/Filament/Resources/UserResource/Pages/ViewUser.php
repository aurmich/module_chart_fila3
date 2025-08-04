<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\UserResource\Pages;

use Modules\User\Filament\Resources\UserResource\Pages\BaseViewUser as BaseUserViewPage;

/**
 * View user resource page.
 *
 * This class extends the base user view page to provide
 * SaluteOra-specific user viewing functionality.
 */
class ViewUser extends BaseUserViewPage
{
    // All functionality is inherited from BaseViewUser
    // This class exists to allow SaluteOra-specific customizations if needed
=======
namespace Modules\SaluteOra\Filament\Resources\UserResource\Pages;

use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Infolists;

class ViewUser extends XotBaseViewRecord
{
    protected static string $resource = UserResource::class;

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
                ->dateTime(),
        ];
    }
>>>>>>> 54f4fa16 (.)
}
