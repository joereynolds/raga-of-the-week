<?php

namespace App\Http\Controllers;

use App\Models\Raga;
use App\Models\Week;
use Illuminate\View\View;

class RagaController extends Controller
{
    public function weekly(): View
    {
        $week = Week::latest('week')->first();
        $raga = Raga::find($week->raga_id);

        $melakartas = Raga::query()->isMelakarta()->get();
        return view('weekly', ['ragas' => [$raga]]);
    }

    public function index(): View
    {
        $janyas = Raga::query()->isJanya()->orderBy('name')->get();
        $melakartas = Raga::query()->isMelakarta()->get();

        return view(
            'ragas',
            [
                'janyas' => $janyas,
                'melakartas' => $melakartas,
            ]
        );
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

    public function random()
    {
        return redirect()->action(
            [RagaController::class, 'show'],
            ['id' => Raga::all()->random(1)->first()->id]
        );
    }
}
