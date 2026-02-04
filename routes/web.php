<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('docs.laravel-saas-starter-kit-v1');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/docs/laravel-saas-starter-kit-v1', function () {
    return view('docs.laravel-saas-starter-kit-v1');
})->name('docs.laravel-saas-starter-kit-v1');
