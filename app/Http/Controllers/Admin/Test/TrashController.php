<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function __invoke()
    {
        $tests = Test::onlyTrashed()->get()->reverse();
        return view('admin.test.trash', compact('tests'));
    }
}
