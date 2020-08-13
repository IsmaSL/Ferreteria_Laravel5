<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id_venta');
            $table->integer('id_cliente');
            $table->decimal('impuesto', 8, 2);
            $table->decimal('total_venta', 8, 2);
            $table->string('tipo_venta');
            $table->string('estado');
            $table->timestamps();
            $table->foreign('id_cliente')->references('id_cliente')->on('contacto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venta');
    }
}