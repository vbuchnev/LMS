<?php

namespace App\Http\Controllers\Personal\Result;

use App\Http\Controllers\Controller;
use App\Models\Result;

class IndexController extends Controller
{

    public function __invoke()
    {
        $results = auth()->user()->userResults->reverse();
        return view('personal.results.index', compact('results'));
    }
}
