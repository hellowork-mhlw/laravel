<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Command\Command;

class ExampleTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_amphp_vs_pmphp()
    {
        $exitCode = Artisan::call('command:name');
        $this->assertSame($exitCode, Command::SUCCESS);
    }
}
