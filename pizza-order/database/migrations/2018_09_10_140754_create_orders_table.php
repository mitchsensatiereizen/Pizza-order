<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('OrderID');
            $table->integer('CustomersID')->unsigned();
            $table->decimal('OrderPrice', 5,2)->unsigned()->nullable();
            $table->double('TaxValue', 10)->nullable();;
            $table->decimal('TotalPrice', 5,2)->unsigned()->nullable();
            $table->string('IpAddress', 20)->nullable();
            $table->string('OrderComment', 200)->nullable();
            $table->foreign('CustomersID')->references('CustomersID')->on('customers');
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
        Schema::dropIfExists('orders');
    }
}
