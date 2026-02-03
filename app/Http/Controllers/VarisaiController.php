<?php

namespace App\Http\Controllers;

use App\Models\VarishaiPattern;
use App\Models\VarishaiPatternSwara;
use Illuminate\View\View;

class VarisaiController extends Controller
{
    public function pattern(int $varisaiId, int $patternId): View
    {
        $swaras = VarishaiPatternSwara::where("varishai_pattern_id", $patternId)->get();

        return view(
            'components.varisai-table',
            [
                'swaras' => $swaras
            ]
        );
    }
}
