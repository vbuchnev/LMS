<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Test $test, Question $question)
    {
        $test->testOptions()->delete();
        $test->testQuestions()->delete();
        $test->delete();
        return redirect()->route('admin.test.index');
    }
}
