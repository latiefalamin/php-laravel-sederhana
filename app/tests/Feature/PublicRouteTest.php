<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicRouteTest extends TestCase
{
    /**
     * Test the home page returns a successful response.
     */
    public function test_home_page_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Hello World');
        $response->assertSeeText('Selamat datang di aplikasi Laravel sederhana');
    }
}
