<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Forms\Get;
use Modules\SaluteOra\Models\Admin;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Patient;
use Filament\Forms\Components\DatePicker;
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\States\User\UserState;
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Widgets\StatesChartWidget;
use Modules\Xot\Filament\Widgets\ModelTrendChartWidget;
use Modules\SaluteMo\Filament\Widgets\UserStatesChartWidget;
use Modules\SaluteMo\Filament\Widgets\DoctorStatesChartWidget;
use Modules\SaluteMo\Filament\Widgets\AppointmentStatesChartWidget;
use Modules\User\Filament\Widgets\UserTypeRegistrationsChartWidget;
use Modules\SaluteMo\Filament\Widgets\AppointmentCreationChartWidget;
use Modules\SaluteMo\Filament\Widgets\DoctorRegistrationsChartWidget;
use Modules\SaluteMo\Filament\Widgets\PatientRegistrationsChartWidget;
use Modules\SaluteOra\States\Appointment\AppointmentState;
<<<<<<< HEAD
=======
=======
use Filament\Pages\Dashboard as FilamentDashboard;
=======
use Modules\Xot\Filament\Pages\XotBaseDashboard;
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
use Illuminate\Contracts\View\View;
use Modules\SaluteMo\Filament\Widgets\StatsOverview;
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
>>>>>>> aurmich/dev

/**
 * Dashboard amministrativa per il modulo SaluteMo.
 *
 * Entry point per widget, overview e navigazione amministrativa.
 * Titolo e descrizione sono presi dai file di traduzione.
 *
 * @package Modules\SaluteMo\Filament\Pages
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
class Dashboard extends XotBaseDashboard
{
    

    public function getFiltersFormSchema():array{
        return [
           /*
            DatePicker::make('startDate')
                ->maxDate(fn (Get $get) => $get('endDate') ?: now()),
            DatePicker::make('endDate')
                ->minDate(fn (Get $get) => $get('startDate') ?: now())
                ->maxDate(now()),
            */
        ];
<<<<<<< HEAD
    }

=======
=======
class Dashboard extends FilamentDashboard
=======
class Dashboard extends XotBaseDashboard
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
{
    protected static ?int $navigationSort = 1;

   
    public  function getWidgets(): array{
        return [];
    }
<<<<<<< HEAD

    /**
     * Restituisce la descrizione della dashboard.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return __('salutemo::dashboard.description');
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
    }

=======
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
    /**
     * Widget da visualizzare nell'header della dashboard.
     *
     * @return array<class-string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public function getHeaderWidgets(): array
    {
        return [
           
<<<<<<< HEAD
=======
=======
    protected function getHeaderWidgets(): array
    {
        return [
<<<<<<< HEAD
            StatsOverview::class,
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
=======
            //StatsOverview::class,
>>>>>>> 522e16e6 (✨ (Dashboard.php): refactor Dashboard class to extend XotBaseDashboard for better structure)
>>>>>>> aurmich/dev
        ];
    }

    /**
     * Widget da visualizzare nel footer della dashboard.
     *
     * @return array<class-string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public function getFooterWidgets(): array
    {
        /**@phpstan-ignore-next-line */
        return [
            UserTypeRegistrationsChartWidget::make(['model' => Patient::class]),
            StatesChartWidget::make(['stateClass'=>UserState::class,'model'=>Patient::class]), 

            UserTypeRegistrationsChartWidget::make(['model' => Doctor::class]),
            StatesChartWidget::make(['stateClass'=>UserState::class,'model'=>Doctor::class]), 

            UserTypeRegistrationsChartWidget::make(['model' => Admin::class]),
            StatesChartWidget::make(['stateClass'=>UserState::class,'model'=>Admin::class]), 
            
            ModelTrendChartWidget::make(['model' => Appointment::class]),
            StatesChartWidget::make(['stateClass'=>AppointmentState::class,'model'=>Appointment::class]), 
            /*
            UserTypeRegistrationsChartWidget::make(['model' => Doctor::class]),
            UserTypeRegistrationsChartWidget::make(['model' => Admin::class]),
            */
            /*
            PatientRegistrationsChartWidget::class,
            UserStatesChartWidget::class,
            DoctorRegistrationsChartWidget::class,
            DoctorStatesChartWidget::class,
            AppointmentCreationChartWidget::class,
            AppointmentStatesChartWidget::class,
            */
        ];
    }

    /**
     * Widget da visualizzare nella dashboard (metodo richiesto da Filament).
     *
     * @return array<class-string>
     */
    public function getWidgets(): array
    {
        return [
            // Widget generali della dashboard
        ];
<<<<<<< HEAD
=======
=======
    protected function getFooterWidgets(): array
    {
        return [];
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
>>>>>>> aurmich/dev
    }
}
