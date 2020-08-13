<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Almacen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('descripcion');
            $table->decimal('existencia', 8, 2);
            $table->decimal('precio_compra', 8, 2);
            $table->decimal('precio_venta_si', 8, 2);
            $table->decimal('impuesto', 8, 2);
            $table->decimal('precio_venta_ci', 8, 2);
            $table->decimal('ganancia', 8, 2);
            $table->decimal('precio_final', 8, 2);
            $table->decimal('punto_reorden');
            $table->integer('id_proveedor')->nullable();
            $table->timestamps();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('almacen');
        /*
        Schema::table('almacen', function (Blueprint $table) {
            $table->dropForeign('posts_id_proveedor_foreign');
        });*/
    }
}