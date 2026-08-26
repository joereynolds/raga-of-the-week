<?php

namespace App\Http\Controllers;

use App\Models\Chakra;

use Illuminate\View\View;

class ChakraController extends Controller
{
    public function index(): View
    {
        return view(
            'chakras',
            [
                'chakras' => Chakra::all()
            ]
        );
    }

    public function show(int $id): View
    {
        return view(
            'chakra',
            [
                'chakra' => Chakra::find($id),
            ]
        );
    }
}
