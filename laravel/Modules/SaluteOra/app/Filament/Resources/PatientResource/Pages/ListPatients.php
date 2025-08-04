<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\PatientResource\Pages;

<<<<<<< HEAD
use Carbon\Carbon;
use Filament\Tables;
use Illuminate\Support\Arr;
use Modules\SaluteOra\Models\Patient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Modules\SaluteOra\States\User\UserState;
use Modules\Xot\Filament\Widgets\StateOverviewWidget;
use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\Media\Filament\Tables\Columns\IconMediaColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\ListUsers;

class ListPatients extends ListUsers
=======
use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListPatients extends XotBaseListRecords
>>>>>>> 54f4fa16 (.)
{
    protected static string $resource = PatientResource::class;

    public function getTableColumns(): array
    {
<<<<<<< HEAD
        $columns = parent::getTableColumns();
        $columns = Arr::except($columns, ['type']);
        $columns['nationality'] = Tables\Columns\TextColumn::make('nationality');
        $columns['country_code'] = Tables\Columns\TextColumn::make('country_code');
        $columns['years_in_italy'] = Tables\Columns\TextColumn::make('years_in_italy');
        $columns['family_members'] = Tables\Columns\TextColumn::make('family_members');
        $columns['children_count'] = Tables\Columns\TextColumn::make('children_count');
        $attachments = Patient::getAttachments();

        foreach ($attachments as $attachment) {
            $columns[$attachment] = IconMediaColumn::make($attachment);
        }
        
        return $columns;
    }

    /**
     * @return array<class-string>
     */
    public function getHeaderWidgets(): array
    {
        return [
            StateOverviewWidget::class,
        ];
    }

=======
        return [
            'id' => \Filament\Tables\Columns\TextColumn::make('id')
                ->sortable(),
            'name' => \Filament\Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            'surname' => \Filament\Tables\Columns\TextColumn::make('surname')
                ->searchable()
                ->sortable(),
            'fiscal_code' => \Filament\Tables\Columns\TextColumn::make('fiscal_code')
                ->searchable(),
            'birth_date' => \Filament\Tables\Columns\TextColumn::make('birth_date')
                ->date()
                ->sortable(),
            'email' => \Filament\Tables\Columns\TextColumn::make('email')
                ->searchable(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone'),
            'created_at' => \Filament\Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => \Filament\Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
>>>>>>> 54f4fa16 (.)
}
