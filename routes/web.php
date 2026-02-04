<?php

use App\Http\Controllers\IssueController;
use App\Http\Controllers\RagaController;
use App\Http\Controllers\ScalesController;
use App\Http\Controllers\VarisaiController;
use App\Http\Controllers\WeeksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RagaController::class, 'weekly'])->name('weekly');

Route::get('/raga', [RagaController::class, 'index'])->name('index');

Route::get('/raga/random', [RagaController::class, 'random'])->name('random');

Route::get('/raga/{id}', [RagaController::class, 'show'])->name('raga');

Route::get('/scales', [ScalesController::class, 'index'])->name('scales');

Route::get('/weeks', [WeeksController::class, 'index'])->name('weeks');

Route::post('/issue', [IssueController::class, 'store'])->name('issue');

Route::get('/varisai/{id}', [VarisaiController::class, 'show'])->name('varisai');

// TODO - would like this to be /varisa/{id}/{patternId}
// but the current way is way easier with htmx
Route::get('/varisai-pattern', [VarisaiController::class, 'pattern'])->name('varisai-pattern');

