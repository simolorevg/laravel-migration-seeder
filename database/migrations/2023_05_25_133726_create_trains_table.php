<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agency');
            $table->string('departure');
            $table->string('arrivals');
            $table->dateTime('time_departure');
            $table->dateTime('time_arrival');
            $table->string('train_code');
            $table->integer('carriages');
            $table->boolean('in_time');
            $table->boolean('late');
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
        Schema::dropIfExists('trains');
    }
};
