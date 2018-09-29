<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSellables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sellable_type')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->float('price',8,2);
            $table->timestamps();

            $table->foreign('id_sellable_type')->references('id')->on('sellable_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellables');
    }
}
