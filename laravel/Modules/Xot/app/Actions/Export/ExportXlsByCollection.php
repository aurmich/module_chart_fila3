<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

<<<<<<< HEAD
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\BinaryFileResponse;
>>>>>>> aurmich/dev
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

/**
 * Classe per l'esportazione di collezioni in formato Excel.
 */
class ExportXlsByCollection
{
    use QueueableAction;

    /**
     * Esporta una collezione in Excel.
     *
<<<<<<< HEAD
     * @param Collection<int|string, mixed>|EloquentCollection<int, \Illuminate\Database\Eloquent\Model> $collection La collezione da esportare
=======
     * @param Collection<int|string, mixed> $collection La collezione da esportare
>>>>>>> aurmich/dev
     * @param string $filename Nome del file Excel
     * @param string|null $transKey Chiave di traduzione per i campi
     * @param array<int, string> $fields Campi da includere nell'export
     *
     * @return BinaryFileResponse
     */
    public function execute(
<<<<<<< HEAD
        Collection|EloquentCollection $collection,
=======
        Collection $collection,
>>>>>>> aurmich/dev
        string $filename = 'test.xlsx',
        ?string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
<<<<<<< HEAD
        // Converte EloquentCollection in Support\Collection se necessario
        if ($collection instanceof EloquentCollection) {
            $collection = Collection::make($collection->toArray());
        }

        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(
            fn (mixed $field): string => (string) $field,
            array_values($fields)
        );
=======
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function (string|int|float|bool $field): string {
            return strval($field);
        }, array_values($fields));
>>>>>>> aurmich/dev

        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields
        );

        return Excel::download($export, $filename);
    }

    /**
     * Esporta una collezione in Excel utilizzando PhpSpreadsheet direttamente.
     *
<<<<<<< HEAD
     * @param Collection<int|string, mixed>|EloquentCollection<int, \Illuminate\Database\Eloquent\Model> $rows La collezione da esportare
=======
     * @param Collection<int|string, mixed> $rows La collezione da esportare
>>>>>>> aurmich/dev
     * @param array<int, string> $fields Campi da includere nell'export
     * @param string $filename Nome del file Excel
     *
     * @return string Il percorso del file generato
     */
<<<<<<< HEAD
    public function executeWithSpreadsheet(Collection|EloquentCollection $rows, array $fields, string $filename): string
    {
        // Converte EloquentCollection in Support\Collection se necessario
        if ($rows instanceof EloquentCollection) {
            $rows = Collection::make($rows->toArray());
        }

=======
    public function executeWithSpreadsheet(Collection $rows, array $fields, string $filename): string
    {
>>>>>>> aurmich/dev
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $this->writeHeader($sheet, $fields);
        $this->writeRows($sheet, $rows, $fields);

        $writer = new Xlsx($spreadsheet);
        $writer->save($filename);

        return $filename;
    }

    /**
     * Scrive l'intestazione nel foglio Excel.
     *
     * @param Worksheet $sheet Il foglio Excel
     * @param array<int, string> $fields I campi da utilizzare come intestazioni
     */
    protected function writeHeader(Worksheet $sheet, array $fields): void
    {
        foreach ($fields as $col => $field) {
            $sheet->setCellValueByColumnAndRow($col + 1, 1, $field);
        }
    }

    /**
     * Scrive le righe nel foglio di lavoro.
     *
     * @param Worksheet $sheet Il foglio di lavoro
     * @param Collection<int|string, mixed> $rows I dati da scrivere
     * @param array<int, string> $fields I campi da utilizzare per le colonne
     */
    protected function writeRows(Worksheet $sheet, Collection $rows, array $fields): void
    {
        $row = 2;
        foreach ($rows as $data) {
            foreach ($fields as $col => $field) {
<<<<<<< HEAD
                $value = $this->extractValue($data, $field);
=======
                $value = '';

                // Verifica che $data supporti il metodo get
                if (is_object($data) && method_exists($data, 'get')) {
                    $value = $data->get($field) ?? '';
                } elseif (is_array($data) || $data instanceof \ArrayAccess) {
                    $value = $data[$field] ?? '';
                } elseif (is_object($data) && property_exists($data, $field)) {
                    $value = $data->{$field} ?? '';
                }

>>>>>>> aurmich/dev
                $sheet->setCellValueByColumnAndRow($col + 1, $row, $value);
            }
            $row++;
        }
    }
<<<<<<< HEAD

    /**
     * Estrae il valore da un oggetto o array usando il campo specificato.
     *
     * @param mixed $data I dati da cui estrarre il valore
     * @param string $field Il campo da estrarre
     *
     * @return mixed Il valore estratto
     */
    protected function extractValue(mixed $data, string $field): mixed
    {
        // Usa data_get di Laravel per accesso sicuro ai dati nidificati
        return data_get($data, $field, '');
    }

    /**
     * Converte EloquentCollection in Support\Collection mantenendo i dati.
     *
     * @param EloquentCollection<int, \Illuminate\Database\Eloquent\Model> $eloquentCollection
     * @return Collection<int|string, mixed>
     */
    protected function convertToSupportCollection(EloquentCollection $eloquentCollection): Collection
    {
        return Collection::make($eloquentCollection->toArray());
    }
=======
>>>>>>> aurmich/dev
}
