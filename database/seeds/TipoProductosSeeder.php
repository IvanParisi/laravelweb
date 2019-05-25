<?php

use Illuminate\Database\Seeder;

class TipoProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tipo_productos")->insert([
            [
                "id" => 1,
                "nombre" => "Gato",
                "created_at" => date("Y-m-d h:i:s",time()),
            ],
            [
                "id" => 2,
                "nombre" => "Perro",
                "created_at" => date("Y-m-d h:i:s",time()),
            ],
            [
                "id" => 3,
                "nombre" => "Varios",
                "created_at" => date("Y-m-d h:i:s",time()),
            ],
        ]);
    }
}
