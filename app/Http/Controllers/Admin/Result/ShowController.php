<?php

namespace App\Http\Controllers\Admin\Result;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Result $result, Question $question)
    {

        $user = User::all();

        return view('admin.result.show', compact('result', 'user'));
    }
}
