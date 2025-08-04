<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\Extra;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateExtraTable.
 */
return new class extends XotBaseMigration
{
    protected ?string $model_class = Extra::class;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->increments('id');
                $table->uuidMorphs('model');
                $table->schemalessAttributes('extra_attributes');
<<<<<<< HEAD
                
                
                
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                
                
                
=======
                $table->unique(['model_id', 'model_type'], 'morph_unique');
>>>>>>> aurmich/dev
=======
                $table->unique(['model_id', 'model_type'], 'morph_unique');
>>>>>>> 54f4fa16 (.)
=======
                
                
                
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
>>>>>>> aurmich/dev
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('name')) {
                //    $table->string('name')->nullable();
                // }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                // if (! $this->hasIndex('morph_unique')) {
                //    $table->unique(['model_id', 'model_type'], 'morph_unique');
                // }
>>>>>>> aurmich/dev
=======
                // if (! $this->hasIndex('morph_unique')) {
                //    $table->unique(['model_id', 'model_type'], 'morph_unique');
                // }
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
>>>>>>> aurmich/dev

                if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
                    $table->string('model_id', 36)->index()->change();
                }
            }
        );
    }

    // end up

    // end down
};
