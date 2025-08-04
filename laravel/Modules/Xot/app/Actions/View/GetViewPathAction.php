<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
=======
>>>>>>> 54f4fa16 (.)
=======
use Modules\Xot\Actions\View\GetViewPathAction;
>>>>>>> 72f588e8 (fileupload to spatiefileupload + final button wizard)

class GetViewPathAction
{
    use QueueableAction;

    /**
     * ---.
     */
    public function execute(string $view): string
    {
        $ns = Str::before($view, '::');
        $relative_path = str_replace('.', '/', Str::after($view, '::'));
        $pack_dir = app(GetViewNameSpacePathAction::class)->execute($ns);
        $view_dir = $pack_dir.'/'.$relative_path;

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
