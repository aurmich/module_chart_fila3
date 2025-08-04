<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\BinaryFileResponse;
=======
>>>>>>> aurmich/dev
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
use Symfony\Component\HttpFoundation\BinaryFileResponse;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)

class DownloadZipByPathsDiskAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
    /**
     * Crea un file ZIP dai percorsi forniti e lo restituisce come download.
     *
     * @param array<string> $attachments Array di percorsi file
     * @param string $disk Nome del disco di storage
     * @return BinaryFileResponse|null Risposta di download o null se fallisce
     */
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
<<<<<<< HEAD
=======
    public function execute(array $attachments,string $disk)
>>>>>>> aurmich/dev
=======
    public function execute(array $attachments,string $disk)
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                    if ($fileContent !== null) {
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                    }
                } else {
                    dddx(['filePath' => $filePath]);
<<<<<<< HEAD
=======
                    $zip->addFromString($attachment . '.pdf', $fileContent);
                }else{
                    dddx(['filePath'=>$filePath]);
>>>>>>> aurmich/dev
=======
                    $zip->addFromString($attachment . '.pdf', $fileContent);
                }else{
                    dddx(['filePath'=>$filePath]);
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                }
            }
            $zip->close();
            
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
        
        return null;
=======
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
            // Usa Storage per il download e elimina dopo
            return Storage::disk('local')->download($zipPath, $downloadFileName, [
                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
=======
            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
        
        return null;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
    }
}
