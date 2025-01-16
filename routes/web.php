<?php

use App\Http\Controllers\feedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AdminController;



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
Route::get('/feedback', function () {
    return view('dashboard/feedback');  
});

// Route::get('/myApp', function () {
//     return view('dashboard/myApplicant');  
// });

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

Route::get('/dashboard', function () {
    // dd('dashboard/home');
    return view('dashboard/home');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::resource('job',JobController::class);
Route::get('/CompaniesJob', [JobController::class, 'companiesJob'])->name('job.companiesJob');
Route::get('/applicantLetter', [JobController::class, 'applicantLetter'])->name('job.applicantLetter');
Route::get('/job/{id}', [JobController::class, 'show'])->name('job.show');
Route::put('/jobApplicant/{id}', [JobController::class, 'updateApplicant'])->name('job.updateApplicant');
Route::get('/job.applicant/{id}', [JobController::class, 'applicant'])->name('job.applicant');
Route::post('/applicants/{id}', [jobController::class, 'storeApplicant'])->name('job.storeApplicant');
Route::get('/myApp', [jobController::class, 'myApplicant'])->name('job.jobApplicant');
Route::post('/feedback', [feedbackController::class, 'store'])->name('feedback.store');
Route::post('/categoryStore', [AdminController::class, 'store'])->name('admin.store');
Route::get('/category/{id}', [AdminController::class, 'update'])->name('admin.update');

Route::get('/admin',[AdminController::class,'index'])->name('admin.index');

Route::get('/category', [AdminController::class, 'category'])->name('admin.category');
Route::get('/feedbackAdmin', [AdminController::class, 'feedback'])->name('admin.feedback');

Route::post('/favorites', [FavoriteController::class, 'store']); // Tambah favorite
Route::delete('/favorites', [FavoriteController::class, 'destroy']); // Hapus favorite
Route::get('/favorites/{user_id}', [FavoriteController::class, 'index']); // Lihat semua favorites

require __DIR__.'/auth.php';
