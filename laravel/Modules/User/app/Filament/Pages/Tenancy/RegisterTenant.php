<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages\Tenancy;

<<<<<<< HEAD
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Modules\User\Contracts\TenantContract;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Pages\Tenancy\RegisterTenant as BaseRegisterTenant;

class RegisterTenant extends BaseRegisterTenant
{
    use TransTrait;

    public string $resource;

    public static function getLabel(): string
    {
        $tenantClass = XotData::make()->getTenantClass();
        $func=Str::of(__FUNCTION__)->snake()->toString();
        if(Str::startsWith($func,'get_')){
            $func=Str::of($func)->after('get_')->toString();
        }
        $key=Str::of(class_basename(__CLASS__))->snake()->prepend('actions.')->append('.'.$func)->toString();
        $str= static::transClass($tenantClass,$key);

        return $str;
    }



    public function form(Form $form): Form
    {
        $tenantClass = XotData::make()->getTenantClass();
        $resource=Str::of($tenantClass)
            ->replace('\Models\\','\Filament\Resources\\')
            ->append('Resource')
            ->toString();
        $this->resource=$resource;
        return $form
            ->schema($this->getFormSchema());
    }

    public function getFormSchema(): array
    {
        return $this->resource::getFormSchema();
    }
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant as BaseRegisterTenant;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Contracts\TenantContract;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;

class RegisterTenant extends BaseRegisterTenant
{
    public static function getLabel(): string
    {
        return __('user::tenancy.navigation.register');
    }

    public function getFormSchema(): array
{
    
        
    return [
              
                    TextInput::make('name')
                        ->required()
                        ->translateLabel(),
                    TextInput::make('phone')
                        ->required()
                        ->tel()
                        ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                        ->translateLabel(),
                    TextInput::make('email')
                        ->required()
                        ->email()
                        ->translateLabel(),
                
      ];
}
>>>>>>> 54f4fa16 (.)

    /**
     * @param  array<string, mixed>  $data
     */
    protected function handleRegistration(array $data): Model
    {
        $tenantClass = XotData::make()->getTenantClass();

        $tenant = $tenantClass::create($data);
        Assert::implementsInterface($tenant, TenantContract::class);

<<<<<<< HEAD
        $tenant->users()
            ->attach(auth()->user());
=======
        $tenant->users()->attach(auth()->user());
        // $tenant->members()->attach(auth()->user());
>>>>>>> 54f4fa16 (.)

        return $tenant;
    }
}
