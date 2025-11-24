<?php

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