<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Form;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Widgets\Widget;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7adb1164 (♻️ (DoctorResource.php): remove hardcoded email and token for better security and flexibility)
=======
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Illuminate\Http\Request;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Livewire\Attributes\Validate;
use Illuminate\Support\HtmlString;
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
>>>>>>> aurmich/dev
=======
=======
use Illuminate\Support\Arr;
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
use Illuminate\Support\Str;
use Filament\Widgets\Widget;
=======
use Webmozart\Assert\Assert;
>>>>>>> aa30b366 (✨ (mail_template.php): add 'slug' label and description to Italian mail template for better localization support)
use Modules\Xot\Datas\XotData;
use Livewire\Attributes\Validate;
use Illuminate\Support\HtmlString;
>>>>>>> 54f4fa16 (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\Registered;
use Filament\Forms\Components\Checkbox;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> aa30b366 (✨ (mail_template.php): add 'slug' label and description to Italian mail template for better localization support)
use Filament\Forms\Components\TextInput;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Concerns\InteractsWithRecord;


class RegistrationWidget extends XotBaseWidget
{
    
    public ?array $data = [];
    protected int | string | array $columnSpan = 'full';
=======
use Filament\Forms\Components\TextInput;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Illuminate\Support\Facades\Log;

class RegistrationWidget extends XotBaseWidget
{
    //public ?array $data = []; //moved to XotBaseWidget
    //protected int | string | array $columnSpan = 'full'; //moved to XotBaseWidget
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
=======
use Illuminate\Support\Facades\Log;
>>>>>>> de1d4084 (✨ (DoctorResource.php, PatientResource.php, StudioResource.php): introduce new Studio resource and update Doctor resource to include studio relationship)

class RegistrationWidget extends XotBaseWidget
{
    public ?array $data = [];
    protected int | string | array $columnSpan = 'full';
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    public string $type;
    public string $resource;
    public string $model;
    public string $action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public Model $record;
    
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @phpstan-var class-string
     * @phpstan-ignore-next-line
     */
=======
    
    
>>>>>>> aurmich/dev
    protected static string $view = 'pub_theme::filament.widgets.registration';

    public function mount(string $type, Request $request): void
    {
        $this->type = $type;
<<<<<<< HEAD
=======
        
>>>>>>> aurmich/dev
        $this->resource = XotData::make()->getUserResourceClassByType($type);
        $this->model = $this->resource::getModel();
        $this->action = Str::of($this->model)->replace('\\Models\\', '\\Actions\\')->append('\\RegisterAction')->toString();
        $record = $this->getFormModel();
        $data = $this->getFormFill();
<<<<<<< HEAD
        $this->data = $data; 
        $this->form->fill($data);
        $this->form->model($record);
        $this->record = $record;
        
=======
        
        $this->form->fill($data);
        $this->form->model($record);
        $this->data = $data;
        $this->record = $record;
>>>>>>> aurmich/dev
    }

    public function getFormModel(): Model
    {
        $data = request()->all();
        $email = Arr::get($data, 'email');
        $token = Arr::get($data, 'token');

        $user = $this->model::firstWhere('email', $email);
<<<<<<< HEAD
=======
        
>>>>>>> aurmich/dev
        if ($user === null) {
            return app($this->model);
        }
        
        $remember_token = $user->remember_token;
        if ($remember_token === null) {
            $user->remember_token = Str::uuid()->toString();
            $user->save();
        }
        
        if ($remember_token === $token) {
<<<<<<< HEAD
=======
            
>>>>>>> aurmich/dev
            $this->record = $user;
            return $user;
        }
        
<<<<<<< HEAD
        return app($this->model);
    }

    public function getFormFill(): array{
        $data=parent::getFormFill();
        $data['type']=$this->type;
        
        return $data;
    }

   

=======
        
        return app($this->model);
    }
    
>>>>>>> aurmich/dev
=======
=======
    public Model $record;
>>>>>>> aa30b366 (✨ (mail_template.php): add 'slug' label and description to Italian mail template for better localization support)
=======
    public UserContract $record;
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
    public Model $record;
    
>>>>>>> de1d4084 (✨ (DoctorResource.php, PatientResource.php, StudioResource.php): introduce new Studio resource and update Doctor resource to include studio relationship)
=======
    
    
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    protected static string $view = 'pub_theme::filament.widgets.registration';

    public function mount(string $type, Request $request): void
    {
        $this->type = $type;
        
        $this->resource = XotData::make()->getUserResourceClassByType($type);
        $this->model = $this->resource::getModel();
        $this->action = Str::of($this->model)->replace('\\Models\\', '\\Actions\\')->append('\\RegisterAction')->toString();
        $record = $this->getFormModel();
        $data = $this->getFormFill();
        
        $this->form->fill($data);
        $this->form->model($record);
        $this->data = $data;
        $this->record = $record;
    }

    public function getFormModel(): Model
    {
        $data = request()->all();
        $email = Arr::get($data, 'email');
        $token = Arr::get($data, 'token');

        $user = $this->model::firstWhere('email', $email);
        
        if ($user === null) {
            return app($this->model);
        }
        
        $remember_token = $user->remember_token;
        if ($remember_token === null) {
            $user->remember_token = Str::uuid()->toString();
            $user->save();
        }
        
        if ($remember_token === $token) {
            
            $this->record = $user;
            return $user;
        }
        
        
        return app($this->model);
    }
    
    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
    }

    public function getFormFill(): array
    {

        //$model=$this->getFormModel();
        //$studio=\Modules\SaluteOra\Models\Studio::inRandomOrder()->first();
        //$model->studio()->save($studio);
        
       
        $data = [];
        
        /*
        $data['studio']=[];
        $data['studio']['description'] = null;
        $data['studio']['address']=[];
        $data['studio']['address']['administrative_area_level_1'] = null;
        $data['studio']['address']['administrative_area_level_2'] = null;
        $data['studio']['address']['administrative_area_level_3'] = null;
        $data['studio']['address']['locality'] = null;
        $data['studio']['address']['postal_code'] = null;
        */
        $data = array_merge($data,parent::getFormFill() );
        $data['type'] = $this->type;
<<<<<<< HEAD
        
<<<<<<< HEAD
        // Se è un nuovo modello, restituisci solo i campi fillable con valori null
        $fillable = $model->getFillable();
        $appends = $model->getAppends();
        $fields = array_merge($fillable, $appends);
        
        return array_fill_keys($fields, null);
    }

<<<<<<< HEAD

>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
=======
        return $data;
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function getFormFill(): array
    {
        $data = [];
        
        // Ottieni i dati dal parent e assicurati che sia sempre un array
        $parentData = parent::getFormFill();
        //if (is_array($parentData)) {
            $data = array_merge($data, $parentData);
        //}
        
        $data['type'] = $this->type;
=======
>>>>>>> 17b35338 (add doctor-register-integration-completed  page)
        return $data;
    }

>>>>>>> aurmich/dev
    /**
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function register(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $data = $this->form->getState();
        
<<<<<<< HEAD
        $data=array_merge($this->data ?? [],$data);
        $record = $this->record;
       
        $user = app($this->action)->execute($record, $data);

        return redirect()->route('pages.view', ['slug' => $this->type . '_register_complete']);
=======
        $record = $this->record;
        /** @phpstan-ignore-next-line */
        $data=array_merge($this->data,$data);
        if(!isset($data['name']) && isset($data['email'])){
            $data['name']=Str::of($data['email'])->before('@')->toString();
        }
        $user = app($this->action)->execute($record, $data);
        $slug=$this->type . '_register_'.Str::snake($user->state::$name);
        $slug=Str::slug($slug);
        return redirect()->route('pages.view', ['slug' => $slug]);
>>>>>>> aurmich/dev
    }

    
}
=======
=======
    /**
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
     */
>>>>>>> aa30b366 (✨ (mail_template.php): add 'slug' label and description to Italian mail template for better localization support)
    public function register()
=======
    public function register():\Illuminate\Http\RedirectResponse
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
=======
    public function register()
    {
        $data = $this->form->getState();
        $user=app($this->action)->execute($data);
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
    public function register():\Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
>>>>>>> 0dec23f0 (✨ (enum-serialization-fix): add new rules for enum serialization to prevent errors during model creation and serialization)
    {
        $data = $this->form->getState();
        $record=$this->record;
=======
    public function register(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $data = $this->form->getState();
<<<<<<< HEAD
        $record = $this->record;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
       
        $user = app($this->action)->execute($record, $data);

        return redirect()->route('pages.view', ['slug' => $this->type . '_register_complete']);
    }

    /**
     * Invia l'email di conferma della registrazione.
     */
    protected function sendConfirmationEmail(\Modules\SaluteOra\Models\Doctor $doctor): void
    {
        $email = new \Modules\Notify\Emails\SpatieEmail($doctor, 'registration_pending');

        \Illuminate\Support\Facades\Mail::to($doctor->email)
            ->locale(app()->getLocale())
            ->send($email);
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
        
        $record = $this->record;
        $data=array_merge($this->data,$data);
        if(!isset($data['name']) && isset($data['email'])){
            $data['name']=Str::of($data['email'])->before('@')->toString();
        }
        $user = app($this->action)->execute($record, $data);
        $slug=$this->type . '_register_'.Str::snake($user->state::$name);
        $slug=Str::slug($slug);
        return redirect()->route('pages.view', ['slug' => $slug]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

    
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
}
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> ca5e1eaf (.)
=======
}
>>>>>>> 15cb84fb (fix collisions)
=======
}
>>>>>>> d23ba493 (add calendar)
