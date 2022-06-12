<?php

namespace App\Http\Controllers\Admin\Option;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Option $option)
    {
        $questions = Question::all();

        $points = Option::getCorrect();

        return view('admin.option.edit', compact('questions', 'option', 'points'));
    }
}
