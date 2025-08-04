<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\DoctorResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Filament\Facades\Filament;
use Modules\SaluteOra\Models\Doctor;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Filament\Support\Facades\FilamentView;
use Modules\SaluteOra\States\User\UserState;
use Modules\Xot\Filament\Widgets\StateOverviewWidget;
use Modules\SaluteOra\Filament\Resources\DoctorResource;
use Modules\Media\Filament\Tables\Columns\IconMediaColumn;
use Modules\Xot\Actions\File\DownloadZipByPathsDiskAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\ListUsers;

class ListDoctors extends ListUsers
{
    protected static string $resource = DoctorResource::class;

    public function getTableColumns(): array
    {
        $columns= parent::getTableColumns();   
        $columns=Arr::except($columns,['type']);
        
        $attachments = Doctor::getAttachments();

        
        foreach ($attachments as $attachment) {
            $columns[$attachment] = IconMediaColumn::make($attachment);
        }
        /*
        $columns['certifications'] = IconColumn::make('certifications')
        ->icon('heroicon-o-document-text')
        ->tooltip(function($record,$state, $rowLoop){
            return 'Download Zip';
        })->action(function ($record,$state){
            return app(DownloadZipByPathsDiskAction::class)->execute($state,'local');
        });
        */
        return $columns;
    }

    public function getHeaderWidgets(): array
    {
        /**@phpstan-ignore-next-line */
        return [
            //Widgets\AppointmentOverviewWidget::make(['paperino'=>'pluto']),
            StateOverviewWidget::make(['stateClass'=>UserState::class,'model'=>Doctor::class]),
        ];
    }

   
=======
=======
=======
use Illuminate\Support\Arr;
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
use Filament\Facades\Filament;
=======
>>>>>>> f3e4ec66 (.)
=======
use Filament\Tables\Columns\IconColumn;
>>>>>>> f2c2831f (✨ (doctor.php, RegisterAction.php, DoctorResource.php, ListDoctors.php, Doctor.php, User.php, migrations, DownloadZipByPathsDiskAction.php): add support for certifications and file uploads for doctors, enhancing the registration and management process)
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Filament\Support\Facades\FilamentView;
>>>>>>> 2bcfd382 (fix Address)
use Modules\SaluteOra\Filament\Resources\DoctorResource;
use Modules\Media\Filament\Tables\Columns\IconMediaColumn;
use Modules\Xot\Actions\File\DownloadZipByPathsDiskAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\ListUsers;

class ListDoctors extends ListUsers
{
    protected static string $resource = DoctorResource::class;

    public function getTableColumns(): array
    {
        $columns= parent::getTableColumns();   
        $columns=Arr::except($columns,['type']);
        
        $attachments = Doctor::$attachments;

        
        foreach ($attachments as $attachment) {
            $columns[$attachment] = IconMediaColumn::make($attachment);
        }
        /*
        $columns['certifications'] = IconColumn::make('certifications')
        ->icon('heroicon-o-document-text')
        ->tooltip(function($record,$state, $rowLoop){
            return 'Download Zip';
        })->action(function ($record,$state){
            return app(DownloadZipByPathsDiskAction::class)->execute($state,'local');
        });
        */
        return $columns;
    }
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======

   
>>>>>>> 2bcfd382 (fix Address)
}
