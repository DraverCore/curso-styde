<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ESTE CODIGO SE PASA AL SEEDER PRINCIPAN Y SE CREA UNA FUNCION
        //Desactiva revision de claves foraneas
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        //Vacia la tabla antes de agregar los valores
        //DB::table('professions')->truncate();
        //Activa revision de claves foraneas
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::table('professions')-> insert([
            'title' => 'Desarrollador Front-End'
        ]);

        DB::table('professions')-> insert([
            'title' => 'Desarrollador Back-End'
        ]);

        DB::table('professions')-> insert([
            'title' => 'Wed Developer'
        ]);
    }
}
