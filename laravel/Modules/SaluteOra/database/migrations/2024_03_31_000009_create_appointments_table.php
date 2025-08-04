<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Patient;
<<<<<<< HEAD
=======
use Modules\SaluteOra\Models\Studio;
>>>>>>> aurmich/dev
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
    
    /**
     * Classe del modello associato.
     *
     * @var string|null
     */
    protected ?string $model_class = Appointment::class;
>>>>>>> aurmich/dev

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
                $table->foreignIdFor(Patient::class);
                $table->foreignIdFor(Doctor::class);
=======
                //$table->foreignIdFor(Tenant::class);
<<<<<<< HEAD:laravel/Modules/SaluteOra/database/migrations/2024_03_31_000006_create_appointments_table.php
                $table->foreignIdFor(Patient::class,'patient_id');
                $table->foreignIdFor(Doctor::class,'doctor_id');
                $table->foreignIdFor(Studio::class,'studio_id');
>>>>>>> aurmich/dev
=======
                $table->foreignIdFor(Patient::class,'patient_id')->nullable();
                $table->foreignIdFor(Doctor::class,'doctor_id')->nullable();
                $table->foreignIdFor(Studio::class,'studio_id')->nullable();
>>>>>>> 7c72aaf5 (✨ (FindDoctorAndAppointmentWidget): implement appointment state management using State Machine pattern for better tracking and notifications):laravel/Modules/SaluteOra/database/migrations/2024_03_31_000008_create_appointments_table.php
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

                if (!$this->hasColumn('patient_id')) {
                    $table->foreignIdFor(Patient::class,'patient_id')->nullable();
                }
                if (!$this->hasColumn('doctor_id')) {
                    $table->foreignIdFor(Doctor::class,'doctor_id')->nullable();
                }
                

                if (!$this->hasColumn('emergency')) {
                    $table->boolean('emergency')->default(false);
                }

                if (!$this->hasColumn('state')) {
                    $table->string('state')->nullable();
                }

                if (!$this->hasColumn('starts_at')) {
                    $table->dateTimeTz('starts_at')->nullable();
                }
                if (!$this->hasColumn('ends_at')) {
                    $table->dateTimeTz('ends_at')->nullable();
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
            }
        );
    }

<<<<<<< HEAD
   
=======
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->tableDrop();
    }
>>>>>>> aurmich/dev
};
