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
        //
        DB::table('users')->insert([
            'profession_id' => 2,
            'name' => 'Marcos Sánchez',
            'email' => 'draver13@gmail.com',
            'password' => bcrypt('marcos.sanchez')
        ]);
    }
}
