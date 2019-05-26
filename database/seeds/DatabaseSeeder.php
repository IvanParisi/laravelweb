<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoProductosSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(ClientesSeeder::class);
    }
}
