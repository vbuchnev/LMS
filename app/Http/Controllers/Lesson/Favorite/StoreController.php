<?php

namespace App\Http\Controllers\Lesson\Favorite;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        auth()->user()->FavoritesLesson()->toggle($lesson->id);

        return redirect()->back();
    }
}
