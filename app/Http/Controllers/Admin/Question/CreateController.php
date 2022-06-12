<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tests = Test::all();

        return view('admin.question.create', compact('tests'));
    }
}
