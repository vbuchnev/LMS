<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use App\Models\Option;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
//        $tests = $test::with(['testQuestions'])->whereHas('testQuestions')->get();
//        $tests = Test::with(['testQuestions' => function ($query) {
//            $query->inRandomOrder()
//                ->with(['test' => function ($query) {
//                    $query->inRandomOrder();
//                }]);
//        }])
//            ->whereHas('testQuestions')
//            ->get();
        $tests = Test::all();
        return view('test.index', compact("tests"));
    }
}
