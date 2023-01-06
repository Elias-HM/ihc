<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->unique();
            $table->string("documento", 11)->unique();
            $table->string("direccion")->nullable();
            $table->string("telefono", 11)->nullable();
            $table->string("email")->nullable();
            $table->timestamps();
        });
        DB::table('proveedors')->insert(["nombre" => "BAYER", "documento" => "20759337241", "direccion" => "Av. Los artesanos S/N", "telefono" => "926648921", "email" => "bayer@gmail.com"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
