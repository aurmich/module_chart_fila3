<?php

declare(strict_types=1);

namespace Modules\Geo\Filament\Resources\AddressResource\Pages;

use Filament\Actions;
use Filament\Infolists\Infolist;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Modules\Geo\Filament\Resources\AddressResource;


class ViewAddress extends XotBaseViewRecord
{
    protected static string $resource = AddressResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    

    public function getInfolistSchema(): array
    {
        return [];
=======
    /**
     * @return array<\Filament\Actions\Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    public function getInfolistSchema(): array
    {
        return AddressResource::getInfolistSchema();
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    

    public function getInfolistSchema(): array
    {
        return [];
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
    }
}