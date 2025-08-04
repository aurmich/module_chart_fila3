<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

use Filament\Forms\Form;
<<<<<<< HEAD
use Filament\Resources\RelationManagers\RelationManager as FilamentRelationManager;
=======
use Filament\Resources\RelationManagers\RelationManager;
>>>>>>> 54f4fa16 (.)
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use Webmozart\Assert\Assert;

/**
 * @property class-string<Model> $resource
 */
<<<<<<< HEAD
abstract class XotBaseRelationManager extends FilamentRelationManager
=======
abstract class XotBaseRelationManager extends RelationManager
>>>>>>> 54f4fa16 (.)
{
    use HasXotTable;

    protected static string $relationship = '';

    /** @var class-string<XotBaseResource> */
    protected static string $resourceClass;

    public static function getModuleName(): string
    {
        $class = static::class;
        $arr = explode('\\', $class);
        $module_name = $arr[1];

        return $module_name;
    }

    final public function form(Form $form): Form
    {
        return $form->schema(
            $this->getFormSchema()
        );
    }

    public function getFormSchema(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->getResource()::getFormSchema();
    }
<<<<<<< HEAD
//*
=======
/*
>>>>>>> aurmich/dev
    public function getTableColumns(): array
    {
        $index=Arr::get($this->getResource()::getPages(),'index');
        if(!$index){
            //throw new \Exception('Index page not found');
            return [];
        }
<<<<<<< HEAD
        /** @phpstan-ignore method.nonObject */
        $index_page=$index->getPage();
        
        if(!method_exists($index_page,'getTableColumns')){
            //throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
        /** @phpstan-ignore argument.type */
        $res= app($index_page)->getTableColumns();

        return $res;
    }
//*/
=======
        if(!method_exists($index,'getTableColumns')){
            return [];
        }
        $res= $index->getTableColumns();

        return $res;
    }
*/
>>>>>>> aurmich/dev
=======
        return [];
=======
        return $this->getResource()::getFormSchema();
>>>>>>> 2bcfd382 (fix Address)
    }

>>>>>>> 54f4fa16 (.)
    public function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make(),
<<<<<<< HEAD
<<<<<<< HEAD
            //Tables\Actions\DeleteAction::make(),
            Tables\Actions\DetachAction::make(),
=======
            Tables\Actions\DeleteAction::make(),
>>>>>>> 54f4fa16 (.)
=======
            //Tables\Actions\DeleteAction::make(),
            Tables\Actions\DetachAction::make(),
>>>>>>> 2bcfd382 (fix Address)
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            //Tables\Actions\DeleteBulkAction::make(),
            Tables\Actions\DetachBulkAction::make(),
=======
            Tables\Actions\DeleteBulkAction::make(),
>>>>>>> 54f4fa16 (.)
=======
            //Tables\Actions\DeleteBulkAction::make(),
            Tables\Actions\DetachBulkAction::make(),
>>>>>>> 2bcfd382 (fix Address)
        ];
    }

    public function getTableHeaderActions(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return [
            Tables\Actions\AttachAction::make(),
        ];
=======
        return [];
>>>>>>> 54f4fa16 (.)
=======
        return [
            Tables\Actions\AttachAction::make(),
        ];
>>>>>>> 2bcfd382 (fix Address)
    }

    public function getTableFilters(): array
    {
        return [];
    }

    public function getResource(): string
    {
        $resource = static::$resourceClass;
        Assert::classExists($resource);
        Assert::isAOf($resource, XotBaseResource::class);

        return $resource;
    }

    public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    {
        return parent::getRelationship();
    }
}
