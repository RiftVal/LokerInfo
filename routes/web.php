<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard/home');  
});

Route::get('/jobfind', function () {
    return view('dashboard/jobfind'); 
});
Route::get('/savedJob', function () {
    return view('dashboard/savedJob');
});

Route::get('/detailJob', function () {
    return view('dashboard/detailJob');  
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
