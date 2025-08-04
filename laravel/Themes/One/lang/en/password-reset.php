<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'title' => 'Reset password',
    'subtitle' => 'Enter your email address to receive the password reset link',
    'description' => 'Enter your email address to receive the password reset link',
=======
    /*
    |--------------------------------------------------------------------------
    | Password Reset
    |--------------------------------------------------------------------------
    |
    | Translations for the password reset process
    |
    */

    // Main form
    'title' => 'Reset password',
    'subtitle' => 'Enter your email address to receive the password reset link',
    'description' => 'Enter your email address to receive the password reset link',

    // Form fields
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'email' => [
        'label' => 'Email address',
        'placeholder' => 'Enter your email',
    ],
<<<<<<< HEAD
=======

    // Buttons
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'submit' => [
        'label' => 'Send password reset link',
        'processing' => 'Sending...',
    ],
<<<<<<< HEAD
=======

    // Process states
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'email_sent' => [
        'title' => 'Email sent successfully!',
        'message' => 'We have sent you a link to reset your password. Check your inbox and follow the instructions.',
        'check_email' => 'Check email',
    ],
<<<<<<< HEAD
=======

    // Process breadcrumb
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'breadcrumb' => [
        'request' => 'Reset request',
        'confirm' => 'Confirm password',
    ],
<<<<<<< HEAD
=======

    // Security information
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'info' => [
        'security' => [
            'title' => 'Security guaranteed',
            'description' => 'The reset link is encrypted and valid for only 60 minutes. No one can access your account without this link.',
        ],
        'password' => [
            'title' => 'New password',
            'description' => 'Choose a secure password with at least 8 characters, including letters, numbers, and symbols.',
        ],
        'expiry' => [
            'title' => 'Link expiry',
            'description' => 'The reset link automatically expires after 60 minutes for security reasons.',
        ],
    ],
<<<<<<< HEAD
=======

    // Confirmation page
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'confirm' => [
        'title' => 'Set new password',
        'subtitle' => 'Enter your email and new password to complete the reset',
        'password' => [
            'label' => 'New password',
            'placeholder' => 'Enter new password',
            'requirements' => 'Password must be at least 8 characters long',
        ],
        'password_confirmation' => [
            'label' => 'Confirm new password',
            'placeholder' => 'Confirm new password',
        ],
        'submit' => [
            'label' => 'Confirm new password',
            'processing' => 'Processing...',
        ],
    ],
<<<<<<< HEAD
=======

    // Alternative actions
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'actions' => [
        'back_to_login' => 'Back to login',
        'request_new_link' => 'Request a new link',
        'send_another' => 'Send another link',
        'try_again' => 'Try again',
    ],
<<<<<<< HEAD
=======

    // Success messages
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'success' => [
        'title' => 'Password reset successful!',
        'message' => 'Your password has been updated. You can now log in with your new password.',
        'redirect_notice' => 'Automatic redirect in progress...',
        'go_to_dashboard' => 'Go to dashboard',
        'go_to_login' => 'Go to login',
    ],
<<<<<<< HEAD
=======

    // Error messages
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'errors' => [
        'title' => 'Password reset error',
        'invalid_token' => 'The reset link is no longer valid or has expired.',
        'invalid_user' => 'We couldn\'t find a user with this email address.',
        'generic' => 'An error occurred while resetting the password. Please try again later.',
        'possible_causes' => 'Possible causes:',
        'causes' => [
            'expired_token' => 'The reset link has expired (valid for 60 minutes)',
            'invalid_email' => 'The email address doesn\'t match any account',
            'already_used' => 'The reset link has already been used',
        ],
    ],
<<<<<<< HEAD
=======

    // Instructions
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'instructions' => [
        'title' => 'Reset instructions',
        'description' => 'Enter your email and new password to complete the reset.',
    ],
<<<<<<< HEAD
=======

    // Security notes
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'security' => [
        'title' => 'Security',
        'note' => 'The reset link is valid for 60 minutes and can only be used once.',
    ],
<<<<<<< HEAD
=======

    // Help
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
    'help' => [
        'having_trouble' => 'Having trouble with reset?',
        'contact_support' => 'Contact support',
    ],
<<<<<<< HEAD
    'processing' => 'Processing...',
    'sending' => 'Sending...',
];
=======

    // Processing states
    'processing' => 'Processing...',
    'sending' => 'Sending...',
]; 
>>>>>>> 3974325a (✨ (password-reset): add English and Italian translations for password reset process to enhance user experience and accessibility)
