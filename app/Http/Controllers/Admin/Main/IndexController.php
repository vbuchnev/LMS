<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\UpdateRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Option;
use App\Models\Result;
use App\Models\Tag;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['coursesCount'] = Course::all()->count();
        $data['lessonsCount'] = Lesson::all()->count();
        $data['testsCount'] = Test::all()->count();
        $data['questionsCount'] = Question::all()->count();
        $data['optionsCount'] = Option::all()->count();
        $data['resultsCount'] = Result::all()->count();
        $data['tagsCount'] = Tag::all()->count();

        return view('admin.main.index', compact('data'));
    }
}
