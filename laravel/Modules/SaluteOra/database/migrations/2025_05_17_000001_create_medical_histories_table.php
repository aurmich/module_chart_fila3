<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // -- CREATE --
=======
>>>>>>> 54f4fa16 (.)
=======
        // -- CREATE --
>>>>>>> 8e4d163b (phpstan)
        $this->tableCreate(function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->index();
            $table->date('date')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->json('attachments')->nullable();
<<<<<<< HEAD
<<<<<<< HEAD
            //$this->addTimestamps($table);
            //$table->softDeletes();
        });
         // -- UPDATE --
         $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table);
            }
        );
    }

   
=======
            $this->addTimestamps($table);
            $table->softDeletes();
=======
            //$this->addTimestamps($table);
            //$table->softDeletes();
>>>>>>> 8e4d163b (phpstan)
        });
         // -- UPDATE --
         $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table);
            }
        );
    }

<<<<<<< HEAD
    public function down(): void
    {
        $this->tableDrop();
    }
>>>>>>> 54f4fa16 (.)
=======
   
>>>>>>> 8e4d163b (phpstan)
};
