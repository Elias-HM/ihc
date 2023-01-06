<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUnidadMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_medidas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->unique();
            $table->string("abreviatura")->unique();
            $table->enum("estado", ['Activo', 'Inactivo'])->default('Activo');
            $table->timestamps();
        });

        DB::table('unidad_medidas')->insert(["nombre" => "BOBINAS", "abreviatura" => "4A", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "BALDE", "abreviatura" => "BJ", "estado" => "Activo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "BARRILES", "abreviatura" => "BLL", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "BOLSA", "abreviatura" => "BG", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "BOTELLAS", "abreviatura" => "BO", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CAJA", "abreviatura" => "BX", "estado" => "Activo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CARTONES", "abreviatura" => "CT", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CENTIMETRO CUADRADO", "abreviatura" => "CMK", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CENTIMETRO CUBICO", "abreviatura" => "CMQ", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CENTIMETRO LINEAL", "abreviatura" => "CMT", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CIENTO DE UNIDADES", "abreviatura" => "CEN", "estado" => "Activo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CILINDRO", "abreviatura" => "CY", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "CONOS", "abreviatura" => "CJ", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "DOCENA", "abreviatura" => "DZN", "estado" => "Activo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "DOCENA POR 10**6", "abreviatura" => "DZP", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "FARDO", "abreviatura" => "BE", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "GALON AMERICANO (3,7", "abreviatura" => "GLL", "estado" => "Activo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "GALON INGLES (4,5459", "abreviatura" => "GLI", "estado" => "Inactivo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "GRAMO", "abreviatura" => "GRM", "estado" => "Activo"]);
        DB::table('unidad_medidas')->insert(["nombre" => "GRUESA", "abreviatura" => "GRO", "estado" => "Inactivo"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_medidas');
    }
}
