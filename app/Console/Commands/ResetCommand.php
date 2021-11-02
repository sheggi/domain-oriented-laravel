<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetCommand extends Command
{
    protected $signature = 'reset';

    protected $description = 'Command description';

    public function handle()
    {
        ray()->clearScreen();

        $this->call('migrate:refresh');
        $this->call('db:seed');

        return Command::SUCCESS;
    }
}
