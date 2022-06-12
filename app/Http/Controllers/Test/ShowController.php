<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use App\Models\Option;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Test $test)
    {
        return view('test.show', compact("test"));
    }
}
