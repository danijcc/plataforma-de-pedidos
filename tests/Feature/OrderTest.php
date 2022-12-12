<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_order_store()
    {
        $response = $this->postJson('/api/orders', 
                                    ['user_id' => '1',
                                    'food_id' => '2',
                                    'is_active' => '1']
                                   );
        
        // $response->dump();
        $response
            ->assertStatus(201);
            // ->assertJson(['created' => true,]);
    }

    public function test_food_index()
    {
        $response = $this->getJson('/api/orders/');
        
        // $response->dump();
        $response
            ->assertStatus(200);
            // ->assertJson(['created' => true,]);
    }

    public function test_food_show()
    {
        $response = $this->getJson('/api/orders/9');
        
        // $response->dump();
        $response
            ->assertStatus(200);
            // ->assertJson(['created' => true,]);
    }

    public function test_food_patch()
    {
        $response = $this->patchJson('/api/orders/9',
                                    ['is_active' => '2']);
        
        //$response->dump();
        $response
            ->assertStatus(200);
            // ->assertJson(['created' => true,]);
    }
}
