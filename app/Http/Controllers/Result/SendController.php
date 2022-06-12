<?php

namespace App\Http\Controllers\Result;

use App\Http\Controllers\Controller;
use App\Jobs\SendResultJob;
use App\Models\Result;
use App\Notifications\SendResultsPdfNotification;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SendController extends Controller
{
    public function __invoke($result_id)
    {
        $result = Result::whereHas('user', function ($query) {
            $query->whereId(auth()->id());
        })->findOrFail($result_id);

//        SendResultJob::dispatch($result);

        $filename = $result->id . '.pdf';

        $pdf = PDF::loadView('mail.result.pdf', compact('result'));

        $pdf->save(storage_path($filename));

        auth()->user()->notify(new SendResultsPdfNotification($result));

        File::delete(storage_path($filename));

        return redirect()->route('results.show', $result->id)->withStatus('Ваш сертификат отправлен! Пожалуйста, проверьте почту.');
    }
}
