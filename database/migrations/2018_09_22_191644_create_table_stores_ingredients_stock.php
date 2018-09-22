<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStoresIngredientsStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores_ingredients_stock', function (Blueprint $table) {
          $table->integer('id_ingredient')->unsigned();
          $table->integer('id_store')->unsigned();
          $table->integer('amount');
          $table->timestamps();

          $table->foreign('id_ingredient')->references('id')->on('ingredients');//->onDelete('cascade');
          $table->foreign('id_store')->references('id')->on('stores');//->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores_ingredients_stock');
    }
}
