<?php

namespace App\Http\Controllers;

use App\Models\WesternScale;
use Illuminate\View\View;

class ScalesController extends Controller
{
    public function index(): View
    {
        return view('scales', ['scales' => WesternScale::all()]);
    }
}
