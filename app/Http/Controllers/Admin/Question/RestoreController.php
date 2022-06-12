<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke(int $question)
    {
        Question::withTrashed()->find($question)->restore();

        return redirect()->route('admin.question.trash');
    }
}
