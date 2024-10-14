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
    $jobs = Job::with('employer')->latest()->paginate(10);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
!
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => Job::find($id)]);
});

Route::post('/jobs', function () {
//    Validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
//    dd(request()->all());

    Job::create([
       'title' => request('title'),
       'salary' => request('salary'),
       'employer_id' => '10'
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

