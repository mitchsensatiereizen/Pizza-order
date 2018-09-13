<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('AddressID');
            $table->integer('ZipcodeID')->unsigned();
            $table->string('AddressNumberSuffix', 100)->nullable();
            $table->string('AddressNumberPrefix', 100)->nullable();;
            $table->foreign('ZipcodeID')->references('ZipcodeID')->on('zipcodes');
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
        Schema::dropIfExists('addresses');
    }
}
