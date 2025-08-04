<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\SaluteOra\Models\BasePivot;
<<<<<<< HEAD
use Parental\HasChildren;


/**
 * @property string $id
 * @property string|null $type
 * @property string $user_id
 * @property string $studio_id
 * @property array<array-key, mixed>|null $schedule Orari del dottore in questo studio
 * @property bool $is_primary Indica se è lo studio principale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereIsPrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereSchedule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereStudioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudioUser whereUserId($value)
 * @property-read \Modules\SaluteOra\Models\Studio|null $studio
 * @property-read \Modules\SaluteOra\Models\User|null $user
 * @mixin \Eloquent
 */
class StudioUser extends BasePivot
{
    use HasChildren;


    protected $table = 'studio_user';
    /**
     * Gli attributi che sono mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        //'doctor_id',
        'id',
=======

/**
 * Modello pivot per la relazione many-to-many tra Doctor e Studio.
 *
 * IMPORTANTE: Questa relazione attraversa database differenti:
 * - Doctor risiede nel database 'user'
 * - Studio risiede nel database 'salute_ora'
 * - DoctorStudio deve utilizzare la stessa connessione di Studio
 *
 * Estende BasePivot per garantire compatibilità con belongsToManyX e policy Xot.
 *
 * @property int $id
 * @property string $doctor_id
 * @property string $studio_id
 * @property array|null $schedule
 * @property bool $is_primary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Modules\SaluteOra\Models\Doctor $doctor
 * @property-read \Modules\SaluteOra\Models\Studio $studio
 */
class StudioUser extends BasePivot
{
    /**
     * In questo caso specifico, dobbiamo dichiarare esplicitamente la tabella e la connection
     * perché stiamo lavorando con una relazione cross-database.
     *
     * @var string
     */
    protected $table = 'doctor_studio';

    /**
     * La connection deve essere la stessa di Studio, non quella di Doctor.
     * Questo è cruciale per relazioni cross-database.
     *
     * @var string
     */
    protected $connection = 'salute_ora';

    /**
     * Gli attributi che sono mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        //'doctor_id',
>>>>>>> 9d3532ab (✨ (StudioUser.php): introduce StudioUser model to manage many-to-many)
        'user_id',
        'studio_id',
        'schedule',
        'is_primary',
    ];

    /**
     * Gli attributi che devono essere convertiti.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'schedule' => 'array',
            'is_primary' => 'boolean',
        ]);
    }

<<<<<<< HEAD

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function studio(): BelongsTo
    {
        return $this->belongsTo(Studio::class);
    }


=======
    /**
     * Ottiene il dottore associato a questa relazione.
     * Specifica esplicitamente la chiave esterna e la chiave primaria
     * per gestire la relazione cross-database (DB user <-> DB salute_ora).
     *
     * @return BelongsTo<Doctor, DoctorStudio>
     */
    public function doctor(): BelongsTo
    {
        // Specificare esplicitamente la chiave esterna e la connection corretta
        // perché questa relazione attraversa database differenti
        return $this->belongsTo(
            Doctor::class,
            'doctor_id',
            'id',
            'doctor'
        )->withoutGlobalScopes();
    }

    /**
     * Ottiene lo studio associato a questa relazione.
     * Questa relazione rimane nello stesso database.
     *
     * @return BelongsTo<Studio, DoctorStudio>
     */
    public function studio(): BelongsTo
    {
        // La relazione con Studio è nello stesso database, quindi è più semplice
        return $this->belongsTo(Studio::class, 'studio_id', 'id', 'studio');
    }
>>>>>>> 9d3532ab (✨ (StudioUser.php): introduce StudioUser model to manage many-to-many)
}
