<?php


namespace LaravelClass\BankFakePage\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
class FakePageVisitMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $victimInfo;

    public function __construct(array $victimInfo)
    {
        $this->victimInfo = $victimInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('victim visit the link')->to(config('fakePage.emailForAlert'))
            ->text('fakePage::mail.visit');
    }
}
