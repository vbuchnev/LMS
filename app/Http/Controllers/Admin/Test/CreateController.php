<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::all();
        return view('admin.test.create', compact('lessons'));
    }
}
