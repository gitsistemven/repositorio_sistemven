<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->bigInteger('id_categoria')->unsigned();
            $table->decimal('precio', $precision = 8, $scale = 2);
            $table->bigInteger('id_receta')->unsigned()->nullable();
            $table->timestamps();
        
            $table->foreign('id_categoria')->references('id')->on('catproductos')->onDelete("cascade");
            $table->foreign('id_receta')->references('id')->on('recetas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
