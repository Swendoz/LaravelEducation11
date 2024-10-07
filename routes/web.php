<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hello',
    ]);
});

Route::get('/jobs', function () {
//    $jobs = Job::all();
    $jobs = Job::with('employer')->simplePaginate(10);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});

