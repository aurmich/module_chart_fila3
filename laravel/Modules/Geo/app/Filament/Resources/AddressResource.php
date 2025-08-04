<?php

declare(strict_types=1);

namespace Modules\Geo\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists;
use Filament\Tables\Table;
use Modules\Geo\Models\Comune;
<<<<<<< HEAD
use Modules\Geo\Models\Region;
use Modules\Geo\Models\Address;
use Filament\Infolists\Infolist;
use Modules\Geo\Models\Locality;
use Modules\Geo\Models\Province;
=======
use Modules\Geo\Models\Address;
use Filament\Infolists\Infolist;
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
use Filament\Forms\Components\Select;
use Modules\Geo\Enums\AddressTypeEnum;
use Illuminate\Database\Eloquent\Builder;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Geo\Filament\Resources\AddressResource\Pages;

/**
 * Resource per la gestione degli indirizzi.
 *
 * Questa classe gestisce l'interfaccia amministrativa per gli indirizzi,
 * fornendo funzionalità per la creazione, modifica e visualizzazione
 * degli indirizzi su mappa.
 */
class AddressResource extends XotBaseResource
{
    protected static ?string $model = Address::class;

<<<<<<< HEAD
    protected static ?string $navigationGroup = "Geo";
=======
    protected static ?string $navigationGroup = 'Geo';
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)

    protected static ?int $navigationSort = 3;

    /**
     * @return array<string, \Filament\Forms\Components\Component>
     *  'administrative_area_level_3', // Provincia
     *  'administrative_area_level_2', // Regione
     *  'administrative_area_level_1', // Stato/Paese
     */
    public static function getFormSchema(): array
    {
<<<<<<< HEAD

        


        return [
            "name" => Forms\Components\TextInput::make("name")->maxLength(255),
            
                "country" => Forms\Components\TextInput::make("country") //Nazione
                    ->maxLength(255)
                    ->default("Italia")
                    ->visible(false)
                    ->columnSpan(2),
                
                "administrative_area_level_1" => Select::make('administrative_area_level_1')
                    
                    ->options(fn(Get $get)=>Region::getOptions($get))
                    ->searchable()
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (Set $set) {
                        $set("administrative_area_level_2", null);
                        $set("locality", null);
                        $set("postal_code", null);
                        $set("cap", null);
                    }),
                
                
                'administrative_area_level_2' => Select::make('administrative_area_level_2')
                    ->options(fn(Get $get)=>Province::getOptions($get))
                    ->searchable()
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (Set $set){
                        $set('cap', null);
                        $set('postal_code', null);
                        $set('locality', null);
                    })
                    ->disabled(fn (Get $get) => !$get('administrative_area_level_1') )
                ,
               

                'locality' => Select::make('locality')
                    ->options(fn(Get $get)=>Locality::getOptions($get))
                    ->searchable()
                    ->required()
                    ->live()
                    ->disabled(fn (Get $get) => !$get('administrative_area_level_1') || !$get('administrative_area_level_2'))
                    ->afterStateUpdated(function (Set $set){
                        $set('postal_code', null);
                    }),

                'postal_code' => Select::make('postal_code')
                    ->options(fn(Get $get)=>Locality::getPostalCodeOptions($get))
                    ->searchable()
                    ->required()
                    ->live()
                    ->disabled(fn (Get $get) => !$get('administrative_area_level_1') || !$get('administrative_area_level_2')),

            

            
                "route" => Forms\Components\TextInput::make("route")
                    ->required()
                    ->maxLength(255)
                    ,

                "street_number" => Forms\Components\TextInput::make("street_number")
                    ->maxLength(20)
                    ,
            
            
            
            "is_primary" => Forms\Components\Toggle::make(
                "is_primary"
            )->default(false),
            
        ];
    }

    protected function getSearchStep(): array
    {
        return [
            "region" => Select::make("region")
                ->options(function () {
                   
                    return Region::orderBy('name')->get()->pluck("name", "id");
                })
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(function (Set $set) {
                    $set("province", null);
                    $set("cap", null);
                }),
            "province" => Select::make("province")
                ->options(function (Get $get) {
                    $region = $get("region");
                    if (!$region) {
                        return [];
                    }
                   
                    $res=Province::where('region_id',$region)
                    ->orderBy('name')
                    ->get()
                    ->pluck("name", "id")
                    ->toArray();
                    return $res;
=======
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->maxLength(255),
            /*
            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(1000)
                ->columnSpanFull(),
            */  
            Forms\Components\Grid::make(4)
                ->schema([
                    'country' => Forms\Components\TextInput::make('country')//Nazione
                        ->maxLength(255)
                        ->default('Italia')
                        ->visible(false)
                        ->columnSpan(2),
                    /*    
                    'administrative_area_level_1' => Forms\Components\TextInput::make('administrative_area_level_1')//Regione
                        ->maxLength(255)
                        ->columnSpan(2),
                    */
                    'administrative_area_level_1'=>Select::make('administrative_area_level_1')
                ->options(function () {
                    return Comune::select('regione')
                    ->distinct()
                    ->orderBy('regione->nome')
                    ->get()
                    ->pluck('regione.nome','regione.codice')
                    
                    ->toArray();
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                })
                ->searchable()
                ->required()
                ->live()
<<<<<<< HEAD
                ->afterStateUpdated(fn(Set $set) => $set("cap", null)),
            "cap" => Select::make("cap")
                ->options(function (Get $get) {
                    $region = $get("region");
                    if (!$region) {
                        return [];
                    }
                    $province = $get("province");
                    if (!$province) {
                        return [];
                    }
                    
                    $res=Locality::query()
                        ->where('region_id', $region)
                        ->where('province_id', $province)
                        //->when($city, fn($query) => $query->where('id', $city))
                        ->select('postal_code')
                        ->distinct()
                        ->orderBy('postal_code')
                        ->get()
                        ->pluck('postal_code', 'postal_code')
=======
                ->afterStateUpdated(function (Set $set){
                    $set('administrative_area_level_2', null);
                    $set('cap', null);
                })
                ,

                'administrative_area_level_2' => Select::make('administrative_area_level_2')
                ->options(function (Get $get) {
                    $region = $get('administrative_area_level_1');
                    if (!$region) {
                        return [];
                    }
                    $res= Comune::query()
                        ->where('regione->codice', $region)
                        ->select('provincia')
                        ->distinct()
                        ->orderBy('provincia->nome')
                        ->get()
                        ->pluck('provincia.nome', 'provincia.codice')
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                        ->toArray();
                    return $res;
                })
                ->searchable()
                ->required()
                ->live()
<<<<<<< HEAD
                ->disabled(
                    fn(Get $get) => !$get("region") || !$get("province")
                ),
=======
                ->afterStateUpdated(fn (Set $set) => $set('cap', null))
                ->disabled(fn (Get $get) => !$get('administrative_area_level_1') )
                ,
                /*
                    'administrative_area_level_2' => Forms\Components\TextInput::make('administrative_area_level_2')//Provincia
                        ->maxLength(255)
                        ->columnSpan(2),
                        */

                    /*
                    'administrative_area_level_3' => Forms\Components\TextInput::make('administrative_area_level_3')//Comune
                        ->maxLength(255)
                        ->columnSpan(2),
                    */
                    /*
                    'locality' => Forms\Components\TextInput::make('locality')
                        ->required()
                        ->maxLength(255)
                        ->columnSpan(2),
                    */
                    
                    'locality' => Select::make('locality')
                    ->options(function (Get $get) {
                        $region = $get('administrative_area_level_1');
                        if (!$region) {
                            return [];
                        }
                        $province = $get('administrative_area_level_2');
                        if (!$province) {
                            return [];
                        }
                        
                        $res=Comune::query()
                            ->where('regione->codice', $region)
                            ->where('provincia->codice', $province)
                            ->select('nome','codice')
                            ->distinct()
                            ->orderBy('nome')
                            ->get()
                            ->pluck('nome', 'codice')
                            ->toArray();
                        
                        return $res;
                    })
                    ->searchable()
                    ->required()
                    ->live()
                    ->disabled(fn (Get $get) => !$get('administrative_area_level_1') || !$get('administrative_area_level_2')),
                    
                    /*
                    'postal_code' => Forms\Components\TextInput::make('postal_code')
                        ->maxLength(20)
                        ->columnSpan(1),
                    */
                    'postal_code' => Select::make('postal_code')
                    ->options(function (Get $get) {
                        $region = $get('administrative_area_level_1');
                        if (!$region) {
                            return [];
                        }
                        $province = $get('administrative_area_level_2');
                        if (!$province) {
                            return [];
                        }
                        $city = $get('locality');
                        
                        $res=Comune::query()
                            ->where('regione->codice', $region)
                            ->where('provincia->codice', $province)
                            ->when($city, fn($query) => $query->where('codice', $city))
                            ->select('cap')
                            ->distinct()
                            ->orderBy('cap')
                            ->get()
                            ->pluck('cap.0', 'cap.0')
                            ->toArray();
                        
                        return $res;
                    })
                    ->searchable()
                    ->required()
                    ->live()
                    ->disabled(fn (Get $get) => !$get('administrative_area_level_1') || !$get('administrative_area_level_2')),
                    
                ]),
            
            Forms\Components\Grid::make(3)
                ->schema([
                    'route' => Forms\Components\TextInput::make('route')
                        ->required()
                        ->maxLength(255)
                        ->columnSpan(2),
                    
                    'street_number' => Forms\Components\TextInput::make('street_number')
                        ->maxLength(20)
                        ->columnSpan(1),
                ]),
                
            
                
                
            
            /*    
            'type' => Forms\Components\Select::make('type')
                ->enum(AddressTypeEnum::class)
                ->options([
                    AddressTypeEnum::BILLING->value => 'Fatturazione',
                    AddressTypeEnum::SHIPPING->value => 'Spedizione',
                    AddressTypeEnum::HOME->value => 'Casa',
                    AddressTypeEnum::WORK->value => 'Lavoro',
                    AddressTypeEnum::OTHER->value => 'Altro',
                ]),
            */    
            'is_primary' => Forms\Components\Toggle::make('is_primary')
                ->default(false),
            /*    
            'latitude' => Forms\Components\TextInput::make('latitude')
                ->numeric()
                ->required(),
                
            'longitude' => Forms\Components\TextInput::make('longitude')
                ->numeric()
                ->required(),
            'formatted_address' => Forms\Components\TextInput::make('formatted_address')
                ->maxLength(1024)
                ->columnSpanFull(),
                
            'coordinates_note' => Forms\Components\Placeholder::make('map_note')
                ->label('Nota sulla mappa')
                ->content('Per visualizzare la mappa è necessario configurare una chiave API Google Maps valida.')
                ->columnSpanFull(),
            */
        ];
    }


    protected function getSearchStep(): array
    {
        
        return [
            'region' => Select::make('region')
                ->options(function () {
                    return Comune::select('regione')
                    ->distinct()
                    ->orderBy('regione->nome')
                    ->get()
                    ->pluck('regione.nome','regione.codice')
                    
                    ->toArray();
                })
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(function (Set $set){
                    $set('province', null);
                    $set('cap', null);
                })
                ,
            'province' => Select::make('province')
                ->options(function (Get $get) {
                    $region = $get('region');
                    if (!$region) {
                        return [];
                    }
                    $res= Comune::query()
                        ->where('regione->codice', $region)
                        ->select('provincia')
                        ->distinct()
                        ->orderBy('provincia->nome')
                        ->get()
                        ->pluck('provincia.nome', 'provincia.codice')
                        ->toArray();
                    return $res;
                })
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn (Set $set) => $set('cap', null))
                ,

            'cap' => Select::make('cap')
                ->options(function (Get $get) {
                    $region = $get('region');
                    if (!$region) {
                        return [];
                    }
                    $province = $get('province');
                    if (!$province) {
                        return [];
                    }
                    $res=Comune::query()
                        ->where('regione->codice', $region)
                        ->where('provincia->codice', $province)
                        ->select('cap')
                        ->distinct()
                        ->orderBy('cap')
                        ->get()
                        ->pluck('cap.0', 'cap.0')
                        ->toArray();
                    
                    return $res;
                })
                ->searchable()
                ->required()
                ->live()
                ->disabled(fn (Get $get) => !$get('region') || !$get('province')),
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public static function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
            "name" => Tables\Columns\TextColumn::make("name")->searchable(),

            "full_address" => Tables\Columns\TextColumn::make(
                "full_address"
            )->searchable(),

            "type" => Tables\Columns\TextColumn::make("type")
                ->badge()
                ->formatStateUsing(
                    fn(string $state): string => match ($state) {
                        AddressTypeEnum::BILLING->value => "Fatturazione",
                        AddressTypeEnum::SHIPPING->value => "Spedizione",
                        AddressTypeEnum::HOME->value => "Casa",
                        AddressTypeEnum::WORK->value => "Lavoro",
                        AddressTypeEnum::OTHER->value => "Altro",
                        default => $state,
                    }
                )
                ->colors([
                    "primary" => fn(string $state): bool => $state ===
                        AddressTypeEnum::BILLING->value,
                    "success" => fn(string $state): bool => $state ===
                        AddressTypeEnum::SHIPPING->value,
                    "info" => fn(string $state): bool => $state ===
                        AddressTypeEnum::HOME->value,
                    "warning" => fn(string $state): bool => $state ===
                        AddressTypeEnum::WORK->value,
                    "gray" => fn(string $state): bool => $state ===
                        AddressTypeEnum::OTHER->value,
                ]),

            "locality" => Tables\Columns\TextColumn::make(
                "locality"
            )->searchable(),

            "is_primary" => Tables\Columns\IconColumn::make(
                "is_primary"
            )->boolean(),

            "model_type" => Tables\Columns\TextColumn::make("model_type")
                ->formatStateUsing(
                    fn(?string $state): ?string => $state
                        ? class_basename($state)
                        : null
                )
                ->toggleable(isToggledHiddenByDefault: true),

            "model_id" => Tables\Columns\TextColumn::make(
                "model_id"
            )->toggleable(isToggledHiddenByDefault: true),

            "created_at" => Tables\Columns\TextColumn::make("created_at")
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            "updated_at" => Tables\Columns\TextColumn::make("updated_at")
=======
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable(),
                
            'full_address' => Tables\Columns\TextColumn::make('full_address')
                ->searchable(),
                
            'type' => Tables\Columns\TextColumn::make('type')
                ->badge()
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    AddressTypeEnum::BILLING->value => 'Fatturazione',
                    AddressTypeEnum::SHIPPING->value => 'Spedizione',
                    AddressTypeEnum::HOME->value => 'Casa',
                    AddressTypeEnum::WORK->value => 'Lavoro',
                    AddressTypeEnum::OTHER->value => 'Altro',
                    default => $state,
                })
                ->colors([
                    'primary' => fn (string $state): bool => $state === AddressTypeEnum::BILLING->value,
                    'success' => fn (string $state): bool => $state === AddressTypeEnum::SHIPPING->value,
                    'info' => fn (string $state): bool => $state === AddressTypeEnum::HOME->value,
                    'warning' => fn (string $state): bool => $state === AddressTypeEnum::WORK->value,
                    'gray' => fn (string $state): bool => $state === AddressTypeEnum::OTHER->value,
                ]),
                
            'locality' => Tables\Columns\TextColumn::make('locality')
                ->searchable(),
                
            'is_primary' => Tables\Columns\IconColumn::make('is_primary')
                ->boolean(),
                
            'model_type' => Tables\Columns\TextColumn::make('model_type')
                ->formatStateUsing(fn (?string $state): ?string => $state ? class_basename($state) : null)
                ->toggleable(isToggledHiddenByDefault: true),
                
            'model_id' => Tables\Columns\TextColumn::make('model_id')
                ->toggleable(isToggledHiddenByDefault: true),
                
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
                
            'updated_at' => Tables\Columns\TextColumn::make('updated_at')
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public static function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
            "type" => Tables\Filters\SelectFilter::make("type")->options([
                AddressTypeEnum::BILLING->value => "Fatturazione",
                AddressTypeEnum::SHIPPING->value => "Spedizione",
                AddressTypeEnum::HOME->value => "Casa",
                AddressTypeEnum::WORK->value => "Lavoro",
                AddressTypeEnum::OTHER->value => "Altro",
            ]),

            "is_primary" => Tables\Filters\TernaryFilter::make("is_primary"),

            "locality" => Tables\Filters\SelectFilter::make(
                "locality"
            )->options(
                fn(): array => Address::query()
                    ->select("locality")
                    ->distinct()
                    ->pluck("locality", "locality")
                    ->toArray()
            ),

            "administrative_area_level_3" => Tables\Filters\SelectFilter::make(
                "administrative_area_level_3"
            )
                ->options(
                    fn(): array => Address::query()
                        ->select("administrative_area_level_3")
                        ->whereNotNull("administrative_area_level_3")
                        ->distinct()
                        ->pluck(
                            "administrative_area_level_3",
                            "administrative_area_level_3"
                        )
                        ->toArray()
                )
                ->label("Provincia"),

            "administrative_area_level_2" => Tables\Filters\SelectFilter::make(
                "administrative_area_level_2"
            )
                ->options(
                    fn(): array => Address::query()
                        ->select("administrative_area_level_2")
                        ->whereNotNull("administrative_area_level_2")
                        ->distinct()
                        ->pluck(
                            "administrative_area_level_2",
                            "administrative_area_level_2"
                        )
                        ->toArray()
                )
                ->label("Regione"),
=======
            'type' => Tables\Filters\SelectFilter::make('type')
                ->options([
                    AddressTypeEnum::BILLING->value => 'Fatturazione',
                    AddressTypeEnum::SHIPPING->value => 'Spedizione',
                    AddressTypeEnum::HOME->value => 'Casa',
                    AddressTypeEnum::WORK->value => 'Lavoro',
                    AddressTypeEnum::OTHER->value => 'Altro',
                ]),
                
            'is_primary' => Tables\Filters\TernaryFilter::make('is_primary'),
                
            'locality' => Tables\Filters\SelectFilter::make('locality')
                ->options(fn (): array => Address::query()
                    ->select('locality')
                    ->distinct()
                    ->pluck('locality', 'locality')
                    ->toArray()
                ),
                
            'administrative_area_level_3' => Tables\Filters\SelectFilter::make('administrative_area_level_3')
                ->options(fn (): array => Address::query()
                    ->select('administrative_area_level_3')
                    ->whereNotNull('administrative_area_level_3')
                    ->distinct()
                    ->pluck('administrative_area_level_3', 'administrative_area_level_3')
                    ->toArray()
                )
                ->label('Provincia'),
                
            'administrative_area_level_2' => Tables\Filters\SelectFilter::make('administrative_area_level_2')
                ->options(fn (): array => Address::query()
                    ->select('administrative_area_level_2')
                    ->whereNotNull('administrative_area_level_2')
                    ->distinct()
                    ->pluck('administrative_area_level_2', 'administrative_area_level_2')
                    ->toArray()
                )
                ->label('Regione'),
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public static function getTableActions(): array
    {
        return [
<<<<<<< HEAD
            "edit" => Tables\Actions\EditAction::make(),

            "view" => Tables\Actions\ViewAction::make(),

            "delete" => Tables\Actions\DeleteAction::make(),

            "setPrimary" => Tables\Actions\Action::make("setPrimary")
                ->visible(fn(Address $record): bool => !$record->is_primary)
                ->icon("heroicon-o-star")
                ->color("warning")
=======
            'edit' => Tables\Actions\EditAction::make(),
                
            'view' => Tables\Actions\ViewAction::make(),
                
            'delete' => Tables\Actions\DeleteAction::make(),
                
            'setPrimary' => Tables\Actions\Action::make('setPrimary')
                ->visible(fn (Address $record): bool => !$record->is_primary)
                ->icon('heroicon-o-star')
                ->color('warning')
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                ->requiresConfirmation()
                ->action(function (Address $record): void {
                    // Rimuove l'attributo primario da tutti gli altri indirizzi con lo stesso model_type e model_id
                    Address::query()
<<<<<<< HEAD
                        ->where("model_type", $record->model_type)
                        ->where("model_id", $record->model_id)
                        ->where("id", "!=", $record->id)
                        ->update(["is_primary" => false]);

                    // Imposta questo indirizzo come primario
                    $record->update(["is_primary" => true]);
=======
                        ->where('model_type', $record->model_type)
                        ->where('model_id', $record->model_id)
                        ->where('id', '!=', $record->id)
                        ->update(['is_primary' => false]);
                    
                    // Imposta questo indirizzo come primario
                    $record->update(['is_primary' => true]);
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                }),
        ];
    }

<<<<<<< HEAD
   
   
}
=======
    /**
     * @return array<string, mixed>
     */
    public static function getTableBulkActions(): array
    {
        return [
            'delete' => Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(array_values(static::getTableColumns()))
            ->filters(array_values(static::getTableFilters()))
            ->actions(array_values(static::getTableActions()))
            ->bulkActions(array_values(static::getTableBulkActions()));
    }

    /**
     * @return array<\Filament\Infolists\Components\IconEntry>
     */
    public static function getInfolistSchema(): array
    {
        return [
            Infolists\Components\Section::make('address.sections.metadata.label')
                ->description('address.sections.metadata.description')
                ->schema([
                    Infolists\Components\TextEntry::make('name'),
                    Infolists\Components\TextEntry::make('description'),
                    Infolists\Components\TextEntry::make('type')
                        ->badge()
                        ->formatStateUsing(fn (string $state): string => match ($state) {
                            AddressTypeEnum::BILLING->value => 'Fatturazione',
                            AddressTypeEnum::SHIPPING->value => 'Spedizione',
                            AddressTypeEnum::HOME->value => 'Casa',
                            AddressTypeEnum::WORK->value => 'Lavoro',
                            AddressTypeEnum::OTHER->value => 'Altro',
                            default => $state,
                        })
                        ->colors([
                            'primary' => fn (string $state): bool => $state === AddressTypeEnum::BILLING->value,
                            'success' => fn (string $state): bool => $state === AddressTypeEnum::SHIPPING->value,
                            'info' => fn (string $state): bool => $state === AddressTypeEnum::HOME->value,
                            'warning' => fn (string $state): bool => $state === AddressTypeEnum::WORK->value,
                            'gray' => fn (string $state): bool => $state === AddressTypeEnum::OTHER->value,
                        ]),
                    Infolists\Components\TextEntry::make('is_primary')
                        ->badge()
                        ->color(fn (bool $state): string => $state ? 'success' : 'gray')
                        ->formatStateUsing(fn (bool $state): string => $state ? 'Principale' : 'Secondario'),
                ]),
                
            Infolists\Components\Section::make('address.sections.address.label')
                ->description('address.sections.address.description')
                ->schema([
                    Infolists\Components\TextEntry::make('full_address'),
                    Infolists\Components\Grid::make()
                        ->schema([
                            Infolists\Components\TextEntry::make('route')
                                ->label('address.fields.route.label'),
                            Infolists\Components\TextEntry::make('street_number')
                                ->label('address.fields.street_number.label'),
                        ]),
                    Infolists\Components\Grid::make()
                        ->schema([
                            Infolists\Components\TextEntry::make('locality')
                                ->label('address.fields.locality.label'),
                            Infolists\Components\TextEntry::make('postal_code')
                                ->label('address.fields.postal_code.label'),
                        ]),
                    Infolists\Components\Grid::make()
                        ->schema([
                            Infolists\Components\TextEntry::make('administrative_area_level_3')
                                ->label('address.fields.administrative_area_level_3.label'),
                            Infolists\Components\TextEntry::make('administrative_area_level_2')
                                ->label('address.fields.administrative_area_level_2.label'),
                        ]),
                    Infolists\Components\Grid::make()
                        ->schema([
                            Infolists\Components\TextEntry::make('administrative_area_level_1')
                                ->label('address.fields.administrative_area_level_1.label'),
                            Infolists\Components\TextEntry::make('country')
                                ->label('address.fields.country.label'),
                        ]),
                ]),
                
            Infolists\Components\Section::make('address.sections.location.label')
                ->description('address.sections.location.description')
                ->schema([
                    Infolists\Components\Grid::make()
                        ->schema([
                            Infolists\Components\TextEntry::make('latitude')
                                ->label('address.fields.latitude.label'),
                            Infolists\Components\TextEntry::make('longitude')
                                ->label('address.fields.longitude.label'),
                        ]),
                    Infolists\Components\TextEntry::make('place_id')
                        ->label('address.fields.place_id.label'),
                    Infolists\Components\TextEntry::make('formatted_address')
                        ->label('address.fields.formatted_address.label'),
                ]),
                
            Infolists\Components\Section::make('address.sections.map.label')
                ->description('address.sections.map.description')
                ->schema([
                    Infolists\Components\TextEntry::make('map_notice')
                        ->label('Nota sulla mappa')
                        ->formatStateUsing(fn (Address $record): string => 
                            "Coordinate: {$record->latitude}, {$record->longitude}\n\n" . 
                            "Per visualizzare la mappa è necessario configurare una chiave API Google Maps valida.")
                        ->columnSpanFull(),
                ]),
        ];
    }
}
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
