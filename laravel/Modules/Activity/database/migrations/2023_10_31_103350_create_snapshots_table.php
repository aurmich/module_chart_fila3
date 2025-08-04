<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
// namespace Modules\Activity\Database\Migrations;

>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 6581c95e (♻️ (ListActivities.php, ListStoredEvents.php, LogoutListener.php): refactor code to improve readability and maintainability by removing unused imports and comments)
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        $this->tableCreate(
            /**
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->uuid('aggregate_uuid');
                $table->unsignedInteger('aggregate_version');
                $table->jsonb('state');
                $table->index('aggregate_uuid');
            }
        );

        $this->tableUpdate(
            /**
             * @param Blueprint $table
             */
            function (Blueprint $table) {
                $this->updateTimestamps($table, false);
            }
        );
    }
};
