<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendWeeklyUpdate;

class SendWeeklyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-weekly-report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends weekly report';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SendWeeklyUpdate::dispatch();
    }
}
