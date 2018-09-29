<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_products', function (Blueprint $table) {
            $table->integer('id_product_father')->unsigned();
            $table->integer('id_product_child')->unsigned();
            $table->integer('amount');
            $table->timestamps();


            $table->foreign('id_product_father')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_product_child')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_products');
    }
}
