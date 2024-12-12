<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WinnerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_yutuqni_tekshirish(): void
    {
        $response = $this->get('/api/cilent_action');
        $response->assertStatus(200);
        
        $data = collect($response->json(['data']));
        if($data->where('gender', 'female')->count() != 2) {
            $this->assertTrue(false);
        }
        if($data->where('gender', 'male')->count() != 2) {
            $this->assertTrue(false);
        }
    }
}
