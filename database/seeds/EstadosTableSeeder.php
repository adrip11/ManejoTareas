<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    public function run()
    {
        
        DB::table('estados')->insert(
            [
                'Nombre' => 'Por Hacer',
            ]);
        DB::table('estados')->insert(
            [
                'Nombre' => 'En Proceso',
            ]);
        DB::table('estados')->insert(
            [
                'Nombre' => 'Terminadas',
            ]);
    }
}
