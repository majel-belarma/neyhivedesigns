<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('home');
});

Route::get('/get-started', function () {
    return view('get-started');
});