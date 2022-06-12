<?php

namespace App\Http\Controllers\Admin\Option;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function __invoke()
    {
        $options = Option::onlyTrashed()->get()->reverse();

        return view('admin.option.trash', compact('options'));
    }
}
