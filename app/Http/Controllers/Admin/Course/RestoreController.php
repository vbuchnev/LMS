<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke(int $course)
    {
        Course::withTrashed()->find($course)->restore();

        return redirect()->route('admin.course.trash');
    }
}
