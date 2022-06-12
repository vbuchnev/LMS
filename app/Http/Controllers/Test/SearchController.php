<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;

        $tests = Test::where('title', 'LIKE', "%$s%")->orderBy('title')->get();

        return view('test.index', compact('tests'));
    }
}
