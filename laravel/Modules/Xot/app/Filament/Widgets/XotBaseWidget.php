<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Forms;
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
use Filament\Widgets\Widget as FilamentWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Actions\Action;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

/**
 * Classe base astratta per tutti i widget Filament.
 * Fornisce funzionalità comuni e standardizzate per la gestione dei widget.
 *
 * @property bool $shouldRender Indica se il widget deve essere renderizzato
 * @property string $title Titolo del widget
 * @property string $icon Icona del widget
 * @property array<string, mixed>|null $data Dati del form
 */
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

    /**
     * Lista degli eventi ascoltati dal widget.
     *
     * @var array<string, string>
     */
    public array $listener = [
        'filters-updated' => 'filtersUpdated',
    ];

    /**
     * Dati del form.
     *
     * @var array<string, mixed>
     */
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
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
    /**
     * Ottiene lo schema del form.
     * Deve essere implementato nelle classi figlie.
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
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
        $form->statePath('data');
        $data=$this->getFormFill();
        
        $form->model($this->getFormModel());
        if(!empty($data)){
           //$form->fill($data);
           //$this->data=$data;
        }
            
        

        return $form;
    }

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

    protected function getStepByName(string $name): Forms\Components\Wizard\Step
    {
        $schema=Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();
        
        return Forms\Components\Wizard\Step::make($name)
            ->schema($this->$schema());
    }
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
    }
>>>>>>> 54f4fa16 (.)
}
