<?php

use App\Http\Controllers\RagaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RagaController::class, 'index']);
Route::get('/random', [RagaController::class, 'random'])->name('random');
