<?php

namespace App\View\Components;

use App\Models\Varishai as ModelsVarishai;
use App\Models\VarishaiPattern;
use App\Models\VarishaiPatternSwara;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Varishai extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Closure|string
    {
        $swaras = VarishaiPatternSwara::where("varishai_pattern_id", 1)->get();
        return view(
            'components.varishai',
            [
                // TODO - limited to the first one, just get this one sorted and release
                // others can follow after (then just remove the first() call)
                'varishais' => [ModelsVarishai::all()->first()],
                'patterns' => VarishaiPattern::all(),
                'swaras' => $swaras
            ]
        );
    }
}
