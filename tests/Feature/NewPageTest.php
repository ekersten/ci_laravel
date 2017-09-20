<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_request_returns_200_code()
    {
        $response = $this->get('/new_page');
        $response->assertStatus(200);
    }

    public function test_response_returns_correct_view() {
    	$response =$this->get('/new_page');
    	$response->assertViewIs('new_page');
    }
}
