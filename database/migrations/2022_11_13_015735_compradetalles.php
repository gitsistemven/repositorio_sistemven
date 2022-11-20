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
        Schema::create('compradetalles', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_compra')->unsigned();
            $table->bigInteger('id_insumo')->unsigned();
            $table->decimal('unidadporempaque', $precision = 8, $scale = 2);
            $table->bigInteger('cantidad');       
            $table->decimal('total', $precision = 8, $scale = 2);
            $table->date('fecha_caducidad')->nullable();
            $table->timestamps();
        
           $table->foreign('id_compra')->references('id')->on('compras')->onDelete("cascade");
           $table->foreign('id_insumo')->references('id')->on('insumos')->onDelete("cascade");
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
