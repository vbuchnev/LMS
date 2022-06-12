<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function __invoke()
    {
        $courses = Course::onlyTrashed()->get()->reverse();
        return view('admin.course.trash', compact('courses'));
    }
}
