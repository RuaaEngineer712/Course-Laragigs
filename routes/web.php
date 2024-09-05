<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::middleware(['auth','verified'])->group(function () {
    Route::resource('/job', JobController::class);
// });


// Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
// Route::post('/job/store', [JobController::class, 'store'])->name('job.store');


// Route::get('/job/{id}', [JobController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
