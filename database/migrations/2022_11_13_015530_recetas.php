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
        Schema::create('recetas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_insumo')->unsigned();
            $table->bigInteger('id_unidadmedida')->unsigned();
            $table->decimal('cantidad', $precision = 8, $scale = 2);
            $table->decimal('cantidad_consumida', $precision = 8, $scale = 2);
            $table->timestamps();
        
            $table->foreign('id_insumo')->references('id')->on('insumos')->onDelete("cascade");
            $table->foreign('id_unidadmedida')->references('id')->on('unidadmedidas')->onDelete("cascade");
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
