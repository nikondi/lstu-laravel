<?php

use App\Http\Controllers\FakController;
use App\Http\Controllers\StaticsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/abit', function () {
    return view('abit');
})->name('abit');


Route::prefix('/fak/')->name('fak.')->group(function () {
    Route::get('/fak', [FakController::class, 'index'])->name('index');
    Route::get('/staff', [FakController::class, 'staff'])->name('staff');
    Route::get('/ikn', [FakController::class, 'show'])->name('show');
});

Route::get('/static', StaticsController::class)->name('static');
Route::controller(StaticsController::class)->group(function() {
    Route::get('/management', 'management')->name('management');
});


Route::prefix('news')->name('news.')->group(function() {
    Route::get('', function () {
        return view('news.index');
    })->name('index');

    Route::get('single', function () {
        return view('news.single');
    })->name('single');
});
