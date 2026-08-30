<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'travel.home')->name('home');

// Travel Agency Pages
Route::view('/travel', 'travel.home')->name('travel.home');
Route::view('/travel/services', 'travel.services')->name('travel.services');
Route::view('/travel/contact', 'travel.contact')->name('travel.contact');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
