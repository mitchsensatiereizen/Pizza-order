<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->increments('ZipcodeID');
            $table->integer('TownshipID')->unsigned();
            $table->string('Zipcode', 6)->nullable();
            $table->string('Street', 100)->nullable();
            $table->integer('NumberStart')->length(4)->unsigned()->nullable();
            $table->integer('NumberEnd')->length(4)->unsigned()->nullable();
            $table->string('City', 100)->nullable();
            $table->foreign('TownshipID')->references('TownshipID')->on('township');

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
        Schema::dropIfExists('zipcodes');
    }
}
