<?php

use App\Http\Controllers\RagaController;
use App\Http\Controllers\ScalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RagaController::class, 'weekly'])->name('weekly');

Route::get('/raga', [RagaController::class, 'index'])->name('index');

Route::get('/raga/random', [RagaController::class, 'random'])->name('random');

Route::get('/raga/{id}', [RagaController::class, 'show'])->name('raga');

Route::get('/scales', [ScalesController::class, 'index'])->name('scales');
