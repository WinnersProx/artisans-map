<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:command {user?*} {--Q|queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $headers = ['Name', 'Email'];

        $bar = $this->output->createProgressBar(10);

        $bar->start();

        for ($i = 0; i <= 10; ++$i) {
            sleep(3);
            $bar->advance();
        }

        $bar->finish();
    }
}
