<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Contracts\View\View;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\BinaryFileResponse;
>>>>>>> aurmich/dev
=======
>>>>>>> 15cb84fb (fix collisions)
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\BinaryFileResponse;
>>>>>>> d23ba493 (add calendar)
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\ViewExport;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
/**
 * Classe per l'esportazione di viste in formato Excel.
 */
=======
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\BinaryFileResponse;
>>>>>>> 7440f060 (delete duplicate folder + add .md)
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\ViewExport;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
/**
 * Classe per l'esportazione di viste in formato Excel.
 */
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
/**
 * Classe per l'esportazione di viste in formato Excel.
 */
>>>>>>> d23ba493 (add calendar)
class ExportXlsByView
{
    use QueueableAction;

    /**
     * Esporta una vista in Excel.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param View $view La vista da esportare
=======
     * @param Collection<int|string, mixed> $rows La collezione da esportare
>>>>>>> aurmich/dev
     * @param array<int, string> $fields Campi da includere nell'export
     * @param string $filename Nome del file Excel
     * @param string|null $transKey Chiave di traduzione per i campi
     *
     * @return BinaryFileResponse
     */
    public function execute(
<<<<<<< HEAD
        View $view,
=======
        Collection $rows,
>>>>>>> aurmich/dev
        array $fields,
        string $filename = 'test.xlsx',
        ?string $transKey = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function (string|int|float|bool $field): string {
                return strval($field);
            }, array_values($fields));

        $export = new ViewExport(
<<<<<<< HEAD
            view: $view,
            transKey: $transKey,
            fields: $stringFields
=======
            rows: $rows,
            fields: $stringFields,
            transKey: $transKey
>>>>>>> aurmich/dev
=======
     * @param View $view Vista da esportare
=======
     * @param Collection<int|string, mixed> $rows La collezione da esportare
     * @param array<int, string> $fields Campi da includere nell'export
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
     * @param View $view Vista da esportare
>>>>>>> 15cb84fb (fix collisions)
=======
     * @param Collection<int|string, mixed> $rows La collezione da esportare
     * @param array<int, string> $fields Campi da includere nell'export
>>>>>>> d23ba493 (add calendar)
     * @param string $filename Nome del file Excel
     * @param string|null $transKey Chiave di traduzione per i campi
     *
     * @return BinaryFileResponse
     */
    public function execute(
        Collection $rows,
        array $fields,
        string $filename = 'test.xlsx',
        ?string $transKey = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function (string|int|float|bool $field): string {
                return strval($field);
            }, array_values($fields));

        $export = new ViewExport(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            view: $view,
            transKey: null,
            fields: $stringFields
>>>>>>> 54f4fa16 (.)
=======
            rows: $rows,
            fields: $stringFields,
            transKey: $transKey
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
            view: $view,
            transKey: null,
            fields: $stringFields
>>>>>>> 15cb84fb (fix collisions)
=======
            rows: $rows,
            fields: $stringFields,
            transKey: $transKey
>>>>>>> d23ba493 (add calendar)
        );

        return Excel::download($export, $filename);
    }
}
