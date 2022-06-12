<?php

namespace App\Http\Controllers\Personal\Favorites;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __invoke()
    {
        $lessons = auth()->user()->FavoritesLesson;
        return view('personal.favorites.index', compact('lessons'));
    }
}
