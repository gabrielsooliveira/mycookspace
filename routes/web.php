<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
})->name('home');

Route::get('/explorar', function () {
    return inertia('Explorer');
})->name('explorer');
