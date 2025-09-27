<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
});

// Using resourceful routing (this replaces all 7 individual routes)
Route::resource('jobs', JobController::class);
