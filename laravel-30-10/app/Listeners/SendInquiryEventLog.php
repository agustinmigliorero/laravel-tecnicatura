<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use App\Events\InquiryEventLog;
use App\Mail\consultaMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendInquiryEventLog
{
    /**
     * Create the event listener.
     */
    public function __construct() {}

    /**
     * Handle the event.
     */
    public function handle(InquiryEventLog $event): void
    {
        Mail::to("test@test.com")->send(new consultaMail());
        Log::info('Consulta registrada de: ' . $event->inquiry->email);
    }
}
