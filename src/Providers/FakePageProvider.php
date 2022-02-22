<?php


namespace LaravelClass\BankFakePage\Providers;


use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use LaravelClass\BankFakePage\Console\Commands\PackageStart;
use LaravelClass\BankFakePage\Implementation\GetBankInfo;

class FakePageProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('bankFakePage',function (){return new GetBankInfo();});
        $this->mergeConfigFrom(__DIR__.'/../config/fakepage.php','fakePage');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views','fakePage');

        $this->publishes([
            __DIR__.'/../config/fakepage.php' => config_path('fakePage.php')
        ],'laravelclass-config');

        $this->publishes([
            __DIR__.'/../public' => public_path('')
        ],'laravelclass-public');

        $this->commands([
            PackageStart::class
        ]);
    }

}
