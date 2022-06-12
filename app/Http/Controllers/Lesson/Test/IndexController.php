<?php

namespace App\Http\Controllers\Lesson\Test;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Result;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        return view('lesson.test.index', compact('lesson'));
    }
}
