<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListMailTemplates extends LangBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

<<<<<<< HEAD
    
    public function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('slug')
                ->searchable()
                ->sortable()
                ,
=======
    public function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->label(__('notify::mail.template.fields.name.label')),
>>>>>>> 54f4fa16 (.)

            Tables\Columns\TextColumn::make('mailable')
                ->searchable()
                ->sortable()
<<<<<<< HEAD
                ,
=======
                ->label(__('notify::mail.template.fields.mailable.label')),
>>>>>>> 54f4fa16 (.)

            Tables\Columns\TextColumn::make('subject')
                ->searchable()
                ->sortable()
<<<<<<< HEAD
                ,

            Tables\Columns\TextColumn::make('counter')
                ->searchable()
                ->sortable()
                ,
            
        ];
    }


=======
                ->label(__('notify::mail.template.fields.subject.label')),

            Tables\Columns\TextColumn::make('layout')
                ->searchable()
                ->sortable()
                ->label(__('notify::mail.template.fields.layout.label')),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    
>>>>>>> 54f4fa16 (.)
}
