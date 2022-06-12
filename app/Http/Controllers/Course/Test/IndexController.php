<?php

namespace App\Http\Controllers\Course\Test;

use App\Http\Controllers\Controller;
use App\Models\Course;

class IndexController extends Controller
{
    public function __invoke(Course $course)
    {
        $lessons = $course->lessons;
        return view('course.test.index', compact('lessons', 'course'));
    }
}
