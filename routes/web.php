<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Models\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('add-data',[StudentController::class,'addData']);
// Route::get('get-data',[StudentController::class,'getData']);
// Route::get('update-data',[StudentController::class,'updateData']);
// Route::get('delete-data',[StudentController::class,'deleteData']);

Route::prefix('student')->controller(StudentController::class)->group(function () {
    Route::get('/','index');
}
);