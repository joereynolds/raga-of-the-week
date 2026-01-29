<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Week;

class WeeksController extends Controller
{
    public function index(): View
    {
        return view('weeks', ['weeks' => Week::all()]);
    }
}
