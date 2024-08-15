<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', [JobController::class, 'index']);
Route::get('/job/{id}', function($id){
    return view('job',['job'=>Job::find($id)]);
});
