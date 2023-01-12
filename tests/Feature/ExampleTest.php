<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_amphp_vs_pmphp()
    {
        $this->artisan('command:name')->assertExitCode(0);
    }
}
