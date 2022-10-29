<?php

namespace App\Console\Commands;

use App\Services\EnvatoService;
use Illuminate\Console\Command;
use danog\MadelineProto\API;
class EnvatoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'envato:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $me = new EnvatoService();
        $me->run(1760502540, 0);
        //1897777451
        //639086927
        //1857450597
        //1884117700
    }
}
