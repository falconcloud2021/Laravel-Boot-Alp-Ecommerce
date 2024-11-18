<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

// Route::get('/', function () {return view('index');});



Route::get('/workspace', function () {return view('dashboard');});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});



require __DIR__.'/copywriter.php';
require __DIR__.'/manager.php';
require __DIR__.'/head.php';
