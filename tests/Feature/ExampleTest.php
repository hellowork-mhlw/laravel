<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        var_dump(\DB::table('ramens')->count());

        $this->artisan('command:name')->assertExitCode(0);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
