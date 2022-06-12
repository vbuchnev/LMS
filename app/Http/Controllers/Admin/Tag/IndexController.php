<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all()->reverse();
        return view('admin.tag.index', compact('tags'));
    }
}
