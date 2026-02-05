<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('docs/starter-kits/laravel-saas-starter-kit-v1')->name('docs.starter-kits.laravel-saas-starter-kit-v1.')->group(function () {
    Route::get('/', function () {
        return view('docs/starter-kits/laravel-saas-starter-kit-v1/index');
    })->name('index');
    
    Route::get('/get-started', function () {
        return view('docs/starter-kits/laravel-saas-starter-kit-v1/get-started');
    })->name('get-started');
    
    Route::get('/installation', function () {
        return view('docs/starter-kits/laravel-saas-starter-kit-v1/installation');
    })->name('installation');
    
    Route::get('/features', function () {
        return view('docs/starter-kits/laravel-saas-starter-kit-v1/features');
    })->name('features');
    
    Route::get('/configuration', function () {
        return view('docs/starter-kits/laravel-saas-starter-kit-v1/configuration');
    })->name('configuration');
    
    Route::get('/deployment', function () {
        return view('docs/starter-kits/laravel-saas-starter-kit-v1/deployment');
    })->name('deployment');
});
