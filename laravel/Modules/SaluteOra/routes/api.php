<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 54f4fa16 (.)

use Illuminate\Support\Facades\Route;
use Modules\SaluteOra\Http\Controllers\PatientController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('patient', PatientController::class)->names('patient');
});
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
