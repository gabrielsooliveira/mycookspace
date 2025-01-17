<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
})->name('home');

Route::get('/explorar', function () {
    return inertia('Explorer/Index');
})->name('explorer');

Route::get('/explorar/{meet}', function () {
    return inertia('Explorer/List');
})->name('explorer-list');
