<?php

namespace App\View\Components;

use App\Models\Varishai as ModelsVarishai;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Varishai extends Component
{
    public function __construct(
        public ModelsVarishai $varishai
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.varishai');
    }
}
