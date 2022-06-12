<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Lesson $lesson)
    {
        $courses = Course::all();
        $tags = Tag::all();
        return view('admin.lesson.edit',
            compact('lesson', 'courses', 'tags'));
    }
}
