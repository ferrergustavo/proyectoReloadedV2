<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_p');
            $table->longtext('description');
            $table->integer('price');
            $table->integer('stock');
            $table->longtext('img_p');
            $table->longtext('img2')->nullable();
            $table->longtext('img3')->nullable();
            $table->longtext('img4')->nullable();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->boolean('new')->nullable();
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
        Schema::dropIfExists('products');
    }
}
