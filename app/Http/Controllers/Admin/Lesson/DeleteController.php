<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lesson\UpdateRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Lesson $lesson)
    {
        $lesson->tests()->delete();
        $lesson->testQuestions()->delete();
        $lesson->testOptions()->delete();
        $lesson->delete();
        return redirect()->route('admin.lesson.index');
    }
}
