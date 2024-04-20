<?php

use App\Http\Controllers\RagaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RagaController::class, 'show']);
