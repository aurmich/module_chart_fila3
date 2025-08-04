<?php

return [

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f622d84c (✨ (DoctorResource.php, RegistrationWidget.php, passport.php): enhance user authentication by adding remember token checks and improving Passport configuration for better security and flexibility.)
    | Passport Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Passport settings. The default values are
    | set for most applications, but you can adjust them as needed.
    |
    */

    'private_key' => storage_path('oauth-private.key'),
    'public_key' => storage_path('oauth-public.key'),

    'token_lifetime' => env('PASSPORT_TOKEN_LIFETIME', 60),

    'refresh_token_lifetime' => env('PASSPORT_REFRESH_TOKEN_LIFETIME', 20160),

    'personal_access_client' => [
        'id' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_ID'),
        'secret' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET'),
    ],

    'password_client' => [
        'id' => env('PASSPORT_PASSWORD_CLIENT_ID'),
        'secret' => env('PASSPORT_PASSWORD_CLIENT_SECRET'),
    ],

    'first_party_clients' => [
        [
            'id' => env('PASSPORT_FIRST_PARTY_CLIENT_ID'),
            'secret' => env('PASSPORT_FIRST_PARTY_CLIENT_SECRET'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> f622d84c (✨ (DoctorResource.php, RegistrationWidget.php, passport.php): enhance user authentication by adding remember token checks and improving Passport configuration for better security and flexibility.)
=======
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
    | Passport Guard
    |--------------------------------------------------------------------------
    |
    | Here you may specify which authentication guard Passport will use when
    | authenticating users. This value should correspond with one of your
    | guards that is already present in your "auth" configuration file.
    |
    */

    'guard' => 'web',

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
    | Encryption Keys
    |--------------------------------------------------------------------------
    |
    | Passport uses encryption keys while generating secure access tokens for
    | your application. By default, the keys are stored as local files but
    | can be set via environment variables when that is more convenient.
    |
    */

    'private_key' => env('PASSPORT_PRIVATE_KEY'),

    'public_key' => env('PASSPORT_PUBLIC_KEY'),

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> f622d84c (✨ (DoctorResource.php, RegistrationWidget.php, passport.php): enhance user authentication by adding remember token checks and improving Passport configuration for better security and flexibility.)
=======
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
    | Passport Database Connection
    |--------------------------------------------------------------------------
    |
    | By default, Passport's models will utilize your application's default
    | database connection. If you wish to use a different connection you
    | may specify the configured name of the database connection here.
    |
    */

<<<<<<< HEAD
    'connection' => env('PASSPORT_CONNECTION'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'connection' => env('PASSPORT_CONNECTION'),
=======
    'connection' => env('PASSPORT_CONNECTION','user'),
>>>>>>> aurmich/dev
=======
    'connection' => env('PASSPORT_CONNECTION'),
>>>>>>> 54f4fa16 (.)
=======
    'connection' => env('PASSPORT_CONNECTION','user'),
>>>>>>> f622d84c (✨ (DoctorResource.php, RegistrationWidget.php, passport.php): enhance user authentication by adding remember token checks and improving Passport configuration for better security and flexibility.)
=======
    'connection' => env('PASSPORT_CONNECTION'),
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev

    /*
    |--------------------------------------------------------------------------
    | Client UUIDs
    |--------------------------------------------------------------------------
    |
    | By default, Passport uses auto-incrementing primary keys when assigning
    | IDs to clients. However, if Passport is installed using the provided
    | --uuids switch, this will be set to "true" and UUIDs will be used.
    |
    */

    'client_uuids' => false,

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
    /*
    |--------------------------------------------------------------------------
    | Personal Access Client
    |--------------------------------------------------------------------------
    |
    | If you enable client hashing, you should set the personal access client
    | ID and unhashed secret within your environment file. The values will
    | get used while issuing fresh personal access tokens to your users.
    |
    */

    'personal_access_client' => [
        'id' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_ID'),
        'secret' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET'),
    ],

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> f622d84c (✨ (DoctorResource.php, RegistrationWidget.php, passport.php): enhance user authentication by adding remember token checks and improving Passport configuration for better security and flexibility.)
=======
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
];
