<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::view('/', 'home')->name('home');

Route::view('/get-started', 'get-started')->name('get-started');      // GET
Route::post('/get-started', [InquiryController::class, 'store'])      // POST
    ->name('inquiries.store');

Route::view('/get-started/thank-you', 'thank-you')->name('get-started.thankyou');
