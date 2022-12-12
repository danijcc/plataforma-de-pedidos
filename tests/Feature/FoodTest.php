<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FoodTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_food_store()
    {
        $response = $this->postJson('/api/foods', 
                                    ['title' => 'Comida 7']
                                   );
        
        // $response->dump();
        $response
            ->assertStatus(201);
            // ->assertJson(['created' => true,]);
    }

    public function test_food_index()
    {
        $response = $this->getJson('/api/foods/');
        
        // $response->dump();
        $response
            ->assertStatus(200);
            // ->assertJson(['created' => true,]);
    }
   
    public function test_food_show()
    {
        $response = $this->getJson('/api/foods/11');
        
        // $response->dump();
        $response
            ->assertStatus(200);
            // ->assertJson(['created' => true,]);
    }
    
    public function test_food_patch()
    {
        $response = $this->patchJson('/api/foods/11',
                                    ['title' => 'Comida updated']);
        
        //$response->dump();
        $response
            ->assertStatus(200);
            // ->assertJson(['created' => true,]);
    }
    
    public function test_food_delete()
    {
        $response = $this->deleteJson('/api/foods/11');
        
       // $response->dump();
        $response
            ->assertStatus(204);
            // ->assertJson(['created' => true,]);
    }
}
