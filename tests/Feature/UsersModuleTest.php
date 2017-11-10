<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testExample()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Marcos');
    }

    function testwelcome()
    {
        $this->get('/')
        ->assertStatus(200)
        ->assertViewIs('welcome');
    }

    function testExampletwo()
    {
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear nuevo usuario');
    }

    function testExamplethree()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalle del usuario 5');
    }

    function testExamplefour()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios');
    }

    function testExamplefive()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados');
    }
}