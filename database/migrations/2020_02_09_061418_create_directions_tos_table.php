<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions_tos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');   
            $table->string('calle');
            $table->string('numero');
            $table->string('piso')->nullable();
            $table->string('depto')->nullable();
            $table->string('area')->nullable();
            $table->string('sector')->nullable();
            $table->string('comentarios')->default('Sin comentarios');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();       
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directions_tos');
    }
}
