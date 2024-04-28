<?php

namespace App\Http\Controllers;

use App\Models\Raga;
use Illuminate\View\View;

class RagaController extends Controller
{
    public function index(): View
    {
        return view('raga', ['ragas' => Raga::all()]);
    }

    public function show(int $id): View
    {
        return view('raga', ['ragas' => Raga::where('number', $id)->get()]);
    }

    public function random()
    {
        return view('raga', ['ragas' => Raga::all()->random(1)]);
    }
}
