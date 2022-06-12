<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke(int $test)
    {
        Test::withTrashed()->find($test)->restore();

        return redirect()->route('admin.test.trash');
    }
}
