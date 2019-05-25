<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->date("fecha");
            $table->tinyInteger("cantidad_de_productos",false,true);
            $table->unsignedInteger("productos_id");
            $table->unsignedInteger("clientes_id");

            $table->foreign("productos_id")->references("id")->on("productos")->onUpdate("cascade")->onDelete("no action");
            $table->foreign("clientes_id")->references("id")->on("clientes")->onUpdate("cascade")->onDelete("no action");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
