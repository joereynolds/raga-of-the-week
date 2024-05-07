<?php

namespace App\Http\Controllers;

use App\Models\Raga;
use Illuminate\View\View;

class RagaController extends Controller
{
    public function weekly(): View
    {
        return view('weekly', ['ragas' => Raga::all()]);
    }

    public function index(): View
    {
        return view('ragas', ['ragas' => Raga::all()]);
    }

    public function show(int $id): View
    {
        $previous = Raga::where('id', '<', $id)->max('id');
        $next = Raga::where('id', '>', $id)->min('id');

        return view(
            'raga-page',
            [
                'ragas' => Raga::where('id', $id)->get(),
                'previous' => $previous,
                'next' => $next
            ]
        );
    }

    // Shows all ragas on one very big page
    public function debug()
    {
        return view('raga', ['ragas' => Raga::all()]);
    }

    public function random()
    {
        return redirect()->action(
            [RagaController::class, 'show'],
            ['id' => Raga::all()->random(1)->first()->id]
        );
    }
}
