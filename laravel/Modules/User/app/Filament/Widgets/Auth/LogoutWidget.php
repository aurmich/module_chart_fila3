<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<<< HEAD:laravel/Modules/User/app/Filament/Widgets/LogoutWidget.php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
========
>>>>>>>> b0db4ea8 (fixes):laravel/Modules/User/app/Filament/Widgets/Auth/LogoutWidget.php
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
use Filament\Actions\Action;
use Filament\Forms\Components\View;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<<< HEAD:laravel/Modules/User/app/Filament/Widgets/LogoutWidget.php
 * Provides a widget for user logout functionality within Filament admin panels.
 * 
 * This widget handles the user logout process including session invalidation,
 * event dispatching, and proper redirection with localization support.
 * 
 * @method void mount() Initialize the widget and form state.
 * @method array<string, Component> getFormSchema() Define the form schema for the logout confirmation.
 * @method void logout() Handle the user logout process.
 * @method array<string, Action> getFormActions() Define the form actions (logout and cancel buttons).
 * @method array<string, string> getViewData() Get additional data to pass to the view.
 * 
 * @property array<string, mixed>|null $data Widget data array managed by XotBaseWidget.
 * @property bool $isLoggingOut Flag indicating if logout is in progress.
========
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
 * Logout widget for user session termination.
 *
 * Handles secure logout process with proper session management,
 * event dispatching, and audit logging following Laraxot
 * architectural patterns and security best practices.
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>>> b0db4ea8 (fixes):laravel/Modules/User/app/Filament/Widgets/Auth/LogoutWidget.php
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
 */
class LogoutWidget extends XotBaseWidget
{
    /**
<<<<<<< HEAD
     * The view for this widget.
     * @phpstan-ignore property.defaultValue
=======
<<<<<<< HEAD
     * The view for this widget.
<<<<<<< HEAD
<<<<<<< HEAD
     * @phpstan-ignore property.defaultValue
=======
     *
     * @var view-string
>>>>>>> aurmich/dev
=======
     * @phpstan-ignore-next-line
>>>>>>> 345f8677 (phpstan)
=======
<<<<<<<< HEAD:laravel/Modules/User/app/Filament/Widgets/LogoutWidget.php
     * The view that should be used to render the widget.
     * 
     * IMPORTANT: When using @livewire() directly in Blade templates,
     * the path should be without the module namespace.
     * 
     * @var string
     * 
<<<<<<< HEAD
     * @phpstan-ignore property.phpDocType 
=======
     * @phpstan-ignore-next-line 
>>>>>>> aurmich/dev
=======
=======
>>>>>>> b58de900 (.)
use Filament\Forms\Components\Actions\Action;
=======
use Filament\Actions\Action;
use Filament\Forms\Components\Actions\Action as FormAction;
<<<<<<< HEAD
>>>>>>> a3174e5b (phpstan)
=======
>>>>>>> aurmich/dev
=======
use Filament\Actions\Action;
use Filament\Forms\Components\Actions\Action as FormAction;
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
use Exception;
use Filament\Actions\Action;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Filament\Forms\Components\Component;
use Filament\Forms\Components\View;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Throwable;

class LogoutWidget extends XotBaseWidget
{
<<<<<<< HEAD
    /**
     * Blade view del widget.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo.
>>>>>>> 54f4fa16 (.)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string $view = 'user::widgets.logout';

    /**
=======
=======
>>>>>>> a3f7230 (.)
    /** @phpstan-ignore-next-line */
    protected static string $view = 'user::widgets.logout';

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Widget data array.
     * 
     * CRITICAL: This property is managed by XotBaseWidget.
     * Do not remove or redeclare it.
=======
     * Widget data array.
     * 
     * CRITICAL: Do not remove or redeclare this property - it's managed by XotBaseWidget.
>>>>>>> a3174e5b (phpstan)
     *
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Indicates if the logout process is in progress.
     *
     * @var bool
=======
=======
>>>>>>> a3174e5b (phpstan)
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
     * Stato del widget.
>>>>>>> 54f4fa16 (.)
     */
    public bool $isLoggingOut = false;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Mount the widget and initialize the form.
     * 
=======
=======
     * Implementazione del metodo astratto getFormSchema.
     * NON sovrascrivere il metodo form() che è dichiarato come final.
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
     * Mount the widget and initialize the form.
     *
>>>>>>> a3174e5b (phpstan)
     * @return void
     */
=======
    protected static string $view = 'user::widgets.logout';

    public ?array $data = [];
    public bool $isLoggingOut = false;

>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
========
     * The view for this widget.
<<<<<<< HEAD
     *
     * @var view-string
>>>>>>> b0db4ea8 (fixes)
=======
     * @phpstan-ignore-next-line
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
     */
    protected static string $view = 'user::widgets.auth.logout-widget';

    /**
     * Mount the widget and initialize the form.
     *
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>>> b0db4ea8 (fixes):laravel/Modules/User/app/Filament/Widgets/Auth/LogoutWidget.php
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
    public function mount(): void
    {
        $this->form->fill();
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * Get the form schema for logout interface.
     *
     * @return array<string, \Filament\Forms\Components\Component>
=======
<<<<<<<< HEAD:laravel/Modules/User/app/Filament/Widgets/LogoutWidget.php
<<<<<<< HEAD
    /**
<<<<<<< HEAD
     * Get the form schema for the logout confirmation.
     * 
     * This method implements the abstract method from XotBaseWidget.
     * Do not override the form() method as it's declared as final.
     *
     * @return array<string, Component>
>>>>>>> b0db4ea8 (fixes)
     */
    public function getFormSchema(): array
    {
<<<<<<< HEAD
        $view='filament.widgets.auth.logout-message';
        if(!view()->exists($view)){
            throw new \Exception('View '.$view.' not found');
        }
        return [
<<<<<<< HEAD
            'logout_message' => View::make($view)
=======
        return [
            'logout_message' => View::make('filament.widgets.auth.logout-message')
>>>>>>> aurmich/dev
=======
            'message' => View::make($view)
=======
        return [
            'message' => View::make('filament.widgets.auth.logout-message')
>>>>>>> aurmich/dev
=======
=======
>>>>>>> a3174e5b (phpstan)
     * Implementazione del metodo astratto getFormSchema.
     * NON sovrascrivere il metodo form() che è dichiarato come final.
     *
     * @return array<string, Component>
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
     */
    public function getFormSchema(): array
    {
        return [
            'message' => View::make('filament.widgets.auth.logout-message')
>>>>>>> 54f4fa16 (.)
=======
    public function getFormSchema(): array
    {
        return [
            View::make('filament.widgets.auth.logout-message')
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
========
>>>>>>> aurmich/dev
    /**
     * Get the form schema for logout interface.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'logout_message' => View::make($view)
=======
<<<<<<< HEAD
            'logout_message' => View::make('filament.widgets.auth.logout-message')
>>>>>>>> b0db4ea8 (fixes):laravel/Modules/User/app/Filament/Widgets/Auth/LogoutWidget.php
>>>>>>> b0db4ea8 (fixes)
=======
            'logout_message' => View::make($view)
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
=======
            'logout_message' => View::make('filament.widgets.auth.logout-message')
>>>>>>> 93990a83 (rebase 1/1)
                ->columnSpanFull(),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<<< HEAD:laravel/Modules/User/app/Filament/Widgets/LogoutWidget.php
<<<<<<< HEAD
    /**
<<<<<<< HEAD
     * Handle the user logout process.
     * 
     * This method performs the following actions:
     * 1. Validates the current user session
     * 2. Dispatches pre-logout events
     * 3. Performs the actual logout
     * 4. Invalidates the session
     * 5. Dispatches post-logout events
     * 6. Logs the operation
     * 7. Handles redirection with proper localization
     *
     * @return void
     * 
     * @throws \RuntimeException If the logout process fails
=======
     * Azione di logout.
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
<<<<<<< HEAD
>>>>>>> b58de900 (.)
=======
     * Gestisce il logout dell'utente con eventi, logging e reindirizzamento localizzato.
     *
     * @return void
<<<<<<< HEAD
>>>>>>> a3174e5b (phpstan)
=======
>>>>>>> aurmich/dev
=======
     * Gestisce il logout dell'utente con eventi, logging e reindirizzamento localizzato.
     *
     * @return void
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
     */
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    public function logout(): void
    {
        try {
            $this->isLoggingOut = true;
<<<<<<< HEAD

<<<<<<< HEAD
            // Get the authenticated user before logging out
            $user = $this->getAuthenticatedUser();
            if ($user === null) {
                $this->handleNoUserScenario();
                return;
            }

            $this->dispatchPreLogoutEvent($user);
            $this->performLogout();
            $this->dispatchPostLogoutEvent();
            $this->logLogoutSuccess($user);
            $this->redirectAfterLogout();
        } catch (Throwable $e) {
            $this->handleLogoutError($e);
=======
            // Ottieni l'utente prima del logout per il logging
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
            $user = Auth::user();

            if (!$user) {
                $this->handleNoUserScenario();
                return;
            }

<<<<<<< HEAD
            // Evento pre-logout
            Event::dispatch('auth.logout.attempting', [$user]);

            // Esegui il logout
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();

            // Evento post-logout
            Event::dispatch('auth.logout.successful');

            // Log dell'operazione
            Log::info('Utente disconnesso', [
                'user_id' => $user->id,
                'timestamp' => now()
            ]);

            // Reindirizzamento con localizzazione
            $locale = app()->getLocale();
            redirect()->to('/' . $locale)
                ->with('success', __('Logout effettuato con successo'));

        } catch (\Exception $e) {
            Log::error('Errore durante il logout: ' . $e->getMessage());
            $this->isLoggingOut = false;
            session()->flash('error', __('Errore durante il logout'));
>>>>>>> 54f4fa16 (.)
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the form actions for the widget.
     *
     * @return array<string, Action>
=======
     * Azioni del form.
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
     *
     * @return array<string, Action>
>>>>>>> a3174e5b (phpstan)
=======
     * Azioni del form.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array<string, Action>
>>>>>>> aurmich/dev
=======
     *
     * @return array<string, Action>
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
     */
    public function getFormActions(): array
    {
        return [
<<<<<<< HEAD
            'logout' => $this->getLogoutAction(),
            'cancel' => $this->getCancelAction(),
        ];
    }

    /**
     * Get the logout action configuration.
     *
     * @return Action
     */
    protected function getLogoutAction(): Action
    {
        return Action::make('logout')
            ->translateLabel()
            ->color('danger')
            ->size('lg')
            ->extraAttributes(['class' => 'w-full justify-center'])
            ->action(fn () => $this->logout());
    }

    /**
     * Get the cancel action configuration.
     *
     * @return Action
     */
    protected function getCancelAction(): Action
    {
        return Action::make('cancel')
            ->translateLabel()
            ->color('gray')
            ->size('lg')
            ->extraAttributes(['class' => 'w-full justify-center mt-2'])
            ->url($this->getLocalizedHomeUrl());
    }

    /**
     * Get localized home URL based on current locale.
     *
     * @return string
     */
    protected function getLocalizedHomeUrl(): string
    {
        $locale = App::getLocale();
        return '/' . ltrim($locale, '/');
    }

    /**
     * Get the authenticated user instance.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    protected function getAuthenticatedUser(): ?Authenticatable
    {
        return Auth::user();
    }

    /**
     * Handle scenario when no user is authenticated.
     *
     * @return void
     */
    protected function handleNoUserScenario(): void
    {
        $this->isLoggingOut = false;
        Log::warning('Logout attempted with no authenticated user');
    }

    /**
     * Dispatch pre-logout events.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    protected function dispatchPreLogoutEvent(Authenticatable $user): void
    {
        Event::dispatch('auth.logout.attempting', [$user]);
    }

    /**
     * Perform the actual logout operations.
     *
     * @return void
     */
    protected function performLogout(): void
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
    }

    /**
     * Dispatch post-logout events.
     *
     * @return void
     */
    protected function dispatchPostLogoutEvent(): void
    {
        Event::dispatch('auth.logout.successful');
    }

    /**
     * Log successful logout operation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    protected function logLogoutSuccess(Authenticatable $user): void
    {
        Log::info('User logged out', [
            'user_id' => $user->getAuthIdentifier(),
            'timestamp' => now()->toDateTimeString(),
        ]);
    }

    /**
     * Handle redirect after successful logout.
     *
     * @return void
     */
    protected function redirectAfterLogout(): void
    {
        $redirect = redirect($this->getLocalizedHomeUrl())
            ->with('success', __('user::auth.logout_success'));
            
        $redirect->send();
        exit;
    }

    /**
     * Handle any errors that occur during logout.
     *
     * @param  \Throwable  $e
     * @return void
     * 
     * @throws \RuntimeException
     */
    protected function handleLogoutError(Throwable $e): void
    {
        Log::error('Logout error: ' . $e->getMessage(), [
            'exception' => get_class($e),
            'trace' => $e->getTraceAsString(),
        ]);

        $this->isLoggingOut = false;
        Session::flash('error', __('user::auth.logout_error'));
    }

    /**
     * Get view data for the widget.
     *
     * @return array{
     *     title: string,
     *     description: string
     * }
     */
    protected function getViewData(): array
    {
        return [
            'title' => __('user::auth.logout_title'),
            'description' => __('user::auth.logout_confirmation'),
=======
            'logout' => Action::make('logout')
                ->color('danger')
                ->size('lg')
                ->extraAttributes(['class' => 'w-full justify-center'])
                ->action(fn () => $this->logout()),
            'cancel' => Action::make('cancel')
                ->color('gray')
                ->size('lg')
                ->extraAttributes(['class' => 'w-full justify-center mt-2'])
<<<<<<< HEAD
<<<<<<< HEAD
                ->url(function () {
=======
                ->url(function (): string {
>>>>>>> aurmich/dev
=======
                ->url(function (): string {
>>>>>>> a3f7230 (.)
                    $locale = app()->getLocale();
                    return '/' . $locale;
                }),
=======
            $this->dispatchPreLogoutEvent($user);
            $this->performLogout();
            $this->dispatchPostLogoutEvent();
            $this->logLogoutSuccess($user);
            $this->redirectAfterLogout();
        } catch (Throwable $e) {
            $this->handleLogoutError($e);
        }
    }

========
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
    /**
     * Get form actions for logout widget.
     *
     * @return array<\Filament\Actions\Action>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>>> b0db4ea8 (fixes):laravel/Modules/User/app/Filament/Widgets/Auth/LogoutWidget.php
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
    public function getFormActions(): array
    {
        return [
            $this->getLogoutAction(),
            $this->getCancelAction(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
        ];
    }

    /**
     * Handle user logout with proper security and auditing.
     *
     * Implements secure logout process with session invalidation,
     * event dispatching, and comprehensive audit logging.
     *
     * @return void
     */
    public function logout(): void
    {
        $user = Auth::user();

        if (!$user) {
            Log::warning('Logout attempted with no authenticated user');
            return;
        }

        $this->dispatchPreLogoutEvent($user);
        $this->performLogout();
        $this->dispatchPostLogoutEvent();
        $this->logLogoutSuccess($user);
        $this->redirectAfterLogout();
    }

    /**
     * Get logout action button configuration.
     *
     * @return \Filament\Actions\Action
     */
    protected function getLogoutAction(): Action
    {
        return Action::make('logout')
            ->translateLabel()
            ->color('danger')
            ->size('lg')
            ->extraAttributes(['class' => 'w-full justify-center'])
            ->action(fn () => $this->logout());
    }

    /**
     * Get cancel action button configuration.
     *
     * @return \Filament\Actions\Action
     */
    protected function getCancelAction(): Action
    {
        return Action::make('cancel')
            ->translateLabel()
            ->color('gray')
            ->size('lg')
            ->extraAttributes(['class' => 'w-full justify-center mt-2'])
            ->url($this->getLocalizedHomeUrl());
    }

    /**
     * Get localized home URL.
     *
     * @return string
     */
    protected function getLocalizedHomeUrl(): string
    {
        return '/' . App::getLocale();
    }

    /**
     * Dispatch pre-logout event.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @return void
     */
    protected function dispatchPreLogoutEvent(Authenticatable $user): void
    {
        Event::dispatch('auth.logout.attempting', [$user]);
    }

    /**
     * Perform secure logout process.
     *
     * @return void
     */
    protected function performLogout(): void
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
    }

    /**
     * Dispatch post-logout event.
     *
     * @return void
     */
    protected function dispatchPostLogoutEvent(): void
    {
        Event::dispatch('auth.logout.successful');
    }

    /**
     * Log successful logout for audit trail.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @return void
     */
    protected function logLogoutSuccess(Authenticatable $user): void
    {
        Log::info('User logged out', [
            'user_id' => $user->getAuthIdentifier(),
            'timestamp' => now()->toDateTimeString(),
        ]);
    }

    /**
     * Redirect user after successful logout.
     *
     * @return void
     */
    protected function redirectAfterLogout(): void
    {
        redirect($this->getLocalizedHomeUrl())
            ->with('success', __('user::auth.logout_success'))
            ->send();
        exit;
    }

    /**
     * Get view data for the widget.
     *
     * @return array<string, string>
     */
    protected function getViewData(): array
    {
        return [
<<<<<<< HEAD
            'title' => __('user::auth.logout_title'),
            'description' => __('user::auth.logout_confirmation'),
=======
<<<<<<< HEAD
            'title' => __('user::auth.logout_title'),
            'description' => __('user::auth.logout_confirmation'),
=======
<<<<<<< HEAD
            'title' => __('Logout'),
            'description' => __('Sei sicuro di voler uscire?'),
>>>>>>> 54f4fa16 (.)
=======
            'title' => __('user::auth.logout_title'),
            'description' => __('user::auth.logout_confirmation'),
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> b0db4ea8 (fixes)
>>>>>>> aurmich/dev
        ];
    }
}