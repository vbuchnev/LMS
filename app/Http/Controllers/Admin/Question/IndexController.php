<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $questions = Question::all()->reverse();
        return view('admin.question.index', compact('questions'));
    }
}
