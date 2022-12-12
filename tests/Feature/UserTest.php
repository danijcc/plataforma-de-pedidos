<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
   /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_user_register()
    {
        $response = $this->postJson('/api/auth/register', 
                                    ['name' => 'Uno',
                                    'password' => '1234567',
                                    'email' => 'Uno@gmail.com']
                                   );
        
        // $response->dump();
        $response
            ->assertStatus(201);
            // ->assertJson(['created' => true,]);
    }
    public function test_user_login()
    {
        $response = $this->postJson('/api/auth/login', 
                                    ['email' => 'Uno@gmail.com',
                                    'password' => '1234567']
                                   );
        
       // $response->dd();
        $response
            ->assertStatus(200);
            // ->assertJson(['created' => true,]);
    }

    
}
