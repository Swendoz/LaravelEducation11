<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

//Route::get('/', function () {
//    return view('welcome', [
//        'greeting' => 'Hello',
//    ]);
//});

Route::view('/', 'welcome', [
    'greeting' => 'Hello',
]);
Route::view('/contact', 'contact');


Route::resource('jobs', JobController::class);


