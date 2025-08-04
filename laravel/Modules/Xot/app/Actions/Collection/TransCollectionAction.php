<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;

/**
 * Action per la traduzione di elementi di una collezione.
 */
=======
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

>>>>>>> aurmich/dev
class TransCollectionAction
{
    use QueueableAction;

    public ?string $transKey;

<<<<<<< HEAD
    /**
     * Esegue la traduzione di una collezione.
     *
     * @param Collection<int|string, mixed> $collection
     * @param string|null $transKey
     *
     * @return Collection<int|string, string>
     */
=======
>>>>>>> aurmich/dev
    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
        if (null === $transKey) {
<<<<<<< HEAD
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
=======
            return $collection;
>>>>>>> aurmich/dev
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
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
=======
        return $collection->map(fn ($item): string => $this->trans($item));
    }

    public function trans(mixed $item): string
    {
        if (! \is_string($item)) {
            dddx($item);

            return '';
        }
        $transKey = $this->transKey;
        $key = $transKey.'.'.$item;
        $trans = trans($key);

        if ($trans !== $key) {
            if (! is_string($trans)) {
                // return 'fix trans ['.$item.']';
                return $item;
            }

            return $trans;
        }

        Assert::string($item1 = Str::replace('.', '_', $item), '['.__LINE__.']['.class_basename($this).']');
        $key = $transKey.'.'.$item1;
        $trans = trans($key);
        if ($trans !== $key) {
            return $trans;
        }

>>>>>>> aurmich/dev
        return $item;
    }
}
