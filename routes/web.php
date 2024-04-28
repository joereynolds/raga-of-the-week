<?php

use App\Http\Controllers\RagaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RagaController::class, 'index']);
Route::get('/raga/random', [RagaController::class, 'random'])->name('random');
Route::get('/raga/{id}', [RagaController::class, 'show'])->name('raga');
