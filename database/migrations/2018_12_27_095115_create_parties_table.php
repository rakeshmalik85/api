<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->integer('type')->unsigned()->nullable();
            // $table->foreign('type')->refrences('id')->on('partytype');
            $table->string('gstin');
            $table->string('mobileno');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->boolean('enable');
        });

      //   Schema::table('party', function($table) {
      // $table->foreign('type')->refrences('id')->on('partytype');
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parties');
    }
}
