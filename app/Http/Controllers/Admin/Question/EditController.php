<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Question $question)
    {
        $tests = Test::all();

        return view('admin.question.edit', compact('tests', 'question'));
    }
}
