<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Requests\Auth\LoginRequest;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);


Route::middleware(['auth','verified'])->group(function () {
    Route::resource('/job', JobController::class)->except(['show']); // All except 'show' are protected
});

Route::get('/job/{id}', [JobController::class, 'show'])->name('job.show');
// Route::get('/job/{id}', [JobController::class, 'destroy'])->name('job.destroy');
// Route::get('/job/{id}', [JobController::class, 'edit'])->name('job.edit');





Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/job', [JobController::class, 'index'])->name('job.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
