<?php

use Illuminate\Database\Seeder;

class TipomaterialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipomateriales')->insert([
            [
                'tipomaterial' => "Modelo 3D"
            ],
            [
                'tipomaterial' => "Video"
            ],
            [
                'tipomaterial' => "Animacion"
            ]
        ]);
    }
}
