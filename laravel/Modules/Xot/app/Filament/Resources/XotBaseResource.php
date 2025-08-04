<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\Set;
=======
>>>>>>> aurmich/dev
use function Safe\glob;
use Filament\Forms\Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use Illuminate\Support\HtmlString;

use Illuminate\Contracts\View\View;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SubNavigationPosition;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Modules\Xot\Actions\ModelClass\CountAction;
use Filament\Resources\Resource as FilamentResource;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
=======
use Illuminate\Contracts\View\View;
use Filament\Pages\SubNavigationPosition;

use Illuminate\Contracts\Support\Renderable;
use Modules\Xot\Actions\ModelClass\CountAction;
use Filament\Resources\Resource as FilamentResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> aurmich/dev
=======
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource as FilamentResource;
use Illuminate\Support\Str;
use Modules\Xot\Actions\ModelClass\CountAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;

use function Safe\glob;
>>>>>>> 54f4fa16 (.)
=======
use Filament\Forms;
use function Safe\glob;
use Filament\Forms\Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;

use Filament\Pages\SubNavigationPosition;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Modules\Xot\Actions\ModelClass\CountAction;
use Filament\Resources\Resource as FilamentResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)

/**
 * @method static string getUrl(string $name, array<string, mixed> $parameters = [], bool $isAbsolute = true)
 */
abstract class XotBaseResource extends FilamentResource
{
    use NavigationLabelTrait;

    protected static ?string $model = null;

    // protected static ?string $navigationIcon = 'heroicon-o-bell';
    // protected static ?string $navigationLabel = 'Custom Navigation Label';
    // protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';
    // protected static bool $shouldRegisterNavigation = false;
    // protected static ?string $navigationGroup = 'Parametri di Sistema';
    // protected static ?int $navigationSort = null;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function getModuleName(): string
    {
        return Str::between(static::class, 'Modules\\', '\Filament');
    }

    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< HEAD



=======
>>>>>>> 54f4fa16 (.)
=======



>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    /**
     * @return class-string<\Illuminate\Database\Eloquent\Model>
     */
    public static function getModel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (null != static::$model) {
<<<<<<< HEAD
            $res = static::$model;
            Assert::subclassOf($res, \Illuminate\Database\Eloquent\Model::class, sprintf('Class %s must extend Eloquent Model', $res));
            return $res;
=======
            return static::$model;
>>>>>>> aurmich/dev
        }
=======
        // if (null != static::$model) {
        //    return static::$model;
        // }
>>>>>>> 54f4fa16 (.)
=======
        if (null != static::$model) {
            $res = static::$model;
            Assert::subclassOf($res, \Illuminate\Database\Eloquent\Model::class, sprintf('Class %s must extend Eloquent Model', $res));
            return $res;
        }
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
        $moduleName = static::getModuleName();
        $modelName = Str::before(class_basename(static::class), 'Resource');
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf($res, \Illuminate\Database\Eloquent\Model::class, sprintf('Class %s must extend Eloquent Model', $res));
        static::$model = $res;

        return $res;
    }

    /**
     * @return array<string|int,\Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    abstract public static function getFormSchema(): array;
    
=======
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
    public static function getFormSchema(): array
    {
        return [];
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
    abstract public static function getFormSchema(): array;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
    abstract public static function getFormSchema(): array;
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)

    final public static function form(Form $form): Form
    {
        return $form
            ->schema(static::getFormSchema());
    }

    /**
     * @return array<string, mixed>
     */
    public static function extendTableCallback(): array
    {
        return [
        ];
    }

    public static function extendFormCallback(): array
    {
        return [
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        try {
            $count = app(CountAction::class)->execute(static::getModel());

            return number_format($count, 0).'';
        } catch (\Exception $e) {
            return '--';
        }
    }

    /**
     * @return array<string, \Filament\Resources\Pages\PageRegistration>
     */
    public static function getPages(): array
    {
        $prefix = static::class.'\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();
        $view = Str::of($prefix)->append('View'.$name.'')->toString();

        /** @var class-string<\Filament\Resources\Pages\Page> $index */
        $index = $index;
        /** @var class-string<\Filament\Resources\Pages\Page> $create */
        $create = $create;
        /** @var class-string<\Filament\Resources\Pages\Page> $edit */
        $edit = $edit;
        /** @var class-string<\Filament\Resources\Pages\Page> $view */
        $view = $view;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
        
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
        /** @var array<string, \Filament\Resources\Pages\PageRegistration> $pages */
        $pages = [
            'index' => $index::route('/'),
            'create' => $create::route('/create'),
            'edit' => $edit::route('/{record}/edit'),
            // 'view' => $view::route('/{record}'),
        ];

        if (class_exists($view)) {
            $pages['view'] = $view::route('/{record}');
        }

        return $pages;
    }

    /**
     * @return array<class-string<\Filament\Resources\RelationManagers\RelationManager>|\Filament\Resources\RelationManagers\RelationGroup|\Filament\Resources\RelationManagers\RelationManagerConfiguration>
     */
    public static function getRelations(): array
    {
        $reflector = new \ReflectionClass(static::class);
        $filename = $reflector->getFileName();
        Assert::string($filename);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
        
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
        $path = Str::of($filename)
            ->before('.php')
            ->append(DIRECTORY_SEPARATOR)
            ->append('RelationManagers')
            ->toString();

        $files = glob($path.DIRECTORY_SEPARATOR.'*RelationManager.php');
        Assert::isArray($files);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
        
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
        /** @var array<class-string<\Filament\Resources\RelationManagers\RelationManager>> $res */
        $res = [];
        foreach ($files as $file) {
            $className = Str::of($file)
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->toString();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
            
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
            if (class_exists($className)) {
                Assert::subclassOf($className, \Filament\Resources\RelationManagers\RelationManager::class);
                $res[] = $className;
            }
        }

        return $res;
    }
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
    public static function getWizardSubmitAction():Htmlable
    {
        $submit_view = 'pub_theme::filament.wizard.submit-button';
        if(!view()->exists($submit_view)){
            throw new \Exception("View {$submit_view} does not exist");
        }
        $render= view($submit_view)->render();
        return new HtmlString($render);
=======
=======

>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    public static function getWizardSubmitAction():View
    {
        $submit_view = 'pub_theme::filament.wizard.submit-button';
        return view($submit_view);
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
    public static function getWizardSubmitAction():Htmlable
    {
        $submit_view = 'pub_theme::filament.wizard.submit-button';
        $render= view($submit_view)->render();
        return new HtmlString($render);
>>>>>>> 13ea6524 (phpstan)
    }

    public static function getAttachmentsSchema(bool $multiple=true): array{
        $model = static::getModel();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if(!method_exists($model,'getAttachments')){
            return [];
        }
        $attachments = $model::getAttachments();
        $disk='attachments';
        $schema=app(GetAttachmentsSchemaAction::class)->execute($attachments,$disk);
        
        return $schema;
    }

    

=======
        $attachments = $model::$attachments;
=======
        $attachments = property_exists($model, 'attachments') ? $model::$attachments : [];
>>>>>>> 53293856 (✨ (laravel): add infinite loop prevention rules and documentation for Sushi models)
=======
        $attachments = $model::$attachments;
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
=======
    }

    public static function getAttachmentsSchema(bool $multiple=true): array{
        $model = static::getModel();
<<<<<<< HEAD
        $attachments = $model::$attachments;
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
        $attachments = property_exists($model, 'attachments') ? $model::$attachments : [];
>>>>>>> 53293856 (✨ (laravel): add infinite loop prevention rules and documentation for Sushi models)
=======
        $attachments = $model::$attachments;
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        $uuid = Str::uuid()->toString();
        $schema = [];
        
        foreach ($attachments as $attachment) {
            $schema[] = Forms\Components\FileUpload::make($attachment)
                ->disk('local')
                ->directory('documents/'.$attachment.'/'.$uuid)
                //->downloadable()
                //->openable()
                ->acceptedFileTypes(['application/pdf', 'image/*'])
                ->maxSize(5120)
                ->required()
                ->reorderable()
<<<<<<< HEAD
<<<<<<< HEAD
                ->multiple($multiple)
=======
                ->multiple()
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
                ->multiple($multiple)
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
                ->preserveFilenames()
                ->columnSpanFull()
                ->afterStateUpdated(function ($state, Forms\Set $set) use ($attachment) {
                    if (!$state) return;
<<<<<<< HEAD
<<<<<<< HEAD
                    $state=Arr::wrap($state);
=======
                    
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
                    $state=Arr::wrap($state);
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
                    $sessionId = session()->getId();
                    $sessionDir = "session-uploads/{$sessionId}";
                    $sessionFiles = [];
                    
                    foreach ($state as $file) {
                        if ($file instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                            // Salva direttamente nella directory di sessione
                            $fileName = time() . '_' . $file->getClientOriginalName();
                            $sessionPath = $file->storeAs($sessionDir, $fileName, 'local');
                            $sessionFiles[] = $sessionPath;
                        } else {
                            // È già un percorso salvato
                            $sessionFiles[] = $file;
                        }
                    }
                    
                    $set($attachment, $sessionFiles);
                })
                ;
        }
        return $schema;
    }
<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> aurmich/dev
=======

>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
    protected static function getStepByName(string $name): Forms\Components\Wizard\Step
    {
        $schema=Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();
        
        return Forms\Components\Wizard\Step::make($name)
            ->schema(static::$schema());
    }
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
}
