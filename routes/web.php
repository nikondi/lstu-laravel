<?php

use App\Http\Controllers\AbitController;
use App\Http\Controllers\FakController;
use App\Http\Controllers\KafController;
use App\Http\Controllers\StaticsController;
use App\Http\Controllers\StructController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');

Route::prefix('/fak/')->name('fak.')->group(function () {
    Route::get('/', [FakController::class, 'index'])->name('index');
    Route::get('/staff', [FakController::class, 'staff'])->name('staff');
    Route::get('/ikn', [FakController::class, 'show'])->name('show');
});

Route::prefix('/kaf/')->name('kaf.')->group(function () {
    Route::get('/', [KafController::class, 'index'])->name('index');
});

Route::controller(StaticsController::class)->group(function() {
    Route::get('/static')->name('static');
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

Route::get('/struct/dept', StructController::class);


Route::get('/abit', [AbitController::class, 'index'])->name('abit');
Route::get('/abit/czelevoe-obuchenie', [AbitController::class, 'celevoe'])->name('abit.celevoe');
