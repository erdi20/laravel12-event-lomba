<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MidtransNotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UtamaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', [UtamaController::class, 'index'])->name('home');
Route::get('/detail-event/{slug}', [EventController::class, 'show']);
Route::post('/registrations', [RegistrationController::class, 'store'])->name('registrations.store');
// Route::post('/midtrans/webhook', [PaymentController::class, 'webhook'])->name('midtrans.webhook');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
