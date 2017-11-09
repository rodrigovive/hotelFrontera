<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('mount');
            $table->integer('bed');
            $table->integer('days');
            $table->string('observation');
            $table->integer('room_id')->unsigned()->index()->nullable();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->integer('guest_id')->unsigned()->index()->nullable();
            $table->foreign('guest_id')->references('id')->on('guests');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
