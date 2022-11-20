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
        Schema::create('insumos', function (Blueprint $table) {
            $table->engine="InnoDB";
           $table->bigIncrements('id');
           $table->string('nombre')->unique();
           $table->bigInteger('id_categoria')->unsigned();
           $table->bigInteger('id_unidadmedida')->unsigned();
           $table->decimal('unidadporempaque', $precision = 8, $scale = 2);
           $table->decimal('stock', $precision = 8, $scale = 2)->nullable();
           $table->decimal('minimo_inventario', $precision = 8, $scale = 2);
           $table->date('fecha_caducidad')->nullable();
           $table->timestamps();
           $table->foreign('id_unidadmedida')->references('id')->on('unidadmedidas')->onDelete("cascade");
           $table->foreign('id_categoria')->references('id')->on('catinsumos')->onDelete("cascade");
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
