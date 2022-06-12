<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return redirect()->Route('course.index');
    }
}
