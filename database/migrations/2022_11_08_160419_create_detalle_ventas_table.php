<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idVenta');
            $table->unsignedBigInteger('idProducto');
            $table->decimal('cantidad', 8, 2);
            $table->decimal('precio', 8, 2);
            $table->decimal('descuento', 8, 2)->default(0.00);
            $table->decimal('importe', 8, 2);
            $table->timestamps();
            $table->foreign('idVenta')->references('id')->on('ventas');
            $table->foreign('idProducto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ventas');
    }
}