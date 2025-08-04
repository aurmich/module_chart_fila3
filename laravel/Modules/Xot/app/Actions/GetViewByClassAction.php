<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\View\View;
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
use Illuminate\Contracts\View\View;
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
use Illuminate\Contracts\View\View;
>>>>>>> d23ba493 (add calendar)
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * Classe per ottenere una vista basata su una classe.
 */
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
/**
 * Classe per ottenere una vista basata su una classe.
 */
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
/**
 * Classe per ottenere una vista basata su una classe.
 */
>>>>>>> d23ba493 (add calendar)
class GetViewByClassAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
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
<<<<<<< HEAD
<<<<<<< HEAD
        
        /** @var view-string $viewName */
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
     * Risolve il percorso della view basato sul namespace della classe.
     *
     * @param string $class Il nome completo della classe
     * @return string Il percorso della view
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeOld(string $class): string
=======
    public function execute(string $class): string
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
    public function executeOld(string $class): string
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
    public function executeOld(string $class): string
>>>>>>> d23ba493 (add calendar)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)

        // Estrai il nome della classe e convertilo in kebab-case
        $class_name = Str::kebab(class_basename($class));

        // Costruisci il percorso della view
        return $module_low.'::pages.'.$class_name;
    }
}
<<<<<<< HEAD
=======
        
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
        // Estrai il nome della classe e convertilo in kebab-case
        $class_name = Str::kebab(class_basename($class));

        // Costruisci il percorso della view
        return $module_low.'::pages.'.$class_name;
    }
<<<<<<< HEAD
} 
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
}
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
