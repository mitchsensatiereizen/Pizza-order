<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->increments('StoreID');
            $table->integer('ZipcodeID')->unsigned();
            $table->string('StoreName', 100)->nullable();
            $table->string('StoreStreet', 100)->nullable();
            $table->integer('StoreHousenumber')->length(4)->unsigned()->nullable();
            $table->string('StoreCity', 100)->nullable();
            $table->string('StoreEmail', 100)->nullable();
            $table->string('StoreCoordination', 100)->nullable();
            $table->foreign('ZipcodeID')->references('ZipcodeID')->on('zipcode');
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
        Schema::dropIfExists('store');
    }
}
