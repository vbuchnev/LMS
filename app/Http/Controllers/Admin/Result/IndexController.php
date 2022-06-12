<?php

namespace App\Http\Controllers\Admin\Result;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $results = Result::all()->reverse();

        return view('admin.result.index', compact('results'));
    }
}
