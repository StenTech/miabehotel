<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateHotelTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_hotel(): void
    {
        //$user = \App\Models\User::factory()->create();

        $response = $this->post('/api/hotels', [
            'name' => 'Hotel Test',
            'longitude' => 1.1,
            'latitude' => 1.1,
            'description' => 'Hotel Test',
            'stars' => 1,
        ]);

        $response->assertStatus(201);
    }
}
