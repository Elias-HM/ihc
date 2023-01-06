<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->enum("tipoDocumento", ['DNI', 'RUC']);
            $table->string("documento", 11)->unique();
            $table->string("direccion")->nullable();
            $table->string("telefono", 12)->nullable();
            $table->string("email")->unique()->nullable();
            $table->timestamps();
        });

        // DB::table('clientes')->insert(["nombre" => "Clientes - Varios", "tipoDocumento" => "DNI", "documento" => "00000000", "direccion" => "", "telefono" => "", "email" => ""]);
        DB::table('clientes')->insert(["nombre" => "Elias Huashuayo Miranda", "tipoDocumento" => "DNI", "documento" => "75914564", "direccion" => "Av. peru 123", "telefono" => "926322896", "email" => "huashuayo16@gmail.com"]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
