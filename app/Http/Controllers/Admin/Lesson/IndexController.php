<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $lessons = Lesson::all()->reverse();
        $course = Course::all();
        return view('admin.lesson.index', compact('lessons', 'course'));
    }
}
