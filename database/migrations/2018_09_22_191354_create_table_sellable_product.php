<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSellableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellable_product', function (Blueprint $table) {
            $table->integer('id_product')->unsigned();
            $table->integer('id_sellable')->unsigned();
            $table->integer('amount');
            $table->timestamps();


            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_sellable')->references('id')->on('sellables')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellable_product');
    }
}
