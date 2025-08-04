<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class GetAllIconsAction
{
    use QueueableAction;

    /**
     * @return array
     */
    public function execute(string $context = 'form')
    {
        $iconsFactory = App::make(IconFactory::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf0cd1be (phpstan)
>>>>>>> aurmich/dev
        
        // Uso reflection per accedere alle icone in modo sicuro
        try {
            $reflection = new \ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (\Exception $e) {
            // Fallback: restituisci array vuoto se non riesci ad accedere
            return [];
        }

        // Verifica che $icons sia un array prima di usare Arr::map()
        if (!is_array($icons)) {
            return [];
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $icons = $iconsFactory->all();
        /*
         *  "heroicons" => array:5 [▼
         *   "prefix" => "heroicon"
         *   "fallback" => ""
         *   "class" => ""
         *   "attributes" => []
         *   "paths" => array:1 [▼
         *      0 => "F:\var\www\_bases\base_broker_fila3\laravel\vendor\blade-ui-kit\blade-heroicons\src/../resources/svg"
         *   ]
        ]
         */
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> bf0cd1be (phpstan)
>>>>>>> aurmich/dev
        $icons = Arr::map($icons, function (array $set, array|string $name) {
            $set['name'] = $name;
            $icons = [];

            foreach ($set['paths'] as $path) {
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ('svg' !== $file->getExtension()) {
                        continue;
                    }

                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
                    $iconName = str($file->getPathname())
                        ->after($path.DIRECTORY_SEPARATOR)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

                    $icons[] = $set['prefix'].'-'.$iconName;
                }
            }
            $set['icons'] = $icons;

            return $set;
        });

        return $icons;
    }
}
