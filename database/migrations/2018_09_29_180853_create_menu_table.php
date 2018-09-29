<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
          $table->integer('id_store')->unsigned();
          $table->integer('id_sellable')->unsigned();
          $table->float('price',8,2);
          $table->boolean('available')->default(1);
          $table->timestamps();

          $table->foreign('id_store')->references('id')->on('stores');//->onDelete('cascade');
          $table->foreign('id_sellable')->references('id')->on('sellables');//->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
