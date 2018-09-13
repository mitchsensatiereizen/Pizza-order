<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categorie', function (Blueprint $table) {
            $table->increments('ProductCategorieID');
            $table->integer('ProductID')->unsigned();
            $table->integer('CategorieID')->unsigned();
            $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->foreign('CategorieID')->references('CategorieID')->on('categorie');
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
        Schema::dropIfExists('product_categorie');
    }
}
