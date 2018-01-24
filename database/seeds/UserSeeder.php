<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Consulta SQL
        //$professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador Back-End']);
        
        //Constructor de consultas de Laravel
        
        /**  Formas de llamar un valor
         * 
         * Apuntando al primer valor
         * $profession = DB::table ('professions') -> select('id') -> first();
         * 
         * Por busqueda de valor
         * $profession = DB::table ('professions') -> select('id') -> where('title', '=', 'Desarrollador Front-End') -> first();
         * 
         * En este caso el valor se pasa de la siguiente forma dentro del arreglo
         * DB::table('users')->insert([
         *   'profession_id' => $profession,
         *   'name' => 'Marcos Sánchez',
         *   'email' => 'draver13@gmail.com',
         *   'password' => bcrypt('marcos.sanchez')
         * ]);
         */
        
        $profession = DB::table ('professions') 
        -> where('title', 'Desarrollador Back-End') 
        -> value('id');

        //Inserción de usuario
        DB::table('users')->insert([
            'profession_id' => $profession,
            'name' => 'Marcos Sánchez',
            'email' => 'draver13@gmail.com',
            'password' => bcrypt('marcos.sanchez')
        ]);

        //Por alguna razón si lo ejecuto antes del insert no ingresa el valor en la BD
            dd($profession);
    }
}
