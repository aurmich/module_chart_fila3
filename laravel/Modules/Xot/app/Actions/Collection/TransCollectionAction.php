<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;

/**
 * Action per la traduzione di elementi di una collezione.
 */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 54f4fa16 (.)
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
/**
 * Action per la traduzione di elementi di una collezione.
 */
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
class TransCollectionAction
{
    use QueueableAction;

    public ?string $transKey;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
    /**
     * Esegue la traduzione di una collezione.
     *
     * @param Collection<int|string, mixed> $collection
     * @param string|null $transKey
     *
     * @return Collection<int|string, string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
        if (null === $transKey) {
<<<<<<< HEAD
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
=======
            return $collection;
>>>>>>> aurmich/dev
=======
            return $collection;
>>>>>>> 54f4fa16 (.)
=======
            return $collection->map(fn (mixed $item): string => (string) $item);
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        return $collection->map(fn (mixed $item): string => $this->trans($item));
    }

    /**
     * Traduce un singolo elemento.
     *
     * @param mixed $item L'elemento da tradurre
     *
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
        if (!\is_string($item)) {
            $item = SafeStringCastAction::cast($item);
        }

        if (empty($item) || null === $this->transKey) {
            return $item;
        }

        // Prima prova la traduzione diretta
        $key = $this->transKey.'.'.$item;
        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 54f4fa16 (.)
        return $collection->map(fn ($item): string => $this->trans($item));
=======
        return $collection->map(fn (mixed $item): string => $this->trans($item));
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
    }

    /**
     * Traduce un singolo elemento.
     *
     * @param mixed $item L'elemento da tradurre
     *
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
        if (!\is_string($item)) {
            $item = (string) $item;
        }

        if (empty($item) || null === $this->transKey) {
            return $item;
        }

        // Prima prova la traduzione diretta
        $key = $this->transKey.'.'.$item;
        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = Str::replace('.', '_', $item);
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
        return $item;
    }
}
