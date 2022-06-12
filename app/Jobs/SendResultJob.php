<?php

namespace App\Jobs;

use App\Notifications\SendResultsPdfNotification;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;

class SendResultJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $result;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($result)
    {
        //
        $this->result = $result;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $filename = $this->result->id . '.pdf';
        $pdf = PDF::loadView('mail.result.pdf', ['result'=>$this->result]);
        $pdf->save(storage_path($filename));
        auth()->user()->notify(new SendResultsPdfNotification($this->result));
        File::delete(storage_path($filename));
    }
}
