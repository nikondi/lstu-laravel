<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/abit', function () {
    return view('abit');
})->name('abit');

Route::get('/fak', function () {
    return view('fak');
})->name('fak');

Route::get('/static', function () {
    return view('static');
})->name('static');

Route::prefix('news')->name('news.')->group(function() {
    Route::get('', function () {
        return view('news.index');
    })->name('index');

    Route::get('single', function () {
        return view('news.single');
    })->name('single');
});
