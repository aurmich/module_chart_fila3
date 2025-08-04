<?php

declare(strict_types=1);

use Modules\Tenant\Models\Tenant;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Dentist;
use Modules\SaluteOra\Models\Patient;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Modules\SaluteOra\Models\Appointment;
<<<<<<< HEAD
=======
=======
=======
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
use Modules\SaluteOra\Models\Dentist;
use Modules\SaluteOra\Models\Patient;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
>>>>>>> aurmich/dev
use Illuminate\Database\Migrations\Migration;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
>>>>>>> aurmich/dev
            //$this->foreignIdFor($table,Tenant::class);
            $this->foreignIdFor($table,Patient::class,'patient_id');
            $this->foreignIdFor($table,Doctor::class,'doctor_id');
            $this->foreignIdFor($table,Appointment::class,'appointment_id');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            $this->foreignIdFor($table,Tenant::class);
            $this->foreignIdFor($table,Patient::class);
            $this->foreignIdFor($table,Dentist::class);
            $this->foreignIdFor($table,Appointment::class);
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
>>>>>>> aurmich/dev
            $table->string('current_step')->default('patient_info');
            $table->string('status')->default('draft');
            $table->json('step_data')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('last_interaction_at')->nullable();
            $table->json('meta')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->string('session_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('session_id');
            $table->index(['tenant_id', 'status']);
            $table->index(['tenant_id', 'created_at']);
        }
    );
         // -- UPDATE --
         $this->tableUpdate(
            function (Blueprint $table): void {
                // Aggiunta dei timestamp e soft delete
                $this->updateTimestamps($table, true);
            }
        );
    }

    
};
