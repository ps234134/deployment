<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     */
//     public function test_the_application_returns_the_portfolio_view(): void
// {
//     $response = $this->get('/');

//     if (env('CI')) {
//         file_put_contents('test_output.txt', $response->getContent());
//     }

//     $response->assertViewIs('portfolio');
// }


}
