<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_header');
            $table->foreign('id_header')->references('id')->on('invoice_headers');            
            $table->unsignedInteger('id_from');
            $table->foreign('id_from')->references('id')->on('directions_froms');            
            $table->unsignedInteger('id_to');
            $table->foreign('id_to')->references('id')->on('directions_tos');            
            $table->double('value_kilometer');
            $table->double('cost_trip');            
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
        Schema::dropIfExists('invoice_details');
    }
}
