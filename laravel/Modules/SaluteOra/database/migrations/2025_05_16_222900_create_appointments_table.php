<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::connection('mysql')->hasTable('appointments')) {
            Schema::connection('mysql')->create('appointments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('patient_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                $table->foreignId('studio_id')->nullable()->constrained('studios')->onDelete('cascade');
                $table->string('title')->nullable();
                $table->dateTime('start_time')->nullable();
                $table->dateTime('end_time')->nullable();
                $table->string('type')->default('consultation');
                $table->string('status')->default('scheduled');
                $table->boolean('emergency')->default(false);
<<<<<<< HEAD
                $table->text('notes')->nullable();
                $table->timestamps();

                // Indici per performance e query calendar
                $table->index(['start_time', 'end_time']);
                $table->index(['studio_id', 'start_time']);
                $table->index(['doctor_id', 'start_time']);
                $table->index(['patient_id', 'start_time']);
                $table->index(['type', 'status']);
                $table->index('emergency');
=======
                $table->dateTime('appointment_date');
                $table->dateTime('appointment_time');
                $table->enum('status', ['pending', 'confirmed', 'cancelled', 'rejected'])->default('pending');
                $table->text('reason')->nullable();
                $table->text('notes')->nullable();
                $table->timestamps();
>>>>>>> 54f4fa16 (.)
=======
                $table->text('notes')->nullable();
                $table->timestamps();

                // Indici per performance e query calendar
                $table->index(['start_time', 'end_time']);
                $table->index(['studio_id', 'start_time']);
                $table->index(['doctor_id', 'start_time']);
                $table->index(['patient_id', 'start_time']);
                $table->index(['type', 'status']);
                $table->index('emergency');
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql')->dropIfExists('appointments');
    }
};
