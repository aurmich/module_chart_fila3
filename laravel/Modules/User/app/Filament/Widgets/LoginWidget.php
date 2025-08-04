<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form as FilamentForm;
use Filament\Notifications\Notification;
<<<<<<< HEAD
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
=======
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form as FilamentForm;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
>>>>>>> aurmich/dev
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
=======
=======
use Exception;
>>>>>>> fb6fbaa2 (move resources/lang to lang)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form as FilamentForm;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
<<<<<<< HEAD
use Exception;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Layout;
use Filament\Forms\Components\TextInput as FormsTextInput;
use Filament\Forms\Components\Checkbox as FormsCheckbox;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
>>>>>>> aurmich/dev

/**
 * LoginWidget: Widget di login conforme alle regole Windsurf/Xot.
 * - Estende XotBaseWidget
 * - Usa solo componenti Filament importati
 * - Validazione e sicurezza integrate
 * - Facilmente estendibile (2FA, captcha, login social)
 *
<<<<<<< HEAD
 * @property array<string, mixed>|null $data
 */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property-read static string $view La view del widget segue il pattern {module}::filament.widgets.{type}
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 345f8677 (phpstan)
 * @property array<string, mixed>|null $data
 */
=======
 * @property-read static string $view La view del widget segue il pattern {module}::filament.widgets.{type}
=======
>>>>>>> a3174e5b (phpstan)
=======
<<<<<<< HEAD
 *
 * @property-read static string $view La view del widget segue il pattern {module}::filament.widgets.{type}
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
 */

>>>>>>> 54f4fa16 (.)
=======
 * @property array<string, mixed>|null $data
 */
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
class LoginWidget extends XotBaseWidget
{
    /**
     * Blade view del widget nel modulo User.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo (senza "user::").
     * 
     * @see \Modules\User\docs\WIDGETS_STRUCTURE.md - Sezione B
<<<<<<< HEAD
     * @var view-string
     */
    /** @phpstan-ignore-next-line property.defaultValue */
    protected static string $view = 'pub_theme::filament.widgets.auth.login';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     * @var view-string
     */
<<<<<<< HEAD
    /** @phpstan-ignore-next-line property.defaultValue */
    protected static string $view = 'pub_theme::filament.widgets.auth.login';
=======
    protected static string $view = 'user::filament.widgets.login';
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
    
   
    /**
     * Inizializza il widget quando viene montato.
     *
     * @return void
<<<<<<< HEAD
=======
=======
=======
     * @var view-string
>>>>>>> a3174e5b (phpstan)
     */
    protected static string $view = 'user::filament.widgets.login';
    
   
    /**
     * Inizializza il widget quando viene montato.
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
     *
     * @return void
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
     */
    public function mount(): void
    {
        $this->form->fill();
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    
    /**
     * Get the form schema for the login form.
     *
     * @return array<int, \Filament\Forms\Components\Component>
<<<<<<< HEAD
=======
=======

=======
    
>>>>>>> fb6fbaa2 (move resources/lang to lang)
    /**
     * Get the form schema for the login form.
     *
<<<<<<< HEAD
     * @return array<string, \Filament\Forms\Components\Component>
>>>>>>> 54f4fa16 (.)
=======
     * @return array<int, \Filament\Forms\Components\Component>
>>>>>>> fb6fbaa2 (move resources/lang to lang)
>>>>>>> aurmich/dev
     */
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            TextInput::make('email')
                ->email()
                ->required()
                ->autofocus(),
            TextInput::make('password')
                ->password()
                ->required(),
<<<<<<< HEAD
            Toggle::make('remember')
            ->visible(false),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Toggle::make('remember')
            ->visible(false),
=======
            Toggle::make('remember'),
>>>>>>> aurmich/dev
=======
            Toggle::make('remember')
            ->visible(false),
>>>>>>> 91aa094a (♻️ (LoginWidget.php): refactor remember toggle to be hidden by default for better user experience)
>>>>>>> aurmich/dev
        ];
    }

    /**
     * Get the form model.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model|null
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model|null
=======
     * @return \Illuminate\Database\Eloquent\Model|string|null
>>>>>>> aurmich/dev
=======
     * @return \Illuminate\Database\Eloquent\Model|null
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
     */
    protected function getFormModel(): ?\Illuminate\Database\Eloquent\Model
    {
        return null;
    }
    
    /**
     * Get the form fill data.
     *
     * @return array<string, mixed>
     */
    public function getFormFill(): array
    {
        return [
            'email' => old('email'),
            'remember' => true,
        ];
    }



    /**
     * Handle login form submission.
     *
     * @return void
     */
<<<<<<< HEAD
=======
=======
            'email' => TextInput::make('email')
=======
            TextInput::make('email')
>>>>>>> fb6fbaa2 (move resources/lang to lang)
                ->email()
                ->required()
                ->autofocus(),
            TextInput::make('password')
                ->password()
                ->required(),
            Toggle::make('remember')
                ->label(__('user::auth.remember_me')),
=======
            Toggle::make('remember'),
>>>>>>> 2608035c (📝 (documentation): remove outdated documentation files for various modules to streamline the codebase and improve maintainability.)
        ];
    }

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    /**
     * Get the form model.
     *
     * @return \Illuminate\Database\Eloquent\Model|string|null
=======
     * @return \Illuminate\Database\Eloquent\Model|null
>>>>>>> 345f8677 (phpstan)
     */
    protected function getFormModel(): ?\Illuminate\Database\Eloquent\Model
    {
        return null;
    }
    
    /**
     * Get the form fill data.
     *
     * @return array<string, mixed>
     */
    public function getFormFill(): array
    {
        return [
            'email' => old('email'),
            'remember' => true,
        ];
    }



    /**
     * Handle login form submission.
     *
     * @return void
     */
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
    public function save(): void
    {
        try {
            $data = $this->form->getState();
            
<<<<<<< HEAD
            // Cast esplicito per type safety PHPStan
            $remember = (bool) ($data['remember'] ?? false);
            $attempt_data =Arr::only($data,['email','password']);
            
            if (!Auth::attempt($attempt_data, $remember)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // Cast esplicito per type safety PHPStan
            $remember = (bool) ($data['remember'] ?? false);
<<<<<<< HEAD
            $attempt_data =Arr::only($data,['email','password']);
            
            if (!Auth::attempt($attempt_data, $remember)) {
=======
            
            if (!Auth::attempt([
                'email' => (string) $data['email'],
                'password' => (string) $data['password']
            ], $remember)) {
>>>>>>> aurmich/dev
=======
=======
>>>>>>> b58de900 (.)
            if (!Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password']
            ], $data['remember'] ?? false)) {
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
=======
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
            // Cast esplicito per type safety PHPStan
            $remember = (bool) ($data['remember'] ?? false);
            
            if (!Auth::attempt([
                'email' => (string) $data['email'],
                'password' => (string) $data['password']
            ], $remember)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a3174e5b (phpstan)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
                throw ValidationException::withMessages([
                    'email' => [__('Le credenziali fornite non sono corrette.')],
                ]);
            }

            session()->regenerate();
            
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
>>>>>>> aurmich/dev
            Notification::make()
                ->title('Accesso effettuato con successo')
                ->success()
                ->send();
                
            $this->redirect(route('home'));
            
<<<<<<< HEAD
=======
<<<<<<< HEAD
        } catch (ValidationException $e) {
            Notification::make()
                ->title('Errore di validazione')
                ->body($e->getMessage())
                ->danger()
                ->send();
                
            $this->form->fill();
            $this->form->saveRelationships();
            //$this->form->callAfter();
            
            foreach ($e->errors() as $field => $messages) {
                $this->form->getComponent($field)?->getContainer()->getParentComponent()?->getStatePath()
                    ? $this->addError($field, implode(' ', $messages))
                    : $this->addError('email', implode(' ', $messages));
            }
            
        } catch (Exception $e) {
            report($e);
            
            Notification::make()
                ->title('Errore durante il login')
                ->body(__('Si è verificato un errore durante il login. Riprova più tardi.'))
                ->danger()
                ->send();
                
            $this->form->fill();
            $this->form->saveRelationships();
<<<<<<< HEAD
<<<<<<< HEAD
            //$this->form->callAfter();
=======
            $this->form->callAfter();
>>>>>>> aurmich/dev
=======
            //$this->form->callAfter();
>>>>>>> 345f8677 (phpstan)
            
            $this->addError('email', __('Si è verificato un errore durante il login. Riprova più tardi.'));
        }
    }
    

=======
            redirect()->intended(route('home'));
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
>>>>>>> aurmich/dev
        } catch (ValidationException $e) {
            Notification::make()
                ->title('Errore di validazione')
                ->body($e->getMessage())
                ->danger()
                ->send();
                
            $this->form->fill();
            $this->form->saveRelationships();
            //$this->form->callAfter();
            
            foreach ($e->errors() as $field => $messages) {
                $this->form->getComponent($field)?->getContainer()->getParentComponent()?->getStatePath()
                    ? $this->addError($field, implode(' ', $messages))
                    : $this->addError('email', implode(' ', $messages));
            }
            
        } catch (Exception $e) {
            report($e);
            
            Notification::make()
                ->title('Errore durante il login')
                ->body(__('Si è verificato un errore durante il login. Riprova più tardi.'))
                ->danger()
                ->send();
                
            $this->form->fill();
            $this->form->saveRelationships();
            //$this->form->callAfter();
            
            $this->addError('email', __('Si è verificato un errore durante il login. Riprova più tardi.'));
        }
    }
<<<<<<< HEAD
    

=======
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    

>>>>>>> fb6fbaa2 (move resources/lang to lang)
>>>>>>> aurmich/dev
}
