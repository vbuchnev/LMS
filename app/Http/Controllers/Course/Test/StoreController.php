<?php

namespace App\Http\Controllers\Course\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test\StoreRequest;
use App\Models\Course;
use App\Models\Option;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $options = Option::find(array_values($request->input('questions')));

        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points')
        ]);

        $questions = $options->mapWithKeys(function ($option) {
            return [$option->question_id => [
                'option_id' => $option->id,
                'points' => $option->points
            ]
            ];
        })->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('results.show', $result->id);
    }
}
