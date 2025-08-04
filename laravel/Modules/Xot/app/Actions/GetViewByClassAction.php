<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
use Illuminate\Contracts\View\View;
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
/**
 * Classe per ottenere una vista basata su una classe.
 */
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
class GetViewByClassAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Ottiene una vista basata su una classe.
     *
     * @param string $class Nome della classe
     * @param array<string, mixed> $params Parametri da passare alla vista
     * @param string|null $viewName Nome personalizzato della vista
     *
     * @return View
     */
    public function execute(string $class, array $params = [], ?string $viewName = null): View
    {
        $viewName = $viewName ?? $this->getViewNameFromClass($class);
<<<<<<< HEAD
        
        /** @var view-string $viewName */
=======
>>>>>>> aurmich/dev
        return view($viewName, $params);
    }

    /**
     * Ottiene il nome della vista dal nome della classe.
     *
     * @param string $class Nome della classe
     *
     * @return string
     */
    protected function getViewNameFromClass(string $class): string
    {
        $parts = explode('\\', $class);
        $className = end($parts);
        return Str::kebab($className);
    }

    /**
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
     * Risolve il percorso della view basato sul namespace della classe.
     *
     * @param string $class Il nome completo della classe
     * @return string Il percorso della view
     */
<<<<<<< HEAD
    public function executeOld(string $class): string
=======
    public function execute(string $class): string
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    {
        $arr = explode('\\', $class);
        Assert::isArray($arr);

        // Verifica che la classe sia nel namespace Modules
        if ('Modules' !== $arr[0]) {
            throw new \InvalidArgumentException('Class must be in Modules namespace');
        }

        $module = $arr[1];
        $module_low = Str::lower($module);
<<<<<<< HEAD

        // Estrai il nome della classe e convertilo in kebab-case
        $class_name = Str::kebab(class_basename($class));

        // Costruisci il percorso della view
        return $module_low.'::pages.'.$class_name;
    }
}
=======
        
        // Estrai il nome della classe e convertilo in kebab-case
        $class_name = Str::kebab(class_basename($class));
        
        // Costruisci il percorso della view
        return $module_low.'::pages.'.$class_name;
    }
} 
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
