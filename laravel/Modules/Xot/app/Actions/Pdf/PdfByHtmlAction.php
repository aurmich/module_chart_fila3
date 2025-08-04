<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

use Spipu\Html2Pdf\Html2Pdf;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PdfByHtmlAction
{
    use QueueableAction;

    public PdfEngineEnum $engine;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    /**
     * Genera un PDF dall'HTML fornito.
     *
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
     * @param string $disk Disco di storage
     * @param string $out Tipo di output (download, path, etc.)
     * @param string $orientation Orientamento (P=Portrait, L=Landscape)
     * @param PdfEngineEnum $engine Engine da utilizzare
     * @return string|BinaryFileResponse
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    public function execute(
        string $html,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download',
        string $orientation = 'P',
        PdfEngineEnum $engine = PdfEngineEnum::SPIPU,
    ): string|BinaryFileResponse {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        $data = PdfData::from([
            'html' => $html,
            'filename' => $filename,
            'disk' => $disk,
            'out' => $out,
            'orientation' => $orientation,
            'engine' => $engine,
        ]);
        
        // Genera il PDF utilizzando PdfData
        $data->fromHtml($html);
        
        // Restituisce il risultato in base al tipo di output richiesto
        return match ($out) {
            'download' => $data->download(),
            'path' => $data->getPath(),
            default => $data->getPath(),
        };
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 54f4fa16 (.)
        return $data = PdfData::from([
            'html'->$html,
            'filename' -> $filename,
            'disk' -> $disk,
            'out' -> $out,
            'orientation' -> $orientation,
            'engine' -> $engine,
            ]);
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }
}
