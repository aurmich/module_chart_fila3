<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\SaluteOra\Models\Dentist;
use Modules\SaluteOra\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\SaluteOra\Filament\Resources\AppointmentResource\Pages;
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Models\Appointment;
=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
use Modules\SaluteOra\Models\Dentist;
use Modules\SaluteOra\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\SaluteOra\Filament\Resources\AppointmentResource\Pages;
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev

class AppointmentResource extends XotBaseResource
{
    protected static ?string $model = Appointment::class;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
    protected static ?string $tenantOwnershipRelationshipName = 'studio';
    //protected static ?string $tenantRelationshipName = 'studio';
    protected static bool $isScopedToTenant = true;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public static function getFormSchema(): array
    {
        return [
            Forms\Components\Select::make('patient_id')
                ->relationship('patient', 'full_name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\Select::make('doctor_id')
                ->relationship('doctor', 'full_name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\Select::make('studio_id')
                ->relationship('studio', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\TextInput::make('title')
                ->required(),

            Forms\Components\DateTimePicker::make('starts_at')
                ->required(),

            Forms\Components\DateTimePicker::make('ends_at')
                ->required()
                ->after('starts_at'),

            /*
            'treatment_id' => Forms\Components\Select::make('treatment', 'name')
                ->relationship('treatment', 'name')
                ->searchable()
                ->preload(),
*/
<<<<<<< HEAD
=======
=======
    
=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
    public static function getFormSchema(): array
    {
        return [


            'patient_id' => Forms\Components\Select::make('patient_id')
                ->relationship('patient', 'full_name')
                ->searchable()
                ->preload()
                ->createOptionForm(
                    fn (Forms\Get $get): array => PatientResource::getFormSchema()
                )
                ->required(),


            'doctor_id' => Forms\Components\Select::make('doctor_id')
                ->relationship('doctor', 'full_name')
                ->searchable()
                ->preload()
                ->createOptionForm(
                    fn (Forms\Get $get): array => DoctorResource::getFormSchema()
                )
                ->required(),

            'start_time' => Forms\Components\DateTimePicker::make('start_time')
                ->required(),

            'end_time' => Forms\Components\DateTimePicker::make('end_time')
                ->after('start_time'),
            /*
            'treatment_id' => Forms\Components\Select::make('treatment_id')
                ->relationship('treatment', 'name')
                ->searchable()
                ->preload(),
<<<<<<< HEAD
                
>>>>>>> 54f4fa16 (.)
=======
*/
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
            'status' => Forms\Components\Select::make('status')
                ->options([
                    'scheduled' => 'Programmato',
                    'confirmed' => 'Confermato',
                    'in_progress' => 'In Corso',
                    'completed' => 'Completato',
                    'cancelled' => 'Annullato',
                    'no_show' => 'Non Presentato',
                ])
                ->default('scheduled')
                ->required(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev

            'notes' => Forms\Components\Textarea::make('notes')
                ->maxLength(1000)
                ->columnSpanFull(),

<<<<<<< HEAD
=======
=======
                
            'notes' => Forms\Components\Textarea::make('notes')
                ->maxLength(1000)
                ->columnSpanFull(),
                
>>>>>>> 54f4fa16 (.)
=======

            'notes' => Forms\Components\Textarea::make('notes')
                ->maxLength(1000)
                ->columnSpanFull(),

>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
            'eligibility_confirmed' => Forms\Components\Toggle::make('eligibility_confirmed')
                ->default(false),
        ];
    }
<<<<<<< HEAD


=======
<<<<<<< HEAD
<<<<<<< HEAD


=======
    
    public static function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
                
            'patient.full_name' => Tables\Columns\TextColumn::make('patient.full_name')
                ->searchable()
                ->sortable(),
                
            'dentist.full_name' => Tables\Columns\TextColumn::make('dentist.full_name')
                ->searchable()
                ->sortable(),
                
            'start_time' => Tables\Columns\TextColumn::make('start_time')
                ->dateTime()
                ->sortable(),
                
            'treatment.name' => Tables\Columns\TextColumn::make('treatment.name')
                ->searchable(),
                
            'status' => Tables\Columns\SelectColumn::make('status')
                ->options([
                    'scheduled' => 'Programmato',
                    'confirmed' => 'Confermato',
                    'in_progress' => 'In Corso',
                    'completed' => 'Completato',
                    'cancelled' => 'Annullato',
                    'no_show' => 'Non Presentato',
                ])
                ->sortable(),
                
            'eligibility_confirmed' => Tables\Columns\IconColumn::make('eligibility_confirmed')
                ->boolean()
                ->sortable(),
                
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
    
    public static function getListTableFilters(): array
    {
        return [
            Tables\Filters\SelectFilter::make('status')
                ->options([
                    'scheduled' => 'Programmato',
                    'confirmed' => 'Confermato',
                    'in_progress' => 'In Corso',
                    'completed' => 'Completato',
                    'cancelled' => 'Annullato',
                    'no_show' => 'Non Presentato',
                ]),
                
            Tables\Filters\Filter::make('eligibility_confirmed')
                ->query(fn (Builder $query): Builder => $query->where('eligibility_confirmed', true))
                ->toggle(),
                
            Tables\Filters\Filter::make('today')
                ->query(fn (Builder $query): Builder => $query->whereDate('start_time', today()))
                ->toggle(),
                
            Tables\Filters\Filter::make('upcoming')
                ->query(fn (Builder $query): Builder => $query->whereDate('start_time', '>=', today()))
                ->toggle(),
                
            Tables\Filters\DateFilter::make('start_time'),
        ];
    }
>>>>>>> 54f4fa16 (.)
=======


>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
}
