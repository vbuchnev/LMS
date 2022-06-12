<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $courses = Course::all();
        $tags = Tag::all();
        return view('admin.lesson.create', compact('courses', 'tags'));
    }
}
