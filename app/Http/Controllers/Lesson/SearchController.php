<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;

        $lessons = Lesson::where('title', 'LIKE', "%$s%")->orderBy('title')->paginate(6);

        return view('lesson.index', compact('lessons'));
    }
}
