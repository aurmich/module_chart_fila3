<?php

namespace Modules\SaluteMo\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Modules\SaluteOra\Enums\UserStateEnum;
use Filament\Tables\Actions as TableActions;
use Modules\SaluteOra\States\User\UserState;
use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\UI\Filament\Tables\Columns\IconStateColumn;
use Modules\UI\Filament\Tables\Columns\SelectStateColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\User\Filament\Resources\UserResource\Pages\BaseListUsers;
use Modules\User\Filament\Resources\UserResource\Pages\ListUsers as UserListUsers;

class ListUsers extends BaseListUsers
{
    protected static string $resource = UserResource::class;

   public function getTableColumns(): array
   {

    $parentColumns=parent::getTableColumns();
    unset($parentColumns['name']);
    return [
        ...$parentColumns,
        'first_name' => TextColumn::make('first_name')
                ->searchable(),
        'last_name' => TextColumn::make('last_name')
                ->searchable(),

        'type'=>SelectColumn::make('type')->options(UserTypeEnum::class),
        //'state'=>SelectStateColumn::make('state'),
        //'state'=>SelectColumn::make('state')->options(UserStateEnum::class)
        //'state'=>SelectColumn::make('state')->options(UserState::class)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'state'=>IconStateColumn::make('state'),
=======
        IconStateColumn::make('state'),
>>>>>>> c6edea7c (.)
=======
        'state' => IconStateColumn::make('state'),
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
        IconStateColumn::make('state'),
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
        'state'=>IconStateColumn::make('state'),
>>>>>>> bfe064b3 (♻️ (DoctorsRelationManager.php, ListUsers.php, BaseListUsers.php): update PHPDoc return types for better type safety and clarity)

    ];
   }

<<<<<<< HEAD
    /**
     * @return array<\Filament\Tables\Actions\Action>
     */
=======
>>>>>>> c6edea7c (.)
    public function getTableActions(): array
    {
        return [
            //...parent::getTableActions(),

           
        ];
    }
}
