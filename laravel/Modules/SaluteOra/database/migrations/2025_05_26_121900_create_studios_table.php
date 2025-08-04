<?php

<<<<<<< HEAD
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
=======
declare(strict_types=1);
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)

use Illuminate\Database\Schema\Blueprint;
use Modules\SaluteOra\Models\Studio;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    /**
<<<<<<< HEAD
>>>>>>> 2099645a (.)
=======
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
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<< HEAD
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
<<<<<<< HEAD
};
=======
        if (!Schema::connection('mysql')->hasTable('studios')) {
            Schema::connection('mysql')->create('studios', function (Blueprint $table) {
=======
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->dropTableIfExists($this->getTable());
    }
<<<<<<< HEAD
};
>>>>>>> 2099645a (.)
=======
};
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
};
>>>>>>> 2bcfd382 (fix Address)
