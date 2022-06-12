<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\UpdateRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Course $course)
    {
        $course->testOptions()->delete();
        $course->testQuestions()->delete();
        $course->tests()->delete();
        $course->lessons()->delete();
        $course->delete();
        return redirect()->route('admin.course.index');
    }
}
