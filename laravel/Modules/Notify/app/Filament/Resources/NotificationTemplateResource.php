<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Enums\NotificationTypeEnum;
=======
>>>>>>> 54f4fa16 (.)
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
<<<<<<< HEAD
use Spatie\MediaLibrary\MediaCollections\Models\Media;
=======
>>>>>>> 54f4fa16 (.)

class NotificationTemplateResource extends XotBaseResource
{
    protected static ?string $model = NotificationTemplate::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> d23ba493 (add calendar)
    protected static ?string $navigationIcon = 'heroicon-o-bell';

    protected static ?string $navigationGroup = 'Sistema';

    protected static ?int $navigationSort = 48;

    public static function getNavigationLabel(): string
    {
        return __('notify::template.navigation.label');
    }

    public static function getNavigationGroup(): string
    {
        return __('notify::template.navigation.group');
    }

    public static function getModelLabel(): string
    {
        return __('notify::template.navigation.label');
    }
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)

=======
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->helperText(__('notify::template.form.name.helper'))
                        ->columnSpan(['lg' => 2]),

                    Forms\Components\TextInput::make('subject')
                        ->required()
                        ->maxLength(255)
                        ->helperText(__('notify::template.form.subject.helper'))
                        ->columnSpan(['lg' => 2])
                        ->translateLabel(),

                    Forms\Components\Select::make('type')
                        ->options(collect(NotificationTypeEnum::cases())->mapWithKeys(fn ($type) => [$type->value => $type->label()]))
                        ->required()
                        ->default(NotificationTypeEnum::EMAIL->value)
                        ->helperText(__('notify::template.form.type.helper'))
                        ->columnSpan(['lg' => 1]),
=======
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('subject')
                        ->required()
                        ->maxLength(255),
>>>>>>> 54f4fa16 (.)

                    Forms\Components\Textarea::make('body_text')
                        ->required()
                        ->maxLength(65535)
<<<<<<< HEAD
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.body_text.helper'))
                        ->rows(5)
                        ->translateLabel(),
=======
                        ->columnSpan(['lg' => 3]),
>>>>>>> 54f4fa16 (.)

                    Forms\Components\Textarea::make('body_html')
                        ->required()
                        ->maxLength(65535)
<<<<<<< HEAD
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.body_html.helper'))
                        ->rows(10)
                        ->translateLabel(),

                    Forms\Components\Textarea::make('preview_data')
                        ->json()
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.preview_data.helper'))
                        ->rows(5),

                    Forms\Components\SpatieMediaLibraryFileUpload::make('attachments')
                        ->collection('attachments')
                        ->multiple()
                        ->maxFiles(5)
                        ->maxSize(5120)
                        ->acceptedFileTypes(['application/pdf', 'image/*'])
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.attachments.helper')),
        ];
    }


=======
                        ->columnSpan(['lg' => 3]),

                    Forms\Components\Textarea::make('preview_data')
                        ->json()
                        ->columnSpan(['lg' => 3]),
                ])
                ->columns(['lg' => 3])
        ];
    }

    public static function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('subject'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
        ];
    }
>>>>>>> 54f4fa16 (.)

    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
            ...parent::getPages(),
            'preview' => Pages\PreviewNotificationTemplate::route('/{record}/preview'),
        ];
    }

    /*
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderBy('name');
    }
            */
}
=======
            'index' => Pages\ListNotificationTemplates::route('/'),
            'create' => Pages\CreateNotificationTemplate::route('/create'),
            'edit' => Pages\EditNotificationTemplate::route('/{record}/edit'),
        ];
    }
} 
>>>>>>> 54f4fa16 (.)
