<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct(
        public ?int $previousRagaId,
        public ?int $nextRagaId,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}