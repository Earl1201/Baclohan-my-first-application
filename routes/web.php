<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => \App\Models\Job::with('employer')->paginate(10)
    ]);
});

// Show Create Form (MUST be before /jobs/{job})
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store a New Job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    \App\Models\Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{job}', function (\App\Models\Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// Show Edit Form
Route::get('/jobs/{job}/edit', function (\App\Models\Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update a Job
Route::patch('/jobs/{job}', function (\App\Models\Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// Destroy a Job
Route::delete('/jobs/{job}', function (\App\Models\Job $job) {
    $job->delete();
    return redirect('/jobs');
});
