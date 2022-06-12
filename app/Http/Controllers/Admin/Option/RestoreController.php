<?php

namespace App\Http\Controllers\Admin\Option;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke(int $option)
    {
        Option::withTrashed()->find($option)->restore();

        return redirect()->route('admin.option.trash');
    }
}
