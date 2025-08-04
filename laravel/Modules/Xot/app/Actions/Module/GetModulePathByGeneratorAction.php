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
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> 345f8677 (phpstan)
=======
        $relativePath = config('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> 54f4fa16 (.)

        $res = module_path($moduleName, $relativePath);
=======
        try{
            $res = module_path($moduleName, $relativePath);
        }catch(\Error $e){
            throw new \Exception($e->getMessage()."\n module name: [".$moduleName."]\n generator path: [". $generatorPath."]\n relative path: [". $relativePath."]");
        }
>>>>>>> 15cb84fb (fix collisions)
        Assert::string($res);

        return $res;
    }
}
