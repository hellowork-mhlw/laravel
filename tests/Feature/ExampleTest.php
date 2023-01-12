<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Command\Command;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_amphp_vs_pmphp()
    {
        var_dump(\DB::table('ramens')->count());

        $exitCode = Artisan::call('command:name');
        $this->assertSame($exitCode, Command::SUCCESS);
    }
}
