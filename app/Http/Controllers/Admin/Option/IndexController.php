<?php

namespace App\Http\Controllers\Admin\Option;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $options = Option::all()->reverse();

        $questions = Question::all();

        return view('admin.option.index', compact('options', 'questions'));
    }
}
