<?php

namespace App\View\Components;

use App\Models\Raga;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JanyaRagas extends Component
{
    public function __construct(public Raga $raga)
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.janya-ragas');
    }
}
