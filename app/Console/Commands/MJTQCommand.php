<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MJTQCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:MJTQCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $url = 'https://tianqi.moji.com/weather/china/shanghai/putuo-district';

    }
}
