<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class TrashController extends BaseController
{
    public function __invoke()
    {
        $lessons = Lesson::onlyTrashed()->get()->reverse();
        return view('admin.lesson.trash', compact('lessons'));
    }
}
