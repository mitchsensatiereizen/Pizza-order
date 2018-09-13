<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('CustomersID');
            $table->integer('AddressID')->unsigned();
            $table->string('CustomerName', 100)->nullable();
            $table->string('CustomerEmail', 100)->nullable();
            $table->integer('CustomerPhone')->length(10)->unsigned()->nullable();
            $table->foreign('AddressID')->references('AddressID')->on('addresses');
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
        Schema::dropIfExists('customers');
    }
}
