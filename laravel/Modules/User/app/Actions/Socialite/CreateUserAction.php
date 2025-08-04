<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Modules\Xot\Contracts\UserContract;
=======
=======
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Webmozart\Assert\Assert;
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
use Modules\Xot\Datas\XotData;
use Modules\Xot\Contracts\UserContract;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> fb6fbaa2 (move resources/lang to lang)

/**
 * Handles the creation of a new user from a socialite authentication.
 */
<<<<<<< HEAD
=======

>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
class CreateUserAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     * Execute the action to create a new user from socialite authentication.
     *
     * @param string $provider The socialite provider name (e.g., 'github', 'google')
     * @param SocialiteUserContract $oauthUser The socialite user instance
     * @return UserContract The created user instance
<<<<<<< HEAD
     */
    public function execute(string $provider, SocialiteUserContract $oauthUser): UserContract
    {
        // Resolve user attributes from the identity provider
        $userAttributes = app(GetUserModelAttributesFromSocialiteAction::class, [
            'provider' => $provider,
            'oauthUser' => $oauthUser,
        ]);
        
        // Get the user class from Xot configuration
        $userClass = XotData::make()->getUserClass();
        
        // Create the new user
=======
     * Execute the action.
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     */
    public function execute(string $provider, SocialiteUserContract $oauthUser): UserContract
    {
        // Resolve user attributes from the identity provider
        $userAttributes = app(GetUserModelAttributesFromSocialiteAction::class, [
            'provider' => $provider,
            'oauthUser' => $oauthUser,
        ]);
        
        // Get the user class from Xot configuration
        $userClass = XotData::make()->getUserClass();
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
        
        // Create the new user
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
        $newlyCreatedUser = $userClass::create([
            'name' => $userAttributes->name,
            'first_name' => $userAttributes->name,
            'last_name' => $userAttributes->last_name,
            'email' => $userAttributes->email,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
        
        // Ensure the created user implements UserContract
        Assert::isInstanceOf($newlyCreatedUser, Model::class);
        Assert::isInstanceOf($newlyCreatedUser, UserContract::class);
        
        // Assign default roles to the new user
<<<<<<< HEAD
=======
=======
        Assert::implementsInterface($newlyCreatedUser, UserContract::class);
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
=======
        Assert::implementsInterface($newlyCreatedUser, UserContract::class);
>>>>>>> aurmich/dev
=======
        Assert::implementsInterface($newlyCreatedUser, UserContract::class);
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
        // Finally, assign the default set of roles
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
        app(SetDefaultRolesBySocialiteUserAction::class, [
            'provider' => $provider,
            'userModel' => $newlyCreatedUser,
        ])->execute(userModel: $newlyCreatedUser, oauthUser: $oauthUser);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
        
        // Return the refreshed user instance
        /** @var UserContract $refreshedUser */
        $refreshedUser = $newlyCreatedUser->refresh();
<<<<<<< HEAD

        return $refreshedUser;
=======
        /** @var UserContract */
        $res = $newlyCreatedUser->refresh();

        return $res;
>>>>>>> 54f4fa16 (.)
=======

        return $refreshedUser;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    }
}
