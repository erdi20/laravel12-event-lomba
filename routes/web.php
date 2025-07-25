<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;

// Route::get('/', function () {
//     return view('pages.home');
//     return view('welcome2');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail-event/{slug}', [EventController::class, 'show']);
Route::post('/registrations', [RegistrationController::class, 'store'])->name('registrations.store');
