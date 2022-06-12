<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lesson\UpdateRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Lesson $lesson)
    {
        $data = $request->validated();

        $lesson = $this->service->update($data, $lesson);

        return view('admin.lesson.show', compact('lesson'));
    }
}
