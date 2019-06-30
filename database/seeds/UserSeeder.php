<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert(
            [
                "id" => '1',
                'tipo_id' => '1',
                'name' => 'Admin',
                'email' => 'ivan.parisi@davinci.edu.ar',
                'password' => \Illuminate\Support\Facades\Hash::make("admin1234"),
                'created_at' => date("Y-m-d h:i:s",time())
            ]

        );
    }
}
