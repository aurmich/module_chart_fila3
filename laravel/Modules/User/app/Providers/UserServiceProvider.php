<?php

/**
 * ----.
 */

declare(strict_types=1);

namespace Modules\User\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Webmozart\Assert\Assert;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate;
use Modules\User\Datas\PasswordData;
use Modules\User\Models\OauthClient;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Modules\Notify\Emails\SpatieEmail;
use Modules\User\Models\OauthAuthCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Validation\Rules\Password;
use Modules\User\Models\OauthAccessToken;
use Modules\User\Models\OauthRefreshToken;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\User\Models\OauthPersonalAccessClient;
use SocialiteProviders\Manager\ServiceProvider as SocialiteServiceProvider;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 54f4fa16 (.)
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\Password;
=======
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Modules\User\Datas\PasswordData;
use Modules\User\Models\OauthClient;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Modules\Notify\Emails\SpatieEmail;
use Modules\User\Models\OauthAuthCode;
use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
=======
use Modules\Xot\Contracts\UserContract;
use Illuminate\Validation\Rules\Password;
use Modules\User\Models\OauthAccessToken;
use Modules\User\Models\OauthRefreshToken;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\User\Models\OauthPersonalAccessClient;
use SocialiteProviders\Manager\ServiceProvider as SocialiteServiceProvider;
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)

class UserServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'User';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();
        $this->registerAuthenticationProviders();
        $this->registerEventListener();
        $this->registerPasswordRules();
        $this->registerPulse();
        $this->registerMailsNotification();
    }

    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
        $this->registerTeamModelBindings();
    }

    /**
     * Register the team model bindings.
     */
    protected function registerTeamModelBindings(): void
    {
        $this->app->bind('team_user_model', function () {
            return \Modules\User\Models\TeamUser::class;
        });

        $this->app->bind('team_invitation_model', function () {
            return \Modules\User\Models\TeamInvitation::class;
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
    }

    public function registerMailsNotification(): void
    {
        $app_name = config('app.name');
        if (! is_string($app_name)) {
            $app_name = '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        ResetPassword::toMailUsing(function ($notifiable, string $token): SpatieEmail {
            /*
=======
<<<<<<< HEAD
<<<<<<< HEAD
        ResetPassword::toMailUsing(function ($notifiable, string $token): SpatieEmail {
            /*
=======
        ResetPassword::toMailUsing(function ($notifiable, string $token): MailMessage {
>>>>>>> aurmich/dev
=======
        ResetPassword::toMailUsing(function ($notifiable, string $token): MailMessage {
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
=======
        ResetPassword::toMailUsing(function ($notifiable, string $token): SpatieEmail {
            /*
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
            return (new MailMessage)
                ->template('user::notifications.email')
                ->subject(__('user::reset_password.password_reset_subject'))
                ->line(__('user::reset_password.password_cause_of_email'))
                ->action(__('user::reset_password.reset_password'), url(route('password.reset', $token, false)))
                ->line(__('user::reset_password.password_if_not_requested'))
                ->line(__('user::reset_password.thank_you_for_using_app'))
                ->salutation(__('user::reset_password.regards'));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
            */
            Assert::isInstanceOf($notifiable, Model::class);
=======
            */
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
            $email = new SpatieEmail($notifiable, 'reset-password');
            $email->mergeData([
                'token' => $token,
                'reset_password_url' => url(route('password.reset', ['token' => $token], false)),
            ]);
            
            // ✅ FIX CRITICO: Imposta il destinatario dell'email con metodo Laravel standard
            if (method_exists($notifiable, 'getEmailForPasswordReset')) {
                $email->to($notifiable->getEmailForPasswordReset());
            } elseif (isset($notifiable->email)) {
                $email->to($notifiable->email);
            } else {
                // Fallback per debug
                \Illuminate\Support\Facades\Log::error('SpatieEmail: Destinatario email non trovato', [
                    'notifiable_class' => get_class($notifiable),
                    'notifiable_id' => $notifiable->id ?? 'unknown'
                ]);
            }
            
            return $email;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
=======
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
        });

        $salutation = __('user::verify_email.salutation', ['app_name' => $app_name]);
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) use ($salutation): MailMessage {
            return (new MailMessage)
                ->template('user::notifications.email')
                ->subject(__('user::verify_email.subject'))
                ->greeting(__('user::verify_email.greeting'))
                ->line(__('user::verify_email.line1'))
                ->action(__('user::verify_email.action'), $url)
                ->line(__('user::verify_email.line2'))
                ->salutation($salutation);
        });
    }

    public function registerPulse(): void
    {
        Config::set('pulse.path', 'pulse/admin');
        Gate::define('viewPulse', function (UserContract $user): bool {
            return $user->hasRole('super-admin');
        });
    }

    public function registerPasswordRules(): void
    {
        Password::defaults(function (): Password {
            $pwd = PasswordData::make();
            return $pwd->getPasswordRule();
        });
    }

    protected function registerAuthenticationProviders(): void
    {
        $this->registerPassport();
        $this->registerSocialite();
    }

    protected function registerEventListener(): void
    {
        $this->app->register(EventServiceProvider::class);
    }

    private function registerSocialite(): void
    {
        $this->app->register(SocialiteServiceProvider::class);
    }

    private function registerPassport(): void
    {
        if (method_exists(Passport::class, 'routes')) {
            Passport::routes();
        }

        Passport::tokensExpireIn(now()->addDays(1));
        Passport::refreshTokensExpireIn(now()->addDays(30));
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));
        Passport::tokensCan([
            'view-user' => 'View user information',
            'core-technicians' => 'the technicians can ',
        ]);
    }
}
