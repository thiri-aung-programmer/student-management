<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/aboutus', function () {
    return view('aboutus');
})->name('about');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contact');

Route::controller(StudentController::class)->group(function () {
    Route::get('students','index');
    // Route::get('about-us/{id}/{name}','aboutUs');
    Route::get('about-us','aboutUs');
    //  Route::get('about-us/{id}/{name}','privateFunction'); ဒီလိုခေါ်ရင် private function မို့ error တက်မှာ
});