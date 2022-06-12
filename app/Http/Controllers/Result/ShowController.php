<?php

namespace App\Http\Controllers\Result;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Result $result)
    {
        $result = Result::whereHas('user', function ($query) {
            $query->whereId(auth()->id());
        })->findOrFail($result->id);
        return view('result.show', compact('result'));
    }
}
