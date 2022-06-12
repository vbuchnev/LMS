<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Models\LessonUserFavorite;


class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        return view('personal.profile.index', compact('user'));
    }
}
