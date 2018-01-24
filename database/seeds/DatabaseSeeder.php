<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dd(ProfessionSeeder::class);
        // $this->call(UsersTableSeeder::class);

        $this->truncateTables([
            'professions',
            'users'
        ]);

        $this->call(ProfessionSeeder::class);

        $this->call(UserSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        //Desactiva revision de claves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        //Vacia la tabla antes de agregar los valores
        foreach ($tables as $table)
        {
            DB::table($table)->truncate();
        }
        //Activa revision de claves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}