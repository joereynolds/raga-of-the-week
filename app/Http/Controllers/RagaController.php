<?php

namespace App\Http\Controllers;

use App\Models\Raga;
use Illuminate\View\View;

class RagaController extends Controller
{
    public function show(): View
    {
        return view('raga', ['ragas' => Raga::all()]);
    }
}
