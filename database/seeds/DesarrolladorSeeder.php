<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesarrolladorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desarrolladores')->insert([
            'nombres'=> 'Jose',
            'apellidos'=> 'Martinez',
            'email'=> 'Martinez@gmail.com',
        ]);

        DB::table('desarrolladores')->insert([
            'nombres'=> 'Richard',
            'apellidos'=> 'Taicus',
            'email'=> 'rich@gmail.com',
        ]);

        DB::table('desarrolladores')->insert([
            'nombres'=> 'Jhonatan',
            'apellidos'=> 'Mora',
            'email'=> 'jhms@gmail.com',
        ]);

    }
}
