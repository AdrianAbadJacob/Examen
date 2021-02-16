<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class alumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'id' => '3',
            'nombre' => 'Mariana',
            'apellidos' => 'Nieves Agudo',
            'dni' => '15frrwe5wr',
        ]);
    }
}
