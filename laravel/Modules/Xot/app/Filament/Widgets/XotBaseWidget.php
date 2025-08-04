<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17b35338 (add doctor-register-integration-completed  page)
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
=======
use Illuminate\Support\Str;
use Filament\Actions\Action;
>>>>>>> aurmich/dev
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Modules\SaluteOra\Models\Patient;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Form as FilamentForm;
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Widgets\Widget as FilamentWidget;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
=======
use Filament\Widgets\Widget as FilamentWidget;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
>>>>>>> aurmich/dev

/**
 * Classe base astratta per tutti i widget Filament.
 * Fornisce funzionalità comuni e standardizzate per la gestione dei widget.
 *
 * @property bool $shouldRender Indica se il widget deve essere renderizzato
 * @property string $title Titolo del widget
 * @property string $icon Icona del widget
 * @property array<string, mixed>|null $data Dati del form
 * @property ComponentContainer $form
 */
<<<<<<< HEAD
abstract class XotBaseWidget extends FilamentWidget implements HasForms,HasActions
{
    use TransTrait;
    use InteractsWithPageFilters;
    //use InteractsWithPageTable;
    use InteractsWithForms;
    use InteractsWithActions;
=======
=======
use Filament\Forms\Form;
=======
use Filament\Forms\Form as FilamentForm;
>>>>>>> 7440f060 (delete duplicate folder + add .md)
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
=======
>>>>>>> 15cb84fb (fix collisions)
use Filament\Widgets\Widget as FilamentWidget;
=======
use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\Form as FilamentForm;
>>>>>>> d23ba493 (add calendar)
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Widgets\Widget as FilamentWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
=======
>>>>>>> aa30b366 (✨ (mail_template.php): add 'slug' label and description to Italian mail template for better localization support)
=======
use Filament\Forms\Form as FilamentForm;
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Widgets\Widget as FilamentWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Actions\Action;
use Illuminate\Contracts\View\View;
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Modules\SaluteOra\Models\Patient;
<<<<<<< HEAD
=======
use Filament\Forms\ComponentContainer;
>>>>>>> ebf7989 (.)
use Filament\Forms\Contracts\HasForms;
=======
>>>>>>> b26594b (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
=======
>>>>>>> b58de900 (.)
use Filament\Actions\Action;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Modules\SaluteOra\Models\Patient;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Form as FilamentForm;
use Filament\Widgets\Widget as FilamentWidget;
=======
use Filament\Actions\Action;
=======
>>>>>>> 2608035c (📝 (documentation): remove outdated documentation files for various modules to streamline the codebase and improve maintainability.)
use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\ComponentContainer;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
use Filament\Forms\Form as FilamentForm;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Widgets\Widget as FilamentWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
use Filament\Actions\Action;
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
use Filament\Forms;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Modules\SaluteOra\Models\Patient;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Form as FilamentForm;
use Filament\Widgets\Widget as FilamentWidget;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

/**
 * Classe base astratta per tutti i widget Filament.
 * Fornisce funzionalità comuni e standardizzate per la gestione dei widget.
 *
 * @property bool $shouldRender Indica se il widget deve essere renderizzato
 * @property string $title Titolo del widget
 * @property string $icon Icona del widget
 * @property array<string, mixed>|null $data Dati del form
 * @property ComponentContainer $form
 */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
abstract class XotBaseWidget extends FilamentWidget implements HasForms
{
    use InteractsWithPageFilters;
    //use InteractsWithPageTable;
    use InteractsWithForms;
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)

    public string $title = '';
    public string $icon = '';
    protected int|string|array $columnSpan = 'full';
<<<<<<< HEAD
<<<<<<< HEAD

=======
abstract class XotBaseWidget extends FilamentWidget
=======
abstract class XotBaseWidget extends FilamentWidget implements HasForms
>>>>>>> d23ba493 (add calendar)
{
    use InteractsWithPageFilters;
    //use InteractsWithPageTable;
    use InteractsWithForms;

    public string $title = '';
    public string $icon = '';
<<<<<<< HEAD
>>>>>>> 15cb84fb (fix collisions)
=======
    protected int|string|array $columnSpan = 'full';

>>>>>>> d23ba493 (add calendar)
    /**
     * Lista degli eventi ascoltati dal widget.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * La vista che deve essere renderizzata per il widget.
     * Può essere un namespace (es. 'module-name::view-name') o un percorso Blade.
     *
     * @var view-string
     */
    protected static string $view = '';
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

    /**
     * Lista degli eventi ascoltati dal widget.
     *
     * @var array<string, string>
     */
    public array $listener = [
        'filters-updated' => 'filtersUpdated',
    ];

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    /**
     * Dati del form.
     *
     * @var array<string, mixed>
     */
>>>>>>> 7440f060 (delete duplicate folder + add .md)
    public ?array $data = [];
=======
    protected static string $view;

>>>>>>> 15cb84fb (fix collisions)
=======
    public array $listener = [
        'filters-updated' => 'filtersUpdated',
    ];

    /**
     * Dati del form.
     *
     * @var array<string, mixed>
     */
    public ?array $data = [];
>>>>>>> d23ba493 (add calendar)

    /*
    public function __construct()
    {
        //parent::__construct();//Cannot call constructor
        $view = app(GetViewByClassAction::class)->execute(static::class);
        if(view()->exists($view)){
            $this->view = $view;
        }
    }
    */
    /*
    public function mount(): void
    {
        $this->form->fill();
    }
    */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
    /**
     * Ottiene lo schema del form.
     * Deve essere implementato nelle classi figlie.
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
    abstract public function getFormSchema(): array;

    /**
     * Configura il form del widget.
     *
     * @param FilamentForm $form Il form da configurare
     * @return FilamentForm Il form configurato
     */
    public function form(FilamentForm $form): FilamentForm
    {
        $form = $form->schema($this->getFormSchema());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> de1d4084 (✨ (DoctorResource.php, PatientResource.php, StudioResource.php): introduce new Studio resource and update Doctor resource to include studio relationship)
=======

        if (method_exists($form, 'statePath')) {
            $form->statePath('data');
<<<<<<< HEAD
            //dddx($this->getModel());//Method Modules\User\Filament\Widgets\RegistrationWidget::getModel does not exist.
            $form->model(Patient::class);
        //}
=======
=======
>>>>>>> 4ec8f92 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
        $form->statePath('data');
        $data=$this->getFormFill();
        
        $form->model($this->getFormModel());
        if(!empty($data)){
           //$form->fill($data);
           //$this->data=$data;
<<<<<<< HEAD
        }
            
        
<<<<<<< HEAD
<<<<<<< HEAD

        return $form;
=======

        //if (method_exists($form, 'statePath')) {
            $form->statePath('data');
            //dddx($this->getModel());//Method Modules\User\Filament\Widgets\RegistrationWidget::getModel does not exist.
            $form->model(Patient::class);
        //}
=======
>>>>>>> de1d4084 (✨ (DoctorResource.php, PatientResource.php, StudioResource.php): introduce new Studio resource and update Doctor resource to include studio relationship)
=======
>>>>>>> ebf7989 (.)
=======
        }
>>>>>>> b26594b (.)
=======
>>>>>>> 4ec8f92 (.)
>>>>>>> b58de900 (.)
=======

        $data = $this->getFormFill();
        if (!empty($data)) {
            // $form->fill($data); // Uncomment if needed
            // $this->data = $data; // Uncomment if needed
        }
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
        }
            
        
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)

        return $form;
    }

    public function getFormFill(): array
    {
        $model = $this->getFormModel();
        if($model==null){
            return [];
        }

       
        // Se il modello ha un ID, significa che è stato trovato nel database
        if ($model->exists) {
            try {
                
                //dddx($model->getArrayableRelations());
                $res= $model->toArray();
                return $res;
                //dddx($model->with('studio')->relationsToArray());
                
            } catch (\Exception $e) {
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
                //Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
                $attributes = $model->getAttributes();
                
                // Gestisci specificamente gli enum se presenti
                //if (isset($attributes['type']) && $model->type instanceof \BackedEnum) {
                //    $attributes['type'] = $model->type->value;
                //}
                
                return $attributes;
            }
        }
        
        // Se è un nuovo modello, restituisci solo i campi fillable con valori null
        $fillable = $model->getFillable();
        $appends = $model->getAppends();
        $attributes=$model->attributesToArray();
        
        $fields = array_merge($fillable, $appends);
        $fields= array_fill_keys($fields, null);
        $fields=array_merge($fields,$attributes);
        if(method_exists($model,'getDataDefaults')){
            $defaults=$model->getDataDefaults();
            $fields=array_merge($fields,$defaults);
        }
        
        return $fields;
    }

    /**
     * Ottiene le azioni del form.
     *
     * @return array<int|string, Action>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    /**
     * Ottiene il modello per il form.
     * Può essere sovrascritto nelle classi figlie per fornire un modello specifico.
     *
     * @return \Illuminate\Database\Eloquent\Model|string|null
     */
    protected function getFormModel(): Model|string|null
    {
        return null;
    }

    /**
     * Salva i dati del form.
     * Override nelle classi figlie se necessario.
     *
     * @return void
     */
    public function save(): void
    {
        // Implementare nelle classi figlie
    }

    /**
     * Eseguito quando i filtri vengono aggiornati.
     *
     * @return void
     */
    public function filtersUpdated(): void
    {
        $this->reset('data');
    }

    /**
     * {@inheritDoc}
     */
    public static function getNavigationLabel(): string
    {
        return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
            ->headline());
>>>>>>> d23ba493 (add calendar)
    }

<<<<<<< HEAD
    public function getFormFill(): array
    {
        $model = $this->getFormModel();
        if($model==null){
            return [];
        }
<<<<<<< HEAD
        if(is_string($model)){
            Assert::isInstanceOf($model=app($model),Model::class);
        }
=======
>>>>>>> aurmich/dev

       
        // Se il modello ha un ID, significa che è stato trovato nel database
        if ($model->exists) {
            try {
                
                //dddx($model->getArrayableRelations());
                $res= $model->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
                
=======
>>>>>>> 17b35338 (add doctor-register-integration-completed  page)
                if(method_exists($model,'getDataDefaults')){
                    $defaults=$model->getDataDefaults();
                    $merge1=array_merge($defaults,$res);
                    $merge1=Arr::map($merge1, function ($value, $key) use ($defaults) {
                        if($value==null){
                            $value=Arr::get($defaults,$key,null);
                        }
                        return $value;
                    });
                    $res=$merge1;
                }
                
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 17b35338 (add doctor-register-integration-completed  page)
                return $res;
                //dddx($model->with('studio')->relationsToArray());
                
            } catch (\Exception $e) {
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
                //Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
                $attributes = $model->getAttributes();
                
                // Gestisci specificamente gli enum se presenti
                //if (isset($attributes['type']) && $model->type instanceof \BackedEnum) {
                //    $attributes['type'] = $model->type->value;
                //}
                
                return $attributes;
            }
        }
        
        // Se è un nuovo modello, restituisci solo i campi fillable con valori null
        $fillable = $model->getFillable();
        $appends = $model->getAppends();
        $attributes=$model->attributesToArray();
        
        $fields = array_merge($fillable, $appends);
        $fields= array_fill_keys($fields, null);
        $fields=array_merge($fields,$attributes);
        if(method_exists($model,'getDataDefaults')){
            $defaults=$model->getDataDefaults();
            $fields=array_merge($fields,$defaults);
        }
        
        return $fields;
    }

    /**
     * Ottiene le azioni del form.
     *
     * @return array<int|string, Action>
     */
    protected function getFormActions(): array
=======

=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
    abstract public function getFormSchema(): array;

    /**
     * Configura il form del widget.
     *
     * @param FilamentForm $form Il form da configurare
     * @return FilamentForm Il form configurato
     */
    public function form(FilamentForm $form): FilamentForm
    {
        $form = $form->schema($this->getFormSchema());

        //if (method_exists($form, 'statePath')) {
            $form->statePath('data');
        //}

        return $form;
    }

<<<<<<< HEAD

     protected function getFormActions(): array
>>>>>>> 54f4fa16 (.)
=======
    /**
     * Ottiene le azioni del form.
     *
     * @return array<int|string, Action>
     */
    protected function getFormActions(): array
>>>>>>> 7440f060 (delete duplicate folder + add .md)
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Ottiene il modello per il form.
     * Può essere sovrascritto nelle classi figlie per fornire un modello specifico.
     *
     * @return \Illuminate\Database\Eloquent\Model|string|null
     */
    protected function getFormModel(): Model|string|null
    {
        return null;
    }

=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
    /**
     * Salva i dati del form.
     * Override nelle classi figlie se necessario.
     *
     * @return void
     */
<<<<<<< HEAD
    public function save(): void
    {
        // Implementare nelle classi figlie
    }

    /**
     * Eseguito quando i filtri vengono aggiornati.
     *
     * @return void
     */
    public function filtersUpdated(): void
    {
        $this->reset('data');
    }

    /**
     * {@inheritDoc}
     */
    public static function getNavigationLabel(): string
    {
<<<<<<< HEAD
        /*
        return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
            ->headline());
        */
        return static::transFunc(__FUNCTION__);
=======
        return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
            ->headline());
>>>>>>> aurmich/dev
    }

=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
    protected function getStepByName(string $name): Forms\Components\Wizard\Step
    {
        $schema=Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();
        
        return Forms\Components\Wizard\Step::make($name)
            ->schema($this->$schema());
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


    public function getWizardSubmitAction(): Action{
        $submit_view='pub_theme::filament.wizard.submit-button';
        if(!view()->exists($submit_view)){
            throw new \Exception("View {$submit_view} does not exist");
        }
=======


    public function getWizardSubmitAction(){
        $submit_view='pub_theme::filament.wizard.submit-button';
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->view($submit_view);
    }
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
    public function save(): void
    {
        // Implementare nelle classi figlie
    }

    /**
     * Eseguito quando i filtri vengono aggiornati.
     *
     * @return void
     */
    public function filtersUpdated(): void
    {
        $this->reset('data');
    }

    /**
     * {@inheritDoc}
     */
    public static function getNavigationLabel(): string
    {
        return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
            ->headline());
=======
>>>>>>> 15cb84fb (fix collisions)
    }
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> d31a752a (✨ (saluteora): add new rules for handling patient attachments to prevent "Array to string conversion" errors during patient registration)
}
