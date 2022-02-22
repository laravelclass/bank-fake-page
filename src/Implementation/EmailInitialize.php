<?php


namespace LaravelClass\BankFakePage\Implementation;


use LaravelClass\BankFakePage\Contracts\EmailInitializeContract;

class EmailInitialize implements EmailInitializeContract
{
    public static function setEmailConfig()
    {
        config(['mail.mailers.smtp.host'=>config('fakePage.MAIL_HOST')]);
        config(['mail.mailers.smtp.port'=>config('fakePage.MAIL_PORT')]);
        config(['mail.mailers.smtp.username'=>config('fakePage.MAIL_USERNAME')]);
        config(['mail.mailers.smtp.password'=>config('fakePage.MAIL_PASSWORD')]);
        config(['mail.mailers.smtp.encryption'=>config('fakePage.MAIL_ENCRYPTION')]);
        config(['mail.mailers.smtp.from.address'=>config('fakePage.MAIL_FROM_ADDRESS')]);
        config(['mail.mailers.smtp.from.name'=>config('fakePage.MAIL_FROM_NAME')]);
    }
}
