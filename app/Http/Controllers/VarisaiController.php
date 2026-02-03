<?php

namespace App\Http\Controllers;

use App\Models\VarishaiPatternSwara;
use Illuminate\View\View;

class VarisaiController extends Controller
{
    public function pattern(int $id, int $patternId): View
    {
        $swaras = VarishaiPatternSwara::where('varishai_pattern_id', $patternId)->get();

        // Return only the table component for HTMX partial updates
        return view(
            'components.varisai-table',
            [
                'swaras' => $swaras,
                'patternId' => $patternId,
            ]
        );
    }
}
