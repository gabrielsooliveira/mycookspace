<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
})->name('home');

Route::get('/explorar', function () {
    return inertia('Article/Explorer');
})->name('explorer');

Route::get('/artigo/{article}', function () {
    return inertia('Article/Index');
})->name('article');

Route::get('/explorar/{meet}', function () {
    return inertia('Article/List');
})->name('explorer-list');
