<?php

namespace App\Http\Controllers\Personal\Favorites;

use App\Http\Controllers\Controller;
use App\Models\Lesson;

class DeleteController extends Controller
{

    public function __invoke(Lesson $lesson)
    {
        auth()->user()->FavoritesLesson()->detach($lesson->id);

        return redirect(route('personal.favorites.index'));
    }
}
