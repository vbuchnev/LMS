<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;

        $courses = Course::where('title', 'LIKE', "%$s%")->orderBy('title')->paginate(10);

        return view('course.index', compact('courses'));
    }
}
