<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('admin', function () {return view('admin');})->name('admin');
});



require __DIR__.'/auth.php';
