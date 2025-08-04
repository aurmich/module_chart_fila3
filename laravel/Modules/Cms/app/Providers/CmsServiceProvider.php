<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
/**
 * @see https://github.com/laravel/framework/discussions/49574
 */

>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev
declare(strict_types=1);

namespace Modules\Cms\Providers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Modules\Xot\Providers\XotBaseServiceProvider;

class CmsServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Cms';
    public XotData $xot;
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Laravel\Folio\Folio;
use Livewire\Volt\Volt;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\LivewireService;
use Nwidart\Modules\Facades\Module;
=======
use Illuminate\Support\Str;
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Modules\Xot\Providers\XotBaseServiceProvider;

class CmsServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Cms';
    public XotData $xot;
<<<<<<< HEAD

>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 72f588e8 (fileupload to spatiefileupload + final button wizard)
>>>>>>> aurmich/dev
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev
    public function boot(): void
    {
        parent::boot();

        $this->xot = XotData::make();

        if ($this->xot->register_pub_theme) {
            $this->registerNamespaces('pub_theme');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            //$this->registerThemeConfig('pub_theme');
            //$this->registerThemeLivewireComponents();
        }
        
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {

<<<<<<< HEAD
=======
=======
            $this->registerThemeConfig('pub_theme');
            $this->registerThemeLivewireComponents();
        }

        Assert::string($timezone = config('app.timezone') ?? 'Europe/Berlin');
        date_default_timezone_set($timezone);

        // Verifica che la lingua predefinita sia supportata
        $defaultLocale = Config::string('app.locale');
        $supportedLocales = Config::array('laravellocalization.supportedLocales');
        if (!isset($supportedLocales[$defaultLocale])) {
            throw new \Exception(sprintf(
                'La lingua predefinita "%s" non è supportata. Lingue supportate: %s',
                $defaultLocale,
                implode(', ', array_keys($supportedLocales))
            ));
=======
            //$this->registerThemeConfig('pub_theme');
            //$this->registerThemeLivewireComponents();
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
        }
        
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev
        parent::register();

        $this->xot = XotData::make();

        // Verifica che la configurazione di LaravelLocalization sia caricata
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev
        // NOTA: La configurazione è già gestita dal modulo Lang
        // if (!config()->has('laravellocalization.supportedLocales')) {
        //     $this->mergeConfigFrom(__DIR__.'/../config/laravellocalization.php', 'laravellocalization');
        // }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (!config()->has('laravellocalization.supportedLocales')) {
            $this->mergeConfigFrom(__DIR__.'/../config/laravellocalization.php', 'laravellocalization');
        }
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev

        if ($this->xot->register_pub_theme) {
            Assert::isArray($paths = config('view.paths'));
            $theme_path = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path('Themes/'.$this->xot->pub_theme.'/resources/views'));
            $paths = array_merge([$theme_path], $paths);
            Config::set('view.paths', $paths);
            Config::set('livewire.view_path', $theme_path.'/livewire');
            Config::set('livewire.class_namespace', 'Themes\\'.$this->xot->pub_theme.'\Http\Livewire');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            //$this->registerFolio();
        }

        
    }


<<<<<<< HEAD
=======
=======
            $this->registerFolio();
=======
            //$this->registerFolio();
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
        }

        
    }


<<<<<<< HEAD
        //$base_middleware[]=\Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class;
        $base_middleware[]=\Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class;
        $base_middleware[]=\Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class;
        //$base_middleware[]=\Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class;
        //$base_middleware[]=\Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class;

        $theme_path = XotData::make()->getPubThemeViewPath('pages');
        /*
        // Ottieni la lingua corrente in modo sicuro
        $currentLocale = app()->getLocale();
        $supportedLocales = config('laravellocalization.supportedLocales', []);
        if (!isset($supportedLocales[$currentLocale])) {
            $currentLocale = array_key_first($supportedLocales) ?? 'it';
            app()->setLocale($currentLocale);
        }
        */
        //$currentLocale = LaravelLocalization::setLocale() ?? app()->getLocale();

        Folio::path($theme_path)
            ->uri( LaravelLocalization::setLocale() ?? app()->getLocale())
            ->middleware([
                '*' => $base_middleware,
            ]);

        /**
         * @var Collection<Module>
         */
        $modules = Module::collections();
        $paths = [];
        $paths[] = $theme_path;
        foreach ($modules as $module) {
            $path = $module->getPath().'/resources/views/pages';
            if (! File::exists($path)) {
                continue;
            }
            $paths[] = $path;
            Folio::path($path)
                ->uri( LaravelLocalization::setLocale() ?? app()->getLocale())
                ->middleware([
                    '*' => $base_middleware
                ]);
        }

        Volt::mount($paths);
    }

    /**
     * Undocumented function.
     */
    public function registerThemeLivewireComponents(): void
    {
        // $prefix=$this->module_name.'::';
        $prefix = '';
        /*
        LivewireService::registerComponents(
            base_path('Themes/'.$this->xot->pub_theme.'/Http/Livewire'),
            'Themes\\'.$this->xot->pub_theme,
            $prefix,
        );
        */
        app(RegisterLivewireComponentsAction::class)
            ->execute(
                base_path('Themes/'.$this->xot->pub_theme.'/app/Http/Livewire'),
                'Themes\\'.$this->xot->pub_theme,
                $prefix,
            );
    }

    /**
     * Undocumented function.
     */
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev
    public function registerNamespaces(string $theme_type): void
    {
        $xot = $this->xot;

        Assert::string($theme = $xot->{$theme_type});
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $theme_path='Themes/'.$theme;
        $resource_path = $theme_path.'/resources';
        $lang_dir = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path($theme_path.'/lang'));

        $theme_dir = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path($resource_path.'/views'));
        
        app('view')->addNamespace($theme_type, $theme_dir);
        $this->loadTranslationsFrom($lang_dir, $theme_type);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev

        $componentViewPath = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path($resource_path.'/views/components'));
        
        Blade::anonymousComponentPath($componentViewPath);
<<<<<<< HEAD
=======
=======

        $resource_path = 'Themes/'.$theme.'/resources';
        $lang_dir = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path($resource_path.'/lang'));
=======
        $theme_path='Themes/'.$theme;
        $resource_path = $theme_path.'/resources';
        $lang_dir = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path($theme_path.'/lang'));
>>>>>>> 72f588e8 (fileupload to spatiefileupload + final button wizard)

        $theme_dir = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path($resource_path.'/views'));
        
        app('view')->addNamespace($theme_type, $theme_dir);
        $this->loadTranslationsFrom($lang_dir, $theme_type);
    }

    public function registerThemeConfig(string $theme_type): void
    {
        $xot = $this->xot;

        Assert::string($theme = $xot->{$theme_type});

        $config_path = base_path('Themes/'.$theme.'/Config');
        if (! File::exists($config_path)) {
            return;
        }

        $files = File::files($config_path);
        foreach ($files as $file) {
            $name = $file->getFilenameWithoutExtension();
            $real_path = $file->getRealPath();
            if (false === $real_path) {
                throw new \Exception('['.__LINE__.']['.class_basename(self::class).']');
            }

            $data = File::getRequire($real_path);
            Config::set($theme_type.'::'.$name, $data);
        }

        // ---------------------
>>>>>>> 54f4fa16 (.)
=======

        $componentViewPath = app(\Modules\Xot\Actions\File\FixPathAction::class)->execute(base_path($resource_path.'/views/components'));
        
        Blade::anonymousComponentPath($componentViewPath);
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
>>>>>>> aurmich/dev
    }
}
