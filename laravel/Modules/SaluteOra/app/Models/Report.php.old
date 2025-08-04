<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Models;

<<<<<<< HEAD
use Modules\User\Models\BaseProfile;
use Illuminate\Database\Eloquent\Builder;
use Modules\SaluteOra\Enums\DayFrequencyEnum;
use Modules\SaluteOra\Enums\MedicalConditionEnum;
use Modules\SaluteOra\Enums\OccurrenceFrequencyEnum;


/**
 * Modello Report.
 *
 * @property int $id
 * @property int $patient_id
 * @property int $appointment_id
 * @property int $doctor_id
 * @property string $status
 * @property bool $has_mouth_or_teeth_pain
 * @property string $mouth_teeth_pain_frequency
 * @property int $pregnancy_month
 * @property int $pregnancy_week
 * @property string $teeth_brushing_frequency
 * @property bool $smokes
 * @property bool $visits_dentist_yearly
 * @property bool $has_diseases
 * @property array<int, MedicalConditionEnum> $specify_diseases
 * @property bool $follows_diet_rules
 * @property bool $uses_asl_clinic_for_dental_care
 * @property bool $missing_teeth
 * @property array $specify_missing_teeth
 * @property string|null $more_info_missing_teeth
 * @property bool $decayed_teeth
 * @property array $specify_decayed_teeth
 * @property string|null $more_info_decayed_teeth
 * @property bool $has_fixed_prosthesis_or_implants
 * @property array $specify_prosthesis_or_implants
 * @property string|null $more_info_prosthesis
 * @property bool $has_tartar
 * @property array $specify_tartar
 * @property string|null $more_info_tartar
 * @property bool $has_plaque
 * @property array $specify_plaque
 * @property string|null $more_info_plaque
 * @property bool $needs_more_dental_care
 * @property string|null $further_notes
 * @property string|null $invoice
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Modules\SaluteOra\Models\Patient|null $patient
 * @property-read \Modules\SaluteOra\Models\Doctor|null $doctor
 * @property-read \Modules\SaluteOra\Models\Appointment|null $appointment
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property string|null $period_start
 * @property string|null $period_end
 * @property string|null $parameters
 * @property string|null $last_generated_at
 * @property string|null $created_by
 * @property string|null $tenant_id
 * @property string|null $updated_by
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Modules\SaluteOra\Database\Factories\ReportFactory factory($count = null, $state = [])
 * @method static Builder<static>|Report newModelQuery()
 * @method static Builder<static>|Report newQuery()
 * @method static Builder<static>|Report query()
 * @method static Builder<static>|Report whereAppointmentId($value)
 * @method static Builder<static>|Report whereCreatedAt($value)
 * @method static Builder<static>|Report whereCreatedBy($value)
 * @method static Builder<static>|Report whereDecayedTeeth($value)
 * @method static Builder<static>|Report whereDeletedAt($value)
 * @method static Builder<static>|Report whereDeletedBy($value)
 * @method static Builder<static>|Report whereDescription($value)
 * @method static Builder<static>|Report whereFollowsDietRules($value)
 * @method static Builder<static>|Report whereFurtherNotes($value)
 * @method static Builder<static>|Report whereHasDiseases($value)
 * @method static Builder<static>|Report whereHasFixedProsthesisOrImplants($value)
 * @method static Builder<static>|Report whereHasMouthOrTeethPain($value)
 * @method static Builder<static>|Report whereHasPlaque($value)
 * @method static Builder<static>|Report whereHasTartar($value)
 * @method static Builder<static>|Report whereId($value)
 * @method static Builder<static>|Report whereInvoice($value)
 * @method static Builder<static>|Report whereLastGeneratedAt($value)
 * @method static Builder<static>|Report whereMissingTeeth($value)
 * @method static Builder<static>|Report whereMoreInfoDecayedTeeth($value)
 * @method static Builder<static>|Report whereMoreInfoMissingTeeth($value)
 * @method static Builder<static>|Report whereMoreInfoPlaque($value)
 * @method static Builder<static>|Report whereMoreInfoProsthesis($value)
 * @method static Builder<static>|Report whereMoreInfoTartar($value)
 * @method static Builder<static>|Report whereMouthTeethPainFrequency($value)
 * @method static Builder<static>|Report whereName($value)
 * @method static Builder<static>|Report whereNeedsMoreDentalCare($value)
 * @method static Builder<static>|Report whereParameters($value)
 * @method static Builder<static>|Report wherePatientId($value)
 * @method static Builder<static>|Report wherePeriodEnd($value)
 * @method static Builder<static>|Report wherePeriodStart($value)
 * @method static Builder<static>|Report wherePregnancyMonth($value)
 * @method static Builder<static>|Report wherePregnancyWeek($value)
 * @method static Builder<static>|Report whereSmokes($value)
 * @method static Builder<static>|Report whereSpecifyDecayedTeeth($value)
 * @method static Builder<static>|Report whereSpecifyDiseases($value)
 * @method static Builder<static>|Report whereSpecifyMissingTeeth($value)
 * @method static Builder<static>|Report whereSpecifyPlaque($value)
 * @method static Builder<static>|Report whereSpecifyProsthesisOrImplants($value)
 * @method static Builder<static>|Report whereSpecifyTartar($value)
 * @method static Builder<static>|Report whereStatus($value)
 * @method static Builder<static>|Report whereTeethBrushingFrequency($value)
 * @method static Builder<static>|Report whereTenantId($value)
 * @method static Builder<static>|Report whereType($value)
 * @method static Builder<static>|Report whereUpdatedAt($value)
 * @method static Builder<static>|Report whereUpdatedBy($value)
 * @method static Builder<static>|Report whereUsesAslClinicForDentalCare($value)
 * @method static Builder<static>|Report whereVisitsDentistYearly($value)
 * @mixin \Eloquent
 */
class Report extends BaseModel{
    
     /**
     * Gli attributi che sono mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id', // ID
        'patient_id', // ID Paziente
        'appointment_id', // ID Appuntamento
        'has_mouth_or_teeth_pain', // Ha sofferto di dolore a bocca o denti negli ultimi 12 mesi
        'mouth_teeth_pain_frequency', // Quanto spesso
        'pregnancy_month', // Mese Gravidanza
        'pregnancy_week', // Settimana Gravidanza
        'teeth_brushing_frequency', // Numero di volte in cui si lava i denti
        'smokes', // Fuma
        'visits_dentist_yearly', // Si reca dal dentista almeno una volta l'anno
        'has_diseases', // È affetta da qualche malattia
        'specify_diseases', // Se sì, specificare
        'follows_diet_rules', // Segue regole di alimentazione
        'uses_asl_clinic_for_dental_care', // In caso di necessità si rivolge ad ambulatorio ASL?
        'missing_teeth', // Ha denti mancanti?
        'specify_missing_teeth', // Se sì, specificare
        'more_info_missing_teeth', // Specifica ulteriore
        'decayed_teeth', // Ha denti cariati?
        'specify_decayed_teeth', // Se sì, specificare
        'more_info_decayed_teeth', // Specifica ulteriore
        'has_fixed_prosthesis_or_implants', // Ha protesi fissa o impianti?
        'specify_prosthesis_or_implants', // Se sì, specificare
        'more_info_prosthesis', // Specifica ulteriore
        'has_tartar', // Ha tartaro?
        'specify_tartar', // Se sì, specificare
        'more_info_tartar', // Specifica ulteriore
        'has_plaque', // Ha placca?
        'specify_plaque', // Se sì, specificare
        'more_info_plaque', // Specifica ulteriore
        'needs_more_dental_care', // La Paziente necessita di ulteriori cure odontoiatriche?
        'further_notes', // Inserisci ulteriori specifiche

        'invoice', //file fattura
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string|class-string>
     */
    public function casts(): array 
    {
        return [
            // Boolean casts
            'has_mouth_or_teeth_pain' => 'boolean',
            'smokes' => 'boolean',
            'visits_dentist_yearly' => 'boolean',
            'has_diseases' => 'boolean',
            'follows_diet_rules' => 'boolean',
            'uses_asl_clinic_for_dental_care' => 'boolean',
            'missing_teeth' => 'boolean',
            'decayed_teeth' => 'boolean',
            'has_fixed_prosthesis_or_implants' => 'boolean',
            'has_tartar' => 'boolean',
            'has_plaque' => 'boolean',
            'needs_more_dental_care' => 'boolean',
            
            // Enum casts - these use PHP 8.1+ backed enums (string-based)
            'mouth_teeth_pain_frequency' => OccurrenceFrequencyEnum::class,
            'teeth_brushing_frequency' => DayFrequencyEnum::class,
            'specify_diseases' => 'array', // Array of MedicalConditionEnum values
            'specify_missing_teeth' => 'array', // Array of ToothFDIEnum values
            'specify_decayed_teeth' => 'array', // Array of ToothFDIEnum values
            'specify_prosthesis_or_implants' => 'array', // Array of ToothFDIEnum values
            'specify_tartar' => 'array', // Array of ToothFDIEnum values
            'specify_plaque' => 'array', // Array of ToothFDIEnum values
            
            // Integer casts
            'pregnancy_month' => 'integer',
            'pregnancy_week' => 'integer',
        ];
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;
use Modules\Tenant\Models\Tenant;

/**
 * Report model per la gestione dei report statistici e analitici.
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property \Carbon\Carbon $period_start
 * @property \Carbon\Carbon $period_end
 * @property string $status
 * @property int $created_by
 * @property int|null $tenant_id
 * @property array|null $parameters
 * @property \Carbon\Carbon|null $last_generated_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ReportData> $reportData
 * @property-read User $creator
 * @property-read Tenant|null $tenant
 * @property string|null $updated_by
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read int|null $report_data_count
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Modules\SaluteOra\Database\Factories\ReportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report inPeriod(string $startDate, string $endDate)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report ofType(string $type)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereLastGeneratedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report wherePeriodEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report wherePeriodStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report withStatus(string $status)
 * @mixin \Eloquent
 */
class Report extends BaseModel
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'type',
        'period_start',
        'period_end',
        'status',
        'created_by',
        'tenant_id',
        'parameters',
        'last_generated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'period_start' => 'datetime',
            'period_end' => 'datetime',
            'parameters' => 'array',
            'last_generated_at' => 'datetime',
        ]);
    }

    /**
     * Relazione con i dati dettagliati del report.
     *
     * @return HasMany<ReportData>
     */
    public function reportData(): HasMany
    {
        return $this->hasMany(ReportData::class);
    }

    /**
     * Relazione con l'utente che ha creato il report.
     *
     * @return BelongsTo<User, static>
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relazione con il tenant.
     *
     * @return BelongsTo<Tenant, static>
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    /**
     * Scope per filtrare i report per tipo.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope per filtrare i report per periodo.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $startDate
     * @param string $endDate
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInPeriod($query, string $startDate, string $endDate)
    {
        return $query->where('period_start', '>=', $startDate)
                     ->where('period_end', '<=', $endDate);
    }

    /**
     * Scope per filtrare i report per stato.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithStatus($query, string $status)
    {
        return $query->where('status', $status);
>>>>>>> 54f4fa16 (.)
    }
}
