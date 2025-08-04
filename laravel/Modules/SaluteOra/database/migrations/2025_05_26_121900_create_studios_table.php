<?php

<<<<<<< HEAD
declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\SaluteOra\Models\Studio;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    /**
     * Nome della tabella.
     *
     * @var string
     */
    protected string $table = 'studios';

    /**
     * Classe del modello associato.
     *
     * @var string|null
     */
    protected ?string $model_class = Studio::class;

    /**
=======
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
>>>>>>> 2099645a (.)
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<< HEAD
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
                $table->string('name');
                $table->string('phone', 30)->nullable();
                $table->string('email', 100)->nullable();
                $table->string('website')->nullable();
                $table->string('registration_number', 50)->nullable();
                $table->string('vat_number', 30)->nullable();
                $table->text('description')->nullable();
                $table->json('opening_hours')->nullable();
                $table->json('services')->nullable();
                $table->boolean('active')->default(true);

                // Indici per performance
                $table->index('active');
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
=======
        if (!Schema::connection('mysql')->hasTable('studios')) {
            Schema::connection('mysql')->create('studios', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug')->unique();
                $table->text('address')->nullable();
                $table->string('city')->nullable();
                $table->string('postal_code')->nullable();
                $table->string('province')->nullable();
                $table->string('region')->nullable();
                $table->string('country')->default('IT');
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('website')->nullable();
                $table->string('registration_number')->nullable();
                $table->string('vat_number')->nullable();
                $table->string('tax_code')->nullable();
                $table->text('description')->nullable();
                $table->json('settings')->nullable();
                $table->json('business_hours')->nullable();
                $table->boolean('active')->default(true);
                $table->timestamps();

                // Indici per performance
                $table->index('active');
                $table->index('city');
                $table->index('region');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql')->dropIfExists('studios');
    }
};
>>>>>>> 2099645a (.)
