<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\UpdateRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Question $question)
    {
        $data = $request->validated();
        $question->update($data);
        return view('admin.question.show', compact('question'));
    }
}
