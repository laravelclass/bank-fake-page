<?php


namespace LaravelClass\BankFakePage\Facade;


use Illuminate\Support\Facades\Facade;

/**
 * Class GetBankInfo
 * @package LaravelClass\BankFakePage\Facade
 * @method static getBankInfo(object $bankInfo)
 */
class GetBankInfo extends Facade
{
     protected static function getFacadeAccessor()
     {
         return 'bankFakePage';
     }
}
