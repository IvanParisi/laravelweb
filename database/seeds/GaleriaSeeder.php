<?php

use Illuminate\Database\Seeder;

class GaleriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("galeria")->insert([
            [
              'id' => "1",
              'nombre' => "Dogo",
              'img' => 'img/dogo.jpg',
              'descripcion' => "Es un perro muy lindo",
              'user_id' => 1,

            ],
            [
                'id' => "2",
                'nombre' => "Felini",
                'img' => 'img/felini.jpg',
                'descripcion' => "Es un gato muy lindo",
                'user_id' => 1,

            ],
            [
                'id' => "3",
                'nombre' => "Kata",
                'img' => 'img/kata.jpg',
                'descripcion' => "Es una gata muy linda",
                'user_id' => 1,

            ]
        ]);
    }
}
