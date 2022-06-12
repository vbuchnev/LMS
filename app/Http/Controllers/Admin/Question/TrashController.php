<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function __invoke()
    {
        $questions = Question::onlyTrashed()->get()->reverse();
        return view('admin.question.trash', compact('questions'));
    }
}
