<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * Classe per la conversione di nomi di classi in nomi di viste.
 */
=======
>>>>>>> 54f4fa16 (.)
=======
/**
 * Classe per la conversione di nomi di classi in nomi di viste.
 */
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
/**
 * Classe per la conversione di nomi di classi in nomi di viste.
 */
>>>>>>> d23ba493 (add calendar)
class GetViewByClassAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> d23ba493 (add calendar)
     * Converte un nome di classe in un nome di vista.
     * Esempio: "Modules\UI\Filament\Widgets\GroupWidget" => "ui::filament.widgets.group"
     *
     * @param string $class Il nome della classe da convertire
     * @param string $suffix Suffisso opzionale da aggiungere al nome della vista
     *
     * @return string Il nome della vista
     * @throws \Exception Se la vista non esiste
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * "Modules\UI\Filament\Widgets\GroupWidget" => "ui::filament.widgets.group"
     * @return view-string
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
     * "Modules\UI\Filament\Widgets\GroupWidget" => "ui::filament.widgets.group"
     * @return view-string
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
     */
    public function execute(string $class, string $suffix = ''): string
    {
        $module = Str::of($class)->betweenFirst('Modules\\', '\\')->toString();
        $module_low = Str::of($module)->lower()->toString();
        $after = Str::of($class)
            ->after('Modules\\'.$module.'\\')
            ->explode('\\')
            ->toArray();

        $mapped = Arr::map($after, function (string $value, int $key) use ($after) {
            if ($key > 0 && isset($after[$key - 1])) {
                /** @var mixed $prevValue */
                $prevValue = $after[$key - 1];

                // Gestione sicura delle conversioni di tipo per PHPStan level 10
                $prevValueStr = '';

                if (is_string($prevValue)) {
                    $prevValueStr = $prevValue;
                } elseif ($prevValue === null) {
                    $prevValueStr = '';
                } elseif (is_scalar($prevValue)) {
                    // Cast sicuro per valori scalari (int, float, bool)
                    $prevValueStr = strval($prevValue);
                }

                $singular = Str::of($prevValueStr)->singular()->toString();
                if (Str::endsWith($value, $singular)) {
                    $value = Str::of($value)->beforeLast($singular)->toString();
                }
            }

            return Str::of($value)->slug()->toString();
        });

        $implode = implode('.', $mapped);
        $view = $module_low.'::'.$implode.$suffix;

        if (!view()->exists($view)) {
            throw new \Exception('View not found: '.$view);
        }

        return $view;
    }
}
