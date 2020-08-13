<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_venta');
            $table->integer('id_venta');
            $table->integer('id_producto');
            $table->decimal('cantidad', 8, 3);
            $table->decimal('precio_venta_uni', 8, 2);
            $table->decimal('descuento', 8,2);
            $table->decimal('sub_total', 8,2);
            $table->timestamps();
            $table->foreign('id_producto')->references('id_producto')->on('almacen');
            $table->foreign('id_venta')->references('id_venta')->on('venta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_venta');
    }
}
