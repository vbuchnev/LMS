<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lesson\UpdateRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;

class RestoreController extends BaseController
{
    public function __invoke(int $lesson)
    {
        Lesson::withTrashed()->find($lesson)->restore();

        return redirect()->route('admin.lesson.trash');
    }
}
