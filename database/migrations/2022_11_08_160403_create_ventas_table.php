<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->enum('tipoComprobante', ['BOLETA', 'FACTURA', 'PROFORMA']);
            $table->string('serie', 3);
            $table->string('numero', 8);
            $table->datetime('fecha');
            $table->decimal('ventaTotal', 8, 2);
            $table->decimal('descuento', 8, 2)->default(0.00);
            $table->decimal('subTotal', 8, 2);
            $table->decimal('impuestoAfecto', 8, 2)->default(0.00);
            $table->decimal('impuestoInafecto', 8, 2)->default(0.00);
            $table->decimal('total', 8, 2);
            $table->enum('estado', ['EMITIDO', 'APROBADO', 'PENDIENTE', 'RECHAZADO'])->default('EMITIDO');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idUsuario');
            $table->string('codHash')->default('');
            $table->timestamps();
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->foreign('idUsuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}