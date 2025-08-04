<?php

declare(strict_types=1);

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Collection;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Enums\UserTypeEnum;
=======
use Modules\User\Enums\UserType;
>>>>>>> 54f4fa16 (.)
=======
use Modules\User\Enums\UserTypeEnum;
>>>>>>> 2bcfd382 (fix Address)
=======
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\User\Enums\UserTypeEnum;
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
use Modules\User\Models\Role;

class RolesSeeder extends Seeder
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
    /**
     * Table headers for output display.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
    private static array $OUTPUT_TABLE_HEADERS = [
        '#',
        'Name',
        'Guard',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    /**
     * Default roles to be created.
     *
     * @var array<int, array<string, string>>
     */
    private static array $DEFAULT_ROLES = [
        ['name' => 'admin', 'guard_name' => 'web'],
        ['name' => 'user', 'guard_name' => 'web'],
        ['name' => 'guest', 'guard_name' => 'web'],
    ];
>>>>>>> aurmich/dev
=======
    
>>>>>>> 345f8677 (phpstan)

=======
>>>>>>> 54f4fa16 (.)
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a3f7230 (.)
     * Default roles to be created.
     *
     * @var array<int, array<string, string>>
     */
    private static array $DEFAULT_ROLES = [
        ['name' => 'admin', 'guard_name' => 'web'],
        ['name' => 'user', 'guard_name' => 'web'],
        ['name' => 'guest', 'guard_name' => 'web'],
    ];

    /**
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [];
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        Collection::make(UserTypeEnum::cases())
            ->each(
                static function (UserTypeEnum $userType) use (&$roles): void {
                    $roles[] = Role::firstOrCreate(
                        [
                            'name' => $userType->value,
                            'guard_name' => 'web',
                        ],
                        [
                            'name' => $userType->value,
                            'guard_name' => 'web',
                        ]
                    );
                }
            );

        // Create additional default roles
        foreach (self::$DEFAULT_ROLES as $roleData) {
            $roles[] = Role::firstOrCreate(
                [
                    'name' => $roleData['name'],
                    'guard_name' => $roleData['guard_name'],
                ],
                $roleData
            );
        }
>>>>>>> aurmich/dev
=======

>>>>>>> 345f8677 (phpstan)

        // Display results in a table format
        $this->displayResults($roles);
    }

    /**
     * Display the seeding results in a table format.
     *
     * @param array<int, Role> $roles
     */
    private function displayResults(array $roles): void
    {
        $this->command->info('Roles seeded successfully:');
        $this->command->table(self::$OUTPUT_TABLE_HEADERS, collect($roles)->map(function (Role $role, int $index) {
            return [
                $index + 1,
                $role->name,
                $role->guard_name,
            ];
        })->toArray());
=======
=======
<<<<<<< HEAD

>>>>>>> b58de900 (.)
        Collection::make(UserType::cases())
            ->each(
                static function (UserType $userType) use (&$roles): void {
                    $roles[] = Role::firstOrCreate(
                        [
                            'name' => $userType->value,
                            'guard_name' => $userType->getDefaultGuard(),
                        ]
                    );
                },
            );
=======
<<<<<<< HEAD
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
        
        foreach (self::$DEFAULT_ROLES as $roleData) {
            $roles[] = Role::firstOrCreate($roleData);
        }
<<<<<<< HEAD
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)

        $this->command->getOutput()->comment('<info>Newly created roles</info>');
        $this->command->getOutput()->table(
            self::$OUTPUT_TABLE_HEADERS,
            array_map(
                static fn (Role $role): array => [
                    $role->id,
                    $role->name,
                    $role->guard_name,
                ],
                $roles,
            ),
        );
>>>>>>> 54f4fa16 (.)
    }
}
