<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
=======
>>>>>>> aurmich/dev
=======
use Illuminate\Support\Facades\Config;
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 54f4fa16 (.)

class GetModulePathByGeneratorAction
{
    public function execute(string $moduleName, string $generatorPath): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
        $relativePath = config('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> aurmich/dev
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> 345f8677 (phpstan)
=======
        $relativePath = config('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> 54f4fa16 (.)

        $res = module_path($moduleName, $relativePath);
        Assert::string($res);

        return $res;
    }
}
