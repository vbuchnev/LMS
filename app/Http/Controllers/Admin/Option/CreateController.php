<?php

namespace App\Http\Controllers\Admin\Option;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $questions = Question::all();

        $points = Option::getCorrect();

        return view('admin.option.create', compact('questions', 'points'));
    }
}
