<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('razon_social');
            $table->string('cuit_cuil')->nullable();
            $table->unsignedInteger('id_condicion_iva');
            $table->foreign('id_condicion_iva')->references('id')->on('condicion_ivas');
            $table->double('special_discount')->nullable();
            $table->string('calle_facturacion')->nullable();
            $table->string('numero_facturacion')->nullable();
            $table->string('piso_facturacion')->nullable();
            $table->string('depto_facturacion')->nullable();
            $table->string('area_facturacion')->nullable();
            $table->string('nombre_contacto_facturacion')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
