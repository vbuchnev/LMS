<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tests = Test::all()->reverse();
        $questions = Question::all();
        return view('admin.test.index', compact('tests', 'questions'));
    }
}
