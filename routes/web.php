<?php


use App\Http\Controllers\TeachersController;
use App\Models\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('teachers', function () {
//     return Teachers::all();
// });
Route::get('teachers', [TeachersController::class,'index'])->name('index');
Route::get('add-teacher', [TeachersController::class,'add']);
Route::get('show-teacher/{id}', [TeachersController::class,'show']);
Route::get('update-teacher/{id}', [TeachersController::class,'update']);
Route::get('delete-teacher/{id}', [TeachersController::class,'delete']);

// Route::get('/aboutus', function () {
//     return view('aboutus');
// })->name('about');
// Route::get('/contactus', function () {
//     return view('contactus');
// })->name('contact');

// Route::controller(StudentController::class)->group(function () {
//     Route::get('students','index');
//     // Route::get('about-us/{id}/{name}','aboutUs');
//     Route::get('about-us','aboutUs');
//     //  Route::get('about-us/{id}/{name}','privateFunction'); ဒီလိုခေါ်ရင် private function မို့ error တက်မှာ
// });

//ဒါက invoke Controller အတွက် စမ်းတာ
// Route::get('invoke',TestController::class);

//ဒါက resource controller အတွက်
// Route::resource('second-test',SecondTestController::class);