<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('materiales')->insert([
            [
                'nombre' => 'arbol',
                'descripcion' => 'modelo 3d de arbol',
                'archivo' => null,
                'tipo_id' => 1
            ],
            [
                'nombre' => 'flor',
                'descripcion' => 'video de flores',
                'archivo' => null,
                'tipo_id' => 2
            ],
            [
                'nombre' => 'sistema solar',
                'descripcion' => 'animacion de sistema solar',
                'archivo' => null,
                'tipo_id' => 3
            ],
            [
                'nombre' => 'torre',
                'descripcion' => 'modelo 3d de torre',
                'archivo' => null,
                'tipo_id' => 1
            ],
            [
                'nombre' => 'plantas',
                'descripcion' => 'video de plantases',
                'archivo' => null,
                'tipo_id' => 2
            ],
            [
                'nombre' => 'gatito',
                'descripcion' => 'animacion de gatito',
                'archivo' => null,
                'tipo_id' => 3
            ],
        ]);

     }
}
