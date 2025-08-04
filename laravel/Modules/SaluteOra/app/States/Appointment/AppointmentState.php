<?php

declare(strict_types=1);

namespace Modules\SaluteOra\States\Appointment;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\ModelStates\State;
use Filament\Forms\Components;
use Spatie\ModelStates\StateConfig;
use Modules\Xot\States\XotBaseState;
use Modules\Xot\Contracts\StateContract;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Traits\TransTrait;
=======
=======
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)

/**
 * Abstract base class for appointment state management.
 *
 * Defines the state machine configuration and required methods
 * that must be implemented by each concrete state class.
<<<<<<< HEAD
 * @property string $name Il nome dello stato
 * @property string $value Il valore dello stato nel database
 */
abstract class AppointmentState extends XotBaseState 
{
    
=======
 */
abstract class AppointmentState extends State
{
<<<<<<< HEAD
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
    use TransTrait;
>>>>>>> 6953d97e (✨ (appointment-state-methods-fix.md): add documentation for fixing appointment state methods to ensure consistency and completeness of state behavior)
    /**
     * Configure the allowed state transitions.
     */
    public static function config(): StateConfig
<<<<<<< HEAD
        {
            return parent::config()
                ->default(Pending::class)
                
                // Pending transitions (In entrata)
                ->allowTransition(Pending::class, Confirmed::class, Transitions\PendingToConfirmed::class)
                ->allowTransition(Pending::class, Rejected::class, Transitions\PendingToRejected::class)
                
                // Confirmed transitions (Accettati)
                ->allowTransition(Confirmed::class, ReportPending::class, Transitions\ConfirmedToReportPending::class)
                ->allowTransition(Confirmed::class, Cancelled::class, Transitions\ConfirmedToCancelled::class)
                ->allowTransition(Confirmed::class, NoShow::class, Transitions\ConfirmedToNoShow::class)
                
                // NoShow transitions (gestione interna del conteggio)
                ->allowTransition(NoShow::class, Banned::class, Transitions\NoShowToBanned::class)
                
                // Completed transitions (Conclusi)
                //->allowTransition(Completed::class, RefundPending::class, Transitions\CompletedToRefundPending::class)
                //->allowTransition(Completed::class, ProBono::class, Transitions\CompletedToProBono::class)
                ->allowTransition(ReportCompleted::class, RefundPending::class, Transitions\ReportCompletedToRefundPending::class)
                ->allowTransition(ReportCompleted::class, ProBono::class, Transitions\ReportCompletedToProBono::class)
                
                // Report transitions
                ->allowTransition(ReportPending::class, ReportPending::class/*, Transitions\ReportPendingToReportCompleted::class*/)
                
                ->allowTransition(ReportPending::class, ReportCompleted::class, Transitions\ReportPendingToReportCompleted::class)
                
                // ReportCompleted transitions
                //->allowTransition(ReportCompleted::class, Completed::class, Transitions\ReportCompletedToCompleted::class)
                //->allowTransition(ReportCompleted::class, RefundPending::class, Transitions\ReportCompletedToRefundPending::class)
                //->allowTransition(ReportCompleted::class, ProBono::class, Transitions\ReportCompletedToProBono::class)
                
                // Refund transitions
                ->allowTransition(RefundPending::class, RefundAccepted::class, Transitions\RefundPendingToRefundAccepted::class)
                ->allowTransition(RefundPending::class, RefundToIntegrate::class, Transitions\RefundPendingToRefundToIntegrate::class)
                ->allowTransition(RefundPending::class, RefundCompleted::class, Transitions\RefundPendingToRefundCompleted::class)
                
                ->allowTransition(RefundAccepted::class, RefundCompleted::class, Transitions\RefundAcceptedToRefundCompleted::class)
                ->allowTransition(RefundToIntegrate::class, RefundCompleted::class, Transitions\RefundToIntegrateToRefundCompleted::class);
        
    }
    
   
=======
    {
        return parent::config()
            //->default(static::class === self::class ? Pending::class : static::class)
            ->default(Pending::class)
            // Pending transitions
            ->allowTransition(Pending::class, Confirmed::class, Transitions\PendingToConfirmed::class)
            //->allowTransition(Pending::class, Cancelled::class, Transitions\PendingToCancelled::class)
            ->allowTransition(Pending::class, Rejected::class, Transitions\PendingToRejected::class)

            // Confirmed transitions
            //->allowTransition(Confirmed::class, Scheduled::class, Transitions\ConfirmedToScheduled::class)
            //->allowTransition(Confirmed::class, Cancelled::class, Transitions\ConfirmedToCancelled::class)
            //->allowTransition(Confirmed::class, Rescheduled::class, Transitions\ConfirmedToRescheduled::class)
            ->allowTransition(Confirmed::class, Rejected::class, Transitions\ConfirmedToRejected::class)

            // Scheduled transitions
            ->allowTransition(Scheduled::class, InProgress::class, Transitions\ScheduledToInProgress::class)
            ->allowTransition(Scheduled::class, Cancelled::class, Transitions\ScheduledToCancelled::class)
            ->allowTransition(Scheduled::class, NoShow::class, Transitions\ScheduledToNoShow::class)
            ->allowTransition(Scheduled::class, Rescheduled::class, Transitions\ScheduledToRescheduled::class)

            // InProgress transitions
            ->allowTransition(InProgress::class, Completed::class, Transitions\InProgressToCompleted::class)
            
            // Rescheduled transitions
            ->allowTransition(Rescheduled::class, Confirmed::class, Transitions\RescheduledToConfirmed::class);
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Get the available statuses for the appointment.
     * 
     * @return array<class-string, string> Array of state classes and their display labels
     */
    public static function getStatuses(): array
    {
        // Create a mock model to pass to state constructors
        $model = new class {
            public function getMorphClass() {
                return 'appointment';
            }
        };
        
        return [
            Pending::class => (new Pending($model))->label(),
            Confirmed::class => (new Confirmed($model))->label(),
            Scheduled::class => (new Scheduled($model))->label(),
            InProgress::class => (new InProgress($model))->label(),
            Completed::class => (new Completed($model))->label(),
            Cancelled::class => (new Cancelled($model))->label(),
            Rejected::class => (new Rejected($model))->label(),
            NoShow::class => (new NoShow($model))->label(),
            Rescheduled::class => (new Rescheduled($model))->label(),
        ];
    }
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications)
=======
    
>>>>>>> 13ea6524 (phpstan)
=======
    abstract public function label(): string;
    abstract public function color(): string;
    abstract public function icon(): string;
    abstract public function modalHeading(): string;
    abstract public function modalDescription(): string;
>>>>>>> 9fa97684 (✨ (appointment states): add complete standardization for appointment states to ensure consistency and improve maintainability)
}
