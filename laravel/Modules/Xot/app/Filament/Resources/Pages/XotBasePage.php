<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Component;
use Filament\Pages\Page as FilamentPage;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
use Filament\Forms\Components\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page as FilamentPage;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Filament\Pages\Concerns\InteractsWithFormActions;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
/**
 * Base class for all custom pages in the application.
 *
 * This class provides common functionality for custom pages,
 * following the architectural pattern of never extending Filament classes directly.
 *
 * @property ?string $model
 * @property ?array $data
<<<<<<< HEAD
 * @property ComponentContainer $form
*/
=======
 */
>>>>>>> aurmich/dev
=======
=======
>>>>>>> d23ba493 (add calendar)
/**
 * Base class for all custom pages in the application.
 *
 * This class provides common functionality for custom pages,
 * following the architectural pattern of never extending Filament classes directly.
 *
 * @property ?string $model
 * @property ?array $data
 */
<<<<<<< HEAD
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use InteractsWithForms;
    use NavigationLabelTrait;
    use TransTrait;
    use InteractsWithFormActions;

    /**
     * The model class associated with this page, if any.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static ?string $model = null;
=======
    protected static ?string $model = null;
>>>>>>> aurmich/dev
=======
    protected static ?string $model = null;
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    protected static ?string $model = null;
>>>>>>> d23ba493 (add calendar)

    /**
     * The form data.
     *
     * @var array<string, mixed>
     */
    public ?array $data = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
    /**
     * Default icon for navigation.
     */
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
    /**
     * Get the view that should be used for the page.
     */
    public function getView(): string
    {
        if (isset(static::$view)) {
            return static::$view;
        }

        $view = Str::of(static::class)
            ->after('Modules\\')
            ->before('\\Filament\\')
            ->lower()
            ->append('::filament.pages.')
            ->append(Str::of(static::class)
                ->afterLast('\\')
                ->kebab()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->toString()
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
            );

        return $view->toString();
    }

    /**
     * Get navigation label with automatic translation.
     */
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    /**
     * Get page title with automatic translation.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTitle(): string
    {
<<<<<<< HEAD
        return static::transFunc(__FUNCTION__);
=======
        return static::transTitle();
>>>>>>> aurmich/dev
=======
    public function getTitle(): string 
=======
    public function getTitle(): string
>>>>>>> a33c954b (fix: formattazione XotBasePage.php)
    {
        return static::transTitle();
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    public function getTitle(): string
    {
        return static::transTitle();
>>>>>>> d23ba493 (add calendar)
    }

    /**
     * Get the heading with automatic translation.
     */
    public function getHeading(): string
    {
        return $this->getTitle();
    }

    /**
     * Configure the form.
     */
    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }

    /**
     * Get the form schema for the page.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
     * @return array<string, Component>
=======
     * @return array<string, Component|array<string, Component>>
>>>>>>> aurmich/dev
=======
     * 
=======
     *
>>>>>>> a33c954b (fix: formattazione XotBasePage.php)
     * @return array<string, Component|array<string, Component>>
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
     *
     * @return array<string, Component|array<string, Component>>
>>>>>>> d23ba493 (add calendar)
     */
    protected function getFormSchema(): array
    {
        return [];
    }

    /**
     * Get the associated model class for this page.
     */
    public static function getModel(): ?string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore property.staticAccess */
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> d23ba493 (add calendar)
        return static::$model;
    }

    /**
     * Get the resources associated with this page.
     *
     * @return Collection<string>
     */
    public static function getResources(): Collection
    {
        return collect();
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /*
     * Hook chiamato all'inizializzazione del componente.
     
=======
    /**
     * Hook chiamato all'inizializzazione del componente.
     */
>>>>>>> aurmich/dev
=======
    /**
     * Hook chiamato all'inizializzazione del componente.
     */
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    /**
     * Hook chiamato all'inizializzazione del componente.
     */
>>>>>>> d23ba493 (add calendar)
    public function mount(int|string $record): void
    {
        parent::mount($record);
        $this->form->fill($this->data ?? []);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    */
=======

>>>>>>> aurmich/dev
=======

>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======

>>>>>>> d23ba493 (add calendar)
    /**
     * Get the view data for the page.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'data' => $this->data,
        ];
    }
}
