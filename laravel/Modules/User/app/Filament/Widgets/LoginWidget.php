<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form as FilamentForm;
use Filament\Notifications\Notification;
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
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Exception;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Layout;
use Filament\Forms\Components\TextInput as FormsTextInput;
use Filament\Forms\Components\Checkbox as FormsCheckbox;
>>>>>>> 54f4fa16 (.)

/**
 * LoginWidget: Widget di login conforme alle regole Windsurf/Xot.
 * - Estende XotBaseWidget
 * - Usa solo componenti Filament importati
 * - Validazione e sicurezza integrate
 * - Facilmente estendibile (2FA, captcha, login social)
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property-read static string $view La view del widget segue il pattern {module}::filament.widgets.{type}
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
 * @property array<string, mixed>|null $data
 */
=======
 * @property-read static string $view La view del widget segue il pattern {module}::filament.widgets.{type}
 */

>>>>>>> 54f4fa16 (.)
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
<<<<<<< HEAD
    /** @phpstan-ignore-next-line property.defaultValue */
    protected static string $view = 'pub_theme::filament.widgets.auth.login';
=======
    protected static string $view = 'user::filament.widgets.login';
>>>>>>> aurmich/dev
    
   
    /**
     * Inizializza il widget quando viene montato.
     *
     * @return void
=======
     */
    protected static string $view = 'user::filament.widgets.login';
    
    protected int | string | array $columnSpan = 'full';
    
    /**
     * Dati del form per il login
     */
    public ?array $data = [];

    /**
     * Inizializza il widget quando viene montato.
>>>>>>> 54f4fa16 (.)
     */
    public function mount(): void
    {
        $this->form->fill();
    }
<<<<<<< HEAD
    
    /**
     * Get the form schema for the login form.
     *
     * @return array<int, \Filament\Forms\Components\Component>
=======

    /**
     * Definisce lo schema del form di login.
     *
     * @return array<string, \Filament\Forms\Components\Component>
>>>>>>> 54f4fa16 (.)
     */
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
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
            Toggle::make('remember'),
>>>>>>> aurmich/dev
        ];
    }

    /**
     * Get the form model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model|null
=======
     * @return \Illuminate\Database\Eloquent\Model|string|null
>>>>>>> aurmich/dev
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
=======
            'email' => TextInput::make('email')
                ->email()
                ->required()
                ->autofocus(),
            'password' => TextInput::make('password')
                ->password()
                ->required(),
            'remember' => Toggle::make('remember')
                ->label('Ricordami'),
        ];
    }

>>>>>>> 54f4fa16 (.)
    public function save(): void
    {
        try {
            $data = $this->form->getState();
            
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
            if (!Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password']
            ], $data['remember'] ?? false)) {
>>>>>>> 54f4fa16 (.)
                throw ValidationException::withMessages([
                    'email' => [__('Le credenziali fornite non sono corrette.')],
                ]);
            }

            session()->regenerate();
            
<<<<<<< HEAD
            Notification::make()
                ->title('Accesso effettuato con successo')
                ->success()
                ->send();
                
            $this->redirect(route('home'));
            
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
        } catch (ValidationException $e) {
            $this->addError('email', $e->getMessage());
        } catch (Exception $e) {
            report($e);
            $this->addError('email', __('Si è verificato un errore durante il login. Riprova più tardi.['.$e->getMessage().']'));
        }
    }
>>>>>>> 54f4fa16 (.)
}
