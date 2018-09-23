<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('id_product')->unsigned();
            $table->integer('id_order')->unsigned();
            $table->text('amount');
            $table->float('price',8,2);
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('products');//->onDelete('cascade');
            $table->foreign('id_order')->references('id')->on('orders');//->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}