<?php

use Illuminate\Database\Seeder;

class TipoUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tipo_usuarios")->insert([
            [
                "id" => 1,
                "name" => "admin",
                "display_name" => 'Administrador',
                "created_at" => date("Y-m-d h:i:s",time()),
            ],
            [
                "id" => 2,
                "nombre" => "user",
                "display_name" => 'Normal User',
                "created_at" => date("Y-m-d h:i:s",time()),
            ],
            [
                "id" => 3,
                "nombre" => "profe",
                "display_name" => 'El Profesor',
                "created_at" => date("Y-m-d h:i:s",time()),
            ],
        ]);
    }
}
