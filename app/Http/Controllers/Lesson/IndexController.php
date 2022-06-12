<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::paginate(6);
        return view('lesson.index', compact('lessons'));
    }
}
