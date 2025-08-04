<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

return new class extends XotBaseMigration {
    protected ?string $model_class = HealthCheckResultHistoryItem::class;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
=======
=======
>>>>>>> 54f4fa16 (.)
     * Undocumented function.
     *
     * @return void
     */
    public function up()
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();

                $table->string('check_name');
                $table->string('check_label');
                $table->string('status');
                $table->text('notification_message')->nullable();
                $table->string('short_summary')->nullable();
                $table->json('meta');
                $table->timestamp('ended_at');
                $table->uuid('batch')->index();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
<<<<<<< HEAD
<<<<<<< HEAD
                $this->updateTimestamps($table, false);
=======
                $this->updateTimestamps(table: $table, hasSoftDeletes: false);
>>>>>>> aurmich/dev
=======
                $this->updateTimestamps(table: $table, hasSoftDeletes: false);
>>>>>>> 54f4fa16 (.)
            }
        );
    }
};
