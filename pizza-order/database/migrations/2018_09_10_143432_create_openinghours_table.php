<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeninghoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('openinghour', function (Blueprint $table) {
            $table->increments('OpeningHourID');
            $table->integer('StoreID')->unsigned();
            $table->string('OpeningDay', 100)->nullable();
            $table->time('OpeningStart', 7)->nullable();
            $table->time('OpeningEnd', 7)->nullable();
            $table->string('OpeningComment', 100)->nullable();
            $table->foreign('StoreID')->references('StoreID')->on('store');
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
        Schema::dropIfExists('openinghour');
    }
}
