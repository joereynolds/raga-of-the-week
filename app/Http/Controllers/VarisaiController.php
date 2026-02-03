<?php

namespace App\Http\Controllers;

use App\Models\Raga;
use App\Models\VarishaiPatternSwara;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VarisaiController extends Controller
{
    public function pattern(Request $request): View
    {
        $varisaiId = $request->query('varishai', 1);
        $patternId = $request->query('pattern', 1);
        $ragaId = $request->query('raga_id');

        $swaras = VarishaiPatternSwara::where('varishai_pattern_id', $patternId)->get();
        $raga = $ragaId ? Raga::find($ragaId) : null;

        // Return only the table component for HTMX partial updates
        return view(
            'components.varisai-table',
            [
                'swaras' => $swaras,
                'patternId' => $patternId,
                'raga' => $raga,
            ]
        );
    }
}
