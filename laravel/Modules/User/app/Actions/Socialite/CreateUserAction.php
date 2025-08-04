<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 54f4fa16 (.)
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Modules\Xot\Contracts\UserContract;
=======
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
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)

/**
 * Handles the creation of a new user from a socialite authentication.
 */
=======

>>>>>>> 54f4fa16 (.)
class CreateUserAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Execute the action to create a new user from socialite authentication.
     *
     * @param string $provider The socialite provider name (e.g., 'github', 'google')
     * @param SocialiteUserContract $oauthUser The socialite user instance
     * @return UserContract The created user instance
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
     */
    public function execute(string $provider, SocialiteUserContract $oauthUser): UserContract
    {
        // Resolve `users` table required attributes
        // from the identity provider
        $userAttributes = app(GetUserModelAttributesFromSocialiteAction::class, [
            'provider' => $provider,
            'oauthUser' => $oauthUser,
        ], );
        // Store the new entity into `users` table
        $userClass = XotData::make()->getUserClass();
>>>>>>> 54f4fa16 (.)
        $newlyCreatedUser = $userClass::create([
            'name' => $userAttributes->name,
            'first_name' => $userAttributes->name,
            'last_name' => $userAttributes->last_name,
            'email' => $userAttributes->email,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
        
        // Ensure the created user implements UserContract
        Assert::isInstanceOf($newlyCreatedUser, Model::class);
        Assert::isInstanceOf($newlyCreatedUser, UserContract::class);
        
        // Assign default roles to the new user
=======
=======
        Assert::implementsInterface($newlyCreatedUser, UserContract::class);
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
        // Finally, assign the default set of roles
>>>>>>> 54f4fa16 (.)
        app(SetDefaultRolesBySocialiteUserAction::class, [
            'provider' => $provider,
            'userModel' => $newlyCreatedUser,
        ])->execute(userModel: $newlyCreatedUser, oauthUser: $oauthUser);
<<<<<<< HEAD
        
        // Return the refreshed user instance
        /** @var UserContract $refreshedUser */
        $refreshedUser = $newlyCreatedUser->refresh();

        return $refreshedUser;
=======
        /** @var UserContract */
        $res = $newlyCreatedUser->refresh();

        return $res;
>>>>>>> 54f4fa16 (.)
    }
}
