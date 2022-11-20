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
        Schema::create('ventadetalles', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_venta')->unsigned();
            $table->bigInteger('id_producto')->unsigned();
            $table->bigInteger('cantidad');
            $table->decimal('precio', $precision = 8, $scale = 2);
            $table->decimal('descuento', $precision = 8, $scale = 2);
            $table->timestamps();
        
            $table->foreign('id_venta')->references('id')->on('ventas')->onDelete("cascade");
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete("cascade");
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
