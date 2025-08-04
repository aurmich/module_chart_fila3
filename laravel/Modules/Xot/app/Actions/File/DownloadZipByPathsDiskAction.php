<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\BinaryFileResponse;
=======
>>>>>>> aurmich/dev

class DownloadZipByPathsDiskAction
{
    use QueueableAction;

<<<<<<< HEAD
    /**
     * Crea un file ZIP dai percorsi forniti e lo restituisce come download.
     *
     * @param array<string> $attachments Array di percorsi file
     * @param string $disk Nome del disco di storage
     * @return BinaryFileResponse|null Risposta di download o null se fallisce
     */
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
=======
    public function execute(array $attachments,string $disk)
>>>>>>> aurmich/dev
    {
        $zipFileName = 'temp_zip_' .uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;
        
        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new \ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);
        
        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');
        
        if ($zip->open($tempFilePath, \ZipArchive::CREATE) === TRUE) {
            foreach ($attachments as $attachment) {
                $filePath = $attachment;
                
                if (Storage::disk($disk)->exists($filePath)) {
                    $fileContent = Storage::disk($disk)->get($filePath);
<<<<<<< HEAD
                    if ($fileContent !== null) {
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                    }
                } else {
                    dddx(['filePath' => $filePath]);
=======
                    $zip->addFromString($attachment . '.pdf', $fileContent);
                }else{
                    dddx(['filePath'=>$filePath]);
>>>>>>> aurmich/dev
                }
            }
            $zip->close();
            
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            
<<<<<<< HEAD
            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
        
        return null;
=======
            // Usa Storage per il download e elimina dopo
            return Storage::disk('local')->download($zipPath, $downloadFileName, [
                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
>>>>>>> aurmich/dev
    }
}
