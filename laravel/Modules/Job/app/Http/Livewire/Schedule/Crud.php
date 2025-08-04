<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Schedule;

use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Livewire\Component;
use Modules\Job\Models\Task;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Modules\Xot\Actions\GetViewAction;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Actions\ExecuteTaskAction;
use Illuminate\Contracts\Support\Renderable;
<<<<<<< HEAD
=======
=======
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
=======
>>>>>>> 8e4d163b (phpstan)
use Livewire\Component;
use Modules\Job\Models\Task;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Modules\Xot\Actions\GetViewAction;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Actions\ExecuteTaskAction;
use Illuminate\Contracts\Support\Renderable;
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
use Symfony\Component\Console\Command\Command;

/**
 * Class Schedule\Crud.
 */
class Crud extends Component
{
    public bool $create = false;

    /**
     * Return available frequencies.
     */
    public static function getFrequencies(): array
    {
        $res = config('totem.frequencies');
        if (is_array($res)) {
            return $res;
        }

        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
    }

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();
        $tasks = Task::paginate(20);
        $view_params = [
            'tasks' => $tasks,
            /*
            'task' => new Task(),
            'commands' => $this->getCommands(),
            'timezones' => timezone_identifiers_list(),
            'frequencies' => $this->getFrequencies(),
            */
        ];

        return view($view, $view_params);
    }

    public function taskCreate(): void
    {
        $this->dispatch('modal.open', 'modal.schedule.create');
    }

    /**
     * Return collection of Artisan commands filtered if needed.
     */
    public function getCommands(): Collection
    {
        config('totem.artisan.command_filter');
        config('totem.artisan.whitelist', true);
        $all_commands = collect(Artisan::all());

        /*
        if (! empty($command_filter)) {
            // $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
            $all_commands = $all_commands->filter(
                function ($command) use ($command_filter, $whitelist) {
                    foreach ($command_filter as $filter) {
                        if (fnmatch($filter, $command->getName())) {
                            return $whitelist;
                        }U/Notifications/VerifyEmail.php
                    }

                    return ! $whitelist;
                }
            );
        }
        */

        return $all_commands->sortBy(
            static function (Command $command): string {
<<<<<<< HEAD
                Assert::string($name = $command->getName());
=======
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($name = $command->getName());
=======
                $name = $command->getName();
>>>>>>> 54f4fa16 (.)
=======
                Assert::string($name = $command->getName());
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
                if (mb_strpos($name, ':') === false) {
                    return ':'.$name;
                }

                return $name;
            }
        );
    }

    public function executeTask(string $task_id): void
    {
        app(ExecuteTaskAction::class)->execute($task_id);

        session()->flash('message', 'task ['.$task_id.'] executed at '.now());
    }
}
