<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('nombre',30);
            $table->string('img',200);
            $table->string('descripcion',150);
            $table->unsignedBigInteger("user_id",false);
            $table->timestamps();

            $table->foreign("user_id")->references('id')->on('users')->onUpdate("cascade")->onDelete("no action");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria');
    }
}
