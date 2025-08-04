<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources;
use Filament\Actions;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
=======
use Illuminate\Support\Facades\Config;
>>>>>>> 8e4d163b (phpstan)
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Filament\Resources\Concerns\Translatable;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 8e4d163b (phpstan)

abstract class LangBaseResource extends XotBaseResource
{
    use Translatable;


    public static function getDefaultTranslatableLocale(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return Config::string('app.locale', 'it');
=======
        return config('app.locale', 'it');
>>>>>>> 54f4fa16 (.)
=======
        return Config::string('app.locale', 'it');
>>>>>>> 8e4d163b (phpstan)
    }

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }



}
