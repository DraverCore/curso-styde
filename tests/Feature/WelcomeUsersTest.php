<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testWelcomeUsersWithNickName()
    {
        $this->get('saludo/Marcos/Sanchez')
        ->assertStatus(200)
        ->assertSee('Tu nombre es Marcos y tu apodo es Sanchez');
    }

    function testWelcomeUsersWithoutNickName()
    {
        $this->get('saludo/Marcos')
        ->assertStatus(200)
        ->assertSee('Tu nombre es Marcos y no tienes apodo');
    }
} 
