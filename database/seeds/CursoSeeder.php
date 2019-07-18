<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('cursos')->insert([
                'curso'=> 'Miskito',
                'descripcion'=> 'Este es un curso Miskito',
                'imagen'=> 'link imagen'
            ]);
            DB::table('cursos')->insert([
                'curso'=> 'Mayagna',
                'descripcion'=> 'Este es un curso Mayagna',
                'imagen'=> 'link imagen'

            ]);
            DB::table('cursos')->insert([
                'curso'=> 'Español',
                'descripcion'=> 'Este es un curso Español',
                'imagen'=> 'link imagen'

            ]);
    }
}
