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

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => Job::find($id)]);
});

// Store
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

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', ['job' => Job::find($id)]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // Authorize

    $job = Job::findOrFail($id);

//    $job->title = request('title');
//    $job->salary = request('salary');
//    $job->save();

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete
Route::delete('/jobs/{id}', function ($id) {
    // Authorize
    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

