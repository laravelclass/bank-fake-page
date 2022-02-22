<?php


namespace LaravelClass\BankFakePage\Console\Commands;

use Illuminate\Console\Command;

class PackageStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fake-page:rocket';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command serve everything for the laravelclass fakePage package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('vendor:publish',['--tag'=>'laravelclass-config']);
        $this->call('vendor:publish',['--tag'=>'laravelclass-public']);
        $this->call('serve');
        return 0;
    }
}
