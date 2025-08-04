<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Webmozart\Assert\Assert;
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
=======
>>>>>>> aurmich/dev

class GetModulePathByGeneratorAction
{
    public function execute(string $moduleName, string $generatorPath): string
    {
<<<<<<< HEAD
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
        $relativePath = config('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> aurmich/dev

        $res = module_path($moduleName, $relativePath);
        Assert::string($res);

        return $res;
    }
}
