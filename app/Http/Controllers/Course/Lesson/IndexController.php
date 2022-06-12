<?php

namespace App\Http\Controllers\Course\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Course $course)
    {
        $lessons = $course->lessons()->paginate(6);
        return view('course.lesson.index', compact('lessons', 'course'));
    }
}
