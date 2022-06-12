<?php

namespace App\Notifications;

use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends ResetPasswordController implements ShouldQueue
{
    use Queueable;
}
