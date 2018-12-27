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
            $table->increments('id');
            $table->string('name');
            $table->integer('catid')->unsigned();
            // $table->foreign('catid')->refrences('id')->on('category');
            $table->string('unit');
            $table->double('quantity');
            $table->double('buy_price');
            $table->double('sale_price');
            $table->boolean('enable');
        });

      //   Schema::table('products', function($table) {
      //   $table->foreign('catid')->references('id')->on('category');
      // });
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
