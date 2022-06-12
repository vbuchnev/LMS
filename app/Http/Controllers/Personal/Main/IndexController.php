<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\LessonUserFavorite;


class IndexController extends Controller
{
    public function __invoke()
    {
        $favor = auth()->user()->FavoritesLesson;
        $result = auth()->user()->userResults;
        $user = auth()->user();
        return view('personal.main.index', compact('favor', 'user', 'result'));
    }
}
