<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i<=100;$i++)
        {
            DB::table("clientes")->insert([
                "id"       => $i,
                "nombre"   => $faker->firstName,
                "apellido" => $faker->lastName,
                "email"    => $faker->freeEmail,
                "telefono" => $faker->phoneNumber,
                "dni"      => $faker->numberBetween(10000000,40000000)

            ]);
        }
    }
}
