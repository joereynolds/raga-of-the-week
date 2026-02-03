<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class VarisaiTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?Collection $swaras = null,
        public ?int $patternId = 1
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.varisai-table');
    }
}
