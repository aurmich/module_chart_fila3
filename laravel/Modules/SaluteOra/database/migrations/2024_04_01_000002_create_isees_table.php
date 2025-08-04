<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Tenant\Models\Tenant;
use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    /**
     * Nome della tabella.
     *
     * @var string
     */
    protected string $table = 'isees';

>>>>>>> 54f4fa16 (.)
=======
    
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
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
                //$this->foreignIdFor($table,Tenant::class);
=======
                $this->foreignIdFor($table,Tenant::class);
>>>>>>> 54f4fa16 (.)
=======
                //$this->foreignIdFor($table,Tenant::class);
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
                $this->foreignIdFor($table,Patient::class);
                $table->string('isee_code')->nullable();
                $table->decimal('isee_value', 10, 2)->nullable();
                $table->date('isee_expiry_date')->nullable();
                $table->date('isee_issue_date')->nullable();
                $table->string('isee_type')->nullable();
                $table->string('isee_document_path')->nullable();
                $table->boolean('is_valid')->default(true);
                $table->text('notes')->nullable();
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
};
>>>>>>> 54f4fa16 (.)
