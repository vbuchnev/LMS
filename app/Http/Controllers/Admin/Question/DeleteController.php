<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Question $question)
    {
        $question->questionOptions()->delete();
        $question->delete();
        return redirect()->route('admin.question.index');
    }
}
