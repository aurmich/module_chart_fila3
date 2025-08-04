<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Modules\User\Models\Role;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Symfony\Component\Console\Input\InputOption;

use function Laravel\Prompts\text;

class SuperAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'user:super-admin';

    /**
     * The console command description.
     *
<<<<<<< HEAD
     * @var string
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @var string
=======
     * @var string|null
>>>>>>> aurmich/dev
=======
     * @var string|null
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
     */
    protected $description = 'Assign super-admin to user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $email = text('email ?');
        $user_class = XotData::make()->getUserClass();
        /** @var UserContract */
        $user = XotData::make()->getUserByEmail($email);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
        // Create super-admin role with web guard
        $role = Role::firstOrCreate(
            ['name' => 'super-admin']
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $role = Role::firstOrCreate(['name' => 'super-admin']);
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
        $user->assignRole($role);

        // Create module admin roles
        $modules_opts = array_keys(Module::all());
        foreach ($modules_opts as $module) {
            $role_name = Str::lower($module).'::admin';
<<<<<<< HEAD
            $role = Role::firstOrCreate(
                ['name' => $role_name]
            );
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $role = Role::firstOrCreate(
                ['name' => $role_name]
            );
=======
        $role = Role::firstOrCreate(['name' => 'super-admin']);
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
        $user->assignRole($role);

        // Create module admin roles
        $modules_opts = array_keys(Module::all());
        foreach ($modules_opts as $module) {
            $role_name = Str::lower($module).'::admin';
<<<<<<< HEAD
            $role = Role::firstOrCreate(['name' => $role_name]);
>>>>>>> 54f4fa16 (.)
=======
            $role = Role::firstOrCreate(
                ['name' => $role_name]
            );
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
            $role = Role::firstOrCreate(['name' => $role_name]);
>>>>>>> 15cb84fb (fix collisions)
=======
            $role = Role::firstOrCreate(
                ['name' => $role_name]
            );
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
            $user->assignRole($role);
        }

        $this->info('super-admin assigned to '.$email);
    }

    /**
     * Get the console command options.
     */
    protected function getOptions(): array
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
