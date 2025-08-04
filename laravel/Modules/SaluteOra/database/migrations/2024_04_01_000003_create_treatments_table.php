<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Tenant\Models\Tenant;
use Modules\SaluteOra\Models\Patient;
<<<<<<< HEAD
use Modules\SaluteOra\Models\Doctor;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Models\Doctor;
=======
use Modules\SaluteOra\Models\Dentist;
>>>>>>> 54f4fa16 (.)
=======
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
>>>>>>> aurmich/dev
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    /**
     * Nome della tabella.
     *
     * @var string
     */
    protected string $table = 'treatments';
>>>>>>> 54f4fa16 (.)
=======
    
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
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
                $table->string('type');
                $table->text('description')->nullable();
                $table->text('notes')->nullable();
                $table->string('status')->default('pending');
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->decimal('cost', 10, 2)->nullable();
                $table->boolean('is_covered')->default(true);
                $table->boolean('is_pregnancy_safe')->default(false);
                $table->json('teeth_involved')->nullable();
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
<<<<<<< HEAD
};
=======
<<<<<<< HEAD
};
=======
};
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
