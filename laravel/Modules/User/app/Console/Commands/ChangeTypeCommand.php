<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

use Illuminate\Console\Command;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\InputOption;
<<<<<<< HEAD
use Webmozart\Assert\Assert;

use function Laravel\Prompts\text;
use function Laravel\Prompts\select;

=======
<<<<<<< HEAD

use function Laravel\Prompts\text;
use function Laravel\Prompts\select;
=======
=======
>>>>>>> a3f7230 (.)
use Illuminate\Support\Arr;
<<<<<<< HEAD
use Symfony\Component\Console\Input\InputOption;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)

=======
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Illuminate\Console\Command;
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
use Webmozart\Assert\Assert;

>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use function Laravel\Prompts\text;
use function Laravel\Prompts\select;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
/**
 * Command to change user type based on project configuration.
 *
 * This command allows administrators to change the type of a user
 * by selecting from available child types in the system.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
class ChangeTypeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'user:change-type';

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
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
>>>>>>> aurmich/dev
     */
    protected $description = 'Change user type based on project configuration';

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
     *
     * @return void
     */
    public function handle(): void
    {
        $xot = XotData::make();
        $email = text('User email?');
        
<<<<<<< HEAD
        /** @var UserContract $user */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var UserContract $user */
=======
        /** @var UserContract|null */
>>>>>>> aurmich/dev
=======
        /** @var UserContract $user */
>>>>>>> 345f8677 (phpstan)
=======
=======
     *
     * @return void
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     */
    public function handle(): void
    {
        $xot = XotData::make();
        $email = text('User email?');
<<<<<<< HEAD

        /** @var UserContract */
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
        
        /** @var UserContract|null */
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
        /** @var UserContract $user */
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        $user = XotData::make()->getUserByEmail($email);

        if (!$user) {
            $this->error("User with email '{$email}' not found.");
            return;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if (!method_exists($user, 'getChildTypes')) {
            $this->error('User model does not have childTypes method.');
            return;
        }

        $childTypes = $xot->getUserChildTypes();
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore nullsafe.neverNull */
        $this->info("Current user type: {$user->type?->getLabel()}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore nullsafe.neverNull */
        $this->info("Current user type: {$user->type?->getLabel()}");
=======
        $this->info("Current user type: {$user->type->getLabel()}");
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
=======
        /** @phpstan-ignore-next-line */
        $this->info("Current user type: {$user->type?->getLabel()}");
>>>>>>> 3042b6c3 (fix: type null on change-type)
        
        $typeClass = $xot->getUserChildTypeClass();
        $options = Arr::mapWithKeys($childTypes, function ($item, int|string $key){
            //dddx($item->getLabel());
            //$val = $typeClass::tryFrom((string) $key)?->getLabel();
            //return [(string) $key => '['.$key.'] '.$val.''];
            return[$item->value => $item->getLabel()];
<<<<<<< HEAD
=======
=======
        $this->info("Current user type: {$user->type?->getLabel()}");
        
        $typeClass = $xot->getUserChildTypeClass();
        $options = Arr::mapWithKeys($childTypes, function ($item, string $key) use ($typeClass) {
            $val = $typeClass::tryFrom($key)?->getLabel();
            return [$key => $val];
>>>>>>> aurmich/dev
=======
        $this->info("Current user type: {$user->type->getLabel()}");
        
        $typeClass = $xot->getUserChildTypeClass();
        $options = Arr::mapWithKeys($childTypes, function ($item, int|string $key) use ($typeClass) {
            $val = $typeClass::tryFrom((string) $key)?->getLabel();
            return [(string) $key => $val];
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        });

        $newType = select('Select new user type:', $options);
        
        Assert::notNull($newTypeEnum = $typeClass::tryFrom($newType));
        
        $user->type = $newTypeEnum;
        $user->save();
        
        $this->info("User type changed to '{$user->type->getLabel()}' for {$email}");
    }
<<<<<<< HEAD
=======
=======
        if(!method_exists($user,'getChildTypes')){
=======

=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
        if (!method_exists($user, 'getChildTypes')) {
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
            $this->error('User model does not have childTypes method.');
            return;
        }

        $childTypes = $xot->getUserChildTypes();
        $this->info("Current user type: {$user->type?->getLabel()}");
=======
        $this->info("Current user type: {$user->type->getLabel()}");
>>>>>>> 345f8677 (phpstan)
        
        $typeClass = $xot->getUserChildTypeClass();
        $options = Arr::mapWithKeys($childTypes, function ($item, int|string $key) use ($typeClass) {
            $val = $typeClass::tryFrom((string) $key)?->getLabel();
            return [(string) $key => $val];
=======
        $this->info("Current user type: {$user->type?->getLabel()}");
        
        $typeClass = $xot->getUserChildTypeClass();
        $options = Arr::mapWithKeys($childTypes, function ($item, int|string $key) use ($typeClass) {
            //dddx($item->getLabel());
            //$val = $typeClass::tryFrom((string) $key)?->getLabel();
            //return [(string) $key => '['.$key.'] '.$val.''];
            return[$item->value => $item->getLabel()];
>>>>>>> 23f43388 (feat: add openingHoursField to studiorelationmanager of doctorresource)
        });

        $newType = select('Select new user type:', $options);
        
        Assert::notNull($newTypeEnum = $typeClass::tryFrom($newType));
        
        $user->type = $newTypeEnum;
        $user->save();
        
        $this->info("User type changed to '{$user->type->getLabel()}' for {$email}");
    }
<<<<<<< HEAD


>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
}
