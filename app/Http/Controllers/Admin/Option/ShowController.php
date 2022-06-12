<?php

namespace App\Http\Controllers\Admin\Option;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Option $option)
    {
        return view('admin.option.show', compact('option'));
    }
}
