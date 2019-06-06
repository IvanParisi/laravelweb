<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $nproductos = array("","Baby Cat Milk","Indoor Intense Hairball 34","Persian","Babydog Milk","Bulldog","Giant Adult","Giant Puppy","Miniature Schnauzer Puppy","Starter Mousse","Bebedero","Comedero",
            "Comedor Multi Feeder","Correa Para Perros","Jugete","Pelota Para Perros");





        for($i = 1; $i<= 15;$i++):
        DB::table("Productos")->insert
        ([


                "id" => $i,
                "nombre" => $nproductos[$i],
                "imagen" => "img/" . $nproductos[$i] . ".jpg",
                "descripcion" => $faker->realText(100,2),
                "precio" => $faker->numberBetween(250,1000),
                "tipo_productos_id" => $faker->numberBetween(1,3),
                "created_at" => date("Y-m-d h:i:s",time()),

        ]);
        endfor;
    }
}
