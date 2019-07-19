<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart__product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('carts_id')->unsigned();
            $table->foreign('carts_id')->references('id')->on('carts');
            $table->bigInteger('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products');
            $table->integer('qty');
            $table->integer('total');
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
        Schema::dropIfExists('cart__product');
    }
}
