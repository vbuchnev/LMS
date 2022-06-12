<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Test;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Test $test)
    {
        $lessons = Lesson::all();

        return view('admin.test.edit', compact('test', 'lessons'));
    }
}
