<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IssueController extends Controller
{
    public function index(): View
    {
        return view('issues', ['issues' => Issue::all()]);
    }

    public function store(Request $request): View
    {
        Issue::create([
            "description" => $request->input(
                "description",
                "Lost the description in transit :("
            )
        ]);

        return view('issue-created');
    }
}
