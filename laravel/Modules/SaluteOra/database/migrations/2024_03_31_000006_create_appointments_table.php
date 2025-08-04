<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Doctor;
<<<<<<< HEAD
=======
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
use Modules\SaluteOra\Models\Dentist;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Studio;
use Modules\Tenant\Models\Tenant;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
<<<<<<< HEAD
    
=======
    /**
     * Nome della tabella.
     *
     * @var string
     */
    protected string $table = 'appointments';
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    
    /**
     * Classe del modello associato.
     *
     * @var string|null
     */
    protected ?string $model_class = Appointment::class;
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $table->foreignIdFor(Patient::class);
                $table->foreignIdFor(Doctor::class);
=======
                $this->foreignIdFor($table,Tenant::class);
                $this->foreignIdFor($table,Patient::class);
                $this->foreignIdFor($table,Dentist::class);
>>>>>>> 54f4fa16 (.)
=======
                $table->foreignIdFor(Tenant::class);
                $table->foreignIdFor(Patient::class);
                $table->foreignIdFor(Dentist::class);
>>>>>>> 35a7c2ee (- homeboarding chiara)
=======
                //$table->foreignIdFor(Tenant::class);
                $table->foreignIdFor(Patient::class,'patient_id');
                $table->foreignIdFor(Doctor::class,'doctor_id');
                $table->foreignIdFor(Studio::class,'studio_id');
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
                $table->date('date');
                $table->time('start_time');
                $table->time('end_time');
                $table->string('type')->nullable();
                $table->string('status')->default('scheduled');
                $table->text('notes')->nullable();
            }
        );
        
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // Aggiunta dei timestamp e soft delete
                $this->updateTimestamps($table, false);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                
                // Aggiunta dei campi per il calendario
                if (!$this->hasColumn('studio_id')) {
                    $table->foreignId('studio_id')->nullable()->constrained('studios')->onDelete('cascade');
                }

                if (!$this->hasColumn('title')) {
                    $table->string('title')->nullable();
                }

                if (!$this->hasColumn('start_datetime')) {
                    $table->dateTime('start_datetime')->nullable();
                }

                if (!$this->hasColumn('end_datetime')) {
                    $table->dateTime('end_datetime')->nullable();
                }

                if (!$this->hasColumn('emergency')) {
                    $table->boolean('emergency')->default(false);
                }

                // Indici per migliorare le prestazioni delle query sul calendario
                if (!$this->hasIndex('appointments_start_datetime_index')) {
                    $table->index('start_datetime', 'appointments_start_datetime_index');
                }

                if (!$this->hasIndex('appointments_end_datetime_index')) {
                    $table->index('end_datetime', 'appointments_end_datetime_index');
                }

                if (!$this->hasIndex('appointments_type_index')) {
                    $table->index('type', 'appointments_type_index');
                }

                if (!$this->hasIndex('appointments_status_index')) {
                    $table->index('status', 'appointments_status_index');
                }
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
            }
        );
    }

<<<<<<< HEAD
<<<<<<< HEAD
   
=======

>>>>>>> 54f4fa16 (.)
=======
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->tableDrop();
    }
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
};
