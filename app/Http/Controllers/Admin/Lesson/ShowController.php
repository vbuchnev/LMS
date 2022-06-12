<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Lesson $lesson)
    {
        return view('admin.lesson.show', compact('lesson'));
    }
}
