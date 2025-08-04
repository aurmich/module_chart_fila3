<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

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
use function Laravel\Prompts\text;

use function Laravel\Prompts\select;
use Modules\Xot\Contracts\UserContract;
use Symfony\Component\Console\Input\InputOption;

<<<<<<< HEAD
/**
 * Command to change user type based on project configuration.
 *
 * This command allows administrators to change the type of a user
 * by selecting from available child types in the system.
 */
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
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
<<<<<<< HEAD
     * @var string
=======
     * @var string|null
>>>>>>> aurmich/dev
=======
     * @var string|null
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
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
     *
     * @return void
     */
    public function handle(): void
    {
        $xot = XotData::make();
        $email = text('User email?');
        
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
     */
    public function handle(): void
    {
        $email = text('User email?');

        /** @var UserContract */
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
        $user = XotData::make()->getUserByEmail($email);

        if (!$user) {
            $this->error("User with email '{$email}' not found.");
            return;
        }
<<<<<<< HEAD
        if (!method_exists($user, 'getChildTypes')) {
            $this->error('User model does not have childTypes method.');
            return;
        }

        $childTypes = $xot->getUserChildTypes();
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore nullsafe.neverNull */
        $this->info("Current user type: {$user->type?->getLabel()}");
        
        $typeClass = $xot->getUserChildTypeClass();
        $options = Arr::mapWithKeys($childTypes, function ($item, int|string $key){
            //dddx($item->getLabel());
            //$val = $typeClass::tryFrom((string) $key)?->getLabel();
            //return [(string) $key => '['.$key.'] '.$val.''];
            return[$item->value => $item->getLabel()];
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
        });

        $newType = select('Select new user type:', $options);
        
        Assert::notNull($newTypeEnum = $typeClass::tryFrom($newType));
        
        $user->type = $newTypeEnum;
        $user->save();
        
        $this->info("User type changed to '{$user->type->getLabel()}' for {$email}");
    }
=======
        if(!method_exists($user,'getChildTypes')){
            $this->error('User model does not have childTypes method.');
            return;
        }
        $childTypes = $user->getChildTypes();

        $this->info("Current user type: {$user->type->getLabel()}");
        $typeClass = get_class($user->type);
        $options=Arr::mapWithKeys($childTypes,
            function ($item, string $key) use($typeClass) {
                $val=$typeClass::tryFrom($key)?->getLabel();
                return [$key => $val];
            }
        );
        // Selezione del nuovo tipo

        $newType = select('Select new user type:', $options);

        // Salva il tipo precedente per il log
        //$oldType = $this->getCurrentTypeValue($user);

        // Aggiorna il tipo utente
        //$user->type = $newType;
        Assert::notNull($newTypeEnum=$typeClass::tryFrom($newType));

        $user->type = $newTypeEnum;
        $user->save();

        $this->info("User type changed to '{$user->type->getLabel()}' for {$email}");

        // Log dell'attività se disponibile
        //$this->logActivity($user, $oldType, $newType);
    }


>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
}
