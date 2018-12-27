<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutstandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outstandings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('fcode');
            $table->integer('type')->unsigned();
            // $table->foreign('type')->refrences('id')->on('invoicetype');
            $table->DateTime('vdate');
            $table->integer('partyid');
            $table->double('debit');
            $table->double('credit');
            $table->double('amount');
            $table->double('discount');
            $table->double('interest');
            $table->string('invcode');
            $table->double('invamount');
            $table->datetime('addedon');
            $table->string('addedby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outstandings');
    }
}
