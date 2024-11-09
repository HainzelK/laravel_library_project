<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CDController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\NewspaperController;
use App\Http\Controllers\SkripsiController;
use App\Http\Controllers\CatalogueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/{sort?}', [BookController::class, 'index']);
Route::get('/cds/{sort?}', [CDController::class, 'index']);
Route::get('/journals/{sort?}', [JournalController::class, 'index']);
Route::get('/newspapers/{sort?}', [NewspaperController::class, 'index']);
Route::get('/skripsi/{sort?}', [SkripsiController::class, 'index']);
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');
Route::get('/catalogue/{category}', [CatalogueController::class, 'showCategory'])->name('catalogue.category');
