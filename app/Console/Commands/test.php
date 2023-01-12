<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Amp\Future;
use function Amp\async;
use function Amp\delay;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
        $future1 = async(function () {
            echo 'Hello ';
        
            // delay() is a non-blocking version of PHP's sleep() function,
            // which only pauses the current fiber instead of blocking the whole process.
            delay(2);
        
            echo 'the future! ';
        });
        
        $future2 = async(function () {
            echo 'World ';
        
            // Let's pause for only 1 instead of 2 seconds here,
            // so our text is printed in the correct order.
            delay(1);
        
            echo 'from ';
        });
        
        // Our functions have been queued, but won't be executed until the event-loop gains control.
        echo "Let's start: ";
        
        // Awaiting a future outside a fiber switches to the event loop until the future is complete.
        // Once the event loop gains control, it executes our already queued functions we've passed to async()
        $future1->await();
        $future2->await();
        
        echo PHP_EOL;
        return Command::SUCCESS;
    }
}
