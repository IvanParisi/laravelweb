<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string("nombre",65);
            $table->string("imagen",70)->nullable();
            $table->string("descripcion");
            $table->double("precio",5,2);
            $table->integer("stock");
            $table->timestamps();

            $table->unsignedInteger("tipo_productos_id");
            $table->foreign("tipo_productos_id")->references("id")->on("tipo_productos")->onUpdate("cascade")->onDelete("no action");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
