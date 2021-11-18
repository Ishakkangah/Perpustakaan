<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class databaseRefreshCommand extends Command
{
    protected $signature = 'db:refresh';

    protected $description = 'This command to usefull migrate and seed all database to default';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('migrate:refresh');
        $this->call('db:seed');
        $this->info('Command has been run');
        return Command::SUCCESS;
    }
}
