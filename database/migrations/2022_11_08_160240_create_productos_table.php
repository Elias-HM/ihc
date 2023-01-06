<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->unique();
            $table->decimal("stock", 8, 2);
            $table->decimal("precio", 8, 2);
            // $table->date("fechaVencimiento")->nullable();
            $table->string("codBarras", 20)->unique()->nullable();
            $table->unsignedBigInteger('idUnidadMedida');
            $table->unsignedBigInteger('idProveedor');
            $table->enum('estado', ['Activo', 'Inactivo', 'Sin Stock'])->default('Activo');
            // $table->enum('estadoImpuesto', ['Afecto', 'Inafecto'])->default('Afecto');
            // $table->decimal("porcentajeImpuesto", 3, 2)->default(0.18);
            $table->timestamps();
            $table->foreign('idUnidadMedida')->references('id')->on('unidad_medidas');
            $table->foreign('idProveedor')->references('id')->on('proveedors');
        });
        DB::table('productos')->insert(["nombre" => "EL TROME CEBO RATICIDA 40gr", "stock" => "98.00", "precio" => "4.00", "codBarras" => null, "idUnidadMedida" => "6", "idProveedor" => "1", "estado" => "Activo"]);
        // DB::table('productos')->insert(["nombre" => "EL TROME CEBO RATICIDA 40g", "stock" => "98.00", "precio" => "4.00", "fechaVencimiento" => "2024-12-30", "codBarras" => null, "idUnidadMedida" => "9", "idProveedor" => "1", "estado" => "Activo"]);
        // DB::table('productos')->insert(["nombre" => "EL TROME CEBO RATICIDA 40r", "stock" => "98.00", "precio" => "4.00", "fechaVencimiento" => "2024-12-30", "codBarras" => null, "idUnidadMedida" => "9", "idProveedor" => "1", "estado" => "Activo"]);
        // DB::table('productos')->insert(["nombre" => "EL TROME CEBO RATICIDA 4gr", "stock" => "00.00", "precio" => "4.00", "fechaVencimiento" => "2021-12-30", "codBarras" => null, "idUnidadMedida" => "9", "idProveedor" => "1", "estado" => "Inactivo"]);
        // DB::table('productos')->insert(["nombre" => "EL TROME CEBO RATICIDA 0gr", "stock" => "98.00", "precio" => "4.00", "fechaVencimiento" => "2024-12-30", "codBarras" => null, "idUnidadMedida" => "9", "idProveedor" => "1", "estado" => "Activo"]);
        // DB::table('productos')->insert(["nombre" => "EL TROME CEBO RATICIDA40gr", "stock" => "98.00", "precio" => "4.00", "fechaVencimiento" => "2024-12-30", "codBarras" => null, "idUnidadMedida" => "9", "idProveedor" => "1", "estado" => "Activo"]);
        // DB::table('productos')->insert(["nombre" => "EL TROME CEBO RATICID 40gr", "stock" => "00.00", "precio" => "4.00", "fechaVencimiento" => "2021-12-30", "codBarras" => null, "idUnidadMedida" => "9", "idProveedor" => "1", "estado" => "Inactivo"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
