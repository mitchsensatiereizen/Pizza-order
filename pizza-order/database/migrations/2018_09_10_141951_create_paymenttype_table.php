<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymenttypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymenttype', function (Blueprint $table) {
            $table->increments('PaymentID');
            $table->integer('OrderID')->unsigned();
            $table->string('PaymentTypeName', 100)->nullable();
            $table->string('PaymentTypeDescription', 100)->nullable();;
            $table->foreign('OrderID')->references('OrderID')->on('order');
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
        Schema::dropIfExists('paymenttype');
    }
}
