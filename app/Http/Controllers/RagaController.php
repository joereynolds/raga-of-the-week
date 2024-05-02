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
        $previous = Raga::where('id', '<', $id)->max('id');
        $next = Raga::where('id', '>', $id)->min('id');

        return view(
            'raga',
            [
                'ragas' => Raga::where('id', $id)->get(),
                'previous' => $previous,
                'next' => $next
            ]
        );
    }

    public function random()
    {
        return redirect()->action(
            [RagaController::class, 'show'],
            ['id' => Raga::all()->random(1)->first()->id]
        );
    }
}
