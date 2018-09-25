<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStatusSequence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_sequence', function (Blueprint $table) {
            $table->integer('id_current_status')->unsigned();
            $table->integer('id_next_status')->unsigned();
            $table->timestamps();

            $table->foreign('id_current_status')->references('id')->on('status')->onDelete('cascade');
            $table->foreign('id_next_status')->references('id')->on('status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_sequence');
    }
}
