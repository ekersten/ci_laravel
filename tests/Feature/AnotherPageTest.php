<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AhoterPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_request_returns_200_code()
    {
        $response = $this->get('/another_page');
        $response->assertStatus(200);
    }

    public function test_request_returns_proper_view() {
    	$response = $this->get('/another_page');
        $response->assertViewIs('another_page');
    }
}
