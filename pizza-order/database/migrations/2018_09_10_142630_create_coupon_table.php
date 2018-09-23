<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
            $table->increments('CouponID');
            $table->integer('OrderID')->unsigned();
            $table->string('CouponName', 100)->nullable();
            $table->integer('CouponCode')->length(10)->unsigned()->nullable();
            $table->decimal('CouponValue', 2,0)->unsigned()->nullable();
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
        Schema::dropIfExists('coupon');
    }
}
