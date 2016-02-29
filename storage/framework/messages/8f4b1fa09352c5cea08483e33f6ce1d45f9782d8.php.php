<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:clearall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears all cache';

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
        $exitCode = \Artisan::call('view:clear');
        $exitCode = \Artisan::call('route:clear');
        $exitCode = \Artisan::call('cache:clear');
        $exitCode = \Artisan::call('config:clear');
    }
}
